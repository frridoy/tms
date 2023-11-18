<?php

namespace App\Http\Controllers\dashboardController;

use App\Http\Controllers\Controller;
 
use Illuminate\Http\Request;

class dashboardController extends Controller
{
     public function dashboard(){
        return view('admin.partial.dashboard');
     }
}
