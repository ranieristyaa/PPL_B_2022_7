<?php

include "../koneksi.php";

$Id_Usergroup_User	= $_POST["Id_Usergroup_User"];
$Username			= $_POST["NIM"];
$Password			= $_POST["NIM"];
$nama = $_POST["nama"];
$Password_Hash		= password_hash($Password, PASSWORD_DEFAULT);

if($add = mysqli_query($konek, "INSERT INTO user (Id_Usergroup_User, Username, Password) VALUES ('$Id_Usergroup_User', '$Username', '$Password_Hash')")){
	$quser = mysqli_query($konek, "SELECT * FROM user WHERE Username='$Username'");
	$user = mysqli_fetch_array ($quser);
	$id = $user["Id_User"];
	mysqli_query($konek, "INSERT INTO mahasiswa (NIM, Nama_Mahasiswa, Id_User) VALUES ('$Username', '$nama', '$id')");
	header("Location: user.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>