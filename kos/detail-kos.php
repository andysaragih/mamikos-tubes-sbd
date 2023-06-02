<?php

require_once '../function.php';
if (empty($_SESSION['nohp'])) {
  header("Location: ../index.php");
}
$id = $_GET['id'];
$tampil = "SELECT a.*, b.nama_pemilik FROM kos a JOIN pemilik b ON a.id_pemilik = b.id_pemilik WHERE id_kos = '$id'";
$sql = mysqli_query($conn, $tampil);
$sql4 = mysqli_query($conn, $tampil);
$sql6 = mysqli_query($conn, $tampil);
$sql7 = mysqli_query($conn, $tampil);
$pemilik = mysqli_query($conn, $tampil);
$terakhir = mysqli_query($conn, $tampil);

$tampil2 = "SELECT fasilitas_umum FROM fasilitas_umum WHERE id_kos = '$id'";
$sql2 = mysqli_query($conn, $tampil2);

$tampil3 = "SELECT fasilitas_kamar FROM fasilitas_kamar WHERE id_kos = '$id'";
$sql3 = mysqli_query($conn, $tampil3);

$tampil5 = "SELECT peraturan_kos FROM peraturan_kos WHERE id_kos = '$id'";
$sql5 = mysqli_query($conn, $tampil5);

$tampil8 = "SELECT b.nama_user, ROUND(AVG(a.kebersihan),2) AS kebersihan, ROUND(AVG(a.keamanan),2) AS keamanan, ROUND(AVG(a.kenyamanan),2) AS kenyamanan, ROUND(AVG(a.harga),2) as harga, ROUND(AVG(a.fasilitas_umum),2) AS fasilitas_umum, ROUND(AVG(a.fasilitas_kamar),2) AS fasilitas_kamar, ROUND(AVG(a.rating),2) AS rating FROM review a INNER JOIN user b ON a.id_user = b.id_user  WHERE a.id_kos = '$id'";
$sql8 = mysqli_query($conn, $tampil8);

$review = "SELECT b.nama_user, b.photo_profile, a.review, a.rating FROM review a INNER JOIN user b ON a.id_user = b.id_user  WHERE a.id_kos = '$id'";
$review_sql = mysqli_query($conn, $review);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mamikos - Cari, Bayar, & Sewa Kost Impianmu Secara Online</title>
  <link rel="icon" type="image/x-icon" href="../assets/mamikos.png" />
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="../assets/css/mamikos.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap-grid.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-XA20rr3fBc6KYvK3Z9T/38+TmWJf8btdq3ygsQ2Fj+4W7Jkzv0EZP7oOzwZIuNEnzkBxOxJ+7Kf1I/yYV7L8g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-Vc2V+94uGYlCjV7JYtY+8V7OhuJzZ+OcGkjtlNjNfBvmJpPz6gz/ajD5GhQ5us5uyJvUmQ9lEsoO+HnwblJx0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://kit.fontawesome.com/bc3cf86588.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  <script src="js/bootstrap.js"></script>
  <style>
    ul#menu li {
      display: inline;
    }
  </style>

</head>

