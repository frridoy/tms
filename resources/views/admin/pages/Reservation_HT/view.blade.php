{{-- @extends('admin.master')
@section('content')

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
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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

        .user-info h2 {
            margin: 0;
            color: #333;
        }

        .user-info p {
            color: #666;
        }
    </style>
</head>
<body>

<div class="profile-container">




    <div class="profile-picture">
        <img src="{{url('/uploads//' . $package->image) }}" alt="">
    </div>

    <div class="user-info">
        <h4>  {{$package->name}} </h4><hr>


        <h6>Code : {{$package->code}}</h6><hr>
        <h6>Duration : {{$package->duration}} Days</h6><hr>
        <h6>Price: {{$package->price}} BDT</h6><hr>
        <h6>Hotel Type: {{$package->hotelcondition}}</h6><hr>
        <h6>Transport: {{$package->transportcondition}}</h6><hr>
        <h6>Spots: {{$package->spotnames}}</h6><hr>
        <h6>Description: {{$package->description}}</h6><hr>


        <a class="btn btn-info" href="{{route('tourpackages',$package->id)}}"> Back </a>
        <a class="btn btn-warning" href="{{route('package.edit',$package->id)}}"> Edit </a>
        <a class="btn btn-danger" href="{{route('package.delete',$package->id)}}"> Delete</a>

    </div>

</div>

</body>
</html>

@endsection --}}


@extends('admin.master')
@section('content')

<button class="btn btn-info mt-3 text-center" onclick="printContent('printDiv')">Print Report</button>
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
            display: flex;
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile-left {
            flex: 1;
            padding-right: 20px;
        }

        .profile-right {
            flex: 1;
            padding-left: 20px;
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

        .btn-container {
            text-align: center;
            margin-top: 20px;
        }

        .btn-container a {
            margin: 0 10px;
        }
    </style>
</head>

<body>


    <div class="profile-container">
        <div class="profile-left text-center ">
            <hr>
            <h4> {{ $reserves->name}}</h4>
                <hr>
            <h6> Email: {{ $reserves->email}}</h6>
                <hr>
                <h6> Journey Date : {{ $reserves->pickup}}</h6>
                <hr>
                <h6> Transport Name: {{ $reserves->transportname}}</h6>
                <hr>
                <h6> Seat Number: {{ $reserves->seat}}</h6>
                <hr>

        </div>

        <div class="profile-right">
            <div class="user-info">
                <hr>
                <h6> Departure Time: {{ $reserves->time}}</h6>
                <hr>
                <h6> From: {{ $reserves->address}}</h6>
                <hr>
                <h6> Hotel Name: {{$reserves->hotelname}}</h6>
                <hr>
                <h6> Hotel Room: {{$reserves->room}}</h6>
                <hr>
             <h6> You need to present 30 minutes before {{ $reserves->time}} on {{ $reserves->pickup}} in {{ $reserves->address}} for travel. </h6>
             <hr>

                {{-- <div class="btn-container">
                    <a class="btn btn-warning btn-block" href="{{route('package.edit',$package->id)}}">Edit</a>
                    <a class="btn btn-danger btn-block" href="{{route('package.delete',$package->id)}}">Delete</a>
                </div> --}}
            </div>

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



