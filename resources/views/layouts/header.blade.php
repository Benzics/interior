<div class="page-wraper"> 
       	
    <!-- HEADER START -->
    <header class="site-header header-style-1  nav-wide">
        
        <div class="sticky-header main-bar-wraper">
            <div class="main-bar bg-white p-t10">
                <div class="container">
                    <div class="logo-header">
                        <div class="logo-header-inner logo-header-one">
                            <a href="{{url('/')}}">
                            <img src="{{ asset('images/logo-dark.png') }}" width="171" height="49" alt="" />
                        </a>
                        </div>
                    </div>
                    <!-- NAV Toggle Button -->
                    <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- ETRA Nav -->
                    {{-- <div class="extra-nav">
                        <div class="extra-cell">
                            <a href="#search" class="site-search-btn"><i class="fa fa-search"></i></a>
                        </div>
                     </div> --}}
                     
                     
                    <!-- SITE Search -->
                    {{-- <div id="search"> 
                        <span class="close"></span>
                        <form role="search" id="searchform" action="#" method="get" class="radius-xl">
                            <div class="input-group">
                                <input value="" name="q" type="search" placeholder="Type to search"/>
                                <span class="input-group-btn"><button type="button" class="search-btn"><i class="fa fa-search"></i></button></span>
                            </div>   
                        </form>
                    </div> --}}
                    
                    <!-- ETRA Nav -->
                    {{-- 
                    <div class="extra-nav">
                        <div class="extra-cell">
                            <div class="dropdown share-icon-btn">
                                 <a href="javascript:;" class="site-search-btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt"></i></a>
                                 <div class="dropdown-menu bg-white">
                                    <div class="top-bar">
                                            <ul class="social-bx list-inline">
                                                <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                            </ul>
                                        </div>
                                </div>
                            </div>                                 
                        </div>
                     </div>                            --}}
                    <!-- MAIN Vav -->
                    <div class="header-nav navbar-collapse collapse">
                        <ul class=" nav navbar-nav">
                            <li class="{{menuActive('home')}}">
                                <a href="{{ url('/') }}">Home</a>                                        
                            </li>
                            <li>
                                
                                <a href="javascript:;">Pages</a>
                                <ul class="sub-menu">
                                    @forelse (getPages() as $item)
                                    <li>
                                        <a href="{{ url('pages/' . $item->url) }}">{{ $item->name }}</a>
                                    </li>

                                    @empty 
                                    @endforelse
                                  
                                    <li>
                                        <a href="/contact">Contact us</a>
                                    </li>
                                </ul>
                            </li>
                           
                            <li>
                                <a href="javascript:;">Products</a>
                                <ul class="sub-menu">
                                    @forelse (getProductCategories() as $item)
                                    <li>
                                        <a href="{{ route('categories.single', ['id' => $item->id]) }}">{{ $item->name }}</a>
                                    </li>

                                    @empty 
                                    <li><a>Coming soon...</a></li>
                                    @endforelse                                        
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;">Apartments</a>
                                <ul class="sub-menu">
                                    @forelse (getApartmentCategories() as $item)
                                    <li>
                                        <a href="{{ url('apartment-categories/' . $item->id) }}">{{ $item->name }}</a>
                                    </li>

                                    @empty 
                                    <li><a>Coming Soon...</a></li>
                                    @endforelse                                          
                                </ul>                                    
                            </li>
                                    
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
    </header>