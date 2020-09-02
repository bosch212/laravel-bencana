<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{url('DataTables/datatables.min.css')}}"/>

    <title>Sistem Informasi Kebencanaan</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">SIBA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
      <li  class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Peta
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Peta Bencana</a>
      </li>
      <li  class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Data
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Data Bencana</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Grafik Bencana</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Data Korban</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/datakerusakan">Data Kerusakan</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Data Posko</a>
        </div>
      </li>
      <li  class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Informasi
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Berita</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Galeri Kegiatan</a>
        </div>
      </li>
      <li>
        <a href=""><button class="btn btn-warning">Login <span class="sr-only">(current)</span></button></a>
      </li>
    </ul>
  </div>
</nav>
   <div class="table-responsive">
   <table id="table_id" class="table table-bordered">
  <thead>
    <tr>
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
        <th></th>
    </tr>
    <tbody>
    @foreach($items as $item)
    <tr>
        <td>{{$item->jenis_bencana->nama_bencana}}</td>
        <td>{{$item->wilayah}}</td>
        <td>{{$item->berat}}</td>
        <td>{{$item->sedang}}</td>
        <td>{{$item->ringan}}</td>
        <td>{{$item->peribadahan}}</td>
        <td>{{$item->pendidikan}}</td>
        <td>{{$item->kesehatan}}</td>
    </tr>
    @endforeach
    </tbody>
  </thead>
  </table>
   </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>
    <script>
    $(document).ready( function () {
    $('#table_id').DataTable();
    } );
    </script>
  </body>
</html>
