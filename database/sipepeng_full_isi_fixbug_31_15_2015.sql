-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2015 at 11:48 AM
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
  `kontur_tanah` varchar(100) DEFAULT NULL,
  `long` varchar(50) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `anggaran` int(100) DEFAULT NULL,
  `sumber_data` text NOT NULL,
  `tahun_usulan` int(7) NOT NULL,
  `persetujuan_warga` varchar(10) NOT NULL,
  `jml_pemakai` int(10) NOT NULL,
  `ket` text NOT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `dokumen` varchar(200) DEFAULT NULL,
  `id_kategori` int(5) DEFAULT NULL,
  `status_data_awal` int(3) NOT NULL,
  `status_verifikasi` int(3) NOT NULL,
  `status_sedang_dilaksanakan` int(3) NOT NULL,
  `status_sudah_dilaksanakan` int(3) NOT NULL,
  `status_tidak_dilaksanakan` int(3) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `artesis`
--

INSERT INTO `artesis` (`id_artesis`, `rt`, `rw`, `alamat`, `ketersediaan_lahan`, `kontur_tanah`, `long`, `lat`, `anggaran`, `sumber_data`, `tahun_usulan`, `persetujuan_warga`, `jml_pemakai`, `ket`, `foto`, `dokumen`, `id_kategori`, `status_data_awal`, `status_verifikasi`, `status_sedang_dilaksanakan`, `status_sudah_dilaksanakan`, `status_tidak_dilaksanakan`) VALUES
(1, 7, 9, 'ARTESIS HAUR NGAMBANG', 'Ada', NULL, '107.51794005943293', '-6.906331800008785', 0, 'USULAN WARGA', 2014, 'Ada', 105, '', 'artesis_2014_9_ARTESIS_HAUR_NGAMBANG.JPG', 'artesis_2014_9_ARTESIS_HAUR_NGAMBANG.JPG', NULL, 1, 1, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
`id_berita` int(11) NOT NULL,
  `judul_berita` varchar(250) NOT NULL,
  `isi_berita` text NOT NULL,
  `foto` varchar(250) NOT NULL,
  `tgl_berita` varchar(250) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `isi_berita`, `foto`, `tgl_berita`) VALUES
(1, 'Pemkot Cimahi Prioritaskan Pembangunan Infrastruktur', 'Wali Kota Cimahi <i>Atty Suharti</i> menjanjikan pembangunan infrastruktur menjadi hal prioritas yang akan dilakukan pada rencana pembangunan tahun 2016 di Kota Cimahi. Hal itu sesuai tuntutan masyarakat untuk lebih diperhatikan.\r\n\r\n"Prioritas pembangunan kota Cimahi tahun 2016 masih tetap kita arahkan untuk melanjutkan program-program yang belum selesai khususnya infrastruktur kota yang dibutuhkan masyarakat," ujarnya, dalam membuka Musyawarah Rencana Pembangunan (Musrenbang) Kota Cimahi di Pusdik Armed Jln. Baros Kota Cimahi.\r\n\r\nPrioritas pembangunan infrastruktur di antaranya sanitasi dan penataan drainase, perbaikan rumah tidak layak huni.\r\n\r\n"Termasuk masalah kemacetan lalu lintas harus diatasi diantaranya dengan membangun jalan fly over di Padasuka akan dilanjut di tahun 2016, harus diusulkan lagi di provinsi dan itu menjadi prioritas karena sarana jalan di Cimahi masih sangat minim dan belum cukup untuk memecahkan simpul kemacetan. Diharapkan jembatan layang Padasuka nantinya bisa mendukung pelaksanaan PON 19 yang diantaranya menggunakan Velodrom Munaif Saleh di Padasuka," ucapnya.\r\n\r\nMenurut Atty, Cimahi berada satu koridor dengan Kota Bandung, Kab. Bandung, dan Kab. Bandung Barat. "Merupakan kawasan compact urban vilages area yang sulit untuk menonjolkan batas wilayah masing masing, untuk itulah penanganan perbatasan menjadi sangat penting untuk dilakukan bersama daerah tetangga dengan urun rembug dari Gubernur Jabar bahkan Mendagri," tuturnya.\r\n\r\nKota Cimahi sangat terbatas wilayah untuk investasi baru, sedangkan kontribusi industri relatif optimal dengan tidak membuat pertumbuhan baru. <br><br>Sektor jasa yang berkontribusi masih sangat terbatas dengan pertumbuhan yang kecil, hal ini yang menjadikan tantangan bagi para pemikir dan stake holder, mencari formulasi rencana agar pembangunan menjadi stimulan bagi pembangunan lainnya.\r\n\r\nPembangunan pelayanan dasar dan infrastruktur kota yang harus menjadi efisien bagi pengeluaran warga, sehingga rakyat mampu untuk menyisihkan pendapatannya. Seperti halnya sanitasi untuk kesehatan masyarakat termasuk air bersih, serta ketertiban kota yang mendukung optimalisasi infrastruktur dan menjaga kapasitas dan daya dukung lingkungan hidup.\r\n\r\nBerbagai harapan tersebut dikemukakan sebagai energi bagi Pemkot Cimahi untuk memberi layanan masyarakat. "Sinergisitas antar sektor dan wilayah diperlukan untuk meningkaktan kualitas dan pemerataan pembangunan di Kota Cimahi," katanya (ahmad sadli)', 'pembangunan_drainase.jpg', '20 May 2015 - 13:20'),
(2, 'Sewa Rusunawa Leuwigajah Dibatasi Tiga Tahun', 'CIMAHI-Sistem sewa hunian Rumah Susun Sederhana Sewa (Rusunawa) Leuwigajah, Kota Cimahi dibatasi maksimal tiga tahun. Hal itu diberlakukan untuk memotivasi masyarakat agar berusaha membeli rumah sendiri.\r\n\r\n“Dalam waktu tiga tahun ketika menyewa Rusunawa Leuwigajah, para penyewa bisa berupaya untuk memiliki rumah sendiri, karena tidak bisa menyewa Rusunawa lagi,” kata Walikota Cimahi, Hj. Atty Suharti pada Persemian Rusunawa Leuwigajah, Kecamatan Cimahi Selatan, Kota Cimahi kepada wartawan, Kamis (11/9).\r\n\r\nBerdasarkan pantauan jabarprov.go.id, Senin (15/9), baru sebanyak 48 kamar dari 300 kamar yang tersedia di Rusunawa Leuwigajah yang telah dihuni. <br><br>Para penghuni Rusunawa yang terletak di Jalan Kihapit Barat RW 09 Kelurahan Leuwigajah itu, semuanya warga Kota Cimahi.\r\n\r\nRusunawa Leuwigajah, Rusunawa ketiga yang ada di Kota Cimahi setelah Rusunawa Cigugur Tengah dan Rusunawa Melong, memang diperuntukkan bagi warga Kota Cimahi yang kurang mampu secara ekonomi.\r\n“Rusunawa Leuwigajah ini di bawah pengelolaan Unit Pelayanan Teknis Daerah (UPTD) Rusunawa Kota Cimahi,” kata Edi, salah seorang pegawai harian Rusunawa Leuwigajah yang ditugaskan UPTD Rusunawa Kota Cimahi untuk menerima pendaftaran Sewa Rusunawa Leuwigajah di kantornya kepada jabarprov.go.id, Senin (15/9).\r\n\r\nPersyaratan Pendaftaran Calon Penghuni Rusunawa Leuwigajah cukup mudah. Masyarakat yang berminat sebagai calon penghuni harus datang langsung untuk mengisi formulir yang disediakan dan melengkapi persyaratannya. Formulir yang harus diisi antara lain formulir pendaftaran, surat keterangan belum memiliki rumah atau tempat tinggal sendiri, surat keterangan penghasilan, surat pernyataan sanggup membayar administrasi/materai yang diperlukan dan bersedia membayar uang rekening untuk pembayaran pemakaian utilitas (air dan listrik).\r\n\r\nRusunawa Leuwigajah terdiri dari 3 blok hunian, masing-masing blok terdapat 100 hunian, sehingga totalnya 300 hunian.\r\n\r\nUang sewa Rusunawa Leuwigajah cukup terjangkau. Yaitu antara Rp 265.000 sampai Rp 310.000 perbulan per unit hunian, tergantung lokasi lantai bawah atau lantai atas. Uang sewa bulanan itu belum termasuk uang pembayaran listrik, air, uang kebersihan, uang keamanan dan uang parkir. (enal)', '210114rusunawa.jpg', '08 May 2015 - 09:45'),
(4, 'Pemkot Cimahi Larang Warga Dirikan Bangunan di Atas Drainase', 'Cimahi - Pemerintah Kota Cimahi melarang warga untuk mendirikan bangunan di atas drainase karena akan menghambat aliran air yang dapat menyebabkan banjir.\r\n\r\n"Masyarakat diminta untuk tidak mendirikan bangunan di atas drainase dan tidak membuang sampah ke selokan, karena bisa menghambat aliran air," kata Wali Kota Cimahi Atty Suharti di Cimahi, Rabu (8/4/2015).\r\n\r\nIa mengatakan, kesadaran masyarakat menjaga lingkungan dan memelihara infrastruktur kota adalah penting untuk kebaikan bersama.\r\n\r\n"Kesadaran masyarakat harus dibangun dalam memelihara infrastruktur kota agar tetap berfungsi baik," katanya.\r\n\r\nIa mengakui, kondisi drainase di Kota Cimahi belum optimal, karena setiap kali turun hujan deras seringkali air meluap ke jalan.<br><br>&nbsp;Pihaknya berencana mengoptimalkan drainase agar berfungsi baik pada anggaran 2015.\r\n\r\n"Kita akan lakukan optimalisasi saluran drainase tahun ini," katanya.\r\n\r\nIa menegaskan, pengerjaan fisik ruas jalan maupun drainase akan dilakukan sesuai dengan aturan yang berlaku dan mengikuti spesifikasi yang diminta.\r\n\r\n"Aturan sekarang lebih ketat, harus mengikuti spesifikasi yang diminta, sesuai dengan pekerjaan di lapangan," katanya. (AY)', 'walikota.jpg', '08 May 2015 - 09:45'),
(5, 'Pemkot Susun Program Pembangunan Drainase di Cimahi', 'Pemkot Cimahi tengah menyusun program pembangunan drainase yang mencapai 4 persen dari total Anggaran Pendapatan dan Belanja Daerah (APBD).<br><br>Hal tersebut akibat banyaknya pembangunan perumahan di wilayah Cimahi Utara yang membuat resapan air tersendat dan berdampak pada banjir yang kini sudah memasuki musim penghujan.<br><br>"Kami akan perhatikan, dan ini masuk anggaran 2015 tentang penangan daerah banjir," kata Wali Kota Cimahi, Atty Suharti di Cimahi, Senin (3/11/2014).<br><br>Namun, dirinya mengharapkan warga yang rumahnya berada di daerah banjir memahami keterbatasan anggaran yang harus dikeluarkan Pemkot untuk menyelesaikan berbagai masalah lainnya.<br><br>"Pemkot akan senantiasa mendengar keluhan dari warga. Karena untuk pembangunan perumahan ini sudah melalui berbagai persyaratan, kalau tidak pastinya kami akan memberi sanksi," jelasnya.&nbsp;', 'Berita_Pemkot_Susun_Program_Pembangunan_Drainase_di_Cimahi.jpg', '04 November 2014 - 07:55'),
(6, 'Perbaikan Jalan Mulai Dieksekusi Juli Mendatang', 'CIMAHI - Dinas Pekerjaan Umum (PU) Kota Cimahi menargetkan perbaikan jalan rusak baru mulai akan dilakukan pada Juli mendatang. Pasalnya, proses lelang diperkirakan baru kelar pada Mei 2015.<br><br>Kepala Bidang (kabid) Binamarga Dinas PU Kota Cimahi Agus Joko mengatakan, sejumlah ruas jalan yang akan diprioritaskan untuk diperbaiki adalah jalan yang ada di Cimahi Selatan seperti kelanjutan perbaikan jalan di jalan Maharmartanegara, Jalan Kerkoff, jalan Haur Ngambang dan jalan-jalan di Cimahi selatan lainnya.<br><br>"Kemungkinan proses lelangnya sendiri, akan dilakukan lebih awal dari proses lelang perbaikan jalan sebelumnya setelah tahap perencanaan selesai," katanya, kepada pewarta, Selasa (24/2/2015).<br><br>Dana yang dibutuhkan untuk memuluskan akses transportasi publik mencapai Rp65,4 miliar. Jalan yang diperbaiki merupakan seluruh komponen penunjang badan jalan.<br><br>Artinya, yang diperbaiki tidak hanya menyentuh badan jalan semata, tapi juga meliputi perbaikan kualitas drainase, jembatan dan perlengkapan jalan lainnya.<br><br>"Pokoknya perbaikan ini untuk seluruh jalan yang ada di Kota Cimahi. Nantinya dalam perbaikan kami akan gunakan hotmix 60% dan betonisasi 40%," paparnya (ha)', 'Berita_Perbaikan_Jalan_Mulai_Dieksekusi_Juli_Mendatang.jpg', '25 February 2015 - 05:30'),
(7, 'Sumur Artesis Diandalkan Penuhi Kebutuhan Air', 'CIMAHI - Dalam rangka mengatasi tingginya kebutuhan air disaat musim kemarau, Pemkot Cimahi mengandalkan keberadaan sumur artesis yang saat ini jumlahnya telah mencapai 46 titik.<br><br>Walikota Cimahi Atty Suharti mengatakan, sumur artesis itu dibangun di kawasan permukiman warga padat penduduk. Tak hanya itu, pihak swasta dalam hal ini perusahaan pun ikut membangunnya di kawasan industri.<br><br>"Memang walaupun sudah ada sumur artesis itu belum memenuhi kebutuhan air masyarakat," katanya, kepada pewarta, Selasa (24/3/2015).<br><br>Untuk menutup kekurangan tersebut, pihaknya akan mengoptimalkan pelayanan air bersih yang disediakan Perusahaan Daerah Air Minum (PDAM) untuk dapat menjangkau seluruh daerah.<br><br>Meski begitu, diakuinya pula PDAM baru mampu melayani sekitar 15% kebutuhan air warga Kota Cimahi yang berjumlah sekitar 500.000 jiwa.<br><br>"PDAM juga sekarang baru bisa memenuhi 15% dari jumlah warga di Kota Cimahi," katanya.(ha)', 'Berita_Sumur_Artesis_Diandalkan_Penuhi_Kebutuhan_Air.jpg', '25 March 2015 - 04:15'),
(8, 'Jalan Rusak di Cimahi Tinggal 10%', '<div>CIMAHI - Tingkat kerusakan jalan di Kota Cimahi tinggal 10% dari total panjang jalan mencapai 120 KM. Secara bertahap Dinas Pekerjaan Umum Kota Cimahi akan terus memperbaikinya.<br></div><div><br></div><div>Kabid Bina Marga, Dinas Pekerjaan Umum Kota Cimahi, Agus Joko mengatakan, pada tahun ini pihaknya akan melakukan perbaikan jalan di sejumlah titik dengan tingkat kerusakan parah.</div><div><br></div><div>Saat ini, Dinas PU masih melakukan perencanaan untuk menentukan ruas mana saja yang akan diperbaiki tahun ini. Meski begitu, pihaknya sudah mendapatkan kucuran dana sebesar Rp54 miliar.</div><div><br></div><div>Besarnya anggaran tersebut tidak berarti seluruhnya digunakan untuk perbaikan jalan yang 10% tersebut karena hal itu termasuk untuk pembuatan jalan Aruman.</div><div><br></div><div>"Bukan berarti anggaran tersebut untuk yang 10%. Sebab kita prioritaskan mana jalan yang harus diperbaiki, mana yang peningkatan jalan," jelannya.</div><div><br></div><div>Menurut Agus, untuk perbaikan jalan memang tidak bisa secara menyeluruh dalam satu tahun anggaran. Selain anggaran terbatas, terkadang ruas jalan lain ada yang rusak.</div><div><br></div><div>"Kalau untuk perbaikan jalan tidak bisa langsung dalam satu tahun. Kadang tahun ini ruas jalan satu diperbaiki, jalan yang lain rusak. Itu terjadi dimanapun," paparnya. (HA)</div>', 'Berita_Jalan_Rusak_di_Cimahi_Tinggal_10.jpg', '01 April 2015 - 03:50'),
(9, 'Walikota Minta Warga Ikut Rawat Drainase', 'CIMAHI - Walikota Cimahi Atty Suharti meminta warga untuk ikut merawat kondisi drainase agar tidak ada air yang melimpah ke jalan sehingga merusak permukaan jalan yang terbuat dari aspal.<br><br>Menurut dia, di musim hujan dengan intensitas tinggi seperti saat ini kerap kali membuat jalan menjadi cepat rusak. Akibatnya, banyak warga yang mempertanyakan kembali proses perbaikan jalan.<br><br>"Padahal jalan di Cimahi itu sudah mulus bahkan hampir 100%. Makanya, kami berpikir agar jalan tidak cepat rusak," katanya, kepada pewarta, Kamis (10/4/2015).<br><br>Untuk itu, konstruksi jalan dengan cara dibeton menjadi salah satu cara efektif untuk mencegah agar jalan tidak cepat rusak.<br><br>Sebelumnya, Dinas Pekerjaan Umum Kota Cimahi mengalokasikan anggaran sebesar Rp64,5 miliar untuk memperbaiki sejumlah ruas jalan rusak di wilayahnya. Perbaikan jalan baru akan dilakukan pada Juli 2015 mendatang.<br><br>Kepala Bidang (kabid) Binamarga Dinas PU Kota Cimahi Agus Joko mengatakan, proses lelang perbaikan jalan baru akan dilaksanakan paling lambat pada April atau Mei 2015 mendatang. Sehingga, perbaikan baru akan mulai dilaksanakan dua bulan kemudian.<br><br>"Yang diperbaiki bukan hanya jalan, tapi juga drainase dan jembatannya. Pokoknya perbaikan ini untuk seluruh jalan yang ada di Kota Cimahi," paparnya.(ha)', 'Berita_Walikota_Minta_Warga_Ikut_Rawat_Drainase.jpg', '10 April 2015 - 09:40'),
(10, 'Pengambilan Air Oleh Pabrik Harus Legal', 'CIMAHI - Dinas Pekerjaan Umum Kota Cimahi meminta para pengusaha untuk tidak mengambil air sungai secara berlebihan demi kepentingan bisnis sehingga menganggu penggunaan air bagi warga lainnya.<br><br>Seperti diketahui, sejumlah kelompok tani di Kelurahan Utama, Kecamatan Cimahi Selatan mengeluhkan sulitnya mendapatkan air akibat pengambilan secara ilegal yang dilakukan PT Long Sun dalam jumlah banyak dengan cara membuat bak penangkap air di dekat daerah aliran sungai.<br><br>Kepala Seksi Drainase Dinas Pekerjaan Umum Kota Cimahi Indra Hermawan membenarkan adanya laporan warga yang mengeluhkan tindakan ''pengambilan air'' secara ilegal yang dilakukan perusahaan yang terletak di Nanjung itu.&nbsp;<br><br>"Kami pernah memberikan teguran kepada mereka. Tapi, mereka mengaku telah mendapatkan izin dari Kementerian Lingkungan Hidup," katanya, kepada pewarta, Senin (4/5/2015).<br><br>Pihaknya, telah mendatangi lokasi dan melihat secara langsung mengenai dugaan pencurian air tersebut dan sang perusahaan pun diketahui telah membuat bak penangkapan air dekat saluran air sungai di kawasan itu.<br><br>"Katanya sudah mengantongi izin dari kementerian, tapi setelah kami minta perizinannya, mereka tidak bisa memperlihatkannya. Sejauh ini, mereka baru kami berikan teguran secara lisan," ujarnya.(ha)', 'Berita_Pengambilan_Air_Oleh_Pabrik_Harus_Legal.png', '05 May 2015 - 01:45');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `drainase`
--

