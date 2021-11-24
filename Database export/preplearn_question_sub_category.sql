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
-- Table structure for table `preplearn_question_sub_category`
--

CREATE TABLE `preplearn_question_sub_category` (
  `sub_category_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `preplearn_question_sub_category`
--

INSERT INTO `preplearn_question_sub_category` (`sub_category_id`, `category_id`, `sub_category_name`) VALUES
(1, 1, 'Time and Distance'),
(2, 1, 'Height and Distance'),
(3, 1, 'Time and Work'),
(4, 1, 'Simple Interest'),
(5, 1, 'Compound Interest'),
(6, 1, 'Profit and Loss'),
(7, 1, 'Partnership'),
(8, 1, 'Percentage'),
(9, 2, 'Spotting Errors'),
(10, 2, 'Synonyms'),
(11, 2, 'Antonyms'),
(12, 2, 'Spellings'),
(13, 2, 'Ordering of Words'),
(14, 2, 'Sentence Improvement'),
(15, 2, 'Ordering of Sentences'),
(16, 2, 'Selecting Words'),
(17, 2, 'One Word Substitutes'),
(18, 3, 'Number Series'),
(19, 3, 'Verbal Classification'),
(20, 3, 'Analogies'),
(21, 3, 'Matching Definitions'),
(22, 3, 'Verbal Reasoning'),
(23, 3, 'Logical Games'),
(24, 3, 'Statement and Assumption'),
(25, 3, 'Statement and Conclusion'),
(26, 3, 'Cause and Effect'),
(27, 1, 'Problems on Trains');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `preplearn_question_sub_category`
--
ALTER TABLE `preplearn_question_sub_category`
  ADD PRIMARY KEY (`sub_category_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `preplearn_question_sub_category`
--
ALTER TABLE `preplearn_question_sub_category`
  MODIFY `sub_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `preplearn_question_sub_category`
--
ALTER TABLE `preplearn_question_sub_category`
  ADD CONSTRAINT `preplearn_question_sub_category_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `preplearn_question_category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
