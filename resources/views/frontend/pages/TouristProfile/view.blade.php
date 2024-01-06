
@extends('frontend.master')
@section('content')
<br> <br>
<div id="printDiv">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .profile-container {
            max-width: 800px; /* Increased the max-width for better two-column layout */
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex; /* Use flex display for two columns */
            justify-content: space-between; /* Add space between the two columns */
        }

        .left-column,
        .right-column {
            width: 48%; /* Set the width for each column */
        }

        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto;
        }

        .profile-picture img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .user-info {
            text-align: center;
            margin-top: 20px;
        }

        .user-info h4 {
            margin: 0;
            color: #333;
        }

        .user-info h6 {
            color: #666;
        }

        .btn {
            display: block;
            margin-top: 20px;
        }

    </style>
</head>
<body>

<div class="profile-container">

    <div class="left-column text-center m-1">
        <div class="profile-picture">
            <img src="{{ url('/uploads//' . $bookings->image) }}" alt="Profile Picture">
        </div>
        <hr>
        <h4>{{ $bookings->name }}</h4><hr>
        <h6>Email: {{ $bookings->email }}</h6> <hr>
            <h6>Contact: {{ $bookings->number }}</h6> <hr>
            <h6>Address: {{ $bookings->address }}</h6><hr>
            <h6>Pick Up Date: {{$bookings->pickupdate}}</h6> <hr>
    </div>

    <div class="right-column">
        <div class="user-info">

<hr>
            <h6> Room: {{$bookings->chooseroom}}</h6> <hr>
            <h6> Package Code: {{$bookings->code}}</h6> <hr>
            <h6>Food: {{$bookings->choosefoodmenu}}</h6> <hr>
            <h6>Quantity: {{$bookings->quantity}} Person</h6> <hr>
            <h6>Amount: {{$bookings->amount}} BDT</h6> <hr>
            <h6>Tran Id: {{$bookings->transaction_id}}</h6> <hr>
            <h6>Payment: {{$bookings->payment_status}}</h6> <hr>

        </div>
        <a href="" class="btn btn-outline-info" onclick="printContent('printDiv')">My Booking Report</a>
        {{-- <a href="{{route('myBooking.report',$bookings->id)}}" class="btn btn-outline-info">Print the Report</a> --}}
    </div>

</div>

</body>
</html>
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





