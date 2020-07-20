-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2020 at 11:38 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bhaktimandiri`
--

-- --------------------------------------------------------

--
-- Table structure for table `1_guru`
--

CREATE TABLE `1_guru` (
  `id` int(100) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `1_guru`
--

INSERT INTO `1_guru` (`id`, `nama_guru`, `jabatan`) VALUES
(1, 'Joko', 'Guru'),
(2, 'Lina', 'Siswa');

-- --------------------------------------------------------

--
-- Table structure for table `1_pelajaran`
--

CREATE TABLE `1_pelajaran` (
  `id` int(100) NOT NULL,
  `id_guru` int(100) NOT NULL,
  `pelajran` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `1_pelajaran`
--

INSERT INTO `1_pelajaran` (`id`, `id_guru`, `pelajran`) VALUES
(1, 1, 'Matematika'),
(2, 2, 'BIndonesia'),
(3, 1, 'Fisika'),
(4, 1, 'Bahasa Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `tgl` int(150) NOT NULL,
  `tentang` varchar(150) NOT NULL,
  `untuk` varchar(150) NOT NULL,
  `jam` varchar(150) NOT NULL,
  `tempat` varchar(150) NOT NULL,
  `admin` varchar(150) NOT NULL,
  `last_update` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `tgl`, `tentang`, `untuk`, `jam`, `tempat`, `admin`, `last_update`) VALUES
(1, 2134213, 'Pengumuman', 'Semua Siswa', '09456', 'Sekolah', 'Muhammad Joko', '35454\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `bakti_admin`
--

CREATE TABLE `bakti_admin` (
  `id` int(12) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bakti_admin`
--

INSERT INTO `bakti_admin` (`id`, `username`, `password`, `nama`) VALUES
(1, 'Admin', '21232f297a57a5a743894a0e4a801fc3', 'Joko');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `foto` text NOT NULL,
  `berita_singkat` text NOT NULL,
  `berita_lengkap` text NOT NULL,
  `last_update` varchar(255) NOT NULL,
  `admin` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `foto`, `berita_singkat`, `berita_lengkap`, `last_update`, `admin`) VALUES
(9, ' 089365644668', '0cb834f5724d40ebaeec88289de37ac8_1491823584.png', '<p>Aku satanvdvsauyhdyusguydsayudgauy</p>\r\n', '<p>Aku satanvdvsauyhdyusguydsayudgauyAku satanvdvsauyhdyusguydsayudgauyAku satanvdvsauyhdyusguydsayudgauyAku satanvdvsauyhdyusguydsayudgauyAku satanvdvsauyhdyusguydsayudgauyAku satanvdvsauyhdyusguydsayudgauyAku satanvdvsauyhdyusguydsayudgauyAku satanvdvsauyhdyusguydsayudgauyAku satanvdvsauyhdyusguydsayudgauyAku satanvdvsauyhdyusguydsayudgauyAku satanvdvsauyhdyusguydsayudgauyAku satanvdvsauyhdyusguydsayudgauyAku satanvdvsauyhdyusguydsayudgauyAku satanvdvsauyhdyusguydsayudgauyAku satanvdvsauyhdyusguydsayudgauyAku satanvdvsauyhdyusguydsayudgauyAku satanvdvsauyhdyusguydsayudgauyAku satanvdvsauyhdyusguydsayudgauyAku satanvdvsauyhdyusguydsayudgauyAku satanvdvsauyhdyusguydsayudgauyAku satanvdvsauyhdyusguydsayudgauyAku satanvdvsauyhdyusguydsayudgauyAku satanvdvsauyhdyusguydsayudgauyAku satanvdvsauyhdyusguydsayudgauy</p>\r\n', '13:25  Senin, 10 April 2017', 'Muhammad Angga');

-- --------------------------------------------------------

--
-- Table structure for table `foto_kategori`
--

