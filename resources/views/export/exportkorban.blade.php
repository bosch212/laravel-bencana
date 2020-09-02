
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
      <h1 style="text-align:center;">DATA KORBAN</h1>
      <table >
      <thead class="thead-dark">
         <tr>
      <th scope="col">Jenis Bencana</th>
      <th scope="col">Wilayah</th>
      <th scope="col">Meninggal</th>
      <th scope="col">Luka-Luka</th>
      <th scope="col">Kehilangan</th>
         </tr>
         <tbody>
    @foreach($korban as $korban)
    <tr>
        <td>{{$korban->jenis_bencana->nama_bencana}}</td>
        <td>{{$korban->wilayah}}</td>
        <td>{{$korban->meninggal}}</td>
        <td>{{$korban->luka_luka}}</td>
        <td>{{$korban->kehilangan}}</td>
    </tr>
    @endforeach
  </tbody>
       </thead>
      </table>
   </body>
</html>








