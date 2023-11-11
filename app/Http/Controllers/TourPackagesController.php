<?php

namespace App\Http\Controllers;

use App\Models\Package;

use Illuminate\Http\Request;

class TourPackagesController extends Controller
{
    public function tpackage()
    {

        $packages = Package::all();
        return view('admin.pages.TPackage.tpackage', compact('packages'));
    }

    public function createform()
    {

        return view('admin.pages.TPackage.form');
    }
    public function store(Request $request)
    {

        Package::create([
            'name' => $request->name,
            'code' => $request->code,
            'calender' => $request->calendar,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $request->image

        ]);
        return redirect()->route('tour-packages');
    }
}
