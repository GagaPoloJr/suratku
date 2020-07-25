-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2020 at 05:06 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suratku`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(10) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `tanggal_berita` date NOT NULL,
  `upload_berita` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_masuk`
--

CREATE TABLE `data_masuk` (
  `id_masuk` int(10) NOT NULL,
  `id_data` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `tgl_masuk` datetime DEFAULT NULL,
  `tgl_proses` datetime DEFAULT NULL,
  `verifikasi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_masuk`
--

INSERT INTO `data_masuk` (`id_masuk`, `id_data`, `id_user`, `tgl_masuk`, `tgl_proses`, `verifikasi`) VALUES
(23, 26, 4, '2020-07-21 16:31:50', '2020-07-21 16:49:22', 1),
(24, 27, 4, '2020-07-21 16:55:19', '2020-07-21 17:04:30', 1),
(25, 28, 4, '2020-07-25 21:01:45', NULL, 0),
(26, 29, 4, '2020-07-25 21:01:52', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_rw`
--

CREATE TABLE `data_rw` (
  `id_rw` int(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `RW` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_rw`
--

INSERT INTO `data_rw` (`id_rw`, `nama`, `RW`) VALUES
(1, 'PONIRAN', 'RW 01'),
(2, 'JUPRANTO NEPRIL PARDEDE', 'RW 02'),
(3, 'ADI PAMBAYUN', 'RW 03'),
(4, 'SAHNUL BAHRI, SH', 'RW 04'),
(5, 'ROSNAWATI', 'RW 05'),
(6, 'Drs. H. M. NUR ALI, MA', 'RW 06'),
(7, 'Drs. H. SUPERMAN', 'RW 07'),
(8, 'DARSON', 'RW 08'),
(9, 'SABARUDIN', 'RW 09'),
(10, 'Drs. H. SUFIAN', 'RW 10');

-- --------------------------------------------------------

--
-- Table structure for table `data_warga`
--

CREATE TABLE `data_warga` (
  `id_warga` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `j_kelamin` varchar(20) NOT NULL,
  `tempat` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `status` varchar(25) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kebutuhan` varchar(50) NOT NULL,
  `gambar_ktp` varchar(40) DEFAULT NULL,
  `gambar_kk` varchar(40) DEFAULT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_warga`
--

INSERT INTO `data_warga` (`id_warga`, `id_user`, `nama`, `j_kelamin`, `tempat`, `tgl_lahir`, `status`, `agama`, `pekerjaan`, `nik`, `alamat`, `kebutuhan`, `gambar_ktp`, `gambar_kk`, `keterangan`) VALUES
(26, 4, 'hehhehe', '2', 'pekanbaru', '2020-07-01', '1', '1', 'Mahasiswa', '2345634634656456', 'jl bulusan selatan', '5', NULL, NULL, '1'),
(27, 4, 'anas ricky', '1', 'pekanbaru', '2020-06-29', '1', '1', 'asdas', '2131231231222222', 'jl bulusan selatan', '1', NULL, NULL, '3'),
(28, 4, 'Anas alqoyyum', '2', 'pekanbaru', '2020-07-03', '1', '2', 'Mahasiswa', '2131231231222222', 'jl bulusan selatan', '2', NULL, NULL, '1'),
(29, 4, 'Anas alqoyyum', '1', 'pekanbaru', '2020-07-02', '2', '2', 'Mahasiswa', '2131231231222222', 'jl bulusan selatan', '1', NULL, NULL, '1'),
(30, 4, 'haikal rahmadi', '1', 'pekanbaru', '2020-07-08', '1', '1', 'Mahasiswa', '2131231231222222', 'jl bulusan selatan', '2', 'suratpengantar-.jpg', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `kode`
--

CREATE TABLE `kode` (
  `id` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `namafile` varchar(50) NOT NULL,
  `petugas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `smartbook`
--

CREATE TABLE `smartbook` (
  `id` int(11) NOT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `uraian` varchar(255) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `sk` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `petugas` varchar(50) NOT NULL,
  `datask` varchar(50) DEFAULT NULL,
  `datadukung` varchar(50) DEFAULT NULL,
  `jenisdok` varchar(64) DEFAULT NULL,
  `keadaan` varchar(64) DEFAULT NULL,
  `dus` varchar(50) DEFAULT NULL,
  `urut` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `smartbook`
--

INSERT INTO `smartbook` (`id`, `kode`, `nama`, `uraian`, `tanggal`, `sk`, `jenis`, `kota`, `jumlah`, `petugas`, `datask`, `datadukung`, `jenisdok`, `keadaan`, `dus`, `urut`) VALUES
(1, NULL, 'Anas alqoyyum', 'hehehe', '12', '121212', 'asdasd', 'asdasd', '2', 'sdasdasd', NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, 'Anas alqoyyum', 'hehehe', '12', '121212', 'asdasd', 'asdasd', '2', 'sdasdasd', NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, 'Anas alqoyyum', 'hehehe', '12', '121212', 'asdasd', 'asdasd', '2', 'sdasdasd', NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, 'Anas alqoyyum', 'hehehe', '12', '121212', 'asdasd', 'asdasd', '2', 'sdasdasd', NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, 'Anas alqoyyum', 'hehehe', '12', '121212', 'asdasd', 'asdasd', '2', 'sdasdasd', NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, 'Anas alqoyyum', 'hehehe', '12', '121212', 'asdasd', 'asdasd', '2', 'sdasdasd', NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, 'Anas alqoyyum', 'hehehe', '12', '121212', 'asdasd', 'asdasd', '2', 'sdasdasd', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_pjg` varchar(50) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL,
  `id_rw` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `nama_pjg`, `nama`, `password`, `level`, `id_rw`) VALUES
(1, 'admin', '', 'RT 05', 'admin', '1', 0),
(2, 'lurah', 'Wahyu Nofiyandri, M.pd', 'Wahyu Nofiyandri, M.', 'lurah', '2', 0),
(4, 'RT01riki', 'RIKI HERU GUNAWAN', 'RT 01', 'admin', '1', 1),
(5, 'RT02sri', 'SRI MULYANI', 'RT 02', 'admin', '1', 1),
(6, 'RT03syaiful', 'SYAIFUL AZMI', 'RT 03', 'admin', '1', 1),
(7, 'RT04paian', 'PAIAN GULTOM', 'RT 04', 'admin', '1', 1),
(8, 'RT01sahat', 'SAHAT HUMISAR MALAU', 'RT 01', 'admin', '1', 2),
(9, 'RT02ngamidi', 'NGAMIDI', 'RT 02', 'admin', '1', 2),
(10, 'RT03janiar', 'JANIAR SILITONGA', 'RT 03', 'admin', '1', 2),
(11, 'RT01ngamidin', 'NGADIMIN', 'RT 01', 'admin', '1', 3),
(12, 'RT02mulyadi', 'MULYADI', 'RT 02', 'admin', '1', 3),
(13, 'RT03kartono', 'KARTONO', 'RT 03', 'admin', '1', 3),
(14, 'RT01mariah', 'MARIAH, S.AP', 'RT 01', 'admin', '1', 4),
(15, 'RT02harianto', 'HARIANTO', 'RT 02', 'admin', '1', 4),
(16, 'RT03untung', 'UNTUNG PRIYONO', 'RT 03', 'admin', '1', 4),
(17, 'RT04juni', 'JUNI KARDI, S.Pd', 'RT 04', 'admin', '1', 4),
(18, 'RT05jamaris', 'H. JAMARIS, S.Ag', 'RT 05', 'admin', '1', 4),
(19, 'RT01rahman', 'A. RAHMAN', 'RT 01', 'admin', '1', 5),
(20, 'RT02erli', 'ERLI ROZA', 'RT 02', 'admin', '1', 5),
(21, 'RT03repinsen', 'REPINSEN SIHOTANG', 'RT 03', 'admin', '1', 5),
(22, 'RT04rusmono', 'RUSMONO HARTO', 'RT 04', 'admin', '1', 5),
(23, 'RT05asrul', 'ASRUL', 'RT 05', 'admin', '1', 5),
(24, 'RT06iman', 'IMAM SUBAKRI', 'RT 06', 'admin', '1', 5),
(25, 'RT01sabri', 'H. SABRI', 'RT 01', 'admin', '1', 6),
(26, 'RT02irfan', 'M. IRFAN', 'RT 02', 'admin', '1', 6),
(27, 'RT03tasiran', 'TASIRAN', 'RT 03', 'admin', '1', 6),
(28, 'RT04agus', 'AGUS SALIM', 'RT 04', 'admin', '1', 6),
(29, 'RT01mardizal', 'M\"ARDIZAL MARTHA\"', 'RT 01', 'admin', '1', 7),
(30, 'RT02amir', 'AMIR MUSTAF\"A;\"RT 02', 'admin', '1', '7', 0),
(31, 'RT03marlasak', 'MARLASAK PURBA', 'RT 03', 'admin', '1', 7),
(32, 'RT01supriyanto', 'SUPRIYANTO', 'RT 01', 'admin', '1', 8),
(33, 'RT02nur', 'NUR MUALIMIN', 'RT 02', 'admin', '1', 8),
(34, 'RT03lover', 'LOVER SUBARGA', 'RT 03', 'admin', '1', 8),
(35, 'RT04mahayati', 'MAHAYATI HARAHAP', 'RT 04', 'admin', '1', 8),
(36, 'RT05ferdi', 'FERDIANSYAH', 'RT 05', 'admin', '1', 8),
(37, 'RT06rosnadi', 'HJ. ROSNADI', 'RT 06', 'admin', '1', 8),
(38, 'RT01rio', 'RIO HANDOKO', 'RT 01', 'admin', '1', 9),
(39, 'RT02sabarudin', 'SABARUDIN', 'RT 02', 'admin', '1', 9),
(40, 'RT03taufiq', 'TAUFIQ', 'RT 03', 'admin', '1', 9),
(41, 'RT04rodes', 'RODES SIREGAR', 'RT 04', 'admin', '1', 9),
(42, 'RT05rubiyo', 'RUBIYO', 'RT 05', 'admin', '1', 9),
(43, 'RT06robani', 'ROBANI', 'RT 06', 'admin', '1', 9),
(44, 'RT01zam', 'ZAMZAMI', 'RT 01', 'admin', '1', 10),
(45, 'RT02fajar', 'FAJAR, SH', 'RT 02', 'admin', '1', 10),
(46, 'RT03atta', 'ATTAILLAH', 'RT 03', 'admin', '1', 10),
(47, 'RT04irfan', 'M. IRFAN', 'RT 04', 'admin', '1', 10),
(48, 'RT05nasrizal', 'NASRIZAL', 'RT 05', 'admin', '1', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `data_masuk`
--
ALTER TABLE `data_masuk`
  ADD PRIMARY KEY (`id_masuk`);

--
-- Indexes for table `data_rw`
--
ALTER TABLE `data_rw`
  ADD PRIMARY KEY (`id_rw`);

--
-- Indexes for table `data_warga`
--
ALTER TABLE `data_warga`
  ADD PRIMARY KEY (`id_warga`);

--
-- Indexes for table `kode`
--
ALTER TABLE `kode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smartbook`
--
ALTER TABLE `smartbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_masuk`
--
ALTER TABLE `data_masuk`
  MODIFY `id_masuk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `data_rw`
--
ALTER TABLE `data_rw`
  MODIFY `id_rw` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `data_warga`
--
ALTER TABLE `data_warga`
  MODIFY `id_warga` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `kode`
--
ALTER TABLE `kode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `smartbook`
--
ALTER TABLE `smartbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
