-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 02, 2023 at 05:32 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mamikos`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(256) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_kamar`
--

CREATE TABLE `fasilitas_kamar` (
  `id_fasilitas_kamar` int NOT NULL,
  `id_kos` int NOT NULL,
  `fasilitas_kamar` varchar(256) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fasilitas_kamar`
--

INSERT INTO `fasilitas_kamar` (`id_fasilitas_kamar`, `id_kos`, `fasilitas_kamar`) VALUES
(9, 9, 'AC'),
(10, 9, 'Kasur'),
(11, 9, 'K. Mandi Dalam'),
(12, 9, 'Kloset Duduk'),
(29, 12, 'Kasur'),
(30, 12, 'Lemari Baju'),
(31, 12, 'Meja'),
(32, 13, 'Kasur'),
(33, 13, 'Kursi'),
(34, 13, 'Lemari Baju'),
(35, 13, 'Meja'),
(36, 14, 'AC'),
(37, 14, 'Kursi'),
(38, 14, 'Lemari Baju'),
(39, 14, 'Meja'),
(40, 15, 'AC'),
(41, 15, 'Kasur'),
(42, 15, 'Kursi'),
(43, 15, 'Lemari Baju'),
(44, 15, 'Meja'),
(45, 15, 'TV'),
(46, 15, 'K. Mandi Dalam'),
(47, 16, 'AC'),
(48, 16, 'Kasur'),
(49, 16, 'Lemari Baju'),
(50, 16, 'Meja'),
(58, 17, 'AC'),
(59, 17, 'Kasur'),
(60, 17, 'Kursi'),
(61, 17, 'Lemari Baju'),
(62, 17, 'Meja'),
(63, 17, 'TV'),
(64, 17, 'K. Mandi Dalam');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_umum`
--

CREATE TABLE `fasilitas_umum` (
  `id_fasilitas` int NOT NULL,
  `id_kos` int NOT NULL,
  `fasilitas_umum` varchar(256) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fasilitas_umum`
--

INSERT INTO `fasilitas_umum` (`id_fasilitas`, `id_kos`, `fasilitas_umum`) VALUES
(11, 9, ' CCTV'),
(12, 9, 'Kulkas'),
(13, 9, 'Dapur'),
(14, 9, 'WIFI'),
(32, 12, ' CCTV'),
(33, 12, 'K. Mandi Luar'),
(34, 12, 'WIFI'),
(35, 12, 'Penjaga Kos'),
(36, 12, 'Parkir Motor'),
(37, 13, 'Kulkas'),
(38, 13, 'Dapur'),
(39, 13, 'K. Mandi Luar'),
(40, 13, 'TV'),
(41, 13, 'WIFI'),
(42, 14, 'Kulkas'),
(43, 14, 'Dapur'),
(44, 14, 'TV'),
(45, 14, 'WIFI'),
(46, 14, 'Mesin Cuci'),
(47, 14, 'Parkir Mobil'),
(48, 14, 'Parkir Motor'),
(49, 15, ' CCTV'),
(50, 15, 'K. Mandi Luar'),
(51, 15, 'TV'),
(52, 15, 'Laundry'),
(53, 15, 'WIFI'),
(54, 15, 'Penjaga Kos'),
(55, 15, 'Parkir Mobil'),
(56, 15, 'Parkir Motor'),
(57, 16, ' CCTV'),
(58, 16, 'Dapur'),
(59, 16, 'WIFI'),
(60, 16, 'Penjaga Kos'),
(66, 17, ' CCTV'),
(67, 17, 'Dapur'),
(68, 17, 'WIFI'),
(69, 17, 'Penjaga Kos');

-- --------------------------------------------------------

--
-- Table structure for table `kos`
--

CREATE TABLE `kos` (
  `id_kos` int NOT NULL,
  `id_pemilik` int NOT NULL,
  `nama_kos` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tipe_kamar` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_kos` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `longitude` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `latitude` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `embed_map` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi_kos` text COLLATE utf8mb4_general_ci NOT NULL,
  `tahun_pembangunan_kos` varchar(55) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat_kos` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `kec_kos` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `kab_kota_kos` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `provinsi_kos` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `panjang_kamar` int NOT NULL,
  `lebar_kamar` int NOT NULL,
  `sisa_kamar` int NOT NULL,
  `jumlah_kamar` int NOT NULL,
  `gambar_kamar_dalam` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `gambar_kamar_depan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `gambar_kamar_mandi` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `gambar_kos_dalam` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `gambar_kos_depan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `harga_bulan` int NOT NULL,
  `listrik` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_pemilik_rekening` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_bank` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `no_rek` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kos`
--

INSERT INTO `kos` (`id_kos`, `id_pemilik`, `nama_kos`, `tipe_kamar`, `jenis_kos`, `longitude`, `latitude`, `embed_map`, `deskripsi_kos`, `tahun_pembangunan_kos`, `alamat_kos`, `kec_kos`, `kab_kota_kos`, `provinsi_kos`, `panjang_kamar`, `lebar_kamar`, `sisa_kamar`, `jumlah_kamar`, `gambar_kamar_dalam`, `gambar_kamar_depan`, `gambar_kamar_mandi`, `gambar_kos_dalam`, `gambar_kos_depan`, `harga_bulan`, `listrik`, `nama_pemilik_rekening`, `nama_bank`, `no_rek`) VALUES
(9, 4, 'Kost Hijau', 'Tipe A', 'Campuran', '98.65863231089071', '3.5704720500789433', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d745.1687290241312!2d98.65852719995044!3d3.5704574301634127!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1685602932482!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Kamar Single Kamar Mandi Dalam dgn water heater AC Tersedia tempat parkir mobil / motor Listri menggunakan token PLN', '2017', 'Jalan Sei Padang, Medan Baru', 'Medan Baru', 'Medan', 'Sumatera Utara', 3, 4, 0, 5, '647769d50f230.jpg', '647769d50f22b.jpg', '647769d50f232.jpg', '647769d50ee4a.jpg', '647769d50e7fa.jpg', 900000, 'Termasuk', 'Andy Septiawan Saragih', 'Bank BNI', '123445677890'),
(12, 5, 'Kos Tasaba Tiga Delapan', 'Tipe A', 'Putri', '107.60523729386571', '-6.9036158905804985', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.55570544122403!2d107.60522522392519!3d-6.903602243923529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e646be00348f%3A0xb8ed736ea6845f29!2sJl.%20Linggawastu%2C%20Tamansari%2C%20Kec.%20Bandung%20Wetan%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040116!5e0!3m2!1sen!2sid!4v1685711380355!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Dekat Dengan Kampus Kampus Ternama Seperti Unisba, Unpas & ITB. Serta Dekat Dengan Fasilitas Umum Seperti ATM, Sentra Kuliner, Pusat Perbelanjaan/Mall & Pasar, Pusat Perkantoran & Perhotelan, Fasilitas Kesehatan & Cafe', '2021', 'Jl. Linggawastu, Tamansari, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40116', 'Bandung Wetan', 'Bandung', 'Jawa Barat', 3, 3, 7, 7, '6479eb16b0286.jpg', '6479eb16b027c.jpg', '6479eb16b0288.jpg', '6479eb16afef1.jpg', '6479eb16af884.jpg', 950000, 'Termasuk', 'Clinton', 'Bank BRI', '637101009955534'),
(13, 5, 'Kost Apik Tamblong 2A', 'Tipe A', 'Campuran', '107.61239655132113', '-6.9197738544312655', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d722.7940302049168!2d107.61182288828284!3d-6.919934204097309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e62fad949409%3A0xc5352b008f459067!2sJl.%20Tamblong%20No.38%2C%20Kb.%20Pisang%2C%20Kec.%20Sumur%20Bandung%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040111!5e0!3m2!1sen!2sid!4v1685711982600!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Kost ini berlokasi dekat dengan jalan raya dan akses yang tidak dapat dilalui oleh mobil, berlokasi 11 menit dari Institut Teknologi Bandung, 10 menit dari Stasiun Bandung, 8 menit dari Gedung Sate, 3 menit dari Braga CityWalk, 5 menit dari Bandung Indah Plaza, 11 menit dari Trans Studio Bandung, dan 11 menit dari Cihampelas Walk.', '2022', 'Jl. Tamblong No.38, Kb. Pisang, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40111', 'Sumur Bandung', 'Bandung', 'Jawa Barat', 3, 3, 5, 5, '6479ed2eb4324.jpg', '6479ed2eb431b.jpg', '6479ed2eb4327.jpg', '6479ed2eb3dc7.jpg', '6479ed2eb3776.jpg', 760000, 'Tidak Termasuk', 'Clinton', 'Bank BNI', '637101009955534'),
(14, 14, 'Kost Singgahsini Tumapel 95', 'Tipe A', 'Putra', '112.74096433748217', '-7.286404853900471', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.349942812926!2d112.74070885707442!3d-7.286372594743215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbc06e6d7165%3A0x29e39d9175f26bfe!2s005%2C%20Jl.%20Tumapel%20No.101%2C%20RW.07%2C%20Keputran%2C%20Kec.%20Tegalsari%2C%20Surabaya%2C%20Jawa%20Timur%2060265!5e0!3m2!1sen!2sid!4v1685712693330!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Kost ini terletak 1 menit dari jalan raya dan akses jalan yang dapat dilalui oleh mobil. Berlokasi 3 menit dari Universitas Katolik Widya Mandala - Kampus Dinoyo, 12 menit dari Universitas Airlangga Kampus B, 6 menit dari Stasiun Wonokromo, dan 4 menit dari Marvel City Mall.', '2022', 'Jl. Tumapel No.101, RW.07, Keputran, Kec. Tegalsari, Surabaya, Jawa Timur 60265', 'Tegalsari', 'Surabaya', 'Jawa Timur', 3, 3, 4, 5, '6479f03153fcf.jpg', '6479f03153fc7.jpg', '6479f03153fd2.jpg', '6479f03153abb.jpg', '6479f031534d6.jpg', 1358000, 'Tidak Termasuk', 'Yohana Marito', 'Bank BNI', '0106427035'),
(15, 14, 'Kost Singgahsini Rock', 'Tipe A', 'Campuran', '112.76013441870735', '-7.304903716133821', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d415.97400093835813!2d112.75981639888246!3d-7.305011658773351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbaec83ca107%3A0x55e0a92c5999f8f8!2sRock%20Hotel!5e0!3m2!1sen!2sid!4v1685713203718!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Kost ini berlokasi dekat dengan jalan raya dan akses yang dapat dilalui oleh mobil, berlokasi 8 menit dari Universitas Surabaya, 11 menit dari UIN Sunan Ampel, 13 menit dari Universitas Airlangga, 13 menit dari UPN Veteran Jawa Timur, dan 13 menit dari Stasiun Surabaya Gubeng.', '2019', 'Jl. Barata Jaya XVII No.55, Baratajaya, Kec. Gubeng, Surabaya, Jawa Timur 60284', 'Gubeng', 'Surabaya', 'Jawa Timur', 3, 4, 5, 5, '6479f218ee8b4.jpg', '6479f218ee8a4.jpg', '6479f218ee8b8.jpg', '6479f218ee171.jpg', '6479f218ed9c9.jpg', 2000000, 'Termasuk', 'Yohana Marito', 'Bank BNI', '0106427035'),
(16, 15, 'Kost Singgahsini Rara Dwiga ', 'Tipe B', 'Putra', '112.627837', '-7.930862', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d246.97874232808852!2d112.62881882768933!3d-7.9305468136024375!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1685713840145!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Kost ini berlokasi 50 meter dari jalan raya dengan akses yang dapat dilalui oleh mobil, berlokasi 13 menit dari Universitas Brawijaya, 13 menit dari Universitas Negeri Malang, 13 menit dari Universitas Muhammadiyah Malang, dan 11 menit dari Malang Town Square.', '2020', 'Jl. Dwiga Regency blok A2/24, Mojolangu, Lowokwaru, Kota Malang, 65142', 'Lowokwaru', 'Malang', 'Jawa Timur', 3, 3, 7, 7, '6479f46d27ed0.jpg', '6479f46d27ecb.jpg', '6479f46d27ed3.jpg', '6479f46d27a4e.jpg', '6479f46d274a6.jpg', 1800000, 'Termasuk', 'Serafim Edgar', 'Bank BNI', '0106222053'),
(17, 15, 'Kost Singgahsini Omah Tilam', 'Tipe A', 'Putra', '112.643135', '-7.953549', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.438993456431!2d112.64059227374867!3d-7.953503879243432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629c9d17a1e07%3A0x151a794bf4f121fd!2sJl.%20Ciliwung%20No.43%2C%20Purwantoro%2C%20Kec.%20Blimbing%2C%20Kota%20Malang%2C%20Jawa%20Timur%2065126!5e0!3m2!1sen!2sid!4v1685714213749!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Kost ini berlokasi 11 menit dari Universitas Negeri Malang, 12 menit dari Universitas Brawijaya, 13 menit dari Universitas Muhammadiyah Malang, 8 menit dari Stasiun Malang Kota Baru, dan 11 menit dari Malang Town Square.', '2020', 'Jl. Ciliwung 43, Purwantoro, Kec. Blimbing, Kota Malang, Jawa Timur 65122', 'Blimbing', 'Malang', 'Jawa Timur', 5, 3, 7, 7, '6479f5bcbad5b.jpg', '6479f5bcbad51.jpg', '6479f5bcbad5e.jpg', '6479f5bcba815.jpg', '6479f5bcba26d.jpg', 2500000, 'Termasuk', 'Serafim Edgar', 'Bank BNI', '0106222053');

-- --------------------------------------------------------

--
-- Table structure for table `pemilik`
--

CREATE TABLE `pemilik` (
  `id_pemilik` int NOT NULL,
  `nama_pemilik` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email_pemilik` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `no_hp_pemilik` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` varchar(225) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'pemilik'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemilik`
--

INSERT INTO `pemilik` (`id_pemilik`, `nama_pemilik`, `email_pemilik`, `no_hp_pemilik`, `password`, `role`) VALUES
(4, 'Andy Septiawan Saragih', 'andy@gmail.com', '081361775757', '$2y$10$igt9YWNFlFelFRZ8pTqq3unwvtL2MFeEXqjAGgQug95dkZB.T70vu', 'pemilik'),
(5, 'Clinton Christovel Simanullang', 'clinton@gmail.com', '082282430175', '$2y$10$ECce8cIZ46lpX2hGU/7KeOiR3sA/s6A.GL5AVS7zUFAUCwFke2kk.', 'pemilik'),
(14, 'Yohana Marito', 'yohana@gmail.com', '085264324984', '$2y$10$Yb1XiRr5Mp4sul7De/6aquxihv0kUOXlfudFbFc3mESL4aw8.uufi', 'pemilik'),
(15, 'Serafim Edgar', 'serafim@gmail.com', '085262160749', '$2y$10$sjRwn0KPZATwa2KPcWc0LOdzmrqIENifyhXIJ20WfEZvAmxVdPiFG', 'pemilik');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_sewa`
--

CREATE TABLE `pengajuan_sewa` (
  `id_pengajuan_sewa` int NOT NULL,
  `id_kos` int NOT NULL,
  `id_user` int NOT NULL,
  `tanggal_pengajuan_sewa` timestamp NOT NULL,
  `jumlah_penyewa` int NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `durasi_sewa` int NOT NULL,
  `foto_kk` varchar(225) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `foto_ktp` varchar(225) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `foto_ktp_diri` varchar(225) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengajuan_sewa`
--

INSERT INTO `pengajuan_sewa` (`id_pengajuan_sewa`, `id_kos`, `id_user`, `tanggal_pengajuan_sewa`, `jumlah_penyewa`, `tanggal_masuk`, `tanggal_keluar`, `durasi_sewa`, `foto_kk`, `foto_ktp`, `foto_ktp_diri`) VALUES
(5, 9, 1, '2023-06-01 13:24:35', 1, '2023-06-01', '2023-07-01', 1, NULL, NULL, NULL),
(6, 9, 1, '2023-06-01 14:00:00', 1, '2023-06-01', '2023-07-01', 1, NULL, NULL, NULL),
(7, 9, 1, '2023-06-01 14:18:44', 1, '2023-06-02', '2023-08-02', 2, NULL, NULL, NULL),
(8, 9, 1, '2023-06-01 14:20:20', 1, '2023-06-01', '2023-08-01', 2, NULL, NULL, NULL),
(9, 9, 1, '2023-06-01 15:07:19', 1, '2023-06-01', '2023-08-01', 2, NULL, NULL, NULL),
(10, 9, 1, '2023-06-01 15:16:30', 1, '2023-06-01', '2023-08-01', 2, NULL, NULL, NULL),
(11, 9, 1, '2023-06-01 15:17:50', 1, '2023-06-01', '2023-07-01', 1, NULL, NULL, NULL),
(12, 9, 1, '2023-06-01 15:21:03', 1, '2023-06-01', '2023-07-01', 1, NULL, NULL, NULL),
(13, 9, 1, '2023-06-01 15:56:17', 1, '2023-06-01', '2023-07-01', 1, NULL, NULL, NULL),
(14, 9, 1, '2023-06-01 16:18:29', 1, '2023-06-02', '2023-08-02', 2, NULL, NULL, NULL),
(15, 9, 1, '2023-06-01 16:44:41', 1, '2023-06-01', '2023-08-01', 2, NULL, NULL, NULL),
(16, 9, 1, '2023-06-01 17:11:05', 1, '2023-06-02', '2023-07-02', 1, NULL, NULL, NULL),
(18, 14, 3, '2023-06-02 16:14:13', 1, '2023-06-02', '2023-09-02', 3, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `peraturan_kos`
--

CREATE TABLE `peraturan_kos` (
  `id_peraturan_kos` int NOT NULL,
  `id_kos` int NOT NULL,
  `peraturan_kos` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peraturan_kos`
--

INSERT INTO `peraturan_kos` (`id_peraturan_kos`, `id_kos`, `peraturan_kos`) VALUES
(15, 9, '> 5 orang/ kamar'),
(16, 9, 'Ada jam malam'),
(17, 9, 'Akses 24 jam'),
(18, 9, 'Tamu boleh menginap'),
(37, 12, 'Ada jam malam'),
(38, 12, 'Akses 24 jam'),
(39, 12, 'Dilarang merokok di kamar'),
(40, 12, 'Lawan jenis dilarang ke kamar'),
(41, 13, 'Dilarang merokok di kamar'),
(42, 13, 'Lawan jenis dilarang ke kamar'),
(43, 13, 'Maksimal 2 orang/kamar'),
(44, 14, 'Akses 24 jam'),
(45, 14, 'Dilarang merokok di kamar'),
(46, 14, 'Lawan jenis dilarang ke kamar'),
(47, 15, 'Ada jam malam'),
(48, 15, 'Akses 24 jam'),
(49, 15, 'Dilarang merokok di kamar'),
(50, 15, 'Maksimal 2 orang/kamar'),
(51, 16, 'Ada jam malam'),
(52, 16, 'Akses 24 jam'),
(53, 16, 'Dilarang merokok di kamar'),
(54, 16, 'Lawan jenis dilarang ke kamar'),
(58, 17, 'Akses 24 jam'),
(59, 17, 'Dilarang merokok di kamar'),
(60, 17, 'Lawan jenis dilarang ke kamar');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_review` int NOT NULL,
  `id_kos` int NOT NULL,
  `id_user` int NOT NULL,
  `kebersihan` decimal(8,2) NOT NULL,
  `keamanan` decimal(8,2) NOT NULL,
  `kenyamanan` decimal(8,2) NOT NULL,
  `harga` decimal(8,2) NOT NULL,
  `fasilitas_kamar` decimal(8,2) NOT NULL,
  `fasilitas_umum` decimal(8,2) NOT NULL,
  `rating` decimal(8,2) NOT NULL,
  `review` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id_review`, `id_kos`, `id_user`, `kebersihan`, `keamanan`, `kenyamanan`, `harga`, `fasilitas_kamar`, `fasilitas_umum`, `rating`, `review`) VALUES
(4, 9, 2, '4.70', '4.50', '4.00', '4.30', '5.00', '4.30', '4.46', 'Sangat bagusss'),
(7, 9, 1, '4.50', '4.50', '4.50', '4.50', '4.50', '4.50', '4.50', 'Nyamannnn bangettt'),
(9, 14, 3, '5.00', '4.70', '4.50', '5.00', '4.80', '5.00', '4.83', 'Nyaman sekalii');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_kos`
--

CREATE TABLE `riwayat_kos` (
  `id_riwayat_kos` int NOT NULL,
  `id_user` int NOT NULL,
  `id_kos` int NOT NULL,
  `nama_kos` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat_kos` text COLLATE utf8mb4_general_ci NOT NULL,
  `harga_kos` int NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `gambar_kos` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `riwayat_kos`
--

INSERT INTO `riwayat_kos` (`id_riwayat_kos`, `id_user`, `id_kos`, `nama_kos`, `alamat_kos`, `harga_kos`, `tanggal_masuk`, `tanggal_keluar`, `gambar_kos`) VALUES
(7, 1, 9, 'Kost Hijau Tipe A Medan Baru Medan', 'Jalan Sei Padang, Medan Baru', 200000, '2023-06-02', '2023-07-02', '647769d50e7fa.jpg'),
(9, 3, 14, 'Kost Singgahsini Tumapel 95 Tipe A Tegalsari Surabaya', 'Jl. Tumapel No.101, RW.07, Keputran, Kec. Tegalsari, Surabaya, Jawa Timur 60265', 4074000, '2023-06-02', '2023-09-02', '6479f031534d6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_transaksi`
--

CREATE TABLE `riwayat_transaksi` (
  `id_riwayat_transaksi` int NOT NULL,
  `id_user` int NOT NULL,
  `id_pemilik` int NOT NULL,
  `id_kos` int NOT NULL,
  `metode_pembayaran` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_pembayaran` timestamp NOT NULL,
  `invoice` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_kos` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `harga_kos` int NOT NULL,
  `no_rekening_user` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `gambar_kos` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `riwayat_transaksi`
--

INSERT INTO `riwayat_transaksi` (`id_riwayat_transaksi`, `id_user`, `id_pemilik`, `id_kos`, `metode_pembayaran`, `tanggal_pembayaran`, `invoice`, `nama_kos`, `harga_kos`, `no_rekening_user`, `gambar_kos`) VALUES
(24, 1, 4, 9, 'Dana', '2023-06-01 10:14:07', 'MAMIKOS-20230601189', 'Kost Hijau Tipe A Medan Baru Medan', 200000, '081261775757', '647769d50e7fa.jpg'),
(26, 3, 14, 14, 'Dana', '2023-06-02 09:15:11', 'MAMIKOS-20230602861', 'Kost Singgahsini Tumapel 95 Tipe A Tegalsari Surabaya', 4074000, '081261775757', '6479f031534d6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `nama_user` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `no_hp_user` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `no_hp_darurat` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `kota_asal` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pendidikan_terakhir` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jenis_kelamin` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `profesi` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `photo_profile` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `role` varchar(225) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `no_hp_user`, `email`, `password`, `tanggal_lahir`, `no_hp_darurat`, `kota_asal`, `pendidikan_terakhir`, `jenis_kelamin`, `profesi`, `photo_profile`, `role`) VALUES
(1, 'Andy Septiawan Saragih', '081361775757', 'andysaragih@gmail.com', '$2y$10$PhPg9AgWRdS7uv.OJhOThueBUJEZneIhnC2cv8d6fMeQyP9iUMwT.', '2004-09-03', '082160446944', 'Medan', 'S1', 'Laki-Laki', 'Mahasiswa', '1493-Ayumi (16).png', 'user'),
(2, 'Andy', '082160446944', 'andy@yahoo.com', '$2y$10$.HjO8EeaPbKUB85.E/eu.ubkZ915zr3CNsOrIyyg/cBHi9oU1/qvy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'user'),
(3, 'Andy Kim', '081234567890', 'andy123@gmail.com', '$2y$10$lFzFkeXwFXcgX1TsMAy6buFLcWeHbSLNgmvwdtNjp3z9NQIg0sahm', '2004-09-03', '081261775757', 'Medan', 'S1', 'Laki-Laki', 'Mahasiswa', '6201-FvbtZp5aUAAkJnM.jpeg', 'user'),
(4, 'Najwa Amanda', '081264035639', 'najwa@gmail.com', '$2y$10$Dk.OBt.lC1HyawBqYaSEFOZiCJodqSDMW7bNZ/FR2zFGK6LhlTzRa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `fasilitas_kamar`
--
ALTER TABLE `fasilitas_kamar`
  ADD PRIMARY KEY (`id_fasilitas_kamar`),
  ADD KEY `fas_kamar-kos` (`id_kos`);

--
-- Indexes for table `fasilitas_umum`
--
ALTER TABLE `fasilitas_umum`
  ADD PRIMARY KEY (`id_fasilitas`),
  ADD KEY `fas_umum-kos` (`id_kos`);

--
-- Indexes for table `kos`
--
ALTER TABLE `kos`
  ADD PRIMARY KEY (`id_kos`),
  ADD UNIQUE KEY `id_kos` (`id_kos`),
  ADD KEY `kos-pemilik` (`id_pemilik`);

--
-- Indexes for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`id_pemilik`),
  ADD UNIQUE KEY `id_pemilik` (`id_pemilik`);

--
-- Indexes for table `pengajuan_sewa`
--
ALTER TABLE `pengajuan_sewa`
  ADD PRIMARY KEY (`id_pengajuan_sewa`),
  ADD KEY `sewa-kos` (`id_kos`),
  ADD KEY `sewa-user` (`id_user`);

--
-- Indexes for table `peraturan_kos`
--
ALTER TABLE `peraturan_kos`
  ADD PRIMARY KEY (`id_peraturan_kos`),
  ADD KEY `peraturan-kos` (`id_kos`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `review-user` (`id_user`),
  ADD KEY `review-kos` (`id_kos`);

--
-- Indexes for table `riwayat_kos`
--
ALTER TABLE `riwayat_kos`
  ADD PRIMARY KEY (`id_riwayat_kos`),
  ADD KEY `riwayat_kos-user` (`id_user`),
  ADD KEY `riwayat_kos-kos` (`id_kos`);

--
-- Indexes for table `riwayat_transaksi`
--
ALTER TABLE `riwayat_transaksi`
  ADD PRIMARY KEY (`id_riwayat_transaksi`),
  ADD KEY `riwayat_transaksi-user` (`id_user`),
  ADD KEY `riwayat_transaksi-kos` (`id_kos`),
  ADD KEY `riwayat_transaksi-pemilik` (`id_pemilik`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fasilitas_kamar`
--
ALTER TABLE `fasilitas_kamar`
  MODIFY `id_fasilitas_kamar` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `fasilitas_umum`
--
ALTER TABLE `fasilitas_umum`
  MODIFY `id_fasilitas` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `kos`
--
ALTER TABLE `kos`
  MODIFY `id_kos` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pemilik`
--
ALTER TABLE `pemilik`
  MODIFY `id_pemilik` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pengajuan_sewa`
--
ALTER TABLE `pengajuan_sewa`
  MODIFY `id_pengajuan_sewa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `peraturan_kos`
--
ALTER TABLE `peraturan_kos`
  MODIFY `id_peraturan_kos` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `riwayat_kos`
--
ALTER TABLE `riwayat_kos`
  MODIFY `id_riwayat_kos` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `riwayat_transaksi`
--
ALTER TABLE `riwayat_transaksi`
  MODIFY `id_riwayat_transaksi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fasilitas_kamar`
--
ALTER TABLE `fasilitas_kamar`
  ADD CONSTRAINT `fas_kamar-kos` FOREIGN KEY (`id_kos`) REFERENCES `kos` (`id_kos`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fasilitas_umum`
--
ALTER TABLE `fasilitas_umum`
  ADD CONSTRAINT `fas_umum-kos` FOREIGN KEY (`id_kos`) REFERENCES `kos` (`id_kos`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kos`
--
ALTER TABLE `kos`
  ADD CONSTRAINT `kos-pemilik` FOREIGN KEY (`id_pemilik`) REFERENCES `pemilik` (`id_pemilik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengajuan_sewa`
--
ALTER TABLE `pengajuan_sewa`
  ADD CONSTRAINT `sewa-kos` FOREIGN KEY (`id_kos`) REFERENCES `kos` (`id_kos`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sewa-user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `peraturan_kos`
--
ALTER TABLE `peraturan_kos`
  ADD CONSTRAINT `peraturan-kos` FOREIGN KEY (`id_kos`) REFERENCES `kos` (`id_kos`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review-kos` FOREIGN KEY (`id_kos`) REFERENCES `kos` (`id_kos`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `review-user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `riwayat_kos`
--
ALTER TABLE `riwayat_kos`
  ADD CONSTRAINT `riwayat_kos-kos` FOREIGN KEY (`id_kos`) REFERENCES `kos` (`id_kos`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `riwayat_kos-user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `riwayat_transaksi`
--
ALTER TABLE `riwayat_transaksi`
  ADD CONSTRAINT `riwayat_transaksi-kos` FOREIGN KEY (`id_kos`) REFERENCES `kos` (`id_kos`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `riwayat_transaksi-pemilik` FOREIGN KEY (`id_pemilik`) REFERENCES `pemilik` (`id_pemilik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `riwayat_transaksi-user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
