<?php
include "koneksi.php";
$id = $_GET['id_guru'];

$query = mysqli_query($koneksi, "SELECT * FROM tb_guru WHERE id_guru='$id'");
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
    <div class="container" style="margin-top:6rem;">
        <h3 class="text-center">Edit Data Guru</h3>
        <form action="" method="post">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-6 col-md-7 col-lg-8 col-xl-8 col-xxl-6">
                <div class="mb-3">
                <input type="hidden" class="form-control" id="exampleFormControlInput1" name="id_guru" placeholder="Nama Lengkap ....."  value="<?= $tampil['id_guru'];?>">
                    <label for="exampleFormControlInput1" class="form-label">Nip</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nip" placeholder=" ....."  value="<?= $tampil['nip'];?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Guru</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_guru" placeholder=" ....."  value="<?= $tampil['nama_guru'];?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput2"name="email" placeholder=" ....."  value="<?= $tampil['email'];?>">
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
            $id = $_GET['id_guru'];
            $nip = $_POST['nip'];
            $nama_guru = $_POST['nama_guru'];
            $email = $_POST['email'];

        $query = mysqli_query($koneksi , "UPDATE  tb_guru SET nip = '$nip',nama_guru = '$nama_guru', email='$email' WHERE id_guru = '$id'");
        if($query){
            echo "<script>  alert('berhasil'), window.location.href = 'guru.php';</script>";
        }else{
            echo "gagal";
        }
        // Cek apakah NIP sudah ada dalam database
    }
            
        
      ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>