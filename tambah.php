<?php include "header.php"; ?>

    <div class="container " style="margin-top:6rem;">
        <h3 class="text-center">Tambah Data</h3>
        <form action="" method="post">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-6 col-md-7 col-lg-8 col-xl-8 col-xxl-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" placeholder="Nama Lengkap .....">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Asal Sekolah</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="asal_sekolah" placeholder="asal sekolah .....">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label">Usia</label>
                    <input type="text" class="form-control" id="exampleFormControlInput2"name="usia" placeholder="Usia .....">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                    <textarea type="text" class="form-control" id="exampleFormControlTextarea1" name="alamat" rows="3"></textarea>
                    <input type="submit" class="btn btn-primary mt-3" name="simpan" value="Simpan" id="">
                </div>
            </div>
        </div>
        </form>
        <?php
        include "koneksi.php";
        if(isset($_POST['simpan'])){
            $nama = $_POST['nama'];
            $asal_sekolah = $_POST['asal_sekolah'];
            $usia = $_POST['usia'];
            $alamat = $_POST['alamat'];

            $query = mysqli_query($koneksi, "INSERT INTO tb_latihan (nama,asal_sekolah, usia,alamat ) VALUES ('$nama','$asal_sekolah', '$usia', '$alamat')");

            if($query){
                 echo "<script>alert('berhasil'), window.location.href='index.php';</script>";
            }else {
                echo "gagal";
            }
        }
        
        ?>

           

    </div>
   <?php include "footer.php"; ?>