-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2018 at 05:25 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `info_berita`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita_budaya`
--

CREATE TABLE `berita_budaya` (
  `budaya_id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL,
  `data_entri` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `berita_ekonomi`
--

CREATE TABLE `berita_ekonomi` (
  `ekonomi_id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL,
  `data_entri` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita_ekonomi`
--

INSERT INTO `berita_ekonomi` (`ekonomi_id`, `judul`, `gambar`, `isi_berita`, `data_entri`) VALUES
(1, 'mkkm', 'rose-968655_960_720.jpg', 'iaudisadisahdj', '2018-05-19');

-- --------------------------------------------------------

--
-- Table structure for table `berita_pendidikan`
--

CREATE TABLE `berita_pendidikan` (
  `pendidikan_id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL,
  `data_entri` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita_pendidikan`
--

INSERT INTO `berita_pendidikan` (`pendidikan_id`, `judul`, `gambar`, `isi_berita`, `data_entri`) VALUES
(1, 'ini', 'contoh-puisi-pendek-tentang-ibu.jpg', 'vgvnbmnm', '2018-05-19');

-- --------------------------------------------------------

--
-- Table structure for table `berita_politik`
--

CREATE TABLE `berita_politik` (
  `politik_id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL,
  `data_entri` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita_politik`
--

INSERT INTO `berita_politik` (`politik_id`, `judul`, `gambar`, `isi_berita`, `data_entri`) VALUES
(2, 'kjnjn', 'contoh-puisi-cinta-tanah-air1.jpg', 'bhbhbmnb', '2018-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `berita_sosial`
--

CREATE TABLE `berita_sosial` (
  `sosial_id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL,
  `data_entri` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita_sosial`
--

INSERT INTO `berita_sosial` (`sosial_id`, `judul`, `gambar`, `isi_berita`, `data_entri`) VALUES
(1, 'sdfhs', 'Contoh-Syair-Pendidikan.jpg', 'xz cnmsbcms dcm', '2018-05-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita_budaya`
--
ALTER TABLE `berita_budaya`
  ADD PRIMARY KEY (`budaya_id`);

--
-- Indexes for table `berita_ekonomi`
--
ALTER TABLE `berita_ekonomi`
  ADD PRIMARY KEY (`ekonomi_id`);

--
-- Indexes for table `berita_pendidikan`
--
ALTER TABLE `berita_pendidikan`
  ADD PRIMARY KEY (`pendidikan_id`);

--
-- Indexes for table `berita_politik`
--
ALTER TABLE `berita_politik`
  ADD PRIMARY KEY (`politik_id`);

--
-- Indexes for table `berita_sosial`
--
ALTER TABLE `berita_sosial`
  ADD PRIMARY KEY (`sosial_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita_budaya`
--
ALTER TABLE `berita_budaya`
  MODIFY `budaya_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `berita_ekonomi`
--
ALTER TABLE `berita_ekonomi`
  MODIFY `ekonomi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `berita_pendidikan`
--
ALTER TABLE `berita_pendidikan`
  MODIFY `pendidikan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `berita_politik`
--
ALTER TABLE `berita_politik`
  MODIFY `politik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `berita_sosial`
--
ALTER TABLE `berita_sosial`
  MODIFY `sosial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
