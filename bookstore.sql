-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2021 at 04:35 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `kode_buku` varchar(20) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `nama_buku` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `harga` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`kode_buku`, `cover`, `nama_buku`, `id_kategori`, `penerbit`, `harga`) VALUES
('BK001', 'buku_1625902792.jpg', 'Sukses Ujian Nasional 2016 Bahasa Inggris', 13, 'Cipta Pustaka Utama', '35000'),
('BK002', 'buku_1625903214.jpg', '100 Best Street Food of Indonesia', 9, 'Kompas Penerbit Buku', '191200'),
('BK003', 'buku_1625903381.jpg', 'FILSAFAT SAINS: Menurut Ibn al-Haytham', 7, 'Prenada Media', '71200'),
('BK004', 'buku_1625926987.jpg', 'Attack On Titan - Volume 22', 19, 'Elex Media Komputindo', '22000'),
('BK005', 'buku_1625927184.jpg', 'Disney Movie Collection: The Lion King', 17, 'Gramedia Pustaka Utama', '60000');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_buku`
--

CREATE TABLE `kategori_buku` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_buku`
--

INSERT INTO `kategori_buku` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Antropologi'),
(2, 'Astronomi'),
(3, 'Biografi'),
(4, 'Bisnis'),
(5, 'Ekonomi'),
(6, 'Etika'),
(7, 'Filsafat'),
(8, 'Komputer'),
(9, 'Masak'),
(10, 'Medis'),
(11, 'Musik'),
(12, 'Pemasaran'),
(13, 'Pengembangan Diri'),
(14, 'Psikologi'),
(15, 'Sastra'),
(16, 'Sosiologi'),
(17, 'Dongeng'),
(18, 'Koleksi Fotografi'),
(19, 'Nonfiksi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `nama`, `password`) VALUES
(1, 'admin@bookstore.com', 'Administrator', '0192023a7bbd73250516f069df18b500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kode_buku`),
  ADD KEY `fk_buku_kategori` (`id_kategori`);

--
-- Indexes for table `kategori_buku`
--
ALTER TABLE `kategori_buku`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_buku`
--
ALTER TABLE `kategori_buku`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `fk_buku_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_buku` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
