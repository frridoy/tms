@extends('frontend.master')
@section('content')
<br>

<!DOCTYPE html>
<html lang="en">

<head>
    {{--
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}

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
        <form action="{{ route('myBooking.update', $bookings->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-center bg-info text-white">
                            <h4 class="mb-0 font-weight-bold">Update your Booking Info</h4>
                        </div>

                        <div class="card-body">


                            <div class="form-group">
                                <label for="email" class="font-weight-bold">Email</label>
                                <input type="email" value="{{$bookings->email}}" required name="email"
                                    class="form-control" id="email" placeholder="Enter your email">
                            </div>

                            <div class="form-group">
                                <label for="contact" class="font-weight-bold">Contact Number</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white">
                                            <i class="fas fa-phone"></i>
                                        </span>
                                    </div>
                                    <input type="tel" pattern="[0-9]{1,13}" value="{{$bookings->number}}" name="number"
                                        required class="form-control" id="contact"
                                        placeholder="Enter your contact number">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="address" class="font-weight-bold">Addres</label>
                                <input type="address" value="{{$bookings->address}}" required name="address"
                                    class="form-control" id="address">
                            </div>





                            <div class="form-group">
                                <label for="image" class="font-weight-bold">Image</label>
                                <input type="file" name="image" value="{{$bookings->pickupdate}}" class="form-control"
                                    id="image" placeholder="Upload your image">
                            </div>

                            {{-- <div class="form-group">
                                <label for="pickupdate" class="font-weight-bold">Pick up Date</label>
                                <input type="date" value="{{$bookings->pickupdate}}" required name="pickupdate"
                                    class="form-control" id="pickupdate" placeholder="Journey start from">
                            </div> --}}

                            {{-- for pick up date --}}
                            <div class="form-group">
                                <label for="pickupdate" class="font-weight-bold">Pick up Date</label>
                                <input type="date" value="{{$bookings->pickupdate}}" required name="pickupdate"
                                    class="form-control" id="pickupdate" placeholder="Journey start from">
                            </div>

                            <script>
                                // Get the current date
                                var today = new Date();

                                // Add 3 days to the current date
                                today.setDate(today.getDate() + 3);

                                // Format the date to the YYYY-MM-DD format
                                var threeDaysLater = today.toISOString().split('T')[0];

                                // Set the min attribute of the date input to three days later
                                document.getElementById('pickupdate').setAttribute('min', threeDaysLater);
                            </script>



                            {{-- <div class="form-group">
                                <label for="chooseroom" name="chooseroom" class="font-weight-bold">Choose Room</label>
                                <div class="input-group">
                                    <select name="chooseroom" required
                                        class="custom-select form-control border-0 bg-light" id="roomNumber">
                                        <option disabled>Select Room...</option>
                                        <option {{ $bookings->chooseroom == 'Single Bed for single person' ? 'selected'
                                            : '' }}>Single Bed for single person</option>
                                        <option {{ $bookings->chooseroom == 'Double Bed for couple' ? 'selected' : ''
                                            }}>Double Bed for couple</option>
                                    </select>
                                </div>
                            </div> --}}

                            <div class="form-group">
                                <label for="choosefoodmenu" name="choosefoodmenu" class="font-weight-bold">Choose Food
                                    Menu</label>
                                <div class="input-group">
                                    <select name="choosefoodmenu" required
                                        class="choosefoodmenu custom-select form-control border-0 bg-light"
                                        id="roomNumber">
                                        <option disabled>Food Menu...</option>
                                        <option {{ $bookings->choosefoodmenu == 'Pure Vagetarian' ? 'selected' : ''
                                            }}>Pure Vagetarian</option>
                                        <option {{ $bookings->choosefoodmenu == 'Non-vagetarian without Beef' ?
                                            'selected' : '' }}>Non-vagetarian without Beef</option>
                                        <option {{ $bookings->choosefoodmenu == 'Non-vagetarian without Chicken' ?
                                            'selected' : '' }}>Non-vagetarian without Chicken</option>
                                        <option {{ $bookings->choosefoodmenu == 'Non-vagetarian without Mutton' ?
                                            'selected' : '' }}>Non-vagetarian without Mutton</option>
                                        <option {{ $bookings->choosefoodmenu == 'Non-vagetarian without Fish' ?
                                            'selected' : '' }}>Non-vagetarian without Fish</option>
                                        <option {{ $bookings->choosefoodmenu == 'Non-Vagetarian' ? 'selected' : ''
                                            }}>Non-Vagetarian</option>
                                    </select>
                                </div>
                            </div>




                            <button type="submit" class="btn btn-primary btn-block"> Update </button>



                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}

</body>

</html>
@endsection
