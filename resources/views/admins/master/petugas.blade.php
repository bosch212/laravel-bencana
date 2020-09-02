@extends('layouts/app')
@section('content')


<h1 class="text-center"> Data Petugas</h1>


<div class="container">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Tambah
</button>
<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id_petugas</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Kata Sandi</th>
      <th scope="col">Aksi</th>
    </tr>
    @foreach ($data_admin as $admin)
    <tr>
        <td>{{$admin->admin_id}}</td>
        <td>{{$admin->nama}}</td>
        <td>{{$admin->email}}</td>
        <td>{{$admin->kata_sandi}}</td>
        <td>
    <a href="{{route('edit-master-data_admin', $admin->id)}}" class="btn btn-success btn-sm" >Edit</a>

    <form action="{{route('hapus-master-data_admin', $admin->id)}}" method="POST">
    @csrf
    <br>
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
        <h5 class="modal-title" id="exampleModalLabel">Data Petugas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/admins/master/petugas/create" method="POST">
      {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputPassword1">Id Admin</label>
    <input name="admin_id" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan ID">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nama</label>
    <input name="nama" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Nama">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input name="email" type="email" class="form-control" id="exampleInputPassword1" placeholder="Masukan Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Kata Sandi</label>
    <input name="kata_sandi" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Kata Sandi">
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



