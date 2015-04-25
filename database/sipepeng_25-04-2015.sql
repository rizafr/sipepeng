-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 25 Apr 2015 pada 15.27
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `sipepeng`
--
CREATE DATABASE `sipepeng` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sipepeng`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `artesis`
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
-- Struktur dari tabel `drainase`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `drainase`
--

INSERT INTO `drainase` (`id_drainase`, `rt`, `rw`, `alamat`, `panjang`, `lebar`, `kedalaman`, `ketersediaan_lahan`, `long_awal`, `long_akhir`, `lat_awal`, `lat_akhir`, `anggaran`, `sumber_data`, `tahun_usulan`, `ket`, `foto`, `dokumen`, `id_kategori`, `status_data_awal`, `status_verifikasi`, `status_sedang_dilaksanakan`, `status_sudah_dilaksanakan`, `status_tidak_dilaksanakan`) VALUES
(1, 3, 3, 'cimahi jalan', '3', '3', '4', '3', '107.52990271163935', '107.53018154480947', '-6.90024272397706', '-6.900368467526406', 33333, 'musrenbang', 2015, '  data awal', NULL, NULL, 2, 0, 1, 0, 0, 0),
(2, 4, 4, 'jalan cimahi', '3', '3', '4', '3', '107.52990271173935', '107.53018154490947', '-6.90024272398706', '-6.900368467626406', 33333, 'musrenbang', 2015, '  data awal', NULL, NULL, 2, 0, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekonomi_gas`
--

