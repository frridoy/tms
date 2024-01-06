<header class="continer-fluid ">

    <div id="menu-jk" class="header-bottom row align-items-center" style="height: 4rem;" >
        <div class="container">
            <div class="row nav-row align-items-center">

                <div class=" col-md-9 p-0 m-0 ">
                    <div id="menu" class="col-lg-9 col-md-6 d-none d-lg-block nav-col">

                        <ul class="navbad">

                            @guest
                            <li class="nav-item active p-0 m-0">
                                <a class="nav-link" href="{{route('registration')}}" style="font-size:13px;">Sign Up
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
                            <li class="nav-item p-0 m-0">
                                <a class="nav-link" href="{{route('tourist.profile')}}">My Profile</a>
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
                                <a class="nav-link" href="{{route('contactus.website')}}">ContactUs</a>
                            </li>

                        </ul>


                    </div>

                </div>

                <div class="container mt-0 col-md-2 justify-content-end mr-0 p-0 m-0 mb-0">
                    <div class="row justify-content-end">
                        <div class="col-md-14">
                            <form action="{{ route('package.search') }}" method="get" class="form-inline">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Packages..."
                                        name="search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-danger">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
