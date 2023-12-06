@extends('frontend.master')
@section('content')


<br> <br> <br>
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
        {{-- <img src="{{url('/uploads//' . $package->image) }}" alt=""> --}}
    </div>

    <div class="user-info">
        <h4>Your Name: {{auth()->user()->name}}</h4><hr>


        <h6>Email: {{auth()->user()->email}}</h6><hr>
        <h6></h6><hr>




        <a class="btn btn-warning" href=""> Edit </a>

    </div>

</div>

</body>
</html>






@endsection
