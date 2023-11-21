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
    public function view($id){
        $locationval=locationmodel::find($id);
        return view('admin.pages.Location.view', compact('locationval'));
        }
        public function delete($id){
            $locationval= locationmodel::find($id);
            if ($locationval){
               $locationval->delete();
            }
            return redirect()->back();
           }
           public function edit($id){
            $locationval=locationmodel::find($id);
            return view('admin.pages.Location.edit', compact('locationval'));
           }
           public function update(Request $request,$id){
            $locationval=locationmodel::find($id);
            if ($locationval){

                $locationval->update([
                'name' => $request->name,
                'distance' => $request->distance,
    ]);

return redirect()->route('location');

            }
        }

    public function store(Request $request){
    locationmodel::create ([
        'name' => $request->name,
        'distance' => $request->distance,
    ]);

return redirect()->route('location');

    }

}
