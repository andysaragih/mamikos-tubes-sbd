<?php
require_once '../function.php';

$nohp = $_GET['no_hp_user'];
$tampil = "SELECT * FROM user where no_hp_user = '$nohp'";
$queryedit = mysqli_query($conn, $tampil);

if (isset($_POST['submit'])) {
  edit_profile($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
  <script src="https://kit.fontawesome.com/d19e940ee3.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/profiles.css">
</head>

<body>
  <?php include 'navbar.php' ?>
  <div class="container m-auto" style="padding-top: 20px; padding-bottom: 20px;">
    <div class="row">
      <div class="col-12 col-lg-12 col-md-12 col-sm-12">
        <div>
          <div class="card mb-3">
            <h5 class="card-header">Data Pribadi</h5>
            <div class="card-body">
              <?php while ($edit = mysqli_fetch_array($queryedit)) {
              ?>
                <form method="POST" enctype="multipart/form-data">
                  <div class="row form-group mb-3 align-items-center">
                    <div class="col-4 text-end">
                      <label for="name">Nama Lengkap*</label>
                    </div>
                    <div class="col-8">
                      <input type="text" class="form-control" id="name" name="nama" placeholder="Nama Lengkap" value="<?= $edit['nama_user'] ?>" required>
                    </div>
                  </div>
                  <div class="row form-group mb-4 align-items-center">
                    <div class="col-4 text-end">
                      <label>Jenis Kelamin*</label>
                    </div>
                    <div class="col-8">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin1" value="Laki-Laki" <?php if ($edit['jenis_kelamin'] == "Laki-Laki") {
                                                                                                                                echo "checked";
                                                                                                                              } ?>>
                        <label class="form-check-label" for="jeniskelamin1">Laki-Laki</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin2" value="Perempuan" <?php if ($edit['jenis_kelamin'] == "Perempuan") {
                                                                                                                                echo "checked";
                                                                                                                              } ?>>
                        <label class="form-check-label" for="jeniskelamin2">Perempuan</label>
                      </div>
                    </div>
                  </div>
                  <div class="row form-group mb-3 align-items-center">
                    <div class="col-4 text-end">
                      <label for="date">Tanggal Lahir*</label>
                    </div>
                    <div class="col-8">
                      <input type="date" class="form-control" id="date" name="tanggal" value="<?= $edit['tanggal_lahir'] ?>" required>
                    </div>
                  </div>
                  <div class="row form-group mb-3 align-items-center">
                    <div class="col-4 text-end">
                      <label for="kota">Kota Asal</label>
                    </div>
                    <div class="col-8">
                      <input type="text" class="form-control" id="kota" name="kota" placeholder="Kota Asal" value="<?= $edit['kota_asal'] ?>" required>
                    </div>
                  </div>
                  <div class="row form-group mb-3 align-items-center">
                    <div class="col-4 text-end">
                      <label for="kota">Pendidikan Terakhir</label>
                    </div>
                    <div class="col-8">
                      <select class="form-select" aria-label="Default select example" name="pendidikan">
                        <option selected>Pendidikan Terakhir</option>
                        <?php
                        foreach ($pendidikan as $p) {
                          echo "<option value = '$p'";
                          echo $edit['pendidikan_terakhir'] == $p ? 'selected="selected"' : '';
                          echo ">$g</option>";
                        }
                        ?>
                        <option <?php if ($edit['pendidikan_terakhir'] == "SD/MI") {
                                  echo "selected";
                                } ?>>SD/MI</option>
                        <option <?php if ($edit['pendidikan_terakhir'] == "SMP/MTS") {
                                  echo "selected";
                                } ?>>SMP/MTS</option>
                        <option <?php if ($edit['pendidikan_terakhir'] == "SMA/MA") {
                                  echo "selected";
                                } ?>>SMA/MA</option>
                        <option <?php if ($edit['pendidikan_terakhir'] == "SMK/MAK") {
                                  echo "selected";
                                } ?>>SMA/MAK</option>
                        <option <?php if ($edit['pendidikan_terakhir'] == "Diploma") {
                                  echo "selected";
                                } ?>>Diploma</option>
                        <option <?php if ($edit['pendidikan_terakhir'] == "S1") {
                                  echo "selected";
                                } ?>>S1</option>
                        <option <?php if ($edit['pendidikan_terakhir'] == "S2") {
                                  echo "selected";
                                } ?>>S2</option>
                        <option<?php if ($edit['pendidikan_terakhir'] == "S3") {
                                  echo "selected";
                                } ?>>S3</option>
                      </select>
                    </div>
                  </div>
                  <div class="row form-group mb-3 align-items-center">
                    <div class="col-4 text-end">
                      <label for="kota">Nomor Handphone Darurat</label>
                    </div>
                    <div class="col-8">
                      <input type="text" class="form-control" id="no_hp_darurat" name="no_hp_darurat" placeholder="Nomor Handphone Darurat" value="<?= $edit['no_hp_darurat'] ?>" required>
                    </div>
                  </div>
                  <div class="row form-group mb-3 align-items-center">
                    <div class="col-4 text-end">
                      <label for="kota">Profesi</label>
                    </div>
                    <div class="col-8">
                      <input type="text" class="form-control" id="profesi" name="profesi" placeholder="Profesi" value="<?= $edit['profesi'] ?>" required>
                    </div>
                  </div>
                  <div class="row form-group mb-3 align-items-center">
                    <div class="col-4 text-end">
                      <label for="kota">Photo Profile</label>
                    </div>
                    <div class="col-8">
                      <input type="file" class="form-control" id="gbr" name="gambar">
                    </div>
                  </div>
            </div>
          </div>
        </div>
        <button class="btn btn-secondary btn-lg" type="submit" name="submit">Simpan</button>
        <button class="btn btn-danger btn-lg" type="reset">Batal</button>
        </form>
      <?php } ?>
      </div>
    </div>
  </div>
</body>

</html>