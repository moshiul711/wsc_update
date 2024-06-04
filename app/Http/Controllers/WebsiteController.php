<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Coupon;
use App\Models\Customer;
use App\Models\CustomerOtp;
use App\Models\Message;
use App\Models\ProductReview;
use App\Models\Slider;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Models\Product;
use function Intervention\Image\exif;
use Str;
use Session;

class WebsiteController extends Controller
{
    public $featured_products, $message, $categories,$category,$subCategory, $product, $products,$customer,$reviews,$coupons,$relatedProducts,$sliders;

    public function index(Request $request)
    {

        $coupons = Coupon::where('status',1)->latest()->get();
        $categories = Category::orderBy('id', 'desc')->paginate(1);
        $products = Product::all();
        $sliders = Slider::all();
        $featured_products = Product::where('featured_status',1)->latest()->get();
        if ($request->ajax())
        {
            $view = view('website.home.data',compact('categories','products'))->render();
            return response()->json(['html'=>$view]);
        }
        return view('website.home.index',compact('categories','coupons','sliders','featured_products','products'));
    }

    public function about()
    {
        return view('website.home.about');
    }

    public function privacy()
    {
        return view('website.home.privacy');
    }
    public function refund()
    {
        return view('website.home.refund');
    }
    public function delivery()
    {
        return view('website.home.delivery');
    }

    public function terms()
    {
        return view('website.home.terms');
    }


    public function productDetail($id,$name)
    {
        $this->product = Product::where(['id' =>$id])->first();
        if (!$this->product)
        {
            return view('website.home.error');
        }
        else
        {
//            $this->reviews = ProductReview::where('product_id',$id)->get();
            $this->product->hit_count = $this->product->hit_count+1;
            $this->product->save();
            $this->relatedProducts = Product::where('sub_category_id',$this->product->sub_category_id)->get();
            return view('website.product.detail',[
                'product' => $this->product,
                'relatedProducts' => $this->relatedProducts
            ]);
        }
    }

    public function productQuickView()
    {
//        return response()->json(Product::where('id',$_GET['id'])->first());
        $this->product = Product::where('id',$_GET['id'])->first();
        return view('website.product.quick-view',['product'=>$this->product]);
    }

    public function productReview(Request $request, $id)
    {
        ProductReview::storeReview($request,$id);
        return back()->with('message','Thanks To Share Your Review...');
    }

    public function productCategory($name)
    {
        $coupons = Coupon::where('status',1)->get();
        $category = Category::where(['name'=>$name])->first();
        $products = Product::where('category_id',$category->id)->paginate(10);
        return view('website.product.category-show',compact('coupons','category','products'));
    }
    public function productSubcategory($slug)
    {
        $coupons = Coupon::where('status',1)->get();
        $subCategory = SubCategory::where(['name'=>$slug])->first();
        $products = Product::where('sub_category_id',$subCategory->id)->paginate(10);
        return view('website.product.subCategory-show',compact('coupons','subCategory','products'));
    }

    public function contact()
    {
        return view('website.home.contact');
    }

    public function message(Request $request)
    {
        $this->message = Message::storeMessage($request);
        return back()->with('contact','Thank You for Contacting Us. We will Contact You Shortly');
    }

    public function referEarn()
    {
        return view('website.home.refer');
    }
    public function faq()
    {
        return view('website.home.faqs');
    }

    public function productSearch(Request $request)
    {
        $this->coupons = Coupon::where('status',1)->get();
        $this->products = Product::where('name','LIKE',"%{$request->search}%")->orWhere('short_description','LIKE',"%{$request->search}%")->get();
        if (count($this->products)>0){
            return view('website.product.show',['products'=>$this->products,'coupons'=>$this->coupons]);
        }
        else{
            return view('website.home.error');
        }
    }
}
