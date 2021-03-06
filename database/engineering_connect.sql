-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 02 Ιουν 2017 στις 03:45:15
-- Έκδοση διακομιστή: 10.1.21-MariaDB
-- Έκδοση PHP: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `engineering_connect`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `projects`
--

CREATE TABLE `projects` (
  `proj_id` int(4) NOT NULL,
  `cid` int(4) NOT NULL,
  `title` varchar(1000) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `description` varchar(10000) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `uid` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Άδειασμα δεδομένων του πίνακα `projects`
--

INSERT INTO `projects` (`proj_id`, `cid`, `title`, `description`, `uid`) VALUES
(1, 6, 'Renovation', 'Apartment Renovation', NULL);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `UID` int(4) NOT NULL,
  `Email` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Password` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Name` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Surname` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Speciality` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`UID`, `Email`, `Password`, `Name`, `Surname`, `Speciality`) VALUES
(4, 'st0709@icte.uowm.gr', 'root', 'Andrew', 'Manitsas', 0),
(5, 'andrewmanitsas@gmail.com', '123', 'Andrew', 'Manitsas', 1),
(6, 'andrewmanitsas@outlook.com.gr', '123', 'Andrew', 'Manitsas', 9);

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`proj_id`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `projects`
--
ALTER TABLE `projects`
  MODIFY `proj_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT για πίνακα `users`
--
ALTER TABLE `users`
  MODIFY `UID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
