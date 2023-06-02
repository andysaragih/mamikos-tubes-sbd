<?php 
    error_reporting(0);
    include("1sidebar.php");
    include("1header.php"); 
    include ("../function.php");    

    if(isset($_POST['hapus'])){
        $id_pemilik = $_POST['id_pemilik'];
        if(hapus2($id_pemilik) > 0){
            echo"
                <script>
                    alert('Data berhasil dihapus')
                    document.location.href = '../admin/pemilik.php'
                </script>
            ";
        }else{
            echo"
                <script>
                    alert('Data gagal dihapus')
                    document.location.href = '../admin/pemilik.php'
                </script>
            ";
        }
    }

?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pemilik</h1>
    </div>

    <div class="container mt-5">
        <div class="row">
            <table class="table table-striped table-bordered Text-center">
                <thead>
                    <tr>
                        <td>No</td>
                        <th>id</th>
                        <th>Nama Pemilik</th>
                        <th>Email Pemilik</th>
                        <th>Password</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                <?php
                    $no = 1;
                    $data=mysqli_query($conn, "SELECT * FROM pemilik");
                    if(mysqli_num_rows($data)>0){
                        while($row = mysqli_fetch_assoc($data)){
                ?>
                    <tr>
                        <!-- <th scope="row"></th> -->
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row['id_pemilik']?> </td>
                        <td><?php echo $row['nama_pemilik']?> </td>
                        <td><?php echo $row['email_pemilik']?> </td>
                        <td><?php echo $row['password']?></td>
                        <td>
                        <form action="editpemilik.php" method="POST">
                                <input name="id_pemilik" type="hidden" value="<?= $row['id_pemilik'] ?>">
                                <button name="edit" class="btn btn-outline-warning">Edit</button> 
                            </form>
                            <form action="" method="POST">
                                <input name="id_pemilik" type="hidden" value="<?= $row['id_pemilik'] ?>">
                                <button name="hapus" onclick="return confirm('Apakah Anda Yakin ingin menghapus data?')" class="btn btn-danger">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php 
                        }
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
