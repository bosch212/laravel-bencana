@extends('layouts/app')
@section('content')


<h1 class="text-center"> Nama Bencana</h1>

<form action="/admins/master/jenis/update/{{$items->id_jenis_bencana}}" method="post">

@csrf
<div class="container">
<div class="form-group">
    <label for="wilayah">Nama Bencana</label>
    <input type="text" value="{{$items->nama_bencana}}" class="form-control" id="nama_bencana" name="nama_bencana">
  </div>
<button type="submit" class="btn btn-primary">Update</button>
</div>

</form>

@endsection
