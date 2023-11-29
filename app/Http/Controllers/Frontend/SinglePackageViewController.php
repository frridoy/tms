<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class SinglePackageViewController extends Controller
{
    public function singlepackageview ($id){
        $packages=Package::all();
        $singlepackage=Package::find($id);
       return view('frontend.pages.singlepackageview',compact('packages','singlepackage'));
    }
}
