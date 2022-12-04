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
	<script type="text/javascript" src="ajax.js"></script>
  <style>
    .btn{
      background-color: lightblue;
        }

    .btn:hover{
      background-color: lightgrey;
    }
    .btn:active{
      background-color: lightgrey;
    }
  </style>
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
                  <p class="text-center" style="color:#FFFFFF; margin:0px;">Departemen</p>
                  <p class="text-center" style="color:#FFFFFF; margin:0px;">Informatika</p>
                  <p class="text-center" style="color:#FFFFFF; margin:0px;">Fakultas Sains dan Matematika</p>
                </div>
                <br>
              </li>
              <li ><a href="index.php"><i class="fa fa-home"></i><span>Home</span></a></li>
			        <li class="active"><a href="mahasiswa.php"><i class="fa fa-user"></i><span>Data Mahasiswa</span></a></li>
			        <li><a href="progress.php"><i class="fa fa-users"></i><span>Progres Studi Mahasiswa</span></a></li>
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
            Mahasiswa
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-users"></i> Mahasiswa</li>
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
                <nav class="navbar navbar-light bg-light">
				<form class="form-inline">
        <center>
					<button class="btn btn-outline-success" id="all" type="button" >All</button>
					<button class="btn btn-outline-success" id="a16" type="button">2016</button>
					<button class="btn btn-outline-success" id="a17" type="button">2017</button>
					<button class="btn btn-outline-success" id="a18" type="button">2018</button>
					<button class="btn btn-outline-success" id="a19" type="button">2019</button>
					<button class="btn btn-outline-success" id="a20" type="button">2020</button>
					<button class="btn btn-outline-success" id="a21" type="button" >2021</button>
					<button class="btn btn-outline-success" id="a22" type="button" >2022</button>
					</center>
				</form>
				</nav>
        <div id="title">
            <center><h3>Semua Mahasiswa</h3></center>
          </div>
          <br>
        <table id="data" class="table table-bordered table-striped table-scalable">
        
        <?php
          include "dt_mhs.php";
        ?>
      </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->

        <div id="ModalMahasiswa" class="modal fade" tabindex="-1" role="dialog"></div>
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
