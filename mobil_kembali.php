<?php include_once ('atas.php');
	$tgl_pinjam = $_GET['tgl_pinjam'];
	$username = $_GET['username'];
	include "koneksi.php";
	$sql = "UPDATE sewa SET status='selesai' WHERE username='$username' and tgl_pinjam='$tgl_pinjam'";
	$hasil = mysqli_query($kon, $sql);
		if(!$hasil){
			echo "Gagal hapus : $nama_mobil<br/>";
		}else{
			header('location:tampil_sewaadm.php');
		}
	
 include_once ('bawah.php');?>