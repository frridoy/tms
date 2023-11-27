<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\hotel_model;
use Illuminate\Http\Request;
use SebastianBergmann\CodeUnit\FunctionUnit;

class HotelController extends Controller
{
    public Function hotel (){
        $items= hotel_model::paginate(5);
        return view('admin.pages.Hotel.hotel_list', compact('items'));
    }
    public function create(){
        return view('admin.pages.Hotel.hotel_form');

    }

    public function store (Request $request){
        hotel_model:: create([
        'name'=>$request->name,
        'type'=>$request->type,
        'price'=>$request->price,
        ]);
        return redirect ()->route('hotel');
    }
    public function delete ($id){
        $items=hotel_model::find($id);
        if($items)
        $items->delete();
        return redirect ()->route('hotel');
    }
    public function edit ($id){
        $items=hotel_model::find($id);
        return view('admin.pages.Hotel.edit', compact('items'));

    }
    public function view ($id){
        $items=hotel_model::find($id);
        return view('admin.pages.Hotel.view', compact('items'));

    }
    public function  update(Request $request, $id){
        $items=hotel_model::find($id);
        if($items)
        $items->update([
            'name'=>$request->name,
            'type'=>$request->type,
            'price'=>$request->price,
        ]);
        return redirect()->route('hotel');
    }

}
