@extends('layouts/app')
@section('content')


<h1 class="text-center"> Kegiatan </h1>

<form action="/admins/data/kegiatan/update/{{$items->id_kegiatan}}" method="post">

@csrf
<div class="container">
 <div class="form-group">
    <label for="nama_posko">Nama Kegiatan</label>
    <input type="text" value="{{$items->nama_kegiatan}}" class="form-control" id="nama_kegiatan" name="nama_kegiatan">
  </div>
  <div class="form-group">
    <label for="keterangan">keterangan</label>
    <input type="text" value="{{$items->keterangan}}" class="form-control" id="keterangan" name="keterangan">

<button type="submit" class="btn btn-primary">Update</button>
</div>

</form>

@endsection
