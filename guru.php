
<?php include "header.php"; ?>
<div class="row d-flex justify-content-center mt-5">
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
$jumlah_data = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tb_guru")); // Jumlah total data

$jumlah_halaman = ceil($jumlah_data / $jumlah_data_per_halaman); // Menghitung jumlah halaman

// Mendapatkan halaman saat ini dari URL
$halaman_saat_ini = isset($_GET['page']) ? $_GET['page'] : 1;

// Menghitung offset data
$offset = ($halaman_saat_ini - 1) * $jumlah_data_per_halaman;

// Mendapatkan data dari database atau sumber lainnya
$query = mysqli_query($koneksi, "SELECT * FROM tb_guru LIMIT $offset, $jumlah_data_per_halaman");
?>

<div class="container"style="margin-top:5rem;">
  <h3 class="text-start border border-1 p-3 rounded-3 mb-5 fw-light">Halaman Data Guru</h3>
  <div class="table-container">
    <a href="tambahguru.php" class="btn btn-success"> <i class="fa-solid fa-plus"></i> Tambah Data</a>
    <table class="table table table-light table-striped">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nip</th>
          <th scope="col">Nama Guru Pengajar</th>
          <th scope="col">email</th>
          <th class="text-center" colspan="1" scope="col">Aksi</th>
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
              <td><?= $tampil['nip']; ?></td>
              <td><?= $tampil['nama_guru']; ?></td>
              <td><?= $tampil['email']; ?></td>
              <td class="text-center">
                <a class="btn btn-success" href="editguru.php?id_guru=<?= $tampil['id_guru']; ?>" onclick="return confirm('apakah anda yakin akan mengedit data ?')"> <I class="fa-solid fa-pen-to-square px-2 text-center"></I>Edit</a>
                <a class="btn btn-danger" href="hapusguru.php?nip=<?= $tampil['nip']; ?>" onclick="return confirm('Apakah Yakin Akan Menghapus Data ?')"><I class="fa-solid fa-trash"></I>Hapus</a>
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