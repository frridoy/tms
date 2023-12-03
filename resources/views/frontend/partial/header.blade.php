<header class="continer-fluid ">

    <div id="menu-jk" class="header-bottom">
        <div class="container">
            <div class="row nav-row align-items-center justify-content-between" >
                <div class="col-lg-2 col-md-2 logo">
                    <a href="...">
                        <img src="{{url('forntend/')}}/assets/images/logo.png" alt="">
                        <a data-toggle="collapse" data-target="#menu" href="..."><i class="fas d-block d-lg-none  small-menu fa-bars"></i></a>
                    </a>


                </div>

                <div class = " col-md-8 p-0 m-0">
                    <div id="menu" class="col-lg-9 col-md-6 d-none d-lg-block nav-col">

                        <ul class="navbad">

                        @guest
                            <li class="nav-item active p-0 m-0">
                                <a class="nav-link" href="{{route('registration')}}">Sign Up
                                </a>
                            </li>
                            <li class="nav-item active p-0 m-0">
                                <a class="nav-link" href="{{route('tourist.login')}}">Sign In
                                </a>
                            </li>
                        @endguest

                        @auth
                        <li class="nav-item active p-0 m-0">
                            <a class="nav-link" href="{{route('tourist.logout')}}">Logout
                            </a>
                        </li>
                        @endauth

                            <li class="nav-item active p-0 m-0">
                                <a class="nav-link" href="{{route('home')}}">Home
                                </a>
                            </li>
                            <li class="nav-item p-0 m-0">
                                <a class="nav-link" href="{{route('aboutus.website')}}">AboutUs</a>
                            </li>
                            <li class="nav-item p-0 m-0">
                                <a class="nav-link" href="{{route('ourpackage.website')}}">Packages</a>
                            </li>


                            <li class="nav-item p-0 m-0">
                                <a class="nav-link" href="contact_us.html">ContactUs</a>
                            </li>

                        </ul>


            </div>

            </div>

                <div class="container mt-0 col-md-2 justify-content-end mr-0 p-0 m-0 mb-0">
                    <div class="row justify-content-end">
                      <div class="col-md-14">
                        <form action="{{ route('package.search') }}" method="get" class="form-inline">
                          <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search Packages..." name="search">
                            <div class="input-group-append">
                              <button type="submit" class="btn btn-success">Search</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

        </div>
    </div>
</header>
