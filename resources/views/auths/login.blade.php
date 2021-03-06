<!doctype html>
<html lang="en">


<!-- Mirrored from jumpstart.mediumra.re/account-sign-in-simple.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 May 2020 20:09:40 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-52115242-17"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-52115242-17');
    </script>

    <meta charset="utf-8">
    <title>SIBA (Sistem Informasi Bencana Alam)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootstrap HTML template and UI kit by Medium Rare">
    <!-- Begin loading animation -->
    <style>
      @keyframes hideLoader{ 0%{ width: 100%; height: 100%; } 100%{ width: 0; height: 0; } } body > div.loader{ position: fixed; background: white; width: 100%; height: 100%; z-index: 1071; opacity: 0; transition: opacity .5s ease; overflow: hidden; pointer-events: none; display: flex; align-items: center; justify-content: center; } body:not(.loaded) > div.loader{ opacity: 1; } body:not(.loaded){ overflow: hidden; } body.loaded > div.loader{ animation: hideLoader .5s linear .5s forwards; } .loading-animation{width:40px;height:40px;margin:100px auto;background-color:#009B72;border-radius:100%;animation:pulse 1s infinite ease-in-out}@keyframes pulse{0%{-webkit-transform:scale(0);transform:scale(0)}100%{-webkit-transform:scale(1);transform:scale(1);opacity:0}}
    </style>
    <script type="text/javascript">
      window.addEventListener("load",function(){document.querySelector('body').classList.add('loaded');});
    </script>
    <!-- End loading animation -->
    <link href="{{url('assetshome/css/theme.min.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,600,700&amp;display=swap" rel="stylesheet">
  </head>

  <body>
    <div class="loader">
      <div class="loading-animation"></div>
    </div>
    <div class="navbar-container">
    <div data-overlay class="min-vh-100 bg-light d-flex flex-column justify-content-md-center">
      <section class="py-3">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-6">
              <div class="card card-body shadow">
                <h1 class="h5 text-center">Sign In</h1>
                <form action="{{ route('login') }}" method="post">
                {{csrf_field()}}
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email Address">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <div class="text-right text-small mt-2">
                      <a href="account-forgot-password.html">Forgot Password?</a>
                    </div>
                  </div>
                  <button class="btn btn-primary btn-block" type="submit">Sign In</button>
                </form>
              </div>
              {{-- <div class="text-center text-small mt-3">
                Don't have an account? <a href="\register">Sign up here</a>
                <br>
              </div> --}}
                <div class="text-center text-small mt-3">
                <a href="\" class="text-center text-small mt-3">Back</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <a href="#top" class="btn btn-primary rounded-circle btn-back-to-top" data-smooth-scroll data-aos="fade-up" data-aos-offset="2000" data-aos-mirror="true" data-aos-once="false">
      <img src="assets/img/icons/interface/icon-arrow-up.svg" alt="Icon" class="icon bg-white" data-inject-svg>
    </a>
    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="{{url('assetshome/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assetshome/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assetshome/js/bootstrap.js')}}"></script>

    <!--
             This appears in the demo only.  This script ensures our demo countdowns are always showing a date in the future
             by altering the date before the countdown is initialized
        -->
    <script type="text/javascript">
      (($) => {
            var now             = new Date;
            var day             = 864e5;
            var weeksToAdd      = 2;
            var tenWeeksFromNow = new Date(+now + day * 7 * weeksToAdd).toISOString().slice(0,10).replace(/\-/g, 'index.html');
            $('[data-countdown-date].add-countdown-time').attr('data-countdown-date', tenWeeksFromNow);
          })(jQuery);
    </script>

    <!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) -->

    <!-- AOS (Animate On Scroll - animates elements into view while scrolling down) -->
    <script type="text/javascript" src="{{url('assetshome/js/aos.js')}}"></script>
    <!-- Clipboard (copies content from browser into OS clipboard) -->
    <script type="text/javascript" src="{{url('assetshome/js/clipboard.min.js')}}"></script>
    <!-- Fancybox (handles image and video lightbox and galleries) -->
    <script type="text/javascript" src="{{url('assetshome/js/jquery.fancybox.min.js')}}"></script>
    <!-- Flatpickr (calendar/date/time picker UI) -->
    <script type="text/javascript" src="{{url('assetshome/js/flatpickr.min.js')}}"></script>
    <!-- Flickity (handles touch enabled carousels and sliders) -->
    <script type="text/javascript" src="{{url('assetshome/js/flickity.pkgd.min.js')}}"></script>
    <!-- Ion rangeSlider (flexible and pretty range slider elements) -->
    <script type="text/javascript" src="{{url('assetshome/js/ion.rangeSlider.min.js')}}"></script>
    <!-- Isotope (masonry layouts and filtering) -->
    <script type="text/javascript" src="{{url('assetshome/js/isotope.pkgd.min.js')}}"></script>
    <!-- jarallax (parallax effect and video backgrounds) -->
    <script type="text/javascript" src="{{url('assetshome/js/jarallax.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assetshome/js/jarallax-video.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assetshome/js/jarallax-element.min.js')}}"></script>
    <!-- jQuery Countdown (displays countdown text to a specified date) -->
    <script type="text/javascript" src="{{url('assetshome/js/jquery.countdown.min.js')}}"></script>
    <!-- jQuery smartWizard facilitates steppable wizard content -->
    <script type="text/javascript" src="{{url('assetshome/js/jquery.smartWizard.min.js')}}"></script>
    <!-- Plyr (unified player for Video, Audio, Vimeo and Youtube) -->
    <script type="text/javascript" src="{{url('assetshome/js/plyr.polyfilled.min.js')}}"></script>
    <!-- Prism (displays formatted code boxes) -->
    <script type="text/javascript" src="{{url('assetshome/js/prism.js')}}"></script>
    <!-- ScrollMonitor (manages events for elements scrolling in and out of view) -->
    <script type="text/javascript" src="{{url('assetshome/js/scrollMonitor.js')}}"></script>
    <!-- Smooth scroll (animation to links in-page)-->
    <script type="text/javascript" src="{{url('assetshome/js/smooth-scroll.polyfills.min.js')}}"></script>
    <!-- SVGInjector (replaces img tags with SVG code to allow easy inclusion of SVGs with the benefit of inheriting colors and styles)-->
    <script type="text/javascript" src="{{url('assetshome/js/svg-injector.umd.production.js')}}"></script>
    <!-- TwitterFetcher (displays a feed of tweets from a specified account)-->
    <script type="text/javascript" src="{{url('assetshome/js/twitterFetcher_min.js')}}"></script>
    <!-- Typed text (animated typing effect)-->
    <script type="text/javascript" src="{{url('assetshome/js/typed.min.js')}}"></script>
    <!-- Required theme scripts (Do not remove) -->
    <script type="text/javascript" src="{{url('assetshome/js/theme.js')}}"></script>
    <!-- This script appears only on the demo.  It is used to delay unnecessary image loading until after the main page content is loaded. -->
    <script type="text/javascript">
      window.addEventListener("load",function(){
            setTimeout(function() {
              const delayedImages = document.querySelectorAll('[data-delay-src]');
              theme.mrUtil.forEach(delayedImages, (index, elem) => {
                const source = elem.getAttribute('data-delay-src');
                elem.removeAttribute('data-delay-src');
                elem.setAttribute('src', source);
              });
            }, 500);
          });
    </script>

    <script type="text/javascript">
      // This script appears only in the demo - it disables forms with no action attribute to prevent
      // navigating away from the page.
      jQuery("form:not([action])").on('submit', function(){return false;});
    </script>

  </body>


<!-- Mirrored from jumpstart.mediumra.re/account-sign-in-simple.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 May 2020 20:09:40 GMT -->
</html>