INSERT INTO `drainase` (`id_drainase`, `rt`, `rw`, `alamat`, `panjang`, `lebar`, `kedalaman`, `ketersediaan_lahan`, `long_awal`, `long_akhir`, `lat_awal`, `lat_akhir`, `anggaran`, `sumber_data`, `tahun_usulan`, `ket`, `foto`, `dokumen`, `id_kategori`, `status_data_awal`, `status_verifikasi`, `status_sedang_dilaksanakan`, `status_sudah_dilaksanakan`, `status_tidak_dilaksanakan`) VALUES
(1, 2, 1, 'BAROS PASAR', '40', '0,5', '0.8', '', '107.534316', '107.534186', '-6.894864', '-6.895181', 0, 'MUSRENBANG', 2015, '', '1_drainase_awal.jpg', NULL, 0, 1, 1, 0, 0, 0),
(2, 2, 2, 'GANG KERAMAT SADARMANAH', '160', '0,5', '0,5', '', '107.529153', '107.529271', '-6.898506', '-6.897207', 0, 'MUSRENBANG', 2015, '', '2_2_drinase_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(3, 5, 2, 'GANG PASANTREN 2 SADARMANAH', '50', '0,5', '0,5', '', '107.529783', '107.529925', '-6.899374', '-6.898851', 0, 'MUSRENBANG', 2015, '', '2_drinase_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(4, 5, 3, 'DARUSURUR 8', '70', '0,4', '0.5', '', '107.527482', '107.527285', '-6.900047', '-6.899633', 0, 'MUSRENBANG', 2015, '', '3_drainase_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(5, 2, 4, 'CISALAK SADARMANAH', '35', '0,4', '0.5', '', '107.532789', '107.532883', '-6.901209', '-6.900936', 0, 'MUSRENBANG', 2015, '', '4_drainase_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(6, 2, 5, 'DRAINASE SADARMANAH', '200', '0.5', '0.5', '', '107.531023', '107.531517', '-6.903153', '-6.901012', 0, 'MUSRENBANG', 2015, '', '5_drainase_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(7, 1, 6, 'CIBOGO LEUWIGAJAH', '55', '0,5', '0,4', '', '107.529110', '107.529145', '-6.910041', '-6.910374', 0, 'MUSRENBANG', 2015, '', '6_drainase_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(8, 4, 7, 'CIBOGO LAMPING', '85', '0,5', '0,5', '', '107.529565', '107.529023', '-6.911250', '-6.911800', 0, 'MUSRENBANG', 2015, '', '7_drainase_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(9, 2, 8, 'KIHAPIT TIMUR', '10', '1.5', '1.5', '', '107.526677', '107.526677', '-6.908374', '-6.908374', 0, 'MUSRENBANG', 2015, '', '8_drainase_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(10, 4, 9, 'KIHAPIT BARAT', '176', '0.5', '0.5', '', '107.523825', '107.524174', '-6.907089', '-6.907982', 0, 'MUSRENBANG', 2015, '', '9_drainase_awal 2.JPG', NULL, 0, 1, 1, 0, 0, 0),
(11, 5, 10, 'CIREUNDEU LEUWIGAJAH', '63', '1', '1.2', '', '107.521613', '107.521814', '-6.913002', '-6.913636', 0, 'MUSRENBANG', 2015, '', '10_drainase_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(12, 5, 13, 'DARAINASE NUSA PERSADA', '114', '0.6', '0.5', '', '107.528434', '107.528482', '-6.898089', '-6.897144', 0, 'MUSRENBANG', 2015, '', '13_drainase_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(13, 1, 14, 'DRAINASE CIBOGO PERMAI BATAS RW.20', '20', '0.5', '1', '', '107.528443', '107.528553', '-6.906903', '-6.906885', 0, 'MUSRENBANG', 2015, '', '14_drainase_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(14, 7, 16, 'DRAINASE PONDOK CIPTA MAS B3', '220', '0.5', '0.5', '', '107.526388', '107.525733', '-6.902797', '-6.901452', 0, 'MUSRENBANG', 2015, '', '16_drainase_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(15, 3, 17, 'JL KOMP BUKIT CIBOGO', '228', '0.5', '0.5', '', '107.524407', '107.526363', '-6.909827', '-6.910504', 0, 'MUSRENBANG', 2015, '', '3_17_drainase_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(16, 2, 17, 'JL KOMP BUKIT CIBOGO', '32', '0.5', '0.5', '', '107.526363', '107.526443', '-6.910504', '-6.910256', 0, 'MUSRENBANG', 2015, '', '2_17_drainase_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(17, 3, 17, 'JL KOMP BUKIT CIBOGO', '37', '0.5', '0.5', '', '107.525424', '107.525093', '-6.909861', '-6.909741', 0, 'MUSRENBANG', 2015, '', '3_17_drainase_awal 2.JPG', NULL, 0, 1, 1, 0, 0, 0),
(18, 4, 17, 'JL KOMP BUKIT CIBOGO', '335', '0.5', '0.5', '', '107.524484', '107.522701', '-6.909696', '-6.910411', 0, 'MUSRENBANG', 2015, '', '4_17_drainase_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(19, 1, 18, 'DRAINASE TERUSAN SAMOJA 4 NYEYEREAN', '20', '0.6', '0.5', '', '107.526162', '107.526207', '-6.897984', '-6.897833', 0, 'MUSRENBANG', 2015, '', '18_drainase_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(20, 8, 20, 'DRAINASE JL KURBA MIHARJA', '250', '0.5', '0.5', '', '107.526655', '107.526472', '-6.904925', '-6.906767', 0, 'MUSRENBANG', 2015, '', '20_drainase_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(21, 2, 4, 'CISALAK GG PERTAMINA', '80', '0.8', '1', '', '107.532853', '107.533355', '-6.902055', '-6.902008', 0, 'BKM', 2014, '', '4_drainase_hasil.JPG', NULL, 0, 1, 1, 1, 1, 0),
(22, 2, 5, 'JL KERKOF LEUWIGAJAH', '80', '1', '1', '', '107.532853', '107.532006', '-6.903682', '-6.903637', 0, 'MUSREN', 2012, '', '5_drainase_trotoar_hasil.JPG', NULL, 0, 1, 1, 1, 1, 0),
(23, 5, 5, 'CISALAK GG PERTAMINA', '50', '0.8', '1', '', '107.533355', '107.533674', '-6.902008', '-6.901909', 0, 'BKM', 2013, '', '5_drainase_hasil.JPG', NULL, 0, 1, 1, 1, 1, 0),
(24, 7, 6, 'CIBOGO LEUWIGAJAH', '50', '1', '1', '', '107.527884', '107.528292', '-6.909642', '-6.909881', 0, 'USULAN WARGA', 2014, '', '6_drainase_hasil.JPG', NULL, 0, 1, 1, 1, 1, 0),
(25, 2, 7, 'CIBOGO LEUWIGAJAH', '70', '1', '1', '', '107.531860', '107.532132', '-6.911797', '-6.912180', 0, 'MUSREN', 2014, '', '7_drainase_hasil.jpg', NULL, 0, 1, 1, 1, 1, 0),
(26, 8, 8, 'KIHAPIT TIMUR', '20', '1', '1', '', '107.527180', '107.527327', '-6.907936', '-6.908109', 0, 'USULAN WARGA', 2014, '', '8_8_drainase_hasil.jpg', NULL, 0, 1, 1, 1, 1, 0),
(27, 2, 18, 'NYEYEREAN SADARMANAH', '148', '1.2', '1', '', '107.525614', '107.526971', '-6.897606', '-6.898032', 0, 'MUSREN', 2012, '', '18_drainase_hasil.JPG', NULL, 0, 1, 1, 1, 1, 0),
(28, 6, 20, 'JL KIHAPIT TIMUR', '300', '0.5', '0.8', 'Ada', '107.52704615903849', '107.52765892723096', '-6.9048513103235765', '-6.905568183820638', 0, 'MUSRENBANG', 2014, '', '20_drainase_hasil.jpg', NULL, 0, 1, 1, 1, 1, 0),
(29, 4, 4, 'CURUG LEUNGSING / GG PERTAMINA', '583', '1.5', '1,5', '', '107.531447', '107.532917', '-6.901030', '-6.900274', 0, 'USULAN WARGA', 2014, '', '4_4__cisalak_drainase_pelaksanaan.JPG', NULL, 0, 1, 1, 1, 0, 0),
(30, 2, 5, 'SALURAN KERKOF', '200', '1.2', '1', '', '107.532266', '107.534157', '-6.903620', '-6.903548', 0, 'MUSRENBANG', 2015, '', '2_5_drainase_pelaksanaan.JPG', NULL, 0, 1, 1, 1, 0, 0),
(31, 2, 7, 'CIBOGO', '167', '1.2', '1', '', '107.532132', '107.531374', '-6.912180', '-6.913383', 0, 'MUSRENBANG', 2014, '', '2_7_drainase_pelaksanaan.jpg', NULL, 0, 1, 1, 1, 0, 0),
(32, 2, 8, 'KIHAPIT TIMUR', '170', '0.4', '0.5', '', '107.524581', '107.525313', '-6.907468', '-6.902274', 0, 'MUSRENBANG', 2014, '', '2_8_drainase_pelaksanaan.JPG', NULL, 0, 1, 1, 1, 0, 0),
(33, 9, 9, 'KIHAPIT BARAT', '60', '0.4', '0.5', '', '107.521332', '107.520538', '-6.904973', '-6.903636', 0, 'MUSRENBANG', 2015, '', '9_9_drainase_pelaksanaan.JPG', NULL, 0, 1, 1, 1, 0, 0),
(34, 5, 9, 'PORAL KIHAPIT BARAT', '700', '0.4', '0.5', '', '107.522668', '107.5206622', '-6.9030119', '-6.903684', 0, 'USULAN WARGA', 2014, '', '5_9_drainase_pelaksanaan.JPG', NULL, 0, 1, 1, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ekonomi_gas`
--

CREATE TABLE IF NOT EXISTS `ekonomi_gas` (
`id_gas` int(11) NOT NULL,
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
  `no_ijin` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `ekonomi_gas`
--

INSERT INTO `ekonomi_gas` (`id_gas`, `nama_pemilik`, `alamat`, `rt`, `rw`, `kelurahan`, `telp`, `sp_agen`, `qty`, `lat`, `long`, `no_ijin`) VALUES
(1, 'ACHMAD MARDJUKI', 'KOMP TAMAN CIBOGO', '6', '17', 'LEUWIGAJAH', '2292520411', 'PT SETIA BUDHI PERTIWI', 400, '', '', ''),
(2, 'UUS MISBAHUDIN', 'JL KERKOF NO.06', '', '5', 'LEUWIGAJAH', '8121453386', 'PT MUTIARA CAHAYA ASIH', 840, '', '', ''),
(3, 'HENDRAWAN', 'KP KIHAPIT', '4', '3', 'LEUWIGAJAH', '2266671377', 'PT KUSUMAH MITRA INDAH', 600, '', '', ''),
(4, 'AAN', 'JL KIHAPIT TIMUR NO 7', '11', '20', 'LEUWIGAJAH', '2270766471', 'PT CIMAHI BARIBATALI LESTARI', 1000, '', '', ''),
(5, 'EDDY FREDY', 'JL KERKOF NO.45', '2', '9', 'LEUWIGAJAH', '81322574050', 'PT KUSUMAH MITRA INDAH', 30, '', '', ''),
(6, 'SITINJAK', 'SADARMANAH NO.42', '5', '4', 'LEUWIGAJAH', '818200265', 'PT KUSUMAH MITRA INDAH', 1200, '', '', ''),
(7, 'IWAN', 'JL KERKOF KIHAPIT BARAT', '5', '9', 'LEUWIGAJAH', '85974533493', 'PT KUSUMAH MITRA INDAH', 1400, '', '', ''),
(8, 'IRNA', 'JL CIBOGO', '2', '19', 'LEUWIGAJAH', '2291929356', 'PT KUSUMAH MITRA INDAH', 500, '', '', ''),
(9, 'KOKO', 'KP CIBOGO', '7', '6', 'LEUWIGAJAH', '81322190858', 'PT GUMILANG WENING ASIH', 5000, '', '', ''),
(10, 'EEN SUMIATI', 'KERKOF NO.06', '4', '5', 'LEUWIGAJAH', '8121453386', 'PT BUANA FAJAR RAYA', 1050, '', '', ''),
(11, 'SAMSUDIN', 'JL SADARMANAH', '', '3', 'LEUWIGAJAH', '81322212230', 'PT BUANA FAJAR RAYA', 910, '', '', ''),
(12, 'PUJO', 'BAROS PASAR NO.3 KAV 1', '', '1', 'LEUWIGAJAH', '226630503', 'PT MUTIARA CAHAYA ASIH', 1200, '', '', ''),
(13, 'ASMAN SIMANJUNTAK', 'JL RAYA BHAKTI', '4', '11', 'LEUWIGAJAH', '226670351', 'PT CIMAHI BARIBATALI LESTARI', 320, '', '', ''),
(14, 'riza fauzi', 'cimahi jalan', '8', '8', 'LEUWIGAJAH', '9999', '9999', 99, '999', '99', '99'),
(15, 'riza', 'cimahi jalan', '8', '8', 'LEUWIGAJAH', '9999', '9999', 99, '999', '99', '99');

-- --------------------------------------------------------

--
-- Table structure for table `ekonomi_kos`
--

CREATE TABLE IF NOT EXISTS `ekonomi_kos` (
`id_kos` int(11) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `alamat_pemilik` text NOT NULL,
  `rw` varchar(5) NOT NULL,
  `jml_kamar` int(5) NOT NULL,
  `jml_orang_perkamar` int(5) NOT NULL,
  `ijin_usaha` varchar(30) NOT NULL,
  `harga_sewa` int(10) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=117 ;

--
-- Dumping data for table `ekonomi_kos`
--

INSERT INTO `ekonomi_kos` (`id_kos`, `nama_pemilik`, `alamat_pemilik`, `rw`, `jml_kamar`, `jml_orang_perkamar`, `ijin_usaha`, `harga_sewa`, `ket`) VALUES
(1, 'UDU', 'CIBOGO RW 07 RT 01', '7', 6, 3, '', 2400000, ''),
(2, 'EUNTI', 'CIBOGO RW 07 RT 01', '7', 3, 2, '', 6000000, ''),
(3, 'H. OMAS ISKANDAR', 'KOMP. CIBOGO P. RT02/14', '14', 20, 3, '', 1050000, ''),
(4, 'HJ. NURSYAM', 'KOMP. CIBOGO P. RT03/14', '14', 10, 3, '', 1050000, ''),
(5, 'Dr. HSYUN', 'KOMP. CIBOGO P. RT 03/14', '14', 10, 3, '', 900000, ''),
(6, 'YULISTIONO', 'KOMP. CIBOGO P. RT 03/14', '14', 4, 3, '', 1200000, ''),
(7, 'WAWAN IRIAWAN', 'KOMP. CIBOGO P. RT03/14', '14', 4, 3, '', 900000, ''),
(8, 'H. OMAN', 'RT03 RW 11 / RT 01 RW 11', '11', 4, 0, '', 3600000, ''),
(9, 'EDI KRISNA', 'RT 08 RW 11/ RT 04 RW 11', '11', 19, 0, '', 4800000, ''),
(10, 'H. ALO', 'CIGUGUR', '', 38, 0, '', 3600000, ''),
(11, 'TOTO', 'GUNUNG BATU', '', 8, 0, '', 4800000, ''),
(12, 'RUSMIN', 'JL KERKOF RT 01 RW 09', '9', 10, 0, '', 4800000, ''),
(13, 'ENDANG KUSWANDI', 'JL KERKOF RT 01 RW 09', '9', 4, 0, '', 4200000, ''),
(14, 'EULIS WANDAWATI', 'JL KERKOF RT 01 RW 09', '9', 7, 0, '', 3000000, ''),
(15, 'SUROSO', 'JL. GANG WARGA RT 02 RW 9', '9', 18, 0, '', 3600000, ''),
(16, 'KARYO', 'JL. GANG WARGA RT 02 RW 9', '9', 12, 0, '', 2600000, ''),
(17, 'JAUHARI', 'JL. GANG WARGA RT 02 RW 9', '9', 1, 0, '', 2600000, ''),
(18, 'ERWIN', 'JL. GANG WARGA RT 02 RW 9', '9', 10, 0, '', 2600000, ''),
(19, 'LILI', 'JL. GANG WARGA RT 02 RW 9', '9', 20, 0, '', 2600000, ''),
(20, 'HAGIMAN', 'JL. GANG WARGA RT 02 RW 9', '9', 16, 0, '', 2600000, ''),
(21, 'TUTI', 'JL. GANG WARGA RT 02 RW 9', '9', 7, 0, '', 2600000, ''),
(22, 'H. IDI', 'JL. GANG WARGA RT 02 RW 9', '9', 11, 0, '', 2600000, ''),
(23, 'PARJO', 'JL. GANG WARGA RT 02 RW 9', '9', 3, 0, '', 2600000, ''),
(24, 'IMAS', 'JL. GANG WARGA RT 02 RW 9', '9', 4, 0, '', 2600000, ''),
(25, 'IPUL', 'JL. GANG WARGA RT 02 RW 9', '9', 2, 0, '', 2600000, ''),
(26, 'SUNARYA', 'JL. GANG WARGA RT 02 RW 9', '9', 2, 0, '', 2600000, ''),
(27, 'VANI A', 'JL. GANG WARGA RT 02 RW 9', '9', 10, 0, '', 2600000, ''),
(28, 'VANI B', 'JL. GANG WARGA RT 02 RW 9', '9', 2, 0, '', 2600000, ''),
(29, 'M. HAMID', 'KP. KIHAPIT TIMUR 08/08', '', 10, 0, '', 4200000, ''),
(30, 'SANIYO', 'KP. KIHAPIT TIMUR 08/08', '', 5, 0, '', 4200000, ''),
(31, 'ETTY YURITA', 'KP. KIHAPIT TIMUR 08/08', '', 4, 0, '', 4200000, ''),
(32, 'GUNAWAN', 'KOM CIBOGO PERMAI RW 14', '', 2, 0, '', 4200000, ''),
(33, 'SANTI SANTIKA', 'KP. KIHAPIT TIMUR 08/08', '', 3, 0, '', 4200000, ''),
(34, 'MIEZA', 'TMN BUKIT CIBOGO 07/17', '', 3, 0, '', 4200000, ''),
(35, 'YAYAT RUHIYAT', 'TMN BUKIT CIBOGO 07/17', '', 2, 0, '', 4200000, ''),
(36, 'LATIF', 'CIBIRU', '', 9, 0, '', 1800000, ''),
(37, 'KARNASEP', 'KIHAPIT', '', 5, 1, '', 2040000, ''),
(38, 'SUMARNA', 'KIHAPIT', '', 1, 0, '', 1440000, ''),
(39, 'MISNA', 'KIHAPIT', '', 2, 0, '', 1440000, ''),
(40, 'WILSON SINAGA', 'CIBABAT', '', 1, 0, '', 1440000, ''),
(41, 'ADE KUSYONO', 'KIHAPIT', '', 1, 0, '', 1440000, ''),
(42, 'SALPA', 'CIBOGO PERMAI', '', 4, 0, '', 1440000, ''),
(43, 'GINI MARGARETA', 'KIHAPIT TIMUR RT 01/08', '', 8, 0, '', 1440000, ''),
(44, 'ASEP SUPRIATNAkp', 'KIHAPIT TIMUR RT 05/08', '', 3, 0, '', 1200000, ''),
(45, 'SURMAN', 'TANGERANG/ RTO5/08', '', 4, 0, '', 3000000, ''),
(46, 'SLAMET', 'RT 01 RW 01', '', 10, 0, '', 2400000, ''),
(47, 'H.R. SUMARNO', 'RT 01 RW 01', '', 3, 0, '', 2400000, ''),
(48, 'TRI NARTO', 'RT 01 RW 01', '', 4, 0, '', 2400000, ''),
(49, 'SRI', 'RT 02 RW 01', '', 10, 0, '', 2400000, ''),
(50, 'RADI KP', 'RT 02 RW 01', '', 9, 0, '', 2400000, ''),
(51, 'MARIUS', 'RT 02 RW 01', '', 8, 0, '', 2400000, ''),
(52, 'IRI', 'RT 02 RW 01', '', 16, 0, '', 4800000, ''),
(53, 'OTEN', 'RT 02 RW 01', '', 10, 0, '', 4800000, ''),
(54, 'S. LUPIYO', 'RT 02 RW 01', '', 6, 0, '', 4800000, ''),
(55, 'H. OO SANTOSO', 'RT 02 RW 01', '', 8, 0, '', 4800000, ''),
(56, 'SUWARTONO', 'RT03 RW 01', '', 1, 0, '', 4800000, ''),
(57, 'KAPI KUSTONO', 'RT 03 RW 01', '', 1, 0, '', 4000000, ''),
(58, 'TUA SIAGIAN', 'RT 04 RW 01', '', 100, 0, '', 20000000, ''),
(59, 'DEDY', 'RT 04 RW 01', '', 10, 0, '', 4800000, ''),
(60, 'TITIN', 'RT 04 RW 01', '', 10, 0, '', 4800000, ''),
(61, 'HADI KURNIAWATI', 'RT 04 RW 01', '', 6, 0, '', 4800000, ''),
(62, 'DEDI ROSADI', 'KIHAPIT TIMUR 09/08', '', 6, 0, '', 1920000, ''),
(63, 'USMAN', 'KIHAPIT RT 06/08', '', 9, 0, '', 1800000, ''),
(64, 'H. KANDA', 'KAMP. SARADAN RTO1 RW 02', '', 6, 3, '', 3600000, ''),
(65, 'UDIN SAEPUDIN', 'KAMP. SARADAN RTO1 RW 02', '', 3, 3, '', 3600000, ''),
(66, 'MARZUKI', 'KAMP. SARADAN RTO1 RW 02', '', 5, 3, '', 3600000, ''),
(67, 'H. BANDI', 'KAMP. SARADAN RTO1 RW 02', '', 5, 3, '', 3600000, ''),
(68, 'SUKAYA', 'KIHAPIT RT 04 RW 09', '', 19, 0, '', 3000000, ''),
(69, 'EROS', 'KP. SARADAN RT 03/03', '', 2, 7, '', 3500000, ''),
(70, 'IPAH', 'KP. SARADAN RT 03/02', '', 4, 12, '', 5000000, ''),
(71, 'MAHMUDIN', 'KP. SARADAN RT 03/03', '', 3, 13, '', 8000000, ''),
(72, 'LILIS', 'KP. SARADAN RT 03/02', '', 3, 7, '', 2800000, ''),
(73, 'BASUKI', 'KP. SARADAN RT 03/03', '', 3, 9, '', 15000000, ''),
(74, 'SUDARSONO', 'KP. SARADAN RT 03/08', '', 1, 0, '', 3600000, ''),
(75, 'PANJAITAN', 'KP. SARADAN RT 03/02', '', 6, 0, '', 15000000, ''),
(76, 'AKIB', 'KP. SARADAN RT 03/02', '', 1, 0, '', 4000000, ''),
(77, 'DEWI/SUBARI', 'KP. SARADAN RT 03/02', '', 1, 0, '', 4000000, ''),
(78, 'ALI GARDA', 'KP. SARADAN RT 03/02', '', 1, 0, '', 4500000, ''),
(79, 'KOMALA', 'KP. SARADAN RT 03/02', '', 1, 0, '', 4800000, ''),
(80, 'N SITI KOMARIAH', 'KP. SARADAN RT 03/02', '', 1, 0, '', 3000000, ''),
(81, 'ABDUL ROHMAN', 'KP. SARADAN RT 03/02', '', 1, 0, '', 3500000, ''),
(82, 'SUNMANTO', 'KP. SARADAN RT 03/02', '', 1, 0, '', 3500000, ''),
(83, 'UDIN SAEPUDIN', 'KP. SARADAN RT 03/02', '', 2, 8, '', 600000, ''),
(84, 'HARNINGSIH', 'KP. SARADAN RT 03/02', '', 5, 10, '', 1250000, ''),
(85, 'TASMIDI', 'KP. SARADAN RT 03/02', '', 2, 3, '', 9640000, ''),
(86, 'ASEP DARYADI', 'KP. SARADAN RT 03/02', '', 3, 6, '', 21000000, ''),
(87, 'KANDA', 'KP. SARADAN RT 03/02', '', 1, 4, '', 12000000, ''),
(88, 'DIAH', 'KP. SARADAN RT 03/02', '', 1, 5, '', 3000000, ''),
(89, 'NUNUNG', 'KP. SARADAN RT 03/02', '', 1, 5, '', 8000000, ''),
(90, 'UJANG SUKARNA', 'KP. SARADAN RT 04/02', '', 4, 4, '', 3000000, ''),
(91, 'AHAH', 'KP. SARADAN RT 04/02', '', 2, 4, '', 3600000, ''),
(92, 'HIDAYAT', 'KP. SARADAN RT 04/02', '', 4, 4, '', 2400000, ''),
(93, 'CUCU LASWATI', 'KP. SARADAN RT 05/02', '', 3, 2, '', 3600000, ''),
(94, 'NURAENI', 'KP. SARADAN RT 05/02', '', 2, 3, '', 3000000, ''),
(95, 'UJAT', 'KP. SARADAN RT 05/02', '', 2, 2, '', 2600000, ''),
(96, 'SOLIHAT', 'KP. SARADAN RT 05/02', '', 2, 2, '', 2600000, ''),
(97, 'LISDA', 'KP. SARADAN RT 05/02', '', 6, 2, '', 2600000, ''),
(98, 'DEDEN', 'KP. SARADAN RT 05/02', '', 2, 2, '', 3000000, ''),
(99, 'KOMKOM KOMARIAH', 'KP. SARADAN RT 05/02', '', 4, 2, '', 3000000, ''),
(100, 'MAE', 'KP. SARADAN RT 05/02', '', 2, 2, '', 3000000, ''),
(101, 'WIWI WARTINI', 'KP. SARADAN RT 05/02', '', 2, 2, '', 3000000, ''),
(102, 'H. BANDI', 'KP. SARADAN RT 06/02', '', 6, 3, '', 4800000, ''),
(103, 'IYA', 'KP. SARADAN RT 06/02', '', 6, 4, '', 1800000, ''),
(104, 'KANDA', 'KP. SARADAN RT 06/02', '', 3, 3, '', 2100000, ''),
(105, 'UDIN', 'KP. SARADAN RT 06/02', '', 1, 3, '', 5000000, ''),
(106, 'IPAH', 'KP. SARADAN RT 06/02', '', 2, 1, '', 3000000, ''),
(107, 'WISNU', 'KP. SARADAN RT 06/02', '', 1, 3, '', 2100000, ''),
(108, 'JUNU', 'KP. SARADAN RT 06/02', '', 2, 2, '', 3000000, ''),
(109, 'RUSTANDI', 'KP. SARADAN RT 06/02', '', 1, 3, '', 5000000, ''),
(110, 'KAYA', 'KP. SARADAN RT 06/02', '', 1, 5, '', 3000000, ''),
(111, 'DENI', 'KP. SARADAN RT 07/02', '', 1, 0, '', 1800000, ''),
(112, 'RUKMA', 'KP. SARADAN RT 07/02', '', 1, 0, '', 2000000, ''),
(113, 'SITI JUBAEDAH', 'KP. SARADAN RT 08/02', '', 2, 0, '', 3000000, ''),
(114, 'H AWANG', 'KP. SARADAN RT 08/02', '', 1, 0, '', 3000000, ''),
(115, 'SURYATI', 'KP. SARADAN RT 08/02', '', 1, 0, '', 3000000, ''),
(116, 'HENI', 'KP. SARADAN RT 08/02', '', 1, 0, '', 4000000, '');

-- --------------------------------------------------------

--
-- Table structure for table `ekonomi_minimarket`
--

CREATE TABLE IF NOT EXISTS `ekonomi_minimarket` (
`id_minimarket` int(11) NOT NULL,
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
  `no_ijin` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `ekonomi_minimarket`
--

INSERT INTO `ekonomi_minimarket` (`id_minimarket`, `nama_perusahaan`, `bentuk_perusahaan`, `alamat`, `rt`, `rw`, `nama_pemilik`, `jml_pekerja`, `jam_kerja`, `status_tanah`, `luas_bangunan`, `luas_ruang_usaha`, `no_ijin`) VALUES
(1, 'YOMART LEUWIGAJAH CIBEBER', 'RITEL MINIMARKET', 'JL SADARMANAH NO. 147 RT.01 RW.18 LEUWIGAJAH CIMAHI SELATAN', '1', '18', 'CHARLY RUSLY', 5, '07.00 - 22.00', 'SEWA', 117, 163, '503.7/00401/PM/1390-D'),
(2, 'INDOMART SADARMANAH ( PT. INDOMARCO PRISMATAMA)', 'RITEL MINIMARKET', 'JL SADARMANAH NO. 165 LEUWIGAJAH CIMAHI SELATAN', '', '', '-', 6, '07.00 - 22.00', '-', 210, 0, 'Izin Sedang dalam Proses Berdasarkan Surat Keteran'),
(3, 'PT. SUMBER ALFARIA TRIJAYA, Tbk', 'PT', 'JL RAYA KERKOF RT.03 RW.05 LEUWIGAJAH', '3', '5', 'DWI ARYO DARMASTO', 7, '12 JAM', 'SEWA', 125, 80, 'KETERANGAN DOMISILI NO.148/007/KEL LG/III/2011'),
(4, 'INDOMART', 'RITEL MINIMARKET', 'JL SADARMANAH NO. RW.04 LEUWIGAJAH CIMAHI SELATAN', '', '4', '-', 6, '07.00 - 22.00', '-', 230, 0, ''),
(5, 'CV SAUDARA ( ALFAMART )', 'CV', 'JL KERKOF NO.52-53 RT.01 RW.05 KEL LEUWIGAJAH KEC. CIMAHI SELATAN', '1', '5', 'UJU NUR JUHAENI', 7, '08.00 S.D 22.00', 'SEWA', 164, 247, '-IZIN TETANGGA. -DOMISILI PERUSAHAAN NO.148.4/37/E'),
(6, 'PT SUMBER ALFARIA TRIWIJAYA, Tbk (ALFAMART)', 'PT', 'JL SADARMANAH NO.152 A RT.03 RW.18 LEUWIGAJAH CIMAHI SELATAN', '3', '18', 'EDWARDO SAGITA EFENDY', 7, '08.00 S.D 22.00', 'SEWA', 232, 94, 'IZIN TETNGGA 3 APRIL 2013 KETERANGAN DOMISILI NO.1'),
(7, 'BORMA', '', 'JL KERKOF RW.05 KEL LEUWIGAJAH KEC. CIMAHI SELATAN', '', '5', '', 0, '09.00 S.D 22.00', '', 0, 0, 'Data Tidak Didapatkan');

-- --------------------------------------------------------

--
-- Table structure for table `ekonomi_nama_perusahaan`
--

CREATE TABLE IF NOT EXISTS `ekonomi_nama_perusahaan` (
`id_nama_perusahaan` int(11) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `jml_pegawai` int(5) NOT NULL,
  `bergerak_dibidang` varchar(100) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `ekonomi_nama_perusahaan`
--

INSERT INTO `ekonomi_nama_perusahaan` (`id_nama_perusahaan`, `nama_perusahaan`, `nama_pemilik`, `jml_pegawai`, `bergerak_dibidang`, `telp`, `alamat`, `rt`, `rw`) VALUES
(1, 'HUTAMA KARYA', 'BUMN', 0, 'Aspal', '-', 'Jl. Kerkof RT.04 RW.09', '4', '9'),
(2, 'SINAR MAKIN MULYA', 'Nanan Koesnandar', 282, 'Jasa Pencelupan', '022-6629672', 'Jl. Baros No.9/78 RT.01 RW.04', '1', '4'),
(3, 'SAMA INDAH', 'Arya Sungkono', 50, 'Industri Ragi', '022-6659312', 'Jl. Baros RT.04 RW.01', '4', '1'),
(4, 'SEKAWAN', 'Stephen sunaryo', 6, 'Rajut', '022-6671127', 'Jl. Kerkof No.74 RT.01 RW.05', '1', '5'),
(5, 'MANDIRI', '-', 0, '-', '-', 'Jl. Kerkof No.75 RT.07 RW.09', '7', '9'),
(6, 'RUKUN GAYA BARU', '-', 0, 'Angkutan (Container)', '-', 'Jl. Kerkof RT.02 RW.20', '2', '20'),
(7, 'BAJUBANG GASINDO', 'Husen Tanurahardja', 70, 'SPBE/Pengisian LPG', '08122022370', 'Jl. Kerkof RT.02 RW.09', '2', '9'),
(8, 'PET CRUSHER', 'LIE ROY', 15, 'Daur ulang barang bukan logam', '93074078', 'Jl. Kerkof RT.04 RW.09', '4', '9'),
(9, 'KOPERASI WARGA SEMEN GRESIK', 'Ir. I Ketut Arsha Putra', 10, 'Penyimpanan Semen (Gudang)', '-', 'Jl. Kerkof RT.01 RW.09', '1', '9'),
(10, 'KARYA PUTRA PAHLAWAN', 'Ir. Suherman', 30, 'Industri Karet', '022-6673934', 'Jl. Kerkof No.50 RT.05 RW.20', '5', '20'),
(11, 'MEKAR TUBINDO', 'Martin Prasetyo', 16, 'Kemasan Karton', '022-6675598', 'Jl. Kerkof RT.04 RW.09', '4', '9'),
(12, 'SALTX', '-', 0, '-', '-', 'Jl. Kerkof RT.06 RW.09', '6', '9'),
(13, 'SINAR ANUGRAH LESTARI TEXSINDO', 'Fon Lin', 22, 'Rajut, Perdagangan Benang dan Kain', '022-6671727', 'Jl. Kerkof RT.07 RW.09', '7', '9'),
(14, 'INDO UTAMA RAJUT', 'Yoseph Sunaryo', 60, 'Rajut', '022-6671823', 'Jl. Kerkof No.74 RW.09', '74', '9'),
(15, 'PUTRA JELITA', 'Nes Yandri', 81, 'Konveksi dan Perdagangan', '022-6672831', 'Jl. Kerkof RT.06 RW.09', '6', '9'),
(16, 'SURYA', 'Hendra Wijaya', 100, 'Makanan Ringan', '022-6672590', 'Jl. Kerkof RT.07 RW.09', '7', '9'),
(17, 'MURNI', 'Ichwan', 7, 'Pemesanan Kusen/Mebel', '022-6675815', 'Jl. Kerkof RT.06 RW.09', '6', '9'),
(18, 'PERMATA BUANA PUTRA', 'H. Itang Taryana', 18, 'Bahan Bakar Minyak', '08156034855', 'Jl. Kerkof RT.06 RW.09', '6', '9'),
(19, 'BORMA', 'Wisnu Wardana', 30, 'Toserba', '', 'Jl. Kerkof No.31 RT.04 RW.05', '4', '5');

-- --------------------------------------------------------

--
-- Table structure for table `ekonomi_umkm`
--

CREATE TABLE IF NOT EXISTS `ekonomi_umkm` (
`id_umkm` int(11) NOT NULL,
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
  `persentase_import` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=205 ;

--
-- Dumping data for table `ekonomi_umkm`
--

INSERT INTO `ekonomi_umkm` (`id_umkm`, `kota`, `kecamatan`, `kelurahan`, `nbs`, `rw`, `rt`, `klasifikasi_perusahaan`, `nama_perusahaan`, `alamat_perusahaan`, `kegiatan_utama`, `jenis_usaha`, `jk_pengusaha`, `prov_tempat_lahir_pengusaha`, `kota_tempat_lahir_pengusaha`, `bentuk_badan_hukum`, `tahun_mulai_operasi`, `gabung_paguyuban`, `bermitra`, `bentuk_kemitraan`, `pembinaan_pemerintah`, `pemberi_pembinaan`, `eksport`, `persentase_eksport`, `import`, `persentase_import`) VALUES
(1, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '114b', '1', '1', 'MIKRO', 'TATI SUGIARTI', 'JL. BAROS PASAR NO. I RT 01', 'PRODUKSI BA''WAN UDANG COMBRING', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA TENGAH', 'MAGELANG', 'PERORANGAN', '2007', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(2, 'CIMAHI', 'CIMAHI SELATAN', 'kelurahan', '114B', '1', '1', 'MIKRO', 'SUHARDINI', 'JL. BAROS PASAR RT 01/01', 'MENJAHIT PAKAIAN', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'DI. JOGJAKARTA', 'JOGJAKARTA', 'PERORANGAN', '1995', 'TIDAK', 'YA', 'MAKLOON', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(3, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '114B', '1', '1', 'MIKRO', 'PUTERA', 'JL. BAROS PASAR NO. 17 RT 01', 'PRODUKSI NUGGET SAYUR', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'CV', '2012', 'TIDAK', 'TIDAK', '', 'YA', 'PEMKOT CIMAHI', 'TIDAK', '', 'TIDAK', ''),
(4, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '114B', '1', '1', 'MIKRO', 'EKO SUMARGO', 'JL. BAROS PASAR RT 01/01', 'PRODUKSI BALA-BALA,LEUPEUT,GEHU DLL', 'PERDAGANGAN DARI PRODUKSI SEND', 'LAKI LAKI', 'JAWA TENGAH', 'BANYUMAS', 'PERORANGAN', '2000', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(5, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '112B', '1', '2', 'MIKRO', 'DWI ROCHAYATI', 'JL. BAROS PASAR KAV. RT 02', 'PRODUKSI RISOLES DADAR GULUNG', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'DI JOGJAKARTA', 'KULON PROGO', 'PERORANGAN', '2012', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(6, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '112B', '1', '2', 'MIKRO', 'ENNA TRIANI', 'JL. BAROS KAV. RT 02/01', 'PEMBUATNA ONDE DAN DADAR GULUNG', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2010', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(7, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '112B', '1', '2', 'MIKRO', 'ETI TRIYATI', 'JL. BAROS PASAR KAV RT 02/01', 'PRODUKSI BALA BALA', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2000', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(8, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '111B', '1', '4', 'MIKRO', 'SULASTRI', 'JL. BAROS PASAR NO. IIIA', 'PRODUKSI KERIPIK PISANG', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'BANDUNG', 'PERORANGAN', '2000', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(9, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '111B', '1', '4', 'MIKRO', 'MAS ARJON', 'JL. PASAR BAROS RT 04/01', 'PRODUKSI PEMPEK DAN RISOLES', 'PERDAGANGAN DARI PRODUKSI SEND', 'LAKI LAKI', 'LAMPUNG', 'BANDAR LAMPUNG', 'PERORANGAN', '2002', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(10, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '110B', '1', '4', 'MIKRO', 'ENDAH FARIDA', 'JL. BAROS PASAR 129C RT 04/01', 'PRODUKSI KUE KEJU DAN KUE ASTER', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'BANDUNG', 'PERORANGAN', '2000', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(11, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '110B', '1', '4', 'MENENGAH', 'PT. SAMA INDAH', 'JL. BAROS 27 RT 04/01', 'PRODUKSI RAGI UNTUK ROTI', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'BANDUNG', 'PT', '1986', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(12, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '108B', '1', '6', 'MIKRO', 'SUJONO', 'JL. PONDOK MAS RAYA NO. 7', 'PRODUKSI TAHU SUTERA', 'PERDAGANGAN DARI PRODUKSI SEND', 'LAKI LAKI', 'JAWA TIMUR', 'SURABAYA', 'PERORANGAN', '2007', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(13, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '107B', '1', '7', 'MIKRO', 'JATMIKA', 'JL.PONDOK MAS SELATAN NO.7', 'PRODUKSI KERIPIK PISANG', 'PERDAGANGAN DARI PRODUKSI SEND', 'LAKI LAKI', 'JAWA TENGAH', 'TEGAL', 'PERORANGAN', '2004', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(14, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '097B', '2', '1', 'MIKRO', 'ADI RASA CAKE 2', 'JL SADARMANAH', 'MEMBUAT & MENJUAL KUE BOLU', 'PERDAGANGAN DARI PRODUKSI SEND', 'LAKI LAKI', 'JAWA TENGAH', 'BOYOLALI', 'PERORANGAN', '2012', 'YA', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(15, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '097B', '2', '1', 'MIKRO', 'PERUSAHAAN ALIM RUGI', 'JL. SADARMANAH', 'KONVEKSI MENJAHIT KAOS OBLONG', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2000', 'TIDAK', 'YA', 'MAKLOON', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(16, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '097B', '2', '1', 'KECIL', 'ETI SUMIATI', 'JL. SADARMANAH RT 01/02', 'MEMBUAT ANEKA GORENGAN', 'INDUSTRI', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2007', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(17, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '097B', '2', '1', 'MIKRO', 'ROSMAWATI', 'JL. SADARMANAH RT 01/02 NO. 52', 'MEMBUAT JAJANAN KUE BASAH', 'INDUSTRI', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2010', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(18, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '098B', '2', '2', 'MIKRO', 'IMAS KARMINI', 'KP. SARADAN RT 02/02', 'PRODUKSI KUE', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'BANDUNG', 'PERORANGAN', '2011', 'TIDAK', 'YA', 'LAINNYA', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(19, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '098b', '2', '2', 'KECIL', 'PUTERA SEMERU', 'KP. SARADAN RT 02/02', 'PEMBUATAN BASO TAHU, SIOMAY', 'PERDAGANGAN DARI PRODUKSI SEND', 'LAKI LAKI', 'JAWA BARAT', 'GARUT', 'PERORANGAN', '2000', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(20, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '098B', '2', '2', 'KECIL', 'INTI JAYA', 'KP. SARADAN RT 02/02', 'PRODUKSI BAKSO CUANKI', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'GARUT', 'PERORANGAN', '1990', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(21, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '101B', '2', '3', 'MIKRO', 'BACIL', 'JL. SADARMANAH NO. 104 RT03/02', 'JUALAN BACIL,BALA BALA', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2012', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(22, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '101B', '2', '3', 'MIKRO', 'IKA TAILOR', 'JL. SADARMANAH RT 03/03', 'MENJAHIT PAKAIAN', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2010', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(23, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '101B', '2', '3', 'KECIL', 'EKO SAPUTRO', 'JL. SADARMANAH RT 03/02', 'TENUN DARI BENANG JADI KAIN', 'INDUSTRI', 'LAKI LAKI', 'JAWA TENGAH', 'KEBUMEN', 'PERORANGAN', '2014', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(24, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '102B', '2', '4', 'KECIL', 'PARLAN', 'KP. SARADAN RT 04/02 NO. 237', 'JUALAN JAJANAN TRADISIONAL', 'PERDAGANGAN DARI PRODUKSI SEND', 'LAKI LAKI', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2003', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(25, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '104B', '2', '5', 'KECIL', 'IIN SUNENGSIH', 'KP. SARADAN RT 05/02', 'JUALAN GORENGAN', 'INDUSTRI', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2000', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(26, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '104B', '2', '5', 'MIKRO', 'PD. EDUN', 'KP. SARADAN RT 05/02', 'PRODUKSI EMPING SINGKONG', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2013', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(27, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '104B', '2', '5', 'MIKRO', 'YANI', 'JL. SADARMANAH RT 05/02', 'POTONG/PERMAK', 'INDUSTRI', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2005', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(28, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '100B', '2', '6', 'KECIL', 'HADE & CM', 'KP. SARADAN RT 02/06', 'MENGGORENG & MENGEPAK KERUPUK SLONDOK', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2011', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(29, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '100B', '2', '6', 'KECIL', 'DENI YULYADI', 'KP. SARADAN RT 06/02 NO. 156', 'PEMBUATN PAKAIAN DALAM WANITA', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2001', 'YA', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(30, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '100B', '2', '6', 'MIKRO', 'MASAKINI', 'KP. SARADAN RT 06/02', 'MENJAHIT BAJU', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '1980', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(31, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '103B', '2', '7', 'MIKRO', 'BAKSO MALANG', 'KP. SARADAN NO. 267 RT 07/02', 'PEMBUATAN BAKSO MALANG', 'PERDAGANGAN DARI PRODUKSI SEND', 'LAKI LAKI', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '1998', 'YA', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(32, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '073B', '3', '1', 'MIKRO', 'SITI MARYAM', 'KP. SADARMANAH RT 01/03', 'TERIMA JAHITAN', 'INDUSTRI', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2008', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(33, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '082B', '3', '2', 'MIKRO', 'SARIMANAH', 'KP. SARADAN RT 02/03', 'JUAL GORENGAN BALA BALA', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2011', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(34, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '082B', '3', '2', 'MIKRO', 'SUNARTI', 'KP. SARADAN RT 02/03', 'JUAL GORENGAN', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2012', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(35, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '084B', '3', '3', 'KECIL', 'SAEPULOH', 'KP. SARADAN RT 03/03', 'PRODUKSI BAJU BLUS WANITA', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2000', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(36, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '084B', '3', '3', 'MIKRO', 'GINEN', 'KP. SARADAN RT 02/03', 'TERIMA JAHITAN', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2000', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(37, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '068B', '3', '7', 'MIKRO', 'TITIN TAILOR', 'KP. SARADAN RT 07/03', 'TERIMA JAHITAN', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2013', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(38, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '081b', '3', '8', 'KECIL', 'PIECES KONVEKSI', 'JL. SADARMANAH RT 09/03', 'MEMBUAT JAKET', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2012', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(39, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '073B', '3', '9', 'MIKRO', 'HENDRA LESMANA', 'KP. SADARMANAH RT 01/03', 'TERIMA JAHITAN', 'INDUSTRI', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2010', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(40, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '081B', '3', '9', 'MIKRO', 'BAGAS TAILOR', 'JL. SADARMANAH RT 09/02', 'TERIMA JAHITAN', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2012', 'YA', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(41, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '078B', '4', '1', 'KECIL', 'BATAKO PAK ASEP', 'JL. BAROS RT 01/04', 'MEMBUAT BATAKO', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'BANDUNG', 'PERORANGAN', '1986', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(42, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '048B', '4', '1', 'BESAR', 'PT. SINAR MAKIN MULIA', 'JL. BAROS NO. 9/78', 'PENYEMPURNAAN KAIN', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'BANDUNG', 'PT', '1982', 'YA', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(43, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '079B', '4', '2', 'MIKRO', 'HAP HAP CHIKEN', 'JL. CISALAK RT 02/04 NO. 47', 'JUAL CHIKEN', 'INDUSTRI', 'PEREMPUAN', 'JAWA BARAT', 'BANDUNG', 'PERORANGAN', '2012', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(44, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '105B', '4', '3', 'MIKRO', 'YAYAH GORENGAN', 'JL. SADARMANAH RT 04/04', 'GORENGAN KACANG+TERI', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '1998', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(45, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '080B', '4', '5', 'KECIL', 'BALA BALA KIKI AMINAH', 'JL. SADAR MANAH NO. 139', 'BALA BALA', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'TASIKMALAYA', 'PERORANGAN', '1995', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(46, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '080B', '4', '5', 'MIKRO', 'KUE BASAH NURHAYATI', 'JL. SADARMANAH CISALAK', 'MEMBUAT KUE UNTUK WARUNGAN', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'DIY JOGJAKARTA', 'JOGJAKARTA', 'PERORANGAN', '2010', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(47, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '080B', '4', '5', 'KECIL', 'SUGILAH BALA BALA', 'JL. SADARMANAH RT 05/04', 'MEMBUAT BALA BALA', 'INDUSTRI', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2000', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(48, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '053B', '5', '1', 'KECIL', 'IDA ROHAENI', 'JL. CIBOGO NO. 24 RT 01/05', 'PRODUKSI RENGGINANG', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'BANDUNG', 'CV', '2002', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(49, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '053B', '5', '1', 'MENENGAH', 'INDO UTAMA RAJUT', 'JL. KERKOF NO. 74', 'INDUSTRI PERAJUTAN', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'BANDUNG', 'PERORANGAN', '2002', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(50, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '053B', '5', '1', 'MENENGAH', 'TURINO KONFEKSI', 'JL. KERKOF RT 01/05', 'MAKLOON', 'INDUSTRI', 'LAKI LAKI', 'JAWA TENGAH', 'KEBUMEN', 'PERORANGAN', '1998', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(51, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '075B', '5', '2', 'MENENGAH', 'ANDRI TAILOR', 'JL. KERKOF RT 02/05', 'TERIMA JAHITAN BAJU', 'INDUSTRI', 'PEREMPUAN', 'JAWA TENGAH', 'CILACAP', 'PERORANGAN', '1995', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(52, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '076B', '5', '4', 'MENENGAH', 'OMALA/MEKAR KEMEJA', 'JL. KERKOF RT 04/05', 'MENJAHIT PAKAIAN', 'INDUSTRI', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '1984', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(53, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '077B', '5', '5', 'MIKRO', 'TAHU SUHAYA', 'KP. CISALAK RT 05/05', 'MEMBUAT TAHU', 'PERDAGANGAN DARI PRODUKSI SEND', 'LAKI LAKI', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '1982', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(54, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '077B', '5', '5', 'KECIL', 'AGUNG KUE', 'JL. CISALAK RT 05/05', 'MEMBUAT KUE UNTUK KE PASAR', 'PERDAGANGAN DARI PRODUKSI SEND', 'LAKI LAKI', 'JAWA TENGAH', 'JEPARA', 'PERORANGAN', '2014', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(55, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '014B', '6', '1', 'MIKRO', 'JUNATI', 'JL CIBOGO NO 17', 'PRODUKSI BALA-BALA, CIRENG', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2000', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(56, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '014B', '6', '1', 'MIKRO', 'YUSNADI', 'JL CIBOGO NO 50', 'PRODUKSI KUSEN', 'PERDAGANGAN DARI PRODUKSI SEND', 'LAKI LAKI', 'DKI JAKARTA', 'JAKARTA', 'PERORANGAN', '2008', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(57, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '014B', '6', '3', 'MIKRO', 'MULYA FAMILI', 'JL CIBOGO', 'PRODUKSI COMRING', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'KUNINGAN', 'PERORANGAN', '2010', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(58, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '013B', '6', '4', 'MIKRO', 'ENGKOM KOMARIAH', 'JL CIBOGO NO 60', 'PRODUKSIKERUPUK MENTAH', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'BANDUNG', 'PERORANGAN', '1990', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(59, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '013B', '6', '4', 'MIKRO', 'MUMUM MUIN', 'JL CIBOGO', 'PRODUKSI KUSEN', 'PERDAGANGAN DARI PRODUKSI SEND', 'LAKI LAKI', 'JAWA BARAT', 'SUMEDANG', 'PERORANGAN', '2008', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(60, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '013B', '6', '4', 'MIKRO', 'UMI KALSUM', 'JL CIBOGO NO 61', 'PRODUKSI KRIPIK PISANG & SISTIK', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'DEPOK', 'PERORANGAN', '2013', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(61, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '037B', '6', '5', 'MIKRO', 'ANEKA PEYEK OTI', 'KIHAPIT TIMUR', 'PRODUKSI PEYEK', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA TENGAH', 'BANYUMAS', 'PERORANGAN', '2002', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(62, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '012B', '6', '5', 'MIKRO', 'ROGAYATI', 'JL CIBOGO NO 39', 'PRODUKSI BALA-BALA', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2000', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(63, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '011B', '6', '6', 'MIKRO', 'ENI', 'JL CIBOGO', 'PRODUKSI KRUPUK MENTAH BESOT', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '1981', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(64, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '011B', '6', '6', 'MIKRO', 'TOHIR', 'JL CIBOGO NO 6', 'PRODUKSINJOK/KURSI TAMU', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '1990', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(65, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '010B', '6', '7', 'MIKRO', 'TITA PUSPITA SARI', 'JL CIBOGO NO 9', 'PRODUKSI KUE BOLU', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'BANDUNG', 'PERORANGAN', '1998', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(66, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '010B', '6', '7', 'MIKRO', 'TINI', 'JL CIBOGO NO 36', 'PRODUKSI GORENGAN', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2013', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(67, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '015B', '6', '8', 'MIKRO', 'HENI', 'JL CIBOGO', 'PRODUKSI BALA-BALA', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'BANDUNG', 'PERORANGAN', '2006', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(68, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '015B', '6', '8', 'MIKRO', 'TATI TARDIYAH', 'JL CIBOGO NO 52', 'PRODUKSI KRUPUK MENTAH BESOT', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'BANDUNG', 'PERORANGAN', '1990', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(69, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '009B', '7', '1', 'MIKRO', 'ANGSIH', 'JL CIBOGO', 'GORENGAN', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAAT', 'CIMAHI', 'PERORANGAN', '2002', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(70, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '009B', '7', '1', 'MIKRO', 'SIITI NURAISAH', 'JL CIBOGO 9', 'PRODUKSI BASRENG KERING', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2003', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(71, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '008B', '7', '3', 'MIKRO', 'TITIN SURTINI', 'JL CIBOGO 3/136', 'PRODUKSI CIMOL', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2007', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(72, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '008B', '7', '3', 'MIKRO', 'ENTIN FATIMAH', 'JL CIBOGO NO 39', 'PRODUKSI KRUPUK SEBLAK SUPER PEDAS', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'BANDUNG', 'PERORANGAN', '2004', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(73, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '008B', '7', '3', 'MIKRO', 'CICIH', 'JL CIBOGO NO 54', 'PRODUKSI KRUPUK MENTAH BESOT', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '1990', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(74, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '008B', '7', '3', 'MIKRO', 'YAYAT ROCHAYATI', 'JL CIBOGO NO 6', 'PRODUKSI KRUPUK MENTAH BESOT', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '1990', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(75, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '006B', '7', '4', 'MIKRO', 'RUKUN', 'JL COBPGP RAYA', 'PRODUKSI SPRING BED', 'INDUSTRI', 'LAKI LAKI', 'JAWA TENGAH', 'BANYUMAS', 'PERORANGAN', '2000', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(76, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '006B', '7', '4', 'MIKRO', 'SAUDAH', 'JL CIBOGO RAYA 205A', 'PRODUKI GORENGAN', 'PERDAGANGAN DARI PRODUKSI SEND', 'LAKI LAKI', 'JAWA TENGAH', 'PURWEREJO', 'PERORANGAN', '2000', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(77, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '006B', '7', '4', 'MIKRO', 'UNANG', 'JL CIBOGO NO 28', 'PRODUKSI GERENGAN PEYE', 'PERDAGANGAN DARI PRODUKSI SEND', 'LAKI LAKI', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '1996', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(78, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '006B', '7', '4', 'MIKRO', 'ENTIN ROSTINI', 'JL CIBOGO NO 32', 'PRODUKSI SISTIK GRG SALE&BOLU PISANG', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'GARUT', 'PERORANGAN', '1986', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(79, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '006B', '7', '4', 'MIKRO', 'AR-FAN COLLECTION', 'JL CIBOGO NO 181', 'PENJAHIT', 'INDUSTRI', 'LAKI LAKI', 'LAMPUNG', 'BANDAR LAMPUNG', 'PERORANGAN', '2011', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(80, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '006B', '7', '4', 'MIKRO', 'SIOMAY MANG UDIN', 'JL CIBOGO', 'PRODUKSI SIOMAY', 'PERDAGANGAN DARI PRODUKSI SEND', 'LAKI LAKI', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2003', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(81, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '005B', '7', '5', 'MIKRO', 'UNANG', 'JL CIBOGO NO 94', 'PRODUKSI JAMUR TIRAM', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA TENGAH', 'TEGAL', 'PERORANGAN', '2009', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(82, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '005B', '7', '5', 'MIKRO', 'SRI HENI MULYANI', 'JL CIBOGO NO 80', 'PENJAHIT', 'INDUSTRI', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2014', 'TIDAK', 'YA', 'BAHAN BAKU DAN MAKLOON', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(83, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '005B', '7', '5', 'MIKRO', 'IHWAN', 'JL CIBOGO', 'PEMBUATAN PAGAR MINIMALIS', 'PERDAGANGAN DARI PRODUKSI SEND', 'LAKI LAKI', 'JAWA TENGAH', 'MAGELANG', 'PERORANGAN', '2012', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(84, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '005B', '7', '6', 'MIKRO', 'YANA', 'JL CIBOGO NO 62', 'SABLON', 'PERDAGANGAN DARI PRODUKSI SEND', 'LAKI LAKI', 'JAWA BARAT', 'MAJALENGKA', 'PERORANGAN', '2012', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(85, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '040B', '8', '1', 'MIKRO', 'EDI SUKAWIT', 'JL. KIHAPIT TIMUR RT 01/08 NO2', 'PRODUKSI KERUDUNG/MUKENA', 'PERDAGANGAN DARI PRODUKSI SEND', 'LAKI LAKI', 'JAWA TENGAH', 'PURWOREJO', 'PERORANGAN', '2000', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(86, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '040B', '8', '2', 'KECIL', 'KARTIKAH GORENGAN', 'JL. KUBA MIHARJA KIHAPIT TIMUR', 'JUAL GORENGAN', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2012', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(87, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '040b', '8', '2', 'KECIL', 'GORENGAN UKASIH', 'JL. KIHAPIT TIMUR RT 02/08', 'MEMBUAT GORENGAN', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '1993', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(88, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '038B', '8', '3', 'MIKRO', 'EEM', 'JL KIHAPIT TIMUR NO 272', 'PRODUKSI ULEN, BALA-BALA, COMRO', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '1996', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(89, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '038B', '8', '3', 'MIKRO', 'DINAY', 'JL KIHAPIT TIMUR', 'PISANG', 'PERDAGANGAN DARI PRODUKSI SEND', 'LAKI LAKI', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2000', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(90, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '037B', '8', '5', 'MIKRO', 'MIA KUE', 'KIHAPIT TIMUR', 'PRODUKSI KUE', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2010', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(91, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '039B', '8', '6', 'MIKRO', 'MIMIN KUE', 'KIHAPIT TIMUR RT 06/08', 'MEMBUAT BOLU DAN CHESTICK', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'BANDUNG', 'PERORANGAN', '2010', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(92, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '038B', '8', '9', 'MIKRO', 'MAMAT GORENGAN', 'KIHAPIT TIMUR', 'PRODUKSI GORENGAN', 'PERDAGANGAN DARI PRODUKSI SEND', 'LAKI LAKI', 'JAWA BARAT', 'BANDUNG', 'PERORANGAN', '2002', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(93, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '039b', '8', '10', 'MIKRO', 'MARTINI KUE', 'KIHAPIT TIMUR RT 10/08', 'MEMBUAT KUE', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA TENGAH', 'BOYOLALI', 'PERORANGAN', '2013', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(94, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '032B', '9', '2', 'KECIL', 'SRI MINTEN', 'JL KERKOP GG BP WARGA', 'PRODUKSI PEYE', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA TIMUR', 'NGAWI', 'PERORANGAN', '2000', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(95, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '032B', '9', '2', 'KECIL', 'ZUL SANDI', 'KIHAPIT BARAT', 'PRODUKSI KEMEJA JEANS', 'PERDAGANGAN DARI PRODUKSI SEND', 'LAKI LAKI', 'SUMSEL', 'PALEMBANG', 'PERORANGAN', '2005', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(96, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '032B', '9', '2', 'KECIL', 'LUES COLLECTION', 'GG BP WARGA NO 74/68', 'PRODUKSI PAKAIAN/KERUDUNG', 'INDUSTRI', 'PEREMPUAN', 'JAWA TENGAH', 'BANYUMAS', 'PERORANGAN', '2009', 'TIDAK', 'YA', 'MAKLOON', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(97, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '033B', '9', '2', 'KECIL', 'CV MULTI GUNA', 'JL KERKOP', 'MENEROMA/MEMBUAT PESANAN BUBUT', 'INDUSTRI', 'LAKI LAKI', '', '', 'CV', '0', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(98, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '027B', '9', '4', 'KECIL', 'CV OMEGA', 'KIHAPIT', 'PRODUKSI BATANG SEPEDA', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'BANDUNG', 'CV', '2012', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(99, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '027B', '9', '4', 'KECIL', 'HAKA ASTON', '', 'HOTMIX', 'INDUSTRI', 'LAKI LAKI', '', '', 'PT', '1998', 'TIDAK', 'YA', 'BAHAN BAKU', 'YA', 'PEMKOT CIMAHI', 'TIDAK', '', 'TIDAK', ''),
(100, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '025B', '9', '4', 'KECIL', 'KIHAPIT TAYLOR', 'KIHAPIT BARAT', 'MENJAHIT', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '1979', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(101, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '026B', '9', '4', 'MIKRO', 'KONVEKSI BAJU ANAK', 'KIHAPIT BARAT', 'NAK', 'INDUSTRI', 'PEREMPUAN', 'JAWA BARAT', 'GARUT', 'PERORANGAN', '2013', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(102, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '026B', '9', '4', 'BESAR', 'PENGGILINGAN PET/AQUA', 'KIHAPIT', 'PENGGILINGAN PET/BOTOL AQUA BEKAS', 'INDUSTRI', 'LAKI LAKI', 'DKI JAKARTA', 'JAKARTA', 'PERORANGAN', '2003', 'TIDAK', 'YA', 'BAHAN BAKU', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(103, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '031B', '9', '5', 'MENENGAH', 'CITA LAKSANA', 'JL KIHAPIT BARAT', 'BENGKEL LAS', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'CIAMIS', 'PERORANGAN', '2009', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(104, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '030B', '9', '6', 'MENENGAH', 'MUFAKAT GYPSUM', 'JL KERKOP', 'PRODUKSI GYPSUM, BATU NISAN, LIS PROFIL', 'PERDAGANGAN DARI PRODUKSI SEND', 'LAKI LAKI', 'JAWA TIMUR', 'PAMEKASAN', 'PERORANGAN', '2000', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(105, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '029B', '9', '6', 'KECIL', 'OTANG', 'JL KIHAPIT BARAT', 'MENJAHIT BAJU, CELANA', 'PERDAGANGAN DARI PRODUKSI SEND', 'LAKI LAKI', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '1970', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(106, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '030B', '9', '6', 'KECIL', 'BATU BATA HAMZAH', 'RT 09/RW06', 'PERCETAKAN BATU BATA', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '1980', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(107, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '024B', '9', '6', 'MENENGAH', '', 'JL KERKOP KIHAPIT BARAT', 'PRODUKSI KUE', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'GARUT', 'PERORANGAN', '2008', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(108, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '028B', '9', '7', 'KECIL', 'RUSMIYATI', 'JL KIHAPIT BARAT', 'PRODUKSI MOLEN', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2005', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(109, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '028B', '9', '7', 'KECIL', 'OYA SUPRIHATI', 'JL KIHAPIT BARAT', 'PRODUKSI GORANGAN', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '0', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(110, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '028B', '9', '7', 'KECIL', 'SRI UTARI', 'JL KIHAPIT BARAT', 'PRODUKSI GORENGAN', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '0', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(111, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '064B', '9', '12', 'MIKRO', 'NURDIN', '', 'PRODUKSI KUE', 'PERDAGANGAN DARI PRODUKSI SEND', 'LAKI LAKI', 'JAWA BARAT', 'TASIKMALAYA', 'PERORANGAN', '2012', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(112, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '002B', '10', '2', 'MIKRO', 'GORENGAN DARYANI', 'CIREUNDEU', 'GORENGAN', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2005', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(113, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '002B', '10', '2', 'MIKRO', 'RANGENING SINGKONG', 'CIRENDEU', 'PRODUKSI RANGENING', 'INDUSTRI', 'PEREMPUAN', 'KALIMANTAN', '', 'PERORANGAN', '2010', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(114, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '002B', '10', '2', 'KECIL', 'RASI COOKIES', 'CIREUDEU', 'PRODUKSI PENGANAN BERBAHAN DASAR RASI', 'INDUSTRI', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2009', 'TIDAK', 'TIDAK', '', 'YA', 'PEMKOT CIMAHI', 'TIDAK', '', 'TIDAK', ''),
(115, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '003B', '10', '3', 'MENENGAH', 'CV PURNAMA TEHNIK', 'JL KERKOF NO 49', 'JASA TEHNIK (ENGKEL) SERVIS', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'CIMAHI', 'CV', '2013', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(116, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '003B', '10', '3', 'MIKRO', 'TAILOR CIREUNDEU RAYA', 'CIREUNDEU', 'MENJAHIT', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '1987', 'TIDAK', 'TIDAK', '', 'YA', 'PEMKOT CIMAHI', 'TIDAK', '', 'TIDAK', ''),
(117, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '003B', '10', '3', 'MIKRO', 'PENJAHIT', 'CIREUNDEU', 'MENJAHIT', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2007', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(118, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '003B', '10', '3', 'KECIL', 'RANGENING SINGKONG', 'CIREUNDEU', 'PRODUKSI RANGENING', 'INDUSTRI', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2000', 'TIDAK', 'TIDAK', '', 'YA', 'PEMKOT CIMAHI', 'TIDAK', '', 'TIDAK', ''),
(119, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '003B', '10', '3', 'MIKRO', 'AZ-ZAHRA COOKIES', 'CIREUNDEU', 'PRODUKSI KUE KERING', 'INDUSTRI', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2010', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(120, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '003B', '10', '3', 'MIKRO', 'PENGRAJIN RENGENING', 'CIREUNDEU', 'PRODUKSI RENGENING', 'INDUSTRI', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2012', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(121, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '003B', '10', '3', 'MIKRO', 'GORENGAN', 'CIREUNDEU', 'PRODUKSI GORENGAN', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '0', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(122, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '003B', '10', '3', 'MIKRO', 'ROSITA', 'CIREUNDEU', 'MENJAHIT', 'INDUSTRI', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '1980', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(123, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '001B', '10', '4', 'MIKRO', 'ES GOYOBOD', 'POJOK CIREUNDEU', 'PRODUKSI GOYOBOD', 'PERDAGANGAN DARI PRODUKSI SEND', 'LAKI LAKI', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2000', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(124, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '001B', '10', '4', 'MIKRO', 'ES CENDOL', 'CIREUNDEU', 'PRODUKSI CENDOL', 'PERDAGANGAN DARI PRODUKSI SEND', 'LAKI LAKI', 'JAWA BARAT', 'BANDUNG BARAT', 'PERORANGAN', '1956', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(125, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '003B', '10', '5', 'KECIL', 'PERLENGKAPAN BAYI', 'CIREUNDEU', 'PRODUKSI PERLENGKAPAN BAYI', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'BANDUNG', 'PERORANGAN', '2010', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'YA', '50', 'TIDAK', ''),
(126, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '090B', '11', '5', 'MIKRO', 'BRIAN', 'JL. WIDYA BAKTI NO. 16 05/01', 'KONVEKSI', 'INDUSTRI', 'PEREMPUAN', 'JAWA BARAT', 'TASIKMALAYA', 'PERORANGAN', '2000', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(127, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '090B', '11', '5', 'MIKRO', 'BOGARASA', 'JL. PELITA BAKTI NO. 8', 'PEMBUATAN KUE BASAH', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'CIAMIS', 'PERORANGAN', '1992', 'TIDAK', 'TIDAK', '', 'YA', 'PEMKOT CIMAHI', 'TIDAK', '', 'TIDAK', ''),
(128, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '088B', '11', '8', 'MIKRO', 'MBAK ATI', 'JL. BAKTI MAS 2 BLOK B 13', 'MEMBUAT BANDENG PRESTO', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'BANDUNG', 'PERORANGAN', '2013', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(129, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '071B', '12', '2', 'KECIL', 'REKAYASA TEKNOLOGI TEPAT GUNA', 'JL GAJAH 7', 'ALAT MAINAN', 'INDUSTRI', 'LAKI LAKI', 'JAWA TIMUR', 'KEDIRI', 'PERORANGAN', '1995', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(130, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '071B', '12', '2', 'MIKRO', 'WAHYU TAILOR', 'JL GAJAH 4 NO 5', 'JAHIT BAJU PRIA WANITA', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'BANDUNG', 'PERORANGAN', '2004', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(131, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '070B', '12', '4', 'MIKRO', 'PEYE BU ATUN', 'JL GAJAH 11 NO 4', 'REMPEYEK', 'INDUSTRI', 'PEREMPUAN', 'JAWA TENGAH', 'SEMARANG', 'PERORANGAN', '1990', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(132, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '072b', '12', '5', 'MIKRO', 'barokah tailor', 'KOMP SUAKAS JL GAJAH 15', 'PENJAHIT', 'INDUSTRI', 'PEREMPUAN', 'JAWA TENGAH', 'TEMANGGUNG', 'PERORANGAN', '1990', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(133, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '072B', '12', '5', 'MIKRO', 'MAYO DESAIN', 'KOMP SUAKA JL GAJAH 16', 'BAJU MUSLIM', 'INDUSTRI', 'LAKI LAKI', 'SUMSEL', 'PALEMBANG', 'PERORANGAN', '2013', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(134, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '072B', '12', '5', 'MIKRO', 'EDI TAILOR', 'KOMP SUAKA INDAH JL GAJAH', 'MAKLOON CELANA', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'BANDUNG', 'PERORANGAN', '2002', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(135, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '070B', '12', '6', 'MIKRO', 'ELIS TAILOR', 'JL SUAKA 3 NO 22', 'PENJAHIT', 'INDUSTRI', 'PEREMPUAN', 'JAWA BARAT', 'BANDUNG', 'PERORANGAN', '2006', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(136, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '072B', '12', '7', 'MIKRO', 'TAILOR ADAM', 'JL GAJAH 13', 'BIKIN GAMIS', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'KARAWANG', 'PERORANGAN', '1990', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(137, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '072B', '12', '7', 'MIKRO', 'LONTONG MARSIH', 'KOMP SUAKA GAJAH 13', 'LONTONG LEMPER', 'INDUSTRI', 'PEREMPUAN', 'JAWA TENGAH', 'WONOGIRI', 'PERORANGAN', '2001', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(138, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '072B', '12', '7', 'MIKRO', 'KONVEKSI RUBAI', 'KOMP SUAKA GAJAH 13 NO 7', 'MAKLOON KAOS', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2014', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(139, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '072B', '12', '7', 'MIKRO', 'IA TOP', 'KOMP SUAKA JL GAJAH 12', 'KAKI PALSU', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'BANDUNG', 'PERORANGAN', '2007', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(140, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '072B', '12', '7', 'MIKRO', 'ALIA', '', 'DOMPET TAS', 'INDUSTRI', 'PEREMPUAN', 'JAWA BARAT', 'BANDUNG', 'PERORANGAN', '2013', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(141, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '096B', '13', '5', 'MIKRO', 'IIN SOEMARNI', 'KOMP. NUSA PERSADA NO. 3', 'MENERIMA JAHITAN', 'INDUSTRI', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2012', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(142, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '096b', '13', '5', 'MIKRO', 'PERSADA GRAFIKA', 'KOMP. NUSA PERSADA K5', 'KONFEKSI', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '1997', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(143, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '096B', '13', '5', 'MIKRO', 'HERLINA TAILOR', 'KOMP. NUSA PERSADA N. 15', 'MENERIMA JAHITAN', 'INDUSTRI', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2002', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(144, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '019B', '14', '6', 'KECIL', 'DIAH SRI BUDIATI', 'CIBOGO PERMAI B VI', 'PRODUKSI SARUNG BANTAL', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'BALI', 'DENPASAR', 'PERORANGAN', '2012', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(145, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '019B', '14', '6', 'KECIL', 'AI YATI', 'CIBOGO PERMAI B iii NO 28', 'GORENGAN', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'GARUT', 'PERORANGAN', '2012', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(146, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '631', '15', '1', 'KECIL', 'MEMBUAT KUE BASAH', 'JL. GAJAH PERMAI RT 05/15', 'MEMBUAT KUE BASAH', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'BANDUNG', 'PERORANGAN', '2012', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(147, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '089B', '15', '3', 'MIKRO', 'JUALAN KUE BASAH DAN KERING', 'JL. GAJAH PERMAI RT 03/15', 'MEMBUAT KUE BOLU', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'BANDUNG', 'PERORANGAN', '2011', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(148, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '089B', '15', '3', 'MIKRO', 'JUALAN KUE BASAH', 'JL. GAJAH PERMAI RT 03/15', 'MEMBUAT DONAT,MOLEN,CILOK,GEMBLONG', 'PERDAGANGAN DARI PRODUKSI SEND', 'LAKI LAKI', 'JAWA BARAT', 'BANDUNG', 'PERORANGAN', '2011', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(149, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '066B', '16', '2', 'KECIL', 'MOMMYINDO', 'PONDOK CIPTA MAS RT 02/16', 'SEBLAK BASAH INSTAN', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'BANDUNG', 'PT', '2012', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(150, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '065B', '16', '3', 'KECIL', 'SIOMAY MANG UDIN', 'PONDOK CIPTA MAS RT 03/16', 'SIOMAY', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '1992', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(151, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '066B', '16', '5', 'MENENGAH', 'CIPTA MAS SEJAHTERA', 'GG. H. MANSYUR 14 RT 02/20', 'MAKLOON KERUDUNG', 'INDUSTRI', 'LAKI LAKI', 'JAWA TIMUR', 'MAGETAN', 'PERORANGAN', '1995', 'TIDAK', 'YA', 'MAKLOON', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(152, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '067B', '16', '6', 'MIKRO', 'PENJAHIT UCU', 'PONDOK CIPTA MAS RT 06/16', 'MENJAHIT PAKAIAN', 'INDUSTRI', 'PEREMPUAN', 'JAWA BARAT', 'MAJALENGKA', 'PERORANGAN', '1998', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(153, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '067B', '16', '7', 'MIKRO', 'POCI MAS CIPTA MANDIRI', 'PONDOK CIPTA MAS RT 07/16', 'PRODUKSI KENDI MAS HERBAL/JAMU', 'INDUSTRI', 'LAKI LAKI', 'JAWA TENGAH', 'CILACAP', 'PERORANGAN', '1999', 'TIDAK', 'TIDAK', '', 'YA', 'PEMPROV JAWA BARAT', 'TIDAK', '', 'TIDAK', ''),
(154, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '065B', '16', '8', 'MIKRO', 'M. ISHAK KUE', 'PONDOK CIPTA MAS RT 08/16', 'PRODUKSI KUE BASAH', 'PERDAGANGAN DARI PRODUKSI SEND', 'LAKI LAKI', 'JAWA BARAT', 'BOGOR', 'PERORANGAN', '2006', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(155, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '056B', '16', '10', 'KECIL', 'QUT QUT', 'PONDOK CIPTA MAS NO. 2', 'ROTI TAWAR', 'INDUSTRI', 'LAKI LAKI', 'JAWA TIMUR', 'MAGETAN', 'PERORANGAN', '2003', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(156, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '021B', '17', '1', 'MIKRO', 'DONAT CENAT CENUT', 'TMN BUKIT CIBOGO BLOK C17 NO 3', 'PRODUKSI DONAT', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'BANDUNG', 'PERORANGAN', '2012', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(157, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '021B', '17', '1', 'MIKRO', 'HOUSE OF STAYA', 'TMN BUKIT CIBOGO BLOK C17 NO 2', 'MENJJAHIT PAKAIAN', 'INDUSTRI', 'PEREMPUAN', 'JAWA TIMUR', 'JOMBANG', 'PERORANGAN', '1992', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(158, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '021B', '17', '1', 'MIKRO', 'RISDWIYONO', 'TMN BUKIT CIBOGO BLOK C17 NO 7', 'PENJAHIT', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2000', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(159, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '021B', '17', '1', 'MIKRO', 'SITI SUHAENI', 'TMN BUKIT CIBOGO BLOK A16 NO11', 'HANDY CRAFT', 'INDUSTRI', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2007', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(160, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '021B', '17', '1', 'MIKRO', 'ES KACANG HIJAU', 'TMN BUKIT CIBOGO BLOK A16 NO 9', 'PRODUKSI ES LILIN KACANG HIJAU', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAAT', 'CIANJUR', 'PERORANGAN', '2011', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(161, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '021B', '17', '1', 'MIKRO', 'SIPPLUS', 'TMN BUKIT CIBOGO BLOK A16 NO 4', 'PRODUKSI TAS', 'INDUSTRI', 'PEREMPUAN', 'JAWA BARAT', 'BANDUNG', 'PERORANGAN', '2002', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(162, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '021B', '17', '2', 'MIKRO', 'KUSWANTO', 'TMN BUKIT CIBOGO BLOK C10', 'PRODUKSI MATRES', 'INDUSTRI', 'LAKI LAKI', 'JAWA TENGAH', 'KEBUMEN', 'PERORANGAN', '2005', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(163, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '021B', '17', '2', 'MIKRO', 'HARIS TEKHNIK', 'TMN BUKIT CIBOGO A9 NO 8', 'ALAT DAN MESIN FARMASI', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'GARUT', 'PERORANGAN', '2014', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(164, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '021B', '17', '2', 'MIKRO', 'NAORI BAKERY, DONUTS & CAKE', 'TMN BUKIT CIBOGO BLOK A9 NO 5', 'ANEKA BAKERY', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'BANDUNG', 'PERORANGAN', '2014', 'TIDAK', 'TIDAK', '', 'YA', 'PEMKOT CIMAHI', 'TIDAK', '', 'TIDAK', ''),
(165, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '021B', '17', '2', 'MIKRO', 'PITER', 'TMN BUKIT CIBOGO BLOK A9 NO 1', 'BENGKEL BUBUT', 'INDUSTRI', 'LAKI LAKI', 'SUMATERA UTARA', 'SIBOLGA', 'PERORANGAN', '2000', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(166, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '021B', '17', '2', 'MIKRO', 'NOGASHINTA', 'TMN BUKIT CIBOGO BLOK C10 NO15', 'PRODUKSI NOGA KACANG', 'PERDAGANGAN DARI PRODUKSI SEND', 'LAKI LAKI', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2003', 'TIDAK', 'TIDAK', '', 'YA', 'PEMKOT CIMAHI', 'TIDAK', '', 'TIDAK', ''),
(167, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '024B', '17', '3', 'MIKRO', 'NANDANG', 'TMN BUKIT CIBOGO BLOK A6 NO 51', 'KONVEKSI', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'TASIKMALAYA', 'PERORANGAN', '2012', 'TIDAK', 'YA', 'MAKLOON', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(168, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '024B', '17', '3', 'MIKRO', 'BULGARIA', 'TMN BUKIT CIBOGO BLOK A6 NO 16', 'PRODUKSI YOGHURT', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'CIANJUR', 'PERORANGAN', '2005', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(169, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '024B', '17', '3', 'MIKRO', 'REVANA FASHION', 'TMN BUKIT CIBOGO BLOK A7 NO 10', 'MENJAHIT', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'TASIKMALAYA', 'PERORANGAN', '2013', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(170, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '024B', '17', '3', 'MIKRO', 'CV EWANGGA', 'TMN BUKIT CIBOGO BLOK A6 NO 1', 'KONVEKSI', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'KUNINGAN', 'CV', '1996', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(171, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '024B', '17', '3', 'MIKRO', 'SHANDY''S', 'TMN BUKIT CIBOGO C5 NO 7', 'OLAHAN PANGAN/ANEKA KUE', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'BANDUNG', 'PERORANGAN', '2010', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(172, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '024B', '17', '3', 'MIKRO', 'PONDOK JAHIT YURI SEKAR', 'TMN BUKIT CIBOGO BLOK A6 NO 15', 'MENJAHIT', 'INDUSTRI', 'PEREMPUAN', 'BANKA BELITUNG', 'TANJUNG PANDAN', 'PERORANGAN', '2011', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(173, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '025B', '17', '4', 'MIKRO', 'ROYANTO', 'TAMAN BUKIT CIBOGO BLOK A8 NO1', 'PRODUKSI AKSESORIS RAMBUT', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'GARUT', 'PERORANGAN', '2010', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(174, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '025B', '17', '4', 'MIKRO', 'KRISNA TEKNIK', 'TAMAN BUKIT CIBOGO BLOK A7 N45', 'BENGKEL BUBUT', 'INDUSTRI', 'LAKI LAKI', 'JAWA TENGAH', 'SRAGEN', 'PERORANGAN', '2008', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(175, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '022B', '17', '5', 'MIKRO', 'JAMILAH', 'TMN BUKIR CIBOGO BLOK 11 NO44A', 'MENJAHIT', 'INDUSTRI', 'PEREMPUAN', 'JAWA TENGAH', 'PURWOKERTO', 'PERORANGAN', '1980', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(176, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '022B', '17', '5', 'MIKRO', 'CH SUNARSIH', 'TMB BUKIT CIBOGO BLOK A11 NO32', 'MENJAHIT', 'INDUSTRI', 'PEREMPUAN', 'D I YOGYAKARTA', 'GUNUNG KIDUL', 'PERORANGAN', '1996', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(177, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '022B', '17', '6', 'MIKRO', 'POPY DARSONO', 'TMN BUKIT CIBOGO BLOK A12 NO32', 'PRODUKSI BALA-BALA', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA TENGAH', 'TEMANGGUNG', 'PERORANGAN', '2011', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '');
INSERT INTO `ekonomi_umkm` (`id_umkm`, `kota`, `kecamatan`, `kelurahan`, `nbs`, `rw`, `rt`, `klasifikasi_perusahaan`, `nama_perusahaan`, `alamat_perusahaan`, `kegiatan_utama`, `jenis_usaha`, `jk_pengusaha`, `prov_tempat_lahir_pengusaha`, `kota_tempat_lahir_pengusaha`, `bentuk_badan_hukum`, `tahun_mulai_operasi`, `gabung_paguyuban`, `bermitra`, `bentuk_kemitraan`, `pembinaan_pemerintah`, `pemberi_pembinaan`, `eksport`, `persentase_eksport`, `import`, `persentase_import`) VALUES
(178, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '023B', '17', '7', 'MIKRO', 'MIFTAHUL HADI', 'TMN BUKIT CIBOGO BLOK A14 NO 8', 'BENGKEL BUBUT', 'INDUSTRI', 'LAKI LAKI', 'JAWA TENGAH', 'TEGAL', 'PERORANGAN', '2013', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(179, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '023B', '17', '7', 'MIKRO', 'IBU LENI', 'TMN BUKIT CIBOGO BLOK A14 NO13', 'PRODUKSE KUE-KUE BASAH', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'BANDUNG', 'PERORANGAN', '2000', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(180, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '024B', '17', '9', 'KECIL', 'FORSWAN', 'TMN BUKIT CIBOGO BLOK A2 NO 10', 'PRODUKSI POPOK BAYI', 'INDUSTRI', 'LAKI LAKI', 'JAWA TIMUR', 'NGANJUK', 'PERORANGAN', '2007', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(181, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '024B', '17', '9', 'MIKRO', 'CV FUJIYANA TEKNIK', 'TMN BUKIT CIBOGO A2 NO 7', 'BENGKEL BUBUT', 'INDUSTRI', 'LAKI LAKI', 'JAWA TENGAH', 'PURBALINGGA', 'CV', '2009', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(182, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '024B', '17', '9', 'MIKRO', 'PRIMA TEKHNIK 2', 'TMN BUKIT CIBOGO BLOK A1 NO270', 'BENGKEL BUBUT', 'INDUSTRI', 'LAKI LAKI', 'JAWA TENGAH', 'MAGELANG', 'PERORANGAN', '2012', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(183, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '024B', '17', '9', 'KECIL', 'PRIMA TEKNIK 1', 'TMN BUKIT CIBOGO BLOK A1 NO27A', 'BENGKEL BUBUT', 'INDUSTRI', 'LAKI LAKI', 'JAWA TENGAH', 'MAGELANG', 'PERORANGAN', '1995', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(184, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '024B', '17', '9', 'MIKRO', 'MITRA TEKNIK', 'TMN BUKIT CIBOGO BLOK A1 NO 26', 'PRESS KARET', 'INDUSTRI', 'LAKI LAKI', 'DI YOGYAKARTA', 'GUNUNG KIDUL', 'PERORANGAN', '2000', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(185, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '024B', '17', '9', 'MIKRO', 'YOGHURT SUTRISNO', 'TMN BUKIT CIBOGO BLOK A1 NO 7', 'PRODUKSI YOGHURT', 'PERDAGANGAN DARI PRODUKSI SEND', 'LAKI LAKI', 'JAWA BARAT', 'BANDUNG', 'PERORANGAN', '2005', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(186, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '094B', '18', '1', 'MIKRO', 'PENJAHIT UMAR', 'JL. SADARMANAH RT 01/18', 'MEMBUAT PAKAIAN', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2010', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(187, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '093B', '18', '2', 'MIKRO', 'TOKO OBRAS', 'JL. SADARMANAH RT 02/08', 'MENGOBRAS PAKAIAN', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'BANDUNG', 'PERORANGAN', '1979', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(188, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '093B', '18', '2', 'MIKRO', 'PENJAHIT LAKSANA', 'JL. SADARMANAH RT 02/18', 'MENJAHIT PAKAIAN', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '1984', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(189, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '093B', '18', '2', 'MIKRO', 'PENJAHIT ARIS', 'JL. SADARMANAH RT 02/18', 'MENJAHIT PAKAIAN', 'INDUSTRI', 'LAKI LAKI', 'JAWA TENGAH', 'BANYUMAS', 'PERORANGAN', '1988', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(190, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '092B', '18', '3', 'MIKRO', 'PENJAHIT MUHTAR', 'JL. SADAR MANAH RT 03/18', 'MENJAHIT PAKAIAN', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2011', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(191, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '051B', '19', '1', 'MIKRO', 'ALAMIN COLECTION', 'KP CIBOGO', 'KAOS KERUDUNG', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2004', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(192, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '049B', '19', '2', 'MIKRO', 'ASEP LAS', 'JL CIBOGO', 'NGELAS MOBIL MOTOR', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2013', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(193, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '049B', '19', '2', 'MIKRO', 'DANA YUDA', 'JL CIBOGO', 'SANGKAR BURUNG', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2013', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(194, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '049B', '19', '2', 'MIKRO', 'BAHIS TAILOR', 'JL CIBOGO NO 28', 'PENJAHIT', 'INDUSTRI', 'LAKI LAKI', 'JAWA TENGAH', 'CILACAP', 'PERORANGAN', '2007', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(195, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '051B', '19', '3', 'MIKRO', 'BENGKEL LAS', 'JL CIBOGO', 'LAS', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'TASIKMALAYA', 'PERORANGAN', '2005', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(196, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '050B', '19', '4', 'MIKRO', 'BENGKEL LAS', 'JL CIBOGO', 'PAGAR', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'BANDUNG', 'PERORANGAN', '2004', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(197, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '050B', '19', '4', 'MIKRO', 'PIGURA PRASTOWO', 'JL CIBOGO', 'BIKIN PIGURA DAN KUNINGAN', 'INDUSTRI', 'LAKI LAKI', 'JAWA BARAT', 'SUMEDANG', 'PERORANGAN', '2007', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(198, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '054B', '20', '1', 'MIKRO', 'BALA BALA', 'JL. KERKOF RT 01/20', 'MEMBUAT BALA BALA DAN MENJUAL', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2005', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(199, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '047B', '20', '3', 'MIKRO', 'BALA BALA', 'JL. KERKOF RT 05/20', 'MEMBUAT DAN MENJUAL BALA BALA', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PT', '2010', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(200, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '048B', '20', '4', 'MIKRO', 'GORENG BALA BALA', 'JL. KIHAPIT TIMUR RT 04/20', 'MEMBUAT DAN MENJUAL BALA BALA', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '1995', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(201, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '046B', '20', '8', 'MIKRO', 'CIRENG', 'KP. KIHAPIT RT 08/20', 'MEMBUAT DAN MENJUAL CIRENG', 'PERDAGANGAN DARI PRODUKSI SEND', 'LAKI LAKI', 'JAWA BART', 'CIMAHI', 'PERORANGAN', '2006', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(202, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '041b', '20', '10', 'KECIL', 'COMRING', 'JL. KIHAPIT TIMUR RT 10/20', 'MEMBUAT DAN MENJUAL COMRING SENDIRI', 'PERDAGANGAN DARI PRODUKSI SEND', 'LAKI LAKI', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '1994', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(203, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '041B', '20', '10', 'MIKRO', 'CIRENG ISI', 'JL. KIHAPIT TIMUR RT 10/20', 'MEMBUAT DAN MENJUAL CIRENG ISI SENIDIRI', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2009', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', ''),
(204, 'CIMAHI', 'CIMAHI SELATAN', 'LEUWIGAJAH', '820', '30', '20', 'MIKRO', 'LILIS ROSIDAH', 'KP. SARADAN RT 02/03', 'JUAL KUE BASAH', 'PERDAGANGAN DARI PRODUKSI SEND', 'PEREMPUAN', 'JAWA BARAT', 'CIMAHI', 'PERORANGAN', '2012', 'TIDAK', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '', 'TIDAK', '');

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
  `kategori_jalan` varchar(25) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `jalan`
--

INSERT INTO `jalan` (`id_jalan`, `rt`, `rw`, `alamat`, `panjang`, `lebar`, `kategori_jalan`, `ketersediaan_lahan`, `long_awal`, `long_akhir`, `lat_awal`, `lat_akhir`, `anggaran`, `sumber_data`, `tahun_usulan`, `ket`, `foto`, `dokumen`, `id_kategori`, `status_data_awal`, `status_verifikasi`, `status_sedang_dilaksanakan`, `status_sudah_dilaksanakan`, `status_tidak_dilaksanakan`) VALUES
(1, 2, 1, 'BAROS PASAR', '100', '3.5', '', '', '107.536467', '107.535556', '-6.896036', '-6.895890', 0, 'MUSRENBANG', 2015, '', '1_jalan_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(2, 5, 2, 'GANG MASKUDI I SADRAMANAH', '150', '1,5', '', '', '107.530776', '107.531231', '-6.900574', '-6.899815', 0, 'MUSRENBANG', 2015, '', '2_jalan_maskudi_I_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(3, 5, 2, 'GANG MASKUDI II SADARMANAH', '150', '1,5', '', '', '107.530574', '107.531025', '-6.900451', '-6.899727', 0, 'MUSRENBANG', 2015, '', '2_jalan_maskudi_II_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(4, 7, 3, 'TERUSAN KOMP ANEKA BAKTI', '93', '1.5', '', '', '107.525906', '107.526205', '-6.901495', '-6.900773', 0, 'MUSRENBANG', 2015, '', '3_jalan_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(5, 3, 4, 'CISALAK/ CURUG LEUNGSING', '75', '1.5', '', '', '107.531862', '107.526205', '-6.900504', '-6.900781', 0, 'MUSRENBANG', 2015, '', '4_jalan_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(6, 3, 5, 'Jl GANG AL WIAM KERKOF', '150', '1', '', '', '107.532406', '107.533315', '-6.903771', '-6.903814', 0, 'MUSRENBANG', 2015, '', '5_jalan_awal 2.JPG', NULL, 0, 1, 1, 0, 0, 0),
(7, 8, 6, 'CIBOGO LEUWIGAJAH', '70', '1,2', '', '', '107.530028', '107.532432', '-6.908518', '-6.908171', 0, 'MUSRENBANG', 2015, '', '6_jalan_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(8, 6, 7, 'CIBOGO LAMPING', '150', '4', '', '', '107.530045', '107.530271', '-6.913937', '-6.914618', 0, 'MUSRENBANG', 2015, '', '7_jalan_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(9, 8, 8, 'KIHAPIT TIMUR', '76', '1.5', '', '', '107.527034', '107.527087', '-6.909370', '-6.909040', 0, 'MUSRENBANG', 2015, '', '8_jalan_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(10, 4, 9, 'KIHAPIT BARAT', '250', '2.5', '', '', '107.522369', '107.523835', '-6.906067', '-6.907089', 0, 'MUSRENBANG', 2015, '', '9_jalan_awal 2.JPG', NULL, 0, 1, 1, 0, 0, 0),
(11, 5, 11, 'JLN KOMP EKA BHAKTI', '160', '3.5', '', '', '107.524905', '107.524407', '-6.898955', '-6.899479', 0, 'MUSRENBANG', 2015, '', '11_jalan_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(12, 1, 12, 'JL GAJAH I KOMP SUAKA', '100', '3', '', '', '107.528317', '107.528339', '-6.903837', '-6.903097', 0, 'MUSRENBANG', 2015, '', '1_12_jalan_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(13, 6, 12, 'JL GAJAH 6 KOMP SUAKA', '70', '4', '', '', '107.528199', '107.528247', '-6.902266', '-6.901568', 0, 'MUSRENBANG', 2015, '', '6_12_jalan_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(14, 4, 13, 'JL PROTOKOL NUSA PERSADA', '125', '3.75', '', '', '107.527513', '107.527695', '-6.898801', '-6.897735', 0, 'MUSRENBANG', 2015, '', '13_jalan_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(15, 3, 14, 'KOMP CIBOGO PERMAI', '396', '5', '', '', '107.527742', '107.528581', '-6.909623', '-6.909686', 0, 'MUSRENBANG', 2015, '', '14_jalan_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(16, 1, 15, 'JL UTAMA KOMP LEUWIGAJAH PERMAI', '325', '6', '', '', '107.523362', '107.522701', '-6.898806', '-6.900496', 0, 'MUSRENBANG', 2015, '', '15_jalan_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(17, 1, 16, 'JL BLOK A KOMP CIPTA MAS', '260', '7', '', '', '107.526662', '107.526803', '-6.904712', '-6.901999', 0, 'MUSRENBANG', 2015, '', '16_jalan_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(18, 5, 16, 'JL BLOK B4 KOMP CIPTA MAS', '600', '3.5', '', '', '107.525472', '107.524334', '-6.902556', '-6.902381', 0, 'MUSRENBANG', 2015, '', '5_16_jalan_awal_b6.JPG', NULL, 0, 1, 1, 0, 0, 0),
(19, 6, 16, 'JL BLOK B6 KOMP CIPTA MAS', '84', '6.5', '', '', '107.524827', '107.525536', '-6.901778', '-6.901790', 0, 'MUSRENBANG', 2015, '', '5_16_jalan_awal_b6.JPG', NULL, 0, 1, 1, 0, 0, 0),
(20, 3, 17, 'JL KOMP BUKIT CIBOGO', '228', '3', '', '', '107.524407', '107.526363', '-6.909827', '-6.910504', 0, 'MUSRENBANG', 2015, '', '228_3_17_jalan_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(21, 2, 17, 'JL KOMP BUKIT CIBOGO', '32', '3', '', '', '107.526363', '107.526443', '-6.910504', '-6.910256', 0, 'MUSRENBANG', 2015, '', '2_17_jalan_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(22, 3, 17, 'JL KOMP BUKIT CIBOGO', '37', '3', '', '', '107.525424', '107.525093', '-6.909861', '-6.909741', 0, 'MUSRENBANG', 2015, '', '3_17_jalan_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(23, 4, 17, 'JL KOMP BUKIT CIBOGO', '335', '3', '', '', '107.524484', '107.522701', '-6.909696', '-6.910411', 0, 'MUSRENBANG', 2015, '', '4_17_jalan_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(24, 4, 18, 'GG SAMBOJA NYEYEREAN', '100', '1', '', '', '107.525019', '107.525787', '-6.897658', '-6.897889', 0, 'MUSRENBANG', 2015, '', '4_18_jalan_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(25, 4, 19, 'JL HARAPAN INDAH', '245', '2.5', '', '', '107.530055', '107.528994', '-6.906712', '-6.906789', 0, 'MUSRENBANG', 2015, '', '19_jalan_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(26, 8, 20, 'JL KURBA MIHARJA', '125', '2.5', '', '', '107.526281', '107.526613', '-6.906847', '-6.905969', 0, 'MUSRENBANG', 2015, '', '20_jalan_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(27, 1, 1, 'JL BAROS PASAR LUWIGAJAH', '200', '3', '', '', '107.536496', '107.534680', '-6.896045', '-6.895454', 0, 'MUSRENBANG', 2013, '', '1_jalan_hasil.JPG', NULL, 0, 1, 1, 1, 1, 0),
(28, 4, 2, 'JL SADARMANAH LEUWIGAJAH', '275', '4', '', '', '107.531480', '107.531813', '-6.901185', '-6.900763', 0, 'MUSRENBANG', 2014, '', '2_jalan_hasil.JPG', NULL, 0, 1, 1, 1, 1, 0),
(29, 7, 3, 'GANG BLK CIPTAMAS SADARMANAH', '50', '2,5', '', '', '107.525477', '107.524605', '-6.901287', '-6.901245', 0, 'MUSRENBANG', 2014, '', '3_jalan_hasil.JPG', NULL, 0, 1, 1, 1, 1, 0),
(30, 1, 5, 'JL SADARMANAH LEUWIGAJAH', '50', '4', '', '', '107.531260', '107.531414', '-6.902632', '-6.902207', 0, 'MUSRENBANG', 2013, '', '1_5_jalan_hasil.JPG', NULL, 0, 1, 1, 1, 1, 0),
(31, 4, 10, 'JL POJOK CIREUNDEU', '500', '4', '', '', '107.520941', '107.518739', '-6.914929', '-6.917964', 0, 'MUSRENBANG', 2013, '', '10_jalan_hasil.JPG', NULL, 0, 1, 1, 1, 1, 0),
(32, 8, 11, 'JALAN ANEKA BHAKTI', '1300', '3', '', '', '107.526491', '107.526067', '-6.899265', '-6.900676', 0, 'MUSRENBANG', 2012, '', '11_jalan_hasil 2.JPG', NULL, 0, 1, 1, 1, 1, 0),
(33, 5, 12, 'JL KOMP SUAKA', '700', '3', '', '', '107.528205', '107.529439', '-6.902577', '-6.902777', 0, 'ASPIRASI DEWAN', 2014, '', '5_12_jalan_hasil.JPG', NULL, 0, 1, 1, 1, 1, 0),
(34, 8, 12, 'JL KOMP SUAKA', '625', '4', '', '', '107.529361', '107.529527', '-6.903147', '-6.902172', 0, 'ASPIRASI DEWAN', 2014, '', '8_12_jalan_hasil.JPG', NULL, 0, 1, 1, 1, 1, 0),
(35, 3, 16, 'JL KOMP CIPTA MAS', '135', '4', '', '', '107.526338', '107.526526', '-6.902854', '-6.901776', 0, 'MUSRENBANG', 2013, '', '16_jalan_hasil_2.jpg', NULL, 0, 1, 1, 1, 1, 0),
(36, 4, 16, 'JL KOMP CIPTA MAS', '250', '4', '', '', '107.526510', '107.524549', '-6.901784', '-6.901320', 0, 'MUSRENBANG', 2014, '', '16_jalan_hasil_2.jpg', NULL, 0, 1, 1, 1, 1, 0),
(37, 6, 16, 'JL. PONDOK CIPTA MAS', '450', '4', '', '', '107.526510', '107.524549', '-6.901784', '-6.901320', 0, 'MUSRENBANG', 2014, '', '16_jalan_hasil_1.jpg', NULL, 0, 1, 1, 1, 1, 0),
(38, 4, 2, 'PASANTREN I', '100', '1.5', '', '', '107.530175', '107.530405', '-6.900259', '-6.899477', 0, 'MUSRENBANG', 2015, '', '2_jalan_pelaksanaan 2.JPG', NULL, 0, 1, 1, 1, 0, 0),
(39, 3, 9, 'KIHAPIT TIMUR', '100', '1', '', '', '107.524190', '107.524616', '-6.905528', '-6.906237', 0, 'MUSRENBANG', 2015, '', '3_9_jalan_pelaksanaan 4.JPG', NULL, 0, 1, 1, 1, 0, 0),
(40, 8, 9, 'GAJAH JAYA', '230', '4', '', '', '107.521847', '107.523439', '-6.903846', '-6.903319', 0, 'USULAN WARGA', 2014, '', '8_9_jalan_pelaksanaan.JPG', NULL, 0, 1, 1, 1, 0, 0),
(41, 7, 9, 'HAUR NGAMBANG', '500', '4', '', '', '107.520755', '107.516876', '-6.906195', '-6.906184', 0, 'USULAN WARGA', 2014, '', '7_9_jalan_pelaksanaan.JPG', NULL, 0, 1, 1, 1, 0, 0),
(42, 1, 18, 'GG NYEYEREAN', '62', '1', '', '', '107.525866', '107.525996', '-6.899021', '-6.898537', 0, 'MUSRENBANG', 2015, '', '1_8_pelaksanaan.JPG', NULL, 0, 1, 1, 1, 0, 0);

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
-- Table structure for table `lain`
--

CREATE TABLE IF NOT EXISTS `lain` (
`id_lain` int(11) NOT NULL,
  `rt` int(5) NOT NULL,
  `rw` int(5) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `lain`
--

INSERT INTO `lain` (`id_lain`, `rt`, `rw`, `nama_kegiatan`, `alamat`, `ketersediaan_lahan`, `long`, `lat`, `anggaran`, `sumber_data`, `tahun_usulan`, `persetujuan_warga`, `jml_pemakai`, `ket`, `foto`, `dokumen`, `id_kategori`, `status_data_awal`, `status_verifikasi`, `status_sedang_dilaksanakan`, `status_sudah_dilaksanakan`, `status_tidak_dilaksanakan`) VALUES
(1, 4, 2, 'SARANA TEMPAT IBADAH SALAFUL BINA', 'ADA', '', '-107.530306', '-6.899317', 0, 'USULAN WARGA', 2015, '', 0, '', '2_lain-lain_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(2, 1, 12, 'KANTOR RW.12 LEUWIGAJAH', 'ADA', '', '107.52822', '-6.903730', 0, 'USULAN WARGA', 2015, '', 0, '', '12_lain-lain_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(3, 3, 10, 'TEMBOK PENAHAN TANAH ( TPT) CIREUNDEU', 'ADA', '', '107.522087', '-6.914377', 0, 'MUSRENBANG', 2015, '', 0, '', '10_lain-lain_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(4, 3, 10, 'TANGGUL PENAHAN TANAH / CIREUNDEU', 'ADA', '', '107.521056', '-6.914011', 0, 'USULAN WARGA', 2014, '', 0, '', '10_lain_hasil.JPG', NULL, 0, 1, 1, 1, 1, 0);

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
  `anggaran` varchar(100) NOT NULL,
  `sumber_data` text NOT NULL,
  `jml_pemakai` int(11) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mck`
--

INSERT INTO `mck` (`id_mck`, `rt`, `rw`, `alamat`, `ketersediaan_lahan`, `long`, `lat`, `anggaran`, `sumber_data`, `jml_pemakai`, `tahun_usulan`, `persetujuan_warga`, `ket`, `foto`, `dokumen`, `id_kategori`, `status_data_awal`, `status_verifikasi`, `status_sedang_dilaksanakan`, `status_sudah_dilaksanakan`, `status_tidak_dilaksanakan`) VALUES
(1, 6, 6, 'CIBOGO LEUWIGAJAH', 'ADA', '107.530357', '-6.911360', 'APBD', 'MUSRENBANG', 0, 2015, 'BLM ADA', '', '6_mck_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(2, 4, 2, 'SARADAN LEUWIGAJAH', 'ADA', '107.530206', '-6.898683', 'APBD', 'USULAN WARGA', 70, 2014, 'BLM TERLAM', '', '2_mck_hasil.JPG', NULL, 0, 1, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`id_menu` int(11) NOT NULL,
  `menu` varchar(100) NOT NULL,
  `controller` varchar(100) NOT NULL,
  `nama_tabel` varchar(50) NOT NULL,
  `id_jenis_pengguna` int(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `menu`, `controller`, `nama_tabel`, `id_jenis_pengguna`) VALUES
(6, 'Drainase', 'admin/drainase_managements', 'drainase', 2),
(7, 'Artesis', 'admin/artesis_managements', 'artesis', 0),
(8, 'Jalan', 'admin/jalan_managements', 'jalan', 0),
(9, 'Sumur Dangkal', 'admin/sumur_dangkal_managements', 'sumur_dangkal', 2),
(10, 'Sumur Resapan', 'admin/sumur_resapan_managements', 'sumur_resapan', 2),
(11, 'MCK', 'admin/mck_managements', 'mck', 2),
(12, 'Septictank', 'admin/septictank_managements', 'septictank', 2),
(13, 'Septictank Komunal', 'admin/septictank_komunal_managements', 'septictank_komunal', 2),
(14, 'Lain-Lain', 'admin/lain_managements', 'lain', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `id_jenis_pengguna`, `nama`, `nip`, `alamat`, `email`, `username`, `password`, `telp`) VALUES
(1, 1, 'Admin', '1234', 'Cimahi', 'admin@admin.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', '123456'),
(5, 1, 'riza', '123456', 'cimahi', 'riza.fauzi.rahman@gmail.com', 'riza', 'd5f275885bd96778f7f01c814e405e7c', '1111'),
(7, 1, 'Admin123', '1234', 'Cimahi', 'admin@admin.com', 'admin123', '21232f297a57a5a743894a0e4a801fc3', '123456'),
(8, 1, 'Admin123456', '1234', 'Cimahi', 'admin@admin.com', 'admin123456', '21232f297a57a5a743894a0e4a801fc3', '123456'),
(9, 1, 'Ratih', '222', 'Kp. Baru Gg. Nuryadi Rt.10 / 04 No. 80', 'ratih.pujihati@gmail.com', 'ratih', 'a5bd72a3d2c4d1686415f93a46fc7a0a', '085720017874');

-- --------------------------------------------------------

--
-- Table structure for table `rw`
--

CREATE TABLE IF NOT EXISTS `rw` (
`id_rw` int(11) NOT NULL,
  `rw` varchar(5) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `rw`
--

INSERT INTO `rw` (`id_rw`, `rw`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6'),
(7, '7'),
(8, '8'),
(9, '9'),
(10, '10'),
(11, '11'),
(12, '12'),
(13, '13'),
(14, '14'),
(15, '15'),
(16, '16'),
(17, '17'),
(18, '18'),
(19, '19'),
(20, '20');

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
  `kontur_tanah` varchar(100) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `septictank_komunal`
--

INSERT INTO `septictank_komunal` (`id_septictank_komunal`, `rt`, `rw`, `alamat`, `ketersediaan_lahan`, `kontur_tanah`, `long`, `lat`, `anggaran`, `sumber_data`, `tahun_usulan`, `persetujuan_warga`, `jml_pemakai`, `ket`, `foto`, `dokumen`, `id_kategori`, `status_data_awal`, `status_verifikasi`, `status_sedang_dilaksanakan`, `status_sudah_dilaksanakan`, `status_tidak_dilaksanakan`) VALUES
(1, 4, 6, 'CIBOGO LEUWIGAJAH', 'ADA', '', '107.53077', '-6.908094', 0, 'USULAN WARGA', 2015, '100', 0, '', '6_komunal_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(2, 2, 1, 'BAROS PASAR', 'ADA', '', '107.534424', '-6.894867', 0, 'MUSRENBANG', 2013, '98', 0, '', '1_komunal_hasil.JPG', NULL, 0, 1, 1, 1, 1, 0),
(3, 8, 2, 'SARADAN LEUWIGAJAH', 'ADA', '', '107.530388', '-6.898439', 0, 'MUSRENBANG', 2012, '78', 0, '', '2_komunal_hasil.JPG', NULL, 0, 1, 1, 1, 1, 0);

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
  `jml_pemakai` int(11) NOT NULL,
  `ket` text NOT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `dokumen` varchar(200) DEFAULT NULL,
  `id_kategori` int(5) NOT NULL,
  `status_data_awal` int(3) NOT NULL,
  `status_verifikasi` int(3) NOT NULL,
  `status_sedang_dilaksanakan` int(3) NOT NULL,
  `status_sudah_dilaksanakan` int(3) NOT NULL,
  `status_tidak_dilaksanakan` int(3) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `sumur_dangkal`
--

INSERT INTO `sumur_dangkal` (`id_sumur_dangkal`, `rt`, `rw`, `alamat`, `ketersediaan_lahan`, `long`, `lat`, `anggaran`, `sumber_data`, `tahun_usulan`, `persetujuan_warga`, `jml_pemakai`, `ket`, `foto`, `dokumen`, `id_kategori`, `status_data_awal`, `status_verifikasi`, `status_sedang_dilaksanakan`, `status_sudah_dilaksanakan`, `status_tidak_dilaksanakan`) VALUES
(1, 2, 2, 'GANG KERAMAT SADARMANAH', 'ADA', '107.528860', '-6.897642', 0, 'MUSRENBANG', 2015, 'BELUM ADA', 40, '', '2_2_sumur dangkal_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(2, 1, 6, 'CIBOGO LEUWIGAJAH', 'ADA', '107.529191', '-6.909886', 0, 'MUSRENBANG', 2015, 'BELUM ADA', 50, '', '6_sumur dangkal_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(3, 3, 5, 'KERKOF AIR BERSIH', 'ADA', '107.532849', '-6.904105', 0, 'USULAN WARGA', 2015, 'BELUM ADA', 50, '', '5_sumur dangkal_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(4, 8, 2, 'SARADAN LEUWIGAJAH', 'ADA', '107.530039', '-6.897641', 0, 'USULAN WARGA', 2014, 'ADA', 10, '', '8_2_sumur dangkal_hasil.JPG', NULL, 0, 1, 1, 1, 1, 0),
(5, 5, 7, 'CIBOGO LEUWIGAJAH', 'ADA', '107.529469', '-6.915961', 0, 'MUSRENBANG', 2014, 'ADA', 30, '', '7_sumur dangkal_hasil.jpg', NULL, 0, 1, 1, 1, 1, 0),
(6, 6, 2, 'SARADAN LEUWIGAJAH', 'ADA', '107.529948', '-6.898590', 0, 'USULAN WARGA', 2015, 'ADA', 25, '', '6_2_sumur_dangkal_pelaksanaan.JPG', NULL, 0, 1, 1, 1, 0, 0),
(7, 5, 6, 'CIBOGO LEUWIGAJAH', 'ADA', '107.530887', '-6.910866', 0, 'MUSRENBANG', 2014, 'ADA', 30, '', '6_sumur dangkal_pelaksanaan.JPG', NULL, 0, 1, 1, 1, 0, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `sumur_resapan`
--

INSERT INTO `sumur_resapan` (`id_sumur_resapan`, `rt`, `rw`, `alamat`, `ketersediaan_lahan`, `long`, `lat`, `anggaran`, `sumber_data`, `tahun_usulan`, `persetujuan_warga`, `ket`, `foto`, `dokumen`, `id_kategori`, `status_data_awal`, `status_verifikasi`, `status_sedang_dilaksanakan`, `status_sudah_dilaksanakan`, `status_tidak_dilaksanakan`) VALUES
(1, 4, 9, 'KIHAPIT BARAT', 'ADA', '107.523887', '-6.906716', 0, 'USULAN WARGA', 2015, '', '', '9_sumur resapan_awal 2.JPG', NULL, 0, 1, 1, 0, 0, 0),
(2, 4, 9, 'KIHAPIT BARAT', 'ADA', '107.523772', '-6.907055', 0, 'MUSRENBANG', 2015, '', '', '9_sumur resapan_awal 3.JPG', NULL, 0, 1, 1, 0, 0, 0),
(3, 4, 9, 'KIHAPIT BARAT', 'ADA', '107.523823', '-6.907286', 0, 'MUSRENBANG', 2015, '', '', '9_sumur resapan_awal.JP', NULL, 0, 1, 1, 0, 0, 0),
(4, 4, 9, 'KIHAPIT BARAT', 'ADA', '107.524442', '-6.907252', 0, 'MUSRENBANG', 2015, '', '', '9_sumur resapan_awal 3.JPG', NULL, 0, 1, 1, 0, 0, 0),
(5, 10, 16, 'BLOK A 10 PONDOK CIPTA MAS', 'ADA', '107.526821', '-6.901942', 0, 'MUSRENBANG', 2015, '', '', '16 a10_sumur resapan_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(6, 8, 16, 'BLOK C 7 PONDOK CIPTA MAS', 'ADA', '107.524462', '-6.901715', 0, 'MUSRENBANG', 2015, '', '', '16 b3_sumur resapan_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(7, 7, 16, 'BLOK B 3 PONDOK CIPTA MAS', 'ADA', '107.525767', '-6.901435', 0, 'MUSRENBANG', 2015, '', '', '16 c7_sumur resapan_awal.JPG', NULL, 0, 1, 1, 0, 0, 0),
(8, 3, 19, 'CIBOGO RW.19 LEUWIGAJAH', 'ADA', '107.530995', '-6.905784', 0, 'MUSRENBANG', 2015, '', '', '19_sumur resapan_awal.JPG', NULL, 0, 1, 1, 0, 0, 0);

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
-- Indexes for table `berita`
--
ALTER TABLE `berita`
 ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `drainase`
--
ALTER TABLE `drainase`
 ADD PRIMARY KEY (`id_drainase`);

--
-- Indexes for table `ekonomi_gas`
--
ALTER TABLE `ekonomi_gas`
 ADD PRIMARY KEY (`id_gas`);

--
-- Indexes for table `ekonomi_kos`
--
ALTER TABLE `ekonomi_kos`
 ADD PRIMARY KEY (`id_kos`);

--
-- Indexes for table `ekonomi_minimarket`
--
ALTER TABLE `ekonomi_minimarket`
 ADD PRIMARY KEY (`id_minimarket`);

--
-- Indexes for table `ekonomi_nama_perusahaan`
--
ALTER TABLE `ekonomi_nama_perusahaan`
 ADD PRIMARY KEY (`id_nama_perusahaan`);

--
-- Indexes for table `ekonomi_umkm`
--
ALTER TABLE `ekonomi_umkm`
 ADD PRIMARY KEY (`id_umkm`);

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
-- Indexes for table `lain`
--
ALTER TABLE `lain`
 ADD PRIMARY KEY (`id_lain`);

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
-- Indexes for table `rw`
--
ALTER TABLE `rw`
 ADD PRIMARY KEY (`id_rw`);

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
MODIFY `id_artesis` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `drainase`
--
ALTER TABLE `drainase`
MODIFY `id_drainase` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `ekonomi_gas`
--
ALTER TABLE `ekonomi_gas`
MODIFY `id_gas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `ekonomi_kos`
--
ALTER TABLE `ekonomi_kos`
MODIFY `id_kos` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=117;
--
-- AUTO_INCREMENT for table `ekonomi_minimarket`
--
ALTER TABLE `ekonomi_minimarket`
MODIFY `id_minimarket` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `ekonomi_nama_perusahaan`
--
ALTER TABLE `ekonomi_nama_perusahaan`
MODIFY `id_nama_perusahaan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `ekonomi_umkm`
--
ALTER TABLE `ekonomi_umkm`
MODIFY `id_umkm` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=205;
--
-- AUTO_INCREMENT for table `jalan`
--
ALTER TABLE `jalan`
MODIFY `id_jalan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
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
-- AUTO_INCREMENT for table `lain`
--
ALTER TABLE `lain`
MODIFY `id_lain` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mck`
--
ALTER TABLE `mck`
MODIFY `id_mck` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `rw`
--
ALTER TABLE `rw`
MODIFY `id_rw` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `septictank`
--
ALTER TABLE `septictank`
MODIFY `id_septictank` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `septictank_komunal`
--
ALTER TABLE `septictank_komunal`
MODIFY `id_septictank_komunal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sumur_dangkal`
--
ALTER TABLE `sumur_dangkal`
MODIFY `id_sumur_dangkal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sumur_resapan`
--
ALTER TABLE `sumur_resapan`
MODIFY `id_sumur_resapan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
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
