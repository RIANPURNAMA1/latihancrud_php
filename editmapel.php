<?php
include "koneksi.php";
$id_mapel= $_GET['id_mapel'];

$query = mysqli_query($koneksi, "SELECT * FROM tb_mapel WHERE id_mapel='$id_mapel'");
$tampil = mysqli_fetch_array($query);
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container"style="margin-top:6rem;">
        <h3 class="text-center">Edit Data Mata Pelajaran</h3>
        <form action="" method="post">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-6 col-md-7 col-lg-8 col-xl-8 col-xxl-6">
                <div class="mb-3">
                <input type="hidden" class="form-control" id="exampleFormControlInput1" name="id_mapel" placeholder="Nama Lengkap ....."  value="<?= $tampil['id_mapel'];?>">
                    <label for="exampleFormControlInput1" class="form-label">Mata Pelajaran</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_mapel" placeholder="Matapelajaran ....."  value="<?= $tampil['nama_mapel'];?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Ctegory</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="category" placeholder="Category ....."  value="<?= $tampil['category'];?>">
                </div>
               
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary mt-3" name="simpan" value="Simpan" id="">
                    <a href="index.php" class="btn btn-primary mt-3" name="simpan" id="">Kembali</a>
                </div>
            </div>
        </div>
        </form>
      <?php
        include "koneksi.php";
        if(isset($_POST['simpan'])){
            $id_mapel = $_GET['id_mapel'];
            $nama_mapel = $_POST['nama_mapel'];
            $category = $_POST['category'];

          
            $query = mysqli_query($koneksi , "UPDATE  tb_mapel SET nama_mapel = '$nama_mapel',category = '$category' WHERE id_mapel = '$id_mapel'");
            

            
            if($query){
                echo "<script>  alert('berhasil'), window.location.href = 'mapel.php';</script>";
            }else{
                echo "gagal";
            }
        }
      ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>