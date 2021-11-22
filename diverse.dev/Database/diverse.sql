-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2021 at 02:51 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diverse`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_booking`
--

CREATE TABLE `tb_booking` (
  `id_book` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_booking`
--

INSERT INTO `tb_booking` (`id_book`, `product`, `user`, `status`, `foto`) VALUES
(12, 2, 2, 'Already Paid', '191120210958472.png'),
(13, 8, 2, 'Already Paid', '19112021100920D.png'),
(14, 4, 2, 'Already Paid', '19112021144431D.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `id_product` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id_product`, `kategori`, `nama`, `harga`, `deskripsi`, `foto`) VALUES
(1, 'Box', 'Charolte Box', 450000, 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', ''),
(2, 'Box', 'Verdant Box', 500000, 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', ''),
(3, 'Box', 'Emerald Box', 20000, 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', ''),
(4, 'Box', 'Lion Box', 450000, 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', ''),
(5, 'Box', 'Dragon Box', 300000, 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', ''),
(6, 'Box', 'Estes Box', 150000, 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', ''),
(7, 'Box', 'Tiger Box', 100000, 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', ''),
(8, 'Box', 'Future Box', 250000, 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `role` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `email`, `no_tlp`, `role`) VALUES
(1, 'jefri', '123', 'jefri@gmail.com', '6282112440715', 'admin'),
(2, 'rayhan', '123', 'rayhan@gmail.com', '6282144120715', 'user'),
(7, 'idam', '123', 'idam@gmail.com', '62988234763', 'user'),
(8, 'yuda', '123', 'yuda@gmail.com', '62988234763', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_booking`
--
ALTER TABLE `tb_booking`
  ADD PRIMARY KEY (`id_book`),
  ADD KEY `product` (`product`,`user`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_booking`
--
ALTER TABLE `tb_booking`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_booking`
--
ALTER TABLE `tb_booking`
  ADD CONSTRAINT `tb_booking_ibfk_1` FOREIGN KEY (`user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_booking_ibfk_2` FOREIGN KEY (`product`) REFERENCES `tb_product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
