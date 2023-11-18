<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class TourPackagesController extends Controller
{
    public function tpackage()
    {

        $packages = Package::all();
        return view('admin.pages.TPackage.tpackage', compact('packages'));
    }

    public function createform()
    {

        return view('admin.pages.TPackage.form');
    }
    public function store(Request $request)
    {

        $validate=Validator::make($request->all(),[
            'name'=>'required',
            'code'=>'required',
            'caender'=>'required',
            'description'=>'required',
            'price'=>'required',
            'image'=>'required',
        ]);

        if($validate->fails())
        {
            return redirect()->back()->with('myError',$validate->getMessageBag());
        }

        $fileName=null;
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();

            $file->storeAs('/uploads',$fileName);

        }

        Package::create([
            'name' => $request->name,
            'code' => $request->code,
            'calender' => $request->calendar,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $fileName

        ]);
        return redirect()->route('tourpackages');
    }
}
