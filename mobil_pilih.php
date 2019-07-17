<?php include_once ('atas.php');?>
<?php
	$nama ="";
	if(isset($_POST["nama"]))
		$nama = $_POST["nama"];
	
	include "koneksi.php";
	$sql = "select * from mobil
			where nama_mobil like '%".$nama."%' 
			order by no_mobil desc";
	$hasil = mysqli_query($kon, $sql);
	if(!$hasil) 
		die ("gagal query".mysqli_error($kon));
?>
<table class="table table-hover" >
	<thead>
	<tr>
	<th>Foto</th>
	<th>Merk mobil</th>
	<th>Nama Mobil</th>
	<th>Harga Sewa/Hari</th>
	<th>Stok</th>
	<th>Operasi</th>
	</tr>
	</thead>
	<tbody>
	<?php
	$no = 0;
	while ($row = mysqli_fetch_assoc($hasil)){
		echo "<tr>";
		echo "<td><a href='pict/{$row['foto']}'/>
			  <img src='thumb/t_{$row['foto']}'witdh ='100'/>
			  </a></td>";
		echo "<td>".$row['merk_mobil']."</td>";
		echo "<td>".$row['nama_mobil']."</td>";
		echo "<td>".$row['harga']."</td>";
		echo "<td>".$row['stok']."</td>";
		echo "<td>";
		echo "<a href='form_pinjam.php?no_mobil=".$row['no_mobil']."'/>Sewa</a>";
		echo "</td>";
		echo "</tr>";
	}
	?>
	</tbody>
</table>
<?php include_once ('bawah.php');?>