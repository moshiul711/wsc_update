<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    private $brands, $brand;
    public function index()
    {
        $this->brands = Brand::all();
        return view('admin.brand.manage',['brands'=>$this->brands]);
    }

    public function create()
    {
        return view('admin.brand.create');
    }

    public function store(Request $request)
    {
        Brand::createNewBrand($request);
        return back()->with('message','New Brand Added Successfully...');
    }

    public function edit($id)
    {
        $this->brand = Brand::find($id);
        return view('admin.brand.edit',['brand'=>$this->brand]);
    }

    public function update(Request $request,$id)
    {
        Brand::updateBrand($request,$id);
        return redirect('/brand/manage')->with('message','Brand Updated Successfully...');
    }

    public function delete($id)
    {
        $this->brand = Brand::find($id);
        $this->brand->delete();
        return redirect('/brand/manage')->with('message','Brand Info. Deleted Successfully...');
    }
}
