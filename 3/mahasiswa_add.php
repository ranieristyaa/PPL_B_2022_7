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
$smt = $_POST["smt"];
$file = $_FILES['upload'];
$file_name = $file['name'];
$file_type = $file ['type'];
$file_size = $file ['size'];
$file_path = $file ['tmp_name'];

$querymhs = mysqli_query ($konek, "SELECT * FROM mahasiswa WHERE Id_User=".$_SESSION["Id_User"]);
$mhs = mysqli_fetch_array ($querymhs);

if($file_name!="" && ($file_type=".pdf" && $file_size<=614400)){
    move_uploaded_file ($file_path,'../aset/foto/'.$file_name);
};

if($mhs["foto"] != ""){
	$file_name = $mhs["foto"];
}

if (isset($mhs['id_kab'])){
	if ($add = mysqli_query($konek, "UPDATE mahasiswa SET Nama_Mahasiswa='$Nama_Mahasiswa', jalur_masuk='$jalur', Alamat='$Alamat', id_prov='$provinsi', email='$email', No_Telp='$No_Telp', foto='$file_name', semester_aktif='$smt' WHERE NIM='$NIM'")){
		$_SESSION["sukses"] = 'Data IRS Berhasil Disimpan';
		header("Location: index.php");
			exit();
		}
	die ("Terdapat kesalahan : ". mysqli_error($konek));
}
else{

if ($add = mysqli_query($konek, "UPDATE mahasiswa SET Nama_Mahasiswa='$Nama_Mahasiswa', jalur_masuk='$jalur', Alamat='$Alamat', id_prov='$provinsi', id_kab='$kota', email='$email', No_Telp='$No_Telp', foto='$file_name',semester_aktif='$smt' WHERE NIM='$NIM'")){
	$_SESSION["sukses"] = 'Data IRS Berhasil Disimpan';
	header("Location: index.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));
}
?>