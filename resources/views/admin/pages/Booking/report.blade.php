@extends('admin.master')
@section('content')
    {{-- <a href="{{ route('touristbooking.form') }}" class="btn btn-primary mb-4 mt-4"> Tourist Reservation Form </a> --}}
    <br>
    <button class="btn btn-outline-warning" onclick="printContent('printDiv')">Print Booking Info</button>

    <div id="printDiv">
        
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Number</th>
                    <th scope="col">Address</th>
                    <th scope="col">Code</th>
                    <th scope="col">Room</th>
                    <th scope="col">Food</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Status</th>
                    <th scope="col">Transaction Id</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $key => $booking)
                    <tr>
                        <th scope="row"> {{ $key + 1 }}</th>
                        <td>{{ $booking->name }}</td>
                        <td>{{ $booking->email }}</td>
                        <td>{{ $booking->number }}</td>
                        <td>{{ $booking->address }}</td>
                        <td>{{ $booking->code }}</td>
                        <td>{{ $booking->chooseroom }}</td>
                        <td>{{ $booking->choosefoodmenu }}</td>
                        <td>{{ $booking->quantity }}</td>
                        <td>{{ $booking->amount }}</td>
                        <td>{{ $booking->payment_status }}</td>
                        <td>{{ $booking->transaction_id }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@push('reportcode')
    <script type="text/javascript">
        function printContent(el) {
            var restorepage = $('body').html();
            var printcontent = $('#' + el).clone();
            $('body').empty().html(printcontent);
            window.print();
            $('body').html(restorepage);
        }
    </script>
@endpush
