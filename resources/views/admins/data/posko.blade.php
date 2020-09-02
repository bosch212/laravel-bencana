@extends('layouts/app')
@section('content')


<h1 class="text-center"> Data Posko</h1>


<div class="container">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Tambah
</button>
<a class="btn btn-primary" href="/admins/data/posko/exportpdf" role="button">Export PDF</a>
<br><br>
<table id="table_id" class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Jenis Bencana</th>
      <th scope="col">Nama Posko</th>
      <th scope="col">Wilayah</th>
      <th scope="col">Foto</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Aksi</th>
    </tr>
    <tbody>
    @foreach ($data_posko as $posko)
    <tr>
        <td>{{$posko->jenis_bencana->nama_bencana}}</td>
        <td>{{$posko->nama_posko}}</td>
        <td>{{$posko->wilayah}}</td>
        <td><img height="100" src="{{Storage::url($posko->foto_posko)}}"></td>
        <td>{{$posko->keterangan}}</td>
        <td>
        <a href="{{route('edit-data-posko', $posko->id_posko)}}" class="btn btn-success btn-sm" >Edit</a>
    <form action="{{route('hapus-data-posko', $posko->id_posko)}}" method="POST">
    @csrf
    <button type="submit" class="btn btn-danger btn-sm" >Hapus</button>
    </form>
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
        <h5 class="modal-title" id="exampleModalLabel">Data Posko</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/data/posko/create" method="POST" enctype="multipart/form-data">
      {{csrf_field()}}

  <div class="form-group">
    <label for="id_jenis_bencana">Jenis Bencana</label>
    <select class="form-control" id="id_jenis_bencana" name="id_jenis_bencana">
      @foreach($jenis_bencana as $bencana)
      <option value="{{$bencana->id_jenis_bencana}}">{{$bencana->nama_bencana}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Tanggal</label>
    <input name="tanggal" type="date" class="form-control" id="exampleInputPassword1" placeholder="Masukan Tanggal">
  </div>
  <div class="form-group">
    <label for="">Nama Posko</label>
    <input name="nama_posko" type="text" class="form-control" id="nama_posko" placeholder="Masukan Nama Posko">
  </div>
  <div class="form-group">
    <label for="">Wilayah</label>
    <input name="wilayah" type="text" class="form-control" id="wilayah" placeholder="Masukan Wilayah">
  </div>
  <div class="form-group">
  <div class="form-group">
    <label for="">Foto</label>
    <input name="foto_posko" type="file" class="form-control" id="foto_posko" placeholder="Masukan Foto">
  </div>
    <label for="">Keterangan</label>
    <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
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


