-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 17, 2022 at 02:37 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekrutmen_karyawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply_job`
--

CREATE TABLE `apply_job` (
  `id_apply_job` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pelamar` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `hasil_test` int(11) DEFAULT NULL,
  `hasil_psikotes` int(11) DEFAULT NULL,
  `status_hasil` varchar(255) NOT NULL,
  `tgl_lamar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply_job`
--

INSERT INTO `apply_job` (`id_apply_job`, `id_user`, `id_pelamar`, `id_lowongan`, `hasil_test`, `hasil_psikotes`, `status_hasil`, `tgl_lamar`) VALUES
(3, 2, 1, 3, 80, 100, 'Diterima', '2022-06-23'),
(4, 2, 1, 4, 50, 0, 'Sedang Di Proses', '2022-07-11'),
(5, 9, 2, 3, 20, 0, 'Tidak Diterima', '2022-09-23');

-- --------------------------------------------------------

--
-- Table structure for table `bahasa`
--

CREATE TABLE `bahasa` (
  `id_bahasa` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `bahasa_asing` varchar(255) NOT NULL,
  `tingkat_keahlian_bahasa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahasa`
--

INSERT INTO `bahasa` (`id_bahasa`, `id_user`, `bahasa_asing`, `tingkat_keahlian_bahasa`) VALUES
(1, 2, 'Inggris', 'Baik'),
(2, 9, 'Inggris', 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `departement`
--

CREATE TABLE `departement` (
  `id_departement` int(11) NOT NULL,
  `nama_departement` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departement`
--

INSERT INTO `departement` (`id_departement`, `nama_departement`) VALUES
(1, 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(2, 'Web Development');

-- --------------------------------------------------------

--
-- Table structure for table `keahlian`
--

CREATE TABLE `keahlian` (
  `id_keahlian` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `keterampilan` varchar(255) NOT NULL,
  `tingkat_keahlian_keterampilan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keahlian`
--

INSERT INTO `keahlian` (`id_keahlian`, `id_user`, `keterampilan`, `tingkat_keahlian_keterampilan`) VALUES
(1, 2, 'Bahasa Pemrograman PHP', 'Sedang'),
(2, 2, 'LARAVELs', 'Sangat Baik'),
(3, 2, 'CODEIGNITER', 'Sangat Baik'),
(4, 2, 'JQUERY', 'Ahli'),
(5, 9, 'LARAVEL', 'Sangat Baik');

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `id_lowongan` int(11) NOT NULL,
  `nama_lowongan` varchar(255) NOT NULL,
  `id_departement` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `max_usia` int(11) NOT NULL,
  `min_pend` varchar(255) NOT NULL,
  `jurusan_pend` varchar(255) NOT NULL,
  `salary` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `kriteria` varchar(255) NOT NULL,
  `id_test` int(11) DEFAULT NULL,
  `id_psikotes` int(11) DEFAULT NULL,
  `tgl_close` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lowongan`
--

INSERT INTO `lowongan` (`id_lowongan`, `nama_lowongan`, `id_departement`, `id_jabatan`, `max_usia`, `min_pend`, `jurusan_pend`, `salary`, `deskripsi`, `kriteria`, `id_test`, `id_psikotes`, `tgl_close`, `status`) VALUES
(3, 'Web Developer', 1, 2, 24, 'D4/S1', 'Teknik Informatika', 6000000, 'test', 'Web Development', 3, 3, '2022-09-30', 1),
(4, 'IT Programmer', 1, 2, 23, 'D3', 'Teknik Informatika', 6000000, 'Test', 'test', 4, 4, '2022-07-31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pelamar`
--

CREATE TABLE `pelamar` (
  `id_pelamar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_pelamar` varchar(255) NOT NULL,
  `no_ktp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hp` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(255) NOT NULL,
  `status_kawin` varchar(255) NOT NULL,
  `kewarganegaraan` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `no_npwp` varchar(255) NOT NULL,
  `sim` varchar(255) NOT NULL,
  `no_sim` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `alamat_domisili` varchar(255) NOT NULL,
  `status_tempat_tinggal` varchar(255) NOT NULL,
  `foto_pelamar` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelamar`
--

INSERT INTO `pelamar` (`id_pelamar`, `id_user`, `nama_pelamar`, `no_ktp`, `email`, `hp`, `tempat_lahir`, `tgl_lahir`, `jk`, `status_kawin`, `kewarganegaraan`, `agama`, `no_npwp`, `sim`, `no_sim`, `alamat`, `alamat_domisili`, `status_tempat_tinggal`, `foto_pelamar`, `cv`) VALUES
(1, 2, 'Abi Baskara Atthallah', '3209201709990012', 'abibaskara211@gmail.com', '0822999151278', 'Bandung', '1999-09-17', 'Laki-Laki', 'Lajang', 'WNI', 'Islam', '73128901293810', 'SIM C', '329847230717289', 'Test', 'Test', 'Milik Orang Tua', 'indosat_baru1.png', 'Note_program_Rendy_Jereniko1.pdf'),
(2, 9, 'Vallent Perkasa', '21213123', 'vallent@gmail.com', '012837129321', 'Bandung', '1999-09-17', 'Laki-Laki', 'Menikah', 'WNI', 'Islam', '73128901293810', 'SIM C', '329847230717289', 'test', 'test', 'Milik Sendiri', 'Foto_Abi_Baskara_A.jpeg', 'Abi_baskara_atthallah_(1).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `pendidikan_terakhir` varchar(255) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `start_year` varchar(255) NOT NULL,
  `end_year` varchar(255) NOT NULL,
  `nilai_pend` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id_pendidikan`, `id_user`, `pendidikan_terakhir`, `nama_sekolah`, `kota`, `jurusan`, `start_year`, `end_year`, `nilai_pend`) VALUES
(1, 2, 'Strata Satu (S1)', 'Politeknik Negeri Jakarta', 'Depok', 'Teknik Informatika', '2022-06', '2022-06', '3'),
(2, 2, 'SMA/SMK Sederajat', 'SMA Pasundan 1 Bandung', 'Bandung', 'IPAs', '2021-01', '2022-06', '34.5'),
(3, 2, '', '', '', '', '', '', ''),
(4, 9, 'Strata Satu (S1)', 'Politeknik Negeri Jakarta', 'Kota Depok', 'Teknik Informatika', '2022-09', '2022-12', '3.46');

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id_pengalaman` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `posisi_terakhir` varchar(255) NOT NULL,
  `perusahaan` varchar(255) NOT NULL,
  `jabatan_terakhir` varchar(255) NOT NULL,
  `mulai_bekerja` varchar(255) NOT NULL,
  `berakhir_bekerja` varchar(255) NOT NULL,
  `gaji_pokok` int(11) NOT NULL,
  `gaji_insentif` int(11) NOT NULL,
  `fasilitas_terakhir` text NOT NULL,
  `alasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengalaman`
--

INSERT INTO `pengalaman` (`id_pengalaman`, `id_user`, `posisi_terakhir`, `perusahaan`, `jabatan_terakhir`, `mulai_bekerja`, `berakhir_bekerja`, `gaji_pokok`, `gaji_insentif`, `fasilitas_terakhir`, `alasan`) VALUES
(1, 2, 'Web Development', 'PT Anugrah Inti Artha Mandiri', 'Web Development', '2022-06', '2022-06', 5000000, 5000000, 'test', 'test'),
(2, 2, 'IT Programmer', 'LINTASARTA', 'IT Programmer', '2022-01', '2022-06', 6000000, 6000000, 'test', 'test'),
(3, 2, 'IT Programmer12', 'LINTASARTA12', 'IT Programmer1', '2022-01', '2022-06', 1000000, 1000000, 'test2', 'test23'),
(4, 2, 'IT Programmer2', 'LINTASARTA2', 'IT Programmer2', '2022-01', '2022-12', 1200000, 1200000, 'test', 'test'),
(5, 9, 'Web Development', 'LINTASARTA', 'Web Development', '2022-08', '2022-12', 5400000, 1000000, 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `psikotes`
--

CREATE TABLE `psikotes` (
  `id_psikotes` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `pertanyaan_psikotes` varchar(255) NOT NULL,
  `option_a_psikotes` varchar(255) NOT NULL,
  `option_b_psikotes` varchar(255) NOT NULL,
  `option_c_psikotes` varchar(255) NOT NULL,
  `option_d_psikotes` varchar(255) NOT NULL,
  `kunjaw_psikotes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `psikotes`
--

INSERT INTO `psikotes` (`id_psikotes`, `id_lowongan`, `pertanyaan_psikotes`, `option_a_psikotes`, `option_b_psikotes`, `option_c_psikotes`, `option_d_psikotes`, `kunjaw_psikotes`) VALUES
(2, 4, 'test pertanyaan 131', 'ini pilihan a13', 'ini pilihan b13', 'ini pilihan c31', 'ini pilihan d13', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `option_a` varchar(255) NOT NULL,
  `option_b` varchar(255) NOT NULL,
  `option_c` varchar(255) NOT NULL,
  `option_d` varchar(255) NOT NULL,
  `kunjaw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id_soal`, `id_lowongan`, `pertanyaan`, `option_a`, `option_b`, `option_c`, `option_d`, `kunjaw`) VALUES
(7, 3, 'Ini Contoh Pertanyaan 1', 'ayam', 'kucing', 'anjing', 'sapi', 'D'),
(8, 3, 'test pertanyaan 12', 'ini pilihan a2', 'ini pilihan b2', 'ini pilihan c2', 'ini pilihan d2', 'A'),
(9, 3, 'test pertanyaan 13', 'ini pilihan a3', 'ini pilihan b3', 'ini pilihan c3', 'ini pilihan d3', 'A'),
(10, 3, 'Test pertnyaan 14', 'ini pilihan a4', 'ini pilihan b4', 'ini pilihan c4', 'ini pilihan d4', 'C'),
(11, 3, 'test pertanyaan 15', 'ini pilihan a5', 'ini pilihan b5', 'ini pilihan c5', 'ini pilihan d5', 'B'),
(12, 4, 'test pertanyaan 1', 'ini pilihan a', 'ini pilihan b', 'ini pilihan c', 'ini pilihan d', 'A'),
(13, 4, 'test pertanyaan 12', 'ini pilihan a2', 'ini pilihan b2', 'ini pilihan c2', 'ini pilihan d2', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `id_training` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `training` varchar(255) NOT NULL,
  `sertifikasi` varchar(255) NOT NULL,
  `penyelenggara` varchar(255) NOT NULL,
  `tahun_pelatihan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`id_training`, `id_user`, `training`, `sertifikasi`, `penyelenggara`, `tahun_pelatihan`) VALUES
(1, 2, 'CISCO', 'CISCO', 'KSP', '2022-06'),
(2, 2, 'Junior Web Programmers', 'KSPTIK', 'KSPTIK', '2022-06'),
(3, 9, 'CISCO', 'CISCO', 'KSP', '2022-09');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `role` enum('Admin','Supervisor','Manager','User') NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT 'default.png',
  `password` varchar(255) NOT NULL,
  `is_active` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `role`, `email`, `no_telp`, `foto`, `password`, `is_active`) VALUES
(1, 'Abi Baskara Atthallah', 'Admin', 'admin@gmail.com', '082299915127', 'footer-crop.png', '$2y$10$1bLDRcJ0qISuNRT7.PYry.8iu3e0M9YJnLoG1MrzDYzjvfynI/eUi', '1'),
(2, 'User', 'User', 'user@gmail.com', '0812345678', 'work.png', '$2y$10$6aFVvy2Ruld237BQPe1TCe/AazzIzkAIkUq2Frq8zZYJaYDwa../6', '1'),
(6, 'Manager Abi Baskara A', 'Manager', 'manager@gmail.com', '082299915127', 'default.png', '$2y$10$NoeLzPUkP.AJ8v47jOiqIe799AngxH63pXPZ0vMfOyJV.qRvxTmIW', '1'),
(7, 'Supervisor Abi Baskara A', 'Supervisor', 'supervisor@gmail.com', '082299915127', 'graduate.png', '$2y$10$U7uvTmNpXQfOunub1ciVdO8FnwEuqXJz59gEO4OkyAETTbkm2m8BG', '1'),
(8, 'Abi Baskara Atthallah', 'User', 'abibaskara211@gmail.com', '0822999151127', 'default.png', '$2y$10$Bo/6E6a6OQh6Gj2LeI0O0.fOGvUk4sVfC.m5hGdixvnBXDyNXOLS.', '1'),
(9, 'vallent', 'User', 'vallent@gmail.com', '082299915127', 'default.png', '$2y$10$KrM9X9lOYdw86DecvER.DuJH68RvR7G.w5O0rPBLFtHavwPDxHQ9G', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply_job`
--
ALTER TABLE `apply_job`
  ADD PRIMARY KEY (`id_apply_job`);

--
-- Indexes for table `bahasa`
--
ALTER TABLE `bahasa`
  ADD PRIMARY KEY (`id_bahasa`);

--
-- Indexes for table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`id_departement`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `keahlian`
--
ALTER TABLE `keahlian`
  ADD PRIMARY KEY (`id_keahlian`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id_lowongan`);

--
-- Indexes for table `pelamar`
--
ALTER TABLE `pelamar`
  ADD PRIMARY KEY (`id_pelamar`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id_pengalaman`);

--
-- Indexes for table `psikotes`
--
ALTER TABLE `psikotes`
  ADD PRIMARY KEY (`id_psikotes`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id_training`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply_job`
--
ALTER TABLE `apply_job`
  MODIFY `id_apply_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bahasa`
--
ALTER TABLE `bahasa`
  MODIFY `id_bahasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `departement`
--
ALTER TABLE `departement`
  MODIFY `id_departement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `keahlian`
--
ALTER TABLE `keahlian`
  MODIFY `id_keahlian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id_lowongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelamar`
--
ALTER TABLE `pelamar`
  MODIFY `id_pelamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id_pengalaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `psikotes`
--
ALTER TABLE `psikotes`
  MODIFY `id_psikotes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `id_training` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
