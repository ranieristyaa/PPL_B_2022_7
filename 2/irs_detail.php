<?php

include "../koneksi.php";

$NIM	= $_GET["NIM"];
$querymhs = mysqli_query($konek, "SELECT semester_aktif FROM mahasiswa WHERE NIM='$NIM'");
$user = mysqli_fetch_array ($querymhs);
$semeter=$user["semester_aktif"];
$querymhs = mysqli_query($konek, "SELECT * FROM irs WHERE NIM='$NIM' and semester='$semeter'");
if($querymhs == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}

$mhs = mysqli_fetch_array($querymhs)

?>

<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title ">Detail IRS Mahasiswa</h4>
					</div>
					<div class="modal-body">
					<?php
                        if(!isset($mhs)) {
                            echo "<h4 style='color:red;'>Belum Diisikan</h4>
                            <script type='text/javascript'>
                            var form = document.getElementById('irs');
                            form.style.display = 'none';
                            </script>";
                        }
                        
                        ?>
						<form action="mhs_pkl_edit.php" id="irs" name="modal_popup" enctype="multipart/form-data" method="post">
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

