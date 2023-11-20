@extends('admin.master')
@section('content')


<a href="{{route('location.form') }}" class="btn btn-primary mb-4 mt-4 ">Create Package</a>
<table class="table table-hover text-center">

    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Distance</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($hridoys as $key=>$hridoy)

      <tr>
        <th scope="row">{{$key +1}}</th>
        <td>{{$hridoy->name}}</td>
        <td>{{$hridoy->distance}}</td>
        <td>
            <a href=""class="btn btn-primary">View</a>
            <a href=""class="btn btn-waring">Edit</a>
            <a href=""class="btn btn-danger">Delete</a>


          </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="w-25 mx-auto">
    {{$hridoys-> links()}}
  </div>

  @endsection
