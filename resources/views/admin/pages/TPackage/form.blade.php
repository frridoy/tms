@extends('admin.master')
 @section('content')

 <div class="container">
    <h2>Create Package</h2>
    <form action="{{ route('tourpackages.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="" name="name" required>
        </div>
        <div class="form-group">
            <label for="code">Code:</label>
            <input type="text" class="form-control" id="" name="code" required>
        </div>
        <div class="form-group">
            <label for="duration">Duration:</label>
            <input type="text" class="form-control" id="" name="duration" required>
        </div>
        <div class="form-group">
            <label for="destination">Description:</label>
            <input type="text" class="form-control" id="" name="description" required>
        </div>

        <div class="form-group">
            <label for="hotelcondition">Hotel Type:</label>
            <select class="form-control" id="" name="hotelcondition" required>
                <option>3 Star</option>
                <option>4 Star</option>
                <option>5 Star</option>
            </select>
        </div>
        <div class="form-group">
            <label for="transportcondition">Transport Type:</label>
            <select class="form-control" id="" name="transportcondition" required>
                <option>Bus AC</option>
                <option>Bus Non-AC</option>
                <option>Sleeper Bus</option>
                <option>AC Train</option>
                <option>Non-AC Train</option>
                <option>Lunch Non AC Cabin</option>
                <option>Lunch AC Cabin</option>
            </select>
        </div>
        <div class="form-group">
            <label for="spotnames"> Spots Name:</label>
            <input type="text" class="form-control" id="" name="spotnames">
        </div>

        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" class="form-control" id="" name="price" required>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control-file" id="" name="image">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
 @endsection
