-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 02:31 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_pwl20233`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_m_k_s`
--

CREATE TABLE `detail_m_k_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dkbs`
--

CREATE TABLE `dkbs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `l_detail_mk`
--

CREATE TABLE `l_detail_mk` (
  `mk_id` varchar(45) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `kelas` varchar(45) NOT NULL,
  `id_ruangan` int(11) NOT NULL,
  `hari` varchar(45) NOT NULL,
  `tipe` varchar(45) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `max_participants` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `l_detail_mk`
--

INSERT INTO `l_detail_mk` (`mk_id`, `semester_id`, `kelas`, `id_ruangan`, `hari`, `tipe`, `jam_mulai`, `jam_selesai`, `max_participants`, `created_at`, `updated_at`) VALUES
('BIA01', 10, 'A', 9, 'Senin', 'Teori', '07:00:00', '09:00:00', 22, NULL, NULL),
('BIA02', 10, 'A', 10, 'Selasa', 'Praktikum', '10:00:00', '12:00:00', 25, NULL, NULL),
('BIA02', 10, 'A', 10, 'Selasa', 'Teori', '08:00:00', '10:00:00', 25, NULL, NULL),
('BIA03', 10, 'A', 11, 'Rabu', 'Teori', '13:00:00', '15:00:00', 30, NULL, NULL),
('BIA04', 10, 'A', 9, 'Kamis', 'Teori', '10:00:00', '12:00:00', 22, NULL, NULL),
('BIA04', 10, 'B', 6, 'Kamis', 'Teori', '12:30:00', '14:30:00', 17, NULL, NULL),
('BIA05', 10, 'A', 5, 'Jumat', 'Teori', '09:00:00', '11:00:00', 32, NULL, NULL),
('BIB01', 11, 'A', 1, 'Senin', 'Teori', '10:00:00', '12:00:00', 16, NULL, NULL),
('BIB01', 11, 'B', 2, 'Senin', 'Teori', '10:00:00', '12:00:00', 19, NULL, NULL),
('BIB02', 11, 'A', 10, 'Selasa', 'Teori', '10:00:00', '12:00:00', 30, NULL, NULL),
('BIB03', 11, 'A', 12, 'Rabu', 'Teori', '12:30:00', '15:00:00', 16, NULL, NULL),
('BIB04', 8, 'A', 3, 'Jumat', 'Praktikum', '09:00:00', '11:00:00', 14, NULL, NULL),
('BIB04', 11, 'A', 3, 'Jumat', 'Teori', '07:00:00', '09:00:00', 14, NULL, NULL),
('BIB04', 11, 'B', 4, 'Kamis', 'Teori', '07:00:00', '09:00:00', 16, NULL, NULL),
('BIB05', 11, 'A', 1, 'Kamis', 'Teori', '12:30:00', '15:00:00', 25, NULL, NULL),
('BIB05', 11, 'B', 2, 'Jumat', 'Teori', '12:30:00', '15:00:00', 21, NULL, NULL),
('BIC01', 13, 'A', 6, 'Senin', 'Praktikum', '10:00:00', '12:00:00', 32, NULL, NULL),
('BIC01', 13, 'A', 6, 'Senin', 'Teori', '08:00:00', '10:00:00', 32, NULL, NULL),
('BIC02', 13, 'A', 5, 'Selasa', 'Teori', '07:00:00', '09:00:00', 20, NULL, NULL),
('BIC02', 13, 'B', 6, 'Selasa', 'Teori', '08:00:00', '10:00:00', 16, NULL, NULL),
('BIC03', 11, 'B', 13, 'Rabu', 'Teori', '15:00:00', '17:30:00', 20, NULL, NULL),
('BIC03', 13, 'A', 5, 'Kamis', 'Teori', '09:00:00', '11:00:00', 28, NULL, NULL),
('BIC04', 11, 'B', 4, 'Kamis', 'Praktikum', '09:00:00', '11:00:00', 16, NULL, NULL),
('BIC04', 13, 'A', 10, 'Selasa', 'Teori', '13:00:00', '15:00:00', 23, NULL, NULL),
('BIC05', 13, 'A', 9, 'Jumat', 'Teori', '10:00:00', '12:00:00', 16, NULL, NULL),
('BIC05', 13, 'B', 12, 'Jumat', 'Teori', '12:30:00', '14:30:00', 19, NULL, NULL),
('BID01', 14, 'A', 11, 'Senin', 'Teori', '07:00:00', '09:00:00', 15, NULL, NULL),
('BID01', 14, 'B', 12, 'Senin', 'Teori', '07:00:00', '09:00:00', 21, NULL, NULL),
('BID02', 14, 'A', 2, 'Selasa', 'Teori', '09:00:00', '11:00:00', 30, NULL, NULL),
('BID03', 14, 'A', 5, 'Kamis', 'Teori', '10:00:00', '12:00:00', 25, NULL, NULL),
('BID04', 14, 'A', 11, 'Rabu', 'Teori', '07:00:00', '09:00:00', 20, NULL, NULL),
('BID04', 14, 'B', 2, 'Rabu', 'Teori', '10:00:00', '12:00:00', 17, NULL, NULL),
('BID05', 14, 'A', 5, 'Kamis', 'Teori', '09:00:00', '11:00:00', 16, NULL, NULL),
('BID05', 14, 'B', 6, 'Kamis', 'Teori', '13:00:00', '15:00:00', 21, NULL, NULL),
('BIE01', 8, 'A', 9, 'Rabu', 'Teori', '07:00:00', '09:00:00', 22, NULL, NULL),
('BIE01', 14, 'A', 12, 'Jumat', 'Teori', '13:00:00', '15:30:00', 25, NULL, NULL),
('BIE02', 8, 'A', 4, 'Rabu', 'Teori', '10:00:00', '12:00:00', 24, NULL, NULL),
('BIE03', 8, 'A', 6, 'Selasa', 'Teori', '10:00:00', '12:00:00', 24, NULL, NULL),
('BIE04', 8, 'A', 12, 'Jumat', 'Teori', '13:00:00', '15:00:00', 25, NULL, NULL),
('BIE05', 7, 'A', 3, 'Jumat', 'Teori', '07:00:00', '09:00:00', 20, NULL, NULL),
('BIF01', 5, 'A', 5, 'Selasa', 'Teori', '08:00:00', '10:00:00', 25, NULL, NULL),
('BIF02', 5, 'A', 1, 'Rabu', 'Teori', '07:00:00', '09:00:00', 20, NULL, NULL),
('BIF02', 5, 'B', 1, 'Rabu', 'Praktikum', '10:00:00', '12:00:00', 20, NULL, NULL),
('BIF02', 7, 'A', 8, 'Jumat', 'Teori', '13:00:00', '15:00:00', 20, NULL, NULL),
('BIF03', 5, 'A', 3, 'Senin', 'Teori', '13:00:00', '15:00:00', 21, NULL, NULL),
('BIF03', 7, 'A', 6, 'Rabu', 'Teori', '10:00:00', '12:00:00', 18, NULL, NULL),
('BIF04', 5, 'A', 4, 'Kamis', 'Teori', '10:00:00', '12:00:00', 25, NULL, NULL),
('BIF04', 7, 'A', 13, 'Kamis', 'Teori', '09:00:00', '11:00:00', 24, NULL, NULL),
('BIF05', 7, 'A', 4, 'Selasa', 'Teori', '13:00:00', '15:00:00', 25, NULL, NULL),
('BIG01', 5, 'A', 13, 'Jumat', 'Teori', '13:00:00', '15:00:00', 21, NULL, NULL),
('BIG02', 5, 'A', 11, 'Selasa', 'Teori', '12:30:00', '14:30:00', 20, NULL, NULL),
('BIG03', 4, 'A', 10, 'Rabu', 'Teori', '07:00:00', '09:00:00', 27, NULL, NULL),
('BIG04', 3, 'A', 10, 'Kamis', 'Teori', '10:00:00', '12:00:00', 25, NULL, NULL),
('BIG04', 4, 'A', 5, 'Selasa', 'Teori', '08:00:00', '10:00:00', 24, NULL, NULL),
('BIH01', 9, 'A', 9, 'Kamis', 'Teori', '10:00:00', '12:00:00', 24, NULL, NULL),
('IN210', 10, 'A', 2, 'Senin', 'Praktikum', '09:00:00', '11:00:00', 20, NULL, NULL),
('IN210', 10, 'A', 1, 'Senin', 'Teori', '07:00:00', '09:00:00', 20, NULL, NULL),
('IN211', 10, 'A', 11, 'Selasa', 'Praktikum', '09:30:00', '12:00:00', 20, NULL, NULL),
('IN211', 10, 'A', 11, 'Selasa', 'Teori', '07:00:00', '09:00:00', 15, NULL, NULL),
('IN211', 10, 'B', 12, 'Selasa', 'Praktikum', '09:30:00', '12:00:00', 15, NULL, NULL),
('IN211', 10, 'B', 12, 'Selasa', 'Teori', '07:30:00', '09:30:00', 15, NULL, NULL),
('IN212', 10, 'A', 4, 'Rabu', 'Praktikum', '10:00:00', '12:00:00', 30, NULL, NULL),
('IN212', 10, 'A', 4, 'Rabu', 'Teori', '08:00:00', '10:00:00', 30, NULL, NULL),
('IN213', 10, 'A', 1, 'Kamis', 'Teori', '07:30:00', '10:00:00', 22, NULL, NULL),
('IN213', 10, 'B', 2, 'Kamis', 'Teori', '12:30:00', '15:00:00', 26, NULL, NULL),
('IN214', 10, 'A', 5, 'Jumat', 'Praktikum', '09:00:00', '11:00:00', 20, NULL, NULL),
('IN214', 10, 'A', 5, 'Jumat', 'Teori', '07:00:00', '09:00:00', 20, NULL, NULL),
('IN214', 10, 'B', 6, 'Jumat', 'Praktikum', '09:00:00', '11:00:00', 14, NULL, NULL),
('IN214', 10, 'B', 6, 'Jumat', 'Teori', '07:00:00', '09:00:00', 14, NULL, NULL),
('IN215', 10, 'A', 10, 'Jumat', 'Teori', '13:00:00', '15:00:00', 26, NULL, NULL),
('IN215', 10, 'B', 9, 'Jumat', 'Teori', '13:00:00', '15:00:00', 17, NULL, NULL),
('IN216', 10, 'A', 11, 'Kamis', 'Teori', '15:00:00', '17:00:00', 40, NULL, NULL),
('IN217', 12, 'A', 2, 'Senin', 'Teori', '07:00:00', '09:00:00', 27, NULL, NULL),
('IN220', 11, 'A', 1, 'Senin', 'Praktikum', '09:00:00', '11:30:00', 18, NULL, NULL),
('IN220', 11, 'A', 1, 'Senin', 'Teori', '07:00:00', '09:00:00', 18, NULL, NULL),
('IN220', 11, 'B', 2, 'Senin', 'Praktikum', '14:30:00', '17:00:00', 21, NULL, NULL),
('IN221', 11, 'A', 5, 'Selasa', 'Teori', '08:00:00', '10:00:00', 30, NULL, NULL),
('IN221', 11, 'B', 2, 'Senin', 'Teori', '12:30:00', '14:30:00', 21, NULL, NULL),
('IN222', 11, 'A', 3, 'Selasa', 'Teori', '12:30:00', '14:30:00', 35, NULL, NULL),
('IN223', 11, 'A', 5, 'Rabu', 'Teori', '07:00:00', '09:30:00', 17, NULL, NULL),
('IN223', 11, 'B', 6, 'Rabu', 'Teori', '09:30:00', '12:00:00', 20, NULL, NULL),
('IN224', 11, 'A', 4, 'Kamis', 'Praktikum', '10:00:00', '12:00:00', 20, NULL, NULL),
('IN224', 11, 'A', 4, 'Kamis', 'Teori', '08:00:00', '10:00:00', 20, NULL, NULL),
('IN224', 11, 'B', 3, 'Rabu', 'Praktikum', '15:00:00', '17:00:00', 25, NULL, NULL),
('IN224', 11, 'B', 3, 'Kamis', 'Teori', '13:00:00', '15:00:00', 25, NULL, NULL),
('IN230', 13, 'A', 1, 'Senin', 'Teori', '07:00:00', '09:00:00', 20, NULL, NULL),
('IN230', 13, 'B', 2, 'Selasa', 'Teori', '08:00:00', '10:00:00', 22, NULL, NULL),
('IN231', 13, 'A', 3, 'Rabu', 'Teori', '07:00:00', '09:00:00', 20, NULL, NULL),
('IN232', 13, 'A', 4, 'Rabu', 'Teori', '10:00:00', '12:00:00', 27, NULL, NULL),
('IN233', 13, 'A', 9, 'Rabu', 'Teori', '13:00:00', '15:00:00', 21, NULL, NULL),
('IN234', 13, 'A', 11, 'Kamis', 'Praktikum', '13:00:00', '15:00:00', 22, NULL, NULL),
('IN234', 13, 'A', 11, 'Kamis', 'Teori', '10:00:00', '12:00:00', 22, NULL, NULL),
('IN234', 13, 'B', 12, 'Selasa', 'Praktikum', '12:30:00', '14:30:00', 24, NULL, NULL),
('IN234', 13, 'B', 12, 'Selasa', 'Teori', '09:00:00', '11:00:00', 24, NULL, NULL),
('IN236', 13, 'A', 2, 'Jumat', 'Teori', '07:00:00', '09:00:00', 20, NULL, NULL),
('IN236', 13, 'B', 3, 'Jumat', 'Teori', '10:00:00', '12:00:00', 18, NULL, NULL),
('IN237', 12, 'A', 2, 'Selasa', 'Praktikum', '10:00:00', '12:00:00', 27, NULL, NULL),
('IN237', 12, 'A', 2, 'Selasa', 'Teori', '08:00:00', '10:00:00', 27, NULL, NULL),
('IN240', 14, 'A', 4, 'Kamis', 'Teori', '12:30:00', '14:30:00', 21, NULL, NULL),
('IN241', 14, 'A', 12, 'Senin', 'Teori', '09:30:00', '12:00:00', 25, NULL, NULL),
('IN241', 14, 'B', 12, 'Senin', 'Teori', '12:30:00', '15:00:00', 23, NULL, NULL),
('IN242', 14, 'A', 5, 'Rabu', 'Praktikum', '09:30:00', '12:00:00', 20, NULL, NULL),
('IN242', 14, 'A', 5, 'Rabu', 'Teori', '07:00:00', '09:00:00', 20, NULL, NULL),
('IN242', 14, 'B', 3, 'Kamis', 'Praktikum', '12:30:00', '15:00:00', 16, NULL, NULL),
('IN242', 14, 'B', 3, 'Kamis', 'Teori', '09:00:00', '11:00:00', 16, NULL, NULL),
('IN243', 14, 'A', 12, 'Jumat', 'Teori', '08:00:00', '10:00:00', 35, NULL, NULL),
('IN244', 14, 'A', 11, 'Kamis', 'Teori', '15:00:00', '17:00:00', 22, NULL, NULL),
('IN244', 14, 'B', 13, 'Kamis', 'Teori', '15:00:00', '17:00:00', 18, NULL, NULL),
('IN260', 8, 'A', 1, 'Senin', 'Teori', '07:00:00', '09:00:00', 26, NULL, NULL),
('IN261', 8, 'A', 9, 'Kamis', 'Teori', '10:00:00', '12:00:00', 18, NULL, NULL),
('IN262', 8, 'A', 6, 'Kamis', 'Teori', '09:00:00', '11:00:00', 27, NULL, NULL),
('IN262', 8, 'B', 5, 'Kamis', 'Teori', '13:00:00', '15:00:00', 24, NULL, NULL),
('IN263', 8, 'A', 12, 'Jumat', 'Teori', '10:00:00', '12:00:00', 26, NULL, NULL),
('IN264', 7, 'A', 11, 'Kamis', 'Teori', '12:30:00', '14:30:00', 28, NULL, NULL),
('IN265', 7, 'A', 13, 'Selasa', 'Praktikum', '15:30:00', '17:30:00', 19, NULL, NULL),
('IN265', 7, 'A', 13, 'Selasa', 'Teori', '12:30:00', '15:00:00', 19, NULL, NULL),
('IN266', 7, 'A', 10, 'Kamis', 'Teori', '12:30:00', '14:30:00', 21, NULL, NULL),
('IN267', 7, 'A', 11, 'Jumat', 'Teori', '09:00:00', '11:00:00', 28, NULL, NULL),
('IN268', 6, 'A', 1, 'Rabu', 'Teori', '09:30:00', '12:00:00', 20, NULL, NULL),
('IN269', 4, 'A', 4, 'Senin', 'Teori', '07:00:00', '09:00:00', 22, NULL, NULL),
('IN270', 4, 'A', 2, 'Rabu', 'Teori', '08:00:00', '10:00:00', 25, NULL, NULL),
('IN272', 4, 'A', 12, 'Jumat', 'Teori', '07:00:00', '09:00:00', 22, NULL, NULL),
('IN273', 4, 'A', 3, 'Kamis', 'Teori', '10:00:00', '12:00:00', 18, NULL, NULL),
('IN274', 4, 'A', 9, 'Senin', 'Teori', '13:00:00', '15:00:00', 30, NULL, NULL),
('IN280', 2, 'A', 4, 'Selasa', 'Teori', '08:00:00', '10:00:00', 24, NULL, NULL),
('IN280', 2, 'B', 3, 'Selasa', 'Teori', '10:00:00', '12:00:00', 24, NULL, NULL),
('IN285', 2, 'A', 9, 'Jumat', 'Praktikum', '13:00:00', '15:00:00', 20, NULL, NULL),
('IN285', 2, 'A', 9, 'Kamis', 'Teori', '13:00:00', '15:00:00', 20, NULL, NULL),
('IN285', 2, 'B', 10, 'Jumat', 'Praktikum', '12:30:00', '14:30:00', 20, NULL, NULL),
('IN285', 2, 'B', 10, 'Kamis', 'Teori', '08:00:00', '10:00:00', 20, NULL, NULL),
('IN286', 1, 'A', 8, 'Jumat', 'Teori', '07:00:00', '09:00:00', 20, NULL, NULL),
('IN287', 1, 'A', 13, 'Selasa', 'Teori', '10:00:00', '12:00:00', 25, NULL, NULL),
('IN287', 9, 'A', 2, 'Selasa', 'Teori', '08:00:00', '10:30:00', 27, NULL, NULL),
('IN288', 1, 'A', 2, 'Selasa', 'Teori', '13:00:00', '15:00:00', 30, NULL, NULL),
('IN290', 1, 'A', 2, 'Kamis', 'Teori', '09:00:00', '11:00:00', 24, NULL, NULL),
('IN291', 5, 'A', 2, 'Jumat', 'Teori', '07:00:00', '09:00:00', 20, NULL, NULL),
('IN292', 6, 'A', 1, 'Senin', 'Teori', '07:00:00', '09:00:00', 30, NULL, NULL),
('IN293', 1, 'A', 1, 'Rabu', 'Teori', '07:00:00', '09:00:00', 21, NULL, NULL),
('IN293', 9, 'A', 6, 'Senin', 'Teori', '10:00:00', '12:00:00', 30, NULL, NULL),
('MK017', 3, 'A', 6, 'Jumat', 'Teori', '13:00:00', '15:00:00', 20, NULL, NULL),
('MK024', 1, 'A', 11, 'Rabu', 'Teori', '13:00:00', '15:00:00', 20, NULL, NULL),
('MK039', 11, 'A', 9, 'Jumat', 'Teori', '08:00:00', '10:00:00', 40, NULL, NULL),
('MK060', 1, 'A', 6, 'Rabu', 'Teori', '12:30:00', '14:30:00', 27, NULL, NULL),
('MK060', 11, 'A', 12, 'Jumat', 'Teori', '13:00:00', '15:00:00', 30, NULL, NULL),
('MK061', 1, 'A', 2, 'Kamis', 'Teori', '13:00:00', '15:00:00', 20, NULL, NULL),
('MK061', 5, 'A', 6, 'Rabu', 'Teori', '08:00:00', '10:00:00', 22, NULL, NULL),
('MK062', 1, 'A', 5, 'Jumat', 'Teori', '08:00:00', '10:00:00', 27, NULL, NULL),
('MK062', 11, 'A', 13, 'Jumat', 'Teori', '13:00:00', '15:00:00', 33, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `l_dkbs`
--

CREATE TABLE `l_dkbs` (
  `user_id` int(11) NOT NULL,
  `mk_id` varchar(45) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `id_ruangan` int(11) NOT NULL,
  `hari` varchar(45) NOT NULL,
  `kelas` varchar(45) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `l_dkbs`
--

INSERT INTO `l_dkbs` (`user_id`, `mk_id`, `semester_id`, `id_ruangan`, `hari`, `kelas`, `jam_mulai`, `jam_selesai`, `created_at`, `updated_at`) VALUES
(12, 'IN210', 10, 2, 'Senin', 'A', '09:00:00', '11:00:00', NULL, NULL),
(12, 'IN211', 10, 11, 'Selasa', 'A', '09:30:00', '12:00:00', NULL, NULL),
(12, 'IN212', 10, 4, 'Rabu', 'A', '10:00:00', '12:00:00', NULL, NULL),
(12, 'IN216', 10, 11, 'Kamis', 'A', '15:00:00', '17:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `l_mata_kuliah`
--

CREATE TABLE `l_mata_kuliah` (
  `mk_id` varchar(45) NOT NULL,
  `mk_name` varchar(45) NOT NULL,
  `ps_id` int(11) NOT NULL,
  `sks` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `l_mata_kuliah`
--

INSERT INTO `l_mata_kuliah` (`mk_id`, `mk_name`, `ps_id`, `sks`, `created_at`, `updated_at`) VALUES
('BIA01', 'Sistem Informasi', 2, 3, NULL, NULL),
('BIA02', 'Pemrograman Dasar', 2, 4, NULL, NULL),
('BIA03', 'Statistika Deskriptif dan Probabilitas', 2, 3, NULL, NULL),
('BIA04', 'Pengenalan Enterprise Architecture', 2, 3, NULL, NULL),
('BIA05', 'Fundamental E-Bisnis dan E-Commerce Managemen', 2, 3, NULL, NULL),
('BIB01', 'Statistika Bisnis', 2, 3, NULL, NULL),
('BIB02', 'Proses Bisnis dan Fundamental ERP', 2, 3, NULL, NULL),
('BIB03', 'Algoritma dan Struktur Data', 2, 3, NULL, NULL),
('BIB04', 'Pemrograman Berorientasi Objek', 2, 4, NULL, NULL),
('BIB05', 'Manajemen Proyek Teknologi Informasi', 2, 3, NULL, NULL),
('BIC01', 'Pemodelan dan Pengelolaan Basis Data', 2, 4, NULL, NULL),
('BIC02', 'Visualisasi Data', 2, 3, NULL, NULL),
('BIC03', 'Manajemen dan Sistem Informasi Rantai Pasokan', 2, 3, NULL, NULL),
('BIC04', ' Pemasaran Online', 2, 3, NULL, NULL),
('BIC05', 'Sistem Informasi Sumber Daya Manusia', 2, 3, NULL, NULL),
('BID01', 'Pengenalan Data Science', 2, 3, NULL, NULL),
('BID02', 'Sistem Informasi Akuntansi dan Keuangan', 2, 3, NULL, NULL),
('BID03', 'Pengendalian dan Audit Teknologi Informasi', 2, 3, NULL, NULL),
('BID04', 'Technopreneurship', 2, 3, NULL, NULL),
('BID05', 'Pemodelan Sistem Informasi', 2, 3, NULL, NULL),
('BID06', 'Strategi Penelitian', 2, 2, NULL, NULL),
('BIE01', 'Kerja Praktek Kompetensi 1', 2, 4, NULL, NULL),
('BIE02', 'Pemrograman Web', 2, 4, NULL, NULL),
('BIE03', 'Pengenalan Data Engineering', 2, 3, NULL, NULL),
('BIE04', 'Bahasa Inggris untuk Bisnis', 2, 2, NULL, NULL),
('BIE05', 'Organisasi dan Manajemen Perusahaan Industri', 2, 2, NULL, NULL),
('BIE06', 'Sistem Operasi dan Jaringan Komputer', 2, 4, NULL, NULL),
('BIF01', 'Pemrograman Aplikasi Bisnis', 2, 4, NULL, NULL),
('BIF02', 'Keamanan Sistem Informasi', 2, 3, NULL, NULL),
('BIF03', 'Perancangan Sistem Informasi', 2, 3, NULL, NULL),
('BIF04', 'Pengembangan Aplikasi Enterprise', 2, 4, NULL, NULL),
('BIF05', 'Kapita Selekta', 2, 3, NULL, NULL),
('BIG01', 'Kerja Praktek Kompetensi 2', 2, 5, NULL, NULL),
('BIG02', 'User Interface dan User Experience', 2, 3, NULL, NULL),
('BIG03', 'Kecerdasan Bisnis', 2, 3, NULL, NULL),
('BIG04', 'Pemodelan Sistem Informasi Lanjut', 2, 3, NULL, NULL),
('BIH01', 'Program Pengayaan', 2, 5, NULL, NULL),
('IN210', 'Jaringan Komputer', 1, 3, NULL, NULL),
('IN211', 'Logika Informatika', 1, 3, NULL, NULL),
('IN212', 'Web Dasar', 1, 3, NULL, NULL),
('IN213', 'Bahasa Inggris', 1, 2, NULL, NULL),
('IN214', 'Pengantar Aplikasi Komputer', 1, 2, NULL, NULL),
('IN215', 'Sibernetika', 1, 2, NULL, NULL),
('IN216', 'Computational Thinking', 1, 2, NULL, NULL),
('IN217', 'Teknik Komunikasi Bahasa Inggris', 1, 2, NULL, NULL),
('IN220', 'Dasar Pemrograman', 1, 4, NULL, NULL),
('IN221', 'Arsitektur dan Keamanan Jaringan', 1, 3, NULL, NULL),
('IN222', 'Arsitektur Komputer Modern', 1, 2, NULL, NULL),
('IN223', 'Aljabar Linier', 1, 3, NULL, NULL),
('IN224', 'Desain Basis Data', 1, 3, NULL, NULL),
('IN230', 'Rekayasa Perangkat Lunak', 1, 3, NULL, NULL),
('IN231', 'Teknologi Multimedia', 1, 2, NULL, NULL),
('IN232', 'Matematika Diskrit', 1, 3, NULL, NULL),
('IN233', 'Algoritma dan Struktur Data', 1, 4, NULL, NULL),
('IN234', 'Paradigma Pemrograman', 1, 4, NULL, NULL),
('IN236', 'Pemrograman Terapan', 1, 3, NULL, NULL),
('IN237', 'Basis Data Lanjut', 1, 3, NULL, NULL),
('IN240', 'Pemrograman Web Lanjut', 1, 4, NULL, NULL),
('IN241', 'Statistika', 1, 3, NULL, NULL),
('IN242', 'Kecerdasan Mesin', 1, 3, NULL, NULL),
('IN243', 'Sistem Operasi Komputer', 1, 2, NULL, NULL),
('IN244', 'Strategi Algoritmik', 1, 3, NULL, NULL),
('IN245', 'Pola Desain Perangkat Lunak', 1, 3, NULL, NULL),
('IN250', 'Manajemen Proyek', 1, 3, NULL, NULL),
('IN252', 'Desain Antarmuka', 1, 2, NULL, NULL),
('IN253', 'Grafika Komputer', 1, 3, NULL, NULL),
('IN254', 'Proyek Perangkat Lunak', 1, 3, NULL, NULL),
('IN255', 'Proses Bisnis', 1, 3, NULL, NULL),
('IN260', 'Metode Penelitian Informatika', 1, 2, NULL, NULL),
('IN261', 'Start-up Technopreneur', 1, 3, NULL, NULL),
('IN262', 'Pemrograman Mobile', 1, 3, NULL, NULL),
('IN263', 'Competitive Programming', 1, 3, NULL, NULL),
('IN264', 'Web Semantik', 1, 3, NULL, NULL),
('IN265', 'Pemrosesan Data Berbasis Cloud', 1, 3, NULL, NULL),
('IN266', 'Pengenalan Pemrograman Game', 1, 3, NULL, NULL),
('IN267', 'Administrasi Jaringan Komputer', 1, 3, NULL, NULL),
('IN268', 'Ethical Hacking 1', 1, 3, NULL, NULL),
('IN269', 'Kecerdasan Bisnis', 1, 3, NULL, NULL),
('IN270', 'Kerja Praktik', 1, 4, NULL, NULL),
('IN271', 'Internet of Things', 1, 3, NULL, NULL),
('IN272', 'Pengolahan Citra Digital', 1, 3, NULL, NULL),
('IN273', 'Pemrograman Game', 1, 3, NULL, NULL),
('IN274', 'Ethical Hacking 2', 1, 3, NULL, NULL),
('IN280', 'Seminar Tugas Akhir', 1, 2, NULL, NULL),
('IN281', 'Tugas Akhir', 1, 4, NULL, NULL),
('IN285', 'Pemrograman Multi-Platform', 1, 3, NULL, NULL),
('IN286', 'Pemrosesan Bahasa Alami', 1, 3, NULL, NULL),
('IN287', 'Computer Vision', 1, 3, NULL, NULL),
('IN288', 'AI Computing Platform', 1, 3, NULL, NULL),
('IN290', 'Pengantar Health Informatics', 1, 3, NULL, NULL),
('IN291', 'Desain Sistem Kesehatan', 1, 3, NULL, NULL),
('IN292', 'Pengantar Ilmu Kesehatan', 1, 3, NULL, NULL),
('IN293', 'Analisis Data Kesehatan', 1, 3, NULL, NULL),
('MK017', 'Pancasila', 1, 2, NULL, NULL),
('MK024', 'Kewarganegaraan', 1, 2, NULL, NULL),
('MK039', 'Bahasa Indonesia', 1, 2, NULL, NULL),
('MK060', 'Fenomenologi Agama', 1, 2, NULL, NULL),
('MK061', 'Etika Profesi', 1, 2, NULL, NULL),
('MK062', 'Pendidikan Agama Kristen', 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `l_program_studi`
--

CREATE TABLE `l_program_studi` (
  `ps_id` int(11) NOT NULL,
  `ps_name` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `l_program_studi`
--

INSERT INTO `l_program_studi` (`ps_id`, `ps_name`, `created_at`, `updated_at`) VALUES
(1, 'Teknik Informatika', NULL, NULL),
(2, 'Sistem Informasi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `l_role`
--

CREATE TABLE `l_role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `l_role`
--

