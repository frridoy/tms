@extends('admin.master')
@section('content')

<br>
<a href="{{route('managebooking.list')}}" class="btn btn-primary mb-4 mt-4 ">List of Booking</a>
<form action="" method="post">
@csrf

    <div class="form-outline mb-4">
        <label class="form-label" for="form7Example1">Name</label>
        <input type="text" id="form7Example1" class="form-control" />
      </div>

      <!-- Email input -->
      <div class="form-outline mb-4">
          <label class="form-label" for="form7Example2">Email address</label>
        <input type="email" id="form7Example2" class="form-control" />
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>




</form>


@endsection
