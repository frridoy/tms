@extends('admin.master')
 @section('content')

 <div class="container">
    <h2>Edit Package</h2>
    <form action="{{ route('package.update',$package->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="name">Name:</label>
            <input value={{$package->name}}  type="text" class="form-control" id="" name="name" required>
        </div>
        <div class="form-group">
            <label for="code">Code:</label>
            <input value={{$package->code}} type="text" class="form-control" id="" name="code" required>
        </div>
        <div class="form-group">
            <label for="duration">Duratio:n</label>
            <input value={{$package->duration}} type="text" class="form-control" id="" name="duration" required>
        </div>
        <div class="form-group">
            <label for="destination">Description:</label>
            <input value={{$package->description}} type="text" class="form-control" id="" name="description" required>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input value={{$package->price}} type="number" class="form-control" id="" name="price" required>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input value={{$package->image}} type="file" class="form-control-file" id="" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
 @endsection
