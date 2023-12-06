<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TouristProfileController extends Controller
{
    public function touristprofile(){
        return view('frontend.pages.TouristProfile.list');
    }
}
