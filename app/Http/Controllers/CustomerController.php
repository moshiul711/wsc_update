<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\CustomerOtp;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductReview;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;

class CustomerController extends Controller
{
    public function generate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required|numeric|digits:11|exists:customers,phone'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }
        $user = Customer::where('phone', $request->phone)->first();

        /* Generate An OTP */
        $userOtp = $this->generateOtp($request->phone);

        $url = 'https://sms.dinisoftbd.com:7790/sendtext';
        $apiKey = '83f4751692fdf3f6';
        $secretKey = '33b1e9a8';
        $callerID = 'wsc';
        $toUser = $request->phone;
        $messageContent = 'Your login OTP is: ' . $userOtp->otp;
        $response = Http::withoutVerifying()->get($url, [
            'apikey' => $apiKey,
            'secretkey' => $secretKey,
            'callerID' => $callerID,
            'toUser' => $toUser,
            'messageContent' => $messageContent,
        ]);
        $body = $response->body();
        return response()->json(['user_id' => $user->id]);
    }

    public function generateOtp($mobile_no)
    {
        $user = Customer::where('phone', $mobile_no)->first();

        /* User Does not Have Any Existing OTP */
        $userOtp = CustomerOtp::where('user_id', $user->id)->latest()->first();

        $now = now();

        if ($userOtp && $now->isBefore($userOtp->expire_at)) {
            return $userOtp;
        }

        /* Create a New OTP */
        return CustomerOtp::create([
            'user_id' => $user->id,
            'otp' => rand(123456, 999999),
            'expire_at' => $now->addMinutes(10)
        ]);
    }

    public function loginWithOtp(Request $request)
    {
        /* Validation */

        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:customers,id',
            'otp' => 'required|exists:customer_otps,otp'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }


        /* Validation Logic */
        $userOtp = CustomerOtp::where('user_id', $request->user_id)->where('otp', $request->otp)->first();

        $now = now();
        if (!$userOtp) {
            return response()->json(['error' => 'Your OTP is not correct']);
        } else if ($userOtp && $now->isAfter($userOtp->expire_at)) {
            return response()->json(['error' => 'Your OTP has been expired']);
        }
        $user = Customer::whereId($request->user_id)->first();

        if ($user) {

            $userOtp->update([
                'expire_at' => now()
            ]);

            Session::put('customer_id', $user->id);
            Session::put('customer_name', $user->first_name);
            Session::put('customer_city', $user->city);

            return response()->json(['success' => 'Login Successfully']);
        }

    }


    public function user_list()
    {
        return response()->json(Product::all());
    }

    public $email, $password, $customer, $reviews, $orders, $order, $check;

    public function index()
    {
        $this->orders = Order::where('customer_id', Session::get('customer_id'))->orderBy('id', 'desc')->get();
        return view('customer.home.index', ['orders' => $this->orders]);
    }

    public function login(Request $request)
    {
        $this->customer = Customer::where('email', $request->email)->first();

        if ($this->customer) {
            if (password_verify($request->password, $this->customer->password)) {
                Session::put('customer_id', $this->customer->id);
                Session::put('customer_name', $this->customer->first_name);
                Session::put('customer_city', $this->customer->city);
                return back()->with('message', 'You Successfully Login..');
            } else {
                return back()->with('logout', 'Sorry ... your password is invalid.');
            }
        } else {
            return back()->with('logout', 'Sorry ... your email or mobile is invalid.');
        }
    }

    public function register(Request $request)
    {
        $this->customer = Customer::register($request);
        if ($this->customer) {
            Session::put('customer_id', $this->customer->id);
            Session::put('customer_name', $this->customer->first_name);
        }
        return back()->with('message', 'Your Credentials are Successfully Registered');
    }

    public function profile()
    {
        $this->customer = Customer::find(Session::get('customer_id'));
        return view('customer.home.profile', ['customer' => $this->customer]);
    }

    public function update(Request $request)
    {
        $this->customer = Customer::updateProfile($request);
        Session::put('customer_id', $this->customer->id);
        Session::put('customer_name', $this->customer->first_name);
//        Session::put('customer_image', $this->customer->image);
        Session::put('customer_city', $this->customer->city);
        return back()->with('message', 'Thanks For Updating Your Profile...');
    }

    public function logout()
    {
        Session::forget('customer_id');
        Session::forget('customer_name');
//        Session::forget('customer_image');
        Session::forget('customer_city');

        return redirect('/')->with('logout', 'Your are logged out.');;
    }

    public function review(Request $request, $product_id)
    {
        ProductReview::storeReview($request, $product_id);
        return back()->with('message', 'Thanks For Your Review...');
    }

    public function allReview()
    {
        $this->reviews = ProductReview::where('customer_id', Session::get('customer_id'))->get();
        return view('customer.home.review', ['reviews' => $this->reviews]);
    }

    public function order()
    {
        $this->orders = Order::where('customer_id', Session::get('customer_id'))->get();
        return view('customer.home.orders', ['orders' => $this->orders]);
    }

    public function orderDetail($id)
    {
        $this->customer = Session::get('customer_id');
        $this->order = Order::where(['order_number' => $id, 'customer_id' => $this->customer])->first();
        if (!$this->order) {
            return view('website.home.error');
        }
        return view('customer.home.orderDetail', ['order' => $this->order]);
    }

    // Logged User Password Change
    public function changePassword()
    {
        return view('customer.home.password');
    }

    public function updatePassword(Request $request)
    {
        $this->customer = Customer::find(Session::get('customer_id'));
        if (password_verify($request->password, $this->customer->password)) {
            if ($request->new_password == $request->confirm_new_password) {
                Customer::updatePassword($this->customer->id, $request->new_password);
                return back()->with('message', 'Password Changed Successfully');
            } else {
                return back()->with('logout', 'New Password & Confirm Password not Matched');
            }
        } else {
            return back()->with('logout', 'Your Password Is Not Matched to Our Database');
        }
    }

    public function forgotPassword()
    {
        return view('website.home.forgotPassword');
    }

    public function forgotEmailCheck(Request $request)
    {
        $this->customer = Customer::forgetPassword($request);
        if ($this->customer) {
            return view('website.home.changePassword', ['customer' => $this->customer]);
        } else {
            return back()->with('message', 'Your Information Not Found');
        }
    }

    public function recoveryPassword(Request $request, $id)
    {
        if ($request->new_password == $request->confirm_password) {
            $this->check = Customer::updatePassword($id, $request->new_password);
            return redirect('/')->with('message', 'Password Changed Successfully. Please Login.');
        } else {
            return back();
        }
    }


}
