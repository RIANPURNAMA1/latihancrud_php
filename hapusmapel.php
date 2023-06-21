<?php 
include "koneksi.php";
$id_mapel = $_GET['id_mapel'];
$query = mysqli_query($koneksi, "DELETE FROM tb_mapel WHERE id_mapel = '$id_mapel'");

if($query){
    echo "<script>alert('Data Berhasil Di hapus'), window.location.href='mapel.php'</script>";
}else{
    echo "gagal";
}

?>