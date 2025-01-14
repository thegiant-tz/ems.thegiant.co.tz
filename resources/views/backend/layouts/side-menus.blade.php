  <!-- [ navigation menu ] start -->
  <nav class="pcoded-navbar menupos-fixed menu-item-icon-style2 overflow-auto">
      <div class="navbar-wrapper ">
          <div class="navbar-brand header-logo">
              <a href="" class="b-brand">

                  <img src="{{ asset('images/logo.png') }}" height="50px" alt="logo" class="logo images">
                  <img src="images/logo.png" alt="logo" class="logo-thumb images">
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
                          <a href="{{ route('account.request.list') }}" class="nav-link"><span class="pcoded-micon"><i
                                      class="mdi mdi-gauge-full"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                      </li>
                  @endcan

                  @can('view expense menu')
                      <li class="nav-item pcoded-hasmenu">
                          <a href="#" class="nav-link"><span class="pcoded-micon"><i
                                      class="fa fa-briefcase fa-sm"></i></span><span
                                  class="pcoded-mtext">Expenses</span></a>
                          <ul class="pcoded-submenu">
                              @can('view initiate request submenu')
                                  <li class=""><a href="{{ route('account.request.initiate' , ['role' => authUser()->can('view initiate request submenu') ? 'initiator' : null ]) }}" class="">Initiate
                                          request</a></li>
                              @endcan
                              @can('view expense submenu')
                                  <li class=""><a href="{{ route('account.request.list') }}" class="">Requests</a>
                                  </li>
                              @endcan
                              @can('view retirements submenu')
                                  <li class=""><a href="{{ route('account.request.retirements.index') }}"
                                          class="">Retirements</a></li>
                              @endcan
                          </ul>
                      </li>
                  @endcan
                  @can('view calendar menu')
                      <li class="nav-item">
                          <a href="{{ route('account.calendar') }}" class="nav-link"><span class="pcoded-micon"><i
                                      class="fa fa-calendar"></i></span><span class="pcoded-mtext">Calendar</span></a>
                      </li>
                  @endcan
                  @can('view report menu')
                      <li class="nav-item">
                          <a href="{{ route('account.report.index') }}" class="nav-link"><span class="pcoded-micon"><i
                                      class="fa fa-chart-bar"></i></span><span class="pcoded-mtext">Report</span></a>
                      </li>
                  @endcan

                  <li class="nav-item">
                      <form class="nav-link" method="post" action="{{ route('logout') }}">
                          @csrf
                          <button class="btn btn-danger form-control btn-sm"><span class="pcoded-micon"><i
                                      class="mdi mdi-gauge-full"></i></span><span
                                  class="pcoded-mtext">Logout</span></button>
                      </form>
                  </li>

              </ul>



          </div>

      </div>
  </nav>
  <!-- [ navigation menu ] end -->
