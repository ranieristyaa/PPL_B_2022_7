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
	<link rel="shortcut icon" type="image/icon" href="">
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
			        <li class="active"><a href="user.php"><i class="fa fa-user"></i><span>Manajemen Akun</span></a></li>
			        <li><a href="mahasiswa.php"><i class="fa fa-users"></i><span>Data Mahasiswa</span></a></li>
			        <li><a href="mhs_pkl.php"><i class="fa fa-university"></i><span>Data Mahasiswa PKL</span></a></li>
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
            Manajemen Akun
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-user-circle-o"></i> Manajemen Akun</li>
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
				<a href="#"><button class="btn btn-success" type="button" data-target="#ModalAddDosen" data-toggle="modal"><i class="fa fa-plus"></i> Add Dosen</button></a>
				<a href="#"><button class="btn btn-success" type="button" data-target="#ModalAddMahasiswa" data-toggle="modal"><i class="fa fa-plus"></i> Add Mahasiswa</button></a>
                  <br></br>
				  <table id="data" class="table table-bordered table-striped table-scalable">
						<?php
							include "dt_user.php";
						?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
		
		<!-- Modal Popup Dosen -->
		<div id="ModalAddDosen" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Tambah User Dosen</h4>
						<br />
						<h6 class="modal-title">Username Dan Password = NIP Dosen</h6>
					</div>
					<div class="modal-body">
						<form action="user_add_dosen.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>Usergroup</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="Id_Usergroup_User" class="form-control">
											<option value=2>Dosen Wali</option>
											<option value=4>Departemen</option>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>NIP Dosen</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<div>
										<input id="NIP" name="NIP" type="text" class="form-control" placeholder="NIP" maxlength="18" required>
									</div>
									</div>
							</div>
							<div class="form-group">
								<label>Nama Dosen</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<div>
										<input id="nama" name="nama" type="text" class="form-control" placeholder="Nama Lengkap" required>
									</div>
									</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Create User
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
		
		<!-- Modal Popup Dosen -->
		<div id="ModalAddMahasiswa" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Tambah User Mahasiswa</h4>
						<br />
						<h6 class="modal-title">Username Dan Password = NIM Mahasiswa</h6>
					</div>
					<div class="modal-body">
						<form action="user_add_mahasiswa.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>Usergroup</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="Id_Usergroup_User" class="form-control">
											<option value=3 selected>Mahasiswa</option>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>NIM</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<div>
										<input id="NIM" name="NIM" type="text" class="form-control" placeholder="NIM" maxlength="14" required>
									</div>
									</div>
							</div>
							<div class="form-group">
								<label>Nama Mahasiswa</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<div>
										<input id="nama" name="nama" type="text" class="form-control" placeholder="Nama Lengkap" required>
									</div>
									</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Create User
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