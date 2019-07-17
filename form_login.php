<?php
	include "atas.php";
?>

					<h2 align="center">Silahkan Login!</h2>
					  <form class="form-horizontal" action="proses_login.php" method="post">
						<div class="form-group">
						  <label class="control-label col-sm-2" for="user">Nama User:</label>
						  <div class="col-sm-10">
							<input type="text" class="form-control" id="username" placeholder="Masukkan username" name="user">
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="password">Password:</label>
						  <div class="col-sm-10">
							<input type="Password" class="form-control" id="kata_kunci" placeholder="Masukkan password" name="password">
						  </div>
						</div>
						<div class="form-group">        
						  <div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default">Masuk</button>
						  </div>
						</div>
					 </form>
<?php
	include "bawah.php";
?>