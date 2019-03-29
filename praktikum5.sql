-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2019 at 04:01 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praktikum5`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nama` varchar(30) DEFAULT NULL,
  `nim` varchar(10) DEFAULT NULL,
  `tgl_lahir` varchar(20) DEFAULT NULL,
  `ipk` decimal(8,2) DEFAULT NULL,
  `kelas` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nama`, `nim`, `tgl_lahir`, `ipk`, `kelas`) VALUES
('Egan Kusmaya Putra', '6701174110', '1998-11-19', '3.62', '41-01'),
('Hafizh Aziz', '6701173001', '2000-05-11', '3.10', '41-01'),
('Fadhil Armando', '6701173211', '1999-10-13', '2.56', '41-01'),
('Muhamad Yusuf Ramadhan', '6701174969', '1998-01-09', '3.81', '41-02'),
('Rifqi Riyandi', '6701174254', '1999-08-21', '3.30', '41-02'),
('Muhammad Amien Fadhillah', '6701174002', '1999-09-03', '2.90', '41-02'),
('Firza Maulana Nasution', '6701174003', '2000-05-01', '4.00', '41-02'),
('Fitria Riadathul Chusniah', '6701174034', '1999-02-05', '3.90', '41-02'),
('Nining Parwati', '6701174304', '1999-04-01', '3.20', '41-02'),
('Ester Lina Maudya', '6701173222', '1999-06-10', '3.40', '41-02'),
('Zsavinsky Sulton', '6701174233', '1999-08-17', '2.70', '41-02'),
('Kamal Ramadhan', '6701173998', '1998-03-29', '2.88', '41-02'),
('Rizki Saputra Yusuf', '6701174202', '1999-12-18', '2.74', '41-02'),
('Aan Yuni', '6701174121', '1999-02-21', '3.20', '41-02'),
('Ikhsan Herdi', '6701176969', '1999-12-21', '3.60', '41-02'),
('Osama Bin Laden', '6701170091', '1999-10-30', '2.80', '41-02'),
('Erik Lescherr', '6701174123', '1930-01-17', '3.80', '41-02'),
('Charles Xavier', '6701173462', '1935-06-19', '4.00', '41-02'),
('Isaac Newton', '6701172222', '1673-03-25', '4.00', '41-02'),
('admin', '123123', '2000-12-12', '2.40', '41-02');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
