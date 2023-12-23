@extends('admin.master')
@section('content')
    <div class="page">

        <div class="page-inner">

            <header class="page-title-bar">
                <div class="d-flex flex-column flex-md-row">
                    <p class="lead">
                        <span class="font-weight-bold">DASHBOARD</span>
                    </p>
                </div>
            </header>

            <div class="page-section">

                <div class="section-block">

                    <div class="metric-row">
                        <div class="col-lg-9">
                            <div class="metric-row metric-flush">

                                <div class="col">

                                    <a href="{{ route('tourpackages') }}" class="metric metric-bordered align-items-center">
                                        <h2 class="metric-label">Total Packages</h2>
                                        <p class="metric-value h3">
                                            <span class="value"> {{ $countPackage->count() }} </span>
                                        </p>
                                    </a>
                                </div>

                                <div class="col">

                                    <a href="{{ route('user.role') }}" class="metric metric-bordered align-items-center">
                                        <h2 class="metric-label"> Total Tourists </h2>
                                        <p class="metric-value h3">
                                            <span class="value">{{ $countTourist->count() }}</span>
                                        </p>
                                    </a>
                                </div>

                                <div class="col">

                                    <a href="{{ route('tourist.booking') }}"
                                        class="metric metric-bordered align-items-center">
                                        <h2 class="metric-label"> Total Booking </h2>
                                        <p class="metric-value h3">
                                            <span class="value">{{ $countBooking->count() }}</span>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-12 col-lg-12 col-xl-4">


                </div>
                <div class="col-12 col-lg-6 col-xl-4">

                </div>
                <div class="col-12 col-lg-6 col-xl-4">

                </div>
            </div>
            <div class="card-deck-xl">

            </div>
        </div>
    </div>
    </div>
@endsection
