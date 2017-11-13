-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2017 at 09:32 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb_smkpi`
--

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE `infos` (
  `id` int(4) NOT NULL,
  `author` int(3) NOT NULL,
  `title` varchar(60) NOT NULL,
  `text` text NOT NULL,
  `gambar` varchar(40) DEFAULT NULL,
  `lampiran` varchar(40) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `author`, `title`, `text`, `gambar`, `lampiran`, `created_at`, `updated_at`) VALUES
(27, 12, 'Jadwal PPDB Tahun Ajaran 2016/2017', '1. Registrasi Online (28 Juni - 2 Juli)\r\n2. Pengiriman/Penyeraahan & Verifikasi Berkas (28Juni - 2 Juli)\r\n4. Tes Wawancara (28 Juni - 21 Juli)\r\n5. Pengumuman Hasil Seleksi (23 Juli)\r\n6. Daftar Ulang (24 -25 Juli)', NULL, NULL, '2017-05-01 00:27:00', '2017-09-29 19:11:32'),
(43, 61, 'Alur Pendaftaran Online Tahun Ajaran 2016/2017', 'Alur Pendataran Online SMK PI Ambarrukmo 1 Sleman\r\nSyarat & Ketentuan dapat dilihat pada halaman \r\n"informasi PPDB > Syarat &Ketentuan"', '1506717232_ALUR PPDB.png', NULL, '2017-09-29 18:44:23', '2017-09-29 20:33:52');

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
  `user_id` int(3) UNSIGNED NOT NULL,
  `matematika` float DEFAULT NULL,
  `ipa` float DEFAULT NULL,
  `bahasa_indonesia` float DEFAULT NULL,
  `bahasa_inggris` float DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilais`
--

INSERT INTO `nilais` (`user_id`, `matematika`, `ipa`, `bahasa_indonesia`, `bahasa_inggris`, `created_at`, `updated_at`) VALUES
(15, 80, 80, 80, 80, '2017-04-28 13:35:35', '2017-04-28 06:35:35'),
(16, 77, 90, 80, 90, '2017-04-28 10:00:42', '2017-11-13 14:53:11'),
(19, 0, 0, 0, 0, '2017-04-28 10:10:04', NULL),
(22, 0, 0, 0, 0, '2017-04-28 10:12:01', NULL),
(25, 0, 0, 0, 0, '2017-04-28 10:13:49', NULL),
(26, 0, 0, 0, 0, '2017-04-28 10:15:27', NULL),
(28, 0, 0, 0, 0, '2017-04-28 10:16:54', NULL),
(29, 0, 0, 0, 0, '2017-04-28 10:17:22', NULL),
(30, 0, 0, 0, 0, '2017-04-28 10:19:00', NULL),
(31, 0, 0, 0, 0, '2017-04-28 10:19:27', NULL),
(32, 0, 0, 0, 0, '2017-04-28 10:19:57', NULL),
(33, 0, 0, 0, 0, '2017-04-28 10:20:58', NULL),
(34, 0, 0, 0, 0, '2017-04-28 10:22:28', NULL),
(35, 0, 0, 0, 0, '2017-04-28 10:23:07', NULL),
(36, 0, 0, 0, 0, '2017-04-28 10:23:36', NULL),
(37, 0, 0, 0, 0, '2017-04-28 10:24:15', NULL),
(38, 0, 0, 0, 0, '2017-04-28 10:25:06', NULL),
(39, 0, 0, 0, 0, '2017-04-28 10:25:35', NULL),
(40, 0, 0, 0, 0, '2017-04-28 10:26:07', NULL),
(41, 0, 0, 0, 0, '2017-04-28 10:27:37', NULL),
(42, 0, 0, 0, 0, '2017-04-28 10:28:06', NULL),
(43, 0, 0, 0, 0, '2017-04-28 10:28:44', NULL),
(44, 0, 0, 0, 0, '2017-04-28 10:29:10', NULL),
(45, 0, 0, 0, 0, '2017-04-28 10:30:19', NULL),
(61, 0, 0, 0, 0, '2017-09-01 13:10:32', NULL),
(64, 70, 75, 85, 80, '2017-10-19 18:24:32', '2017-10-24 11:58:22');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('asem@gmail.com', '$2y$10$RYsEjYO.v5tTX72sqjhxf.gkEmgXBuglMzWVsp0sUsrTmT24TWOe.', '2017-10-22 12:53:06'),
('khihady.ks@gmail.com', '$2y$10$0kQ5csJRYYrEwMUgVAmpJelDybCJl5zFx5cFUiSfVvpa6jSXO5OAe', '2017-11-02 05:34:48');

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
-- Table structure for table `pengaturans`
--

