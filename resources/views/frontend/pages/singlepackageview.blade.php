{{--
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



                <img src="{{ url('/uploads/' . $singlepackage->image) }}" class="card-img-top w-50 img-fluid" alt="">



            <div class="card-body">
                <p class="card-text"><strong>Package Name:</strong> {{ $singlepackage->name }} </p>
                <p class="card-text"><strong>Code:</strong> {{ $singlepackage->code }} </p>
                <p class="card-text"><strong>Duration:</strong> {{ $singlepackage->duration }} Days</p>
                <p class="card-text"><strong>Amount:</strong> {{ $singlepackage->price }} BDT</p>
                <p class="card-text"><strong>Description:</strong> {{ $singlepackage->description }}</p>
                <a href="{{route("select")}}"> <button type="button" class="btn btn-primary"> View Details </button> </a>


            </div>


        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html> --}}



{{-- <!DOCTYPE html>
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
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            overflow: hidden;
            width: 400px; /* Set a fixed width for the card */
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

    <div class="card mx-auto">

        <img src="{{ url('/uploads/' . $singlepackage->image) }}" class="card-img-top w-100 img-fluid" alt="">

        <div class="card-body">
            <p class="card-text"><strong>Package Name:</strong> {{ $singlepackage->name }} </p>
            <p class="card-text"><strong>Code:</strong> {{ $singlepackage->code }} </p>
            <p class="card-text"><strong>Duration:</strong> {{ $singlepackage->duration }} Days</p>
            <p class="card-text"><strong>Amount:</strong> {{ $singlepackage->price }} BDT</p>
            <p class="card-text"><strong>Description:</strong> {{ $singlepackage->description }}</p>
            <p class="card-text"><strong>Hotel Type:</strong> {{ $singlepackage->hotelcondition }}</p>
            <p class="card-text"><strong>Transport Type:</strong> {{ $singlepackage->transportcondition }} (Authority will provide your seat) </p>
            <p class="card-text"><strong>Spot Names:</strong> {{ $singlepackage->spotnames }}</p>
            <a href="{{route("select",$singlepackage->id)}}">
                <button type="button" class="btn btn-primary"> Booking </button> </a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html> --}}




{{-- @extends('frontend.master')
@section('content')


<!DOCTYPE html>
<html lang="en">
<br> <br> <br> <br>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package View</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Roboto', sans-serif;
            height: 100vh;
            margin: 0;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            overflow: hidden;
            width: 800px;
            display: flex;
            flex-direction: row;
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

    <div class="card mx-auto mb-4 mt-2">

        <img src="{{ url('/uploads/' . $singlepackage->image) }}" class="card-img-top w-50 img-fluid" alt="">

        <div class="card-body w-50">
            <p class="card-text"><strong>Package Name:</strong> {{ $singlepackage->name }} </p>
            <p class="card-text"><strong> Package Code:</strong> {{ $singlepackage->code }} </p>
            <p class="card-text"><strong>Duration:</strong> {{ $singlepackage->duration }} Days</p>
            <p class="card-text"><strong>Amount:</strong> {{ $singlepackage->price }} BDT/Person</p>
            <p class="card-text"><strong>Description:</strong> {{ $singlepackage->description }}</p>
            <p class="card-text"><strong>Hotel Type:</strong> {{ $singlepackage->hotelcondition }} Hotel</p>
            <p class="card-text"><strong>Transport Type:</strong> {{ $singlepackage->transportcondition }} (Authority will provide your seat) </p>
            <p class="card-text"><strong>Spot Names:</strong> {{ $singlepackage->spotnames }}</p>
            <a href="{{route("select",$singlepackage->id)}}">
                <button type="button" class="btn btn-outline-info btn-block"> Booking the Package</button> </a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>


@endsection --}}


