<?php include "header.php"; ?>
<?php
include "session.php";
?>
<div class="container " style="margin-top:7rem;">
  <h1 class="mb-5 fw-bold">Dashboard 🚀</h1>
  <h3 class="text-start border border-1 p-3 rounded-3 mb-5  bg-warning text-light shadow shadow-lg">Selamat Datang <?= $_SESSION['uname']; ?> Di Website Kami 🤖</h3>
</div>
</div>
<!-- card -->

<?php
include "koneksi.php";
$query = mysqli_query($koneksi, "SELECT * FROM tb_latihan");
$tampil = mysqli_num_rows($query);
?>
<div class="container">
  <div class="row">
    <div class=" col-12 col-sm-6 col-md-4">
      <div class="card p-2 text-center bg-dark text-light shadow shadow-lg">
        <h5 class="mt-3 mb-3">Data Siswa</h5>
        <h1><i class="fa-solid fa-user text-warning" style="font-size: 3rem;text-shadow:0 4px 6px 0 black;"></i></h1>
        <hr>
        <p><?= $tampil; ?></p>
      </div>
    </div>
    <!-- guru -->
    <?php
    include "koneksi.php";
    $query = mysqli_query($koneksi, "SELECT * FROM tb_guru");
    $guru = mysqli_num_rows($query);

    ?>
    <div class=" col-12 col-12 col-sm-6 col-md-4 mb-3">
      <div class="card p-2 text-center bg-light text-dark border border-none shadow shadow-lg">
        <h5 class="mt-3 mb-3">Data Guru</h5>
        <h1><i class="fa-solid fa-users text-primary" style="font-size: 3rem; text-shadow: 0 4px 6px 0 black;"></i></h1>
        <hr>
        <p><?= $guru; ?></p>
      </div>
    </div>

    <!-- mapel -->

    <?php
    include "koneksi.php";
    $query = mysqli_query($koneksi, "SELECT * FROM tb_mapel");
    $mapel = mysqli_num_rows($query);


    ?>
    <div class=" col-12 col-12 col-sm-6 col-md-4">
      <div class="card p-2 text-center bg-dark text-light shadow shadow-lg">
        <h5 class="mt-3 mb-3">Data Mata Pelajaran</h5>
        <h1><i class="fa-solid fa-book text-success" style="font-size: 3rem;"></i></h1>
        <hr>
        <p><?= $mapel; ?></p>
      </div>
    </div>

    <!-- raport -->
    <?php
    include "koneksi.php";
    $query = mysqli_query($koneksi, "SELECT * FROM tb_raport");
    $raport = mysqli_num_rows($query);
    ?>
    <div class=" col-12 col-12 col-sm-6 col-md-4">
      <div class="card p-2 text-center bg-light text-dark border border-none shadow shadow-lg">
        <h5 class="mt-3 mb-3">Data Raport Siswa</h5>
        <h1><i class="fa-solid fa-file text-danger" style="font-size: 3rem;"></i></h1>
        <hr>
        <p class=""><?= $raport; ?></p>
      </div>
    </div>
  </div>
  <!-- card -->

  <!-- content -->
  <div class="container mt-5">
    <div class="row border border-1 p-3 bg-light rounded-3 shadow shadow-lg ">
      <div class="col-12">
        <div id="carouselExampleCaptions" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./assets/image/univ.jpg" class="d-block w-100 rounded-3" alt="..."style="height: 500px; background-size:cover;">
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./assets/image/univ2.jpg" class="d-block w-100 rounded-3" alt="..." style="height: 500px; background-size:cover; ">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>


  <?php include "footer.php"; ?>