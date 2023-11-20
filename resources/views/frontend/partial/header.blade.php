<header class="continer-fluid ">

    <div id="menu-jk" class="header-bottom">
        <div class="container">
            <div class="row nav-row">
                <div class="col-lg-3 col-md-12 logo">
                    <a href="index.html">
                        <img src="{{url('forntend/')}}/assets/images/logo.png" alt="">
                        <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-lg-none  small-menu fa-bars"></i></a>
                    </a>

                </div>
                <div id="menu" class="col-lg-9 col-md-12 d-none d-lg-block nav-col">

                            <ul class="navbad">
                            @guest
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{route('registration')}}">Registration
                                    </a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{route('tourist.login')}}">Login
                                    </a>
                                </li>


                            @endguest

                            @auth
                            <li class="nav-item active">
                                <a class="nav-link" href="{{route('tourist.logout')}}">Logout
                                </a>
                            </li>
                            @endauth

                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about_us.html">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="packages.html">Packages</a>
                                </li>
{{--
                                <li class="nav-item">
                                    <a class="nav-link" href="gallery.html">Gallery</a>
                                </li> --}}
{{--
                                <li class="nav-item">
                                    <a class="nav-link" href="blog.html">Blog</a>
                                </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link" href="contact_us.html">Contact US</a>
                                </li>




                            </ul>


                </div>
            </div>
        </div>
    </div>
</header>
