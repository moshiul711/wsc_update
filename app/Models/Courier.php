<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
    use HasFactory;

    private static $courier;
    public static function storeCourier($request)
    {
        self::$courier = new Courier();
        self::$courier->name = $request->name;
        self::$courier->charge = $request->charge;
        return self::$courier->save();
    }

    public static function updateCourier($request,$id)
    {
        self::$courier = Courier::find($id);
        self::$courier->name = $request->name;
        self::$courier->charge = $request->charge;
        return self::$courier->save();
    }
}
