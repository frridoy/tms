@extends('admin.master')
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
        <img src="https://i.ibb.co/0nqVcRc/FB-IMG-1696330207702-1.jpg" alt="">
    </div>

    <div class="user-info">

        <h4> Admin Profile </h4><hr>

        <h6> Name : Foyzur Rahman Ridoy</h6><hr>
        <h6> Position:  Web Developer </h6><hr>
        <h6> Email: <a href="https://mail.google.com/mail/u/0/#inbox?compose=new">foyzur.r.h@gmail.com</a></h6><hr>
        <h6> Contact:  +8801614898789 </h6><hr>
        <h6>Traveling is my favourite hobby. For that reason, I create a platform where tourist can easily book the package and explore the world.</h6> <hr>



        <a class="btn btn-outline-primary" href="{{route('dashboard')}}"> Back </a>


    </div>

</div>

</body>
</html>

@endsection
