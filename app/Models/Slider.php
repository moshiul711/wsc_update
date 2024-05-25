<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    private static $slider, $image, $imageName, $imageExt, $image_full_name, $image_path, $image_url;

    public static function createNewSlider($images)
    {
        foreach ($images as $image)
        {
            self::$image_path = self::getImageUrl($image);
            self::$slider = new Slider();
            self::$slider->image = self::$image_path;
            self::$slider->save();
        }
        return self::$slider;
    }

    public static function getImageUrl($image)
    {
        self::$imageName = substr(md5(time()),0,8);
        self::$imageExt = $image->getClientOriginalExtension();
        self::$image_full_name = self::$imageName.'.'.self::$imageExt;
        self::$image_path = 'uploads/slider-images/';
        $image->move(self::$image_path,self::$image_full_name);
        self::$image_url = self::$image_path.self::$image_full_name;
        return self::$image_url;
    }



    public static function updateSlider($request,$id)
    {
        self::$slider = Slider::find($id);
        if ($request)
        {
            if (file_exists(self::$slider->image))
            {
                unlink(self::$slider->image);
            }
            self::$image_url = self::getImageUrl($request);
        }
        else
        {
            self::$image_url = self::$slider->image;
        }

        self::$slider->image = self::$image_url;
        self::$slider->save();
    }

}