CREATE TABLE `foto_kategori` (
  `id` int(255) NOT NULL,
  `judul` text NOT NULL,
  `cover` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foto_kategori`
--

INSERT INTO `foto_kategori` (`id`, `judul`, `cover`) VALUES
(3, 'Joko Ganteng', '2_1483456268.jpg'),
(4, 'kategori', 'background_-_Copy_1483456291.png');

-- --------------------------------------------------------

--
-- Table structure for table `foto_kumpulan`
--

CREATE TABLE `foto_kumpulan` (
  `id` int(255) NOT NULL,
  `id_kategori` int(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelamin` varchar(255) NOT NULL,
  `nama_panggilan` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `walas` varchar(255) NOT NULL,
  `foto` text NOT NULL,
  `guru_mapel` varchar(255) NOT NULL,
  `bg_color` varchar(255) NOT NULL,
  `bg_dark` varchar(255) NOT NULL,
  `sc_fb` text NOT NULL,
  `sc_twitter` text NOT NULL,
  `sc_ig` text NOT NULL,
  `sc_linkedin` text NOT NULL,
  `sc_gplus` text NOT NULL,
  `sc_pinterest` text NOT NULL,
  `admin` varchar(255) NOT NULL,
  `last_update` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image_slider`
--

CREATE TABLE `image_slider` (
  `id` int(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `tipe_gbr` varchar(255) NOT NULL,
  `efek_text` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image_slider`
--

INSERT INTO `image_slider` (`id`, `image`, `tipe_gbr`, `efek_text`, `judul`, `deskripsi`) VALUES
(4, '1_1482342314.jpg', 'image/jpeg', 'center-align', 'sdfgh2wertyrewqerty', 'sdfgh'),
(5, '2_1482342368.jpg', 'image/jpeg', 'left-align', 'RGFVC', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor '),
(6, '3_1482342980.jpg', 'image/jpeg', 'right-align', 'djsfbjsdbjkfbskjd', 'jasfnsakjfbsabfbkjasbjfjsafbkaskfbjskdnfjkdsbfbdsjkk'),
(8, 'background_1482343105.png', 'image/png', 'right-align', 'sdfsafsdfdsf', 'dsfdsfsdfdsfdsf');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(150) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `kontak` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `id` int(255) NOT NULL,
  `pt` text NOT NULL,
  `isi` text NOT NULL,
  `last_update` varchar(255) NOT NULL,
  `admin` varchar(255) NOT NULL,
  `syarat` text NOT NULL,
  `kontak` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lowongan`
--

INSERT INTO `lowongan` (`id`, `pt`, `isi`, `last_update`, `admin`, `syarat`, `kontak`) VALUES
(1, 'orang ganteng', '<p>afasfafawerwerew</p>\r\n', '04:33 -s Jumat, 6 Januari 2017', '', '<p>asfafsafa</p>\r\n', 'wqrwererwe'),
(2, 'aasfsaf', '<p>sfasfsafa</p>\r\n', '04:18 -s Jumat, 6 Januari 2017', 'Muhammad Angga', '<p>fasfsaf</p>\r\n', 'asfsafsa');

-- --------------------------------------------------------

--
-- Table structure for table `paket_keahlian`
--

CREATE TABLE `paket_keahlian` (
  `id` int(11) NOT NULL,
  `nama_jurusan` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tentang_jurusan` varchar(255) NOT NULL,
  `admin` varchar(255) NOT NULL,
  `last_update` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paket_keahlian_foto`
--

CREATE TABLE `paket_keahlian_foto` (
  `id_jurusan` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_keahlian_foto`
--

INSERT INTO `paket_keahlian_foto` (`id_jurusan`, `foto`) VALUES
('1', '0cb834f5724d40ebaeec88289de37ac8_-_Copy_1491888133.png'),
('1', 'arch_hero_wallpaper_by_rahremix-d979ppg_-_Copy_1491888133.jpeg'),
('1', 'blur-wallpaper-6_-_Copy_1491888133.jpg'),
('1', 'Dark-blue-Wallpaper_Windows_10_HD_2880x1800_-_Copy_1491888133.png'),
('1', 'dark-green-gradient-blur-wallpaper-83350_-_Copy_1491888134.jpg'),
('1', 'dont_panic___ubuntu___linux_by_grilledchicken_-_Copy_1491888134.jpg'),
('1', 'google-inspired_-_Copy_1491888134.jpg'),
('1', 'index_-_Copy_1491888134.png'),
('1', 'maxresdefault_1491888134.jpg'),
('1', 'rhXByyv_-_Copy_1491888134.png'),
('1', 'w11_1491888165.png'),
('1', 'w12_1491888165.png'),
('1', 'w13_1491888166.png'),
('1', 'w14_1491888166.png'),
('1', 'w15_1491888166.png'),
('1', 'w16_1491888166.png'),
('1', 'w17_1491888166.png'),
('1', 'w18_1491888167.png'),
('1', 'w19_1491888167.png'),
('1', 'w20_1491888167.png'),
('1', 'w21_1491888167.jpg'),
('1', 'w22_1491888167.png'),
('1', 'w23_1491888167.png'),
('1', 'w24_1491888167.png'),
('1', 'w25_1491888168.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(255) NOT NULL,
  `oleh` varchar(255) NOT NULL,
  `untuk` varchar(255) NOT NULL,
  `tanggung_jawab` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `last_update` varchar(255) NOT NULL,
  `tentang` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pesan_guru`
--

CREATE TABLE `pesan_guru` (
  `id` int(11) NOT NULL,
  `untuk` varchar(150) NOT NULL,
  `ip` varchar(150) NOT NULL,
  `pesan` varchar(150) NOT NULL,
  `waktu` varchar(150) NOT NULL
) ENGINE=MEMORY DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_misi`
--

CREATE TABLE `_misi` (
  `id` int(12) NOT NULL,
  `misi` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_misi`
--

INSERT INTO `_misi` (`id`, `misi`, `foto`) VALUES
(1, 'Menyiapkan tenaga terampil sesuai dengan kompetensi program keahlian Menyiapkan tenaga terampil yang siap bersaing di pasar bebas menyiapkan tenaga berjiwa wirausaha Membudayakan nilai-nilai Akhlakul Karimah ', 'baktilogo_1483155010.png');

-- --------------------------------------------------------

--
-- Table structure for table `_visi`
--

CREATE TABLE `_visi` (
  `id` int(10) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `arti` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_visi`
--

INSERT INTO `_visi` (`id`, `icon`, `nama`, `arti`) VALUES
(1, 'grade', 'Kompetensi', 'Tenaga terampil sesuai dengan kompetensi program keahlian'),
(2, 'grade', 'Kompetitif ', 'Tenaga terampil yang siap bersaing di pasar bebas'),
(3, 'grade', 'Mandiri', 'Tenaga berjiwa wirausaha'),
(4, 'up_arrow', 'Ihsan', 'Membudayakan nilai-nilai Akhlakul Karimah ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `1_guru`
--
ALTER TABLE `1_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `1_pelajaran`
--
ALTER TABLE `1_pelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bakti_admin`
--
ALTER TABLE `bakti_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foto_kategori`
--
ALTER TABLE `foto_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foto_kumpulan`
--
ALTER TABLE `foto_kumpulan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `image_slider`
--
ALTER TABLE `image_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket_keahlian`
--
ALTER TABLE `paket_keahlian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan_guru`
--
ALTER TABLE `pesan_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_misi`
--
ALTER TABLE `_misi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_visi`
--
ALTER TABLE `_visi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `1_guru`
--
ALTER TABLE `1_guru`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `1_pelajaran`
--
ALTER TABLE `1_pelajaran`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bakti_admin`
--
ALTER TABLE `bakti_admin`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `foto_kategori`
--
ALTER TABLE `foto_kategori`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `foto_kumpulan`
--
ALTER TABLE `foto_kumpulan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `image_slider`
--
ALTER TABLE `image_slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `paket_keahlian`
--
ALTER TABLE `paket_keahlian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pesan_guru`
--
ALTER TABLE `pesan_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `_misi`
--
ALTER TABLE `_misi`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `_visi`
--
ALTER TABLE `_visi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
