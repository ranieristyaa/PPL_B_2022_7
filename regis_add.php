<?php
include "koneksi.php";
session_start();

$NIM				= $_POST["NIM"];
$usergroup = $_POST["user"];

if($usergroup == 'mahasiswa'){
	$grup = 3;
}else{
	$grup = 2;
}

if ($add = mysqli_query($konek, "INSERT INTO user (Id_Usergroup_User, username) VALUES 
	('$grup', '$NIM')")){
		$_SESSION["sukses"] = 'Pendaftaran berhasil, Silahkan tunggu 1x24jam untuk akun dapat digunakan.';
		header("Location: register.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));

?>