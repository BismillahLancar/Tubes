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
<h1><?php echo "Laporan $title" ?></h1>
    <table>
        <tr>    
            <th>No.</th>
            <th>Kolom1</th>
            <th>Kolom2</th>
        </tr>
        <?php $number=1; foreach($data as $row){ ?>
        <tr>    
            <th><?php echo $number++ ?></th>
            <th><?php echo $row['kolom1']?></th>
            <th><?php echo $row['kolom2']?></th>
        </tr>
        <?php } ?>
    </table>    
</body>
</html>