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
    <title>Owner Mamikos - Cari, Bayar, & Sewa Kost Impianmu Secara Online</title>
    <link rel="icon" type="image/x-icon" href="../assets/mamikos.png" />
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
</head>

<body id="page-top">
    <!-- Navigation-->
    <?php include 'navbar.php' ?>


    <body id="page-top">

        <div class="container-fluid">
            <div class="row">
                <?php include 'sidebar.php' ?>

                <div class="col-md-9" style="margin-top: 20px;">

                    <?php
                    $id = $_SESSION['id_pemilik'];
                    $query = "SELECT * FROM pemilik WHERE id_pemilik = $id";
                    $sql = mysqli_query($conn, $query);

                    foreach ($sql as $data) {
                    ?>
                        <div class="card" style="width: 25rem;">
                            <div class="row" style="background-color: white;">
                                <div class="col">
                                    <p class="card-top">Informasi Pribadi</p>
                                </div>
                                <div class="col">
                                    <a href="settings-owner.php?id_pemilik=<?= $id; ?>" class="btn btn-primary">Ubah</a>
                                </div>
                            </div>
                            <div class="row">
                                <p class="bg-c-text--body-1 mb-0">Nama Lengkap</p>
                                <p class="bg-c-text--body-2"><?= $data['nama_pemilik']; ?></p>
                            </div>
                            <div class="row">
                                <p class="bg-c-text--body-1 mb-0">Nomor Handphone</p>
                                <p class="bg-c-text--body-2"><?= $data['no_hp_pemilik']; ?></p>
                            </div>
                            <div class="row">
                                <p class="bg-c-text--body-1 mb-0">Password</p>
                                <p class="bg-c-text--body-2"><?= $data['password']; ?></p>
                            </div>
                            <div class="row">
                                <p class="bg-c-text--body-1 mb-0">Email</p>
                                <p class="bg-c-text--body-2"><?= $data['email_pemilik']; ?></p>
                            </div>
                        </div>

                    <?php } ?>
                </div>

            </div>
        </div>
    </body>


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