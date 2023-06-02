<?php
$id = $_SESSION['id_user'];
$photo = "SELECT photo_profile FROM user WHERE id_user = '$id'";
$profile = mysqli_query($conn, $photo);
?>


<div class="col-lg-4 col-md-4 col-sm-5 col-12">
    <div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <div class="d-flex col-12 p-0">
                    <?php while ($p = mysqli_fetch_array($profile)) { ?>
                        <div class="image-user col-6" style="background-image: url('uploads/<?= $p["photo_profile"]; ?>');"></div>
                    <?php } ?>
                    <div class="profile col-6">
                        <h1><?= $_SESSION['nama']; ?></h1>
                        <a href="edit-profile.php?no_hp_user=<?= $_SESSION['nohp']; ?>" class="btn btn-outline-success" type="submit" name="" style="margin-top: 1rem; width: 7em;">Edit Profil</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-12 menu-profile">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <a href="profile.php" class="menu-link">
                            <i class="fa-solid fa-house-chimney" style="color: black;"></i>
                            <span class="title-link mx-3">Riwayat Kos</span>
                        </a>
                    </li>
                </ul>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <a href="riwayat-transaksi.php" class="menu-link">
                            <i class="fa-solid fa-hand-holding-dollar" style="color: #000000;"></i>
                            <span class="title-link mx-3">Riwayat Transaksi</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>