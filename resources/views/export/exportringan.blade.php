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
    <div style="text-align: center;">Laporan Data Kerusakan Kategori Berat</div>
    <div style="text-align: center;">Tanggal : {{ date('d-m-Y h:i') }}</div>
    <hr>

    <table>
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kerusakan</th>
                <th> Keterangan Kerusakan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($detail_kerusakan as $kerusakan)
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
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>





