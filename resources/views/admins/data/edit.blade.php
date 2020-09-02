@extends('layouts/app')
@section('content')


<h1 class="text-center"> Data Korban</h1>

<form action="/admins/data/korban/update/{{$items->id_korban}}" method="post">

@csrf
<div class="container">
<div class="form-group">
    <label for="id_jenis_bencana">Jenis Bencana</label>
    <select class="form-control" id="id_jenis_bencana" name="id_jenis_bencana">
    <option value="{{$items->id_jenis_bencana}}">{{$items->jenis_bencana->nama_bencana}}</option>
    @foreach($bencana as $jenis)
    <option value="{{$jenis->id_jenis_bencana}}">{{$jenis->nama_bencana}}</option>
    @endforeach
    </select>
  </div>
<div class="form-group">
    <label for="wilayah">Wilayah</label>
    <input type="text" value="{{$items->wilayah}}" class="form-control" id="wilayah" name="wilayah">
  </div>
  <div class="form-group">
    <label for="meninggal">meninggal</label>
    <input type="text" value="{{$items->meninggal}}" class="form-control" id="meninggal" name="meninggal">
  </div>
  <div class="form-group">
    <label for="luka_luka">luka-luka</label>
    <input type="text" value="{{$items->luka_luka}}" class="form-control" id="luka_luka" name="luka_luka">
  </div>
  <div class="form-group">
    <label for="kehilangan">kehilangan</label>
    <input type="text" value="{{$items->kehilangan}}" class="form-control" id="kehilangan" name="kehilangan">
  </div>
  <div class="form-group">
    <label for="terdampak">terdampak</label>
    <input type="text" value="{{$items->terdampak}}" class="form-control" id="terdampak" name="terdampak">
  </div>

<button type="submit" class="btn btn-primary">Update</button>
</div>

</form>

@endsection
