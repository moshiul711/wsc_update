<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Symfony\Component\String\s;

class ProductOtherImage extends Model
{
    use HasFactory;
    private static $productOtherImage,$productOtherImages,$imageUrl,$image,$imageName,$imageExt,$imageFullName,$imagePath;

    public static function storeOtherImages($otherImages,$id)
    {
        foreach ($otherImages as $otherImage)
        {
            self::$imageUrl = self::getImageUrl($otherImage);
            self::$productOtherImage = new ProductOtherImage();
            self::$productOtherImage->product_id = $id;
            self::$productOtherImage->image = self::$imageUrl;
            self::$productOtherImage->save();
        }
    }

    public static function getImageUrl($otherImage)
    {
        self::$imageFullName = $otherImage->getClientOriginalName();
        self::$imagePath = 'uploads/product-other-image/';
        $otherImage->move(self::$imagePath,self::$imageFullName);
        self::$imageUrl = self::$imagePath.self::$imageFullName;
        return self::$imageUrl;
    }

    public static function updateOtherImages($otherImages,$id)
    {
        self::deleteOtherImages($id);
        self::storeOtherImages($otherImages,$id);
    }

    public static function deleteOtherImages($id)
    {
        self::$productOtherImages = ProductOtherImage::where('product_id',$id)->get();
        foreach (self::$productOtherImages as $productOtherImage)
        {
            if (file_exists($productOtherImage->image))
            {
                unlink($productOtherImage->image);
            }
            $productOtherImage->delete();
        }
    }
}
