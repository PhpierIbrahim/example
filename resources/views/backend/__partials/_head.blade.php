<header class="main-header">
    <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini inverted"><img class="img-responsive" src="{{asset('AdminLTE-2.3.3/custom/images/4.png')}}" alt="" /></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg inverted"><img class="img-responsive" src="{{asset('AdminLTE-2.3.3/custom/images/4.png')}}" alt="" /> </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>

        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ asset('AdminLTE-2.3.3/custom/images/default-avatar.png') }}" class="user-image" alt="User Image">
                        <span class="hidden-xs">{{ Auth::user()->name }}</span> <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('logout') }}"><i
                                    class="fa fa-btn fa-sign-out"> </i>Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

