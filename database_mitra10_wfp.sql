-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2023 at 05:22 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_mitra10_wfp`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `idbrands` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`idbrands`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Samsung', '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(2, 'Daikin', '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(3, 'Electrolux', '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(4, 'Sharp', '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(5, 'Sanken', '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(6, 'Polytron', '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(7, 'LG', '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(8, 'Bosch', '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(9, 'Panasonic', '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(10, 'Artugo', '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(11, 'Fotile', '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(12, 'Miyako', '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(13, 'Phillips', '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(14, 'Tidy', '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(15, 'Zehn', '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(16, 'Ceramax', '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(17, 'American Standard', '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(18, 'Onda', '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(19, 'Toto', '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(20, 'Elite', '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(21, 'Lavenia', '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(22, 'Halmar', '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(23, 'Paloma', '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(24, 'Rinnai', '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(25, 'Stiebel', '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(26, 'I-Gaz', '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(27, 'Wasser', '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(28, 'Polaris', '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(29, 'Ariston', '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(30, 'Hegel', '2023-11-05 05:40:56', '2023-11-05 05:40:56');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `jumlah` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`customer_id`, `product_id`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 10, 1, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(1, 16, 1, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(1, 32, 2, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(1, 56, 2, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(2, 12, 1, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(2, 54, 2, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(2, 111, 3, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(2, 184, 2, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(2, 195, 1, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(3, 62, 3, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(3, 130, 2, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(3, 164, 3, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(3, 202, 1, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(4, 48, 3, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(4, 68, 1, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(4, 133, 2, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(4, 199, 2, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(5, 14, 3, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(5, 44, 2, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(5, 87, 1, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(5, 116, 3, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(5, 167, 1, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(6, 8, 3, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(6, 78, 1, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(7, 193, 1, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(8, 15, 1, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(8, 96, 3, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(9, 91, 1, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(9, 175, 3, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(10, 31, 3, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(10, 138, 3, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(10, 187, 3, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(10, 191, 1, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(10, 198, 1, '2023-11-05 05:40:57', '2023-11-05 05:40:57');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `idcategories` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`idcategories`, `nama`, `parent_category_id`, `created_at`, `updated_at`) VALUES
(1, 'Appliances', NULL, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(2, 'Bathroom', NULL, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(3, 'Building Material', NULL, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(4, 'Doors and Windows', NULL, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(5, 'Electrical and Lighting', NULL, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(6, 'Flooring and Wall', NULL, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(7, 'Hardware', NULL, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(8, 'Houseware and Hobbies', NULL, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(9, 'Kitchen', NULL, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(10, 'Paint and Sundries', NULL, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(11, 'Plumbing', NULL, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(12, 'Tools', NULL, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(13, 'Cooling', 1, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(14, 'Dispenser', 1, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(15, 'Kulkas', 1, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(16, 'Mesin Cuci and Pengering', 1, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(17, 'Microwaves and Ovens', 1, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(18, 'Setrika', 1, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(19, 'Small Appliances', 1, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(20, 'TV', 1, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(21, 'Vacuum Cleaner', 1, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(22, 'Aksesoris', 2, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(23, 'Aneka Keran', 2, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(24, 'Bathtub and Shower Tray', 2, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(25, 'Closet', 2, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(26, 'Fixtures', 2, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(27, 'Lavatory/Wastafel', 2, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(28, 'Shower', 2, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(29, 'Water Heater', 2, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(30, 'Atap', 3, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(31, 'Building Chemical', 3, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(32, 'Semen', 3, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(33, 'Tangga', 3, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(34, 'Terpal', 3, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(35, 'Jendela', 4, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(36, 'Pintu', 4, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(37, 'Kelistrikan', 5, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(38, 'Kipas', 5, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(39, 'Lampu', 5, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(40, 'Glassblock', 6, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(41, 'Granit', 6, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(42, 'Home Decor', 6, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(43, 'Keramik', 6, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(44, 'Lantai Kayu', 6, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(45, 'Mosaic', 6, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(46, 'Vinyl', 6, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(47, 'Air Conditioner (AC)', 13, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(48, 'Air Cooler', 13, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(49, 'Air Purifier', 13, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(50, 'Mesin Cuci', 16, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(51, 'Pengering', 16, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(52, 'Microwave', 17, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(53, 'Oven', 17, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(54, 'Blender and Juicer', 19, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(55, 'Mixer and Chopper', 19, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(56, 'Rice Cooker', 19, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(57, 'Toaster', 19, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(58, 'Gantungan', 22, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(59, 'Rak', 22, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(60, 'Tempat Gelas', 22, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(61, 'Tempat Sabun', 22, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(62, 'Tempat Sikat Gigi', 22, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(63, 'Tempat Tisu', 22, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(64, 'Basin Mixer', 23, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(65, 'Keran', 23, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(66, 'Keran Panas Dingin', 23, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(67, 'Kitchen Mixer', 23, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(68, 'Shower Panas Dingin', 23, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(69, 'Bathtub', 24, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(70, 'Shower Tray', 24, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(71, 'Floor Drain', 26, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(72, 'Selang Flexible', 26, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(73, 'Selang Pembuangan', 26, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(74, 'Stop Valve', 26, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(75, 'Cabinet Wastafel', 27, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(76, 'Counter Top Wastafel', 27, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(77, 'Pedestal', 27, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(78, 'Wastafel Gantung', 27, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(79, 'Wastafel Kaca', 27, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(80, 'Aksesoris Shower', 28, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(81, 'Hand Shower', 28, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(82, 'Head Shower', 28, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(83, 'Shower Column', 28, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(84, 'Toilet Shower', 28, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(85, 'Electric', 29, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(86, 'Gas', 29, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(87, 'Solar', 29, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(88, 'Aluminium Foil', 30, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(89, 'Atap', 30, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(90, 'Acian', 32, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(91, 'Anti Bocor', 32, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(92, 'Concrete Mix', 32, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(93, 'Grouting', 32, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(94, 'Pengeras Beton', 32, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(95, 'Plaster', 32, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(96, 'Thin bed', 32, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(97, 'Tile Adhesive', 32, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(98, 'Jendela Baja', 35, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(99, 'Kusen', 36, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(100, 'Pintu Baja', 36, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(101, 'Pintu Kayu', 36, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(102, 'Pintu Plastik', 36, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(103, 'Aksesoris Listrik', 37, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(104, 'Antena', 37, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(105, 'Batre', 37, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(106, 'Kabel', 37, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(107, 'Saklar', 37, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(108, 'Exhaust Fan', 38, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(109, 'Kipas Berdiri', 38, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(110, 'Kipas Gantung', 38, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(111, 'Bohlam', 39, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(112, 'Lampu Hias', 39, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(113, 'Glassblock Polos', 40, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(114, 'Panel Dinding', 42, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(115, 'Keramik Dinding', 43, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(116, 'Keramik Lantai', 43, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(117, 'Laminate Floor', 44, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(118, 'WPC', 44, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(119, 'Click', 46, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(120, 'Plank', 46, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(121, 'SPC', 46, '2023-11-05 05:40:56', '2023-11-05 05:40:56');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `idcustomers` bigint(20) UNSIGNED NOT NULL,
  `nama_depan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_belakang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`idcustomers`, `nama_depan`, `nama_belakang`, `email`, `nomor_whatsapp`, `password`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Antonietta', 'Kihn', 'carroll.issac@example.net', '+1893859898377', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1999-12-04', 'P', '8440 Baron Walks\nNorth Madonnafort, LA 12714', '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(2, 'Brendan', 'Kozey', 'fadel.gabrielle@example.com', '+1268627093925', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1983-10-02', 'L', '470 Keon Street\nIsabeltown, NC 66394-6423', '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(3, 'Fredy', 'Bednar', 'vladimir.hackett@example.org', '+2668484952719', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1983-03-04', 'L', '479 Lowe Stream\nHelenfurt, GA 50038-7382', '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(4, 'Delbert', 'Grimes', 'grimes.ellis@example.net', '+7347403490434', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1986-10-21', 'L', '39039 Lavinia Walks Suite 069\nNorth Dangelochester, OR 39608-7266', '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(5, 'Kayley', 'Beier', 'jhowe@example.net', '+8970415721308', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1993-12-28', 'L', '875 Murphy Highway Suite 262\nMcGlynnshire, OR 01899-1663', '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(6, 'Fernando', 'Kuvalis', 'jquigley@example.net', '+4839454305073', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1985-11-15', 'L', '357 Strosin Prairie Apt. 597\nKoelpinhaven, NC 07268-4010', '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(7, 'Cleveland', 'Wilderman', 'olson.ashtyn@example.com', '+3275494263060', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1985-09-16', 'L', '5683 Koelpin Fields Suite 855\nSpencerfort, UT 24382', '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(8, 'Turner', 'Leannon', 'laurine44@example.net', '+2884876315263', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1975-06-04', 'L', '8881 Bernice Flat Suite 734\nEast Zechariah, ID 18348-3478', '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(9, 'Nina', 'Durgan', 'ken.kuphal@example.org', '+6832304067301', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1974-01-11', 'P', '86502 Coby Light Apt. 172\nLake Brittanymouth, NM 71454', '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(10, 'Edna', 'Haley', 'tommie66@example.com', '+8591910306577', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1981-07-20', 'P', '1246 Zane Lodge Suite 968\nManuelside, NV 05849-4743', '2023-11-05 05:40:57', '2023-11-05 05:40:57');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2023_09_11_000000_create_customers_table', 1),
