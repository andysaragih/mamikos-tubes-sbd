<?php
require_once '../function.php';
$id = $_GET['id'];
$show = "SELECT a.*, GROUP_CONCAT(b.peraturan_kos) AS peraturan_kos FROM kos a INNER JOIN peraturan_kos b ON a.id_kos = b.id_kos WHERE a.id_kos = '$id'";
$sql = mysqli_query($conn, $show);

if (isset($_POST['ajukan'])) {
  ajukan_sewa($_POST);
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
            Pengajuan Sewa
          </div>
          <div class="user-kost">
            <h5>Informasi Penyewa</h5>
            <form method="POST" enctype="multipart/form-data">
              <div class="input-group mb-3">
                <span class="input-group-text" id="kebersihan">Nama Penyewa</span>
                <input type="text" name="nama" value="<?= $_SESSION['nama'] ?>" class="form-control w-50" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" disabled>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="kebersihan">No. Hp</span>
                <input type="text" name="nohp" value="<?= $_SESSION['nohp'] ?>" class="form-control w-50" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" disabled>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="kebersihan">Jenis Kelamin</span>
                <input type="text" class="form-control w-50" value="<?= $_SESSION['jenis_kelamin'] ?>" aria-label=" Sizing example input" aria-describedby="inputGroup-sizing-default" disabled>
              </div>
              <?php while ($data = mysqli_fetch_array($sql)) { ?>
                <h5>Jumlah Penyewa</h5>
                <div class="input-group mb-3">
                  <span class="input-group-text" id="kebersihan">Jumlah</span>
                  <input type="number" name="jumlah_penyewa" min="0" class=" form-control w-50" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" <?php if (strpos($data['peraturan_kos'], "Maksimal 1 orang/kamar") !== false) {
                                                                                                                                                                                  echo 'max="1"';
                                                                                                                                                                                } else if (strpos($data['peraturan_kos'], "Maksimal 2 orang/kamar") !== false) {
                                                                                                                                                                                  echo 'max="2"';
                                                                                                                                                                                } else if (strpos($data['peraturan_kos'], "Maksimal 3 orang/kamar") !== false) {
                                                                                                                                                                                  echo 'max="3"';
                                                                                                                                                                                } else if (strpos($data['peraturan_kos'], "Maksimal 4 orang/kamar") !== false) {
                                                                                                                                                                                  echo 'max="4"';
                                                                                                                                                                                } ?>>
                </div>
                <h5>Dokumen persyaratan </h5>
                <div class="input-group mb-3">
                  <div class="row mx-3">
                    <div class="col-lg-4">
                      <p class="fs-6 fw-bold">Foto KTP</p>
                    </div>
                    <div class="col mx-3">
                      <input type="file" class="form-control" name="foto_ktp" <?php if (strpos($data['peraturan_kos'], "Wajib sertakan KTP saat pengajuan sewa") !== false) {
                                                                                echo 'required';
                                                                              } ?>>
                    </div>
                  </div>
                  <div class="row mx-3">
                    <div class="col-lg-4">
                      <p for="fotoKTPDiri" class="fs-6 fw-bold">Foto KTP & Diri</p>
                    </div>
                    <div class="col mx-3">
                      <input type="file" class="form-control" name="foto_ktp_diri" <?php if (strpos($data['peraturan_kos'], "Wajib sertakan KTP saat pengajuan sewa") !== false) {
                                                                                      echo 'required';
                                                                                    } ?>>
                    </div>
                  </div>
                  <div class="row mx-3">
                    <div class="col-lg-4">
                      <p for="fotoKK" class="fs-6 fw-bold">Foto Kartu Keluarga</p>
                    </div>
                    <div class="col mx-3">
                      <input type="file" class="form-control" name="foto_kk" <?php if (strpos($data['peraturan_kos'], "Wajib sertakan kartu keluarga saat pengajuan sewa") !== false) {
                                                                                echo 'required';
                                                                              } ?>>
                    </div>
                  </div>
                </div>
              <?php } ?>
              <h5>Durasi Ngekos (bulan)</h5>
              <div class="input-group mb-3">
                <span class="input-group-text" id="Durasi">Durasi</span>
                <input type="number" min="0" name="durasi_sewa" class="form-control w-50" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>
              <h5>Tanggal Mulai Ngekos</h5>
              <div class="input-group mb-3">
                <span class="input-group-text" id="Durasi">Tanggal Mulai</span>
                <input type="date" name="tanggal_masuk" class="form-control w-50" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>
              <div class="d-grid gap-2">
                <button name="ajukan" type="submit" class=" btn btn-success btn-lg my-3">Ajukan Sewa</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <?php
      $id = $_GET['id'];
      $tampil = "SELECT * FROM kos WHERE id_kos = '$id'";
      $sql = mysqli_query($conn, $tampil);
      ?>
      <?php while ($data = mysqli_fetch_array($sql)) { ?>
        <div class=" col-lg-4 col-md-4 col-sm-5 col-12">
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
                      <p class="fs-6 fw-bold">Biaya Sewa</p>
                      <p class="fs-5 fw-bold">Rp<?= $data['harga_bulan'] ?>/bulan</p>
                      <div class="d-grid gap-2">
                        <a class="btn btn-outline-secondary" href=" ../kos/detail-kos.php?id=<?= $id ?>">Detail Kos</a>
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
  </div>
</body>

</html>