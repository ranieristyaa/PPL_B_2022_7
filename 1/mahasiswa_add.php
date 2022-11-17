<?php
include "../koneksi.php";

$NIM 				= $_POST["NIM"];
$Nama_Mahasiswa		= $_POST["Nama_Mahasiswa"];
$Tanggal_Lahir 		= $_POST["Tanggal_Lahir"];
$JK 				= $_POST["JK"];
$angkatan = $_POST["angkatan"];
$NIP		= $_POST["NIP"];

$Password_Hash		= password_hash($NIM, PASSWORD_DEFAULT);

if ($add = mysqli_query($konek, "INSERT INTO mahasiswa (NIM, Nama_Mahasiswa, Tanggal_Lahir, JK, angkatan, NIP_dosen) VALUES 
	('$NIM', '$Nama_Mahasiswa', '$Tanggal_Lahir', '$JK', '$angkatan', '$NIP')")){
		mysqli_query($konek, "INSERT INTO user (Id_Usergroup_User, Username, Password, nama_lengkap) VALUES ('3', '$NIM', '$Password_Hash', '$Nama_Mahasiswa')");
		$quser = mysqli_query($konek, "SELECT * FROM user WHERE Username='$NIM'");
		$user = mysqli_fetch_array ($quser);
		$id = $user["Id_User"];
		mysqli_query($konek, "INSERT INTO mahasiswa (Id_User) VALUES ($id) WHERE NIM='$NIM'");
		header("Location: mahasiswa.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));

?>