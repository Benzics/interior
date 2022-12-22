@extends('layouts.app')

@extends('partials.banner')

@section('content')
 <!-- SECTION CONTENT START -->
 <div class="section-full p-tb90 square_shape1 square_shape3">
    <div class="container">
        <div class="blog-post blog-lg date-style-1 text-black">

            <div class="wt-post-media">
                <!--Fade slider-->
                <div class="owl-carousel owl-fade-slider-one owl-btn-vertical-center owl-dots-bottom-right">
                    @foreach($product->images as $row)
                        <div class="item">
                            <div class="aon-thum-bx">
                                <img src="{{ asset($row->name) }}" alt="{{ $product->name }}">
                            </div>
                        </div>
                    @endforeach
                                                       
                
                </div>
                <!--fade slider END-->
            </div>
            <div class="wt-post-info p-t30 bg-white">
                <div class="wt-post-title ">
                    <h2 class="post-title"><a href="javascript:void(0);" class="text-black font-20 letter-spacing-2 font-weight-600">{{ ucwords($product->name) }}</a></h2>
                </div>
             
                <div class="wt-post-text">
                    {!! $product->description !!}
                </div>
               
            </div>
            
        </div>
        <!-- BLOG START -->
        <div class="wt-divider divider-3px bg-gray-dark"><i class="icon-dot c-square"></i></div>
        
        <div class="section-content">
            <!-- TITLE START -->
            <div class="text-left">
                <h2 class="text-uppercase font-36">Related Apartments</h2>
                <div class="wt-separator-outer">
                    <div class="wt-separator bg-black"></div>
                </div>
            </div>
            <!-- TITLE END -->
            <!-- CAROUSEL -->
            <div class="section-content">
                <div class="owl-carousel blog-related-slider  owl-btn-top-right">
                    @foreach($related as $row)
                        <!-- COLUMNS 1 --> 
                        <div class="item">
                            <div class="blog-post blog-grid date-style-1">
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="{{ route($route . '.single', ['id' => $row->id]) }}"><img src="{{ asset(collect($row->images)->first()->name) }}" alt=""></a>
                                </div>
                                <div class="wt-post-info p-a20 bg-gray text-black">
                                    <div class="wt-post-title ">
                                        <h2 class="post-title"><a href="{{ route($route . '.single', ['id' => $row->id]) }}" class="text-black font-16 letter-spacing-2 font-weight-600">{{ $row->name }}</a></h2>
                                    </div>
                                
                                    <div class="wt-post-text">
                                        {!! shortText($row->description) !!}
                                    </div>
                                    <a href="{{ route($route . '.single', ['id' => $row->id]) }}" class="site-button black radius-no text-uppercase"><span class="font-12 letter-spacing-5"> Read More </span></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                </div>
            </div>
    </div>
    
        
        <!-- BLOG END -->
            
    </div>
</div>
<!-- SECTION CONTENT END -->
@endsection

@section('breadcrumb')
<li>{{ $pageTitle }}</li>
@endsection