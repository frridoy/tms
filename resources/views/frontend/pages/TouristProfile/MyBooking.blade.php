@extends('frontend.master')
@section('content')

    <div class="container py-5">

        <div class="row d-flex align-items-center justify-content-center  ">
            <div class="col-md-12">
                <h2 class="text-center m-4 mb-3 "> My Booking Info</h2>
                <table class="table">

                    <thead>
                        <tr>
                            <th scope="col">SI</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Number</th>
                            <th scope="col">Date</th>
                            <th scope="col">Room</th>
                            <th scope="col">Food</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Trans_ID</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($mybooking as $detail)
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $detail->name }}</td>
                                <td>{{ $detail->email }}</td>
                                <td>{{ $detail->number }}</td>
                                <td>{{ $detail->pickupdate }}</td>
                                <td>{{ $detail->chooseroom }}</td>
                                <td>{{ $detail->choosefoodmenu }}</td>
                                <td>{{ $detail->quantity }}</td>
                                <td>{{ $detail->amount }}</td>
                                <td>{{ $detail->transaction_id }}</td>
                                <td>{{ $detail->payment_status }}</td>
                                <td>
                                    <a href="{{route('myBooking.view',$detail->id)}}"class="btn btn-primary">View and Print  Report</a> <br>
                                    <a href="{{route('myBooking.edit',$detail->id)}}"class="btn btn-warning">Edit Your Booking info</a>

                                </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
