<?php
session_start();
if (isset($_SESSION['login_status'])) {
    header('Location:dashboard.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container ">
        <div class="row d-flex justify-content-center align-content-center " style="height:80vh; width:100%;">
            <div class="login col-sm-5 col-md-3 col-lg-4 col-xl-4 col-xxl-4 ">
                <form action="" method="POST" class="h-100">
                    <div class=" border border-1 p-3 text-warning rounded-3 shadow shadow-md ">
                        <h2 class="text-center pb-4">Login |<span class="text-dark"> Here </span></h2>
                        <p class="text-center text-dark fw-bold" style="margin-top:-1.5rem;">Smkn 1 Angkara 3</p>
                        <div class=" p-2">
                            <label for="exampleFormControlInput1" class="form-label">Username</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="username" placeholder="Masukan Usename .....">
                        </div>
                        <div class="p-2">
                            <label for="exampleFormControlInput" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleFormControlInput" name="password" placeholder="Masukan Password .....">
                            <input class="btn btn-warning  w-100" type="submit" name="simpan" value="Login" id="" style="margin-top:2.5rem;">
                        </div>
                    </div>
                    <?php

                    include "koneksi.php";
                    if (isset($_POST['simpan'])) {
                        $username = $_POST['username'];
                        $password = $_POST['password'];

                        $cek = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
                        // cek jika username benar 
                        if (mysqli_num_rows($cek) === 1) {

                            $d = mysqli_fetch_object($cek);
                            // cek jika password benar
                            if (md5($password) == $d->password) {

                                $_SESSION['uname'] = $d->username;
                                $_SESSION['login_status'] = true;

                                echo "<script>alert('berhasil login'), window.location.href='dashboard.php';</script>";
                            } else {
                                echo "<p class='mt-4 text-danger text-center'>password salah !!<p>";
                            }
                        } else {
                            echo "<p class=' mt-4 text-danger text-center'>Username salah!! <p>";
                        }
                    }
                    ?>
                </form>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>