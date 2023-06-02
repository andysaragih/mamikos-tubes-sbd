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
        $_SESSION['id_user'] = $result['id_user'];
        $_SESSION['nohp'] = $result['no_hp_user'];
        $_SESSION['nama'] = $result['nama_user'];
        $_SESSION['email'] = $result['email'];
        $_SESSION['password'] = $result['password'];
        $_SESSION['jenis_kelamin'] = $result['jenis_kelamin'];
        $_SESSION['photo_profile'] = $result['photo_profile'];
        $_SESSION['role'] = $result['role'];

        echo "
            <script>
                document.location.href = '../mamikos.php';
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

function login_admin($data)
{
    global $conn;

    $user = $_POST['username'];
    $pass_login = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE username = '$user' AND password = '$pass_login'";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($query);
    $cek = mysqli_num_rows($query);

    if ($cek == 1) {
        $_SESSION['id_user'] = $result['id_admin'];
        $_SESSION['username'] = $result['username'];
        $_SESSION['password'] = $result['password'];

        echo "
            <script>
                document.location.href = '../admin/index.php';
            </script>
            ";
    } else {
        echo "
        <script>
            alert('Username atau password salah. Silahkan login kembali');
            document.location.href = 'login_admin.php';
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
        $_SESSION['role'] = $result['role'];
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
    $jenis_kelamin = $_POST['jeniskelamin'];
    $passconfir = $_POST['passwordconfir'];
    $password = password_hash($pass, PASSWORD_DEFAULT);

    $sql = "INSERT INTO pemilik (nama_pemilik, email_pemilik, no_hp_pemilik, password, jenis_kelamin) VALUES ('$nama', '$email','$no_hp', '$password', '$jenis_kelamin')";

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
                $query = "UPDATE user SET nama_user ='$nama', photo_profile ='$new_files_name', jenis_kelamin='$jenis',tanggal_lahir='$tanggal',kota_asal='$kota', pendidikan_terakhir='$pendidikan', no_hp_darurat = '$no_hp_darurat', profesi = '$profesi' WHERE no_hp_user='$nohp'";
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
        $query = "UPDATE user SET nama_user ='$nama', jenis_kelamin='$jenis',tanggal_lahir='$tanggal',kota_asal='$kota', pendidikan_terakhir='$pendidikan', no_hp_darurat = '$no_hp_darurat', profesi = '$profesi' WHERE no_hp_user='$nohp'";
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
    $embed_map = $_POST['embed_map'];
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
    $listrik = $_POST['listrik'];

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

        // Upload gambar kamar dalam
        $gambar_kamar_dalam_temp = $_FILES["gambar_kamar_dalam"]["tmp_name"];
        $gambar_kamar_dalam_ext = strtolower(pathinfo($_FILES["gambar_kamar_dalam"]["name"], PATHINFO_EXTENSION));
        $gambar_kamar_dalam_name = uniqid() . '.' . $gambar_kamar_dalam_ext;
        $gambar_kamar_dalam_path = $targetDir . $gambar_kamar_dalam_name;

        // Upload gambar kamar mandi
        $gambar_kamar_mandi_temp = $_FILES["gambar_kamar_mandi"]["tmp_name"];
        $gambar_kamar_mandi_ext = strtolower(pathinfo($_FILES["gambar_kamar_mandi"]["name"], PATHINFO_EXTENSION));
        $gambar_kamar_mandi_name = uniqid() . '.' . $gambar_kamar_mandi_ext;
        $gambar_kamar_mandi_path = $targetDir . $gambar_kamar_mandi_name;

        if (move_uploaded_file($gambar_kamar_depan_temp, $gambar_kamar_depan_path) && move_uploaded_file($gambar_kamar_dalam_temp, $gambar_kamar_dalam_path) && move_uploaded_file($gambar_kamar_mandi_temp, $gambar_kamar_mandi_path)) {
            $query = "INSERT INTO kos (id_pemilik, nama_kos, tipe_kamar, jenis_kos, longitude, latitude, embed_map, deskripsi_kos, tahun_pembangunan_kos, alamat_kos, kec_kos, kab_kota_kos, provinsi_kos, panjang_kamar, lebar_kamar, sisa_kamar, listrik, jumlah_kamar, gambar_kamar_dalam, gambar_kamar_depan, gambar_kamar_mandi, gambar_kos_dalam, gambar_kos_depan, harga_bulan, nama_pemilik_rekening, nama_bank, no_rek) 
            VALUES ('$id_pemilik','$nama_kos', '$tipe_kamar', '$jenis_kos', '$longitude', '$latitude', '$embed_map', '$deskripsi_kos', '$tahun_pembangunan_kos', '$alamat_kos', '$kec_kos', '$kab_kota_kos', '$prov_kos', '$panjang_kamar', '$lebar_kamar', '$sisa_kamar', '$listrik', '$jumlah_kamar', '$gambar_kamar_dalam_name', '$gambar_kamar_depan_name', '$gambar_kamar_mandi_name', '$gambar_kos_dalam_name', '$gambar_kos_depan_name', '$harga_bulan', '$nama_pemilik_rekening', '$nama_bank', '$no_rek')";
            $sql = mysqli_query($conn, $query);
            if (!$sql) {
                die("Query Error: " . mysqli_error($conn));
            } else {
                echo "<script> 
                alert('Data berhasil disimpan dan gambar diupload.');
                window.location.href = 'index.php';
                </script>";
            }
        }
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
    } else {
        $query = "INSERT INTO kos (id_pemilik, nama_kos, tipe_kamar, jenis_kos, longitude, latitude, embed_map, deskripsi_kos, tahun_pembangunan_kos, alamat_kos, kec_kos, kab_kota_kos, provinsi_kos, panjang_kamar, lebar_kamar, sisa_kamar, listrik, jumlah_kamar, harga_bulan, nama_pemilik_rekening, nama_bank, no_rek) 
            VALUES ('$id_pemilik','$nama_kos', '$tipe_kamar', '$jenis_kos', '$longitude', '$latitude', '$embed_map', '$deskripsi_kos', '$tahun_pembangunan_kos', '$alamat_kos', '$kec_kos', '$kab_kota_kos', '$prov_kos', '$panjang_kamar', '$lebar_kamar', '$sisa_kamar', '$listrik', '$jumlah_kamar', '$harga_bulan', '$nama_pemilik_rekening', '$nama_bank', '$no_rek')";
        $sql = mysqli_query($conn, $query);
        if (!$sql) {
            die("Query Error: " . mysqli_error($conn));
        } else {
            echo "<script> 
                alert('Data berhasil disimpan dan gambar diupload.');
                window.location.href = 'index.php';
                </script>";
        }
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

function edit_pemilik($data)
{
    global $conn;

    $id = $_GET['id_pemilik'];

    $nama_pemilik = $_POST['nama_pemilik'];
    $no_hp_pemilik = $_POST['no_hp_pemilik'];
    $password = $_POST['password'];
    $email_pemilik = $_POST['email_pemilik'];
    $pass_hash = password_hash($password, PASSWORD_DEFAULT);

    $query = "UPDATE pemilik SET nama_pemilik = '$nama_pemilik', no_hp_pemilik = '$no_hp_pemilik', password = '$pass_hash', email_pemilik = '$email_pemilik' WHERE id_pemilik = $id ";
    if (mysqli_query($conn, $query)) {
        echo "
          <script>
              alert('Edit Akun Berhasil');
              document.location.href = 'akun-owner.php';
          </script>";
    } else {
        echo "
          <script>
              alert('Edit Akun Gagal');
              document.location.href = 'akun-owner.php';
          </script>";
    }
}


function ajukan_sewa($data)
{
    global $conn;

    $id = $_GET['id'];
    $id_pemilik = $_GET['id_pemilik'];
    $id_user = $_SESSION['id_user'];

    $jumlah = $_POST['jumlah_penyewa'];
    $masuk = $_POST['tanggal_masuk'];
    $durasi = $_POST['durasi_sewa'];
    $keluar = date('Y-m-d', strtotime($masuk . ' +' . $durasi . ' months'));
    $fotoktp = $_FILES['foto_ktp']['name'];
    $fotoktpdiri = $_FILES['foto_ktp_diri']['name'];
    $fotokk = $_FILES['foto_kk']['name'];

    date_default_timezone_set('Asia/Jakarta');

    // Mendapatkan waktu saat ini dalam zona waktu WIB
    $timestamp = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
    $date = $timestamp->format('Y-m-d H:i:s');

    $date = date('Y-m-d H:i:s');

    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
    $targetDir = "uploads/";

    if ($fotoktp != '') {
        $fotoktp_temp = $_FILES["foto_ktp"]["tmp_name"];
        $fotoktp_ext = strtolower(pathinfo($_FILES["foto_ktp"]["name"], PATHINFO_EXTENSION));
        $fotoktp_name = uniqid() . '.' . $fotoktp_ext;
        $fotoktp_path = $targetDir . $fotoktp_name;
        move_uploaded_file($fotoktp_temp, $fotoktp_path);

        $tambah = "INSERT INTO pengajuan_sewa (id_kos, id_user, jumlah_penyewa, tanggal_masuk, tanggal_keluar, durasi_sewa, foto_ktp, tanggal_pengajuan_sewa) VALUES ('$id', '$id_user', '$jumlah', '$masuk', '$keluar', '$durasi', '$fotoktp_name', '$date')";
        $sql = mysqli_query($conn, $tambah);

        if (!$sql) {
            die("Query Error : " . mysqli_errno($conn) . " - " . mysqli_error($conn));
        } else {
            echo
            "<script>
        alert('Data berhasil ditambah');
        window.location.href = 'pembayaran.php';
        </script>";
        }
    } else if ($fotoktp != '' && $fotoktpdiri != '') {
        $fotoktp_temp = $_FILES["foto_ktp"]["tmp_name"];
        $fotoktp_ext = strtolower(pathinfo($_FILES["foto_ktp"]["name"], PATHINFO_EXTENSION));
        $fotoktp_name = uniqid() . '.' . $fotoktp_ext;
        $fotoktp_path = $targetDir . $fotoktp_name;
        move_uploaded_file($fotoktp_temp, $fotoktp_path);

        $fotoktpdiri_temp = $_FILES["foto_ktp_diri"]["tmp_name"];
        $fotoktpdiri_ext = strtolower(pathinfo($_FILES["foto_ktp_diri"]["name"], PATHINFO_EXTENSION));
        $fotoktpdiri_name = uniqid() . '.' . $fotoktpdiri_ext;
        $fotoktpdiri_path = $targetDir . $fotoktpdiri_name;
        move_uploaded_file($fotoktpdiri_temp, $fotoktpdiri_path);

        $tambah = "INSERT INTO pengajuan_sewa (id_kos, id_user, jumlah_penyewa, tanggal_masuk, tanggal_keluar, durasi_sewa, foto_ktp, foto_ktp_diri, tanggal_pengajuan_sewa) VALUES ('$id', '$id_user', '$jumlah', '$masuk', '$keluar', '$durasi', '$fotoktp_name', '$fotoktpdiri_name', '$date')";
        $sql = mysqli_query($conn, $tambah);

        if (!$sql) {
            die("Query Error : " . mysqli_errno($conn) . " - " . mysqli_error($conn));
        } else {
            echo
            "<script>
            alert('Data berhasil ditambah');
            window.location.href = 'pembayaran.php';
            </script>";
        }
    } else if ($fotokk != '') {
        $fotokk_temp = $_FILES["foto_kk"]["tmp_name"];
        $fotokk_ext = strtolower(pathinfo($_FILES["foto_kk"]["name"], PATHINFO_EXTENSION));
        $fotokk_name = uniqid() . '.' . $fotokk_ext;
        $fotokk_path = $targetDir . $fotokk_name;
        move_uploaded_file($fotokk_temp, $fotokk_path);

        $tambah = "INSERT INTO pengajuan_sewa (id_kos, id_user, jumlah_penyewa, tanggal_masuk, tanggal_keluar, durasi_sewa, foto_kk, tanggal_pengajuan_sewa) VALUES ('$id', '$id_user', '$jumlah', '$masuk', '$keluar', '$durasi', '$fotokk_name', '$date')";
        $sql = mysqli_query($conn, $tambah);

        if (!$sql) {
            die("Query Error : " . mysqli_errno($conn) . " - " . mysqli_error($conn));
        } else {
            echo
            "<script>
            alert('Data berhasil ditambah');
            window.location.href = 'pembayaran.php';
            </script>";
        }
    } else if ($fotoktp != '' && $fotoktpdiri != '' && $fotokk != '') {
        $fotoktp_temp = $_FILES["foto_ktp"]["tmp_name"];
        $fotoktp_ext = strtolower(pathinfo($_FILES["foto_ktp"]["name"], PATHINFO_EXTENSION));
        $fotoktp_name = uniqid() . '.' . $fotoktp_ext;
        $fotoktp_path = $targetDir . $fotoktp_name;
        move_uploaded_file($fotoktp_temp, $fotoktp_path);

        $fotoktpdiri_temp = $_FILES["fotoktpdiri"]["tmp_name"];
        $fotoktpdiri_ext = strtolower(pathinfo($_FILES["fotoktpdiri"]["name"], PATHINFO_EXTENSION));
        $fotoktpdiri_name = uniqid() . '.' . $fotoktpdiri_ext;
        $fotoktpdiri_path = $targetDir . $fotoktpdiri_name;
        move_uploaded_file($fotoktpdiri_temp, $fotoktpdiri_path);

        $fotokk_temp = $_FILES["foto_kk"]["tmp_name"];
        $fotokk_ext = strtolower(pathinfo($_FILES["foto_kk"]["name"], PATHINFO_EXTENSION));
        $fotokk_name = uniqid() . '.' . $fotokk_ext;
        $fotokk_path = $targetDir . $fotokk_name;
        move_uploaded_file($fotokk_temp, $fotokk_path);

        $tambah = "INSERT INTO pengajuan_sewa (id_kos, id_user, jumlah_penyewa, tanggal_masuk, tanggal_keluar, durasi_sewa, foto_ktp, foto_ktp_diri, foto_kk, tanggal_pengajuan_sewa) VALUES ('$id', '$id_user', '$jumlah', '$masuk', '$keluar', '$durasi', '$fotoktp_name', '$fotoktpdiri_name', '$fotokk_name', '$date')";
        $sql = mysqli_query($conn, $tambah);

        if (!$sql) {
            die("Query Error : " . mysqli_errno($conn) . " - " . mysqli_error($conn));
        } else {
            echo
            "<script>
            alert('Data berhasil ditambah');
            window.location.href = 'pembayaran.php';
            </script>";
        }
    } else {
        $tambah = "INSERT INTO pengajuan_sewa (id_kos, id_user, jumlah_penyewa, tanggal_masuk, tanggal_keluar, durasi_sewa, tanggal_pengajuan_sewa) VALUES ('$id', '$id_user', '$jumlah', '$masuk', '$keluar', '$durasi', '$date')";
        $sql = mysqli_query($conn, $tambah);
        $last_inserted_id = $conn->insert_id;
        if (!$sql) {
            die("Query Error : " . mysqli_errno($conn) . " - " . mysqli_error($conn));
        } else {
            echo
            "<script>
            alert('Data berhasil ditambah');
            window.location.href = 'pembayaran.php?id_kos=$id&id=$last_inserted_id&id_pemilik=$id_pemilik';
            </script>";
        }
    }
}

function bayar_kos($data)
{
    global $conn;

    $id_kos = $_GET['id_kos'];
    $id = $_GET['id'];
    $id_pemilik = $_GET['id_pemilik'];
    $id_user = $_SESSION['id_user'];

    $metode = $_POST['metode_pembayaran'];

    $timestamp = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
    $date = $timestamp->format('Y-m-d H:i:s');
    $date = date('Y-m-d H:i:s');

    $namakos = $_POST['namakos'];
    $hargakos = $_POST['hargakos'];
    $sisakamar = $_POST['sisa_kamar'] - 1;
    $norek = $_POST['norek'];

    $ran = random_int(0001, 1000);
    $tanggal = date("Ymd");
    $nama = "MAMIKOS-" . $tanggal . $ran;

    $tampil = "SELECT * FROM kos WHERE id_kos = '$id_kos'";
    $query = mysqli_query($conn, $tampil);
    $result = mysqli_fetch_assoc($query);
    $alamat_kos = $result['alamat_kos'];
    $gambar_kos = $result['gambar_kos_depan'];

    $show = "SELECT * FROM pengajuan_sewa WHERE id_pengajuan_sewa = '$id'";
    $query2 = mysqli_query($conn, $show);
    $hasil = mysqli_fetch_assoc($query2);
    $masuk = $hasil['tanggal_masuk'];
    $keluar = $hasil['tanggal_keluar'];

    $tambah = "INSERT INTO riwayat_transaksi (id_user, id_pemilik, id_kos, metode_pembayaran, tanggal_pembayaran, invoice, nama_kos, harga_kos, no_rekening_user, gambar_kos) VALUES ('$id_user', '$id_pemilik', '$id_kos','$metode', '$date', '$nama', '$namakos', '$hargakos', '$norek', '$gambar_kos')";
    $sql = mysqli_query($conn, $tambah);

    $last_inserted_id = $conn->insert_id;
    $riwayat = "INSERT INTO riwayat_kos (id_user, id_kos, nama_kos, alamat_kos, harga_kos, tanggal_masuk, tanggal_keluar, gambar_kos) VALUES ('$id_user', '$id_kos', '$namakos', '$alamat_kos', '$hargakos', '$masuk', '$keluar', '$gambar_kos')";
    $kos = mysqli_query($conn, $riwayat);


    $update = "UPDATE kos SET sisa_kamar = '$sisakamar' WHERE id_kos = '$id_kos'";
    $sql1 = mysqli_query($conn, $update);

    $_SESSION['id_kos'] = $id_kos;

    if (!$sql) {
        die("Query Error : " . mysqli_errno($conn) . " - " . mysqli_error($conn));
    } else {
        echo
        "<script>
        alert('Data berhasil ditambah');
        window.location.href = 'berhasil.php?id_kos=$id_kos&id=$last_inserted_id';
        </script>";
    }
}

function beri_review($data)
{
    global $conn;

    $id_kos = $_GET['id_kos'];
    $id_user = $_SESSION['id_user'];

    $kebersihan = $_POST['kebersihan'];
    $kenyamanan = $_POST['kenyamanan'];
    $keamanan = $_POST['keamanan'];
    $harga = $_POST['harga'];
    $fasilitas_kamar = $_POST['fasilitas_kamar'];
    $fasilitas_umum = $_POST['fasilitas_umum'];
    $review = $_POST['revieww'];

    $rating = ($kebersihan + $kenyamanan + $keamanan + $harga + $fasilitas_kamar + $fasilitas_umum) / 6;

    $tambah = "INSERT INTO 
                review (id_kos, id_user, kebersihan, kenyamanan, keamanan, harga, fasilitas_kamar, fasilitas_umum, rating, review)
                VALUES ('$id_kos', '$id_user', '$kebersihan', '$kenyamanan', '$keamanan', '$harga', '$fasilitas_kamar', '$fasilitas_umum', '$rating', '$review')";
    $sql = mysqli_query($conn, $tambah);

    if (!$sql) {
        die("Query Error : " . mysqli_errno($conn) . " - " . mysqli_error($conn));
    } else {
        echo
        "<script>
        alert('Data berhasil ditambah');
        window.location.href = 'profile.php';
        </script>";
    }
}

function edit_kost($data)
{
    global $conn;

    $id_kos = $_GET['id'];

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
    $embed_map = $_POST['embed_map'];
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
    $listrik = $_POST['listrik'];

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

        // Upload gambar kamar dalam
        $gambar_kamar_dalam_temp = $_FILES["gambar_kamar_dalam"]["tmp_name"];
        $gambar_kamar_dalam_ext = strtolower(pathinfo($_FILES["gambar_kamar_dalam"]["name"], PATHINFO_EXTENSION));
        $gambar_kamar_dalam_name = uniqid() . '.' . $gambar_kamar_dalam_ext;
        $gambar_kamar_dalam_path = $targetDir . $gambar_kamar_dalam_name;

        // Upload gambar kamar mandi
        $gambar_kamar_mandi_temp = $_FILES["gambar_kamar_mandi"]["tmp_name"];
        $gambar_kamar_mandi_ext = strtolower(pathinfo($_FILES["gambar_kamar_mandi"]["name"], PATHINFO_EXTENSION));
        $gambar_kamar_mandi_name = uniqid() . '.' . $gambar_kamar_mandi_ext;
        $gambar_kamar_mandi_path = $targetDir . $gambar_kamar_mandi_name;

        if (move_uploaded_file($gambar_kamar_depan_temp, $gambar_kamar_depan_path) && move_uploaded_file($gambar_kamar_dalam_temp, $gambar_kamar_dalam_path) && move_uploaded_file($gambar_kamar_mandi_temp, $gambar_kamar_mandi_path)) {
            $query = "UPDATE kos SET id_pemilik = '$id_pemilik', 
                                     nama_kos = '$nama_kos', 
                                     tipe_kamar = '$tipe_kamar',
                                     jenis_kos = '$jenis_kos', 
                                     longitude = '$longitude', 
                                     latitude = '$latitude',
                                     embed_map = '$embed_map', 
                                     deskripsi_kos = '$deskripsi_kos', 
                                     tahun_pembangunan_kos = '$tahun_pembangunan_kos', 
                                     alamat_kos = '$alamat_kos', 
                                     kec_kos = '$kec_kos', 
                                     kab_kota_kos = '$kab_kota_kos', 
                                     provinsi_kos = '$prov_kos', 
                                     panjang_kamar = '$panjang_kamar', 
                                     lebar_kamar = '$lebar_kamar', 
                                     sisa_kamar = '$sisa_kamar',
                                     listrik = '$listrik', 
                                     jumlah_kamar = '$jumlah_kamar', 
                                     gambar_kamar_dalam = '$gambar_kamar_dalam_name', 
                                     gambar_kamar_depan = '$gambar_kos_depan_name', 
                                     gambar_kamar_mandi = '$gambar_kamar_mandi_name', 
                                     gambar_kos_dalam = '$gambar_kos_dalam_name', 
                                     gambar_kos_depan = '$gambar_kos_depan_name', 
                                     harga_bulan = '$harga_bulan',
                                     nama_pemilik_rekening = '$nama_pemilik_rekening',
                                     nama_bank = '$nama_bank', 
                                     no_rek = '$no_rek'";
            $sql = mysqli_query($conn, $query);
            if (!$sql) {
                die("Query Error: " . mysqli_error($conn));
            } else {
                echo "<script> 
                alert('Data berhasil disimpan dan gambar diupload.');
                window.location.href = 'index.php';
                </script>";
            }
        }
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
    } else {
        $query = $query = "UPDATE kos SET id_pemilik = '$id_pemilik', 
                                            nama_kos = '$nama_kos', 
                                            tipe_kamar = '$tipe_kamar',
                                            jenis_kos = '$jenis_kos', 
                                            longitude = '$longitude', 
                                            latitude = '$latitude',
                                            embed_map = '$embed_map', 
                                            deskripsi_kos = '$deskripsi_kos', 
                                            tahun_pembangunan_kos = '$tahun_pembangunan_kos', 
                                            alamat_kos = '$alamat_kos', 
                                            kec_kos = '$kec_kos', 
                                            kab_kota_kos = '$kab_kota_kos', 
                                            provinsi_kos = '$prov_kos', 
                                            panjang_kamar = '$panjang_kamar', 
                                            lebar_kamar = '$lebar_kamar', 
                                            sisa_kamar = '$sisa_kamar',
                                            listrik = '$listrik', 
                                            jumlah_kamar = '$jumlah_kamar', 
                                            harga_bulan = '$harga_bulan',
                                            nama_pemilik_rekening = '$nama_pemilik_rekening',
                                            nama_bank = '$nama_bank', 
                                            no_rek = '$no_rek' WHERE id_kos = '$id_kos'";
        $sql = mysqli_query($conn, $query);

        if (!$sql) {
            die("Query Error: " . mysqli_error($conn));
        } else {
            echo "<script> 
                alert('Data berhasil disimpan dan gambar diupload.');
                window.location.href = 'index.php';
                </script>";
        }

        $query_peraturan = "DELETE FROM peraturan_kos WHERE id_kos = '$id_kos'";
        $sql_hapus = mysqli_query($conn, $query_peraturan);
        $query_umum = "DELETE FROM fasilitas_umum WHERE id_kos = '$id_kos'";
        $sql_hapus1 = mysqli_query($conn, $query_umum);
        $query_kamar = "DELETE FROM fasilitas_kamar WHERE id_kos = '$id_kos'";
        $sql_hapus2 = mysqli_query($conn, $query_kamar);

        foreach ($peraturan_kos_array as $peraturan_kos) {
            $query_tambah = "INSERT INTO peraturan_kos (id_kos, peraturan_kos) VALUES ('$id_kos', '$peraturan_kos')";
            $sql_tambah = mysqli_query($conn, $query_tambah);
        }
        foreach ($fasilitas_umum_array as $fasilitas_umum) {
            $query_tambah1 = "INSERT INTO fasilitas_umum (id_kos, fasilitas_umum) VALUES ('$id_kos', '$fasilitas_umum')";
            $sql_tambah1 = mysqli_query($conn, $query_tambah1);
        }
        foreach ($fasilitas_kamar_array as $fasilitas_kamar) {
            $query_tambah2 = "INSERT INTO fasilitas_kamar (id_kos, fasilitas_kamar) VALUES ('$id_kos', '$fasilitas_kamar')";
            $sql_tambah2 = mysqli_query($conn, $query_tambah2);
        }

        if (!$sql_hapus && !$sql_hapus1 && !$sql_hapus2 && !$sql_tambah && !$sql_tambah1 && !$sql_tambah2) {
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

function cari($keyword)
{
    $cari = "SELECT a.*, GROUP_CONCAT(b.fasilitas_umum) AS fasilitas_umum 
             FROM kos a 
             INNER JOIN fasilitas_umum b 
             ON a.id_kos = b.id_kos
             WHERE a.kab_kota_kos LIKE '%$keyword%' OR
             a.nama_kos LIKE '%$keyword%' OR
             a.alamat_kos LIKE '%$keyword%' OR
             a.kec_kos LIKE '%$keyword%'
             GROUP BY id_kos";
}

function edit_pemilik_admin($pemilik)
{
    global $conn;

    $id = $pemilik["id_pemilik"];
    $nama = $pemilik["nama_pemilik"];
    $email = $pemilik["email_pemilik"];
    $pass = $pemilik["password"];

    $pass = password_hash($pass, PASSWORD_DEFAULT);

    $query = "
        UPDATE pemilik SET
        nama_pemilik = '$nama',
        email_pemilik = '$email',
        password = '$pass' 
        WHERE id_pemilik = '$id'
    ";



    if ($conn->query($query) === TRUE) {
        echo "
            <script>
                alert('akun berhasil diupdate');
                document.location.href = 'pemilik.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('akun gagal diupdate');
                document.location.href = 'pemilik.php';
            </script>
        ";
    }
}

function edit_user($users)
{
    global $conn;

    $id = $users["id_user"];
    $nama = $users["nama_user"];
    $nohp = $users["no_hp_user"];
    $email = $users["email"];
    $pass = $users["password"];

    $pass = password_hash($pass, PASSWORD_DEFAULT);

    $query = "
        UPDATE user SET
        nama_user = '$nama',
        no_hp_user = '$nohp',
        email = '$email',
        password = '$pass'  
        WHERE id_user = '$id'
    ";



    if ($conn->query($query) === TRUE) {
        echo "
            <script>
                alert('akun berhasil diupdate');
                document.location.href = 'user.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('akun gagal diupdate');
                document.location.href = 'user.php';
            </script>
        ";
    }
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM user WHERE id_user = " . $id . "");

    return mysqli_affected_rows($conn);
}

function hapus2($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM pemilik WHERE id_pemilik = " . $id . "");

    return mysqli_affected_rows($conn);
}

function hapus3($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM pengajuan_sewa WHERE id_pengajuan_sewa = " . $id . "");

    return mysqli_affected_rows($conn);
}
