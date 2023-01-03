@extends('layouts.app')

@extends('partials.banner')

@section('content')
<div class="section-full p-tb90 square_shape1 square_shape3">
    <div class="container">

        <!-- BLOG START -->
        <div class="blog-post date-style-1 blog-detail text-black">
            <div class="wt-post-media clearfix m-b30">
                <ul class="grid-post">
                    @foreach($product->images as $row)
                    <li>
                        <div class="portfolio-item wt-img-effect zoom-slow">
                            <img class="img-responsive" src="{{ asset($row->name) }}" alt="{{ $product->name }}">
                        </div>
                    </li>
                    @endforeach
              </ul>
            </div>
                    
            <div class="wt-post-title ">
                <h2 class="post-title"><a href="javascript:void(0);" class="text-black font-20 letter-spacing-2 font-weight-600">{{ ucwords($product->name) }}</a></h2>
            </div>
            
            <div class="wt-post-text">
                {!! $product->description !!}
            </div>
            <div class="wt-read-more">
                <button class="m-b15 site-button button-lg m-r15" data-toggle="modal" data-target="#with-form" type="button">Book Now</button>
            </div>
             
        </div>
        
        <div class="section-content">
            <!-- TITLE START -->
            <div class="text-left">
                <h2 class="text-uppercase font-36">Related Products</h2>
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


@endsection

@section('breadcrumb')
<li>{{ $pageTitle }}</li>
@endsection

@push('modal')
<!-- MODAL -->
<div id="with-form" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header bg-secondry">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-black">Book {{ ucwords($product->name) }}</h4>
        </div>
        <div class="modal-body">
          <form id="book-form" name="book-form" class="form-horizontal mb-lg" novalidate>
              <div class="form-group mt-lg">
                  <label class="col-sm-3 control-label">Your Email Address</label>
                  <div class="col-sm-9">
                      <input name="email" id="email" class="form-control" placeholder="Type your email..." required type="email">
                  </div>
              </div>
           
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="site-button text-uppercase button-sm letter-spacing-2 m-r15" data-dismiss="modal">Close</button>
          <button type="button" id="bookIt" class="site-button text-uppercase button-sm letter-spacing-2">Book Now</button>
        </div>
      </div>
    </div>
  </div>
  @endpush