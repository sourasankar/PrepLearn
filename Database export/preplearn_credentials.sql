-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 02:17 PM
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
-- Table structure for table `preplearn_credentials`
--

CREATE TABLE `preplearn_credentials` (
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `preplearn_credentials`
--

INSERT INTO `preplearn_credentials` (`first_name`, `last_name`, `email`, `password`, `phone`) VALUES
('sayan', 'baidya', '144sayan@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '8272968512'),
('ayan', 'chaktaborty', 'chakrabortyayan303@gmail.com', 'dc8032303196b9cd4667e8253d64abce', '8250971220'),
('aindrila', 'das', 'dasaindrila14@gmail.com', '7dfb9729fb005a51b59e1d0f803b7ce3', '9123661244'),
('debosmita', 'ghosh', 'debosmita.ghosh00@gmail.com', 'c59c9576bd533a1996455c39d23ffe49', '7003804647'),
('susmita', 'dey', 'deysusmita437@gmail.com', '9264d2faa059c83df9a4e25e44aaff90', '8787598316'),
('dibendu', 'kundu', 'dibendukundu5@gmail.com', '978a3486c2e40833982db8b2bb4a1a9a', '9635036656'),
('sagar', 'saha', 'sahasagar2143@gmail.com', '25d55ad283aa400af464c76d713c07ad', '7001871808'),
('saswata', 'biswas', 'saswatalogan9830@gmail.com', '82db3cd4206eeb44838ec3401e94022e', '9830674659'),
('soura sankar', 'mondal', 'soura.kootty4@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '9051688818'),
('saheli', 'sarkar', 'ssaheli365@gmail.com', '2a44439cf98f8d08c89e53f657bb4d43', '8240709773'),
('tanmoy', 'paul', 'tanmoypaul804@gmail.com', 'f53ab64206765285ce0903626b024ecb', '8777390398');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `preplearn_credentials`
--
ALTER TABLE `preplearn_credentials`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
