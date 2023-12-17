<header class="app-header app-header-dark">

    <div class="top-bar">

        <div class="top-bar-brand">

            <button class="hamburger hamburger-squeeze mr-2" type="button" data-toggle="aside-menu"
                aria-label="toggle aside menu"><span class="hamburger-box"><span
                        class="hamburger-inner"></span></span></button>
            <h1>TMS</h1>
        </div>

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
