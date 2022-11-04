<?php
include "../koneksi.php";

$NIM = $_POST["NIM"];
$Nama_Mahasiswa		= $_POST["nama"];
$jalur = $_POST["jalur"];
$Alamat 			= $_POST["alamat"];
$provinsi = $_POST["provinsi"];
$kota = $_POST["kota"];
$No_Telp 			= $_POST["no_telp"];
$email = $_POST["email"];


if ($add = mysqli_query($konek, "UPDATE mahasiswa SET Nama_Mahasiswa='$Nama_Mahasiswa', jalur_masuk='$jalur', Alamat='$Alamat', id_prov='$provinsi', id_kab='$kota', email='$email', No_Telp='$No_Telp' WHERE NIM='$NIM'")){
		header("Location: index.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));

?>