@extends('admin.master')
@section('content')


<div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
              <!-- .page-title-bar -->
              <header class="page-title-bar">
                <div class="d-flex flex-column flex-md-row">
                  <p class="lead">
                    <span class="font-weight-bold">DASHBOARD</span>
                  </p>
                </div>
              </header><!-- /.page-title-bar -->
              <!-- .page-section -->
              <div class="page-section">
                <!-- .section-block -->
                <div class="section-block">
                  <!-- metric row -->
                  <div class="metric-row">
                    <div class="col-lg-9">
                      <div class="metric-row metric-flush">
                        <!-- metric column -->
                        <div class="col">
                          <!-- .metric -->
                          <a href="{{route('tourpackages')}}" class="metric metric-bordered align-items-center">
                            <h2 class="metric-label">Total Package</h2>
                            <p class="metric-value h3">
                              <span class="value"> {{ $countPackage->count()}} </span>
                            </p>
                          </a> <!-- /.metric -->
                        </div><!-- /metric column -->
                        <!-- metric column -->
                        <div class="col">
                          <!-- .metric -->
                          <a href="{{route('user.role')}}" class="metric metric-bordered align-items-center">
                            <h2 class="metric-label"> Total Tourist </h2>
                            <p class="metric-value h3">
                           <span class="value">{{$countTourist->count()}}</span>
                            </p>
                          </a> <!-- /.metric -->
                        </div><!-- /metric column -->
                        <!-- metric column -->
                        <div class="col">
                          <!-- .metric -->
                          <a href="{{route('tourist.booking')}}" class="metric metric-bordered align-items-center">
                            <h2 class="metric-label"> Total Booking </h2>
                            <p class="metric-value h3">
                             <span class="value">{{$countBooking->count()}}</span>
                            </p>
                          </a> <!-- /.metric -->
                        </div><!-- /metric column -->
                      </div>
                    </div><!-- metric column -->
                    <!-- /.metric -->
                    </div><!-- /metric column -->
                  </div><!-- /metric row -->
                </div><!-- /.section-block -->
                <!-- grid row -->
                <div class="row">
                  <!-- grid column -->
                  <div class="col-12 col-lg-12 col-xl-4">
                    <!-- .card -->

                  </div><!-- /grid column -->
                  <!-- grid column -->
                  <div class="col-12 col-lg-6 col-xl-4">
                    <!-- .card -->
                  </div><!-- /grid column -->
                  <!-- grid column -->
                  <div class="col-12 col-lg-6 col-xl-4">
                    <!-- .card -->
                  </div><!-- /grid column -->
                </div><!-- /grid row -->
                <!-- card-deck-xl -->
                <div class="card-deck-xl">
                  <!-- .card -->

                  <!-- .card -->
                </div><!-- /card-deck-xl -->
              </div><!-- /.page-section -->
            </div><!-- /.page-inner -->
          </div><!-- /.page -->


@endsection
