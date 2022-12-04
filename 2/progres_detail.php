<?php

session_start();
include "../koneksi.php";
include "auth_user.php";
$NIM = $_GET["NIM"];
$_SESSION["NIM"] = $NIM;
$querymhs = mysqli_query($konek, "SELECT * FROM mahasiswa WHERE NIM='$NIM'");
if($querymhs == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}

$mhs = mysqli_fetch_array($querymhs)


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
    
    <style>
        .btn{
            width: 70px;
            height: 70px;
            text-align: center;
            margin: 10px 10px 10px 0px;
        
        }
    </style>
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
                  <p class="text-center" style="color:#FFFFFF; margin:0px;">Dosen Wali</p>
                  <p class="text-center" style="color:#FFFFFF; margin:0px;">Informatika</p>
                  <p class="text-center" style="color:#FFFFFF; margin:0px;">Fakultas Sains dan Matematika</p>
                </div>
                <br>
              </li>
              <li ><a href="index.php"><i class="fa fa-home"></i><span>Home</span></a></li>
			        <li ><a href="mahasiswa.php"><i class="fa fa-user"></i><span>Data Mahasiswa</span></a></li>
			        <li class="active"><a href="progress.php"><i class="fa fa-users"></i><span>Progres Studi Mahasiswa</span></a></li>
              <li><a href="irs.php"><i class="fa fa-users"></i><span>Rencana Studi Mahasiswa</span></a></li>
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
            Porgres Studi Mahasiswa
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-users"></i> Progres Studi Mahasiswa</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box" style="height: 655px;">
                <div class="box-header">
					        <div>
                    <a href="progress.php" ><i class="fa fa-arrow-left"></i><span>  Back</span></a>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                 
                  
                  <div class="row" >
                    <form action="mahasiswa_add.php" enctype="multipart/form-data" method="post">
                    <div class="col-sm-3">
                        <center>
                             <img src="../aset/foto/<?php echo $_SESSION["Foto"]?>" class="img-circle" alt="Foto" style="height: 200px; width: 200px;">
                        </center>
                     
                      <input id="upload" type="file" accept="image/png, image/jpg" style="display: none;"/>
                      <br><br>
                      <center><i class="fa fa-pencil"></i> <a href="" id="upload_link">Upload Foto</a></center>
                    </div>
                    
                      <div class="col-sm-5" style="max-width:400px;"> 
                    
                            <div class="form-group">
                              <label>NIM</label>
                                <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-id-card"></i>
                                  </div>
                                  <input name="NIM" type="text" class="form-control" value="<?php echo $mhs["NIM"];?>" disabled/>
                                </div>
                            </div>
                            <div class="form-group">
                              <label>Nama Lengkap</label>
                                <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-user-o"></i>
                                  </div>
                                  <input name="nama" type="text" class="form-control" value="<?php echo $mhs["Nama_Mahasiswa"];?>" readonly/>
                                </div>
                            </div>
                            <div class="form-group">
                              <label>Angkatan</label>
                                <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-id-card"></i>
                                  </div>
                                  <input name="angkatan" type="text" class="form-control" value="<?php echo $mhs["angkatan"];?>" readonly/>
                                </div>
                            </div>
                            <div class="form-group">
                              <label>Semester Aktif</label>
                                <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-id-card"></i>
                                  </div>
                                  <input name="angkatan" type="text" class="form-control" value="<?php echo $mhs["semester_aktif"];?>" readonly/>
                                </div>
                            </div>
                            <div class="form-group">
                              <label>Dosen Wali</label>
                                <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-id-card"></i>
                                  </div>
                                  <?php
                                  $NIP = $mhs["NIP_dosen"];
                                  $query = mysqli_query($konek, "SELECT * FROM dosen WHERE NIP='$NIP'");
                                  $dosen = mysqli_fetch_array($query);
                                  ?>
                                  <input name="dosen" type="text" class="form-control" value="<?php echo $dosen["Nama_Dosen"];?>" readonly/>
                                </div>
                            </div>
                        </form>
                      </div>
                      <div class="col-sm-5" style="margin-left: 30px;">
                        <label for="">Semester</label><br>
                            <button class="btn" id='1' type="button">1</button>
                            <button class="btn" <?php if($mhs["semester_aktif"]<2) echo "disabled";?> id="2" stype="button">2</button>
                            <button class="btn" <?php if($mhs["semester_aktif"]<3) echo "disabled";?> id="3" type="button">3</button>
                            <button class="btn" <?php if($mhs["semester_aktif"]<4) echo "disabled";?> id="4" type="button">4</button>
                            <button class="btn" <?php if($mhs["semester_aktif"]<5) echo "disabled";?> id="5" type="button">5</button>
                            <button class="btn" <?php if($mhs["semester_aktif"]<6) echo "disabled";?> id="6" type="button">6</button>
                            <button class="btn" <?php if($mhs["semester_aktif"]<7) echo "disabled";?> id="7" type="button" >7</button>
                            <button class="btn" <?php if($mhs["semester_aktif"]<8) echo "disabled";?> id="8" type="button" >8</button>
                            <button class="btn" <?php if($mhs["semester_aktif"]<9) echo "disabled";?> type="button" >9</button>
                            <button class="btn" <?php if($mhs["semester_aktif"]<10) echo "disabled";?> type="button" >10</button>
                            <button class="btn" <?php if($mhs["semester_aktif"]<11) echo "disabled";?> type="button" >11</button>
                            <button class="btn" <?php if($mhs["semester_aktif"]<12) echo "disabled";?> type="button" >12</button>
                            <button class="btn" <?php if($mhs["semester_aktif"]<13) echo "disabled";?> type="button" >13</button>
                            <button class="btn" <?php if($mhs["semester_aktif"]<14) echo "disabled";?> type="button" >14</button>
                    <div id="smt">
                        
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
    <?php
		include "bundle_script.php";
	?>
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
    <script>
      $(function(){
      $("#upload_link").on('click', function(e){
        e.preventDefault();
        $("#upload:hidden").trigger('click');
      });
      });
    </script>
  </body>
</html>
