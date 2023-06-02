<?php
require_once '../function.php';
if (empty($_SESSION['nohp'])) {
    header("Location: ../index.php");
}

$id = $_GET['id'];
$tampil1 = "SELECT a.*, GROUP_CONCAT(b.peraturan_kos) AS peraturan_kos FROM kos a JOIN peraturan_kos b ON a.id_kos = b.id_kos WHERE a.id_kos = '$id'";
$queryedit = mysqli_query($conn, $tampil1);

$tampil2 = "SELECT a.*, GROUP_CONCAT(b.fasilitas_umum) AS fasilitas_umum FROM kos a JOIN fasilitas_umum b ON a.id_kos = b.id_kos WHERE a.id_kos = '$id'";
$query = mysqli_query($conn, $tampil2);

$tampil3 = "SELECT a.*, GROUP_CONCAT(b.fasilitas_kamar) AS fasilitas_kamar FROM kos a JOIN fasilitas_kamar b ON a.id_kos = b.id_kos WHERE a.id_kos = '$id'";
$queryupdate = mysqli_query($conn, $tampil3);

$tampil4 = "SELECT a.*, GROUP_CONCAT(b.peraturan_kos) AS peraturan_kos FROM kos a JOIN peraturan_kos b ON a.id_kos = b.id_kos WHERE a.id_kos = '$id'";
$query1 = mysqli_query($conn, $tampil4);

