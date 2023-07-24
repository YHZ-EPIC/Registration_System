-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2023 at 08:51 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anime`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(128) NOT NULL,
  `userEmail` varchar(128) NOT NULL,
  `userUid` varchar(128) NOT NULL,
  `userPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userUid`, `userPwd`) VALUES
(1, 'yhz_abc', 'yhz@gmail.com', 'yhz', '$2y$10$/NRcTX8kfmVoXJDby7ibTuUuZ6cLkw02FsGrRwAmnQu0wMc7H107m'),
(2, 'Ronald Rijent', 'kokomo@nomail.com', 'dora', '$2y$10$RzcVO/6q6.i/5xBKbLwxoOsdZ3K1d2q7L.G25N4xip/MHJu.VT98G'),
(3, 'Gordon Ramsay', 'gordon@gmail.com', 'Naruto', '$2y$10$kmZMAb4gDWEyZEb1oWwvfubu4QM3j9/GIShwKnZJAkbM0S0E1XkPq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
