@extends('admin.master')
@section('content')
    {{-- <a href="{{ route('touristbooking.form') }}" class="btn btn-primary mb-4 mt-4"> Tourist Reservation Form </a> --}}
    <a href="{{ route('booking.report') }}" class="btn btn-outline-info mb-4 mt-4 ">Report</a>
    <h2 class="text-center"> Tourist Booking List </h2>
    <table class="table text-center align-center">
        <thead>
            <tr>
                <th scope="col">SI</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                {{-- <th scope="col">Number</th> --}}
                {{-- <th scope="col">Image</th> --}}
                {{-- <th scope="col">Address</th> --}}
                <th scope="col">Date</th>
                <th scope="col">Code</th>
                <th scope="col">Room</th>
                <th scope="col">Food</th>
                <th scope="col">Quantity</th>
                <th scope="col">Amount</th>
                <th scope="col">Status</th>
                <th scope="col">Tran_ID</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $key => $booking)
                <tr>
                    <th scope="row"> {{ $key + 1 }}</th>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->email }}</td>
                    {{-- <td>{{ $booking->number }}</td> --}}
                    {{-- <td>
                        <img style="border-radius: 15%" width="70px"  src="{{ url('/uploads//' . $booking->image) }}" alt="">
                    </td> --}}
                    {{-- <td>{{ $booking->address }}</td> --}}
                    <td>{{ $booking->pickupdate }}</td>
                    <td>{{ $booking->code }}</td>
                    <td>{{ $booking->chooseroom }}</td>
                    <td>{{ $booking->choosefoodmenu }}</td>
                    <td>{{ $booking->quantity}}</td>
                    <td>{{ $booking->amount }}</td>
                    <td>{{ $booking->payment_status}}</td>
                    <td>{{ $booking->transaction_id}}</td>
                    <td>


                        <a href="{{route('touristbooking.view', $booking->id)}}" class="btn btn-primary">View</a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
