<?php

namespace App\Http\Controllers;
use App\Models\Manage;

use Illuminate\Http\Request;

class ManageUsersController extends Controller
{
    public function manageusers(){
        return view('admin.pages.Manage Users.manageusers');
    }
    public function form(){
        return view('admin.pages.Manage_Users.manageusers');
    }

    public function list(){
        return view('admin.pages.Manage_Users.list');
    }
    public function store(Request $request){
        Manage::create([
            'user_name'=>$request->name,
            'address'=>$request->address,
            'mobile_numer'=>$request->number,
            'email'=>$request->email,
            'destination'=>$request->destination
        ]);
        return redirect()->back();
    }
}
