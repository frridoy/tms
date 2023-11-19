

      <aside class="app-aside app-aside-expand-md app-aside-light">

        <div class="aside-content">

          <header class="aside-header d-block d-md-none">

            <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside"><span class="user-avatar user-avatar-lg"><img src="assets/images/avatars/profile.jpg" alt=""></span> <span class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span> <span class="account-summary"><span class="account-name">Beni Arisandi</span> <span class="account-description">Marketing Manager</span></span></button>
            <div id="dropdown-aside" class="dropdown-aside collapse">

              <div class="pb-3">
                <a class="dropdown-item" href="user-profile.html"><span class="dropdown-icon oi oi-person"></span> Profile</a> <a class="dropdown-item" href="auth-signin-v1.html"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
            </div>
          </header>

          <div class="aside-menu overflow-hidden">

            <nav id="stacked-menu" class="stacked-menu">

              <ul class="menu">

                <li class="menu-item has-active">
                  <a href="{{route('dashboard')}}" class="menu-link" ><span class="menu-text">Dashboard</span></a>
                </li>

                <li class="menu-item has-child">
                  <a href="{{route('tourpackages')}}" class="menu-link"> <span class="menu-text">Tour Package</span></a>
                  {{-- <ul class="menu">
                    <li class="menu-item">
                      <a href="page-clients.html" class="menu-link">Clients</a>
                    </li>
                    <li class="menu-item">
                      <a href="page-teams.html" class="menu-link">Teams</a> --}}
                    </li>
                  {{-- </ul> --}}


                <li class="menu-item">
                  <a href="{{route('location')}}" class="menu-link"> <span class="menu-text">Location</span></a>
                </li>





                  <li class="menu-item">
                    <a href="{{route('hotel')}}" class="menu-link"> <span class="menu-text">Hotel</span></a>
                  </li>


                  <li class="menu-item has-child">
                    <a href="{{route('spot')}}" class="menu-link"><span class=""></span> <span class="menu-text">Spot</span></a>
                    {{-- <ul class="menu"> --}}
                </li>

                <li class="menu-item has-child">
                    <a href="#" class="menu-link"><span class=""></span>
                        <span class="menu-text">Transport</span></a>
                    {{-- <ul class="menu"> --}}
                    {{-- </ul> --}}
                </li>

                <li class="menu-item">
                    <a href="" class="menu-link"> <span class="menu-text">Manage User</span></a>
                  </li>

              {{-- </ul> --}}
            </nav>
          </div>

        </div>
      </aside>
