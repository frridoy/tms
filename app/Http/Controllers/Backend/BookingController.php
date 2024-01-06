<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\bookingmodel;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // public function touristbooking()
    // {
    //     $bookings = bookingmodel::all();
    //     return view('admin.pages.Booking.list', compact ('bookings'));
    // }
    public function view($id){
        $bookings=bookingmodel::find($id);
        return view('admin.pages.Booking.view', compact('bookings'));
        }
public function delete($id){
    $bookingdelete=bookingmodel::find($id);
if ($bookingdelete){
    $bookingdelete->delete();
 }
 notify()->success('Tourist Booking Info Deleted Sucessfully.');
 return redirect()->route('tourist.booking');
}

}
