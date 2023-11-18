<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Managepage;
use Illuminate\Http\Request;

class ManagePagesController extends Controller
{
    public function mpages(){
        $items= Managepage::all();
        return view ('admin.pages.Manage Pages.page', compact('items'));
    }

    public function create (){
        return view ('admin.pages.Manage Pages.form');
    }
    public function store (Request $request){
        // dd($request->all());

        Managepage::create([
            'name' => $request->name,
            'code' => $request->code,
            'price' => $request->price,

        ]);
        return redirect()->route('managepages');
    }
}
