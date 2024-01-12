<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\contactusmodel;
use App\Models\messagemodel;
use App\Models\touristinquirymodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{
    public function contactus(){

        return view('frontend.pages.contactus');
    }
    public function contactuslist(){
        $foyzurs = messagemodel::all();
        return view('admin.pages.Tourist_Inquires.list',compact('foyzurs'));
    }
    public function store(Request $request)
{
    $validate = Validator::make($request->all(), [
        'contact' => 'required|regex:/^01[3-9][0-9]{8}$/|numeric',
        'email' => 'required|email',
        'topic' => 'required', // Uncomment if 'topic' is required
        'message' => 'required',
    ]);

    if ($validate->fails()) {
        notify()->error($validate->getMessageBag());
        return redirect()->back();
    }

    messagemodel::create([
        'name' => auth()->user()->name,
        // 'tourist_id' => auth()->user()->id,
        'contact' => $request->contact,
        'email' => $request->email,
        'topic' => $request->topic,
        'message' => $request->message
    ]);

    notify()->success('Message Sent Successfully.');

    return redirect()->route('home'); // Update the route name accordingly
}

}



