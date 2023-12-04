@extends('admin.master')
@section('content')
    <div class="container">
        <h2> See User Role Table </h2>
        <form action="{{ route('userrole.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="" name="name" required>
            </div>
            <div class="form-group">
                <label for="role" name="selectrole" class="font-weight-bold">Select Role</label>
                <div class="input-group">
                    <select name="role" class="custom-select form-control border-0 bg-light" id="" required>
                        <option selected disabled>Select Role...</option>
                        <option>Manager</option>
                        <option>Salesman</option>
                        <option>Account</option>

                    </select>
                </div>
            </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="text" class="form-control" id="" name="password" required>
                </div>
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" class="form-control-file" id="" name="image">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
