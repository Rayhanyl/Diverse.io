-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 05:18 PM
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
-- Database: `v2diverse`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `id_category` int(11) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`id_category`, `category`) VALUES
(1, 'Box'),
(2, 'Pembersih lantai'),
(3, 'Sabun Cair'),
(4, 'Sabun Batang'),
(5, 'Shampoo'),
(6, 'Pelembut Pakaian');

-- --------------------------------------------------------

--
-- Table structure for table `tb_indication`
--

CREATE TABLE `tb_indication` (
  `id_indication` int(11) NOT NULL,
  `indication` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_indication`
--

INSERT INTO `tb_indication` (`id_indication`, `indication`) VALUES
(1, 'Eco Friendly Certified'),
(2, 'Not Eco Friendly Certified');

-- --------------------------------------------------------

--
-- Table structure for table `tb_payment`
--

CREATE TABLE `tb_payment` (
  `id_payment` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `pay_address` varchar(255) NOT NULL,
  `pay_option` varchar(25) NOT NULL,
  `pay_picture` varchar(100) NOT NULL,
  `pay_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `id_product` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `company` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `product_decs` varchar(255) NOT NULL,
  `prdct_pos` varchar(255) NOT NULL,
  `prdct_nev` varchar(100) NOT NULL,
  `indication` int(11) NOT NULL,
  `qr_product` varchar(100) NOT NULL,
  `product_picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id_product`, `category`, `product_name`, `product_price`, `company`, `location`, `product_decs`, `prdct_pos`, `prdct_nev`, `indication`, `qr_product`, `product_picture`) VALUES
(1, 6, 'So Klin Softener', '20.300/800ml', 'Wingscare', 'Jakarta,Indonesia', 'Pelembut pakaian sekali bilas', '-', '-DHTDMAC (Dihydrogenated amonium klorida)\r\n-PDMS (polydimethylsiloxane)', 2, '1.png', '1.png'),
(2, 4, 'Sabun Wortel Alpukat', '45.000/120gram', 'Demi Bumi', 'Jakarta,Indonesia', 'Sabun terbuat dari bahan alami tanpa zat berbahaya', '-Wortel dan Alpukat\r\n-Tanpa pewangi\r\n-Kemasan bioplastik dari rumput laut', '-', 1, '1.png', '1.png'),
(3, 5, 'Coconut Shampoo', '90.000/500gram', 'RØNNE', 'Jakarta,Indonesia', 'Shampoo with honey bar soap', '-Paraben Free\r\n-Botol shampoo terbuat dari sabun batangan\r\n-Terbuat dari kelapa dan madu alami', '-', 1, '1.png', '1.png'),
(4, 2, 'Super Pell Himalayan Berries', '29.200/700ml', 'Unilever', 'Jakarta,indonesia', 'Lantai bersih tanpa kuman ', '-', '-Triclosan (kandungan beracun)\r\n-Sodium Laureth Sulfate', 2, '1.png', '1.png'),
(6, 3, 'Dettol Cairan Antiseptic', '113.900/1liter', 'Dettol', 'Jakarta,Indonesia', 'Antiseptic nomor 1 di Indonesia', '-', '-Triclosan (kandungan beracun)', 2, '1.png', '1.png'),
(7, 6, 'Downy Pewangi', '35.800/900ml', 'P&G', 'Jakarta,indonesia', 'Cairan pelembut pakaian dengan keharuman tahan lama', '-DHTDMAC (Dihydrogenated amonium klorida)\r\n-PDMS (polydimethylsiloxane)', '-', 2, '1.png', '1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name_user` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `name_user`, `email`, `phone`, `address`, `role`) VALUES
(1, 'admin', '123', 'Jefri Nanda I', 'jefri.nanda@gmail.com', '82112440715', 'Jalan Ir. H. Juanda, Bogor Tengah; Bogor, West Java, Indonesia', 'admin'),
(2, 'rayhan', '123', 'Rayhan Yuda Lesmana', 'Rayhanyuda13@gmail.com', '82112440715', 'Jl. Banda No. 30 (Jl. R.E. Martadinata) Bandung West Java 40115 Indonesia', 'user'),
(3, 'rayhanyl', '123', 'Yuda Lesmana', 'yuda13@gmail.com', '82112440715', 'Babakan Cilandak No264 sukasari, pesona pasteur', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `tb_indication`
--
ALTER TABLE `tb_indication`
  ADD PRIMARY KEY (`id_indication`);

--
-- Indexes for table `tb_payment`
--
ALTER TABLE `tb_payment`
  ADD PRIMARY KEY (`id_payment`),
  ADD KEY `user` (`user`),
  ADD KEY `product` (`product`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `category` (`category`),
  ADD KEY `indication` (`indication`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_indication`
--
ALTER TABLE `tb_indication`
  MODIFY `id_indication` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_payment`
--
ALTER TABLE `tb_payment`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_payment`
--
ALTER TABLE `tb_payment`
  ADD CONSTRAINT `tb_payment_ibfk_1` FOREIGN KEY (`user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_payment_ibfk_2` FOREIGN KEY (`product`) REFERENCES `tb_product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD CONSTRAINT `tb_product_ibfk_1` FOREIGN KEY (`category`) REFERENCES `tb_category` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_product_ibfk_2` FOREIGN KEY (`indication`) REFERENCES `tb_indication` (`id_indication`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
