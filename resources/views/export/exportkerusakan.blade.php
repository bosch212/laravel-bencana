<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PDF</title>
	<style>
		.custom
		{
			color: #ef5350;
		}

        table
        {
            border-collapse: collapse;
            margin: 0px auto;
            width: 100%;
        }

        table tr th, table tr td
        {
            border: 1px solid black;
        }
	</style>
</head>
<body>
	<div class="custom" style="text-align: center;">Sistem Informasi Bencana Alam</div>
    <div style="text-align: center;">Laporan Data Kerusakan</div>
    <div style="text-align: center;">Tanggal : {{ date('d-m-Y h:i') }}</div>
    <hr>

    <table>
        <thead>
            <tr>
                <th scope="col">Jenis Bencana</th>
                <th scope="col">Wilayah</th>
                <th colspan="3" scope="col">Rumah Rusak</th>
                <th scope="col" colspan="3">Kerusakan Fasilitas</th>
              </tr>
              <tr>
                  <th></th>
                  <th></th>
                  <th>Berat</th>
                  <th>Sedang</th>
                  <th>Ringan</th>
                  <th>Peribadahan</th>
                  <th>Pendidikan</th>
                  <th>Kesehatan</th>
              </tr>
        </thead>
        <tbody>
            @foreach ($data_kerusakan as $kerusakan)
                <tr>
                    <td>{{$kerusakan->jenis_bencana->nama_bencana}}</td>
                    <td>{{$kerusakan->wilayah}}</td>
                    <td>{{$kerusakan->berat}}</td>
                    <td>{{$kerusakan->sedang}}</td>
                    <td>{{$kerusakan->ringan}}</td>
                    <td>{{$kerusakan->peribadahan}}</td>
                    <td>{{$kerusakan->pendidikan}}</td>
                    <td>{{$kerusakan->kesehatan}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>




















