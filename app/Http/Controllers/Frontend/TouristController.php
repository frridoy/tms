<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\bookingmodel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TouristController extends Controller
{
    public function registration (){
        return view('frontend.pages.registration');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $fileName=null;
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$fileName);

        }


        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>'tourist',
            'password'=>bcrypt($request->password),
            'contact'=>$request->contact,
            'image' => $fileName

        ]);
        // dd($request->all());
        notify()->success('Registration Successful.');
        return redirect()->route('tourist.login');
    }


    public function login()
    {
        return view('frontend.pages.login');
    }


    public function doLogin(Request $request){

        $val=Validator::make($request->all(),[
            'email'=>'required',
            'password'=>'required',
        ]);

        if($val->fails())
        {
            notify()->error($val->getMessageBag());
            return redirect()->back();
        }

        $credentials=$request->except('_token');
        // dd($credentials);

        if(auth()->attempt($credentials))
        {
            notify()->success('Login Successfully.');
            return redirect()->route('home');
        }

        notify()->error('Invalid User Email & Password.');
            return redirect()->back();


    }


    public function logout()
    {
        auth()->logout();
        notify()->success('Logout Successfully.');
        return redirect()->route('home');
    }

    ///tourist my booking



    public function myBooking($id){
        $mybooking=bookingmodel::where('tourist_id', $id)->get();
        return view('frontend.pages.TouristProfile.MyBooking',compact('mybooking'));
    }
    public function myBookingview($id){
        $bookings=bookingmodel::find($id);
        return view('frontend.pages.TouristProfile.view', compact('bookings'));
        }
        // public function myBookingreport($id) {
        //     $bookings=bookingmodel::find($id);
        //     return view('frontend.pages.TouristProfile.report', compact('bookings'));
        // }


}

