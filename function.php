<?php

if (!isset($_SESSION)) {
    session_start();
}

$conn = mysqli_connect('localhost', 'root', '', 'mamikos');

if ($conn->connect_error) {
    die("Koneksi gagal" . $conn->connect_error);
}

function login_pencari($data)
{
    global $conn;

    $no_hp = $data['nohp'];
    $pass_login = $data['password'];

    $sql = "SELECT * FROM user WHERE no_hp_user = '$no_hp'";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($query);
    $cek = mysqli_num_rows($query);
    $cekpass = password_verify($pass_login, $result['password']);

    if ($cek == 1 && $cekpass == 1) {
        $_SESSION['nohp'] = $result['no_hp_user'];
        $_SESSION['nama'] = $result['nama_user'];
        $_SESSION['email'] = $result['email'];

        echo "
            <script>
                document.location.href = '../index.php';
            </script>
            ";
    } else {
        echo "
        <script>
            alert('Nomor handphone atau password salah. Silahkan login kembali');
            document.location.href = 'login_pencari.php';
        </script>
        ";
    }
}

function login_pemilik($data)
{
    global $conn;

    $no_hp = $data['nohp'];
    $pass_login = $data['password'];

    $sql = "SELECT * FROM pemilik WHERE no_hp_pemilik = '$no_hp'";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($query);
    $cek = mysqli_num_rows($query);
    $cekpass = password_verify($pass_login, $result['password']);

    if ($cek == 1 && $cekpass == 1) {
        $_SESSION['id_pemilik'] = $result['id_pemilik'];
        $_SESSION['nohp'] = $result['no_hp_pemilik'];
        $_SESSION['nama'] = $result['nama_pemilik'];
        $_SESSION['email'] = $result['email_pemilik'];
        $_SESSION['password'] = $result['password'];
        echo "
            <script>
                document.location.href = '../pemilik-kost/index.php';
            </script>
            ";
    } else {
        echo "
        <script>
            alert('Nomor handphone atau password salah. Silahkan login kembali');
            document.location.href = 'login_pemilik.php';
        </script>
        ";
    }
}

function register_pemilik($data)
{
    global $conn;

    $nama = $_POST['name'];
    $no_hp = $data['nohp'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $passconfir = $_POST['passwordconfir'];
    $password = password_hash($pass, PASSWORD_DEFAULT);

    $sql = "INSERT INTO pemilik (nama_pemilik, email_pemilik, no_hp_pemilik, password) VALUES ('$nama', '$email','$no_hp', '$password')";

    $cekEmail = mysqli_query($conn, "SELECT email_pemilik FROM pemilik WHERE email_pemilik='$email'");
    $cekHp = mysqli_query($conn, "SELECT no_hp_pemilik FROM pemilik WHERE no_hp_pemilik='$no_hp'");

    if ($pass !== $passconfir) {
        echo "<script>
                  alert('Konfirmasi password tidak sesuai!');
              </script>";
        return false;
    }

    if (mysqli_num_rows($cekEmail) > 0) {
        echo "
              <script>
                  alert('Email Sudah Ada!');
                  document.location.href = 'register_pemilik.php';
              </script>
          ";
    } else if (mysqli_num_rows($cekHp) > 0) {
        echo "
              <script>
                  alert('Nomor Handphone Sudah Ada!');
                  document.location.href = 'register_pemilik.php';
              </script>
          ";
    } else {
        mysqli_query($conn, $sql);
        echo "
          <script>
              alert('Registrasi Akun Berhasil');
              document.location.href = '../login/login_pemilik.php';
          </script>";
    }
    $conn->close();
}

function register_pencari($data)
{
    global $conn;

    $nama = $_POST['name'];
    $no_hp = $data['nohp'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $passconfir = $_POST['passwordconfir'];
    $password = password_hash($pass, PASSWORD_DEFAULT);

    $sql = "INSERT INTO user (nama_user, email, no_hp_user, password) VALUES ('$nama', '$email','$no_hp', '$password')";

    $cekEmail = mysqli_query($conn, "SELECT email FROM user WHERE email='$email'");
    $cekHp = mysqli_query($conn, "SELECT no_hp_user FROM user WHERE no_hp_user='$no_hp'");

    if ($pass !== $passconfir) {
        echo "<script>
                  alert('Konfirmasi password tidak sesuai!');
              </script>";
        return false;
    }

    if (mysqli_num_rows($cekEmail) > 0) {
        echo "
              <script>
                  alert('Email Sudah Ada!');
                  document.location.href = 'register_pencari.php';
              </script>
          ";
    } else if (mysqli_num_rows($cekHp) > 0) {
        echo "
              <script>
                  alert('Nomor Handphone Sudah Ada!');
                  document.location.href = 'register_pencari.php';
              </script>
          ";
    } else {
        mysqli_query($conn, $sql);
        echo "
          <script>
              alert('Registrasi Akun Berhasil');
              document.location.href = '../login/login_pencari.php';
          </script>";
    }
    $conn->close();
}

function edit_profile($data)
{
    global $conn;

    $nohp = $_GET['no_hp_user'];

    $nama = $_POST['nama'];
    $jenis = $_POST['jeniskelamin'];
    $tanggal = $_POST['tanggal'];
    $kota = $_POST['kota'];
    $status = $_POST['status'];
    $pendidikan = $_POST['pendidikan'];
    $no_hp_darurat = $_POST['no_hp_darurat'];
    $profesi = $_POST['profesi'];
    $gambar = $_FILES["gambar"]["name"];

    if ($gambar != "") {
        $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));
        $targetDir = "uploads/";
        $file_temp = $_FILES["gambar"]["tmp_name"];
        $angka_acak = rand(1, 9999);
        $new_files_name = $angka_acak . '-' . $gambar;
        $targetFilePath = $targetDir . $new_files_name;

        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {

            if (move_uploaded_file($file_temp, $targetFilePath)) {
                $query = "UPDATE user SET nama_user ='$nama', photo_profile ='$new_files_name', jenis_kelamin='$jenis',tanggal_lahir='$tanggal',kota_asal='$kota',status_perkawinan='$status', pendidikan_terakhir='$pendidikan', no_hp_darurat = '$no_hp_darurat', profesi = '$profesi' WHERE no_hp_user='$nohp'";
                $sql = mysqli_query($conn, $query);
                if (!$sql) {
                    die("Query Error : " . mysqli_errno($conn) . " - " . mysqli_error($conn));
                } else {
                    echo
                    "<script>
                    alert('Data berhasil diedit');
                    window.location.href = 'profile.php';
                    </script>";
                }
            }
        } else {
            echo
            "<script>
            alert('Ekstensi gambar yang diterima hanya jpg dan png!');
            window.location.href = 'profile.php';
            </script>";
        }
    } else {
        $query = "UPDATE user SET nama_user ='$nama', jenis_kelamin='$jenis',tanggal_lahir='$tanggal',kota_asal='$kota',status_perkawinan='$status', pendidikan_terakhir='$pendidikan', no_hp_darurat = '$no_hp_darurat', profesi = '$profesi' WHERE no_hp_user='$nohp'";
        $sql = mysqli_query($conn, $query);
        if (!$sql) {
            die("Query Error : " . mysqli_errno($conn) . " - " . mysqli_error($conn));
        } else {
            echo
            "<script>
            alert('Data berhasil diedit');
            window.location.href = 'profile.php';
            </script>";
        }
    }

    if ($sql) {
        echo
        "<script>
                    alert('Data berhasil diedit');
                    window.location.href = 'profile.php';
                    </script>";
    } else {
        echo
        "<script>
                    alert('Data gagal diedit');
                    window.location.href = 'profile.php';
                    </script>";
    }
}

