


<?php include "header.php"; ?>
<?php

include "koneksi.php";

$id_raport = $_GET['id_raport']; // Mengambil ID dari URL

// Query untuk mendapatkan detail data berdasarkan ID
$query_detail = mysqli_query($koneksi, "SELECT * FROM tb_raport
                                        INNER JOIN tb_latihan ON tb_raport.id = tb_latihan.id
                                        INNER JOIN tb_mapel ON tb_raport.id_mapel = tb_mapel.id_mapel
                                        INNER JOIN tb_guru ON tb_raport.id_guru = tb_guru.id_guru
                                        INNER JOIN tb_nilai ON tb_raport.id_nilai = tb_nilai.id_nilai
                                        WHERE tb_raport.id_raport = $id_raport");
$detail = mysqli_fetch_assoc($query_detail);

// Memastikan data ditemukan
if (!$detail) {
    echo "Data tidak ditemukan.";
    exit;
}
?>

<div class="container" style="margin-top: 7rem;">
    <h3 class="text-start border border-1 p-3 rounded-3 mb-5 fw-light">Detail Raport</h3>
    <div class="row d-flex justify-content-center">
        <div class="col-md-5">
            <div class="card p-5 shadow shadow-lg border border-none">
            <table class="table p-3 lh-lg">
                <h4>Hasil Raport Siswa</h4>
                <hr>
                <tr>
                    <th scope="row">Nama Siswa</th>
                    <td>:</td>
                    <td><?= $detail['nama']; ?></td>
                </tr>
                <tr>
                    <th scope="row">Mata Pelajaran</th>
                    <td>:</td>
                    <td><?= $detail['nama_mapel']; ?></td>
                </tr>
                <tr>
                    <th scope="row">Nama Guru </th>
                    <td>:</td>
                    <td><?= $detail['nama_guru']; ?></td>
                </tr>
                <tr>
                    <th scope="row">Nilai </th>
                    <td>:</td>
                    <td><?= $detail['nilai']; ?></td>
                </tr>
            </table>
            <div class="d-flex justify-content-end " style="gap: 10px;">
            <a href="raport.php" class="btn btn-primary w-25 " style="font-size:15px;"> <i class="fa-solid fa-arrow-left"></i> Kembali</a>
            <a href="raport.php" class="btn btn-danger w-25"><i class="fa-solid fa-print"></i> Cetak</a>
            </div>
           
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>
