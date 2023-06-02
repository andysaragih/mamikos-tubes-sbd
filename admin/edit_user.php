<?php
    error_reporting(0);
    include("1sidebar.php");
    include("1header.php"); 
    include ("../function.php");
    $id = $_POST['id_user'];
    $data = mysqli_query($conn, "SELECT * FROM user WHERE id_user = ".$id."");
    $edit = mysqli_fetch_object($data);

    if ( isset($_POST["btnsubmit"])){
        edit_user($_POST);
    }
?>


        <div class="row">
            <div class="col-12 col-lg-12 col-md-12 col-sm-12">

            <div class="card mb-3">
                <h5 class="card-header">Edit Pengajuan Sewa</h5>
                <div class="card-body bg-light">
                    <form method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_user" value="<?= $id ?>">
                        <div class="row form-group mb-3 align-items-center bg-light">
                            <div class="col-4 text-end">
                                <label for="name"><strong>Nama</strong></label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control w-50" id="name" name="nama_user" required value="<?php echo $edit ->nama_user ?>">
                            </div>
                        </div>
                        <div class="row form-group mb-3 align-items-center bg-light">
                            <div class="col-4 text-end">
                                <label for="name"><strong>Nomor Hp</strong></label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control w-50" id="name" name="no_hp_user" required  value="<?php echo $edit -> no_hp_user ?>">
                            </div>
                        </div>
                        <div class="row form-group mb-3 align-items-center bg-light">
                            <div class="col-4 text-end">
                                <label for="name"><strong>Email</strong></label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control w-50" id="name" name="email" required value="<?php echo $edit -> email ?>">
                            </div>

                        </div>
                        <div class="row form-group mb-3 align-items-center bg-light">
                            <div class="col-4 text-end">
                                <label for="name"><strong>Password</strong></label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control w-50" id="name" name="password" required value="<?php echo $edit -> password ?>">
                            </div>
                            
                        </div>

                        <a href="user.php" class=" btn btn-outline-danger btn-lg" role="button">Kembali</a>
                        <button class="btn btn-outline-secondary btn-lg" type="submit" name="btnsubmit">Simpan</button>
                    </form>