<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class ProductReview extends Model
{
    use HasFactory;
    private static $review;
    public static function storeReview($request,$product_id)
    {
        self::$review = new ProductReview();
        self::$review->customer_id = Session::get('customer_id');
        self::$review->product_id = $product_id;
        self::$review->review = $request->review;
        self::$review->save();
        return self::$review;
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
