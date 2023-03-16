<?php 

if ($_SESSION['level'] !== 'resepsionis') {
  return;
}

 ?>

            <div class="card card-dark">
	            <div class="card-header">
	               <h3 class="card-title">Form Pesan Kamar</h3>
	            </div>
              	<form action="../functions/pesan_kamar.php" method="post">
	                <div class="card-body">
	                  	<div class="row">
		                    <div class="col-sm-6">
		                      	<div class="form-group">
		                        	<label for="nama_pemesan">Nama Pemesan :</label>
		                        	<input type="text" id="nama_pemesan" name="nama_pemesan" class="form-control" placeholder="Nama Pemesan" required>
		                      	</div>
		                    </div>
		                    <div class="col-sm-6">
		                    	<div class="form-group">
		                        	<label for="email">Email :</label>
		                        	<input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
		                      	</div>
		                    </div>
	                    </div>
	                    <div class="row">
		                    <div class="col-sm-6">
		                      	<div class="form-group">
		                        	<label for="check_in">Check In :</label>
		                        	<input type="date" id="check_in" name="check_in" class="form-control" placeholder="Check In" required>
		                      	</div>
		                    </div>
		                    <div class="col-sm-6">
		                    	<div class="form-group">
		                        	<label for="check_out">Check Out :</label>
		                        	<input type="date" id="check_out" name="check_out" class="form-control" placeholder="Check Out" required>
		                      	</div>
		                    </div>
	                    </div>
	                    <div class="row">
		                    <div class="col-sm-6">
		                      	<div class="form-group">
		                        	<label for="jumlah_kamar">Jumlah Kamar :</label>
		                        	<input type="number" id="jumlah_kamar" name="jumlah_kamar" class="form-control" placeholder="Jumlah Kamar" required>
		                      	</div>
		                    </div>
		                    <div class="col-sm-6">
		                      	<div class="form-group">
		                        	<label for="no_hp">No Handphone :</label>
		                        	<input type="number" id="no_hp" name="no_hp" class="form-control" placeholder="No Handphone" required>
		                      	</div>
		                    </div>
	                    </div>
	                    <div class="row">
	                    	<div class="col-sm-12">
	                    		<div class="form-group">
		                    		<label for="nama_kamar">Tipe Kamar :</label>
	                                <select class="form-control" id="nama_kamar" name="nama_kamar" required>
	                                	<option value=""></option>
	                                    <?php 

	                                    include 'functions/koneksi.php';

	                                    $sql_kamar = mysqli_query($koneksi, "SELECT * from kamar");

	                                    while ($kamar = mysqli_fetch_array($sql_kamar)) :

	                                     ?>
	                                        <option value="<?= $kamar['nama_kamar']; ?>"><?= $kamar['nama_kamar']; ?> - Rp.<?= $kamar['harga_kamar']; ?>/Malam</option>
	                                    <?php endwhile ?>

	                                </select>
	                            </div>
                            </div>
                        </div>
	                    <div class="row">
	                    	<div class="col-sm-12">
		                    	<div class="form-group">
		                    		<label for="catatan">Catatan :</label>
		                    		<textarea name="catatan" id="catatan" rows="3" class="form-control" placeholder="Catatan"></textarea>
		                    	</div>
	                    	</div>
	                    </div>
	                </div>
	                <div class="card-footer">
	                	<div class="float-right">
	                		<button type="submit" name="rsp_pesankamar" class="btn btn-dark">Pesan Kamar</button>
	                	</div>
	                </div>
              	</form>
            </div>