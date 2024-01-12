@extends('admin.master')
@section('content')
    <a href="{{ route('userrole.form') }}" class="btn btn-primary mb-4 mt-4 "> Create User Role</a>

    <table class="table text-center align-center">
        <thead>
            <tr>
                <th scope="col">SI</th>
                <th scope="col">Name</th>
                <th scope="col">Role</th>
                <th scope="col">Email</th>
                <th scope="col"> User ID</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
                {{-- <th scope="col">Password</th>  --}}

            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($items as $key => $item)
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->role }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->id }}</td>
                    <td>
                        <img style="border-radius: 15%" width="40px" src="{{ url('/uploads//' . $item->image) }}"
                            alt="">
                    </td>


                    <td>
                        {{-- <a href="{{route('package.view',$package->id)}}"class="btn btn-primary">View</a>
                        <a href="{{route('package.edit',$package->id)}}"class="btn btn-warning">Edit</a>
                        <a href="{{route('package.delete',$package->id)}}"class="btn btn-danger">Delete</a> --}}
                        <a href="{{route('user.delete',$item->id)}}"class="btn btn-danger">Delete</a>
                    </td>
                    {{-- <td>{{ $item->password }}</td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>

    {{-- <div class="w-25 mx-auto">
        {{ $items->links() }}
    </div> --}}
@endsection
