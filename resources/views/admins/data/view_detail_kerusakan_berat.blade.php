@extends('layouts/app')
@section('content')

<div class="container">
<a class="btn btn-primary" href="{{route('kerusakan-berat-pdf',$detail_kerusakan->first()->id_kerusakan)}}" role="button">Export PDF</a>
<br><br>
<table id="table_id" class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Jenis Kerusakan</th>
      <th> Keterangan Kerusakan</th>
    </tr>
    </thead>
    <tbody>
    @foreach($detail_kerusakan as $kerusakan)
    <tr>
        <td>{{$kerusakan->nama}}</td>
        <td>{{$kerusakan->jenis_kerusakan_rumah}}</td>
        <td><ul>
            <li >Bangunan roboh total</li>
            <li >Sebagian besar struktur utama bangunan rusak</li>
            <li >Sebagian besar dinding dan lantai bangunan patah/retak</li>
            <li >Secara fisik kondisi kerusakan >50%</li>
            <li >Komponen penunjang lainnya rusak total</li>
            <li>Membahayakan/beresiko difungsikan</li>
            <li> Perbaikan dengan rekonstruksi</li>
          </ul></td>
    </form>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection
