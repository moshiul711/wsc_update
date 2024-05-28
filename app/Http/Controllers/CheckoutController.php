<?php

namespace App\Http\Controllers;

use App\Mail\ExecutiveMail;
use App\Mail\OrderInvoice;
use App\Models\Customer;
use App\Models\Delivery;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Library\SslCommerz\SslCommerzNotification;
use Session;
use DB;


class CheckoutController extends Controller
{
    public $customer, $deliveryInfo,$orderInfo,$orderDetailsInfo;
    public $url,$apikey,$secretKey,$callerId,$toUser,$messageContent,$response,$body,$data,$mailTo;
    public function index()
    {
//        if (Session::get('customer_id'))
//        {
//            $this->customer = Customer::find(Session::get('customer_id'));
//            return view('website.checkout.index',['customer'=>$this->customer]);
//        }
//        else
//        {
//            return redirect('/');
//        }
//        Session::forget('delivery');
        if(Session::get('customer_id'))
        {
            $this->customer = Customer::find(Session::get('customer_id'));
        }
        else
        {
            $this->customer = '';
        }
        return view('website.checkout.index',['customer'=>$this->customer]);
    }

    public function delivery()
    {
        Session::forget('delivery');
        if ($_GET['address'] == 'dhaka'){
            Session::put('delivery',70);
            return response(70);
        }
        else{
            Session::put('delivery',130);
            return response(130);
        }
    }

    public function placeOrder(Request $request)
    {
        $this->sendCustomerSMS($request->phone);
        $this->sendExecutiveSMS();
        if(Session('customer_id')){
            $this->deliveryInfo = Delivery::storeDeliveryInfo($request);
        }
        else{
            $customer = DB::table('customers')
                ->where('email','=',$request->email)
                ->orWhere('phone','=', $request->phone)
                ->first();
            if ($customer){
                Session::put('customer_id', $customer->id);
                Session::put('customer_name', $customer->first_name);
                Session::put('customer_city', $customer->city);
            }
            else{
                $this->customer = Customer::register($request);
                Session::put('customer_id', $this->customer->id);
                Session::put('customer_name', $this->customer->first_name);
                Session::put('customer_city', $this->customer->city);
            }
            $this->deliveryInfo = Delivery::storeDeliveryInfo($request);
        }

        $this->orderInfo = Order::storeOrderInfo($request,$this->deliveryInfo->id);
        $this->orderDetailsInfo = OrderDetails::storeOrderDetails($this->orderInfo->id);

        $this->mailTo = $request->email;
        Mail::To($this->mailTo)->send(new OrderInvoice($this->orderInfo));
        Mail::To('mushippingline@gmail.com')->send(new ExecutiveMail($this->orderInfo));

        if ($request->payment == 'cod')
        {
            $orderDetails = OrderDetails::where('order_id',$this->orderInfo->id)->get();
            return view('website.checkout.order-complete',[
                'order' => $this->orderInfo,
                'details' => $orderDetails
            ]);
        }
        else
        {
            $post_data = array();
            $post_data['total_amount'] = $this->orderInfo->payment_amount; # You cant not pay less than 10
            $post_data['currency'] = "BDT";
            $post_data['tran_id'] = $this->orderInfo->transaction_id; // tran_id must be unique

            # CUSTOMER INFORMATION
            $post_data['cus_name'] = $request->first_name.' '.$request->last_name;
            $post_data['cus_email'] = $request->email;
            $post_data['cus_add1'] = $request->address;
            $post_data['cus_add2'] = "";
            $post_data['cus_city'] = "";
            $post_data['cus_state'] = "";
            $post_data['cus_postcode'] = "";
            $post_data['cus_country'] = "Bangladesh";
            $post_data['cus_phone'] = $request->phone;
            $post_data['cus_fax'] = "";

            # SHIPMENT INFORMATION
            $post_data['ship_name'] = "Store Test";
            $post_data['ship_add1'] = "Dhaka";
            $post_data['ship_add2'] = "Dhaka";
            $post_data['ship_city'] = "Dhaka";
            $post_data['ship_state'] = "Dhaka";
            $post_data['ship_postcode'] = "1000";
            $post_data['ship_phone'] = "";
            $post_data['ship_country'] = "Bangladesh";

            $post_data['shipping_method'] = "NO";
            $post_data['product_name'] = "Computer";
            $post_data['product_category'] = "Goods";
            $post_data['product_profile'] = "physical-goods";

            # OPTIONAL PARAMETERS
            $post_data['value_a'] = "ref001";
            $post_data['value_b'] = "ref002";
            $post_data['value_c'] = "ref003";
            $post_data['value_d'] = "ref004";

            $sslc = new SslCommerzNotification();
            # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
            $payment_options = $sslc->makePayment($post_data, 'hosted');

            if (!is_array($payment_options)) {
                print_r($payment_options);
                $payment_options = array();
            }
        }
    }

    public function sendCustomerSMS($phone)
    {
        $url = 'https://sms.dinisoftbd.com:7790/sendtext';
        $apiKey = '83f4751692fdf3f6';
        $secretKey = '33b1e9a8';
        $callerID = 'wsc';
        $toUser = $phone;
        $messageContent = 'Thank you for placing an order with us. You will receive a phone call to verify your order. We appreciate your co-operation - Workstation Communication';
        $response = Http::withoutVerifying()->get($url, [
            'apikey' => $apiKey,
            'secretkey' => $secretKey,
            'callerID' => $callerID,
            'toUser' => $toUser,
            'messageContent' => $messageContent,
        ]);
        $body = $response->body();
        $data = json_decode($body, true);
    }

    public function sendExecutiveSMS()
    {
        $url = 'https://sms.dinisoftbd.com:7790/sendtext';
        $apiKey = '83f4751692fdf3f6';
        $secretKey = '33b1e9a8';
        $callerID = 'wsc';
        $toUser = '01893791757';
        $messageContent = 'Dear Authority, A Order Has Been Placed From WSC. Please Look Forward It.';
        $response = Http::withoutVerifying()->get($url, [
            'apikey' => $apiKey,
            'secretkey' => $secretKey,
            'callerID' => $callerID,
            'toUser' => $toUser,
            'messageContent' => $messageContent,
        ]);
        $body = $response->body();
        $data = json_decode($body, true);
    }
}
