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
          <div class="h1">Berita</h3>
          </div>
        <div class="row mt-4 mt-md-5">
        @yield ('content')
        @foreach ($data_berita as $berita)
        <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
            <div class="card h-100 hover-box-shadow">
              <div class="d-block bg-gradient rounded-top position-relative">
                <img class="card-img-top hover-fade-out" src="{{Storage::url($berita->foto_berita)}}" alt="Image accompanying Treva testimonial">
              </div>
              <div class="card-body">
              <h3>{{$berita->nama_berita}}</h3>
                <p>
                  {{Str::limit($berita->keterangan, $limit = 100,$end = "...")}}
                </p>
                <a href="#" class="stretched-link" data-toggle="modal" data-target="#exampleModal">Read Story</a>
              </div>
            </div>
        </div>

          @endforeach
        </div>
      </div>
    </section>

    <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Berita</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <h3 style="text-align:left;">{{$berita->nama_berita}}</h3>
            <img class="card-img-top hover-fade-out" src="{{Storage::url($berita->foto_berita)}}" alt="Image accompanying Treva testimonial">
            <br><br>
            <p>{{$berita->keterangan}}</p>
        </div>
      </div>
    </div>
  </div>

@include ('homepages/script')
@include ('homepages/footer')
  </body>
<!-- Mirrored from jumpstart.mediumra.re/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 May 2020 20:07:54 GMT -->
</html>
