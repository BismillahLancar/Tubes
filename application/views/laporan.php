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
            <th>Username</th>
            <th>Password</th>
        </tr>
        <?php $number = 1; foreach($laporan as $row) { ?>
        <tr align=center>    
        <td>
              <?php echo $number++ ?>
            </td>
            <td>
              <?php echo $row->nama ?>
            </td>
            <td>
              <?php echo $row->username ?>
            </td>
            <td>
              <?php echo $row->password ?>
            </td>
        </tr>
        <?php } ?>
    </table>    
</body>
</html>