<header class="header">
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
                <div class="navbar-header">
                    <a class="menu-btn" href="#" id="toggle-btn">
                        <i class="icon-bars">
                        </i>
                    </a>
                </div>
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                    <!-- Log out-->
                    {{--
                    <li class="nav-item">
                        <a class="nav-link logout" href="#">
                            <span class="d-none d-sm-inline-block">
                                Logout
                            </span>
                            <i class="fa fa-sign-out">
                            </i>
                        </a>
                    </li>
                    --}}
                </ul>
            </div>
        </div>
    </nav>
</header>

<section class="container-fluid">
   <div class="row">
    <div class="col">
      @include('includes.notification')
    </div>
   </div>
</section>