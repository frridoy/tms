<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagebookingController extends Controller
{
    public function booking (){
        return view('admin.pages.ManageBooking.booking');
    }
    public function list (){
        return view ('admin.pages.ManageBooking.bookinglist');
    }

   public function store(Request $request){

    // Package::create([
    //     'name' => $request->name,
    //     'code' => $request->code,
    //     'calender' => $request->calendar,
    //     'description' => $request->description,
    //     'price' => $request->price,
    //     'image' => $request->image

    // ]);
    // return redirect()->route('tour-packages');

   }
}
