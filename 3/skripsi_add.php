<?php
include "../koneksi.php";
session_start();

$NIM				= $_POST["NIM"];
$status		= $_POST["status"];
$nilai 		= $_POST["nilai"];
$semester 		= $_POST["semester"];
$tgl 		= $_POST["tgl"];
$file = $_FILES['scan'];
$file_name = $file['name'];
$file_type = $file ['type'];
$file_size = $file ['size'];
$file_path = $file ['tmp_name'];

if($file_name!="" && ($file_type=".pdf" && $file_size<=614400)){
    move_uploaded_file ($file_path,'../aset/pkl/'.$file_name);
};
$add = mysqli_query($konek, "INSERT INTO skripsi (NIM, status, tgl_sidang, nilai, lama_studi, scan) VALUES 
	('$NIM', '$status', '$tgl', '$nilai', '$semester', '$file_name')");
if ($add){
		$_SESSION["sukses"] = 'Data Skripsi Berhasil Disimpan';
		header("Location: input_skripsi.php");
		exit();
}	else if($add==false){
		$_SESSION["gagal"] = 'Data Gagal Disimpan';
		die();
}

?>