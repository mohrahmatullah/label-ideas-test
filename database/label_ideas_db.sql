-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2020 at 05:34 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `label_ideas_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `detail` text NOT NULL,
  `preferred` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `user_id`, `detail`, `preferred`, `created_at`, `updated_at`) VALUES
(83, 144, 'Arab', 1, '2020-07-02 08:09:32', '2020-07-02 08:09:32'),
(84, 144, 'Kajakhstan', 0, '2020-07-02 08:09:32', '2020-07-02 08:09:32'),
(85, 144, 'Afganistan', 0, '2020-07-02 08:09:32', '2020-07-02 08:09:32'),
(86, 144, 'Mesir', 0, '2020-07-02 08:09:32', '2020-07-02 08:09:32'),
(87, 144, 'Iraq', 0, '2020-07-02 08:09:32', '2020-07-02 08:09:32'),
(137, 148, 'Amerika', 0, '2020-07-02 09:55:36', '2020-07-02 09:55:36'),
(138, 148, 'sumatera', 0, '2020-07-02 09:55:36', '2020-07-02 09:55:36'),
(139, 148, 'Indonesia', 0, '2020-07-02 09:55:36', '2020-07-02 09:55:36'),
(140, 148, 'jepang', 0, '2020-07-02 09:55:36', '2020-07-02 09:55:36'),
(146, 143, 'Indonesia', 1, '2020-07-02 10:20:23', '2020-07-02 10:20:23'),
(147, 143, 'Malaysia', 0, '2020-07-02 10:20:23', '2020-07-02 10:20:23'),
(148, 143, 'Vietnam', 0, '2020-07-02 10:20:23', '2020-07-02 10:20:23'),
(149, 145, 'Amerika', 1, '2020-07-02 10:21:20', '2020-07-02 10:21:20'),
(150, 145, 'Indonesia', 0, '2020-07-02 10:21:20', '2020-07-02 10:21:20'),
(151, 145, 'Afganistan', 0, '2020-07-02 10:21:20', '2020-07-02 10:21:20'),
(152, 147, 'Brazile', 0, '2020-07-02 10:22:18', '2020-07-02 10:22:18'),
(153, 147, 'Arabics', 0, '2020-07-02 10:22:18', '2020-07-02 10:22:18'),
(154, 147, 'Timor Leste', 1, '2020-07-02 10:22:18', '2020-07-02 10:22:18'),
(155, 149, 'Betawi', 1, '2020-07-02 10:23:51', '2020-07-02 10:23:51'),
(156, 149, 'Jakarta', 0, '2020-07-02 10:23:51', '2020-07-02 10:23:51'),
(159, 150, 'Jakarta', 0, '2020-07-02 10:27:05', '2020-07-02 10:27:05'),
(160, 150, 'Bandung', 1, '2020-07-02 10:27:05', '2020-07-02 10:27:05'),
(161, 150, 'Betawi', 0, '2020-07-02 10:27:18', '2020-07-02 10:27:18'),
(164, 151, 'Malaysia', 1, '2020-07-02 10:28:33', '2020-07-02 10:28:33'),
(165, 151, 'Indonesia', 0, '2020-07-02 10:28:33', '2020-07-02 10:28:33'),
(166, 152, 'Jakarta', 0, '2020-07-02 10:29:03', '2020-07-02 10:29:03'),
(167, 153, 'Papua', 0, '2020-07-02 10:29:33', '2020-07-02 10:29:33'),
(168, 154, 'Maluku', 0, '2020-07-02 10:30:19', '2020-07-02 10:30:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` enum('active','archived') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `status`, `created_at`, `updated_at`) VALUES
(143, 'Rahmats', 'rahmat@email.com', 'rajawali', 'active', '2020-07-02 08:40:51', '2020-07-02 08:40:51'),
(144, 'Adi', 'adi@email.com', 'emailadi', 'active', '2020-07-02 08:09:32', '2020-07-02 08:09:32'),
(145, 'Nurfiralvilaila', 'nurfitrialvilaila@email.com', 'nurfitrialvilai', 'active', '2020-07-02 08:20:42', '2020-07-02 08:20:42'),
(147, 'Munawir', 'munawir@email.com', 'teksung', 'active', '2020-07-02 10:22:18', '2020-07-02 10:22:18'),
(148, 'Jaka', 'Jaka@email.com', 'jaka', 'active', '2020-07-02 09:55:36', '2020-07-02 09:55:36'),
(149, 'Marwan', 'marwan@email.com', 'marwan', 'active', '2020-07-02 10:23:51', '2020-07-02 10:23:51'),
(150, 'Nunung', 'nunung@email.com', 'nunung', 'archived', '2020-07-02 10:27:05', '2020-07-02 10:27:05'),
(151, 'Putri', 'putri@email.com', 'putri', 'archived', '2020-07-02 10:28:33', '2020-07-02 10:28:33'),
(152, 'Galang', 'galang@mail.com', 'galang', 'archived', '2020-07-02 10:29:03', '2020-07-02 10:29:03'),
(153, 'Juanda', 'juanda@email.com', 'juanda', 'active', '2020-07-02 10:29:33', '2020-07-02 10:29:33'),
(154, 'Dermawan', 'dermawan@email.com', 'dermawan', 'active', '2020-07-02 10:30:19', '2020-07-02 10:30:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
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
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
