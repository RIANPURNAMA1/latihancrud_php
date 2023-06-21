<?php
include "koneksi.php";

$id_nilai = $_GET['id_nilai'];
$query = mysqli_query($koneksi, "DELETE FROM tb_nilai WHERE id_nilai = '$id_nilai'");
if($query){
    header( 'Location:nilai.php');
}
?>