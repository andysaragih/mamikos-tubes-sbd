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
  <link rel="stylesheet" href="assets/css/profile.css">
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
              <div class="row form-group mb-3 align-items-center">
                <div class="col-4 text-end">
                  <label for="name">Nama Lengkap*</label>
                </div>
                <div class="col-8">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap" required>
                </div>
              </div>
              <div class="row form-group mb-4 align-items-center">
                <div class="col-4 text-end">
                  <label>Jenis Kelamin*</label>
                </div>
                <div class="col-8">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin1" value="lakilaki">
                    <label class="form-check-label" for="jeniskelamin1">Laki-Laki</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin2" value="perempuan">
                    <label class="form-check-label" for="jeniskelamin2">Perempuan</label>
                  </div>
                </div>
              </div>
              <div class="row form-group mb-3 align-items-center">
                <div class="col-4 text-end">
                  <label for="date">Tanggal Lahir*</label>
                </div>
                <div class="col-8">
                  <input type="date" class="form-control" id="date" name="date" required>
                </div>
              </div>
              <div class="row form-group mb-3 align-items-center">
                <div class="col-4 text-end">
                  <label for="kota">Kota Asal</label>
                </div>
                <div class="col-8">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Kota Asal" required>
                </div>
              </div>
              <div class="row form-group mb-3 align-items-center">
                <div class="col-4 text-end">
                  <label for="kota">Status Perkawinan</label>
                </div>
                <div class="col-8">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Status Perkawinan</option>
                    <option value="belum kawin">Belum Kawin</option>
                    <option value="kawin">Kawin</option>
                    <option value="kawin memiliki anak">Kawin memiliki Anak</option>
                  </select>
                </div>
              </div>
              <div class="row form-group mb-3 align-items-center">
                <div class="col-4 text-end">
                  <label for="kota">Pendidikan Terakhir</label>
                </div>
                <div class="col-8">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Pendidikan Terakhir</option>
                    <option value="SD/MI">SD/MI</option>
                    <option value="SMP/MTS">SMP/MTS</option>
                    <option value="SMA/MA">SMA/MA</option>
                    <option value="SMK/MAK">SMA/MAK</option>
                    <option value="Diploma">Diploma</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                  </select>
                </div>
              </div>
              <div class="row form-group mb-3 align-items-center">
                <div class="col-4 text-end">
                  <label for="kota">Nomor Handphone Darurat</label>
                </div>
                <div class="col-8">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Nomor Handphone Darurat" required>
                </div>
              </div>
              <div class="row form-group mb-3 align-items-center">
                <div class="col-4 text-end">
                  <label for="kota">Profesi</label>
                </div>
                <div class="col-8">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Profesi" required>
                </div>
              </div>
              <div class="row form-group mb-3 align-items-center">
                <div class="col-4 text-end">
                  <label for="kota">Photo Profile</label>
                </div>
                <div class="col-8">
                  <input type="file" class="form-control" id="name" name="name" required>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="btn btn-secondary btn-lg">Simpan</button>
        <button class="btn btn-danger btn-lg">Batal</button>
      </div>
    </div>
  </div>
</body>

</html>