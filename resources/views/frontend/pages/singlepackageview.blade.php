@extends('frontend.master')
@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
    <div class="container py-4 my-4 mx-auto d-flex flex-column">
        <div class="header">
            <div class="row r1 mt-5">
                <div class="col-md-9 abc mt-5">
                    <h1>Package Name: {{$singlepackage->name}}</h1>
                </div>

            </div>
        </div>
        <div class="container-body mt-4">
            <div class="row r3">
                <div class="col-md-5 p-0 klo">
                    <ul>
                        <li>Package Name: {{$singlepackage->name}}</li>
                        <li>Package Code: {{$singlepackage->code}}</li>
                        <li>duaration: {{$singlepackage->duration}}</li>
                        <li>Package Price: {{$singlepackage->price}} BDT</li>
                        <li>EMI Starting from (On Credit Cards)</li>
                        <li>Normal Delivery : 4-5 Days</li>
                        <li>Express Delivery : 2-3 Days</li>
                        <li>COD Available (All Over India)</li>
                    </ul>
                    <div class=" mt-3 ">
                        <div class="row r4">

                            <div class="col-md-2 myt mr-5 "><button type="button" class="btn btn-outline-warning "><a href="#">ADD TO CART</a></button></div>
                            <div class="col-md-2 myt "><button type="button" class="btn btn-outline-warning"><a href="#">Book Now</a></button></div>
                        </div>
                    </div>
                </div>
                <div  class="col-md-7"> <img style="height: 300px; width:300px;" src="{{ url('/uploads//' . $singlepackage->image) }}" width="90%" height="95%"> </div>
            </div>
        </div>

    </div>
</body>
</html>

@endsection
