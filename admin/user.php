<?php 
    error_reporting(0);
    include ("../function.php");
    if(isset($_POST['hapus'])){
        $users = $_POST['id_user'];
        if(hapus($users) > 0){
            echo"
                <script>
                    alert('Data berhasil dihapus')
                    document.location.href = '../admin/user.php'
                </script>
            ";
        }else{
            echo"
                <script>
                    alert('Data gagal dihapus')
                    document.location.href = '../admin/user.php'
                </script>
            ";
        }
    }
?>
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
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

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
            <li class="nav-item {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Dasboard</span>
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
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle" src="{{asset('img/undraw_profile_1.svg')}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">User</h1>
                    </div>

                    <div class="container mt-5">
                        <div class="row">
                            <div class="table-responsive">
                            <table class="table table-striped table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>id</th>
                                        <th>Nama</th>
                                        <th>Nomor Hp</th>
                                        <th>Email</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Pekerjaan</th>
                                        <th>Password</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Kota Asal</th>
                                        <th>Pendidikan Terakhir</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                        $no = 1;
                                        $data=mysqli_query($conn, "SELECT * FROM user");
                                        if(mysqli_num_rows($data)>0){
                                        while($row = mysqli_fetch_array($data)){
                                    ?>
                                    <tr>
                                        <!-- <th scope="row"></th> -->
                                        <td>
                                            <?php echo $no++ ?>
                                        </td>
                                        <td>
                                            <?php echo $row['id_user']?>
                                        </td>
                                        <td>
                                            <?php echo $row['nama_user']?>
                                        </td>
                                        <td>
                                            <?php echo $row['no_hp_user']?>
                                        </td>
                                        <td>
                                            <?php echo $row['email']?>
                                        </td>
                                        <td>
                                            <?php echo $row['jenis_kelamin']?>
                                        </td>
                                        <td>
                                            <?php echo $row['profesi']?>
                                        </td>
                                        <td>
                                            <?php echo $row['password']?>
                                        </td>
                                        <td>
                                            <?php echo $row['tanggal_lahir']?>
                                        </td>
                                        <td>
                                            <?php echo $row['kota_asal']?>
                                        </td>
                                        <td>
                                            <?php echo $row['pendidikan_terakhir']?>
                                        </td>
                                            <td>
                                        <form action="edit_user.php" method="POST">
                                            <input name="id_user" type="hidden" value="<?= $row['id_user'] ?>">
                                            <button name="edit" class="btn btn-outline-warning">Edit</button> 
                                        </form>
                                        <form action="" method="POST">
                                            <input name="id_user" type="hidden" value="<?= $row['id_user'] ?>">
                                            <button name="hapus" onclick="return confirm('Apakah Anda Yakin ingin menghapus data?')" class="btn btn-danger">
                                                Hapus
                                            </button>
                                        </form>
                                            </td>
                                    </tr>
                                    <?php }
                                    }  
                                    ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Sidebar -->
    </div>
    <script src="bootstrap/vendor/jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
    <script src="bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>