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
        $fileName=$touristprofileval->image;
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$fileName);

        }
        $touristprofileval->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>'tourist',
            'password'=>$request->password,
            'contact'=>$request->contact,
            'image'=>$fileName

        ]);
        notify()->success('Profile Updated Sucessfully.');
        return redirect()->route('home');
    }
}
