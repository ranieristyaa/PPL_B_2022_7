<?php

include "../koneksi.php";

$NIM= $_GET["NIM"];

if($delete = mysqli_query($konek, "DELETE FROM skripsi WHERE nim='$NIM'")){
	header("Location: mhs_skripsi.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>