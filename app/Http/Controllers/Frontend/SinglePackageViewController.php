<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class SinglePackageViewController extends Controller
{
    public function singlepackageview ($id){
        $packages=Package::all();
        // dd ($packages->all();
        $singlepackage=Package::find($id);
        // dd ($singlepackage->name);
       return view('frontend.pages.singlepackageview',compact('packages','singlepackage'));
    }

    public function select()
    {

        return view('frontend.pages.SelectTourist.select');

    }



}
