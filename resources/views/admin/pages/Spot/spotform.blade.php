@extends('admin.master')
@section('content')

<form action="{{ route('spot.store') }}"method="post" >
    @csrf
    <div class="container">
        <br>
        <h2>Create Spot Details</h2>

        <form action="submit_form.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">

                <label for="location">Location</label>
                <input type="text" class="form-control" id="" name="location" required>
            </div>
            <div class="form-group">
                <label for="spot_names">Spot Names</label>
                <input type="text" class="form-control" id="" name="spot_names" required>
            </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</form>
@endsection
