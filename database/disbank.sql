-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20.10.2020 klo 11:34
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
-- Rakenne taululle `account`
--

CREATE TABLE `account` (
  `a_id` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  `begin_balance` int(11) NOT NULL,
  `stamp` int(11) NOT NULL DEFAULT current_timestamp(),
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

-- --------------------------------------------------------

--
-- Rakenne taululle `transaction`
--

CREATE TABLE `transaction` (
  `t_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `time_stamp` int(11) NOT NULL DEFAULT current_timestamp(),
  `amount` int(11) NOT NULL,
  `t_balance` int(11) NOT NULL,
  `t_description` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Rakenne taululle `user_to_account`
--

CREATE TABLE `user_to_account` (
  `user_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`a_id`);

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
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `user_to_account`
--
ALTER TABLE `user_to_account`
  ADD UNIQUE KEY `account_id` (`account_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kayttajat`
--
ALTER TABLE `kayttajat`
  MODIFY `ID` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

