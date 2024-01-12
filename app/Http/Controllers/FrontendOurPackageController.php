<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\touristinquirymodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FrontendOurPackageController extends Controller
{
    public function ourpackage (){
        $packages = Package::all();
        return view('frontend.pages.ourpackage', compact('packages'));
    }
    public function aboutus (){

        return view('frontend.pages.aboutus');
    }
    
}


