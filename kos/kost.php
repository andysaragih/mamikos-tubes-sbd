<?php
require_once '../function.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg text-uppercase" id="mainNav">
        <div class="container">
            <a href="/" class="logo-mamikos">
                <img src="https://mamikos.com/assets/logo/svg/logo_mamikos_green_v2.svg" alt="Mamikos Logo" />
            </a>
            <button class="navbar-toggler text-uppercase font-weight-bold text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" style="margin-left: 10rem;" id=" navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link rounded" href="#about">Favorite</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <div class="dropdown">
                            <a class="nav-link rounded coba1" data-bs-toggle="dropdown" href="/" class>
                                Lainnya&#9662;
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="nav-link" href="#">Pusat Bantuan </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="#">
                                        Blog Mamikos
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="#">
                                        Syarat dan Ketentuan</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <div class="dropdown">
                            <a class="user-profil" data-bs-toggle="dropdown" href="/">
                                <img src="https://mamikos.com/general/img/pictures/navbar/ic_profile.svg" alt="">
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="nav-link" href="profil_user/profile.php">Profil </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="#">
                                        Keluar
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container">
        <div class="search mx-4" style="width: 15cm; height: 1cm;">
            <div class="btn-ikon"><i class="fa fa-magnifying-glass"></i></div>
            <input type="text" class="search-input" placeholder="Masukkan nama lokasi/area/alamat">
            <div class="btn-search">Cari</div>
        </div>
        <div class="container row mt-3">
            <div class="dropdown col-auto flex-column">
                <button type="button" class="btn rounded-pill btn-outline-secondary text-nowrap" data-bs-toggle="dropdown" aria-expanded="false">Semua Tipe Kos</button>
                <div class="dropdown-menu" style="width: 316px;">
                    <div class="mx-4 ">
                        <p>
                            Tipe Kos Yang kamu Cari Berdasarkan Gender
                        </p>
                    </div>
                    <a class="dropdown-item">
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">Putra
                            </label>
                        </div>
                    </a>
                    <a class="dropdown-item">
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">Putri
                            </label>
                        </div>
                    </a>
                    <a class="dropdown-item">
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">Campur
                            </label>
                        </div>
                    </a>
                    <div>
                        <hr style="border-top: 1px;" class="mt-3 mb-3">
                    </div>
                    <div class="dropdown-item">
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-outline-dark">
                                    Hapus
                                </button>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                <button class="btn btn-outline-success">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-auto dropdown flex-column">
                <button type="button" class="btn rounded-pill btn-outline-secondary text-nowrap" data-bs-toggle="dropdown" aria-expanded="false">Harga</button>
                <ul class="dropdown-menu form-inline ">
                    <li class="col flex-grow-1 ps-2">
                        <label for="harga-min">Minimal</label>
                        <input type="number" min="50000" class="form-control w-75" required>
                    </li>
                    <li class="col flex-grow-1 ps-2">
                        <label for="harga-max">Maksimal</label>
                        <input type="number" min="50000" class="form-control w-75" required>
                    </li>
                    <div>
                        <hr style="border-top: 1px;" class="mt-3 mb-3">
                    </div>
                    <div class="dropdown-item">
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-outline-dark">
                                    Hapus
                                </button>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                <button class="btn btn-outline-success">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
            <div class="col-auto dropdown flex-column">
                <button type="button" class="btn rounded-pill btn-outline-secondary text-nowrap" data-bs-toggle="dropdown" aria-expanded="false">Fasilitas Kamar</button>
                <ul class="dropdown-menu">
                    <a class="dropdown-item">
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">Kamar Mandi Dalam
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">Kloset Duduk
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">Kasur
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">Lemari Baju
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">TV
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">AC
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">Meja
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">Kursi
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">Kipas Angin
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">Termasuk listrik
                            </label>
                        </div>
                        <div>
                            <hr style="border-top: 1px;" class="mt-3 mb-3">
                        </div>
                        <div class="dropdown-item">
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-outline-dark">
                                        Hapus
                                    </button>
                                </div>
                                <div class="col">
                                </div>
                                <div class="col">
                                    <button class="btn btn-outline-success">
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </a>
                </ul>
            </div>
            <div class="col-auto dropdown flex-column">
                <button type="button" class="btn rounded-pill btn-outline-secondary text-nowrap" data-bs-toggle="dropdown" aria-expanded="false">Fasilitas Bersama</button>
                <ul class="dropdown-menu">
                    <a class="dropdown-item">
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">Wifi
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">Parkir Mobil
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">Parkir Motor
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">Dapur
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">Mesin Cuci
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">Penjaga Kos
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">Laundry
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">Kulkas
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">Dispenser
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">TV
                            </label>
                        </div>
                        <div>
                            <hr style="border-top: 1px;" class="mt-3 mb-3">
                        </div>
                        <div class="dropdown-item">
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-outline-dark">
                                        Hapus
                                    </button>
                                </div>
                                <div class="col">
                                </div>
                                <div class="col">
                                    <button class="btn btn-outline-success">
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </a>
                </ul>
            </div>
            <div class="col-auto dropdown flex-column">
                <button type="button" class="btn rounded-pill btn-outline-secondary text-nowrap" data-bs-toggle="dropdown" aria-expanded="false">Aturan Kos</button>
                <div class="dropdown-menu" style="width: 316px;">
                    <div class="mx-4 ">
                        <p>
                            Layanan dan peraturan kos untuk kenyamanan kamu selama ngekos.
                        </p>
                    </div>
                    <a class="dropdown-item">
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">Akses 24 Jam
                            </label>
                        </div>
                    </a>
                    <a class="dropdown-item">
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">Boleh Pasutri
                            </label>
                        </div>
                    </a>
                    <a class="dropdown-item">
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">Maks. 2 oang/Kamar
                            </label>
                        </div>
                    </a>
                    <a class="dropdown-item">
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">Boleh bawa hewan
                            </label>
                        </div>
                    </a>
                    <a class="dropdown-item">
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">Khusus Karyawan
                            </label>
                        </div>
                    </a>
                    <a class="dropdown-item">
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">Harga Termasuk Listrik(Sewa Harian)
                            </label>
                        </div>
                    </a>
                    <a class="dropdown-item">
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">Maksimal 2 orang (Sewa Harian)
                            </label>
                        </div>
                    </a>
                    <div>
                        <hr style="border-top: 1px;" class="mt-3 mb-3">
                    </div>
                    <div class="dropdown-item">
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-outline-dark">
                                    Hapus
                                </button>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                                <button class="btn btn-outline-success">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr style="border-top: dotted 2pt; background-color: transparent;" class="mt-3 mb-3">


            <!-- Kos -->
            <?php
            $query = "SELECT a.*, b.peraturan_kamar FROM kos a INNER JOIN peraturan_kamar b ON a.id_kos = b.id_kos GROUP BY id_kos";
            $sql =  mysqli_query($conn, $query);

            foreach ($sql as $data) :
            ?>
                <div class="row">
                    <div class="col-lg-3-5 p-2">
                        <img src="assets/Gambarkos/956994.jpg" alt="" class="gbrkos">
                    </div>
                    <div class="col p-2">
                        <div>
                            <p class="jnstmbl mx-0"><?= $data['tipe_kos'] ?></p>
                        </div>
                        <div class="mt-3">
                            <h4><?= $data['nama_kos']; ?> <?= $data['tipe_kamar'] ?> <?= $data['lokasi_kos']; ?></h4>
                            <h6>
                                <?= $data['lokasi_kos']; ?>
                            </h6>
                        </div>
                        <div class="mt-1">
                            <p style="color: gray;">
                                <?= $data['peraturan_kamar'] ?>
                            </p>
                        </div>
                        <div class="mt-3">
                            <div class="row">
                                <div class=" col">
                                    <!-- rating -->
                                    <h5 class="">
                                        Rating
                                    </h5>
                                </div>
                                <div class="col">
                                    <h5 class="text-end">Harga/Jangka Waktu</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-outline-secondary">Detail Kos</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                <?php endforeach; ?>
                </div>

        </div>
</body>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.bundle.js"></script>

</html>