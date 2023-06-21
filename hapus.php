<?php
include "koneksi.php";

$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM tb_latihan WHERE id = '$id'");
if($query){
    header( 'Location:index.php');
}else{
    echo "gagal";
}

?>