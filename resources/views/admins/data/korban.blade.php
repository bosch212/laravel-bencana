@extends('layouts/app')
@section('content')


<h1 class="text-center"> Data Korban </h1>


<div class="container">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Tambah
</button>
<a class="btn btn-primary" href="/admins/data/korban/exportpdf" role="button">Export PDF</a>
<br><br>
<table id="table_id" class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Jenis Bencana</th>
      <th scope="col">Wilayah</th>
      <th scope="col">Meninggal</th>
      <th scope="col">Luka-Luka</th>
      <th scope="col">Kehilangan</th>
      <th scope="col">Aksi</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data_korban as $korban)
    <tr>
        <td>{{$korban->jenis_bencana->nama_bencana}}</td>
        <td>{{$korban->wilayah}}</td>
        <td><a href="{{ route ('view-detail-korban',$korban->id_korban)}}">{{$korban->meninggal}}</a></td>
        <td><a href="{{ route ('view-detail-korban-luka',$korban->id_korban)}}">{{$korban->luka_luka}}</a></td>
        <td><a href="{{ route ('view-detail-korban-kehilangan',$korban->id_korban)}}">{{$korban->kehilangan}}</a></td>
        <td>
    <a href="{{route('edit-data-korban', $korban->id_korban)}}" class="btn btn-success btn-sm" >Edit</a>
    <br><br>
    <a href="{{route('detail-data-detail_korban', $korban->id_korban)}}" class="btn btn-info btn-sm" >Tambah Korban</a>
    <br><br>
    <form action="{{route('hapus-data-korban', $korban->id_korban)}}" method="POST">
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
        <h5 class="modal-title" id="exampleModalLabel">Data Korban</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/data/korban/create" method="POST" enctype="multipart/form-data">
      {{csrf_field()}}
      <div class="form-group">
    <label for="id_jenis_bencana">Jenis Bencana</label>
    <select class="form-control" id="id_jenis_bencana" name="id_jenis_bencana">
    @foreach($jenis_bencana as $korban)
    <option value="{{$korban->id_jenis_bencana}}">{{$korban->nama_bencana}}</option>
    @endforeach
    </select>
  </div>
      <div class="form-group">
    <label for="exampleInputPassword1">Wilayah</label>
    <input name="wilayah" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Wilayah">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Meninggal</label>
    <input name="meninggal" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan ...">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Luka-Luka</label>
    <input name="luka_luka" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Wilayah">
    <a href=""></a>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Kehilangan</label>
    <input name="kehilangan" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Wilayah">
    <a href="#"></a>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Gagal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

