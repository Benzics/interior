<!-- FOOTER START -->
</div>
<footer class="site-footer   footer-dark footer-wide relative overflow-hide">
    <div class="footer-bottom overlay-wraper">
        <div class="overlay-main bg-black" style="opacity:0;"></div>
        <div class="container p-t30">
            <div class="row">
            
                <div class="col-md-4 wt-footer-bot-left">
                    <a href="#"><img src="{{ asset('images/logo-light.png') }}" width="140" height="58" alt=""></a>
                </div>
                
                <div class="col-md-4 text-center copyright-block p-t15">
                    <span class="copyrights-text">© {{ date('Y') . ' ' . setting('site-name') }}</span>
                </div>  
                                     
                <div class="col-md-4 wt-footer-bot-right p-t15">
                    <ul class="list-unstyled list-inline e-p-bx pull-right"> 
                        <li><a href="mailto:{{ setting('admin-mail') }}"><i class="fa fa-envelope"></i> {{ setting('admin-mail') }}</a></li>
                        <li><i class="fa fa-phone"></i> {{ setting('phone') }}</li>
    
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div id="particles-dark" class="particles-canvas"></div>
</footer>
<!-- FOOTER END -->

<!-- BUTTON TOP START -->
<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

</div>

<!-- LOADING AREA START ===== -->
<div class="loading-area">
<div class="loading-box"></div>
<div class="loading-pic">
<svg id="triangle" width="140px" height="140px" viewBox="-3 -4 39 39">
  <polygon fill="#fff" stroke="#000" stroke-width="2" points="16,0 32,32 0,32"></polygon>
</svg>
</div>
</div>
<!-- LOADING AREA  END ====== -->

