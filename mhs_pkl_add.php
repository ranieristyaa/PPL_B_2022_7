<?php
include "../koneksi.php";

$nim				= $_POST["nim"];
$status		= $_POST["status"];
$nilai 		= $_POST["nilai"];
$file = $_FILES['scan'];
$file_name = $file['name'];
$file_type = $file ['type'];
$file_size = $file ['size'];
$file_path = $file ['tmp_name'];

if($file_name!="" && ($file_type=".pdf" && $file_size<=614400)){
    move_uploaded_file ($file_path,'../pkl/'.$file_name);
};

if ($add = mysqli_query($konek, "INSERT INTO pkl (nim, status, nilai, scan) VALUES 
	('$nim', '$status', '$nilai', '$file_name')")){
		header("Location: mhs_pkl.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));

?>