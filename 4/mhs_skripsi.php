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
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                  <p class="text-center" style="color:#FFFFFF; margin:0px;">Departemen</p>
                  <p class="text-center" style="color:#FFFFFF; margin:0px;">Informatika</p>
                  <p class="text-center" style="color:#FFFFFF; margin:0px;">Fakultas Sains dan Matematika</p>
                </div>
                <br>
              </li>
              <li ><a href="index.php"><i class="fa fa-home"></i><span>Home</span></a></li>
			        <li ><a href="mahasiswa.php"><i class="fa fa-user"></i><span>Data Mahasiswa</span></a></li>
			        <li><a href="progress.php"><i class="fa fa-users"></i><span>Progres Studi Mahasiswa</span></a></li>
			        <li ><a href="mhs_pkl.php"><i class="fa fa-university"></i><span>Data Mahasiswa PKL</span></a></li>
			        <li class="active"><a href="mhs_skripsi.php"><i class="fa fa-graduation-cap"></i><span>Data Mahasiswa Skripsi</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Mahasiswa skripsi
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-users"></i> Data Mahasiswa skripsi</li>
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
				<div class="card text-center" style="height: 350px; width: 700px; background:lightgray; margin-left:270px; padding:10px">
                      <div class="card-body">
                        <h5 class="card-title text-bold">Total Mahasiswa per Angkatan</h5>
                        <div>
                          <canvas id="myChart" style="height: 250px; width: 600px;"></canvas>
                        </div>
                        <script>
                       var barChartData = {
                            labels: [
                                '2015',
                                '2016',
                                '2017',
                                '2018',
                                '2019',
                                '2020',
                                '2021',
                                '2022'
                              ],
                            datasets: [
                                {
                                label: "Belum Skripsi",
                                backgroundColor: "pink",
                                borderColor: "red",
                                borderWidth: 1,
                                data: [<?php 
                                  require_once('../koneksi.php');
                                  $a15 = mysqli_query($konek,"select * from skripsi as s inner join mahasiswa as m on s.NIM = m.NIM where m.angkatan = 2015 and s.status = 'belum';");
                                  echo mysqli_num_rows($a15);
                                  ?>, 
                                  <?php 
                                  require_once('../koneksi.php');
                                  $a16 = mysqli_query($konek,"select * from skripsi as s inner join mahasiswa as m on s.NIM = m.NIM where m.angkatan = 2016 and s.status = 'belum';");
                                  echo mysqli_num_rows($a16);
                                  ?>,
                                  <?php 
                                  require_once('../koneksi.php');
                                  $a17 = mysqli_query($konek,"select * from skripsi as s inner join mahasiswa as m on s.NIM = m.NIM where m.angkatan = 2017 and s.status = 'belum';");
                                  echo mysqli_num_rows($a17);
                                  ?>,
                                  <?php 
                                  require_once('../koneksi.php');
                                  $a18 = mysqli_query($konek,"select * from skripsi as s inner join mahasiswa as m on s.NIM = m.NIM where m.angkatan = 2018 and s.status = 'belum';");
                                  echo mysqli_num_rows($a18);
                                  ?>,
                                  <?php 
                                  require_once('../koneksi.php');
                                  $a19 = mysqli_query($konek,"select * from skripsi as s inner join mahasiswa as m on s.NIM = m.NIM where m.angkatan = 2019 and s.status = 'belum';");
                                  echo mysqli_num_rows($a19);
                                  ?>,
                                  <?php 
                                  require_once('../koneksi.php');
                                  $a20 = mysqli_query($konek,"select * from skripsi as s inner join mahasiswa as m on s.NIM = m.NIM where m.angkatan = 2020 and s.status = 'belum';");
                                  echo mysqli_num_rows($a20);
                                  ?>,
                                  <?php 
                                  require_once('../koneksi.php');
                                  $a21 = mysqli_query($konek,"select * from skripsi as s inner join mahasiswa as m on s.NIM = m.NIM where m.angkatan = 2021 and s.status = 'belum';");
                                  echo mysqli_num_rows($a21);
                                  ?>,
                                  <?php 
                                  require_once('../koneksi.php');
                                  $a22 = mysqli_query($konek,"select * from skripsi as s inner join mahasiswa as m on s.NIM = m.NIM where m.angkatan = 2022 and s.status = 'belum';");
                                  echo mysqli_num_rows($a22);
                                  ?>]
                                },
                                {
                                label: "Sedang skripsi",
                                backgroundColor: "lightblue",
                                borderColor: "blue",
                                borderWidth: 1,
                                data: [<?php 
                                  require_once('../koneksi.php');
                                  $a15 = mysqli_query($konek,"select * from skripsi as s inner join mahasiswa as m on s.NIM = m.NIM where m.angkatan = 2015 and s.status = 'on progress';");
                                  echo mysqli_num_rows($a15);
                                  ?>, 
                                  <?php 
                                  require_once('../koneksi.php');
                                  $a16 = mysqli_query($konek,"select * from skripsi as s inner join mahasiswa as m on s.NIM = m.NIM where m.angkatan = 2016 and s.status = 'on progress';");
                                  echo mysqli_num_rows($a16);
                                  ?>,
                                  <?php 
                                  require_once('../koneksi.php');
                                  $a17 = mysqli_query($konek,"select * from skripsi as s inner join mahasiswa as m on s.NIM = m.NIM where m.angkatan = 2017 and s.status = 'on progress';");
                                  echo mysqli_num_rows($a17);
                                  ?>,
                                  <?php 
                                  require_once('../koneksi.php');
                                  $a18 = mysqli_query($konek,"select * from skripsi as s inner join mahasiswa as m on s.NIM = m.NIM where m.angkatan = 2018 and s.status = 'on progress';");
                                  echo mysqli_num_rows($a18);
                                  ?>,
                                  <?php 
                                  require_once('../koneksi.php');
                                  $a19 = mysqli_query($konek,"select * from skripsi as s inner join mahasiswa as m on s.NIM = m.NIM where m.angkatan = 2019 and s.status = 'on progress';");
                                  echo mysqli_num_rows($a19);
                                  ?>,
                                  <?php 
                                  require_once('../koneksi.php');
                                  $a20 = mysqli_query($konek,"select * from skripsi as s inner join mahasiswa as m on s.NIM = m.NIM where m.angkatan = 2020 and s.status = 'on progress';");
                                  echo mysqli_num_rows($a20);
                                  ?>,
                                  <?php 
                                  require_once('../koneksi.php');
                                  $a21 = mysqli_query($konek,"select * from skripsi as s inner join mahasiswa as m on s.NIM = m.NIM where m.angkatan = 2021 and s.status = 'on progress';");
                                  echo mysqli_num_rows($a21);
                                  ?>,
                                  <?php 
                                  require_once('../koneksi.php');
                                  $a22 = mysqli_query($konek,"select * from skripsi as s inner join mahasiswa as m on s.NIM = m.NIM where m.angkatan = 2022 and s.status = 'on progress';");
                                  echo mysqli_num_rows($a22);
                                  ?>]
                                },
                                {
                                label: "Sudah skripsi",
                                backgroundColor: "lightgreen",
                                borderColor: "green",
                                borderWidth: 1,
                                data: [<?php 
                                  require_once('../koneksi.php');
                                  $a15 = mysqli_query($konek,"select * from skripsi as s inner join mahasiswa as m on s.NIM = m.NIM where m.angkatan = 2015 and s.status = 'sudah';");
                                  echo mysqli_num_rows($a15);
                                  ?>, 
                                  <?php 
                                  require_once('../koneksi.php');
                                  $a16 = mysqli_query($konek,"select * from skripsi as s inner join mahasiswa as m on s.NIM = m.NIM where m.angkatan = 2016 and s.status = 'sudah';");
                                  echo mysqli_num_rows($a16);
                                  ?>,
                                  <?php 
                                  require_once('../koneksi.php');
                                  $a17 = mysqli_query($konek,"select * from skripsi as s inner join mahasiswa as m on s.NIM = m.NIM where m.angkatan = 2017 and s.status = 'sudah';");
                                  echo mysqli_num_rows($a17);
                                  ?>,
                                  <?php 
                                  require_once('../koneksi.php');
                                  $a18 = mysqli_query($konek,"select * from skripsi as s inner join mahasiswa as m on s.NIM = m.NIM where m.angkatan = 2018 and s.status = 'sudah';");
                                  echo mysqli_num_rows($a18);
                                  ?>,
                                  <?php 
                                  require_once('../koneksi.php');
                                  $a19 = mysqli_query($konek,"select * from skripsi as s inner join mahasiswa as m on s.NIM = m.NIM where m.angkatan = 2019 and s.status = 'sudah';");
                                  echo mysqli_num_rows($a19);
                                  ?>,
                                  <?php 
                                  require_once('../koneksi.php');
                                  $a20 = mysqli_query($konek,"select * from skripsi as s inner join mahasiswa as m on s.NIM = m.NIM where m.angkatan = 2020 and s.status = 'sudah';");
                                  echo mysqli_num_rows($a20);
                                  ?>,
                                  <?php 
                                  require_once('../koneksi.php');
                                  $a21 = mysqli_query($konek,"select * from skripsi as s inner join mahasiswa as m on s.NIM = m.NIM where m.angkatan = 2021 and s.status = 'sudah';");
                                  echo mysqli_num_rows($a21);
                                  ?>,
                                  <?php 
                                  require_once('../koneksi.php');
                                  $a22 = mysqli_query($konek,"select * from skripsi as s inner join mahasiswa as m on s.NIM = m.NIM where m.angkatan = 2022 and s.status = 'sudah';");
                                  echo mysqli_num_rows($a22);
                                  ?>]
                                }
                            ]
                            };

                            var chartOptions = {
                            responsive: true,
                            legend: {
                                position: "top"
                            },
                            title: {
                                display: true,
                                text: "Chart.js Bar Chart"
                            },
                            scales: {
                                yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                                }]
                            }
                            }

                            window.onload = function() {
                            var ctx = document.getElementById("myChart").getContext("2d");
                            window.myBar = new Chart(ctx, {
                                type: "bar",
                                data: barChartData,
                                options: chartOptions
                            });
                            };

                      </script>
                      </div>
                    </div>
          </div>
				<div id="tabel" style="padding-left: 15px; padding-right: 15px;">
				<a href="#"><button class="btn btn-success" type="button" data-target="#ModalAdd" data-toggle="modal"><i class="fa fa-plus"></i> Add</button></a>
                  <br></br>
				  <table id="data" class="table table-bordered table-striped table-scalable">
						<?php
							include "dt_mhs_skripsi.php";
						?>
                  </table>
				</div>  
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
						<form action="mhs_skripsi_add.php" name="modal_popup" enctype="multipart/form-data" method="post">
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
										<select name="status" class="form-control" required>
											<option value='' disabled selected>status</option>
											<option value='belum'>belum</option>
											<option value='on progress'>on progress</option>
											<option value='sudah'>sudah</option>
										</select>
									</div>
							</div>
              <div class="form-group">
								<label>Tanggal Sidang</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input name="tgl" type="date" class="form-control" placeholder="tanggal" required/>
									</div>
							</div>
							<div class="form-group">
								<label>Nilai</label>
									<div class="input-group addon">
										<div class="input-group-addon">
											<i class="fa fa-pencil"></i>
										</div>
										<select name="nilai" id="nilai" class="form-control" >
										<option value='' disabled selected>Nilai Skripsi</option>
											<option value="A">A</option>
											<option value="B">B</option>
											<option value="C">C</option>
											<option value="D">D</option>
											<option value="E">E</option>
											
										</select>
									</div>
							</div>
              <div class="form-group">
								<label>Lama Studi(semester)</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="lama" id="lama" class="form-control" >
										<option value='' disabled selected>Lama Studi</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
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
		<div id="ModalEditSkripsi" class="modal fade" tabindex="-1" role="dialog">
		</div>
		<!-- Modal Popup untuk delete--> 
		<div class="modal fade" id="modal_delete">
			<div class="modal-dialog">
				<div class="modal-content" style="margin-top:100px;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" style="text-align:center;">Are you sure to delete this information ?</h4>
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
