<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CourierController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\SliderController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[WebsiteController::class,'index'])->name('home');
Route::get('/contact-us',[WebsiteController::class,'contact'])->name('contact-us');
Route::get('/about',[WebsiteController::class,'about'])->name('about');
Route::get('/privacy',[WebsiteController::class,'privacy'])->name('privacy');
Route::get('/refund',[WebsiteController::class,'refund'])->name('refund');
Route::get('/delivery',[WebsiteController::class,'delivery'])->name('delivery');
Route::post('/contact-message',[WebsiteController::class,'message'])->name('contact.message');
Route::get('/refer-earn',[WebsiteController::class,'referEarn'])->name('refer-earn');
Route::get('/faq',[WebsiteController::class,'faq'])->name('faq');
Route::get('/terms',[WebsiteController::class,'terms'])->name('terms');
Route::post('/coupon-apply',[CouponController::class,'apply'])->name('coupon.apply');

//Product on Home Page
Route::get('/{name}',[WebsiteController::class,'productCategory'])->name('product.category');
Route::get('/{slug}',[WebsiteController::class,'productSubcategory'])->name('product.subcategory');
Route::get('/product-detail/{id}/{name}',[WebsiteController::class,'productDetail'])->name('product.detail');
Route::get('/product-quick-view',[WebsiteController::class,'productQuickView'])->name('productQuickView');
Route::post('/product-review/{id}',[WebsiteController::class,'productReview'])->name('product.review');
Route::get('/search',[WebsiteController::class,'productSearch'])->name('product.search');

//Cart Module
//Route::post('/cart-add/',[CartController::class,'cartAdd'])->name('cart.add');
Route::get('/cart-add',[CartController::class,'cartAdd'])->name('cart.add');
Route::get('/cart-show',[CartController::class,'cartShow'])->name('cart.show');
Route::get('/cart-destroy',[CartController::class,'cartDestroy'])->name('cart.destroy');
Route::get('/cart-delete',[CartController::class,'cartDelete'])->name('cart.delete');
Route::get('/cart-update',[CartController::class,'cartUpdate'])->name('cart.update');
//Checkout Module
Route::get('/checkout',[CheckoutController::class,'index'])->name('checkout');
Route::get('/delivery',[CheckoutController::class,'delivery'])->name('delivery');
Route::post('/order-place',[CheckoutController::class,'placeOrder'])->name('order-place');
Route::get('/order-place',[CheckoutController::class,'successOrder'])->name('order-place');

//Customer Module
Route::middleware('customer')->group(function (){
    Route::get('/customer',[CustomerController::class,'index'])->name('customer');
    Route::get('/customer-profile',[CustomerController::class,'profile'])->name('customer.profile');
    Route::post('/customer-update',[CustomerController::class,'update'])->name('customer.update');
    Route::get('/customer-dashboard',[CustomerController::class,'dashboard'])->name('customer.dashboard');
    Route::get('/customer-order',[CustomerController::class,'order'])->name('customer.order');
    Route::get('/customer/order-detail/{id}',[CustomerController::class,'orderDetail'])->name('customer.order.detail');
    Route::get('/customer-payment',[CustomerController::class,'payment'])->name('customer.payment');
    Route::get('/customer-review/{id}',[CustomerController::class,'review'])->name('customer.review');
    Route::get('/customer-reviews/',[CustomerController::class,'allReview'])->name('customer.reviews');
    Route::get('/customer-change-password',[CustomerController::class,'changePassword'])->name('customer.change.password');
    Route::post('/customer-password-update',[CustomerController::class,'updatePassword'])->name('customer.password.update');
});
Route::post('/customer-login',[CustomerController::class,'login'])->name('customer.login');
Route::get('/customer-logout',[CustomerController::class,'logout'])->name('customer.logout');
Route::post('/customer-register',[CustomerController::class,'register'])->name('customer.register');
Route::get('/forgot-password',[CustomerController::class,'forgotPassword'])->name('forgot-password');
Route::post('/forgot-password',[CustomerController::class,'forgotEmailCheck'])->name('forgot-password');
Route::post('/update-password/{id}',[CustomerController::class,'recoveryPassword'])->name('update-password');
Route::post('/generate',[CustomerController::class,'generate'])->name('otp.generate');
Route::post('otp/login', [CustomerController::class,'loginWithOtp'])->name('otp.getlogin');

