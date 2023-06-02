<?php
    error_reporting(0);
    include("1sidebar.php");
    include("1header.php"); 
    include ("../function.php");
    $data=mysqli_query($conn, "SELECT * FROM kos JOIN peraturan_kos ON kos.id_kos = peraturan_kos.id_kos WHERE kos.id_kos = '".$_GET['id']."'");
    $kos=mysqli_fetch_object($data);
    ?>
<div class="row">
        <div class="col-12 col-lg-12 col-md-12 col-sm-12">

            <div class="card mb-3">
                <h5 class="card-header">Data Pribadi</h5>
                <div class="card-body bg-light">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="row form-group mb-3 align-items-center bg-light">
                            <div class="col-4 text-end">
                                <label for="name"><strong>Nama Kos</strong></label>
                                <p>Saran: Kos (spasi) Nama Kos, Tanpa Nama Kecamatan dan Kota</p>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control w-50" id="name" name="nama_kos" required  value="<?php echo $kos -> nama_kos ?>">
                            </div>
                        </div>
                        <div class="row form-group mb-3 align-items-center bg-light">
                            <div class="col-4 text-end">
                                <label for="name"><strong>Tipe Kamar</strong></label>
                                <p>Saran: Tipe A atau VVIP atau Executive</p>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control w-50" id="tipe" name="tipe_kamar" required value="<?php echo $kos -> tipe_kamar ?>">
                            </div>
                        </div>
                        <div class="row form-group mb-3 align-items-center">
                            <div class="col-4 text-end">
                                <label for="kota"><strong>Jenis Kos</strong></label>
                            </div>
                            <div class="col-8">
                                <select class="form-select w-50" aria-label="Default select example" name="jenis_kos">
                                    <option>Putra</option>
                                    <option>Putri</option>
                                    <option>Campuran</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group mb-3 align-items-center bg-light">
                            <div class="col-4 text-end">
                                <label for="name"><strong>Deskripsi Kos</strong></label>
                                <p>Ceritakan hal menarik tentang kos Anda.</p>
                            </div>
                            <div class="col-8">
                                <textarea class="form-control w-50" name="deskripsi_kos" required></textarea>
                            </div>
                        </div>
                        <div class="row form-group mb-3 bg-light">
                            <div class="col-4 text-end">
                                <label for="name"><strong>Peraturan Kos</strong></label>
                            </div>
                            <div class="col-8">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="peraturan_kos[]" value="> 5 orang/ kamar" id="flexCheckDefault"  
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM peraturan_kos WHERE peraturan_kos = '> 5 orang/ kamar' AND id_kos = '".$_GET['id']."'");
                                        $aturan_kos =  mysqli_fetch_object($pkos);
                                        if (!empty($aturan_kos)) {
                                        echo 'checked';
                                    }
                                    ?>
                                    >
                                    <label class="form-check-label" for="flexCheckDefault">
                                        > 5 orang/ kamar
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="peraturan_kos[]" value="Ada jam malam" id="flexCheckChecked"
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM peraturan_kos WHERE peraturan_kos = 'Ada jam malam' AND id_kos = '".$_GET['id']."'");
                                        $aturan_kos =  mysqli_fetch_object($pkos);
                                        if (!empty($aturan_kos)) {
                                        echo 'checked';
                                    }
                                    ?>
                                    >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Ada jam malam
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="peraturan_kos[]" value="Akses 24 jam" id="flexCheckChecked"
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM peraturan_kos WHERE peraturan_kos = 'Akses 24 jam' AND id_kos = '".$_GET['id']."'");
                                        $aturan_kos =  mysqli_fetch_object($pkos);
                                        if (!empty($aturan_kos)) {
                                        echo 'checked';
                                    }
                                    ?>
                                    >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Akses 24 jam
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="peraturan_kos[]" value="Boleh bawa hewan" id="flexCheckChecked"
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM peraturan_kos WHERE peraturan_kos = 'Boleh bawa hewan' AND id_kos = '".$_GET['id']."'");
                                        $aturan_kos =  mysqli_fetch_object($pkos);
                                        if (!empty($aturan_kos)) {
                                        echo 'checked';
                                    }
                                    ?>
                                    >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Boleh bawa hewan
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="peraturan_kos[]" value="Dilarang merokok di kamar" id="flexCheckChecked"
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM peraturan_kos WHERE peraturan_kos = 'Dilarang merokok di kamar' AND id_kos = '".$_GET['id']."'");
                                        $aturan_kos =  mysqli_fetch_object($pkos);
                                        if (!empty($aturan_kos)) {
                                        echo 'checked';
                                    }
                                    ?>
                                    >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Dilarang merokok di kamar
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="peraturan_kos[]" value="Lawan jenis dilarang ke kamar" id="flexCheckChecked"
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM peraturan_kos WHERE peraturan_kos = 'Lawan jenis dilarang ke kamar' AND id_kos = '".$_GET['id']."'");
                                        $aturan_kos =  mysqli_fetch_object($pkos);
                                        if (!empty($aturan_kos)) {
                                        echo 'checked';
                                    }
                                    ?>
                                    >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Lawan jenis dilarang ke kamar
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="peraturan_kos[]" value="Maksimal 1 orang/kamar" id="flexCheckChecked"
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM peraturan_kos WHERE peraturan_kos = 'Maksimal 1 orang/kamar' AND id_kos = '".$_GET['id']."'");
                                        $aturan_kos =  mysqli_fetch_object($pkos);
                                        if (!empty($aturan_kos)) {
                                        echo 'checked';
                                    }
                                    ?>
                                    >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Maksimal 1 orang/kamar
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="peraturan_kos[]" value="Maksimal 2 orang/kamar" id="flexCheckChecked"
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM peraturan_kos WHERE peraturan_kos = 'Maksimal 2 orang/kamar' AND id_kos = '".$_GET['id']."'");
                                        $aturan_kos =  mysqli_fetch_object($pkos);
                                        if (!empty($aturan_kos)) {
                                        echo 'checked';
                                    }
                                    ?>
                                    >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Maksimal 2 orang/kamar
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="peraturan_kos[]" value="Maksimal 3 orang/kamar" id="flexCheckChecked"
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM peraturan_kos WHERE peraturan_kos = 'Maksimal 3 orang/kamar' AND id_kos = '".$_GET['id']."'");
                                        $aturan_kos =  mysqli_fetch_object($pkos);
                                        if (!empty($aturan_kos)) {
                                        echo 'checked';
                                    }
                                    ?>
                                    >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Maksimal 3 orang/kamar
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="peraturan_kos[]" value="Maksimal 4 orang/kamar" id="flexCheckChecked"
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM peraturan_kos WHERE peraturan_kos = 'Maksimal 4 orang/kamar' AND id_kos = '".$_GET['id']."'");
                                        $aturan_kos =  mysqli_fetch_object($pkos);
                                        if (!empty($aturan_kos)) {
                                        echo 'checked';
                                    }
                                    ?>>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Maksimal 4 orang/kamar
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="peraturan_kos[]" value="Tamu bebas berkunjung" id="flexCheckChecked"
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM peraturan_kos WHERE peraturan_kos = 'Tamu bebas berkunjung' AND id_kos = '".$_GET['id']."'");
                                        $aturan_kos =  mysqli_fetch_object($pkos);
                                        if (!empty($aturan_kos)) {
                                        echo 'checked';
                                    }
                                    ?>
                                    >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Tamu bebas berkunjung
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="peraturan_kos[]" value="Tamu boleh menginap" id="flexCheckChecked"
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM peraturan_kos WHERE peraturan_kos = 'Tamu boleh menginap' AND id_kos = '".$_GET['id']."'");
                                        $aturan_kos =  mysqli_fetch_object($pkos);
                                        if (!empty($aturan_kos)) {
                                        echo 'checked';
                                    }
                                    ?>
                                    >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Tamu boleh menginap
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="peraturan_kos[]" value="Termasuk listrik" id="flexCheckChecked"
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM peraturan_kos WHERE peraturan_kos = 'Termasuk listrik' AND id_kos = '".$_GET['id']."'");
                                        $aturan_kos =  mysqli_fetch_object($pkos);
                                        if (!empty($aturan_kos)) {
                                        echo 'checked';
                                    }
                                    ?>
                                    >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Termasuk listrik
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="peraturan_kos[]" value="Wajib sertakan KTP saat pengajuan sewa" id="flexCheckChecked"
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM peraturan_kos WHERE peraturan_kos = 'Wajib sertakan KTP saat pengajuan sewa' AND id_kos = '".$_GET['id']."'");
                                        $aturan_kos =  mysqli_fetch_object($pkos);
                                        if (!empty($aturan_kos)) {
                                        echo 'checked';
                                    }
                                    ?>
                                    >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Wajib sertakan KTP saat pengajuan sewa
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="peraturan_kos[]" value="Wajib sertakan kartu keluarga saat pengajuan sewa" id="flexCheckChecked"
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM peraturan_kos WHERE peraturan_kos = 'Wajib sertakan kartu keluarga saat pengajuan sewa' AND id_kos = '".$_GET['id']."'");
                                        $aturan_kos =  mysqli_fetch_object($pkos);
                                        if (!empty($aturan_kos)) {
                                        echo 'checked';
                                    }
                                    ?>
                                    >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Wajib sertakan kartu keluarga saat pengajuan sewa
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group mb-3 align-items-center bg-light">
                            <div class="col-4 text-end">
                                <label for="name"><strong>Kapan kos ini dibangun?</strong></label>
                            </div>
                            <div class="col-8">
                                <input type="number" min="1950" name="tahun_pembangunan_kos" class="form-control w-50" required value="<?php echo $kos -> tahun_pembangunan_kos ?>">
                            </div>
                        </div>
                        <div class="row form-group mb-3 align-items-center bg-light">
                            <div class="col-4 text-end">
                                <label for="name"><strong>Alamat Kos</strong></label>
                            </div>
                            <div class="col-8">
                                <textarea class="form-control w-50" name="alamat_kos" required> <?php echo $kos -> alamat_kos ?>></textarea>
                            </div>
                        </div>
                        <div class="row form-group mb-3 align-items-center bg-light">
                            <div class="col-4 text-end">
                                <label for="name"><strong>Provinsi</strong></label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="provinsi_kos" class=" form-control w-50" required value="<?php echo $kos -> provinsi_kos ?>">
                            </div>
                        </div>
                        <div class="row form-group mb-3 align-items-center bg-light">
                            <div class="col-4 text-end">
                                <label for="name"><strong>Kabupaten/Kota</strong></label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="kab_kota_kos" class="form-control w-50" required value="<?php echo $kos -> tahun_pembangunan_kos ?>">
                            </div>
                        </div>
                        <div class="row form-group mb-3 align-items-center bg-light">
                            <div class="col-4 text-end">
                                <label for="name"><strong>Kecamatan</strong></label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="kec_kos" class="form-control w-50" required value="<?php echo $kos -> kec_kos ?>">
                            </div>
                        </div>
                        <div class="row form-group mb-3 align-items-center bg-light">
                            <div class="col-4 text-end">
                                <label for="name"><strong>Latitude</strong></label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="latitude" class=" form-control w-50" required value="<?php echo $kos -> latitude ?>" >
                            </div>
                        </div>
                        <div class="row form-group mb-3 align-items-center bg-light">
                            <div class="col-4 text-end">
                                <label for="name"><strong>Longitude</strong></label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="longitude" class="form-control w-50" required value="<?php echo $kos -> longitude ?>" >
                            </div>
                        </div>
                        <div class="row form-group mb-3 align-items-center bg-light">
                            <div class="col-4 text-end">
                                <label for="name"><strong>Foto Kos</strong></label>
                            </div>
                            <div class="col-8">
                                <input type="file" class="input-image" accept="image/*" name="gambar_kos_depan" class=" form-control w-50"> (Tampak Depan) <br>
                                <input type="file" class="input-image" accept="image/*" name="gambar_kos_dalam" class=" form-control w-50"> (Tampak Dalam)
                            </div>
                        </div>
                        <div class="row form-group mb-3 align-items-center bg-light">
                            <div class="col-4 text-end">
                                <label for="name"><strong>Foto Kamar</strong></label>
                            </div>
                            <div class="col-8">
                                <input type="file" class="input-image" name="gambar_kamar_depan" class=" form-control w-50"> (Kamar depan) <br>
                                <input type="file" class="input-image" name="gambar_kamar_dalam" class=" form-control w-50"> (Kamar dalam) <br>
                                <input type="file" class="input-image" name="gambar_kamar_mandi" class=" form-control w-50"> (Kamar mandi)

                            </div>
                        </div>
                        <div class="row form-group mb-3 bg-light">
                            <div class="col-4 text-end">
                                <label for="name"><strong>Fasilitas Umum</strong></label>
                            </div>
                            <div class="col-8">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="fasilitas_umum[]" value=" CCTV" id="flexCheckChecked"
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM fasilitas_umum WHERE fasilitas_umum = ' CCTV' AND id_kos = '".$_GET['id']."'");
                                        $fasilitas_umum =  mysqli_fetch_object($pkos);
                                        if (!empty($fasilitas_umum)) {
                                        echo 'checked';
                                    }
                                    ?>
                                    >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        CCTV
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="fasilitas_umum[]" value="Kulkas" id="flexCheckDefault"
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM fasilitas_umum WHERE fasilitas_umum = 'Kulkas' AND id_kos = '".$_GET['id']."'");
                                        $fasilitas_umum =  mysqli_fetch_object($pkos);
                                        if (!empty($fasilitas_umum)) {
                                        echo 'checked';
                                    }
                                    ?>
                                    >
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Kulkas
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="fasilitas_umum[]" value="Dispenser" id="flexCheckChecked" 
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM fasilitas_umum WHERE fasilitas_umum = 'Dispenser' AND id_kos = '".$_GET['id']."'");
                                        $fasilitas_umum =  mysqli_fetch_object($pkos);
                                        if (!empty($fasilitas_umum)) {
                                        echo 'checked';
                                    }
                                    ?>
                                    >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Dispenser
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="fasilitas_umum[]" value="Dapur" id="flexCheckChecked"
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM fasilitas_umum WHERE fasilitas_umum = 'Dapur' AND id_kos = '".$_GET['id']."'");
                                        $fasilitas_umum =  mysqli_fetch_object($pkos);
                                        if (!empty($fasilitas_umum)) {
                                        echo 'checked';
                                    }
                                    ?>
                                    >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Dapur
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="fasilitas_umum[]" value="K. Mandi Luar" id="flexCheckChecked"
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM fasilitas_umum WHERE fasilitas_umum = 'K. Mandi Luar' AND id_kos = '".$_GET['id']."'");
                                        $fasilitas_umum =  mysqli_fetch_object($pkos);
                                        if (!empty($fasilitas_umum)) {
                                        echo 'checked';
                                    }
                                    ?>
                                    >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        K. Mandi Luar
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="fasilitas_umum[]" value="TV" id="flexCheckChecked"
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM fasilitas_umum WHERE fasilitas_umum = 'TV' AND id_kos = '".$_GET['id']."'");
                                        $fasilitas_umum =  mysqli_fetch_object($pkos);
                                        if (!empty($fasilitas_umum)) {
                                        echo 'checked';
                                    }
                                    ?>
                                    >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        TV
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="fasilitas_umum[]" value="Laundry" id="flexCheckChecked"
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM fasilitas_umum WHERE fasilitas_umum = 'Laundry' AND id_kos = '".$_GET['id']."'");
                                        $fasilitas_umum =  mysqli_fetch_object($pkos);
                                        if (!empty($fasilitas_umum)) {
                                        echo 'checked';
                                    }
                                    ?>
                                    >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Laundry
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="fasilitas_umum[]" value="WIFI" id="flexCheckChecked"
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM fasilitas_umum WHERE fasilitas_umum = 'WIFI' AND id_kos = '".$_GET['id']."'");
                                        $fasilitas_umum =  mysqli_fetch_object($pkos);
                                        if (!empty($fasilitas_umum)) {
                                        echo 'checked';
                                    }
                                    ?>
                                    >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        WIFI
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="fasilitas_umum[]" value="Mesin Cuci" id="flexCheckChecked"
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM fasilitas_umum WHERE fasilitas_umum = 'Mesin Cuci' AND id_kos = '".$_GET['id']."'");
                                        $fasilitas_umum =  mysqli_fetch_object($pkos);
                                        if (!empty($fasilitas_umum)) {
                                        echo 'checked';
                                    }
                                    ?>
                                    >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Mesin Cuci
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="fasilitas_umum[]" value="Penjaga Kos" id="flexCheckChecked"
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM fasilitas_umum WHERE fasilitas_umum = 'Penjaga Kos' AND id_kos = '".$_GET['id']."'");
                                        $fasilitas_umum =  mysqli_fetch_object($pkos);
                                        if (!empty($fasilitas_umum)) {
                                        echo 'checked';
                                    }
                                    ?>
                                    >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Penjaga Kos
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="fasilitas_umum[]" value="Parkir Mobil" id="flexCheckChecked"
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM fasilitas_umum WHERE fasilitas_umum = 'Parkir Mobil' AND id_kos = '".$_GET['id']."'");
                                        $fasilitas_umum =  mysqli_fetch_object($pkos);
                                        if (!empty($fasilitas_umum)) {
                                        echo 'checked';
                                    }
                                    ?>
                                    >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Parkir Mobil
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="fasilitas_umum[]" value="Parkir Motor" id="flexCheckChecked"
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM fasilitas_umum WHERE fasilitas_umum = 'Parkir Motor' AND id_kos = '".$_GET['id']."'");
                                        $fasilitas_umum =  mysqli_fetch_object($pkos);
                                        if (!empty($fasilitas_umum)) {
                                        echo 'checked';
                                    }
                                    ?>
                                    >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Parkir Motor
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group mb-3 bg-light">
                            <div class="col-4 text-end">
                                <label for="name"><strong>Fasilitas Kamar</strong></label>
                            </div>
                            <div class="col-8">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]" value="AC" id="flexCheckDefault"
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM fasilitas_kamar WHERE fasilitas_kamar = 'AC' AND id_kos = '".$_GET['id']."'");
                                        $fasilitas_kamar =  mysqli_fetch_object($pkos);
                                        if (!empty($fasilitas_kamar)) {
                                        echo 'checked';
                                    }
                                    ?>
                                    >
                                    <label class="form-check-label" for="flexCheckDefault">
                                        AC
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]" value="Kasur" id="flexCheckChecked"
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM fasilitas_kamar WHERE fasilitas_kamar = 'Kasur' AND id_kos = '".$_GET['id']."'");
                                        $fasilitas_kamar =  mysqli_fetch_object($pkos);
                                        if (!empty($fasilitas_kamar)) {
                                        echo 'checked';
                                    }
                                    ?>
                                    >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Kasur
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]" value="Kipas Angin" id="flexCheckChecked"
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM fasilitas_kamar WHERE fasilitas_kamar = 'Kipas Angin' AND id_kos = '".$_GET['id']."'");
                                        $fasilitas_kamar =  mysqli_fetch_object($pkos);
                                        if (!empty($fasilitas_kamar)) {
                                        echo 'checked';
                                    }
                                    ?>
                                    >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Kipas Angin
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]" value="Kursi" id="flexCheckChecked"
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM fasilitas_kamar WHERE fasilitas_kamar = 'Kursi' AND id_kos = '".$_GET['id']."'");
                                        $fasilitas_kamar =  mysqli_fetch_object($pkos);
                                        if (!empty($fasilitas_kamar)) {
                                        echo 'checked';
                                    }
                                    ?>
                                    >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Kursi
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]" value="Lemari Baju" id="flexCheckChecked"
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM fasilitas_kamar WHERE fasilitas_kamar = 'Lemari Baju' AND id_kos = '".$_GET['id']."'");
                                        $fasilitas_kamar =  mysqli_fetch_object($pkos);
                                        if (!empty($fasilitas_kamar)) {
                                        echo 'checked';
                                    }
                                    ?>
                                    >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Lemari Baju
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]" value="Meja" id="flexCheckChecked"
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM fasilitas_kamar WHERE fasilitas_kamar = 'Meja' AND id_kos = '".$_GET['id']."'");
                                        $fasilitas_kamar =  mysqli_fetch_object($pkos);
                                        if (!empty($fasilitas_kamar)) {
                                        echo 'checked';
                                    }
                                    ?>
                                    >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Meja
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]" value="TV" id="flexCheckChecked"
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM fasilitas_kamar WHERE fasilitas_kamar = 'TV' AND id_kos = '".$_GET['id']."'");
                                        $fasilitas_kamar =  mysqli_fetch_object($pkos);
                                        if (!empty($fasilitas_kamar)) {
                                        echo 'checked';
                                    }
                                    ?>
                                    >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        TV
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]" value="K. Mandi Dalam" id="flexCheckChecked"
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM fasilitas_kamar WHERE fasilitas_kamar = 'K. Mandi Dalam' AND id_kos = '".$_GET['id']."'");
                                        $fasilitas_kamar =  mysqli_fetch_object($pkos);
                                        if (!empty($fasilitas_kamar)) {
                                        echo 'checked';
                                    }
                                    ?>
                                    >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        K. Mandi Dalam
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]" value="K. Mandi Luar" id="flexCheckChecked"
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM fasilitas_kamar WHERE fasilitas_kamar = 'K. Mandi Luar' AND id_kos = '".$_GET['id']."'");
                                        $fasilitas_kamar =  mysqli_fetch_object($pkos);
                                        if (!empty($fasilitas_kamar)) {
                                        echo 'checked';
                                    }
                                    ?>
                                    >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        K. Mandi Luar
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]" value="Kloset Duduk" id="flexCheckChecked"
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM fasilitas_kamar WHERE fasilitas_kamar = 'Kloset Duduk' AND id_kos = '".$_GET['id']."'");
                                        $fasilitas_kamar =  mysqli_fetch_object($pkos);
                                        if (!empty($fasilitas_kamar)) {
                                        echo 'checked';
                                    }
                                    ?>
                                    >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Kloset Duduk
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="fasilitas_kamar[]" value="Kloset Jongkok" id="flexCheckChecked"
                                    <?php
                                        $pkos = mysqli_query($conn, "SELECT * FROM fasilitas_kamar WHERE fasilitas_kamar = 'Kloset Jongkok' AND id_kos = '".$_GET['id']."'");
                                        $fasilitas_kamar =  mysqli_fetch_object($pkos);
                                        if (!empty($fasilitas_kamar)) {
                                        echo 'checked';
                                    }
                                    ?>
                                    >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Kloset Jongkok
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group mb-3 bg-light">
                            <div class="col-4 text-end">
                                <label for="name"><strong>Ukuran kamar</strong></label>
                            </div>
                            <div class="col-8 d-flex">
                                <input type="number" min="0" max "10 " class="form-control w-25" name="panjang_kamar" required value="<?php echo $kos -> panjang_kamar ?>" > x
                                <input type="number" min="0" max "10 " class="form-control w-25" name="lebar_kamar" required value="<?php echo $kos -> lebar_kamar ?>" >
                            </div>
                        </div>
                        <div class=" row form-group mb-3 bg-light">
                            <div class="col-4 text-end">
                                <label for="name"><strong>Jumlah total kamar</strong></label>
                            </div>
                            <div class="col-8">
                                <input type="number" min="0" max="500" name="jumlah_kamar" class=" form-control w-50" required value="<?php echo $kos -> jumlah_kamar ?>" >
                            </div>
                        </div>
                        <div class="row form-group mb-3 bg-light">
                            <div class="col-4 text-end">
                                <label for="name"><strong>Jumlah kamar tersedia</strong></label>
                            </div>
                            <div class="col-8">
                                <input type="number" min="0" max="500" name="sisa_kamar" class="form-control w-50" required value="<?php echo $kos -> sisa_kamar ?>" >
                            </div>
                        </div>
                        <div class="row form-group mb-3 bg-light">
                            <div class="col-4 text-end">
                                <label for="name"><strong>Harga per bulan (Rp)</strong></label>
                            </div>
                            <div class="col-8">
                                <input type="number" min="0" max="200000" name="harga_bulan" class=" form-control w-50" required value="<?php echo $kos -> harga_bulan ?>" >
                            </div>
                        </div>
                        <div class="row form-group mb-3 align-items-center bg-light">
                            <div class="col-4 text-end">
                                <label for="name"><strong>Nama Pemilik Rekening</strong></label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control w-50" id="nameowner" name="nama_pemilik_rekening" required value="<?php echo $kos -> nama_pemilik_rekening ?>" >
                            </div>
                        </div>
                        <div class="row form-group mb-3 align-items-center bg-light">
                            <div class="col-4 text-end">
                                <label for="name"><strong>Pilih Bank</strong></label>
                            </div>
                            <div class="col-8">
                                <select class="form-select w-50" name="nama_bank" aria-label=" Default select example">
                                    <option selected>----Nama Bank----</option>
                                    <option value="1">Bank BNI</option>
                                    <option value="2">Bank BRI</option>
                                    <option value="3">BCA</option>
                                    <option value="3">Mandiri</option>
                                    <option value="3">Dana</option>
                                    <option value="3">OVO</option>
                                    <option value="3">Shopeepay</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group mb-3 align-items-center bg-light">
                            <div class="col-4 text-end">
                                <label for="name"><strong>Nomor Rekening</strong></label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control w-50" id="norek" name="no_rek" required value="<?php echo $kos -> no_rek ?>" >
                            </div>
                        </div>
                        <button class=" btn btn-outline-danger btn-lg" type="reset">Batal</button>
                        <button class="btn btn-outline-secondary btn-lg" type="submit" name="submit">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>