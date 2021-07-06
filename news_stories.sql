-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 09:44 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news_stories`
--

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `publisher` text DEFAULT NULL,
  `published_date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`id`, `title`, `body`, `publisher`, `published_date`, `created_at`, `updated_at`) VALUES
(1, 'First Story', 'Random texts here as the story body. thank you.', 'Riyad', '2021-07-02', '2021-07-02 19:59:13', '2021-07-03 21:16:50'),
(5, 'Demo Story', 'this is also a demo story what is written to check some new features.', 'Riyad', '2021-07-02', '2021-07-02 19:59:13', '2021-07-03 21:18:57'),
(6, 'Another Story', 'Just checking my homepage with the help of demo stories. This is another story for trial.', 'Riyad', '2021-07-02', '2021-07-02 19:59:13', '2021-07-03 21:19:17'),
(7, 'Sad Story', 'this is another story what is written just to say sad and check date format.', 'Riyad', '2021-07-03', '2021-07-03 13:58:13', '2021-07-03 19:58:13'),
(8, 'Story number 5', 'this story is writtten to check the paginate feature on this website. I hope this works beautifully', 'Riyad', '2021-07-04', '2021-07-04 07:35:48', '2021-07-04 13:35:48'),
(9, 'Last Story', 'this one is only for checking the preview for the final time. Done.', 'Riyad', '2021-07-05', '2021-07-05 19:06:52', '2021-07-06 01:08:32'),
(11, 'Final Story', 'This is my last story where I cross checked all the features that are working fine. Thank you.', 'Riyad', '2021-07-06', '2021-07-06 06:24:17', '2021-07-06 12:24:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'abc', 'abc@gmail.com', NULL, '$2y$10$MJEKMqcC79ec3yMQu6KYO.cn3bnjy1agnlJEOodkl.f4w7ybrRi/W', NULL, '2021-07-01 12:18:26', '2021-07-01 18:18:26'),
(2, 'abcd', 'abcd@gmail.com', NULL, '$2y$10$Q2R8Pnz73bV2btS9NBNFVeF5jzScUUd9vaW052M/V2dM.NPMgBMAi', NULL, '2021-07-06 00:21:16', '2021-07-06 06:21:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
