<?php
include "koneksi.php";

$nip = $_GET['nip'];
$query = mysqli_query($koneksi, "DELETE FROM tb_guru WHERE nip = '$nip'");
if($query){
    header( 'Location:guru.php');
}else{
    echo "gagal";
}

?>