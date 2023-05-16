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
                        Pembayaran
                    </div>
                    <div class="user-kost">
                        <h5>Informasi Penyewa</h5>
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="kebersihan">Nama Pemilik</span>
                                <input type="text" class="form-control w-50" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <h5>Metode pembayaran</h5>
                            <select class="form-select mb-3" aria-label="Default select example">
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
                                <span class="input-group-text" id="kebersihan">No. Rekening</span>
                                <input type="text" class="form-control w-50" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </form>
                        <div class="d-grid gap-2">
                            <a class="btn btn-success btn-lg my-3" href="berhasil.php">Lakukan Pembayaran</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-5 col-12">
                <div>
                    <div class="row">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="..." class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Nama Kos</h5>
                                        <p class="card-text">Jalan Mansyur NANANANANA</p>
                                        <hr>
                                        <p class="fs-6 fw-bold">Biaya Sewa</p>
                                        <p class="fs-5 fw-bold">Rp17000000</p>
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-outline-secondary">Detail Kos</button>
                                        </div>
                                    </div>
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