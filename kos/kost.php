<?php
require_once '../function.php';
if (empty($_SESSION['nohp'])) {
    header("Location: ../index.php");
}
$query = "SELECT a.*, GROUP_CONCAT(b.fasilitas_umum) AS fasilitas_umum FROM kos a INNER JOIN fasilitas_umum b ON a.id_kos = b.id_kos GROUP BY id_kos";

if (isset($_POST["cari"])) {
    $keyword = $_POST['keyword'];

    $query = "SELECT a.*, GROUP_CONCAT(b.fasilitas_umum) AS fasilitas_umum 
    FROM kos a 
    INNER JOIN fasilitas_umum b 
    ON a.id_kos = b.id_kos
    WHERE a.kab_kota_kos LIKE '%$keyword%' OR
    a.nama_kos LIKE '%$keyword%' OR
    a.alamat_kos LIKE '%$keyword%' OR
    a.kec_kos LIKE '%$keyword%'
    GROUP BY a.id_kos";
}
if (isset($_GET['jenis_kos'])) {
    $jenis_kos = $_GET['jenis_kos'];
    $query = "SELECT a.*, GROUP_CONCAT(b.fasilitas_umum) AS fasilitas_umum FROM kos a INNER JOIN fasilitas_umum b ON a.id_kos = b.id_kos WHERE a.jenis_kos = '$jenis_kos' GROUP BY a.id_kos";
}
if (isset($_GET['harga_min']) && isset($_GET['harga_max'])) {
    $harga_min = $_GET['harga_min'];
    $harga_max = $_GET['harga_max'];
    $query = "SELECT a.*, GROUP_CONCAT(b.fasilitas_umum) AS fasilitas_umum FROM kos a INNER JOIN fasilitas_umum b ON a.id_kos = b.id_kos WHERE a.harga_bulan >= '$harga_min' AND a.harga_bulan <= '$harga_max' GROUP BY a.id_kos";
}
if (isset($_GET['fasilitas_umum'])) {
    $fasilitas_umum = $_GET['fasilitas_umum'];
    $query = "SELECT a.*, GROUP_CONCAT(b.fasilitas_umum) AS fasilitas_umum FROM kos a INNER JOIN fasilitas_umum b ON a.id_kos = b.id_kos WHERE fasilitas_umum LIKE '%$fasilitas_umum%' GROUP BY a.id_kos";
}
$sql =  mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kost | Mamikos - Cari, Bayar, & Sewa Kost Impianmu Secara Online</title>
    <link rel="icon" type="image/x-icon" href="../assets/mamikos.png" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link href="css/kos.css" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg text-uppercase" id="mainNav">
        <div class="container">
            <a href="../mamikos.php" class="logo-mamikos">
                <img src="https://mamikos.com/assets/logo/svg/logo_mamikos_green_v2.svg" alt="Mamikos Logo" />
            </a>
            <button class="navbar-toggler text-uppercase font-weight-bold text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" style="margin-left: 10rem;" id=" navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item ml-5 mx-lg-1">
                        <div class="dropdown">
                            <a class="user-profil" data-bs-toggle="dropdown" href="/">
                                <img src="https://mamikos.com/general/img/pictures/navbar/ic_profile.svg" alt="">
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="nav-link" href="profil_user/profile.php">Profil </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="../logout.php">
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
        <form action="" method="POST">
            <div class="search mx-4" style="width: 15cm; height: 1cm;">
                <div class="btn-ikon"><i class="fa fa-magnifying-glass"></i></div>
                <input type="text" name="keyword" class="search-input" placeholder="Masukkan nama lokasi/area/alamat">
                <button type="submit" name="cari" class="btn-search">Cari</button>
            </div>
        </form>
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
                <form action="" method="get">
                    <?php
                    $checked = [];
                    if (isset($_GET['jenis_kos'])) {
                        $checked = $_GET['jenis_kos'];
                    }

                    ?>
                    <a class="dropdown-item">
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" name="jenis_kos" type="radio" value="Putra" id="flexCheckDefault">Putra
                            </label>
                        </div>
                    </a>
                    <a class="dropdown-item">
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" name="jenis_kos" type="radio" value="Putri" id="flexCheckDefault">Putri
                            </label>
                        </div>
                    </a>
                    <a class="dropdown-item">
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" name="jenis_kos" type="radio" value="Campuran" id="flexCheckDefault">Campuran
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
                </form>
            </div>
        </div>
        <div class="col-auto dropdown flex-column">
            <button type="button" class="btn rounded-pill btn-outline-secondary text-nowrap" data-bs-toggle="dropdown" aria-expanded="false">Harga</button>
            <form action="" method="GET">
                <ul class="dropdown-menu form-inline">
                    <li class=" col flex-grow-1 ps-2">
                        <label for="harga-min">Minimal</label>
                        <input type="number" name="harga_min" min="50000" value="50000" class="form-control w-75" required>
                    </li>
                    <li class="col flex-grow-1 ps-2">
                        <label for="harga-max">Maksimal</label>
                        <input type="number" name="harga_max" min="50000" value="50000" class="form-control w-75" required>
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
                                <button class="btn btn-outline-success" type="submit">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </div>
                </ul>
            </form>
        </div>
        <div class="col-auto dropdown flex-column">
            <button type="button" class="btn rounded-pill btn-outline-secondary text-nowrap" data-bs-toggle="dropdown" aria-expanded="false">Fasilitas Bersama</button>
            <ul class="dropdown-menu">
                <a class="dropdown-item">
                    <form action="" method="get">
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="radio" value="WIFI" name="fasilitas_umum" id="flexCheckDefault">WIFI
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="radio" value="Parkir Mobil" name="fasilitas_umum" id="flexCheckDefault">Parkir Mobil
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="radio" value="Parkir Motor" name="fasilitas_umum" id="flexCheckDefault">Parkir Motor
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="radio" value="Dapur" name="fasilitas_umum" id="flexCheckDefault">Dapur
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="radio" value="Mesin Cuci" name="fasilitas_umum" id="flexCheckDefault">Mesin Cuci
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="radio" value="Penjaga Kos" name="fasilitas_umum" id="flexCheckDefault">Penjaga Kos
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="radio" value="Laundry" name="fasilitas_umum" id="flexCheckDefault">Laundry
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="radio" value="Kulkas" name="fasilitas_umum" id="flexCheckDefault">Kulkas
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="radio" value="Dispenser" name="fasilitas_umum" id="flexCheckDefault">Dispenser
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="radio" value="TV" name="fasilitas_umum" id="flexCheckDefault">TV
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
                                    <button class="btn btn-outline-success" type="submit">
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </a>
            </ul>
        </div>
        <hr style="border-top: dotted 2pt; background-color: transparent;" class="mt-3 mb-3">


        <!-- Kos -->
        <?php
        foreach ($sql as $data) :
        ?>
            <div class="row">
                <div class="col-lg-3-5 p-2">
                    <img src="../pemilik-kost/uploads/<?= $data['gambar_kos_depan'] ?>" alt="" class="gbrkos">
                </div>
                <div class="col p-2">
                    <div>
                        <p class="jnstmbl mx-0"><?= $data['jenis_kos'] ?></p>
                    </div>
                    <div class="mt-3">
                        <h4><?= $data['nama_kos'] ?> <?= $data['tipe_kamar'] ?> <?= $data['kec_kos'] ?> <?= $data['kab_kota_kos'] ?></h4>
                        <h6>
                            <?= $data['alamat_kos']; ?>
                        </h6>
                    </div>
                    <div class="mt-1">
                        <p style="color: gray;">
                            <?= $data['fasilitas_umum'] ?>
                        </p>
                    </div>
                    <div class="mt-3">
                        <div class="row">
                            <div class="col">
                                <a class="btn btn-outline-secondary" href="detail-kos.php?id=<?= $data['id_kos']; ?>">Detail Kos</a>
                            </div>
                            <div class="col">
                                <h5 class="text-end">Rp<?= $data['harga_bulan'] ?>/bulan</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <?php endforeach; ?>
            
    </div>
</body>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.bundle.js"></script>

</html>