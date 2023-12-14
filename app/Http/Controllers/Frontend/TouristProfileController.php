<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class TouristProfileController extends Controller
{
    public function touristprofile(){
        return view('frontend.pages.TouristProfile.list');
    }
    public function touristprofileedit ($id){
        $touristprofileval=User::find($id);
        return view('frontend.pages.TouristProfile.editprofile',compact('touristprofileval'));
    }

    public function touristprofileupdate(Request $request, $id){
        $touristprofileval=User::find($id);
        if($touristprofileval)
        $touristprofileval->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>'tourist',
            'password'=>$request->password

        ]);
        notify()->success('Profile Updated Sucessfully.');
        return redirect()->route('home');
    }
}
