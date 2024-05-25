<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function League\Flysystem\move;

class Category extends Model
{
    use HasFactory;
    private static $category, $image, $image_name, $image_ext, $image_full_name, $image_path, $image_url;

    public static function createNewCategory($request)
    {
        self::$image_url = self::categoryImage($request);
        self::$category = new Category();
        self::saveCategoryInfo($request,self::$image_url,self::$category);
    }

    public static function categoryImage($request)
    {
        self::$image = $request->file('icon');
        self::$image_name = substr(md5(time()),0,8);
        self::$image_ext = self::$image->getClientOriginalExtension();
        self::$image_full_name = self::$image_name.'.'.self::$image_ext;
        self::$image_path = 'uploads/category-images/';
        self::$image->move(self::$image_path,self::$image_full_name);
        return self::$image_url = self::$image_path.self::$image_full_name;
    }

    public static function saveCategoryInfo($request,$imageUrl,$category)
    {
        $category->name = $request->name;
        $category->icon = $imageUrl;
        $category->status = $request->status;
        return $category->save();
    }

    public static function updateCategory($request,$id)
    {
        self::$category = Category::find($id);
        if ($request->file('icon'))
        {
            if (file_exists(self::$category->icon))
            {
                unlink(self::$category->icon);
            }
            self::$image_url = self::categoryImage($request);
        }
        else
        {
            self::$image_url = self::$category->icon;
        }
        self::saveCategoryInfo($request, self::$image_url,self::$category);
    }

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
