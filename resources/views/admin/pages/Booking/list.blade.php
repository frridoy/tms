@extends('admin.master')
@section('content')
{{-- <a href="{{ route('touristbooking.form') }}" class="btn btn-primary mb-4 mt-4"> Tourist Reservation Form </a> --}}
 <h2> Tourist Booking List </h2>
 {{-- for searchb start --}}
  <div class="container mt-0 col-md-2 justify-content-end mr-0 p-0 m-0 mb-0">
    <div class="row justify-content-end">
      <div class="col-md-24">
        <form action="{{route('touristbooking.search')}}" method="get" class="form-inline">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search..." name="search">
            <div class="input-group-append">
              <button type="submit" class="btn btn-success">Search</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
{{-- end search --}}
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Number</th>
        <th scope="col">Address</th>
        <th scope="col">Code</th>
        <th scope="col">Room</th>
        <th scope="col">Food</th>
        <th scope="col">Quantity</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($bookings as $key=> $booking)
      <tr>
        <th scope="row"> {{$key+1}}</th>
        <td>{{$booking->name}}</td>
        <td>{{$booking->email}}</td>
        <td>{{$booking->number}}</td>
        <td>{{$booking->address}}</td>
        <td>{{$booking->code}}</td>
        <td>{{$booking->chooseroom}}</td>
        <td>{{$booking->choosefoodmenu}}</td>
        <td>{{$booking->quantity}}</td>
        <td>

            <a href="" class="btn btn-info">View</a>
        </td>
      </tr>
     @endforeach
    </tbody>
  </table>

@endsection
