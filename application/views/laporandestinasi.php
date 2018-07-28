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
          <th>Tujuan</th>
          <th>Keberangkatan</th>
          <th>Jam Berangkat</th>
          <th>Tarif</th>
          <th>Stok Tiket</th>
        </tr>
        <?php $number = 1; foreach($laporan as $row) { ?>
        <tr align=center>    
            <td>
              <?php echo $number++ ?>
            </td>
            <td>
              <?php echo $row->tujuan ?>
            </td>
            <td>
              <?php echo $row->tanggal ?>
            </td>
            <td>
              <?php echo $row->jam_berangkat ?>
            </td>
            <td>
              <?php echo $row->harga ?>
            </td>
            <td>
              <?php echo $row->stok ?>
            </td>
        </tr>
        <?php } ?>
    </table>    
</body>
</html>