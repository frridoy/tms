@extends('admin.master')
@section('content')


<a href="{{route('transport.form') }}" class="btn btn-primary mb-4 mt-4 ">Create Transport </a>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">SI</th>
        <th scope="col">Travel By</th>
        <th scope="col">Type</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($items as $key=> $item)

      <tr>
        <th scope="row"> {{$key+1}} </th>
        <td> {{$item->travelby}} </td>
        <td> {{$item->type}} </td>
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
