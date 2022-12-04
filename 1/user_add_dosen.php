<?php

include "../koneksi.php";

$Id_Usergroup_User	= $_POST["Id_Usergroup_User"];
$Username			= $_POST["NIP"];
$Password			= $_POST["NIP"];
$nama = $_POST["nama"];
$Password_Hash		= password_hash($Password, PASSWORD_DEFAULT);

if($add = mysqli_query($konek, "INSERT INTO user (Id_Usergroup_User, Username, Password, nama_lengkap) VALUES ('$Id_Usergroup_User', '$Username', '$Password_Hash', '$nama')")){
	
	$quser = mysqli_query($konek, "SELECT * FROM user WHERE Username='$Username'");
	$user = mysqli_fetch_array ($quser);
	$id = $user["Id_User"];
	mysqli_query($konek, "INSERT INTO dosen (NIP, Nama_Dosen, Id_User) VALUES ('$Username', '$nama', '$id')");
	header("Location: user.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>