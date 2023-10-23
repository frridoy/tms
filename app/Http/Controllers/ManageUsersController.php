<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageUsersController extends Controller
{
    public function manageusers(){
        return view('admin.pages.Manage Users.manageusers');
    }
}