CREATE TABLE IF NOT EXISTS `ekonomi_gas` (
  `id_gas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pemilik` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `sp_agen` varchar(100) NOT NULL,
  `qty` int(5) NOT NULL,
  `lat` varchar(30) NOT NULL,
  `long` varchar(30) NOT NULL,
  `no_ijin` varchar(20) NOT NULL,
  PRIMARY KEY (`id_gas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekonomi_kos`
--

CREATE TABLE IF NOT EXISTS `ekonomi_kos` (
  `id_kos` int(11) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `alamat_pemilik` text NOT NULL,
  `rw` varchar(5) NOT NULL,
  `jml_kamar` int(5) NOT NULL,
  `jml_orang_perkamar` int(5) NOT NULL,
  `ijin_usaha` varchar(30) NOT NULL,
  `harga sewa` int(10) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekonomi_minimarket`
--

CREATE TABLE IF NOT EXISTS `ekonomi_minimarket` (
  `id_minimarket` int(11) NOT NULL AUTO_INCREMENT,
  `nama_perusahaan` varchar(50) NOT NULL,
  `bentuk_perusahaan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `jml_pekerja` int(5) NOT NULL,
  `jam_kerja` varchar(30) NOT NULL,
  `status_tanah` varchar(50) NOT NULL,
  `luas_bangunan` int(10) NOT NULL,
  `luas_ruang_usaha` int(10) NOT NULL,
  `no_ijin` varchar(50) NOT NULL,
  PRIMARY KEY (`id_minimarket`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekonomi_nama_perusahaan`
--

CREATE TABLE IF NOT EXISTS `ekonomi_nama_perusahaan` (
  `id_nama_perusahaan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_perusahaan` varchar(100) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `jml_pegawai` int(5) NOT NULL,
  `bergerak_dibidang` varchar(100) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  PRIMARY KEY (`id_nama_perusahaan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekonomi_umkm`
--

CREATE TABLE IF NOT EXISTS `ekonomi_umkm` (
  `id_umkm` int(11) NOT NULL AUTO_INCREMENT,
  `kota` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `nbs` varchar(10) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `rt` varchar(3) NOT NULL,
  `klasifikasi_perusahaan` varchar(20) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `alamat_perusahaan` text NOT NULL,
  `kegiatan_utama` text NOT NULL,
  `jenis_usaha` varchar(30) NOT NULL,
  `jk_pengusaha` varchar(15) NOT NULL,
  `prov_tempat_lahir_pengusaha` varchar(50) NOT NULL,
  `kota_tempat_lahir_pengusaha` varchar(50) NOT NULL,
  `bentuk_badan_hukum` varchar(20) NOT NULL,
  `tahun_mulai_operasi` varchar(10) NOT NULL,
  `gabung_paguyuban` varchar(10) NOT NULL,
  `bermitra` varchar(10) NOT NULL,
  `bentuk_kemitraan` varchar(30) NOT NULL,
  `pembinaan_pemerintah` varchar(10) NOT NULL,
  `pemberi_pembinaan` varchar(50) NOT NULL,
  `eksport` varchar(10) NOT NULL,
  `persentase_eksport` varchar(10) NOT NULL,
  `import` varchar(10) NOT NULL,
  `persentase_import` varchar(10) NOT NULL,
  PRIMARY KEY (`id_umkm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jalan`
--

CREATE TABLE IF NOT EXISTS `jalan` (
  `id_jalan` int(11) NOT NULL AUTO_INCREMENT,
  `rt` int(5) NOT NULL,
  `rw` int(5) NOT NULL,
  `alamat` text NOT NULL,
  `panjang` varchar(10) NOT NULL,
  `lebar` varchar(10) NOT NULL,
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
-- Struktur dari tabel `jenis_pengguna`
--

CREATE TABLE IF NOT EXISTS `jenis_pengguna` (
  `id_jenis_pengguna` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_pengguna` varchar(100) NOT NULL,
  PRIMARY KEY (`id_jenis_pengguna`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `jenis_pengguna`
--

INSERT INTO `jenis_pengguna` (`id_jenis_pengguna`, `jenis_pengguna`) VALUES
(1, 'admin'),
(2, 'dkp'),
(3, 'pu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(150) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Musrenbang'),
(2, 'Usulan Warga'),
(3, 'Musrenbang'),
(4, 'Usulan Warga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kirmir`
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
-- Struktur dari tabel `mck`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `mck`
--

INSERT INTO `mck` (`id_mck`, `rt`, `rw`, `alamat`, `ketersediaan_lahan`, `long`, `lat`, `anggaran`, `sumber_data`, `tahun_usulan`, `persetujuan_warga`, `ket`, `foto`, `dokumen`, `id_kategori`, `status_data_awal`, `status_verifikasi`, `status_sedang_dilaksanakan`, `status_sudah_dilaksanakan`, `status_tidak_dilaksanakan`) VALUES
(1, 10, 1, 'Cibeber Cimahi Selatan', '210', '107.52991271463935', '-6.90024294397706', 2300000, 'Masyarakat Sekitar', 2015, 'Ada', '  Biki WC umum', 'mck__2015_01_cimahi_cibeber.jpg', 'mck__2015_01_cimahi_cibeber.jpg', 0, 1, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(100) NOT NULL,
  `controller` varchar(100) NOT NULL,
  `id_jenis_pengguna` int(15) NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `menu`, `controller`, `id_jenis_pengguna`) VALUES
(6, 'Drainase', 'admin/drainase_managements', 2),
(7, 'Artesis', 'admin/artesis_managements', 0),
(8, 'Jalan', 'admin/jalan_managements', 0),
(9, 'Sumur Dangkal', 'admin/sumur_dangkal_managements', 2),
(10, 'Sumur Resapan', 'admin/sumur_resapan_managements', 2),
(11, 'MCK', 'admin/mck_managements', 2),
(12, 'Septictank', 'admin/septictank_managements', 2),
(13, 'Septictank Komunal', 'admin/septictank_komunal_managements', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `id_jenis_pengguna`, `nama`, `nip`, `alamat`, `email`, `username`, `password`, `telp`) VALUES
(1, 1, 'Admin', '1234', 'Cimahi', 'admin@admin.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', '123456'),
(5, 1, 'riza', '123456', 'cimahi', 'riza.fauzi.rahman@gmail.com', 'riza', 'd5f275885bd96778f7f01c814e405e7c', '1111'),
(7, 1, 'Admin123', '1234', 'Cimahi', 'admin@admin.com', 'admin123', '21232f297a57a5a743894a0e4a801fc3', '123456'),
(8, 1, 'Admin123456', '1234', 'Cimahi', 'admin@admin.com', 'admin123456', '21232f297a57a5a743894a0e4a801fc3', '123456'),
(9, 1, 'Ratih', '222', 'Kp. Baru Gg. Nuryadi Rt.10 / 04 No. 80', 'ratih.pujihati@gmail.com', 'ratih', 'a5bd72a3d2c4d1686415f93a46fc7a0a', '085720017874');

-- --------------------------------------------------------

--
-- Struktur dari tabel `septictank`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `septictank`
--

INSERT INTO `septictank` (`id_septictank`, `rt`, `rw`, `alamat`, `ketersediaan_lahan`, `long`, `lat`, `anggaran`, `sumber_data`, `tahun_usulan`, `persetujuan_warga`, `ket`, `foto`, `dokumen`, `id_kategori`, `status_data_awal`, `status_verifikasi`, `status_sedang_dilaksanakan`, `status_sudah_dilaksanakan`, `status_tidak_dilaksanakan`) VALUES
(1, 1, 10, 'cimahi cibeber no. 100', '120', '107.53018154480947', '-6.90024272397706', 3400000, 'dinas', 2015, 'Ada', '  tidak', 'septictank__2015_10_cimahi_cibeber.jpg', 'septictank__2015_10_cimahi_cibeber.jpg', 0, 1, 1, 1, 1, 0),
(2, 565, 5656, '65656565656565', '56565', '107.52992282820696', '-6.900260697750685', 5656, '56565', 2016, 'Ada', ' 565', NULL, NULL, 0, 1, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `septictank_komunal`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `septictank_komunal`
--

INSERT INTO `septictank_komunal` (`id_septictank_komunal`, `rt`, `rw`, `alamat`, `ketersediaan_lahan`, `long`, `lat`, `anggaran`, `sumber_data`, `tahun_usulan`, `persetujuan_warga`, `jml_pemakai`, `ket`, `foto`, `dokumen`, `id_kategori`, `status_data_awal`, `status_verifikasi`, `status_sedang_dilaksanakan`, `status_sudah_dilaksanakan`, `status_tidak_dilaksanakan`) VALUES
(1, 10, 1, 'cibeber no 120 cimahi selatan', '22', '107.52994291163935', '-6.90024274697706', 3400000, 'iii', 2013, 'Ada', 34, '  ga da', 'septictank_komunal__2013_01_cimahi_cibeber.jpg', 'septictank_komunal__2013_01_cimahi_cibeber.jpg', 0, 1, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sumur_dangkal`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `sumur_dangkal`
--

INSERT INTO `sumur_dangkal` (`id_sumur_dangkal`, `rt`, `rw`, `alamat`, `ketersediaan_lahan`, `long`, `lat`, `anggaran`, `sumber_data`, `tahun_usulan`, `persetujuan_warga`, `ket`, `foto`, `dokumen`, `id_kategori`, `status_data_awal`, `status_verifikasi`, `status_sedang_dilaksanakan`, `status_sudah_dilaksanakan`, `status_tidak_dilaksanakan`) VALUES
(1, 10, 4, 'Kp. Baru Gg. Nuryadi Cibeber Cimahi Selatan No. 80', '15', '', '', 5000000, 'Masyarakat Sekitar', 2014, 'Ada', '   -', NULL, NULL, 1, 1, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sumur_resapan`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `sumur_resapan`
--

INSERT INTO `sumur_resapan` (`id_sumur_resapan`, `rt`, `rw`, `alamat`, `ketersediaan_lahan`, `long`, `lat`, `anggaran`, `sumber_data`, `tahun_usulan`, `persetujuan_warga`, `ket`, `foto`, `dokumen`, `id_kategori`, `status_data_awal`, `status_verifikasi`, `status_sedang_dilaksanakan`, `status_sudah_dilaksanakan`, `status_tidak_dilaksanakan`) VALUES
(1, 1, 3, 'Cibeber Cimahi Selatan No. 80', '100', '', '', 5600000, 'Masyarakat Sekitar', 2009, 'Ada', '  Apa aja yaa', 'sumur_resapan__2009_03_Cibeber_Cimahi_Selatan.jpg', 'no_image.jpg', 0, 1, 1, 0, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_status`
--

CREATE TABLE IF NOT EXISTS `users_status` (
  `id_status` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `users_status`
--

INSERT INTO `users_status` (`id_status`, `status`) VALUES
(1, 'admin'),
(2, 'member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_tabel`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `users_tabel`
--

INSERT INTO `users_tabel` (`id_user`, `id_status`, `user_email`, `user_password`, `confirm_password`, `user_name`, `first_address`, `second_address`, `user_phone`, `user_city`, `user_zip`, `id_state`, `id_country`, `user_agree`, `last_login`, `created`, `modified`) VALUES
(1, 1, 'admin@sipepeng.com', 'admin', 'admin', 'Administrator', 'Leuwigajah', '', '085720573592', 'Cimahi', '40511', '1', '1', 1, '2015-03-16 16:03:29', '0000-00-00 00:00:00', '2015-03-14 17:48:01'),
(2, 2, 'dkp@gmail.com', 'dkp', 'dkp', 'DKP', 'Cimahi', '', '085720264347', 'Cimahi', '40615', '1', '1', 1, '2015-02-05 00:19:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 2, 'pu@gmail.com', 'pu', 'pu', 'Dinas PU', 'Cimahi', 'Jalan Manglayang Bawah No 457 Cilengkrang II', '085720264349', 'Cimahi', '40614', '1', '1', 1, '2015-02-05 01:21:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
