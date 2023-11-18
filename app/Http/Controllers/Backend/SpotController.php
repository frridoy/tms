<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SpotModel;
use Illuminate\Http\Request;

class SpotController extends Controller
{
    public function spot(){
        $items=SpotModel::paginate(5);
return view('admin.pages.Spot.spotlist', compact('items'));
    }
    public function create(){
        return view('admin.pages.Spot.spotform');
            }
     public function store (Request $request){
                SpotModel::create([
                    'location'=> $request->location,
                    'spot_names'=> $request->spot_names,
                ]);
        return redirect()->route('spot');

}
}
