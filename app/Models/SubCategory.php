<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    private static $subCategory;

    public static function createNewSubCategory($request)
    {
        self::$subCategory = new SubCategory();
        self::$subCategory->name = $request->name;
        self::$subCategory->status = $request->status;
        self::$subCategory->category_id = $request->category_id;
        return self::$subCategory->save();
    }

    public static function updateSubCategory($request,$id)
    {
        self::$subCategory = SubCategory::find($id);
        self::$subCategory->name = $request->name;
        self::$subCategory->status = $request->status;
        return self::$subCategory->save();
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
