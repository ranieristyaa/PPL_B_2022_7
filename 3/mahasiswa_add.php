<?php
include "../koneksi.php";
session_start();
$NIM = $_POST["NIM"];
$Nama_Mahasiswa		= $_POST["nama"];
$jalur = $_POST["jalur"];
$Alamat 			= $_POST["alamat"];
$provinsi = $_POST["provinsi"];
$kota = $_POST["kota"];
$No_Telp 			= $_POST["no_telp"];
$email = $_POST["email"];

$querymhs = mysqli_query ($konek, "SELECT * FROM mahasiswa WHERE Id_User=".$_SESSION["Id_User"]);
$mhs = mysqli_fetch_array ($querymhs);

if (isset($mhs['id_kab'])){
	if ($add = mysqli_query($konek, "UPDATE mahasiswa SET Nama_Mahasiswa='$Nama_Mahasiswa', jalur_masuk='$jalur', Alamat='$Alamat', id_prov='$provinsi', email='$email', No_Telp='$No_Telp' WHERE NIM='$NIM'")){
		$_SESSION["sukses"] = 'Data IRS Berhasil Disimpan';
		header("Location: index.php");
			exit();
		}
	die ("Terdapat kesalahan : ". mysqli_error($konek));
}
else{

if ($add = mysqli_query($konek, "UPDATE mahasiswa SET Nama_Mahasiswa='$Nama_Mahasiswa', jalur_masuk='$jalur', Alamat='$Alamat', id_prov='$provinsi', id_kab='$kota', email='$email', No_Telp='$No_Telp' WHERE NIM='$NIM'")){
	$_SESSION["sukses"] = 'Data IRS Berhasil Disimpan';
	header("Location: index.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));
}
?>