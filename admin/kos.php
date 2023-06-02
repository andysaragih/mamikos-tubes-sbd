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
        <h1 class="h3 mb-0 text-gray-800">Kos</h1>
    </div>

    <!-- <div class="container mt-5"> -->
        <div class="row">
            <table class="table table-striped table-bordered text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>id</th>
                        <th>Nama</th>
                        <th>Tipe Kamar</th>
                        <th>Jenis Kos</th>
                        <th>Deskripsi</th>
                        <th>Lokasi</th>
                        <th>Tahun Pembangunan</th>
                        <th>Harga</th>
                        
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
                        <td><?php echo $row['tipe_kamar']?> </td>
                        <td><?php echo $row['jenis_kos']?></td>
                        <td><?php echo $row['deskripsi_kos']?> </td>
                        <td><?php echo $row['alamat_kos']?> </td>
                        <td><?php echo $row['tahun_pembangunan_kos']?></td>
                        <td><?php echo $row['harga_bulan']?></td> 
                        
                    </tr>
                    <?php }
                    }
                    else{
                    
                     ?>
                     <tr>
                        <td colspan="10">Tidak ada data</td>
                     </tr>
                     <?php
                    }
                     ?>
                </tbody>
            </table>
        </div>
    <!-- </div> -->
</div>

<script src="../bootstrap/js/bootstrap.bundle.js"></script>
<script src="../bootstrap/vendor/jquery/jquery.min.js"></script>
<script src="../bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>