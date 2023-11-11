@extends('admin.master')
@section('content')

<form action="{{ route('tour-packages.store') }}" method="post">
    @csrf
    <div class="container">
        <h2>Create Package</h2>
        <form action="submit_form.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="" name="name" required>
            </div>
            <div class="form-group">
                <label for="code">Code:</label>
                <input type="text" class="form-control" id="" name="code" required>
            </div>
            <div class="form-group">
                <label for="calendar">Calendar:</label>
                <input type="date" class="form-control" id="" name="calendar" required>
            </div>
            <div class="form-group">
                <label for="destination">Description:</label>
                <input type="text" class="form-control" id="" name="description" required>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" class="form-control" id="" name="price" required>
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control-file" id="" name="image" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</form>




@endsection
