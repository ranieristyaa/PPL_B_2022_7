<?php

session_start();
include "../koneksi.php";
include "auth_user.php";
$queryuser = mysqli_query ($konek, "SELECT * FROM mahasiswa WHERE Id_User=".$_SESSION["Id_User"]);
$user = mysqli_fetch_array ($queryuser);
$NIM= $user["NIM"];
$up = $_SESSION['up'];
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
  <style>
    .swal2-popup {
        font-size: 1.6rem !important;
        font-family: Georgia, serif;
      }
  </style>
</head>

<body class="hold-transition skin-blue sidebar-mini">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
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
              <p class="text-center" style="color:#FFFFFF; margin-top:16px;"><?php echo $user["Nama_Mahasiswa"]; ?></p>
              <p class="text-center" style="color:#FFFFFF; margin:0px;">Mahasiswa</p>
              <p class="text-center" style="color:#FFFFFF; margin:0px;">Informatika</p>
              <p class="text-center" style="color:#FFFFFF; margin:0px;">Fakultas Sains dan Matematika</p>
            </div>
            <br>
          </li>
            <li><a href="index.php"><i class="fa fa-user"></i><span>Profil</span></a></li>
            <li ><a href="input_irs.php"><i class="fa fa-file-o"></i><span>Data IRS</span></a></li>
            <li class="active"><a href="input_khs.php"><i class="fa fa-file-text"></i><span>Data KHS</span></a></li>
            <li><a href="input_pkl.php"><i class="fa fa-university"></i><span>Data PKL</span></a></li>
            <li><a href="input_skripsi.php"><i class="fa fa-graduation-cap"></i><span>Data Skripsi</span></a></li>
          </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <h1>
            Data KHS
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-file-text"></i>  Data KHS</li>
          </ol>
        </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box" style="height: 655px;">
                <div class="box-header">

                </div><!-- /.box-header -->
                <div class="box-body" style="padding-left: 550px; padding-right: 550px; <?php if ($up == false) echo "display: none;"?>">
                
                          <!-- // Form -->
                          <form action="khs_add.php" enctype="multipart/form-data" method="post">
                          <div class="form-group" style="display: none;">
                          <label>NIM</label>
                            <div class="input-group" >
                              <div class="input-group-addon">
                                <i class="fa fa-id-card"></i>
                              </div>
                              <input name="NIM" type="text" class="form-control" value="<?php echo $NIM?>" readonly/>
                            </div>
                        </div>   
                          <div class="form-group">
                              <label>Semester</label>
                                <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-id-card"></i>
                                  </div>
                                  <select class="form-control" name="semester" id="semester" required>
                                    <option value="" disabled selected>--Pilih Semester Aktif--</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                  </select>
                                </div>
                            </div>
                            <div class="form-group">
                              <label>SKS Semester</label>
                                <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-file"></i>
                                  </div>
                                  <input name="SKSS" type="number" class="form-control" placeholder="SKSS" required/>
                                </div>
                            </div>
                            <div class="form-group">
                              <label>SKS Kumulatif</label>
                                <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-file"></i>
                                  </div>
                                  <input name="SKSK" type="number" class="form-control" placeholder="SKSK" required/>
                                </div>
                            </div>
                            <div class="form-group">
                              <label>IP Semester</label>
                                <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-envelope-open-o"></i>
                                  </div>
                                  <input name="IPS" type="number" step="0.01" class="form-control" placeholder="IPS" required/>
                                </div>
                            </div>
                            <div class="form-group">
                              <label>IP Kumulatif</label>
                                <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-envelope-open-o"></i>
                                  </div>
                                  <input name="IPK" type="number" step="0.01" class="form-control" placeholder="IPK" required/>
                                </div>
                            </div>
                            <div class="form-group">
                              <label>Scan IRS</label>
                                <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-upload"></i>
                                  </div>
                                  <input name="Scan" type="file" accept=".pdf" class="form-control" placeholder="Scan IRS" required/>
                                </div>
                            </div>
                            <div class="modal-footer" style="text-align: center; border:0px;">
                            <br>
                              <button class="btn btn-success" type="submit">
                                Save
                              </button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                </section>

              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <?php
    include  "content_footer.php";
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
  <?php 
                        if(@$_SESSION['sukses']){ ?>
                        <script>
                            swal({
                              title: "Success",
                              type: "success",
                              html: "<b>Data KHS berhasil ditambahkan</b>",
                              width: '40%',
                              hight: '70%'
                          });
                        </script>
                    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
                    <?php unset($_SESSION['sukses']); } 
                    else if (@$_SESSION['gagal']){?>
                    <script>
                            swal({
                              title: "Gagal",
                              type: "error",
                              html: "<b>Data KHS gagal ditambahkan, Mohon Cek Kembali</b>",
                              width: '40%',
                              hight: '70%'
                          });
                        </script>
                    <?php unset($_SESSION['gagal']); } 
                    if($up == false){ ?>
                      <script>
                          swal({
                            title: "Failed to load",
                            type: "error",
                            html: "<b>Update data diri terlebih dahulu</b>",
                            width: '40%',
                            hight: '70%'
                        });
                      </script>
                  <?php
                  };?>
</body>

</html>