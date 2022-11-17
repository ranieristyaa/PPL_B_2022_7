<?php
include "../koneksi.php";
session_start();

$NIM				= $_POST["NIM"];
$status		= $_POST["status"];
$nilai 		= $_POST["nilai"];
$file = $_FILES['scan'];
$file_name = $file['name'];
$file_type = $file ['type'];
$file_size = $file ['size'];
$file_path = $file ['tmp_name'];

if($file_name!="" && ($file_type=".pdf" && $file_size<=614400)){
    move_uploaded_file ($file_path,'../aset/pkl/'.$file_name);
};
$add = mysqli_query($konek, "INSERT INTO pkl (NIM, status, nilai, scan) VALUES 
	('$NIM', '$status', '$nilai', '$file_name')");
if ($add){
		$_SESSION["sukses"] = 'Data PKL Berhasil Disimpan';
		header("Location: input_pkl.php");
		exit();
}	else if($add==false){
		$_SESSION["gagal"] = 'Data Gagal Disimpan';
		die();
}

?>