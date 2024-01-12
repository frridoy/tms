


@extends('admin.master')
@section('content')
    <a href="{{ route('reservation.form') }}" class="btn btn-primary mb-4 mt-4 ">Create Hotel and Transport</a>

    <table class="table text-center align-center w-100">
        <thead>
            <tr>
                <th scope="col">SI</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Date</th>
                <th scope="col">Transport</th>
                <th scope="col">Seat</th>
                <th scope="col">Address</th>
                <th scope="col">Time</th>
                <th scope="col">Hotel</th>
                <th scope="col">Room</th>
                <th class="container" scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($reserves as $key => $reserve)
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $reserve->name }}</td>
                    <td>{{ $reserve->email }}</td>
                    <td>{{ $reserve->pickup }}</td>
                    <td>{{ $reserve->transportname }}</td>
                    <td>{{ $reserve->seat }}</td>
                    <td>{{ $reserve->address}}</td>
                    <td>{{ $reserve->time }}</td>
                    <td>{{ $reserve->hotelname }}</td>
                    <td>{{ $reserve->room }}</td>
                    <td>
                        <a href="{{route('reservation.view',$reserve->id)}}"class="btn btn-primary">View</a>
                        <a href="{{route('reservation.delete',$reserve->id)}}"class="btn btn-danger">View</a>
                        {{-- <a href="{{route('package.edit',$package->id)}}"class="btn btn-warning">Edit</a>
                        <a href="{{route('package.delete',$package->id)}}"class="btn btn-danger">Delete</a> --}}
                    </td>
                   </tr>
            @endforeach
        </tbody>
    </table>


    {{-- <div class="w-25 mx-auto">
        {{ $packages->links() }}
    </div> --}}

@endsection







