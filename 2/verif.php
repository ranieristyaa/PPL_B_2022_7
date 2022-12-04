<?php

include "../koneksi.php";

$NIM = $_GET["NIM"];

if($delete = mysqli_query($konek, "UPDATE irs SET status_konfirmasi='sudah' WHERE NIM='$NIM'")){
	header("Location: irs.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>