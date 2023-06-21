<?php
    session_start();
    // Periksa status login
    if (!isset($_SESSION['login_status'])){
        echo "<script>window.location.href='login.php';</script>";
        exit; // Menghentikan eksekusi script lebih lanjut jika belum login
    }
    ?>