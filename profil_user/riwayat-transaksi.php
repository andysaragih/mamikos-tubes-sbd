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
    <link rel="stylesheet" href="assets/css/profiles.css">
</head>

<body>
    <?php include 'navbar.php' ?>

    <div class="container m-auto" style="padding-left: 15px; padding-right: 15px; padding-top: 20px; padding-bottom: 20px;">
        <div class="row">
            <?php include 'sidebar.php' ?>
            <div class="col-lg-8 col-md-8 col-sm-7 col-12">
                <div class="bg-c-card bg-c-card--md bg-c-card--lined bg-c-card--light">
                    <div class="user-kost-main__title bg-c-text--heading-5 bg-c-text">
                        Riwayat Transaksi
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="..." class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Nama Kos</h5>
                                    <p class="card-text mb-0">Pembayaran</p>
                                    <p class="card-text">Tanggal Pembayaran</p>
                                    <p class="card-text my-0"><small class="text-muted">Check-in : 24 Mei</small></p>
                                    <p class="card-text mt-0"><small class="text-muted">Selesai Sewa : 24 Juni </small></p>
                                    <button class="btn btn-outline-secondary">Detail</button>
                                    <button class="btn btn-outline-success">Review</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Ambil semua elemen <a> dalam menu
        const menuLinks = document.querySelectorAll('.menu-profile a');

        // Loop melalui setiap elemen <a>
        menuLinks.forEach(function(link) {
            // Tambahkan event listener untuk saat di-klik
            link.addEventListener('click', function() {
                // Hapus kelas "active" dari semua elemen <a>
                menuLinks.forEach(function(link) {
                    link.classList.remove('active');
                });
                // Tambahkan kelas "active" ke elemen <a> yang diklik
                this.classList.add('active');
            });
        });
    </script>
</body>

</html>