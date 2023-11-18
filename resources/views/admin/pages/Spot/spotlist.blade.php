

@extends('admin.master')
@section('content')


<a href="{{route('spot.form') }}" class="btn btn-primary mb-4 mt-4 ">Create Spot Details </a>
<table class="table table-hover text-center">

    <thead>
      <tr>
        <th scope="col">SI</th>
        <th scope="col">Location</th>
        <th scope="col">Spot Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($items as $key=>$item)

      <tr>
        <th scope="row">{{$key +1}}</th>
        <td>{{$item->location}}</td>
        <td>{{$item->spot_names}}</td>
        <td>
            <a href=""class="btn btn-primary">View</a>
            <a href=""class="btn btn-warning">Edit</a>
            <a href=""class="btn btn-danger">Delete</a>

          </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="w-25 mx-auto">
    {{$items-> links()}}
  </div>

  @endsection

