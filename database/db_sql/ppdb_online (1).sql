-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2017 at 03:46 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE `infos` (
  `id` int(4) NOT NULL,
  `author` int(3) NOT NULL,
  `title` varchar(30) NOT NULL,
  `text` text NOT NULL,
  `lampiran` varchar(40) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `author`, `title`, `text`, `lampiran`, `created_at`, `updated_at`) VALUES
(27, 12, 'Informasi Tes Wawancara', 'Sehubungan dengan diadakannya tes  wawancara, adapun keterangannya sebagai berikut:\r\nLokasi : Gedung 2 SMK Pi Ambarrukmo 1 Sleman\r\nPukul  : 09.00 - 14.00 \r\n\r\nttd, Panitia PPDB.', NULL, '2017-05-01 00:27:00', '2017-05-01 00:27:00'),
(30, 12, 'Tes Hapus', 'Makan sabun pake nasi', NULL, '2017-05-01 09:03:15', '2017-05-01 09:25:09'),
(33, 12, 'sassasas', 'sasas', NULL, '2017-05-01 09:26:55', '2017-05-01 09:26:55'),
(34, 12, 'sasas', 'asasasas', NULL, '2017-05-01 09:27:01', '2017-05-01 09:27:01'),
(35, 12, 'frt4t', '54545455', NULL, '2017-05-01 09:27:09', '2017-05-01 09:27:09'),
(36, 12, '44434545', 'dfdgfdgfd', NULL, '2017-05-01 09:27:15', '2017-05-01 09:27:15'),
(38, 12, 'gfgfgfg', '4343434', NULL, '2017-05-01 09:27:30', '2017-05-01 09:27:30'),
(42, 12, 'TES INFO HARI INI 2', 'ssss', NULL, '2017-05-04 08:05:30', '2017-05-04 08:06:13');

-- --------------------------------------------------------

--
-- Table structure for table `jadwals`
--