INSERT INTO `l_role` (`role_id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'Mahasiswa', NULL, NULL),
(2, 'Program Studi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `l_ruangan`
--

CREATE TABLE `l_ruangan` (
  `id_ruangan` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `l_ruangan`
--

INSERT INTO `l_ruangan` (`id_ruangan`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Advance Programming 1', NULL, NULL),
(2, 'Advance Programming 2', NULL, NULL),
(3, 'Advance Programming 3', NULL, NULL),
(4, 'Advance Programming 4', NULL, NULL),
(5, 'Programming 1', NULL, NULL),
(6, 'Programming 2', NULL, NULL),
(7, 'Internet 1', NULL, NULL),
(8, 'Internet 2', NULL, NULL),
(9, 'Enterprise 1', NULL, NULL),
(10, 'Enterprise 2', NULL, NULL),
(11, 'Database', NULL, NULL),
(12, 'Multimedia', NULL, NULL),
(13, 'Networking', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `l_semester`
--

CREATE TABLE `l_semester` (
  `semester_id` int(11) NOT NULL,
  `semester_name` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='		';

--
-- Dumping data for table `l_semester`
--

INSERT INTO `l_semester` (`semester_id`, `semester_name`, `created_at`, `updated_at`) VALUES
(1, 'Reguler Ganjil 2018/2019', NULL, NULL),
(2, 'Reguler Genap 2018/2019', NULL, NULL),
(3, 'Antara Genap 2018/2019', NULL, NULL),
(4, 'Reguler Ganjil 2019/2020', NULL, NULL),
(5, 'Reguler Genap 2019/2020', NULL, NULL),
(6, 'Antara Genap 2019/2020', NULL, NULL),
(7, 'Reguler Ganjil 2020/2021', NULL, NULL),
(8, 'Reguler Genap 2020/2021', NULL, NULL),
(9, 'Antara Genap 2020/2021', NULL, NULL),
(10, 'Reguler Ganjil 2021/2022', NULL, NULL),
(11, 'Reguler Genap 2021/2022', NULL, NULL),
(12, 'Antara Genap 2021/2022', NULL, NULL),
(13, 'Reguler Ganjil 2022/2023', NULL, NULL),
(14, 'Reguler Genap 2022/2023', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `l_user`
--

CREATE TABLE `l_user` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `ps_id` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(150) NOT NULL,
  `name` varchar(45) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `nomor_telepon` varchar(45) NOT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `l_user`
--

INSERT INTO `l_user` (`user_id`, `role_id`, `ps_id`, `email`, `password`, `name`, `alamat`, `nomor_telepon`, `foto`, `created_at`, `updated_at`) VALUES
(12, 1, 1, '2172021@maranatha.ac.id', '$2y$10$cIvB9Mq1uSmjHX25DXk91uNsNw9I/u0ST/.k3Aj71RnJPilN.SGf2', 'Tabitha Emmanuella Kotambunan', 'Kost Favo', '08041691410', NULL, '2023-06-25 23:23:22', '2023-06-25 23:23:22'),
(13, 1, 1, 'kotambunant@gmail.com', '$2y$10$zKXO09M6pH9T41dT8N6VAufHtQfxPGLjdMSTp75kyU1Oc9CA1AJzS', 'Tabitha', 'tesst', '080', 'kotambunant@gmail.com.jpg', '2023-06-26 00:00:53', '2023-06-26 03:26:57');

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliahs`
--

CREATE TABLE `mata_kuliahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2023_06_12_120140_create_mata_kuliahs_table', 1),
(4, '2023_06_12_145048_create_detail_m_k_s_table', 1),
(5, '2023_06_12_145105_create_dkbs_table', 1),
(6, '2023_06_12_145116_create_program_studis_table', 1),
(7, '2023_06_12_145126_create_roles_table', 1),
(8, '2023_06_12_145138_create_ruangans_table', 1),
(9, '2023_06_12_145148_create_semesters_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `program_studis`
--

CREATE TABLE `program_studis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ruangans`
--

CREATE TABLE `ruangans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_m_k_s`
--
ALTER TABLE `detail_m_k_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dkbs`
--
ALTER TABLE `dkbs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `l_detail_mk`
--
ALTER TABLE `l_detail_mk`
  ADD PRIMARY KEY (`mk_id`,`semester_id`,`kelas`,`tipe`),
  ADD KEY `fk_l_detail_mk_l_mata_kuliah1_idx` (`mk_id`),
  ADD KEY `fk_l_detail_mk_l_ruangan1_idx` (`id_ruangan`),
  ADD KEY `fk_l_detail_mk_l_semester1` (`semester_id`);

--
-- Indexes for table `l_dkbs`
--
ALTER TABLE `l_dkbs`
  ADD PRIMARY KEY (`user_id`,`mk_id`,`semester_id`),
  ADD KEY `fk_l_perwalian_l_user1_idx` (`user_id`),
  ADD KEY `fk_l_perwalian_l_semester1_idx` (`semester_id`),
  ADD KEY `fk_l_perwalian_l_mata_kuliah1_idx` (`mk_id`),
  ADD KEY `fk_l_dkbs_l_ruangan1_idx` (`id_ruangan`);

--
-- Indexes for table `l_mata_kuliah`
--
ALTER TABLE `l_mata_kuliah`
  ADD PRIMARY KEY (`mk_id`),
  ADD KEY `fk_l_mata_kuliah_l_program_studi1_idx` (`ps_id`);

--
-- Indexes for table `l_program_studi`
--
ALTER TABLE `l_program_studi`
  ADD PRIMARY KEY (`ps_id`);

--
-- Indexes for table `l_role`
--
ALTER TABLE `l_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `l_ruangan`
--
ALTER TABLE `l_ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- Indexes for table `l_semester`
--
ALTER TABLE `l_semester`
  ADD PRIMARY KEY (`semester_id`);

--
-- Indexes for table `l_user`
--
ALTER TABLE `l_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `fk_l_user_l_role1_idx` (`role_id`),
  ADD KEY `fk_l_user_l_program_studi1_idx` (`ps_id`);

--
-- Indexes for table `mata_kuliahs`
--
ALTER TABLE `mata_kuliahs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `program_studis`
--
ALTER TABLE `program_studis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruangans`
--
ALTER TABLE `ruangans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
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
-- AUTO_INCREMENT for table `detail_m_k_s`
--
ALTER TABLE `detail_m_k_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dkbs`
--
ALTER TABLE `dkbs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `l_program_studi`
--
ALTER TABLE `l_program_studi`
  MODIFY `ps_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `l_role`
--
ALTER TABLE `l_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `l_ruangan`
--
ALTER TABLE `l_ruangan`
  MODIFY `id_ruangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `l_semester`
--
ALTER TABLE `l_semester`
  MODIFY `semester_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `l_user`
--
ALTER TABLE `l_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mata_kuliahs`
--
ALTER TABLE `mata_kuliahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `program_studis`
--
ALTER TABLE `program_studis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ruangans`
--
ALTER TABLE `ruangans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `l_detail_mk`
--
ALTER TABLE `l_detail_mk`
  ADD CONSTRAINT `fk_l_detail_mk_l_mata_kuliah1` FOREIGN KEY (`mk_id`) REFERENCES `l_mata_kuliah` (`mk_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_l_detail_mk_l_ruangan1` FOREIGN KEY (`id_ruangan`) REFERENCES `l_ruangan` (`id_ruangan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_l_detail_mk_l_semester1` FOREIGN KEY (`semester_id`) REFERENCES `l_semester` (`semester_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `l_dkbs`
--
ALTER TABLE `l_dkbs`
  ADD CONSTRAINT `fk_l_dkbs_l_ruangan1` FOREIGN KEY (`id_ruangan`) REFERENCES `l_ruangan` (`id_ruangan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_l_perwalian_l_mata_kuliah1` FOREIGN KEY (`mk_id`) REFERENCES `l_mata_kuliah` (`mk_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_l_perwalian_l_semester1` FOREIGN KEY (`semester_id`) REFERENCES `l_semester` (`semester_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_l_perwalian_l_user1` FOREIGN KEY (`user_id`) REFERENCES `l_user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `l_mata_kuliah`
--
ALTER TABLE `l_mata_kuliah`
  ADD CONSTRAINT `fk_l_mata_kuliah_l_program_studi1` FOREIGN KEY (`ps_id`) REFERENCES `l_program_studi` (`ps_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `l_user`
--
ALTER TABLE `l_user`
  ADD CONSTRAINT `fk_l_user_l_program_studi1` FOREIGN KEY (`ps_id`) REFERENCES `l_program_studi` (`ps_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_l_user_l_role1` FOREIGN KEY (`role_id`) REFERENCES `l_role` (`role_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
