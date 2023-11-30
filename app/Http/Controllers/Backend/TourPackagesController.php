<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\locationmodel;
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
    public function delete($id){
     $package= Package::find($id);
     if ($package){
        $package->delete();
     }
     notify()->success('Tour Package Delete Sucessfully.');
     return redirect()->back();
    }
    public function view($id){
        $package=Package::find($id);
        return view('admin.pages.Tpackage.view', compact('package'));
        }

      public function edit($id){
      $package=Package::find($id);
      return view('admin.pages.Tpackage.edit', compact('package'));
     }
     public function update(Request $request,$id){
    $package=Package::find($id);
    if ($package){
        $fileName=$package->image;
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$fileName);

        }
        $package->update([
            'name' => $request->name,
            'code' => $request->code,
            'duration' => $request->duration,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $fileName

        ]);
        notify()->success('Tour Package Update Sucessfully.');
        return redirect()->route('tourpackages');
    }

}



    public function store(Request $request)
    {

        $validate=Validator::make($request->all(),[
            'name'=>'required',
            'code'=>'required',
            'duration'=>'required',
            'description'=>'required',
            'price'=>'required',
            // 'image'=>'required',
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
            'duration' => $request->duration,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $fileName

        ]);
        
        return redirect()->route('tourpackages');
    }
}
