@extends('admin.master')
@section('content')

<form action="{{route('hotel.update', $items->id)}}" method="post">
    @csrf
    @method('put')
    <div class="container">
        <h2> Edit Hotel Details </h2>
        <form action="submit_form.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name"> Hotel Name:</label>
            <input value="{{$items->name}}" type="text" class="form-control" name="name" id="" required>
        </div>

        <div class="form-group">
            <label for="type"> Hotel Type:</label>
            <input value="{{$items->type}}" type="text" class="form-control" name="type" id="" required>
        </div>

        <div class="form-group">
            <label for="price"> Price:</label>
            <input value="{{$items->price}}" type="text" class="form-control" name="price" id="" required>
        </div>

    </div>
    <button type="submit" class="btn btn-primary"> Update </button>


</form>
{{-- </form> --}}


@endsection
