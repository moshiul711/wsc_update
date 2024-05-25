<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Cart;
use Session;

class Order extends Model
{
    use HasFactory;
    private static $order,$orderInfo=[];
    public static function storeOrderInfo($request,$deliveryId)
    {
        self::$order = new Order();
        self::$order->order_number = rand('1000000000','999999999999999');
        self::$order->customer_id = Session::get('customer_id');
        self::$order->delivery_id = $deliveryId;
        self::$order->delivery_charge = Session::get('delivery_charge');
        self::$order->order_date = date('Y-m-d');
        self::$order->order_timestamp = strtotime(date('Y-m-d'));
        self::$order->order_total = Session::get('order_total');
        self::$order->discount = Session::get('discount');
        Session::forget('coupon');
        self::$order->payment_amount = Session::get('payment_amount');
        self::$order->payment_method = $request->payment;

        if ($request->payment == 'online')
        {
            self::$order->transaction_id = uniqid();
        }
        self::$order->save();
        return self::$order;
    }

    public static function updateOrder($request,$id)
    {
        self::$order = Order::find($id);
        if ($request->order_status == 'pending')
        {
            self::$order->order_status = $request->order_status;
        }
        elseif ($request->order_status == 'processing')
        {
            self::$order->order_status = $request->order_status;
            self::$order->payment_status = $request->order_status;
            self::$order->delivery_status = $request->order_status;
            self::$order->delivery_charge = $request->delivery_charge;
            self::$order->discount = $request->discount;
            self::$order->payment_amount = ($request->delivery_charge+$request->order_total) - $request->discount;
            self::$order->courier_id = $request->courier_id;
        }
        elseif ($request->order_status == 'complete')
        {
            self::$order->order_status = $request->order_status;
            self::$order->payment_status = $request->order_status;
            self::$order->delivery_status = $request->order_status;
            self::$order->delivery_charge = $request->delivery_charge;
            self::$order->discount = $request->discount;
            self::$order->payment_amount = ($request->delivery_charge+$request->order_total) - $request->discount;
            self::$order->courier_id = $request->courier_id;
        }
        elseif ($request->order_status == 'cancel')
        {
            self::$order->order_status = $request->order_status;
            self::$order->payment_status = $request->order_status;
            self::$order->delivery_status = $request->order_status;
        }
        self::$order->save();
        return self::$order;

    }

    public static function deleteOrder($id)
    {
        self::$order = Order::find($id);
        self::$order->delete();
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function delivery()
    {
        return $this->belongsTo(Delivery::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetails::class);
    }


    public static function orderTotal()
    {
//        $month = '2023-12';
        self::$orderInfo['order_total'] = DB::table('orders')->sum('order_total');
        self::$orderInfo['order_count'] = DB::table('orders')->count('id');
        self::$orderInfo['visitor'] = DB::table('products')->sum('hit_count');
        self::$orderInfo['users'] = Customer::all();
        self::$orderInfo['products'] = Product::all();
//        self::$orderInfo['month'] = DB::table('orders')->where('order_date','LIKE',"%{$month}%")->sum('order_total');

        return self::$orderInfo;
    }

    public static function orderTotalByMonth($request)
    {
        $result = "{$request->year}".'-'."{$request->month}";
        self::$orderInfo['month_orders'] = DB::table('orders')->where('order_date','LIKE',"%{$result}%")->get();
        self::$orderInfo['month_total'] = DB::table('orders')
            ->where('order_date','LIKE',"%{$result}%")
            ->where('order_status','complete')
            ->sum('order_total');
        return self::$orderInfo;
    }

}
