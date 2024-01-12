@extends('admin.master')
@section('content')



 <div class="container mb-5">
    <div class="mx-auto w-75 bg-white p-3 rounded">
    <h2 class="text-center">Provide Hotel Room and Transport Seat</h2>
    <form action="{{ route('reservation.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="" name="email" required>
        </div>
        <div class="form-group">
            <label for="pickup">Pick Up Date:</label>
            <input type="text" class="form-control" id="" name="pickup" required>
        </div>

        <div class="form-group">
            <label for="transportname"> Transport Name:</label>
            <input type="text" class="form-control" id="" name="transportname">
        </div>

        <div class="form-group">
            <label for="seat">Seat:</label>
            <input type="text" class="form-control" id="" name="seat" required>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="" name="address" required>
        </div>
        <div class="form-group">
            <label for="time">Time:</label>
            <input type="text" class="form-control" id="" name="time" required>
        </div>


        <div class="form-group">
            <label for="hotelname">Hotel Name</label>
            <input type="text" class="form-control" id="" name="hotelname" required>
        </div>
        <div class="form-group">
            <label for="room">Hotel Room:</label>
            <input type="text" class="form-control" id="" name="room" required>
        </div>






        <button type="submit w-100" class="btn btn-primary">Submit</button>


    </form>
</div>
</div>
 @endsection



