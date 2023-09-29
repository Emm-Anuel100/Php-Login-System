-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2023 at 05:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kriptip_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `notify` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `notify`) VALUES
(1, 'emmy j', 'chinweokwuemmanuel2004@gmail.com', '$2y$10$BAZo6DcuxLv/R/X6KBRBKOqFq.Bkaci65UN1oaEFxrSaNxdE/AZYa', ''),
(3, 'ebuka', 'f@g.c', '$2y$10$sM0lSP5DXKeHzwtwFE6zuOjtcZ97qIhB.MuoZ6RRomW3CpAktgXgq', ''),
(4, 'olaitan', 'olaitan@gmail.com', '$2y$10$iGPpx9eNCOcRmN8wRHBLtul0Y5s5P4Idc/lvaUpHYoYUMadoYgiDm', 'notify'),
(5, 'chinweokwu', 'emmanuelodel75@gmail.com', '$2y$10$S.Hfhj4OzVyTvk/Mcn/K1.JeC.gjlnRrum4qfVeTKwWKTKKPukpBW', 'notify'),
(6, 'titilayo', 'titilaya@gmail.com', '$2y$10$nccptmoW5QZg3A8zS9iTQOVxsUELI4GQh4..DpwmMxwlaG0ihrcOG', 'notify'),
(7, 'sonia', 'ekechukwu@goo.co', '$2y$10$kd750MKieTBFK76F9hS/c.7yZZha07nIxftKdHwPw.CM1kfX8orQO', 'notify'),
(8, 'ebuka', 'paul001@gmail.com', '$2y$10$HdFvcx5p2OaJRaib0Tr.u.wNXeCBCR0S26BJ8u94uaHNMKeywBxem', 'notify'),
(10, 'dogo1234@gmail.com', 'dogo1234@gmail.com', '$2y$10$h.gUq6L5w4gyVzQ9e1Jdn.TiovCVROaB29toCtFB217fvBQNY/CTO', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
