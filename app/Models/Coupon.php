<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    private static $coupon;
    public static function storeCoupon($request)
    {
        self::$coupon = new Coupon();
        self::$coupon->code = $request->code;
        self::$coupon->amount = $request->amount;
        self::$coupon->order_amount = $request->order_amount;
        self::$coupon->status = $request->status;
        self::$coupon->save();
        return self::$coupon;
    }
    public static function updateCoupon($request,$id)
    {
        self::$coupon = Coupon::find($id);
        self::$coupon->code = $request->code;
        self::$coupon->amount = $request->amount;
        self::$coupon->order_amount = $request->order_amount;
        self::$coupon->status = $request->status;
        self::$coupon->save();
        return self::$coupon;
    }
}
