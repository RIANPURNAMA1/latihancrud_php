
<?php include "header.php"; ?>
<div class="row d-flex justify-content-center "style="margin-top:6rem;">
  <div class="col-4 text-center">
    <?php
    include "session.php";
    ?>
  </div>
</div>
<?php
include "koneksi.php";

// Konfigurasi pagination
$jumlah_data_per_halaman = 5; // Jumlah data yang ditampilkan per halaman
$jumlah_data = mysqli_num_rows(mysqli_query($koneksi,
"SELECT * FROM tb_raport

")); // Jumlah total data

$jumlah_halaman = ceil($jumlah_data / $jumlah_data_per_halaman); // Menghitung jumlah halaman

// Mendapatkan halaman saat ini dari URL
$halaman_saat_ini = isset($_GET['page']) ? $_GET['page'] : 1;

// Menghitung offset data
$offset = ($halaman_saat_ini - 1) * $jumlah_data_per_halaman;

// Mendapatkan data dari database atau sumber lainnya
$query = mysqli_query($koneksi, "SELECT * FROM tb_raport INNER JOIN tb_latihan ON tb_raport.id = tb_latihan.id
                                                        INNER JOIN tb_mapel ON tb_raport.id_mapel = tb_mapel.id_mapel
                                                        INNER JOIN tb_guru ON tb_raport.id_guru = tb_guru.id_guru
                                                        INNER JOIN tb_nilai ON tb_raport.id_nilai = tb_nilai.id_nilai
  LIMIT $offset, $jumlah_data_per_halaman");
?>


<div class="container">
  <h3 class="text-start border border-1 p-3 rounded-3 mb-5 fw-light">Hasil Raport</h3>
  <div class="table-container">
    <a href="tambahraport.php" class="btn btn-success"><i class="fa-solid fa-plus"></i> Tambah Data</a>
    <table class="table table table-light table-striped">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Siswa</th>
          <th scope="col">Mata Pelajaran</th>
          <th scope="col">Nama Guru</th>
          <th scope="col">Nilai</th>
          <th colspan="2" scope="col" class="text-center">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php if (mysqli_num_rows($query) == 0) : ?>
          <tr>
            <td colspan="6" class="text-center">Data Kosong</td>
          </tr>
        <?php else : ?>

          <?php $no = $offset + 1; ?>
         
         <?php foreach($query as $tampil): ?>
       
            <tr>
              <td scope="row"><?= $no++; ?></td>
              <td><?= $tampil['nama']; ?></td>
              <td><?= $tampil['nama_mapel']; ?></td>
              <td><?= $tampil['nama_guru']; ?></td>
              <td class="text-success fw-bold bg-light"><?= $tampil['nilai']; ?></td>
              <td class="text-center">
                <a href="" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                <a href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Hapus</a>
               <?php $modalURL = 'detail.php'; ?>
                <!-- Button trigger modal -->
                <a href="detail.php?id_raport=<?= $tampil['id_raport'];?>" class="btn btn-primary"><i class="fa-solid fa-circle-info"></i> 
                  Detail
                </a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>







<!-- Membuat tombol pagination -->
<div class="container">
  <nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
      <?php if ($halaman_saat_ini > 1) : ?>
        <li class="page-item">
          <a class="page-link" href="?page=<?= ($halaman_saat_ini - 1); ?>" aria-label="Previous">
            <span aria-hidden="true">Prepious</span>
          </a>
        </li>
      <?php endif; ?>

      <?php for ($i = 1; $i <= $jumlah_halaman; $i++) : ?>
        <li class="page-item <?php if ($i== $halaman_saat_ini) echo 'active'; ?>">
<a class="page-link" href="?page=<?= $i; ?>"><?= $i; ?></a>
</li>
<?php endfor; ?>
<?php if ($halaman_saat_ini < $jumlah_halaman) : ?>
    <li class="page-item">
      <a class="page-link" href="?page=<?= ($halaman_saat_ini + 1); ?>" aria-label="Next">
        <span aria-hidden="true">Next</span>
      </a>
    </li>
  <?php endif; ?>
</ul>
  </nav>
</div>
<!-- end tombol pagination -->




<!-- scropt -->
  <script type="text/javascript" language="JavaScript">
 </script>







<?php include "footer.php"; ?>