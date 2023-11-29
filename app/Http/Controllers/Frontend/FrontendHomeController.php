<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class FrontendHomeController extends Controller
{
    public function home(){
        $packages=Package::all();

        return view ('frontend.partial.homeDashboard',compact('packages'));
    }
}
