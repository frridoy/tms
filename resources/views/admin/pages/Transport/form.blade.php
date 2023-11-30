@extends('admin.master')
@section('content')

<form action="{{ route('transport.store') }}"method="post" >
    @csrf
    <div class="container">
        <br>
        <h2>Create Transport Details</h2>

        <form action="submit_form.php" method="POST" enctype="multipart/form-data">

            {{-- for option
            <div class="form-group">

                <label for="travel_by">Travel By: </label>

           <select name="travel" id="" class="form-control" required>
               <option value="1">Bus</option>>
                  <option value="2">Train</option>

            </select>

            </div> --}}
            <div class="form-group">
                <label for="travelby">Travel By: </label>
                <input type="text" class="form-control" id="" name="travelby" required>
            </div>


            <div class="form-group">
                <label for="type">Type: </label>
                <input type="text" class="form-control" id="" name="type" required>
            

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</form>
@endsection
