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
            <h3 class="h1">Data Korban</h3>
          </div>
        </div>
        <div class="row mt-4 mt-md-5">
        @yield ('content')
          <div class="col">
            <table id="table_id" class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Jenis Bencana</th>
                    <th scope="col">Wilayah</th>
                    <th scope="col">Meninggal</th>
                    <th scope="col">Luka-Luka</th>
                    <th scope="col">Kehilangan</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($data_korban as $korban)
                  <tr>
                      <td>{{$korban->jenis_bencana->nama_bencana}}</td>
                      <td>{{$korban->wilayah}}</td>
                      <td><a href="{{ route ('homepages-detail-meninggal',$korban->id_korban)}}">{{$korban->meninggal}}</a></td>
                      <td><a href="{{ route ('homepages-detail-luka',$korban->id_korban)}}">{{$korban->luka_luka}}</a></td>
                      <td><a href="{{ route ('homepages-detail-hilang',$korban->id_korban)}}">{{$korban->kehilangan}}</a></td>
                  </form>
                  </tr>
                  @endforeach
                </tbody>
              </table>
          </div>
        </div>
      </div>
    </section>

@include ('homepages/script')
@include ('homepages/footer')
  </body>
<!-- Mirrored from jumpstart.mediumra.re/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 May 2020 20:07:54 GMT -->
</html>
