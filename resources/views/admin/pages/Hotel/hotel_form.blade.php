@extends('admin.master')
@section('content')

<form action="{{route('hotel.store')}}" method="post">
    @csrf
    <div class="container">
        <h2> Create Hotel </h2>
        <form action="submit_form.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name"> Hotel Name:</label>
            <input type="text" class="form-control" name="name" id="" required>
        </div>

        <div class="form-group">
            <label for="type"> Hotel Type:</label>
            <input type="text" class="form-control" name="type" id="" required>
        </div>

        <div class="form-group">
            <label for="price"> Price:</label>
            <input type="text" class="form-control" name="price" id="" required>
        </div>

    </div>
    <button type="submit" class="btn btn-primary">Submit </button>


</form>
{{-- </form> --}}


@endsection
