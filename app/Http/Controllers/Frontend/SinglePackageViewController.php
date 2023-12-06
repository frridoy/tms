<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\bookingmodel;
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
        $pakageBooking=bookingmodel::all();
        return view('frontend.pages.SelectTourist.select',compact('pakageBooking'));

    }
    public function touristbooking()
    {
        $bookings = bookingmodel::all();
        return view('admin.pages.Booking.list', compact ('bookings'));
    }

    public function create(){
        return view ('frontend.pages.SelectTourist.select');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        bookingmodel::create([
            'name' => auth()->user()->name,
            'email' => auth()->user()->email,
            'number' => $request->number,
            'address' => $request->address,
            'code' => $request->code,
            'chooseroom' => $request->chooseroom,
            'choosefoodmenu' => $request->choosefoodmenu,
            'quantity' => $request->quantity,
        ]);
        notify()->success('Your Selected Package Submitted Sucessfully.');
        return redirect()->route('home');
    }



}
