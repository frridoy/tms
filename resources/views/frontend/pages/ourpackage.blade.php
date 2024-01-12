{{-- <div class="popular-pack no-bgpack container-fluid">
    <div class="container">
        <div class="session-title">
            <h2>Our Packages</h2>
            <p>"We always strive to provide the best packages, allowing you to explore the beauty of nature at an affordable price."</p>
        </div>
        <div class="row pack-row">
          @foreach ($packages as $package )
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="pack-col">
                <img src="{{ url('/uploads//' . $package->image) }}" alt="" >
                <div class="revire row no-margin">
                    <ul class="rat">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>

                    <span class="pric">
                        {{$package->price}}.00 BDT
                    </span>
                </div>
                <div class="detail row no-margin">
                    <h4>{{$package->name}}</h4>
                    <p> Duration: {{$package->duration}} Days</p>
                    <div class="text-center" >
                        <button class="btn btn-outline-success mt-2 "><a href="{{route('singlepackage.view',$package->id)}}">View The Package</a></button>
                    </div>


                </div>
                <div class="options row no-margin">
                    <ul>
                        <li><i class="fas fa-car"></i></li>
                        <li><i class="fab fa-fly"></i></li>
                        <li><i class="fas fa-cocktail"></i></li>
                        <li><i class="fas fa-umbrella-beach"></i></li>
                        <li><i class="far fa-bell"></i></li>

                    </ul>
                </div>
            </div>
        </div>
          @endforeach



        </div>
    </div>
</div> --}}

@extends('frontend.master')
@section('content')

<div class="popular-pack container-fluid bg-image p-0" >
    <div class=" p-4">
    {{-- style="background-image: url('https://images.unsplash.com/photo-1488085061387-422e29b40080?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"> --}}

        {{-- <div class=" p-4" style="background-color: black; margin: 0;"> --}}
        <br> <br>
            <h2 class="text-center">Our Packages</h2>
            <p class="text-center">"We always strive to provide the best packages, allowing you to explore the beauty of nature at an affordable price."</p>

        <div class="row pack-row">
          @foreach ($packages as $package )
          <div class="col-lg-4 col-md-6 mb-5 col-sm-6">
            <div class="pack-col">
                <img src="{{ url('/uploads//' . $package->image) }}" alt="" >
                <div class="revire row no-margin">
                    {{-- <ul class="rat">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul> --}}

                    <span class="pric">
                        {{$package->price}}.00 BDT
                    </span>
                </div>
                <div class="detail row no-margin">
                    <h4>{{$package->name}}</h4>
                    <p> Duration: {{$package->duration}} Days</p>
                    <div class="text-center" >
                        <button class="btn btn-outline-success mt-2 "><a href="{{route('singlepackage.view',$package->id)}}">View The Package</a></button>
                    </div>


                </div>
                {{-- <div class="options row no-margin">
                    <ul>
                        <li><i class="fas fa-car"></i></li>
                        <li><i class="fab fa-fly"></i></li>
                        <li><i class="fas fa-cocktail"></i></li>
                        <li><i class="fas fa-umbrella-beach"></i></li>
                        <li><i class="far fa-bell"></i></li>

                    </ul>
                </div> --}}
            </div>
        </div>
          @endforeach



        </div>
    </div>
</div>
@endsection
