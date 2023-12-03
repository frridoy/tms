<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class FrontendOurPackageController extends Controller
{
    public function ourpackage (){
        $packages = Package::all();
        return view('frontend.pages.ourpackage', compact('packages'));
    }
}
