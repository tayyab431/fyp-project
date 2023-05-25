-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: May 25, 2023 at 11:16 AM
-- Server version: 8.0.33
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clothdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('tayyabraja713@gmail.com', '12345'),
('tayyabraja713@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `first_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email_or_phone` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `cnic` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `languages` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `unit_name` text COLLATE utf8mb4_general_ci NOT NULL,
  `unit_address` text COLLATE utf8mb4_general_ci NOT NULL,
  `registration_no` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `link_account` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `acc_password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `conf_password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`first_name`, `last_name`, `username`, `email_or_phone`, `cnic`, `languages`, `unit_name`, `unit_address`, `registration_no`, `link_account`, `acc_password`, `password`, `conf_password`, `created_at`) VALUES
('raja', 'tayyab', 'raja Tayyab ', 'tayyabraja713@gmail.com', '37302-2381838-5', 'english,urdu', 'style store', 'Gopal nagar main bazaar near humayou gujjar milk shop', '14374385326', 'tayyab432', '12345', '12345', '12345', '2023-05-11 00:19:01.461244'),
('abuzar', 'khan', 'abuzar456', 'abuzar@gmail.com', '29902-1232345-6', 'english,urdu', 'khanajax', 'lahore', '84579', 'khanwelco', '1234', '12345', '12345', '2023-05-16 07:40:50.575081'),
('shahzaib', 'khan', 'shahzaib23', 'shahzaib@gmail.com', '37306-2391936-1', 'english,urdu', 'manufacture', 'wapda town ', '2QD4av5', 'shahzaib34', '12345', '1234', '1234', '2023-05-19 11:25:00.613431'),
('ammar ', 'hassan', 'ammar43', 'ammar@gmail.com', '37309-2381845-1', 'english,urdu', 'design lab', 'islm', '2wbg4g', 'ammarhssn23', '12345', '12345', '12345', '2023-05-20 06:26:18.060889');

-- --------------------------------------------------------

--
-- Table structure for table `panel_users`
--

CREATE TABLE `panel_users` (
  `id` int NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `panel_users`
--

INSERT INTO `panel_users` (`id`, `name`, `phone`, `email`, `password`, `created_at`) VALUES
(1, 'abuzar khan oso', '03124922060', 'abuzar@gmail.com', '12345 ', '2023-05-10 11:35:11.415080'),
(2, 'Raja tayyab shafaat ', '03200018589', 'tayyabraja713@gmail.com', '12345 ', '2023-05-10 11:35:30.179787'),
(3, 'Raja tayyab shafaat ', '03200018589', 'tayyabraja713@gmail.com', '12345 ', '2023-05-10 11:35:39.078585'),
(22, 'wajahat', '03484503365', 'wajahat@gmail.com', '12345', '2023-05-16 08:07:20.045697'),
(23, 'hamza', '03124922070', 'alihamza@gmail.com', '12345', '2023-05-19 11:37:04.512694');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `username` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `user_email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `user_password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `retype-password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `hashed_password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`username`, `user_email`, `user_password`, `retype-password`, `hashed_password`) VALUES
('', '', '', '', ''),
('raja', 'raja123@gmail.com', '', '', '$2y$10$mRslo2UWMemNJQxfZjaRI.s2PP05Uivyr7tY5VFUMD8eFwsdmhPEG'),
('wajahat', 'waji123@gmail.com', '', '', '$2y$10$RsuH9oz.Sz/VbIYcwtCt/egVc9e8me8Ixuc.DPFst.KP0sL7vC7jm'),
('abuzar', 'abuzar123@gmail.com', '', '', '$2y$10$InVQQ9D6BFTuYXWMTSNVEeNNdlAuNq8NKrJNBluglJZXMw9FqeE1C'),
('mubashar ', 'mubashar@gmail.com', NULL, NULL, '$2y$10$/6QwkQU0jRJSwTcW0gAwd.1eHt2THveoFTT1MpwzCh9xD1XUDr416'),
('ahmad', 'ahmad@gmail.com', NULL, NULL, '$2y$10$JhC8eI3PxaAXf9Fu9Y.zNer0X.yD.Fak4Tp1yO8.0GIlJxlg/Vo8i'),
('saad', 'saad@gmail.com', NULL, NULL, '$2y$10$s8LqsJwSMOn3lNhNFeZ92eNfFR6BPz2NT03rD8ym/YqvzcuvwfNo.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `panel_users`
--
ALTER TABLE `panel_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `panel_users`
--
ALTER TABLE `panel_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