if (isset($_POST["submit"])) {
    edit_kost($_POST);
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
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/profiles.css">
</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg text-uppercase" id="mainNav">
        <div class="container">
            <a href="index.php" class="logo-mamikos">
                <img src="https://mamikos.com/assets/logo/svg/logo_mamikos_green_v2.svg" alt="Mamikos Logo" />
            </a>
            <button class="navbar-toggler text-uppercase font-weight-bold text-black rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>

    <div class="row">
        <div class="col-12 col-lg-12 col-md-12 col-sm-12">

            <div class="card mb-3">
                <h5 class="card-header">EDIT DATA KOS</h5>
                <div class="card-body bg-light">
                    <?php
                    while ($edit = mysqli_fetch_array($queryedit)) {
                    ?>
                        <form method="POST" enctype="multipart/form-data">
                            <div class="row form-group mb-3 align-items-center bg-light">
                                <div class="col-4 text-end">
                                    <label for="name"><strong>Nama Kos</strong></label>
                                    <p>Saran: Kos (spasi) Nama Kos, Tanpa Nama Kecamatan dan Kota</p>

                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control w-50" id="name" name="nama_kos" value="<?= $edit['nama_kos']; ?>" required>
                                </div>
                            </div>
                            <div class="row form-group mb-3 align-items-center bg-light">
                                <div class="col-4 text-end">
                                    <label for="name"><strong>Tipe Kamar</strong></label>
                                    <p>Saran: Tipe A atau VVIP atau Executive</p>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control w-50" id="tipe" name="tipe_kamar" value="<?= $edit['tipe_kamar']; ?>" required>
                                </div>
                            </div>
                            <div class=" row form-group mb-3 align-items-center">
                                <div class="col-4 text-end">
                                    <label for="kota"><strong>Jenis Kos</strong></label>
                                </div>
                                <div class="col-8">
                                    <select class="form-select w-50" aria-label="Default select example" name="jenis_kos">
                                        <?php
                                        foreach ($jenis_kelamin as $j) {
                                            echo "<option value = '$j'";
                                            echo $edit['jenis_kelamin'] == $j ? 'selected="selected"' : '';
                                            echo ">$j</option>";
                                        }
                                        ?>
                                        <option <?php if ($edit['nama_kos'] == "Putra") {
                                                    echo "selected";
                                                } ?>>Putra</option>
                                        <option <?php if ($edit['nama_kos'] == "Putri") {
                                                    echo "selected";
                                                } ?>>Putri</option>
                                        <option <?php if ($edit['nama_kos'] == "Campuran") {
                                                    echo "selected";
                                                } ?>>Campuran</option>
                                    </select>
                                </div>
                            </div>
                            <div class=" row form-group mb-3 align-items-center bg-light">
                                <div class="col-4 text-end">
                                    <label for="name"><strong>Deskripsi Kos</strong></label>
                                    <p>Ceritakan hal menarik tentang kos Anda.</p>
                                </div>
                                <div class="col-8">
                                    <textarea class="form-control w-50" name="deskripsi_kos" value="" required><?= $edit['deskripsi_kos']; ?></textarea>
                                </div>
                            </div>
                            <div class="row form-group mb-3 bg-light">
                                <div class="col-4 text-end">
                                    <label for="name"><strong>Peraturan Kos</strong></label>
                                </div>
                                <div class="col-8">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="peraturan_kos[]" value="> 5 orang/ kamar" id="flexCheckDefault" <?php if (strpos($edit['peraturan_kos'], "> 5 orang/ kamar") !== false) {
                                                                                                                                                                    echo "checked";
                                                                                                                                                                } ?>>
                                        <label class="form-check-label" for="flexCheckDefault">
                                            > 5 orang/ kamar
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="peraturan_kos[]" value="Ada jam malam" id="flexCheckChecked" <?php if (strpos($edit['peraturan_kos'], "Ada jam malam") !== false) {
                                                                                                                                                                echo "checked";
                                                                                                                                                            } ?>>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Ada jam malam
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="peraturan_kos[]" value="Akses 24 jam" id="flexCheckChecked" <?php if (strpos($edit['peraturan_kos'], "Akses 24 jam") !== false) {
                                                                                                                                                                echo "checked";
                                                                                                                                                            } ?>>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Akses 24 jam
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="peraturan_kos[]" value="Boleh bawa hewan" id="flexCheckChecked" <?php if (strpos($edit['peraturan_kos'], "Boleh bawa hewan") !== false) {
                                                                                                                                                                    echo "checked";
                                                                                                                                                                } ?>>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Boleh bawa hewan
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="peraturan_kos[]" value="Dilarang merokok di kamar" id="flexCheckChecked" <?php if (strpos($edit['peraturan_kos'], "Dilarang merokok di kamar") !== false) {
                                                                                                                                                                            echo "checked";
                                                                                                                                                                        } ?>>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Dilarang merokok di kamar
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="peraturan_kos[]" value="Lawan jenis dilarang ke kamar" id="flexCheckChecked" <?php if (strpos($edit['peraturan_kos'], "Lawan jenis dilarang ke kamar") !== false) {
                                                                                                                                                                                echo "checked";
                                                                                                                                                                            } ?>>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Lawan jenis dilarang ke kamar
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="peraturan_kos[]" value="Maksimal 1 orang/kamar" id="flexCheckChecked" <?php if (strpos($edit['peraturan_kos'], "Maksimal 1 orang/kamar") !== false) {
                                                                                                                                                                        echo "checked";
                                                                                                                                                                    } ?>>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Maksimal 1 orang/kamar
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="peraturan_kos[]" value="Maksimal 2 orang/kamar" id="flexCheckChecked" <?php if (strpos($edit['peraturan_kos'], "Maksimal 2 orang/kamar") !== false) {
                                                                                                                                                                        echo "checked";
                                                                                                                                                                    } ?>>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Maksimal 2 orang/kamar
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="peraturan_kos[]" value="Maksimal 3 orang/kamar" id="flexCheckChecked" <?php if (strpos($edit['peraturan_kos'], "Maksimal 3 orang/kamar") !== false) {
                                                                                                                                                                        echo "checked";
                                                                                                                                                                    } ?>>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Maksimal 3 orang/kamar
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="peraturan_kos[]" value="Maksimal 4 orang/kamar" id="flexCheckChecked" <?php if (strpos($edit['peraturan_kos'], "Maksimal 4 orang/kamar") !== false) {
                                                                                                                                                                        echo "checked";
                                                                                                                                                                    } ?>>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Maksimal 4 orang/kamar
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="peraturan_kos[]" value="Tamu bebas berkunjung" id="flexCheckChecked" <?php if (strpos($edit['peraturan_kos'], "Tamu bebas berkunjung") !== false) {
                                                                                                                                                                        echo "checked";
                                                                                                                                                                    } ?>>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Tamu bebas berkunjung
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="peraturan_kos[]" value="Tamu boleh menginap" id="flexCheckChecked" <?php if (strpos($edit['peraturan_kos'], "Tamu bebas menginap") !== false) {
                                                                                                                                                                        echo "checked";
                                                                                                                                                                    } ?>>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Tamu boleh menginap
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="peraturan_kos[]" value="Termasuk listrik" id="flexCheckChecked" <?php if (strpos($edit['peraturan_kos'], "Termasuk listrik") !== false) {
                                                                                                                                                                    echo "checked";
                                                                                                                                                                } ?>>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Termasuk listrik
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="peraturan_kos[]" value="Wajib sertakan KTP saat pengajuan sewa" id="flexCheckChecked" <?php if (strpos($edit['peraturan_kos'], "Wajib sertakan KTP saat pengajuan sewa") !== false) {
                                                                                                                                                                                        echo "checked";
                                                                                                                                                                                    } ?>>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Wajib sertakan KTP saat pengajuan sewa
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="peraturan_kos[]" value="Wajib sertakan kartu keluarga saat pengajuan sewa" id="flexCheckChecked" <?php if (strpos($edit['peraturan_kos'], "Wajib sertakan kartu keluarga saat pengajuan sewa") !== false) {
                                                                                                                                                                                                    echo "checked";
                                                                                                                                                                                                } ?>>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Wajib sertakan kartu keluarga saat pengajuan sewa
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group mb-3 align-items-center bg-light">
                                <div class="col-4 text-end">
                                    <label for="name"><strong>Kapan kos ini dibangun?</strong></label>
                                </div>
                                <div class="col-8">
                                    <input type="number" min="1950" name="tahun_pembangunan_kos" class="form-control w-50" value="<?= $edit['tahun_pembangunan_kos']; ?>" required>
                                </div>
                            </div>
                            <div class=" row form-group mb-3 align-items-center bg-light">
                                <div class="col-4 text-end">
                                    <label for="name"><strong>Alamat Kos</strong></label>
                                </div>
                                <div class="col-8">
                                    <textarea class="form-control w-50" name="alamat_kos" required><?= $edit['alamat_kos']; ?></textarea>
                                </div>
                            </div>
                            <div class="row form-group mb-3 align-items-center bg-light">
                                <div class="col-4 text-end">
                                    <label for="name"><strong>Provinsi</strong></label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="provinsi_kos" class=" form-control w-50" value="<?= $edit['provinsi_kos']; ?>" required>
                                </div>
                            </div>
                            <div class=" row form-group mb-3 align-items-center bg-light">
                                <div class="col-4 text-end">
                                    <label for="name"><strong>Kabupaten/Kota</strong></label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="kab_kota_kos" class="form-control w-50" value="<?= $edit['kab_kota_kos']; ?>" required>
                                </div>
                            </div>
                            <div class="row form-group mb-3 align-items-center bg-light">
                                <div class="col-4 text-end">
                                    <label for="name"><strong>Kecamatan</strong></label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="kec_kos" class="form-control w-50" value="<?= $edit['kec_kos']; ?>" required>
                                </div>
                            </div>
                            <div class="row form-group mb-3 align-items-center bg-light">
                                <div class="col-4 text-end">
                                    <label for="name"><strong>Latitude</strong></label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="latitude" class=" form-control w-50" value="<?= $edit['latitude']; ?>" required>
                                </div>
                            </div>
                            <div class="row form-group mb-3 align-items-center bg-light">
                                <div class="col-4 text-end">
                                    <label for="name"><strong>Longitude</strong></label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="longitude" class="form-control w-50" value="<?= $edit['longitude']; ?>" required>
                                </div>
                            </div>
                            <div class="row form-group mb-3 align-items-center bg-light">
                                <div class="col-4 text-end">
                                    <label for="name"><strong>Embed Map</strong></label>
                                    <a href="https://www.google.com/maps">Silahkan menuju Google Maps, Cari Embed Map Lokasi Anda</a>
                                </div>
                                <div class="col-8">
                                    <textarea class="form-control w-50" name="embed_map" required><?= $edit['embed_map']; ?></textarea>
                                </div>
                            </div>
                            <div class="row form-group mb-3 align-items-center bg-light">
                                <div class="col-4 text-end">
                                    <label for="name"><strong>Foto Kos</strong></label>
                                </div>
                                <div class="col-8">
                                    <input type="file" class="input-image" accept="image/*" name="gambar_kos_depan" class=" form-control w-50"> (Tampak Depan) <br>
                                    <input type="file" class="input-image" accept="image/*" name="gambar_kos_dalam" class=" form-control w-50"> (Tampak Dalam)
                                </div>
                            </div>
                            <div class="row form-group mb-3 align-items-center bg-light">
                                <div class="col-4 text-end">
                                    <label for="name"><strong>Foto Kamar</strong></label>
                                </div>
                                <div class="col-8">
                                    <input type="file" class="input-image" name="gambar_kamar_depan" class=" form-control w-50"> (Kamar depan) <br>
                                    <input type="file" class="input-image" name="gambar_kamar_dalam" class=" form-control w-50"> (Kamar dalam) <br>
                                    <input type="file" class="input-image" name="gambar_kamar_mandi" class=" form-control w-50"> (Kamar mandi)

                                </div>
                            </div>

                        <?php } ?>

                        <?php while ($ubah = mysqli_fetch_array($query)) { ?>
                            <div class="row form-group mb-3 bg-light">
                                <div class="col-4 text-end">
                                    <label for="name"><strong>Fasilitas Umum</strong></label>
                                </div>
                                <div class="col-8">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="fasilitas_umum[]" value=" CCTV" id="flexCheckChecked" <?php if (strpos($ubah['fasilitas_umum'], "CCTV") !== false) {
                                                                                                                                                        echo "checked";
                                                                                                                                                    } ?>>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            CCTV
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="fasilitas_umum[]" value="Kulkas" id="flexCheckDefault" <?php if (strpos($ubah['fasilitas_umum'], "Kulkas") !== false) {
                                                                                                                                                            echo "checked";
                                                                                                                                                        } ?>>
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Kulkas
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="fasilitas_umum[]" value="Dispenser" id="flexCheckChecked" <?php if (strpos($ubah['fasilitas_umum'], "Dispenser") !== false) {
                                                                                                                                                            echo "checked";
                                                                                                                                                        } ?>>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Dispenser
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="fasilitas_umum[]" value="Dapur" id="flexCheckChecked" <?php if (strpos($ubah['fasilitas_umum'], "Dapur") !== false) {
                                                                                                                                                        echo "checked";
                                                                                                                                                    } ?>>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Dapur
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="fasilitas_umum[]" value="K. Mandi Luar" id="flexCheckChecked" <?php if (strpos($ubah['fasilitas_umum'], "K. Mandi Luar") !== false) {
                                                                                                                                                                echo "checked";
                                                                                                                                                            } ?>>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            K. Mandi Luar
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="fasilitas_umum[]" value="Televisi" id="flexCheckChecked" <?php if (strpos($ubah['fasilitas_umum'], "Televisi") !== false) {
                                                                                                                                                            echo "checked";
                                                                                                                                                        } ?>>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            TV
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="fasilitas_umum[]" value="Laundry" id="flexCheckChecked" <?php if (strpos($ubah['fasilitas_umum'], "Laundry") !== false) {
                                                                                                                                                            echo "checked";
                                                                                                                                                        } ?>>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Laundry
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="fasilitas_umum[]" value="WIFI" id="flexCheckChecked" <?php if (strpos($ubah['fasilitas_umum'], "WIFI") !== false) {
                                                                                                                                                        echo "checked";
                                                                                                                                                    } ?>>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            WIFI
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="fasilitas_umum[]" value="Mesin Cuci" id="flexCheckChecked" <?php if (strpos($ubah['fasilitas_umum'], "Mesin Cuci") !== false) {
                                                                                                                                                                echo "checked";
                                                                                                                                                            } ?>>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Mesin Cuci
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="fasilitas_umum[]" value="Penjaga Kos" id="flexCheckChecked" <?php if (strpos($ubah['fasilitas_umum'], "Penjaga Kos") !== false) {
                                                                                                                                                                echo "checked";
                                                                                                                                                            } ?>>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Penjaga Kos
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="fasilitas_umum[]" value="Parkir Mobil" id="flexCheckChecked" <?php if (strpos($ubah['fasilitas_umum'], "Parkir Mobil") !== false) {
                                                                                                                                                                echo "checked";
                                                                                                                                                            } ?>>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Parkir Mobil
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="fasilitas_umum[]" value="Parkir Motor" id="flexCheckChecked" <?php if (strpos($ubah['fasilitas_umum'], "Parkir Motor") !== false) {
                                                                                                                                                                echo "checked";
                                                                                                                                                            } ?>>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Parkir Motor
                                        </label>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <?php while ($update = mysqli_fetch_array($queryupdate)) { ?>
                            <div class="row form-group mb-3 bg-light">
                                <div class="col-4 text-end">
                                    <label for="name"><strong>Fasilitas Kamar</strong></label>
                                </div>
                                <div class="col-8">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]" value="AC" id="flexCheckDefault" <?php if (strpos($update['fasilitas_kamar'], "AC") !== false) {
                                                                                                                                                        echo "checked";
                                                                                                                                                    } ?>>
                                        <label class="form-check-label" for="flexCheckDefault">
                                            AC
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]" value="Kasur" id="flexCheckChecked" <?php if (strpos($update['fasilitas_kamar'], "Kasur") !== false) {
                                                                                                                                                            echo "checked";
                                                                                                                                                        } ?>>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Kasur
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]" value="Kipas Angin" id="flexCheckChecked" <?php if (strpos($update['fasilitas_kamar'], "Kipas Angin") !== false) {
                                                                                                                                                                echo "checked";
                                                                                                                                                            } ?>>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Kipas Angin
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]" value="Kursi" id="flexCheckChecked" <?php if (strpos($update['fasilitas_kamar'], "Kursi") !== false) {
                                                                                                                                                            echo "checked";
                                                                                                                                                        } ?>>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Kursi
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]" value="Lemari Baju" id="flexCheckChecked" <?php if (strpos($update['fasilitas_kamar'], "Lemari Baju") !== false) {
                                                                                                                                                                echo "checked";
                                                                                                                                                            } ?>>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Lemari Baju
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]" value="Meja" id="flexCheckChecked" <?php if (strpos($update['fasilitas_kamar'], "Meja") !== false) {
                                                                                                                                                        echo "checked";
                                                                                                                                                    } ?>>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Meja
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]" value="TV" id="flexCheckChecked" <?php if (strpos($update['fasilitas_kamar'], "TV") !== false) {
                                                                                                                                                        echo "checked";
                                                                                                                                                    } ?>>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            TV
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]" value="K. Mandi Dalam" id="flexCheckChecked" <?php if (strpos($update['fasilitas_kamar'], "K. Mandi Dalam") !== false) {
                                                                                                                                                                    echo "checked";
                                                                                                                                                                } ?>>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            K. Mandi Dalam
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]" value="K. Mandi Luar" id="flexCheckChecked" <?php if (strpos($update['fasilitas_kamar'], "K. Mandi Luar") !== false) {
                                                                                                                                                                    echo "checked";
                                                                                                                                                                } ?>>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            K. Mandi Luar
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]" value="Kloset Duduk" id="flexCheckChecked" <?php if (strpos($update['fasilitas_kamar'], "Kloset Duduk") !== false) {
                                                                                                                                                                echo "checked";
                                                                                                                                                            } ?>>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Kloset Duduk
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]" value="Kloset Jongkok" id="flexCheckChecked" <?php if (strpos($update['fasilitas_kamar'], "Kloset Duduk") !== false) {
                                                                                                                                                                    echo "checked";
                                                                                                                                                                } ?>>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Kloset Jongkok
                                        </label>
                                    </div>
                                </div>
                            <?php } ?>
                            </div>
                            <?php while ($edit = mysqli_fetch_array($query1)) { ?>
                                <div class="row form-group mb-3 bg-light">
                                    <div class="col-4 text-end">
                                        <label for="name"><strong>Ukuran kamar</strong></label>
                                    </div>
                                    <div class="col-8 d-flex">
                                        <input type="number" min="0" max "10 " class="form-control w-25" name="panjang_kamar" value="<?= $edit['panjang_kamar']; ?>" required> x
                                        <input type="number" min="0" max "10 " class="form-control w-25" name="lebar_kamar" value="<?= $edit['lebar_kamar']; ?>" required>
                                    </div>
                                </div>
                                <div class=" row form-group mb-3 bg-light">
                                    <div class="col-4 text-end">
                                        <label for="name"><strong>Jumlah total kamar</strong></label>
                                    </div>
                                    <div class="col-8">
                                        <input type="number" min="0" max="500" name="jumlah_kamar" value="<?= $edit['jumlah_kamar']; ?>" class=" form-control w-50" required>
                                    </div>
                                </div>
                                <div class="row form-group mb-3 bg-light">
                                    <div class="col-4 text-end">
                                        <label for="name"><strong>Jumlah kamar tersedia</strong></label>
                                    </div>
                                    <div class="col-8">
                                        <input type="number" min="0" max="500" name="sisa_kamar" value="<?= $edit['sisa_kamar']; ?>" class="form-control w-50" required>
                                    </div>
                                </div>
                                <div class="row form-group mb-3 bg-light">
                                    <div class="col-4 text-end">
                                        <label for="listrik"><strong>Termasuk listrik</strong></label>
                                    </div>
                                    <div class="col-8">
                                        <select class="form-select w-50" aria-label="Default select example" name="listrik">
                                            <?php
                                            foreach ($listrik as $l) {
                                                echo "<option value = '$l'";
                                                echo $edit['listrik'] == $l ? 'selected="selected"' : '';
                                                echo ">$l</option>";
                                            }
                                            ?>
                                            <option <?php if ($edit['listrik'] == "Termasuk") {
                                                        echo "selected";
                                                    } ?>>Termasuk</option>
                                            <option <?php if ($edit['listrik'] == "Tidak Termasuk") {
                                                        echo "selected";
                                                    } ?>>Tidak Termasuk</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group mb-3 bg-light">
                                    <div class="col-4 text-end">
                                        <label for="name"><strong>Harga per bulan (Rp)</strong></label>
                                    </div>
                                    <div class="col-8">
                                        <input type="number" min="0" name="harga_bulan" value="<?= $edit['harga_bulan']; ?>" class=" form-control w-50" required>
                                    </div>
                                </div>
                                <div class="row form-group mb-3 align-items-center bg-light">
                                    <div class="col-4 text-end">
                                        <label for="name"><strong>Nama Pemilik Rekening</strong></label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" class="form-control w-50" id="nameowner" name="nama_pemilik_rekening" value="<?= $edit['nama_pemilik_rekening']; ?>" required>
                                    </div>
                                </div>
                                <div class="row form-group mb-3 align-items-center bg-light">
                                    <div class="col-4 text-end">
                                        <label for="name"><strong>Pilih Bank</strong></label>
                                    </div>
                                    <div class="col-8">
                                        <select class="form-select w-50" name="nama_bank" aria-label=" Default select example">
                                            <?php
                                            foreach ($nama_bank as $b) {
                                                echo "<option value = '$b'";
                                                echo $edit['nama_bank'] == $b ? 'selected="selected"' : '';
                                                echo ">$b</option>";
                                            }
                                            ?>
                                            <option selected>----Nama Bank----</option>
                                            <option <?php if ($edit['nama_bank'] == "Bank BNI") {
                                                        echo "selected";
                                                    } ?>>Bank BNI</option>
                                            <option <?php if ($edit['nama_bank'] == "Bank BRI") {
                                                        echo "selected";
                                                    } ?>>Bank BRI</option>
                                            <option <?php if ($edit['nama_bank'] == "BCA") {
                                                        echo "selected";
                                                    } ?>>BCA</option>
                                            <option <?php if ($edit['nama_bank'] == "Mandiri") {
                                                        echo "selected";
                                                    } ?>>Mandiri</option>
                                            <option <?php if ($edit['nama_bank'] == "Dana") {
                                                        echo "selected";
                                                    } ?>>Dana</option>
                                            <option <?php if ($edit['nama_bank'] == "OVO") {
                                                        echo "selected";
                                                    } ?>>OVO</option>
                                            <option <?php if ($edit['nama_bank'] == "Shopeepay") {
                                                        echo "selected";
                                                    } ?>>Shopeepay</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group mb-3 align-items-center bg-light">
                                    <div class="col-4 text-end">
                                        <label for="name"><strong>Nomor Rekening</strong></label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" class="form-control w-50" id="norek" name="no_rek" value="<?= $edit['no_rek']; ?>" required>
                                    </div>
                                </div>
                                <button class=" btn btn-outline-danger btn-lg" type="reset">Batal</button>
                                <button class="btn btn-outline-secondary btn-lg" type="submit" name="submit">Simpan</button>
                        </form>
                    <?php } ?>
                </div>
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

</html>