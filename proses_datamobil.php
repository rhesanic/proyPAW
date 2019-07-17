<?php
	include "atas.php";
	

							$no = $_POST['no'];
							$nama = $_POST['nama'];
							$merk = $_POST['merk'];
							$stok = $_POST['stok'];
							$harga = $_POST['harga'];
							
							$foto = $_FILES['foto']['name'];
							$tmpName = $_FILES['foto']['tmp_name'];
							$type = $_FILES['foto']['type'];
							$size = $_FILES['foto']['size'];
							
							$maxsize = 1500000;
							$typeYgBoleh = array("image/jpeg","image/png","image/pjpeg");
							
							$dirfoto = "pict";
							if(!is_dir($dirfoto))
								mkdir($dirfoto);
							$fileTujuanfoto = $dirfoto."/".$foto;
							
							$dirThumb = "thumb";
							if(!is_dir($dirThumb))
								mkdir($dirThumb);
							$fileTujuanThumb = $dirThumb."/t_".$foto;
							
								$datfotolid = "Ya";
							if($size>0){
								if($size>$maxsize){
									echo "Ukuran file terlalu besar</br>";
									$validData= "Tidak";
								}
								if(!in_array($type, $typeYgBoleh)){
									echo "Type file tidak dikenal</br>";
									$validData= "Tidak";
								}
							}
							
						include "koneksi.php";
								$sql = "INSERT INTO mobil
										(no_mobil, nama_mobil, merk_mobil, stok, foto, harga)
										VALUES 
										('$no','$nama','$merk','$stok','$foto','$harga')";
							
							$hasil = mysqli_query($kon, $sql);
							if(!$hasil){
								echo "Gagal Tambah Mobil!</br>";
								echo mysqli_error($kon);
								echo "<form action='form_mobil.html'>
										<input type='submit' onClick='self.history.back()' value='Kembali' />
										</form>";
										}else {
								echo "Berhasil Tambah Mobil!</br>";
								}
								
							if ($size>0){
									if(!move_uploaded_file($tmpName, $fileTujuanfoto)){
										echo "Gagal upload gambar</br>";
										echo "<a href='form_mobil.php'>Tambah mobil</a>";
										exit;
									}else{
										buat_thumbnail($fileTujuanfoto, $fileTujuanThumb);
									}
								}
								
								echo "File sudah diupload.</br>";
								echo "<a href='form_mobil.php'>Tambah mobil</a>";
								
								function buat_thumbnail($file_src, $file_dst){
									list ($w_src, $h_src, $type) = getImageSize($file_src);
									
									switch ($type){
										case 1:
										$img_src = imagecreatefromgif($file_src);
										break;
										case 2:
										$img_src = imagecreatefromjpeg($file_src);
										break;
										case 3:
										$img_src = imagecreatefrompng($file_src);
										break;
									}
									
									$thumb = 100;
									if ($w_src > $h_src){
										$w_dst = $thumb;
										$h_dst = round($thumb/$w_src*$h_src);
									}else{
										$w_dst = round($thumb/$h_src*$w_src);
										$h_dst = $thumb;
									}
									
									$img_dst = imagecreatetruecolor($w_dst, $h_dst);
									
									imagecopyresampled($img_dst,$img_src,0,0,0,0,$w_dst, $h_dst,$w_src,$h_src);
									imagejpeg($img_dst, $file_dst);
									imagedestroy($img_src);
									imagedestroy($img_dst);
								}								
	
	include "bawah.php";
?>