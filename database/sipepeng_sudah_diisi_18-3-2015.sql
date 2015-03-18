-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2015 at 04:14 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sipepeng`
--
DROP DATABASE `sipepeng`;
CREATE DATABASE IF NOT EXISTS `sipepeng` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sipepeng`;

-- --------------------------------------------------------

--
-- Table structure for table `artesis`
--

CREATE TABLE IF NOT EXISTS `artesis` (
`id_artesis` int(11) NOT NULL,
  `rt` int(5) NOT NULL,
  `rw` int(5) NOT NULL,
  `alamat` text NOT NULL,
  `ketersediaan_lahan` varchar(10) NOT NULL,
  `long` varchar(50) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `anggaran` int(100) NOT NULL,
  `sumber_data` text NOT NULL,
  `tahun_usulan` int(7) NOT NULL,
  `persetujuan_warga` varchar(10) NOT NULL,
  `jml_pemakai` int(10) NOT NULL,
  `ket` text NOT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `dokumen` varchar(200) DEFAULT NULL,
  `id_kategori` int(5) NOT NULL,
  `status_data_awal` int(3) NOT NULL,
  `status_verifikasi` int(3) NOT NULL,
  `status_sedang_dilaksanakan` int(3) NOT NULL,
  `status_sudah_dilaksanakan` int(3) NOT NULL,
  `status_tidak_dilaksanakan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `drainase`
--

CREATE TABLE IF NOT EXISTS `drainase` (
`id_drainase` int(11) NOT NULL,
  `rt` int(5) NOT NULL,
  `rw` int(5) NOT NULL,
  `alamat` text NOT NULL,
  `panjang` varchar(10) NOT NULL,
  `lebar` varchar(10) NOT NULL,
  `kedalaman` varchar(10) NOT NULL,
  `ketersediaan_lahan` varchar(10) NOT NULL,
  `long_awal` varchar(50) NOT NULL,
  `long_akhir` varchar(50) NOT NULL,
  `lat_awal` varchar(50) NOT NULL,
  `lat_akhir` varchar(50) NOT NULL,
  `anggaran` int(100) NOT NULL,
  `sumber_data` text NOT NULL,
  `tahun_usulan` int(7) NOT NULL,
  `ket` text NOT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `dokumen` varchar(200) DEFAULT NULL,
  `id_kategori` int(5) NOT NULL,
  `status_data_awal` int(3) NOT NULL,
  `status_verifikasi` int(3) NOT NULL,
  `status_sedang_dilaksanakan` int(3) NOT NULL,
  `status_sudah_dilaksanakan` int(3) NOT NULL,
  `status_tidak_dilaksanakan` int(3) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `drainase`
--

INSERT INTO `drainase` (`id_drainase`, `rt`, `rw`, `alamat`, `panjang`, `lebar`, `kedalaman`, `ketersediaan_lahan`, `long_awal`, `long_akhir`, `lat_awal`, `lat_akhir`, `anggaran`, `sumber_data`, `tahun_usulan`, `ket`, `foto`, `dokumen`, `id_kategori`, `status_data_awal`, `status_verifikasi`, `status_sedang_dilaksanakan`, `status_sudah_dilaksanakan`, `status_tidak_dilaksanakan`) VALUES
(1, 3, 3, 'cimahi', '3', '4', '4', '3', '33', '22', '33', '22', 33333, 'musrenbang', 2015, 'data awal', NULL, NULL, 2, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `jalan`
--

CREATE TABLE IF NOT EXISTS `jalan` (
`id_jalan` int(11) NOT NULL,
  `rt` int(5) NOT NULL,
  `rw` int(5) NOT NULL,
  `alamat` text NOT NULL,
  `panjang` varchar(10) NOT NULL,
  `lebar` varchar(10) NOT NULL,
  `kedalaman` varchar(10) NOT NULL,
  `ketersediaan_lahan` varchar(10) NOT NULL,
  `long_awal` varchar(50) NOT NULL,
  `long_akhir` varchar(50) NOT NULL,
  `lat_awal` varchar(50) NOT NULL,
  `lat_akhir` varchar(50) NOT NULL,
  `anggaran` int(100) NOT NULL,
  `sumber_data` text NOT NULL,
  `tahun_usulan` int(7) NOT NULL,
  `ket` text NOT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `dokumen` varchar(200) DEFAULT NULL,
  `id_kategori` int(5) NOT NULL,
  `status_data_awal` int(3) NOT NULL,
  `status_verifikasi` int(3) NOT NULL,
  `status_sedang_dilaksanakan` int(3) NOT NULL,
  `status_sudah_dilaksanakan` int(3) NOT NULL,
  `status_tidak_dilaksanakan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pengguna`
--

CREATE TABLE IF NOT EXISTS `jenis_pengguna` (
`id_jenis_pengguna` int(11) NOT NULL,
  `jenis_pengguna` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `jenis_pengguna`
--

INSERT INTO `jenis_pengguna` (`id_jenis_pengguna`, `jenis_pengguna`) VALUES
(1, 'admin'),
(2, 'dkp'),
(3, 'pu');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
`id_kategori` int(11) NOT NULL,
  `kategori` varchar(150) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Musrenbang'),
(2, 'Usulan Warga'),
(3, 'Musrenbang'),
(4, 'Usulan Warga');

-- --------------------------------------------------------

--
-- Table structure for table `kirmir`
--

CREATE TABLE IF NOT EXISTS `kirmir` (
`id_kirmir` int(11) NOT NULL,
  `rt` int(5) NOT NULL,
  `rw` int(5) NOT NULL,
  `alamat` text NOT NULL,
  `panjang` varchar(10) NOT NULL,
  `lebar` varchar(10) NOT NULL,
  `kedalaman` varchar(10) NOT NULL,
  `ketersediaan_lahan` varchar(10) NOT NULL,
  `long_awal` varchar(50) NOT NULL,
  `long_akhir` varchar(50) NOT NULL,
  `lat_awal` varchar(50) NOT NULL,
  `lat_akhir` varchar(50) NOT NULL,
  `anggaran` int(100) NOT NULL,
  `sumber_data` text NOT NULL,
  `tahun_usulan` int(7) NOT NULL,
  `ket` text NOT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `dokumen` varchar(200) DEFAULT NULL,
  `id_kategori` int(5) NOT NULL,
  `status_data_awal` int(3) NOT NULL,
  `status_verifikasi` int(3) NOT NULL,
  `status_sedang_dilaksanakan` int(3) NOT NULL,
  `status_sudah_dilaksanakan` int(3) NOT NULL,
  `status_tidak_dilaksanakan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mck`
--

CREATE TABLE IF NOT EXISTS `mck` (
`id_mck` int(11) NOT NULL,
  `rt` int(5) NOT NULL,
  `rw` int(5) NOT NULL,
  `alamat` text NOT NULL,
  `ketersediaan_lahan` varchar(10) NOT NULL,
  `long` varchar(50) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `anggaran` int(100) NOT NULL,
  `sumber_data` text NOT NULL,
  `tahun_usulan` int(7) NOT NULL,
  `persetujuan_warga` varchar(10) NOT NULL,
  `ket` text NOT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `dokumen` varchar(200) DEFAULT NULL,
  `id_kategori` int(5) NOT NULL,
  `status_data_awal` int(3) NOT NULL,
  `status_verifikasi` int(3) NOT NULL,
  `status_sedang_dilaksanakan` int(3) NOT NULL,
  `status_sudah_dilaksanakan` int(3) NOT NULL,
  `status_tidak_dilaksanakan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`id_menu` int(11) NOT NULL,
  `menu` varchar(100) NOT NULL,
  `controller` varchar(100) NOT NULL,
  `id_jenis_pengguna` int(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `menu`, `controller`, `id_jenis_pengguna`) VALUES
(6, 'Drainase', 'admin/drainase_managements', 2),
(7, 'Artesis', 'admin/artesis_managements', 0),
(8, 'Jalan', 'admin/jalan_managements', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
`id_pengguna` int(11) NOT NULL,
  `id_jenis_pengguna` int(15) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `telp` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `id_jenis_pengguna`, `nama`, `nip`, `alamat`, `email`, `username`, `password`, `telp`) VALUES
(1, 1, 'Admin', '1234', 'Cimahi', 'admin@admin.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', '123456'),
(4, 1, 'Ratih', '222', 'cimahi', 'riza.fauzi.rahman@gmail.com', 'ratih', 'a5bd72a3d2c4d1686415f93a46fc7a0a', '222'),
(5, 1, 'riza', '123456', 'cimahi', 'riza.fauzi.rahman@gmail.com', 'riza', 'd5f275885bd96778f7f01c814e405e7c', '1111'),
(6, 2, 'tes', '222', 'tes', 'tes@tes.com', 'tes', '28b662d883b6d76fd96e4ddc5e9ba780', '222'),
(7, 1, 'Admin123', '1234', 'Cimahi', 'admin@admin.com', 'admin123', '21232f297a57a5a743894a0e4a801fc3', '123456'),
(8, 1, 'Admin123456', '1234', 'Cimahi', 'admin@admin.com', 'admin123456', '21232f297a57a5a743894a0e4a801fc3', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `septictank`
--

CREATE TABLE IF NOT EXISTS `septictank` (
`id_septictank` int(11) NOT NULL,
  `rt` int(5) NOT NULL,
  `rw` int(5) NOT NULL,
  `alamat` text NOT NULL,
  `ketersediaan_lahan` varchar(10) NOT NULL,
  `long` varchar(50) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `anggaran` int(100) NOT NULL,
  `sumber_data` text NOT NULL,
  `tahun_usulan` int(7) NOT NULL,
  `persetujuan_warga` varchar(10) NOT NULL,
  `ket` text NOT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `dokumen` varchar(200) DEFAULT NULL,
  `id_kategori` int(5) NOT NULL,
  `status_data_awal` int(3) NOT NULL,
  `status_verifikasi` int(3) NOT NULL,
  `status_sedang_dilaksanakan` int(3) NOT NULL,
  `status_sudah_dilaksanakan` int(3) NOT NULL,
  `status_tidak_dilaksanakan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `septictank_komunal`
--

CREATE TABLE IF NOT EXISTS `septictank_komunal` (
`id_septictank_komunal` int(11) NOT NULL,
  `rt` int(5) NOT NULL,
  `rw` int(5) NOT NULL,
  `alamat` text NOT NULL,
  `ketersediaan_lahan` varchar(10) NOT NULL,
  `long` varchar(50) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `anggaran` int(100) NOT NULL,
  `sumber_data` text NOT NULL,
  `tahun_usulan` int(7) NOT NULL,
  `persetujuan_warga` varchar(10) NOT NULL,
  `jml_pemakai` int(10) NOT NULL,
  `ket` text NOT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `dokumen` varchar(200) DEFAULT NULL,
  `id_kategori` int(5) NOT NULL,
  `status_data_awal` int(3) NOT NULL,
  `status_verifikasi` int(3) NOT NULL,
  `status_sedang_dilaksanakan` int(3) NOT NULL,
  `status_sudah_dilaksanakan` int(3) NOT NULL,
  `status_tidak_dilaksanakan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sumur_dangkal`
--

CREATE TABLE IF NOT EXISTS `sumur_dangkal` (
`id_sumur_dangkal` int(11) NOT NULL,
  `rt` int(5) NOT NULL,
  `rw` int(5) NOT NULL,
  `alamat` text NOT NULL,
  `ketersediaan_lahan` varchar(10) NOT NULL,
  `long` varchar(50) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `anggaran` int(100) NOT NULL,
  `sumber_data` text NOT NULL,
  `tahun_usulan` int(7) NOT NULL,
  `persetujuan_warga` varchar(10) NOT NULL,
  `ket` text NOT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `dokumen` varchar(200) DEFAULT NULL,
  `id_kategori` int(5) NOT NULL,
  `status_data_awal` int(3) NOT NULL,
  `status_verifikasi` int(3) NOT NULL,
  `status_sedang_dilaksanakan` int(3) NOT NULL,
  `status_sudah_dilaksanakan` int(3) NOT NULL,
  `status_tidak_dilaksanakan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sumur_resapan`
--

CREATE TABLE IF NOT EXISTS `sumur_resapan` (
`id_sumur_resapan` int(11) NOT NULL,
  `rt` int(5) NOT NULL,
  `rw` int(5) NOT NULL,
  `alamat` text NOT NULL,
  `ketersediaan_lahan` varchar(10) NOT NULL,
  `long` varchar(50) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `anggaran` int(100) NOT NULL,
  `sumber_data` text NOT NULL,
  `tahun_usulan` int(7) NOT NULL,
  `persetujuan_warga` varchar(10) NOT NULL,
  `ket` text NOT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `dokumen` varchar(200) DEFAULT NULL,
  `id_kategori` int(5) NOT NULL,
  `status_data_awal` int(3) NOT NULL,
  `status_verifikasi` int(3) NOT NULL,
  `status_sedang_dilaksanakan` int(3) NOT NULL,
  `status_sudah_dilaksanakan` int(3) NOT NULL,
  `status_tidak_dilaksanakan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users_status`
--

CREATE TABLE IF NOT EXISTS `users_status` (
`id_status` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users_status`
--

INSERT INTO `users_status` (`id_status`, `status`) VALUES
(1, 'admin'),
(2, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `users_tabel`
--

CREATE TABLE IF NOT EXISTS `users_tabel` (
`id_user` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `first_address` varchar(100) NOT NULL,
  `second_address` varchar(100) DEFAULT NULL,
  `user_phone` varchar(15) NOT NULL,
  `user_city` varchar(100) NOT NULL,
  `user_zip` varchar(12) NOT NULL,
  `id_state` varchar(50) NOT NULL,
  `id_country` varchar(50) NOT NULL,
  `user_agree` tinyint(1) NOT NULL,
  `last_login` datetime NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users_tabel`
--

INSERT INTO `users_tabel` (`id_user`, `id_status`, `user_email`, `user_password`, `confirm_password`, `user_name`, `first_address`, `second_address`, `user_phone`, `user_city`, `user_zip`, `id_state`, `id_country`, `user_agree`, `last_login`, `created`, `modified`) VALUES
(1, 1, 'admin@sipepeng.com', 'admin', 'admin', 'Administrator', 'Leuwigajah', '', '085720573592', 'Cimahi', '40511', '1', '1', 1, '2015-03-16 16:03:29', '0000-00-00 00:00:00', '2015-03-14 17:48:01'),
(2, 2, 'dkp@gmail.com', 'dkp', 'dkp', 'DKP', 'Cimahi', '', '085720264347', 'Cimahi', '40615', '1', '1', 1, '2015-02-05 00:19:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 2, 'pu@gmail.com', 'pu', 'pu', 'Dinas PU', 'Cimahi', 'Jalan Manglayang Bawah No 457 Cilengkrang II', '085720264349', 'Cimahi', '40614', '1', '1', 1, '2015-02-05 01:21:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artesis`
--
ALTER TABLE `artesis`
 ADD PRIMARY KEY (`id_artesis`);

--
-- Indexes for table `drainase`
--
ALTER TABLE `drainase`
 ADD PRIMARY KEY (`id_drainase`);

--
-- Indexes for table `jalan`
--
ALTER TABLE `jalan`
 ADD PRIMARY KEY (`id_jalan`);

--
-- Indexes for table `jenis_pengguna`
--
ALTER TABLE `jenis_pengguna`
 ADD PRIMARY KEY (`id_jenis_pengguna`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kirmir`
--
ALTER TABLE `kirmir`
 ADD PRIMARY KEY (`id_kirmir`);

--
-- Indexes for table `mck`
--
ALTER TABLE `mck`
 ADD PRIMARY KEY (`id_mck`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
 ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `septictank`
--
ALTER TABLE `septictank`
 ADD PRIMARY KEY (`id_septictank`);

--
-- Indexes for table `septictank_komunal`
--
ALTER TABLE `septictank_komunal`
 ADD PRIMARY KEY (`id_septictank_komunal`);

--
-- Indexes for table `sumur_dangkal`
--
ALTER TABLE `sumur_dangkal`
 ADD PRIMARY KEY (`id_sumur_dangkal`);

--
-- Indexes for table `sumur_resapan`
--
ALTER TABLE `sumur_resapan`
 ADD PRIMARY KEY (`id_sumur_resapan`);

--
-- Indexes for table `users_status`
--
ALTER TABLE `users_status`
 ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `users_tabel`
--
ALTER TABLE `users_tabel`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artesis`
--
ALTER TABLE `artesis`
MODIFY `id_artesis` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `drainase`
--
ALTER TABLE `drainase`
MODIFY `id_drainase` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jalan`
--
ALTER TABLE `jalan`
MODIFY `id_jalan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jenis_pengguna`
--
ALTER TABLE `jenis_pengguna`
MODIFY `id_jenis_pengguna` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kirmir`
--
ALTER TABLE `kirmir`
MODIFY `id_kirmir` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mck`
--
ALTER TABLE `mck`
MODIFY `id_mck` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `septictank`
--
ALTER TABLE `septictank`
MODIFY `id_septictank` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `septictank_komunal`
--
ALTER TABLE `septictank_komunal`
MODIFY `id_septictank_komunal` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sumur_dangkal`
--
ALTER TABLE `sumur_dangkal`
MODIFY `id_sumur_dangkal` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sumur_resapan`
--
ALTER TABLE `sumur_resapan`
MODIFY `id_sumur_resapan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users_status`
--
ALTER TABLE `users_status`
MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users_tabel`
--
ALTER TABLE `users_tabel`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