(4, '2023_09_11_000001_create_users_table', 1),
(5, '2023_09_11_054817_create_shop_areas_table', 1),
(6, '2023_09_11_054916_create_shops_table', 1),
(7, '2023_09_11_064701_create_categories_table', 1),
(8, '2023_09_11_071625_create_brands_table', 1),
(9, '2023_09_11_083656_create_products_table', 1),
(10, '2023_09_11_083659_create_product_stocks_table', 1),
(11, '2023_09_11_083900_create_carts_table', 1),
(12, '2023_09_11_085056_create_promos_table', 1),
(13, '2023_09_11_085103_create_transactions_table', 1),
(14, '2023_09_11_085105_create_transaction_items_table', 1),
(15, '2023_09_11_085115_create_reviews_table', 1),
(16, '2023_11_02_095140_create_roles_table', 1),
(17, '2023_11_02_095240_create_role_user_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `idproducts` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` double(12,2) UNSIGNED NOT NULL,
  `diskon` double(3,2) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`idproducts`, `category_id`, `brand_id`, `nama`, `gambar`, `deskripsi`, `harga`, `diskon`, `created_at`, `updated_at`) VALUES
(1, 48, 1, 'Samsung AC Split Standart 0.5PK AR05TGHQAS + Material & Pemasangan', 'Image9', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3500000.00, 0.08, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(2, 48, 2, 'Daikin Ac Split FTC25NV14 1PK Putih (Unit Only)', 'Image4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 5000000.00, 0.12, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(3, 48, 3, 'Electrolux Ac Split ESM05CRR-C1 0.5 PK Putih', 'Image4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 5000000.00, 0.10, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(4, 48, 2, 'Daikin Ac Split FTC15NV14 0.5PK Putih (Unit Only)', 'Image6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 5000000.00, 0.08, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(5, 48, 3, 'Electrolux Ac Split ESM09CRR-C1 1 PK Putih', 'Image7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 5000000.00, 0.12, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(6, 49, 4, 'Sharp Air Cooler PJ-A55TY 5 Liter Putih', 'Image2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2000000.00, 0.20, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(7, 49, 4, 'Sharp Air Cooler PJ-A55TY 5 Liter Hitam', 'Image1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2000000.00, 0.11, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(8, 49, 4, 'SHARP AIR COOLER PJ-A36TY BLACK', 'Image10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2000000.00, 0.16, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(9, 49, 4, 'Sharp Air Cooler PJ-A26MY-B 6 Liter Putih', 'Image7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2000000.00, 0.05, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(10, 49, 5, 'Sanken Air Cooler SAC-58 8 Liter Putih', 'Image5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2000000.00, 0.16, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(11, 50, 4, 'SHARP AIR PURIFIER FP-J30Y-A/B/P', 'Image9', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2000000.00, 0.09, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(12, 50, 3, 'Electrolux Air Purifier Fa41-402Gy 9Speed', 'Image8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 5000000.00, 0.09, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(13, 50, 3, 'Electrolux Air Purifier Fa31-202Gy 3Speed', 'Image2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3000000.00, 0.08, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(14, 50, 3, 'Electrolux Air Purifier Pa91-606Dg Dark Grey', 'Image8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 9000000.00, 0.17, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(15, 50, 4, 'SHARP AIR PURIFIER FP-JM40Y-B', 'Image2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3500000.00, 0.20, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(16, 15, 6, 'POLYTRON Dinspenser Air Bottom Load PWC 778L', 'Image3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3500000.00, 0.20, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(17, 15, 4, 'Sharp Dispenser Galon Bawah SWD-78EHL-SL Silver', 'Image8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3500000.00, 0.16, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(18, 15, 4, 'Sharp Dispenser Galon Bawah SWD-80EHL-BK Hitam', 'Image10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3500000.00, 0.03, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(19, 15, 5, 'SANKEN WATER DISPENSER BOTTOM LOAD HWD-C535IC', 'Image2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3500000.00, 0.06, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(20, 15, 5, 'SANKEN WATER DISPENSER DUO GALON DA-15SS-BK', 'Image1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3500000.00, 0.20, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(21, 16, 4, 'Sharp Kulkas 2 Pintu SJ-317MG 256 Liter Hitam', 'Image2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 4000000.00, 0.03, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(22, 16, 7, 'LG Kulkas 2 Pintu GN-B392PLGB 395 Liter Silver', 'Image2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 11000000.00, 0.03, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(23, 16, 8, 'Bosch Kulkas 2 Pintu KFN86AA76J 540 Liter Hitam', 'Image1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 30000000.00, 0.08, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(24, 16, 9, 'KULKAS PANASONIC 2D 324L NR-BB331Q-PK', 'Image2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 8000000.00, 0.17, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(25, 16, 9, 'KULKAS PANASONIC 2D 324L INVERTER NR-BB331Q-S', 'Image3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 8000000.00, 0.14, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(26, 51, 4, 'SHARP MESIN CUCI FRONT LOADING 8KG ES-FL1082B', 'Image3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 5000000.00, 0.06, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(27, 51, 3, 'Electrolux Top Load Wash Machine 9.5Kg Ewt9588H1Wb', 'Image6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 5000000.00, 0.07, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(28, 51, 3, 'Electrolux Top Load Wash Machine 7.5Kg Ewt7588H1Wb', 'Image9', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 5000000.00, 0.18, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(29, 51, 3, 'Electrolux Top Load W.Machine 12.5Kg Ewt2H88M1Sb', 'Image4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 9000000.00, 0.10, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(30, 51, 3, 'Electrolux Mesin Cuci 2 Tabung EWS98261/2WA 8 Kg Putih', 'Image1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3000000.00, 0.19, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(31, 52, 3, 'ELECTROLUX MESIN CUCI & PENGERING 11/7KG EWW1142Q7WB', 'Image2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 18000000.00, 0.03, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(32, 52, 3, 'Electrolux Mesin Cuci Dan Pengering 1 Tabung Depan EWW 8024D3WB 8 Kg Putih', 'Image8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 11500000.00, 0.04, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(33, 52, 3, 'ELECTROLUX MESIN PENGERING EDV854JK3WB 8.5KG', 'Image9', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 9500000.00, 0.10, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(34, 52, 3, 'ELECTROLUX MESIN CUCI & PENGERING 10/7KG EWW1024P5WB ID', 'Image8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 15000000.00, 0.13, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(35, 52, 3, 'ELECTROLUX MESIN PENGERING EDV754H3WB 7.5KG', 'Image10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 9000000.00, 0.08, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(36, 53, 4, 'SHARP MICROWAVE R-728(S) 25L', 'Image5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1600000.00, 0.08, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(37, 53, 4, 'Sharp Microwave Oven R-735MT Hitam', 'Image3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1600000.00, 0.07, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(38, 53, 4, 'Sharp Microwave Oven R-21D0(S) 23 Liter Hitam', 'Image10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1600000.00, 0.06, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(39, 53, 4, 'Sharp Microwave Penghangat Makanan R-650GX 23 Liter Silver', 'Image4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1600000.00, 0.02, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(40, 53, 4, 'Sharp Microwave Penghangat Makanan R-751GX 25 Liter Hitam', 'Image4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1600000.00, 0.00, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(41, 54, 5, 'Sanken Oven EO-2000LW 19 Liter Hitam', 'Image10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 800000.00, 0.13, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(42, 54, 10, 'Artugo Oven CO4321 43 Liter Silver', 'Image4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2000000.00, 0.04, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(43, 54, 10, 'Artugo Oven CO3321 33 Liter Silver', 'Image8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1600000.00, 0.09, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(44, 54, 11, 'Fotile Oven Tanam KSG7007A Rex Hitam', 'Image3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 9500000.00, 0.09, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(45, 54, 11, 'Fotile Oven Tanam KSG7003AT 70 Liter Hitam', 'Image3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 17000000.00, 0.05, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(46, 19, 4, 'Sharp Setrika Kering EI-N05-B Biru', 'Image5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 250000.00, 0.17, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(47, 19, 4, 'Sharp Setrika Kering EI-N05-P Pink', 'Image9', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 250000.00, 0.01, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(48, 19, 12, 'Miyako Dry Iron Ei-1009M', 'Image9', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 250000.00, 0.06, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(49, 19, 12, 'Miyako Dry Iron Ei-1008M', 'Image2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 250000.00, 0.04, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(50, 19, 13, 'Philips Setrika Dry Iron Hd 1173/80', 'Image1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 250000.00, 0.06, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(51, 55, 12, 'Miyako Blender Kaca Bl-102Gs', 'Image6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 350000.00, 0.16, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(52, 55, 12, 'Miyako Blender Plastik Bl-101Pl', 'Image5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 240000.00, 0.07, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(53, 56, 13, 'PHILIPS HR 1552 HAND MIXER', 'Image2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 550000.00, 0.09, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(54, 56, 12, 'Miyako Hand Mixer Hm-620', 'Image2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 210000.00, 0.10, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(55, 56, 8, 'Bosch Mixer MUMS2EW00 Putih', 'Image2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3600000.00, 0.15, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(56, 56, 8, 'Bosch Mixer MUMS2EW00 Merah', 'Image5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3900000.00, 0.12, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(57, 57, 4, 'SHARP RICE COOKER 1.8L KS-TH18-RD/WH', 'Image6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 650000.00, 0.06, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(58, 57, 4, 'SHARP RICE COOKER 1.8L KS-T18TL-GR/RD/ST', 'Image7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 650000.00, 0.09, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(59, 57, 12, 'RICE COOKER MIYAKO MCM-508SBC MAGIC WARMER', 'Image2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 650000.00, 0.08, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(60, 57, 12, 'Miyako Mcm-528 1.8L Rice Cooker', 'Image2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 650000.00, 0.17, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(61, 57, 4, 'Sharp Rice Cooker KS-N18MG-BK 1.8 Liter Hitam', 'Image4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 650000.00, 0.01, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(62, 58, 14, 'Glucklich Oven Toaster 30L Je-Mv30B', 'Image6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 750000.00, 0.04, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(63, 58, 14, 'Glucklich Oven Toaster 16L Je-Mv16A', 'Image7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 750000.00, 0.05, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(64, 58, 14, 'Glucklich Oven Toaster 18L Je-Mv18G', 'Image3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 750000.00, 0.04, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(65, 21, 4, 'SHARP DIGITAL LED TV 32\\\\\\\" 2T-C32DF1I\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"', 'Image9', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 6500000.00, 0.04, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(66, 21, 4, 'Sharp Smart Tv 2T-C42DF1i 42 Inch Hitam', 'Image8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 6500000.00, 0.11, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(67, 21, 4, 'Sharp Smart Tv 2T-C50DF1i 50 Inch Hitam', 'Image1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 6500000.00, 0.07, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(68, 21, 4, 'Sharp Android Tv 4K 4T-C50DL1X 50 Inch', 'Image9', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 6500000.00, 0.07, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(69, 21, 4, 'SHARP SMART LED TV 4K 60\\\\\\\"4T-C60DK1X\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"\"', 'Image6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 6500000.00, 0.19, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(70, 22, 3, 'Electrolux Z1230 2In1 Vacuum Cleaner', 'Image7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2250000.00, 0.02, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(71, 22, 3, 'Electrolux Z931 Wet And Dry Vacum Cleaner', 'Image3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2250000.00, 0.13, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(72, 22, 3, 'Electrolux Z823 Wet&Dry Vacuum Cleaner', 'Image5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2250000.00, 0.02, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(73, 22, 10, 'Artugo Vacum Cleaner AV20B Hitam', 'Image5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2250000.00, 0.19, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(74, 22, 10, 'Artugo Vacum Cleaner AV20A Hitam', 'Image8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2250000.00, 0.04, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(75, 59, 14, 'Tidy Gantungan Baju Stainless 7734', 'Image3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 50000.00, 0.05, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(76, 59, 14, 'Tidy Gantungan Baju Kamar Mandi Tempel BAA-270 Putih', 'Image9', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 50000.00, 0.15, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(77, 59, 14, 'Tidy Gantungan Baju Stainless 6934', 'Image3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 50000.00, 0.19, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(78, 59, 15, 'Zehn Gantungan Peralatan Dapur K18860 Putih (6 Pcs)', 'Image4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 50000.00, 0.18, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(79, 60, 16, 'Ceramax Rak Sudut Kamar Mandi 8396GW Putih', 'Image6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 200000.00, 0.04, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(80, 60, 16, 'Ceramax Rak Dinding Tempat Peralatan Mandi 8399-WB Putih', 'Image3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 200000.00, 0.13, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(81, 60, 16, 'Ceramax Rak Sudut Kamar Mandi Dengan Gantungan 8096 Hitam', 'Image3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 200000.00, 0.20, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(82, 60, 16, 'Ceramax Rak Sudut Kamar Mandi 8003 Hitam', 'Image7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 200000.00, 0.09, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(83, 60, 16, 'Ceramax Rak Sudut Kamar Mandi 8396 Hitam', 'Image2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 200000.00, 0.12, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(84, 61, 14, 'Tidy Gelas Kumur Tempat Sikat Gigi 7735', 'Image4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 80000.00, 0.18, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(85, 61, 14, 'Tidy Gelas Kumur Tempat Sikat Gigi 6935', 'Image2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 80000.00, 0.11, '2023-11-05 05:40:56', '2023-11-05 05:40:56');
INSERT INTO `products` (`idproducts`, `category_id`, `brand_id`, `nama`, `gambar`, `deskripsi`, `harga`, `diskon`, `created_at`, `updated_at`) VALUES
(86, 62, 14, 'Tidy Tempat Sabun Kamar Mandi Stainless 7736', 'Image5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 100000.00, 0.11, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(87, 62, 14, 'Tidy Tempat Sabun BAA-140 Putih', 'Image9', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 100000.00, 0.14, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(88, 62, 14, 'Tidy Tempat Sabun Kamar Mandi Stainless 6936', 'Image8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 100000.00, 0.15, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(89, 62, 16, 'Ceramax Tempat Sabun Otomatis Dengan Sensor F1406S 1200 Ml Putih', 'Image5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 450000.00, 0.06, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(90, 62, 16, 'Ceramax Tempat Sabun Busa Otomatis Dengan Sensor F1406S 1200 Ml Putih', 'Image10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 450000.00, 0.19, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(91, 63, 14, 'Tidy Gantungan Tempat Sikat Gigi BAA-030 Putih', 'Image5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 60000.00, 0.14, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(92, 64, 14, 'Tidy Tempat Tisu Toilet 7731', 'Image10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 100000.00, 0.10, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(93, 64, 14, 'Tidy Tempat Tisu Toilet 6931', 'Image2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 100000.00, 0.03, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(94, 65, 17, 'Amstad Kran Air Wastafel Stainless F20020C0-0GADYC000', 'Image3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 500000.00, 0.04, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(95, 65, 17, 'Amstad Kran Air Wastafel Stainless F12121C0-0GACT0000', 'Image10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 500000.00, 0.08, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(96, 65, 14, 'Amstad Kran Air Wastafel Stainless FFASTJ57', 'Image2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 500000.00, 0.10, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(97, 65, 14, 'Tidy Kran Wastafel Stainless Sedang Tromso A112', 'Image2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 500000.00, 0.20, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(98, 65, 14, 'Tidy Kran Wastafel Stainless Sedang Neretva 612', 'Image6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 500000.00, 0.04, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(99, 66, 14, 'Tidy Kran Wastafel Cuci Piring Dapur Arendal C309', 'Image5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 200000.00, 0.17, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(100, 66, 14, 'Tidy Kran Wastafel Cuci Piring Dapur Fleksibel Arendal C311', 'Image8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 200000.00, 0.05, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(101, 66, 14, 'Tidy Kran Dinding Stainless ArendalC302', 'Image5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 200000.00, 0.01, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(102, 66, 14, 'Tidy Kran Dinding Leher Panjang Stainless Arendal C303', 'Image3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 200000.00, 0.17, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(103, 66, 14, 'Tidy Kran Dinding Dengan Drat Stainless Arendal C304', 'Image9', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 200000.00, 0.01, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(104, 67, 17, 'Amstad Kran Air + Hand Shower Stainless FFAS6511-601500BF0', 'Image9', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1500000.00, 0.17, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(105, 67, 18, 'Onda Kran Dinding Shower Air Panas Dingin B30001', 'Image3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 750000.00, 0.17, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(106, 67, 18, 'Onda Kran Bathtub Stainless Air Panas Dingin B33001', 'Image9', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 750000.00, 0.10, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(107, 67, 18, 'Onda Kran Bathtub Stainless Air Panas Dingin B21001', 'Image6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1500000.00, 0.17, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(108, 67, 17, 'Amstad Kran Air Bathtub + Shower F12132D1-0GACT0000', 'Image8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 750000.00, 0.12, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(109, 68, 19, 'Toto Kran Wastafel Cuci Piring Dona TX604KDN', 'Image9', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 500000.00, 0.09, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(110, 68, 19, 'Toto Kran Wastafel Cuci Piring TX603KCS', 'Image1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 500000.00, 0.15, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(111, 68, 18, 'Onda Kran Dinding Wastafel Cuci Piring V640GWU Putih', 'Image8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 500000.00, 0.03, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(112, 68, 20, 'Lavenia Kran Dinding Wastafel Cuci Piring Fleksibel LV 3312F', 'Image6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 500000.00, 0.01, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(113, 68, 21, 'Elite Kran Dinding Wastafel Cuci Piring Fleksibe E-2337', 'Image7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 500000.00, 0.14, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(114, 69, 17, 'Amstad Hand Shower + Kran Air Dinding Panas Dan Dingin FFAS6512-701500BF0', 'Image1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1000000.00, 0.12, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(115, 69, 16, 'Ceramax Kran Shower Air Panas Dingin Riverdalle KX-8123', 'Image1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1000000.00, 0.15, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(116, 69, 16, 'Ceramax Kran Shower Air Panas Dingin Chrome 630005CP', 'Image8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1000000.00, 0.15, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(117, 69, 18, 'Onda Kran Bathtub Stainless Air Panas Dingin B21001', 'Image5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1000000.00, 0.19, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(118, 69, 17, 'Amstad Kran Dinding + Hand Shower Air Panas Dingin', 'Image6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1000000.00, 0.05, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(119, 70, 16, 'Ceramax Bathtub XD-06205 170x80x55 Cm Putih', 'Image4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 15000000.00, 0.10, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(120, 70, 16, 'Ceramax Bathtub Tanam Bak Mandi Persegi Panjang Acrylic XD-03218', 'Image1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 5000000.00, 0.14, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(121, 70, 16, 'Ceramax Bathtub Jacuzzi XD-05209SPA Putih', 'Image8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 75000000.00, 0.19, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(122, 70, 22, 'Halmar Bathtub Tanam Kyoto Onyx 170x80x45 Cm Putih', 'Image5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 8500000.00, 0.16, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(123, 70, 22, 'Halmar Bathtub Tanam Carousel 150x75x39 Cm Putih', 'Image8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 5000000.00, 0.13, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(124, 71, 14, 'Tidy Kotak Mandi Kaca Motif Pohon Kelapa 6002 90x90x180 Cm', 'Image8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2500000.00, 0.11, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(125, 71, 14, 'Tidy Kotak Mandi Kaca Motif Garis-Garis 6002 90x90x180 Cm', 'Image8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2500000.00, 0.07, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(126, 71, 14, 'Tidy Shower Room Persegi 6008 Line Square', 'Image8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2500000.00, 0.19, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(127, 71, 14, 'Tidy Shower Room Persegi 6008 Fabric Square', 'Image4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2500000.00, 0.00, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(128, 71, 14, 'Tidy Shower Room Persegi 6008 Coconut Square', 'Image4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2500000.00, 0.04, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(129, 26, 14, 'Tidy Closet Duduk Slim Dua Bagian 1215A Putih', 'Image9', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1500000.00, 0.10, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(130, 26, 16, 'Ceramax Closet Duduk Satu Bagian Aires FSA 0077 Putih', 'Image3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1500000.00, 0.19, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(131, 26, 14, 'Tidy Closet Satu Bagian 1619 Putih', 'Image10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1500000.00, 0.07, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(132, 26, 14, 'Tidy Closet Duduk Satu Bagian FSA0042 Putih', 'Image10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1500000.00, 0.20, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(133, 26, 14, 'Tidy Closet Duduk Satu Bagian FSA0033 Putih', 'Image1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1500000.00, 0.11, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(134, 72, 23, 'Paloma Saringan Air Kamar Mandi 1301', 'Image5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 200000.00, 0.06, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(135, 72, 19, 'Toto Saringan Air Kamar Mandi Persegi TX1DB', 'Image7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 400000.00, 0.10, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(136, 72, 18, 'Onda Saringan Air Kamar Mandi Stainless FLS05', 'Image8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 200000.00, 0.17, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(137, 72, 19, 'Toto Saringan Air Kamar Mandi TX1EB', 'Image1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 400000.00, 0.09, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(138, 72, 20, 'Elite Saringan Air Kamar Mandi Minimalis 4 Inch', 'Image10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 200000.00, 0.03, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(139, 73, 23, 'Paloma Selang Fleksibel Wastafel 1604 40 Cm', 'Image2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 100000.00, 0.12, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(140, 73, 23, 'Paloma Selang Fleksibel Wop 1604 40 Cm', 'Image6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 100000.00, 0.15, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(141, 73, 17, 'Amstad Kran Fleksibel F8N305Z0-0GADY0000 50 Cm', 'Image8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 100000.00, 0.08, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(142, 73, 18, 'Onda Selang Fleksibel F1/2XF1/2 Inch 30 Cm', 'Image3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 100000.00, 0.03, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(143, 73, 16, 'Ceramax Selang Fleksibel FH-0302 WH-H 1/2 Inch 100 Cm', 'Image8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 100000.00, 0.05, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(144, 74, 16, 'Ceramax Afur Lubang Pembuangan Wastafel Putar Dengan Overflow AF-A29 11/4 Inch', 'Image9', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 150000.00, 0.01, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(145, 74, 14, 'Tidy Afur Lubang Pembuangan Wastafel Putar AV-011911 11/4 Inch', 'Image2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 100000.00, 0.01, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(146, 74, 14, 'Tidy P-Trap Pipa Pembuangan Wastafel Dengan Afur PT-020411+AV-010311', 'Image4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 150000.00, 0.01, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(147, 75, 18, 'Onda Stop Kran Stainless SV11M', 'Image6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 150000.00, 0.10, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(148, 75, 18, 'Onda Stop Kran Stainless JF02', 'Image2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 150000.00, 0.11, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(149, 75, 18, 'Onda Stop Kran Stainless JF03TA', 'Image8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 100000.00, 0.10, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(150, 75, 18, 'Onda Stop Kran Stainless JF14', 'Image2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 150000.00, 0.07, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(151, 75, 18, 'Onda Stop Kran Stainless JF 08', 'Image1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 100000.00, 0.14, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(152, 76, 16, 'Ceramax Kabinet Dengan Wastafel Kamar Mandi Athan Series PSPVC611 (Set)', 'Image5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 5000000.00, 0.09, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(153, 76, 16, 'Ceramax Kabinet Dengan Wastafel Kamar Mandi Oliver Series PSPVC1803 (Set)', 'Image10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 5000000.00, 0.08, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(154, 76, 16, 'Ceramax Kabinet Dengan Wastafel Kamar Mandi Liam Series PS-837 Putih (Set)', 'Image5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 5000000.00, 0.02, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(155, 76, 16, 'Ceramax Kabinet Dengan Wastafel Kamar Mandi Ethan Series PSPVC1801 (Set)', 'Image8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 5000000.00, 0.11, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(156, 76, 16, 'Ceramax Kabinet Kaca Dengan Wastafel Kamar Mandi Deportivo 1040501-Blk Hitam (Set)', 'Image2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2000000.00, 0.01, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(157, 77, 16, 'Ceramax Wastafel Amaris FSB0396D 50X39.5X14.5 Cm Coklat', 'Image1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1000000.00, 0.00, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(158, 77, 16, 'Ceramax Wastafel Atas Meja Mason H425C14 Coklat', 'Image4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1000000.00, 0.01, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(159, 77, 16, 'Toto Wastafel Tanam Meja L568V3 Putih', 'Image1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1000000.00, 0.09, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(160, 77, 16, 'Ceramax Wastafel Atas Meja Savana H310C03 Coklat', 'Image8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1000000.00, 0.12, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(161, 77, 16, 'Ceramax Wastafel Atas Meja Helena H227C03 Putih', 'Image5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1000000.00, 0.07, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(162, 78, 16, 'Ceramax Wastafel Dengan Kaki Chelsea FSD014B Putih', 'Image5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2500000.00, 0.16, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(163, 78, 14, 'Tidy Wastafel Dengan Kaki FSB0440 Putih', 'Image3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 600000.00, 0.14, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(164, 79, 19, 'Toto Wastafel Dinding LW247CJ Putih', 'Image10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 600000.00, 0.09, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(165, 79, 19, 'Toto Wastafel Dinding LW246J Putih', 'Image5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 600000.00, 0.01, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(166, 79, 17, 'Amstad Wastafel Dinding CLU032I3-1CACTLW00 STUD45 45 Cm', 'Image6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 600000.00, 0.06, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(167, 79, 17, 'Amstad Wastafel Dinding CLU031I0-1CACTLW00 STUD50 50 Cm Putih', 'Image2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 600000.00, 0.10, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(168, 79, 16, 'Ceramax Wastafel Gantung Blanco FSB0385 40x30x12.5 Cm Putih', 'Image6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 600000.00, 0.09, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(169, 80, 16, 'Ceramax Wastafel Dengan Rak Kaca Catania ZGL-32 Pink', 'Image4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3000000.00, 0.06, '2023-11-05 05:40:56', '2023-11-05 05:40:56');
INSERT INTO `products` (`idproducts`, `category_id`, `brand_id`, `nama`, `gambar`, `deskripsi`, `harga`, `diskon`, `created_at`, `updated_at`) VALUES
(170, 80, 16, 'Ceramax Kabinet Pvc Dengan Wastafel Kamar Mandi CPS-112 (Set)', 'Image2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 4000000.00, 0.14, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(171, 80, 16, 'Ceramax Kabinet Pvc Dengan Wastafel Kamar Mandi CPS920-2 (Set)', 'Image2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3000000.00, 0.15, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(172, 80, 16, 'Ceramax Kabinet Kaca Dengan Wastafel Kamar Mandi Signore 1040505-Yl Kuning (Set)', 'Image8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3000000.00, 0.04, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(173, 80, 16, 'Ceramax Kabinet Kaca Dengan Wastafel Kamar Mandi Signore 1040505-Pr Ungu (Set)', 'Image8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3000000.00, 0.17, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(174, 81, 14, 'Tidy Shower Tiang Stainless Kolom Persegi CC03203 (Set)', 'Image5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1500000.00, 0.05, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(175, 81, 16, 'Ceramax Shower Mandi Dengan Thermostatic AT-H001 Putih', 'Image5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 5500000.00, 0.19, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(176, 81, 16, 'Ceramax Shower Mandi Dengan Thermostatic AT-H011', 'Image3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3500000.00, 0.18, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(177, 81, 18, 'Onda Shower Tiang Kolom RS15 (Set)', 'Image10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 300000.00, 0.04, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(178, 81, 19, 'Toto Shower Tiang Kolom + Kran Shower TX493SRS', 'Image7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 500000.00, 0.05, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(179, 82, 17, 'Amstad Hand Shower FFASS506-000600BFO 1.5 Meter Putih', 'Image9', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 400000.00, 0.00, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(180, 82, 17, 'Amstad Hand Shower FFASS506-000560BFO 1.5 Meter Pink', 'Image4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 400000.00, 0.03, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(181, 82, 16, 'Amstad Hand Shower FFASS506-000440BFO 1.5 Meter Abu', 'Image7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 400000.00, 0.00, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(182, 82, 16, 'Ceramax Hand Shower Dengan Rel Tiang Lacey DY-CR013 Biru', 'Image4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 400000.00, 0.12, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(183, 82, 16, 'Ceramax Hand Shower Dengan Rel Tiang Lacey DY-CR013 Hitam', 'Image8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 400000.00, 0.14, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(184, 83, 14, 'Tidy Head Shower Persegi Stainless CX06103 10 Inch', 'Image5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 400000.00, 0.14, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(185, 83, 14, 'Ceramax Hand Shower Dengan Rel Tiang Lacey DY-CR013 Merah', 'Image4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 400000.00, 0.16, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(186, 83, 16, 'Toto Head Shower Dinding Chrome TX488SZ/S', 'Image7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1300000.00, 0.07, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(187, 83, 19, 'Tidy Head Shower Satu Jenis Siram CT01101 15 Cm', 'Image10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 150000.00, 0.06, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(188, 83, 14, 'Tidy Head Shower Tiga Jenis Siram CT01101 15 Cm', 'Image2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 200000.00, 0.12, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(189, 84, 14, 'Tidy Shower Tiang Stainless Kolom Bulat Dengan Rak Sabun Mandi CC02201 (Set)', 'Image8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1200000.00, 0.04, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(190, 84, 16, 'Ceramax Shower Tiang Chrome Kolom 660011CP (Set)', 'Image9', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3000000.00, 0.13, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(191, 84, 16, 'Ceramax Shower Tiang Kolom 660011RB Hitam-Emas (Set)', 'Image4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3000000.00, 0.10, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(192, 84, 18, 'Onda Shower Tiang Kolom RS11B Hitam (Set)', 'Image4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3000000.00, 0.08, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(193, 84, 16, 'Ceramax Shower Tiang Kolom 660011MB Hitam (Set)', 'Image5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2500000.00, 0.04, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(194, 85, 17, 'Amstad Jet Shower FFTP404-CHFB0 120 Cm Chrome', 'Image8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 300000.00, 0.04, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(195, 85, 17, 'Amstad Jet Shower FFTP404-WTFB0 120 Cm Putih', 'Image1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 300000.00, 0.13, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(196, 85, 17, 'Amstad Jet Shower F72002H00GADY0000 120 Cm', 'Image4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 300000.00, 0.04, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(197, 85, 16, 'Toto Jet Shower Chrome THX20MCRB', 'Image5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 300000.00, 0.02, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(198, 85, 16, 'Toto Jet Shower Kloset 1.2 Meter THX20NB Putih', 'Image10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 300000.00, 0.17, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(199, 86, 24, 'Rinnai Water Heater Listrik RES-EC010 10 Liter Putih', 'Image10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2500000.00, 0.02, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(200, 86, 24, 'Rinnai Water Heater Listrik RES-EH015 15 Liter Putih Coating', 'Image5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2500000.00, 0.02, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(201, 86, 3, 'Electrolux Water Heater Listrik EWS-15AEX-DW1 15 Liter Putih', 'Image4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 4000000.00, 0.18, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(202, 86, 3, 'Electrolux Water Heater Listrik EWS-30BEX-DW1 30 Liter Putih', 'Image3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 4000000.00, 0.00, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(203, 86, 25, 'Stiebel Eltron Water Heater EHS15 15 Liter', 'Image3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2500000.00, 0.18, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(204, 87, 26, 'I-Gaz Water Heater ACJSYZ10-5A 5 Liter Putih', 'Image6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1500000.00, 0.07, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(205, 87, 24, 'Rinnai Water Heater Gas REU-5 CFC 5 Liter Putih', 'Image8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2000000.00, 0.10, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(206, 87, 27, 'Wasser Water Heater Gas WH-506A 5 Liter Putih', 'Image3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1500000.00, 0.02, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(207, 87, 28, 'Polaris Water Heater Gas JSD 10-5DL 5 Liter Putih', 'Image7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2500000.00, 0.04, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(208, 87, 29, 'Ariston Water Heater Gas FAST R5 5 Liter Putih', 'Image10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2000000.00, 0.14, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(209, 88, 30, 'Hegel Water Heater Solar Tenaga Surya 200 Liter', 'Image4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 36000000.00, 0.04, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(210, 88, 30, 'Hegel Water Heater Solar Tenaga Surya 300 Liter', 'Image3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 44000000.00, 0.03, '2023-11-05 05:40:56', '2023-11-05 05:40:56'),
(211, 88, 30, 'Hegel Water Heater Solar Tenaga Surya 80 Galvanized 80 Liter', 'Image1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 20000000.00, 0.08, '2023-11-05 05:40:56', '2023-11-05 05:40:56');

-- --------------------------------------------------------

--
-- Table structure for table `product_stocks`
--

CREATE TABLE `product_stocks` (
  `shop_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `stok` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promos`
--

CREATE TABLE `promos` (
  `idpromos` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diskon` double(3,2) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `idreviews` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `rating` tinyint(3) UNSIGNED NOT NULL,
  `ulasan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`idreviews`, `transaction_id`, `product_id`, `customer_id`, `rating`, `ulasan`, `created_at`, `updated_at`) VALUES
(1, 1, 186, 2, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(2, 1, 192, 2, 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(3, 1, 41, 2, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2023-11-05 05:40:57', '2023-11-05 05:40:57');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `idroles` bigint(20) UNSIGNED NOT NULL,
  `nama_role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `idshops` bigint(20) UNSIGNED NOT NULL,
  `shop_area_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shop_areas`
--

CREATE TABLE `shop_areas` (
  `idshopareas` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `idtransactions` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `promo_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tanggal` datetime NOT NULL,
  `total` double(12,2) UNSIGNED NOT NULL,
  `metode_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pembayaran` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`idtransactions`, `customer_id`, `promo_id`, `tanggal`, `total`, `metode_pembayaran`, `tanggal_pembayaran`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, '2023-10-30 12:01:43', 13186000.00, 'cash', '2023-10-30 21:35:59', '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(2, 2, NULL, '2023-10-16 16:01:21', 14710000.00, 'mastercard', '2023-10-28 20:40:43', '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(3, 2, NULL, '2023-11-01 06:25:43', 47850000.00, 'mastercard', NULL, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(4, 2, NULL, '2023-10-27 05:50:58', 3112500.00, 'visa', NULL, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(5, 3, NULL, '2023-11-02 06:48:22', 9988500.00, 'cash', '2023-11-05 02:59:22', '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(6, 3, NULL, '2023-10-09 21:03:14', 17970000.00, 'visa', NULL, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(7, 3, NULL, '2023-10-27 10:05:29', 5880000.00, 'visa', '2023-10-28 22:48:19', '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(8, 3, NULL, '2023-10-23 18:18:00', 34939000.00, 'mastercard', '2023-11-03 18:14:09', '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(9, 3, NULL, '2023-10-11 05:41:06', 21952000.00, 'cash', '2023-10-30 13:34:46', '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(10, 4, NULL, '2023-10-14 00:08:48', 4564000.00, 'mastercard', '2023-10-23 03:39:44', '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(11, 4, NULL, '2023-10-19 15:34:18', 84716000.00, 'visa', '2023-11-02 10:33:21', '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(12, 4, NULL, '2023-10-18 12:18:56', 12409000.00, 'visa', '2023-10-20 03:01:15', '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(13, 4, NULL, '2023-10-09 22:52:04', 8040000.00, 'mastercard', '2023-11-02 15:27:21', '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(14, 6, NULL, '2023-10-30 07:54:33', 10920000.00, 'cash', '2023-11-02 04:49:32', '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(15, 6, NULL, '2023-10-20 05:08:44', 9660000.00, 'mastercard', NULL, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(16, 6, NULL, '2023-10-22 03:49:50', 19682000.00, 'visa', '2023-11-03 09:29:05', '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(17, 6, NULL, '2023-11-02 11:21:36', 2736000.00, 'visa', '2023-11-05 07:26:21', '2023-11-05 05:40:57', '2023-11-05 05:40:58'),
(18, 6, NULL, '2023-10-22 23:08:11', 51875000.00, 'visa', '2023-11-02 10:40:04', '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(19, 6, NULL, '2023-11-05 01:33:07', 46715000.00, 'cash', '2023-11-05 09:36:31', '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(20, 8, NULL, '2023-10-15 06:26:16', 5191000.00, 'mastercard', NULL, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(21, 8, NULL, '2023-10-07 23:58:41', 50559000.00, 'visa', NULL, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(22, 8, NULL, '2023-10-26 11:22:06', 248654600.00, 'visa', '2023-11-02 22:36:41', '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(23, 9, NULL, '2023-11-01 12:04:52', 3158000.00, 'cash', NULL, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(24, 10, NULL, '2023-11-02 10:07:08', 23094000.00, 'mastercard', NULL, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(25, 10, NULL, '2023-10-19 10:10:11', 13736000.00, 'visa', '2023-10-28 10:40:50', '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(26, 10, NULL, '2023-10-11 16:23:28', 12590000.00, 'cash', '2023-10-19 04:37:24', '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(27, 10, NULL, '2023-11-03 10:59:27', 7816000.00, 'mastercard', '2023-11-04 07:29:49', '2023-11-05 05:40:58', '2023-11-05 05:40:58');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_items`
--

CREATE TABLE `transaction_items` (
  `transaction_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `jumlah` int(10) UNSIGNED NOT NULL,
  `total` double(12,2) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaction_items`
--

INSERT INTO `transaction_items` (`transaction_id`, `product_id`, `jumlah`, `total`, `created_at`, `updated_at`) VALUES
(1, 41, 3, 2088000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(1, 181, 1, 400000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(1, 186, 2, 2418000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(1, 192, 3, 8280000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(2, 116, 4, 3400000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(2, 158, 4, 3960000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(2, 199, 3, 7350000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(3, 34, 3, 39150000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(3, 123, 2, 8700000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(4, 105, 5, 3112500.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(5, 71, 1, 1957500.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(5, 83, 1, 176000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(5, 102, 5, 830000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(5, 110, 5, 2125000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(5, 199, 2, 4900000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(6, 151, 5, 430000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(6, 155, 2, 8900000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(6, 172, 3, 8640000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(7, 206, 4, 5880000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(8, 34, 2, 26100000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(8, 38, 4, 6016000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(8, 125, 1, 2325000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(8, 198, 2, 498000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(9, 128, 1, 2400000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(9, 153, 4, 18400000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(9, 194, 4, 1152000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(10, 98, 1, 480000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(10, 160, 4, 3520000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(10, 187, 4, 564000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(11, 1, 2, 6440000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(11, 15, 3, 8400000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(11, 54, 4, 756000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(11, 209, 2, 69120000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(12, 16, 3, 8400000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(12, 109, 5, 2275000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(12, 111, 3, 1455000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(12, 150, 2, 279000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(13, 11, 4, 7280000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(13, 100, 4, 760000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(14, 44, 1, 8645000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(14, 109, 5, 2275000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(15, 1, 3, 9660000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(16, 6, 5, 8000000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(16, 18, 3, 10185000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(16, 186, 1, 1209000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(16, 196, 1, 288000.00, '2023-11-05 05:40:57', '2023-11-05 05:40:57'),
(17, 81, 3, 480000.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(17, 166, 4, 2256000.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(18, 29, 5, 40500000.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(18, 75, 2, 95000.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(18, 147, 4, 540000.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(18, 172, 2, 5760000.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(18, 173, 2, 4980000.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(19, 2, 3, 13200000.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(19, 22, 3, 32010000.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(19, 151, 2, 172000.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(19, 159, 1, 910000.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(19, 187, 3, 423000.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(20, 43, 1, 1456000.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(20, 107, 3, 3735000.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(21, 7, 2, 3560000.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(21, 18, 1, 3395000.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(21, 29, 5, 40500000.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(21, 83, 4, 704000.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(21, 193, 1, 2400000.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(22, 73, 3, 5467500.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(22, 77, 3, 121500.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(22, 84, 1, 65600.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(22, 121, 4, 243000000.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(23, 30, 1, 2430000.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(23, 82, 4, 728000.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(24, 27, 3, 13950000.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(24, 80, 4, 696000.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(24, 136, 3, 498000.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(24, 171, 1, 2550000.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(24, 191, 2, 5400000.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(25, 55, 4, 12240000.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(25, 79, 3, 576000.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(25, 95, 2, 920000.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(26, 22, 1, 10670000.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(26, 42, 1, 1920000.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(27, 40, 1, 1600000.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(27, 41, 1, 696000.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58'),
(27, 192, 2, 5520000.00, '2023-11-05 05:40:58', '2023-11-05 05:40:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `customer_id`) VALUES
(1, 'Antonietta Kihn', 'carroll.issac@example.net', '+1893859898377', '2023-11-05 05:40:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'RFvcvfsrPR', '2023-11-05 05:40:57', '2023-11-05 05:40:57', 1),
(2, 'Brendan Kozey', 'fadel.gabrielle@example.com', '+1268627093925', '2023-11-05 05:40:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'sDnfjwKd7v', '2023-11-05 05:40:57', '2023-11-05 05:40:57', 2),
(3, 'Fredy Bednar', 'vladimir.hackett@example.org', '+2668484952719', '2023-11-05 05:40:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'mLBdnRcDC3', '2023-11-05 05:40:57', '2023-11-05 05:40:57', 3),
(4, 'Delbert Grimes', 'grimes.ellis@example.net', '+7347403490434', '2023-11-05 05:40:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'JVp8oTPs3f', '2023-11-05 05:40:57', '2023-11-05 05:40:57', 4),
(5, 'Kayley Beier', 'jhowe@example.net', '+8970415721308', '2023-11-05 05:40:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Bo1qfZvk2X', '2023-11-05 05:40:57', '2023-11-05 05:40:57', 5),
(6, 'Fernando Kuvalis', 'jquigley@example.net', '+4839454305073', '2023-11-05 05:40:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'XlAcQwtBxB', '2023-11-05 05:40:57', '2023-11-05 05:40:57', 6),
(7, 'Cleveland Wilderman', 'olson.ashtyn@example.com', '+3275494263060', '2023-11-05 05:40:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1RmIDRbZTS', '2023-11-05 05:40:57', '2023-11-05 05:40:57', 7),
(8, 'Turner Leannon', 'laurine44@example.net', '+2884876315263', '2023-11-05 05:40:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NL0ks3ot2h', '2023-11-05 05:40:57', '2023-11-05 05:40:57', 8),
(9, 'Nina Durgan', 'ken.kuphal@example.org', '+6832304067301', '2023-11-05 05:40:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'hClWjjojpu', '2023-11-05 05:40:57', '2023-11-05 05:40:57', 9),
(10, 'Edna Haley', 'tommie66@example.com', '+8591910306577', '2023-11-05 05:40:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'zPr0Y9eVuj', '2023-11-05 05:40:57', '2023-11-05 05:40:57', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`idbrands`),
  ADD UNIQUE KEY `brands_nama_unique` (`nama`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`customer_id`,`product_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`idcategories`),
  ADD KEY `categories_parent_category_id_foreign` (`parent_category_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`idcustomers`),
  ADD UNIQUE KEY `customers_email_unique` (`email`),
  ADD UNIQUE KEY `customers_nomor_whatsapp_unique` (`nomor_whatsapp`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`idproducts`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `product_stocks`
--
ALTER TABLE `product_stocks`
  ADD PRIMARY KEY (`shop_id`,`product_id`),
  ADD KEY `product_stocks_product_id_foreign` (`product_id`);

--
-- Indexes for table `promos`
--
ALTER TABLE `promos`
  ADD PRIMARY KEY (`idpromos`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`idreviews`),
  ADD KEY `reviews_transaction_id_foreign` (`transaction_id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`),
  ADD KEY `reviews_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idroles`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`idshops`),
  ADD KEY `shops_shop_area_id_foreign` (`shop_area_id`);

--
-- Indexes for table `shop_areas`
--
ALTER TABLE `shop_areas`
  ADD PRIMARY KEY (`idshopareas`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`idtransactions`),
  ADD KEY `transactions_customer_id_foreign` (`customer_id`),
  ADD KEY `transactions_promo_id_foreign` (`promo_id`);

--
-- Indexes for table `transaction_items`
--
ALTER TABLE `transaction_items`
  ADD PRIMARY KEY (`transaction_id`,`product_id`),
  ADD KEY `transaction_items_product_id_foreign` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD KEY `users_customer_id_foreign` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `idbrands` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `idcategories` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `idcustomers` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `idproducts` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT for table `promos`
--
ALTER TABLE `promos`
  MODIFY `idpromos` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `idreviews` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `idroles` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `idshops` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shop_areas`
--
ALTER TABLE `shop_areas`
  MODIFY `idshopareas` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `idtransactions` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`idcustomers`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`idproducts`) ON DELETE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_category_id_foreign` FOREIGN KEY (`parent_category_id`) REFERENCES `categories` (`idcategories`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`idbrands`),
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`idcategories`);

--
-- Constraints for table `product_stocks`
--
ALTER TABLE `product_stocks`
  ADD CONSTRAINT `product_stocks_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`idproducts`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_stocks_shop_id_foreign` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`idshops`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`idcustomers`),
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`idproducts`),
  ADD CONSTRAINT `reviews_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`idtransactions`);

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`idroles`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shops`
--
ALTER TABLE `shops`
  ADD CONSTRAINT `shops_shop_area_id_foreign` FOREIGN KEY (`shop_area_id`) REFERENCES `shop_areas` (`idshopareas`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`idcustomers`),
  ADD CONSTRAINT `transactions_promo_id_foreign` FOREIGN KEY (`promo_id`) REFERENCES `promos` (`idpromos`);

--
-- Constraints for table `transaction_items`
--
ALTER TABLE `transaction_items`
  ADD CONSTRAINT `transaction_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`idproducts`) ON DELETE CASCADE,
  ADD CONSTRAINT `transaction_items_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`idtransactions`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`idcustomers`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