function tambah_kost($data)
{
    global $conn;

    $id_pemilik = $_SESSION['id_pemilik'];
    $nama_kos = $_POST['nama_kos'];
    $tipe_kamar = $_POST['tipe_kamar'];
    $jenis_kos = $_POST['jenis_kos'];
    $deskripsi_kos = $_POST['deskripsi_kos'];

    $peraturan_kos_array = $_POST['peraturan_kos'];

    $tahun_pembangunan_kos = $_POST['tahun_pembangunan_kos'];
    $alamat_kos = $_POST['alamat_kos'];
    $prov_kos = $_POST['provinsi_kos'];
    $kab_kota_kos = $_POST['kab_kota_kos'];
    $kec_kos = $_POST['kec_kos'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    $gambar_kos_depan = $_FILES['gambar_kos_depan']['name'];
    $gambar_kos_dalam = $_FILES['gambar_kos_dalam']['name'];
    $gambar_kamar_depan = $_FILES['gambar_kamar_depan']['name'];
    $gambar_kamar_dalam = $_FILES['gambar_kamar_dalam']['name'];
    $gambar_kamar_mandi = $_FILES['gambar_kamar_mandi']['name'];

    $fasilitas_umum_array = $_POST['fasilitas_umum'];

    $fasilitas_kamar_array = $_POST['fasilitas_kamar'];

    $panjang_kamar = $_POST['panjang_kamar'];
    $lebar_kamar = $_POST['lebar_kamar'];
    $jumlah_kamar = $_POST['jumlah_kamar'];
    $sisa_kamar = $_POST['sisa_kamar'];

    $harga_bulan = $_POST['harga_bulan'];
    $nama_pemilik_rekening = $_POST['nama_pemilik_rekening'];
    $nama_bank = $_POST['nama_bank'];
    $no_rek = $_POST['no_rek'];

    if ($gambar_kos_depan != "" && $gambar_kos_dalam != "" && $gambar_kamar_depan != "" && $gambar_kamar_dalam != "" && $gambar_kamar_mandi != "") {
        $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
        $targetDir = "uploads/";

        // Upload gambar kos depan
        $gambar_kos_depan_temp = $_FILES["gambar_kos_depan"]["tmp_name"];
        $gambar_kos_depan_ext = strtolower(pathinfo($_FILES["gambar_kos_depan"]["name"], PATHINFO_EXTENSION));
        $gambar_kos_depan_name = uniqid() . '.' . $gambar_kos_depan_ext;
        $gambar_kos_depan_path = $targetDir . $gambar_kos_depan_name;
        move_uploaded_file($gambar_kos_depan_temp, $gambar_kos_depan_path);

        // Upload gambar kos dalam
        $gambar_kos_dalam_temp = $_FILES["gambar_kos_dalam"]["tmp_name"];
        $gambar_kos_dalam_ext = strtolower(pathinfo($_FILES["gambar_kos_dalam"]["name"], PATHINFO_EXTENSION));
        $gambar_kos_dalam_name = uniqid() . '.' . $gambar_kos_dalam_ext;
        $gambar_kos_dalam_path = $targetDir . $gambar_kos_dalam_name;
        move_uploaded_file($gambar_kos_dalam_temp, $gambar_kos_dalam_path);

        // Upload gambar kamar depan
        $gambar_kamar_depan_temp = $_FILES["gambar_kamar_depan"]["tmp_name"];
        $gambar_kamar_depan_ext = strtolower(pathinfo($_FILES["gambar_kamar_depan"]["name"], PATHINFO_EXTENSION));
        $gambar_kamar_depan_name = uniqid() . '.' . $gambar_kamar_depan_ext;
        $gambar_kamar_depan_path = $targetDir . $gambar_kamar_depan_name;
        move_uploaded_file($gambar_kamar_depan_temp, $gambar_kamar_depan_path);

        // Upload gambar kamar dalam
        $gambar_kamar_dalam_temp = $_FILES["gambar_kamar_dalam"]["tmp_name"];
        $gambar_kamar_dalam_ext = strtolower(pathinfo($_FILES["gambar_kamar_dalam"]["name"], PATHINFO_EXTENSION));
        $gambar_kamar_dalam_name = uniqid() . '.' . $gambar_kamar_dalam_ext;
        $gambar_kamar_dalam_path = $targetDir . $gambar_kamar_dalam_name;
        move_uploaded_file($gambar_kamar_dalam_temp, $gambar_kamar_dalam_path);

        // Upload gambar kamar mandi
        $gambar_kamar_mandi_temp = $_FILES["gambar_kamar_mandi"]["tmp_name"];
        $gambar_kamar_mandi_ext = strtolower(pathinfo($_FILES["gambar_kamar_mandi"]["name"], PATHINFO_EXTENSION));
        $gambar_kamar_mandi_name = uniqid() . '.' . $gambar_kamar_mandi_ext;
        $gambar_kamar_mandi_path = $targetDir . $gambar_kamar_mandi_name;
        move_uploaded_file($gambar_kamar_mandi_temp, $gambar_kamar_mandi_path);

        $query = "INSERT INTO kos (id_pemilik, nama_kos, tipe_kamar, jenis_kos, longitude, latitude, deskripsi_kos, tahun_pembangunan_kos, alamat_kos, kec_kos, kab_kota_kos, provinsi_kos, panjang_kamar, lebar_kamar, sisa_kamar, jumlah_kamar, gambar_kamar_dalam, gambar_kamar_depan, gambar_kamar_mandi, gambar_kos_dalam, gambar_kos_depan, harga_bulan, nama_pemilik_rekening, nama_bank, no_rek) VALUES ('$id_pemilik','$nama_kos', '$tipe_kamar', '$jenis_kos', '$longitude', '$latitude', '$deskripsi_kos', '$tahun_pembangunan_kos', '$alamat_kos', '$kec_kos', '$kab_kota_kos', '$prov_kos', '$panjang_kamar', '$lebar_kamar', '$sisa_kamar', '$jumlah_kamar', '$gambar_kamar_dalam', '$gambar_kamar_depan', '$gambar_kamar_mandi', '$gambar_kos_dalam', '$gambar_kos_depan', '$harga_bulan', '$nama_pemilik_rekening', '$nama_bank', '$no_rek')";
        $sql = mysqli_query($conn, $query);

        $last_inserted_id = $conn->insert_id;

        foreach ($peraturan_kos_array as $peraturan_kos) {
            $query_peraturan = "INSERT INTO peraturan_kos (id_kos, peraturan_kos) VALUES ('$last_inserted_id', '$peraturan_kos')";
            $sql1 = mysqli_query($conn, $query_peraturan);
        }
        foreach ($fasilitas_umum_array as $fasilitas_umum) {
            $query_fasilitasumum = "INSERT INTO fasilitas_umum (id_kos, fasilitas_umum) VALUES ('$last_inserted_id', '$fasilitas_umum')";
            $sql2 = mysqli_query($conn, $query_fasilitasumum);
        }
        foreach ($fasilitas_kamar_array as $fasilitas_kamar) {
            $query_fasilitaskamar = "INSERT INTO fasilitas_kamar (id_kos, fasilitas_kamar) VALUES ('$last_inserted_id', '$fasilitas_kamar')";
            $sql3 = mysqli_query($conn, $query_fasilitaskamar);
        }

        if (!$sql && !$sql2 && !$sql3) {
            die("Query Error : " . mysqli_errno($conn) . " - " . mysqli_error($conn));
        } else {
            echo
            "<script>
                alert('Data berhasil diupload');
                window.location.href = 'index.php';
            </script>";
        }
    }
}
