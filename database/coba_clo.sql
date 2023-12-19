-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 06:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coba_clo`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_capaian_pembelajaran`
--

CREATE TABLE `data_capaian_pembelajaran` (
  `id_capaian_pembelajaran` int(11) NOT NULL,
  `kode_mata_kuliah` varchar(10) NOT NULL,
  `no` int(2) NOT NULL,
  `capaian_pembelajaran` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_capaian_pembelajaran`
--

INSERT INTO `data_capaian_pembelajaran` (`id_capaian_pembelajaran`, `kode_mata_kuliah`, `no`, `capaian_pembelajaran`) VALUES
(1, 'IF316A', 1, 'Menjelaskan teknologi framework pada aplikasi web dan\r\nimplementasinya sebagai bagian dari bidang ilmu informatika'),
(2, 'IF316A', 2, 'Menerapkan aturan standar coding dalam membuat program, meliputideskripsi pada file program, model, view, controller dan aturan lainnya yang memastikan keterbacaan kode program.'),
(3, 'IF316A', 3, 'Menyiapkan dan melakukan konfigurasi lingkungan pengembangan perangkat lunak berbasis web'),
(4, 'IF316A', 4, 'Menerjemahkan kebutuhan menjadi rancangan aplikasi web dan mengidentifikasi kebutuhan komponen yang diperlukan'),
(5, 'IF316A', 5, 'Mengimplementasikan rancangan menjadi aplikasi web yang\r\nberfungsi dengan komponen yang sesuai'),
(6, 'IF316A', 6, 'Menghubungkan basis data dengan aplikasi berbasis web dengan konsep model, view , controller'),
(7, 'IF316A', 7, 'Menguji, memperbaiki dan melacak kesalahan pada aplikasi yang dibuat'),
(8, 'IF316A', 8, 'Membuat dokumentasi perangkat lunak yang dibuat dan mempresentasikan kepada client'),
(31, 'IF209', 1, 'tes 12sadad'),
(36, 'IF209', 2, 'tes flash editediewdie'),
(37, 'IF209', 3, 'dsafsafa afsafa faasf'),
(38, 'IF209', 4, 'sadsadsafsa'),
(45, 'IF209', 10, 'sadsad');

-- --------------------------------------------------------

--
-- Table structure for table `data_mata_kuliah`
--

CREATE TABLE `data_mata_kuliah` (
  `kode_mata_kuliah` varchar(10) NOT NULL,
  `mata_kuliah` varchar(100) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `jenjang` varchar(10) NOT NULL,
  `kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_mata_kuliah`
--

INSERT INTO `data_mata_kuliah` (`kode_mata_kuliah`, `mata_kuliah`, `tahun_ajaran`, `semester`, `prodi`, `jenjang`, `kelas`) VALUES
('IF209', 'Jaringan Komputer', '2023-2024', 'Ganjil', 'Teknik Informatika', 'D3', 'Pagi'),
('IF316A', 'Mata Kuliah Pilihan Web', '2023-2024', 'Ganjil', 'Teknik Informatika', 'D3', 'Pagi'),
('IF317', 'Interaksi Manusia Komputer', '2023-2024', 'Ganjil', 'Teknik Informatika', 'D3', 'Pagi');

-- --------------------------------------------------------

--
-- Table structure for table `instrumen_asesmen`
--

CREATE TABLE `instrumen_asesmen` (
  `id` int(11) NOT NULL,
  `kode_mata_kuliah` varchar(10) NOT NULL,
  `minggu` varchar(10) NOT NULL,
  `capaian_pembelajaran` varchar(10) NOT NULL,
  `metode_asesmen` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instrumen_asesmen`
--

INSERT INTO `instrumen_asesmen` (`id`, `kode_mata_kuliah`, `minggu`, `capaian_pembelajaran`, `metode_asesmen`) VALUES
(1, 'IF316A', '1', '1', 'T1'),
(2, 'IF316A', '2', '1', 'P1'),
(3, 'IF316A', '3', '2', 'P2'),
(4, 'IF316A', '4', '2', 'P3'),
(5, 'IF316A', '5', '2', 'P4'),
(6, 'IF316A', '6', '3', 'P5'),
(7, 'IF316A', '7', '4', 'P6'),
(8, 'IF316A', 'ATS', '4', 'PP1'),
(11, 'IF209', '1', '1', 't10'),
(12, 'IF209', '1', '9', 'T9');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_asesmen`
--

CREATE TABLE `tbl_asesmen` (
  `id` int(11) NOT NULL,
  `kode_mata_kuliah` varchar(10) NOT NULL,
  `nama_mata_kuliah` varchar(100) NOT NULL,
  `nip_dosen` varchar(50) NOT NULL,
  `nama_dosen` varchar(100) NOT NULL,
  `tahun_ajaran` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_asesmen`
--

INSERT INTO `tbl_asesmen` (`id`, `kode_mata_kuliah`, `nama_mata_kuliah`, `nip_dosen`, `nama_dosen`, `tahun_ajaran`, `semester`, `kelas`) VALUES
(11, 'IF317', 'Interaksi Manusia Komputer', '123123', 'Rina Yulius, S.Pd., M.Eng.', '2023-2024', '3', 'PA'),
(16, 'IF321', 'Pengantar Basis Data', '3312201118', 'Johan Sitanggang', '2023', '1', 'IF 1D ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `id` int(11) NOT NULL,
  `nip_dosen` varchar(10) NOT NULL,
  `kode_mata_kuliah` varchar(10) NOT NULL,
  `nama_mata_kuliah` varchar(100) NOT NULL,
  `program_studi` varchar(100) NOT NULL,
  `sks` varchar(10) NOT NULL,
  `total_clo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`id`, `nip_dosen`, `kode_mata_kuliah`, `nama_mata_kuliah`, `program_studi`, `sks`, `total_clo`) VALUES
(7, '123123', 'IF317', 'Interaksi Manusia Komputer', 'Diploma 3 Teknik Informatika', '5', '6'),
(21, '3312201118', 'IF321', 'Pengantar Basis Data', 'Diploma 3 Teknik Informatika', '3', '5');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course_learning_outcome`
--

CREATE TABLE `tbl_course_learning_outcome` (
  `id` int(11) NOT NULL,
  `kode_mata_kuliah` varchar(10) NOT NULL,
  `kode_clo` varchar(10) NOT NULL,
  `course_learning_outcome` varchar(300) NOT NULL,
  `metode_asesmen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_course_learning_outcome`
--

INSERT INTO `tbl_course_learning_outcome` (`id`, `kode_mata_kuliah`, `kode_clo`, `course_learning_outcome`, `metode_asesmen`) VALUES
(1, '', 'tes1213', 'lorem aSDASDASJDOUASIJ DASDF AFSAFSA FAS', 'Performance ratings'),
(2, 'asf2', 'tes1213', 'pppppp', 'Journal & portofolios'),
(3, 'asf2', 'tes222', 'qqqq', 'Performance ratings'),
(4, 'asf2', 'rrrr2222', 'rrrrrr', 'Self-report insruments'),
(5, 'asf2', 'a1', 'aaa aaa aaa ', 'Performance ratings'),
(6, 'asf2', 'a2', 'qwfrwqefewqfwqf adfqawfwqfwq', 'Performance ratings'),
(8, 'asf2', 'a3', 'fsadfsasfas3333333333', 'Written & oral question'),
(9, 'tes1', 'CLO-6', 'DSADASDASASDASD', 'Performance ratings'),
(10, 'asf2', 'a4', 'aaa4444', 'Product Reviews'),
(12, 'tes1', 'CLO-4', 'tes aja  5', 'Written & oral question'),
(14, 'IF317', 'CLO-1', 'Mahasiswa mampu membuat rancangan antarmuka yang sesuai\r\nkebutuhan pengguna dan prinsip desain antar', 'Written & oral question'),
(15, 'IF317', 'CLO-2', 'Mahasiswa mampu menerapkan konsep pengalaman pengguna (User Experience) dalam membuat antarmuka apli', 'Written & oral question'),
(16, 'IF317', 'CLO-3', 'Mahasiswa mampu menerapkan pengujian prototype aplikasi sesuai metode pengembangan aplikasi', 'Written & oral question'),
(17, 'IF317', 'CLO-4', 'Mahasiswa mampu melakukan pengujian terhadap daya guna aplikasi yang dibuat', 'Written & oral question'),
(18, 'IF317', 'CLO-5', 'Mahasiswa mampu mengimplementasikan rancangan yang dibuat dalam bentuk antarmuka aplikasi', 'Written & oral question'),
(19, 'IF317', 'CLO-6', 'Mahasiswa mampu mengkomunikasikan rancangan yang dibuat dalam bentuk lisan pada presentasi formal dan tulisan dalam bentuk laporan teknis', 'Written & oral question'),
(23, 'IF306', 'tesCLO-01', 'Lorem ipsum dolor sit amet.', 'Journal & portofolios'),
(24, 'IF321', 'PBD-1', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, in.', 'Written & oral question'),
(25, 'IF321', 'PBD-2', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, in.\r\n', 'Written & oral question'),
(26, 'IF321', 'PBD-3', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, in.\r\n', 'Written & oral question'),
(27, 'IF321', 'PBD-5', 'Lorem ipsum, dolor sit amet.', 'Written & oral question'),
(28, 'IF321', 'PBD-4', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, in.\r\n', 'Written & oral question');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jurusan`
--

CREATE TABLE `tbl_jurusan` (
  `id` int(11) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `jumlah_program_studi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_jurusan`
--

INSERT INTO `tbl_jurusan` (`id`, `jurusan`, `jumlah_program_studi`) VALUES
(24, 'Manajemen Bisnis', '0'),
(25, 'Teknik Informatika', '0'),
(26, 'Teknik Mesin', '0'),
(29, 'Teknik Elektro', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_metode_asesmen`
--

CREATE TABLE `tbl_metode_asesmen` (
  `id` int(11) NOT NULL,
  `metode_asesmen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_metode_asesmen`
--

INSERT INTO `tbl_metode_asesmen` (`id`, `metode_asesmen`) VALUES
(6, 'Performance ratings'),
(7, 'Product reviews'),
(9, 'Self-report instruments'),
(13, 'Written and oral question '),
(14, 'Journal and portofolios ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai_mahasiswa`
--

CREATE TABLE `tbl_nilai_mahasiswa` (
  `id` int(11) NOT NULL,
  `kode_mata_kuliah` varchar(10) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `nama_mahasiswa` varchar(100) NOT NULL,
  `q1` int(3) NOT NULL,
  `q2` int(3) NOT NULL,
  `p1` int(3) NOT NULL,
  `p2` int(3) NOT NULL,
  `p3` int(3) NOT NULL,
  `p4` int(3) NOT NULL,
  `p5` int(3) NOT NULL,
  `a1` int(3) NOT NULL,
  `a2` int(3) NOT NULL,
  `a3` int(3) NOT NULL,
  `a4` int(3) NOT NULL,
  `a5` int(3) NOT NULL,
  `mse` int(3) NOT NULL,
  `fse` int(3) NOT NULL,
  `pp1` int(3) NOT NULL,
  `pp2` int(3) NOT NULL,
  `nilai_akhir` int(3) NOT NULL,
  `nilai_huruf` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_nilai_mahasiswa`
--

INSERT INTO `tbl_nilai_mahasiswa` (`id`, `kode_mata_kuliah`, `nim`, `nama_mahasiswa`, `q1`, `q2`, `p1`, `p2`, `p3`, `p4`, `p5`, `a1`, `a2`, `a3`, `a4`, `a5`, `mse`, `fse`, `pp1`, `pp2`, `nilai_akhir`, `nilai_huruf`) VALUES
(51, 'IF317', '3311122331', 'Aditya', 85, 90, 76, 76, 76, 76, 76, 76, 76, 76, 76, 76, 76, 76, 76, 76, 77, 'B+'),
(52, 'IF317', '3311122332', 'Bella', 92, 88, 76, 85, 90, 78, 85, 93, 90, 87, 94, 88, 92, 100, 95, 90, 90, 'A'),
(53, 'IF317', '3311122333', 'Candra', 90, 91, 92, 87, 85, 76, 83, 94, 90, 86, 78, 80, 90, 85, 87, 90, 87, 'A'),
(54, 'IF317', '3311122334', 'Dian', 94, 90, 86, 75, 90, 92, 87, 96, 90, 85, 80, 86, 89, 76, 90, 80, 86, 'A'),
(55, 'IF317', '3311122335', 'Eka', 88, 92, 82, 90, 85, 90, 91, 89, 92, 86, 88, 90, 92, 89, 91, 86, 89, 'A'),
(56, 'IF317', '3311122336', 'Fitri', 90, 89, 78, 87, 92, 85, 89, 93, 91, 88, 94, 86, 92, 88, 90, 87, 89, 'A'),
(57, 'IF317', '3311122337', 'Gunawan', 87, 94, 85, 91, 80, 93, 84, 90, 92, 87, 89, 91, 88, 91, 93, 87, 89, 'A'),
(58, 'IF317', '3311122338', 'Hana', 91, 87, 79, 88, 91, 86, 87, 94, 90, 89, 93, 88, 90, 89, 86, 92, 89, 'A'),
(59, 'IF317', '3311122339', 'Irfan', 86, 93, 88, 89, 75, 90, 82, 88, 93, 85, 87, 82, 92, 80, 95, 90, 87, 'A'),
(60, 'IF317', '3311122340', 'Jihan', 93, 85, 77, 92, 94, 78, 85, 96, 88, 86, 91, 89, 93, 87, 88, 91, 88, 'A'),
(61, 'IF317', '123123', 'asep', 80, 80, 85, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 'A-'),
(62, 'IF317', '456789', 'jonathan', 100, 100, 100, 100, 100, 80, 80, 90, 90, 80, 80, 80, 90, 80, 80, 80, 88, 'A'),
(63, 'IF317', '666', 'tes', 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 'E'),
(64, 'IF317', '555123', 'ucup', 10, 10, 10, 20, 20, 20, 30, 30, 40, 40, 30, 30, 30, 30, 30, 40, 26, 'E'),
(65, 'IF317', '7777', 'dudung', 80, 80, 76, 76, 76, 76, 76, 76, 76, 76, 76, 76, 76, 76, 76, 76, 76, 'B+'),
(66, 'IF317', '909090', 'tes80', 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 'A-'),
(68, 'IF317', '235235235', 'tes99', 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 'A-'),
(69, 'IF317', '2353462354', 'tes100', 75, 75, 75, 75, 75, 75, 75, 75, 75, 75, 75, 75, 75, 75, 75, 75, 75, 'B+'),
(70, 'IF317', '457443456', 'tes101', 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 'B'),
(71, 'IF317', '143124112', 'tes102', 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 'B-'),
(72, 'IF317', '41254135', 'tes103', 60, 60, 60, 60, 60, 60, 60, 60, 60, 60, 60, 60, 60, 60, 60, 60, 60, 'C+'),
(73, 'IF317', '574734344', 'tes104', 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 'C'),
(74, 'IF317', '4587435', 'tes105', 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 'C-'),
(75, 'IF317', '2353223', 'tes106', 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 'D+'),
(76, 'IF317', '23456235', 'tes107', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'D'),
(77, 'IF317', '235323', 'tes108', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'E'),
(78, 'IF306', '235235235', 'tes99', 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 'A-'),
(79, 'IF306', '2353462354', 'tes100', 75, 75, 75, 75, 75, 75, 75, 75, 75, 75, 75, 75, 75, 75, 75, 75, 75, 'B+'),
(80, 'IF306', '457443456', 'tes101', 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 'B'),
(81, 'IF306', '143124112', 'tes102', 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 'B-'),
(82, 'IF306', '41254135', 'tes103', 60, 60, 60, 60, 60, 60, 60, 60, 60, 60, 60, 60, 60, 60, 60, 60, 60, 'C+'),
(83, 'IF306', '574734344', 'tes104', 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 'C'),
(84, 'IF306', '4587435', 'tes105', 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 'C-'),
(85, 'IF306', '2353223', 'tes106', 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 'D+'),
(86, 'IF306', '23456235', 'tes107', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'D'),
(87, 'IF306', '235323', 'tes108', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'E'),
(88, 'IF321', '1234567890', 'Anisa Fitri', 80, 70, 90, 85, 75, 88, 92, 85, 88, 75, 90, 80, 85, 88, 75, 92, 84, 'A-'),
(89, 'IF321', '2345678901', 'Budi Santoso', 95, 80, 75, 88, 78, 85, 92, 88, 78, 85, 92, 78, 88, 85, 85, 90, 85, 'A-'),
(90, 'IF321', '3456789012', 'Cindy Sari', 70, 85, 88, 78, 95, 82, 90, 78, 95, 82, 90, 70, 78, 82, 90, 70, 82, 'A-'),
(91, 'IF321', '4567890123', 'Dedi Setiawan', 88, 75, 92, 80, 78, 90, 85, 90, 78, 90, 85, 88, 80, 90, 78, 85, 85, 'A-'),
(92, 'IF321', '5678901234', 'Eka Prasetyo', 75, 92, 80, 85, 92, 70, 78, 70, 78, 85, 92, 75, 85, 70, 92, 75, 80, 'A-'),
(93, 'IF321', '0123456789', 'Joko Prabowo', 70, 88, 78, 75, 90, 80, 80, 82, 78, 80, 75, 92, 70, 75, 80, 90, 79, 'B+'),
(94, 'IF321', '9012345678', 'Irfan Santoso', 70, 80, 65, 90, 80, 70, 75, 50, 45, 40, 60, 65, 60, 60, 70, 65, 65, 'B-'),
(95, 'IF321', '8901234567', 'Hani Susanto', 80, 70, 80, 45, 30, 60, 70, 50, 55, 50, 60, 65, 60, 55, 60, 70, 60, 'B-'),
(96, 'IF321', '7890123456', 'Gita Wijaya', 80, 85, 60, 65, 50, 45, 40, 55, 50, 70, 45, 40, 55, 50, 60, 65, 56, 'C'),
(97, 'IF321', '6789012345', 'Fandi Rahmat', 70, 75, 70, 75, 80, 85, 90, 40, 30, 60, 65, 60, 50, 80, 60, 75, 68, 'B-'),
(98, 'IF321', '5678901234', 'Joko Prabowo', 80, 85, 80, 60, 65, 60, 40, 45, 55, 60, 65, 70, 65, 30, 45, 40, 57, 'C'),
(99, 'IF321', '555', 'tes123', 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 'A-');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_program_studi`
--

CREATE TABLE `tbl_program_studi` (
  `id` int(11) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `program_studi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_program_studi`
--

INSERT INTO `tbl_program_studi` (`id`, `jurusan`, `program_studi`) VALUES
(13, 'Manajemen Bisnis', 'Sarjana Terapan Logistik Perdagangan Internasional'),
(14, 'Manajemen Bisnis', 'Sarjana Terapan Administrasi Bisnis Terapan (International Class)'),
(15, 'Manajemen Bisnis', 'Program Studi D2 Jalur Cepat Distribusi Barang'),
(16, 'Manajemen Bisnis', 'Diploma 3 Akuntansi'),
(17, 'Manajemen Bisnis', 'Sarjana Terapan Administrasi Bisnis Terapan'),
(18, 'Teknik Elektro', 'Sarjana Terapan Teknologi Rekayasa Elektronika'),
(19, 'Teknik Elektro', 'Diploma 3 Teknik Instrumentasi'),
(20, 'Teknik Elektro', 'Sarjana Terapan Teknik Mekatronika'),
(21, 'Teknik Elektro', 'Sarjana Terapan Teknologi Rekayasa Pembangkit Energi'),
(22, 'Teknik Elektro', 'Diploma 3 Teknik Elektronika Manufaktur'),
(23, 'Teknik Elektro', 'Sarjana Terapan Teknik Robotika'),
(24, 'Teknik Informatika', 'Diploma 3 Teknologi Geomatika'),
(25, 'Teknik Informatika', 'Diploma 3 Teknik Informatika'),
(26, 'Teknik Informatika', 'Sarjana Terapan Animasi'),
(27, 'Teknik Informatika', 'Sarjana Terapan Teknologi Rekayasa Multimedia'),
(28, 'Teknik Informatika', 'Sarjana Terapan Rekayasa Keamanan Siber'),
(29, 'Teknik Informatika', 'Sarjana Terapan Rekayasa Perangkat Lunak'),
(30, 'Teknik Mesin', 'Diploma 3 Teknik Perawatan Pesawat Udara'),
(31, 'Teknik Mesin', 'Sarjana Terapan Teknologi Rekayasa Konstruksi Perkapalan'),
(32, 'Teknik Mesin', 'Sarjana Terapan Teknologi Rekayasa Pengelasan dan Fabrikasi'),
(33, 'Teknik Mesin', 'Program Profesi Insinyur (PSPPI)'),
(36, 'Teknik Mesin', 'Diploma 3 Teknik Mesin'),
(38, 'Manajemen Bisnis', 'Sarjana Terapan Akuntansi Manajerial');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `nip_dosen` varchar(10) NOT NULL,
  `password` varchar(256) NOT NULL,
  `nama_dosen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nip_dosen`, `password`, `nama_dosen`) VALUES
(1, '123123', '$2y$10$FkVze84a4GS0PicsX7cmauODS5igwyxt.zIHmspfM1J.rLMvarA8i', 'Rina Yulius, S.Pd., M.Eng'),
(2, '3312201118', '$2y$10$6kGrcHkKdDF6Rs7Z41F8puSCdtyOpph1DTwVjydEj2z1frsvCophW', 'Johan Sitanggang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_capaian_pembelajaran`
--
ALTER TABLE `data_capaian_pembelajaran`
  ADD PRIMARY KEY (`id_capaian_pembelajaran`),
  ADD KEY `kode_mata_kuliah` (`kode_mata_kuliah`);

--
-- Indexes for table `data_mata_kuliah`
--
ALTER TABLE `data_mata_kuliah`
  ADD PRIMARY KEY (`kode_mata_kuliah`);

--
-- Indexes for table `instrumen_asesmen`
--
ALTER TABLE `instrumen_asesmen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_mata_kuliah` (`kode_mata_kuliah`);

--
-- Indexes for table `tbl_asesmen`
--
ALTER TABLE `tbl_asesmen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_course_learning_outcome`
--
ALTER TABLE `tbl_course_learning_outcome`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_metode_asesmen`
--
ALTER TABLE `tbl_metode_asesmen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_nilai_mahasiswa`
--
ALTER TABLE `tbl_nilai_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_program_studi`
--
ALTER TABLE `tbl_program_studi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_capaian_pembelajaran`
--
ALTER TABLE `data_capaian_pembelajaran`
  MODIFY `id_capaian_pembelajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `instrumen_asesmen`
--
ALTER TABLE `instrumen_asesmen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_asesmen`
--
ALTER TABLE `tbl_asesmen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_course_learning_outcome`
--
ALTER TABLE `tbl_course_learning_outcome`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_metode_asesmen`
--
ALTER TABLE `tbl_metode_asesmen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_nilai_mahasiswa`
--
ALTER TABLE `tbl_nilai_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `tbl_program_studi`
--
ALTER TABLE `tbl_program_studi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_capaian_pembelajaran`
--
ALTER TABLE `data_capaian_pembelajaran`
  ADD CONSTRAINT `data_capaian_pembelajaran_ibfk_1` FOREIGN KEY (`kode_mata_kuliah`) REFERENCES `data_mata_kuliah` (`kode_mata_kuliah`);

--
-- Constraints for table `instrumen_asesmen`
--
ALTER TABLE `instrumen_asesmen`
  ADD CONSTRAINT `instrumen_asesmen_ibfk_1` FOREIGN KEY (`kode_mata_kuliah`) REFERENCES `data_mata_kuliah` (`kode_mata_kuliah`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
