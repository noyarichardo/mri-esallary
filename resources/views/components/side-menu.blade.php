<!--Side Menu-->
<div class="main-sidebar main-sidebar-sticky side-menu">
    <div class="sidemenu-logo">
        <a class="main-logo" href="{{url('/')}}">
            <img src="{{asset('images/logo/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
            <img class="logo_unvr" src="{{asset('images/logo/logo.png')}}" alt="logo"/>
        </a>
    </div>
    <div class="main-sidebar-body">
        <ul class="nav">
            @if (auth()->user()->level == 'admin')
            <li class="nav-item">
                <a class="nav-link" href="{{url('data-pegawai')}}">
                    <span class="shape1"></span>
                    <span class="shape2"></span>
                    <i class="fas fa-home sidemenu-icon"></i>
                    <span class="sidemenu-label">Data Pegawai</span>
                </a>
            </li>
            @endif

            <li class="nav-item">
                <a class="nav-link" href="{{url('/user-report')}}">
                    <span class="shape1"></span>
                    <span class="shape2"></span>
                    <i class="fas fa-file-pdf sidemenu-icon"></i>
                    <span class="sidemenu-label">Report</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{url('/logout')}}">
                    <span class="shape1"></span>
                    <span class="shape2"></span>
                    <i class="fas fa-sign-out-alt sidemenu-icon"></i>
                    <span class="sidemenu-label">SignOut</span>
                </a>
            </li>

        </ul>
    </div>
</div>
