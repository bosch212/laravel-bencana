@extends('layouts/app')
@section('content')

<div class="container">
    <a class="btn btn-primary" href="{{route('kerusakan-ringan-pdf',$detail_kerusakan->first()->id_kerusakan)}}" role="button">Export PDF</a>
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
            <li >Sebagian kecil struktur bangunan rusak ringan</li>
            <li >Retak-retak pada dinding plasteran</li>
            <li >Sebagian kecil komponen penunjang lainnya rusak</li>
            <li >Secara fisik kerusakan</li>
          </ul></td>

    </form>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection
