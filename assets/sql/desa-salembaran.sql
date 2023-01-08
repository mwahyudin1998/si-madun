-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2021 at 10:10 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desa-bojong`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelahirans`
--

CREATE TABLE `kelahirans` (
  `id_kelahiran` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nama_bayi` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `berat_bayi` int(11) NOT NULL,
  `panjang_bayi` int(20) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `rt` varchar(16) NOT NULL,
  `rw` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelahirans`
--

INSERT INTO `kelahirans` (`id_kelahiran`, `tgl_lahir`, `nama_bayi`, `jenis_kelamin`, `berat_bayi`, `panjang_bayi`, `nama_ayah`, `nama_ibu`, `tempat_lahir`, `alamat`, `rt`, `rw`) VALUES
('0001', '2021-01-03', 'PUTRIE SITI SYARAH', 'PEREMPUAN', 8, 65, 'DHARMAWAN', 'Yayah', 'TANGERANG', 'KP. PINTU KAPUK', '004', '01'),
('0002', '2020-12-12', 'ADNRA', 'LAKI-LAKI', 5, 50, 'Fuad Zein', 'Sumiyati', 'TANGERANG', 'KP. PINTU KAPUK', '005', '001');

-- --------------------------------------------------------

--
-- Table structure for table `kematians`
--

CREATE TABLE `kematians` (
  `id_kematian` varchar(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `rt` varchar(15) NOT NULL,
  `rw` varchar(15) NOT NULL,
  `tanggal_meninggal` date NOT NULL,
  `waktu` time NOT NULL,
  `penyebab` varchar(100) NOT NULL,
  `tempat_kematian` varchar(200) NOT NULL,
  `nama_pelapor` varchar(100) NOT NULL,
  `hubungan_pelapor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kematians`
--

INSERT INTO `kematians` (`id_kematian`, `nik`, `nama_lengkap`, `jenis_kelamin`, `alamat`, `rt`, `rw`, `tanggal_meninggal`, `waktu`, `penyebab`, `tempat_kematian`, `nama_pelapor`, `hubungan_pelapor`) VALUES
('0001', '3603131302180000', 'DIEGO', 'LAKI-LAKI', 'KP. PINTU KAPUK', '004', '02', '2021-01-19', '12:08:00', 'Covid-19', 'RS UMUM KAB TANGERANG', 'enjel', 'BIBI'),
('0004', '3603134206780001', 'JESSY ISVER', 'PEREMPUAN', 'JL.PERIMETER UTARA KM.40', '001', '04', '2021-01-19', '09:37:00', 'Covid-19', 'RS UMUM KAB TANGERANG', 'fikri', 'sepupu'),
('0005', '3603146004740021', 'sudin', 'LAKI-LAKI', 'KP.TUKANG KAJANG', '002', '03', '2021-01-22', '21:42:00', 'Stroke', 'RS UMUM KAB TANGERANG', 'SUMPER roji', 'paman');

-- --------------------------------------------------------

--
-- Table structure for table `mutasis`
--

CREATE TABLE `mutasis` (
  `id_mutasi` varchar(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `nik` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penduduks`
--

CREATE TABLE `penduduks` (
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `status_kawin` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `status_keluarga` varchar(50) NOT NULL,
  `is_kepala_keluarga` tinyint(1) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `rt` varchar(20) NOT NULL,
  `rw` varchar(20) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status_penduduk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penduduks`
--

INSERT INTO `penduduks` (`tgl_masuk`, `tgl_keluar`, `no_kk`, `nik`, `nama_lengkap`, `tempat_lahir`, `tgl_lahir`, `agama`, `status_kawin`, `jenis_kelamin`, `status_keluarga`, `is_kepala_keluarga`, `pendidikan`, `pekerjaan`, `alamat`, `rt`, `rw`, `no_telp`, `image`, `status_penduduk`) VALUES
('0000-00-00', '2021-01-19', '3603131908070002', '3603082907900001', 'RIAN KRISTIAN', 'BANDUNG', '1985-01-23', 'PROTESTAN', 'KAWIN', 'LAKI-LAKI', 'SUAMI', 1, 'BELUM SEKOLAH', 'PELAJAR / MAHASISWA', 'JL. PINTU KAPUK', '003', '01', '0895610542057', '3603082907900001.png', 'tetap'),
('0000-00-00', '0000-00-00', '3603132112040002', '3603130210880010', 'RAKA ALFARO', 'LAMPUNG', '1988-12-31', 'ISLAM', 'KAWIN', 'LAKI-LAKI', 'SUAMI', 1, 'SMA 95 JAKARTA', 'PEGAWAI NEGERI SIPIL', 'JL.PERIMETER UTARA KM.30', '003', '03', '081317618687', 'default.jpg', 'Tetap'),
('0000-00-00', '2021-01-19', '3603132701190001', '3603131302180000', 'DIEGO', 'JAKARTA BARAT', '1976-11-01', 'KATOLIK', 'CERAI HIDUP', 'LAKI-LAKI', 'SUAMI', 1, 'BELUM SEKOLAH', 'TIDAK BEKERJA', 'JL. PINTU KAPUK', '003', '04', '083804137712', 'default.jpg', 'keluar'),
('0000-00-00', '0000-00-00', '3603132109060001', '3603131701980001', 'KRISTINA EREN', 'TANGERANG', '1978-02-04', 'PROTESTAN', 'KAWIN', 'PEREMPUAN', 'ISTRI', 0, 'S1 UNIVERSITAS NEGRI JAKARTA', 'KARYAWAN SWASTA', 'JL.KEBON TIMUN', '002', '05', '081317418602', 'default.jpg', 'Tetap'),
('0000-00-00', '2021-01-19', '3603130805180007', '3603132904980003', 'CINTYA MARTINUS', 'XIAMEN', '1980-08-27', 'KATOLIK', 'KAWIN', 'PEREMPUAN', 'ISTRI', 0, 'S1 STANFORD UNIVERSITY', 'KARYAWAN SWASTA', 'JL.PERIMETER UTARA KM.30', '001', '03', '085718966298', 'default.jpg', 'tetap'),
('0000-00-00', '0000-00-00', '3603130612200011', '3603132912980005', 'OEI WENG FA', 'TANGERANG', '1984-01-18', 'KONGHUCU', 'KAWIN', 'LAKI-LAKI', 'ISTRI', 0, 'SMA 69 TANGERANG', 'MENGURUS RUMAH TANGGA', 'JL.KEBON TIMUN', '003', '05', '0895363528449', '3603132912980005.jpg', 'tetap'),
('0000-00-00', '2021-01-19', '3603131102120009', '3603134206780001', 'JESSY ISVER', 'TANGERANG', '1989-09-30', 'HINDU', 'KAWIN', 'PEREMPUAN', 'ISTRI', 0, 'S1 GANGNAM UNIVERSITY', 'KARYAWAN SWASTA', 'JL.PERIMETER UTARA KM.40', '001', '04', '087782258490', 'default.jpg', 'keluar'),
('0000-00-00', '2021-01-19', '3603130612200011', '3603134708720007', 'ONI FA', 'TANGERANG', '1985-06-19', 'KONGHUCU', 'KAWIN', 'LAKI-LAKI', 'SUAMI', 1, 'SMA 01 JAKARTA', 'WIRAKARYAWAN SWASTA', 'JL. KEBON TIMUN', '003', '05', '0895605927170', 'default.jpg', 'tetap'),
('0000-00-00', '0000-00-00', '3603130910030002', '3603135502770004', 'TOFA MIHAMMAD', 'TANGERANG', '1979-09-01', 'ISLAM', 'KAWIN', 'LAKI-LAKI', 'SUAMI', 1, 'SMA 69 TANGERANG', 'KARYAWAN SWASTA', 'JL.PERIMETER UTARA KM.40', '002', '04', '085959330432', 'default.jpg', 'Tetap'),
('0000-00-00', '0000-00-00', '3603130212250001', '3603140309760005', 'SUHENDRA HMS', 'SUKABUMI', '1974-06-10', 'ISLAM', 'KAWIN', 'LAKI-LAKI', 'SUAMI', 1, 'S1 UNIVERSITAS TRI SAKTI', 'PEGAWAI NEGERI SIPIL', 'JL. PINTU KAPUK', '001', '01', '087781004805', '3603140309760005.jpg', 'tetap'),
('0000-00-00', '0000-00-00', '3603133011050001', '3603141210900002', 'ALFA MATALKAH', 'KEBUMEN', '1989-04-04', 'ISLAM', 'KAWIN', 'LAKI-LAKI', 'ANAK', 0, 'BELUM SEKOLAH', 'PELAJAR / MAHASISWA', 'JL.KP MELAYU', '002', '02', '0895610123059', 'default.jpg', 'Tetap'),
('0000-00-00', '0000-00-00', '3603131908030002', '3603141212660006', 'DAVID DE CARLA', 'SINGAPORE', '1988-12-27', 'KATOLIK', 'CERAI MATI', 'LAKI-LAKI', 'SUAMI', 1, 'S1 NANYANG UNIVERSITY', 'TIDAK BEKERJA', 'JL.KP MELAYU', '002', '02', '08981019254', 'default.jpg', 'Tetap'),
('0000-00-00', '0000-00-00', '3603130212250001', '3603141406820001', 'AISYAH SITI', 'TANGERANG', '1996-10-19', 'ISLAM', 'BELUM KAWIN', 'PEREMPUAN', 'ANAK', 0, 'SI UNIVERSITAS INDONESIA', 'KARYAWAN SWASTA', 'JL. PINTU KAPUK', '001', '01', '085770843598', '3603141406820001.jpg', 'Tetap'),
('0000-00-00', '0000-00-00', '3603132103080001', '3603141503760008', 'JEJE PARLENTE', 'TANGERANG', '1987-10-04', 'BUDHA', 'KAWIN', 'LAKI-LAKI', 'SUAMI', 1, 'S1 UNIVERSITAS INDONESIA', 'KARYAWAN SWASTA', 'JL.PERIMETER UTARA KM.40', '003', '04', '089670615752', 'default.jpg', 'Tetap'),
('0000-00-00', '0000-00-00', '3603131908070002', '3603142912650001', 'CLARA KRISTIANI', 'YOGYAKARTA', '1978-02-21', 'PROTESTAN', 'KAWIN', 'PEREMPUAN', 'ISTRI', 0, 'SMA 84 JAKARTA', 'KARYAWAN SWASTA', 'JL. PINTU KAPUK', '002', '01', '0877810364494', 'default.jpg', 'Tetap'),
('0000-00-00', '0000-00-00', '3603131100330003', '3603143004140001', 'SUMENG', 'BANDUNG', '1979-10-12', 'Budha', 'Belum Kawin', 'LAKI-LAKI', 'Suami', 0, 'Strata I', 'Lain-lain', 'KP. PINTU KAPUK', '005', '01', '0895610542022', '3603143004140001.jpg', 'Tetap'),
('2021-01-19', '2021-01-19', '3603131100123002', '3603144123940005', 'sultan', 'jakarta', '1989-02-05', 'Islam', 'Kawin', 'LAKI-LAKI', 'Anak', 0, 'Tamat SD', 'Pelajar/ Mahasiswa', 'KP. PINTU KAPUK', '001', '05', '0895610542011', 'default.jpg', 'keluar'),
('0000-00-00', '0000-00-00', '3603132103080001', '3603144207730002', 'INDAH SYAHREFA', 'TANGERANG', '1987-05-14', 'BUDHA', 'KAWIN', 'PEREMPUAN', 'ISTRI', 0, 'S1 UNIVERSITAS NEGRI JAKARTA', 'KARYAWAN SWASTA', 'JL.PERIMETER UTARA KM.40', '003', '04', '083885477625', 'default.jpg', 'Tetap'),
('0000-00-00', '0000-00-00', '3603133011050001', '3603144402690007', 'RUDI AMORA', 'AMBON', '1985-11-12', 'ISLAM', 'KAWIN', 'PEREMPUAN', 'ISTRI', 0, 'S1 UNIVERSITAS TERBUKA', 'KARYAWAN SWASTA', 'JL.KP MELAYU', '001', '02', '0895412889562', 'default.jpg', 'Tetap'),
('0000-00-00', '0000-00-00', '3603131100110002', '3603144907140001', 'MASIH AL', 'SUKABUMI', '1997-11-03', 'Protestan', 'Kawin', 'LAKI-LAKI', 'Suami', 0, 'Strata I', 'Buruh Harian Lepas', 'KP.TUKANG KAJANG', '003', '04', '0895610542022', 'default.jpg', 'tetap'),
('0000-00-00', '0000-00-00', '3603131100110001', '3603144907940011', 'marlinah', 'jakarta', '1988-11-02', 'Islam', 'Cerai Mati', 'PEREMPUAN', 'Istri', 1, 'SLTA/ Sederajat', 'Mengurus Rumah Tangga', 'KP. PINTU KAPUK', '003', '02', '0895610542059', 'default.jpg', 'tetap'),
('2021-01-19', '0000-00-00', '3603132200110029', '3603144907940012', 'MASUAKSA', 'Tange', '1998-01-11', 'Budha', 'Belum Kawin', 'PEREMPUAN', 'Istri', 0, 'Diploma II', 'Buruh Harian Lepas', 'KP. PINTU KAPUK', '005', '05', '08956105420511', 'default.jpg', 'sementara'),
('2021-01-18', '0000-00-00', '3603131100330012', '3603144907940021', 'IRMA Sari', 'BANDUNG', '1989-12-02', 'Hindu', 'Belum Kawin', 'PEREMPUAN', 'Anak', 0, 'SLTA/ Sederajat', 'Belum/ Tidak Bekerja', 'KP. PINTU KAPUK', '001', '03', '0895610542022', '3603144907940021.png', 'tetap'),
('2021-01-19', '0000-00-00', '3603132200110011', '3603144907940022', 'ARIEF', 'SUKABUMI', '1989-01-06', 'Islam', 'Kawin', 'LAKI-LAKI', 'Suami', 1, 'SLTP/ Sederajat', 'Pelajar/ Mahasiswa', 'KP. PINTU KAPUK', '004', '01', '0895610542011', 'default.jpg', 'Tetap'),
('2021-01-05', '0000-00-00', '3603131100110022', '3603144907940111', 'SURYANI', 'BANDUNG', '1989-12-27', 'Islam', 'Belum Kawin', 'PEREMPUAN', 'Istri', 0, 'Strata I', 'Karyawan Swasta', 'KP. PINTU KAPUK', '003', '03', '0895610542021', 'default.jpg', 'tetap'),
('0000-00-00', '0000-00-00', '3603130912740003', '3603145003690004', 'BEJO SUTOPO', 'TANGERANG', '1989-03-21', 'ISLAM', 'KAWIN', 'LAKI-LAKI', 'SUAMI', 1, 'SMA 95 JAKARTA', 'PEGAWAI NEGERI SIPIL', 'JL.KEBON TIMUN', '001', '05', '085217702905', 'default.jpg', 'Tetap'),
('0000-00-00', '0000-00-00', '3603130910030002', '3603145003700013', 'AISAH ALHIDAYAH', 'TANGERANG', '1978-11-18', 'ISLAM', 'KAWIN', 'PEREMPUAN', 'ISTRI', 0, 'SMA 69 TANGERANG', 'KARYAWAN SWASTA', 'JL.PERIMETER UTARA KM.40', '002', '04', '0895321281980', 'default.jpg', 'Tetap'),
('0000-00-00', '0000-00-00', '3603130805180007', '3603145008700002', 'ARNOLD MARTINUS', 'PUDONG', '1976-11-01', 'KATOLIK', 'KAWIN', 'LAKI-LAKI', 'SUAMI', 1, 'S1 UNIVERSITY TECNOLOGI MALAYSIA', 'KARYAWAN SWASTA', 'JL.PERIMETER UTARA KM.30', '001', '03', '0895610542057', '3603145008700002.jpg', 'tetap'),
('0000-00-00', '0000-00-00', '3603132112040002', '3603145009850003', 'DEFANO ALFARO', 'TANGERANG', '1976-05-10', 'ISLAM', 'BELUM KAWIN', 'LAKI-LAKI', 'ANAK', 0, 'BELUM SEKOLAH', 'TIDAK BEKERJA', 'JL.PERIMETER UTARA KM.30', '003', '03', '085604448520', 'default.jpg', 'Tetap'),
('0000-00-00', '0000-00-00', '3603132109060001', '3603145609610002', 'KRIS ELNANDA', 'TANGERANG', '1979-06-22', 'PROTESTAN', 'BELUM KAWIN', 'PEREMPUAN', 'ANAK', 0, 'BELUM SEKOLAH', 'TIDAK BEKERJA', 'JL.KEBON TIMUN', '002', '05', '0895610144011', 'default.jpg', 'Tetap'),
('0000-00-00', '0000-00-00', '3603132200110001', '3603146004740001', 'IRMA', 'BANDUNG', '1998-01-02', 'Islam', 'Belum Kawin', 'PEREMPUAN', 'Anak', 0, 'Strata I', 'Karyawan Swasta', 'KP. PINTU KAPUK', '005', '03', '0895610542021', '3603146004740001.jpg', 'tetap'),
('2021-01-22', '2021-01-22', '3603131100330011', '3603146004740021', 'sudin', 'SUKABUMI', '1998-02-01', 'Islam', 'Belum Kawin', 'LAKI-LAKI', 'Famili Lain', 0, 'Diploma II', 'Pegawai Negeri Sipil', 'KP.TUKANG KAJANG', '002', '03', '0895610542050', 'default.jpg', 'Keluar'),
('0000-00-00', '0000-00-00', '3603132200110011', '3603146004740023', 'SUMENG MULU', 'SUKABUMI', '1990-12-29', 'Protestan', 'Belum Kawin', 'PEREMPUAN', 'Anak', 0, 'Diploma I', 'Mengurus Rumah Tangga', 'KP. PINTU KAPUK', '002', '03', '0895610542022', 'default.jpg', 'Tetap'),
('0000-00-00', '0000-00-00', '3603132200110011', '3603146004740111', 'maisyaroh', 'BANDUNG', '1985-01-15', 'Islam', 'Kawin', 'LAKI-LAKI', 'Istri', 0, 'Tidak/ Belum Sekolah', 'Karyawan Swasta', 'KP. PINTU KAPUK', '002', '05', '0895610542057', '3603146004740111.png', 'Tetap'),
('0000-00-00', '0000-00-00', '3603132908170002', '3603151408930002', 'MUHAMMAD NURZAMAN', 'SORONG', '1977-04-27', 'ISLAM', 'KAWIN', 'LAKI-LAKI', 'SUAMI', 1, 'S1 UNIVERSITAS NEGRI JAKARTA', 'PEGAWAI NEGERI SIPIL', 'JL. PINTU KAPUK', '003', '01', '089541083749', 'default.jpg', 'Tetap'),
('0000-00-00', '0000-00-00', '3603132908170002', '3603151912980001', 'HAIRUN NISA NURRAHMAH', 'LOMBOK TIMUR', '1992-01-07', 'ISLAM', 'BELUM KAWIN', 'PEREMPUAN', 'ANAK', 0, 'S1 UNIVERSITAS TERBUKA', 'KARYAWAN SWASTA', 'JL. PINTU KAPUK', '003', '01', '082242536809', 'default.jpg', 'Tetap'),
('0000-00-00', '0000-00-00', '3603130212250001', '3603161101970003', 'NURUL SHIBUYA', 'JAKARTA BARAT', '1982-04-06', 'ISLAM', 'KAWIN', 'PEREMPUAN', 'ISTRI', 0, 'SMK PENERBANGAN', 'PEGAWAI NEGERI SIPIL', 'JL. PINTU KAPUK', '001', '01', '089620440824', '3603161101970003.jpg', 'Tetap'),
('0000-00-00', '0000-00-00', '3603131601100004', '3603162404830005', 'FAHMI RAMADHAN JAENURI', 'JAKARTA BARAT', '1978-06-08', 'ISLAM', 'CERAI MATI', 'LAKI-LAKI', 'SUAMI', 1, 'S1 UNIVERSITAS NEGRI JAKARTA', 'PEGAWAI NEGERI SIPIL', 'JL.PERIMETER UTARA KM.30', '002', '03', '082112471062', 'default.jpg', 'Tetap'),
('0000-00-00', '0000-00-00', '3603131908030002', '3603222306820002', 'LARA CINTYA', 'JAKARTA BARAT', '1976-03-31', 'KATOLIK', 'BELUM KAWIN', 'PEREMPUAN', 'ANAK', 0, 'BELUM SEKOLAH', 'TIDAK BEKERJA', 'JL.KP MELAYU', '002', '02', '08978630351', 'default.jpg', 'Tetap'),
('0000-00-00', '0000-00-00', '3603132112040002', '3671040511770002', 'CARLA LEONITA', 'TANGERANG', '1988-11-21', 'ISLAM', 'BELUM KAWIN', 'PEREMPUAN', 'ANAK', 0, 'BELUM SEKOLAH', 'TIDAK BEKERJA', 'JL.PERIMETER UTARA KM.30', '003', '03', '089512510449', 'default.jpg', 'Tetap'),
('0000-00-00', '0000-00-00', '3603133011050001', '3671041407920005', 'KIMI DONO', 'FUKKOKA', '1971-08-07', 'KATOLIK', 'KAWIN', 'PEREMPUAN', 'ISTRI', 0, 'SMA 84 JAKARTA', 'PEGAWAI NEGERI SIPIL', 'JL.KP MELAYU', '002', '02', '087780719028', 'default.jpg', 'Tetap'),
('0000-00-00', '0000-00-00', '3603132112040002', '3671042412810001', 'ALENTA', 'JAKARTA TIMUR', '1998-04-15', 'ISLAM', 'KAWIN', 'PEREMPUAN', 'ISTRI', 0, 'UNIVERSITAS INDONESIA', 'TIDAK BEKERJA', 'JL.PERIMETER UTARA KM.30', '003', '03', '08967045932', 'default.jpg', 'Tetap'),
('0000-00-00', '0000-00-00', '3603132908170002', '3671046407740002', 'SITI MELAWATI', 'SEMARANG', '1990-11-18', 'ISLAM', 'KAWIN', 'PEREMPUAN', 'ISTRI', 0, 'S1 NANYANG UNIVERSITY', 'KARYAWAN SWASTA', 'JL. PINTU KAPUK', '003', '01', '0895322325457', 'default.jpg', 'Tetap'),
('0000-00-00', '0000-00-00', '3603131102120009', '3671071912840009', 'FERNANDO', 'TANGERANG', '1999-03-06', 'HINDU', 'KAWIN', 'LAKI-LAKI', 'SUAMI', 1, 'S1 STANFORD UNIVERSITY', 'KARYAWAN SWASTA', 'JL.PERIMETER UTARA KM.40', '001', '04', '0838944335981', 'default.jpg', 'Tetap'),
('0000-00-00', '0000-00-00', '3603132109060001', '3671104501680003', 'LEVI KRISTANO', 'TANGERANG', '1978-02-01', 'PROTESTAN', 'KAWIN', 'LAKI-LAKI', 'SUAMI', 1, 'SI UNIVERSITAS INDONESIA', 'KARYAWAN SWASTA', 'JL.KEBON TIMUN', '002', '05', '085954482221', 'default.jpg', 'Tetap');

-- --------------------------------------------------------

--
-- Table structure for table `surats`
--

CREATE TABLE `surats` (
  `id_surat` varchar(5) NOT NULL,
  `kode_surat` varchar(10) NOT NULL,
  `jenis_surat` varchar(100) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(11) NOT NULL,
  `tempat_lahir` varchar(60) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `status_kawin` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surats`
--

INSERT INTO `surats` (`id_surat`, `kode_surat`, `jenis_surat`, `nik`, `nama_lengkap`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `agama`, `status_kawin`, `alamat`, `rt`, `rw`, `keterangan`) VALUES
('0001', 'SKD', 'SURAT KETERANGAN DOMISILI', '3603082907900001', 'RIAN KRISTIAN', 'LAKI-LAKI', 'BANDUNG', '1985-01-23', 'PROTESTAN', 'KAWIN', 'JL. PINTU KAPUK', '003', '01', 'Untuk pembuatan KTP sementara'),
('0002', 'SKD', 'SURAT KETERANGAN DOMISILI', '3603130210880010', 'RAKA ALFARO', 'LAKI-LAKI', 'LAMPUNG', '1988-12-31', 'ISLAM', 'KAWIN', 'JL.PERIMETER UTARA KM.30', '003', '03', 'Untuk pembuatan buku tabungan'),
('0003', 'SKD', 'SURAT KETERANGAN DOMISILI', '3603135502770004', 'TOFA MIHAMMAD', 'LAKI-LAKI', 'TANGERANG', '1979-09-01', 'ISLAM', 'KAWIN', 'JL.PERIMETER UTARA KM.40', '002', '04', 'Untuk pembuatan KTP sementara'),
('0004', 'SK-PD', 'SURAT KETERANGAN PENGANTAR', '3603132912980005', 'OEI WENG FA', 'LAKI-LAKI', 'TANGERANG', '1984-01-18', 'KONGHUCU', 'KAWIN', 'JL.KEBON TIMUN', '003', '05', 'Untuk izin menikahi mu'),
('0005', 'SK-PD', 'SURAT KETERANGAN PENGANTAR', '3603134206780001', 'JESSY ISVER', 'PEREMPUAN', 'TANGERANG', '1989-09-30', 'HINDU', 'KAWIN', 'JL.PERIMETER UTARA KM.40', '001', '04', 'Untuk membencimu yang selalu menyakiti'),
('0006', 'SKTM', 'SURAT KETERANGAN TIDAK MAMPU', '3603132904980003', 'CINTYA MARTINUS', 'PEREMPUAN', 'XIAMEN', '1980-08-27', 'KATOLIK', 'KAWIN', 'JL.PERIMETER UTARA KM.30', '001', '03', 'Untuk pengajuan beasiswa kuliah'),
('0007', 'SKU', 'SURAT KETERANGAN USAHA', '3603142912650001', 'CLARA KRISTIANI', 'PEREMPUAN', 'YOGYAKARTA', '1978-02-21', 'PROTESTAN', 'KAWIN', 'JL. PINTU KAPUK', '002', '01', 'Ayam geprek crispy super pedas');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `role` enum('admin','staff') NOT NULL DEFAULT 'staff',
  `last_login` timestamp NOT NULL DEFAULT current_timestamp(),
  `photo` varchar(64) NOT NULL DEFAULT 'user_no_image.jpg',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_active` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `full_name`, `phone`, `role`, `last_login`, `photo`, `created_at`, `is_active`) VALUES
(1, 'Dwi', '$2y$10$mUsQT/nrNsoWxNhnrpbwm.yTsUvC0CvQnu6U56MxmTRlzERBpWQMe', 'dwi.susanti@gmail.com', 'Dwi Susanti Upin', '08987953906', 'admin', '2021-12-21 06:31:36', 'user_no_image.jpg', '2020-12-10 06:30:29', 1),
(2, 'Udin', '$2y$10$2rbqpH038//7mtYDpM88Ku6nF6bn3l6D48GYhKjm7j4p80whKsvf6', 'udin.wahyudin@gmail.com', 'Udin Wahyudin', '081276981211', 'admin', '2021-12-01 17:52:28', 'user_no_image.jpg', '2020-12-12 12:54:23', 1),
(3, 'Fatih', '$2y$10$2rbqpH038//7mtYDpM88Ku6nF6bn3l6D48GYhKjm7j4p80whKsvf6', 'fatih@gmail.com', 'Muhamad Alfatih', '08976842895', 'staff', '2021-02-28 10:11:17', 'user_no_image.jpg', '2021-02-23 16:29:03', 1),
(14, 'test', '$2y$10$2rbqpH038//7mtYDpM88Ku6nF6bn3l6D48GYhKjm7j4p80whKsvf6', 'test@gmail.com', 'testing', '0898472826482', 'staff', '2021-03-06 08:21:31', 'user_no_image.jpg', '2021-03-06 08:21:31', 1),
(18, 'admin', '$2y$10$2rbqpH038//7mtYDpM88Ku6nF6bn3l6D48GYhKjm7j4p80whKsvf6', 'admin@gmail.com', 'admin test', '0928282039232', 'admin', '2021-03-06 19:04:41', 'user_no_image.jpg', '2021-03-06 19:04:09', 1),
(19, 'faiz', '$2y$10$9.uoRPeUrtVft6RmukbN5.fZyEBAMVrXF7tWnN9XOpDKOdvD54edm', 'faiz.ramdhani@gmail.com', 'Faiz Ramdhani', '0812738236478', 'admin', '2021-12-22 09:04:15', 'user_no_image.jpg', '2021-12-21 06:31:18', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelahirans`
--
ALTER TABLE `kelahirans`
  ADD PRIMARY KEY (`id_kelahiran`);

--
-- Indexes for table `kematians`
--
ALTER TABLE `kematians`
  ADD PRIMARY KEY (`id_kematian`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `penduduks`
--
ALTER TABLE `penduduks`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `surats`
--
ALTER TABLE `surats`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kematians`
--
ALTER TABLE `kematians`
  ADD CONSTRAINT `kematians_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `penduduks` (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
