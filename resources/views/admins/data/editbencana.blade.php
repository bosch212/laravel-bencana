@extends('layouts/app')
@section('content')


<h1 class="text-center"> Data Bencana</h1>

<form action="/admins/data/bencana/update/{{$items->id_bencana}}" method="post" >

@csrf
<div class="container">
<div class="form-group">
    <label for="tanggal">Tanggal</label>
    <input type="date" value="{{$items->tanggal}}" class="form-control" id="tanggal" name="tanggal">
  </div>
  <div class="form-group">
    <label for="id_jenis_bencana">Jenis Bencana</label>
    <select class="form-control" id="id_jenis_bencana" name="id_jenis_bencana">
    <option value="{{$items->id_jenis_bencana}}">{{$items->jenis_bencana->nama_bencana}}</option>
    @foreach($jenis_bencana as $jenis)
    <option value="{{$jenis->id}}">{{$jenis->nama_bencana}}</option>
    @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="waktu">Waktu</label>
    <input type="time" value="{{$items->waktu}}" class="form-control" id="waktu" name="waktu">
  </div>
  <div class="form-group">
    <label for="wilayah">wilayah</label>
    <input type="text" value="{{$items->wilayah}}" class="form-control" id="wilayah" name="wilayah">
  </div>
  <div class="form-group">
    <label for="lat">Lat</label>
    <input type="text" value="{{$items->lat}}" class="form-control" id="lat" name="lat">
  </div>
  <div class="form-group">
    <label for="lng">Lng</label>
    <input type="text" value="{{$items->lng}}" class="form-control" id="lng" name="lng">
  </div>
  <div class="from-group">
    <label for="penyebab">Penyebab</label>
    <input type="text" value="{{$items->penyebab}}" class="form-control" id="penyebab" name="penyebab">
  </div>
  <div class="from-group">
    <label for="kronologi">Kronologi</label>
    <input type="text" value="{{$items->kronologi}}" class="form-control" id="kronologi" name="kronologi">
  </div>
<button type="submit" class="btn btn-primary">Update</button>
</div>

</form>

@endsection
