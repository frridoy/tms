<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
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
        // notify()->success('Invalid User Email or Password.');
        return redirect()->back()->withErrors('Invalid User Email or Password');
    }
    public function logout()
    {
        // notify()->success('Logout Sucessfully.');
        auth()->logout();

        return redirect()->route('admin.login');
    }
}
