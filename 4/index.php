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
	<!-- Icon -->
	<link rel="shortcut icon" type="image/icon" href="../aset/foto/undip.png">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../aset/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../aset/fa/css/font-awesome.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../aset/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../aset/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../aset/dist/css/skins/_all-skins.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <?php
        include "content_header.php";  
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
              <li class="active"><a href="index.php"><i class="fa fa-home"></i><span>Home</span></a></li>
			        <li><a href="mahasiswa.php"><i class="fa fa-user"></i><span>Data Mahasiswa</span></a></li>
			        <li><a href="mahasiswa.php"><i class="fa fa-users"></i><span>Progres Studi Mahasiswa</span></a></li>
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
            Dashboard
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i> Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box" style="height: 550px;">
                <div class="box-header">
					
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="row" style="margin-top: 10px;">
                  <div class="col-md-6" style="margin-left: 150px; width:400px;">
                    <div class="card text-center" style="height: 100px; background:lightgray; padding: 10px;">
                      <div class="card-body">
                        <h5 class="card-title text-bold">Total Mahasiswa Aktif</h5>
                        <?php 
                        require_once('../koneksi.php');
                        $queryuser = mysqli_query ($konek, "SELECT COUNT(*) AS aktif FROM mahasiswa WHERE status = 'aktif'");
	                      $user = mysqli_fetch_array ($queryuser);
                        ?>
                        <p class="card-text "><?php echo $user["aktif"]?></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6" style="margin-left: 150px; width:400px;"">
                    <div class="card text-center" style="height: 100px; background:lightgray; padding: 10px;">
                      <div class="card-body">
                        <h5 class="card-title text-bold">Total Mahasiswa Cuti</h5>
                        <?php 
                        $queryuser = mysqli_query ($konek, "SELECT COUNT(*) AS cuti FROM mahasiswa WHERE status = 'cuti'");
	                      $user = mysqli_fetch_array ($queryuser);
                        ?>
                        <p class="card-text"><?php echo $user["cuti"]?></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row" style="height: 200px; width: 700px; margin-top: 30px;">
                <div class="card text-center" style="height: 350px; width: 700px; background:lightgray; margin-left:270px; padding:10px">
                      <div class="card-body">
                        <h5 class="card-title text-bold">Total Mahasiswa per Angkatan</h5>
                        <div>
                          <canvas id="myChart" style="height: 250px; width: 600px;"></canvas>
                        </div>
                        <script>
                    
                        const labels = [
                                '2015',
                                '2016',
                                '2017',
                                '2018',
                                '2019',
                                '2020',
                                '2021',
                                '2022'
                              ];
                        const data = {
                          labels: labels,
                          datasets: [{
                            label: 'Jumlah Mahasiswa',
                            data: [
                                  <?php 
                                  require_once('../koneksi.php');
                                  $a15 = mysqli_query($konek,"select * from mahasiswa where angkatan=2015");
                                  echo mysqli_num_rows($a15);
                                  ?>, 
                                  <?php 
                                  require_once('../koneksi.php');
                                  $a16 = mysqli_query($konek,"select * from mahasiswa where angkatan=2016");
                                  echo mysqli_num_rows($a16);
                                  ?>,
                                  <?php 
                                  require_once('../koneksi.php');
                                  $a17 = mysqli_query($konek,"select * from mahasiswa where angkatan=2017");
                                  echo mysqli_num_rows($a17);
                                  ?>,
                                  <?php 
                                  require_once('../koneksi.php');
                                  $a18 = mysqli_query($konek,"select * from mahasiswa where angkatan=2018");
                                  echo mysqli_num_rows($a18);
                                  ?>,
                                  <?php 
                                  require_once('../koneksi.php');
                                  $a19 = mysqli_query($konek,"select * from mahasiswa where angkatan=2019");
                                  echo mysqli_num_rows($a19);
                                  ?>,
                                  <?php 
                                  require_once('../koneksi.php');
                                  $a20 = mysqli_query($konek,"select * from mahasiswa where angkatan=2020");
                                  echo mysqli_num_rows($a20);
                                  ?>,
                                  <?php 
                                  require_once('../koneksi.php');
                                  $a21 = mysqli_query($konek,"select * from mahasiswa where angkatan=2021");
                                  echo mysqli_num_rows($a21);
                                  ?>,
                                  <?php 
                                  require_once('../koneksi.php');
                                  $a22 = mysqli_query($konek,"select * from mahasiswa where angkatan=2022");
                                  echo mysqli_num_rows($a22);
                                  ?>
                            ],
                            backgroundColor: [
                              "lightblue",
                            ],
                            borderColor: [
                              "blue",
                            ],
                            borderWidth: 1
                          }]
                        };

                        const config = {
                        type: 'bar',
                        data: data,
                        options: {
                          scales: {
                            y: {
                              beginAtZero: true
                            }
                          }
                        },
                      };
                        const myChart = new Chart(
                        document.getElementById('myChart'),
                        config
                      );
                      </script>
                      </div>
                    </div>
                </div>
                
              </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <?php
		include	"content_footer.php";
	?>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../aset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../aset/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../aset/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../aset/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../aset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../aset/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../aset/dist/js/app.min.js"></script>
  </body>
</html>
