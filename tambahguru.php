<?php
include "header.php";
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $nip = $_POST['nip'];
    $nama_guru = $_POST['nama_guru'];
    $email = $_POST['email'];
    

    $query_cek = mysqli_query($koneksi, " SELECT id_guru FROM tb_guru WHERE nip = '$nip'");

    if(mysqli_num_rows($query_cek) > 0){
        echo "<script>alert('Nip Tidak Boleh Sama '); window.location.href = 'tambahguru.php';</script>";
       
    }else{
        $query = "INSERT INTO tb_guru (nip, nama_guru, email) VALUES ('$nip', '$nama_guru', '$email')";
    
        if (mysqli_query($koneksi, $query)) {
            echo "<script>alert('Data guru berhasil ditambahkan'); window.location.href = 'guru.php';</script>";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
        }
    }
}
?>

<div class="container"style="margin-top:6rem;">
    <h3 class="text-center">Tambah Data</h3>
    <form action="" method="post">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-6 col-md-7 col-lg-8 col-xl-8 col-xxl-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nip</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nip" placeholder="Nip ....." maxlength="8">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Guru</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_guru" placeholder="Nama Guru .....">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput2" name="email" placeholder="Email .....">
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary mt-3" name="simpan" value="Simpan">
                </div>
            </div>
        </div>
    </form>
</div>

<?php include "footer.php"; ?>
