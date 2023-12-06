@extends('frontend.master')
@section('content')
<br>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Gorgeous Form</title>
        <style>
            body {
                background-color: #f8f9fa;
            }

            .card {
                border: none;
                border-radius: 15px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .card-header {
                background-color: #007bff;
                color: #fff;
                border-radius: 15px 15px 0 0;
            }

            .form-control {
                border-radius: 10px;
            }

            button.btn-primary {
                background-color: #007bff;
                border: none;
                border-radius: 10px;
            }

            button.btn-primary:hover {
                background-color: #0056b3;
            }
        </style>
    </head>

    <body>

        <div class="container mt-5">
            <form action="{{ route('tourist.store') }}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-center bg-primary text-white">
                            <h4 class="mb-0 font-weight-bold">Reservation Form</h4>
                        </div>

                        <div class="card-body">
                            <form action="" method="" enctype="multipart/form-data">
                                @csrf
                                {{-- <div class="form-group">
                                    <label for="name" class="font-weight-bold">Name</label>
                                    <input type="name" name="name" class="form-control" id="name"
                                        placeholder="Enter your name">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="font-weight-bold">Email</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Enter your email">
                                </div> --}}

                                <div class="form-group">
                                    <label for="contact" class="font-weight-bold">Contact Number</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-primary text-white">
                                                <i class="fas fa-phone"></i>
                                            </span>
                                        </div>
                                        <input type="number"name="number" class="form-control" id="contact"
                                            placeholder="Enter your contact number">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="address" class="font-weight-bold">Address</label>
                                    <textarea class="form-control" name="address" id="address" rows="1" placeholder="Enter your address"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="code" class="font-weight-bold">Package Code</label>
                                    <input type="code"name="code" class="form-control" id=""
                                        placeholder="Your Package Code">
                                </div>

                                <div class="form-group">
                                    <label for="chooseroom" name="chooseroom" class="font-weight-bold">Choose Room</label>
                                    <div class="input-group">
                                        <select name="chooseroom" class="custom-select form-control border-0 bg-light" id="roomNumber">
                                            <option selected disabled>Select Room...</option>
                                            <option>Single Bed</option>
                                            <option>Double Bed</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="choosefoodmenu" name="choosefoodmenu" class="font-weight-bold">Choose Food Menu</label>
                                    <div class="input-group">
                                        <select name="choosefoodmenu" class="choosefoodmenu custom-select form-control border-0 bg-light" id="roomNumber">
                                            <option selected disabled>Food Menu...</option>
                                            <option>Rice</option>
                                            <option>dfgh</option>
                                            <!-- Add more options as needed -->
                                        </select>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="quantity" class="font-weight-bold">Quantity</label>
                                    <div class="input-group">
                                        <input type="number" name="quantity" class="form-control border-0 bg-light"
                                            id="quantity" placeholder="Enter quantity" aria-describedby="quantity-addon">
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-primary text-white"
                                                id="quantity-addon">Person(s)</span>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-block">Book Now </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>

    </html>
@endsection
