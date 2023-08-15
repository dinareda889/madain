-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2023 at 08:50 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `madain_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_messages`
--

CREATE TABLE `tbl_messages` (
  `msg_id` int(11) NOT NULL,
  `msg_date` varchar(15) DEFAULT NULL,
  `msg_time` varchar(15) DEFAULT NULL,
  `msg_title` varchar(300) DEFAULT NULL,
  `msg_content` text DEFAULT NULL,
  `user_phone` varchar(25) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `act_ended` enum('reading','read') NOT NULL DEFAULT 'reading',
  `act_ended_emp_id` int(11) DEFAULT NULL,
  `act_ended_date` varchar(15) DEFAULT NULL,
  `act_ended_time` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_messages`
--

INSERT INTO `tbl_messages` (`msg_id`, `msg_date`, `msg_time`, `msg_title`, `msg_content`, `user_phone`, `email`, `customer_id`, `act_ended`, `act_ended_emp_id`, `act_ended_date`, `act_ended_time`) VALUES
(1205, '2022-07-18', '1658118524', 'اسم العضو 155', 'llllllllllll', '01244444444', 're@gmail.com', NULL, 'reading', NULL, NULL, NULL),
(1206, '2022-07-18', '1658118962', 'اسم العضو 1llk', 'kkkkkkkkkkkkkkkkkk', '01255544444', 're@gmail.com', NULL, 'reading', NULL, NULL, NULL),
(1207, '2022-07-18', '1658119043', 'اسم العضو 1', 'lllllllllllllllllllll', '0125555555', 're@gmail.com', NULL, 'reading', NULL, NULL, NULL),
(1208, '2022-07-18', '1658140176', 'omnia ali', 'تجربة الرساله  ', '0102365478', 'admin@gmail.com', NULL, 'read', 1, '2022-07-18', '01:31 PM'),
(1209, '2022-07-19', '1658236657', 'اسم العضو 1', 'kkkkkkkkkkkkkkkk', '01255555555', 're@gmail.com', NULL, 'reading', NULL, NULL, NULL),
(1210, '2023-05-10', '1683723317', 'dina', 'bad', '01013636171', 'dina@yaho.com', NULL, 'reading', NULL, NULL, NULL),
(1211, '2023-05-10', '1683723584', 'ddd', 'bbb', '01013636171', 'dina@yahoo.com', NULL, 'reading', NULL, NULL, NULL),
(1212, '2023-05-10', '1683724104', 'ddd', 'dinaaaa', '01013636171', 'dinaa@yahoo.com', NULL, 'reading', NULL, NULL, NULL),
(1213, '2023-05-10', '1683724184', 'd0', 'dsfsdf', '0', 'dina@yahoo.com', NULL, 'reading', NULL, NULL, NULL),
(1214, '2023-05-10', '1683724279', 'dina', 'fsdfsdfdsf', '00000', 'din@yahoo.com', NULL, 'reading', NULL, NULL, NULL),
(1215, '2023-05-10', '1683724617', 'eeee', 'dfgfggfdgfdg', '012569888', 'a@yahoo.com', NULL, 'reading', NULL, NULL, NULL),
(1216, '2023-05-10', '1683724764', 'dina', 'dina', '0123654789', 'dina@yahoo.com', NULL, 'read', 1, '2023-08-13', '06:15 PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_messages`
--
ALTER TABLE `tbl_messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_messages`
--
ALTER TABLE `tbl_messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1217;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
