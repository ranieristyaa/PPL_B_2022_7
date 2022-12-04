<?php

session_start();
include "../koneksi.php";
include "auth_user.php";
?>
<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>UNDIP</title>
	<!-- Library CSS -->
	<?php
		include "bundle_css.php";
	?>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <?php
        include 'content_header.php';
       ?>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <p></p>
            </div>
          </div><!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
		  		<li class="header">
                <div class="card" style=" height: 280px; height: 120px; border:4px solid #FFFFFF;">
                  <p class="text-center" style="color:#FFFFFF; margin-top:16px;"><?php echo $_SESSION["nama_lengkap"];?></p>
                  <p class="text-center" style="color:#FFFFFF; margin:0px;">Admin</p>
                  <p class="text-center" style="color:#FFFFFF; margin:0px;">Informatika</p>
                  <p class="text-center" style="color:#FFFFFF; margin:0px;">Fakultas Sains dan Matematika</p>
                </div>
                <br>
              </li>
              <li ><a href="index.php"><i class="fa fa-home"></i><span>Home</span></a></li>
			        <li><a href="user.php"><i class="fa fa-user"></i><span>Manajemen Akun</span></a></li>
			        <li ><a href="mahasiswa.php"><i class="fa fa-users"></i><span>Data Mahasiswa</span></a></li>
			        <li class="active"><a href="mhs_pkl.php"><i class="fa fa-university"></i><span>Data Mahasiswa PKL</span></a></li>
			        <li><a href="mhs_skripsi.php"><i class="fa fa-graduation-cap"></i><span>Data Mahasiswa Skripsi</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Mahasiswa PKL
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-users"></i> Data Mahasiswa PKL</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">

                </div><!-- /.box-header -->
                <div class="box-body">
				<a href="#"><button class="btn btn-success" type="button" data-target="#ModalAdd" data-toggle="modal"><i class="fa fa-plus"></i> Add</button></a>
                  <br></br>
				  <table id="data" class="table table-bordered table-striped table-scalable">
						<?php
							include "dt_mhs_pkl.php";
						?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
		
		<!-- Modal Popup Dosen -->
		<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Tambah Mahasiswa</h4>
					</div>
					<div class="modal-body">
						<form action="mhs_pkl_add.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>NIM</label>
									<div class="input-group">
										<div class="input-group-addon">
										<i class="fa fa-id-card"></i>
										</div>
										<select name="nim" class="form-control" required>  
											<option value='' disabled selected>NIM</option>
											<?php
												$qmhs = mysqli_query($konek, "SELECT * FROM mahasiswa");
												if($qmhs == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));
												}
												while($mhs = mysqli_fetch_array($qmhs)){
													if($mhs["NIM"] != $_SESSION["Username"]){
														echo "<option value='$mhs[NIM]'>$mhs[NIM]</option>";
													}
												}
											?>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>Status</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="status" id="status" class="form-control" required>
										<option value='' disabled selected>Status PKL</option>
											<option value="belum">belum</option>
											<option value="on progress">on progress</option>
											<option value="sudah">sudah</option>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>Nilai</label>
									<div class="input-group addon">
										<div class="input-group-addon">
											<i class="fa fa-pencil"></i>
										</div>
										<select name="nilai" id="nilai" class="form-control" >
										<option value='' disabled selected>Nilai PKL</option>
											<option value="A">A</option>
											<option value="B">B</option>
											<option value="C">C</option>
											<option value="D">D</option>
											<option value="E">E</option>
											
										</select>
									</div>
							</div>
              <div class="form-group">
								<label>Scan Berita Acara</label>
									<div class="input-group addon">
										<div class="input-group-addon">
											<i class="fa fa-file"></i>
										</div>
										<input id="scan" name="scan" type="file" accept=".pdf" class="form-control" placeholder="Scan Berita Acara">
									</div>
							</div>
							
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Add
								</button>
								<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Cancel
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Modal Popup Dosen Edit -->
		<div id="ModalEditPKL" class="modal fade" tabindex="-1" role="dialog">
		</div>
		<!-- Modal Popup untuk delete--> 
		<div class="modal fade" id="modal_delete">
			<div class="modal-dialog">
				<div class="modal-content" style="margin-top:100px;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" style="text-align:center;">Are you sure to delete this data ?</h4>
					</div>    
					<div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
						<a href="#" class="btn btn-danger" id="delete_link">Delete</a>
						<button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>
		
    </div><!-- /.content-wrapper -->
    <?php
		include	"content_footer.php";
	?>
    </div><!-- ./wrapper -->
	<!-- Library Scripts -->
	<?php
		include "bundle_script.php";
	?>
  </body>
</html>
