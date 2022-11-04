<?php

include "../koneksi.php";

$NIM 				= $_POST["nim"];
$status		= $_POST["status"];
$tgl	= $_POST["tgl"];
$nilai					= $_POST["nilai"];
$lama			= $_POST["lama"];
$file = $_FILES['scan'];
$file_name = $file['name'];
$file_type = $file ['type'];
$file_size = $file ['size'];
$file_path = $file ['tmp_name'];

if($edit = mysqli_query($konek, "UPDATE skripsi SET status='$status', tgl_sidang='$tgl', nilai='$nilai', 
	lama_studi='$lama', scan='$file_name' WHERE NIM='$NIM'")){
		header("Location: mhs_skripsi.php");
		exit();
	}
die("Terdapat Kesalahan : ".mysqli_error($konek));

?>