{{-- @extends('frontend.master')
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
                        <li>Duaration: {{$singlepackage->duration}}</li>
                        <li>Amount: {{$singlepackage->price}} BDT</li>

                    </ul>
                    <div class=" mt-3 ">
                        <div class="row r4">


                            <div class="col-md-2 myt "><button type="button" class="btn btn-outline-primary"><a href="">Next</a></button></div>
                        </div>
                    </div>
                </div>
                <div  class="col-md-7"> <img style="height: 300px; width:300px;" src="{{ url('/uploads//' . $singlepackage->image) }}" width="90%" height="95%"> </div>
            </div>
        </div>

    </div>
</body>
</html>

@endsection --}}



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package View</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Roboto', sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            overflow: hidden;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-img-top {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            height: 300px;
            object-fit: cover;
        }

        .card-body {
            padding: 30px;
        }

        .card-title {
            font-size: 2.5rem;
            color: #343a40;
            margin-bottom: 15px;
        }

        .card-text {
            color: #6c757d;
            margin-bottom: 15px;
            font-size: 1.2rem;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="card mx-auto">

                <img src="{{ url('/uploads//' .$singlepackage->image) }}" class="card-img-top" alt="">


            <div class="card-body">
                <p class="card-text"><strong>Package Name:</strong> {{ $singlepackage->name }} </p>
                <p class="card-text"><strong>Code:</strong> {{ $singlepackage->code }} </p>
                <p class="card-text"><strong>Duration:</strong> {{ $singlepackage->duration }} Days</p>
                <p class="card-text"><strong>Amount:</strong> {{ $singlepackage->price }} BDT</p>
                <p class="card-text"><strong>Description:</strong> {{ $singlepackage->description }}</p>
                {{-- <div>
                    <div><a href="{{route("select")}}"> Next </a></div>
                </div>  --}}
                <a href="{{route("select")}}"> <button type="button" class="btn btn-primary"> Click Next</button> </a>


            </div>


        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
