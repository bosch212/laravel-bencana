@extends('layouts/app')
@section('content')

<h1 class="text-center"> Detail Korban </h1>


<div class="container">
<form method="post" action="{{route('tambah-detail-korban',$id)}}">
    @csrf

    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama_korban" aria-describedby="emailHelp" placeholder="Masukan Nama">
    </div>
    <div class="form-group">
        <label for="usia">Usia</label>
        <input type="text" class="form-control" id="usia" name="usia" aria-describedby="emailHelp" placeholder="Masukan Usia">
      </div>
      <div class="form-group">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
          <option>Laki - Laki</option>
          <option>Perempuan</option>
        </select>
      </div>
      <div class="form-group">
        <label for="jenis_korban">Jenis Korban</label>
        <select class="form-control" id="jenis_korban" name="jenis_korban">
          <option value = "meninggal">Meninggal</option>
          <option value = "luka_luka">Luka-Luka</option>
          <option value = "kehilangan">Kehilangan</option>
          <option value= "terdampak">Terdampak</option>

        </select>
      </div>
      <div class="form-group">
        <label for="">Keterangan</label>
        <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection

