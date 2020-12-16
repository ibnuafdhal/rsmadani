-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 10:26 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsmadani`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `gambar` varchar(64) NOT NULL,
  `arjudul` varchar(64) NOT NULL,
  `arkonten` longtext NOT NULL,
  `artanggal` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `gambar`, `arjudul`, `arkonten`, `artanggal`, `created_at`, `modified_at`) VALUES
(1, '495bff0c62c44374e04ee13e5b0766c2.jpg', 'Cara menggunakan masker dengan benar ', '<p style=\"text-align: justify;\"><em>Saat</em>&nbsp;seseorang sedang sakit, seperti flu, pilek, atau batuk, umumnya mereka akan&nbsp;<strong>memakai</strong>&nbsp;masker. Hal tersebut bertujuan untuk mencegah terjadinya penyebaran penyakit dari penderita ke orang sehat di sekitarnya.&nbsp;<br />Masker yang biasa digunakan banyak orang untuk mencegah penyebaran penyakit memiliki dua sisi berbeda, yakni sisi berwarna biru atau hijau dan sisi berwarna putih. Namun sudah tahukah Anda bagaimana cara pakai masker yang benar?</p>\r\n<p style=\"text-align: justify;\"><strong>Kapan sebaiknya harus memakai masker hidung?</strong></p>\r\n<p style=\"text-align: justify;\"><em>Saat</em> seseorang sedang sakit, seperti flu, pilek, atau batuk, umumnya mereka akan <strong>memakai</strong> masker. Hal tersebut bertujuan untuk mencegah terjadinya penyebaran penyakit dari penderita ke orang sehat di sekitarnya. <br />Masker yang biasa digunakan banyak orang untuk mencegah penyebaran penyakit memiliki dua sisi berbeda, yakni sisi berwarna biru atau hijau dan sisi berwarna putih. Namun sudah tahukah Anda bagaimana cara pakai masker yang benar?</p>\r\n<p style=\"text-align: justify;\"><strong>Kapan sebaiknya harus memakai masker hidung?</strong></p>', '2020-06-28', '2020-12-02 03:40:42', '2020-12-01 21:12:42'),
(5, '5bb5090804da3e48d42b113844661ac8.JPG', 'RSD Madani belum melayani peserta BPJS', '<p><em>Artikel Percobaan ini dambil dari <strong>halloriau.com</strong></em></p>\r\n<p>PEKANBARU - Sejak diresmikan pada 28 Januari 2018 lalu, pelayanan rumah sakit umum daerah (RSUD) Madani yang berada di Jalan Garuda Sakti, Pekanbaru belum bisa memberikan pelayanan yang maksimal. Bahkan hingga saat ini rumah sakit milik pemerintah ini belum bisa melayani pasien peserta BPJS.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Hal ini dikeluhkan oleh Nasir Penyalai, warga Jalan Rawa Bening Kelurahan Tangkerang Utara, Kecamatam Bukit Raya. Nasir mengaku kecewa atas pelayanan rumah sakit pemerintah tersebut, karena selain belum bisa menerima pasien BPJS, RSUD Madani juga belum bisa menampung pasien untuk rawat inap.</p>\r\n<p>&nbsp;</p>\r\n<p>\"Itu menjadi petaka untuk masyarakat yang mau berobat. Dan Kadis Kesehatan juga belum definitif, sementara Plt yang sekarang bukan berasal dari kesehatan,\" keluhnya.</p>\r\n<p>&nbsp;</p>\r\n<p>Menanggapi hal tersebut, Ketua DPRD kota Pekanbaru, Hamdani menjelaskan bahwa sejauh ini Walikota Pekanbaru sudah melakukan beberapa kali Assesment untuk memilih Kapala Dinas, namun hal tersebut belum membuahkan hasil.</p>\r\n<p>&nbsp;</p>\r\n<p>\"Sulit mencari dokter yang mau jadi Kepala Dinas, dan sudah dilakukan Assesment berapa kali, tapi yang daftar tidak banyak dan yang daftar juga tidak lulus. Dan kita nanti akan mendesak Walikota untuk segera memilih Kadiskes. Di tanggal 15 ini Assesment akan dilakukan kembali dan pejabat baru semoga bisa semua meningkatkan dan tidak berbau politik,\" jelas Hamdani saat menggelar reses di Kelurahan Tangkerang Utara.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Diketahui berita sebelumnya, Direktur RS Madani Pekanbaru, Mulyadi menjelaskan alasan kenapa RSUD madani ini belum bekerjasama dengan BPJS, bahwa menurut Mulyadi ada beberapa persyaratan yang harus dipenuhi termasuk segi fasilitas, peralatan dan jumlah SDM.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Namun pada dasarnya, keberadaan RS Madani Pekanbaru hadir untuk melayani kebutuhan kesehatan masyarakat dengan harga murah dan berkualitas.</p>\r\n<p>&nbsp;</p>\r\n<p>\"Kita masih fokus terhadap pembangunan fisik rumah sakit, yang kini sudah memasuki tahap finishing akhir. Insyaallah, Maret nanti kita bisa beroperasi penuh melayani masyarakat Pekanbaru. Namun berbicara masalah kerjasama dengan BPJS Kesehatan, masih ada persyaratan yang belum bisa kita penuhi salah satunya adalah belum diraihnya prediket akreditasi. Akhir tahun 2020 ini, kita akan melakukan akreditasi rumah sakit. Setelah itu, baru kita kerjasama dengan BPJS kesehatan sehingga bisa melayani lebih banyak masyarakat,\" ungkap Mulyadi.</p>\r\n<p>&nbsp;</p>\r\n<p>Penulis : Mimi Purwanti</p>\r\n<p>Editor : Fauzia</p>', '2020-07-03', '2020-11-27 17:12:13', '2020-11-26 23:11:13');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `gambar` varchar(64) NOT NULL,
  `id_situs` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `ndokter` varchar(128) NOT NULL,
  `bdokter` varchar(128) NOT NULL,
  `hari` varchar(128) NOT NULL,
  `jammasuk` varchar(11) NOT NULL,
  `jampulang` varchar(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `gambar`, `ndokter`, `bdokter`, `hari`, `jammasuk`, `jampulang`, `is_active`, `created_at`, `modified_at`) VALUES
(45, '2261668eed61686466ce9552c580ea67.JPG', 'Rasyid', 'Dokter Mata', 'Selasa', '10:30', '11:00', 0, '2020-12-09 07:05:17', '0000-00-00 00:00:00'),
(46, '7af270f529442b7ec5724ab6da3a119b.JPG', 'Rasyid', 'Dokter Mata', 'Rabu', '14:00', '15:40', 0, '2020-12-09 17:03:14', '0000-00-00 00:00:00'),
(47, '7c95c43a8095ef7260897c730a34bd12.png', 'Anto', 'Dokter Umum', 'Kamis', '13:30', '15:00', 1, '2020-11-30 09:22:58', '0000-00-00 00:00:00'),
(48, '', 'abib', 'Dokter Kandungan', 'Senin', '18:23', '20:25', 1, '2020-12-06 04:58:15', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `dtl_ruangan`
--

CREATE TABLE `dtl_ruangan` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `id_kategori` varchar(11) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dtl_ruangan`
--

