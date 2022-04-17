<!--Head-->
<div class="main-header side-header sticky">
    <div class="container-fluid">
        <div class="main-header-left">
            <a class="main-header-menu-icon" href="#" id="mainSidebarToggle">
                <span class="fas fa-bars"></span>
            </a>
        </div>
        <div class="main-header-center">
            <div class="responsive-logo">
                <a href="{{url('/')}}"><img src="{{asset('images/logo/logo.png')}}" class="mobile-logo" alt="logo"></a>
            </div>
        </div>

        <div class="main-header-right">

            <div class="dropdown main-profile-menu">
                <a class="d-flex" href="#">
                    <h6 class="title_profile">Welcome, {{ auth()->user()->name}}</h6>
                    <span class="main-img-user" ><i class="fas fa-user"></i></span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item border-top" href="{{url('/profile')}}">
                        <i class="far fa-user"></i> My Profile
                    </a>
                    <a class="dropdown-item" href="{{ url('logout') }}">
                        <i class="fas fa-power-off"></i> Sign Out
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

<!--M Head-->
<div class="mobile-main-header"></div>
