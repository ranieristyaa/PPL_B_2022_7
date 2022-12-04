<?php
include "../koneksi.php";

$nim				= $_POST["nim"];
$status		= $_POST["status"];
$tgl		= $_POST["tgl"];
$nilai 		= $_POST["nilai"];
$lama		= $_POST["lama"];
$file = $_FILES['scan'];
$file_name = $file['name'];
$file_type = $file ['type'];
$file_size = $file ['size'];
$file_path = $file ['tmp_name'];

if($file_name!="" && ($file_type=".pdf" && $file_size<=614400)){
    move_uploaded_file ($file_path,'../aset/skripsi/'.$file_name);
};
$q = "INSERT INTO skripsi (NIM, status, tgl_sidang, nilai, lama_studi, scan) VALUES 
('$nim', '$status', ,'$tgl', '$nilai', '$lama', $file_name')";
echo $q;
if ($add = mysqli_query($konek, "INSERT INTO skripsi (NIM, status, tgl_sidang, nilai, lama_studi, scan) VALUES 
	('$nim', '$status','$tgl', '$nilai', '$lama', '$file_name')")){
 		header("Location: mhs_skripsi.php");
  		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));

?>