INSERT INTO `dtl_ruangan` (`id`, `nama`, `id_kategori`, `is_active`) VALUES
(1, 'Ruangan Bedah A', '1', 0),
(2, 'Ruangan Bedah B', '1', 1),
(3, 'Ruangan Bedah C', '1', 1),
(5, 'Ruangan Gigi A', '2', 0),
(6, 'Melati 2.1', '6', 1),
(7, 'Melati 2.2', '6', 0),
(8, 'A1', '8', 1),
(9, 'A2', '8', 1),
(10, 'A1', '7', 1),
(11, 'A2', '7', 1),
(12, 'B3', '9', 1),
(13, 'B4', '9', 0),
(14, 'A1', '10', 1),
(15, 'A2', '10', 1),
(16, 'B3', '11', 1),
(17, 'B4', '11', 0),
(18, 'C5', '12', 1),
(19, 'C6', '12', 1),
(20, 'c3', '12', 0),
(21, 'c5', '12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id` int(11) NOT NULL,
  `nlayanan` varchar(64) NOT NULL,
  `gambar` varchar(64) NOT NULL,
  `dlayanan` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id`, `nlayanan`, `gambar`, `dlayanan`, `created_at`, `modified_at`) VALUES
(8, 'Ruang Operasi', '3d264416e071d780d22fe08f3dd9f5b9.jpg', '', '2020-12-13 16:35:21', '0000-00-00 00:00:00'),
(9, 'Laboratorium', 'bc4b59063d98b868923830eb5b92ac86.jpg', '', '2020-12-13 16:45:19', '0000-00-00 00:00:00'),
(10, 'layanan yang akan datang', '557a0de585cc0fef280273e3915c00cf.jpg', '', '2020-12-14 07:01:12', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id` int(11) NOT NULL,
  `ktruangan` varchar(64) NOT NULL,
  `exist` int(1) NOT NULL,
  `modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id`, `ktruangan`, `exist`, `modified_at`) VALUES
