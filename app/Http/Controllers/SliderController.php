<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    private $slider, $sliders;
    public function index()
    {
        $this->sliders = Slider::all();
        return view('admin.slider.manage',['sliders'=>$this->sliders]);
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(Request $request)
    {
        Slider::createNewSlider($request->file('image'));
        return back()->with('message','New Slider Image Added Successfully...');
    }

    public function edit($id)
    {
        $this->slider = Slider::find($id);
        return view('admin.slider.edit',['slider'=>$this->slider]);
    }

    public function update(Request $request,$id)
    {
        Slider::updateSlider($request->file('image'),$id);
        return redirect('/slider/manage')->with('message','Slider Iamge Updated Successfully...');
    }

    public function delete($id)
    {
        $this->slider = Slider::find($id);
        if (file_exists($this->slider->image))
        {
            unlink($this->slider->image);
        }
        $this->slider->delete();
        return redirect('/slider/manage')->with('message','Slider Image Deleted Successfully...');
    }
}
