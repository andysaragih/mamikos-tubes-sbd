<?php
require_once '../function.php';

$id = $_GET['id'];
$id_kos = $_GET['id_kos'];
$tampil = "SELECT * FROM riwayat_transaksi WHERE id_riwayat_transaksi = $id";
$sql = mysqli_query($conn, $tampil);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mamikos - Cari, Bayar, & Sewa Kost Impianmu Secara Online</title>
    <link rel="icon" type="image/x-icon" href="../assets/mamikos.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/d19e940ee3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/profile.css">
</head>

<body>
    <div class="container m-auto" style="padding-left: 15px; padding-right: 15px; padding-top: 20px; padding-bottom: 20px;">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="bg-c-card bg-c-card--md bg-c-card--lined bg-c-card--light">
                    <button class="btn btn-secondary">Kembali</button>
                    <div class="user-kost-main__title bg-c-text--heading-5 bg-c-text">
                        Pembayaran Berhasil
                    </div>
                    <div class="user-kost">
                        <div class="row">
                            <div class="col d-flex align-items-center justify-content-center mb-3">
                                <img src="assets/img/berhasil.jpg" alt="" srcset="" width="100px">
                                <p class="card-text"><b>Pembayaran Berhasil</b>
                                    <br>Anda telah berhasil melakukan pembayaran
                                </p>
                            </div>
                        </div>
                        <?php while ($data = mysqli_fetch_array($sql)) { ?>
                            <div class="row">
                                <div class="col">
                                    <h5>Kode Invoice</h5>
                                    <p><?= $data['invoice']; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h5>Dibayar pada</h5>
                                    <p><?= $data['tanggal_pembayaran']; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h5>Metode Pembayaran</h5>
                                    <p><?= $data['metode_pembayaran']; ?></p>
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <a class="btn btn-outline-success my-3" href="../kos/detail-kos.php?id=<?= $id_kos ?>">Back to the Home</a>
                            </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>