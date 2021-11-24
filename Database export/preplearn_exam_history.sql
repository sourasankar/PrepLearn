-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 02:18 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u708245423_kootty420`
--

-- --------------------------------------------------------

--
-- Table structure for table `preplearn_exam_history`
--

CREATE TABLE `preplearn_exam_history` (
  `history_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `correct` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `not_attempted` int(11) NOT NULL,
  `count_questions` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `preplearn_exam_history`
--

INSERT INTO `preplearn_exam_history` (`history_id`, `email`, `date`, `correct`, `wrong`, `not_attempted`, `count_questions`) VALUES
(1, 'soura.kootty4@gmail.com', '2021-04-07', 1, 1, 1, 4),
(2, 'soura.kootty4@gmail.com', '2021-04-07', 1, 1, 1, 4),
(3, 'soura.kootty4@gmail.com', '2021-04-07', 1, 1, 1, 4),
(4, 'soura.kootty4@gmail.com', '2021-04-08', 0, 0, 9, 10),
(5, 'soura.kootty4@gmail.com', '2021-04-08', 0, 0, 9, 9),
(6, 'soura.kootty4@gmail.com', '2021-04-08', 0, 5, 0, 5),
(7, 'soura.kootty4@gmail.com', '2021-04-08', 0, 5, 0, 5),
(8, 'soura.kootty4@gmail.com', '2021-04-08', 1, 4, 0, 5),
(9, 'soura.kootty4@gmail.com', '2021-04-08', 0, 3, 2, 5),
(10, 'soura.kootty4@gmail.com', '2021-04-09', 4, 10, 6, 20),
(11, 'soura.kootty4@gmail.com', '2021-04-09', 0, 0, 5, 5),
(12, 'soura.kootty4@gmail.com', '2021-05-03', 2, 8, 0, 10),
(13, 'soura.kootty4@gmail.com', '2021-05-03', 1, 4, 0, 5),
(14, 'soura.kootty4@gmail.com', '2021-05-06', 1, 2, 2, 5),
(15, '144sayan@gmail.com', '2021-05-06', 0, 5, 0, 5),
(16, '144sayan@gmail.com', '2021-05-06', 1, 2, 2, 5),
(17, '144sayan@gmail.com', '2021-05-06', 5, 15, 0, 20),
(18, 'ssaheli365@gmail.com', '2021-05-06', 0, 3, 0, 3),
(19, 'ssaheli365@gmail.com', '2021-05-06', 4, 1, 0, 5),
(20, 'ssaheli365@gmail.com', '2021-05-06', 0, 1, 2, 3),
(21, '144sayan@gmail.com', '2021-05-06', 1, 4, 5, 10),
(22, 'ssaheli365@gmail.com', '2021-05-07', 5, 0, 0, 5),
(23, 'soura.kootty4@gmail.com', '2021-05-07', 1, 2, 0, 3),
(24, '144sayan@gmail.com', '2021-05-07', 3, 5, 2, 10),
(25, 'sahasagar2143@gmail.com', '2021-05-18', 7, 0, 0, 7),
(26, 'sahasagar2143@gmail.com', '2021-05-18', 10, 0, 0, 10),
(27, 'sahasagar2143@gmail.com', '2021-05-18', 5, 0, 0, 5),
(28, 'sahasagar2143@gmail.com', '2021-05-18', 1, 0, 0, 1),
(29, 'soura.kootty4@gmail.com', '2021-05-20', 2, 1, 17, 20),
(30, 'soura.kootty4@gmail.com', '2021-05-20', 3, 1, 1, 5),
(31, 'soura.kootty4@gmail.com', '2021-05-20', 0, 5, 0, 5),
(32, 'chakrabortyayan303@gmail.com', '2021-05-22', 0, 0, 15, 15),
(33, 'soura.kootty4@gmail.com', '2021-05-26', 1, 4, 15, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `preplearn_exam_history`
--
ALTER TABLE `preplearn_exam_history`
  ADD PRIMARY KEY (`history_id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `preplearn_exam_history`
--
ALTER TABLE `preplearn_exam_history`
  MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `preplearn_exam_history`
--
ALTER TABLE `preplearn_exam_history`
  ADD CONSTRAINT `preplearn_exam_history_ibfk_1` FOREIGN KEY (`email`) REFERENCES `preplearn_credentials` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
