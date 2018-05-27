-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 27, 2018 at 01:36 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `urunler`
--

-- --------------------------------------------------------

--
-- Table structure for table `urun`
--

DROP TABLE IF EXISTS `urun`;
CREATE TABLE IF NOT EXISTS `urun` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `small` int(11) NOT NULL,
  `medium` int(11) DEFAULT NULL,
  `large` int(11) DEFAULT NULL,
  `availability` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `urun`
--

INSERT INTO `urun` (`id`, `type`, `name`, `small`, `medium`, `large`, `availability`) VALUES
(1, 1, 'Vegeterian Pizza', 15, 17, 20, 100),
(2, 1, 'Chicken Pizza', 18, 20, 22, 100),
(3, 1, 'Meat Pizza', 15, 17, 20, 100),
(4, 1, 'Pepperoni Pizza', 19, 21, 23, 100),
(5, 1, 'Mix Pizza', 20, 22, 24, 100),
(6, 1, 'COME308 Special Pizza', 22, 23, 26, 100),
(7, 2, 'Water', 2, NULL, NULL, 100),
(8, 2, 'Cola', 4, NULL, NULL, 100),
(9, 2, 'Beer', 6, NULL, NULL, 100),
(10, 2, 'Ayran', 3, NULL, NULL, 100),
(11, 2, 'Tea', 4, NULL, NULL, 100),
(12, 2, 'Coffee', 4, NULL, NULL, 100),
(13, 3, 'Apple Pie', 2, NULL, NULL, 100),
(14, 3, 'Chocolate Cake', 4, NULL, NULL, 100),
(15, 3, 'Bananna Pudding', 6, NULL, NULL, 100),
(16, 3, 'Ice Cream', 3, NULL, NULL, 100),
(17, 3, 'Qurabiya', 4, NULL, NULL, 100),
(18, 3, 'Stroopwafel', 4, NULL, NULL, 100);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
