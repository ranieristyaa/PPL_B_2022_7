<?php

include "../koneksi.php";

$NIM	= $_GET["nim"];

$querymhs = mysqli_query($konek, "SELECT * FROM skripsi WHERE NIM='$NIM'");
if($querymhs == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($mhs = mysqli_fetch_array($querymhs)){

?>
	
	<script src="../aset/plugins/daterangepicker/moment.min.js"></script>
	<script src="../aset/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- page script -->
    <script>
      $(function () {	
		// Daterange Picker
		  $('#Tanggal_Lahir2').daterangepicker({
			  singleDatePicker: true,
			  showDropdowns: true,
			  format: 'YYYY-MM-DD'
		  });
      });
    </script>
<!-- Modal Popup Dosen -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Mahasiswa Skripsi</h4>
					</div>
					<div class="modal-body">
						<form action="mhs_skripsi_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>NIM</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="nim" type="text" class="form-control" placeholder="Nomor Induk Mahasiswa"  value="<?php echo $mhs["NIM"]; ?>" readonly />
									</div>
							</div>
							<div class="form-group">
								<label>Status</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="status" class="form-control">
											<option value='' disabled selected>status</option>
											<option value='belum'>belum</option>
											<option value='on progress'>on progress</option>
											<option value='sudah'>sudah</option>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>Tanggal Sidang</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input name="tgl" type="date" class="form-control" placeholder="tanggal" value="<?php echo $mhs["tgl_sidang"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Nilai</label>
									<div class="input-group addon">
										<div class="input-group-addon">
											<i class="fa fa-pencil"></i>
										</div>
										<input id="nilai" name="nilai" type="text" class="form-control" placeholder="Nilai" value="<?php echo $mhs["nilai"]; ?>">
									</div>
							</div>
							<div class="form-group">
								<label>Lama Studi(semester)</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="lama" type="number" class="form-control" placeholder="lama" value="<?php echo $mhs["lama_studi"]; ?>"/>
									</div>
							</div>
              				<div class="form-group">
								<label>Scan Berita Acara</label>
									<div class="input-group addon">
										<div class="input-group-addon">
											<i class="fa fa-file"></i>
										</div>
										<input id="scan" name="scan" type="file" accept=".pdf" class="form-control" placeholder="Scan Berita Acara" >
									</div>
							</div>
							
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Save
								</button>
								<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Cancel
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			
<?php
			}

?>