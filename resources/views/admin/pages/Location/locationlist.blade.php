@extends('admin.master')
@section('content')


<a href="{{route('location.form') }}" class="btn btn-primary mb-4 mt-4 ">Create Location</a>
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
        <td>{{$hridoy->distance}} Kilometers</td>
        <td>
            <a href="{{route('location.view',$hridoy->id)}}"class="btn btn-primary">View</a>
            <a href="{{route('location.edit',$hridoy->id)}}" class="btn btn-warning">Edit</a>
            <a href="{{route('location.delete',$hridoy->id)}}"class="btn btn-danger">Delete</a>


          </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="w-25 mx-auto">
    {{$hridoys-> links()}}
  </div>

  @endsection
