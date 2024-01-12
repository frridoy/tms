@extends('admin.master')
@section('content')

<style>

.t {
           background: rgb(126, 62, 62);
           color: white;

        }

        th, td {
            /* border: 1px solid #2c0f96; */
            text-align: left;
            padding: 2x;
        }
        table {
            width: 100%;
        }

</style>
    {{-- <a href="{{ route('touristbooking.form') }}" class="btn btn-primary mb-4 mt-4"> Tourist Reservation Form </a> --}}
    <a href="{{ route('booking.report') }}" class="btn btn-outline-info mb-4 mt-0 ">Report</a>
    <div class="container-fluid w-100">
    <h2 class="text-center"> Tourist Booking List</h2>
    <table class="table text-center align-center">
        <thead>
            <tr class="t">
                <th scope="col">SI</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Date</th>
                <th scope="col">Quantity</th>
                {{-- <th scope="col">Number</th>
                <th scope="col">Image</th>
                <th scope="col">Address</th> --}}
                <th scope="col">Code</th>
                <th scope="col">Room</th>
                <th scope="col">Food</th>
                <th scope="col">Amount</th>
                <th scope="col">Status</th>
                <th scope="col">Tran_ID</th>
                <th scope="col">Action</th>
                {{-- <th class="container" scope="col">Action</th> --}}

            </tr>
        </thead>
        <tbody>
            @foreach ($bookings->reverse() as $key => $booking)
                {{-- <tr class="text-capitalize text-uppercase "> --}}
                    <tr>
                    <th scope="row"> {{ $key + 1 }}</th>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->email }}</td>
                    <td>{{ $booking->pickupdate }}</td>
                    <td>{{ $booking->quantity}}</td>
                     {{-- <td>{{ $booking->number }}</td>
                    <td>
                        <img style="border-radius: 15%" width="70px"  src="{{ url('/uploads//' . $booking->image) }}" alt="">
                    </td>
                    <td>{{ $booking->address }}</td> --}}

                    <td>{{ $booking->code }}</td>
                    <td>{{ $booking->chooseroom }}</td>
                    <td>{{ $booking->choosefoodmenu }}</td>
                    <td>{{ $booking->amount }}</td>
                    <td>{{ $booking->payment_status}}</td>
                    <td>{{ $booking->transaction_id}}</td>
                    {{-- <td>




                    </td> --}}
                    <td>
                        <a href="{{route('touristbooking.view', $booking->id)}}" class=" btn btn-info">View</a> <br>

                        @if ($booking->status == 'given')
                        <span class="text-white fw-bold btn btn-success p-2"> Given</span>

                        @else
                        <a class="btn btn-danger p-2"
                            href="{{ route('pending.done', ['id' => $booking->id]) }}">Not_Given</a>
                        @endif
        </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

