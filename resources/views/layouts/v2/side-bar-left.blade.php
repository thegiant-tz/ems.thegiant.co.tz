<!-- Left Sidebar Menu -->
<div class="fixed-sidebar-left">
    <ul class="nav navbar-nav side-nav nicescroll-bar">
        <li class="navigation-header">
            <span>Main</span>
            <hr />
        </li>
        <li>
            <a class="@if (request()->routeIs('account.dashboard')) active @endif" href="{{ route('account.dashboard') }}" data-toggle="collapse" data-target="#dashboard_dr">
                <div class="pull-left"><i class="ti-dashboard mr-20"></i><span class="right-nav-text">Dashboard</span></div>
                <div class="clearfix"></div>
            </a>
        </li>
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr">
                <div class="pull-left"><i class="ti-user  mr-20"></i><span class="right-nav-text">Manage
                        Agents</span></div>
                <div class="pull-right"><i class="ti-angle-down"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="ecom_dr" class="collapse collapse-level-1">
                <li>
                    <a href="#">Create agents</a>
                </li>
                <li>
                    <a href="{{ route('account.users.list') }}">View agents</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="@if (request()->routeIs('account.booking.*')) active @endif" href="javascript:void(0);" data-toggle="collapse" data-target="#app_dr">
                <div class="pull-left"><i class="ti-ticket mr-20"></i><span class="right-nav-text">Manage Bookings</span>
                </div>
                <div class="pull-right"><i class="ti-angle-down"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="app_dr" class="collapse collapse-level-1">
                <li>
                    <a href="{{ route('account.booking.list', ['item' => 'cargo']) }}">View Cargo bookings</a>
                </li>
                <li>
                    <a href="{{ route('account.booking.list', ['item' => 'passenger']) }}">View Passenger bookings</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
<!-- /Left Sidebar Menu -->
