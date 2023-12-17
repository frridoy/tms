<div class="container">

    <div class="row d-flex align-items-center justify-content-center  ">
        <div class="col-md-3">
              <table class="text-dark table table-sm table-dark">
                <div class="text-dark"> <h6>My Booking Info</h6> </div>
                <thead>
                  <tr>
        <th scope="col">SI</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Number</th>
        <th scope="col">Address</th>
        <th scope="col">Code</th>
        <th scope="col">Room</th>
        <th scope="col">Food</th>
        <th scope="col">Quantity</th>
        {{-- <th scope="col">Action</th> --}}
                  </tr>
                </thead>
                <tbody>
                  @foreach($mybooking as $detail)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$detail->name}}</td>
                            <td>{{$detail->email}}</td>
                            <td>{{$detail->number}}</td>
                            <td>{{$detail->address}}</td>
                            <td>{{$detail->code}}</td>
                            <td>{{$detail->chooseroom}}.BDT</td>
                            <td>{{$detail->choosefoodmenu}}</td>
                            <td>{{$detail->quantity}}</td>

{{--
                              <a class="btn btn-danger" href="{{Route('request',$detail->id)}}">View Request</a>
                              <a class="btn btn-danger" href="{{Route('my.post.edit',$detail->id)}}">Edit</a> --}}

                        </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>