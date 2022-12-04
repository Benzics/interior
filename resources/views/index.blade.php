<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="" />
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}" />
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- [if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
	<![endif] -->
    
    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha512-tqup5t5XyJXlvX8b/E9pI0swGA4AugszFqvdWASa2/484oj4HW7UaXKwRmnMLKFp3ZWeTwjjCh6J40AvdUQhrA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css" integrity="sha512-GqP/pjlymwlPb6Vd7KmT5YbapvowpteRq9ffvufiXYZp0YpMTtR9tI6/v3U3hFi1N9MQmXum/yBfELxoY+S1Mw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.min.css') }}">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/loader.min.css') }}">
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!-- REVOLUTION SLIDER 4 STYLE -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/rev-slider-4.css') }}"> 
   

    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/settings.css') }}">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navigation.css') }}">
    
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,800,800i,900" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crete+Round:400,400i&amp;subset=latin-ext" rel="stylesheet"> 

</head>
<body class="footer-fixed">

	<div class="page-wraper"> 
       	
        <!-- HEADER START -->
        <header class="site-header header-style-1  nav-wide">
            
            <div class="sticky-header main-bar-wraper">
                <div class="main-bar bg-white p-t10">
                    <div class="container">
                        <div class="logo-header">
                        	<div class="logo-header-inner logo-header-one">
                            	<a href="index.html">
                                <img src="images/logo-dark.png" width="171" height="49" alt="" />
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
                        <div class="extra-nav">
                            <div class="extra-cell">
                                <a href="#search" class="site-search-btn"><i class="fa fa-search"></i></a>
                            </div>
                         </div>
                         
                         
                        <!-- SITE Search -->
                        <div id="search"> 
                            <span class="close"></span>
                            <form role="search" id="searchform" action="/search" method="get" class="radius-xl">
                                <div class="input-group">
                                    <input value="" name="q" type="search" placeholder="Type to search"/>
                                    <span class="input-group-btn"><button type="button" class="search-btn"><i class="fa fa-search"></i></button></span>
                                </div>   
                            </form>
                        </div>
                        
                        <!-- ETRA Nav -->
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
                         </div>                           
                        <!-- MAIN Vav -->
                        <div class="header-nav navbar-collapse collapse">
                            <ul class=" nav navbar-nav">
                                <li class="active">
                                    <a href="javascript:;">Home</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="index.html">Home-1</a>
                                        </li>
                                        <li>
                                            <a href="index-2.html">Home-2</a>
                                        </li>
                                        <li>
                                            <a href="index-3.html">Home-3</a>
                                        </li>
                                        <li>
                                            <a href="index-4.html">Home-4</a>
                                        </li>
                                        <li>
                                            <a href="index-5.html">Home-5</a>
                                        </li>
                                    </ul>                                                    
                                </li>
                                <li>
                                    <a href="javascript:;">Pages</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="about-1.html">About us</a>
                                        </li>
                                        <li>
                                            <a href="contact-1.html">Contact us</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;">News</a>
                                    <ul class="sub-menu">
                                        <li><a href="news-grid.html">Grid</a></li>
                                        <li><a href="news-listing.html">Listing</a></li>
                                        <li><a href="news-masonry.html">Masonry</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;">Works</a>
                                    <ul class="sub-menu">
                                        <li><a href="work-grid.html">Grid</a></li>
                                        <li><a href="work-masonry.html">Masonry</a></li>
                                        <li><a href="work-carousel.html">Carousel</a></li>
                                        <li><a href="project-detail.html">Project Detail</a></li>                                        
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;">Post detail</a>
                                    <ul class="sub-menu">
                                        <li><a href="post-image.html">Image</a></li>
                                        <li><a href="post-gallery.html">Gallery</a></li>
                                        <li><a href="post-video.html">Video</a></li>
                                        <li><a href="post-right-sidebar.html">Right Sidebar</a></li>                                        
                                    </ul>                                    
                                </li>
                                <li class="submenu-direction">
                                    <a href="javascript:;">Shortcodes</a>
                                    <ul class="sub-menu">
                                        <li><a href="accordian.html">All Elements</a></li>
                                    </ul>                                    
                                </li>                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
        </header>
        <!-- HEADER END -->
        
        <!-- CONTENT START -->
        <div class="page-content">
        
            <!-- SLIDER START -->
            <div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="goodnews-header" data-source="gallery" style="background:#eeeeee;padding:0px;">
                <div id="welcome" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.3.1">
                    <ul>	
                        <!-- SLIDE 1 -->
                        <li data-index="rs-901" data-transition="fadethroughdark" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/main-slider/slider1/slide1.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off"  data-title="" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/main-slider/slider1/slide1.jpg"  alt=""  data-lazyload="images/main-slider/slider1/slide1.jpg" data-bgposition="center center" 
                            data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                    
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  " 
                                id="slide-901-layer-1" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" 
                                data-width="full"
                                data-height="['400','400','400','550']"
                                data-whitespace="nowrap"
                                data-type="shape" 
                                data-basealign="slide" 
                                data-responsive_offset="off" 
                                data-responsive="off"
                                data-frames='[{"from":"opacity:0;","speed":100,"to":"o:1;","delay":0,"ease":"Power2.easeInOut"},{"delay":"wait","speed":0,"to":"opacity:0;","ease":"nothing"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5;text-transform:left;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);
                                border-width:0px;background:linear-gradient(to top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.1) 100%);cursor:default;"> 
                            </div>                           
                            
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  " 
                                id="slide-901-layer-2" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']" 
                                data-width="full"
                                data-height="['400','400','400','550']"
                                data-whitespace="nowrap"
                                data-type="shape" 
                                data-basealign="slide" 
                                data-responsive_offset="off" 
                                data-responsive="off"
                                data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:1;","delay":0,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5;text-transform:left;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);
                                border-width:0px;background:linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,1) 100%);cursor:default;"> 
                            </div>
                    
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption BigBold-Title   tp-resizeme" 
                                id="slide-901-layer-3" 
                                data-x="['left','left','left','left']" data-hoffset="['120','120','30','30']" 
                                data-y="['bottom','bottom','bottom','bottom']" data-voffset="['180','180','160','160']" 
                                data-fontsize="['80','60','50','30']"
                                data-lineheight="['100','90','60','60']"
                                data-fontweight="['800','800','800','800']"
                                data-width="['none','none','none','400']"
                                data-height="none"
                                data-whitespace="['nowrap','nowrap','nowrap','normal']"
                     
                                data-type="text" 
                                data-basealign="slide" 
                                data-responsive_offset="off" 
                    
                                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                                {"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[10,10,10,10]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[10,10,10,10]"
                                data-paddingleft="[0,0,0,0]"
                    
                                style="z-index: 6; 
                                text-transform:uppercase;
                                color:#fff;"><span class="text-yellow">Modern </span> house </div>
                    
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption BigBold-SubTitle  " 
                                id="slide-901-layer-4" 
                                data-x="['left','left','left','left']" data-hoffset="['120','120','30','30']" 
                                data-y="['bottom','bottom','bottom','bottom']" data-voffset="['100','65','60','60']" 
                                data-fontsize="['15','15','15','13']"
                                data-lineheight="['24','24','24','20']"
                                data-width="['410','410','410','280']"
                                data-height="['60','100','100','100']"
                                data-whitespace="normal"
                     
                                data-type="text" 
                                data-basealign="slide" 
                                data-responsive_offset="off" 
                                data-responsive="off"
                                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1800,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                    
                                style="z-index: 7; 
                                color:#fff;
                                ">Our company takes orders to external architectural offices & edited, designed and created. 
                                </div>
                    
                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption BigBold-Button rev-btn " 
                                id="slide-901-layer-5" 
                                data-x="['left','left','left','left']" data-hoffset="['480','480','30','30']" 
                                data-y="['bottom','bottom','bottom','bottom']" data-voffset="['100','100','30','30']"  
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                     
                                data-type="button" 
                                data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":""}]'
                                data-basealign="slide" 
                                data-responsive_offset="off" 
                                data-responsive="off"
                                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":2500,"ease":"Power3.easeInOut"},
                                {"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"Power2.easeInOut"},
                                {"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[15,15,15,15]"
                                data-paddingright="[50,50,50,50]"
                                data-paddingbottom="[15,15,15,15]"
                                data-paddingleft="[50,50,0,0]"
                    
                                style="z-index: 11; "><a href="#" class="site-button outline white">READ MORE</a> </div>                            

                            <!-- Border Part -->
                            <div class="tp-caption tp-shape tp-shapewrapper " 
                                id="slide-901-layer-8" 
                                data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                data-width="full"
                                data-height="full"
                                data-whitespace="nowrap"
                                data-visibility="['on','on','off','off']"
                     
                                data-type="shape" 
                                data-basealign="slide" 
                                data-responsive_offset="off" 
                                data-responsive="off"
                                data-frames='[{"delay":50,"speed":100,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeIn"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                    
                                style="z-index: 10;background-color:rgba(0, 0, 0, 0);border-color:rgb(255,255,255);border-style:solid;border-width:0px 80px 80px 80px;"> </div>
     
                        </li>
                        
                        <!-- SLIDE 2 -->
                        <li data-index="rs-902" data-transition="fadethroughdark" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/main-slider/slider1/slide2.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off"  data-title="" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/main-slider/slider1/slide2.jpg"  alt=""  data-lazyload="images/main-slider/slider1/slide2.jpg" data-bgposition="center center" 
                            data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                    
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  " 
                                id="slide-902-layer-1" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" 
                                data-width="full"
                                data-height="['400','400','400','550']"
                                data-whitespace="nowrap"
                                data-type="shape" 
                                data-basealign="slide" 
                                data-responsive_offset="off" 
                                data-responsive="off"
                                data-frames='[{"from":"opacity:0;","speed":100,"to":"o:1;","delay":0,"ease":"Power2.easeInOut"},{"delay":"wait","speed":0,"to":"opacity:0;","ease":"nothing"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5;text-transform:left;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);
                                border-width:0px;background:linear-gradient(to top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.1) 100%);cursor:default;"> 
                            </div>                           
                            
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  " 
                                id="slide-902-layer-2" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']" 
                                data-width="full"
                                data-height="['400','400','400','550']"
                                data-whitespace="nowrap"
                                data-type="shape" 
                                data-basealign="slide" 
                                data-responsive_offset="off" 
                                data-responsive="off"
                                data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:1;","delay":0,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5;text-transform:left;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);
                                border-width:0px;background:linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,1) 100%);cursor:default;"> 
                            </div>
                    
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption BigBold-Title   tp-resizeme" 
                                id="slide-902-layer-3" 
                                data-x="['left','left','left','left']" data-hoffset="['120','120','30','30']" 
                                data-y="['bottom','bottom','bottom','bottom']" data-voffset="['180','180','160','160']" 
                                data-fontsize="['80','60','50','30']"
                                data-lineheight="['100','90','60','60']"
                                data-fontweight="['800','800','800','800']"
                                data-width="['none','none','none','400']"
                                data-height="none"
                                data-whitespace="['nowrap','nowrap','nowrap','normal']"
                     
                                data-type="text" 
                                data-basealign="slide" 
                                data-responsive_offset="off" 
                    
                                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                                {"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[10,10,10,10]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[10,10,10,10]"
                                data-paddingleft="[0,0,0,0]"
                    
                                style="z-index: 6; 
                                text-transform:uppercase;
                                color:#fff;"><span class="text-yellow">Design to </span> Reality </div>
                    
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption BigBold-SubTitle  " 
                                id="slide-902-layer-4" 
                                data-x="['left','left','left','left']" data-hoffset="['120','120','30','30']" 
                                data-y="['bottom','bottom','bottom','bottom']" data-voffset="['100','65','60','60']" 
                                data-fontsize="['15','15','15','13']"
                                data-lineheight="['24','24','24','20']"
                                data-width="['410','410','410','280']"
                                data-height="['60','100','100','100']"
                                data-whitespace="normal"
                     
                                data-type="text" 
                                data-basealign="slide" 
                                data-responsive_offset="off" 
                                data-responsive="off"
                                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1800,"ease":"Power3.easeInOut"},
                                {"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                    
                                style="z-index: 7; 
                                color:#fff;
                                ">Our company takes orders to external architectural offices & edited, designed and created. 
                                </div>
                    
                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption BigBold-Button rev-btn " 
                                id="slide-902-layer-5" 
                                data-x="['left','left','left','left']" data-hoffset="['480','480','30','30']" 
                                data-y="['bottom','bottom','bottom','bottom']" data-voffset="['100','100','30','30']"  
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                     
                                data-type="button" 
                                data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":""}]'
                                data-basealign="slide" 
                                data-responsive_offset="off" 
                                data-responsive="off"
                                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":2500,"ease":"Power3.easeInOut"},
                                {"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"Power2.easeInOut"},
                                {"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[15,15,15,15]"
                                data-paddingright="[50,50,50,50]"
                                data-paddingbottom="[15,15,15,15]"
                                data-paddingleft="[50,50,0,0]"
                    
                                style="z-index: 11; "><a href="#" class="site-button outline white">READ MORE</a> </div>                            

                            <!-- Border Part -->
                            <div class="tp-caption tp-shape tp-shapewrapper " 
                                id="slide-902-layer-8" 
                                data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                data-width="full"
                                data-height="full"
                                data-whitespace="nowrap"
                                data-visibility="['on','on','off','off']"
                     
                                data-type="shape" 
                                data-basealign="slide" 
                                data-responsive_offset="off" 
                                data-responsive="off"
                                data-frames='[{"delay":50,"speed":100,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeIn"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                    
                                style="z-index: 10;background-color:rgba(0, 0, 0, 0);border-color:rgb(255,255,255);border-style:solid;border-width:0px 80px 80px 80px;"> </div>
     
                        </li>   
                        
                        <!-- SLIDE 3 -->
                        <li data-index="rs-903" data-transition="fadethroughdark" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/main-slider/slider1/slide3.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off"  data-title="" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/main-slider/slider1/slide3.jpg"  alt=""  data-lazyload="images/main-slider/slider1/slide2.jpg" data-bgposition="center center" 
                            data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                    
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  " 
                                id="slide-903-layer-1" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" 
                                data-width="full"
                                data-height="['400','400','400','550']"
                                data-whitespace="nowrap"
                                data-type="shape" 
                                data-basealign="slide" 
                                data-responsive_offset="off" 
                                data-responsive="off"
                                data-frames='[{"from":"opacity:0;","speed":100,"to":"o:1;","delay":0,"ease":"Power2.easeInOut"},{"delay":"wait","speed":0,"to":"opacity:0;","ease":"nothing"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5;text-transform:left;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);
                                border-width:0px;background:linear-gradient(to top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.1) 100%);cursor:default;"> 
                            </div>                           
                            
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  " 
                                id="slide-903-layer-2" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']" 
                                data-width="full"
                                data-height="['400','400','400','550']"
                                data-whitespace="nowrap"
                                data-type="shape" 
                                data-basealign="slide" 
                                data-responsive_offset="off" 
                                data-responsive="off"
                                data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:1;","delay":0,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5;text-transform:left;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);
                                border-width:0px;background:linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,1) 100%);cursor:default;"> 
                            </div>
                    
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption BigBold-Title   tp-resizeme" 
                                id="slide-903-layer-3" 
                                data-x="['left','left','left','left']" data-hoffset="['120','120','30','30']" 
                                data-y="['bottom','bottom','bottom','bottom']" data-voffset="['180','180','160','160']" 
                                data-fontsize="['80','60','50','30']"
                                data-lineheight="['100','90','60','60']"
                                data-fontweight="['800','800','800','800']"
                                data-width="['none','none','none','400']"
                                data-height="none"
                                data-whitespace="['nowrap','nowrap','nowrap','normal']"
                     
                                data-type="text" 
                                data-basealign="slide" 
                                data-responsive_offset="off" 
                    
                                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                                {"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[10,10,10,10]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[10,10,10,10]"
                                data-paddingleft="[0,0,0,0]"
                    
                                style="z-index: 6; 
                                text-transform:uppercase;
                                color:#fff;"><span class="text-yellow">Your dream</span> We design </div>
                    
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption BigBold-SubTitle  " 
                                id="slide-903-layer-4" 
                                data-x="['left','left','left','left']" data-hoffset="['120','120','30','30']" 
                                data-y="['bottom','bottom','bottom','bottom']" data-voffset="['100','65','60','60']" 
                                data-fontsize="['15','15','15','13']"
                                data-lineheight="['24','24','24','20']"
                                data-width="['410','410','410','280']"
                                data-height="['60','100','100','100']"
                                data-whitespace="normal"
                     
                                data-type="text" 
                                data-basealign="slide" 
                                data-responsive_offset="off" 
                                data-responsive="off"
                                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1800,"ease":"Power3.easeInOut"},
                                {"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                    
                                style="z-index: 7; 
                                color:#fff;
                                ">Our company takes orders to external architectural offices & edited, designed and created.  
                                </div>
                    
                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption BigBold-Button rev-btn " 
                                id="slide-903-layer-5" 
                                data-x="['left','left','left','left']" data-hoffset="['480','480','30','30']" 
                                data-y="['bottom','bottom','bottom','bottom']" data-voffset="['100','100','30','30']"  
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                     
                                data-type="button" 
                                data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":""}]'
                                data-basealign="slide" 
                                data-responsive_offset="off" 
                                data-responsive="off"
                                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":2500,"ease":"Power3.easeInOut"},
                                {"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"Power2.easeInOut"},
                                {"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[15,15,15,15]"
                                data-paddingright="[50,50,50,50]"
                                data-paddingbottom="[15,15,15,15]"
                                data-paddingleft="[50,50,0,0]"
                    
                                style="z-index: 11; "><a href="#" class="site-button outline white">READ MORE</a> </div>                            

                            <!-- Border Part -->
                            <div class="tp-caption tp-shape tp-shapewrapper " 
                                id="slide-903-layer-8" 
                                data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                data-width="full"
                                data-height="full"
                                data-whitespace="nowrap"
                                data-visibility="['on','on','off','off']"
                     
                                data-type="shape" 
                                data-basealign="slide" 
                                data-responsive_offset="off" 
                                data-responsive="off"
                                data-frames='[{"delay":50,"speed":100,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeIn"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                    
                                style="z-index: 10;background-color:rgba(0, 0, 0, 0);border-color:rgb(255,255,255);border-style:solid;border-width:0px 80px 80px 80px;"> </div>
     
                        </li>                           
                                           
                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	
                </div>
            </div>
            <!-- SLIDER END -->
            
            
            <!-- WELCOME SECTION START -->
            <div class="section-full p-t90 bg-gray">
                <div class="container">
                    <div class="section-content">
                    	<div class="row">
                    		<div class="col-md-5 col-sm-12 text-uppercase text-black">
                            	<span class="font-30 font-weight-300">Welcome</span>
                                <h2 class="font-40">
                                    We are <span class="text-yellow">creative</span> Building  - Design  Company
                                </h2>
                                <p>Dummy text is also used to demonstrate the appearance of different typefaces and layouts, and in general</p>
                                <p class="text-lowercase">typefaces and layouts, and in appearance of different general 
                                      the content of dummy text is nonsensical.typefaces and layouts, 
                                      different general the content of dummy text is nonsensical.
                                </p>
                                 <a href="javascript:void(0);" class="btn-half site-button button-lg m-b15"><span>Read More</span><em></em></a>
                            </div>
                            
                        	<div class="col-md-7 col-sm-12">
                            	<div class="m-carousel-1 m-l100">
                            		<div class="owl-carousel home-carousel-1 owl-btn-vertical-center">
                                        <!-- COLUMNS 1 -->
                                        <div class="item">
                                            <div class="ow-img wt-img-effect zoom-slow">
                                                <a href="javascript:void(0);"><img src="images/gallery/pic1.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <!-- COLUMNS 2 -->
                                        <div class="item">
                                            <div class="ow-img wt-img-effect zoom-slow">
                                                <a href="javascript:void(0);"><img src="images/gallery/pic2.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <!-- COLUMNS 3 -->
                                        <div class="item">
                                            <div class="owl-img wt-img-effect zoom-slow">
                                                <a href="javascript:void(0);"><img src="images/gallery/pic3.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <!-- COLUMNS 4 -->
                                        <div class="item">
                                            <div class="ow-img wt-img-effect zoom-slow">
                                                <a href="javascript:void(0);"><img src="images/gallery/pic4.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <!-- COLUMNS 5 -->
                                        <div class="item">
                                            <div class="ow-img wt-img-effect zoom-slow">
                                                <a href="javascript:void(0);"><img src="images/gallery/pic5.jpg" alt=""></a>
                                            </div>
                                        </div>
                                   </div>
                               </div>
                            </div>
                        </div>
                        <div class="hilite-title p-lr20 m-tb20 text-right text-uppercase bdr-gray bdr-right">
                        	<strong>18 Year</strong>
                            <span class="text-black">Experience Working</span>
                        </div>
                    </div>
                </div>
            </div>   
            <!-- WELCOME  SECTION END -->  
             
    
