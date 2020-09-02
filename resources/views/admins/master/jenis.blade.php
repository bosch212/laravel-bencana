@extends('layouts/app')
@section('content')


<h1 class="text-center"> Jenis Bencana</h1>


<div class="container">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Tambah
</button>
<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama Bencana</th>
      <th scope="col">Aksi</th>
    </tr>
    @foreach ($jenis_bencana as $jenis)
    <tr>
        <td>{{$jenis->id_jenis_bencana}}</td>
        <td>{{$jenis->nama_bencana}}</td>
        <td>
    <a href="{{route('edit-master-jenis_bencana', $jenis->id_jenis_bencana)}}" class="btn btn-success btn-sm" >Edit</a>

    <form action="{{route('hapus-master-jenis_bencana', $jenis->id_jenis_bencana)}}" method="POST">
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
        <h5 class="modal-title" id="exampleModalLabel">Jenis Bencana</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/admins/master/jenis/create" method="POST">
      {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputPassword1">Nama Bencana</label>
    <input name="nama_bencana" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Jenis Bencana">
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



