-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2023 at 02:19 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek_uass`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_user` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `status` enum('Y','N') NOT NULL,
  `level` enum('akademik','bendahara') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_user`, `username`, `password`, `keterangan`, `nama_lengkap`, `email`, `telepon`, `status`, `level`) VALUES
(1, 'uyun', 'a3c0e5c01bf16af3b5bb040a811e64a8', 'admin', 'Uyunun Lusiana', 'uyununlusiana@gmail.com', '081997601074', 'Y', 'akademik');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `dosen_id` int(10) NOT NULL,
  `level` int(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nidn` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `ktp` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `handphone` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `propinsi` varchar(50) NOT NULL,
  `negara` varchar(50) NOT NULL,
  `homebase` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `gelar` varchar(50) NOT NULL,
  `jenjang` varchar(50) NOT NULL,
  `keilmuan` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `institusi_induk` varchar(50) NOT NULL,
  `tgl_bekerja` date NOT NULL,
  `status_dosen` varchar(50) NOT NULL,
  `aktif` enum('Y','N') NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`dosen_id`, `level`, `username`, `password`, `nidn`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `ktp`, `agama`, `alamat`, `email`, `telepon`, `handphone`, `keterangan`, `kota`, `propinsi`, `negara`, `homebase`, `jurusan`, `gelar`, `jenjang`, `keilmuan`, `jabatan`, `institusi_induk`, `tgl_bekerja`, `status_dosen`, `aktif`, `foto`) VALUES
