<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Delivery extends Model
{
    use HasFactory;
    private static $delivery;
    public static function storeDeliveryInfo($request)
    {

        self::$delivery = new Delivery();
        self::$delivery->customer_id = Session::get('customer_id');
        self::$delivery->first_name = $request->first_name;
        self::$delivery->last_name = $request->last_name;
        self::$delivery->email = $request->email;
        self::$delivery->phone = $request->phone;
        self::$delivery->address = $request->address;
        self::$delivery->city = $request->city;
        self::$delivery->postal_code = $request->postal_code;
        self::$delivery->additional_info = $request->additional_info;
        self::$delivery->save();
        return self::$delivery;
    }

    public static function updateDeliveryInfo($request,$id)
    {
        self::$delivery = Delivery::find($id);
        self::$delivery->phone = $request->phone;
        self::$delivery->city = $request->city;
        self::$delivery->address = $request->address;
        self::$delivery->additional_info = $request->additional_info;
        self::$delivery->save();
        return self::$delivery;
    }
}
