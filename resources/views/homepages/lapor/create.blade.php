<!doctype html>
<html lang="en">
@include ('homepages/head')
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<body>
    <div class="loader">
        <div class="loading-animation"></div>
    </div>
    @include ('homepages/navbar')
    @include ('homepages/animate')
    <section id="landing-pages">
        <div class="container">
        @if(!Session::get('simpan'))
            <form method="post" action="{{route('homepages-lapor')}}" enctype="multipart/form-data">
                <div class="modal-body">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama_pelapor">
                    </div>
                    <div class="form-group">
                        <!-- <label for="exampleInputPassword1">Jenis Bencana</label> -->
                        <div class="form-group">
                            <label for="my-select">Jenis Bencana</label>
                            <select id="my-select" class="form-control" name="id_jenis_bencana">
                                @foreach($data_jenis as $key => $value)
                                <option value="{{$key}}">{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">No Telp</label>
                        <input type="number" class="form-control" name="no_hp" placeholder="number">
                    </div>
                    <div class="form-group">
                        <label for="foto_bencana">Foto</label>
                        <input type="file" class="form-control" name="foto_bencana" id="foto_bencana">
                    </div>
                    <div class="form-group">
                        <div id="mapid" style="width: 100%; height: 200px;"></div>
                    </div>

                    <input type="hidden" name="lat" id="inputlat" class="form-control" value="">

                    <input type="hidden" name="lng" id="inputlng" class="form-control" value="">

                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        @else
            <h2>Terima kasih telah mengirim laporan bencana, data Anda akan tersimpan ke dalam server kami</h2>
        @endif
        </div>
    </section>

    @include ('homepages/script')
    @include ('homepages/footer')
    <script>
      function getLocation() {
        if (navigator.geolocation) {
          var lokasi = navigator.geolocation.getCurrentPosition(showPosition);
          // console.log(lokasi);
        } else {
          // x.innerHTML = "Geolocation is not supported by this browser.";
        }
      }

      function showPosition(position) {
        lat = position.coords.latitude;
        lng = position.coords.longitude;
        var marker = L.marker([lat, lng]).addTo(mymap);
        $('#inputlat').val(lat);
        $('#inputlng').val(lng);

        marker.bindPopup("<b>Hallo</b><br>Lokasi saya disini.").openPopup();
      }
      getLocation();

    </script>
</body>
<!-- Mirrored from jumpstart.mediumra.re/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 May 2020 20:07:54 GMT -->

</html>
