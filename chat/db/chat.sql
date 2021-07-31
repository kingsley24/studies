-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2021 at 01:44 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(11) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `incoming_msg_id`, `outgoing_msg_id`, `message`) VALUES
(1, 2, 3, 'bite kibwa'),
(2, 1013750484, 1062935535, 'dnfdjk'),
(3, 1013750484, 1062935535, 'yesoooo'),
(4, 1013750484, 1062935535, 'snjfksnf'),
(5, 1013750484, 1062935535, 'fnsjkfn'),
(6, 1013750484, 1062935535, 'fnsjkfnasjka'),
(7, 1013750484, 1062935535, 'fashasnjkgasn'),
(8, 1319370339, 1062935535, 'wa ntare'),
(9, 1222291208, 1062935535, 'nfjsnjkfs'),
(10, 1062935535, 1013750484, 'njfksnkf'),
(11, 1062935535, 1013750484, 'nfsjkfn'),
(12, 1062935535, 1013750484, 'sfsf'),
(13, 1062935535, 1013750484, 'bhjhb'),
(14, 1062935535, 1013750484, 'sdfg'),
(15, 1062935535, 1013750484, 'sdsfs'),
(16, 1062935535, 1013750484, 'fsf'),
(17, 1222291208, 1013750484, 'fsfs'),
(18, 1222291208, 1013750484, 'yooo'),
(19, 1013750484, 1222291208, 'yesosfs'),
(20, 1013750484, 1222291208, 'yoyo'),
(21, 1222291208, 1013750484, 'sup');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `unique_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(1, 1013750484, 'NDAYISHIMIYE', 'Placide', 'placidestana12@gmail.com', '1233', '1627292680img.JPG', 'Active now'),
(2, 1222291208, 'kanyandekwe', 'batista', 'batidta@gmail.com', '100', '1627292680img.JPG', 'Active now'),
(3, 1062935535, 'murenzi', 'albert', 'murenzi@gmail.com', '123', '1627292680img.JPG', 'Active now'),
(4, 1319370339, 'ntare', 'ntare', 'ntare@gmail.com', '123', '1627297553000_9EK9HK (1).jpg', 'Active now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
