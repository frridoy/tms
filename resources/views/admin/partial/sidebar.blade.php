{{--
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<aside class="app-aside app-aside-expand-md app-aside-light">
        <!-- .aside-content -->
        <div class="aside-content">
          <!-- .aside-header -->
          <header class="aside-header d-block d-md-none">
            <!-- .btn-account -->
            <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside"><span class="user-avatar user-avatar-lg"><img src="assets/images/avatars/profile.jpg" alt=""></span> <span class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span> <span class="account-summary"><span class="account-name">FR Ridoy</span> <span class="account-description">Web Developer</span></span></button> <!-- /.btn-account -->
            <!-- .dropdown-aside -->
            <div id="dropdown-aside" class="dropdown-aside collapse">
              <!-- dropdown-items -->
              <div class="pb-3">
                <a class="dropdown-item" href="user-profile.html"><span class="dropdown-icon oi oi-person"></span> Profile</a> <a class="dropdown-item" href="auth-signin-v1.html"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
            </div><!-- /.dropdown-aside -->
          </header><!-- /.aside-header -->
          <!-- .aside-menu -->
          <div class="aside-menu overflow-hidden">
            <!-- .stacked-menu -->
            <nav id="stacked-menu" class="stacked-menu">
              <!-- .menu -->
              <ul class="menu">
                <!-- .menu-item -->
                <li class="menu-item has-active">
                  <a href="{{url('/')}}" class="menu-link"><span class="menu-text">Dashboard</span></a>
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                <a href="{{route('tour-packages')}}" class="menu-link"> <span class="menu-text">Tour Packages</span></a> <!-- child menu -->

                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-copy"></i>
                      <p>
                        Manage user

                        <span class="badge badge-info right"></span>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{route('user.form')}}" class="nav-link">
                          <p class="text-sm ml-3 ">Add user</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('user.list')}}" class="nav-link">
                          <p class="text-sm ml-3">View user</p>
                        </a>

                  </li>

                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="{{route('managebooking.form')}}" class="menu-link"><span class=""></span> <span class="menu-text">Manage Booking</span></a> <!-- child menu -->

                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-text">Manage Issues</span></a> <!-- child menu -->

                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item">
                  <a href="{{route('manageenquires')}}" class="menu-link"> <span class="menu-text">Manage Enquires</span></a>
                </li><!-- /.menu-item -->
                <!-- .menu-header -->


                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="{{route('managepages')}}" class="menu-link"><span class="menu-text">Manage Pages</span></a> <!-- child menu -->
                </li>
                  <!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-text">Location</span></a> <!-- child menu -->

                </li>



              </ul><!-- /.menu -->
            </nav><!-- /.stacked-menu -->
          </div><!-- /.aside-menu -->
          <!-- Skin changer -->

        </div><!-- /.aside-content -->
      </aside><!-- /.app-aside --> --}}


      {{-- new sidebar start --}}

      <aside class="app-aside app-aside-expand-md app-aside-light">
        <!-- .aside-content -->
        <div class="aside-content">
          <!-- .aside-header -->
          <header class="aside-header d-block d-md-none">
            <!-- .btn-account -->
            <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside"><span class="user-avatar user-avatar-lg"><img src="assets/images/avatars/profile.jpg" alt=""></span> <span class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span> <span class="account-summary"><span class="account-name">Beni Arisandi</span> <span class="account-description">Marketing Manager</span></span></button> <!-- /.btn-account -->
            <!-- .dropdown-aside -->
            <div id="dropdown-aside" class="dropdown-aside collapse">
              <!-- dropdown-items -->
              <div class="pb-3">
                <a class="dropdown-item" href="user-profile.html"><span class="dropdown-icon oi oi-person"></span> Profile</a> <a class="dropdown-item" href="auth-signin-v1.html"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
            </div><!-- /.dropdown-aside -->
          </header><!-- /.aside-header -->
          <!-- .aside-menu -->
          <div class="aside-menu overflow-hidden">
            <!-- .stacked-menu -->
            <nav id="stacked-menu" class="stacked-menu">
              <!-- .menu -->
              <ul class="menu">
                <!-- .menu-item -->
                <li class="menu-item has-active">
                  <a href="{{route('dashboard')}}" class="menu-link" ><span class="menu-text">Dashboard</span></a>
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="{{route('tour-packages')}}" class="menu-link"> <span class="menu-text">Tour Packages</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="page-clients.html" class="menu-link">Clients</a>
                    </li>
                    <li class="menu-item">
                      <a href="page-teams.html" class="menu-link">Teams</a>
                    </li>



                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class=""></span> <span class="menu-text">Manage Users</span></a> <!-- child menu -->
                  <ul class="menu">
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class=""></span> <span class="menu-text">Manage Booking</span></a> <!-- child menu -->
                  <ul class="menu">
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-text">Manage Issues</span></a> <!-- child menu -->
                  <ul class="menu">
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item">
                  <a href="{{route('location')}}" class="menu-link"> <span class="menu-text">Location</span></a>
                </li><!-- /.menu-item -->
                <!-- .menu-header -->



                  <li class="menu-item">
                    <a href="" class="menu-link"> <span class="menu-text">Food</span></a>
                  </li>

                  <li class="menu-item">
                    <a href="{{route('hotel')}}" class="menu-link"> <span class="menu-text">Hotel</span></a>
                  </li>


                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="{{route('managepages')}}" class="menu-link"><span class="menu-text">Manage page</span></a> <!-- child menu -->

                </li><!-- /.menu-item -->
                <!-- .menu-item -->




              </ul><!-- /.menu -->
            </nav><!-- /.stacked-menu -->
          </div><!-- /.aside-menu -->
          <!-- Skin changer -->

        </div><!-- /.aside-content -->
      </aside><!-- /.app-aside -->
