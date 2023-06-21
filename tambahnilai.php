<?php include "header.php"; ?>

    <div class="container"style="margin-top:6rem;">
        <h3 class="text-center">Tambah Data Nilai</h3>
        <form action="" method="post">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-6 col-md-7 col-lg-8 col-xl-8 col-xxl-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nilai</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nilai" placeholder="Nilai .....">
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
            $nilai = $_POST['nilai'];

            $query = mysqli_query($koneksi, "INSERT INTO tb_nilai (nilai ) VALUES ('$nilai')");

            if($query){
                 echo "<script>alert('berhasil'), window.location.href='nilai.php';</script>";
            }else {
                echo "gagal";
            }
        }
        
        ?>

           

    </div>
   <?php include "footer.php"; ?>