<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Laporan</title>
</head>
    <style>
        table{
            border-collapse:collapse;
        }
        table, th, td{
            border: 1px solid black;
        }
    </style>
<body>
<center><h1><?php echo "Laporan $title" ?></h1></center>
    <table align=center>
        <tr align=center>    
            <th>No</th>
            <th>Nama</th>
            <th>No Telp</th>
            <th>Jenis Pesawat</th>
            <th>Asal - Tujuan</th>
            <th>Berangkat</th>
            <th>Total Harga</th>
            <th>Pesan</th>
        </tr>
        <?php $number = 1; foreach($laporan as $row) { ?>
        <tr align=center>    
        <td><?php echo $number++ ?></td>
              <td><?php echo $row->nama ?></td>
              <td><?php echo $row->telepon ?></td>
              <td><?php echo $row->pesawat ?></td>
              <td><?php echo $row->tujuan ?></td>
              <td><?php echo $row->tanggal ?></td>
              <td><?php echo $row->total ?></td>
              <td><?php echo $row->messege ?></td>
        </tr>
        <?php } ?>
    </table>    
</body>
</html>