<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">

    <!-- Custom fonts for this template-->
    <link href="bootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="bootstrap/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-light sidebar sidebar-light accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <div class="sidebar-brand d-flex align-items-center justify-content-center">
                <img src="../img/logo_rbg.png" style="max-width: 100%; height: auto;" alt="" srcset="">
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Dasboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../logout.php">
                    <span>Logout</span>
                </a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Main Menu
            </div>

            <!-- Nav Item - Kos -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-fw fa-hotel"></i>
                    <span>Kos</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="kos.php">kos</a></li>
                    <li><a class="dropdown-item" href="alamat_kos.php">alamat kos</a></li>
                    <li><a class="dropdown-item" href="gambar_kos.php">gambar kos</a></li>
                    <li><a class="dropdown-item" href="ketersediaan_kamar.php">ketersediaan kamar</a></li>
                    <li><a class="dropdown-item" href="data_rekening_pemilik.php">data rekening pemilik</a></li>

                </ul>
            </li>




            <!-- Nav Item - Pemilik -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-fw fa-portrait"></i>
                    <span>Pemilik</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="pemilik.php">pemilik</a></li>
                </ul>
            </li>

            <!-- Nav Item - User -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-fw fa-save"></i>
                    <span>User</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="user.php">user</a></li>
                    <li><a class="dropdown-item" href="pengajuan_sewa.php">pengajuan sewa</a></li>
                </ul>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Bootstrap core JavaScript-->

        <script src="../bootstrap/js/bootstrap.bundle.js"></script>
        <script src="../bootstrap/vendor/jquery/jquery.min.js"></script>
        <script src="../bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../bootstrap/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="../bootstrap/vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="../bootstrap/js/demo/chart-area-demo.js"></script>
        <script src="../bootstrap/js/demo/chart-pie-demo.js"></script>


</body>

</html>