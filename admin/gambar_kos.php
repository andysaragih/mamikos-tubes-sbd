<?php 
    error_reporting(0);
    include("1sidebar.php");
    include("1header.php"); 
    include ("../function.php");
    ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gambar Kos</h1>
    </div>

    <div class="container mt-5">
        <div class="row">
            <table class="table table-striped table-bordered text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>id</th>
                        <th>Nama</th>
                        <th>Gambar Depan</th>
                        <th>Gambar Dalam</th>
                        <th>Gambar Kamar Depan</th>
                        <th>Gambar Kamar Dalam</th>
                        <th>Gambar Kamar Mandi</th>
                        
                    </tr>
                </thead>

                <tbody>
                <?php
                            $no = 1;
                            $data=mysqli_query($conn, "SELECT * FROM kos");
                            if(mysqli_num_rows($data)>0){
                            while($row = mysqli_fetch_array($data)){
                        ?>
                        <tr>
                        <!-- <th scope="row"></th> -->
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row['id_kos']?> </td>
                        <td><?php echo $row['nama_kos']?> </td>
                        <td><?php echo $row['gambar_kos_depan']?></td>
                        <td><?php echo $row['gambar_kos_dalam']?></td>
                        <td><?php echo $row['gambar_kamar_depan']?></td>
                        <td><?php echo $row['gambar_kamar_dalam']?></td>
                        <td><?php echo $row['gambar_kamar_mandi']?></td>
                    </tr>
                    <?php }
                    }
                    
                     ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="../bootstrap/js/bootstrap.bundle.js"></script>
<script src="../bootstrap/vendor/jquery/jquery.min.js"></script>
<script src="../bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>