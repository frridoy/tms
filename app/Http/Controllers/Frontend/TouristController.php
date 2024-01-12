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
        $validate=Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:4|max:10',
            'contact'=>'required|string|max:11|min:11|regex:/^(?:\+?88)?01[3-9]\d{8}$/',


        ]);

        if($validate->fails())
        {
            notify()->error($validate->getMessageBag());
            return redirect()->back();
        }

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
        public function edit($id){
            $bookings=bookingmodel::find($id);
            return view('frontend.pages.TouristProfile.editbooking', compact('bookings'));
           }
           public function update(Request $request,$id){
            $bookings=bookingmodel::find($id);
            if ($bookings){
                $fileName=$bookings->image;
                if($request->hasFile('image'))
                {
                    $file=$request->file('image');
                    $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();
                    $file->storeAs('/uploads',$fileName);

                }
                $bookings->update([
                    'email' => $request->email,
                    'number' => $request->number,
                    'address' => $request->address,
                    'pickupdate' => $request->pickupdate,
                    // 'chooseroom' => $request->chooseroom,
                    'choosefoodmenu' => $request->choosefoodmenu,
                    'image' => $fileName

                ]);
                notify()->success('Booking Info Updated Sucessfully.');
                return redirect()->route('home');
            }

        }






        // public function myBookingreport($id) {
        //     $bookings=bookingmodel::find($id);
        //     return view('frontend.pages.TouristProfile.report', compact('bookings'));
        // }


}


