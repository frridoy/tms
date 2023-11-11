@extends('admin.master')
@section('content')

<form action="{{ route('location.store') }}"method="post" >
    @csrf
    <div class="container">
        <h2>Create Package</h2>

        <form action="submit_form.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">

                <label for="name">Name:</label>
                <input type="text" class="form-control" id="" name="name" required>
            </div>
            <div class="form-group">
                <label for="distance">Distance:</label>
                <input type="text" class="form-control" id="" name="distance" required>
            </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</form>
@endsection
