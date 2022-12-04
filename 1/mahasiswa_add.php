<?php
include "../koneksi.php";
session_start();

$NIM 				= $_POST["NIM"];
$Nama_Mahasiswa		= $_POST["Nama_Mahasiswa"];
$Tanggal_Lahir 		= $_POST["Tanggal_Lahir"];
$JK 				= $_POST["JK"];
$angkatan = $_POST["angkatan"];
$NIP		= $_POST["NIP"];

$Password_Hash		= password_hash($NIM, PASSWORD_DEFAULT);

$cek = mysqli_query($konek, "SELECT * FROM mahasiswa WHERE NIM='$NIM'");
$n = mysqli_num_rows($cek);

if($n != 1){
	$add = mysqli_query($konek, "INSERT INTO mahasiswa (NIM, Nama_Mahasiswa, Tanggal_Lahir, JK, angkatan, NIP_dosen) VALUES 
	('$NIM', '$Nama_Mahasiswa', '$Tanggal_Lahir', '$JK', '$angkatan', '$NIP')");
	if ($add){
		$_SESSION["sukses"] = 'Data Mahasiswa Berhasil Disimpan';
		mysqli_query($konek, "INSERT INTO user (Id_Usergroup_User, Username, Password, nama_lengkap) VALUES ('3', '$NIM', '$Password_Hash', '$Nama_Mahasiswa')");
		$quser = mysqli_query($konek, "SELECT * FROM user WHERE Username='$NIM'");
		$user = mysqli_fetch_array ($quser);
		$id = $user["Id_User"];
		mysqli_query($konek, "UPDATE mahasiswa SET Id_User=$id WHERE NIM='$NIM'");
		header("Location: mahasiswa.php");
		exit();
	}
}
else{
	$_SESSION["gagal"] = 'Data Gagal Disimpan';
	header("Location: mahasiswa.php");
}

?>