CREATE TABLE `pengaturans` (
  `id` int(11) NOT NULL,
  `periode_id` tinyint(2) NOT NULL,
  `buka_pendaftaran` tinyint(1) NOT NULL DEFAULT '1',
  `tampil_hasil_kelulusan` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaturans`
--

INSERT INTO `pengaturans` (`id`, `periode_id`, `buka_pendaftaran`, `tampil_hasil_kelulusan`) VALUES
(1, 5, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `periode`
--

CREATE TABLE `periode` (
  `id` tinyint(2) NOT NULL,
  `periode` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `periode`
--

INSERT INTO `periode` (`id`, `periode`) VALUES
(1, 2016),
(2, 2017),
(5, 2018);

--
-- Triggers `periode`
--
DELIMITER $$
CREATE TRIGGER `setPengaturan_setelahNambahPeriode` AFTER INSERT ON `periode` FOR EACH ROW BEGIN
	UPDATE pengaturans set periode_id=new.id WHERE id=1;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pesans`
--

CREATE TABLE `pesans` (
  `id_pesan` int(4) NOT NULL,
  `id_peserta` int(3) DEFAULT NULL,
  `id_admin` int(3) DEFAULT NULL,
  `subjek` varchar(60) DEFAULT NULL,
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
(37, 64, 61, 'Tes Validasi Reply', 'ahahahah', NULL, 'admin', NULL, '2017-10-17 14:58:26'),
(41, 64, 61, 'Lengkapi Biodata!', 'Segera Lengkapi biodata anda, termaikasih :)', NULL, 'admin', NULL, '2017-10-24 12:10:17'),
(42, 64, NULL, 'REPLY[#41]', 'Siapp min!', NULL, 'peserta', 'reply', '2017-10-24 12:11:51'),
(43, 64, 61, 'Perihal Ijazah', 'Ijazah dapat diserahkan langsung atau bisa juga dikirim melalui jasa pengiriman,\r\nTerimakasih.', NULL, 'admin', NULL, '2017-10-25 05:28:58'),
(76, 64, NULL, 'Masalah Verifikasi', 'Belum diverifikasi sampai sekarang, kenapa ya?', NULL, 'peserta', NULL, '2017-11-13 19:18:52');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `user_id` int(3) UNSIGNED NOT NULL,
  `no_peserta` varchar(7) DEFAULT NULL,
  `nama` varchar(40) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan','','') DEFAULT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `berat_badan` int(3) DEFAULT NULL,
  `tinggi_badan` int(3) DEFAULT NULL,
  `alamat` text NOT NULL,
  `agama` enum('','islam','kristen','buddha','hindu') DEFAULT '',
  `asal_sekolah` varchar(40) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `tahun_id` tinyint(2) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `nama_ayah` varchar(60) NOT NULL,
  `nama_ibu` varchar(60) NOT NULL,
  `no_ortu` varchar(13) NOT NULL,
  `pekerjaan_ayah` tinyint(1) NOT NULL,
  `pekerjaan_ibu` tinyint(1) NOT NULL,
  `alamat_ortu` text NOT NULL,
  `lampiran` varchar(40) NOT NULL,
  `foto` varchar(40) DEFAULT NULL,
  `status_biodata` enum('Belum Lengkap','Lengkap','','') DEFAULT 'Belum Lengkap',
  `status_verifikasi` enum('Belum Diverifikasi','Terverifikasi','','') NOT NULL DEFAULT 'Belum Diverifikasi',
  `status_diterima` enum('Lulus','Tidak Lulus','','') NOT NULL DEFAULT 'Tidak Lulus',
  `periode_id` tinyint(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`user_id`, `no_peserta`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `gol_darah`, `berat_badan`, `tinggi_badan`, `alamat`, `agama`, `asal_sekolah`, `alamat_sekolah`, `tahun_id`, `no_hp`, `nama_ayah`, `nama_ibu`, `no_ortu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `alamat_ortu`, `lampiran`, `foto`, `status_biodata`, `status_verifikasi`, `status_diterima`, `periode_id`, `created_at`, `updated_at`) VALUES
(15, 'REG015', 'Muhammad Ramzy Raihan', '', '0000-00-00', 'laki-laki', '', 70, 170, 'Sebengkok no.5', 'islam', 'SMP 4 Tarakan', '', 3, '', '', '', '0', 0, 0, '', '', '', 'Belum Lengkap', 'Belum Diverifikasi', 'Tidak Lulus', 1, '2017-10-24 00:11:28', '2017-04-28 06:35:35'),
(16, 'REG016', 'Agus Dwi Maulana', 'Tarakan', '1997-06-08', 'laki-laki', 'A', 60, 168, 'Jl Mulawarman Tarakan Timur, Kalimantan Utara', 'islam', 'SMPN 1 Tarakan', 'Jl Sebengkok Tarakan Timur', 3, '09778966579', 'Sutejo', 'Mariem', '09977542899', 4, 4, 'jl jodipati no.149A Mancasan Kidul', '', '1509599766_Logo-Smansata.png', 'Lengkap', 'Terverifikasi', 'Lulus', 2, '2017-10-24 04:19:51', '2017-11-13 14:53:11'),
(19, 'REG019', 'Putri Wulandari', '', '0000-00-00', 'perempuan', '', 0, 0, '', '', '', '', 0, '', '', '', '0', 0, 0, '', '', '', 'Belum Lengkap', 'Terverifikasi', 'Lulus', 1, '2017-10-24 00:11:28', '2017-10-30 17:58:04'),
(22, 'REG022', 'Javeen Raynaldo', '', '0000-00-00', 'laki-laki', '', 0, 0, '', 'buddha', '', '', 0, '', '', '', '0', 0, 0, '', '', '', 'Belum Lengkap', 'Terverifikasi', 'Tidak Lulus', 1, '2017-10-24 00:11:28', '2017-10-30 18:03:01'),
(25, 'REG025', 'Laila Purnama Dewi', '', '0000-00-00', 'perempuan', '', 0, 0, '', 'islam', '', '', 0, '', '', '', '0', 0, 0, '', '', '', 'Belum Lengkap', 'Terverifikasi', 'Lulus', 1, '2017-10-24 00:11:28', '2017-10-30 18:02:42'),
(26, 'REG026', 'Martinus Gesiata Lamarian', '', '0000-00-00', 'perempuan', '', 0, 0, '', 'islam', '', '', 0, '', '', '', '0', 0, 0, '', '', '', 'Belum Lengkap', 'Terverifikasi', 'Tidak Lulus', 1, '2017-10-24 00:11:28', '2017-10-30 18:03:01'),
(28, 'REG028', 'Fransiska Winda Achi', '', '0000-00-00', 'perempuan', '', 0, 0, '', 'islam', '', '', 0, '', '', '', '0', 0, 0, '', '', '', 'Belum Lengkap', 'Terverifikasi', 'Tidak Lulus', 1, '2017-10-24 00:11:28', '2017-10-30 18:03:01'),
(29, 'REG029', 'Muhammad Aidil Fitrah', '', '0000-00-00', 'laki-laki', '', 0, 0, '', 'islam', '', '', 0, '', '', '', '0', 0, 0, '', '', '', 'Belum Lengkap', 'Belum Diverifikasi', 'Tidak Lulus', 1, '2017-10-24 00:11:28', NULL),
(30, 'REG030', 'Febryan Saputra', '', '0000-00-00', 'laki-laki', '', 0, 0, '', 'islam', '', '', 0, '', '', '', '0', 0, 0, '', '', '', 'Belum Lengkap', 'Belum Diverifikasi', 'Tidak Lulus', 2, '2017-10-24 00:11:28', '2017-10-20 11:51:21'),
(31, 'REG031', 'Fidar Pratiwi', '', '0000-00-00', 'perempuan', '', 0, 0, '', 'islam', '', '', 0, '', '', '', '0', 0, 0, '', '', '', 'Belum Lengkap', 'Belum Diverifikasi', 'Tidak Lulus', 1, '2017-10-24 00:11:28', NULL),
(32, 'REG032', 'Anang Adenansi', '', '0000-00-00', 'laki-laki', '', 0, 0, '', 'islam', '', '', 0, '', '', '', '0', 0, 0, '', '', '', 'Belum Lengkap', 'Belum Diverifikasi', 'Lulus', 1, '2017-10-24 00:11:28', '2017-10-20 11:55:34'),
(33, 'REG033', 'Amelia Ananda', '', '0000-00-00', 'laki-laki', '', 0, 0, '', 'islam', '', '', 0, '', '', '', '0', 0, 0, '', '', '', 'Belum Lengkap', 'Belum Diverifikasi', 'Lulus', 1, '2017-10-24 00:11:28', '2017-11-13 14:43:24'),
(34, 'REG034', 'Muhammad Wili Azzam', '', '0000-00-00', 'laki-laki', '', 0, 0, '', 'islam', '', '', 0, '', '', '', '0', 0, 0, '', '', '', 'Belum Lengkap', 'Belum Diverifikasi', 'Lulus', 1, '2017-10-24 00:11:28', '2017-11-13 14:43:24'),
(35, 'REG035', 'Ghina Nazlifa Hesna', '', '0000-00-00', 'perempuan', '', 0, 0, '', 'islam', '', '', 0, '', '', '', '0', 0, 0, '', '', '', 'Belum Lengkap', 'Belum Diverifikasi', 'Tidak Lulus', 1, '2017-10-24 00:11:28', NULL),
(36, 'REG036', 'Wahyuniarsih', '', '0000-00-00', 'laki-laki', '', 0, 0, '', 'islam', '', '', 0, '', '', '', '0', 0, 0, '', '', '', 'Belum Lengkap', 'Belum Diverifikasi', 'Lulus', 1, '2017-10-24 00:11:28', '2017-11-13 14:43:24'),
(37, 'REG037', 'Nadira Gustina', '', '0000-00-00', 'perempuan', '', 0, 0, '', 'islam', '', '', 0, '', '', '', '0', 0, 0, '', '', '', 'Belum Lengkap', 'Belum Diverifikasi', 'Tidak Lulus', 1, '2017-10-24 00:11:28', NULL),
(38, 'REG038', 'Nuradlina', '', '0000-00-00', 'perempuan', '', 0, 0, '', 'islam', '', '', 0, '', '', '', '0', 0, 0, '', '', '', 'Belum Lengkap', 'Belum Diverifikasi', 'Tidak Lulus', 1, '2017-10-24 00:11:28', NULL),
(39, 'REG039', 'Ludia Prasasty', '', '0000-00-00', 'perempuan', '', 0, 0, '', 'islam', '', '', 0, '', '', '', '0', 0, 0, '', '', '', 'Belum Lengkap', 'Belum Diverifikasi', 'Tidak Lulus', 1, '2017-10-24 00:11:28', NULL),
(40, 'REG040', 'Purnama Tya', '', '0000-00-00', 'perempuan', '', 0, 0, '', 'islam', '', '', 0, '', '', '', '0', 0, 0, '', '', '', 'Belum Lengkap', 'Belum Diverifikasi', 'Tidak Lulus', 1, '2017-10-24 00:11:28', NULL),
(41, 'REG041', 'Vira Dhamara', '', '0000-00-00', 'perempuan', '', 0, 0, '', 'islam', '', '', 0, '', '', '', '0', 0, 0, '', '', '', 'Belum Lengkap', 'Belum Diverifikasi', 'Tidak Lulus', 1, '2017-10-24 00:11:28', NULL),
(42, 'REG042', 'Disella Erangga', '', '0000-00-00', 'perempuan', '', 0, 0, '', 'islam', '', '', 0, '', '', '', '0', 0, 0, '', '', '', 'Belum Lengkap', 'Belum Diverifikasi', 'Tidak Lulus', 1, '2017-10-24 00:11:28', NULL),
(43, 'REG043', 'Riski Amelia Sari', '', '0000-00-00', 'perempuan', '', 0, 0, '', 'islam', '', '', 0, '', '', '', '0', 0, 0, '', '', '', 'Belum Lengkap', 'Belum Diverifikasi', 'Tidak Lulus', 1, '2017-10-24 00:11:28', NULL),
(44, 'REG044', 'Anin Sapitri', '', '0000-00-00', 'perempuan', '', 0, 0, '', 'islam', '', '', 0, '', '', '', '0', 0, 0, '', '', '', 'Belum Lengkap', 'Belum Diverifikasi', 'Tidak Lulus', 1, '2017-10-24 00:11:28', NULL),
(45, 'REG045', 'Khirana Dwicahyo', '', '0000-00-00', 'laki-laki', '', 0, 0, '', 'islam', '', '', 0, '', '', '', '0', 0, 0, '', '', '', 'Belum Lengkap', 'Belum Diverifikasi', 'Lulus', 1, '2017-10-24 00:11:28', '2017-10-25 04:11:20'),
(61, 'REG061', 'asem', '', '0000-00-00', NULL, '', 0, 0, '', NULL, 'sekolah', '', 0, '', '', '', '0', 0, 0, '', '', '1509979255_unisa.png', 'Belum Lengkap', 'Belum Diverifikasi', 'Tidak Lulus', 1, '2017-10-24 00:11:28', '2017-11-06 14:40:55'),
(64, 'REG064', 'Khihady Sucahyo', 'Tarakan', '1996-06-05', 'laki-laki', 'B', 55, 157, 'Mancasan Kidul Jl jodipati 149A', 'islam', 'SMP Al-Azhar Samarinda', 'Jl.Mulawarman Sempaja Samarinda', 4, '085346361613', 'Adi Priyanto', 'Marsini', '085346361613', 1, 4, 'Jl Raden Abdullah No.25 Pangkalpinang. Kep. Bangka Belitung.', '', '1507561957_Pas-Photo23.jpg', 'Lengkap', 'Belum Diverifikasi', 'Lulus', 1, '2017-10-24 00:11:28', '2017-10-24 12:31:39');

--
-- Triggers `profiles`
--
DELIMITER $$
CREATE TRIGGER `hapus_user_ketika_profil_dihapus` AFTER DELETE ON `profiles` FOR EACH ROW BEGIN
  	DELETE FROM users WHERE id=old.user_id;
    DELETE FROM nilais WHERE user_id=old.user_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `sekolah_profiles`
--

CREATE TABLE `sekolah_profiles` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `teks` text NOT NULL,
  `lampiran` varchar(40) DEFAULT NULL,
  `slide` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah_profiles`
--

INSERT INTO `sekolah_profiles` (`id`, `title`, `teks`, `lampiran`, `slide`, `created_at`, `updated_at`) VALUES
(1, 'Tentang Sekolah', 'SMK PI Ambarrukmo 1 Sleman berdiri berdasarkan SK menteri Pendidikan dan Kebudayaaan RI nomor: 0274/113.5/H/1998 tanggal 26 desember 1988, Bidang Keahlian Akomodasi Perhotelan. Di tengah persaingan global yang sangat kompetitif ini, SMK PI Ambarrukmo 1 Sleman siap menjadi sekolah menengah kejuruan yang secara khusus mempersiapkan tenaga professional perhotelan dan kepariwisataan “Siap Kerja”. Dengan Program unggulan produktof didukung penguasaan bahasa inggris sebagai bahasa internasional serta bahasa asing lain (Jepang, Perancis) SMK PI Ambarrukmo 1 Sleman, mempersiapkan lulusan  professional, untuk meraih peluang kerja di dalam dan luar negeri.', '1508395907_fakultas.jpg', NULL, NULL, '2017-10-19 06:51:47'),
(2, 'Visi & Misi', 'Visi\r\nMenjadi tamatan yang berkualitas, unggul di bidang Akomodasi Perhotelan\r\n\r\nMisi\r\n- Menciptakan lembaga yang menjunjung tinggi moralitas\r\n- Mengembangkan lembaga sebagai sekolah yang inovatif dan kreatif dapar bersaing baik secara nasional maupun internasional\r\n- Mengembangkan SDM dengan jiwa kewirausahaan', NULL, NULL, NULL, '2017-09-16 11:32:54'),
(3, 'Lokasi', 'SMK PI AMBARRUKMO 1 SLEMAN \r\nJl. Cendrawasih 125 Mancasan lor, Condong Catur, Depok,Sleman 55283', '1508397461_EKSTERNAL.pdf', NULL, NULL, '2017-10-19 07:17:41');

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
  `id` tinyint(1) NOT NULL,
  `chat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `telegram_settings`
--

INSERT INTO `telegram_settings` (`id`, `chat_id`) VALUES
(1, 410626437);

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
(15, 'Muhammad Ramzy Raihan', 'raihan.ramzy@gmail.com', 2, '$2y$10$nlFD7pV', 'L9oaL0NlTOKZ1zQa4aIeGv2aowhfmu44XWbaB6q5iDtKguIi38xNjxUq96Kt', '2017-04-28 02:53:51', '2017-04-28 02:53:51'),
(16, 'Agus Dwi Maulana', 'maulana.agus@gmail.com', 1, '$2y$10$IH1BGPn', 'U3RMNJUiuHe7bCSOsDDRU2WlXVHxYx9nJSTdlJXP7xZZkfJmhdvxUj50nnLc', '2017-04-28 03:00:42', '2017-04-28 03:00:42'),
(19, 'Putri Wulandari', 'wulandari.putri@gmail.com', 1, '$2y$10$YqXTxcT', 'JIATSD5I5yIHx6wogtampJR7oGj0AKZ1jSwuP6UrRpDUJbCSpcB83jZ8mX2s', '2017-04-28 03:10:04', '2017-04-28 03:10:04'),
(22, 'Javeen Raynaldo', 'reynaldo.javeen@gmail.com', 1, '$2y$10$Wdn1UBK', 'lA7ttf8DsSKYKyeN8LwDRrowrtX07VLMeOb96TYHVdh6cLjwxlNUoW37YrEy', '2017-04-28 03:12:01', '2017-04-28 03:12:01'),
(25, 'Laila Purnama Dewi', 'dewi.purnama@gmail.com', 1, '$2y$10$Jij18y9', 'y9VrPLjGgZ9SLb6NFlj2O5c1dk7FtUmbDJa0LRt7xcpLknw87WKthKJhIqQy', '2017-04-28 03:13:49', '2017-04-28 03:13:49'),
(26, 'Martinus Gesiata Lamarian', 'lamarian.gesiata@gmail.com', 1, '$2y$10$mhyJ0Pj', 'HsIWm7OQDEKhR3j0tUOQnCEgxVovv2kVi54qS3R5lu8Dz71okbtKWAcf1oIw', '2017-04-28 03:15:27', '2017-04-28 03:15:27'),
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
(61, 'Admin Satu', 'admin@gmail.com', 2, '$2y$10$/wSPnravWpGSq6ppTB5opOPLalQZYIyMy4aKJ1wVLtMoB11cGkafG', '1xc77Q71BU9Xb5s567omvmeUUWu4QiA2ny4q3kz8y0LMupQ25kY3qX2ZfeYO', '2017-09-01 13:10:32', '2017-09-01 13:10:32'),
(64, 'Khihady Sucahyo', 'mohsalah@gmail.com', 1, '$2y$10$c1KGB1KA8F1BvPccx7UWIe4kWac1LoEBK85ju6uekh905f0.0O/x6', 'e1ar58DWUTCdMfKBe9GJvvyzWUxWjqWG15juRHktfm8zd5YBwhAnTS9QSVvc', '2017-10-09 15:03:02', '2017-10-09 15:03:02');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `trigger_insert_auto` AFTER INSERT ON `users` FOR EACH ROW BEGIN
DECLARE var_periode Tinyint(4);
SELECT periode_id INTO var_periode FROM pengaturans WHERE id=1;
  	INSERT INTO profiles (user_id,no_peserta,nama,periode_id) VALUES (new.id,concat('REG0',new.id),new.name,var_periode);
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
-- Indexes for table `pengaturans`
--
ALTER TABLE `pengaturans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tahun_ajaran` (`periode`);

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
  ADD UNIQUE KEY `no_pendaftaran` (`no_peserta`);

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
-- Indexes for table `telegram_settings`
--
ALTER TABLE `telegram_settings`
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
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
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
-- AUTO_INCREMENT for table `periode`
--
ALTER TABLE `periode`
  MODIFY `id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pesans`
--
ALTER TABLE `pesans`
  MODIFY `id_pesan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
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
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `nilais`
--
ALTER TABLE `nilais`
  ADD CONSTRAINT `nilais_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
