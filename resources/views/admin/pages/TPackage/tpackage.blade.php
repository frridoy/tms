@extends('admin.master')
@section('content')
    <a href="{{ route('tourpackages.form') }}" class="btn btn-primary mb-4 mt-4 ">Create Package</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Code</th>
                <th scope="col">Calender</th>
                <th scope="col">description</th>
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
                    <td>{{ $package->calender }}</td>
                    <td>{{ $package->description }}</td>
                    <td>{{ $package->price }}</td>
                    <td>
                        <img style="border-radius: 60px;" width="7%" src="{{url('/uploads//'.$package->image)}}" alt="">

                    </td>
                    <td>
                      <a href=""class="btn btn-primary">View</a>
                      <a href=""class="btn btn-warning">Edit</a>
                      <a href=""class="btn btn-danger">Delete</a>

                    </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- <div class="container">
      <h2>Create Package</h2>
      <form action="submit_form.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="code">Code:</label>
          <input type="text" class="form-control" id="code" name="code" required>
        </div>
        <div class="form-group">
          <label for="calendar">Calendar:</label>
          <input type="date" class="form-control" id="calendar" name="calendar" required>
        </div>
        <div class="form-group">
          <label for="destination">Description:</label>
          <input type="text" class="form-control" id="destination" name="destination" required>
        </div>
        <div class="form-group">
          <label for="price">Price:</label>
          <input type="number" class="form-control" id="price" name="price" required>
        </div>
        <div class="form-group">
          <label for="image">Image:</label>
          <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div> -->
@endsection
