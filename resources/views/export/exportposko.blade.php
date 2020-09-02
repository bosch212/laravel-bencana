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
    <div style="text-align: center;">Laporan Data Posko</div>
    <div style="text-align: center;">Tanggal : {{ date('d-m-Y h:i') }}</div>
    <hr>

    <table>
        <thead>
            <tr>
                <th scope="col">Jenis Bencana</th>
                <th scope="col">Nama Posko</th>
                <th scope="col">Wilayah</th>
                <th scope="col">Foto</th>
                <th scope="col">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_posko as $posko)
                <tr>
                    <td>{{$posko->jenis_bencana->nama_bencana}}</td>
                    <td>{{$posko->nama_posko}}</td>
                    <td>{{$posko->wilayah}}</td>
                    <td><img height="100" src="{{Storage::url($posko->foto_posko)}}"></td>
                    <td>{{$posko->keterangan}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>












