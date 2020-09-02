
<!DOCTYPE html>
<html>
   <head>
      <style>
         table, th, td {
            border: 1px solid black;
         }
         table{
             align:"center";
         }
      </style>
   </head>

   <body>
    <div class="custom" style="text-align: center;">Sistem Informasi Bencana Alam</div>
    <div style="text-align: center;">Laporan Data Bencana</div>
    <div style="text-align: center;">Tanggal : {{ date('d-m-Y h:i') }}</div>
    <hr>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Bencana</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Wilayah</th>
                    <th scope="col">Lat</th>
                    <th scope="col">Lng</th>
                    <th scope="col">Penyebab</th>
                    <th scope="col">Kronologi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_bencana as $bencana)
                    <tr>
                        <td>{{$bencana->tanggal}}</td>
                        <td><img src="{{public_path('storage/'.$bencana->foto_bencana)}}" width="auto" height="100px" class="img-fluid"></td>
                        <td>{{$bencana->jenis_bencana->nama_bencana}}</td>
                        <td>{{$bencana->waktu}}</td>
                        <td>{{$bencana->wilayah}}</td>
                        <td>{{$bencana->lat}}</td>
                        <td>{{$bencana->lng}}</td>
                        <td>{{$bencana->penyebab}}</td>
                        <td>{{$bencana->kronologi}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>








