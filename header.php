<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Dashboard</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,500;0,600;0,700;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome-free-6.3.0-web/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-warning shadow shadow-md position-fixed top-0 end-0 start-0 z-3">
        <div class="container">
            <a class="navbar-brand text-ligh" href="#">Welcome To My App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="dashboard.php"><i class="fa-solid fa-gauge bg-dark p-2 rounded-3"></i> Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-users  bg-dark p-2 rounded-3"></i>  Data Guru 
                        </a>
                        <ul class="dropdown-menu bg-warning">
                            <li><a class="dropdown-item text-ligh ht" href="guru.php">Lihat Data Guru</a></li>
                            <li><a class="dropdown-item text-light" href="dashboard.php">Laporan Data</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-users  bg-light p-2 rounded-3 text-dark"></i>  Data Siswa
                        </a>
                        <ul class="dropdown-menu bg-warning">
                            <li><a class="dropdown-item text-light" href="">Laporan Data Siswa</a></li>
                            <li><a class="dropdown-item text-light" href="index.php">Lihat Data</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="mapel.php" > <i class="fa-solid fa-book bg-dark p-2 rounded-3"></i> Mata Pelajaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="nilai.php" > <i class="fa-solid fa-hashtag bg-dark p-2 rounded-3"></i> Data Nilai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="raport.php"> <i class="fa-solid fa-file bg-dark p-2 rounded-3"></i> Hasil Raport Siswa</a>
                    </li>
                </ul>

                <div>
                    <a href="logout.php" class="btn btn-dark"><i class="fa-solid fa-right-to-bracket"></i> Log out</a>
                </div>
            </div>
        </div>
    </nav>