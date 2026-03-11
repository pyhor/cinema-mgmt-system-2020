-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2020 at 02:46 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wayang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `katalaluan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `nama`, `email`, `katalaluan`) VALUES
('admin', 'ADMIN TIKET WAYANG', 'admin@mail.com', '1234abcd');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(20) NOT NULL,
  `nokp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `umur` varchar(3) DEFAULT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id` int(20) NOT NULL,
  `notiket` int(20) NOT NULL,
  `tarikh_beli` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `notiket` int(20) NOT NULL,
  `nokerusi_baris` varchar(20) NOT NULL,
  `tarikh_tayangan` varchar(20) NOT NULL,
  `masa_tayangan` varchar(20) NOT NULL,
  `kodwayang` varchar(20) NOT NULL,
  `harga` double(4,2) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tontonan`
--

CREATE TABLE `tontonan` (
  `kodtontonan` varchar(20) NOT NULL,
  `jenistontonan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wayang`
--

CREATE TABLE `wayang` (
  `kodwayang` varchar(20) NOT NULL,
  `tajukwayang` varchar(100) NOT NULL,
  `ulasan` text DEFAULT NULL,
  `kodtontonan` varchar(10) NOT NULL,
  `bahasa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`,`notiket`,`tarikh_beli`),
  ADD KEY `notiket` (`notiket`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`notiket`),
  ADD KEY `kodwayang` (`kodwayang`);

--
-- Indexes for table `tontonan`
--
ALTER TABLE `tontonan`
  ADD PRIMARY KEY (`kodtontonan`);

--
-- Indexes for table `wayang`
--
ALTER TABLE `wayang`
  ADD PRIMARY KEY (`kodwayang`),
  ADD KEY `kodtontonan` (`kodtontonan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `notiket` int(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`id`) REFERENCES `pelanggan` (`id`),
  ADD CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`notiket`) REFERENCES `tiket` (`notiket`);

--
-- Constraints for table `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `tiket_ibfk_1` FOREIGN KEY (`kodwayang`) REFERENCES `wayang` (`kodwayang`);

--
-- Constraints for table `wayang`
--
ALTER TABLE `wayang`
  ADD CONSTRAINT `wayang_ibfk_1` FOREIGN KEY (`kodtontonan`) REFERENCES `tontonan` (`kodtontonan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
