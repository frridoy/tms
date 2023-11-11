@extends('admin.master')
@section('content')
    <a href="{{ route('hotel.form') }}" class="btn btn-primary mb-4 mt-4"> Create Hotel Details</a>

    <table class="table table-hover text-center">
        <thead>
            <tr>
                <th scope="col"> Sl </th>
                <th scope="col"> Name </th>
                <th scope="col"> Type </th>
                <th scope="col"> Price </th>
                <th scope="col"> Action </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $key => $item)
                <tr>
                    <th scope="row"> {{ $key + 1 }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->type }}</td>
                    <td>{{ $item->price }}.00 BDT</td>
                    <td>
                        <a href="" class="btn btn-warning"> Edit </a>
                        <a href="" class="btn btn-danger"> Delete </a>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
        <div class="w-25 mx-auto">
            {{ $items->links() }}
        </div>
@endsection
