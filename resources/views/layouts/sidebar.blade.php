<div class="page-sidebar-wrapper">
                <div class="page-sidebar navbar-collapse collapse">
                    <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <li class="nav-item start {{Request::is('/') || Request::is('home') ? 'active' : ''}}" id="link">
                            <a href="{{ url('home') }}" class="nav-link nav-toggle" title="Home">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                            </a>
                            
                        </li>
                        <li class="nav-item {{Request::is('watchRepair') ? 'active' : ''}}" id="link">
                            <a href="{{ url('watchRepair') }}" class="nav-link nav-toggle" title="Watch Repair">
                                <i class="fa fa-plus-square"></i>
                                <span class="title">Watch Repair</span>
                                <span class="selected"></span>
                            </a>
                            
                        </li>
                        <li class="nav-item {{Request::is('requestTracking') ? 'active open' : ''}}" id="link">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-truck"></i>
                                <span class="title">Tracking</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="{{url('requestTracking')}}" class="nav-link" title="Tracking Request">
                                        <span class="title">Tracking Request</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('trackingStatus')}}" class="nav-link" title="Tracking Status">
                                        <span class="title">Tracking Status</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @if (Auth::user()->role == "member")
                        <li class="nav-item">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Menu Lain</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item start active open">
                                    <a href="index.html" class="nav-link ">
                                        <i class="icon-bar-chart"></i>
                                        <span class="title">Dashboard 1</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                                <li class="nav-item start ">
                                    <a href="dashboard_2.html" class="nav-link ">
                                        <i class="icon-bulb"></i>
                                        <span class="title">Dashboard 2</span>
                                        <span class="badge badge-success">1</span>
                                    </a>
                                </li>
                                <li class="nav-item start ">
                                    <a href="dashboard_3.html" class="nav-link ">
                                        <i class="icon-graph"></i>
                                        <span class="title">Dashboard 3</span>
                                        <span class="badge badge-danger">5</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>