<?php

require_once '../function.php';
if (isset($_POST["submit"])) {
    register_pencari($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Freelancer - Start Bootstrap Theme</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles_registrasi.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-XA20rr3fBc6KYvK3Z9T/38+TmWJf8btdq3ygsQ2Fj+4W7Jkzv0EZP7oOzwZIuNEnzkBxOxJ+7Kf1I/yYV7L8g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-Vc2V+94uGYlCjV7JYtY+8V7OhuJzZ+OcGkjtlNjNfBvmJpPz6gz/ajD5GhQ5us5uyJvUmQ9lEsoO+HnwblJx0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg text-uppercase" id="mainNav">
        <div class="container">
            <a href="/" class="logo-mamikos">
                <img src="https://mamikos.com/assets/logo/svg/logo_mamikos_green_v2.svg" alt="Mamikos Logo">
            </a>
            <button class="navbar-toggler text-uppercase font-weight-bold text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1">
                        <div class="dropdown">
                            <a class="nav-link rounded" data-bs-toggle="dropdown" href="/">Cari Apa? &#9662;</a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link  " href="#"><i class="fa fa-bed me-2"></i>Kos</a></li>
                                <li><a class="nav-link" href="#"> <i class="fa fa-home me-2"></i>Kos Singgahsini & Apik</a></li>
                                <li><a class="nav-link" href="#"> <i class="fa fa-font me-2"></i>Kos Andalan</a></li>
                                <li><a class="nav-link" href="#"> <i class="fa fa-hotel fa-fw me-2"></i>Apartemen</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link rounded" href="#about">Pusat bantuan</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link rounded" href="#contact">Syarat dan ketentuan</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <hr>
    <!-- Masthead-->
    <header class="masthead text-white ">
        <div class="container d-flex  flex-column">
            <!-- Masthead Avatar Image-->
            <img class=" alt=" ..." />
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0"><button class="arrow-button">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                </button>
                Daftar Akun Pencari Kos</h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
            </div>
            <!-- Masthead Subheading-->
            <form method="post">
                <label for="full-name">Nama Lengkap</label><br>
                <input class="divider-custom-box" type="text" id="full-name" name="name" required placeholder=" Masukkan nama lengkap sesuai identitas"><br>

                <label for="phone-number">Nomor Handphone</label> <br>
                <input class="divider-custom-box" type="tel" id="phone-number" name="nohp" required placeholder="Isi dengan nomor handphone yang aktif"><br>

                <label for="email">Email</label><br>
                <input class="divider-custom-box" type="email" id="email" name="email" required placeholder="Masukkan email untuk akun Mamikos"><br>

                <label for="Password">Password</label><br>
                <div class="password-container">
                    <input class="divider-custom-box" type="password" id="password" name="password" required placeholder="Minimal 8 karakter">
                    <span class="password-toggle">
                        <i class="fa fa-eye-slash"></i>
                    </span>
                </div><br>


                <label for="Password">Ulangi Password</label><br>
                <div class="password-container">
                    <input class="divider-custom-box" type="password" id="password" name="passwordconfir" required placeholder="Masukkan kembali password">
                    <span class="password-toggle">
                        <i class="fa fa-eye-slash"></i>
                    </span>
                </div><br>




                <input class="divider-custom-daftar" type="submit" name="submit" value=" Daftar">
            </form><br>

            <p> Sudah punya akun Mamikos? <a class="rata-kan-satu">Masuk di sini</a>
            </p>

        </div>
    </header>
    <!-- Portfolio Section-->
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>