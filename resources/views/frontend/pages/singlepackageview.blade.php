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
            <a href="{{route("select")}}"> <button type="button" class="btn btn-primary"> View Details </button> </a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