CREATE TABLE `jadwals` (
  `Id` tinyint(2) NOT NULL,
  `jenis_kegiatan` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nilais`
--

CREATE TABLE `nilais` (
  `user_id` int(3) NOT NULL,
  `matematika` float NOT NULL,
  `ipa` float NOT NULL,
  `bahasa_indonesia` float NOT NULL,
  `bahasa_inggris` float NOT NULL,
  `nem_un` float NOT NULL,
  `tes_wawancara` float NOT NULL,
  `lampiran` varchar(40) NOT NULL,
  `nilai_akhir` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilais`
--

INSERT INTO `nilais` (`user_id`, `matematika`, `ipa`, `bahasa_indonesia`, `bahasa_inggris`, `nem_un`, `tes_wawancara`, `lampiran`, `nilai_akhir`, `created_at`, `updated_at`) VALUES
(1, 65, 82, 70, 98, 0, 0, '', 0, '2017-07-25 12:35:51', '2017-07-25 12:35:51'),
(12, 65, 82, 70, 90, 0, 0, '', 0, '2017-04-28 13:04:18', '2017-04-28 06:04:18'),
(15, 80, 80, 80, 80, 0, 0, '', 0, '2017-04-28 13:35:35', '2017-04-28 06:35:35'),
(16, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:00:42', NULL),
(18, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:09:01', NULL),
(19, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:10:04', NULL),
(20, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:10:48', NULL),
(21, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:11:32', NULL),
(22, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:12:01', NULL),
(23, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:12:27', NULL),
(24, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:13:13', NULL),
(25, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:13:49', NULL),
(26, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:15:27', NULL),
(27, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:16:04', NULL),
(28, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:16:54', NULL),
(29, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:17:22', NULL),
(30, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:19:00', NULL),
(31, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:19:27', NULL),
(32, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:19:57', NULL),
(33, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:20:58', NULL),
(34, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:22:28', NULL),
(35, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:23:07', NULL),
(36, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:23:36', NULL),
(37, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:24:15', NULL),
(38, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:25:06', NULL),
(39, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:25:35', NULL),
(40, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:26:07', NULL),
(41, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:27:37', NULL),
(42, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:28:06', NULL),
(43, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:28:44', NULL),
(44, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:29:10', NULL),
(45, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:30:19', NULL),
(46, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:30:55', NULL),
(47, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:31:29', NULL),
(48, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:31:54', NULL),
(49, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:32:25', NULL),
(50, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:32:57', NULL),
(51, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:33:25', NULL),
(52, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:33:59', NULL),
(53, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:34:23', NULL),
(54, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:35:47', NULL),
(55, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:36:13', NULL),
(56, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:36:50', NULL),
(57, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:37:19', NULL),
(58, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:37:42', NULL),
(59, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:38:50', NULL),
(60, 0, 0, 0, 0, 0, 0, '', 0, '2017-04-28 10:39:26', NULL),
(61, 0, 0, 0, 0, 0, 0, '', 0, '2017-09-01 13:10:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaans`
--

CREATE TABLE `pekerjaans` (
  `id` tinyint(1) NOT NULL,
  `nama_pekerjaan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaans`
--

INSERT INTO `pekerjaans` (`id`, `nama_pekerjaan`) VALUES
(1, 'PEGWAI NEGERI SIPIL'),
(2, 'TNI/POLRI'),
(4, 'WIRASWASTA'),
(5, 'PETANI');

-- --------------------------------------------------------

--
-- Table structure for table `pesans`
--

CREATE TABLE `pesans` (
  `id_pesan` int(4) NOT NULL,
  `id_peserta` int(3) DEFAULT NULL,
  `id_admin` int(3) DEFAULT NULL,
  `subjek` varchar(30) DEFAULT NULL,
  `pesan_teks` text,
  `lampiran` varchar(40) DEFAULT NULL,
  `pengirim` enum('admin','peserta','','') DEFAULT NULL,
  `jenis_pesan` enum('new','reply','','') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesans`
--

INSERT INTO `pesans` (`id_pesan`, `id_peserta`, `id_admin`, `subjek`, `pesan_teks`, `lampiran`, `pengirim`, `jenis_pesan`, `created_at`) VALUES
(16, 1, NULL, 'tes subjek', 'tes isi pesan', NULL, 'peserta', 'new', '2017-08-11 12:47:32'),
(17, 1, NULL, 'Tes Pesan 2', 'Dengan Lampiran', '1502455743_mail server.pdf', 'peserta', 'new', '2017-08-11 12:49:04'),
(18, 1, 12, 'REPLY[#17]__SUBJECT[', 'Tes Reply 1', NULL, 'admin', 'reply', '2017-08-11 14:39:03'),
(19, 1, NULL, 'REPLY[#18]', 'reply dari user khs', NULL, 'peserta', 'reply', '2017-08-11 15:19:15'),
(20, 1, NULL, 'tess', 'tes isi', '1502686181_mail server.pdf', 'peserta', NULL, '2017-08-14 04:49:42');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `user_id` int(3) NOT NULL,
  `id_registrasi` varchar(7) DEFAULT NULL,
  `nisn` int(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `asal_sekolah` varchar(40) NOT NULL,
  `tahun_id` tinyint(2) NOT NULL,
  `berat_badan` int(3) NOT NULL,
  `tinggi_badan` int(3) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan','','') DEFAULT NULL,
  `agama` enum('islam','kristen','buddha','hindu') DEFAULT NULL,
  `alamat` text NOT NULL,
  `ortu_wali` varchar(50) NOT NULL,
  `pekerjaan_id` tinyint(1) NOT NULL,
  `lampiran` varchar(40) NOT NULL,
  `foto` varchar(40) NOT NULL,
  `status_verifikasi` enum('menunggu_verifikasi','terverifikasi','','') NOT NULL,
  `status_kelulusan` enum('-','tidak_lulus','lulus','') NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`user_id`, `id_registrasi`, `nisn`, `nama`, `tempat_lahir`, `tanggal_lahir`, `asal_sekolah`, `tahun_id`, `berat_badan`, `tinggi_badan`, `jenis_kelamin`, `agama`, `alamat`, `ortu_wali`, `pekerjaan_id`, `lampiran`, `foto`, `status_verifikasi`, `status_kelulusan`, `no_hp`, `created_at`, `updated_at`) VALUES
(1, 'REG01', 0, 'Khihady Sucahyo M.kom', '', '0000-00-00', 'SMP Al Azhar Syifa Budi Samarinda', 1, 45, 159, 'laki-laki', 'islam', 'Jl. Jodipati No.149A Mancasan Kidul concad 55283', 'Adi Priyanto SH', 1, '1493382050_proposal.docx', '1492829159_Pas-Photo23.jpg', 'menunggu_verifikasi', '-', '085346361613', '2017-07-25 12:35:51', '2017-07-25 12:35:51'),
(12, 'REG012', 0, 'Khihady Sucahyo', '', '0000-00-00', 'SMP Al Azhar Syifa Budi Samarinda', 1, 45, 159, 'perempuan', 'islam', 'Jl. Jodipati No.149A Mancasan Kidul concad 55283', 'Adi Priyanto SH', 1, '1493382050_proposal.docx', '1492931140_amikom.png', 'menunggu_verifikasi', '-', '', '2017-04-28 13:02:33', '2017-04-28 06:02:33'),
(15, 'REG015', 33456, 'Muhammad Ramzy Raihan', '', '0000-00-00', 'SMP 4 Tarakan', 3, 70, 170, 'laki-laki', 'islam', 'Sebengkok no.5', 'Jeni', 4, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 13:35:35', '2017-04-28 06:35:35'),
(16, 'REG016', 0, 'Agus Dwi Maulana', '', '0000-00-00', '', 0, 0, 0, NULL, NULL, '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 12:05:44', NULL),
(18, 'REG018', 0, 'Indah Noormala Santi', '', '0000-00-00', '', 0, 0, 0, NULL, NULL, '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 12:05:55', NULL),
(19, 'REG019', 0, 'Putri Wulandari', '', '0000-00-00', '', 0, 0, 0, NULL, NULL, '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 12:06:01', NULL),
(20, 'REG020', 0, 'Cahyo Utomo', '', '0000-00-00', '', 0, 0, 0, NULL, NULL, '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 12:06:13', NULL),
(21, 'REG021', 0, 'Henny Sulistiawati', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:11:32', NULL),
(22, 'REG022', 0, 'Javeen Raynaldo', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:12:01', NULL),
(23, 'REG023', 0, 'Tanti Ayu Soraya', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:12:27', NULL),
(24, 'REG024', 0, 'Riski Alfiansyah Pratama', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:13:13', NULL),
(25, 'REG025', 0, 'Laila Purnama Dewi', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:13:49', NULL),
(26, 'REG026', 0, 'Martinus Gesiata Lamarian', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:15:27', NULL),
(27, 'REG027', 0, 'Regina Tiara Putri', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:16:04', NULL),
(28, 'REG028', 0, 'Fransiska Winda Achi', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:16:54', NULL),
(29, 'REG029', 0, 'Muhammad Aidil Fitrah', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:17:22', NULL),
(30, 'REG030', 0, 'Febryan Saputra', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:19:00', NULL),
(31, 'REG031', 0, 'Fidar Pratiwi', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:19:27', NULL),
(32, 'REG032', 0, 'Anang Adenansi', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:19:57', NULL),
(33, 'REG033', 0, 'Amelia Ananda', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:20:58', NULL),
(34, 'REG034', 0, 'Muhammad Wili Azzam', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:22:28', NULL),
(35, 'REG035', 0, 'Ghina Nazlifa Hesna', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:23:07', NULL),
(36, 'REG036', 0, 'Wahyuniarsih', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:23:36', NULL),
(37, 'REG037', 0, 'Nadira Gustina', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:24:15', NULL),
(38, 'REG038', 0, 'Nuradlina', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:25:06', NULL),
(39, 'REG039', 0, 'Ludia Prasasty', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:25:35', NULL),
(40, 'REG040', 0, 'Purnama Tya', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:26:07', NULL),
(41, 'REG041', 0, 'Vira Dhamara', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:27:37', NULL),
(42, 'REG042', 0, 'Disella Erangga', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:28:06', NULL),
(43, 'REG043', 0, 'Riski Amelia Sari', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:28:44', NULL),
(44, 'REG044', 0, 'Anin Sapitri', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:29:10', NULL),
(45, 'REG045', 0, 'Khirana Dwicahyo', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:30:19', NULL),
(46, 'REG046', 0, 'Muhammad Rizal', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:30:55', NULL),
(47, 'REG047', 0, 'Agung Gumelar', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:31:29', NULL),
(48, 'REG048', 0, 'Dio Setiawan', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:31:54', NULL),
(49, 'REG049', 0, 'Faiz Razzaq Adiyatma', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:32:25', NULL),
(50, 'REG050', 0, 'Ivan Presetio Wibowo', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:32:57', NULL),
(51, 'REG051', 0, 'Saktian Iwangga Rajasa', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:33:25', NULL),
(52, 'REG052', 0, 'Rafida Marhinia', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:33:59', NULL),
(53, 'REG053', 0, 'Riska Yanti', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:34:23', NULL),
(54, 'REG054', 0, 'Alif Arifin', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:35:47', NULL),
(55, 'REG055', 0, 'Naufal Budi Irfansyah', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:36:13', NULL),
(56, 'REG056', 0, 'Naufal Riswanda Jasman', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:36:50', NULL),
(57, 'REG057', 0, 'Endah Dwi Septiana', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:37:19', NULL),
(58, 'REG058', 0, 'Rahmat Dwi Alfian', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:37:42', NULL),
(59, 'REG059', 0, 'Charolina Vivi Vienneta', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:38:50', NULL),
(60, 'REG060', 0, 'Putri Hardini Yulinar', '', '0000-00-00', '', 0, 0, 0, 'laki-laki', 'islam', '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-04-28 10:39:26', NULL),
(61, 'REG061', 0, 'asem', '', '0000-00-00', '', 0, 0, 0, NULL, NULL, '', '', 0, '', '', 'menunggu_verifikasi', '-', '', '2017-09-01 13:10:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sekolah_profiles`
--

CREATE TABLE `sekolah_profiles` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `teks` text NOT NULL,
  `gambar` int(40) DEFAULT NULL,
  `lampiran` int(40) DEFAULT NULL,
  `slide` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah_profiles`
--

INSERT INTO `sekolah_profiles` (`id`, `title`, `teks`, `gambar`, `lampiran`, `slide`, `created_at`, `updated_at`) VALUES
(1, 'Tentang Sekolah', 'SMK PI Ambarrukmo 1 Sleman berdiri berdasarkan SK menteri Pendidikan dan Kebudayaaan RI nomor: 0274/113.5/H/1998 tanggal 26 desember 1988, Bidang Keahlian Akomodasi Perhotelan. Di tengah persaingan global yang sangat kompetitif ini, SMK PI Ambarrukmo 1 Sleman siap menjadi sekolah menengah kejuruan yang secara khusus mempersiapkan tenaga professional perhotelan dan kepariwisataan “Siap Kerja”. Dengan Program unggulan produktof didukung penguasaan bahasa inggris sebagai bahasa internasional serta bahasa asing lain (Jepang, Perancis) SMK PI Ambarrukmo 1 Sleman, mempersiapkan lulusan  professional, untuk meraih peluang kerja di dalam dan luar negeri.', NULL, NULL, NULL, NULL, NULL),
(2, 'Visi & Misi', 'Visi\r\nMenjadi tamatan yang berkualitas, unggul di bidang Akomodasi Perhotelan\r\n\r\nMisi\r\n- Menciptakan lembaga yang menjunjung tinggi moralitas\r\n- Mengembangkan lembaga sebagai sekolah yang inovatif dan kreatif dapar bersaing baik secara nasional maupun internasional\r\n- Mengembangkan SDM dengan jiwa kewirausahaan\r\n', NULL, NULL, NULL, NULL, NULL),
(3, 'Lokasi', 'SMK PI AMBARRUKMO 1 SLEMAN \r\nJl. Cendrawasih 125 Mancasan lor, Condong Catur, Depok,Sleman 55283', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tahuns`
--

CREATE TABLE `tahuns` (
  `id` tinyint(2) NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahuns`
--

INSERT INTO `tahuns` (`id`, `tahun`) VALUES
(1, 2016),
(2, 2015),
(3, 2014),
(4, 2013);

-- --------------------------------------------------------

--
-- Table structure for table `telegram_settings`
--

CREATE TABLE `telegram_settings` (
  `chat_id` int(11) NOT NULL,
  `teks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) UNSIGNED NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT '1',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Khihady Sucahyo', 'khihady.s@gmail.com', 1, '$2y$10$4Xh7Wuv', 'dkvzyuIe8LRJQhokrFTeFl5eOtbsc9LyDBbp3dI3hykF5Bg3UGTQP4RBJEaM', '2017-03-26 00:12:18', '2017-03-26 00:12:18'),
(12, 'admin', 'admin@gmail.com', 2, '$2y$10$V5M9o7W', '5eK4QZ2ijZbMGEIyJ380UtzGYBEQtDZuPyqEu2q4CBz3dJT6jMixWL5C95YO', '2017-04-12 22:27:39', '2017-04-12 22:27:39'),
(15, 'Muhammad Ramzy Raihan', 'raihan.ramzy@gmail.com', 1, '$2y$10$nlFD7pV', 'L9oaL0NlTOKZ1zQa4aIeGv2aowhfmu44XWbaB6q5iDtKguIi38xNjxUq96Kt', '2017-04-28 02:53:51', '2017-04-28 02:53:51'),
(16, 'Agus Dwi Maulana', 'maulana.agus@gmail.com', 1, '$2y$10$IH1BGPn', 'U3RMNJUiuHe7bCSOsDDRU2WlXVHxYx9nJSTdlJXP7xZZkfJmhdvxUj50nnLc', '2017-04-28 03:00:42', '2017-04-28 03:00:42'),
(18, 'Indah Noormala Santi', 'indahINS@gmail.com', 1, '$2y$10$KqTN4wF', '2B50u9fAUq3DAV7abS1dTq6vYD7gV56fZGjHv6SeCEkE5paW8HzcCj7NBaRE', '2017-04-28 03:09:01', '2017-04-28 03:09:01'),
(19, 'Putri Wulandari', 'wulandari.putri@gmail.com', 1, '$2y$10$YqXTxcT', 'JIATSD5I5yIHx6wogtampJR7oGj0AKZ1jSwuP6UrRpDUJbCSpcB83jZ8mX2s', '2017-04-28 03:10:04', '2017-04-28 03:10:04'),
(20, 'Cahyo Utomo', 'utomo.cahyo@gmail.com', 1, '$2y$10$akOH/1Y', '5dRHZm4PLTXlCTYCExGg3U6N4lnhpI9ngWRkPYVpucaSqV0iJmxlYSht7VEx', '2017-04-28 03:10:48', '2017-04-28 03:10:48'),
(21, 'Henny Sulistiawati', 'sulistiawati.henny@gmail.com', 1, '$2y$10$yW9bFO/', 'yQW0eL3rm5fm1j3YARxu7eEUIj7UuXR09l7vDpl3SXOrBqsl2wi8wqJwNuWd', '2017-04-28 03:11:32', '2017-04-28 03:11:32'),
(22, 'Javeen Raynaldo', 'reynaldo.javeen@gmail.com', 1, '$2y$10$Wdn1UBK', 'lA7ttf8DsSKYKyeN8LwDRrowrtX07VLMeOb96TYHVdh6cLjwxlNUoW37YrEy', '2017-04-28 03:12:01', '2017-04-28 03:12:01'),
(23, 'Tanti Ayu Soraya', 'soraya.ayu@gmail.com', 1, '$2y$10$NZ6g3WK', 'z4avbYQdekMCLmExprdZNI0Ffa9JtATQoxYKGLyCu9G5m4H0KBqRE2KwkdXZ', '2017-04-28 03:12:27', '2017-04-28 03:12:27'),
(24, 'Riski Alfiansyah Pratama', 'pratama.alfiansyah@gmail.com', 1, '$2y$10$HhYKkvO', 'VwkrxmNV3BUhik22o7qvOcsxVdvXTTYRKolVERZbYy8ruPQyHfQGzz4eu525', '2017-04-28 03:13:13', '2017-04-28 03:13:13'),
(25, 'Laila Purnama Dewi', 'dewi.purnama@gmail.com', 1, '$2y$10$Jij18y9', 'y9VrPLjGgZ9SLb6NFlj2O5c1dk7FtUmbDJa0LRt7xcpLknw87WKthKJhIqQy', '2017-04-28 03:13:49', '2017-04-28 03:13:49'),
(26, 'Martinus Gesiata Lamarian', 'lamarian.gesiata@gmail.com', 1, '$2y$10$mhyJ0Pj', 'HsIWm7OQDEKhR3j0tUOQnCEgxVovv2kVi54qS3R5lu8Dz71okbtKWAcf1oIw', '2017-04-28 03:15:27', '2017-04-28 03:15:27'),
(27, 'Regina Tiara Putri', 'putri.tiara@gmail.com', 1, '$2y$10$eSGvLvh', 'CNlmyJ7Hg1qGRyY8rQ3EEaicdAi22g0M3zkgY0OA6JkXyoeekS8YFMLSkYKr', '2017-04-28 03:16:04', '2017-04-28 03:16:04'),
(28, 'Fransiska Winda Achi', 'achi.windha@gmail.com', 1, '$2y$10$i19tbSu', '2gL0jK5JmV7fWHJM3PJbrxWV9MmB0Coh284mn0CTCSH9AM9BKhjJ6PpbgTki', '2017-04-28 03:16:54', '2017-04-28 03:16:54'),
(29, 'Muhammad Aidil Fitrah', 'fitrah.aidil@gmail.com', 1, '$2y$10$O8Sfp1o', 'Ln5XipJOR58j8y0Jb0Ec0NeBwP3VnbJzhVK74y2ZE2Ge50gP7hc4fz98r0qs', '2017-04-28 03:17:22', '2017-04-28 03:17:22'),
(30, 'Febryan Saputra', 'saputra.febryan@gmail.com', 1, '$2y$10$CVABf2.', 'arL6kObX7bdr1uUq9FbGpylnLv4cAvUYAiG6BYtucg5Ny6mOEH6t9iCumSNF', '2017-04-28 03:19:00', '2017-04-28 03:19:00'),
(31, 'Fidar Pratiwi', 'pratiwi.fidar@gmail.com', 1, '$2y$10$M2z0Isu', '6bGT5o97pMYZYpYJprcMc3n3WnMfOgoj8LiM0BKBKjcSPcGwViTmhnfU3gfO', '2017-04-28 03:19:27', '2017-04-28 03:19:27'),
(32, 'Anang Adenansi', 'adenansi.anang@gmail.com', 1, '$2y$10$VSAE1il', 'AAmSFKzA0mhuCaHhip6N38XxI6NoyPZMWiQMOHfcJtUTerlETZJSgpXci0pT', '2017-04-28 03:19:57', '2017-04-28 03:19:57'),
(33, 'Amelia Ananda', 'ananda.amelia@gmail.com', 1, '$2y$10$JrHGWa/', 'JZeCO6GyXu9VNAezbQPpwWZzfFlWrkj8NFRcroQwWSVz23FlHz2RV7n9HwaO', '2017-04-28 03:20:58', '2017-04-28 03:20:58'),
(34, 'Muhammad Wili Azzam', 'azzam.wili@gmail.com', 1, '$2y$10$Oq5Bvj0', 'ATybigQuAfk1YMz5AzenAQxa6YcRblhgvb1BQAFdvY8yQF36aUsmKqAyuMfz', '2017-04-28 03:22:28', '2017-04-28 03:22:28'),
(35, 'Ghina Nazlifa Hesna', 'hesna.nazlifa@gmail.com', 1, '$2y$10$A5A6OC3', 'Y1H57EcngfEDoB3ltRXWvsLJNRhoFOffRwIQAu6tBjEASoPo51VTzemNhEDg', '2017-04-28 03:23:07', '2017-04-28 03:23:07'),
(36, 'Wahyuniarsih', 'wahyuniarsih@gmail.com', 1, '$2y$10$3h0fxYg', 'kxc2Ba7Y69S03QvAv91VQs4vOtqMxxfPmqmonQK0Yc9wbLPVtqiJbA55pHRP', '2017-04-28 03:23:36', '2017-04-28 03:23:36'),
(37, 'Nadira Gustina', 'gustina.nadira@gmail.com', 1, '$2y$10$5xd3vOC', 'IhgXRT02bN10X2w9uZ080uv1yhRZ6rhrSDyZhLO8KVBnp9uT2c5nUU3zulYd', '2017-04-28 03:24:15', '2017-04-28 03:24:15'),
(38, 'Nuradlina', 'nuradlina@gmail.com', 1, '$2y$10$WUU6MpM', 'VnX8RbMbmewFnFj9Wm8qDdVi03E0KHXGTSzOHtJuavWvqUeQBehMIubQtWn1', '2017-04-28 03:25:06', '2017-04-28 03:25:06'),
(39, 'Ludia Prasasty', 'prasasty.ludia@gmail.com', 1, '$2y$10$Ox72iCh', 'nD2KO88S0CeIXtjz5Y8RAJcWJ3Ht3olaJCXQy69p8aFKfPUQnP6cP4pd8H2v', '2017-04-28 03:25:35', '2017-04-28 03:25:35'),
(40, 'Purnama Tya', 'tya.purnama@gmail.com', 1, '$2y$10$h6Ojtvn', '8v13tV8mtNVcsok7dMN3VJDzIhXsKN36z1JiJbJHi6syPVAwc4IT4N3o2HIv', '2017-04-28 03:26:07', '2017-04-28 03:26:07'),
(41, 'Vira Dhamara', 'dhamara.vira@gmail.com', 1, '$2y$10$WHgo8IL', 'MZQH6WVzQvx8qMgmexgqNXGl4LXwLvNVUdBNX05H7OWJJIkZOLsbKAnjxPPJ', '2017-04-28 03:27:37', '2017-04-28 03:27:37'),
(42, 'Disella Erangga', 'erangga.disella@gmail.com', 1, '$2y$10$A49dtjh', '4LkjKySK5QyVnzTHXSP9OGpjM8IcuWW9VGYDlMkJhzjIuzJh6mQsMX09Qms8', '2017-04-28 03:28:06', '2017-04-28 03:28:06'),
(43, 'Riski Amelia Sari', 'sari.amelia@gmail.com', 1, '$2y$10$GlxPHiI', 'WDdfwBX8f7b0bwCMzBPYSyZHejZyt0MXMmXwXhitTipQN53aP1D6VfjLVd1o', '2017-04-28 03:28:44', '2017-04-28 03:28:44'),
(44, 'Anin Sapitri', 'sapitri.anin@gmail.com', 1, '$2y$10$COHnvwm', 'VHVWfCHLFue56B5GAe6tfAvjrfcvvR4lFjBYvSLUBoi2vgjmaTcHRYzPgmg0', '2017-04-28 03:29:10', '2017-04-28 03:29:10'),
(45, 'Khirana Dwicahyo', 'dwicahyo.khirana@gmail.com', 1, '$2y$10$Q5vzs03', '2F41g7xtZZiOceR3sSpi5dYvRN81AuXTF485kmV7pnV1CnmEd0M42uAqVAi1', '2017-04-28 03:30:19', '2017-04-28 03:30:19'),
(46, 'Muhammad Rizal', 'rizal.muhammad@gmail.com', 1, '$2y$10$zDBs0qA', 'zcYhBhVuRP7IyxuM6cgCkWMcRovvDn5jjs36RrweGL0CeHVP9Syz3KpdeZis', '2017-04-28 03:30:55', '2017-04-28 03:30:55'),
(47, 'Agung Gumelar', 'gumelar.agung@gmail.com', 1, '$2y$10$k.sjFz/', 'FDKMiQ4wMkzwcEP0ELFSAYGm5Q14z7y6LcPXxS10WqiRwMD4FXwGdT0k2jzq', '2017-04-28 03:31:29', '2017-04-28 03:31:29'),
(48, 'Dio Setiawan', 'setiawan.dio@gmail.com', 1, '$2y$10$I4HlXFV', 'kay4MKV76umbntPwnile8k1GJX7aEdNIuHwvmw5RhgAPFPVMnfLgH8Gl64fO', '2017-04-28 03:31:54', '2017-04-28 03:31:54'),
(49, 'Faiz Razzaq Adiyatma', 'adiyatma.razzaq@gmail.com', 1, '$2y$10$JnGLrKM', 'UPwfj6hMOe2LYWoXEGl4K0mCg1LI75g8cJfDUoHvArBtTVN1G7FndL56jy2o', '2017-04-28 03:32:25', '2017-04-28 03:32:25'),
(50, 'Ivan Presetio Wibowo', 'wibowo.prasetio@gmail.com', 1, '$2y$10$Moknexy', 'vKISJvaKiG0EFc1ELNP8BhvPYyX29fV0264bY0ES8uLNZTw9PMOtNc9egqBR', '2017-04-28 03:32:57', '2017-04-28 03:32:57'),
(51, 'Saktian Iwangga Rajasa', 'rajasa.saktian@gmail.com', 1, '$2y$10$B1bHqWs', '5Bxbnnw5JxXIc52JuxPmqtLULfjacOWa4wSWEbmBcRJPZ9emggnGhQcMADta', '2017-04-28 03:33:25', '2017-04-28 03:33:25'),
(52, 'Rafida Marhinia', 'marhinia.rafida@gmail.com', 1, '$2y$10$fJB0B.a', 'e1g64KSyPiRPdj3SE8dFjkgYxQg1njnOPopqPANVxpkp7tHboB4dQgWc47Rb', '2017-04-28 03:33:59', '2017-04-28 03:33:59'),
(53, 'Riska Yanti', 'yanti.riska@gmail.com', 1, '$2y$10$NjGj8oD', 'rFQnBU0SiSmckVrD6xeLqDNikMsqUuecAZZcnb3ZCXRDwmTop4sppcFnvUF5', '2017-04-28 03:34:23', '2017-04-28 03:34:23'),
(54, 'Alif Arifin', 'arifin.alif@gmail.com', 1, '$2y$10$WZXUfjv', 'StMG3b1KHOVfWGh6c3DPg07Xlson5u1vvwBfBcyhTTuKnYAQhBHqVbfE6JIw', '2017-04-28 03:35:47', '2017-04-28 03:35:47'),
(55, 'Naufal Budi Irfansyah', 'irfansyah.budi@gmail.com', 1, '$2y$10$KYCq6qs', 'jWLMkyHF94kjFNJwlHmmMyZ4uJh3ideeExpBPEWCatv6docH9BhWONGKirRX', '2017-04-28 03:36:13', '2017-04-28 03:36:13'),
(56, 'Naufal Riswanda Jasman', 'jasman.riswanda@gmail.com', 1, '$2y$10$K2wiF2v', 'UDbNJhH5BH31LMCdCOWFwpTe5HU9YP5SliThOyyHaE7owD6c9G3g4yHwMgu9', '2017-04-28 03:36:50', '2017-04-28 03:36:50'),
(57, 'Endah Dwi Septiana', 'septiana.dwi@gmail.com', 1, '$2y$10$/KZuBO7', 'mFdBxy2iWDtwMvG6eOJLPPlUjewXLuXn75kJqqFEUgLwVRBR1bP0P9COjdR4', '2017-04-28 03:37:19', '2017-04-28 03:37:19'),
(58, 'Rahmat Dwi Alfian', 'alfian.dwi@gmail.com', 1, '$2y$10$D.ZSNil', 'KXrA1HJsaiYszZdzQk0NsVvfpFhFGq9QISdBKqwjT8AGn7cefRfqqJttgKV0', '2017-04-28 03:37:42', '2017-04-28 03:37:42'),
(59, 'Charolina Vivi Vienneta', 'vienneta.vivi@gmail.com', 1, '$2y$10$M0Kw7I7', 't62y3Tb49jsXVNcNhM7sQMPD5FzjIL0isIdxm9jvN91CpvDLJArXnzugZrhw', '2017-04-28 03:38:50', '2017-04-28 03:38:50'),
(60, 'Putri Hardini Yulinar', 'yulinar.hardini@gmail.com', 1, '$2y$10$G9dVYoF', 'qcXt6aAsYMXzGvfuTpDd4BtBl35Aro1VYBVgeLBrt46rQp1huodVpT9W1FbV', '2017-04-28 03:39:26', '2017-04-28 03:39:26'),
(61, 'asem', 'asem@gmail.com', 2, '$2y$10$/wSPnravWpGSq6ppTB5opOPLalQZYIyMy4aKJ1wVLtMoB11cGkafG', NULL, '2017-09-01 13:10:32', '2017-09-01 13:10:32');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `trigger_delete_profile_nilai` AFTER DELETE ON `users` FOR EACH ROW BEGIN
  	DELETE FROM profiles WHERE user_id=old.id;
    DELETE FROM nilais WHERE user_id=old.id;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trigger_insert_auto` AFTER INSERT ON `users` FOR EACH ROW BEGIN
  	INSERT INTO profiles (user_id,id_registrasi,nama) VALUES (new.id,concat('REG0',new.id),new.name);
    insert INTO nilais (user_id) VALUES (new.id);
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwals`
--
ALTER TABLE `jadwals`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilais`
--
ALTER TABLE `nilais`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pekerjaans`
--
ALTER TABLE `pekerjaans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesans`
--
ALTER TABLE `pesans`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `no_pendaftaran` (`id_registrasi`);

--
-- Indexes for table `sekolah_profiles`
--
ALTER TABLE `sekolah_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tahuns`
--
ALTER TABLE `tahuns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `jadwals`
--
ALTER TABLE `jadwals`
  MODIFY `Id` tinyint(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pekerjaans`
--
ALTER TABLE `pekerjaans`
  MODIFY `id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pesans`
--
ALTER TABLE `pesans`
  MODIFY `id_pesan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `sekolah_profiles`
--
ALTER TABLE `sekolah_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tahuns`
--
ALTER TABLE `tahuns`
  MODIFY `id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
