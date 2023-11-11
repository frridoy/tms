@extends('admin.master')
@section('content')
<h3 class="uppercase shadow py-3  p-3">View User List</h3>
<table class="table mt-3 ">
    <thead class="">
      <tr>
        <th scope="col" class="">#</th>
        <th scope="col" class="">First</th>
        <th scope="col" class="">Last</th>
        <th scope="col" class="">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
@endsection
