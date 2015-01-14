-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 04, 2015 at 10:47 AM
-- Server version: 5.0.67
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sig`
--

-- --------------------------------------------------------

--
-- Table structure for table `markers`
--

CREATE TABLE IF NOT EXISTS `markers` (
  `id` int(5) NOT NULL auto_increment,
  `keterangan` varchar(60) NOT NULL,
  `berat` int(10) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `markers`
--

INSERT INTO `markers` (`id`, `keterangan`, `berat`, `lat`, `lng`) VALUES
(3, 'Desa Saptosari', 600, -8.0388331945111, 110.532760620117),
(2, 'Desa Semanu', 800, -8.04835165753945, 110.652236938477),
(1, 'Desa Temuireng', 700, -8.04971141972574, 110.414657592773),
(5, 'Desa Giricahyo', 300, -8.01163635612207, 110.367965698242),
(4, 'Desa Giriasih', 100, -8.01707586936225, 110.354232788086);
