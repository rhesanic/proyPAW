<?php include_once ('atas.php');?>
<?php
	$nama ="";
	if(isset($_POST["nama"]))
		$nama = $_POST["nama"];
	
	include "koneksi.php";
	$sql = "select * from sewa
			where username='$pengguna'";
	$hasil = mysqli_query($kon, $sql);
	if(!$hasil) 
		die ("gagal query".mysqli_error($kon));
?>
<table class="table table-hover" >
	<thead>
	<tr>
	<th>Pengguna</th>
	<th>Merk mobil</th>
	<th>Nama Mobil</th>
	<th>Harga Sewa/Hari</th>
	<th>Lama Sewa</th>
	<th>Tanggal</th>
	<th>Harga total Sewa</th>
	<th>Status</th>
	</tr>
	</thead>
	<tbody>
	<?php
	$no = 0;
	while ($row = mysqli_fetch_assoc($hasil)){
		echo "<tr>";
		echo "<td>".$row['username']."</td>";
		echo "<td>".$row['merk']."</td>";
		echo "<td>".$row['nama']."</td>";
		echo "<td>".$row['harga']."</td>";
		echo "<td>".$row['durasi']."</td>";
		echo "<td>".$row['tgl_pinjam']."</td>";
		echo "<td>".$row['hartotal']."</td>";
		echo "<td>".$row['status']."</td>";
		echo "</tr>";
	}
	?>
	</tbody>
</table>
<?php include_once ('bawah.php');?>