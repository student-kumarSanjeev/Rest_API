-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 30, 2025 at 08:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rest_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_api`
--

CREATE TABLE `student_api` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `age` int(10) NOT NULL,
  `city` varchar(200) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `upldatedAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_api`
--

INSERT INTO `student_api` (`id`, `name`, `age`, `city`, `createdAt`, `upldatedAt`) VALUES
(1, 'Smith', 20, 'Delhi', '2025-04-29 07:37:28', '0000-00-00 00:00:00'),
(2, 'Eliot', 23, 'Mumbai', '2025-04-29 07:37:54', '0000-00-00 00:00:00'),
(4, 'Amit', 22, 'Amritsar', '2025-04-29 07:39:14', '0000-00-00 00:00:00'),
(5, 'Sumit', 23, 'Agra', '2025-04-29 09:42:47', '0000-00-00 00:00:00'),
(6, 'Elina', 25, 'Goa', '2025-05-01 05:28:00', '0000-00-00 00:00:00'),
(8, 'Sam', 34, 'Pathankot', '2025-05-01 06:11:21', '2025-05-13 08:13:11'),
(30, 'asdf', 23, 'asdf', '2025-05-20 04:19:08', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_api`
--
ALTER TABLE `student_api`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_api`
--
ALTER TABLE `student_api`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
