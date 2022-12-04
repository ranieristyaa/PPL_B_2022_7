<?php
include "../koneksi.php";
session_start();

$NIM				= $_POST["NIM"];
$semester		= $_POST["semester"];
$skss 		= $_POST["SKSS"];
$sksk 		= $_POST["SKSK"];
$ips 		= $_POST["IPS"];
$ipk 		= $_POST["IPK"];

$file = $_FILES['Scan'];
$file_name = $file['name'];
$file_type = $file ['type'];
$file_size = $file ['size'];
$file_path = $file ['tmp_name'];

if($file_name!="" && ($file_type=".pdf" && $file_size<=614400)){
    move_uploaded_file ($file_path,'../aset/khs/'.$file_name);
};
$add = mysqli_query($konek, "INSERT INTO khs (NIM, semester, sks, sksk, ips, ipk, scan) VALUES 
	('$NIM', '$semester', '$skss', '$sksk', '$ips', '$ipk', '$file_name')");
if ($add){
		$_SESSION["sukses"] = 'Data KHS Berhasil Disimpan';
		header("Location: input_khs.php");
		exit();
}	else if($add==false){
		$_SESSION["gagal"] = 'Data Gagal Disimpan';
		die();
}

?>