(12, 'Ruang C', 0, '2020-11-27 17:06:28'),
(11, 'Ruang B', 0, '2020-11-27 17:06:22'),
(10, 'Ruang A', 0, '2020-11-27 17:05:46');

-- --------------------------------------------------------

--
-- Table structure for table `situs`
--

CREATE TABLE `situs` (
  `id` int(11) NOT NULL,
  `tentang` varchar(1024) NOT NULL,
  `isi` varchar(1024) NOT NULL,
  `gambar` varchar(64) NOT NULL,
  `visi` varchar(512) NOT NULL,
  `misi` varchar(768) NOT NULL,
  `logo` varchar(64) NOT NULL,
  `icon` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `situs`
--

INSERT INTO `situs` (`id`, `tentang`, `isi`, `gambar`, `visi`, `misi`, `logo`, `icon`) VALUES
(1, 'Kata Sambutan Direktur RSD Madani Kota Pekanbaru', '\"Selamat Datang DI RSD Madani Kota Pekanbaru\"', 'c564c6dacad8b7cca05c63cb370f6bd6.jpg', '“Terwujudnya Rumah Sakit Madani yang Mandiri, Berbudaya dan Bernilai (MADANI) di Kota Pekanbaru”\r\n ', '<p>a) Menyediakan pelayanan kesehatan rujukan yang terjangkau, bermutu dan profesional;</p>\r\n<p>b) Meningkatkan kualitas sumber daya manusia (SDM) yang aktif, inovatif, bernilai dan berbudaya;</p>\r\n<p>c) Menyediakan sarana dan prasarana yang berkualitas dan teknologi terbaru dengan prinsip efektif dan efisien serta sesuai dengan konsep green hospital;</p>\r\n<p>d) Menciptakan tata kelola rumah sakit yang mandiri, transparan dan berkualitas.</p>', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(6, 'Marzuki', 'marzukiberg@gmail.com', '', 'c93c7b3466148a7418835555700f7fb9b38e58bb', 1, 1, 1498867200),
(13, 'Admin', 'admin@gmail.com', '', '7c222fb2927d828af22f592134e8932480637c0d', 1, 1, 12122020);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator '),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Beranda', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'far fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 1, 'Dokter', 'dokter', 'fas fa-fw fa-user-md', 1),
(5, 1, 'Layanan', 'admin/layanan', 'fas fa-fw fa-briefcase-medical', 1),
(6, 1, 'Ruangan', 'admin/ruangan', 'fas fa-fw fa-procedures', 1),
(7, 1, 'Artikel', 'admin/artikel', 'fas fa-fw fa-newspaper', 1),
(8, 1, 'Kehadiran Dokter', 'khdokter', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dtl_ruangan`
--
ALTER TABLE `dtl_ruangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `situs`
--
ALTER TABLE `situs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `dtl_ruangan`
--
ALTER TABLE `dtl_ruangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `situs`
--
ALTER TABLE `situs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
