@extends('layouts.app')
@section('content')
	
        <!-- HEADER END -->
        
       
        
            <!-- SLIDER START -->
            <div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="goodnews-header" data-source="gallery" style="background:#eeeeee;padding:0px;">
                <div id="welcome" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.3.1">
                    <ul>
                        @forelse ($banners as $item)
                        <li data-index="rs-{{ $item->id }}" data-transition="fadethroughdark" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="{{ getImage($item->thumb, '50x50') }}"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off"  data-title="" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{ getImage($item->image, '1920x1080') }}"  alt=""  data-lazyload="{{ getImage($item->image, '1920x1080') }}" data-bgposition="center center" 
                            data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                    
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  " 
                                id="slide-{{ $item->id }}-layer-1" 
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
                                id="slide-{{ $item->id }}-layer-2" 
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
                                id="slide-{{ $item->id }}-layer-3" 
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
                                color:#fff;">{{ $item->title }}</div>
                    
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption BigBold-SubTitle  " 
                                id="slide-{{ $item->id }}-layer-4" 
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
                                ">{{ $item->description }}
                                </div>
                    
                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption BigBold-Button rev-btn " 
                                id="slide-{{ $item->id }}-layer-5" 
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
                    
                                style="z-index: 11; "><a href="{{ url($item->url) }}" class="site-button outline white">{{ $item->button_text }}</a> </div>                            

                            <!-- Border Part -->
                            <div class="tp-caption tp-shape tp-shapewrapper " 
                                id="slide-{{ $item->id }}-layer-8" 
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
                        @empty
                        <li>No Banners found</li>
                        @endforelse
                          
                                           
                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	
                </div>
            </div>
            <!-- SLIDER END -->
            
            {{-- about section --}}
            <div class="section-full p-t90 bg-gray">
                <div class="container">
                    <div class="section-content">
                    	<div class="row">
                    		<div class="col-md-5 col-sm-12 text-uppercase text-black">
                            	<span class="font-30 font-weight-300">{{ $about?->title }}</span>
                                <h2 class="font-40">
                                   {{ $about?->subtitle }}
                                </h2>
                                {!! $about?->content !!}
                                 <a href="{{ url($about?->url ?? '/') }}" class="btn-half site-button button-lg m-b15"><span>{{ $about?->button_text }}</span><em></em></a>
                            </div>
                            
                        	<div class="col-md-7 col-sm-12">
                            	<div class="m-carousel-1 m-l100">
                            		<div class="owl-carousel home-carousel-1 owl-btn-vertical-center">
                                        @php($images = collect($about?->images)->all())

                                        @forelse($images as $item)

                                            <div class="item">
                                                <div class="ow-img wt-img-effect zoom-slow">
                                                    <a href="{{ $about?->url }}"><img src="{{ getImage($item->path) }}" alt=""></a>
                                                </div>
                                            </div>
                                        @empty
                                        <div class="item">
                                            <div class="ow-img wt-img-effect zoom-slow">
                                                <a href="#"><img src="{{ getImage('', '800x500') }}" alt=""></a>
                                            </div>
                                        </div>
                                        @endforelse
                                   </div>
                               </div>
                            </div>
                        </div>
                        <div class="hilite-title p-lr20 m-tb20 text-right text-uppercase bdr-gray bdr-right">
                        	<strong>8 Years</strong>
                            <span class="text-black">Experience Working</span>
                        </div>
                    </div>
                </div>
            </div>   
            <!-- WELCOME  SECTION END -->  
             
    <!-- LATEST PRJECTS SLIDER START -->
    <div class="section-full p-t90 p-lr80 latest_project-outer square_shape3">

        <!-- TITLE START -->
        <div class="section-head text-left">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="text-uppercase font-36">Latest Products</h2>
                    <div class="wt-separator-outer">
                        <div class="wt-separator bg-black"></div>
                    </div>
                </div>
                <div class="col-md-8">
                    <ul class="btn-filter-wrap">
                        <li class="btn-filter btn-active" data-filter="*">All Project</li>
                        @forelse($productCategories as $item)
                        <li class="btn-filter" data-filter=".prodcat-{{ $item->id }}">{{ $item->name }}</li>
                        @empty

                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
        <!-- TITLE END -->

        <!-- IMAGE CAROUSEL START -->
        <div class="section-content">
            <div class="owl-carousel owl-carousel-filter  owl-btn-bottom-left">
                @forelse ($productCategories as $category)
                    @forelse ($productService->getAll([['category_id', '=', $category->id]], 8) as $product)
                        
                        <div class="item fadingcol prodcat-{{ $category->id }}">
                            <div class="wt-img-effect ">
                                <img src="{{ getImage($product->portrait, '360x560') }}" alt="{{ $product->name }}">
                                <div class="overlay-bx-2 ">
                                    <div class="line-amiation">
                                        <div class="text-white  font-weight-300 p-a40">
                                            <h2><a href="javascript:void(0);" class="text-white font-20 letter-spacing-4 text-uppercase">{{ $product->name }}</a></h2>
                                            {!! shortText($product->description) !!}
                                            <a href="javscript:;" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                @empty
                    
                @endforelse
            </div>  
        </div>
        
        <div class="hilite-title p-lr20 m-tb20 text-right text-uppercase bdr-gray bdr-right">
            <strong>Awesome</strong>
            <span class="text-black">Designs</span>
        </div>
     </div>   
    <!-- LATEST PRJECTS SLIDER END --> 
     
    
    
    <!-- CLIENT LOGO SECTION START -->
    {{-- <div class="section-full p-tb100  bg-repeat " style="background-image:url(images/background/ptn-1.png);">
        <div class="container">
            <div class="section-content">
            
                <!-- TESTIMONIAL 4 START ON BACKGROUND -->   
                <div class="section-content">
                     <div class="section-content p-tb10 owl-btn-vertical-center">
                        <div class="owl-carousel home-client-carousel-2">
                        
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                    <a href="javascript:void(0);"><img src="images/client-logo/w1.png" alt=""></a></div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                    <a href="javascript:void(0);"><img src="images/client-logo/w2.png" alt=""></a></div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                    <a href="javascript:void(0);"><img src="images/client-logo/w3.png" alt=""></a></div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                    <a href="javascript:void(0);"><img src="images/client-logo/w4.png" alt=""></a></div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                    <a href="javascript:void(0);"><img src="images/client-logo/w5.png" alt=""></a></div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                    <a href="javascript:void(0);"><img src="images/client-logo/w6.png" alt=""></a></div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- CLIENT LOGO  SECTION End --> 
                
    <!-- COMPANY DETAIL SECTION START -->
    <div class="section-full p-tb100 overlay-wraper bg-top-center bg-parallax"  data-stellar-background-ratio="0.5" style="background-image:url(images/background/bg-11.jpg);">
        <div class="overlay-main opacity-08 bg-black"></div>
        <div class="container ">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="some-facts">
                        <div class="text-white text-uppercase">
                        <span class="font-40 font-weight-300">{{ $facts?->title }}</span>
                        <h2 class="font-50">
                            <span class="text-yellow">{{ $facts?->subtitle }}</span>
                        </h2>
                        <p class="font-18 font-weight-300">
                            {!! $facts?->content !!}
                        </p>
                    </div>
                    </div>
                </div>
               
               <div class="col-md-6 col-sm-12">
                       <div class="row some-facts-counter">
                        <div class="col-md-4 col-sm-4">
                            <div class="wt-icon-box-wraper p-a10 text-white m-b30">
                                <div class="icon-content text-center">
                                    <div class="font-40 font-weight-600 m-b5 text-yellow"><span class="counter">451</span></div>
                                    <div class="wt-separator-outer m-b20"><div class="wt-separator bg-white"></div></div>
                                    <span class="text-uppercase">Happy Clients</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="wt-icon-box-wraper p-a10 text-white m-b30">
                                <div class="icon-content text-center">
                                    <div class="font-40 font-weight-600 m-b5 text-yellow"><span class="counter">532</span></div>
                                    <div class="wt-separator-outer m-b20"><div class="wt-separator bg-white"></div></div>
                                    <span class="text-uppercase">Finished projects</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="wt-icon-box-wraper p-a10 text-white m-b30">
                                <div class="icon-content text-center">
                                    <div class="font-40 font-weight-600 m-b5 text-yellow"><span class="counter">299</span></div>
                                    <div class="wt-separator-outer m-b20"><div class="wt-separator bg-white"></div></div>
                                    <span class="text-uppercase">Working Days</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COMPANY DETAIL SECTION End --> 
               
    <!-- TESTIMONIALS SECTION START -->
    {{-- <div class="section-full p-t140 bg-repeat " style="background-image:url(images/background/ptn-1.png);">
        <div class="container">
            <div class="section-content">
                <!-- TITLE START -->
                <div class="section-head text-left">
                    <h2 class="text-uppercase font-36">Testimonials</h2>
                    <div class="wt-separator-outer">
                        <div class="wt-separator bg-black"></div>
                    </div>
                </div>
                <!-- TITLE END -->                    
                <!-- TESTIMONIAL 4 START ON BACKGROUND -->   
                <div class="section-content">
                    <div class="owl-carousel testimonial-home">
                        <div class="item">
                            <div class="testimonial-6">
                                <div class="testimonial-pic-block"> 
                                    <div class="testimonial-pic">
                                        <img src="images/testimonials/pic1.jpg" width="132" height="132" alt="">
                                    </div>
                                </div>
                                <div class="testimonial-text clearfix bg-white">
                                    <div class="testimonial-detail clearfix">
                                        <strong class="testimonial-name">Taylor Roberts</strong>
                                        <span class="testimonial-position p-t0">Co-manager associated</span>
                                    </div>
                                    <div class="testimonial-paragraph text-black p-t15">
                                        <span class="fa fa-quote-left"></span>
                                        <p>typefaces and layouts, and in appearance of different general the content of dummy text is nonsensical.typefaces of dummy text is nonsensical.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-6">
                                <div class="testimonial-pic-block"> 
                                    <div class="testimonial-pic">
                                        <img src="images/testimonials/pic4.jpg" width="132" height="132" alt="">
                                    </div>
                                </div>
                                <div class="testimonial-text clearfix bg-white">
                                    <div class="testimonial-detail clearfix">
                                        <strong class="testimonial-name">Robert willson</strong>
                                        <span class="testimonial-position p-t0">Co-manager associated</span>
                                    </div>
                                    <div class="testimonial-paragraph text-black p-t15">
                                        <span class="fa fa-quote-left"></span>
                                        <p>typefaces and layouts, and in appearance of different general the content of dummy text is nonsensical.typefaces of dummy text is nonsensical.</p>
                                    </div>
                                </div>
                            </div>
                        </div>                                
                        <div class="item">
                            <div class="testimonial-6">
                                <div class="testimonial-pic-block"> 
                                    <div class="testimonial-pic">
                                        <img src="images/testimonials/pic2.jpg" width="132" height="132" alt="">
                                    </div>
                                </div>
                                <div class="testimonial-text clearfix bg-white">
                                    <div class="testimonial-detail clearfix">
                                        <strong class="testimonial-name">Taylor Roberts</strong>
                                        <span class="testimonial-position p-t0">Co-manager associated</span>
                                    </div>
                                    <div class="testimonial-paragraph text-black p-t15">
                                        <span class="fa fa-quote-left"></span>
                                        <p>typefaces and layouts, and in appearance of different general the content of dummy text is nonsensical.typefaces of dummy text is nonsensical.</p>
                                    </div>
                                </div>
                            </div>
                        </div>                                
                        <div class="item">
                            <div class="testimonial-6">
                                <div class="testimonial-pic-block"> 
                                    <div class="testimonial-pic">
                                        <img src="images/testimonials/pic3.jpg" width="132" height="132" alt="">
                                    </div>
                                </div>
                                <div class="testimonial-text clearfix bg-white">
                                    <div class="testimonial-detail clearfix">
                                        <strong class="testimonial-name">Robert willson</strong>
                                        <span class="testimonial-position p-t0">Co-manager associated</span>
                                    </div>
                                    <div class="testimonial-paragraph text-black p-t15">
                                        <span class="fa fa-quote-left"></span>
                                        <p>typefaces and layouts, and in appearance of different general the content of dummy text is nonsensical.typefaces of dummy text is nonsensical.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-6">
                                <div class="testimonial-pic-block"> 
                                    <div class="testimonial-pic">
                                        <img src="images/testimonials/pic1.jpg" width="132" height="132" alt="">
                                    </div>
                                </div>
                                <div class="testimonial-text clearfix bg-white">
                                    <div class="testimonial-detail clearfix">
                                        <strong class="testimonial-name">Taylor Roberts</strong>
                                        <span class="testimonial-position p-t0">Co-manager associated</span>
                                    </div>
                                    <div class="testimonial-paragraph text-black p-t15">
                                        <span class="fa fa-quote-left"></span>
                                        <p>typefaces and layouts, and in appearance of different general the content of dummy text is nonsensical.typefaces of dummy text is nonsensical.</p>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="item">
                            <div class="testimonial-6">
                                <div class="testimonial-pic-block"> 
                                    <div class="testimonial-pic">
                                        <img src="images/testimonials/pic4.jpg" width="132" height="132" alt="">
                                    </div>
                                </div>
                                <div class="testimonial-text clearfix bg-white">
                                    <div class="testimonial-detail clearfix">
                                        <strong class="testimonial-name">Taylor Roberts</strong>
                                        <span class="testimonial-position p-t0">Co-manager associated</span>
                                    </div>
                                    <div class="testimonial-paragraph text-black p-t15">
                                        <span class="fa fa-quote-left"></span>
                                        <p>typefaces and layouts, and in appearance of different general the content of dummy text is nonsensical.typefaces of dummy text is nonsensical.</p>
                                    </div>
                                </div>
                            </div>
                        </div>                                                                                                
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
                <div class="hilite-title p-lr20 m-tb20 text-right text-uppercase bdr-gray bdr-right">
                    <strong>Client</strong>
                    <span class="text-black">Says</span>
                </div>
            </div>                
    </div>    --}}
    <!-- TESTIMONIALS SECTION END --> 
      

@endsection

@push('scripts')
<!-- REVOLUTION JS FILES -->

<script  src="{{ asset('js/jquery.themepunch.tools.min.js') }}"></script>
<script  src="{{ asset('js/jquery.themepunch.revolution.min.js') }}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
<script  src="{{ asset('js/revolution-plugin.js') }}"></script>

<!-- REVOLUTION SLIDER SCRIPT FILES -->
<script  src="{{ asset('js/rev-script-1.js') }}"></script>
@endpush