<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\bookingmodel;
use App\Models\messagemodel;
use App\Models\Package;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function  dashboard(){
        $countTourist=User::where('role', 'tourist')->get();
        $countPackage=Package::all();
        $countBooking=bookingmodel::all();
        $countinquiries=messagemodel::all();
        return view('admin.partial.dashboard',compact('countTourist','countPackage','countBooking', 'countinquiries'));
    }
}
