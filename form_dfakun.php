<?php
	include "atas.php";
?>

					<h2 align="center">Daftar Akun</h2>
					  <form class="form-horizontal" enctype="multipart/form-data" action="proses_dfakun.php" method="post">
						<div class="form-group">
						  <label class="control-label col-sm-2" for="nama">Nama Lengkap:</label>
						  <div class="col-sm-10">
							<input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap" name="nama">
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="username">Username:</label>
						  <div class="col-sm-10">
							<input type="text" class="form-control" id="username" placeholder="Masukkan username" name="username">
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="password">Password:</label>
						  <div class="col-sm-10">
							<input type="password" class="form-control" id="password" placeholder="Masukkan password" name="password">
						  </div>
						</div>
						
						<div class="form-group">        
						  <div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default">Daftar</button>
						  </div>
						</div>
					 </form>
<?php
	include "bawah.php";
?>