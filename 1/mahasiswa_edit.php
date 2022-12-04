<?php

include "../koneksi.php";

$NIM 				= $_POST["NIM"];
$Nama_Mahasiswa		= $_POST["Nama_Mahasiswa"];
$Tanggal_Lahir 		= $_POST["Tanggal_Lahir"];
$JK 				= $_POST["JK"];
$angkatan = $_POST["angkatan"];
$NIP		= $_POST["NIP"];

if($edit = mysqli_query($konek, "UPDATE mahasiswa SET Nama_Mahasiswa='$Nama_Mahasiswa', Tanggal_Lahir='$Tanggal_Lahir', JK='$JK', 
	angkatan='$angkatan', NIP_dosen='$NIP' WHERE NIM='$NIM'")){
		header("Location: mahasiswa.php");
		exit();
	}
die("Terdapat Kesalahan : ".mysqli_error($konek));

?>