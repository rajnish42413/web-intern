<nav class="side-navbar">
    <div class="side-navbar-wrapper">
        <div class="sidenav-header d-flex align-items-center justify-content-center">
            <div class="sidenav-header-inner">
                <div class="user-detail">
                    <div class="user-image">
                        R S
                    </div>
                    <div class="user">
                        <h3 class="text-capitalize">{{ auth()->user()->name }}</h3>
                        {{-- <p>Basic Plan</p> --}}
                    </div>
                </div>
            </div>

            <!-- Small Brand information, appears on minimized sidebar-->
            <div class="sidenav-header-logo">
                <a class="brand-small text-center" href="index.html">
                    <strong>
                        W
                    </strong>
                    <strong class="text-primary">
                        I
                    </strong>
                </a>
            </div>
        </div>
        <div class="main-menu">
            {{--
            <h5 class="sidenav-heading">
                Main
            </h5>
            --}}
            <ul class="side-menu list-unstyled" id="side-main-menu">
                <li>
                    <a href="{{ url('/user') }}" class="{{ request()->is('user') ? 'active' : '' }}">
                        <i class="fa fa-home">
                        </i>
                        Home 
                    </a>
                </li>
                <li>
                    <a href="{{ route('user/edit') }}" class="{{ request()->is('user/edit') ? 'active' : '' }}">
                        <i class="fa fa-pencil-square-o" >
                        </i>
                        Edit Profile
                    </a>
                </li>
                <li>
                    <a href="{{ route('user/verification') }}" class="{{ request()->is('user/profile-verification') ? 'active' : '' }}">
                        <i class="fa fa-user-plus">
                        </i>
                        Profile Verification
                    </a>
                </li>
                <li>
                    <a href="/purchases">
                        <i class="fa fa-list-ol">
                        </i>
                        My Purchases
                    </a>
                </li>
                <li>
                    <a href="/mock-tests">
                        <i class="fa fa-file-text-o">
                        </i>
                        Mock Tests
                    </a>
                </li>
                <li>
                    <a href="/olympiad-exam">
                        <i class="fa fa-address-card-o">
                        </i>
                        Olympiad Exam
                    </a>
                </li>
                <li>
                    <a href="/olympiad-exam-answer">
                        <i class="fa fa-list-alt">
                        </i>
                        Olympiad Exam Answers
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out">
                        </i>
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                    </form>
                </li>
            </ul>
        </div>
        {{--
        <div class="admin-menu">
            <h5 class="sidenav-heading">
                Second menu
            </h5>
            <ul class="side-menu list-unstyled" id="side-admin-menu">
                <li>
                    <a href="#">
                        <i class="icon-screen">
                        </i>
                        Demo
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-flask">
                        </i>
                        Demo
                        <div class="badge badge-info">
                            Special
                        </div>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="icon-flask">
                        </i>
                        Demo
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="icon-picture">
                        </i>
                        Demo
                    </a>
                </li>
            </ul>
        </div>
        --}}
    </div>
</nav>