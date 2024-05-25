<?php

namespace App\Http\Controllers;

use App\Models\Courier;
use Illuminate\Http\Request;

class CourierController extends Controller
{
    public function create()
    {
        return view('admin.courier.create');
    }

    public function store(Request $request)
    {
        Courier::storeCourier($request);
        return back()->with('message','New Courier Added Successfully...');
    }

    public function index()
    {
        return view('admin.courier.manage',['couriers'=>Courier::all()]);
    }

    public function edit($id)
    {
        return view('admin.courier.edit',['courier'=>Courier::find($id)]);
    }
    public function update(Request $request, $id)
    {
        Courier::updateCourier($request,$id);
        return redirect('/courier/manage/')->with('message','Courier Info. updated Successfully...');
    }
    public function delete($id)
    {
        Courier::find($id)->delete();
        return back()->with('message','Courier Info. deleted Successfully...');
    }
}
