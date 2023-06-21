<?php include "header.php"; ?>
    <div class="container" style="margin-top:6rem;">
        <h3 class="text-center">Tambah Data</h3>
        <form action="" method="post">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-6 col-md-7 col-lg-8 col-xl-8 col-xxl-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Mata Pelajaran</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_mapel" placeholder="Nama Lengkap .....">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Category</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="category" placeholder="asal sekolah .....">
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary mt-3" name="simpan" value="Simpan" id="">
                </div>
            </div>
        </div>
        </form>
        <?php
        include "koneksi.php";
        if(isset($_POST['simpan'])){
            $nama = $_POST['nama_mapel'];
            $category = $_POST['category'];

            $query = mysqli_query($koneksi, "INSERT INTO tb_mapel (nama_mapel,category ) VALUES ('$nama','$category')");

            if($query){
                 echo "<script>alert('berhasil'), window.location.href='mapel.php';</script>";
            }else {
                echo "gagal";
            }
        }
        
        ?>

           

    </div>
   <?php include "footer.php"; ?>