<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Session;

class Customer extends Model
{
    use HasFactory;
    public static $customer,$imageUrl,$image,$imageName,$imageExt,$imageFullName,$imagePath,$check;
    public static function register($request)
    {
        self::$customer = new Customer();
        self::$customer->first_name = $request->first_name;
        self::$customer->last_name = $request->last_name;
        self::$customer->email = $request->email;
        self::$customer->phone = $request->phone;
        if (isset($request->password)){
            self::$customer->password = bcrypt($request->password);
        }
        else{
            self::$customer->password = bcrypt($request->phone);
        }

//        self::$customer->image = 'website/uploadsaccount.png';
        self::$customer->save();
        return self::$customer;
    }

    public static function updateProfile($request)
    {
        self::$customer = Customer::find(Session::get('customer_id'));
//        if ($request->file('image'))
//        {
//            if (file_exists(self::$customer->image))
//            {
//                unlink(self::$customer->image);
//            }
//            self::$imageUrl = self::uploadCustomerImage($request);
//        }
//        else
//        {
//            self::$imageUrl = self::$customer->image;
//        }
        self::$customer->first_name = $request->first_name;
        self::$customer->last_name = $request->last_name;
        self::$customer->email = $request->email;
        self::$customer->phone = $request->phone;
        self::$customer->address = $request->address;
        self::$customer->city = $request->city;
        self::$customer->postal_code = $request->postal_code;
//        self::$customer->image = self::$imageUrl;
        self::$customer->save();
        return self::$customer;
    }

    public static function uploadCustomerImage($request)
    {
        self::$image = $request->file('image');
        self::$imageName = substr(md5(time()),0,8);
        self::$imageExt = self::$image->getClientOriginalExtension();
        self::$imageFullName = self::$imageName.'.'.self::$imageExt;
        self::$imagePath = 'uploads/customer-image/';
        self::$image->move(self::$imagePath,self::$imageFullName);
        return self::$imageUrl = self::$imagePath.self::$imageFullName;
    }

    public static function forgetPassword($request)
    {
        self::$check = DB::table('customers')
            ->where('email', $request->email_phone)
            ->orWhere('phone', $request->email_phone)
            ->first();
        return self::$check;
    }

    public static function updatePassword($id,$password)
    {
        self::$customer = Customer::find($id);
        self::$customer->password = bcrypt($password);
        self::$customer->save();
        return self::$customer;
    }


}

