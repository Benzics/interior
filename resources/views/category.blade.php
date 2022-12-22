@extends('layouts.app')
@extends('partials.banner')

@section('content')
<!-- SECTION CONTENT START -->
<div class="section-full p-tb90">
    <div class="container">
        <!-- PAGINATION START -->
        <div class="filter-wrap p-tb50">
            <ul class="masonry-filter link-style  text-uppercase">
                    <li class="active"><a data-filter="*" href="#">{{ $pageTitle }}</a></li>  
            </ul>
        </div>
        <!-- PAGINATION END -->
    </div>
    <!-- GALLERY CONTENT START -->
     <div class="portfolio-wrap mfp-gallery work-grid clearfix">
         <div class="container-fluid">
               <div class="row">
                    @forelse($products as $product)
                        <!-- COLUMNS 1 -->
                        <div class="masonry-item cat-1 col-lg-3 col-md-6 col-sm-6 m-b30">
                            <div class="wt-img-effect ">
                                <img src="{{ getImage($product->portrait, '360x560') }}" alt="{{ $product->name }}">
                                <div class="overlay-bx-2 ">
                                    <div class="line-amiation">
                                        <div class="text-white  font-weight-300 p-a40">
                                            <h2><a href="{{ route('product.single', ['id' => $product->id]) }}" class="text-white font-20 letter-spacing-4 text-uppercase">{{ $product->name }}</a></h2>
                                            {!! shortText($product->description) !!}
                                            <a href="{{ route('product.single', ['id' => $product->id]) }}" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                        </div>
                                    </div>
                            </div>
                            </div>
                        </div>
                    @empty
                        <div class="masonry-item">No Products Yet</div>
                    @endforelse
                                                                                                                  
                </div>

                {{ $products->links() }}
            </div>
        </div>
    <!-- GALLERY CONTENT END -->

</div>
@endsection

@section('breadcrumb')
<li>{{ $pageTitle }}</li>
@endsection
<!-- SECTION CONTENT END  -->