<?php include_once ('atas.php');?>
<?php
	$no_mobil = $_GET['no_mobil'];
	include "koneksi.php";
	$sql = "select * from mobil where no_mobil ='$no_mobil'";
	$hasil = mysqli_query($kon, $sql);
	if (!$hasil) die ("gagal koneksi");
	
	$data = mysqli_fetch_assoc($hasil);
	$nama_mobil = $data["nama_mobil"];
	$merk_mobil= $data["merk_mobil"];
	$stok = $data["stok"];
	$foto = $data["foto"];
	$harga = $data["harga"];
	
	echo "<h2>Konfirmasi Hapus</h2>";
	echo "Nama Mobil : ".$nama_mobil."<br/>";
	echo "Merk Mobil : ".$merk_mobil."<br/>";
	echo "Stok : ".$stok."<br/>";
	echo "Harga Mobil : ".$harga."<br/>";
	echo "Foto : <img src='thumb/t_".$foto."'/><br/><br/>";
	echo "APAKAH DATA INI AKAN DIHAPUS?<br/>";
	echo "<a href='mobil_hapus.php?no_mobil=$no_mobil&hapus=1'>YA</a>";
	echo"&nbsp; &nbsp;";
	echo "<a href='mobil_tampil.php'>TIDAK</a><br/><br/>";
	
	if(isset($_GET['hapus'])){
		$sql = "delete from mobil where no_mobil ='$no_mobil'";
		$hasil = mysqli_query($kon, $sql);
		if(!$hasil){
			echo "Gagal hapus : $nama_mobil<br/>";
			echo "<a href='mobil_tampil.php'>Kembali ke Daftar</a>";
		}else{
			$gbr = "pict/$foto";
			if(file_exists($gbr)) unlink($gbr);
			$gbr = "thumb/t_$foto";
			if(file_exists($gbr)) unlink($gbr);
			header('location:mobil_tampil.php');
		}
	}
?>
<?php include_once ('bawah.php');?>