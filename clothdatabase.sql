-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Jun 08, 2023 at 09:55 AM
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
  `hashed_password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_role` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'manufacturer',
  `created_at` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`first_name`, `last_name`, `username`, `email_or_phone`, `cnic`, `languages`, `unit_name`, `unit_address`, `registration_no`, `link_account`, `acc_password`, `password`, `conf_password`, `hashed_password`, `user_role`, `created_at`) VALUES
('raja', 'tayyab', 'tayyab12', 'tayyabraja713@gmail.com', '37302-2381838-5', 'english,urdu', 'style store', 'PIA society', '14374385326', 'tayyab432', '123', '123', '$2y$10$y2afx9Vl3.W0FYybZLRcvOP37bUPf01.ZBy8ZuVwIycgaIlFC4fbi', '$2y$10$g/Ks1llahEW7GrsVnr1JOu1PVyXur..B/0h472B5zS8EjUn3C4jku', 'manufacturer', '2023-05-30 12:17:12.949484');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer_profile`
--

CREATE TABLE `manufacturer_profile` (
  `manufacturer_id` int NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `surname` varchar(100) DEFAULT NULL,
  `description` text,
  `supply` varchar(50) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `language` varchar(50) DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `category_type` varchar(50) DEFAULT NULL,
  `profile_picture` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `manufacturer_profile`
--

INSERT INTO `manufacturer_profile` (`manufacturer_id`, `name`, `surname`, `description`, `supply`, `location`, `language`, `joining_date`, `address`, `message`, `email`, `category_type`, `profile_picture`) VALUES
(1, 'Raja ', 'tayyab', 'myyyy', 'tshirt', 'lahore', 'english,urdu', '2023-12-12', 'Gopal nagar main bazaar near humayou gujjar milk shop', 'follow us', 'tayyabraja713@gmail.com', NULL, 0x89504e470d0a1a0a0000000d49484452000000300000003008060000005702f987000000097048597300000b1300000b1301009a9c18000003cc49444154789ced995b6c0c5118c7675184be494943da9eb38b565ce3aee8038d5e66a2ca9cd38ba409c97aad07ea4548247810d4835b42857810b55db71d6d082122511e44c4fd41a4151e84875256fb97992edd8d9dd9333bb3b6624ff24f36b3df7ef3fbcff9be2fb3339294599995598e177648c3a0d2a5e0743b1809829387e0f40d38ed01a7881551a5a1b2a04e9e084e7783d3777f829a897c80eacb492fb89c3b069cec04a35fc5c1a3c448307df06afe6c70f23229f0587d01236fc14827186906f356419d3632b5f09c56277dd58576867681d32df0cfcd721f5e2d60e0249c32781ed3270fc0c914f7e0b9770938f9f677e0e960b3333addad496363cab8aa77a8cfcb7566c098eb698147a42f3a20499ee49b369df03c2295d6da8757a5e12e8d4b177681bcb03d99c0487d4a6036cf04ceac00fc45767f5b6dcf00278f5d056f9c019c5e0968ca80ce9602755e3b39ae89c3d7142c740d7c53117064f92078b4f62fb193eb07aa0ac7895efd438ec1374e059a970221393efc2f6d99e56e331bcdcbc8fba4c11b2603fb8b81ab09c07f2958016c982a9aff4462038ccc4f0abcde07ec5a005cac10038fd6a91540adc879c81381f2a14db6c06bbdc08e7940a0dc3eb816a5bd8b129f8bd13ea8d3b213ec00ed1002afa140d31ce0dc2a67e05a44ad656217ac86cc348797240f38fd2436cb4bdd01d7223a2f68807b579b1ba82bc8174a1275e2a787976177751ef6accdc333b3712912df2a6880d1468bfa27b25d033ac8b655b986f6accb4f68c034fe42b9a001d26cd5c0dbd26620205a42a4cda281c931bb06f432d0a17498e70225641a1f10de811b1606e865bb065c5340d840a7550f3c489b81b60ac112a2cfac76a03b6d0682820618edb6da81dea16f807cb6f80726b485a9317051b8847ae21b583f61ecbf6180f4c6375055382ead062e558a1a08c73750ef9be4d440dfc90284f74996d2639c19a0fd5637724dc62d6b6203edf14dc8e86ba108eff3c481f718dfe9312625744be0ea7f03f7fa4da7d0c024a2e560f4a365a2f635e3a129afcd76a2bfb5183f8ee6207c20cb90fe593f665e42f22b1c2cce4b303ebba07a175bc20f9af079c1e823b36446cc75650234b9d385fabf6fe46ac81f6d313aefda7ec4682464a4c5cc80117353cd46486e4148e9b70f2ef741934fa0bd74ac91abcc37ca04fe98a3f7067acd8191eff10cfc8eb956b9009a7247183ea4dc46489e1f93c33f37cb76bd8b9b20cba29f509bc65da9a408294dd0e41b08c9ddd0945e4321b9cb38a6295bf598b8bf2d29199154bddb7ccc7ecfca80e3379d3cc97a173ec9409d1e4f496e49f238aef7cccaacff70fd04a174b1c7c0cba0840000000049454e44ae426082);

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
  `hashed_password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_role` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`username`, `user_email`, `user_password`, `retype-password`, `hashed_password`, `user_role`) VALUES
('', '', '', '', '', 'user'),
('raja', 'raja123@gmail.com', '', '', '$2y$10$mRslo2UWMemNJQxfZjaRI.s2PP05Uivyr7tY5VFUMD8eFwsdmhPEG', 'user'),
('wajahat', 'waji123@gmail.com', '', '', '$2y$10$RsuH9oz.Sz/VbIYcwtCt/egVc9e8me8Ixuc.DPFst.KP0sL7vC7jm', 'user'),
('abuzar', 'abuzar123@gmail.com', '', '', '$2y$10$InVQQ9D6BFTuYXWMTSNVEeNNdlAuNq8NKrJNBluglJZXMw9FqeE1C', 'user'),
('mubashar ', 'mubashar@gmail.com', NULL, NULL, '$2y$10$/6QwkQU0jRJSwTcW0gAwd.1eHt2THveoFTT1MpwzCh9xD1XUDr416', 'user'),
('ahmad', 'ahmad@gmail.com', NULL, NULL, '$2y$10$JhC8eI3PxaAXf9Fu9Y.zNer0X.yD.Fak4Tp1yO8.0GIlJxlg/Vo8i', 'user'),
('saad', 'saad@gmail.com', NULL, NULL, '$2y$10$s8LqsJwSMOn3lNhNFeZ92eNfFR6BPz2NT03rD8ym/YqvzcuvwfNo.', 'user'),
('<H2>ALI</H2>', 'AB@GMAIL.COM', NULL, NULL, '$2y$10$zsJieyCGanReZ6c8RPOXD.Pdu3bzdjsvS1Z0IrhgqqpstK0uP.kqK', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manufacturer_profile`
--
ALTER TABLE `manufacturer_profile`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `panel_users`
--
ALTER TABLE `panel_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manufacturer_profile`
--
ALTER TABLE `manufacturer_profile`
  MODIFY `manufacturer_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `panel_users`
--
ALTER TABLE `panel_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
