@section('banner')
<div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url(/images/banner/{{ rand(1, 6) }}.jpg);">
    <div class="overlay-main bg-black opacity-07"></div>
    <div class="container">
        <div class="wt-bnr-inr-entry">
            <div class="banner-title-outer">
                <div class="banner-title-name">
                    <h2 class="text-white text-uppercase letter-spacing-5 font-18 font-weight-300">Fusing logic with imagination and truth with discovery.</h2>
                </div>
            </div>
            <!-- BREADCRUMB ROW -->                            
            <div class="p-tb20">
                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        @yield('breadcrumb')
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB ROW END -->                        
        </div>
    </div>
</div>
@endsection