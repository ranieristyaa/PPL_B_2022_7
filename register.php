<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>UNDIP</title>
	<!-- Icon -->
	<link rel="shortcut icon" type="image/icon" href="aset/foto/undip.png">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="aset/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="aset/fa/css/font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="aset/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="aset/plugins/iCheck/square/blue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
  <style>
    .swal2-popup {
        font-size: 1.6rem !important;
        font-family: Georgia, serif;
      }
  </style>
  </head>
  <body class="hold-transition login-page">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
    <div class="login-box">
      <div class="login-logo">
        <b></b>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <img src="https://1.bp.blogspot.com/-GZjl-D1QU6k/WgpvD8krquI/AAAAAAAAE0Y/tkrHzHHdt-4BdvmofUT7vuNtjG4ANIRPQCLcBGAs/s1600/Undip.png" alt="logo" width='325'>
        <b><h3 class="login-box-msg "><strong>Universitas Diponegoro</strong></h3></b>
        <form action="regis_add.php" id="form" method="post">
        <div class="form-group has-feedback">
          <select name="user" id="user" class="form-control" required>
										<option value='' disabled selected>Pilih User</option>
											<option value="mahasiswa">Mahasiswa</option>
											<option value="dosen">Dosen</option>
										</select>
            
            
          </div>
        <div class="form-group has-feedback">
            <input type="text" name="NIM" class="form-control" placeholder="Masukkan NIM/NIP" maxlength="30" />
            <span class="form-control-feedback"><i class="fa fa-user"></i></span>
            
          </div>
          
          
          <div class="row">
            <div class="col-xs-8">
            </div><!-- /.col -->
            <div class="col-xs-12">
              <button type="submit" name="regis" class="btn btn-primary btn-sm btn-block">SUBMIT <i></i></button>
              <br>
              <a href="index.php"><i class=""></i><u>Back to Login</u></a>
            </div><!-- /.col -->
          </div>
          <br>
        <div class="alert alert-success" id="success" role="alert" style="display: none;"></div>
        
        </form>
		
        
		
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="aset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="aset/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="aset/plugins/iCheck/icheck.min.js"></script>
    <?php

    if(@$_SESSION['sukses']){ ?>
      <script>
          swal({
            title: "Success",
            type: "success",
            html: "Pendaftaran berhasil, Silahkan tunggu 1x24jam untuk akun dapat digunakan.",
            width: '40%',
            hight: '70%'
        });
      </script>
    <?php unset($_SESSION['sukses']); } ?>
  </body>
</html>