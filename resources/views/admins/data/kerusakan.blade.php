@extends('layouts/app')
@section('content')
<h1 class="text-center"> Data Kerusakan</h1>


<div class="container">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Tambah
</button>
<a class="btn btn-primary" href="{{route ('data-kerusakan-pdf')}}" role="button">Export PDF</a>
<br><br>
<table id="table_id" class="table table-bordered">
  <thead class="thead-dark">
    <tr align="center">

      <th scope="col">Jenis Bencana</th>
      <th scope="col">Wilayah</th>
      <th colspan="3" scope="col">Rumah Rusak</th>
      <th scope="col" colspan="3">Kerusakan Fasilitas</th>
      <th scope="col">Aksi</th>
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
    @foreach($data_kerusakan as $kerusakan)
    <tr>
        <td>{{$kerusakan->jenis_bencana->nama_bencana}}</td>
        <td>{{$kerusakan->wilayah}}</td>
        <td><a href="{{ route ('view-detail-berat',$kerusakan->id_kerusakan)}}">{{$kerusakan->berat}}</a></td>
        <td><a href="{{ route ('view-detail-sedang',$kerusakan->id_kerusakan)}}">{{$kerusakan->sedang}}</a></td>
        <td><a href="{{ route ('view-detail-ringan',$kerusakan->id_kerusakan)}}">{{$kerusakan->ringan}}</a></td>
        <td>{{$kerusakan->peribadahan}}</td>
        <td>{{$kerusakan->pendidikan}}</td>
        <td>{{$kerusakan->kesehatan}}</td>
        <td>
        <a href="{{route('edit-data-kerusakan', $kerusakan->id_kerusakan)}}" class="btn btn-success btn-sm" >Edit</a>
        <br><br>
        <a href="{{route('detail-data-detail_kerusakan', $kerusakan->id_kerusakan)}}" class="btn btn-info btn-sm" >Tambah Kerusakan</a>
        <form action="{{route('hapus-data-kerusakan', $kerusakan->id_kerusakan)}}" method="POST">
        @csrf
        <br>
    <button type="submit" class="btn btn-danger btn-sm" >Hapus</button>
    </form>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data Kerusakan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/data/kerusakan/create" method="POST" enctype="multipart/form-data">
      {{csrf_field()}}
      <div class="form-group">
    <label for="id_jenis_bencana">Jenis Bencana</label>
    <select class="form-control" id="id_jenis_bencana" name="id_jenis_bencana">
    @foreach($jenis_bencana as $kerusakan)
    <option value="{{$kerusakan->id_jenis_bencana}}">{{$kerusakan->nama_bencana}}</option>
    @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Wilayah</label>
    <input name="wilayah" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan wilayah">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Berat</label>
    <input name="berat" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan kerusakan berat">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Sedang</label>
    <input name="sedang" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan kerusakan sedang">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ringan</label>
    <input name="ringan" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan kerusakan ringan">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Peribadahan</label>
    <input name="peribadahan" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan kerusakan peribadahan">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Pendidikan</label>
    <input name="pendidikan" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan kerusakan pendidikan">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Kesehatan</label>
    <input name="kesehatan" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan kerusakan kesehatan">
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

