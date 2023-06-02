<nav class="navbar navbar-expand-lg text-uppercase" id="mainNav">
    <div class="container">
        <a href="mamikos.php" class="logo-mamikos">
            <img src="https://mamikos.com/assets/logo/svg/logo_mamikos_green_v2.svg" alt="Mamikos Logo" />
        </a>
        <button class="navbar-toggler text-uppercase font-weight-bold text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse mx-auto" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item ml-auto mx-lg-1">
                    <div class="dropdown">
                        <a class="user-profil" data-bs-toggle="dropdown" href="/">
                            <img src="https://mamikos.com/general/img/pictures/navbar/ic_profile.svg" alt="">
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="nav-link" href="profil_user/profile.php">Profil </a>
                            </li>
                            <li>
                                <a onclick="return confirm('Apakah yakin anda ingin keluar')" class="nav-link" href="logout.php">
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