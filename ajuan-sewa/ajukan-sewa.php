<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
            <form action="" method="post">
              <div class="input-group mb-3">
                <span class="input-group-text" id="kebersihan">Nama Penyewa</span>
                <input type="text" class="form-control w-50" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="kebersihan">No. Hp</span>
                <input type="text" class="form-control w-50" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="kebersihan">Jenis Kelamin</span>
                <input type="text" class="form-control w-50" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="kebersihan">Pekerjaan</span>
                <input type="text" class="form-control w-50" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>
              <h5>Jumlah Penyewa</h5>
              <div class="input-group mb-3">
                <span class="input-group-text" id="kebersihan">Jumlah</span>
                <input type="number" class="form-control w-50" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>
              <h5>Dokumen persyaratan </h5>
              <div class="input-group mb-3">
                <div class="row mx-3">
                  <div class="col-lg-4">
                    <p class="fs-6 fw-bold">Foto KTP</p>
                  </div>
                  <div class="col mx-3">
                    <input type="file" class="form-control" id="fotoKTP">
                  </div>
                </div>
                <div class="row mx-3">
                  <div class="col-lg-4">
                    <p for="fotoKTPDiri" class="fs-6 fw-bold">Foto KTP & Diri</p>
                  </div>
                  <div class="col mx-3">
                    <input type="file" class="form-control" id="fotoKTPDiri">
                  </div>
                </div>
                <div class="row mx-3">
                  <div class="col-lg-4">
                    <p for="fotoKK" class="fs-6 fw-bold">Foto Kartu Keluarga</p>
                  </div>
                  <div class="col mx-3">
                    <input type="file" class="form-control" id="fotoKK">
                  </div>
                </div>
              </div>
              <h5>Durasi Ngekos (bulan)</h5>
              <div class="input-group mb-3">
                <span class="input-group-text" id="Durasi">Durasi</span>
                <input type="number" class="form-control w-50" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>
            </form>
            <h5>Tanggal Mulai Ngekos</h5>
            <div class="input-group mb-3">
              <span class="input-group-text" id="Durasi">Tanggal Mulai</span>
              <input type="date" class="form-control w-50" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            </form>
            <div class="d-grid gap-2">
              <a class="btn btn-success btn-lg my-3" href="pembayaran.php">Ajukan Sewa</a>
            </div>
          </div>
        </div>
      </div>
      <?php include 'sidebar-kiri.php' ?>
    </div>
  </div>
</body>

</html>