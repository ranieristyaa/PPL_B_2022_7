<?php

session_start();
include "../koneksi.php";
include "auth_user.php";

$querymhs = mysqli_query ($konek, "SELECT * FROM mahasiswa WHERE Id_User=".$_SESSION["Id_User"]);
$mhs = mysqli_fetch_array ($querymhs);
if ($mhs['Alamat'] != '' && $mhs['No_Telp'] != ''){
  $_SESSION['up'] = true;
}else{
  $_SESSION['up'] = false  ;

}
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
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
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
                  <p class="text-center" style="color:#FFFFFF; margin-top:16px;"><?php echo $mhs["Nama_Mahasiswa"]; ?></p>
                  <p class="text-center" style="color:#FFFFFF; margin:0px;">Mahasiswa</p>
                  <p class="text-center" style="color:#FFFFFF; margin:0px;">Informatika</p>
                  <p class="text-center" style="color:#FFFFFF; margin:0px;">Fakultas Sains dan Matematika</p>
                </div>
                <br>
              </li>
              <li class="active"><a href="index.php"><i class="fa fa-user"></i><span>Profil</span></a></li>
			        <li ><a href="input_irs.php"><i class="fa fa-file-o"></i><span>Data IRS</span></a></li>
            <li><a href="input_khs.php"><i class="fa fa-file-text"></i><span>Data KHS</span></a></li>
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
            Profil
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-user"></i> Profil</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box" style="height: 655px;">
                <div class="box-header">
					
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row" style="margin-left: 10px;">
                    <form action="mahasiswa_add.php" name="form" enctype="multipart/form-data" method="post">
                    <div class="col-sm-2">
                      <img src="../aset/foto/<?php echo $mhs["foto"];?>" class="img-circle" alt="Foto" style="height: 200px; width: 200px; <?php if(!isset($mhs["foto"])) echo "display: none;";?>">
                      <input id="upload" name="upload" type="file" accept="image/png, image/jpeg" <?php if(!isset($mhs["foto"])) echo "required";?>/>
                      <br><br>
                      
                    </div>
                    
                      <div class="col-sm-3" style="margin-left: 30px;"> 
                    
    <div class="form-group">
      <label>NIM</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-id-card"></i>
          </div>
          <input name="NIM" type="text" class="form-control" value="<?php echo $mhs["NIM"]; ?>" readonly/>
        </div>
    </div>
    <div class="form-group">
      <label>Nama Lengkap</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-user-o"></i>
          </div>
          <input name="nama" type="text" class="form-control" value="<?php echo $mhs["Nama_Mahasiswa"]; ?>" placeholder="Nama" required/>
        </div>
    </div>
    <div class="form-group">
      <label>Angkatan</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-id-card"></i>
          </div>
          <input name="angkatan" type="text" class="form-control" value="<?php echo $mhs["angkatan"]; ?>" disabled/>
        </div>
    </div>
    <div class="form-group">
      <label>Jalur Masuk</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-id-card"></i>
          </div>
          <select name="jalur" id="jalur" class="form-control" required>
            <option value="" disabled selected>Jalur Masuk</option>
            <option value="UM" <?php if($mhs["jalur_masuk"] == 'UM') echo 'selected';?>>UM</option>
            <option value="SBMPTN" <?php if($mhs["jalur_masuk"] == 'SBMPTN') echo 'selected';?>>SBMPTN</option>
            <option value="SNMPTN" <?php if($mhs["jalur_masuk"] == 'SNMPTN') echo 'selected';?>>SNMPTN</option>
            <option value="SBUB" <?php if($mhs["jalur_masuk"] == 'SBUB') echo 'selected';?>>SBUB</option>
          </select>
        </div>
    </div>
                    </div>
                    <div class="col-sm-3" style="margin-left: 30px;">
                    <div class="form-group">
      <label>Semester Aktif</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-id-card"></i>
          </div>
          <select name="smt" id="smt" class="form-control" required>
            <option value="" disabled selected>Semester Aktif</option>
            <option value="1" <?php if($mhs["semester_aktif"] == '1') echo 'selected';?>>1</option>
            <option value="2" <?php if($mhs["semester_aktif"] == '2') echo 'selected';?>>2</option>
            <option value="3" <?php if($mhs["semester_aktif"] == '3') echo 'selected';?>>3</option>
            <option value="4" <?php if($mhs["semester_aktif"] == '4') echo 'selected';?>>4</option>
            <option value="5" <?php if($mhs["semester_aktif"] == '5') echo 'selected';?>>5</option>
            <option value="6" <?php if($mhs["semester_aktif"] == '6') echo 'selected';?>>6</option>
            <option value="7" <?php if($mhs["semester_aktif"] == '7') echo 'selected';?>>7</option>
            <option value="8" <?php if($mhs["semester_aktif"] == '8') echo 'selected';?>>8</option>
            <option value="9" <?php if($mhs["semester_aktif"] == '9') echo 'selected';?>>9</ption>
            <option value="10" <?php if($mhs["semester_aktif"] == '10') echo 'selected';?>>10</option>
            <option value="11" <?php if($mhs["semester_aktif"] == '11') echo 'selected';?>>11</option>
            <option value="12" <?php if($mhs["semester_aktif"] == '12') echo 'selected';?>>12</option>
            <option value="13" <?php if($mhs["semester_aktif"] == '13') echo 'selected';?>>13</option>
            <option value="14" <?php if($mhs["semester_aktif"] == '14') echo 'selected';?>>14</option>
          </select>
        </div>
    </div>
                      <div class="form-group">
      <label>Alamat</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-home"></i>
          </div>
          <input type="text" name="alamat" class="form-control" value="<?php echo $mhs["Alamat"]; ?>" required/>
        </div>
    </div>
    <div class="form-group" <?php if(isset($mhs['id_prov'])) echo 'style="display: none;"';?>>
      <label>Provinsi</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-home"></i>
          </div>
          <select name="provinsi" id="provinsi" class="form-control" required <?php if(isset ($mhs["id_prov"])) echo 'readonly';?>>
											<option value='' disabled selected>Provinsi</option>
											<?php
												$qprov = mysqli_query($konek, "SELECT * FROM provinsi");
												if($qprov == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));
												}
												while($prov = mysqli_fetch_array($qprov)){?>
														<option value='<?php echo $prov['id_prov']; ?>' <?php if($mhs['id_prov'] == $prov['id_prov']) echo 'selected';?>><?php echo $prov['nama']; ?></option>";
													
												
											<?php }; ?>
										</select>
        </div>
    </div>
    <div class="form-group" <?php if(!isset($mhs['id_prov'])) echo 'style="display: none;"';?>>
      <label>Provinsi</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-home"></i>
          </div>
          <?php if(isset($mhs['id_prov'])) $qprov = mysqli_query($konek, "SELECT * FROM provinsi where id_prov=".$mhs['id_prov']);
          $prov = mysqli_fetch_array($qprov); ?>
          <input name="" type="text" class="form-control" value="<?php echo $prov["nama"]; ?>" placeholder="Nama" disabled/>
        </div>
    </div>
    <div class="form-group" <?php if(isset($mhs['id_kab'])) echo 'style="display: none;"';?>>
      <label>Kabupaten/Kota</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-home"></i>
          </div>
          <select name="kota" id="kota" class="form-control">
											<option value='' disabled selected>Kota</option>
											
										</select>
        </div>
    </div>
    <div class="form-group" <?php if(!isset($mhs['id_kab'])) echo 'style="display: none;"';?>>
      <label>Kabupaten/Kota</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-home"></i>
          </div>
          <?php if(isset($mhs['id_prov'])) $qprov = mysqli_query($konek, "SELECT * FROM kabupaten where id_kab=".$mhs['id_kab']);
          
          $prov = mysqli_fetch_array($qprov); ?>
          <input name="" type="text" class="form-control" value="<?php echo $prov["nama"]; ?>" placeholder="Nama" disabled/>
        </div>
    </div>
    
                    </div>
                    <div class="col-sm-3" style="margin-left: 30px;">
                      <div class="form-group">
      <label>No Telp</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-mobile"></i>
          </div>
          <input name="no_telp" type="text" class="form-control" value="<?php echo $mhs["No_Telp"]; ?>" required/>
        </div>
    </div>
    <div class="form-group">
      <label>Email</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-envelope-o"></i>
          </div>
          <input name="email" type="email" class="form-control" value="<?php echo $mhs["email"]; ?>" required/>
        </div>
    </div>
                    </div>
                    <br>
                     
                    
                    </div>
                  </div>
                  <div class="row" style="margin-top: 30px;">
                    <center>
                      <button class="btn btn-success"  type="submit" <?php if(isset($mhs["jalur_masuk"]) && isset($mhs["alamat"]) && isset($mhs["id_prov"]) && isset($mhs["id_kab"]) && isset($mhs["email"]) && isset($mhs["No_Telp"])) echo 'style="display: none;"';?>>
                       Save
                      </button>
  </form>
                    </center>
                    
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
    
    <?php
    include('bundle_script.php');
    ?>

<?php 
                        if(@$_SESSION['sukses']){ ?>
                        <script>
                            swal({
                              title: "Success",
                              type: "success",
                              html: "<b>Data diri berhasil diupdate</b>",
                              width: '40%',
                              hight: '70%'
                          });
                        </script>
                    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
                    <?php unset($_SESSION['sukses']); } ?>
  </body>
</html>
