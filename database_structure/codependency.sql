-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 29 Νοε 2014 στις 18:14:53
-- Έκδοση διακομιστή: 5.6.21
-- Έκδοση PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Βάση δεδομένων: `codependency`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `imported_data`
--

CREATE TABLE IF NOT EXISTS `imported_data` (
`data_id` int(11) NOT NULL,
  `GID` int(11) NOT NULL,
  `AA` float NOT NULL,
  `TNAME` varchar(256) NOT NULL,
  `NAMEGRK` varchar(256) NOT NULL,
  `ADDRESS` varchar(256) NOT NULL,
  `ADDRESS1` varchar(256) NOT NULL,
  `ADD_NUMR1` varchar(256) NOT NULL,
  `ADDRESS2` varchar(256) NOT NULL,
  `ADD_NUM2` varchar(256) NOT NULL,
  `PHONE` varchar(256) NOT NULL,
  `FAX` varchar(256) NOT NULL,
  `TK` varchar(256) NOT NULL,
  `EMAIL` varchar(256) NOT NULL,
  `DIMOS` varchar(256) NOT NULL,
  `NEWCAT` varchar(256) NOT NULL,
  `NEWSUBCAT` varchar(256) NOT NULL,
  `NEWTYPE` float NOT NULL,
  `NEWSUBTYPE` float NOT NULL,
  `NEWCOMBO` int(11) NOT NULL,
  `PARK_PL` varchar(256) NOT NULL,
  `DISBLDAC` int(11) NOT NULL,
  `H` float NOT NULL,
  `PHOTO1` varchar(256) NOT NULL,
  `PHOTO2` varchar(256) NOT NULL,
  `PHOTO3` varchar(256) NOT NULL,
  `PHOTO4` varchar(256) NOT NULL,
  `PHOTO5` varchar(256) NOT NULL,
  `POINT_X` float NOT NULL,
  `POINT_Y` float NOT NULL,
  `WEBSITE` varchar(256) NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(14) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `imported_data`
--
ALTER TABLE `imported_data`
 ADD PRIMARY KEY (`data_id`);

--
-- Ευρετήρια για πίνακα `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `imported_data`
--
ALTER TABLE `imported_data`
MODIFY `data_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT για πίνακα `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
