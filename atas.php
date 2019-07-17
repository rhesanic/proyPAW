<?php
@session_start();
	$pengguna = isset($_SESSION["username"]) ? $_SESSION["username"] : "";
	$aksesUsr = isset($_SESSION["aksesUsr"]) ? $_SESSION["aksesUsr"] : "";
	$akses="";
	if($aksesUsr=="admin"){
		$akses = "admin";
		}
	if($aksesUsr=="umum"){
		$akses = "umum";
		}
						if(!empty($pengguna)){
							$tampil_a = "display:none";
							$tampil_b = "";
						}else{
							$tampil_a = "";
							$tampil_b = "display:none";
							
						}
					
	?>
<html>
	<head>
		<title>Rental Mobil</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="bootstrap/js/moment-with-locales.js"></script>
        <script src="bootstrap/js/bootstrap-datetimepicker.js"></script>
		<script type="text/javascript" src="jquery.min.js"> </script>
		<style type ="text/css">
			.col-table {
			display: table-cell;
			float: none;
			height: 100%;}
			
		</style>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 bg-primary text-center">
				<h1	style="padding:50px; margin:auto;"> Rental Mobil </h1>
				</div>
			</div>
			<?php
				$tampil_c="display:none";
				if($akses=="admin"){
					$tampil_c = "";
					}
				$tampil_d="display:none";
				if($akses=="umum"){
					$tampil_d = "";
					}
			?>	
			<div class="row ">
				<div class="col-sm-1 bg-success col-table"> 
					<h3>  Menu :</h3></hr>
					<p><a href="index.php">  Home</a></P>
					<P><a style="<?php echo $tampil_a?>" 
						  href="form_dfakun.php">Daftar</a></P>
					<P><a style="<?php echo $tampil_a?>" 
						  href="form_login.php">Login</a></P>
					<p><a style="<?php echo $tampil_c?>"
						  href="form_dfakunadm.php">  Tambah Admin</a></P>
					<p><a style="<?php echo $tampil_c?>"
						  href="form_mobil.php">  Tambah Mobil</a></P>
					<p><a style="<?php echo $tampil_c?>"
						  href="mobil_tampil.php">  List Mobil </a></P>
					<p><a style="<?php echo $tampil_d?>"
						  href="mobil_pilih.php">  List Mobil </a></P>
					<p><a style="<?php echo $tampil_d?>"
						  href="tampil_sewa.php">  Sewa </a></P>
					<p><a style="<?php echo $tampil_c?>"
						  href="tampil_sewaadm.php">  Sewa </a></P>
					<P><a style="<?php echo $tampil_b?>" 
						  href="proses_logout.php">Logout</a></P>
					<p></br></P>
					<p></br></P>
					<p></br></P>
					<P style="<?php echo $tampil_b?>">
					Login Dengan Akun</br><b><?php echo $pengguna?></b>	(<b><?php echo $akses?></b>)</P>
					
				</div>
				<div class="col-sm-3 bg-light col-table">