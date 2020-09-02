@extends('layouts/app')
@section('content')

<h1 class="text-center"> Berita </h1>


<div class="container">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Tambah
</button>
<br><br>
<table id="table_id" class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Berita</th>
      <th scope="col">Foto</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Aksi</th>
    </tr>
<tbody>
    @php $no = 1; @endphp
    @foreach ($data_berita as $berita)
    <tr>
        <td>{{ $no++ }}</td>
        <td>{{$berita->nama_berita}}</td>
        <td><img height="100" src="{{Storage::url($berita->foto_berita)}}"></td>
        <td>{{$berita->keterangan}}</td>
    <td>
    <a href="{{route('edit-data-berita', $berita->id_berita)}}" class="btn btn-success btn-sm" >Edit</a>
    <br><br>
    <form action="{{route('hapus-data-berita', $berita->id_berita)}}" method="POST">
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
        <h5 class="modal-title" id="exampleModalLabel">Berita</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/data/berita/create" method="POST" enctype="multipart/form-data">
      {{csrf_field()}}
      <div class="form-group">
        <label for="exampleInputPassword1">Nama Berita</label>
        <input name="nama_berita" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Nama Berita">
      </div>
      <div class="form-group">
    <label for="foto_berita">Foto</label>
    <input name="foto_berita" type="file" class="form-control" id="foto_berita" placeholder="Masukan Foto">
  </div>
  <div class="form-group">
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
