<!-- [ Header ] start -->
<header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed">

    <div class="m-header">
        <a class="mobile-menu" id="mobile-collapse1" href="#"><span></span></a>
        <a href="#" class="b-brand">

            <img src="assets/images/logo.svg" alt="" class="logo images">
            <img src="assets/images/logo-icon.svg" alt="" class="logo-thumb images">
        </a>
    </div>
    <a class="mobile-menu" id="mobile-header" href="#">
        <i class="feather icon-more-horizontal"></i>
    </a>
    <div class="collapse navbar-collapse">
        <a href="#" class="mob-toggler"></a>

        <ul class="navbar-nav ms-auto">
            {{-- <li>
                <div class="dropdown">
                    <a class="dropdown-toggle" href="index.html#" data-bs-toggle="dropdown"
                        aria-expanded="false"><i class="icon feather icon-bell"></i></a>
                    <div class="dropdown-menu dropdown-menu-end notification">
                        <div class="noti-head">
                            <h6 class="d-inline-block m-b-0">Notifications</h6>
                            <div class="float-end">
                                <a href="index.html#!" class="m-r-10">mark as read</a>
                                <a href="index.html#!">clear all</a>
                            </div>
                        </div>
                        <ul class="noti-body">
                            <li class="n-title">
                                <p class="m-b-0">NEW</p>
                            </li>
                            <li class="notification">
                                <div class="d-flex">
                                    <img class="img-radius" src="assets/images/user/avatar-1.jpg"
                                        alt="Profile Image">
                                    <div class="flex-grow-1">
                                        <p><strong>John Doe</strong><span class="n-time text-muted"><i
                                                    class="icon feather icon-clock m-r-10"></i>5 min</span></p>
                                        <p>New ticket Added</p>
                                    </div>
                                </div>
                            </li>
                            <li class="n-title">
                                <p class="m-b-0">EARLIER</p>
                            </li>
                            <li class="notification">
                                <div class="d-flex">
                                    <img class="img-radius" src="assets/images/user/avatar-2.jpg"
                                        alt="Profile Image">
                                    <div class="flex-grow-1">
                                        <p><strong>Joseph William</strong><span class="n-time text-muted"><i
                                                    class="icon feather icon-clock m-r-10"></i>10 min</span></p>
                                        <p>Prchace New Theme and make payment</p>
                                    </div>
                                </div>
                            </li>
                            <li class="notification">
                                <div class="d-flex">
                                    <img class="img-radius" src="assets/images/user/avatar-3.jpg"
                                        alt="Profile Image">
                                    <div class="flex-grow-1">
                                        <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i
                                                    class="icon feather icon-clock m-r-10"></i>12 min</span></p>
                                        <p>currently login</p>
                                    </div>
                                </div>
                            </li>
                            <li class="notification">
                                <div class="d-flex">
                                    <img class="img-radius" src="assets/images/user/avatar-1.jpg"
                                        alt="Profile Image">
                                    <div class="flex-grow-1">
                                        <p><strong>Joseph William</strong><span class="n-time text-muted"><i
                                                    class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                        <p>Prchace New Theme and make payment</p>
                                    </div>
                                </div>
                            </li>
                            <li class="notification">
                                <div class="d-flex">
                                    <img class="img-radius" src="assets/images/user/avatar-3.jpg"
                                        alt="Profile Image">
                                    <div class="flex-grow-1">
                                        <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i
                                                    class="icon feather icon-clock m-r-10"></i>1 hour</span></p>
                                        <p>currently login</p>
                                    </div>
                                </div>
                            </li>
                            <li class="notification">
                                <div class="d-flex">
                                    <img class="img-radius" src="assets/images/user/avatar-1.jpg"
                                        alt="Profile Image">
                                    <div class="flex-grow-1">
                                        <p><strong>Joseph William</strong><span class="n-time text-muted"><i
                                                    class="icon feather icon-clock m-r-10"></i>2 hour</span></p>
                                        <p>Prchace New Theme and make payment</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="noti-footer">
                            <a href="index.html#!">show all</a>
                        </div>
                    </div>
                </div>
            </li> --}}
            {{-- <li><a href="#" class="displayChatbox"><i class="icon feather icon-mail"></i></a></li> --}}
            <li>
                <div class="dropdown drp-user">
                    <a href="index.html#" class="dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="icon feather icon-settings"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end profile-notification">
                        <div class="pro-head">
                            <img src="{{ asset('images/logo.png') }}" class="img-radius" alt="User-Profile-Image">
                            <span>
                                <span class="text-muted">{{ authUser()->name }}</span>
                                <span class="h6">{{ authUser()->email }}</span>
                            </span>
                        </div>
                        <ul class="pro-body">
                            <li><a href="#" class="dropdown-item"><i class="feather icon-settings"></i>
                                    Settings</a></li>
                            <li><a href="#" class="dropdown-item"><i class="feather icon-user"></i>
                                    Profile</a>
                            </li>
                            {{-- <li><a href="message.html" class="dropdown-item"><i class="feather icon-mail"></i>
                                    My Messages</a></li> --}}
                            {{-- <li><a href="auth-signin.html" class="dropdown-item"><i
                                        class="feather icon-lock"></i> Lock Screen</a></li> --}}
                            <li>
                                <form class="nav-link" method="post" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="btn"><span class="pcoded-micon"><i class="mdi mdi-gauge-full"></i></span> <span
                                            class="pcoded-mtext">Logout</span></button>
                                    </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>

</header>
<!-- [ Header ] end -->
