@extends('layouts/app')
@section('content')

<div class="container">
    <a class="btn btn-primary" href="{{route('kerusakan-sedang-pdf',$detail_kerusakan->first()->id_kerusakan)}}" role="button">Export PDF</a>
<br><br>
<table id="table_id" class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">jenis Kerusakan</th>
      <th> Keterangan Kerusakan</th>
    </tr>
    </thead>
    <tbody>
    @foreach($detail_kerusakan as $kerusakan)
    <tr>
        <td>{{$kerusakan->nama}}</td>
        <td>{{$kerusakan->jenis_kerusakan_rumah}}</td>
        <td><ul>
            <li >Bangunan masih berdiri</li>
            <li >Sebagian kecil struktur utama bangunan rusak</li>
            <li >Sebagian besar komponen penunjang lainnya rusak</li>
            <li >Relatif masih berfungsi</li>
            <li >Secara fisik kerusakan 30-50%</li>
            <li> Perbaikan dengan rehabilitasi</li>
          </ul></td>

    </form>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection
