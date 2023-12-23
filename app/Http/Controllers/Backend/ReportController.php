<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\bookingmodel;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function bookingreport(){
        $bookings = bookingmodel::all();
        return view('admin.pages.booking.report',compact('bookings'));
    }
}
