<?php



if (isset($_GET['id'])) {
    $id = $_GET['id'];
    include('../koneksi.php');

    $qprov = mysqli_query($konek, "SELECT * FROM kabupaten where id_prov='$id'");
    if($qprov == false){
        die ("Terdapat Kesalahan : ". mysqli_error($konek));
    }
    while($prov = mysqli_fetch_array($qprov)){
            echo "<option value='$prov[id_kab]'>$prov[nama]</option>";
        
    }
}
?>