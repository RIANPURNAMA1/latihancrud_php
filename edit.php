
<?php
include "koneksi.php";
$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM tb_latihan WHERE id='$id'");
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
        <h3 class="text-center">Edit Data Siswa</h3>
        <form action="" method="post">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-6 col-md-7 col-lg-8 col-xl-8 col-xxl-6">
                <div class="mb-3">
                <input type="hidden" class="form-control" id="exampleFormControlInput1" name="id" placeholder="Nama Lengkap ....."  value="<?= $tampil['id'];?>">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" placeholder="Nama Lengkap ....."  value="<?= $tampil['nama'];?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Asal Sekolah</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="asal_sekolah" placeholder="Asal sekolah ....."  value="<?= $tampil['asal_sekolah'];?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label">Usia</label>
                    <input type="text" class="form-control" id="exampleFormControlInput2"name="usia" placeholder="Usia ....."  value="<?= $tampil['usia'];?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="exampleFormControlTextarea1" name="alamat" rows="3"  value="<?= $tampil['alamat'];?>"></input>
                    <input type="submit" class="btn btn-primary mt-3" name="simpan" value="Simpan" id="">
                    <a href="index.php" class="btn btn-primary mt-3" name="simpan" id="">Kembali</a>
                </div>
            </div>
        </div>
        </form>
      <?php
        include "koneksi.php";
        if(isset($_POST['simpan'])){
            $id = $_GET['id'];
            $nama = $_POST['nama'];
            $asal_sekolah = $_POST['asal_sekolah'];
            $usia = $_POST['usia'];
            $alamat = $_POST['alamat'];


            $query = mysqli_query($koneksi , "UPDATE  tb_latihan SET nama = '$nama',asal_sekolah = '$asal_sekolah', usia='$usia', alamat='$alamat' WHERE id = '$id'");

            if($query){
                echo "<script>  alert('berhasil'), window.location.href = 'index.php';</script>";
            }else{
                echo "gagal";
            }
        }
      ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>