<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\reservationmodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReservationController extends Controller
{

        public function list(){
            $reserves= reservationmodel::all();
            return view('admin.pages.Reservation_HT.list',compact('reserves'));
        }
        public function form(){

            return view('admin.pages.Reservation_HT.form');
        }
        public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'hotelname' => 'required',
            'room' => 'required',
            'transportname' => 'required',
            'seat' => 'required',
            'pickup' => 'required',
            'address' => 'required',
            'time' => 'required',

        ]);

        if ($validate->fails()) {
            notify()->error($validate->getMessageBag());
            return redirect()->back();
        }

        reservationmodel::create([

            'name' => $request->name,
            'email' => $request->email,
            'hotelname' => $request->hotelname,
            'room' => $request->room,
            'transportname' => $request->transportname,
            'seat' => $request->seat,
            'pickup' => $request->pickup,
            'address' => $request->address,
            'time' => $request->time,
        ]);

        notify()->success('Message Sent Successfully.');

        return redirect()->route('reservation.list'); // Update the route name accordingly
    }

    public function view($id){
        $reserves=reservationmodel::find($id);
        return view('admin.pages.Reservation_HT.view', compact('reserves'));
        }

        public function delete($id){
            $reserves= reservationmodel::find($id);
            if ($reserves){
                $reserves->delete();
            }
            notify()->success('Tourist transport and hotel info Deleted Sucessfully.');
            return redirect()->route('reservation.list');
           }

    }

