-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 01, 2018 at 06:43 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `Resources`
--

CREATE TABLE `Resources` (
  `id` int(11) NOT NULL,
  `field` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Resources`
--

INSERT INTO `Resources` (`id`, `field`, `title`, `link`) VALUES
(1, 'AI', 'ATTention: Understanding Authors and Topics in Context of Temporal Evolution', 'https://pdfs.semanticscholar.org/55dc/5473494e8dda464b846129ce0ccb8cd24df6.pdf'),
(2, 'Data_mining', 'From Data Mining to Knowledge Discovery in Databases', 'http://storm.cis.fordham.edu/%7Egweiss/selected-papers/from_data_mining_to_kdd.pdf'),
(3, 'Data_mining', 'Link Mining: A New Data Mining Challenge', 'http://storm.cis.fordham.edu/%7Egweiss/selected-papers/link-mining-overview.pdf'),
(4, 'Data_mining', 'Person Identification in Webcam Images: An Application of Semi-Supervised Learning', 'http://storm.cis.fordham.edu/%7Egweiss/selected-papers/person-identification-semi-supervised.pdf');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `Resources`
--
ALTER TABLE `Resources`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Resources`
--
ALTER TABLE `Resources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
