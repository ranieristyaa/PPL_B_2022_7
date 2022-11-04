<?php
include "../koneksi.php";
session_start();

$NIM				= $_POST["NIM"];
$semester		= $_POST["semester"];
$sks 		= $_POST["SKS"];
$file = $_FILES['scan'];
$file_name = $file['name'];
$file_type = $file ['type'];
$file_size = $file ['size'];
$file_path = $file ['tmp_name'];

if($file_name!="" && ($file_type=".pdf" && $file_size<=614400)){
    move_uploaded_file ($file_path,'../aset/irs/'.$file_name);
};
$cek = mysqli_query($konek, "SELECT * FROM irs WHERE NIM='$NIM' and semester=$semester");
$n = mysqli_num_rows($cek);
if ($n != 1){
	$add = mysqli_query($konek, "INSERT INTO irs (NIM, semester, sks, scan) VALUES 
	('$NIM', '$semester', '$sks', '$file_name')");
	if ($add){
			$_SESSION["sukses"] = 'Data IRS Berhasil Disimpan';
			header("Location: input_irs.php");
			exit();
	}	
}
else{
		$_SESSION["gagal"] = 'Data Gagal Disimpan';
		header("Location: input_irs.php");
		exit();
}

?>