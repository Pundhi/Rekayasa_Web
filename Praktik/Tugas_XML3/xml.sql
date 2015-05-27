-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2015 at 06:57 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `xml`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel`
--

CREATE TABLE IF NOT EXISTS `tabel` (
  `id_jurusan` int(3) NOT NULL AUTO_INCREMENT,
  `nama_jurusan` varchar(50) DEFAULT NULL,
  `fakultas` varchar(50) DEFAULT NULL,
  `email_jurusan` varchar(100) DEFAULT NULL,
  `web_jurusan` varchar(50) DEFAULT NULL,
  `no_telepon_jurusan` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_jurusan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tabel`
--

INSERT INTO `tabel` (`id_jurusan`, `nama_jurusan`, `fakultas`, `email_jurusan`, `web_jurusan`, `no_telepon_jurusan`) VALUES
(1, 'Sistem Informasi', 'FTIK', 'si@usm.ac.id', 'si.usm.ac.id', '0246702757');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
