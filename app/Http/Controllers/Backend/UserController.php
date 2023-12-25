<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function login()
    {
        return view('admin.pages.login');
    }
    public function loginPost(Request $request)
    {
        $val = Validator::make($request->all(),
            [
                'email' => 'required|email',
                'password' => 'required|min:4|max:10',
            ]);

        if ($val->fails()) {
            //message
            return redirect()->back()->withErrors($val);
        }
        $credentials = $request->except('_token');
        $login = auth()->attempt($credentials);
        if ($login) {
            notify()->success('Login Sucessfully.');
            return redirect()->route('dashboard');
        }
        notify()->error('Invalid User Email or Password.');
        return redirect()->back();
        // ->withErrors('Invalid User Email or Password');
    }
    public function logout()
    {
        notify()->success('Logout Sucessfully.');
        auth()->logout();

        return redirect()->route('admin.login');
    }


    // role

    public function userrole (){
        $items=User::all();
        return view('admin.pages.UserRole.list',compact ('items'));
    }
    public function create(){
        return view('admin.pages.UserRole.form');
    }
    public function store (Request $request){
        //validator
        $validate=Validator::make($request->all(),[
            'name'=>'required',
            'role'=>'required',
            'email'=>'required',
            'password'=>'required',
            // 'image'=>'required',
        ]);

        if($validate->fails())
        {
            return redirect()->back()->with('myError',$validate->getMessageBag());
        }
        //end validator
//for image
        $fileName=null;
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$fileName);

        }
        User::create([
            'name'=>$request->name,
            'role'=>$request->role,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'image'=> $fileName
        ]);
        notify()->success('User Role Created Sucessfully.');
        return redirect()->route('user.role');
    }
}
