<?php
require_once '../function.php';

$id_kos = $_GET['id_kos'];
$id = $_GET['id'];

$tampil = "SELECT a.*, b.* FROM kos a JOIN pengajuan_sewa b ON a.id_kos = b.id_kos WHERE a.id_kos = '$id_kos' AND b.id_pengajuan_sewa = '$id' ";
$sql = mysqli_query($conn, $tampil);

if (isset($_POST['bayar'])) {
    bayar_kos($_POST);
}

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
            <div class="col-lg-8 col-md-8 col-sm-7 col-12">
                <div class="bg-c-card bg-c-card--md bg-c-card--lined bg-c-card--light">
                    <button class="btn btn-secondary">Kembali</button>
                    <div class="user-kost-main__title bg-c-text--heading-5 bg-c-text">
                        Pembayaran
                    </div>
                    <div class="user-kost">
                        <h5>Informasi Penyewa</h5>
                        <?php while ($data = mysqli_fetch_array($sql)) { ?>
                            <form action="" method="post">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="nama_kos">Nama Kos</span>
                                    <input type="text" name="namakos" value="<?= $data['nama_kos'] ?> <?= $data['tipe_kamar'] ?> <?= $data['kec_kos'] ?> <?= $data['kab_kota_kos'] ?>" class="form-control w-50" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="nama_kos">Sisa Kamar</span>
                                    <input type="text" name="sisa_kamar" value="<?= $data['sisa_kamar'] ?>" class="form-control w-50" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" readonly>
                                </div>
                                <div class=" input-group mb-3">
                                    <span class="input-group-text" id="jumlah">Jumlah yang harus dibayar</span>
                                    <?php $jumlah = $data['durasi_sewa'] * $data['harga_bulan'] ?>
                                    <input type="number" name="hargakos" value="<?= $jumlah ?>" class="form-control w-50" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" readonly>
                                </div>
                                <h5>Metode pembayaran</h5>
                                <select class="form-select mb-3" value="<?= $jumlah ?>" aria-label="Default select example" name="metode_pembayaran">
                                    <option selected>Pilih Metode Pembayaran</option>
                                    <option value="Gopay">Gopay</option>
                                    <option value="Dana">DANA</option>
                                    <option value="OVO">OVO</option>
                                    <option value="VA Bank">Bank Mandiri</option>
                                    <option value="VA Bank">Bank BRI</option>
                                    <option value="VA Bank">Bank BCA</option>
                                    <option value="VA Bank">Bank BNI</option>
                                </select>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="no_rek">No. Rekening</span>
                                    <input type="text" name="norek" class=" form-control w-50" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" name="bayar" class="btn btn-success btn-lg my-3">Lakukan Pembayaran</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-5 col-12">
                <div>
                    <div class="row">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="../pemilik-kost/uploads/<?= $data['gambar_kos_depan'] ?>" style="height: 7cm; width: 4cm;" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $data['nama_kos'] ?> <?= $data['tipe_kamar'] ?> <?= $data['kec_kos'] ?> <?= $data['kab_kota_kos'] ?></h5>
                                        <p class="card-text"><?= $data['alamat_kos']; ?></p>
                                        <hr>
                                        <p class="fs-6 fw-bold">Harga Total</p>
                                        <p class="fs-5 fw-bold">Rp<?= $jumlah ?></p>
                                        <div class="d-grid gap-2">
                                            <a class="btn btn-outline-secondary" href="../kos/detail-kos.php?id=<?= $id ?>">Detail Kos</a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>