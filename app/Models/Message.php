<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    private static $message;

    public static function storeMessage($request)
    {
        self::$message = new Message();
        self::$message->name = $request->name;
        self::$message->email = $request->email;
        self::$message->phone = $request->phone;
        self::$message->message = $request->message;
        self::$message->save();
    }
}
