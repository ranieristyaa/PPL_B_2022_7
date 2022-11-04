<?php
include "koneksi.php";
session_start();

$NIM				= $_POST["NIM"];

if ($add = mysqli_query($konek, "INSERT INTO user (username) VALUES 
	('$NIM')")){
		$_SESSION["sukses"] = 'Pendaftaran berhasil, Silahkan tunggu 1x24jam untuk akun dapat digunakan.';
		header("Location: register.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));

?>