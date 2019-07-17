<?php
	include "atas.php";
?>

					<h2 align="center">ISI DATA MOBIL</h2>
					  <form class="form-horizontal" enctype="multipart/form-data" action="proses_datamobil.php" method="post">
						<div class="form-group">
						  <label class="control-label col-sm-2" for="no">No Mobil:</label>
						  <div class="col-sm-10">
							<input type="text" class="form-control" id="no" placeholder="Masukkan No" name="no">
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="nama">Nama Mobil:</label>
						  <div class="col-sm-10">
							<input type="text" class="form-control" id="nama" placeholder="Masukkan Mobil" name="nama">
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="Merk">Merk :</label>
						  <div  class="col-sm-10">
							<select class="form-control" id="merk" name="merk">
							    <option >Pilih Merk</option>
							  <option value="Honda">Honda</option>
							  <option value="Daihatsu">Daihatsu</option>
							  <option value="Toyota">Toyota</option>
							  <option value="Suzuki">Suzuki</option>
							</select>
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="stok">Stok:</label>
						  <div class="col-sm-10">
							<input type="text" class="form-control" id="stok" placeholder="Masukkan Stok Mobil" name="stok">
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="foto">Foto :</label>
						  <div class="col-sm-10">
							<input type="file" id="foto" name="foto">
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="harga">Harga Mobil:</label>
						  <div class="col-sm-10">
							<input type="text" class="form-control" id="harga" placeholder="Masukkan Harga Mobil" name="harga">
						  </div>
						</div>
						
						<div class="form-group">        
						  <div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default">Simpan</button>
						  </div>
						</div>
					 </form>
<?php
	include "bawah.php";
?>