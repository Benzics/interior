@extends('layouts.app')

@extends('partials.banner')

@section('content')
 <!-- SECTION CONTENT START -->
 <div class="section-full p-tb80">
    <!-- LOCATION BLOCK-->
    <div class="container">
        <!-- TITLE START -->
        <div class="section-head text-left text-black">
            <h2 class="text-uppercase font-36">Where to Find us </h2>
            <div class="wt-separator-outer">
                <div class="wt-separator bg-black"></div>
            </div>
        </div>
        <!-- TITLE END -->                
        <!-- GOOGLE MAP & CONTACT FORM -->
        <div class="section-content">
            <!-- CONTACT FORM-->
            <div class="wt-box">
                <form class="contact-form cons-contact-formm" method="post" action="{{ route('contact') }}">
                    @csrf
                    <div class="contact-one p-a40 p-r150">
                           
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control" required placeholder="Email">
                                </div>
                           
                                <div class="form-group">
                                    <textarea name="message" rows="3" class="form-control " required placeholder="Message"></textarea>
                                </div>
                            
                                <button name="submit" type="submit" value="Submit" class="site-button black radius-no text-uppercase">
                                        <span class="font-12 letter-spacing-5">Submit</span>
                                </button>
                                
                                <div class="contact-info bg-black text-white p-a30">
                                    <div class="wt-icon-box-wraper left p-b30">
                                        <div class="icon-sm"><i class="iconmoon-smartphone-1"></i></div>
                                        <div class="icon-content text-white ">
                                            <h5 class="m-t0 text-uppercase">Phone number</h5>
                                            <p>{{ setting('phone') }}</p>
                                        </div>
                                    </div>
                                    
                                    <div class="wt-icon-box-wraper left p-b30">
                                        <div class="icon-sm"><i class="iconmoon-email"></i></div>
                                        <div class="icon-content text-white">
                                            <h5 class="m-t0  text-uppercase">Email address</h5>
                                            <p>{{ setting('admin-mail') }}</p>
                                        </div>
                                    </div>
                                    
                                    <div class="wt-icon-box-wraper left">
                                        <div class="icon-sm"><i class="iconmoon-travel"></i></div>
                                        <div class="icon-content text-white">
                                            <h5 class="m-t0  text-uppercase">Address info</h5>
                                            <p>{{ setting('address') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </form>
            </div>
        </div>
    </div>
</div>

          
<!-- SECTION CONTENT END -->
@endsection

@section('breadcrumb')
<li>Contact Us</li>
@endsection