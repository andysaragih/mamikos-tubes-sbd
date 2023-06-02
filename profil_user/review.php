<?php
require_once '../function.php';
if (isset($_POST['review'])) {
    beri_review($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review | Mamikos - Cari, Bayar, & Sewa Kost Impianmu Secara Online</title>
    <!-- Font Awesome icons (free version)-->
    <link rel="icon" type="image/x-icon" href="../assets/mamikos.png" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/d19e940ee3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/profiles.css">
</head>

<body>
    <?php include 'navbar.php' ?>
    <div class="container m-auto" style="padding-left: 15px; padding-right: 15px; padding-top: 20px; padding-bottom: 20px;">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-7 col-12">
                <div class="bg-c-card bg-c-card--md bg-c-card--lined bg-c-card--light">
                    <div class="user-kost-main__title bg-c-text--heading-5 bg-c-text">
                        Review Kos
                    </div>
                    <div class="user-kost">
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="kebersihan">Kebersihan</span>
                                <input type="number" name="kebersihan" min="0" max="5" step="0.1" class="form-control w-50" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="kenyamanan">Kenyamanan</span>
                                <input type="number" name="kenyamanan" min="0" max="5" step="0.1" class="form-control w-50" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="keamanan">Keamanan</span>
                                <input type="number" name="keamanan" min="0" max="5" step="0.1" class="form-control w-50" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="harga">Harga</span>
                                <input type="number" name="harga" min="0" max="5" step="0.1" class="form-control w-50" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="faskamar">Fasilitas Kamar</span>
                                <input type="number" name="fasilitas_kamar" min="0" max="5" step="0.1" class="form-control w-50" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="fasumum">Fasilitas Umum</span>
                                <input type="number" name="fasilitas_umum" min="0" max="5" step="0.1" class="form-control w-50" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Review</span>
                                <textarea class="form-control" name="revieww" required></textarea>
                            </div>
                            <a class="btn btn-secondary" href="profile.php">Kembali</a>
                            <button class="btn btn-primary" type="submit" name="review">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>