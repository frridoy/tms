<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function adminprofile(){
        return view('admin.pages.ProfileAdmin.adminprofile');
    }
}
