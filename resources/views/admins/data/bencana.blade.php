@extends('layouts/app')
@section('content')


<h1 class="text-center"> Data Bencana</h1>


<div class="container">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Tambah
</button>
<a class="btn btn-primary" href="/admins/data/bencana/exportpdf" role="button">Export PDF</a>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
    Export Bencana
  </button>
<table id="table_id" class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Foto</th>
      <th scope="col">Bencana</th>
      <th scope="col">Waktu</th>
      <th scope="col">Wilayah</th>
      <th scope="col">Lat</th>
      <th scope="col">Lng</th>
      <th scope="col">Penyebab</th>
      <th scope="col">Kronologi</th>
      <th scope="col">Aksi</th>
    </tr>
<tbody>
    @php $no = 1; @endphp
    @foreach ($data_bencana as $bencana)
    <tr>
        <td>{{ $no++ }}</td>
        <td>{{$bencana->tanggal}}</td>
        <td><img height="100" src="{{Storage::url($bencana->foto_bencana)}}"></td>
        <td>{{$bencana->jenis_bencana->nama_bencana}}</td>
        <td>{{$bencana->waktu}}</td>
        <td>{{$bencana->wilayah}}</td>
        <td>{{$bencana->lat}}</td>
        <td>{{$bencana->lng}}</td>
        <td>{{$bencana->penyebab}}</td>
        <td>{{$bencana->kronologi}}</td>
    <td>
    <a href="{{route('edit-data-bencana', $bencana->id_bencana)}}" class="btn btn-success btn-sm" >Edit</a>
    <br><br>
    <form action="{{route('hapus-data-bencana', $bencana->id_bencana)}}" method="POST">
        @csrf
    <button type="submit" class="btn btn-danger btn-sm" >Hapus</button>
    </form>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data Bencana</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/data/bencana/create" method="POST" enctype="multipart/form-data">
      {{csrf_field()}}
      <div class="form-group">
    <label for="exampleInputPassword1">Tanggal</label>
    <input name="tanggal" type="date" class="form-control" id="exampleInputPassword1" placeholder="Masukan Tanggal">
  </div>
      <div class="form-group">
    <label for="foto_bencana">Foto</label>
    <input name="foto_bencana" type="file" class="form-control" id="foto_bencana" placeholder="Masukan Foto">
  </div>
  <div class="form-group">
    <label for="id_jenis_bencana">Jenis Bencana</label>
    <select class="form-control" id="id_jenis_bencana" name="id_jenis_bencana">
      @foreach($jenis_bencana as $bencana)
      <option value="{{$bencana->id_jenis_bencana}}">{{$bencana->nama_bencana}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Waktu</label>
    <input name="waktu" type="time" class="form-control" id="exampleInputPassword1" placeholder="Masukan Waktu">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Wilayah</label>
    <input name="wilayah" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Wilayah">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Lat</label>
    <input name="lat" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Koordinat">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Lng</label>
    <input name="lng" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Koordinat">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Penyebab</label>
    <input name="penyebab" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Penyebab">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Kronologi</label>
    <input name="kronologi" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Kronologi">
  </div>
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Gagal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel1">Data Bencana</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="{{route ('print-bencana-masuk')}}" method="POST">
        {{csrf_field()}}
    <div class="form-group">
      <label for="id_jenis_bencana">Jenis Bencana</label>
      <select class="form-control" id="id_jenis_bencana" name="id_jenis_bencana">
        @foreach($jenis_bencana as $bencana)
        <option value="{{$bencana->id_jenis_bencana}}">{{$bencana->nama_bencana}}</option>
        @endforeach
      </select>
    </div>
        </div>
        <div class="modal-footer">
          <button type="reset" class="btn btn-secondary" data-dismiss="modal">Gagal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

