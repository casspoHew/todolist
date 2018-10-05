-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2018 at 04:29 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todolist`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_10_04_000321_create_registers_table', 1),
(4, '2018_10_04_025612_create_tasks_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hobbies` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`id`, `username`, `password`, `email`, `hobbies`, `created_at`, `updated_at`) VALUES
(1, 'cassie3', '34', 'cassiepo98@yahoo.com', 'swimming', '2018-10-03 16:44:42', '2018-10-03 16:44:42'),
(2, 'Yukii', '34', 'cityexpress96@gmail.com', 'qwerw', '2018-10-03 16:48:09', '2018-10-03 16:48:09'),
(3, 'cassie', '123', 'cassiepo98@yahoo.com', 'swimming', '2018-10-03 16:53:19', '2018-10-03 16:53:19'),
(4, '1', '1', '1@yahoo.com', NULL, '2018-10-03 17:08:25', '2018-10-03 17:08:25');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `from` time NOT NULL,
  `to` time NOT NULL,
  `task` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `person` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `user_id`, `date`, `from`, `to`, `task`, `person`, `status`, `created_at`, `updated_at`) VALUES
(1, '2', '2018-10-04', '12:30:00', '13:00:00', 'Testing', 'Myself', NULL, '2018-10-03 19:23:25', '2018-10-03 19:23:25'),
(2, '2', '2018-10-04', '12:30:00', '13:00:00', 'Testing', 'Myself', NULL, '2018-10-03 19:23:27', '2018-10-03 19:23:27'),
(3, '2', '2018-10-04', '02:30:00', '15:03:00', 'Testing', 'Myself', NULL, '2018-10-03 19:23:52', '2018-10-03 19:23:52'),
(4, '2', '2018-10-04', '08:30:00', '10:30:00', 'Coding', 'Alone', NULL, '2018-10-04 01:08:42', '2018-10-04 01:08:42'),
(5, '2', '2018-10-04', '09:30:00', '22:41:00', 'writing', 'friends', NULL, '2018-10-04 01:10:30', '2018-10-04 01:10:30'),
(6, '1', '2018-10-04', '08:00:00', '10:00:00', 'hiking', 'Yap', 'completed', '2018-10-04 01:24:38', '2018-10-04 01:24:38'),
(7, '1', '2018-10-05', '08:00:00', '10:00:00', 'Research', 'alone', 'have yet to complete', '2018-10-04 16:28:26', '2018-10-04 16:28:26'),
(8, '1', '2018-10-05', '02:05:00', '02:25:00', 'Coding', 'Myself', 'have yet to complete', '2018-10-04 17:44:47', '2018-10-04 17:44:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'cassie po', 'cassiepo98@yahoo.com', '$2y$10$QKEP/1u891ch2fFgjWH75u65sZTjQ/jYuSh/5WMmq7dyttE2.//Vm', 'U08gAxJ5V9wTV3XguIHdQDZwc8sY0sS2monUuJrFQOU59FfweDpihhm95eqP', '2018-10-03 17:32:50', '2018-10-03 17:32:50'),
(2, '1', '1@yahoo.com', '$2y$10$NOMHsVQP0CU/omPyPOGovuPVhTpp2YclNADpD.OHmnKloPC6I4T8y', 'UTpbNEnoncYtRh3SDzmUM7MsyjyGSxu49G29gHK6u8sYl8yef8bcBxCMykIE', '2018-10-03 17:46:51', '2018-10-03 17:46:51'),
(3, 'test', 'test@yahoo.com', '$2y$10$luCqmM1.7gu.9y9sF5qMdux.wtxRLzoXh.BYNgRm/9X3DXv./nkqm', 'Wjb2ZmEaDiXFqR4r51U47rIb25SI87WZ561xS7CogblNAci7p1zc22PAbR7x', '2018-10-04 15:47:00', '2018-10-04 15:47:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
