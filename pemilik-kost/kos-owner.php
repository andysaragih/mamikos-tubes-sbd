<?php
require_once '../function.php';
if (empty($_SESSION['nohp'])) {
    header("Location: ../index.php");
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
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-XA20rr3fBc6KYvK3Z9T/38+TmWJf8btdq3ygsQ2Fj+4W7Jkzv0EZP7oOzwZIuNEnzkBxOxJ+7Kf1I/yYV7L8g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-Vc2V+94uGYlCjV7JYtY+8V7OhuJzZ+OcGkjtlNjNfBvmJpPz6gz/ajD5GhQ5us5uyJvUmQ9lEsoO+HnwblJx0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="css/kos-owner.css">

</head>

<body id="page-top">
    <!-- Navigation-->
    <?php include 'navbar.php' ?>
    <div class="container-fluid">
        <div class="row">
            <?php include 'sidebar.php' ?>

            <div class="col-md-9">
                <div class="card-container">
                    <div class="row">
                        <?php
                        $id = $_SESSION['id_pemilik'];
                        $query = "SELECT nama_kos, tipe_kamar, jenis_kos, alamat_kos, kec_kos, kab_kota_kos FROM kos WHERE id_pemilik = $id";
                        $sql = mysqli_query($conn, $query);

                        foreach ($sql as $data) :
                        ?>
                            <div class="col-md-5">
                                <div class="kos-card mx-3 mt-3">
                                    <div class="kos-card__text">
                                        <div>
                                            <span class="kos-card__gender--m">Kos <?= $data['jenis_kos']; ?> </span>
                                        </div>
                                        <div class="kos-card__title">
                                            <p><?= $data['nama_kos']; ?> <?= $data['tipe_kamar']; ?> <?= $data['kec_kos']; ?> <?= $data['kab_kota_kos']; ?> </p>
                                        </div>
                                        <div class="kos-card__address">
                                            <p><?= $data['alamat_kos'] ?></p>
                                        </div>
                                    </div>
                                    <img src="assets/img/portfolio/submarine.png" class="kos-card__img" alt="" srcset="">
                                    <hr>
                                    <div class="kos-card-actions mt-3">
                                        <button type="submit" name="btnHapus" class="btn btn-danger">Hapus Kos</button>
                                        <a type="submit" name="btnDetail" class="btn btn-secondary" href="../kos/detail-kos.php">Detail Kos</a>
                                        <a type="submit" name="btnUpdate" class="btn btn-primary" href="">Update Kos</a>
                                    </div>

                                </div>

                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Masthead-->

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
    <script src="bootstrap.min.js"></script>
    <script src="js/rotasi.js"></script>
</body>

</html>