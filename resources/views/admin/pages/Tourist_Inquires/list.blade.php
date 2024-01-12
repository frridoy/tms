@extends('admin.master')
@section('content')

<h2> Tourist Inquiries</h2>

    <table class="table text-center align-center">
        <thead>
            <tr>
                <th scope="col">SI</th>
                <th scope="col">Name</th>
                <th scope="col">Contact</th>
                <th scope="col">Email</th>
                <th scope="col">Topic</th>
                <th scope="col">Message</th>
                {{-- <th class="container" scope="col">Action</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($foyzurs as $key => $foyzur)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $foyzur->name }}</td>
                    <td>{{ $foyzur->contact }}</td>
                    <td>{{ $foyzur->email }} Days</td>
                    <td>{{ $foyzur->topic }}</td>
                    <td>{{ $foyzur->message }}</td>
                    {{-- <td>
                        <a href="{{route('package.view',$package->id)}}" class="btn btn-primary">View</a>
                        <a href="{{route('package.edit',$package->id)}}" class="btn btn-warning">Edit</a>
                        <a href="{{route('package.delete',$package->id)}}" class="btn btn-danger">Delete</a>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
