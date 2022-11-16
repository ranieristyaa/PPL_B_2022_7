<?php

include "../koneksi.php";

$NIM	= $_GET["NIM"];

$querymhs = mysqli_query($konek, "SELECT * FROM mahasiswa WHERE NIM='$NIM'");
if($querymhs == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($mhs = mysqli_fetch_array($querymhs)){

?>
	

<!-- Modal Popup Dosen -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Data Mahasiswa</h4>
					</div>
					<div class="modal-body">
						<form action="mhs_pkl_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
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
								<label>Nama</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="nama" type="text" class="form-control"  value="<?php echo $mhs["Nama_Mahasiswa"]; ?>" readonly/>
									</div>
							</div>
							<div class="form-group">
								<label>Tanggal Lahir</label>
									<div class="input-group addon">
										<div class="input-group-addon">
											<i class="fa fa-pencil"></i>
										</div>
										<input id="tgl" name="tgl" type="date" class="form-control" placeholder="tgl" value="<?php echo $mhs["Tanggal_Lahir"]; ?>" readonly>
									</div>
							</div>
							<div class="form-group">
								<label>Jenis Kelamin</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="jk" type="text" class="form-control"  value="<?php echo $mhs["JK"]; ?>" readonly/>
									</div>
							</div>
							<div class="form-group">
								<label>Alamat</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="alamat" type="text" class="form-control"  value="<?php echo $mhs["Alamat"]; ?>" readonly/>
									</div>
							</div>
							<div class="form-group">
								<label>No Telp</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="telp" type="text" class="form-control"  value="<?php echo $mhs["No_Telp"]; ?>" readonly/>
									</div>
							</div>
							<div class="form-group">
								<label>Email</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="telp" type="text" class="form-control"  value="<?php echo $mhs["email"]; ?>" readonly/>
									</div>
							</div>
							<div class="form-group">
								<label>Jalur Masuk</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="telp" type="text" class="form-control"  value="<?php echo $mhs["jalur_masuk"]; ?>" readonly/>
									</div>
							</div>
							<div class="form-group">
								<label>Angkatan</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="telp" type="text" class="form-control"  value="<?php echo $mhs["angkatan"]; ?>" readonly/>
									</div>
							</div>
							<div class="form-group">
								<label>Semester Aktif</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="telp" type="text" class="form-control"  value="<?php echo $mhs["semester_aktif"]; ?>" readonly/>
									</div>
							</div>
							
						</form>
					</div>
				</div>
			</div>
			
			
<?php
			}

?>