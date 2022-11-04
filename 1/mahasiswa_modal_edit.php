<?php

include "../koneksi.php";

$NIM	= $_GET["NIM"];

$querymhs = mysqli_query($konek, "SELECT * FROM mahasiswa WHERE NIM='$NIM'");
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
						<h4 class="modal-title">Edit Mahasiswa</h4>
					</div>
					<div class="modal-body">
						<form action="mahasiswa_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>NIM</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="NIM" type="text" class="form-control" value="<?php echo $mhs["NIM"]; ?>" readonly />
									</div>
							</div>
							<div class="form-group">
								<label>Mahasiswa</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="Nama_Mahasiswa" type="text" class="form-control" value="<?php echo $mhs["Nama_Mahasiswa"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Tanggal Lahir</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input id="Tanggal_Lahir2" name="Tanggal_Lahir" type="text" class="form-control" value="<?php echo $mhs["Tanggal_Lahir"]; ?>">
									</div>
							</div>
							<div class="form-group">
								<label>Jenis Kelamin</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user-o"></i>
										</div>
										<select name="JK" class="form-control">
											<option value="<?php echo $mhs["JK"]; ?>" selected>
											<?php
												if ($mhs["JK"]=="L"){
													echo "Laki - laki";
												}
												else{
													echo "Perempuan";
												}
											?>
											</option>
											<?php
												if ($mhs["JK"]=="L"){
													echo "<option value='P'>Perempuan</option>";
												}
												else{
													echo "<option value='L'>Laki - laki</option>";
												}
											?>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>Angkatan</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-phone"></i>
										</div>
										<input name="angkatan" type="text" class="form-control" placeholder="Angkatan" value="<?php echo $mhs["angkatan"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>NIP Dosen Wali</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-flag"></i>
										</div>
										<select name="NIP" class="form-control">
											<option value="" disabled selected>Pilih NIP Dosen</option>
											<?php
												$querydosen = mysqli_query($konek, "SELECT * FROM dosen");
												if($querydosen == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));
												}
												while($dosen = mysqli_fetch_array($querydosen)){
													if($dosen["NIP"] != $_SESSION["Username"]){
														echo "<option value='$dosen[NIP]'>$dosen[NIP]</option>";
													}
												}
											?>
										</select>
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