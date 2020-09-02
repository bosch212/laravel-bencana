@extends('layouts/app')
@section('content')


<h1 class="text-center"> Data Posko</h1>

<form action="/admins/data/posko/update/{{$items->id_posko}}" method="post">

@csrf
<div class="container">
<div class="form-group">
    <label for="id_jenis_bencana">Jenis Bencana</label>
    <select class="form-control" id="id_jenis_bencana" name="id_jenis_bencana">
    <option value="{{$items->id_jenis_bencana}}">{{$items->jenis_bencana->nama_bencana}}</option>
    @foreach($bencana as $jenis)
    <option value="{{$jenis->id}}">{{$jenis->nama_bencana}}</option>
    @endforeach
    </select>
  </div>
 <div class="form-group">
    <label for="nama_posko">Nama Posko</label>
    <input type="text" value="{{$items->nama_posko}}" class="form-control" id="nama_posko" name="nama_posko">
  </div>
  <div class="form-group">
    <label for="wilayah">Wilayah</label>
    <input type="text" value="{{$items->wilayah}}" class="form-control" id="wilayah" name="wilayah">
  </div>
  <div class="form-group">
    <label for="keterangan">keterangan</label>
    <input type="text" value="{{$items->keterangan}}" class="form-control" id="keterangan" name="keterangan">

<button type="submit" class="btn btn-primary">Update</button>
</div>

</form>

@endsection







