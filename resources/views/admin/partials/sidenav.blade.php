<div class="sidebar capsule--rounded bg_img overlay--indigo overlay--opacity-8"
     data-background="{{ asset('assets/admin/images/sidebar/2.jpg') }}">
    <button class="res-sidebar-close-btn"><i class="las la-times"></i></button>
    <div class="sidebar__inner">
        <div class="sidebar__logo">
            <a href="{{route('admin.dashboard')}}" class="sidebar__main-logo"><img
                    src="{{ asset('images/logo.png') }}" alt="Logo"></a>
            <a href="{{route('admin.dashboard')}}" class="sidebar__logo-shape"><img
                    src="{{asset('images/favicon.png')}}" alt="Image"></a>
            <button type="button" class="navbar__expand"></button>
        </div>

        <div class="sidebar__menu-wrapper" id="sidebar__menuWrapper">
            <ul class="sidebar__menu">
                <li class="sidebar-menu-item {{menuActive('admin.dashboard')}}">
                    <a href="{{route('admin.dashboard')}}" class="nav-link ">
                        <i class="menu-icon las la-home"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>


                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="{{menuActive('admin.lottery*',3)}}">
                        <i class="menu-icon la la-ticket-alt"></i>
                        <span class="menu-title">Manage Lottery</span>
                    </a>
                    <div class="sidebar-submenu {{menuActive('admin.lottery*',2)}} ">
                        <ul>
                            <li class="sidebar-menu-item {{menuActive('admin.lottery.index')}} ">
                                <a href="{{route('admin.lottery.index')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">Lotteries</span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item {{menuActive('admin.lottery.phase.index')}} ">
                                <a href="{{route('admin.lottery.phase.index')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">Phase</span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item {{menuActive('admin.lottery.draw.manual')}} ">
                                <a href="{{route('admin.lottery.draw.manual')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">Manual Draw</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>

                
            </ul>
            <div class="text-center mb-3 text-uppercase">
               Tinselcollections
            </div>
        </div>
    </div>
</div>
<!-- sidebar end -->
