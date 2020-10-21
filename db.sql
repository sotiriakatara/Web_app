-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: db
-- Χρόνος δημιουργίας: 29 Νοε 2019 στις 17:01:08
-- Έκδοση διακομιστή: 8.0.18
-- Έκδοση PHP: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `test_db`
--
CREATE DATABASE IF NOT EXISTS `test_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `test_db`;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Students`
--

CREATE TABLE `Students` (
  `ID` varchar(15) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `SURNAME` varchar(20) NOT NULL,
  `FATHERNAME` varchar(20) NOT NULL,
  `GRADE` float NOT NULL,
  `MOBILENUMBER` varchar(15) NOT NULL,
  `BIRTHDAY` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Άδειασμα δεδομένων του πίνακα `Students`
--

INSERT INTO `Students` (`ID`, `NAME`, `SURNAME`, `FATHERNAME`, `GRADE`, `MOBILENUMBER`, `BIRTHDAY`) VALUES
('2015030040', 'Sotiria', 'Katara', 'Spyros', 7.65, '6945551908', '1997-12-22'),
('2015030189', 'Katia', 'Nikolaou', 'Kostas', 8.5, '6945871245', '1999-08-03'),
('2015030164', 'Maria', 'Papadopoulou', 'Alkis', 6.55, '6978445231', '1998-09-17'),
('2016035589', 'Marina', 'Vrettou', 'Panagiotis', 5.65, '6985223641', '2000-07-04');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Teachers`
--

CREATE TABLE `Teachers` (
  `ID` varchar(15) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `SURNAME` varchar(20) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `EMAIL` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Άδειασμα δεδομένων του πίνακα `Teachers`
--

INSERT INTO `Teachers` (`ID`, `NAME`, `SURNAME`, `USERNAME`, `PASSWORD`, `EMAIL`) VALUES
('2468101214', 'Nikos', 'Oikonomou', 'nikoik', '123456789', 'n.oikonomou@gmail.com'),
('', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
