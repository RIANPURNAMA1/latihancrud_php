<?php include "header.php"; ?>


<?php
include "koneksi.php";
if(isset($_POST['simpan'])){
    $id = $_POST['id'];
    $id_mapel = $_POST['id_mapel'];
    $id_guru = $_POST['id_guru'];
    $id_nilai = $_POST['id_nilai'];

    $query = mysqli_query($koneksi,"INSERT INTO tb_raport (id,id_mapel,id_guru,id_nilai) VALUES ('$id', '$id_mapel', '$id_guru', '$id_nilai')");
    if($query){
        echo "<script>window.location.href='raport.php'</script>";

    }
}
?>
    <div class="container "style="margin-top:6rem;">
        <h3 class="text-center">Tambah Raport</h3>
        <form action="" method="post">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-6 col-md-7 col-lg-8 col-xl-8 col-xxl-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Siswa</label>
                    <select  class="form-control" id="exampleFormControlInput1" name="id" placeholder="Nama Lengkap .....">
                    <?php
                    $query_siswa = mysqli_query($koneksi, "SELECT * FROM tb_latihan");
                    while ($siswa = mysqli_fetch_assoc($query_siswa)){
                       echo "<option value='".$siswa['id']."'> ".$siswa['nama']."</option> ";
                    }
                    ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Mata Pelajaran</label>
                    <select  class="form-control" id="exampleFormControlInput1" name="id_mapel" placeholder="asal sekolah .....">
                    <?php
                    $query_mapel = mysqli_query($koneksi, "SELECT * FROM tb_mapel");
                    while ($mapel = mysqli_fetch_assoc($query_mapel)){
                       echo "<option value='".$mapel['id_mapel']."'> ".$mapel['nama_mapel']."</option> ";
                    }
                    ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label">Nama Guru</label>
                    <select  class="form-control" id="exampleFormControlInput2"name="id_guru" placeholder="Usia .....">
                    <?php
                    $query_guru = mysqli_query($koneksi, "SELECT * FROM tb_guru");
                    while ($guru = mysqli_fetch_assoc($query_guru)){
                       echo "<option value='".$guru['id_guru']."'> ".$guru['nama_guru']."</option> ";
                    }
                    ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Nilai</label>
                    <select  class="form-control" id="exampleFormControlTextarea1" name="id_nilai" rows="3">
                    <?php
                    $query_nilai= mysqli_query($koneksi, "SELECT * FROM tb_nilai");
                    while ($nilai = mysqli_fetch_assoc($query_nilai)){
                       echo "<option value='".$nilai['id_nilai']."'> ".$nilai['nilai']."</option> ";
                    }
                    ?>

                    </select>
                    <input type="submit" class="btn btn-primary mt-3" name="simpan" value="Simpan" id="">
                </div>
            </div>
        </div>
        </form>
 
           

    </div>
   <?php include "footer.php"; ?>