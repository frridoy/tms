<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\locationmodel;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function location_(){
        $hridoys= locationmodel::paginate(5);
        return view('admin.pages.Location.locationlist', compact('hridoys'));
    }
    public function create(){
        return view ('admin.pages.Location.locationform');
    }
    public function store(Request $request){
    locationmodel::create ([
        'name' => $request->name,
        'distance' => $request->distance,
    ]);

return redirect()->route('location');

    }
}
