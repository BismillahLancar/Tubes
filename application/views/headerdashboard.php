<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="FaberNainggolan">
	<title>CodeIgniter dengan Bootstrap</title>


	<link href="<?=base_url()?>assets/css/bootstrap.min.css"  rel="stylesheet">
	<link href="<?=base_url()?>assets/css/style.css"  rel="stylesheet">
	<!---datatable-->
	<link href="<?=base_url()?>assets/DataTables/datatables.min.css">
	
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-control="navbar">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">AIR ASIA</a>
</div>
<div id="navbar" class="navbar-collapse collapse">
	<ul class="nav navbar-nav">
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Data Pegawai
			<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="<?=base_url()?>index.php/pegawai"><i class="glyphicon glyphicon-book"></i> List Pegawai</a></li>
				<li><a href="<?=base_url()?>index.php/pegawai/create"><i class="glyphicon glyphicon-user"></i> Tambah Pegawai</a></li>
				<li><a href="#">Bootstrap</a></li> 
			</ul>
		</li>
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Data Pelanggan
			<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="<?=base_url()?>index.php/pelanggan"><i class="glyphicon glyphicon-book"></i>  List Pelanggan</a></li>
				<li><a href="#">CSS</a></li>
				<li><a href="#">Bootstrap</a></li> 
			</ul>
		</li>
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Data Transaksi
			<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="<?=base_url()?>index.php/pegawai/create"><i class="glyphicon glyphicon-user"></i>  Tambah Pegawai</a></li>
				<li><a href="#">CSS</a></li>
				<li><a href="#">Bootstrap</a></li> 
			</ul>
		</li>
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Data Maskapai
			<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="<?=base_url()?>index.php/Penerbangan"><i class="glyphicon glyphicon-book"></i>  List Penerbangan</a></li>
				<li><a href="<?=base_url()?>index.php/Penerbangan/Create"><i class="glyphicon glyphicon-user"></i>  Tambah Penerbangan</a></li>
				<li><a href="#">CSS</a></li>
				<li><a href="#">Bootstrap</a></li> 
			</ul>
		</li>
		<li><a href="<?=base_url()?>/index.php/Cetak"><i class="glyphicon glyphicon-print"></i>Cetak</a></li>
	</ul>
	<ul class="nav navbar-nav navbar-right">
    <li><a href="<?=base_url()?>/index.php/Login"><i class="glyphicon glyphicon-user"></i>Login Admin</a></li>
    <li><a href="<?=base_url()?>/index.php/Login/logout"><i class="glyphicon glyphicon-globe"></i> Logout</a></li>
  </ul>
	
</div>
	
</div>
	
</nav>
</body>
</html>