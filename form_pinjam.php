<?php include_once ('atas.php');
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
?>
	<h2 align="center">ISI DATA MOBIL</h2>
			  <form class="form-horizontal" enctype="multipart/form-data" action="proses_reviewsewa.php" method="post">
				<div class="form-group">
				  <label class="control-label col-sm-2" for="nama">Nama Mobil:</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="nama" 
					value="<?php echo $nama_mobil;?>" readonly name="nama">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="Merk">Merk:</label>
				  <div  class="col-sm-10">
					<input type="text" class="form-control" id="merk" 
					value="<?php echo $merk_mobil;?>" readonly name="merk">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="harga">Harga Sewa/hari:</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="harga" 
					value="<?php echo $harga;?>" readonly name="harga">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="no_ktp">Nomor KTP:</label>
				  <div class="col-sm-10">
					<input type="number" class="form-control" id="no_ktp" placeholder="masukkan nomor ktp" name="no_ktp">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="no_telp">Nomor Telepon:</label>
				  <div class="col-sm-10">          
					<input type="number" class="form-control" id="no_telp" placeholder="masukkan nomor telepon" name="no_telp">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="alamat">Alamat:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="alamat" placeholder="masukkan alamat" name="alamat">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="tgl_pinjam">Tanggal pinjam:</label>
				  <div class="col-sm-10">          
					<input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="durasi">Durasi Sewa(hari):</label>
				  <div class="col-sm-10">          
					<input type="number" class="form-control" id="durasi" placeholder="masukkan lama sewa" name="durasi">
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Simpan</button>
				  </div>
				</div>
			 </form>

<?php include_once ('bawah.php');?>