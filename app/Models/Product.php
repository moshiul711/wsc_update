<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    private static $product,$imageUrl,$image,$imageName,$imageExt,$imageFullName,$imagePath;

    public static function storeProduct($request)
    {
        self::$product = new Product();
        self::$imageUrl = self::uploadProductImage($request);
        return self::saveProductInfo(self::$product,$request,self::$imageUrl);
    }

    public static function uploadProductImage($request)
    {
        self::$image = $request->file('image');
        self::$imageName = substr(md5(time()),0,8);
        self::$imageExt = self::$image->getClientOriginalExtension();
        self::$imageFullName = self::$imageName.'.'.self::$imageExt;
        self::$imagePath = 'uploads/product-image/';
        self::$image->move(self::$imagePath,self::$imageFullName);
        return self::$imageUrl = self::$imagePath.self::$imageFullName;
    }

    public static function saveProductInfo($product,$request,$imageUrl)
    {
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
        $product->brand_id = $request->brand_id;
        $product->unit_id = $request->unit_id;
        $product->name = $request->name;
        $product->model = $request->model;
        $product->replacement = $request->replacement;
        $product->service = $request->service;
        $product->regular_price = $request->regular_price;
        $product->cost = $request->costing_price;
        $product->offer_price = $request->offer_price;
        $product->stock = $request->stock;
        $product->status = $request->status;
        $product->featured_status = $request->featured_status;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->image = $imageUrl;
        $product->save();
        return $product;
    }


    public static function updateProduct($request,$id)
    {
        self::$product = Product::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$product->image))
            {
                unlink(self::$product->image);
            }
            self::$imageUrl = self::uploadProductImage($request);
        }
        else
        {
            self::$imageUrl = self::$product->image;
        }
        return self::saveProductInfo(self::$product,$request,self::$imageUrl);
    }

    public static function deleteProduct($id)
    {
        self::$product = Product::find($id);
        if (file_exists(self::$product->image))
        {
            unlink(self::$product->image);
        }
        return self::$product->delete();
    }


    public function otherImages()
    {
        return $this->hasMany(ProductOtherImage::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function reviews()
    {
        return $this->hasMany(ProductReview::class);
    }
}
