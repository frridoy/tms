<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\transport_model;
use Illuminate\Http\Request;

class TransportController extends Controller
{
    public function transport()
        {
            $items=transport_model::paginate (5);
            return view ('admin.pages.Transport.list', compact('items'));
        }

        public function create()
        {
            return view ('admin.pages.Transport.form');
        }
        public function store (Request $request){
            transport_model::create([
                'travelby'=>$request->travelby,
                'type'=>$request->type,
            ]);
        return redirect()->route('transport');
        }
}
