<?php

session_start();
include "../koneksi.php";
$NIM = $_SESSION["NIM"];

?>
<label>Semester 7</label>
<br>
<button class="btn" type="button" data-target="#ModalIRS" data-toggle="modal">IRS</button>
<button class="btn" type="button" data-target="#ModalKHS" data-toggle="modal">KHS</button>
<button class="btn" type="button"  data-target="#ModalPKL" data-toggle="modal">PKL</button>
<button class="btn" type="button"  data-target="#ModalSkripsi" data-toggle="modal">Skripsi</button>


<div id="ModalIRS" class="modal fade" tabindex="-1" role="dialog">
    <?php
    $querymhs = mysqli_query($konek, "SELECT * FROM irs WHERE NIM='$NIM' and semester='7'");
    if($querymhs == false){
        die ("Terjadi Kesalahan : ". mysqli_error($konek));
    }
    
    $mhs = mysqli_fetch_array($querymhs)
    ?>
        <div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header ">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title ">Detail IRS Mahasiswa Semester 7</h4>
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
						<form action="" id="irs" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>Semester</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="semester" type="number" class="form-control"  value="7" readonly/>
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
										<input id="status" name="status" type="text" class="form-control"  value="<?php if(isset($mhs["status_konfirmasi"])) echo $mhs["status_konfirmasi"]; ?>" readonly>
									</div>
							</div>
              				
				
							
						</form>
					</div>
				</div>
			</div>
</div>

<div id="ModalKHS" class="modal fade" tabindex="-1" role="dialog">
    <?php
    $querymhs = mysqli_query($konek, "SELECT * FROM khs WHERE NIM='$NIM' and semester='7'");
    if($querymhs == false){
        die ("Terjadi Kesalahan : ". mysqli_error($konek));
    }
    
    $mhs = mysqli_fetch_array($querymhs)
    ?>
        <div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header ">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title ">Detail KHS Mahasiswa Semester 7</h4>
					</div>
					<div class="modal-body">
                        <?php
                        if(!isset($mhs)) {
                            echo "<h4 style='color:red;'>Belum Diisikan</h4>
                            <script type='text/javascript'>
                            var form = document.getElementById('khs');
                            form.style.display = 'none';
                            </script>";
                        }
                        
                        ?>
						<form action="" id="khs" name="modal_popup" enctype="multipart/form-data" method="post">
                        <div class="form-group">
								<label>Semester</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="semester" type="number" class="form-control"  value="7" readonly/>
									</div>
							</div>
							<div class="form-group">
								<label>SKS semester</label>
									<div class="input-group addon">
										<div class="input-group-addon">
											<i class="fa fa-pencil"></i>
										</div>
										<input id="sks" name="sks" type="number" class="form-control"  value="<?php echo $mhs["sks"]; ?>" readonly>
									</div>
							</div>
                            <div class="form-group">
								<label>SKS Kumulatif</label>
									<div class="input-group addon">
										<div class="input-group-addon">
											<i class="fa fa-pencil"></i>
										</div>
										<input id="sks" name="sks" type="number" class="form-control"  value="<?php echo $mhs["sksk"]; ?>" readonly>
									</div>
							</div>
                            <div class="form-group">
								<label>IP semester</label>
									<div class="input-group addon">
										<div class="input-group-addon">
											<i class="fa fa-pencil"></i>
										</div>
										<input id="sks" name="sks" type="number" class="form-control"  value="<?php echo $mhs["ips"]; ?>" readonly>
									</div>
							</div>
                            <div class="form-group">
								<label>IP Kumulatif</label>
									<div class="input-group addon">
										<div class="input-group-addon">
											<i class="fa fa-pencil"></i>
										</div>
										<input id="sks" name="sks" type="number" class="form-control"  value="<?php echo $mhs["ipk"]; ?>" readonly>
									</div>
							</div>
              				
				
							
						</form>
					</div>
				</div>
			</div>
</div>

<div id="ModalPKL" class="modal fade" tabindex="-1" role="dialog">
    <?php
    $querymhs = mysqli_query($konek, "SELECT * FROM pkl WHERE NIM='$NIM'");
    if($querymhs == false){
        die ("Terjadi Kesalahan : ". mysqli_error($konek));
    }
    
    $mhs = mysqli_fetch_array($querymhs)
    ?>
        <div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header ">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title ">Detail PKL Mahasiswa</h4>
					</div>
					<div class="modal-body">
                        <?php
                        if($mhs["status"]=='belum') {
                            echo "<h4 style='color:red;'>Belum PKL</h4>
                            <script type='text/javascript'>
                            var form = document.getElementById('pkl');
                            form.style.display = 'none';
                            </script>";
                        }
                        
                        ?>
						<form action="" id="pkl" name="modal_popup" enctype="multipart/form-data" method="post">
                        <div class="form-group">
								<label>Status</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="semester" type="text" class="form-control"  value="<?php echo $mhs["status"]; ?>" readonly/>
									</div>
							</div>
							<div class="form-group">
								<label>Nilai</label>
									<div class="input-group addon">
										<div class="input-group-addon">
											<i class="fa fa-pencil"></i>
										</div>
										<input id="sks" name="sks" type="text" class="form-control"  value="<?php echo $mhs["nilai"]; ?>" readonly>
									</div>
							</div>
                            
              				
				
							
						</form>
					</div>
				</div>
			</div>
</div>

<div id="ModalSkripsi" class="modal fade" tabindex="-1" role="dialog">
    <?php
    $querymhs = mysqli_query($konek, "SELECT * FROM skripsi WHERE NIM='$NIM'");
    if($querymhs == false){
        die ("Terjadi Kesalahan : ". mysqli_error($konek));
    }
    
    $mhs = mysqli_fetch_array($querymhs)
    ?>
        <div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header ">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title ">Detail Skripsi Mahasiswa</h4>
					</div>
					<div class="modal-body">
                        <?php
                        if($mhs["status"]=='belum' || $mhs["lama_studi"]!='7') {
                            echo "<h4 style='color:red;'>Belum Skripsi</h4>
                            <script type='text/javascript'>
                            var form = document.getElementById('skripsi');
                            form.style.display = 'none';
                            </script>";
                        }
                        
                        ?>
						<form action="" id="skripsi" name="modal_popup" enctype="multipart/form-data" method="post">
                        <div class="form-group">
								<label>Status</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="semester" type="text" class="form-control"  value="<?php echo $mhs["status"]; ?>" readonly/>
									</div>
							</div>
                            <div class="form-group">
								<label>Tanggal Sidang</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="semester" type="text" class="form-control"  value="<?php echo $mhs["tgl_sidang"]; ?>" readonly/>
									</div>
							</div>
                            
							<div class="form-group">
								<label>Nilai</label>
									<div class="input-group addon">
										<div class="input-group-addon">
											<i class="fa fa-pencil"></i>
										</div>
										<input id="sks" name="sks" type="text" class="form-control"  value="<?php echo $mhs["nilai"]; ?>" readonly>
									</div>
							</div>
                            <div class="form-group">
								<label>Lama Studi</label>
									<div class="input-group addon">
										<div class="input-group-addon">
											<i class="fa fa-pencil"></i>
										</div>
										<input id="sks" name="sks" type="text" class="form-control"  value="<?php echo $mhs["lama_studi"]; ?>" readonly>
									</div>
							</div>
                            
              				
				
							
						</form>
					</div>
				</div>
			</div>
</div>