-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2021 at 04:22 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_warung_belajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(30) DEFAULT NULL,
  `password_admin` varchar(30) DEFAULT NULL,
  `nama_admin` varchar(30) DEFAULT NULL,
  `email_admin` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username_admin`, `password_admin`, `nama_admin`, `email_admin`) VALUES
(1, 'admin', 'admin', 'CoolAdmin', 'adminpro@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_file`
--

CREATE TABLE `tbl_file` (
  `id_file` int(11) NOT NULL,
  `id_fileKursus` int(11) DEFAULT NULL,
  `nama_file` varchar(50) DEFAULT NULL,
  `deskripsi_file` text,
  `link_file` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_file`
--

INSERT INTO `tbl_file` (`id_file`, `id_fileKursus`, `nama_file`, `deskripsi_file`, `link_file`) VALUES
(14, 1, 'aku', 'dan', 'www.youtube.com'),
(20, 1, 'dia', 'asdas', 'asda'),
(21, 1, 'jgc', 'zsz', 'dx'),
(22, 1, 'jhv', 'gjss', 'gdx'),
(23, 1, 'kjhkj', 'jkh', 'kjh');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kursus`
--

CREATE TABLE `tbl_kursus` (
  `id_kursus` int(11) NOT NULL,
  `nama_kelas` varchar(100) DEFAULT NULL,
  `kelas` varchar(100) NOT NULL,
  `jadwal` varchar(100) NOT NULL,
  `jumlah_siswa` varchar(100) NOT NULL,
  `deskripsi_kelas` varchar(255) NOT NULL,
  `foto_kursus` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kursus`
--

INSERT INTO `tbl_kursus` (`id_kursus`, `nama_kelas`, `kelas`, `jadwal`, `jumlah_siswa`, `deskripsi_kelas`, `foto_kursus`, `status`) VALUES
(1, 'Matematika', 'X', 'Rabu 07.00-08.00', '35', 'Materi Matematika Kelas X', 'mat.jpg', 1),
(2, 'Mtematika', 'XI - A', 'Senin 09.30-11.00', '30', 'Materi Matematika Kelas XI', 'mat.jpg\r\n', 1),
(11, 'Matematika Dasar', 'X-B', 'Senin 11.30-12.15', '30', 'Materi terkait matematika wajib kelas X', 'mat.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mengambil`
--

CREATE TABLE `tbl_mengambil` (
  `id_ambil` int(11) NOT NULL,
  `tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(2) NOT NULL,
  `id_kursus` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mengambil`
--

INSERT INTO `tbl_mengambil` (`id_ambil`, `tanggal`, `status`, `id_kursus`, `id_user`) VALUES
(11, '2019-02-06 07:12:00', 1, 1, 9),
(14, '2019-02-06 07:21:21', 1, 2, 9),
(15, '2021-05-13 13:48:59', 0, 11, 9),
(16, '2021-05-14 01:51:51', 0, 2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mentor`
--

CREATE TABLE `tbl_mentor` (
  `id_mentor` int(11) NOT NULL,
  `username_mentor` varchar(30) DEFAULT NULL,
  `password_mentor` varchar(30) DEFAULT NULL,
  `nama_mentor` varchar(30) DEFAULT NULL,
  `email_mentor` varchar(30) DEFAULT NULL,
  `cp_mentor` varchar(15) DEFAULT NULL,
  `foto_mentor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mentor`
--

INSERT INTO `tbl_mentor` (`id_mentor`, `username_mentor`, `password_mentor`, `nama_mentor`, `email_mentor`, `cp_mentor`, `foto_mentor`) VALUES
(5, 'asd', 'adit', 'Astero Nandito', 'astero.nandito@yahoo.com', '085382981345', 'ASUS_BADGE2.bmp'),
(6, 'astero', 'astero', 'R. Astero Nandito', 'astero.nandito@gmail.com', '087768723411', 'SAM_90561.JPG'),
(7, 'randi', 'randi', 'randitama', 'randitama200@gmail.com', '08999999999', '133018-dragon-wallpaper-hd-1080p-1920x1080-for-hd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username_user` varchar(30) DEFAULT NULL,
  `password_user` varchar(30) DEFAULT NULL,
  `nama_user` varchar(30) DEFAULT NULL,
  `email_user` varchar(30) DEFAULT NULL,
  `cp_user` varchar(30) DEFAULT NULL,
  `foto_user` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username_user`, `password_user`, `nama_user`, `email_user`, `cp_user`, `foto_user`) VALUES
(8, 'astero0016', 'user', 'Astero Nandito', 'astero.nandito@gmail.com', '081278318989', 'SAM_9056.JPG'),
(9, 'randi', 'randi', 'randitama', 'randitama@gmail.com', '0899999998', '332740.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_file`
--
ALTER TABLE `tbl_file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `tbl_kursus`
--
ALTER TABLE `tbl_kursus`
  ADD PRIMARY KEY (`id_kursus`);

--
-- Indexes for table `tbl_mengambil`
--
ALTER TABLE `tbl_mengambil`
  ADD PRIMARY KEY (`id_ambil`),
  ADD KEY `id_kursus` (`id_kursus`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_mentor`
--
ALTER TABLE `tbl_mentor`
  ADD PRIMARY KEY (`id_mentor`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_file`
--
ALTER TABLE `tbl_file`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_kursus`
--
ALTER TABLE `tbl_kursus`
  MODIFY `id_kursus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_mengambil`
--
ALTER TABLE `tbl_mengambil`
  MODIFY `id_ambil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_mentor`
--
ALTER TABLE `tbl_mentor`
  MODIFY `id_mentor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
