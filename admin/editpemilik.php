<?php
    error_reporting(0);
    include("1sidebar.php");
    include("1header.php"); 
    include ("../function.php");
    $id =$_POST['id_pemilik'];
    $data=mysqli_query($conn, "SELECT * FROM pemilik WHERE id_pemilik = ".$id."");
    $pemilik=mysqli_fetch_object($data);

    if ( isset($_POST["btnsubmit"])){
        edit_pemilik_admin($_POST);
    }
?>


        <div class="row">
            <div class="col-12 col-lg-12 col-md-12 col-sm-12">

            <div class="card mb-3">
                <h5 class="card-header">Edit Pemilik</h5>
                <div class="card-body bg-light">
                    <form method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_pemilik" value="<?= $id ?>">
                        <div class="row form-group mb-3 align-items-center bg-light">
                            <div class="col-4 text-end">
                                <label for="name"><strong>Nama Lengkap</strong></label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control w-50" id="name" name="nama_pemilik" required placeholder=" Masukkan nama lengkap sesuai identitas" value="<?php echo $pemilik -> nama_pemilik ?>">
                            </div>
                        </div>
                        <div class="row form-group mb-3 align-items-center bg-light">
                            <div class="col-4 text-end">
                                <label for="name"><strong>Email</strong></label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control w-50" id="name" name="email_pemilik" required placeholder="Masukkan email untuk akun Mamikos" value="<?php echo $pemilik -> email_pemilik ?>">
                            </div>
                        </div>
                        <div class="row form-group mb-3 align-items-center bg-light">
                            <div class="col-4 text-end">
                                <label for="name"><strong>Password</strong></label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control w-50" id="name" name="password" required placeholder="Minimal 8 karakter" value="<?php echo $pemilik -> password ?>">
                            </div>
                            
                        </div>

                        <a href="pemilik.php" class=" btn btn-outline-danger btn-lg role="button">Kembali</a>
                        <button class="btn btn-outline-secondary btn-lg" type="submit" name="btnsubmit">Simpan</button>
                    </form>