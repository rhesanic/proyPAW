<?php
 error_reporting(E_ALL ^ E_DEPRECATED);
 $host = "localhost";
 $user = "root";
 $pass = "";
 $dbname = "renCar";
 
 $kon = mysqli_connect($host, $user, $pass);
 if(!$kon)
	 die("Gagal koneksi...");
 
 $hasil = mysqli_select_db($kon, $dbname);
 if(!$hasil){
	 $hasil = mysqli_query($kon,"create database $dbname");
	 if(!$hasil)
		 die("Gagal buat database");
	 else
		 $hasil = mysqli_select_db($kon, $dbname);
		 if(!$hasil)die("Gagal konek database");
	}
	
	$sqlTableUser = "CREATE TABLE if not exists user ( 
						id int AUTO_INCREMENT not null primary key, 
						username varchar(30) NOT NULL,
						password varchar(36) NOT NULL,
						namaLeng varchar(30) NOT NULL,
						aksesUsr varchar(10) NOT NULL)";
					
	mysqli_query($kon,"$sqlTableUser")or die("Gagal buat tabel User");
	
	$sqlTableMobil = "CREATE TABLE if not exists mobil ( 
						no_mobil varchar(30) not null primary key,
						nama_mobil varchar(30) NOT NULL,
						merk_mobil varchar(30) NOT NULL,
						stok varchar(30) NOT NULL,								
						foto varchar(30) NOT NULL,
						harga int(30) NOT NULL)";
						
	mysqli_query($kon,"$sqlTableMobil")or die("Gagal buat tabel Mobil");

	$sqlTableSewa = "CREATE TABLE if not exists sewa ( 
						username varchar(30) NOT NULL,
						nama varchar(30) NOT NULL,
						merk varchar(30) NOT NULL,
						harga int(30) NOT NULL,
						no_ktp int(30) NOT NULL,
						no_telp int(30) NOT NULL,
						alamat varchar(80) NOT NULL,
						tgl_pinjam varchar(10) NOT NULL,
						durasi int(30) NOT NULL,
						hartotal int(30) NOT NULL,
						status varchar(10) NOT NULL,
						PRIMARY KEY (username,tgl_pinjam)
						) ENGINE=MyISAM";
						
	mysqli_query($kon,"$sqlTableSewa")or die("Gagal buat tabel Sewa");
	
	$sql = "select * from user";
	$hasil = mysqli_query($kon, $sql);
	$jumlah = mysqli_num_rows($hasil);
	if($jumlah == 0){
		$sql = "insert into user (username, password, namaLeng, aksesUsr)
				values  ('admin',md5('admin'),'administrator','admin'),
						('rhesa',md5('rhesa'),'Rhesa Nico','umum')";
		mysqli_query($kon, $sql);
	}
?>