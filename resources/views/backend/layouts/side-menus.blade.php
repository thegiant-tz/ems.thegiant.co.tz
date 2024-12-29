  <!-- [ navigation menu ] start -->
  <nav class="pcoded-navbar menupos-fixed menu-item-icon-style4 overflow-auto">
      <div class="navbar-wrapper ">
          <div class="navbar-brand header-logo">
              <a href="" class="b-brand">

                  <img src="{{ asset('images/bm1.png') }}" height="50px" alt="logo" class="logo images">
                  <img src="assets/images/logo-icon.svg" alt="logo" class="logo-thumb images">
              </a>
              <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
          </div>
          <div class="navbar-content scroll-div" id="layout-sidenav">
              <ul class="nav pcoded-inner-navbar sidenav-inner">
                  <li class="nav-item pcoded-menu-caption">
                      <label>EXPENSE MANAGEMENT SYSTEM</label>
                  </li>

                  @can('menu levels')
                      <li data-username="menu levels menu level 2.1 menu level 2.2" class="nav-item pcoded-hasmenu">
                          <a href="#" class="nav-link"><span class="pcoded-micon"><i
                                      class="fa fa-home"></i></span><span class="pcoded-mtext">Menu
                                  levels</span></a>
                          <ul class="pcoded-submenu">
                              <li class=""><a href="#" class="">Menu Level 2.1</a></li>
                              <li class="pcoded-hasmenu">
                                  <a href="#" class="">Menu level 2.2</a>
                                  <ul class="pcoded-submenu">
                                      <li class=""><a href="#" class="">Menu level 3.1</a></li>
                                      <li class=""><a href="#" class="">Menu level 3.2</a></li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                  @endcan

                  @can('view dashboard menu')
                      <li class="nav-item">
                          <a href="#" class="nav-link"><span class="pcoded-micon"><i
                                      class="mdi mdi-gauge-full"></i></span><span
                                  class="pcoded-mtext">Dashboard</span></a>
                      </li>
                  @endcan

                  @can('view expense menus')
                      <li class="nav-item pcoded-hasmenu">
                          <a href="#" class="nav-link"><span class="pcoded-micon"><i
                                      class="fa fa-dashboard"></i></span><span class="pcoded-mtext">Expenses</span></a>
                          <ul class="pcoded-submenu">
                              @can('initiate request')
                                  <li class=""><a href="{{ route('account.request.initiate') }}" class="">Initiate request</a></li>
                              @endcan
                              @can('view expense list')
                                  <li class=""><a href="{{ route('account.request.list') }}" class="">My requests</a></li>
                              @endcan
                              @can('view retirements')
                                  <li class=""><a href="{{ route('account.request.retirements.index') }}" class="">Retirements</a></li>
                              @endcan
                          </ul>
                      </li>
                  @endcan

              </ul>



          </div>

      </div>
  </nav>
  <!-- [ navigation menu ] end -->
