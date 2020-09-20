-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2020 at 08:31 AM
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
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL COMMENT 'Album ID',
  `featured` varchar(50) NOT NULL DEFAULT '0' COMMENT 'Featured Image',
  `title` varchar(50) NOT NULL DEFAULT '0' COMMENT 'Album Title',
  `created_on` date NOT NULL COMMENT 'Created Date'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `album_pictures`
--

CREATE TABLE `album_pictures` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'Image ID',
  `album_id` int(11) NOT NULL DEFAULT '0' COMMENT 'Album ID',
  `image` varchar(50) NOT NULL DEFAULT '0' COMMENT 'Image Name',
  `title` varchar(50) NOT NULL DEFAULT '0' COMMENT 'Image Title'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(10) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `isi_berita` text NOT NULL,
  `tanggal_berita` date NOT NULL,
  `upload_berita` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_gambar`
--

CREATE TABLE `data_gambar` (
  `id_gambar` int(10) NOT NULL,
  `id_warga` varchar(14) DEFAULT NULL,
  `gambar_pendukung` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_masuk`
--

CREATE TABLE `data_masuk` (
  `id_masuk` int(10) NOT NULL,
  `id_data` varchar(14) NOT NULL,
  `id_user` int(10) NOT NULL,
  `tgl_masuk` datetime DEFAULT NULL,
  `tgl_proses` datetime DEFAULT NULL,
  `verifikasi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `id_warga` varchar(14) NOT NULL,
  `id_user` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `j_kelamin` varchar(20) NOT NULL,
  `tempat` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `status` varchar(25) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `no_kk` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kebutuhan` varchar(50) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `slug_kategori` varchar(128) NOT NULL,
  `name_kategori` varchar(128) NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `slug_kategori`, `name_kategori`, `urutan`, `date`) VALUES
(4, 'teknologi', 'teknologi', 1, '2019-08-29 06:59:28'),
(6, 'informasi', 'informasi', 3, '2019-08-30 11:44:12');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `slug_post` varchar(128) NOT NULL,
  `title` varchar(128) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(128) NOT NULL,
  `status` enum('Publish','Draft','','') NOT NULL,
  `date_post` datetime NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id_post`, `id_user`, `id_kategori`, `slug_post`, `title`, `body`, `image`, `status`, `date_post`, `date`) VALUES
(1, 50, 6, 'antisipasi-banjir-lurah-labuh-baru-barat-wahyu-tinjau-pembersih-drainase', 'Antisipasi Banjir, Lurah Labuh Baru Barat Wahyu Tinjau Pembersih Drainase', '<p><span style=\"font-family: Roboto, sans-serif; font-size: 13px; background-color: #f3f3f3;\">Pekanbaru, Inforiau.co - Dalam rangka mengantisipasi terjadinya banjir, Lurah Labuh Baru Barat (LBB) Wahyu Nofiyandri meninjau langsung pembersihan drainase yang dilakukan oleh Dinas PUPR Pekanbaru . Satu alat berat dikerahkan untuk mengangkat kotoran seperti endapan lumpur (sedimen) dari dalam parit, jalan Darma Bakti RW 05, Rabu (26/02/2020). Kegiatan peninjauan dihadiri Bhabinkamtibmas, Babinsa, Ketua RW RT, tokoh masyarakat dan para pasukan kuning Dinas PUPR Pemko Pekanbaru. \"Kegiatan ini kita lakukan untuk mencegah terjadinya banjir saat hujan tiba, nanti akan kita tindak lanjut dengan Goro yang akan kita laksanakan pada Kamis besok, kita pusatkan pada dua lokasi. Pertama di Jalan Darma Bakti yakni goro membersihkan drainase yang telah mengalami pendangkalan dan lokasi kedua di Jalan menuju kantor Kelurahan yakni goro membersihkan sampah yang telah menumpuk dan beserak,\" ujar Lurah Wahyu. Dengan dilaksanakannya pembersihan drainase ini, drainase dapat berfungsi dengan baik agar tidak terjadi lagi banjir saat hujan lebat turun. \"Dan saya mengimbau kepada masyarakat khususnya masyarakat yang tiggal di Kelurahan LBB agar meningkatkan kegiatan goro bersama membersihkan drainase dari tumpukan sampah dan sedimen atau pendangkalan, hal ini penting untuk mencegah terjadinyha banjir disaat hujan turun,\" himbaunya. Ia juga mengajak seluruh lapisan masyarakat agar membuang sampah pada tempat yang telah disediakan. \"Jangan buang sampah ke dalam parit. Dan mari bersama-sama kita menjaga kebersihan lingkungan,\" imbaunya. kim</span></p>', '1582696314-img-20200226-wa0032.jpg', 'Publish', '2020-08-24 07:57:42', '2020-08-24 05:57:42');

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
(2, 'lurah', 'Wahyu Nofiyandri, M.Pd', 'Lurah', 'lurah', '2', 0),
(4, 'RT01riki', 'RIKI HERU GUNAWAN', 'RT 01', 'awawaw', '1', 1),
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
(48, 'RT05nasrizal', 'NASRIZAL', 'RT 05', 'admin', '1', 10),
(50, 'haikal', 'haikal rahmadi 123', 'haikal', 'haikal', '2', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `album_pictures`
--
ALTER TABLE `album_pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `data_gambar`
--
ALTER TABLE `data_gambar`
  ADD PRIMARY KEY (`id_gambar`);

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
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Album ID';

--
-- AUTO_INCREMENT for table `album_pictures`
--
ALTER TABLE `album_pictures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Image ID';

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_gambar`
--
ALTER TABLE `data_gambar`
  MODIFY `id_gambar` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_masuk`
--
ALTER TABLE `data_masuk`
  MODIFY `id_masuk` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_rw`
--
ALTER TABLE `data_rw`
  MODIFY `id_rw` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