{{-- @extends('frontend.master')
@section('content')
<br> <br> <br> <br>

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
            height: 100vh;
            margin: 0;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            overflow: hidden;
            width: 800px;
            display: flex;
            flex-direction: row;
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
        <div class="card mx-auto mb-4">

            <div class="left-content">
                <!-- Image and Terms and Conditions -->
                <img src="{{ url('/uploads/' . $singlepackage->image) }}" class="card-img-top w-100 img-fluid" alt="">
                <div class="terms-and-conditions">
                    <h4>Terms and Conditions</h4>
                    <p>Your terms and conditions go here...</p>
                </div>
            </div>

            <div class="right-content">
                <!-- Package Details -->
                <p class="card-text"><strong>Package Name:</strong> {{ $singlepackage->name }} </p>
                <p class="card-text"><strong>Package Code:</strong> {{ $singlepackage->code }} </p>
                <p class="card-text"><strong>Duration:</strong> {{ $singlepackage->duration }} Days</p>
                <p class="card-text"><strong>Amount:</strong> {{ $singlepackage->price }} BDT/Person</p>
                <p class="card-text"><strong>Description:</strong> {{ $singlepackage->description }}</p>
                <p class="card-text"><strong>Hotel Type:</strong> {{ $singlepackage->hotelcondition }} Hotel</p>
                <p class="card-text"><strong>Transport Type:</strong> {{ $singlepackage->transportcondition }} (Authority will provide your seat) </p>
                <p class="card-text"><strong>Spot Names:</strong> {{ $singlepackage->spotnames }}</p>
                <a href="{{ route("select", $singlepackage->id) }}">
                    <button type="button" class="btn btn-outline-info btn-block">Booking the Package</button>
                </a>
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>


@endsection --}}


@extends('frontend.master')
@section('content')
<br> <br>

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
            height: 100vh;
            margin: 0;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            overflow: hidden;
            width: 800px;
            display: flex;
            flex-direction: row;
        }

        /* .card:hover {
            transform: scale(1.05);
        } */

        .left-content {
            flex: 1;
            padding: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
        }

        .card-img-top {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            width: 100%; /* Make sure the image takes 100% width */
            max-height: 300px; /* Set maximum height */
            object-fit: cover;
            margin-bottom: 15px; /* Add some bottom margin */
        }

        .terms-and-conditions {
            text-align: center;
        }

        .right-content {
            flex: 1;
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
        <div class="card mx-auto mb-5">

            <div class="left-content">
                <!-- Image and Terms and Conditions -->
                <img src="{{ url('/uploads/' . $singlepackage->image) }}" class="card-img-top img-fluid" alt="">
                <div class="terms-and-conditions text-left mb-5">
                    <h4 class="text-danger">Terms and Conditions</h4>
                    <h6>1. "If you wish to cancel your booking, you must do so at least 2 days ago to the scheduled date, and you will receive a refund of 90% of the total amount paid."</h6>
                    <h6>2. "If we provide you with the hotel room and transport seat numbers, and you decide to cancel, you will receive a refund of 40% of the total amount paid."</h6>
                    <h6>3. "If not, you will not receive any refund."</h6>
                    <h6 class="text-info">4. "If you select single bed room then price will increase 1000 with quantity."</h6>

                </div>
            </div>

            <div class="right-content mb-5 my-1">
                <!-- Package Details -->
                <p class="card-text"><strong>Package Name:</strong> {{ $singlepackage->name }} </p>
                <p class="card-text"><strong>Package Code:</strong> {{ $singlepackage->code }} </p>
                <p class="card-text"><strong>Duration:</strong> {{ $singlepackage->duration }} Days</p>
                <p class="card-text"><strong> Initial Amount:</strong> {{ $singlepackage->price }} BDT/Person (If you choose single bed room then it will added 1000 BDT * quantity</p>
                <p class="card-text"><strong>Description:</strong> {{ $singlepackage->description }}</p>
                <p class="card-text"><strong>Hotel Type:</strong> {{ $singlepackage->hotelcondition }} Hotel. (Authority will provide your room)</p>
                <p class="card-text"><strong>Transport Type:</strong> {{ $singlepackage->transportcondition }}. (Authority will provide your seat) </p>
                {{-- <p class="card-text"><strong>Spot Names:</strong> {{ $singlepackage->spotnames }}</p> --}}
                <p class="text-info fs-3"> You will receive information about your transport seat, hotel room and other details via email.</p>
                <a href="{{ route("select", $singlepackage->id) }}">
                    <button type="button" class="btn btn-outline-success btn-block">Booking the Package</button>
                </a>
            </div>

        </div>
    </div>

    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
</body>

</html>


@endsection
