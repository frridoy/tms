<?php

namespace App\Http\Controllers;

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
}
