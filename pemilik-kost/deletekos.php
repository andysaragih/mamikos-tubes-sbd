<?php
if (isset($_GET['id'])) {
    include '../function.php';
    $id_kos = $_GET['id'];

    $query = mysqli_query($conn, "SELECT * FROM kos WHERE id_kos='$id_kos'");
    $fetch = mysqli_fetch_array($query);
    $location = $fetch['gambar_kos_depan'];
    $location1 = $fetch['gambar_kos_dalam'];
    $location2 = $fetch['gambar_kamar_depan'];
    $location3 = $fetch['gambar_kamar_dalam'];
    $location4 = $fetch['gambar_kamar_mandi'];

    if (unlink("uploads/$location") && unlink("uploads/$location1") && unlink("uploads/$location2") && unlink("uploads/$location3") && unlink("uploads/$location4")) {
        $sql = mysqli_query($conn, "DELETE FROM kos WHERE id_kos='$id_kos'");

        if ($sql) {
            echo
            "<script>
            alert('Data berhasil dihapus');
            window.location.href = 'kos-owner.php';
            </script>";
        } else {
            echo
            "<script>
            alert('Data gagal dihapus');
            window.location.href = 'kos-owner.php';
            </script>";
        }
    }
} else {
    echo "No Data";
}