(77, 0, 'Saya', 'Saya', 'N11299', 'Ramadan', 'Praya', '1978-06-10', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', ''),
(523, 2, 'Dosen', 'Dosen', 'Ds23', 'muhammad', 'Mataram', '1989-01-12', '5202074684888', 'Islam', 'Mataram', 'muhammad@gmail.com', '0876543268', '09854321', 'Dosen Tetap', 'Mataram', 'NTB', 'Repoblik Indonesia', 'Mataram', 'Sistem informasi', 'S.kom', 'S1', 'Komputer', 'Dosen', 'STMIK LOMBOK', '2018-05-07', 'Dosen tetap', 'Y', 'images'),
(1128, 1, 'Lusiana', 'Lusiana', 'N1128', 'Lusiana uyunun', 'Mataram', '2001-07-11', '520207468666', 'Islam', 'Mataram', 'uyununlusianaa@gmail.com', '0876543299', '0985432188', 'Dosen Tetap', 'Mataram', 'NTB', 'Repoblik Indonesia', 'Mataram', 'Sistem informasi', 'S.kom', 'S1', 'Komputer', 'Dosen', 'STMIK LOMBOK', '2018-05-07', 'Dosen tetap', 'Y', 'g');

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `identitas_id` varchar(10) NOT NULL,
  `kode_hukum` varchar(20) NOT NULL,
  `nama_identitas` varchar(50) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota` varchar(25) NOT NULL,
  `kode_pos` varchar(6) NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `fax` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `website` varchar(50) NOT NULL,
  `no_akta` varchar(25) NOT NULL,
  `tgl_akta` date NOT NULL,
  `no_sah` varchar(25) NOT NULL,
  `tgl_sah` date NOT NULL,
  `aktif` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`identitas_id`, `kode_hukum`, `nama_identitas`, `tgl_mulai`, `alamat`, `kota`, `kode_pos`, `telepon`, `fax`, `email`, `website`, `no_akta`, `tgl_akta`, `no_sah`, `tgl_sah`, `aktif`) VALUES
('12345557', '877887', 'Tes', '2022-09-11', 'Praya ', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', ''),
('12345678', '87887', 'cobacoba', '2022-12-11', 'Mataram ', 'Mataram', '88675', '08765411', 'tes', 'muhammad@gmail.com', 'coba', '76', '2022-11-11', '8', '2022-11-11', 'Y'),
('M553', 'BN77', 'Conroh', '2023-01-04', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `jadwal_id` bigint(10) NOT NULL,
  `kalender_id` varchar(10) NOT NULL,
  `identitas_id` varchar(10) NOT NULL,
  `program_id` varchar(10) NOT NULL,
  `matakuliah_id` int(11) NOT NULL,
  `kode_jurusan` varchar(10) NOT NULL,
  `ruang` varchar(10) NOT NULL,
  `kelas` varchar(8) NOT NULL,
  `dosen_id` int(10) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `jurusan_id` int(11) NOT NULL,
  `identitas_id` varchar(10) NOT NULL,
  `kode_jurusan` varchar(11) NOT NULL,
  `nama_jurusan` varchar(30) NOT NULL,
  `jenjang` varchar(5) NOT NULL,
  `akreditasi` varchar(25) NOT NULL,
  `no_skdikti` varchar(30) NOT NULL,
  `tgl_skdikti` date NOT NULL,
  `no_skban` varchar(30) NOT NULL,
  `tgl_skban` date NOT NULL,
  `aktif` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`jurusan_id`, `identitas_id`, `kode_jurusan`, `nama_jurusan`, `jenjang`, `akreditasi`, `no_skdikti`, `tgl_skdikti`, `no_skban`, `tgl_skban`, `aktif`) VALUES
(1, '0', '1kkkk', 'Sistem Informasi', 'S1', 'A', '3232343243', '2022-11-06', '324234234', '2022-11-07', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `kalender_akd`
--

CREATE TABLE `kalender_akd` (
  `kalender_id` varchar(10) NOT NULL,
  `identitas_id` varchar(10) NOT NULL,
  `jurusan_id` int(10) NOT NULL,
  `program_id` varchar(10) NOT NULL,
  `nama` varchar(10) NOT NULL,
  `tgl_krsmulai` date NOT NULL,
  `tgl_krsselesai` date NOT NULL,
  `tglubah_krsmulai` date NOT NULL,
  `tglubah_krsselesai` date NOT NULL,
  `tgl_cetakkhs` date NOT NULL,
  `aktif` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kalender_akd`
--

INSERT INTO `kalender_akd` (`kalender_id`, `identitas_id`, `jurusan_id`, `program_id`, `nama`, `tgl_krsmulai`, `tgl_krsselesai`, `tglubah_krsmulai`, `tglubah_krsselesai`, `tgl_cetakkhs`, `aktif`) VALUES
('KLN5', 'M553', 1, 'P665', 'Contohh', '2023-01-04', '2023-01-11', '2023-01-12', '2023-01-16', '2023-01-17', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE `krs` (
  `id` bigint(20) NOT NULL,
  `id_jadwal` bigint(20) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `tgl_cetak` date NOT NULL,
  `aktif` enum('Y','N') NOT NULL,
  `nim` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `kode_mtk` varchar(10) NOT NULL,
  `nama_matakuliah` varchar(50) NOT NULL,
  `semester` varchar(2) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `sks` varchar(2) NOT NULL,
  `bobot` varchar(2) NOT NULL,
  `dosen` varchar(50) NOT NULL,
  `gelar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum`
--

CREATE TABLE `kurikulum` (
  `kurikulum_id` int(11) NOT NULL,
  `kode` varchar(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan_id` int(11) NOT NULL,
  `sesi` varchar(50) NOT NULL,
  `jml_sesi` int(11) NOT NULL,
  `aktif` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kurikulum`
--

INSERT INTO `kurikulum` (`kurikulum_id`, `kode`, `nama`, `jurusan_id`, `sesi`, `jml_sesi`, `aktif`) VALUES
(1, 'k212', 'Kurikulum MDK', 1, 'tiga', 6, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `nama_lengkap`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Muhammad ahmad', 'admin'),
(2, 'dosen', 'ce28eed1511f631af6b2a7bb0a85d636', 'Husain', 'dosen'),
(3, 'si17200049', '5131ba54ef3f8e3ff3e4dd4273348e67', 'Uyunun Lusiana', 'mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `angkatan` varchar(8) NOT NULL,
  `kurikulum_id` int(11) NOT NULL,
  `identitas` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status_awal` varchar(5) NOT NULL,
  `status_mhs` varchar(5) NOT NULL,
  `program_id` varchar(10) NOT NULL,
  `kode_jurusan` varchar(20) NOT NULL,
  `pembimbing_akademik` varchar(50) NOT NULL,
  `kelamin` char(3) NOT NULL,
  `warga_negara` char(3) NOT NULL,
  `kebangsaan` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` char(10) NOT NULL,
  `status_sipil` char(2) NOT NULL,
  `alamat_asal` varchar(255) NOT NULL,
  `kota_asal` varchar(50) NOT NULL,
  `RT_asal` varchar(10) NOT NULL,
  `RW_asal` varchar(10) NOT NULL,
  `kode_posAsal` varchar(50) NOT NULL,
  `propinsi_asal` varchar(50) NOT NULL,
  `negara_asal` varchar(50) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `agama_ayah` char(2) NOT NULL,
  `pendidikan_ayah` varchar(5) NOT NULL,
  `pekerjaan_ayah` varchar(5) NOT NULL,
  `hidup_ayah` varchar(5) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `agama_ibu` char(2) NOT NULL,
  `pendidikan_ibu` varchar(5) NOT NULL,
  `pekerjaan_ibu` varchar(5) NOT NULL,
  `hidup_ibu` varchar(5) NOT NULL,
  `alamat_ortu` varchar(255) NOT NULL,
  `kota_ortu` varchar(50) NOT NULL,
  `kode_posOrtu` varchar(50) NOT NULL,
  `propinsi_ortu` varchar(50) NOT NULL,
  `negara_ortu` varchar(50) NOT NULL,
  `telepon_ortu` varchar(50) NOT NULL,
  `handphone_ortu` varchar(50) NOT NULL,
  `email_ortu` varchar(100) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `asal_sekolah1` varchar(50) NOT NULL,
  `jenis_sekolah` varchar(20) NOT NULL,
  `kota_sekolah` varchar(50) NOT NULL,
  `jurusan_sekolah` varchar(50) NOT NULL,
  `nilai_sekolah` varchar(10) NOT NULL,
  `tahun_lulus` varchar(10) NOT NULL,
  `aktif` enum('Y','N') NOT NULL,
  `lulus_ujian` enum('Y','N') NOT NULL,
  `nilai_ujian` float NOT NULL,
  `grade_nilai` varchar(5) NOT NULL,
  `tanggal_lulus` date NOT NULL,
  `ipk` decimal(10,0) NOT NULL,
  `total_sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `level`, `username`, `password`, `angkatan`, `kurikulum_id`, `identitas`, `nama`, `foto`, `status_awal`, `status_mhs`, `program_id`, `kode_jurusan`, `pembimbing_akademik`, `kelamin`, `warga_negara`, `kebangsaan`, `tempat_lahir`, `tanggal_lahir`, `agama`, `status_sipil`, `alamat_asal`, `kota_asal`, `RT_asal`, `RW_asal`, `kode_posAsal`, `propinsi_asal`, `negara_asal`, `nama_ayah`, `agama_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `hidup_ayah`, `nama_ibu`, `agama_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `hidup_ibu`, `alamat_ortu`, `kota_ortu`, `kode_posOrtu`, `propinsi_ortu`, `negara_ortu`, `telepon_ortu`, `handphone_ortu`, `email_ortu`, `asal_sekolah`, `asal_sekolah1`, `jenis_sekolah`, `kota_sekolah`, `jurusan_sekolah`, `nilai_sekolah`, `tahun_lulus`, `aktif`, `lulus_ujian`, `nilai_ujian`, `grade_nilai`, `tanggal_lulus`, `ipk`, `total_sks`) VALUES
('SI17200049', 3, 'SI17200049', 'SI17200049', '2020', 1, 'mahasiswa', 'Uyunun Lusiana', '', '', '', '', 'M55', '', '', '', '', '', '2023-01-02', 'islam', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '0000-00-00', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `matakuliah_id` int(11) NOT NULL,
  `identitas` varchar(100) NOT NULL,
  `kode_mtk` varchar(15) NOT NULL,
  `nama_matakuliah` varchar(100) NOT NULL,
  `nama_english` varchar(100) NOT NULL,
  `semester` varchar(2) NOT NULL,
  `sks` varchar(2) NOT NULL,
  `jurusan` varchar(10) NOT NULL,
  `kelompok_mtk` varchar(2) NOT NULL,
  `jenis_mtk` varchar(2) NOT NULL,
  `jenis_kurikulum` varchar(2) NOT NULL,
  `status_mtk` varchar(20) NOT NULL,
  `kurikulum_id` int(11) NOT NULL,
  `penanggung_jawab` varchar(50) NOT NULL,
  `ket` varchar(200) NOT NULL,
  `aktif` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `nilai_id` int(11) NOT NULL,
  `identitas_id` varchar(10) NOT NULL,
  `kode_jurusan` varchar(10) NOT NULL,
  `grade` varchar(2) NOT NULL,
  `bobot` varchar(2) NOT NULL,
  `nilai_min` decimal(10,0) NOT NULL,
  `nilai_mak` decimal(10,0) NOT NULL,
  `keterangan` varchar(25) NOT NULL,
  `aktif` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `program_id` varchar(10) NOT NULL,
  `nama_program` varchar(15) NOT NULL,
  `identitas_id` varchar(10) NOT NULL,
  `aktif` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`program_id`, `nama_program`, `identitas_id`, `aktif`) VALUES
('P665', 'Komputer', 'M553', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `regmhs`
--

CREATE TABLE `regmhs` (
  `id_reg` int(11) NOT NULL,
  `tahun` varchar(6) NOT NULL,
  `identitas` varchar(20) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `tgl_reg` date NOT NULL,
  `aktif` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`dosen_id`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`identitas_id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`jadwal_id`),
  ADD KEY `dosen_id` (`dosen_id`),
  ADD KEY `identitas_id` (`identitas_id`),
  ADD KEY `program_id` (`program_id`),
  ADD KEY `kalender_id` (`kalender_id`),
  ADD KEY `matakuliah_id` (`matakuliah_id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`jurusan_id`);

--
-- Indexes for table `kalender_akd`
--
ALTER TABLE `kalender_akd`
  ADD PRIMARY KEY (`kalender_id`),
  ADD KEY `identitas_id` (`identitas_id`),
  ADD KEY `program_id` (`program_id`),
  ADD KEY `jurusan_id` (`jurusan_id`);

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jadwal` (`id_jadwal`);

--
-- Indexes for table `kurikulum`
--
ALTER TABLE `kurikulum`
  ADD PRIMARY KEY (`kurikulum_id`),
  ADD KEY `jurusan_id` (`jurusan_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `kurikulum_id` (`kurikulum_id`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`matakuliah_id`),
  ADD KEY `kurikulum_id` (`kurikulum_id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`nilai_id`),
  ADD KEY `identitas_id` (`identitas_id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`program_id`),
  ADD KEY `identitas_id` (`identitas_id`);

--
-- Indexes for table `regmhs`
--
ALTER TABLE `regmhs`
  ADD PRIMARY KEY (`id_reg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128118;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `dosen_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8887;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `jadwal_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `jurusan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `krs`
--
ALTER TABLE `krs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kurikulum`
--
ALTER TABLE `kurikulum`
  MODIFY `kurikulum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `matakuliah_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `nilai_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `regmhs`
--
ALTER TABLE `regmhs`
  MODIFY `id_reg` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`dosen_id`),
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`identitas_id`) REFERENCES `identitas` (`identitas_id`),
  ADD CONSTRAINT `jadwal_ibfk_3` FOREIGN KEY (`program_id`) REFERENCES `program` (`program_id`),
  ADD CONSTRAINT `jadwal_ibfk_4` FOREIGN KEY (`kalender_id`) REFERENCES `kalender_akd` (`kalender_id`),
  ADD CONSTRAINT `jadwal_ibfk_5` FOREIGN KEY (`matakuliah_id`) REFERENCES `matakuliah` (`matakuliah_id`);

--
-- Constraints for table `kalender_akd`
--
ALTER TABLE `kalender_akd`
  ADD CONSTRAINT `kalender_akd_ibfk_1` FOREIGN KEY (`identitas_id`) REFERENCES `identitas` (`identitas_id`),
  ADD CONSTRAINT `kalender_akd_ibfk_2` FOREIGN KEY (`program_id`) REFERENCES `program` (`program_id`),
  ADD CONSTRAINT `kalender_akd_ibfk_3` FOREIGN KEY (`jurusan_id`) REFERENCES `jurusan` (`jurusan_id`);

--
-- Constraints for table `krs`
--
ALTER TABLE `krs`
  ADD CONSTRAINT `krs_ibfk_1` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`jadwal_id`);

--
-- Constraints for table `kurikulum`
--
ALTER TABLE `kurikulum`
  ADD CONSTRAINT `kurikulum_ibfk_1` FOREIGN KEY (`jurusan_id`) REFERENCES `jurusan` (`jurusan_id`);

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`kurikulum_id`) REFERENCES `kurikulum` (`kurikulum_id`);

--
-- Constraints for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD CONSTRAINT `matakuliah_ibfk_1` FOREIGN KEY (`kurikulum_id`) REFERENCES `kurikulum` (`kurikulum_id`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`identitas_id`) REFERENCES `identitas` (`identitas_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
