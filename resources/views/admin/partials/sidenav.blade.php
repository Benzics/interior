<div class="sidebar capsule--rounded bg_img overlay--indigo overlay--opacity-8"
     data-background="{{ asset('assets/admin/images/sidebar/2.jpg') }}">
    <button class="res-sidebar-close-btn"><i class="las la-times"></i></button>
    <div class="sidebar__inner">
        <div class="sidebar__logo">
            <a href="{{route('admin.dashboard')}}" class="sidebar__main-logo"><img
                    src="{{ asset('images/favicon.png') }}" alt="Logo"></a>
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
                    <a href="javascript:void(0)" class="{{menuActive(['admin.products*', 'admin.categories*'],3)}}">
                        <i class="menu-icon la la-ticket-alt"></i>
                        <span class="menu-title">Manage Products</span>
                    </a>
                    <div class="sidebar-submenu {{menuActive(['admin.products*', 'admin.categories*'],2)}} ">
                        <ul>
                            <li class="sidebar-menu-item {{menuActive('admin.categories.index')}} ">
                                <a href="{{route('admin.categories.index')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">Categories</span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item {{menuActive('admin.products.index')}} ">
                                <a href="{{route('admin.products.index')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">Products</span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item {{menuActive('admin.products.create')}} ">
                                <a href="{{route('admin.products.create')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">Add New Product</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="{{menuActive(['admin.apartments*', 'admin.apartments*'],3)}}">
                        <i class="menu-icon la la-ticket-alt"></i>
                        <span class="menu-title">Manage Apartments</span>
                    </a>
                    <div class="sidebar-submenu {{menuActive(['admin.apartments*', 'admin.apartment-categories*'],2)}} ">
                        <ul>
                            <li class="sidebar-menu-item {{menuActive('admin.apartment-categories.index')}} ">
                                <a href="{{route('admin.apartment-categories.index')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">Categories</span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item {{menuActive('admin.apartments.index')}} ">
                                <a href="{{route('admin.apartments.index')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">Apartments</span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item {{menuActive('admin.apartments.create')}} ">
                                <a href="{{route('admin.apartments.create')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">Add Apartment</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li class="sidebar-menu-item {{menuActive('admin.settings')}}">
                    <a href="{{route('admin.settings')}}" class="nav-link ">
                        <i class="menu-icon las la-wrench"></i>
                        <span class="menu-title">Site settings</span>
                    </a>
                </li>

                <li class="sidebar-menu-item {{menuActive('admin.banners*')}}">
                    <a href="{{route('admin.banners.index')}}" class="nav-link ">
                        <i class="menu-icon la la-ticket-alt"></i>
                        <span class="menu-title">Banners</span>
                    </a>
                </li>
                <li class="sidebar-menu-item {{menuActive('admin.pages*')}}">
                    <a href="{{route('admin.pages.index')}}" class="nav-link ">
                        <i class="menu-icon la la-book"></i>
                        <span class="menu-title">Pages</span>
                    </a>
                </li>
                <li class="sidebar-menu-item {{menuActive('admin.sections*')}}">
                    <a href="{{route('admin.sections.index')}}" class="nav-link ">
                        <i class="menu-icon la la-book"></i>
                        <span class="menu-title">Sections</span>
                    </a>
                </li>
                <li class="sidebar-menu-item {{menuActive(['admin.profile', 'admin.password'])}}">
                    <a href="{{route('admin.profile')}}" class="nav-link ">
                        <i class="menu-icon las la-user"></i>
                        <span class="menu-title">Profile</span>
                    </a>
                </li>
                
            </ul>
            <div class="text-center mb-3 text-uppercase">
               {{ setting('site-name') }}
            </div>
        </div>
    </div>
</div>
<!-- sidebar end -->
