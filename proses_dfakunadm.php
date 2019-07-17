<?php
	include "atas.php";
	

							
							$namaLeng = $_POST['nama'];
							$username = $_POST['username'];
							$password = md5($_POST['password']);
							
						include "koneksi.php";
								$sql = "INSERT INTO user
										(username,password,namaLeng,aksesUsr)
										VALUES 
										('$username','$password','$namaLeng','admin')";
							
							$hasil = mysqli_query($kon, $sql);
							if(!$hasil){
								echo "Gagal Tambah Mobil!</br>";
								echo mysqli_error($kon);
								echo "<form action='form_dfakun.html'>
										<input type='submit' onClick='self.history.back()' value='Kembali' />
										</form>";
										}else {
								echo "Berhasil Tambah Mobil!</br>";
								}
														
	
	include "bawah.php";
?>