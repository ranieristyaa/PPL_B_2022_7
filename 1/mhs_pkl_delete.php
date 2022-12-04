<?php

include "../koneksi.php";

$nim = $_GET["nim"];

if($delete = mysqli_query($konek, "DELETE FROM pkl WHERE nim='$nim'")){
	header("Location: mhs_pkl.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>