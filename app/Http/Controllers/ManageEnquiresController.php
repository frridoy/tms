<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageEnquiresController extends Controller
{
    public function menquires(){
        return view ('admin.pages.Manage Enquires.manageenquires');
    }
    public function create(){
return view ('admin.pages.Manage Enquires.form');
    }
}

