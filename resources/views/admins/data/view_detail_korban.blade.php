@extends('layouts/app')
@section('content')

<div class="container">
    <a class="btn btn-primary" href="{{route('korban-meninggal-pdf',$detail_korban->first()->id_korban)}}" role="button">Export PDF</a>
<br><br>
<table id="table_id" class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Usia</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Keterangan</th>
    </tr>
    </thead>
    <tbody>
    @foreach($detail_korban as $korban)
    <tr>
        <td>{{$korban->nama_korban}}</td>
        <td>{{$korban->usia}}</td>
        <td>{{$korban->jenis_kelamin}}</td>
        <td>{{$korban->keterangan}}</td>

    </form>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection
