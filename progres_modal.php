<?php

include "../koneksi.php";

$semester	= $_GET["semester"];
$querymhs = mysqli_query($konek, "SELECT NIM FROM mahasiswa WHERE semester_aktif='$semester'");
$user = mysqli_fetch_array ($querymhs);
$NIM=$user["NIM"];
$querymhs = mysqli_query($konek, "SELECT * FROM irs WHERE NIM='$NIM' and semester='$semeter'");
if($querymhs == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}

while($mhs = mysqli_fetch_array($querymhs)){

?>

<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header bg-primary">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title ">Detail IRS Mahasiswa</h4>
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
								<label>Semester Aktif</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="semester" type="number" class="form-control"  value="<?php echo $mhs["semester"]; ?>" readonly/>
									</div>
							</div>
							<div class="form-group">
								<label>Jumlah SKS</label>
									<div class="input-group addon">
										<div class="input-group-addon">
											<i class="fa fa-pencil"></i>
										</div>
										<input id="sks" name="sks" type="number" class="form-control"  value="<?php echo $mhs["sks"]; ?>" readonly>
									</div>
							</div>
                            <div class="form-group">
								<label>Status Verifikasi</label>
									<div class="input-group addon">
										<div class="input-group-addon">
											<i class="fa fa-pencil"></i>
										</div>
										<input id="status" name="status" type="text" class="form-control"  value="<?php echo $mhs["status_konfirmasi"]; ?>" readonly>
									</div>
							</div>
              				<div class="form-group">
								<label>Scan IRS</label>
									<div class="input-group addon">
										
                                        <span><a href="../aset/irs/<?php echo $mhs["scan"];?>"> Download File</a></span>
									</div>
							</div>
				
							
						</form>
					</div>
				</div>
			</div>

<?php
			}

?>