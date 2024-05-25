<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    private $subCategories, $subCategory, $categories;
    public function index()
    {
        $this->subCategories = SubCategory::all();
        return view('admin.sub_category.manage',['subCategories'=>$this->subCategories]);
    }

    public function create()
    {
        $this->categories = Category::all();
        return view('admin.sub_category.create',['categories'=>$this->categories]);
    }

    public function store(Request $request)
    {
        SubCategory::createNewSubCategory($request);
        return back()->with('message','New Sub Category Added Successfully...');
    }

    public function edit($id)
    {
        $this->subCategory = SubCategory::find($id);
        $this->categories = Category::all();
        return view('admin.sub_category.edit',['subCategory'=>$this->subCategory,'categories'=>$this->categories]);
    }

    public function update(Request $request,$id)
    {
        SubCategory::updateSubCategory($request,$id);
        return redirect('/sub-category/manage')->with('message','Sub Category Updated Successfully...');
    }

    public function delete($id)
    {
        $this->subCategory = SubCategory::find($id);
        $this->subCategory->delete();
        return redirect('/sub-category/manage')->with('message','Sub Category Info. Deleted Successfully...');
    }
}
