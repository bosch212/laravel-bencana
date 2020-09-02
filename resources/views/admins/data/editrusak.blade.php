@extends('layouts/app')
@section('content')


<h1 class="text-center"> Data Kerusakan</h1>

<form action="/admins/data/kerusakan/update/{{$items->id_kerusakan}}" method="post">

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
    <label for="wilayah">Wilayah</label>
    <input type="text" value="{{$items->wilayah}}" class="form-control" id="wilayah" name="wilayah">
  </div>
  <div class="form-group">
    <label for="berat">Berat</label>
    <input type="text" value="{{$items->berat}}" class="form-control" id="berat" name="berat">
  </div>
  <div class="form-group">
    <label for="sedang">Sedang</label>
    <input type="text" value="{{$items->sedang}}" class="form-control" id="sedang" name="sedang">
  </div>
  <div class="form-group">
    <label for="ringan">Ringan</label>
    <input type="text" value="{{$items->ringan}}" class="form-control" id="ringan" name="ringan">
  </div>
  <div class="form-group">
    <label for="peribadahan">Peribadahan</label>
    <input type="text" value="{{$items->peribadahan}}" class="form-control" id="peribadahan" name="peribadahan">
  </div>
  <div class="form-group">
    <label for="pendidikan">Pendidikan</label>
    <input type="text" value="{{$items->pendidikan}}" class="form-control" id="pendidikan" name="pendidikan">
  </div>
  <div class="form-group">
    <label for="kesehatan">Kesehatan</label>
    <input type="text" value="{{$items->kesehatan}}" class="form-control" id="kesehatan" name="kesehatan">
  </div>

<button type="submit" class="btn btn-primary">Update</button>
</div>

</form>

@endsection







