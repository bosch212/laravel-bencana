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
            <h3 class="h1">Data Kerusakan</h3>
          </div>
        </div>
        <div class="row mt-4 mt-md-5">
        @yield ('content')
          <div class="col">
            <table id="table_id" class="table table-bordered">
                <thead class="thead-dark">
                  <tr align="center">

                    <th scope="col">Jenis Bencana</th>
                    <th scope="col">Wilayah</th>
                    <th colspan="3" scope="col">Rumah Rusak</th>
                    <th scope="col" colspan="3">Kerusakan Fasilitas</th>
                  </tr>
                  <tr>

                      <th></th>
                      <th></th>
                      <th>Berat</th>
                      <th>Sedang</th>
                      <th>Ringan</th>
                      <th>Peribadahan</th>
                      <th>Pendidikan</th>
                      <th>Kesehatan</th>
                  </tr>
                  <tbody>
                  @foreach($data_kerusakan as $kerusakan)
                  <tr>
                      <td>{{$kerusakan->jenis_bencana->nama_bencana}}</td>
                      <td>{{$kerusakan->wilayah}}</td>
                      <td><a href="{{ route ('homepages-kerusakan-berat',$kerusakan->id_kerusakan)}}">{{$kerusakan->berat}}</a></td>
                      <td><a href="{{ route ('homepages-kerusakan-sedang',$kerusakan->id_kerusakan)}}">{{$kerusakan->sedang}}</a></td>
                      <td><a href="{{ route ('homepages-kerusakan-ringan',$kerusakan->id_kerusakan)}}">{{$kerusakan->ringan}}</a></td>
                      <td>{{$kerusakan->peribadahan}}</td>
                      <td>{{$kerusakan->pendidikan}}</td>
                      <td>{{$kerusakan->kesehatan}}</td>
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
