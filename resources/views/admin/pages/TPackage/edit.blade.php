@extends('admin.master')
@section('content')
    <div class="container">
        <h2>Edit Package</h2>
        <form action="{{ route('package.update', $package->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Name:</label>
                <input value="{{ $package->name }}" type="text" class="form-control" id="" name="name" required>
            </div>
            <div class="form-group">
                <label for="code">Code:</label>
                <input value="{{ $package->code }}" type="text" class="form-control" id="" name="code"
                    required>
            </div>
            <div class="form-group">
                <label for="duration">Duration:</label>
                <input value="{{ $package->duration }}" type="text" class="form-control" id="" name="duration"
                    required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <input value="{{ $package->description }}" type="text" class="form-control" id=""
                    name="description" required>
            </div>

            <div class="form-group">
                <label for="hotelcondition">Hotel Type:</label>
                <select  class="form-control" id="" name="hotelcondition" required>
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
                </select>
            </div>
            <div class="form-group">
                <label for="spotnames"> Spots Name:</label>
                <input type="text" value="{{ $package->spotnames }}"  class="form-control" id="" name="spotnames">
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input value="{{ $package->price }}" type="number" class="form-control" id="" name="price"
                    required>
            </div>

            <div class="form-group">
                <label for="image">Image:</label>
                <input value="{{ $package->image }}" type="file" class="form-control-file" id="" name="image">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