<body>

  <!--  NAVBAR -->
  <nav class="navbar navbar-expand-lg text-uppercase" id="mainNav">
    <div class="container">
      <a href="../mamikos.php" class="logo-mamikos">
        <img src="https://mamikos.com/assets/logo/svg/logo_mamikos_green_v2.svg" alt="Mamikos Logo" />
      </a>
      <button class="navbar-toggler text-uppercase font-weight-bold text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive" style="margin-left: 25rem;">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <div class="dropdown">
              <a class="user-profil" data-bs-toggle="dropdown" href="../index.php">
                <img src="https://mamikos.com/general/img/pictures/navbar/ic_profile.svg" alt="">
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="nav-link" href="../profil_user/profile.php">Profil </a>
                </li>
                <li>
                  <a onclick="return confirm('Apakah yakin anda ingin menghapus data')" class="nav-link" href="../logout.php">
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

  <?php while ($data = mysqli_fetch_array($sql)) {
  ?>
    <!-- Detail Kos -->
    <div class="container-fluid text-light  py-2">
      <div class="row px-5">
        <div class="col-8">
          <div style="height: 520px; overflow: hidden;">
            <img class="rounded" style="height: 15cm; width: 20cm;" src="../pemilik-kost/uploads/<?= $data['gambar_kos_depan'] ?>" alt="">
          </div>
        </div>
        <div class="col-4">
          <div class="img mb-3">
            <div style="height: 250px; overflow: hidden;">
              <img class="rounded" style="height: 7cm; width: 10cm;" src="../pemilik-kost/uploads/<?= $data['gambar_kos_dalam'] ?>" alt="">
            </div>
          </div>
          <div class="img mb-3">
            <div style="height: 250px; overflow: hidden;">
              <img class="rounded" style="height: 7cm; width: 10cm;" src="../pemilik-kost/uploads/<?= $data['gambar_kamar_depan'] ?>" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="container">
      <div class="row">
        <div class="col-8">

          <br> <!-- Nama Kos-->

          <div>
            <h2><?= $data['nama_kos']; ?> <?= $data['tipe_kamar']; ?> <?= $data['kec_kos']; ?> <?= $data['kab_kota_kos']; ?></h2>
          </div>

          <br>

          <!-- Lokasi, Rating, dan Transaksi Kos-->
          <div style="font-size:x-large;font-weight:500;">
            <ul id="menu">
              <li>
                Kos <?= $data['jenis_kos']; ?>
              </li>
              <li>
                <i class="fa-solid fa-location-dot"></i> Kecamatan <?= $data['kec_kos']; ?>
              </li>
            </ul>
          </div>

          <br>

          <!-- Tombol Simpan, Share, dan Sisa Kamar-->
          <div>
            <ul id="menu" style="font-size:x-large;font-weight:500;">
              <li>
                <i class="fa-solid fa-door-open"></i> Tersisa <span style="color:red;"> <?= $data['sisa_kamar']; ?> kamar</span>
              </li>
            </ul>
          </div>

          <br>

          <!-- Garis-->

          <hr> <br>

          <!-- Pengelola Kos-->
          <div class="row">
            <div class="col-11">
              <h3>Kos dikelola oleh</h3>
              <h3><?= $data['nama_pemilik']; ?></h3>
            </div>
            <div class="col-1">
              <div class="d-flex justify-content-end"><img class="img-profile rounded-circle" style="width:65px;height:65px;" src="img/user.png" alt=""></div>
            </div>
          </div>
          <br>

          <!-- Garis-->
          <hr><br>

          <!-- Tipe Kamar-->
          <h3>Spesifikasi tipe kamar</h3> <br>
          <div class="row">
            <div class="col">
              <i class="fa-regular fa-building fa-lg"></i>
              <span class="h5"> <?= $data['panjang_kamar']; ?> x <?= $data['lebar_kamar']; ?> meter</span>
            </div>
          </div>
          <div class="row my-3">
            <div class="col">
              <i class="fa-solid fa-bolt fa-lg"></i>
              <span class="h5">
                <?php
                if ($data['listrik'] == "Termasuk") {
                  echo "Termasuk Listrik";
                } else {
                  echo "Tidak Termasuk Listrik";
                }
                ?>
              </span>
            </div>
          </div><br>
        <?php } ?>

        <hr> <br>

        <!-- Fasilitas Kos-->
        <h3> Fasilitas Umum </h3> <br>
        <?php foreach ($sql2 as $data) { ?>
          <div class="row">
            <div class="col">
              <i class="fa-solid fa-thumbtack fa-lg"></i>
              <span class="h5"><?= $data['fasilitas_umum']; ?><span>
            </div>
          </div><br>
        <?php } ?>
        <hr> <br>

        <!-- Fasilitas Kamar -->
        <h3> Fasilitas Kamar</h3><br>
        <?php foreach ($sql3 as $data) { ?>
          <div class="row">
            <div class="col">
              <i class="fa-solid fa-thumbtack fa-lg"></i>
              <span class="h5"><?= $data['fasilitas_kamar']; ?></span>
            </div>
          </div><br>
        <?php } ?>
        <hr> <br>

        <?php while ($d = mysqli_fetch_array($sql4)) { ?>
          <!-- Cerita Pemilik Tentang Kos -->
          <h3> Cerita Pemilik Tentang Kos Ini </h3> <br>
          <div style=" text-align: justify;">
            <?= $d['deskripsi_kos']; ?>
          </div><br>
        <?php } ?>
        <hr> <br>

        <!--Peraturan di Kos Ini-->
        <h3> Peraturan di Kos Ini </h3> <br>
        <?php foreach ($sql5 as $data) { ?>
          <div class="row">
            <div class="col">
              <i class="fa-solid fa-thumbtack fa-lg"></i>
              <span class="h5"><?= $data['peraturan_kos']; ?></span>
            </div>
          </div><br>
        <?php } ?>
        <hr> <br>

        <!--Maps-->
        <h3> Lokasi dan Lingkungan Sekitar</h3>
        <?php while ($d = mysqli_fetch_array($sql6)) { ?>
          <h5><i class="fa-solid fa-location-dot"></i> Kecamatan <?= $d['kec_kos']; ?>, <?= $d['kab_kota_kos']; ?>, <?= $d['provinsi_kos']; ?></h5>
          <?= $d['embed_map']; ?>
        <?php } ?>

        <hr> <br>
        <!--rating-->
        <?php while ($d = mysqli_fetch_array($sql8)) { ?>
          <div>
            <h3><i class="fa-solid fa-star" style="color: #2cb819;"></i><?= $d['rating']; ?></h3>
          </div><br>
          <div>
            <div class="row">
              <div class="col-6">
                <div class="row">
                  <div class="col-10">
                    <h5>Kebersihan </h5>
                    <h5>Kenyamanan </h5>
                    <h5>Keamanan </h5>
                  </div>
                  <div class="col-2">
                    <h5><?= $d['kebersihan']; ?></h5>
                    <h5><?= $d['kenyamanan']; ?></h5>
                    <h5><?= $d['keamanan']; ?></h5>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="row">
                  <div class="col-10">
                    <h5>Harga </h5>
                    <h5>Fasilitas kamar </h5>
                    <h5>Fasilitas Umum </h5>
                  </div>
                  <div class="col-2">
                    <h5><?= $d['harga']; ?></h5>
                    <h5><?= $d['fasilitas_kamar']; ?></h5>
                    <h5><?= $d['fasilitas_umum']; ?></h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>

        <br>
        <?php foreach ($review_sql as $data) { ?>
          <!--Review pertama-->
          <div>
            <div class="row">
              <div class="col-6">
                <div class="row">
                  <div class="col-2"><img class="img-profile rounded-circle" style="width:50px;height:50px;filter:grayscale();" src="../profil_user/uploads/<?= $data['photo_profile'] ?>" alt=""></div>
                  <div class="col-10">
                    <h5><?= $data['nama_user'] ?></h5>
                    <p>
                      <?= $data['review']; ?>
                    </p>
                  </div> <br>
                </div>
              </div>

              <div class="col-6">
                <div class="row">
                  <div class="col-10"></div>
                  <div class="col-2"><button class="rounded " style="box-shadow: gray; background:white;font-size:smaller;height:30px;width:70px;"> <i class="fa-solid fa-star"></i><?= $data['rating']; ?></button></div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
        <hr>

        <!--Statistika -->
        <div class="row">
          <div class="col-6">
            <div class="row">
              <div class="col-2">
                <img class="img-profile rounded-circle" style="width:50px;height:50px;" src="img/user.png" alt="">
              </div>
              <div class="col-10">
                <?php $r = mysqli_fetch_array($pemilik); { ?>
                  <h4><?= $r['nama_pemilik']; ?></h4>
                <?php } ?>

                <p>Pemilik Kos</p>
              </div>
            </div>
          </div>
        </div><br>
        <br>
        </div>
        <div class="col-4 ">
          <div class="kanan px-2">

            <!-- Button Lihat Semua Foto -->
            <button style="border-color:green; font-family: Georgia, 'Times New Roman', Times, serif;font-weight:bolder;" type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Lihat Semua Foto
            </button>

            <?php while ($d = mysqli_fetch_array($terakhir)) { ?>
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Gambar Detail</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="container text-center">
                        <h3>Foto Kos</h3>
                        <div class="row align-items-start">
                          <div class="col">
                            <img class="rounded py-3" style="height: 300px; width:fit-content;" src="../pemilik-kost/uploads/<?= $d['gambar_kos_depan'] ?>" alt="">
                          </div>
                          <div class="col">
                            <img class="rounded py-3" style="height: 300px; width:fit-content;" src="../pemilik-kost/uploads/<?= $d['gambar_kos_dalam'] ?>" alt="">
                          </div>
                        </div><br>

                        <h3> Foto Kamar</h3>
                        <div class="row align-items-start">
                          <div class="col">
                            <img class="rounded py-3" style="height: 300px; width:fit-content;" src="../pemilik-kost/uploads/<?= $d['gambar_kamar_depan'] ?>" alt="">
                          </div>
                          <div class="col">
                            <img class="rounded py-3" style="height: 300px; width:fit-content;" src="../pemilik-kost/uploads/<?= $d['gambar_kamar_dalam'] ?>" alt="">
                          </div>
                          <div class="col">
                            <img class="rounded py-3" style="height: 300px; width:fit-content;" src="../pemilik-kost/uploads/<?= $d['gambar_kamar_mandi'] ?>" alt="">
                          </div>
                        </div><br>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <!--Card-->
              <br><br>
              <div class="card" style="width: 385px;border-radius: 10px;box-shadow: 10px 1px 10px gray;">
                <div class="card-body ">
                  <br>
                  <h4>Rp<?= $d['harga_bulan'] ?>/ bulan</h4>

                  <div class="blok px-4">
                    <!--Ajukan Sewa-->
                    <div>
                      <?php if ($_SESSION['jenis_kelamin'] == 'Laki-Laki' && $d['jenis_kos'] == 'Putri') {
                        echo '<div class="alert alert-success" role="alert">';
                        echo 'Silakan mencari kos putra';
                        echo  '</div>';
                      } else if ($_SESSION['jenis_kelamin'] == 'Perempuan' && $d['jenis_kos'] == 'Putra') {
                        echo '<div class="alert alert-success" role="alert">';
                        echo 'Silakan mencari kos putri';
                        echo  '</div>';
                      } else if ($d['sisa_kamar'] == 0) {
                        echo '<div class="alert alert-danger" role="alert">';
                        echo 'Jumlah kamar yang tersisa adalah kosong!';
                        echo  '</div>';
                      } ?>
                      <button class="btn btn-outline-success" style="border-color:green;width:320px;height:45px;" href="" <?php if ($_SESSION['role'] == 'pemilik') {
                                                                                                                            echo "disabled";
                                                                                                                          } else if ($_SESSION['jenis_kelamin'] == 'Laki-Laki' && $d['jenis_kos'] == 'Putri') {
                                                                                                                            echo "disabled";
                                                                                                                          } else if ($_SESSION['jenis_kelamin'] == 'Perempuan' && $d['jenis_kos'] == 'Putra') {
                                                                                                                            echo "disabled";
                                                                                                                          } else if ($d['sisa_kamar'] == 0) {
                                                                                                                            echo "disabled";
                                                                                                                          } ?>>
                        <a class="link-success" href="../ajuan-sewa/ajukan-sewa.php?id=<?= $id ?>&id_pemilik=<?= $d['id_pemilik'] ?>">Ajukan Sewa</a>
                      </button>
                    </div>
                  </div>
                  <br><br>
                <?php } ?>

                </div>

                <br><br>

              </div>
          </div>
        </div>
      </div>

      <br><br>

      <script src="https://kit.fontawesome.com/bc3cf86588.js" crossorigin="anonymous"></script>
      <script src="js/bootstrap.js"></script>

</body>

</html>