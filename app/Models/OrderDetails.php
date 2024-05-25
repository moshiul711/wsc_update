<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cart;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderInvoice;

class OrderDetails extends Model
{
    use HasFactory;
    private static $orderDetails, $product,$stock_amount,$sales_count;
    public static function storeOrderDetails($orderId)
    {
        $data = [];
        foreach (Cart::content() as $key => $item)
        {
            self::$orderDetails = new OrderDetails();
            self::$orderDetails->order_id = $orderId;
            self::$orderDetails->product_id = $item->id;
            self::$orderDetails->product_image = $item->options->image;
            self::$orderDetails->product_name = $item->name;
            self::$orderDetails->product_price = $item->price;
            self::$orderDetails->product_quantity = $item->qty;
            self::$orderDetails->save();
            Cart::remove($item->rowId);

            self::$product = Product::find($item->id);
            self::$stock_amount = self::$product->stock - $item->qty;
            self::$product->stock = self::$stock_amount;
            self::$product->save();

            $data[$key]['id'] = self::$orderDetails->id;
            $data[$key]['product_id'] = $item->id;
            $data[$key]['product_name'] = $item->name;
            $data[$key]['product_price'] = $item->price;
            $data[$key]['product_quantity'] = $item->qty;
            $data[$key]['product_image'] = $item->options->image;
        }
        return $data;
    }

    public static function updateProductStock($id)
    {
        self::$orderDetails = OrderDetails::where('order_id',$id)->get();
        foreach (self::$orderDetails as $detail)
        {
            self::$product = Product::find($detail->product_id);
            self::$stock_amount = self::$product->stock + $detail->product_quantity;
            self::$product->stock = self::$stock_amount;
            self::$product->save();
        }
    }
    public static function updateSalesCount($id)
    {
        self::$orderDetails = OrderDetails::where('order_id',$id)->get();
        foreach (self::$orderDetails as $detail)
        {
            self::$product = Product::find($detail->product_id);
            self::$sales_count = self::$product->sales_count + $detail->product_quantity;
            self::$product->sales_count = self::$sales_count;
            self::$product->save();
        }
    }

    public static function deleteOrderDetail($id)
    {
        self::$orderDetails = OrderDetails::where('order_id',$id)->get();
        foreach (self::$orderDetails as $detail)
        {
            $detail->delete();
        }
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
