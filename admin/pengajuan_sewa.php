<?php
error_reporting(0);
include("1sidebar.php");
include("1header.php");
include("../function.php");
if (isset($_POST['hapus'])) {
    $id_pengajuan = $_POST['id_pengajuan_sewa'];
    if (hapus3($id_pengajuan) > 0) {
        echo "
                <script>
                    alert('Data berhasil dihapus')
                    document.location.href = '../admin/pengajuan_sewa.php'
                </script>
            ";
    } else {
        echo "
                <script>
                    alert('Data gagal dihapus')
                    document.location.href = '../admin/pengajuan_sewa.php'
                </script>
            ";
    }
}
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="container mt-5">
        <div class="row">
            <table class="table table-striped table-bordered text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>id</th>
                        <th>Jumlah Penyewa</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Tanggal Masuk</th>
                        <th>Tanggal Keluar</th>
                        <th>Durasi Sewa</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $no = 1;
                    $data = mysqli_query($conn, "SELECT * FROM pengajuan_sewa");
                    if (mysqli_num_rows($data) > 0) {
                        while ($row = mysqli_fetch_array($data)) {
                    ?>
                            <tr>
                                <!-- <th scope="row"></th> -->
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $row['id_pengajuan_sewa'] ?> </td>
                                <td><?php echo $row['jumlah_penyewa'] ?> </td>
                                <td><?php echo $row['tanggal_pengajuan_sewa'] ?> </td>
                                <td><?php echo $row['tanggal_masuk'] ?> </td>
                                <td><?php echo $row['tanggal_keluar'] ?></td>
                                <td><?php echo $row['durasi_sewa'] ?></td>
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