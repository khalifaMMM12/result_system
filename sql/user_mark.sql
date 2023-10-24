-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 10:48 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentsystem_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_mark`
--

CREATE TABLE `user_mark` (
  `id` int(11) NOT NULL,
  `u_regno` int(2) NOT NULL,
  `u_level` int(2) NOT NULL,
  `u_name` text COLLATE utf8_unicode_ci NOT NULL,
  `u_english1` int(2) NOT NULL,
  `u_math1` int(2) NOT NULL,
  `u_physics1` int(2) NOT NULL,
  `u_chemistry1` int(2) NOT NULL,
  `u_english2` int(2) NOT NULL,
  `u_math2` int(2) NOT NULL,
  `u_physics2` int(2) NOT NULL,
  `u_chemistry2` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_mark`
--

INSERT INTO `user_mark` (`id`, `u_regno`, `u_level`, `u_name`, `u_english1`, `u_math1`, `u_physics1`, `u_chemistry1`, `u_english2`, `u_math2`, `u_physics2`, `u_chemistry2`) VALUES
(15, 1054, 500, '', 50, 40, 50, 404, 100, 100, 100, 100),
(16, 1020, 500, '', 20, 10, 54, 25, 10, 52, 1000, 500),
(17, 1050, 200, 'muhammad khalifa', 10, 220, 111, 200, 100, 200, 100, 200),
(18, 1040, 100, 'khalifa', 50, 100, 100, 200, 100, 200, 100, 20),
(19, 1080, 400, 'muha', 50, 40, 80, 90, 40, 50, 60, 50),
(20, 1090, 500, 'khalifa', 50, 40, 20, 60, 80, 30, 50, 40),
(21, 1090, 400, 'kkajs', 40, 40, 50, 80, 90, 60, 20, 50),
(22, 1090, 400, 'KLLLKKK', 10, 200, 400, 500, 600, 400, 100, 200),
(23, 1090, 400, 'KLLLKKK', 10, 200, 400, 500, 600, 400, 100, 200),
(24, 1090, 400, 'KLLLKKK', 10, 200, 400, 500, 600, 400, 100, 200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_mark`
--
ALTER TABLE `user_mark`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_mark`
--
ALTER TABLE `user_mark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
