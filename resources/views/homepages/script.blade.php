<a href="#top" class="btn btn-primary rounded-circle btn-back-to-top" data-smooth-scroll data-aos="fade-up"
    data-aos-offset="2000" data-aos-mirror="true" data-aos-once="false">
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
    var now = new Date;
    var day = 864e5;
    var weeksToAdd = 2;
    var tenWeeksFromNow = new Date(+now + day * 7 * weeksToAdd).toISOString().slice(0, 10).replace(/\-/g,
        'index.html');
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
window.addEventListener("load", function() {
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
jQuery("form:not([action])").on('submit', function() {
    return false;
});
</script>


<!-- script for leaflet js -->
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>

<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
    integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
    crossorigin=""></script>
<script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>
<link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css'
    rel='stylesheet' />
    <script>
var mapboxAttribution = 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a>';
var mptiller = 'http://mt0.google.com/vt/lyrs=m&hl=en&x={x}&y={y}&z={z} ';
var mapsatelit = 'http://mt0.google.com/vt/lyrs=s&hl=en&x={x}&y={y}&z={z}';
var maphybrid = 'http://mt0.google.com/vt/lyrs=y&hl=en&x={x}&y={y}&z={z}';
var grayscale = L.tileLayer(mptiller, {
        id: 'mapid',
        attribution: mapboxAttribution
    }),
    streets = L.tileLayer(mptiller, {
        id: 'mapid',
        attribution: mapboxAttribution
    }),
    satelit = L.tileLayer(mapsatelit, {
        id: 'mapid',
        attribution: mapboxAttribution
    }),
    hybrid = L.tileLayer(maphybrid, {
        id: 'mapid',
        attribution: mapboxAttribution
    });
var mymap = L.map('mapid', {
    layers: [grayscale]
});
mymap.setView([-6.175110,106.865036],10);
</script>

<!-- Grafik -->
<script src="https://code.highcharts.com/highcharts.js"></script>
