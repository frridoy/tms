<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Package;
use App\Models\bookingmodel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Library\SslCommerz\SslCommerzNotification;

class SinglePackageViewController extends Controller
{
    public function singlepackageview($id)
    {
        $packages = Package::all();
        // dd ($packages->all();
        $singlepackage = Package::find($id);

        // dd ($singlepackage->name);
        return view('frontend.pages.singlepackageview', compact('packages', 'singlepackage'));
    }


    public function select($singlepackage_id)
    {
        $singlepackage = Package::find($singlepackage_id);
        //dd($singlepackage);
        return view('frontend.pages.SelectTourist.select', compact('singlepackage'));
    }
    public function touristbooking()
    {
        $bookings = bookingmodel::all();
        return view('admin.pages.Booking.list', compact('bookings'));
    }

    public function create()
    {
        return view('frontend.pages.SelectTourist.select');
    }

    public function search(Request $request)
    {

        if ($request->search) {
            $searchTerm = $request->search;
            $bookings = bookingmodel::where('name', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('code', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('quantity', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('number', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('chooseroom', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('choosefoodmenu', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('email', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('address', 'LIKE', '%' . $searchTerm . '%')
            ->get();
        } else {
            $bookings = bookingmodel::all();
        }
        return view('admin.pages.Booking.search', compact('bookings'));
    }


    public function makepayment()
    {
        return view('frontend.pages.Payment.makepayment');
    }


    // public function makingpayment($id)
    // {
    //     $pay = User::find($id);
    //     //dd($pay);
    //     $pay->update([
    //         'member_subscription' => 1,
    //         'tran_id' => date('Ymdhis'),
    //         'amount' => '5000',
    //         'status' => 'pending',

    //     ]);
    //     //payment
    //     $this->payment($pay);
    //     notify()->success('Make Payment Successfully.');
    //     return redirect()->route('home');
    // }

    public function store(Request $request)
    {
        //dd($request->all());
        $booking = bookingmodel::create([
            'name' => auth()->user()->name,
            'tourist_id' => auth()->user()->id,
            // 'email' => auth()->user()->email,
            // 'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'address' => $request->address,
            'code' => $request->code,
            'chooseroom' => $request->chooseroom,
            'choosefoodmenu' => $request->choosefoodmenu,
            'amount' => $request->price * $request->quantity,
            'transaction_id' => date('YmdHis'),
            'payment_status' => 'Pending',
            'quantity' => $request->quantity,
        ]);

        $this->payment($booking);

        // return redirect()->route('make.payment'); //before it was home
    }

    public function payment($booking)
    {
        //dd($booking);
        # Here you have to receive all the order data to initate the payment.
        # Let's say, your oder transaction informations are saving in a table called "orders"
        # In "orders" table, order unique identity is "transaction_id". "status" field contain status of the transaction, "amount" is the order amount to be paid and "currency" is for storing Site Currency which will be checked with paid currency.

        $post_data = array();
        $post_data['total_amount'] = $booking->amount; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = $booking->transaction_id; // tran_id must be unique

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = $booking->name;
        $post_data['cus_email'] = $booking->email;
        $post_data['cus_add1'] = $booking->address;
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = '8801XXXXXXXXX';
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = "ref001";
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";

        #Before  going to initiate the payment order status need to insert or update as Pending.
        // $update_product = DB::table('orders')
        //     ->where('transaction_id', $post_data['tran_id'])
        //     ->updateOrInsert([
        //         'name' => $post_data['cus_name'],
        //         'email' => $post_data['cus_email'],
        //         'phone' => $post_data['cus_phone'],
        //         'amount' => $post_data['total_amount'],
        //         'status' => 'Pending',
        //         'address' => $post_data['cus_add1'],
        //         'transaction_id' => $post_data['tran_id'],
        //         'currency' => $post_data['currency']
        //     ]);

        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'hosted');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }
    }
}
