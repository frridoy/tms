@extends('admin.master')
@section('content')
    <a href="{{ route('tourpackages.form') }}" class="btn btn-primary mb-4 mt-4 ">Create Package</a>

    <table class="table text-center align-center">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Code</th>
                <th scope="col">Duration</th>
                <th scope="col">Description</th>
                <th scope="col">Hotel</th>
                <th scope="col">Transport</th>
                <th scope="col">Spot</th>
                <th scope="col">Price</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($packages as $key => $package)
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $package->name }}</td>
                    <td>{{ $package->code }}</td>
                    <td>{{ $package->duration }} Days</td>
                    <td>{{ $package->description }}</td>
                    <td>{{ $package->hotelcondition }}</td>
                    <td>{{ $package->transportcondition }}</td>
                    <td>{{ $package->spotnames }}</td>
                    <td>{{ $package->price }} BDT</td>
                    <td>
                        <img style="border-radius: 15%" width="70px"  src="{{ url('/uploads//' . $package->image) }}" alt="">
                    </td>
                    <td>
                        <a href="{{route('package.view',$package->id)}}"class="btn btn-primary">View</a>
                        <a href="{{route('package.edit',$package->id)}}"class="btn btn-warning">Edit</a>
                        <a href="{{route('package.delete',$package->id)}}"class="btn btn-danger">Delete</a>
                    </td>
                   </tr>
            @endforeach
        </tbody>
    </table>

    <div class="w-25 mx-auto">
        {{ $packages->links() }}
    </div>
@endsection
