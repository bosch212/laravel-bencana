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
    <div style="text-align: center;">Laporan Data Korban Meninggal</div>
    <div style="text-align: center;">Tanggal : {{ date('d-m-Y h:i') }}</div>
    <hr>

    <table>
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Usia</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($detail_korban as $detail_korban)
                <tr>
                    <td>{{$detail_korban->nama_korban}}</td>
                    <td>{{$detail_korban->usia}}</td>
                    <td>{{$detail_korban->jenis_kelamin}}</td>
                    <td>{{$detail_korban->keterangan}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>





