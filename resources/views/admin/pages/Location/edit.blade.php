@extends('admin.master')
@section('content')

<form action="{{ route('location.update',$locationval->id) }}"method="post"enctype="multipart/form-data" >
    @csrf
    @method('put')

    <div class="container">
        <h2>Edit Location</h2>

        <form action="submit_form.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">

                <label for="name">Name:</label>
                <input value="{{$locationval->name}}" type="text" class="form-control" id="" name="name" required>
            </div>
            <div class="form-group">
                <label for="distance">Distance:</label>
                <input value="{{$locationval->distance}}" type="text" class="form-control" id="" name="distance" required>
            </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</form>
@endsection
