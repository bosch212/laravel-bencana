@extends('layouts/app')
@section('content')


<h1 class="text-center"> Berita</h1>

<form action="/admins/data/berita/update/{{$items->id_berita}}" method="post">

@csrf
<div class="container">
 <div class="form-group">
    <label for="nama_posko">Nama Berita</label>
    <input type="text" value="{{$items->nama_berita}}" class="form-control" id="nama_berita" name="nama_berita">
  </div>
  <div class="form-group">
    <label for="keterangan">keterangan</label>
    <input type="text" value="{{$items->keterangan}}" class="form-control" id="keterangan" name="keterangan">

<button type="submit" class="btn btn-primary">Update</button>
</div>

</form>

@endsection







