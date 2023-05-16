<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mamikos - Cari, Bayar, & Sewa Kost Impianmu Secara Online</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="../assets/css/mamikos.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap-grid.css">
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
      <a href="/" class="logo-mamikos">
        <img src="https://mamikos.com/assets/logo/svg/logo_mamikos_green_v2.svg" alt="Mamikos Logo" />
      </a>
      <button class="navbar-toggler text-uppercase font-weight-bold text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive" style="margin-left: 25rem;">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link rounded" href="#about">Favorite</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <div class="dropdown">
              <a class="nav-link rounded coba1" data-bs-toggle="dropdown" href="/" class>
                Lainnya&#9662;
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="nav-link" href="#">Pusat Bantuan </a>
                </li>
                <li>
                  <a class="nav-link" href="#">
                    Blog Mamikos
                  </a>
                </li>
                <li>
                  <a class="nav-link" href="#">
                    Syarat dan Ketentuan</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <div class="dropdown">
              <a class="user-profil" data-bs-toggle="dropdown" href="/">
                <img src="https://mamikos.com/general/img/pictures/navbar/ic_profile.svg" alt="">
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="nav-link" href="profil_user/profile.php">Profil </a>
                </li>
                <li>
                  <a class="nav-link" href="#">
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

  <!-- Detail Kos -->
  <div class="container-fluid text-light  py-2">
    <div class="row px-5">
      <div class="col-8 ">
        <img class="rounded" style="height: 520px; width:fit-content;" src="img/Kos1Gambar1.jpg" alt="">
      </div>
      <div class="col-4">
        <div class="img mb-3"> <img class="rounded" style="height:250px;" src="img/Kos1Gambar2.jpg" alt=""> </div>
        <div class="img mb-3"> <img class="rounded" style="height:250px;" src="img/Kos1Gambar3.jpg" alt=""> </div>
      </div>
    </div>
  </div>



  <div class="container">
    <div class="row">
      <div class="col -8">

        <!-- Tombol Foto-->
        <div>
          <div class="row">
            <div class="col-2 ">
              <button class="kotak bg-light">
                <div class="rounded" style="text-align: center;color:black;"><a href="https://mamikos.com/"> <i class="fas fa-image"><br><br>Foto </i></a></div>
              </button>
            </div>
          </div>
        </div>

        <br>

        <!--Logo Singgahsini-->
        <div>
          <img src="img/Singgahsini.png" alt="" srcset="">
        </div>

        <br>

        <!-- Nama Kos-->

        <div>
          <h2>Kost Singgahsini Griya Pastika D2 Tipe A Pogung Kidul Yogyakarta 854SI</h2>
        </div>

        <br>

        <!-- Lokasi, Rating, dan Transaksi Kos-->
        <div style="font-size:x-large;font-weight:500;">
          <ul id="menu">
            <li>
              Kos Putri .
            </li>
            <li>
              <i class="fa-solid fa-location-dot"></i> Kecamatan Mlati .
            </li>
            <li>
              <a style="color: black;" href="http://"><i class="fa-solid fa-star" style="color: #2cb819;"></i> 4.4 (7)</a>
            </li>
            <li>
              <a style="color: black;font-size:smaller;" href="http://"><i class="fa-solid fa-file-invoice-dollar"></i> 25 Transaksi berhasil di kos ini </a>
            </li>
          </ul>
        </div>

        <br>

        <!-- Tombol Simpan, Share, dan Sisa Kamar-->
        <div>
          <ul id="menu" style="font-size:x-large;font-weight:500;">
            <li>
              <i class="fa-solid fa-door-open"></i> Tersisa <span style="color:red;"> 2 kamar</span>
            </li>
            <span class="px-5">
              <li>
                <button class="rounded " style="box-shadow: gray; background:white;font-size:smaller;height:40px;width:130px;"><i class="fa-solid fa-heart"></i> Simpan</button>
              </li>
              <li>
                <button class="rounded" style="box-shadow: gray; background:white;font-size:smaller; height:40px;width:130px;"><i class="fa-solid fa-share-nodes"></i> Bagikan</button>
              </li>
            </span>
          </ul>
        </div>

        <br>

        <!-- Garis-->

        <hr> <br>

        <!-- Pengelola Kos-->
        <div class="row">
          <div class="col-11">
            <h3>Kos dikelola oleh Okta</h3>
            <div style="font-size: larger;">Online 2 hari yang lalu</div>
          </div>
          <div class="col-1">
            <div class="d-flex justify-content-end"><img class="img-profile rounded-circle" style="width:65px;height:65px;" src="img/Okta.jpg" alt=""></div>
          </div>
        </div>
        <br>

        <!-- Garis-->
        <hr><br>

        <!-- Yang kamu dapatkan di Singgahsini-->
        <div>
          <h3><b>Yang kamu dapatkan di Singgahsini</b></h3><br>
          <div class="row">
            <div class="col-2"><img style="width:50px;height:50px;" src="img/free-ikon.png" alt=""></div>
            <div class="col-10">
              <h5>Bebas Biaya Admin</h5>
              <p>Kamu tidak akan dikenakan biaya admin saat melakukan pembayaran di Mamikos.</p>
            </div> <br>
            <div class="col-2"><img style="width:50px;height:50px;" src="img/proservice-ikon.png" alt=""></div>
            <div class="col-10">
              <h5>Pro Service</h5>
              <p>Ditangani secara profesional oleh tim Mamikos. Selama kamu ngekos di sini, ada tim dari Mamikos yang akan merespon saran dan komplainmu.</p>
            </div><br>
            <div class="col-2"><img style="width:50px;height:50px;" src="img/verifiedmamikos-ikon.png" alt=""></div>
            <div class="col-10">
              <h5>Dikelola Mamikos, Terjamin Nyaman</h5>
              <p>Kos ini operasionalnya dikelola dan distandardisasi oleh Mamikos.</p>
            </div><br>
          </div>
        </div>

        <!-- Garis-->

        <hr> <br>

        <!-- Bebas Biaya Admin-->

        <div class="row">
          <div class="col-2"><img style="width:50px;height:50px;" src="img/refund-ikon.png" alt=""></div>
          <div class="col-10">
            <h5>Bisa Refund</h5>
            <p>Sesuai dengan ketentuan dan kebijakan refund yang berlaku di Mamikos.
              <br> <a style="color:black;" href="http://"> Bagaimana Ketentuannya ?</a>
            </p>
          </div>
        </div><br>

        <!-- Garis-->

        <hr> <br>

        <!-- Tipe Kamar-->
        <h3>Spesifikasi tipe kamar</h3> <br>
        <div class="row">
          <div class="col-2"><img style="width:45px;height:40px;" src="img/ukurankamar.png" alt=""></div>
          <div class="col-10">
            <h5> 3 x 4 meter</h5>
          </div> <br>
          <div class="col-2"><img style="width:40px;height:35px;" src="img/listrik.png" alt=""></div>
          <div class="col-10">
            <h5>Termasuk Listrik</h5>
          </div>
        </div><br>

        <hr> <br>

        <!-- Fasilitas Kamar-->
        <h3> Fasilitas Kamar </h3> <br>
        <div class="row">
          <div class="col-2"><img style="width:45px;height:40px;filter:grayscale();" src="img/AC.png" alt=""></div>
          <div class="col-10">
            <h5> AC </h5>
          </div> <br><br>
          <div class="col-2"><img style="width:40px;height:35px;filter:grayscale();" src="img/Kasur.png" alt=""></div>
          <div class="col-10">
            <h5> Kasur</h5>
          </div> <br><br>
          <div class="col-2"><img style="width:45px;height:40px;filter:grayscale();" src="img/TV.png" alt=""></div>
          <div class="col-10">
            <h5> TV</h5>
          </div> <br><br>
          <div class="col-2"><img style="width:40px;height:35px;filter:grayscale();" src="img/Lemaribaju.png" alt=""></div>
          <div class="col-10">
            <h5>Lemari Baju</h5>
          </div> <br><br>
          <div class="col-2"><img style="width:45px;height:40px;filter:grayscale();" src="img/ventilasi.png" alt=""></div>
          <div class="col-10">
            <h5> Ventilasi </h5>
          </div> <br><br>
          <div class="col-2"><img style="width:40px;height:35px;filter:grayscale();" src="img/jendela.png" alt=""></div>
          <div class="col-10">
            <h5>Jendela</h5>
          </div>
        </div><br>

        <hr> <br>

        <!-- Fasilitas Kamar Mandi-->
        <h3> Fasilitas Kamar Mandi</h3><br>
        <div class="row">
          <div class="col-2"><img style="width:45px;height:40px;filter:grayscale();" src="img/k.mandi.dalam.png" alt=""></div>
          <div class="col-10">
            <h5> Kamar Mandi Dalam </h5>
          </div> <br><br>
          <div class="col-2"><img style="width:40px;height:35px;filter:grayscale();" src="img/closetduduk.png" alt=""></div>
          <div class="col-10">
            <h5> Kloset Duduk</h5>
          </div> <br><br>
          <div class="col-2"><img style="width:45px;height:40px;filter:grayscale();" src="img/shower.png" alt=""></div>
          <div class="col-10">
            <h5> Shower </h5>
          </div> <br><br>
          <div class="col-2"><img style="width:40px;height:35px;filter:grayscale();" src="img/airpanas.png" alt=""></div>
          <div class="col-10">
            <h5> Air Panas</h5>
          </div>

        </div><br>

        <hr> <br>

        <!-- Peraturan Khusu Tipe Kamar Ini -->
        <h3> Peraturan Khusus Tipe Kamar Ini </h3> <br>
        <div class="row">
          <div class="col-2"><img style="width:45px;height:40px;filter:grayscale();" src="img/tamu.png" alt=""></div>
          <div class="col-10">
            <h5> Tamu menginap dikenakan biaya </h5>
          </div> <br><br>
          <div class="col-2"><img style="width:40px;height:35px;filter:grayscale();" src="img/maks.png" alt=""></div>
          <div class="col-10">
            <h5> Tipe ini bisa diisi maks. 2 orang/ kamar</h5>
          </div> <br><br>
          <div class="col-2"><img style="width:45px;height:40px;filter:grayscale();" src="img/nopasutri.png" alt=""></div>
          <div class="col-10">
            <h5> Tidak untuk pasutri </h5>
          </div> <br><br>
          <div class="col-2"><img style="width:40px;height:35px;" src="img/noanak.png" alt=""></div>
          <div class="col-10">
            <h5> Tidak boleh bawa anak </h5>
          </div> <br><br>
          <div class="col-2"><img style="width:45px;height:40px;" src="img/deposit.png" alt=""></div>
          <div class="col-10">
            <h5> Deposit <span class="d-flex justify-content-end"> <b> Rp 300.000 </b></span></h5>
          </div> <br><br>
          <div class="col-2"></div>
          <div class="col-10">
            <h5 style="color: red;">Dikembalikan di akhir periode sewa jika tidak ditemukan kerusakan pada kamar. </h5>
          </div> <br><br>
        </div><br>

        <hr> <br>

        <!-- Cerita Pemilik Tentang Kos -->
        <h3> Cerita Pemilik Tentang Kos Ini </h3> <br>
        <div style="text-align: justify;">
          <p style="font-weight: 550;font-family:Verdana, Geneva, Tahoma, sans-serif;">
            Kost ini terdiri dari 2 lantai. Tipe kamar A berada di lantai 2. Semua kamar di tipe ini memiliki jendela yang menghadap secara langsung ke arah koridor.
            <br><br>
            Tersedia juga layanan pembersihan AC secara rutin setiap 3 bulan sekali. Apabila Anda membutuhkan bantuan, Anda bisa menghubungi penjaga yang bertugas dari pukul 08.00-18.00 WIB.
            <br><br>
            Informasi fasilitas : <br>
            Daya listrik : 5500 VA (Pascabayar) <br>
            Sumber Air : PAM. <br>
            Wifi : Indihome 10 Mbps. <br>
            Kapasitas parkir : 10 motor, 4 mobil, dan 10 sepeda.
            <br><br>
            Biaya tambahan: <br>
            Bisa BERDUA +300 Ribu.
            <br><br>
            Kost ini terletak 1 menit dari jalan raya dan akses jalan yang dapat dilalui oleh mobil. Berlokasi 4 menit dari Universitas Gadjah Mada, 10 menit dari Universitas Negeri Yogyakarta, dan 12 menit dari Hartono Mall.
          </p>
        </div><br>


        <hr> <br>

        <!-- Card Tipe kamar Lainnya-->
        <h3> Tipe Kamar Lainnya </h3>
        <p style="font-size: larger; font-weight:400;">Kost Singgahsini Griya Pastika D2</p>

        <div class="row">
          <div class="col-5">
            <div class="card" style="width: 18rem; border-radius: 10px;box-shadow: 10px 1px 10px gray;">
              <img src="img/Kos2Gambar1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p> Kamar Penuh</p>
                <h5 class="card-title"> Tipe B</h5>
                <p class="card-text"> K.Mandi Dalam . WiFi. AC. Kloset Duduk. Kasur.Akses 2 orang</p>
                <div class="row">
                  <div class="col-2"><img style="width:30px;height:30px;" src="img/ukurankamar.png" alt=""></div>
                  <div class="col-10">
                    <h6> 3 x 4.5 meter</h6>
                  </div> <br>
                  <div class="col-2"><img style="width:30px;height:30px;filter:grayscale();" src="img/Kasur.png" alt=""></div>
                  <div class="col-10">
                    <h6> Kasur</h6>
                  </div> <br>
                  <div class="col-2"><img style="width:30px;height:30px;" src="img/listrik.png" alt=""></div>
                  <div class="col-10">
                    <h6> Termasuk listrik </h6>
                  </div> <br>
                  <div class="col-2"><img style="width:30px;height:30px; filter:grayscale();" src="img/maks.png" alt=""></div>
                  <div class="col-10">
                    <h6> Maks.2 orang/kamar </h6>
                  </div> <br>
                  <div class="col-2"><img style="width:30px;height:30px;filter:grayscale();" src="img/nopasutri.png" alt=""></div>
                  <div class="col-10">
                    <h6> Tidak untuk pautri</h6>
                  </div> <br>
                  <div class="col-2"><img style="width:30px;height:30px;" src="img/noanak.png" alt=""></div>
                  <div class="col-10">
                    <h6> tidak boleh bawa anak</h6>
                  </div> <br><br>
                  <p><i class="fa-solid fa-bolt" style="color: #ed0202;">7%</i><strike> Rp 1.700.000</strike> </p>
                  <h6> Rp 1.488.000/bulan</h6>
                  <div style="align-content: center;">
                    <ul id="menu" style="font-size:x-large;font-weight:500;">
                      <span>
                        <li>
                          <a style="width:200px;" href="#" class="btn btn-outline-success"> Lihat Detail</a>
                        </li><br>
                        <li>
                          <a style="width:200px;" href="../ajuan-sewa/ajukan-sewa.php" class="btn btn-outline-success">Ajukan sewa </a>
                        </li>
                      </span>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <hr> <br>

        <!--Fasilitas Umum-->
        <h3>Fasilitas Umum</h3><br>
        <div>
          <div class="row">
            <div class="col-6">
              <div class="row">
                <div class="col-2"><img style="width:45px;height:40px;filter:grayscale();" src="img/wifi.png" alt=""></div>
                <div class="col-10">
                  <h5> WiFi</h5>
                </div> <br><br>
                <div class="col-2"><img style="width:45px;height:40px;filter:grayscale();" src="img/r.tamu.png" alt=""></div>
                <div class="col-10">
                  <h5> R.Tamu</h5>
                </div> <br><br>
                <div class="col-2"><img style="width:45px;height:40px;filter:grayscale();" src="img/r.jemur.png" alt=""></div>
                <div class="col-10">
                  <h5> R.Jemur</h5>
                </div> <br><br>
                <div class="col-2"><img style="width:45px;height:40px; filter:grayscale();" src="img/dapur.png" alt=""></div>
                <div class="col-10">
                  <h5> Dapur </h5>
                </div> <br><br>
              </div>
            </div>
            <div class="col-6">
              <div class="row">
                <div class="col-2"><img style="width:45px;height:40px;filter:grayscale();" src="img/kulkas.png" alt=""></div>
                <div class="col-10">
                  <h5>Kulkas</h5>
                </div> <br><br>
                <div class="col-2"><img style="width:45px;height:40px;filter:grayscale();" src="img/penjaga.png" alt=""></div>
                <div class="col-10">
                  <h5> Penjaga Kos</h5>
                </div> <br><br>
                <div class="col-2"><img style="width:45px;height:40px;filter:grayscale();" src="img/r.santai.png" alt=""></div>
                <div class="col-10">
                  <h5> R.santai </h5>
                </div> <br><br>
                <div class="col-2"><img style="width:45px;height:40px; filter:grayscale();" src="img/dispenser.png" alt=""></div>
                <div class="col-10">
                  <h5> Dispenser </h5>
                </div> <br><br>
              </div>
            </div>
          </div>
        </div>

        <hr> <br>

        <!--Fasilitas Parkir-->
        <h3> Fasilitas Parkir </h3> <br>
        <div class="row">
          <div class="col-2"><img style="width:45px;height:40px;filter:grayscale();" src="img/p.mobil.png" alt=""></div>
          <div class="col-10">
            <h5> Parkir Mobil</h5>
          </div> <br><br>
          <div class="col-2"><img style="width:40px;height:35px;filter:grayscale();" src="img/p.motor.png" alt=""></div>
          <div class="col-10">
            <h5> Parkir Motor </h5>
          </div> <br><br>
        </div><br>

        <hr> <br>

        <!--Peraturan di Kos Ini-->
        <h3> Peraturan di Kos Ini </h3> <br>
        <div class="row">
          <div class="col-2"><img style="width:45px;height:40px;filter:grayscale();" src="img/24jam.png" alt=""></div>
          <div class="col-10">
            <h5> Akses 24 Jam </h5>
          </div> <br><br>
          <div class="col-2"><img style="width:40px;height:35px;filter:grayscale();" src="img/maks.png" alt=""></div>
          <div class="col-10">
            <h5> Maks. 2 orang/kamar</h5>
          </div> <br><br>
          <div class="col-2"><img style="width:45px;height:40px;filter:grayscale();" src="img/nolawanjenis.png" alt=""></div>
          <div class="col-10">
            <h5>Lawan jenis dilarang ke kamar </h5>
          </div> <br><br>
          <div class="col-2"><img style="width:40px;height:35px;filter:grayscale();" src="img/tamu.png" alt=""></div>
          <div class="col-10">
            <h5> Tamu menginap dikenakan biaya </h5>
          </div> <br><br>
          <div class="col-2"><img style="width:45px;height:40px;filter:grayscale();" src="img/nohewan.png" alt=""></div>
          <div class="col-10">
            <h5> Dilarang bawa Hewan </h5>
          </div> <br><br>
        </div><br>

        <hr> <br>

        <!--Maps-->
        <h3> Lokasi dan Lingkungan Sekitar</h3>
        <h5><i class="fa-solid fa-location-dot"></i> Kecamatan Mlati, Kabupaten Sleman, Jogja.</h5>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63255.90312242476!2d110.30480107598383!3d-7.737313471915108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5897c8244041%3A0x4027a76e352fe50!2sMlati%2C%20Sleman%20Regency%2C%20Special%20Region%20of%20Yogyakarta!5e0!3m2!1sen!2sid!4v1683217317288!5m2!1sen!2sid" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <hr> <br>

        <!--Ketentuan Pengajuan Sewa -->
        <h3>Ketentuan pengajuan sewa</h3>
        <h5>Bisa bayar DP (uang muka) dulu</h5>
        <p>Biaya DP adalah 30% dari biaya yang dipilih.</p>
        <hr>
        <div class="row">
          <div class="col-6">
            <h4> <i class="fa-solid fa-clipboard fa-xl"></i> Waktu mulai ngekos terdekat:</h4>
            <h6>Bisa di hari H setelah pengajuan sewa.</h6>
          </div>
          <div class="col-6">
            <h4> <i class="fa-solid fa-clipboard fa-xl"></i> Waktu mulai ngekos terjauh:</h4>
            <h6>1 bulan setelah pengajuan sewa.</h6>
          </div>
        </div><br>

        <hr><br>
        <!--rating-->
        <div>
          <h3><i class="fa-solid fa-star" style="color: #2cb819;"></i> 4.5 (3 review)</h3>
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
                  <h5>4.3</h5>
                  <h5>4.1</h5>
                  <h5>4.5</h5>
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
                  <h5>4.5</h5>
                  <h5>4.7</h5>
                  <h5>4.1</h5>
                </div>
              </div>
            </div>
          </div>
        </div>

        <br>

        <!--Review pertama-->
        <div>
          <div class="row">
            <div class="col-6">
              <div class="row">
                <div class="col-2"><img style="width:50px;height:50px;filter:grayscale();" src="img/Mamikos.png" alt=""></div>
                <div class="col-10">
                  <h5>Anonim</h5>
                  <p>2 bulan yang lalu </p>
                </div> <br>
              </div>
            </div>

            <div class="col-6">
              <div class="row">
                <div class="col-10"></div>
                <div class="col-2"><button class="rounded " style="box-shadow: gray; background:white;font-size:smaller;height:30px;width:70px;"> <i class="fa-solid fa-star"></i>4.3</button></div>
              </div>
            </div>
          </div>
        </div>

        <p>Overall harga dan kualitas sesuai</p>
        <div class="row">
          <div style="border-left: 1px black solid; height:120px;width:0px;" class="col-2"></div>
          <div class="col-10">
            <h5>Balasan dari pemilik</h5>
            <p>2 bulan yang lalu </p>
            <p>Halo, Kakak. Terima kasih atas review dan ratingnya. Semoga Anda selalu betah untuk singgah di kost kami.</p>
          </div>
        </div>

        <!--Review kedua-->
        <div>
          <div class="row">
            <div class="col-6">
              <div class="row">
                <div class="col-2"><img style="width:50px;height:50px;filter:grayscale();" src="img/Mamikos.png" alt=""></div>
                <div class="col-10">
                  <h5>Anonim</h5>
                  <p>5 bulan yang lalu </p>
                </div> <br>
              </div>
            </div>

            <div class="col-6">
              <div class="row">
                <div class="col-10"></div>
                <div class="col-2"><button class="rounded " style="box-shadow: gray; background:white;font-size:smaller;height:30px;width:70px;"> <i class="fa-solid fa-star"></i>4.4</button></div>
              </div>
            </div>
          </div>
        </div>

        <p>Lumayan, ada cctv jadi aman, tempatnya di perumahan</p>
        <div class="row">
          <div style="border-left: 1px black solid; height:120px;width:0px;" class="col-2"></div>
          <div class="col-10">
            <h5>Balasan dari pemilik</h5>
            <p>5 bulan yang lalu </p>
            <p>Halo, Kakak. Terima kasih atas review dan ratingnya. Keamanan dan kenyamanan Anda merupakan prioritas bagi kami :)</p>
          </div>
        </div>

        <!--Review ketiga-->
        <div>
          <div class="row">
            <div class="col-6">
              <div class="row">
                <div class="col-2"><img style="width:50px;height:50px;filter:grayscale();" src="img/Mamikos.png" alt=""></div>
                <div class="col-10">
                  <h5>Anonim</h5>
                  <p>7 bulan yang lalu </p>
                </div> <br>
              </div>
            </div>

            <div class="col-6">
              <div class="row">
                <div class="col-10"></div>
                <div class="col-2"><button class="rounded " style="box-shadow: gray; background:white;font-size:smaller;height:30px;width:70px;"> <i class="fa-solid fa-star"></i>4.9</button></div>
              </div>
            </div>
          </div>
        </div>

        <p>tempat nyaman, aman karna di cluster tidak berisik. pokoknya nyamana banget kos disini bapak ibunya kos ramah dekat dengan makanan, kampus ugm dan mall</p>
        <div class="row">
          <div style="border-left: 1px black solid; height:120px;width:0px;" class="col-2"></div>
          <div class="col-10">
            <h5>Balasan dari pemilik</h5>
            <p>7 bulan yang lalu </p>
            <p>Halo, Kakak. Terima kasih atas review dan ratingnya. Kami sangat senang mendengar Anda nyaman bersama kami :)</p>
          </div>
        </div>

        <hr>

        <!--Statistika -->
        <div class="row">
          <div class="col-6">
            <div class="row">
              <div class="col-2">
                <img class="img-profile rounded-circle" style="width:65px;height:65px;" src="img/Okta.jpg" alt="">
              </div>
              <div class="col-10">
                <h4>Okta</h4>
                <p>Pemilik Kos · Aktif sejak Jun 2020</p>
              </div>
            </div>
          </div>
        </div><br>
        <h5><i class="fa-solid fa-calendar-check" style="color:#0f9530;"></i> 6189 transaksi berhasil</h5>
        <br>
        <div class="row">
          <div class="col-6">
            <div class="row">
              <div style="text-align:center;" class="col-6">
                <h5><i class="fa-solid fa-stopwatch"></i>Booking Diproses</h5>
                <p><b>± 2 jam</b></p>
              </div>
              <div style="text-align:center;" class="col-6">
                <h5><i class="fa-solid fa-hand-holding-dollar"></i>Peluang Booking </h5>
                <p><b> 93 %</b></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal Tentang Statistik-->


      </div>

      <!-- sebelah kanan-->
      <div class="col-4 ">
        <div class="kanan px-2">

          <!-- Button Lihat Semua Foto -->
          <button style="border-color:green; font-family: Georgia, 'Times New Roman', Times, serif;font-weight:bolder;" type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Lihat Semua Foto
          </button>

          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Gambar Detail</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="container text-center">
                    <h3>Foto Kamar</h3>
                    <div class="row align-items-start">
                      <div class="col">
                        <img class="rounded py-3" style="height: 300px; width:fit-content;" src="img/Kos1Gambar1.jpg" alt="">
                      </div>
                      <div class="col">
                        <img class="rounded py-3" style="height: 300px; width:fit-content;" src="img/Kos1Gambar4.jpg" alt="">
                      </div>
                      <div class="col">
                        <img class="rounded py-3" style="height: 300px; width:fit-content;" src="img/Kos1Gambar5.jpg" alt="">
                      </div>
                    </div><br>

                    <h3> Foto Bangunan</h3>
                    <div class="row align-items-start">
                      <div class="col">
                        <img class="rounded py-3" style="height: 300px; width:fit-content;" src="img/Kos1Gambar2.jpg" alt="">
                      </div>
                      <div class="col">
                        <img class="rounded py-3" style="height: 300px; width:fit-content;" src="img/Kos1Gambar3.jpg" alt="">
                      </div>
                      <div class="col">
                        <img class="rounded py-3" style="height: 300px; width:fit-content;" src="img/Kos1Gambar7.jpg" alt="">
                      </div>
                    </div><br>

                    <h3>Foto Kamar Mandi</h3>
                    <div class="row align-items-start">
                      <div class="col">
                        <img class="rounded py-3" style="height: 300px; width:fit-content;" src="img/Kos1Gambar8.jpg" alt="">
                      </div>
                    </div><br>

                    <h3>Foto Fasilitas Bersama</h3>
                    <div class="row align-items-start">
                      <div class="col">
                        <img class="rounded py-3" style="height: 300px; width:fit-content;" src="img/Kos1Gambar9.jpg" alt="">
                      </div>
                      <div class="col">
                        <img class="rounded py-3" style="height: 300px; width:fit-content;" src="img/Kos1Gambar10.jpg" alt="">
                      </div>
                      <div class="col">
                        <img class="rounded py-3" style="height: 300px; width:fit-content;" src="img/Kos1Gambar11.jpg" alt="">
                      </div>
                    </div>
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
              <h4>Rp1.488.000 / bulan</h4>
              <button style="border-color:green;width:145px;height:45px;" type="button" class="btn  me-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <i class="fa-solid fa-calendar" style="color:#0f9530;"></i> Mulai Kos</button>
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Mulai Kos</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <!-- Kalender-->
                      <div>
                        <div>
                          <h4> <i class="fa-solid fa-clipboard "></i> Waktu mulai ngekos terdekat:</h4>
                          <h6>Bisa di hari H setelah pengajuan sewa.</h6>
                        </div>
                        <div>
                          <h4> <i class="fa-solid fa-clipboard "></i> Waktu mulai ngekos terjauh:</h4>
                          <h6>1 bulan setelah pengajuan sewa.</h6>
                        </div> <br>
                      </div>
                      <form action="/action_page.php">
                        <label for="kalender" style="font-size:larger; font-family:Verdana, Geneva, Tahoma, sans-serif;;"> <b>Pilih Tanggal</b></label>
                        <input type="date" id="kalender" name="kalender" style="padding: 8px;border:1px solid #ccc;border-radius:4px;font-size:larger;font-weight:bold;">
                        <input type="submit" value="Pilih" style="background-color: #054600; font-family:Verdana, Geneva, Tahoma, sans-serif;border-radius:4px;font-size:larger;">
                      </form><br><br>
                      <div>
                        <p><i class="fa-solid fa-circle-exclamation" style="color: #1fb0e0;"></i> Pastikan tanggal yang kamu masukkan benar, karena kamu akan melakukan pembayaran setelah booking kos disetujui pemilik.</p>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <!-- Menu Pilih lama Pembayaran-->
              <button style="border-color:green;width:145px;height:45px;" class="btn  nav-item active dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Per Bulan
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">Per Bulan</label>
                    </div>
                  </a>

                  <a class="dropdown-item" href="#">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1"> Per 3 Bulan </label>
                    </div>
                  </a>

                  <a class="dropdown-item" href="#">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">Per 6 Bulan</label>
                    </div>
                  </a>

                  <a class="dropdown-item" href="#">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">Per Tahun </label>
                    </div>
                  </a>

                </div>
              </button>
            </div>

            <div class="blok px-4">
              <!-- Tanya -->
              <div class="box py-3">
                <button type="button" style="border-color:green;width:320px;height:45px;" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                  <p style="color:#0f9530;"><i class="fa-solid fa-message" style="color: #0f9530;"></i> Tanya Pemilik</p>
                </button>

                <!-- Dalam Modal-->
                <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Hubungi Kos</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <p style="color: #0f9530;">Anda akan terhubung dengan pemilik langsung melalui chatroom mamikos</p>
                        <p><b> Pilih Pertanyaan</b></p>

                        <!--Radio-->
                        <div style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-weight:300px">
                          <form action="proses.php" method="get">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                              <label class="form-check-label" for="flexRadioDefault1">
                                Saya butuh cepat nih. Bisa booking sekarang?
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                              <label class="form-check-label" for="flexRadioDefault2">
                                Ada diskon untuk kos ini?
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                              <label class="form-check-label" for="flexRadioDefault3">
                                Saya ingin survei dulu
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                              <label class="form-check-label" for="flexRadioDefault4">
                                Masih ada kamar?
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                              <label class="form-check-label" for="flexRadioDefault5">
                                Alamat kos di mana?
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
                              <label class="form-check-label" for="flexRadioDefault6">
                                Cara menghubungi pemilik?
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
                              <label class="form-check-label" for="flexRadioDefault7">
                                Boleh tanya-tanya dulu?
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault8">
                              <label class="form-check-label" for="flexRadioDefault8">
                                Bisa pasutri?
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault9">
                              <label class="form-check-label" for="flexRadioDefault9">
                                Boleh bawa hewan?
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault10">
                              <label class="form-check-label" for="flexRadioDefault10">
                                Bisa sewa harian?
                              </label>
                            </div><br>
                            <input class="btn btn-success" style="width:450px;" type='submit' name='tombol' value='Kirim' />
                          </form><br>
                          <p style="text-align: justify;font-size:smaller;">Dengan mengirim pesan, anda menyetujui untuk berkomunikasi dengan pemilik hanya melalui chatroom mamikos untuk melindungi pengguna kami. </p>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>

              </div>

              <!--Ajukan Sewa-->
              <div>
                <button class="btn btn-success" style="border-color:green;width:320px;height:45px;">Ajukan Sewa</button>
              </div>
            </div>
            <br><br>

          </div>

          <br><br>

        </div>
      </div>
    </div>
  </div>
  </div>

  <br><br>

  <script src="https://kit.fontawesome.com/bc3cf86588.js" crossorigin="anonymous"></script>
  <script src="js/bootstrap.js"></script>
</body>

</html>