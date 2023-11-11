@extends('admin.master')
@section('content')

<a href="{{ url('/managepages/form') }}" class="btn btn-primary mb-4 mt-4 ">Create Package</a>
<table class="table table-hover text-center">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Code</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($items as $key=>$item)
      <tr>
        <th scope="row">{{$key + 1}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->code}}</td>
        <td>{{$item->price}}.00 BDT</td>
        <td>
            <a href=""class="btn btn-success">Edit</a>
            <a href=""class="btn btn-danger">Delete</a>

          </td>
      </tr>
      @endforeach
    </tbody>
  </table>


@endsection