//Admin Module
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');
//    Category Module
    Route::get('/category/manage',[CategoryController::class,'index'])->name('category.manage');
    Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
    Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
    Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
    Route::post('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');
    Route::get('/category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');
    //    Sub Category Module
    Route::get('/sub-category/manage',[SubCategoryController::class,'index'])->name('sub-category.manage');
    Route::get('/sub-category/create',[SubCategoryController::class,'create'])->name('sub-category.create');
    Route::post('/sub-category/store',[SubCategoryController::class,'store'])->name('sub-category.store');
    Route::get('/sub-category/edit/{id}',[SubCategoryController::class,'edit'])->name('sub-category.edit');
    Route::post('/sub-category/update/{id}',[SubCategoryController::class,'update'])->name('sub-category.update');
    Route::get('/sub-category/delete/{id}',[SubCategoryController::class,'delete'])->name('sub-category.delete');
    //    Brand Module
    Route::get('/brand/manage',[BrandController::class,'index'])->name('brand.manage');
    Route::get('/brand/create',[BrandController::class,'create'])->name('brand.create');
    Route::post('/brand/store',[BrandController::class,'store'])->name('brand.store');
    Route::get('/brand/edit/{id}',[BrandController::class,'edit'])->name('brand.edit');
    Route::post('/brand/update/{id}',[BrandController::class,'update'])->name('brand.update');
    Route::get('/brand/delete/{id}',[BrandController::class,'delete'])->name('brand.delete');
    //    Unit Module
    Route::get('/unit/manage',[UnitController::class,'index'])->name('unit.manage');
    Route::get('/unit/create',[UnitController::class,'create'])->name('unit.create');
    Route::post('/unit/store',[UnitController::class,'store'])->name('unit.store');
    Route::get('/unit/edit/{id}',[UnitController::class,'edit'])->name('unit.edit');
    Route::post('/unit/update/{id}',[UnitController::class,'update'])->name('unit.update');
    Route::get('/unit/delete/{id}',[UnitController::class,'delete'])->name('unit.delete');
    //Courier Module
    Route::get('/courier/create',[CourierController::class,'create'])->name('courier.create');
    Route::post('/courier/store',[CourierController::class,'store'])->name('courier.store');
    Route::get('/courier/manage',[CourierController::class,'index'])->name('courier.manage');
    Route::get('/courier/edit/{id}',[CourierController::class,'edit'])->name('courier.edit');
    Route::post('/courier/update/{id}',[CourierController::class,'update'])->name('courier.update');
    Route::get('/courier/delete/{id}',[CourierController::class,'delete'])->name('courier.delete');
//    Coupon Module
    Route::get('/coupon/create',[CouponController::class,'create'])->name('coupon.create');
    Route::post('/coupon/store',[CouponController::class,'store'])->name('coupon.store');
    Route::get('/coupon/index',[CouponController::class,'index'])->name('coupon.index');
    Route::get('/coupon/edit/{id}',[CouponController::class,'edit'])->name('coupon.edit');
    Route::post('/coupon/update/{id}',[CouponController::class,'update'])->name('coupon.update');
    Route::get('/coupon/delete/{id}',[CouponController::class,'delete'])->name('coupon.delete');
//    Product Module -- Resource Controller
    Route::resource('product',ProductController::class);
//    Order Module
    Route::get('/admin/order',[AdminController::class,'allOrder'])->name('order.manage');
    Route::get('admin/order-detail/{id}',[AdminController::class,'orderDetail'])->name('admin.order-detail');
    Route::get('admin/order-edit/{id}',[AdminController::class,'orderEdit'])->name('admin.order-edit');
    Route::post('/admin/order-update/{id}', [AdminController::class, 'orderUpdate'])->name('admin.update-order');
    Route::get('admin/order-invoice/{id}',[AdminController::class,'orderInvoice'])->name('admin.order-invoice');
    Route::get('admin/order-download-order-invoice/{id}',[AdminController::class,'orderDownload'])->name('admin.order-download-order-invoice');
    Route::get('admin/order-delete/{id}',[AdminController::class,'orderDelete'])->name('admin.order-delete');
    Route::get('admin/order-search',[AdminController::class,'orderSearch'])->name('order.search');
    Route::get('admin/order-search',[AdminController::class,'orderSearchResult'])->name('order.search');
//    Slider Module
    Route::get('/slider/manage',[SliderController::class,'index'])->name('slider.manage');
    Route::get('/slider/create',[SliderController::class,'create'])->name('slider.create');
    Route::post('/slider/store',[SliderController::class,'store'])->name('slider.store');
    Route::get('/slider/edit/{id}',[SliderController::class,'edit'])->name('slider.edit');
    Route::post('/slider/update/{id}',[SliderController::class,'update'])->name('slider.update');
    Route::get('/slider/delete/{id}',[SliderController::class,'delete'])->name('slider.delete');
    //User Module
    Route::get('/user/delete/{id}',[AdminController::class,'userDelete'])->name('user.delete');
    Route::get('/get-sub-category-by-category', [ProductController::class, 'getCategoryBySubCategory'])->name('get-sub-category-by-category');
});

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END


