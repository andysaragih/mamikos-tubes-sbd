<?php
require_once '../function.php';
if (empty($_SESSION['nohp'])) {
    header("Location: ../index.php");
}
$lokasi = $_GET['lokasi'];
$query = "SELECT a.*, GROUP_CONCAT(b.fasilitas_umum) as fasilitas_umum
                        FROM kos a
                        INNER JOIN fasilitas_umum b ON a.id_kos = b.id_kos
                        WHERE a.kab_kota_kos = '" . $lokasi . "'
                        GROUP BY a.id_kos";


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
    GROUP BY id_kos";
}

$sql =  mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mamikos - Cari, Bayar, & Sewa Kost Impianmu Secara Online</title>
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
        <div class="container row mt-3">
            <form action="" method="POST">
                <div class="search mx-4" style="width: 15cm; height: 1cm;">
                    <div class="btn-ikon"><i class="fa fa-magnifying-glass"></i></div>
                    <input type="text" name="keyword" class="search-input" placeholder="Masukkan nama lokasi/area/alamat">
                    <button type="submit" name="cari" class="btn-search">Cari</button>
                </div>
            </form>
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