<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categories, $category;
    public function index()
    {
        $this->categories = Category::all();
        return view('admin.category.manage',['categories'=>$this->categories]);
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        Category::createNewCategory($request);
        return back()->with('message','New Category Added Successfully...');
    }

    public function edit($id)
    {
        $this->category = Category::find($id);
        return view('admin.category.edit',['category'=>$this->category]);
    }

    public function update(Request $request,$id)
    {
        Category::updateCategory($request,$id);
        return redirect('/category/manage')->with('message','Category Updated Successfully...');
    }

    public function delete($id)
    {
        $this->category = Category::find($id);
        if (file_exists($this->category->icon))
        {
            unlink($this->category->icon);
        }
        $this->category->delete();
        return redirect('/category/manage')->with('message','Category Info. Deleted Successfully...');
    }
}
