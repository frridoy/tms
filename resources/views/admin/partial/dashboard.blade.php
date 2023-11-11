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
                          <a href="user-teams.html" class="metric metric-bordered align-items-center">
                            <h2 class="metric-label"> Teams </h2>
                            <p class="metric-value h3">
                              <span class="value">8</span>
                            </p>
                          </a> <!-- /.metric -->
                        </div><!-- /metric column -->
                        <!-- metric column -->
                        <div class="col">
                          <!-- .metric -->
                          <a href="user-projects.html" class="metric metric-bordered align-items-center">
                            <h2 class="metric-label"> Projects </h2>
                            <p class="metric-value h3">
                           <span class="value">12</span>
                            </p>
                          </a> <!-- /.metric -->
                        </div><!-- /metric column -->
                        <!-- metric column -->
                        <div class="col">
                          <!-- .metric -->
                          <a href="user-tasks.html" class="metric metric-bordered align-items-center">
                            <h2 class="metric-label"> Active Tasks </h2>
                            <p class="metric-value h3">
                             <span class="value">64</span>
                            </p>
                          </a> <!-- /.metric -->
                        </div><!-- /metric column -->
                      </div>
                    </div><!-- metric column -->
                    <div class="col-lg-3">
                      <!-- .metric -->
                      <a href="user-tasks.html" class="metric metric-bordered">
                      <h2 class="metric-label"> Total Events </h2>
                        <p class="metric-value h3">
                        <span class="value">8</span>
                        </p>
                      </a> <!-- /.metric -->
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
