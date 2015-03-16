-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2015 at 01:09 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sipepeng`
--
CREATE DATABASE `sipepeng` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sipepeng`;

-- --------------------------------------------------------

--
-- Table structure for table `artesis`
--

CREATE TABLE IF NOT EXISTS `artesis` (
  `id_artesis` int(11) NOT NULL AUTO_INCREMENT,
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
  `status_tidak_dilaksanakan` int(3) NOT NULL,
  PRIMARY KEY (`id_artesis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `drainase`
--

CREATE TABLE IF NOT EXISTS `drainase` (
  `id_drainase` int(11) NOT NULL AUTO_INCREMENT,
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
  `status_tidak_dilaksanakan` int(3) NOT NULL,
  PRIMARY KEY (`id_drainase`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jalan`
--

CREATE TABLE IF NOT EXISTS `jalan` (
  `id_jalan` int(11) NOT NULL AUTO_INCREMENT,
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
  `status_tidak_dilaksanakan` int(3) NOT NULL,
  PRIMARY KEY (`id_jalan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pengguna`
--

CREATE TABLE IF NOT EXISTS `jenis_pengguna` (
  `id_jenis_pengguna` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_pengguna` varchar(100) NOT NULL,
  PRIMARY KEY (`id_jenis_pengguna`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(150) NOT NULL,
  PRIMARY KEY (`id_kategori`)
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
  `id_kirmir` int(11) NOT NULL AUTO_INCREMENT,
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
  `status_tidak_dilaksanakan` int(3) NOT NULL,
  PRIMARY KEY (`id_kirmir`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mck`
--

CREATE TABLE IF NOT EXISTS `mck` (
  `id_mck` int(11) NOT NULL AUTO_INCREMENT,
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
  `status_tidak_dilaksanakan` int(3) NOT NULL,
  PRIMARY KEY (`id_mck`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(100) NOT NULL,
  `controller` varchar(100) NOT NULL,
  `id_jenis_pengguna` int(15) NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `menu`, `controller`, `id_jenis_pengguna`) VALUES
(1, 'Data Awal', 'data_awal', 0),
(2, 'verifikasi', 'verifikasi', 0),
(3, 'Pembangunan Sedang Dilaksanakan', 'sedang_dilaksanakan', 0),
(4, 'Pembangunan Sudah Dilaksanakan', 'sudah_dilaksanakan', 0),
(5, 'Pembangunan Tidak Dapat Dilaksanakan', 'tidak_dilaksanakan', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id_pengguna` int(11) NOT NULL AUTO_INCREMENT,
  `id_jenis_pengguna` int(15) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `telp` varchar(15) NOT NULL,
  PRIMARY KEY (`id_pengguna`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `septictank`
--

CREATE TABLE IF NOT EXISTS `septictank` (
  `id_septictank` int(11) NOT NULL AUTO_INCREMENT,
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
  `status_tidak_dilaksanakan` int(3) NOT NULL,
  PRIMARY KEY (`id_septictank`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `septictank_komunal`
--

CREATE TABLE IF NOT EXISTS `septictank_komunal` (
  `id_septictank_komunal` int(11) NOT NULL AUTO_INCREMENT,
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
  `status_tidak_dilaksanakan` int(3) NOT NULL,
  PRIMARY KEY (`id_septictank_komunal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sumur_dangkal`
--

CREATE TABLE IF NOT EXISTS `sumur_dangkal` (
  `id_sumur_dangkal` int(11) NOT NULL AUTO_INCREMENT,
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
  `status_tidak_dilaksanakan` int(3) NOT NULL,
  PRIMARY KEY (`id_sumur_dangkal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sumur_resapan`
--

CREATE TABLE IF NOT EXISTS `sumur_resapan` (
  `id_sumur_resapan` int(11) NOT NULL AUTO_INCREMENT,
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
  `status_tidak_dilaksanakan` int(3) NOT NULL,
  PRIMARY KEY (`id_sumur_resapan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users_status`
--

CREATE TABLE IF NOT EXISTS `users_status` (
  `id_status` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id_status`)
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
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
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
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users_tabel`
--

INSERT INTO `users_tabel` (`id_user`, `id_status`, `user_email`, `user_password`, `confirm_password`, `user_name`, `first_address`, `second_address`, `user_phone`, `user_city`, `user_zip`, `id_state`, `id_country`, `user_agree`, `last_login`, `created`, `modified`) VALUES
(1, 1, 'admin@sipepeng.com', 'admin', 'admin', 'Administrator', 'Leuwigajah', '', '085720573592', 'Cimahi', '40511', '1', '1', 1, '2015-03-16 16:03:29', '0000-00-00 00:00:00', '2015-03-14 17:48:01'),
(2, 2, 'dkp@gmail.com', 'dkp', 'dkp', 'DKP', 'Cimahi', '', '085720264347', 'Cimahi', '40615', '1', '1', 1, '2015-02-05 00:19:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 2, 'pu@gmail.com', 'pu', 'pu', 'Dinas PU', 'Cimahi', 'Jalan Manglayang Bawah No 457 Cilengkrang II', '085720264349', 'Cimahi', '40614', '1', '1', 1, '2015-02-05 01:21:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
