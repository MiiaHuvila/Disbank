-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20.10.2020 klo 10:18
-- Palvelimen versio: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `disbank`
--

-- --------------------------------------------------------

--
-- Rakenne taululle `kayttajat`
--

CREATE TABLE `kayttajat` (
  `ID` int(4) UNSIGNED NOT NULL,
  `user_login` varchar(20) NOT NULL,
  `user_pass` varchar(20) NOT NULL,
  `user_nickname` varchar(20) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_url` varchar(30) NOT NULL,
  `user_registered` date NOT NULL DEFAULT current_timestamp(),
  `user_status` int(11) NOT NULL,
  `display_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vedos taulusta `kayttajat`
--

INSERT INTO `kayttajat` (`ID`, `user_login`, `user_pass`, `user_nickname`, `user_email`, `user_url`, `user_registered`, `user_status`, `display_name`) VALUES
(1, 'Kirjautuja', 'Salasana', 'Pelle', 'Pelle@centria.student.com', 'centrianpöllöt.com', '2020-10-01', 0, 'Master');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kayttajat`
--
ALTER TABLE `kayttajat`
  ADD UNIQUE KEY `id` (`ID`),
  ADD UNIQUE KEY `display_name` (`display_name`),
  ADD UNIQUE KEY `user_login` (`user_login`),
  ADD UNIQUE KEY `user_nickname` (`user_nickname`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kayttajat`
--
ALTER TABLE `kayttajat`
  MODIFY `ID` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

