<!doctype html>
<html lang="en">
@include ('homepages/head')

<!-- Mirrored from jumpstart.mediumra.re/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 May 2020 20:06:29 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->


  <body>
    <div class="loader">
      <div class="loading-animation"></div>
    </div>
    <!-- <div class="alert alert-dismissible d-none d-md-block bg-primary-3 text-white py-4 py-md-3 px-0 mb-0 rounded-0 border-0">
    <div class="container">
        <div class="row no-gutters align-items-md-center justify-content-center">
            <div class="col-lg-11 col-md d-flex flex-column flex-md-row align-items-md-center justify-content-lg-center">
                <div class="mb-3 mb-md-0"><strong>Intro Sale</strong> $10 per license for Jumpstart's launch. Act fast, ends soon.</div>
                <a class="btn btn-sm btn-success ml-md-3" target="_blank" href=https://themeforest.net/item/jumpstart-app-and-software-template/24207799>Redeem Offer</a>
            </div>
            <div class="col-auto position-absolute right">
                <button type="button" class="close p-0 position-relative" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                        <img src="assets/img/icons/interface/icon-x.svg" alt="Close" class="icon icon-sm bg-white" data-inject-svg>
                    </span>
                </button>
            </div>
        </div>
    </div>
</div> -->
@include ('homepages/navbar')
@include ('homepages/animate')
        <section id="landing-pages">
      <div class="container">
        <div class="row">
          <div class="col">
            <h3 class="h1">Peta Bencana</h3>
          </div>
        </div>
        <div class="row mt-4 mt-md-5">
        @yield ('content')
          <div class="col">
                <div class="col-12">
                    <div id="mapid" style="width: 100%; height: 400px;"></div>
                    @foreach ($data_bencana as $bencana)
                    @endforeach
                </div>
          </div>
        </div>
      </div>
    </section>
    <script src="{{asset('geojson/kec_jakpus.js')}}"></script>
    <script src="{{asset('geojson/kec_jakbar.js')}}"></script>
    <script src="{{asset('geojson/kec_jaksel.js')}}"></script>
    <script src="{{asset('geojson/kec_jaktim.js')}}"></script>
    <script src="{{asset('geojson/kec_jakut.js')}}"></script>

@include ('homepages/script')
@include ('homepages/footer')

<script>
    L.geoJSON(kec_jakpus).addTo(mymap);
    L.geoJSON(kec_jakbar).addTo(mymap);
    L.geoJSON(kec_jaksel).addTo(mymap);
    L.geoJSON(kec_jaktim).addTo(mymap);
    L.geoJSON(kec_jakut).addTo(mymap);
    var markers = {!!json_encode($data_bencana) !!}
    console.log(markers);
    var flood = L.icon({
        iconUrl:'{{asset("icon/flood.png")}}',
        iconSize: [40, 45], // size of the icon
    });

    console.log(flood);
    markers.map(function(item) {
                tip = '<h4>'+item.nama_pelapor+'</h4>'+
                    '<p>foto: '+item.foto_bencana+'</p>'+
                    '<p>kronologi: '+item.kronologi+'</p>';
                marker = L.marker([item.lat, item.lng], {
                    icon: L.icon({
                        iconUrl:('/'+item.jenis_bencana.icon),
                        iconSize:[20,25]
                    })
                }).addTo(mymap).bindPopup(tip);
                // allmarkers.addLayer(marker);
            });
    </script>
  </body>
<!-- Mirrored from jumpstart.mediumra.re/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 May 2020 20:07:54 GMT -->
</html>
