@extends('layouts/app')
@section('content')

<h1 class="text-center"> Tambah Kerusakan </h1>


<div class="container">
<form method="post" action="{{route('tambah-detail-kerusakan',$id)}}">
    @csrf

    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" placeholder="Masukan Nama">
    </div>
    <div class="form-group">
        <label for="jenis_kerusakan_rumah">Jenis Kerusakan</label>
        <select class="form-control" id="jenis_kerusakan_rumah" name="jenis_kerusakan_rumah">
            <option value = "berat">Berat</option>
            <option value = "sedang">Sedang</option>
            <option value = "ringan">Ringan</option>
        </select>
      </div>

    <button  type="submit" class="btn btn-primary d-block">Submit</button>
  </form>
</div>
@endsection

@push('addon-style')
<style>
.showthis {
  display: none;
}
</style>

@endpush

@push('addon-script')

<script>
$(function() {
  $('.trigger').change(function() {
    $(this).next('.showthis').toggle(this.checked);
  })
});
</script>

@endpush
