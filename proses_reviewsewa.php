<?php
	include "atas.php";
	
							$nama = $_POST['nama'];
							$merk = $_POST['merk'];
							$harga = $_POST['harga'];
							$no_ktp = $_POST['no_ktp'];
							$no_telp = $_POST['no_telp'];
							$alamat = $_POST['alamat'];
							$tgl_pinjam = $_POST['tgl_pinjam'];
							$durasi = $_POST['durasi'];
							
							$hartotal = $harga * $durasi;
	
?>
<center><h1>Review Sewa</h1></center>
	<table class="table" >
	<tbody>
	<tr>
	<td>Nama Pengguna</td>
	<td><?php echo $pengguna; ?></td>
	</tr>
	<tr>
	<td>Nama Mobil</td>
	<td><?php echo $nama ;?></td>
	</tr>
	<tr>
	<td>Merk</td>
	<td><?php echo $merk ;?></td>
	</tr>
	<tr>
	<td>Harga Sewa</td>
	<td><?php echo $harga ;?></td>
	</tr>
	<tr>
	<td>Nomor KTP</td>
	<td><?php echo $no_ktp ;?></td>
	</tr>
	<tr>
	<td>Nomor Telepon</td>
	<td><?php echo $no_telp ;?></td>
	</tr>
	<tr>
	<td>Alamat</td>
	<td><?php echo $alamat ;?></td>
	</tr>
	<tr>
	<td>Tanggal Pinjam</td>
	<td><?php echo $tgl_pinjam ;?></td>
	</tr>
	<tr>
	<td>durasi</td>
	<td><?php echo $durasi ;?></td>
	</tr>
	<tr>
	<td>Harga Sewa Total</td>
	<td><?php echo $hartotal ;?></td>
	</tr>
	</tbody>   				  
</table>
<script type="text/javascript">
$(document).ready(function(){
		<?php
		include "koneksi.php";
								$sql = "INSERT INTO sewa
										(username,nama,merk,harga,no_ktp,no_telp,alamat,tgl_pinjam,durasi,hartotal,status)
										VALUES 
										('$pengguna','$nama','$merk','$harga','$no_ktp','$no_telp','$alamat','$tgl_pinjam','$durasi','$hartotal','sewa')";
							
							$hasil = mysqli_query($kon, $sql);
							if(!$hasil){
								echo "Gagal Sewa!</br>";
								echo mysqli_error($kon);
								echo "<form action='form_pinjam.html'>
										<input type='submit' onClick='self.history.back()' value='Kembali' />
										</form>";
										}else {
								echo "Berhasil sewa!</br>";
								}
		?>
})
</script>
<?php include_once ('bawah.php');?>