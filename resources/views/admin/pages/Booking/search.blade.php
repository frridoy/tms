@extends('admin.master')
@section('content')
    <br>
    <div class="fw-normal mb-4">
        <h2
            class="fw-normal fs-5 mx-auto text-center rounded-pill p-2 w-50 mb-5
            @if ($bookings->count() > 0) bg-success
            @else
                bg-danger text-white @endif">
            @if ($bookings->count() === 1)
                Found 1 matching data for "{{ request()->search }}"
            @elseif ($bookings->count() > 1)
                Found {{ $bookings->count() }} matching data for "{{ request()->search }}"
            @else
                No Data found for "{{ request()->search }}"
            @endif
        </h2>

    </div>
    @if ($bookings->count() > 0)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Number</th>
                    <th scope="col">Address</th>
                    <th scope="col">Code</th>
                    <th scope="col">Room</th>
                    <th scope="col">Food</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $key => $booking)
                    <tr>
                        <th scope="row"> {{ $key + 1 }}</th>
                        <td>{{ $booking->name }}</td>
                        <td>{{ $booking->email }}</td>
                        <td>{{ $booking->number }}</td>
                        <td>{{ $booking->address }}</td>
                        <td>{{ $booking->code }}</td>
                        <td>{{ $booking->chooseroom }}</td>
                        <td>{{ $booking->choosefoodmenu }}</td>
                        <td>{{ $booking->quantity }}</td>
                        <td>

                            <a href="" class="btn btn-info">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
