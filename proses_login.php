<?php
@session_start();
	$username	= $_POST['user'];
	$kata_kunci	= md5($_POST['password']);
	
	$dataValid = "Ya";
	if(strlen(trim($username))==0){
		echo "User harus diisi!</br>";
		$dataValid = "Tidak";}
		
	if(strlen(trim($kata_kunci))==0){
		echo "Password harus diisi!</br>";
		$dataValid = "Tidak";}
	
	if($dataValid=="Tidak"){
		echo "masih ada kesalahan, silahkan perbaiki!</br>";
		echo "<input type='button' value='kembali'
		onClick='self.history.back()'>";
		exit;}
	
	
	include "koneksi.php";
	$sql = "select * from user where
			username='".$username."' and password='".$kata_kunci."'";
	$hasil = mysqli_query($kon, $sql) or die ('Gagal akses!</br>');
	$jumlah = mysqli_num_rows($hasil);
	if($jumlah > 0){
		$row = mysqli_fetch_assoc($hasil);
		$_SESSION["username"] = $row['username'];
		$_SESSION["aksesUsr"] = $row['aksesUsr'];
		header ("Location: index.php");
	}else{
		include "atas.php";
		echo "User atau Password salah!</br>";
		echo "<input type='button' value='kembali'
		onClick='self.history.back()'>";
		include "bawah.php";	
		}
	
?>