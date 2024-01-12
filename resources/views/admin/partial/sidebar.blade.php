<aside class="app-aside app-aside-expand-md app-aside-light">

    <div class="aside-content">

        <header class="aside-header d-block d-md-none">

            <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside"><span
                    class="user-avatar user-avatar-lg"><img src="assets/images/avatars/profile.jpg" alt=""></span>
                <span class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span> <span
                    class="account-summary"><span class="account-name">FR Ridoy</span> <span
                        class="account-description">Marketing Manager</span></span></button>
            <div id="dropdown-aside" class="dropdown-aside collapse">

                <div class="pb-3">
                    <a class="dropdown-item" href="user-profile.html"><span class="dropdown-icon oi oi-person"></span>
                        Profile</a> <a class="dropdown-item" href="auth-signin-v1.html"><span
                            class="dropdown-icon oi oi-account-logout"></span> Logout</a>
                </div>
        </header>

        <div class="aside-menu overflow-hidden">

            <nav id="stacked-menu" class="stacked-menu">

                <ul class="menu">

                    <li class="menu-item has-active">
                        <a href="{{ route('dashboard') }}" class="menu-link"><span
                                class="menu-text">Dashboard</span></a>
                    </li>

                    <li class="menu-item has-child">
                        <a href="{{ route('tourpackages') }}" class="menu-link"> <span class="menu-text">Tour
                                Package</span></a>
                        {{-- <ul class="menu">
                    <li class="menu-item">
                      <a href="page-clients.html" class="menu-link">Clients</a>
                    </li>
                    <li class="menu-item">
                      <a href="page-teams.html" class="menu-link">Teams</a> --}}
                    </li>
                    {{-- </ul> --}}




                    <li class="menu-item">
                        <a href="{{ route('tourist.booking') }}" class="menu-link"> <span class="menu-text"> Tourist
                                Booking</span></a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('reservation.list') }}" class="menu-link"> <span class="menu-text">Tourist
                                H & T</span></a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('user.role') }}" class="menu-link"> <span class="menu-text">User Role</span></a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('contactus.list') }}" class="menu-link"> <span class="menu-text">Tourist Inquiries</span></a>
                    </li>


                    <li class="menu-item">
                        <a href="{{ route('booking.report') }}" class="menu-link"> <span class="menu-text">Report Genarate</span></a>
                    </li>


                    {{-- <div class="dropdown show">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Report Generate
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" href="{{ route('booking.report') }}">Tourist All Booking</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </div> --}}



            </nav>
        </div>

    </div>
</aside>
