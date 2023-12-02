@extends('admin.master')
@section('content')

<form action="{{route('hotel.store')}}" method="post">
    @csrf
    <div class="container">
        <h2> Create Hotel </h2>
        <form action="submit_form.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="hotelname"> Hotel Name:</label>
            <input type="text" class="form-control" name="hotelname" id="" required>
        </div>

        <div class="form-group">
            <label for="hoteltype"> Hotel Type:</label>
            <input type="text" class="form-control" name="hoteltype" id="" required>
        </div>

        <div class="form-group">
            <label for="hotelprice"> Price:</label>
            <input type="number" class="form-control" name="hotelprice" id="" required>
        </div>

    </div>
    <button type="submit" class="btn btn-primary">Submit </button>


</form>
{{-- </form> --}}


@endsection
