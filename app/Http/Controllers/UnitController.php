<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    private $units, $unit;
    public function index()
    {
        $this->units = Unit::all();
        return view('admin.unit.manage',['units'=>$this->units]);
    }

    public function create()
    {
        return view('admin.unit.create');
    }

    public function store(Request $request)
    {
        Unit::createNewUnit($request);
        return back()->with('message','New Unit Added Successfully...');
    }

    public function edit($id)
    {
        $this->unit = Unit::find($id);
        return view('admin.unit.edit',['unit'=>$this->unit]);
    }

    public function update(Request $request,$id)
    {
        Unit::updateUnit($request,$id);
        return redirect('/unit/manage')->with('message','Unit Updated Successfully...');
    }

    public function delete($id)
    {
        $this->unit = Unit::find($id);
        $this->unit->delete();
        return redirect('/unit/manage')->with('message','Unit Info. Deleted Successfully...');
    }
}
