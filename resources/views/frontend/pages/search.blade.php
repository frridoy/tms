@extends('frontend.master')
@section('content')

<div class="popular-pack no-bgpack container-fluid">
    <div class="container">
        <div class="session-title">

                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-12 text-center">

                            <h4 class="font-weight-bold text-success mb-4"> Your Search Result: {{ request()->search }} matched with {{$packages->count()}} Package !</h4>
                            
                        </div>
                    </div>
                </div>

<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

@if($packages->count()>0)
    @foreach ($packages as $package)

        </div>
        <div class="row pack-row">
            @foreach ($packages as $package)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="pack-col">
                        <img src="{{ url('/uploads//' . $package->image) }}" alt="">
                        <div class="revire row no-margin">
                            <ul class="rat">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>

                            <span class="pric">
                                {{ $package->price }}.00 BDT
                            </span>
                        </div>
                        <div class="detail row no-margin">
                            <h4>{{ $package->name }}</h4>
                            <p> Duration: {{ $package->duration }} Days</p>
                            <div class="text-center">
                                <button class="btn btn-outline-success mt-2 "><a
                                        href="{{ route('singlepackage.view', $package->id) }}">View The
                                        Package</a></button>
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
</div>

@endforeach

@else

<h2 class="font-weight-bold text-danger mb-4">No Package found!!!</h2>

@endif


</div>
@endsection
