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
    <div style="text-align: center;">Laporan Data Korban Luka - Luka</div>
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
            @foreach ($korban as $korban)
                <tr>
                    <td>{{$korban->nama_korban}}</td>
                    <td>{{$korban->usia}}</td>
                    <td>{{$korban->jenis_kelamin}}</td>
                    <td>{{$korban->keterangan}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>





