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
                        Kos Saya
                    </div>
                    <div class="user-kost">
                        <p class="user-kost-empty__title bg-c-text--heading-4 bg-c-text">Anda belum memiliki kos</p>
                        <p class="user-kost-empty__description bg-c-text--body-2 bg-c-text">
                            Yuk, sewa di Mamikos atau masukkan kode dari pemilik kos untuk aktifkan halaman ini! Coba cara ngekos modern dengan manfaat berikut ini.
                        </p>
                        <div class="d-grid gap-2 col-6 mx-auto my-3">
                            <a type="button" href="" class="btn btn-outline-secondary">Mulai dan cari kos</a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="asssets/js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>