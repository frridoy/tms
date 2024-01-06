<header class="app-header app-header-dark">

    <div class="top-bar">

        <div class="top-bar-brand">
            <h1>TMS</h1>
        </div>
        {{-- for search start --}}
        {{-- <div>
            <div class="container mt-0 col-md-2 justify-content-end mr-0 p-0 m-0 mb-0">
                <div class="row justify-content-end">
                    <div class="col-md-24">
                        <form action="{{ route('touristbooking.search') }}" method="get" class="form-inline">
                            <div class="input-group"
                                style="position: relative;
                  left: 600px;
                  top: 10px;
                  width: 34em;
              } ">
                                <input type="text" class="form-control" placeholder="Search..." name="search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-success">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}

        {{-- new one start here --}}

            <div class="container mt-2 col-md-6 justify-content-center">
            <div class="row justify-content-end">
                <div class="col-md-24">
                    <form action="{{ route('touristbooking.search') }}" method="get" class="form-inline">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." name="search">

                            <!-- Start Date Input -->
                            <input type="date" class="form-control" placeholder="Start Date" name="start_date">

                            <!-- End Date Input -->
                            <input type="date" class="form-control" placeholder="End Date" name="end_date">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-success">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

{{-- for search end --}}

        <div class="top-bar-list">

            <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">

                <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside"
                    aria-label="toggle menu"><span class="hamburger-box"><span
                            class="hamburger-inner"></span></span></button>
            </div>

            <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">


                <div class="dropdown d-none d-md-flex">

                    <button class="btn-account" type="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><span class="user-avatar user-avatar-md"><img
                                src="https://i.ibb.co/sCw4qZ6/1696273943851-2-1.jpg" alt=""></span> <span
                            class="account-summary pr-lg-4 d-none d-lg-block"><span class="account-name">FR Ridoy</span>
                            <span class="account-description">Web Developer</span></span></button>

                    <div class="dropdown-menu">
                        <div class="dropdown-arrow d-lg-none" x-arrow=""></div>
                        <div class="dropdown-arrow ml-3 d-none d-lg-block"></div>
                        <a class="dropdown-item" href="{{ route('adminprofile') }}"> Profile </a>
                        <a class="dropdown-item" href="{{ route('admin.logout') }}"> Logout </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
