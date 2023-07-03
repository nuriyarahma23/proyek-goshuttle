-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jun 2023 pada 17.02
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` tinytext NOT NULL,
  `sub_title` tinytext NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `sub_title`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'About page title lorem ipsum', 'About Page sub-Title Lorem Ipsum Lorem Ipsum', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '2021-12-19 12:45:25', '2023-06-22 03:06:38', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `accounts`
--

CREATE TABLE `accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(100) NOT NULL,
  `detail` text DEFAULT NULL,
  `amount` varchar(100) NOT NULL,
  `doc_location` text DEFAULT NULL,
  `system_user_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `accounts`
--

INSERT INTO `accounts` (`id`, `type`, `detail`, `amount`, `doc_location`, `system_user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(134, 'income', 'Ticket Booking (TB8E4G57FO) ', '983', NULL, 1, '2022-06-28 15:08:21', '2023-06-26 18:18:32', '2023-06-26 18:18:32'),
(135, 'income', 'Ticket Booking (TBFKS8YEBW) ', '500', NULL, 1, '2022-06-28 15:15:21', '2023-06-26 18:19:14', '2023-06-26 18:19:14'),
(136, 'income', 'Ticket Booking (TBJ3D2RY0P) ', '896', NULL, 1, '2022-06-28 15:16:50', '2023-06-26 18:19:22', '2023-06-26 18:19:22'),
(137, 'income', 'Ticket Booking (TBNYFQET3S) ', '600', NULL, 1, '2022-06-28 15:17:58', '2023-06-26 18:19:26', '2023-06-26 18:19:26'),
(138, 'income', 'Ticket Booking (TB76DFM1CA) ', '500', NULL, 1, '2022-06-28 15:19:44', '2023-06-26 18:19:30', '2023-06-26 18:19:30'),
(139, 'income', 'Ticket Booking (TBXT8KPHV2) ', '896', NULL, 1, '2022-06-28 15:20:54', '2023-06-26 18:19:34', '2023-06-26 18:19:34'),
(140, 'income', 'Ticket Booking (TBA9X180HU) ', '1008', NULL, 1, '2022-06-28 15:22:26', '2023-06-26 18:19:41', '2023-06-26 18:19:41'),
(141, 'income', 'Refund (TBA9X180HU) ', '100', NULL, 1, '2022-06-28 15:23:04', '2023-06-22 03:06:38', NULL),
(142, 'expense', 'Refund (TBA9X180HU) ', '1008', NULL, 1, '2022-06-28 15:23:04', '2023-06-22 03:06:38', NULL),
(143, 'income', 'Cancel (TBXT8KPHV2) ', '50', NULL, 1, '2022-06-28 15:23:32', '2023-06-22 03:06:38', NULL),
(144, 'income', 'Ticket Booking (TBX6NC73VK) ', '1456', NULL, 1, '2023-06-26 19:48:41', '2023-06-26 19:48:41', NULL),
(145, 'income', 'Ticket Booking (TBNLAC74XK) ', '1456', NULL, 1, '2023-06-26 20:50:06', '2023-06-26 20:50:06', NULL),
(146, 'income', 'Ticket Booking (TBD6OPY4TC) ', '896', NULL, 1, '2023-06-26 20:51:26', '2023-06-26 20:51:26', NULL),
(147, 'income', 'Ticket Booking (TB65E2BU7Y) ', '560', NULL, 1, '2023-06-26 20:55:43', '2023-06-26 20:55:43', NULL),
(148, 'income', 'Ticket Booking (TBTPU2Y8GR) ', '2352', NULL, 1, '2023-06-26 20:59:24', '2023-06-26 20:59:24', NULL),
(149, 'expense', 'Refund (TBTPU2Y8GR) ', '2352', NULL, 1, '2023-06-26 21:00:44', '2023-06-26 21:00:44', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `accouthead`
--

CREATE TABLE `accouthead` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `parentid` varchar(100) DEFAULT NULL,
  `chield` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `accouthead`
--

INSERT INTO `accouthead` (`id`, `name`, `parentid`, `chield`) VALUES
(1, 'assets', 'parent', 1),
(2, 'expence', 'parent', 1),
(3, 'income', 'parent', 0),
(4, 'liability', 'parent', 1),
(5, 'current Assect', '1', 1),
(6, 'Non current Assect', '1', 0),
(7, 'account', '4', 1),
(8, 'account recieve', '5', 1),
(9, 'add new', '8', 0),
(10, 'test data', '7', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `adds`
--

CREATE TABLE `adds` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_path` text NOT NULL,
  `pagename` text NOT NULL,
  `link` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `adds`
--

INSERT INTO `adds` (`id`, `image_path`, `pagename`, `link`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'image/add/1656243275_8031ce51369f5d9a2e44.jpg', 'checkout', 'www.test.com', '2021-12-18 18:18:16', '2023-06-22 03:06:39', NULL),
(3, 'image/add/1656243290_54a91ec1ebe9ad09ed62.jpg', 'ticket', 'www.test.com.xyz', '2021-12-18 18:23:57', '2023-06-22 03:06:39', NULL),
(4, 'image/add/1656243309_69abd52471e8262753f0.jpg', 'customer', 'www.test.com fdfd', '2021-12-18 18:45:56', '2023-06-22 03:06:39', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `agentcommissions`
--

CREATE TABLE `agentcommissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `agent_id` int(10) UNSIGNED NOT NULL,
  `booking_id` tinytext NOT NULL,
  `subtrip_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `grandtotal` tinytext NOT NULL,
  `commission` tinytext NOT NULL,
  `rate` tinytext NOT NULL,
  `detail` tinytext NOT NULL,
  `date` tinytext NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `agents`
--

CREATE TABLE `agents` (
  `id` int(10) UNSIGNED NOT NULL,
  `location_id` int(10) UNSIGNED NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `first_name` tinytext NOT NULL,
  `last_name` tinytext NOT NULL,
  `blood` tinytext DEFAULT NULL,
  `id_number` text NOT NULL,
  `id_type` tinytext NOT NULL,
  `nid_picture` tinytext DEFAULT NULL,
  `commission` tinytext NOT NULL,
  `profile_picture` tinytext DEFAULT NULL,
  `address` tinytext NOT NULL,
  `city` tinytext DEFAULT NULL,
  `zip` tinytext DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `agents`
--

INSERT INTO `agents` (`id`, `location_id`, `country_id`, `user_id`, `first_name`, `last_name`, `blood`, `id_number`, `id_type`, `nid_picture`, `commission`, `profile_picture`, `address`, `city`, `zip`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 32, 18, 169, 'Test', 'Agent', 'A+', 'abc765', 'Passport', '', '2', 'image/agent/1656328540_a7591bcf2d9661a3b504.jpg', 'dhaka, bangladesh', 'dhaka', '1213', '2022-06-27 17:15:40', '2023-06-22 03:06:40', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenttotals`
--

CREATE TABLE `agenttotals` (
  `id` int(10) UNSIGNED NOT NULL,
  `agent_id` int(10) UNSIGNED NOT NULL,
  `booking_id` text DEFAULT NULL,
  `income` text DEFAULT NULL,
  `expense` text DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `serial` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `title`, `description`, `image`, `serial`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n', 'image/blog/1656311091_2020c34153b9a2fc7f33.jpg', 10, '2021-09-04 16:34:57', '2023-06-22 03:06:41', NULL),
(2, 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n', 'image/blog/1656311056_dfa9a99380678646fe99.jpg', 9, '2021-09-04 16:34:57', '2023-06-22 03:06:41', NULL),
(3, 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n', 'image/blog/1656311018_3b054d5ce68b02cfd5e2.jpg', 8, '2021-09-04 16:34:57', '2023-06-22 03:06:41', NULL),
(4, 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n', 'image/blog/1656310983_97bff0a10ff6b94480f4.jpg', 7, '2021-09-04 16:34:57', '2023-06-22 03:06:41', NULL),
(5, 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n', 'image/blog/1656310947_5ee7f9fbeb0ae2f000a4.jpg', 6, '2021-09-04 16:34:57', '2023-06-22 03:06:41', NULL),
(6, 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n', 'image/blog/1656310912_615c25c83736e797b7ba.jpg', 5, '2021-09-04 16:34:57', '2023-06-22 03:06:41', NULL),
(8, 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n', 'image/blog/1656310880_34b06b7f5bfa88a0a359.jpg', 4, '2021-09-04 16:34:57', '2023-06-22 03:06:41', NULL),
(9, 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n', 'image/blog/1656310830_7653f15bbb4bb7d15dde.jpg', 3, '2021-09-04 16:34:57', '2023-06-22 03:06:41', NULL),
(10, 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n', 'image/blog/1656310750_8a13da06cb6f79d863f6.jpg', 2, '2021-09-04 16:34:57', '2023-06-22 03:06:41', NULL),
(11, 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n', 'image/blog/1656310665_94d604484a1cd3c08c5d.jpg', 1, '2021-11-07 03:40:13', '2023-06-22 03:06:41', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cancels`
--

CREATE TABLE `cancels` (
  `id` int(10) UNSIGNED NOT NULL,
  `booking_id` varchar(100) NOT NULL,
  `cancel_fee` varchar(100) DEFAULT NULL,
  `pay_type_id` varchar(100) DEFAULT NULL,
  `track_table_id` varchar(100) DEFAULT NULL,
  `type` varchar(100) NOT NULL,
  `detail` tinytext DEFAULT NULL,
  `cancel_by` int(10) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `cancels`
--

INSERT INTO `cancels` (`id`, `booking_id`, `cancel_fee`, `pay_type_id`, `track_table_id`, `type`, `detail`, `cancel_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(8, 'TB8E4G57FO', '', '1', '121', 'ticket', '', 1, '2023-06-26 19:50:00', '2023-06-26 19:50:00', NULL),
(9, 'TB65E2BU7Y', '', '1', '132', 'ticket', '', 1, '2023-06-26 20:57:38', '2023-06-26 20:57:38', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cookes`
--

CREATE TABLE `cookes` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` tinytext NOT NULL,
  `sub_title` tinytext NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `cookes`
--

INSERT INTO `cookes` (`id`, `title`, `sub_title`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Cookies Page Title Lorem Ipsum', 'cookies page title lorem inpsum', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '2021-12-19 13:03:55', '2023-06-22 03:06:41', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `country`
--

CREATE TABLE `country` (
  `id` int(10) UNSIGNED NOT NULL,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `country`
--

INSERT INTO `country` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 0),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506),
(53, 'CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', 384, 225),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', 408, 850),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996),
(116, 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', 418, 856),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 381),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263);

-- --------------------------------------------------------

--
-- Struktur dari tabel `coupondiscounts`
--

CREATE TABLE `coupondiscounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` tinytext NOT NULL,
  `coupon_id` int(10) UNSIGNED NOT NULL,
  `booking_id` tinytext NOT NULL,
  `subtrip_id` int(10) UNSIGNED NOT NULL,
  `amount` tinytext NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `coupondiscounts`
--

INSERT INTO `coupondiscounts` (`id`, `code`, `coupon_id`, `booking_id`, `subtrip_id`, `amount`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'BUS1656332357', 6, 'TB8E4G57FO', 38, '25', '2022-06-28 15:08:21', '2023-06-22 03:06:42', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `coupons`
--

CREATE TABLE `coupons` (
  `id` int(10) UNSIGNED NOT NULL,
  `subtrip_id` int(10) UNSIGNED NOT NULL,
  `code` tinytext NOT NULL,
  `start_date` tinytext NOT NULL,
  `end_date` tinytext NOT NULL,
  `discount` tinytext NOT NULL,
  `condition` tinytext DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `coupons`
--

INSERT INTO `coupons` (`id`, `subtrip_id`, `code`, `start_date`, `end_date`, `discount`, `condition`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 38, 'BUS1656332357', '2022-06-01', '2029-01-01', '25', 'Lorem Ipsum ', '2022-06-27 18:20:06', '2023-06-22 03:06:42', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `currencies`
--

CREATE TABLE `currencies` (
  `id` int(11) NOT NULL,
  `country` varchar(100) DEFAULT NULL,
  `currency` varchar(100) DEFAULT NULL,
  `code` varchar(4) DEFAULT NULL,
  `minor_unit` smallint(6) DEFAULT NULL,
  `symbol` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `currencies`
--

INSERT INTO `currencies` (`id`, `country`, `currency`, `code`, `minor_unit`, `symbol`) VALUES
(1, 'Afghanistan', 'Afghani', 'AFN', 2, '؋'),
(2, 'Åland Islands', 'Euro', 'EUR', 2, '€'),
(3, 'Albania', 'Lek', 'ALL', 2, 'Lek'),
(4, 'Algeria', 'Algerian Dinar', 'DZD', 2, NULL),
(5, 'American Samoa', 'US Dollar', 'USD', 2, '$'),
(6, 'Andorra', 'Euro', 'EUR', 2, '€'),
(7, 'Angola', 'Kwanza', 'AOA', 2, NULL),
(8, 'Anguilla', 'East Caribbean Dollar', 'XCD', 2, NULL),
(9, 'Antigua And Barbuda', 'East Caribbean Dollar', 'XCD', 2, NULL),
(10, 'Argentina', 'Argentine Peso', 'ARS', 2, '$'),
(11, 'Armenia', 'Armenian Dram', 'AMD', 2, NULL),
(12, 'Aruba', 'Aruban Florin', 'AWG', 2, NULL),
(13, 'Australia', 'Australian Dollar', 'AUD', 2, '$'),
(14, 'Austria', 'Euro', 'EUR', 2, '€'),
(15, 'Azerbaijan', 'Azerbaijan Manat', 'AZN', 2, NULL),
(16, 'Bahamas', 'Bahamian Dollar', 'BSD', 2, '$'),
(17, 'Bahrain', 'Bahraini Dinar', 'BHD', 3, NULL),
(18, 'Bangladesh', 'Taka', 'BDT', 2, '৳'),
(19, 'Barbados', 'Barbados Dollar', 'BBD', 2, '$'),
(20, 'Belarus', 'Belarusian Ruble', 'BYN', 2, NULL),
(21, 'Belgium', 'Euro', 'EUR', 2, '€'),
(22, 'Belize', 'Belize Dollar', 'BZD', 2, 'BZ$'),
(23, 'Benin', 'CFA Franc BCEAO', 'XOF', 0, NULL),
(24, 'Bermuda', 'Bermudian Dollar', 'BMD', 2, NULL),
(25, 'Bhutan', 'Indian Rupee', 'INR', 2, '₹'),
(26, 'Bhutan', 'Ngultrum', 'BTN', 2, NULL),
(27, 'Bolivia', 'Boliviano', 'BOB', 2, NULL),
(28, 'Bolivia', 'Mvdol', 'BOV', 2, NULL),
(29, 'Bonaire, Sint Eustatius And Saba', 'US Dollar', 'USD', 2, '$'),
(30, 'Bosnia And Herzegovina', 'Convertible Mark', 'BAM', 2, NULL),
(31, 'Botswana', 'Pula', 'BWP', 2, NULL),
(32, 'Bouvet Island', 'Norwegian Krone', 'NOK', 2, NULL),
(33, 'Brazil', 'Brazilian Real', 'BRL', 2, 'R$'),
(34, 'British Indian Ocean Territory', 'US Dollar', 'USD', 2, '$'),
(35, 'Brunei Darussalam', 'Brunei Dollar', 'BND', 2, NULL),
(36, 'Bulgaria', 'Bulgarian Lev', 'BGN', 2, 'лв'),
(37, 'Burkina Faso', 'CFA Franc BCEAO', 'XOF', 0, NULL),
(38, 'Burundi', 'Burundi Franc', 'BIF', 0, NULL),
(39, 'Cabo Verde', 'Cabo Verde Escudo', 'CVE', 2, NULL),
(40, 'Cambodia', 'Riel', 'KHR', 2, '៛'),
(41, 'Cameroon', 'CFA Franc BEAC', 'XAF', 0, NULL),
(42, 'Canada', 'Canadian Dollar', 'CAD', 2, '$'),
(43, 'Cayman Islands', 'Cayman Islands Dollar', 'KYD', 2, NULL),
(44, 'Central African Republic', 'CFA Franc BEAC', 'XAF', 0, NULL),
(45, 'Chad', 'CFA Franc BEAC', 'XAF', 0, NULL),
(46, 'Chile', 'Chilean Peso', 'CLP', 0, '$'),
(47, 'Chile', 'Unidad de Fomento', 'CLF', 4, NULL),
(48, 'China', 'Yuan Renminbi', 'CNY', 2, '¥'),
(49, 'Christmas Island', 'Australian Dollar', 'AUD', 2, NULL),
(50, 'Cocos (keeling) Islands', 'Australian Dollar', 'AUD', 2, NULL),
(51, 'Colombia', 'Colombian Peso', 'COP', 2, '$'),
(52, 'Colombia', 'Unidad de Valor Real', 'COU', 2, NULL),
(53, 'Comoros', 'Comorian Franc ', 'KMF', 0, NULL),
(54, 'Congo (the Democratic Republic Of The)', 'Congolese Franc', 'CDF', 2, NULL),
(55, 'Congo', 'CFA Franc BEAC', 'XAF', 0, NULL),
(56, 'Cook Islands', 'New Zealand Dollar', 'NZD', 2, '$'),
(57, 'Costa Rica', 'Costa Rican Colon', 'CRC', 2, NULL),
(58, 'Côte D\'ivoire', 'CFA Franc BCEAO', 'XOF', 0, NULL),
(59, 'Croatia', 'Kuna', 'HRK', 2, 'kn'),
(60, 'Cuba', 'Cuban Peso', 'CUP', 2, NULL),
(61, 'Cuba', 'Peso Convertible', 'CUC', 2, NULL),
(62, 'Curaçao', 'Netherlands Antillean Guilder', 'ANG', 2, NULL),
(63, 'Cyprus', 'Euro', 'EUR', 2, '€'),
(64, 'Czechia', 'Czech Koruna', 'CZK', 2, 'Kč'),
(65, 'Denmark', 'Danish Krone', 'DKK', 2, 'kr'),
(66, 'Djibouti', 'Djibouti Franc', 'DJF', 0, NULL),
(67, 'Dominica', 'East Caribbean Dollar', 'XCD', 2, NULL),
(68, 'Dominican Republic', 'Dominican Peso', 'DOP', 2, NULL),
(69, 'Ecuador', 'US Dollar', 'USD', 2, '$'),
(70, 'Egypt', 'Egyptian Pound', 'EGP', 2, NULL),
(71, 'El Salvador', 'El Salvador Colon', 'SVC', 2, NULL),
(72, 'El Salvador', 'US Dollar', 'USD', 2, '$'),
(73, 'Equatorial Guinea', 'CFA Franc BEAC', 'XAF', 0, NULL),
(74, 'Eritrea', 'Nakfa', 'ERN', 2, NULL),
(75, 'Estonia', 'Euro', 'EUR', 2, '€'),
(76, 'Eswatini', 'Lilangeni', 'SZL', 2, NULL),
(77, 'Ethiopia', 'Ethiopian Birr', 'ETB', 2, NULL),
(78, 'European Union', 'Euro', 'EUR', 2, '€'),
(79, 'Falkland Islands [Malvinas]', 'Falkland Islands Pound', 'FKP', 2, NULL),
(80, 'Faroe Islands', 'Danish Krone', 'DKK', 2, NULL),
(81, 'Fiji', 'Fiji Dollar', 'FJD', 2, NULL),
(82, 'Finland', 'Euro', 'EUR', 2, '€'),
(83, 'France', 'Euro', 'EUR', 2, '€'),
(84, 'French Guiana', 'Euro', 'EUR', 2, '€'),
(85, 'French Polynesia', 'CFP Franc', 'XPF', 0, NULL),
(86, 'French Southern Territories', 'Euro', 'EUR', 2, '€'),
(87, 'Gabon', 'CFA Franc BEAC', 'XAF', 0, NULL),
(88, 'Gambia', 'Dalasi', 'GMD', 2, NULL),
(89, 'Georgia', 'Lari', 'GEL', 2, '₾'),
(90, 'Germany', 'Euro', 'EUR', 2, '€'),
(91, 'Ghana', 'Ghana Cedi', 'GHS', 2, NULL),
(92, 'Gibraltar', 'Gibraltar Pound', 'GIP', 2, NULL),
(93, 'Greece', 'Euro', 'EUR', 2, '€'),
(94, 'Greenland', 'Danish Krone', 'DKK', 2, NULL),
(95, 'Grenada', 'East Caribbean Dollar', 'XCD', 2, NULL),
(96, 'Guadeloupe', 'Euro', 'EUR', 2, '€'),
(97, 'Guam', 'US Dollar', 'USD', 2, '$'),
(98, 'Guatemala', 'Quetzal', 'GTQ', 2, NULL),
(99, 'Guernsey', 'Pound Sterling', 'GBP', 2, '£'),
(100, 'Guinea', 'Guinean Franc', 'GNF', 0, NULL),
(101, 'Guinea-bissau', 'CFA Franc BCEAO', 'XOF', 0, NULL),
(102, 'Guyana', 'Guyana Dollar', 'GYD', 2, NULL),
(103, 'Haiti', 'Gourde', 'HTG', 2, NULL),
(104, 'Haiti', 'US Dollar', 'USD', 2, '$'),
(105, 'Heard Island And Mcdonald Islands', 'Australian Dollar', 'AUD', 2, NULL),
(106, 'Holy See (Vatican)', 'Euro', 'EUR', 2, '€'),
(107, 'Honduras', 'Lempira', 'HNL', 2, NULL),
(108, 'Hong Kong', 'Hong Kong Dollar', 'HKD', 2, '$'),
(109, 'Hungary', 'Forint', 'HUF', 2, 'ft'),
(110, 'Iceland', 'Iceland Krona', 'ISK', 0, NULL),
(111, 'India', 'Indian Rupee', 'INR', 2, '₹'),
(112, 'Indonesia', 'Rupiah', 'IDR', 2, 'Rp'),
(113, 'International Monetary Fund (IMF)', 'SDR (Special Drawing Right)', 'XDR', 0, NULL),
(114, 'Iran', 'Iranian Rial', 'IRR', 2, NULL),
(115, 'Iraq', 'Iraqi Dinar', 'IQD', 3, NULL),
(116, 'Ireland', 'Euro', 'EUR', 2, '€'),
(117, 'Isle Of Man', 'Pound Sterling', 'GBP', 2, '£'),
(118, 'Israel', 'New Israeli Sheqel', 'ILS', 2, '₪'),
(119, 'Italy', 'Euro', 'EUR', 2, '€'),
(120, 'Jamaica', 'Jamaican Dollar', 'JMD', 2, NULL),
(121, 'Japan', 'Yen', 'JPY', 0, '¥'),
(122, 'Jersey', 'Pound Sterling', 'GBP', 2, '£'),
(123, 'Jordan', 'Jordanian Dinar', 'JOD', 3, NULL),
(124, 'Kazakhstan', 'Tenge', 'KZT', 2, NULL),
(125, 'Kenya', 'Kenyan Shilling', 'KES', 2, 'Ksh'),
(126, 'Kiribati', 'Australian Dollar', 'AUD', 2, NULL),
(127, 'Korea (the Democratic People’s Republic Of)', 'North Korean Won', 'KPW', 2, NULL),
(128, 'Korea (the Republic Of)', 'Won', 'KRW', 0, '₩'),
(129, 'Kuwait', 'Kuwaiti Dinar', 'KWD', 3, NULL),
(130, 'Kyrgyzstan', 'Som', 'KGS', 2, NULL),
(131, 'Lao People’s Democratic Republic', 'Lao Kip', 'LAK', 2, NULL),
(132, 'Latvia', 'Euro', 'EUR', 2, '€'),
(133, 'Lebanon', 'Lebanese Pound', 'LBP', 2, NULL),
(134, 'Lesotho', 'Loti', 'LSL', 2, NULL),
(135, 'Lesotho', 'Rand', 'ZAR', 2, NULL),
(136, 'Liberia', 'Liberian Dollar', 'LRD', 2, NULL),
(137, 'Libya', 'Libyan Dinar', 'LYD', 3, NULL),
(138, 'Liechtenstein', 'Swiss Franc', 'CHF', 2, NULL),
(139, 'Lithuania', 'Euro', 'EUR', 2, '€'),
(140, 'Luxembourg', 'Euro', 'EUR', 2, '€'),
(141, 'Macao', 'Pataca', 'MOP', 2, NULL),
(142, 'North Macedonia', 'Denar', 'MKD', 2, NULL),
(143, 'Madagascar', 'Malagasy Ariary', 'MGA', 2, NULL),
(144, 'Malawi', 'Malawi Kwacha', 'MWK', 2, NULL),
(145, 'Malaysia', 'Malaysian Ringgit', 'MYR', 2, 'RM'),
(146, 'Maldives', 'Rufiyaa', 'MVR', 2, NULL),
(147, 'Mali', 'CFA Franc BCEAO', 'XOF', 0, NULL),
(148, 'Malta', 'Euro', 'EUR', 2, '€'),
(149, 'Marshall Islands', 'US Dollar', 'USD', 2, '$'),
(150, 'Martinique', 'Euro', 'EUR', 2, '€'),
(151, 'Mauritania', 'Ouguiya', 'MRU', 2, NULL),
(152, 'Mauritius', 'Mauritius Rupee', 'MUR', 2, NULL),
(153, 'Mayotte', 'Euro', 'EUR', 2, '€'),
(154, 'Member Countries Of The African Development Bank Group', 'ADB Unit of Account', 'XUA', 0, NULL),
(155, 'Mexico', 'Mexican Peso', 'MXN', 2, '$'),
(156, 'Mexico', 'Mexican Unidad de Inversion (UDI)', 'MXV', 2, NULL),
(157, 'Micronesia', 'US Dollar', 'USD', 2, '$'),
(158, 'Moldova', 'Moldovan Leu', 'MDL', 2, NULL),
(159, 'Monaco', 'Euro', 'EUR', 2, '€'),
(160, 'Mongolia', 'Tugrik', 'MNT', 2, NULL),
(161, 'Montenegro', 'Euro', 'EUR', 2, '€'),
(162, 'Montserrat', 'East Caribbean Dollar', 'XCD', 2, NULL),
(163, 'Morocco', 'Moroccan Dirham', 'MAD', 2, ' .د.م '),
(164, 'Mozambique', 'Mozambique Metical', 'MZN', 2, NULL),
(165, 'Myanmar', 'Kyat', 'MMK', 2, NULL),
(166, 'Namibia', 'Namibia Dollar', 'NAD', 2, NULL),
(167, 'Namibia', 'Rand', 'ZAR', 2, NULL),
(168, 'Nauru', 'Australian Dollar', 'AUD', 2, NULL),
(169, 'Nepal', 'Nepalese Rupee', 'NPR', 2, NULL),
(170, 'Netherlands', 'Euro', 'EUR', 2, '€'),
(171, 'New Caledonia', 'CFP Franc', 'XPF', 0, NULL),
(172, 'New Zealand', 'New Zealand Dollar', 'NZD', 2, '$'),
(173, 'Nicaragua', 'Cordoba Oro', 'NIO', 2, NULL),
(174, 'Niger', 'CFA Franc BCEAO', 'XOF', 0, NULL),
(175, 'Nigeria', 'Naira', 'NGN', 2, '₦'),
(176, 'Niue', 'New Zealand Dollar', 'NZD', 2, '$'),
(177, 'Norfolk Island', 'Australian Dollar', 'AUD', 2, NULL),
(178, 'Northern Mariana Islands', 'US Dollar', 'USD', 2, '$'),
(179, 'Norway', 'Norwegian Krone', 'NOK', 2, 'kr'),
(180, 'Oman', 'Rial Omani', 'OMR', 3, NULL),
(181, 'Pakistan', 'Pakistan Rupee', 'PKR', 2, 'Rs'),
(182, 'Palau', 'US Dollar', 'USD', 2, '$'),
(183, 'Panama', 'Balboa', 'PAB', 2, NULL),
(184, 'Panama', 'US Dollar', 'USD', 2, '$'),
(185, 'Papua New Guinea', 'Kina', 'PGK', 2, NULL),
(186, 'Paraguay', 'Guarani', 'PYG', 0, NULL),
(187, 'Peru', 'Sol', 'PEN', 2, 'S'),
(188, 'Philippines', 'Philippine Peso', 'PHP', 2, '₱'),
(189, 'Pitcairn', 'New Zealand Dollar', 'NZD', 2, '$'),
(190, 'Poland', 'Zloty', 'PLN', 2, 'zł'),
(191, 'Portugal', 'Euro', 'EUR', 2, '€'),
(192, 'Puerto Rico', 'US Dollar', 'USD', 2, '$'),
(193, 'Qatar', 'Qatari Rial', 'QAR', 2, NULL),
(194, 'Réunion', 'Euro', 'EUR', 2, '€'),
(195, 'Romania', 'Romanian Leu', 'RON', 2, 'lei'),
(196, 'Russian Federation', 'Russian Ruble', 'RUB', 2, '₽'),
(197, 'Rwanda', 'Rwanda Franc', 'RWF', 0, NULL),
(198, 'Saint Barthélemy', 'Euro', 'EUR', 2, '€'),
(199, 'Saint Helena, Ascension And Tristan Da Cunha', 'Saint Helena Pound', 'SHP', 2, NULL),
(200, 'Saint Kitts And Nevis', 'East Caribbean Dollar', 'XCD', 2, NULL),
(201, 'Saint Lucia', 'East Caribbean Dollar', 'XCD', 2, NULL),
(202, 'Saint Martin (French Part)', 'Euro', 'EUR', 2, '€'),
(203, 'Saint Pierre And Miquelon', 'Euro', 'EUR', 2, '€'),
(204, 'Saint Vincent And The Grenadines', 'East Caribbean Dollar', 'XCD', 2, NULL),
(205, 'Samoa', 'Tala', 'WST', 2, NULL),
(206, 'San Marino', 'Euro', 'EUR', 2, '€'),
(207, 'Sao Tome And Principe', 'Dobra', 'STN', 2, NULL),
(208, 'Saudi Arabia', 'Saudi Riyal', 'SAR', 2, NULL),
(209, 'Senegal', 'CFA Franc BCEAO', 'XOF', 0, NULL),
(210, 'Serbia', 'Serbian Dinar', 'RSD', 2, NULL),
(211, 'Seychelles', 'Seychelles Rupee', 'SCR', 2, NULL),
(212, 'Sierra Leone', 'Leone', 'SLL', 2, NULL),
(213, 'Singapore', 'Singapore Dollar', 'SGD', 2, '$'),
(214, 'Sint Maarten (Dutch Part)', 'Netherlands Antillean Guilder', 'ANG', 2, NULL),
(215, 'Sistema Unitario De Compensacion Regional De Pagos \"sucre\"\"\"', 'Sucre', 'XSU', 0, NULL),
(216, 'Slovakia', 'Euro', 'EUR', 2, '€'),
(217, 'Slovenia', 'Euro', 'EUR', 2, '€'),
(218, 'Solomon Islands', 'Solomon Islands Dollar', 'SBD', 2, NULL),
(219, 'Somalia', 'Somali Shilling', 'SOS', 2, NULL),
(220, 'South Africa', 'Rand', 'ZAR', 2, 'R'),
(221, 'South Sudan', 'South Sudanese Pound', 'SSP', 2, NULL),
(222, 'Spain', 'Euro', 'EUR', 2, '€'),
(223, 'Sri Lanka', 'Sri Lanka Rupee', 'LKR', 2, 'Rs'),
(224, 'Sudan (the)', 'Sudanese Pound', 'SDG', 2, NULL),
(225, 'Suriname', 'Surinam Dollar', 'SRD', 2, NULL),
(226, 'Svalbard And Jan Mayen', 'Norwegian Krone', 'NOK', 2, NULL),
(227, 'Sweden', 'Swedish Krona', 'SEK', 2, 'kr'),
(228, 'Switzerland', 'Swiss Franc', 'CHF', 2, NULL),
(229, 'Switzerland', 'WIR Euro', 'CHE', 2, NULL),
(230, 'Switzerland', 'WIR Franc', 'CHW', 2, NULL),
(231, 'Syrian Arab Republic', 'Syrian Pound', 'SYP', 2, NULL),
(232, 'Taiwan', 'New Taiwan Dollar', 'TWD', 2, NULL),
(233, 'Tajikistan', 'Somoni', 'TJS', 2, NULL),
(234, 'Tanzania, United Republic Of', 'Tanzanian Shilling', 'TZS', 2, NULL),
(235, 'Thailand', 'Baht', 'THB', 2, '฿'),
(236, 'Timor-leste', 'US Dollar', 'USD', 2, '$'),
(237, 'Togo', 'CFA Franc BCEAO', 'XOF', 0, NULL),
(238, 'Tokelau', 'New Zealand Dollar', 'NZD', 2, '$'),
(239, 'Tonga', 'Pa’anga', 'TOP', 2, NULL),
(240, 'Trinidad And Tobago', 'Trinidad and Tobago Dollar', 'TTD', 2, NULL),
(241, 'Tunisia', 'Tunisian Dinar', 'TND', 3, NULL),
(242, 'Turkey', 'Turkish Lira', 'TRY', 2, '₺'),
(243, 'Turkmenistan', 'Turkmenistan New Manat', 'TMT', 2, NULL),
(244, 'Turks And Caicos Islands', 'US Dollar', 'USD', 2, '$'),
(245, 'Tuvalu', 'Australian Dollar', 'AUD', 2, NULL),
(246, 'Uganda', 'Uganda Shilling', 'UGX', 0, NULL),
(247, 'Ukraine', 'Hryvnia', 'UAH', 2, '₴'),
(248, 'United Arab Emirates', 'UAE Dirham', 'AED', 2, 'د.إ'),
(249, 'United Kingdom Of Great Britain And Northern Ireland', 'Pound Sterling', 'GBP', 2, '£'),
(250, 'United States Minor Outlying Islands', 'US Dollar', 'USD', 2, '$'),
(251, 'United States Of America', 'US Dollar', 'USD', 2, '$'),
(252, 'United States Of America', 'US Dollar (Next day)', 'USN', 2, NULL),
(253, 'Uruguay', 'Peso Uruguayo', 'UYU', 2, NULL),
(254, 'Uruguay', 'Uruguay Peso en Unidades Indexadas (UI)', 'UYI', 0, NULL),
(255, 'Uruguay', 'Unidad Previsional', 'UYW', 4, NULL),
(256, 'Uzbekistan', 'Uzbekistan Sum', 'UZS', 2, NULL),
(257, 'Vanuatu', 'Vatu', 'VUV', 0, NULL),
(258, 'Venezuela', 'Bolívar Soberano', 'VES', 2, NULL),
(259, 'Vietnam', 'Dong', 'VND', 0, '₫'),
(260, 'Virgin Islands (British)', 'US Dollar', 'USD', 2, '$'),
(261, 'Virgin Islands (U.S.)', 'US Dollar', 'USD', 2, '$'),
(262, 'Wallis And Futuna', 'CFP Franc', 'XPF', 0, NULL),
(263, 'Western Sahara', 'Moroccan Dirham', 'MAD', 2, NULL),
(264, 'Yemen', 'Yemeni Rial', 'YER', 2, NULL),
(265, 'Zambia', 'Zambian Kwacha', 'ZMW', 2, NULL),
(266, 'Zimbabwe', 'Zimbabwe Dollar', 'ZWL', 2, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `emails`
--

CREATE TABLE `emails` (
  `id` int(10) UNSIGNED NOT NULL,
  `protocol` varchar(100) NOT NULL,
  `smtphost` varchar(100) NOT NULL,
  `smtpuser` varchar(100) NOT NULL,
  `smtppass` varchar(100) NOT NULL,
  `smtpport` varchar(100) NOT NULL,
  `smtpcrypto` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `emails`
--

INSERT INTO `emails` (`id`, `protocol`, `smtphost`, `smtpuser`, `smtppass`, `smtpport`, `smtpcrypto`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'smtp', 'soft31.bdtask.com', 'bus365@soft31.bdtask.com', 'bus365email', '465', 'ssl', '2022-05-19 14:13:02', '2023-06-22 03:06:43', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `employeetype_id` int(10) UNSIGNED NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `first_name` tinytext NOT NULL,
  `last_name` tinytext NOT NULL,
  `phone` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `blood` tinytext NOT NULL,
  `nid` tinytext NOT NULL,
  `nid_picture` tinytext NOT NULL,
  `profile_picture` tinytext NOT NULL,
  `address` tinytext NOT NULL,
  `city` tinytext NOT NULL,
  `zip` tinytext NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `employees`
--

INSERT INTO `employees` (`id`, `employeetype_id`, `country_id`, `first_name`, `last_name`, `phone`, `email`, `blood`, `nid`, `nid_picture`, `profile_picture`, `address`, `city`, `zip`, `created_at`, `updated_at`, `deleted_at`) VALUES
(10, 1, 18, 'Driver', 'A', '1111111111111', 'da@d.com', 'A+', 'da1111', '', 'image/employee/1656319423_aba22ab1e1a60a722da2.jpg', 'lorem ipsum, lorem inpsum', 'dhaka', '1213', '2022-06-27 14:43:43', '2023-06-22 03:06:44', NULL),
(11, 1, 18, 'Driver', 'B', '22222222222222', 'db@d.com', 'A+', 'db1111', '', 'image/employee/1656319507_fab58576cf417cae5003.jpg', 'lorem ipsum, lorem ipsume', 'dhaka', '1213', '2022-06-27 14:45:07', '2023-06-22 03:06:44', NULL),
(12, 1, 18, 'Driver', 'C', '33333333333', 'dc@d.com', 'A+', 'dc1111', '', 'image/employee/1656319592_cdd3f1f37a964ed1ef88.jpg', 'lorem ipsum, lorem ipsum', 'dhaka', '1213', '2022-06-27 14:46:32', '2023-06-22 03:06:44', NULL),
(13, 2, 18, 'Assistant', 'A', '444444444444', 'aa@a.cm', 'A+', 'aa111', '', 'image/employee/1656319755_29d3dd5d516de7d8ee73.jpg', 'lorem ipsum, lorem ipsum', 'dhaka', '1213', '2022-06-27 14:49:15', '2023-06-22 03:06:44', NULL),
(14, 2, 18, 'Assistant', 'B', '55555555555', 'ab@a.cm', 'A+', 'ab111', '', 'image/employee/1656319814_01dd3f25eb37cfd16ce6.jpg', 'lorem ipsum, lorem ipsum', 'dhaka', '1213', '2022-06-27 14:50:14', '2023-06-22 03:06:44', NULL),
(15, 2, 18, 'Assistant', 'C', '66666666666', 'ac@a.cm', 'A+', 'ac111', '', 'image/employee/1656319856_9ef2b1e9d13146f3588d.jpg', 'lorem ipsum, lorem ipsum', 'dhaka', '1213', '2022-06-27 14:50:56', '2023-06-22 03:06:44', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `employeetypes`
--

CREATE TABLE `employeetypes` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(100) NOT NULL,
  `detail` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `employeetypes`
--

INSERT INTO `employeetypes` (`id`, `type`, `detail`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Driver', 'This is cannot be deleted', '2022-06-27 11:01:56', '2023-06-22 03:06:44', NULL),
(2, 'Assistant ', 'This is cannot be deleted', '2022-06-27 11:01:56', '2023-06-22 03:06:44', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `facilitys`
--

CREATE TABLE `facilitys` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `facilitys`
--

INSERT INTO `facilitys` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Audio', '2021-11-05 23:36:47', '2023-06-26 18:51:34', NULL),
(2, 'Full AC', '2021-11-05 23:37:07', '2023-06-26 18:51:22', NULL),
(3, 'Terminal Charger', '2021-11-05 23:37:14', '2023-06-26 18:51:10', NULL),
(4, 'Personal Seat', '2022-06-21 16:47:56', '2023-06-26 18:50:51', NULL),
(5, 'GPS Supported', '2023-06-26 18:51:55', '2023-06-26 18:51:55', NULL),
(6, 'Safety Belt', '2023-06-26 18:52:07', '2023-06-26 18:52:07', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `faqquestions`
--

CREATE TABLE `faqquestions` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` tinytext NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `faqquestions`
--

INSERT INTO `faqquestions` (`id`, `question`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry ?', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n', '2022-06-27 13:08:53', '2023-06-22 03:06:46', NULL),
(4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry ?', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n', '2022-06-27 13:11:09', '2023-06-22 03:06:46', NULL),
(5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry ?', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>\r\n', '2022-06-27 13:11:35', '2023-06-22 03:06:46', NULL),
(6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry ?', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>\r\n', '2022-06-27 13:11:51', '2023-06-22 03:06:46', NULL),
(7, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry ?', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>\r\n', '2022-06-27 13:11:59', '2023-06-22 03:06:46', NULL),
(8, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry ?', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>\r\n', '2022-06-27 13:12:07', '2023-06-22 03:06:46', NULL),
(9, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry ?', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>\r\n', '2022-06-27 13:12:29', '2023-06-22 03:06:46', NULL),
(10, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry ?', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>\r\n', '2022-06-27 13:12:38', '2023-06-22 03:06:46', NULL),
(11, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry ?', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>\r\n', '2022-06-27 13:12:55', '2023-06-22 03:06:46', NULL),
(12, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry ?', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>\r\n', '2022-06-27 13:13:04', '2023-06-22 03:06:46', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` tinytext NOT NULL,
  `sub_title` tinytext NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `sub_title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Faq Page Title Lorem Ipsum', 'Faq Page sub-Title Lorem Ipsum', '2021-12-19 14:27:00', '2023-06-22 03:06:47', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `fitnesses`
--

CREATE TABLE `fitnesses` (
  `id` int(10) UNSIGNED NOT NULL,
  `vehicle_id` int(10) UNSIGNED NOT NULL,
  `fitness_name` tinytext NOT NULL,
  `start_date` tinytext NOT NULL,
  `end_date` tinytext NOT NULL,
  `start_milage` tinytext NOT NULL,
  `end_milage` tinytext DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fleets`
--

CREATE TABLE `fleets` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(100) NOT NULL,
  `layout` text NOT NULL,
  `last_seat` varchar(100) NOT NULL,
  `total_seat` int(11) NOT NULL,
  `seat_number` text NOT NULL,
  `status` varchar(100) NOT NULL,
  `luggage_service` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `fleets`
--

INSERT INTO `fleets` (`id`, `type`, `layout`, `last_seat`, `total_seat`, `seat_number`, `status`, `luggage_service`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'Luxury Shuttle Point to Point', '1-1', '1', 8, 'A1,A2,B1,B2,C1,C2,D1,D2', '1', '1', '2022-06-27 14:52:27', '2023-06-26 19:14:45', NULL),
(7, 'BUSINESS-CLASS', '1-1', '1', 22, 'A1,A2,B1,B2,C1,C2,D1,D2,E1,E2,F1,F2,G1,G2,H1,H2,I1,I2,J1,J2,K1,K2,Z', '1', '1', '2022-06-27 14:53:06', '2023-06-26 18:31:55', '2023-06-26 18:31:55'),
(8, 'NON-AC', '2-2', '1', 40, 'A1,A2,A3,A4,B1,B2,B3,B4,C1,C2,C3,C4,D1,D2,D3,D4,E1,E2,E3,E4,F1,F2,F3,F4,G1,G2,G3,G4,H1,H2,H3,H4,I1,I2,I3,I4,J1,J2,J3,J4,Z', '1', '1', '2022-06-27 14:53:25', '2023-06-26 18:32:01', '2023-06-26 18:32:01'),
(9, 'Go Kurir Exspress Delivery Service', '1-1', '0', 1, 'A1', '1', '1', '2022-06-27 14:54:19', '2023-06-26 19:14:30', '2023-06-26 19:14:30'),
(10, 'WORLD-CLASS', '2-1', '1', 26, 'A1,A2,A3,B1,B2,B3,C1,C2,C3,D1,D2,D3,E1,E2,E3,F1,F2,F3,G1,G2,G3,H1,H2,H3,I1,I2,Z', '1', '1', '2022-06-27 14:54:56', '2023-06-26 18:33:15', '2023-06-26 18:33:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fonts`
--

CREATE TABLE `fonts` (
  `id` int(11) NOT NULL,
  `font_name` tinytext NOT NULL,
  `font_display` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `fonts`
--

INSERT INTO `fonts` (`id`, `font_name`, `font_display`) VALUES
(1, 'ABeeZee', 'ABeeZee'),
(2, 'Abel', 'Abel'),
(3, 'Abhaya Libre', 'Abhaya Libre'),
(4, 'Abril Fatface', 'Abril Fatface'),
(5, 'Aclonica', 'Aclonica'),
(6, 'Acme', 'Acme'),
(7, 'Actor', 'Actor'),
(8, 'Adamina', 'Adamina'),
(9, 'Advent Pro', 'Advent Pro'),
(10, 'Aguafina Script', 'Aguafina Script'),
(11, 'Akaya Kanadaka', 'Akaya Kanadaka'),
(12, 'Akaya Telivigala', 'Akaya Telivigala'),
(13, 'Akronim', 'Akronim'),
(14, 'Aladin', 'Aladin'),
(15, 'Alata', 'Alata'),
(16, 'Alatsi', 'Alatsi'),
(17, 'Aldrich', 'Aldrich'),
(18, 'Alef', 'Alef'),
(19, 'Alegreya', 'Alegreya'),
(20, 'Alegreya SC', 'Alegreya SC'),
(21, 'Alegreya Sans', 'Alegreya Sans'),
(22, 'Alegreya Sans SC', 'Alegreya Sans SC'),
(23, 'Aleo', 'Aleo'),
(24, 'Alex Brush', 'Alex Brush'),
(25, 'Alfa Slab One', 'Alfa Slab One'),
(26, 'Alice', 'Alice'),
(27, 'Alike', 'Alike'),
(28, 'Alike Angular', 'Alike Angular'),
(29, 'Allan', 'Allan'),
(30, 'Allerta', 'Allerta'),
(31, 'Allerta Stencil', 'Allerta Stencil'),
(32, 'Allison', 'Allison'),
(33, 'Allura', 'Allura'),
(34, 'Almarai', 'Almarai'),
(35, 'Almendra', 'Almendra'),
(36, 'Almendra Display', 'Almendra Display'),
(37, 'Almendra SC', 'Almendra SC'),
(38, 'Alumni Sans', 'Alumni Sans'),
(39, 'Amarante', 'Amarante'),
(40, 'Amaranth', 'Amaranth'),
(41, 'Amatic SC', 'Amatic SC'),
(42, 'Amethysta', 'Amethysta'),
(43, 'Amiko', 'Amiko'),
(44, 'Amiri', 'Amiri'),
(45, 'Amita', 'Amita'),
(46, 'Anaheim', 'Anaheim'),
(47, 'Andada Pro', 'Andada Pro'),
(48, 'Andika', 'Andika'),
(49, 'Andika New Basic', 'Andika New Basic'),
(50, 'Angkor', 'Angkor'),
(51, 'Annie Use Your Telescope', 'Annie Use Your Telescope'),
(52, 'Anonymous Pro', 'Anonymous Pro'),
(53, 'Antic', 'Antic'),
(54, 'Antic Didone', 'Antic Didone'),
(55, 'Antic Slab', 'Antic Slab'),
(56, 'Anton', 'Anton'),
(57, 'Antonio', 'Antonio'),
(58, 'Arapey', 'Arapey'),
(59, 'Arbutus', 'Arbutus'),
(60, 'Arbutus Slab', 'Arbutus Slab'),
(61, 'Architects Daughter', 'Architects Daughter'),
(62, 'Archivo', 'Archivo'),
(63, 'Archivo Black', 'Archivo Black'),
(64, 'Archivo Narrow', 'Archivo Narrow'),
(65, 'Are You Serious', 'Are You Serious'),
(66, 'Aref Ruqaa', 'Aref Ruqaa'),
(67, 'Arima Madurai', 'Arima Madurai'),
(68, 'Arimo', 'Arimo'),
(69, 'Arizonia', 'Arizonia'),
(70, 'Armata', 'Armata'),
(71, 'Arsenal', 'Arsenal'),
(72, 'Artifika', 'Artifika'),
(73, 'Arvo', 'Arvo'),
(74, 'Arya', 'Arya'),
(75, 'Asap', 'Asap'),
(76, 'Asap Condensed', 'Asap Condensed'),
(77, 'Asar', 'Asar'),
(78, 'Asset', 'Asset'),
(79, 'Assistant', 'Assistant'),
(80, 'Astloch', 'Astloch'),
(81, 'Asul', 'Asul'),
(82, 'Athiti', 'Athiti'),
(83, 'Atkinson Hyperlegible', 'Atkinson Hyperlegible'),
(84, 'Atma', 'Atma'),
(85, 'Atomic Age', 'Atomic Age'),
(86, 'Aubrey', 'Aubrey'),
(87, 'Audiowide', 'Audiowide'),
(88, 'Autour One', 'Autour One'),
(89, 'Average', 'Average'),
(90, 'Average Sans', 'Average Sans'),
(91, 'Averia Gruesa Libre', 'Averia Gruesa Libre'),
(92, 'Averia Libre', 'Averia Libre'),
(93, 'Averia Sans Libre', 'Averia Sans Libre'),
(94, 'Averia Serif Libre', 'Averia Serif Libre'),
(95, 'Azeret Mono', 'Azeret Mono'),
(96, 'B612', 'B612'),
(97, 'B612 Mono', 'B612 Mono'),
(98, 'Bad Script', 'Bad Script'),
(99, 'Bahiana', 'Bahiana'),
(100, 'Bahianita', 'Bahianita'),
(101, 'Bai Jamjuree', 'Bai Jamjuree'),
(102, 'Bakbak One', 'Bakbak One'),
(103, 'Ballet', 'Ballet'),
(104, 'Baloo 2', 'Baloo 2'),
(105, 'Baloo Bhai 2', 'Baloo Bhai 2'),
(106, 'Baloo Bhaijaan 2', 'Baloo Bhaijaan 2'),
(107, 'Baloo Bhaina 2', 'Baloo Bhaina 2'),
(108, 'Baloo Chettan 2', 'Baloo Chettan 2'),
(109, 'Baloo Da 2', 'Baloo Da 2'),
(110, 'Baloo Paaji 2', 'Baloo Paaji 2'),
(111, 'Baloo Tamma 2', 'Baloo Tamma 2'),
(112, 'Baloo Tammudu 2', 'Baloo Tammudu 2'),
(113, 'Baloo Thambi 2', 'Baloo Thambi 2'),
(114, 'Balsamiq Sans', 'Balsamiq Sans'),
(115, 'Balthazar', 'Balthazar'),
(116, 'Bangers', 'Bangers'),
(117, 'Barlow', 'Barlow'),
(118, 'Barlow Condensed', 'Barlow Condensed'),
(119, 'Barlow Semi Condensed', 'Barlow Semi Condensed'),
(120, 'Barriecito', 'Barriecito'),
(121, 'Barrio', 'Barrio'),
(122, 'Basic', 'Basic'),
(123, 'Baskervville', 'Baskervville'),
(124, 'Battambang', 'Battambang'),
(125, 'Baumans', 'Baumans'),
(126, 'Bayon', 'Bayon'),
(127, 'Be Vietnam Pro', 'Be Vietnam Pro'),
(128, 'Bebas Neue', 'Bebas Neue'),
(129, 'Belgrano', 'Belgrano'),
(130, 'Bellefair', 'Bellefair'),
(131, 'Belleza', 'Belleza'),
(132, 'Bellota', 'Bellota'),
(133, 'Bellota Text', 'Bellota Text'),
(134, 'BenchNine', 'BenchNine'),
(135, 'Benne', 'Benne'),
(136, 'Bentham', 'Bentham'),
(137, 'Berkshire Swash', 'Berkshire Swash'),
(138, 'Besley', 'Besley'),
(139, 'Beth Ellen', 'Beth Ellen'),
(140, 'Bevan', 'Bevan'),
(141, 'Big Shoulders Display', 'Big Shoulders Display'),
(142, 'Big Shoulders Inline Display', 'Big Shoulders Inline Display'),
(143, 'Big Shoulders Inline Text', 'Big Shoulders Inline Text'),
(144, 'Big Shoulders Stencil Display', 'Big Shoulders Stencil Display'),
(145, 'Big Shoulders Stencil Text', 'Big Shoulders Stencil Text'),
(146, 'Big Shoulders Text', 'Big Shoulders Text'),
(147, 'Bigelow Rules', 'Bigelow Rules'),
(148, 'Bigshot One', 'Bigshot One'),
(149, 'Bilbo', 'Bilbo'),
(150, 'Bilbo Swash Caps', 'Bilbo Swash Caps'),
(151, 'BioRhyme', 'BioRhyme'),
(152, 'BioRhyme Expanded', 'BioRhyme Expanded'),
(153, 'Birthstone', 'Birthstone'),
(154, 'Birthstone Bounce', 'Birthstone Bounce'),
(155, 'Biryani', 'Biryani'),
(156, 'Bitter', 'Bitter'),
(157, 'Black And White Picture', 'Black And White Picture'),
(158, 'Black Han Sans', 'Black Han Sans'),
(159, 'Black Ops One', 'Black Ops One'),
(160, 'Blinker', 'Blinker'),
(161, 'Bodoni Moda', 'Bodoni Moda'),
(162, 'Bokor', 'Bokor'),
(163, 'Bona Nova', 'Bona Nova'),
(164, 'Bonbon', 'Bonbon'),
(165, 'Bonheur Royale', 'Bonheur Royale'),
(166, 'Boogaloo', 'Boogaloo'),
(167, 'Bowlby One', 'Bowlby One'),
(168, 'Bowlby One SC', 'Bowlby One SC'),
(169, 'Brawler', 'Brawler'),
(170, 'Bree Serif', 'Bree Serif'),
(171, 'Brygada 1918', 'Brygada 1918'),
(172, 'Bubblegum Sans', 'Bubblegum Sans'),
(173, 'Bubbler One', 'Bubbler One'),
(174, 'Buda', 'Buda'),
(175, 'Buenard', 'Buenard'),
(176, 'Bungee', 'Bungee'),
(177, 'Bungee Hairline', 'Bungee Hairline'),
(178, 'Bungee Inline', 'Bungee Inline'),
(179, 'Bungee Outline', 'Bungee Outline'),
(180, 'Bungee Shade', 'Bungee Shade'),
(181, 'Butcherman', 'Butcherman'),
(182, 'Butterfly Kids', 'Butterfly Kids'),
(183, 'Cabin', 'Cabin'),
(184, 'Cabin Condensed', 'Cabin Condensed'),
(185, 'Cabin Sketch', 'Cabin Sketch'),
(186, 'Caesar Dressing', 'Caesar Dressing'),
(187, 'Cagliostro', 'Cagliostro'),
(188, 'Cairo', 'Cairo'),
(189, 'Caladea', 'Caladea'),
(190, 'Calistoga', 'Calistoga'),
(191, 'Calligraffitti', 'Calligraffitti'),
(192, 'Cambay', 'Cambay'),
(193, 'Cambo', 'Cambo'),
(194, 'Candal', 'Candal'),
(195, 'Cantarell', 'Cantarell'),
(196, 'Cantata One', 'Cantata One'),
(197, 'Cantora One', 'Cantora One'),
(198, 'Capriola', 'Capriola'),
(199, 'Caramel', 'Caramel'),
(200, 'Carattere', 'Carattere'),
(201, 'Cardo', 'Cardo'),
(202, 'Carme', 'Carme'),
(203, 'Carrois Gothic', 'Carrois Gothic'),
(204, 'Carrois Gothic SC', 'Carrois Gothic SC'),
(205, 'Carter One', 'Carter One'),
(206, 'Castoro', 'Castoro'),
(207, 'Catamaran', 'Catamaran'),
(208, 'Caudex', 'Caudex'),
(209, 'Caveat', 'Caveat'),
(210, 'Caveat Brush', 'Caveat Brush'),
(211, 'Cedarville Cursive', 'Cedarville Cursive'),
(212, 'Ceviche One', 'Ceviche One'),
(213, 'Chakra Petch', 'Chakra Petch'),
(214, 'Changa', 'Changa'),
(215, 'Changa One', 'Changa One'),
(216, 'Chango', 'Chango'),
(217, 'Charm', 'Charm'),
(218, 'Charmonman', 'Charmonman'),
(219, 'Chathura', 'Chathura'),
(220, 'Chau Philomene One', 'Chau Philomene One'),
(221, 'Chela One', 'Chela One'),
(222, 'Chelsea Market', 'Chelsea Market'),
(223, 'Chenla', 'Chenla'),
(224, 'Cherish', 'Cherish'),
(225, 'Cherry Cream Soda', 'Cherry Cream Soda'),
(226, 'Cherry Swash', 'Cherry Swash'),
(227, 'Chewy', 'Chewy'),
(228, 'Chicle', 'Chicle'),
(229, 'Chilanka', 'Chilanka'),
(230, 'Chivo', 'Chivo'),
(231, 'Chonburi', 'Chonburi'),
(232, 'Cinzel', 'Cinzel'),
(233, 'Cinzel Decorative', 'Cinzel Decorative'),
(234, 'Clicker Script', 'Clicker Script'),
(235, 'Coda', 'Coda'),
(236, 'Coda Caption', 'Coda Caption'),
(237, 'Codystar', 'Codystar'),
(238, 'Coiny', 'Coiny'),
(239, 'Combo', 'Combo'),
(240, 'Comfortaa', 'Comfortaa'),
(241, 'Comforter', 'Comforter'),
(242, 'Comforter Brush', 'Comforter Brush'),
(243, 'Comic Neue', 'Comic Neue'),
(244, 'Coming Soon', 'Coming Soon'),
(245, 'Commissioner', 'Commissioner'),
(246, 'Concert One', 'Concert One'),
(247, 'Condiment', 'Condiment'),
(248, 'Content', 'Content'),
(249, 'Contrail One', 'Contrail One'),
(250, 'Convergence', 'Convergence'),
(251, 'Cookie', 'Cookie'),
(252, 'Copse', 'Copse'),
(253, 'Corben', 'Corben'),
(254, 'Corinthia', 'Corinthia'),
(255, 'Cormorant', 'Cormorant'),
(256, 'Cormorant Garamond', 'Cormorant Garamond'),
(257, 'Cormorant Infant', 'Cormorant Infant'),
(258, 'Cormorant SC', 'Cormorant SC'),
(259, 'Cormorant Unicase', 'Cormorant Unicase'),
(260, 'Cormorant Upright', 'Cormorant Upright'),
(261, 'Courgette', 'Courgette'),
(262, 'Courier Prime', 'Courier Prime'),
(263, 'Cousine', 'Cousine'),
(264, 'Coustard', 'Coustard'),
(265, 'Covered By Your Grace', 'Covered By Your Grace'),
(266, 'Crafty Girls', 'Crafty Girls'),
(267, 'Creepster', 'Creepster'),
(268, 'Crete Round', 'Crete Round'),
(269, 'Crimson Pro', 'Crimson Pro'),
(270, 'Croissant One', 'Croissant One'),
(271, 'Crushed', 'Crushed'),
(272, 'Cuprum', 'Cuprum'),
(273, 'Cute Font', 'Cute Font'),
(274, 'Cutive', 'Cutive'),
(275, 'Cutive Mono', 'Cutive Mono'),
(276, 'DM Mono', 'DM Mono'),
(277, 'DM Sans', 'DM Sans'),
(278, 'DM Serif Display', 'DM Serif Display'),
(279, 'DM Serif Text', 'DM Serif Text'),
(280, 'Damion', 'Damion'),
(281, 'Dancing Script', 'Dancing Script'),
(282, 'Dangrek', 'Dangrek'),
(283, 'Darker Grotesque', 'Darker Grotesque'),
(284, 'David Libre', 'David Libre'),
(285, 'Dawning of a New Day', 'Dawning of a New Day'),
(286, 'Days One', 'Days One'),
(287, 'Dekko', 'Dekko'),
(288, 'Dela Gothic One', 'Dela Gothic One'),
(289, 'Delius', 'Delius'),
(290, 'Delius Swash Caps', 'Delius Swash Caps'),
(291, 'Delius Unicase', 'Delius Unicase'),
(292, 'Della Respira', 'Della Respira'),
(293, 'Denk One', 'Denk One'),
(294, 'Devonshire', 'Devonshire'),
(295, 'Dhurjati', 'Dhurjati'),
(296, 'Didact Gothic', 'Didact Gothic'),
(297, 'Diplomata', 'Diplomata'),
(298, 'Diplomata SC', 'Diplomata SC'),
(299, 'Do Hyeon', 'Do Hyeon'),
(300, 'Dokdo', 'Dokdo'),
(301, 'Domine', 'Domine'),
(302, 'Donegal One', 'Donegal One'),
(303, 'Dongle', 'Dongle'),
(304, 'Doppio One', 'Doppio One'),
(305, 'Dorsa', 'Dorsa'),
(306, 'Dosis', 'Dosis'),
(307, 'DotGothic16', 'DotGothic16'),
(308, 'Dr Sugiyama', 'Dr Sugiyama'),
(309, 'Duru Sans', 'Duru Sans'),
(310, 'Dynalight', 'Dynalight'),
(311, 'EB Garamond', 'EB Garamond'),
(312, 'Eagle Lake', 'Eagle Lake'),
(313, 'East Sea Dokdo', 'East Sea Dokdo'),
(314, 'Eater', 'Eater'),
(315, 'Economica', 'Economica'),
(316, 'Eczar', 'Eczar'),
(317, 'El Messiri', 'El Messiri'),
(318, 'Electrolize', 'Electrolize'),
(319, 'Elsie', 'Elsie'),
(320, 'Elsie Swash Caps', 'Elsie Swash Caps'),
(321, 'Emblema One', 'Emblema One'),
(322, 'Emilys Candy', 'Emilys Candy'),
(323, 'Encode Sans', 'Encode Sans'),
(324, 'Encode Sans Condensed', 'Encode Sans Condensed'),
(325, 'Encode Sans Expanded', 'Encode Sans Expanded'),
(326, 'Encode Sans SC', 'Encode Sans SC'),
(327, 'Encode Sans Semi Condensed', 'Encode Sans Semi Condensed'),
(328, 'Encode Sans Semi Expanded', 'Encode Sans Semi Expanded'),
(329, 'Engagement', 'Engagement'),
(330, 'Englebert', 'Englebert'),
(331, 'Enriqueta', 'Enriqueta'),
(332, 'Ephesis', 'Ephesis'),
(333, 'Epilogue', 'Epilogue'),
(334, 'Erica One', 'Erica One'),
(335, 'Esteban', 'Esteban'),
(336, 'Estonia', 'Estonia'),
(337, 'Euphoria Script', 'Euphoria Script'),
(338, 'Ewert', 'Ewert'),
(339, 'Exo', 'Exo'),
(340, 'Exo 2', 'Exo 2'),
(341, 'Expletus Sans', 'Expletus Sans'),
(342, 'Explora', 'Explora'),
(343, 'Fahkwang', 'Fahkwang'),
(344, 'Fanwood Text', 'Fanwood Text'),
(345, 'Farro', 'Farro'),
(346, 'Farsan', 'Farsan'),
(347, 'Fascinate', 'Fascinate'),
(348, 'Fascinate Inline', 'Fascinate Inline'),
(349, 'Faster One', 'Faster One'),
(350, 'Fasthand', 'Fasthand'),
(351, 'Fauna One', 'Fauna One'),
(352, 'Faustina', 'Faustina'),
(353, 'Federant', 'Federant'),
(354, 'Federo', 'Federo'),
(355, 'Felipa', 'Felipa'),
(356, 'Fenix', 'Fenix'),
(357, 'Festive', 'Festive'),
(358, 'Finger Paint', 'Finger Paint'),
(359, 'Fira Code', 'Fira Code'),
(360, 'Fira Mono', 'Fira Mono'),
(361, 'Fira Sans', 'Fira Sans'),
(362, 'Fira Sans Condensed', 'Fira Sans Condensed'),
(363, 'Fira Sans Extra Condensed', 'Fira Sans Extra Condensed'),
(364, 'Fjalla One', 'Fjalla One'),
(365, 'Fjord One', 'Fjord One'),
(366, 'Flamenco', 'Flamenco'),
(367, 'Flavors', 'Flavors'),
(368, 'Fleur De Leah', 'Fleur De Leah'),
(369, 'Flow Block', 'Flow Block'),
(370, 'Flow Circular', 'Flow Circular'),
(371, 'Flow Rounded', 'Flow Rounded'),
(372, 'Fondamento', 'Fondamento'),
(373, 'Fontdiner Swanky', 'Fontdiner Swanky'),
(374, 'Forum', 'Forum'),
(375, 'Francois One', 'Francois One'),
(376, 'Frank Ruhl Libre', 'Frank Ruhl Libre'),
(377, 'Fraunces', 'Fraunces'),
(378, 'Freckle Face', 'Freckle Face'),
(379, 'Fredericka the Great', 'Fredericka the Great'),
(380, 'Fredoka One', 'Fredoka One'),
(381, 'Freehand', 'Freehand'),
(382, 'Fresca', 'Fresca'),
(383, 'Frijole', 'Frijole'),
(384, 'Fruktur', 'Fruktur'),
(385, 'Fugaz One', 'Fugaz One'),
(386, 'Fuggles', 'Fuggles'),
(387, 'Fuzzy Bubbles', 'Fuzzy Bubbles'),
(388, 'GFS Didot', 'GFS Didot'),
(389, 'GFS Neohellenic', 'GFS Neohellenic'),
(390, 'Gabriela', 'Gabriela'),
(391, 'Gaegu', 'Gaegu'),
(392, 'Gafata', 'Gafata'),
(393, 'Galada', 'Galada'),
(394, 'Galdeano', 'Galdeano'),
(395, 'Galindo', 'Galindo'),
(396, 'Gamja Flower', 'Gamja Flower'),
(397, 'Gayathri', 'Gayathri'),
(398, 'Gelasio', 'Gelasio'),
(399, 'Gemunu Libre', 'Gemunu Libre'),
(400, 'Genos', 'Genos'),
(401, 'Gentium Basic', 'Gentium Basic'),
(402, 'Gentium Book Basic', 'Gentium Book Basic'),
(403, 'Geo', 'Geo'),
(404, 'Georama', 'Georama'),
(405, 'Geostar', 'Geostar'),
(406, 'Geostar Fill', 'Geostar Fill'),
(407, 'Germania One', 'Germania One'),
(408, 'Gideon Roman', 'Gideon Roman'),
(409, 'Gidugu', 'Gidugu'),
(410, 'Gilda Display', 'Gilda Display'),
(411, 'Girassol', 'Girassol'),
(412, 'Give You Glory', 'Give You Glory'),
(413, 'Glass Antiqua', 'Glass Antiqua'),
(414, 'Glegoo', 'Glegoo'),
(415, 'Gloria Hallelujah', 'Gloria Hallelujah'),
(416, 'Glory', 'Glory'),
(417, 'Gluten', 'Gluten'),
(418, 'Goblin One', 'Goblin One'),
(419, 'Gochi Hand', 'Gochi Hand'),
(420, 'Goldman', 'Goldman'),
(421, 'Gorditas', 'Gorditas'),
(422, 'Gothic A1', 'Gothic A1'),
(423, 'Gotu', 'Gotu'),
(424, 'Goudy Bookletter 1911', 'Goudy Bookletter 1911'),
(425, 'Gowun Batang', 'Gowun Batang'),
(426, 'Gowun Dodum', 'Gowun Dodum'),
(427, 'Graduate', 'Graduate'),
(428, 'Grand Hotel', 'Grand Hotel'),
(429, 'Grandstander', 'Grandstander'),
(430, 'Gravitas One', 'Gravitas One'),
(431, 'Great Vibes', 'Great Vibes'),
(432, 'Grechen Fuemen', 'Grechen Fuemen'),
(433, 'Grenze', 'Grenze'),
(434, 'Grenze Gotisch', 'Grenze Gotisch'),
(435, 'Grey Qo', 'Grey Qo'),
(436, 'Griffy', 'Griffy'),
(437, 'Gruppo', 'Gruppo'),
(438, 'Gudea', 'Gudea'),
(439, 'Gugi', 'Gugi'),
(440, 'Gupter', 'Gupter'),
(441, 'Gurajada', 'Gurajada'),
(442, 'Gwendolyn', 'Gwendolyn'),
(443, 'Habibi', 'Habibi'),
(444, 'Hachi Maru Pop', 'Hachi Maru Pop'),
(445, 'Hahmlet', 'Hahmlet'),
(446, 'Halant', 'Halant'),
(447, 'Hammersmith One', 'Hammersmith One'),
(448, 'Hanalei', 'Hanalei'),
(449, 'Hanalei Fill', 'Hanalei Fill'),
(450, 'Handlee', 'Handlee'),
(451, 'Hanuman', 'Hanuman'),
(452, 'Happy Monkey', 'Happy Monkey'),
(453, 'Harmattan', 'Harmattan'),
(454, 'Headland One', 'Headland One'),
(455, 'Heebo', 'Heebo'),
(456, 'Henny Penny', 'Henny Penny'),
(457, 'Hepta Slab', 'Hepta Slab'),
(458, 'Herr Von Muellerhoff', 'Herr Von Muellerhoff'),
(459, 'Hi Melody', 'Hi Melody'),
(460, 'Hina Mincho', 'Hina Mincho'),
(461, 'Hind', 'Hind'),
(462, 'Hind Guntur', 'Hind Guntur'),
(463, 'Hind Madurai', 'Hind Madurai'),
(464, 'Hind Siliguri', 'Hind Siliguri'),
(465, 'Hind Vadodara', 'Hind Vadodara'),
(466, 'Holtwood One SC', 'Holtwood One SC'),
(467, 'Homemade Apple', 'Homemade Apple'),
(468, 'Homenaje', 'Homenaje'),
(469, 'Hurricane', 'Hurricane'),
(470, 'IBM Plex Mono', 'IBM Plex Mono'),
(471, 'IBM Plex Sans', 'IBM Plex Sans'),
(472, 'IBM Plex Sans Arabic', 'IBM Plex Sans Arabic'),
(473, 'IBM Plex Sans Condensed', 'IBM Plex Sans Condensed'),
(474, 'IBM Plex Sans Devanagari', 'IBM Plex Sans Devanagari'),
(475, 'IBM Plex Sans Hebrew', 'IBM Plex Sans Hebrew'),
(476, 'IBM Plex Sans KR', 'IBM Plex Sans KR'),
(477, 'IBM Plex Sans Thai', 'IBM Plex Sans Thai'),
(478, 'IBM Plex Sans Thai Looped', 'IBM Plex Sans Thai Looped'),
(479, 'IBM Plex Serif', 'IBM Plex Serif'),
(480, 'IM Fell DW Pica', 'IM Fell DW Pica'),
(481, 'IM Fell DW Pica SC', 'IM Fell DW Pica SC'),
(482, 'IM Fell Double Pica', 'IM Fell Double Pica'),
(483, 'IM Fell Double Pica SC', 'IM Fell Double Pica SC'),
(484, 'IM Fell English', 'IM Fell English'),
(485, 'IM Fell English SC', 'IM Fell English SC'),
(486, 'IM Fell French Canon', 'IM Fell French Canon'),
(487, 'IM Fell French Canon SC', 'IM Fell French Canon SC'),
(488, 'IM Fell Great Primer', 'IM Fell Great Primer'),
(489, 'IM Fell Great Primer SC', 'IM Fell Great Primer SC'),
(490, 'Ibarra Real Nova', 'Ibarra Real Nova'),
(491, 'Iceberg', 'Iceberg'),
(492, 'Iceland', 'Iceland'),
(493, 'Imbue', 'Imbue'),
(494, 'Imprima', 'Imprima'),
(495, 'Inconsolata', 'Inconsolata'),
(496, 'Inder', 'Inder'),
(497, 'Indie Flower', 'Indie Flower'),
(498, 'Inika', 'Inika'),
(499, 'Inknut Antiqua', 'Inknut Antiqua'),
(500, 'Inria Sans', 'Inria Sans'),
(501, 'Inria Serif', 'Inria Serif'),
(502, 'Inter', 'Inter'),
(503, 'Irish Grover', 'Irish Grover'),
(504, 'Istok Web', 'Istok Web'),
(505, 'Italiana', 'Italiana'),
(506, 'Italianno', 'Italianno'),
(507, 'Itim', 'Itim'),
(508, 'Jacques Francois', 'Jacques Francois'),
(509, 'Jacques Francois Shadow', 'Jacques Francois Shadow'),
(510, 'Jaldi', 'Jaldi'),
(511, 'JetBrains Mono', 'JetBrains Mono'),
(512, 'Jim Nightshade', 'Jim Nightshade'),
(513, 'Jockey One', 'Jockey One'),
(514, 'Jolly Lodger', 'Jolly Lodger'),
(515, 'Jomhuria', 'Jomhuria'),
(516, 'Jomolhari', 'Jomolhari'),
(517, 'Josefin Sans', 'Josefin Sans'),
(518, 'Josefin Slab', 'Josefin Slab'),
(519, 'Jost', 'Jost'),
(520, 'Joti One', 'Joti One'),
(521, 'Jua', 'Jua'),
(522, 'Judson', 'Judson'),
(523, 'Julee', 'Julee'),
(524, 'Julius Sans One', 'Julius Sans One'),
(525, 'Junge', 'Junge'),
(526, 'Jura', 'Jura'),
(527, 'Just Another Hand', 'Just Another Hand'),
(528, 'Just Me Again Down Here', 'Just Me Again Down Here'),
(529, 'K2D', 'K2D'),
(530, 'Kadwa', 'Kadwa'),
(531, 'Kaisei Decol', 'Kaisei Decol'),
(532, 'Kaisei HarunoUmi', 'Kaisei HarunoUmi'),
(533, 'Kaisei Opti', 'Kaisei Opti'),
(534, 'Kaisei Tokumin', 'Kaisei Tokumin'),
(535, 'Kalam', 'Kalam'),
(536, 'Kameron', 'Kameron'),
(537, 'Kanit', 'Kanit'),
(538, 'Kantumruy', 'Kantumruy'),
(539, 'Karantina', 'Karantina'),
(540, 'Karla', 'Karla'),
(541, 'Karma', 'Karma'),
(542, 'Katibeh', 'Katibeh'),
(543, 'Kaushan Script', 'Kaushan Script'),
(544, 'Kavivanar', 'Kavivanar'),
(545, 'Kavoon', 'Kavoon'),
(546, 'Kdam Thmor', 'Kdam Thmor'),
(547, 'Keania One', 'Keania One'),
(548, 'Kelly Slab', 'Kelly Slab'),
(549, 'Kenia', 'Kenia'),
(550, 'Khand', 'Khand'),
(551, 'Khmer', 'Khmer'),
(552, 'Khula', 'Khula'),
(553, 'Kings', 'Kings'),
(554, 'Kirang Haerang', 'Kirang Haerang'),
(555, 'Kite One', 'Kite One'),
(556, 'Kiwi Maru', 'Kiwi Maru'),
(557, 'Klee One', 'Klee One'),
(558, 'Knewave', 'Knewave'),
(559, 'KoHo', 'KoHo'),
(560, 'Kodchasan', 'Kodchasan'),
(561, 'Koh Santepheap', 'Koh Santepheap'),
(562, 'Kosugi', 'Kosugi'),
(563, 'Kosugi Maru', 'Kosugi Maru'),
(564, 'Kotta One', 'Kotta One'),
(565, 'Koulen', 'Koulen'),
(566, 'Kranky', 'Kranky'),
(567, 'Kreon', 'Kreon'),
(568, 'Kristi', 'Kristi'),
(569, 'Krona One', 'Krona One'),
(570, 'Krub', 'Krub'),
(571, 'Kufam', 'Kufam'),
(572, 'Kulim Park', 'Kulim Park'),
(573, 'Kumar One', 'Kumar One'),
(574, 'Kumar One Outline', 'Kumar One Outline'),
(575, 'Kumbh Sans', 'Kumbh Sans'),
(576, 'Kurale', 'Kurale'),
(577, 'La Belle Aurore', 'La Belle Aurore'),
(578, 'Lacquer', 'Lacquer'),
(579, 'Laila', 'Laila'),
(580, 'Lakki Reddy', 'Lakki Reddy'),
(581, 'Lalezar', 'Lalezar'),
(582, 'Lancelot', 'Lancelot'),
(583, 'Langar', 'Langar'),
(584, 'Lateef', 'Lateef'),
(585, 'Lato', 'Lato'),
(586, 'League Script', 'League Script'),
(587, 'Leckerli One', 'Leckerli One'),
(588, 'Ledger', 'Ledger'),
(589, 'Lekton', 'Lekton'),
(590, 'Lemon', 'Lemon'),
(591, 'Lemonada', 'Lemonada'),
(592, 'Lexend', 'Lexend'),
(593, 'Lexend Deca', 'Lexend Deca'),
(594, 'Lexend Exa', 'Lexend Exa'),
(595, 'Lexend Giga', 'Lexend Giga'),
(596, 'Lexend Mega', 'Lexend Mega'),
(597, 'Lexend Peta', 'Lexend Peta'),
(598, 'Lexend Tera', 'Lexend Tera'),
(599, 'Lexend Zetta', 'Lexend Zetta'),
(600, 'Libre Barcode 128', 'Libre Barcode 128'),
(601, 'Libre Barcode 128 Text', 'Libre Barcode 128 Text'),
(602, 'Libre Barcode 39', 'Libre Barcode 39'),
(603, 'Libre Barcode 39 Extended', 'Libre Barcode 39 Extended'),
(604, 'Libre Barcode 39 Extended Text', 'Libre Barcode 39 Extended Text'),
(605, 'Libre Barcode 39 Text', 'Libre Barcode 39 Text'),
(606, 'Libre Barcode EAN13 Text', 'Libre Barcode EAN13 Text'),
(607, 'Libre Baskerville', 'Libre Baskerville'),
(608, 'Libre Caslon Display', 'Libre Caslon Display'),
(609, 'Libre Caslon Text', 'Libre Caslon Text'),
(610, 'Libre Franklin', 'Libre Franklin'),
(611, 'Life Savers', 'Life Savers'),
(612, 'Lilita One', 'Lilita One'),
(613, 'Lily Script One', 'Lily Script One'),
(614, 'Limelight', 'Limelight'),
(615, 'Linden Hill', 'Linden Hill'),
(616, 'Literata', 'Literata'),
(617, 'Liu Jian Mao Cao', 'Liu Jian Mao Cao'),
(618, 'Livvic', 'Livvic'),
(619, 'Lobster', 'Lobster'),
(620, 'Lobster Two', 'Lobster Two'),
(621, 'Londrina Outline', 'Londrina Outline'),
(622, 'Londrina Shadow', 'Londrina Shadow'),
(623, 'Londrina Sketch', 'Londrina Sketch'),
(624, 'Londrina Solid', 'Londrina Solid'),
(625, 'Long Cang', 'Long Cang'),
(626, 'Lora', 'Lora'),
(627, 'Love Ya Like A Sister', 'Love Ya Like A Sister'),
(628, 'Loved by the King', 'Loved by the King'),
(629, 'Lovers Quarrel', 'Lovers Quarrel'),
(630, 'Luckiest Guy', 'Luckiest Guy'),
(631, 'Lusitana', 'Lusitana'),
(632, 'Lustria', 'Lustria'),
(633, 'Luxurious Script', 'Luxurious Script'),
(634, 'M PLUS 1', 'M PLUS 1'),
(635, 'M PLUS 1 Code', 'M PLUS 1 Code'),
(636, 'M PLUS 1p', 'M PLUS 1p'),
(637, 'M PLUS 2', 'M PLUS 2'),
(638, 'M PLUS Code Latin', 'M PLUS Code Latin'),
(639, 'M PLUS Rounded 1c', 'M PLUS Rounded 1c'),
(640, 'Ma Shan Zheng', 'Ma Shan Zheng'),
(641, 'Macondo', 'Macondo'),
(642, 'Macondo Swash Caps', 'Macondo Swash Caps'),
(643, 'Mada', 'Mada'),
(644, 'Magra', 'Magra'),
(645, 'Maiden Orange', 'Maiden Orange'),
(646, 'Maitree', 'Maitree'),
(647, 'Major Mono Display', 'Major Mono Display'),
(648, 'Mako', 'Mako'),
(649, 'Mali', 'Mali'),
(650, 'Mallanna', 'Mallanna'),
(651, 'Mandali', 'Mandali'),
(652, 'Manjari', 'Manjari'),
(653, 'Manrope', 'Manrope'),
(654, 'Mansalva', 'Mansalva'),
(655, 'Manuale', 'Manuale'),
(656, 'Marcellus', 'Marcellus'),
(657, 'Marcellus SC', 'Marcellus SC'),
(658, 'Marck Script', 'Marck Script'),
(659, 'Margarine', 'Margarine'),
(660, 'Markazi Text', 'Markazi Text'),
(661, 'Marko One', 'Marko One'),
(662, 'Marmelad', 'Marmelad'),
(663, 'Martel', 'Martel'),
(664, 'Martel Sans', 'Martel Sans'),
(665, 'Marvel', 'Marvel'),
(666, 'Mate', 'Mate'),
(667, 'Mate SC', 'Mate SC'),
(668, 'Maven Pro', 'Maven Pro'),
(669, 'McLaren', 'McLaren'),
(670, 'Meddon', 'Meddon'),
(671, 'MedievalSharp', 'MedievalSharp'),
(672, 'Medula One', 'Medula One'),
(673, 'Meera Inimai', 'Meera Inimai'),
(674, 'Megrim', 'Megrim'),
(675, 'Meie Script', 'Meie Script'),
(676, 'Meow Script', 'Meow Script'),
(677, 'Merienda', 'Merienda'),
(678, 'Merienda One', 'Merienda One'),
(679, 'Merriweather', 'Merriweather'),
(680, 'Merriweather Sans', 'Merriweather Sans'),
(681, 'Metal', 'Metal'),
(682, 'Metal Mania', 'Metal Mania'),
(683, 'Metamorphous', 'Metamorphous'),
(684, 'Metrophobic', 'Metrophobic'),
(685, 'Michroma', 'Michroma'),
(686, 'Milonga', 'Milonga'),
(687, 'Miltonian', 'Miltonian'),
(688, 'Miltonian Tattoo', 'Miltonian Tattoo'),
(689, 'Mina', 'Mina'),
(690, 'Miniver', 'Miniver'),
(691, 'Miriam Libre', 'Miriam Libre'),
(692, 'Mirza', 'Mirza'),
(693, 'Miss Fajardose', 'Miss Fajardose'),
(694, 'Mitr', 'Mitr'),
(695, 'Mochiy Pop One', 'Mochiy Pop One'),
(696, 'Mochiy Pop P One', 'Mochiy Pop P One'),
(697, 'Modak', 'Modak'),
(698, 'Modern Antiqua', 'Modern Antiqua'),
(699, 'Mogra', 'Mogra'),
(700, 'Mohave', 'Mohave'),
(701, 'Molengo', 'Molengo'),
(702, 'Molle', 'Molle'),
(703, 'Monda', 'Monda'),
(704, 'Monofett', 'Monofett'),
(705, 'Monoton', 'Monoton'),
(706, 'Monsieur La Doulaise', 'Monsieur La Doulaise'),
(707, 'Montaga', 'Montaga'),
(708, 'Montagu Slab', 'Montagu Slab'),
(709, 'MonteCarlo', 'MonteCarlo'),
(710, 'Montez', 'Montez'),
(711, 'Montserrat', 'Montserrat'),
(712, 'Montserrat Alternates', 'Montserrat Alternates'),
(713, 'Montserrat Subrayada', 'Montserrat Subrayada'),
(714, 'Moul', 'Moul'),
(715, 'Moulpali', 'Moulpali'),
(716, 'Mountains of Christmas', 'Mountains of Christmas'),
(717, 'Mouse Memoirs', 'Mouse Memoirs'),
(718, 'Mr Bedfort', 'Mr Bedfort'),
(719, 'Mr Dafoe', 'Mr Dafoe'),
(720, 'Mr De Haviland', 'Mr De Haviland'),
(721, 'Mrs Saint Delafield', 'Mrs Saint Delafield'),
(722, 'Mrs Sheppards', 'Mrs Sheppards'),
(723, 'Mukta', 'Mukta'),
(724, 'Mukta Mahee', 'Mukta Mahee'),
(725, 'Mukta Malar', 'Mukta Malar'),
(726, 'Mukta Vaani', 'Mukta Vaani'),
(727, 'Mulish', 'Mulish'),
(728, 'Murecho', 'Murecho'),
(729, 'MuseoModerno', 'MuseoModerno'),
(730, 'Mystery Quest', 'Mystery Quest'),
(731, 'NTR', 'NTR'),
(732, 'Nanum Brush Script', 'Nanum Brush Script'),
(733, 'Nanum Gothic', 'Nanum Gothic'),
(734, 'Nanum Gothic Coding', 'Nanum Gothic Coding'),
(735, 'Nanum Myeongjo', 'Nanum Myeongjo'),
(736, 'Nanum Pen Script', 'Nanum Pen Script'),
(737, 'Nerko One', 'Nerko One'),
(738, 'Neucha', 'Neucha'),
(739, 'Neuton', 'Neuton'),
(740, 'New Rocker', 'New Rocker'),
(741, 'New Tegomin', 'New Tegomin'),
(742, 'News Cycle', 'News Cycle'),
(743, 'Newsreader', 'Newsreader'),
(744, 'Niconne', 'Niconne'),
(745, 'Niramit', 'Niramit'),
(746, 'Nixie One', 'Nixie One'),
(747, 'Nobile', 'Nobile'),
(748, 'Nokora', 'Nokora'),
(749, 'Norican', 'Norican'),
(750, 'Nosifer', 'Nosifer'),
(751, 'Notable', 'Notable'),
(752, 'Nothing You Could Do', 'Nothing You Could Do'),
(753, 'Noticia Text', 'Noticia Text'),
(754, 'Noto Kufi Arabic', 'Noto Kufi Arabic'),
(755, 'Noto Music', 'Noto Music'),
(756, 'Noto Naskh Arabic', 'Noto Naskh Arabic'),
(757, 'Noto Nastaliq Urdu', 'Noto Nastaliq Urdu'),
(758, 'Noto Rashi Hebrew', 'Noto Rashi Hebrew'),
(759, 'Noto Sans', 'Noto Sans'),
(760, 'Noto Sans Adlam', 'Noto Sans Adlam'),
(761, 'Noto Sans Adlam Unjoined', 'Noto Sans Adlam Unjoined'),
(762, 'Noto Sans Anatolian Hieroglyphs', 'Noto Sans Anatolian Hieroglyphs'),
(763, 'Noto Sans Arabic', 'Noto Sans Arabic'),
(764, 'Noto Sans Armenian', 'Noto Sans Armenian'),
(765, 'Noto Sans Avestan', 'Noto Sans Avestan'),
(766, 'Noto Sans Balinese', 'Noto Sans Balinese'),
(767, 'Noto Sans Bamum', 'Noto Sans Bamum'),
(768, 'Noto Sans Bassa Vah', 'Noto Sans Bassa Vah'),
(769, 'Noto Sans Batak', 'Noto Sans Batak'),
(770, 'Noto Sans Bengali', 'Noto Sans Bengali'),
(771, 'Noto Sans Bhaiksuki', 'Noto Sans Bhaiksuki'),
(772, 'Noto Sans Brahmi', 'Noto Sans Brahmi'),
(773, 'Noto Sans Buginese', 'Noto Sans Buginese'),
(774, 'Noto Sans Buhid', 'Noto Sans Buhid'),
(775, 'Noto Sans Canadian Aboriginal', 'Noto Sans Canadian Aboriginal'),
(776, 'Noto Sans Carian', 'Noto Sans Carian'),
(777, 'Noto Sans Caucasian Albanian', 'Noto Sans Caucasian Albanian'),
(778, 'Noto Sans Chakma', 'Noto Sans Chakma'),
(779, 'Noto Sans Cham', 'Noto Sans Cham'),
(780, 'Noto Sans Cherokee', 'Noto Sans Cherokee'),
(781, 'Noto Sans Coptic', 'Noto Sans Coptic'),
(782, 'Noto Sans Cuneiform', 'Noto Sans Cuneiform'),
(783, 'Noto Sans Cypriot', 'Noto Sans Cypriot'),
(784, 'Noto Sans Deseret', 'Noto Sans Deseret'),
(785, 'Noto Sans Devanagari', 'Noto Sans Devanagari'),
(786, 'Noto Sans Display', 'Noto Sans Display'),
(787, 'Noto Sans Duployan', 'Noto Sans Duployan'),
(788, 'Noto Sans Egyptian Hieroglyphs', 'Noto Sans Egyptian Hieroglyphs'),
(789, 'Noto Sans Elbasan', 'Noto Sans Elbasan'),
(790, 'Noto Sans Elymaic', 'Noto Sans Elymaic'),
(791, 'Noto Sans Georgian', 'Noto Sans Georgian'),
(792, 'Noto Sans Glagolitic', 'Noto Sans Glagolitic'),
(793, 'Noto Sans Gothic', 'Noto Sans Gothic'),
(794, 'Noto Sans Grantha', 'Noto Sans Grantha'),
(795, 'Noto Sans Gujarati', 'Noto Sans Gujarati'),
(796, 'Noto Sans Gunjala Gondi', 'Noto Sans Gunjala Gondi'),
(797, 'Noto Sans Gurmukhi', 'Noto Sans Gurmukhi'),
(798, 'Noto Sans HK', 'Noto Sans HK'),
(799, 'Noto Sans Hanifi Rohingya', 'Noto Sans Hanifi Rohingya'),
(800, 'Noto Sans Hanunoo', 'Noto Sans Hanunoo'),
(801, 'Noto Sans Hatran', 'Noto Sans Hatran'),
(802, 'Noto Sans Hebrew', 'Noto Sans Hebrew'),
(803, 'Noto Sans Imperial Aramaic', 'Noto Sans Imperial Aramaic'),
(804, 'Noto Sans Indic Siyaq Numbers', 'Noto Sans Indic Siyaq Numbers'),
(805, 'Noto Sans Inscriptional Pahlavi', 'Noto Sans Inscriptional Pahlavi'),
(806, 'Noto Sans Inscriptional Parthian', 'Noto Sans Inscriptional Parthian'),
(807, 'Noto Sans JP', 'Noto Sans JP'),
(808, 'Noto Sans Javanese', 'Noto Sans Javanese'),
(809, 'Noto Sans KR', 'Noto Sans KR'),
(810, 'Noto Sans Kaithi', 'Noto Sans Kaithi'),
(811, 'Noto Sans Kannada', 'Noto Sans Kannada'),
(812, 'Noto Sans Kayah Li', 'Noto Sans Kayah Li'),
(813, 'Noto Sans Kharoshthi', 'Noto Sans Kharoshthi'),
(814, 'Noto Sans Khmer', 'Noto Sans Khmer'),
(815, 'Noto Sans Khojki', 'Noto Sans Khojki'),
(816, 'Noto Sans Khudawadi', 'Noto Sans Khudawadi'),
(817, 'Noto Sans Lao', 'Noto Sans Lao'),
(818, 'Noto Sans Lepcha', 'Noto Sans Lepcha'),
(819, 'Noto Sans Limbu', 'Noto Sans Limbu'),
(820, 'Noto Sans Linear A', 'Noto Sans Linear A'),
(821, 'Noto Sans Linear B', 'Noto Sans Linear B'),
(822, 'Noto Sans Lisu', 'Noto Sans Lisu'),
(823, 'Noto Sans Lycian', 'Noto Sans Lycian'),
(824, 'Noto Sans Lydian', 'Noto Sans Lydian'),
(825, 'Noto Sans Mahajani', 'Noto Sans Mahajani'),
(826, 'Noto Sans Malayalam', 'Noto Sans Malayalam'),
(827, 'Noto Sans Mandaic', 'Noto Sans Mandaic'),
(828, 'Noto Sans Manichaean', 'Noto Sans Manichaean'),
(829, 'Noto Sans Marchen', 'Noto Sans Marchen'),
(830, 'Noto Sans Masaram Gondi', 'Noto Sans Masaram Gondi'),
(831, 'Noto Sans Math', 'Noto Sans Math'),
(832, 'Noto Sans Mayan Numerals', 'Noto Sans Mayan Numerals'),
(833, 'Noto Sans Medefaidrin', 'Noto Sans Medefaidrin'),
(834, 'Noto Sans Meetei Mayek', 'Noto Sans Meetei Mayek'),
(835, 'Noto Sans Meroitic', 'Noto Sans Meroitic'),
(836, 'Noto Sans Miao', 'Noto Sans Miao'),
(837, 'Noto Sans Modi', 'Noto Sans Modi'),
(838, 'Noto Sans Mongolian', 'Noto Sans Mongolian'),
(839, 'Noto Sans Mono', 'Noto Sans Mono'),
(840, 'Noto Sans Mro', 'Noto Sans Mro'),
(841, 'Noto Sans Multani', 'Noto Sans Multani'),
(842, 'Noto Sans Myanmar', 'Noto Sans Myanmar'),
(843, 'Noto Sans N Ko', 'Noto Sans N Ko'),
(844, 'Noto Sans Nabataean', 'Noto Sans Nabataean'),
(845, 'Noto Sans New Tai Lue', 'Noto Sans New Tai Lue'),
(846, 'Noto Sans Newa', 'Noto Sans Newa'),
(847, 'Noto Sans Nushu', 'Noto Sans Nushu'),
(848, 'Noto Sans Ogham', 'Noto Sans Ogham'),
(849, 'Noto Sans Ol Chiki', 'Noto Sans Ol Chiki'),
(850, 'Noto Sans Old Hungarian', 'Noto Sans Old Hungarian'),
(851, 'Noto Sans Old Italic', 'Noto Sans Old Italic'),
(852, 'Noto Sans Old North Arabian', 'Noto Sans Old North Arabian'),
(853, 'Noto Sans Old Permic', 'Noto Sans Old Permic'),
(854, 'Noto Sans Old Persian', 'Noto Sans Old Persian'),
(855, 'Noto Sans Old Sogdian', 'Noto Sans Old Sogdian'),
(856, 'Noto Sans Old South Arabian', 'Noto Sans Old South Arabian'),
(857, 'Noto Sans Old Turkic', 'Noto Sans Old Turkic'),
(858, 'Noto Sans Oriya', 'Noto Sans Oriya'),
(859, 'Noto Sans Osage', 'Noto Sans Osage'),
(860, 'Noto Sans Osmanya', 'Noto Sans Osmanya'),
(861, 'Noto Sans Pahawh Hmong', 'Noto Sans Pahawh Hmong'),
(862, 'Noto Sans Palmyrene', 'Noto Sans Palmyrene'),
(863, 'Noto Sans Pau Cin Hau', 'Noto Sans Pau Cin Hau'),
(864, 'Noto Sans Phags Pa', 'Noto Sans Phags Pa'),
(865, 'Noto Sans Phoenician', 'Noto Sans Phoenician'),
(866, 'Noto Sans Psalter Pahlavi', 'Noto Sans Psalter Pahlavi'),
(867, 'Noto Sans Rejang', 'Noto Sans Rejang'),
(868, 'Noto Sans Runic', 'Noto Sans Runic'),
(869, 'Noto Sans SC', 'Noto Sans SC'),
(870, 'Noto Sans Samaritan', 'Noto Sans Samaritan'),
(871, 'Noto Sans Saurashtra', 'Noto Sans Saurashtra'),
(872, 'Noto Sans Sharada', 'Noto Sans Sharada'),
(873, 'Noto Sans Shavian', 'Noto Sans Shavian'),
(874, 'Noto Sans Siddham', 'Noto Sans Siddham'),
(875, 'Noto Sans Sinhala', 'Noto Sans Sinhala'),
(876, 'Noto Sans Sogdian', 'Noto Sans Sogdian'),
(877, 'Noto Sans Sora Sompeng', 'Noto Sans Sora Sompeng'),
(878, 'Noto Sans Soyombo', 'Noto Sans Soyombo'),
(879, 'Noto Sans Sundanese', 'Noto Sans Sundanese'),
(880, 'Noto Sans Syloti Nagri', 'Noto Sans Syloti Nagri'),
(881, 'Noto Sans Symbols', 'Noto Sans Symbols'),
(882, 'Noto Sans Symbols 2', 'Noto Sans Symbols 2'),
(883, 'Noto Sans Syriac', 'Noto Sans Syriac'),
(884, 'Noto Sans TC', 'Noto Sans TC'),
(885, 'Noto Sans Tagalog', 'Noto Sans Tagalog'),
(886, 'Noto Sans Tagbanwa', 'Noto Sans Tagbanwa'),
(887, 'Noto Sans Tai Le', 'Noto Sans Tai Le'),
(888, 'Noto Sans Tai Tham', 'Noto Sans Tai Tham'),
(889, 'Noto Sans Tai Viet', 'Noto Sans Tai Viet'),
(890, 'Noto Sans Takri', 'Noto Sans Takri'),
(891, 'Noto Sans Tamil', 'Noto Sans Tamil'),
(892, 'Noto Sans Tamil Supplement', 'Noto Sans Tamil Supplement'),
(893, 'Noto Sans Telugu', 'Noto Sans Telugu'),
(894, 'Noto Sans Thaana', 'Noto Sans Thaana'),
(895, 'Noto Sans Thai', 'Noto Sans Thai'),
(896, 'Noto Sans Thai Looped', 'Noto Sans Thai Looped'),
(897, 'Noto Sans Tifinagh', 'Noto Sans Tifinagh'),
(898, 'Noto Sans Tirhuta', 'Noto Sans Tirhuta'),
(899, 'Noto Sans Ugaritic', 'Noto Sans Ugaritic'),
(900, 'Noto Sans Vai', 'Noto Sans Vai'),
(901, 'Noto Sans Wancho', 'Noto Sans Wancho'),
(902, 'Noto Sans Warang Citi', 'Noto Sans Warang Citi'),
(903, 'Noto Sans Yi', 'Noto Sans Yi'),
(904, 'Noto Sans Zanabazar Square', 'Noto Sans Zanabazar Square'),
(905, 'Noto Serif', 'Noto Serif'),
(906, 'Noto Serif Ahom', 'Noto Serif Ahom'),
(907, 'Noto Serif Armenian', 'Noto Serif Armenian'),
(908, 'Noto Serif Balinese', 'Noto Serif Balinese'),
(909, 'Noto Serif Bengali', 'Noto Serif Bengali'),
(910, 'Noto Serif Devanagari', 'Noto Serif Devanagari'),
(911, 'Noto Serif Display', 'Noto Serif Display'),
(912, 'Noto Serif Dogra', 'Noto Serif Dogra'),
(913, 'Noto Serif Ethiopic', 'Noto Serif Ethiopic'),
(914, 'Noto Serif Georgian', 'Noto Serif Georgian'),
(915, 'Noto Serif Grantha', 'Noto Serif Grantha'),
(916, 'Noto Serif Gujarati', 'Noto Serif Gujarati'),
(917, 'Noto Serif Gurmukhi', 'Noto Serif Gurmukhi'),
(918, 'Noto Serif Hebrew', 'Noto Serif Hebrew'),
(919, 'Noto Serif JP', 'Noto Serif JP'),
(920, 'Noto Serif KR', 'Noto Serif KR'),
(921, 'Noto Serif Kannada', 'Noto Serif Kannada'),
(922, 'Noto Serif Khmer', 'Noto Serif Khmer'),
(923, 'Noto Serif Lao', 'Noto Serif Lao'),
(924, 'Noto Serif Malayalam', 'Noto Serif Malayalam'),
(925, 'Noto Serif Myanmar', 'Noto Serif Myanmar'),
(926, 'Noto Serif Nyiakeng Puachue Hmong', 'Noto Serif Nyiakeng Puachue Hmong'),
(927, 'Noto Serif SC', 'Noto Serif SC'),
(928, 'Noto Serif Sinhala', 'Noto Serif Sinhala'),
(929, 'Noto Serif TC', 'Noto Serif TC'),
(930, 'Noto Serif Tamil', 'Noto Serif Tamil'),
(931, 'Noto Serif Tangut', 'Noto Serif Tangut'),
(932, 'Noto Serif Telugu', 'Noto Serif Telugu'),
(933, 'Noto Serif Thai', 'Noto Serif Thai'),
(934, 'Noto Serif Tibetan', 'Noto Serif Tibetan'),
(935, 'Noto Serif Yezidi', 'Noto Serif Yezidi'),
(936, 'Noto Traditional Nushu', 'Noto Traditional Nushu'),
(937, 'Nova Cut', 'Nova Cut'),
(938, 'Nova Flat', 'Nova Flat'),
(939, 'Nova Mono', 'Nova Mono'),
(940, 'Nova Oval', 'Nova Oval'),
(941, 'Nova Round', 'Nova Round'),
(942, 'Nova Script', 'Nova Script'),
(943, 'Nova Slim', 'Nova Slim'),
(944, 'Nova Square', 'Nova Square'),
(945, 'Numans', 'Numans'),
(946, 'Nunito', 'Nunito'),
(947, 'Nunito Sans', 'Nunito Sans'),
(948, 'Odibee Sans', 'Odibee Sans'),
(949, 'Odor Mean Chey', 'Odor Mean Chey'),
(950, 'Offside', 'Offside'),
(951, 'Oi', 'Oi'),
(952, 'Old Standard TT', 'Old Standard TT'),
(953, 'Oldenburg', 'Oldenburg'),
(954, 'Oleo Script', 'Oleo Script'),
(955, 'Oleo Script Swash Caps', 'Oleo Script Swash Caps'),
(956, 'Open Sans', 'Open Sans'),
(957, 'Open Sans Condensed', 'Open Sans Condensed'),
(958, 'Oranienbaum', 'Oranienbaum'),
(959, 'Orbitron', 'Orbitron'),
(960, 'Oregano', 'Oregano'),
(961, 'Orelega One', 'Orelega One'),
(962, 'Orienta', 'Orienta'),
(963, 'Original Surfer', 'Original Surfer'),
(964, 'Oswald', 'Oswald'),
(965, 'Otomanopee One', 'Otomanopee One'),
(966, 'Outfit', 'Outfit'),
(967, 'Over the Rainbow', 'Over the Rainbow'),
(968, 'Overlock', 'Overlock'),
(969, 'Overlock SC', 'Overlock SC'),
(970, 'Overpass', 'Overpass'),
(971, 'Overpass Mono', 'Overpass Mono'),
(972, 'Ovo', 'Ovo'),
(973, 'Oxanium', 'Oxanium'),
(974, 'Oxygen', 'Oxygen'),
(975, 'Oxygen Mono', 'Oxygen Mono'),
(976, 'PT Mono', 'PT Mono'),
(977, 'PT Sans', 'PT Sans'),
(978, 'PT Sans Caption', 'PT Sans Caption'),
(979, 'PT Sans Narrow', 'PT Sans Narrow'),
(980, 'PT Serif', 'PT Serif'),
(981, 'PT Serif Caption', 'PT Serif Caption'),
(982, 'Pacifico', 'Pacifico'),
(983, 'Padauk', 'Padauk'),
(984, 'Palanquin', 'Palanquin'),
(985, 'Palanquin Dark', 'Palanquin Dark'),
(986, 'Palette Mosaic', 'Palette Mosaic'),
(987, 'Pangolin', 'Pangolin'),
(988, 'Paprika', 'Paprika'),
(989, 'Parisienne', 'Parisienne'),
(990, 'Passero One', 'Passero One'),
(991, 'Passion One', 'Passion One'),
(992, 'Passions Conflict', 'Passions Conflict'),
(993, 'Pathway Gothic One', 'Pathway Gothic One'),
(994, 'Patrick Hand', 'Patrick Hand'),
(995, 'Patrick Hand SC', 'Patrick Hand SC'),
(996, 'Pattaya', 'Pattaya'),
(997, 'Patua One', 'Patua One'),
(998, 'Pavanam', 'Pavanam'),
(999, 'Paytone One', 'Paytone One'),
(1000, 'Peddana', 'Peddana'),
(1001, 'Peralta', 'Peralta'),
(1002, 'Permanent Marker', 'Permanent Marker'),
(1003, 'Petemoss', 'Petemoss'),
(1004, 'Petit Formal Script', 'Petit Formal Script'),
(1005, 'Petrona', 'Petrona'),
(1006, 'Philosopher', 'Philosopher'),
(1007, 'Piazzolla', 'Piazzolla'),
(1008, 'Piedra', 'Piedra'),
(1009, 'Pinyon Script', 'Pinyon Script'),
(1010, 'Pirata One', 'Pirata One'),
(1011, 'Plaster', 'Plaster'),
(1012, 'Play', 'Play'),
(1013, 'Playball', 'Playball'),
(1014, 'Playfair Display', 'Playfair Display'),
(1015, 'Playfair Display SC', 'Playfair Display SC'),
(1016, 'Podkova', 'Podkova'),
(1017, 'Poiret One', 'Poiret One'),
(1018, 'Poller One', 'Poller One'),
(1019, 'Poly', 'Poly'),
(1020, 'Pompiere', 'Pompiere'),
(1021, 'Pontano Sans', 'Pontano Sans'),
(1022, 'Poor Story', 'Poor Story'),
(1023, 'Poppins', 'Poppins'),
(1024, 'Port Lligat Sans', 'Port Lligat Sans'),
(1025, 'Port Lligat Slab', 'Port Lligat Slab'),
(1026, 'Potta One', 'Potta One'),
(1027, 'Pragati Narrow', 'Pragati Narrow'),
(1028, 'Praise', 'Praise'),
(1029, 'Prata', 'Prata'),
(1030, 'Preahvihear', 'Preahvihear'),
(1031, 'Press Start 2P', 'Press Start 2P'),
(1032, 'Pridi', 'Pridi'),
(1033, 'Princess Sofia', 'Princess Sofia'),
(1034, 'Prociono', 'Prociono'),
(1035, 'Prompt', 'Prompt'),
(1036, 'Prosto One', 'Prosto One'),
(1037, 'Proza Libre', 'Proza Libre'),
(1038, 'Public Sans', 'Public Sans'),
(1039, 'Puppies Play', 'Puppies Play'),
(1040, 'Puritan', 'Puritan'),
(1041, 'Purple Purse', 'Purple Purse'),
(1042, 'Qahiri', 'Qahiri'),
(1043, 'Quando', 'Quando'),
(1044, 'Quantico', 'Quantico'),
(1045, 'Quattrocento', 'Quattrocento'),
(1046, 'Quattrocento Sans', 'Quattrocento Sans'),
(1047, 'Questrial', 'Questrial'),
(1048, 'Quicksand', 'Quicksand'),
(1049, 'Quintessential', 'Quintessential'),
(1050, 'Qwigley', 'Qwigley'),
(1051, 'Racing Sans One', 'Racing Sans One'),
(1052, 'Radley', 'Radley'),
(1053, 'Rajdhani', 'Rajdhani'),
(1054, 'Rakkas', 'Rakkas'),
(1055, 'Raleway', 'Raleway'),
(1056, 'Raleway Dots', 'Raleway Dots'),
(1057, 'Ramabhadra', 'Ramabhadra'),
(1058, 'Ramaraja', 'Ramaraja'),
(1059, 'Rambla', 'Rambla'),
(1060, 'Rammetto One', 'Rammetto One'),
(1061, 'Rampart One', 'Rampart One'),
(1062, 'Ranchers', 'Ranchers'),
(1063, 'Rancho', 'Rancho'),
(1064, 'Ranga', 'Ranga'),
(1065, 'Rasa', 'Rasa'),
(1066, 'Rationale', 'Rationale'),
(1067, 'Ravi Prakash', 'Ravi Prakash'),
(1068, 'Readex Pro', 'Readex Pro'),
(1069, 'Recursive', 'Recursive'),
(1070, 'Red Hat Display', 'Red Hat Display'),
(1071, 'Red Hat Mono', 'Red Hat Mono'),
(1072, 'Red Hat Text', 'Red Hat Text'),
(1073, 'Red Rose', 'Red Rose'),
(1074, 'Redacted', 'Redacted'),
(1075, 'Redacted Script', 'Redacted Script'),
(1076, 'Redressed', 'Redressed'),
(1077, 'Reem Kufi', 'Reem Kufi'),
(1078, 'Reenie Beanie', 'Reenie Beanie'),
(1079, 'Reggae One', 'Reggae One'),
(1080, 'Revalia', 'Revalia'),
(1081, 'Rhodium Libre', 'Rhodium Libre'),
(1082, 'Ribeye', 'Ribeye'),
(1083, 'Ribeye Marrow', 'Ribeye Marrow'),
(1084, 'Righteous', 'Righteous'),
(1085, 'Risque', 'Risque'),
(1086, 'Road Rage', 'Road Rage'),
(1087, 'Roboto', 'Roboto'),
(1088, 'Roboto Condensed', 'Roboto Condensed'),
(1089, 'Roboto Mono', 'Roboto Mono'),
(1090, 'Roboto Slab', 'Roboto Slab'),
(1091, 'Rochester', 'Rochester'),
(1092, 'Rock Salt', 'Rock Salt'),
(1093, 'RocknRoll One', 'RocknRoll One'),
(1094, 'Rokkitt', 'Rokkitt'),
(1095, 'Romanesco', 'Romanesco'),
(1096, 'Ropa Sans', 'Ropa Sans'),
(1097, 'Rosario', 'Rosario'),
(1098, 'Rosarivo', 'Rosarivo'),
(1099, 'Rouge Script', 'Rouge Script'),
(1100, 'Rowdies', 'Rowdies'),
(1101, 'Rozha One', 'Rozha One'),
(1102, 'Rubik', 'Rubik'),
(1103, 'Rubik Beastly', 'Rubik Beastly'),
(1104, 'Rubik Mono One', 'Rubik Mono One'),
(1105, 'Ruda', 'Ruda'),
(1106, 'Rufina', 'Rufina'),
(1107, 'Ruge Boogie', 'Ruge Boogie'),
(1108, 'Ruluko', 'Ruluko'),
(1109, 'Rum Raisin', 'Rum Raisin'),
(1110, 'Ruslan Display', 'Ruslan Display'),
(1111, 'Russo One', 'Russo One'),
(1112, 'Ruthie', 'Ruthie'),
(1113, 'Rye', 'Rye'),
(1114, 'STIX Two Text', 'STIX Two Text'),
(1115, 'Sacramento', 'Sacramento'),
(1116, 'Sahitya', 'Sahitya'),
(1117, 'Sail', 'Sail'),
(1118, 'Saira', 'Saira'),
(1119, 'Saira Condensed', 'Saira Condensed'),
(1120, 'Saira Extra Condensed', 'Saira Extra Condensed'),
(1121, 'Saira Semi Condensed', 'Saira Semi Condensed'),
(1122, 'Saira Stencil One', 'Saira Stencil One'),
(1123, 'Salsa', 'Salsa'),
(1124, 'Sanchez', 'Sanchez'),
(1125, 'Sancreek', 'Sancreek'),
(1126, 'Sansita', 'Sansita'),
(1127, 'Sansita Swashed', 'Sansita Swashed'),
(1128, 'Sarabun', 'Sarabun'),
(1129, 'Sarala', 'Sarala'),
(1130, 'Sarina', 'Sarina'),
(1131, 'Sarpanch', 'Sarpanch'),
(1132, 'Sassy Frass', 'Sassy Frass'),
(1133, 'Satisfy', 'Satisfy'),
(1134, 'Sawarabi Gothic', 'Sawarabi Gothic'),
(1135, 'Sawarabi Mincho', 'Sawarabi Mincho'),
(1136, 'Scada', 'Scada'),
(1137, 'Scheherazade New', 'Scheherazade New'),
(1138, 'Schoolbell', 'Schoolbell'),
(1139, 'Scope One', 'Scope One'),
(1140, 'Seaweed Script', 'Seaweed Script'),
(1141, 'Secular One', 'Secular One'),
(1142, 'Sedgwick Ave', 'Sedgwick Ave'),
(1143, 'Sedgwick Ave Display', 'Sedgwick Ave Display'),
(1144, 'Sen', 'Sen'),
(1145, 'Sevillana', 'Sevillana'),
(1146, 'Seymour One', 'Seymour One'),
(1147, 'Shadows Into Light', 'Shadows Into Light'),
(1148, 'Shadows Into Light Two', 'Shadows Into Light Two'),
(1149, 'Shalimar', 'Shalimar'),
(1150, 'Shanti', 'Shanti'),
(1151, 'Share', 'Share'),
(1152, 'Share Tech', 'Share Tech'),
(1153, 'Share Tech Mono', 'Share Tech Mono'),
(1154, 'Shippori Antique', 'Shippori Antique'),
(1155, 'Shippori Antique B1', 'Shippori Antique B1'),
(1156, 'Shippori Mincho', 'Shippori Mincho'),
(1157, 'Shippori Mincho B1', 'Shippori Mincho B1'),
(1158, 'Shojumaru', 'Shojumaru'),
(1159, 'Short Stack', 'Short Stack'),
(1160, 'Shrikhand', 'Shrikhand'),
(1161, 'Siemreap', 'Siemreap'),
(1162, 'Sigmar One', 'Sigmar One'),
(1163, 'Signika', 'Signika'),
(1164, 'Signika Negative', 'Signika Negative'),
(1165, 'Simonetta', 'Simonetta'),
(1166, 'Single Day', 'Single Day'),
(1167, 'Sintony', 'Sintony'),
(1168, 'Sirin Stencil', 'Sirin Stencil'),
(1169, 'Six Caps', 'Six Caps'),
(1170, 'Skranji', 'Skranji'),
(1171, 'Slabo 13px', 'Slabo 13px'),
(1172, 'Slabo 27px', 'Slabo 27px'),
(1173, 'Slackey', 'Slackey'),
(1174, 'Smokum', 'Smokum'),
(1175, 'Smooch', 'Smooch'),
(1176, 'Smythe', 'Smythe'),
(1177, 'Sniglet', 'Sniglet'),
(1178, 'Snippet', 'Snippet'),
(1179, 'Snowburst One', 'Snowburst One'),
(1180, 'Sofadi One', 'Sofadi One'),
(1181, 'Sofia', 'Sofia'),
(1182, 'Solway', 'Solway'),
(1183, 'Song Myung', 'Song Myung'),
(1184, 'Sonsie One', 'Sonsie One'),
(1185, 'Sora', 'Sora'),
(1186, 'Sorts Mill Goudy', 'Sorts Mill Goudy'),
(1187, 'Source Code Pro', 'Source Code Pro'),
(1188, 'Source Sans 3', 'Source Sans 3'),
(1189, 'Source Sans Pro', 'Source Sans Pro'),
(1190, 'Source Serif Pro', 'Source Serif Pro'),
(1191, 'Space Grotesk', 'Space Grotesk'),
(1192, 'Space Mono', 'Space Mono'),
(1193, 'Spartan', 'Spartan'),
(1194, 'Special Elite', 'Special Elite'),
(1195, 'Spectral', 'Spectral'),
(1196, 'Spectral SC', 'Spectral SC'),
(1197, 'Spicy Rice', 'Spicy Rice'),
(1198, 'Spinnaker', 'Spinnaker'),
(1199, 'Spirax', 'Spirax'),
(1200, 'Squada One', 'Squada One'),
(1201, 'Sree Krushnadevaraya', 'Sree Krushnadevaraya'),
(1202, 'Sriracha', 'Sriracha'),
(1203, 'Srisakdi', 'Srisakdi'),
(1204, 'Staatliches', 'Staatliches'),
(1205, 'Stalemate', 'Stalemate'),
(1206, 'Stalinist One', 'Stalinist One'),
(1207, 'Stardos Stencil', 'Stardos Stencil'),
(1208, 'Stick', 'Stick'),
(1209, 'Stick No Bills', 'Stick No Bills'),
(1210, 'Stint Ultra Condensed', 'Stint Ultra Condensed'),
(1211, 'Stint Ultra Expanded', 'Stint Ultra Expanded'),
(1212, 'Stoke', 'Stoke'),
(1213, 'Strait', 'Strait'),
(1214, 'Style Script', 'Style Script'),
(1215, 'Stylish', 'Stylish'),
(1216, 'Sue Ellen Francisco', 'Sue Ellen Francisco'),
(1217, 'Suez One', 'Suez One'),
(1218, 'Sulphur Point', 'Sulphur Point'),
(1219, 'Sumana', 'Sumana'),
(1220, 'Sunflower', 'Sunflower'),
(1221, 'Sunshiney', 'Sunshiney'),
(1222, 'Supermercado One', 'Supermercado One'),
(1223, 'Sura', 'Sura'),
(1224, 'Suranna', 'Suranna'),
(1225, 'Suravaram', 'Suravaram'),
(1226, 'Suwannaphum', 'Suwannaphum'),
(1227, 'Swanky and Moo Moo', 'Swanky and Moo Moo'),
(1228, 'Syncopate', 'Syncopate'),
(1229, 'Syne', 'Syne'),
(1230, 'Syne Mono', 'Syne Mono'),
(1231, 'Syne Tactile', 'Syne Tactile'),
(1232, 'Tajawal', 'Tajawal'),
(1233, 'Tangerine', 'Tangerine'),
(1234, 'Taprom', 'Taprom'),
(1235, 'Tauri', 'Tauri'),
(1236, 'Taviraj', 'Taviraj'),
(1237, 'Teko', 'Teko'),
(1238, 'Telex', 'Telex'),
(1239, 'Tenali Ramakrishna', 'Tenali Ramakrishna'),
(1240, 'Tenor Sans', 'Tenor Sans'),
(1241, 'Text Me One', 'Text Me One'),
(1242, 'Texturina', 'Texturina'),
(1243, 'Thasadith', 'Thasadith'),
(1244, 'The Girl Next Door', 'The Girl Next Door'),
(1245, 'Tienne', 'Tienne'),
(1246, 'Tillana', 'Tillana'),
(1247, 'Timmana', 'Timmana'),
(1248, 'Tinos', 'Tinos'),
(1249, 'Titan One', 'Titan One'),
(1250, 'Titillium Web', 'Titillium Web'),
(1251, 'Tomorrow', 'Tomorrow'),
(1252, 'Tourney', 'Tourney'),
(1253, 'Trade Winds', 'Trade Winds'),
(1254, 'Train One', 'Train One'),
(1255, 'Trirong', 'Trirong'),
(1256, 'Trispace', 'Trispace'),
(1257, 'Trocchi', 'Trocchi'),
(1258, 'Trochut', 'Trochut'),
(1259, 'Truculenta', 'Truculenta'),
(1260, 'Trykker', 'Trykker'),
(1261, 'Tulpen One', 'Tulpen One'),
(1262, 'Turret Road', 'Turret Road'),
(1263, 'Ubuntu', 'Ubuntu'),
(1264, 'Ubuntu Condensed', 'Ubuntu Condensed'),
(1265, 'Ubuntu Mono', 'Ubuntu Mono'),
(1266, 'Uchen', 'Uchen'),
(1267, 'Ultra', 'Ultra'),
(1268, 'Uncial Antiqua', 'Uncial Antiqua'),
(1269, 'Underdog', 'Underdog'),
(1270, 'Unica One', 'Unica One'),
(1271, 'UnifrakturCook', 'UnifrakturCook'),
(1272, 'UnifrakturMaguntia', 'UnifrakturMaguntia'),
(1273, 'Unkempt', 'Unkempt'),
(1274, 'Unlock', 'Unlock'),
(1275, 'Unna', 'Unna'),
(1276, 'Urbanist', 'Urbanist'),
(1277, 'VT323', 'VT323'),
(1278, 'Vampiro One', 'Vampiro One'),
(1279, 'Varela', 'Varela'),
(1280, 'Varela Round', 'Varela Round'),
(1281, 'Varta', 'Varta'),
(1282, 'Vast Shadow', 'Vast Shadow'),
(1283, 'Vesper Libre', 'Vesper Libre'),
(1284, 'Viaoda Libre', 'Viaoda Libre'),
(1285, 'Vibes', 'Vibes'),
(1286, 'Vibur', 'Vibur'),
(1287, 'Vidaloka', 'Vidaloka'),
(1288, 'Viga', 'Viga'),
(1289, 'Voces', 'Voces'),
(1290, 'Volkhov', 'Volkhov'),
(1291, 'Vollkorn', 'Vollkorn'),
(1292, 'Vollkorn SC', 'Vollkorn SC'),
(1293, 'Voltaire', 'Voltaire'),
(1294, 'Waiting for the Sunrise', 'Waiting for the Sunrise'),
(1295, 'Wallpoet', 'Wallpoet'),
(1296, 'Walter Turncoat', 'Walter Turncoat'),
(1297, 'Warnes', 'Warnes'),
(1298, 'Wellfleet', 'Wellfleet'),
(1299, 'Wendy One', 'Wendy One'),
(1300, 'WindSong', 'WindSong'),
(1301, 'Wire One', 'Wire One'),
(1302, 'Work Sans', 'Work Sans'),
(1303, 'Xanh Mono', 'Xanh Mono'),
(1304, 'Yaldevi', 'Yaldevi'),
(1305, 'Yanone Kaffeesatz', 'Yanone Kaffeesatz'),
(1306, 'Yantramanav', 'Yantramanav'),
(1307, 'Yatra One', 'Yatra One'),
(1308, 'Yellowtail', 'Yellowtail'),
(1309, 'Yeon Sung', 'Yeon Sung'),
(1310, 'Yeseva One', 'Yeseva One'),
(1311, 'Yesteryear', 'Yesteryear'),
(1312, 'Yomogi', 'Yomogi'),
(1313, 'Yrsa', 'Yrsa'),
(1314, 'Yuji Boku', 'Yuji Boku'),
(1315, 'Yuji Mai', 'Yuji Mai'),
(1316, 'Yuji Syuku', 'Yuji Syuku'),
(1317, 'Yusei Magic', 'Yusei Magic'),
(1318, 'ZCOOL KuaiLe', 'ZCOOL KuaiLe'),
(1319, 'ZCOOL QingKe HuangYou', 'ZCOOL QingKe HuangYou'),
(1320, 'ZCOOL XiaoWei', 'ZCOOL XiaoWei'),
(1321, 'Zen Antique', 'Zen Antique'),
(1322, 'Zen Antique Soft', 'Zen Antique Soft'),
(1323, 'Zen Dots', 'Zen Dots'),
(1324, 'Zen Kaku Gothic Antique', 'Zen Kaku Gothic Antique'),
(1325, 'Zen Kaku Gothic New', 'Zen Kaku Gothic New'),
(1326, 'Zen Kurenaido', 'Zen Kurenaido'),
(1327, 'Zen Loop', 'Zen Loop'),
(1328, 'Zen Maru Gothic', 'Zen Maru Gothic'),
(1329, 'Zen Old Mincho', 'Zen Old Mincho'),
(1330, 'Zen Tokyo Zoo', 'Zen Tokyo Zoo'),
(1331, 'Zeyada', 'Zeyada'),
(1332, 'Zhi Mang Xing', 'Zhi Mang Xing'),
(1333, 'Zilla Slab', 'Zilla Slab'),
(1334, 'Zilla Slab Highlight', 'Zilla Slab Highlight');

-- --------------------------------------------------------

--
-- Struktur dari tabel `footers`
--

CREATE TABLE `footers` (
  `id` int(10) UNSIGNED NOT NULL,
  `contact` text NOT NULL,
  `email` tinytext NOT NULL,
  `opentime` text NOT NULL,
  `address` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `footers`
--

INSERT INTO `footers` (`id`, `contact`, `email`, `opentime`, `address`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '01xxxxxxxxx', 'example@example.com', '24x7', 'lorem ipsume 6th Floor, lorem ipsume, Road , lorem ipsume, City, lorem ipsume Country', '2021-12-18 17:00:44', '2023-06-22 03:06:49', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gatewaytotals`
--

CREATE TABLE `gatewaytotals` (
  `id` int(10) UNSIGNED NOT NULL,
  `booking_id` tinytext NOT NULL,
  `gateway_id` int(10) UNSIGNED NOT NULL,
  `amount` text NOT NULL,
  `detail` text DEFAULT NULL,
  `trip_id` int(10) UNSIGNED NOT NULL,
  `subtrip_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `inquiries`
--

CREATE TABLE `inquiries` (
  `id` int(10) UNSIGNED NOT NULL,
  `mobile` tinytext NOT NULL,
  `subject` tinytext NOT NULL,
  `message` text NOT NULL,
  `email` tinytext NOT NULL,
  `name` tinytext NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `inquiries`
--

INSERT INTO `inquiries` (`id`, `mobile`, `subject`, `message`, `email`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(39, '00000000000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'l1@p.com', 'lorem ipsum', '2022-06-27 17:17:58', '2023-06-22 03:06:50', NULL),
(40, '000000000000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'l2@p.com', 'lorem ipsum', '2022-06-27 17:19:27', '2023-06-22 03:06:50', NULL),
(41, '000000000000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'l3@p.com', 'lorem ipsum', '2022-06-27 17:20:46', '2023-06-22 03:06:50', NULL),
(42, '0000000000000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'l4@p.com', 'lorem ipsum', '2022-06-27 17:21:27', '2023-06-22 03:06:50', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `journeylists`
--

CREATE TABLE `journeylists` (
  `id` int(10) UNSIGNED NOT NULL,
  `booking_id` varchar(100) NOT NULL,
  `trip_id` int(10) UNSIGNED NOT NULL,
  `subtrip_id` int(10) UNSIGNED NOT NULL,
  `pick_location_id` int(10) UNSIGNED NOT NULL,
  `drop_location_id` int(10) UNSIGNED NOT NULL,
  `pick_stand_id` int(10) UNSIGNED NOT NULL,
  `drop_stand_id` int(10) UNSIGNED NOT NULL,
  `first_name` tinytext NOT NULL,
  `last_name` tinytext NOT NULL,
  `phone` tinytext DEFAULT NULL,
  `journeydate` tinytext NOT NULL,
  `id_number` tinytext NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `journeylists`
--

INSERT INTO `journeylists` (`id`, `booking_id`, `trip_id`, `subtrip_id`, `pick_location_id`, `drop_location_id`, `pick_stand_id`, `drop_stand_id`, `first_name`, `last_name`, `phone`, `journeydate`, `id_number`, `created_at`, `updated_at`, `deleted_at`) VALUES
(376, 'TBX6NC73VK', 22, 36, 44, 42, 109, 110, 'DWI', 'SULISTIORINI', '087881667848', '2023-06-27', '3518009820987', '2023-06-26 19:48:41', '2023-06-26 19:48:41', NULL),
(377, 'TBX6NC73VK', 22, 36, 44, 42, 109, 110, 'Rey', 'Aditiya', '0', '2023-06-27', '-', '2023-06-26 19:48:41', '2023-06-26 19:48:41', NULL),
(378, 'TBNLAC74XK', 22, 36, 44, 42, 117, 118, 'DWI', 'SULISTIORINI', '087881667848', '2023-06-27', '3518009820031', '2023-06-26 20:50:06', '2023-06-26 20:50:06', NULL),
(379, 'TBNLAC74XK', 22, 36, 44, 42, 117, 118, 'Rey', 'Aditiya', '0', '2023-06-27', '-', '2023-06-26 20:50:06', '2023-06-26 20:50:06', NULL),
(380, 'TBD6OPY4TC', 22, 36, 44, 42, 117, 118, 'ASKAR', '.', '089694541355', '2023-06-27', '3519111000000', '2023-06-26 20:51:26', '2023-06-26 20:51:26', NULL),
(381, 'TBTPU2Y8GR', 22, 36, 44, 42, 117, 118, 'INDRI', 'WIDHYAMURTI', '08158812195', '2023-06-27', '3518009820987', '2023-06-26 20:54:10', '2023-06-26 21:00:44', '2023-06-26 21:00:44'),
(382, 'TBTPU2Y8GR', 22, 36, 44, 42, 117, 118, 'Erlangga', 'Raditya', '08158812654', '2023-06-27', '3518009850009', '2023-06-26 20:54:10', '2023-06-26 21:00:44', '2023-06-26 21:00:44'),
(383, 'TBTPU2Y8GR', 22, 36, 44, 42, 117, 118, 'Aska', 'Raditya', '0', '2023-06-27', '-', '2023-06-26 20:54:10', '2023-06-26 21:00:44', '2023-06-26 21:00:44'),
(384, 'TB65E2BU7Y', 22, 37, 42, 44, 117, 118, 'FAUZAN', '.', '087819354469', '2023-06-26', '3519111453000', '2023-06-26 20:55:43', '2023-06-26 20:57:38', '2023-06-26 20:57:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `langstrings`
--

CREATE TABLE `langstrings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `langstrings`
--

INSERT INTO `langstrings` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(16, 'dashboard', '2022-03-10 14:11:04', '2023-06-22 03:06:50', NULL),
(17, 'book_time', '2022-03-10 14:11:13', '2023-06-22 03:06:50', NULL),
(18, 'book_time_list', '2022-03-10 14:14:25', '2023-06-22 03:06:50', NULL),
(19, 'refund_list', '2022-03-10 16:15:05', '2023-06-22 03:06:50', NULL),
(20, 'agent', '2022-03-13 16:39:28', '2023-06-22 03:06:50', NULL),
(21, 'ticket_booking', '2022-03-15 11:40:41', '2023-06-22 03:06:50', NULL),
(22, 'book_ticket', '2022-03-15 12:55:25', '2023-06-22 03:06:50', NULL),
(23, 'ticket_list', '2022-03-15 13:06:30', '2023-06-22 03:06:50', NULL),
(24, 'journey_list', '2022-03-15 13:06:45', '2023-06-22 03:06:50', NULL),
(25, 'cancel_list', '2022-03-15 13:07:04', '2023-06-22 03:06:50', NULL),
(26, 'add_booking_time', '2022-03-15 13:10:29', '2023-06-22 03:06:50', NULL),
(27, 'booking_time_list', '2022-03-15 13:11:43', '2023-06-22 03:06:50', NULL),
(28, 'add_agent', '2022-03-15 17:26:19', '2023-06-22 03:06:50', NULL),
(29, 'agent_list', '2022-03-15 17:26:38', '2023-06-22 03:06:50', NULL),
(30, 'account', '2022-03-15 17:33:29', '2023-06-22 03:06:50', NULL),
(31, 'account_chart', '2022-03-15 17:33:50', '2023-06-22 03:06:50', NULL),
(32, 'add_transaction', '2022-03-15 17:34:47', '2023-06-22 03:06:50', NULL),
(33, 'transaction_list', '2022-03-15 17:34:59', '2023-06-22 03:06:50', NULL),
(34, 'location', '2022-03-15 17:52:20', '2023-06-22 03:06:50', NULL),
(35, 'add_location', '2022-03-15 17:52:30', '2023-06-22 03:06:50', NULL),
(36, 'location_list', '2022-03-15 17:52:44', '2023-06-22 03:06:50', NULL),
(37, 'add_stand', '2022-03-15 17:52:56', '2023-06-22 03:06:50', NULL),
(38, 'stand_list', '2022-03-15 17:53:11', '2023-06-22 03:06:50', NULL),
(39, 'schedule', '2022-03-15 18:35:06', '2023-06-22 03:06:50', NULL),
(40, 'add_schedule', '2022-03-15 18:35:15', '2023-06-22 03:06:50', NULL),
(41, 'schedule_list', '2022-03-15 18:35:27', '2023-06-22 03:06:50', NULL),
(42, 'add_schedule_filter', '2022-03-15 18:35:47', '2023-06-22 03:06:50', NULL),
(43, 'schedule_filter_list', '2022-03-15 18:36:03', '2023-06-22 03:06:50', NULL),
(44, 'advertisement', '2022-05-11 11:32:37', '2023-06-22 03:06:50', NULL),
(45, 'add_advertisement', '2022-05-11 11:34:11', '2023-06-22 03:06:50', NULL),
(46, 'advertisement_list', '2022-05-11 11:35:45', '2023-06-22 03:06:50', NULL),
(47, 'coupon', '2022-05-11 11:46:10', '2023-06-22 03:06:50', NULL),
(48, 'add_coupon', '2022-05-11 11:47:04', '2023-06-22 03:06:50', NULL),
(49, 'coupon_list', '2022-05-11 11:48:38', '2023-06-22 03:06:50', NULL),
(50, 'employee', '2022-05-11 11:52:32', '2023-06-22 03:06:50', NULL),
(51, 'add_employee_type', '2022-05-11 11:58:05', '2023-06-22 03:06:50', NULL),
(52, 'employee_type_list', '2022-05-11 12:03:29', '2023-06-22 03:06:50', NULL),
(53, 'add_employee', '2022-05-11 12:05:54', '2023-06-22 03:06:50', NULL),
(54, 'employee_list', '2022-05-11 12:06:46', '2023-06-22 03:06:50', NULL),
(55, 'fitness', '2022-05-11 12:20:57', '2023-06-22 03:06:50', NULL),
(56, 'add_fitness', '2022-05-11 12:21:57', '2023-06-22 03:06:50', NULL),
(57, 'fitness_list', '2022-05-11 12:22:37', '2023-06-22 03:06:50', NULL),
(58, 'fleet', '2022-05-11 12:23:52', '2023-06-22 03:06:50', NULL),
(59, 'add_fleet', '2022-05-11 12:24:46', '2023-06-22 03:06:50', NULL),
(60, 'fleet_list', '2022-05-11 12:25:47', '2023-06-22 03:06:50', NULL),
(61, 'add_vehicle', '2022-05-11 12:26:57', '2023-06-22 03:06:50', NULL),
(62, 'vehicle_list', '2022-05-11 12:30:48', '2023-06-22 03:06:50', NULL),
(63, 'frontend', '2022-05-11 12:32:27', '2023-06-22 03:06:50', NULL),
(64, 'sectionone', '2022-05-11 12:34:23', '2023-06-22 03:06:50', NULL),
(65, 'sectiontwo', '2022-05-11 12:35:40', '2023-06-22 03:06:50', NULL),
(66, 'sectiontwo_two', '2022-05-11 12:36:50', '2023-06-22 03:06:50', NULL),
(67, 'how_works_add', '2022-05-11 12:41:10', '2023-06-22 03:06:50', NULL),
(68, 'how_works_list', '2022-05-11 12:52:58', '2023-06-22 03:06:50', NULL),
(69, 'sectionthree', '2022-05-11 12:54:27', '2023-06-22 03:06:50', NULL),
(70, 'sectionfour', '2022-05-11 12:58:24', '2023-06-22 03:06:50', NULL),
(71, 'sectionfour_four', '2022-05-11 13:04:21', '2023-06-22 03:06:50', NULL),
(72, 'add_comment', '2022-05-11 13:05:19', '2023-06-22 03:06:50', NULL),
(73, 'comment_list', '2022-05-11 13:05:59', '2023-06-22 03:06:50', NULL),
(74, 'sectionfive', '2022-05-11 13:11:16', '2023-06-22 03:06:50', NULL),
(75, 'sectionsix', '2022-05-11 13:11:57', '2023-06-22 03:06:50', NULL),
(76, 'sectionseven', '2022-05-11 13:40:29', '2023-06-22 03:06:50', NULL),
(77, 'footer', '2022-05-11 13:41:12', '2023-06-22 03:06:50', NULL),
(78, 'blog', '2022-05-11 13:46:04', '2023-06-22 03:06:50', NULL),
(79, 'add_blog', '2022-05-11 13:51:41', '2023-06-22 03:06:50', NULL),
(80, 'blog_list', '2022-05-11 13:52:20', '2023-06-22 03:06:50', NULL),
(81, 'social_media', '2022-05-11 13:56:45', '2023-06-22 03:06:50', NULL),
(82, 'add_social_media', '2022-05-11 13:57:35', '2023-06-22 03:06:50', NULL),
(83, 'social_media_list', '2022-05-11 13:58:18', '2023-06-22 03:06:50', NULL),
(84, 'page', '2022-05-11 13:59:36', '2023-06-22 03:06:50', NULL),
(85, 'about', '2022-05-11 14:00:18', '2023-06-22 03:06:50', NULL),
(86, 'privacy', '2022-05-11 14:01:17', '2023-06-22 03:06:50', NULL),
(87, 'terms_conditions', '2022-05-11 14:03:32', '2023-06-22 03:06:50', NULL),
(88, 'faq', '2022-05-11 14:04:26', '2023-06-22 03:06:50', NULL),
(89, 'page_setup', '2022-05-11 14:05:29', '2023-06-22 03:06:50', NULL),
(90, 'add_question', '2022-05-11 14:06:52', '2023-06-22 03:06:50', NULL),
(91, 'question_list', '2022-05-11 14:07:29', '2023-06-22 03:06:50', NULL),
(92, 'inquiry', '2022-05-11 14:10:17', '2023-06-22 03:06:50', NULL),
(93, 'language', '2022-05-11 14:21:50', '2023-06-22 03:06:50', NULL),
(94, 'language_add', '2022-05-11 14:23:19', '2023-06-22 03:06:50', NULL),
(95, 'language_list', '2022-05-11 14:25:02', '2023-06-22 03:06:50', NULL),
(96, 'passanger', '2022-05-11 14:30:37', '2023-06-22 03:06:50', NULL),
(97, 'add_passanger', '2022-05-11 14:38:17', '2023-06-22 03:06:50', NULL),
(98, 'passanger_list', '2022-05-11 14:39:08', '2023-06-22 03:06:50', NULL),
(99, 'inquiry_list', '2022-05-11 14:41:17', '2023-06-22 03:06:50', NULL),
(100, 'payment_method', '2022-05-11 14:46:22', '2023-06-22 03:06:50', NULL),
(101, 'add_payment_method', '2022-05-11 14:47:14', '2023-06-22 03:06:50', NULL),
(102, 'payment_method_list', '2022-05-11 14:48:01', '2023-06-22 03:06:50', NULL),
(103, 'payment_gateway', '2022-05-11 14:50:55', '2023-06-22 03:06:50', NULL),
(104, 'add_payment_gateway', '2022-05-11 14:51:48', '2023-06-22 03:06:50', NULL),
(105, 'payment_gateway_list', '2022-05-11 14:52:54', '2023-06-22 03:06:50', NULL),
(106, 'rating', '2022-05-11 14:57:06', '2023-06-22 03:06:50', NULL),
(107, 'rating_list', '2022-05-11 14:57:56', '2023-06-22 03:06:50', NULL),
(108, 'report', '2022-05-11 15:01:17', '2023-06-22 03:06:50', NULL),
(109, 'ticket_sold', '2022-05-11 15:02:04', '2023-06-22 03:06:50', NULL),
(110, 'agent_report', '2022-05-11 15:03:15', '2023-06-22 03:06:50', NULL),
(111, 'role', '2022-05-11 15:04:57', '2023-06-22 03:06:50', NULL),
(112, 'add_role', '2022-05-11 15:05:33', '2023-06-22 03:06:50', NULL),
(113, 'role_list', '2022-05-11 15:06:26', '2023-06-22 03:06:50', NULL),
(114, 'add_menu', '2022-05-11 15:07:11', '2023-06-22 03:06:50', NULL),
(115, 'menu_list', '2022-05-11 15:08:15', '2023-06-22 03:06:50', NULL),
(116, 'add_permission', '2022-05-11 15:09:09', '2023-06-22 03:06:50', NULL),
(117, 'permission_list', '2022-05-11 15:09:22', '2023-06-22 03:06:50', NULL),
(118, 'tax', '2022-05-11 15:12:30', '2023-06-22 03:06:50', NULL),
(119, 'add_tax', '2022-05-11 15:13:01', '2023-06-22 03:06:50', NULL),
(120, 'tax_list', '2022-05-11 15:13:36', '2023-06-22 03:06:50', NULL),
(121, 'facility', '2022-05-11 15:14:30', '2023-06-22 03:06:50', NULL),
(122, 'add_facility', '2022-05-11 15:14:50', '2023-06-22 03:06:50', NULL),
(123, 'facility_list', '2022-05-11 15:15:01', '2023-06-22 03:06:50', NULL),
(124, 'trip', '2022-05-11 15:28:28', '2023-06-22 03:06:50', NULL),
(125, 'add_trip', '2022-05-11 15:28:35', '2023-06-22 03:06:50', NULL),
(126, 'trip_list', '2022-05-11 15:28:42', '2023-06-22 03:06:50', NULL),
(127, 'website_setting', '2022-05-11 15:52:50', '2023-06-22 03:06:50', NULL),
(128, 'webconfig', '2022-05-11 15:53:44', '2023-06-22 03:06:50', NULL),
(129, 'db_backup', '2022-05-11 15:54:31', '2023-06-22 03:06:50', NULL),
(130, 'edit', '2022-05-15 11:58:14', '2023-06-22 03:06:50', NULL),
(131, 'add', '2022-05-15 11:58:21', '2023-06-22 03:06:50', NULL),
(132, 'delete', '2022-05-15 11:58:33', '2023-06-22 03:06:50', NULL),
(133, 'update', '2022-05-15 11:58:43', '2023-06-22 03:06:50', NULL),
(134, 'show', '2022-05-15 15:54:49', '2023-06-22 03:06:50', NULL),
(135, 'details', '2022-05-15 17:53:44', '2023-06-22 03:06:50', NULL),
(136, 'cookies', '2022-05-16 14:21:36', '2023-06-22 03:06:50', NULL),
(137, 'add_language_string', '2022-05-16 16:16:54', '2023-06-22 03:06:50', NULL),
(138, 'language_string_list', '2022-05-16 16:17:49', '2023-06-22 03:06:50', NULL),
(139, 'paypal', '2022-05-17 10:08:04', '2023-06-22 03:06:50', NULL),
(140, 'paystack', '2022-05-17 10:08:17', '2023-06-22 03:06:50', NULL),
(141, 'stripe', '2022-05-17 10:08:25', '2023-06-22 03:06:50', NULL),
(142, 'razorpay', '2022-05-17 10:08:31', '2023-06-22 03:06:50', NULL),
(143, 'software_settings', '2022-05-18 13:02:50', '2023-06-22 03:06:50', NULL),
(144, 'web_settings', '2022-05-18 13:03:03', '2023-06-22 03:06:50', NULL),
(145, 'email', '2022-05-19 12:03:31', '2023-06-22 03:06:50', NULL),
(146, 'subscribe_list', '2022-05-22 11:05:57', '2023-06-22 03:06:50', NULL),
(147, 'first_name', '2022-05-24 14:16:20', '2023-06-22 03:06:50', NULL),
(148, 'last_name', '2022-05-24 14:16:53', '2023-06-22 03:06:50', NULL),
(149, 'mobile', '2022-05-24 14:18:14', '2023-06-22 03:06:50', NULL),
(150, 'blood', '2022-05-24 14:20:27', '2023-06-22 03:06:50', NULL),
(151, 'id_type', '2022-05-24 14:20:46', '2023-06-22 03:06:50', NULL),
(152, 'nid_passport_number', '2022-05-24 14:21:09', '2023-06-22 03:06:50', NULL),
(153, 'commission', '2022-05-24 14:21:28', '2023-06-22 03:06:50', NULL),
(154, 'country_name', '2022-05-24 14:26:29', '2023-06-22 03:06:50', NULL),
(155, 'city_name', '2022-05-24 14:26:51', '2023-06-22 03:06:50', NULL),
(156, 'zip_code', '2022-05-24 14:27:25', '2023-06-22 03:06:50', NULL),
(157, 'address', '2022-05-24 14:29:09', '2023-06-22 03:06:50', NULL),
(158, 'nid_passport_image', '2022-05-24 14:29:23', '2023-06-22 03:06:50', NULL),
(159, 'profile_image', '2022-05-24 14:30:49', '2023-06-22 03:06:50', NULL),
(160, 'submit', '2022-05-24 14:31:14', '2023-06-22 03:06:50', NULL),
(161, 'name', '2022-05-24 15:19:54', '2023-06-22 03:06:50', NULL),
(162, 'action', '2022-05-24 15:21:28', '2023-06-22 03:06:50', NULL),
(163, 'to', '2022-05-24 15:51:38', '2023-06-22 03:06:50', NULL),
(164, 'from', '2022-05-24 15:52:02', '2023-06-22 03:06:50', NULL),
(165, 'date', '2022-05-24 16:22:03', '2023-06-22 03:06:50', NULL),
(166, 'booking', '2022-05-24 16:22:57', '2023-06-22 03:06:50', NULL),
(167, 'id', '2022-05-24 16:23:15', '2023-06-22 03:06:50', NULL),
(168, 'income', '2022-05-24 16:23:35', '2023-06-22 03:06:50', NULL),
(169, 'expense', '2022-05-24 16:24:08', '2023-06-22 03:06:50', NULL),
(170, 'total_balance', '2022-05-24 16:24:42', '2023-06-22 03:06:50', NULL),
(171, 'tranjection_type', '2022-05-24 19:04:49', '2023-06-22 03:06:50', NULL),
(172, 'amount', '2022-05-24 19:05:11', '2023-06-22 03:06:50', NULL),
(173, 'tranjection', '2022-05-24 19:05:42', '2023-06-22 03:06:50', NULL),
(174, 'create_by', '2022-05-24 19:06:06', '2023-06-22 03:06:50', NULL),
(175, 'type', '2022-05-24 19:19:07', '2023-06-22 03:06:50', NULL),
(176, 'document', '2022-05-24 19:29:39', '2023-06-22 03:06:50', NULL),
(177, 'subject', '2022-05-24 20:16:07', '2023-06-22 03:06:50', NULL),
(178, 'message', '2022-05-24 20:22:49', '2023-06-22 03:06:50', NULL),
(179, 'nid_passport', '2022-05-24 20:54:52', '2023-06-22 03:06:50', NULL),
(180, 'main', '2022-05-25 17:40:39', '2023-06-22 03:06:50', NULL),
(181, 'sub', '2022-05-25 17:40:49', '2023-06-22 03:06:50', NULL),
(182, 'ticket', '2022-05-25 17:54:42', '2023-06-22 03:06:50', NULL),
(183, 'journey', '2022-05-25 17:55:31', '2023-06-22 03:06:50', NULL),
(184, 'total', '2022-05-25 17:55:56', '2023-06-22 03:06:50', NULL),
(185, 'seat', '2022-05-25 17:56:13', '2023-06-22 03:06:50', NULL),
(186, 'number', '2022-05-25 17:56:30', '2023-06-22 03:06:50', NULL),
(187, 'price', '2022-05-25 17:56:49', '2023-06-22 03:06:50', NULL),
(188, 'discount', '2022-05-25 17:57:32', '2023-06-22 03:06:50', NULL),
(189, 'cancel', '2022-05-25 18:01:05', '2023-06-22 03:06:50', NULL),
(190, 'refund', '2022-05-25 18:01:17', '2023-06-22 03:06:50', NULL),
(191, 'sold', '2022-05-25 18:01:25', '2023-06-22 03:06:50', NULL),
(192, 'rate', '2022-05-26 11:04:15', '2023-06-22 03:06:50', NULL),
(193, 'pick_up', '2022-05-26 11:35:17', '2023-06-22 03:06:50', NULL),
(194, 'drop', '2022-05-26 11:35:23', '2023-06-22 03:06:50', NULL),
(195, 'search', '2022-05-26 12:02:39', '2023-06-22 03:06:50', NULL),
(196, 'book', '2022-05-26 12:04:44', '2023-06-22 03:06:50', NULL),
(197, 'hr', '2022-05-26 12:12:30', '2023-06-22 03:06:50', NULL),
(198, 'km', '2022-05-26 12:12:35', '2023-06-22 03:06:50', NULL),
(199, 'fair', '2022-05-26 12:13:05', '2023-06-22 03:06:50', NULL),
(200, 'process_book', '2022-05-26 12:13:53', '2023-06-22 03:06:50', NULL),
(201, 'no_trip_found', '2022-05-26 12:15:52', '2023-06-22 03:06:50', NULL),
(202, 'payment', '2022-05-26 13:36:37', '2023-06-22 03:06:50', NULL),
(203, 'paid', '2022-05-26 13:36:48', '2023-06-22 03:06:50', NULL),
(204, 'partial', '2022-05-26 13:37:43', '2023-06-22 03:06:50', NULL),
(205, 'unpaid', '2022-05-26 13:37:52', '2023-06-22 03:06:50', NULL),
(206, 'pay', '2022-05-26 13:38:37', '2023-06-22 03:06:50', NULL),
(207, 'apply', '2022-05-26 13:38:49', '2023-06-22 03:06:50', NULL),
(208, 'status', '2022-05-26 13:45:27', '2023-06-22 03:06:50', NULL),
(209, 'stand', '2022-05-26 15:13:37', '2023-06-22 03:06:50', NULL),
(210, 'make', '2022-05-26 15:17:29', '2023-06-22 03:06:50', NULL),
(211, 'invoice', '2022-05-26 15:17:40', '2023-06-22 03:06:50', NULL),
(212, 'fee', '2022-05-26 16:10:13', '2023-06-22 03:06:50', NULL),
(213, 'minutes', '2022-05-26 17:29:34', '2023-06-22 03:06:50', NULL),
(214, 'max_time_cancel', '2022-05-26 17:35:44', '2023-06-22 03:06:50', NULL),
(215, 'assiatant', '2022-05-26 18:18:09', '2023-06-22 03:06:50', NULL),
(216, 'driver', '2022-05-26 18:18:14', '2023-06-22 03:06:50', NULL),
(217, 'pos', '2022-05-29 11:37:38', '2023-06-22 03:06:50', NULL),
(218, 'due', '2022-05-29 11:50:10', '2023-06-22 03:06:50', NULL),
(219, 'special', '2022-05-29 11:52:39', '2023-06-22 03:06:50', NULL),
(220, 'end', '2022-05-29 11:54:26', '2023-06-22 03:06:50', NULL),
(221, 'start', '2022-05-29 11:54:38', '2023-06-22 03:06:50', NULL),
(222, 'adult', '2022-05-29 12:05:01', '2023-06-22 03:06:50', NULL),
(223, 'child', '2022-05-29 12:06:18', '2023-06-22 03:06:50', NULL),
(224, 'grand', '2022-05-29 12:14:00', '2023-06-22 03:06:50', NULL),
(225, 'time', '2022-05-29 13:06:33', '2023-06-22 03:06:50', NULL),
(226, 'layout', '2022-05-29 14:50:08', '2023-06-22 03:06:50', NULL),
(227, 'last_seat_check', '2022-05-29 14:50:41', '2023-06-22 03:06:50', NULL),
(228, 'luggage', '2022-05-29 14:51:25', '2023-06-22 03:06:50', NULL),
(229, 'service', '2022-05-29 14:51:34', '2023-06-22 03:06:50', NULL),
(230, 'active', '2022-05-29 14:51:43', '2023-06-22 03:06:50', NULL),
(231, 'disable', '2022-05-29 14:51:51', '2023-06-22 03:06:50', NULL),
(232, 'no', '2022-05-29 16:03:43', '2023-06-22 03:06:50', NULL),
(233, 'reg', '2022-05-29 16:03:54', '2023-06-22 03:06:50', NULL),
(234, 'eng', '2022-05-29 16:04:05', '2023-06-22 03:06:50', NULL),
(235, 'model', '2022-05-29 16:04:15', '2023-06-22 03:06:50', NULL),
(236, 'chassis', '2022-05-29 16:04:44', '2023-06-22 03:06:50', NULL),
(237, 'woner', '2022-05-29 16:04:59', '2023-06-22 03:06:50', NULL),
(238, 'company', '2022-05-29 16:05:39', '2023-06-22 03:06:50', NULL),
(239, 'bus', '2022-05-29 16:10:43', '2023-06-22 03:06:50', NULL),
(240, 'image', '2022-05-29 16:10:55', '2023-06-22 03:06:50', NULL),
(241, 'assign', '2022-05-29 17:16:01', '2023-06-22 03:06:50', NULL),
(242, 'milage', '2022-05-29 18:04:53', '2023-06-22 03:06:50', NULL),
(243, 'vehicle', '2022-05-29 18:05:21', '2023-06-22 03:06:50', NULL),
(244, 'comment', '2022-05-29 19:16:41', '2023-06-22 03:06:50', NULL),
(245, 'filter', '2022-05-29 20:32:25', '2023-06-22 03:06:50', NULL),
(246, 'value', '2022-05-29 20:52:02', '2023-06-22 03:06:50', NULL),
(247, 'condition', '2022-05-29 21:15:11', '2023-06-22 03:06:50', NULL),
(248, 'code', '2022-05-29 21:18:27', '2023-06-22 03:06:50', NULL),
(249, 'test', '2022-05-30 11:48:57', '2023-06-22 03:06:50', NULL),
(250, 'live', '2022-05-30 11:49:06', '2023-06-22 03:06:50', NULL),
(251, 'secret', '2022-05-30 11:54:40', '2023-06-22 03:06:50', NULL),
(252, 'client', '2022-05-30 11:58:38', '2023-06-22 03:06:50', NULL),
(253, 'key', '2022-05-30 12:01:09', '2023-06-22 03:06:50', NULL),
(254, 'merchant', '2022-05-30 12:05:42', '2023-06-22 03:06:50', NULL),
(255, 'environment', '2022-05-30 12:25:27', '2023-06-22 03:06:50', NULL),
(256, 'private', '2022-05-30 12:50:42', '2023-06-22 03:06:50', NULL),
(257, 'stoppage', '2022-05-30 16:24:50', '2023-06-22 03:06:50', NULL),
(258, 'children', '2022-05-30 16:26:09', '2023-06-22 03:06:50', NULL),
(259, 'distance', '2022-05-30 16:26:31', '2023-06-22 03:06:50', NULL),
(260, 'approximate', '2022-05-30 16:28:13', '2023-06-22 03:06:50', NULL),
(261, 'weekend', '2022-05-30 16:28:29', '2023-06-22 03:06:50', NULL),
(262, 'assistant', '2022-05-30 16:31:39', '2023-06-22 03:06:50', NULL),
(263, 'section', '2022-05-30 17:14:09', '2023-06-22 03:06:50', NULL),
(264, 'point', '2022-05-30 17:16:37', '2023-06-22 03:06:50', NULL),
(265, 'boarding', '2022-05-30 17:18:16', '2023-06-22 03:06:50', NULL),
(266, 'select', '2022-05-30 17:21:22', '2023-06-22 03:06:50', NULL),
(267, 'dropping', '2022-05-30 17:23:52', '2023-06-22 03:06:50', NULL),
(268, 'list', '2022-05-30 17:46:02', '2023-06-22 03:06:50', NULL),
(269, 'hour', '2022-05-31 15:56:05', '2023-06-22 03:06:50', NULL),
(270, 'show_in_home_page', '2022-05-31 18:47:32', '2023-06-22 03:06:50', NULL),
(271, 'password', '2022-06-01 11:25:11', '2023-06-22 03:06:50', NULL),
(272, 'repassword', '2022-06-01 11:54:47', '2023-06-22 03:06:50', NULL),
(273, 'oldpassword', '2022-06-01 11:54:54', '2023-06-22 03:06:50', NULL),
(274, 'newpassword', '2022-06-01 11:56:12', '2023-06-22 03:06:50', NULL),
(275, 'profile', '2022-06-01 14:28:06', '2023-06-22 03:06:50', NULL),
(276, 'settings', '2022-06-01 14:28:18', '2023-06-22 03:06:50', NULL),
(277, 'menu', '2022-06-01 16:56:40', '2023-06-22 03:06:50', NULL),
(278, 'url', '2022-06-01 16:56:57', '2023-06-22 03:06:50', NULL),
(279, 'module', '2022-06-01 16:57:25', '2023-06-22 03:06:50', NULL),
(280, 'title', '2022-06-01 16:59:26', '2023-06-22 03:06:50', NULL),
(281, 'parent', '2022-06-01 17:36:44', '2023-06-22 03:06:50', NULL),
(282, 'permission', '2022-06-01 17:53:09', '2023-06-22 03:06:50', NULL),
(283, 'read', '2022-06-01 18:02:45', '2023-06-22 03:06:50', NULL),
(284, 'create', '2022-06-01 18:02:58', '2023-06-22 03:06:50', NULL),
(285, 'protocol', '2022-06-01 18:33:52', '2023-06-22 03:06:50', NULL),
(286, 'host', '2022-06-01 18:34:14', '2023-06-22 03:06:50', NULL),
(287, 'smtp', '2022-06-01 18:34:22', '2023-06-22 03:06:50', NULL),
(288, 'user', '2022-06-01 18:34:37', '2023-06-22 03:06:50', NULL),
(289, 'port', '2022-06-01 18:34:52', '2023-06-22 03:06:50', NULL),
(290, 'crypto', '2022-06-01 18:35:05', '2023-06-22 03:06:50', NULL),
(291, 'link', '2022-06-01 18:51:07', '2023-06-22 03:06:50', NULL),
(292, 'picture', '2022-06-01 18:51:16', '2023-06-22 03:06:50', NULL),
(293, 'logo_picture', '2022-06-01 19:09:15', '2023-06-22 03:06:50', NULL),
(294, 'inclusive', '2022-06-02 09:40:28', '2023-06-22 03:06:50', NULL),
(295, 'exclusive', '2022-06-02 09:40:37', '2023-06-22 03:06:50', NULL),
(296, 'favicon', '2022-06-02 09:41:05', '2023-06-22 03:06:50', NULL),
(297, 'header', '2022-06-02 09:43:09', '2023-06-22 03:06:50', NULL),
(298, 'button', '2022-06-02 09:43:22', '2023-06-22 03:06:50', NULL),
(299, 'text', '2022-06-02 09:43:31', '2023-06-22 03:06:50', NULL),
(300, 'color', '2022-06-02 09:43:41', '2023-06-22 03:06:50', NULL),
(301, 'hover', '2022-06-02 09:43:52', '2023-06-22 03:06:50', NULL),
(302, 'background', '2022-06-02 09:44:01', '2023-06-22 03:06:50', NULL),
(303, 'zone', '2022-06-02 09:44:41', '2023-06-22 03:06:50', NULL),
(304, 'country', '2022-06-02 09:44:54', '2023-06-22 03:06:50', NULL),
(305, 'font', '2022-06-02 09:45:05', '2023-06-22 03:06:50', NULL),
(306, 'max_ticket_for_one_person', '2022-06-02 09:45:36', '2023-06-22 03:06:50', NULL),
(307, 'copy_right_text', '2022-06-02 09:45:51', '2023-06-22 03:06:50', NULL),
(308, 'app', '2022-06-02 09:46:06', '2023-06-22 03:06:50', NULL),
(309, 'logo', '2022-06-02 09:46:30', '2023-06-22 03:06:50', NULL),
(310, 'family', '2022-06-02 09:52:59', '2023-06-22 03:06:50', NULL),
(312, 'check_out', '2022-06-02 11:45:24', '2023-06-22 03:06:50', NULL),
(313, 'string', '2022-06-02 12:09:52', '2023-06-22 03:06:50', NULL),
(314, 'description', '2022-06-02 13:05:57', '2023-06-22 03:06:50', NULL),
(315, 'how_it_works', '2022-06-02 13:10:46', '2023-06-22 03:06:50', NULL),
(316, 'question', '2022-06-02 14:36:12', '2023-06-22 03:06:50', NULL),
(317, 'answer', '2022-06-02 14:36:37', '2023-06-22 03:06:50', NULL),
(318, 'upload', '2022-06-02 14:53:35', '2023-06-22 03:06:50', NULL),
(319, 'by', '2022-06-02 14:53:46', '2023-06-22 03:06:50', NULL),
(320, 'serial', '2022-06-02 14:54:01', '2023-06-22 03:06:50', NULL),
(321, 'designation', '2022-06-02 17:34:39', '2023-06-22 03:06:50', NULL),
(322, 'one', '2022-06-05 09:26:16', '2023-06-22 03:06:50', NULL),
(323, 'two', '2022-06-05 09:26:30', '2023-06-22 03:06:50', NULL),
(324, 'hide', '2022-06-05 09:29:08', '2023-06-22 03:06:50', NULL),
(325, 'office_open_time', '2022-06-05 10:01:28', '2023-06-22 03:06:50', NULL),
(326, 'contact_number', '2022-06-05 10:02:34', '2023-06-22 03:06:50', NULL),
(327, 'customer', '2022-06-26 17:37:07', '2023-06-22 03:06:50', NULL),
(328, 'currency', '2022-07-25 10:31:31', '2023-06-22 03:06:50', NULL),
(329, 'today', '2022-07-28 09:54:57', '2023-06-22 03:06:50', NULL),
(330, 'income_expense', '2022-07-28 09:56:41', '2023-06-22 03:06:50', NULL),
(331, 'yearly', '2022-07-28 09:57:03', '2023-06-22 03:06:50', NULL),
(332, 'weekly', '2022-07-28 09:57:19', '2023-06-22 03:06:50', NULL),
(333, 'monthly', '2022-07-28 09:57:55', '2023-06-22 03:06:50', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` char(49) DEFAULT NULL,
  `lngcode` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `languages`
--

INSERT INTO `languages` (`id`, `name`, `lngcode`) VALUES
(1, 'English', 'en'),
(2, 'Afar', 'aa'),
(3, 'Abkhazian', 'ab'),
(4, 'Afrikaans', 'af'),
(5, 'Amharic', 'am'),
(6, 'Arabic', 'ar'),
(7, 'Assamese', 'as'),
(8, 'Aymara', 'ay'),
(9, 'Azerbaijani', 'az'),
(10, 'Bashkir', 'ba'),
(11, 'Belarusian', 'be'),
(12, 'Bulgarian', 'bg'),
(13, 'Bihari', 'bh'),
(14, 'Bislama', 'bi'),
(15, 'Bangla', 'bn'),
(16, 'Tibetan', 'bo'),
(17, 'Breton', 'br'),
(18, 'Catalan', 'ca'),
(19, 'Corsican', 'co'),
(20, 'Czech', 'cs'),
(21, 'Welsh', 'cy'),
(22, 'Danish', 'da'),
(23, 'German', 'de'),
(24, 'Bhutani', 'dz'),
(25, 'Greek', 'el'),
(26, 'Esperanto', 'eo'),
(27, 'Spanish', 'es'),
(28, 'Estonian', 'et'),
(29, 'Basque', 'eu'),
(30, 'Persian', 'fa'),
(31, 'Finnish', 'fi'),
(32, 'Fiji', 'fj'),
(33, 'Faeroese', 'fo'),
(34, 'French', 'fr'),
(35, 'Frisian', 'fy'),
(36, 'Irish', 'ga'),
(37, 'Scots/Gaelic', 'gd'),
(38, 'Galician', 'gl'),
(39, 'Guarani', 'gn'),
(40, 'Gujarati', 'gu'),
(41, 'Hausa', 'ha'),
(42, 'Hindi', 'hi'),
(43, 'Croatian', 'hr'),
(44, 'Hungarian', 'hu'),
(45, 'Armenian', 'hy'),
(46, 'Interlingua', 'ia'),
(47, 'Interlingue', 'ie'),
(48, 'Inupiak', 'ik'),
(49, 'Indonesian', 'in'),
(50, 'Icelandic', 'is'),
(51, 'Italian', 'it'),
(52, 'Hebrew', 'iw'),
(53, 'Japanese', 'ja'),
(54, 'Yiddish', 'ji'),
(55, 'Javanese', 'jw'),
(56, 'Georgian', 'ka'),
(57, 'Kazakh', 'kk'),
(58, 'Greenlandic', 'kl'),
(59, 'Cambodian', 'km'),
(60, 'Kannada', 'kn'),
(61, 'Korean', 'ko'),
(62, 'Kashmiri', 'ks'),
(63, 'Kurdish', 'ku'),
(64, 'Kirghiz', 'ky'),
(65, 'Latin', 'la'),
(66, 'Lingala', 'ln'),
(67, 'Laothian', 'lo'),
(68, 'Lithuanian', 'lt'),
(69, 'Latvian/Lettish', 'lv'),
(70, 'Malagasy', 'mg'),
(71, 'Maori', 'mi'),
(72, 'Macedonian', 'mk'),
(73, 'Malayalam', 'ml'),
(74, 'Mongolian', 'mn'),
(75, 'Moldavian', 'mo'),
(76, 'Marathi', 'mr'),
(77, 'Malay', 'ms'),
(78, 'Maltese', 'mt'),
(79, 'Burmese', 'my'),
(80, 'Nauru', 'na'),
(81, 'Nepali', 'ne'),
(82, 'Dutch', 'nl'),
(83, 'Norwegian', 'no'),
(84, 'Occitan', 'oc'),
(85, '(Afan)/Oromoor/Oriya', 'om'),
(86, 'Punjabi', 'pa'),
(87, 'Polish', 'pl'),
(88, 'Pashto/Pushto', 'ps'),
(89, 'Portuguese', 'pt'),
(90, 'Quechua', 'qu'),
(91, 'Rhaeto-Romance', 'rm'),
(92, 'Kirundi', 'rn'),
(93, 'Romanian', 'ro'),
(94, 'Russian', 'ru'),
(95, 'Kinyarwanda', 'rw'),
(96, 'Sanskrit', 'sa'),
(97, 'Sindhi', 'sd'),
(98, 'Sangro', 'sg'),
(99, 'Serbo-Croatian', 'sh'),
(100, 'Singhalese', 'si'),
(101, 'Slovak', 'sk'),
(102, 'Slovenian', 'sl'),
(103, 'Samoan', 'sm'),
(104, 'Shona', 'sn'),
(105, 'Somali', 'so'),
(106, 'Albanian', 'sq'),
(107, 'Serbian', 'sr'),
(108, 'Siswati', 'ss'),
(109, 'Sesotho', 'st'),
(110, 'Sundanese', 'su'),
(111, 'Swedish', 'sv'),
(112, 'Swahili', 'sw'),
(113, 'Tamil', 'ta'),
(114, 'Telugu', 'te'),
(115, 'Tajik', 'tg'),
(116, 'Thai', 'th'),
(117, 'Tigrinya', 'ti'),
(118, 'Turkmen', 'tk'),
(119, 'Tagalog', 'tl'),
(120, 'Setswana', 'tn'),
(121, 'Tonga', 'to'),
(122, 'Turkish', 'tr'),
(123, 'Tsonga', 'ts'),
(124, 'Tatar', 'tt'),
(125, 'Twi', 'tw'),
(126, 'Ukrainian', 'uk'),
(127, 'Urdu', 'ur'),
(128, 'Uzbek', 'uz'),
(129, 'Vietnamese', 'vi'),
(130, 'Volapuk', 'vo'),
(131, 'Wolof', 'wo'),
(132, 'Xhosa', 'xh'),
(133, 'Yoruba', 'yo'),
(134, 'Chinese', 'zh'),
(135, 'Zulu', 'zu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lngstngvalues`
--

CREATE TABLE `lngstngvalues` (
  `id` int(10) UNSIGNED NOT NULL,
  `string_id` int(10) UNSIGNED NOT NULL,
  `localize_id` int(10) UNSIGNED NOT NULL,
  `value` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `lngstngvalues`
--

INSERT INTO `lngstngvalues` (`id`, `string_id`, `localize_id`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(73, 19, 1, 'Refund List', '2022-03-13 16:30:39', '2023-06-22 03:06:51', NULL),
(74, 18, 1, 'Book Time List', '2022-03-13 16:30:39', '2023-06-22 03:06:51', NULL),
(75, 17, 1, 'Book Time', '2022-03-13 16:30:39', '2023-06-22 03:06:51', NULL),
(76, 16, 1, 'Dashboard', '2022-03-13 16:30:39', '2023-06-22 03:06:51', NULL),
(82, 20, 1, 'Agent', '2022-03-13 16:39:28', '2023-06-22 03:06:51', NULL),
(90, 21, 1, 'Ticket Booking', '2022-03-15 11:40:41', '2023-06-22 03:06:51', NULL),
(93, 22, 1, 'Book Ticket', '2022-03-15 12:55:25', '2023-06-22 03:06:51', NULL),
(96, 23, 1, 'Ticket List ', '2022-03-15 13:06:30', '2023-06-22 03:06:51', NULL),
(99, 24, 1, 'Journey List', '2022-03-15 13:06:45', '2023-06-22 03:06:51', NULL),
(102, 25, 1, 'Cancel List', '2022-03-15 13:07:04', '2023-06-22 03:06:51', NULL),
(105, 26, 1, 'Add Booking Time', '2022-03-15 13:10:29', '2023-06-22 03:06:51', NULL),
(108, 27, 1, 'Boooking Time List', '2022-03-15 13:11:43', '2023-06-22 03:06:51', NULL),
(111, 28, 1, 'Add Agent', '2022-03-15 17:26:19', '2023-06-22 03:06:51', NULL),
(114, 29, 1, 'Agent List', '2022-03-15 17:26:38', '2023-06-22 03:06:51', NULL),
(117, 30, 1, 'Account', '2022-03-15 17:33:29', '2023-06-22 03:06:51', NULL),
(120, 31, 1, 'Account Chart', '2022-03-15 17:33:50', '2023-06-22 03:06:51', NULL),
(123, 32, 1, 'Account Transaction', '2022-03-15 17:34:47', '2023-06-22 03:06:51', NULL),
(126, 33, 1, 'Transaction List', '2022-03-15 17:34:59', '2023-06-22 03:06:51', NULL),
(129, 34, 1, 'Location', '2022-03-15 17:52:20', '2023-06-22 03:06:51', NULL),
(132, 35, 1, 'Add Location', '2022-03-15 17:52:30', '2023-06-22 03:06:51', NULL),
(135, 36, 1, 'Location List', '2022-03-15 17:52:44', '2023-06-22 03:06:51', NULL),
(138, 37, 1, 'Add Stand', '2022-03-15 17:52:56', '2023-06-22 03:06:51', NULL),
(141, 38, 1, 'Stand List', '2022-03-15 17:53:11', '2023-06-22 03:06:51', NULL),
(144, 39, 1, 'Schedule', '2022-03-15 18:35:06', '2023-06-22 03:06:51', NULL),
(147, 40, 1, 'Add Schedule', '2022-03-15 18:35:15', '2023-06-22 03:06:51', NULL),
(150, 41, 1, 'Schedule List', '2022-03-15 18:35:27', '2023-06-22 03:06:51', NULL),
(153, 42, 1, 'Add Schedule Filter', '2022-03-15 18:35:47', '2023-06-22 03:06:51', NULL),
(156, 43, 1, 'Schedule Filter List', '2022-03-15 18:36:03', '2023-06-22 03:06:51', NULL),
(159, 44, 1, 'Advertisement', '2022-05-11 11:32:37', '2023-06-22 03:06:51', NULL),
(162, 45, 1, 'Add Advertisement', '2022-05-11 11:34:11', '2023-06-22 03:06:51', NULL),
(165, 46, 1, 'Advertisement List', '2022-05-11 11:35:45', '2023-06-22 03:06:51', NULL),
(168, 47, 1, 'Coupon', '2022-05-11 11:46:10', '2023-06-22 03:06:51', NULL),
(171, 48, 1, 'Add Coupon', '2022-05-11 11:47:04', '2023-06-22 03:06:51', NULL),
(174, 49, 1, 'Coupon List', '2022-05-11 11:48:38', '2023-06-22 03:06:51', NULL),
(177, 50, 1, 'Employee', '2022-05-11 11:52:32', '2023-06-22 03:06:51', NULL),
(180, 51, 1, 'Add Employee Type', '2022-05-11 11:58:05', '2023-06-22 03:06:51', NULL),
(183, 52, 1, 'Employee Type List', '2022-05-11 12:03:29', '2023-06-22 03:06:51', NULL),
(186, 53, 1, 'Add Employee', '2022-05-11 12:05:54', '2023-06-22 03:06:51', NULL),
(189, 54, 1, 'Employee List', '2022-05-11 12:06:46', '2023-06-22 03:06:51', NULL),
(192, 55, 1, 'Fitness', '2022-05-11 12:20:57', '2023-06-22 03:06:51', NULL),
(195, 56, 1, 'Add Fitness', '2022-05-11 12:21:57', '2023-06-22 03:06:51', NULL),
(198, 57, 1, 'Fitness List', '2022-05-11 12:22:37', '2023-06-22 03:06:51', NULL),
(201, 58, 1, 'Fleet', '2022-05-11 12:23:52', '2023-06-22 03:06:51', NULL),
(204, 59, 1, 'Add Fleet', '2022-05-11 12:24:46', '2023-06-22 03:06:51', NULL),
(207, 60, 1, 'Fleet List', '2022-05-11 12:25:47', '2023-06-22 03:06:51', NULL),
(210, 61, 1, 'Add Vehicle', '2022-05-11 12:26:57', '2023-06-22 03:06:51', NULL),
(213, 62, 1, 'Vehicle List', '2022-05-11 12:30:48', '2023-06-22 03:06:51', NULL),
(216, 63, 1, 'Frontend', '2022-05-11 12:32:27', '2023-06-22 03:06:51', NULL),
(219, 64, 1, 'Section One', '2022-05-11 12:34:23', '2023-06-22 03:06:51', NULL),
(222, 65, 1, 'Section Two', '2022-05-11 12:35:40', '2023-06-22 03:06:51', NULL),
(225, 66, 1, 'Section Two  Content', '2022-05-11 12:36:50', '2023-06-22 03:06:51', NULL),
(228, 67, 1, 'Add How Work', '2022-05-11 12:41:10', '2023-06-22 03:06:51', NULL),
(231, 68, 1, 'How Work List', '2022-05-11 12:52:58', '2023-06-22 03:06:51', NULL),
(234, 69, 1, 'Section Three', '2022-05-11 12:54:27', '2023-06-22 03:06:51', NULL),
(237, 70, 1, 'Section Four', '2022-05-11 12:58:24', '2023-06-22 03:06:51', NULL),
(240, 71, 1, 'Section Four Content', '2022-05-11 13:04:21', '2023-06-22 03:06:51', NULL),
(243, 72, 1, 'Add Comment', '2022-05-11 13:05:19', '2023-06-22 03:06:51', NULL),
(246, 73, 1, 'Comment List', '2022-05-11 13:05:59', '2023-06-22 03:06:51', NULL),
(249, 74, 1, 'Section Five', '2022-05-11 13:11:16', '2023-06-22 03:06:51', NULL),
(252, 75, 1, 'Section Six', '2022-05-11 13:11:57', '2023-06-22 03:06:51', NULL),
(255, 76, 1, 'Section Seven', '2022-05-11 13:40:29', '2023-06-22 03:06:51', NULL),
(258, 77, 1, 'Footer', '2022-05-11 13:41:12', '2023-06-22 03:06:51', NULL),
(261, 78, 1, 'Blog', '2022-05-11 13:46:04', '2023-06-22 03:06:51', NULL),
(264, 79, 1, 'Add Blog', '2022-05-11 13:51:41', '2023-06-22 03:06:51', NULL),
(267, 80, 1, 'Blog List', '2022-05-11 13:52:20', '2023-06-22 03:06:51', NULL),
(270, 81, 1, 'Social Media ', '2022-05-11 13:56:45', '2023-06-22 03:06:51', NULL),
(273, 82, 1, 'Add Social Media ', '2022-05-11 13:57:35', '2023-06-22 03:06:51', NULL),
(276, 83, 1, 'Social Media List', '2022-05-11 13:58:18', '2023-06-22 03:06:51', NULL),
(279, 84, 1, 'Page', '2022-05-11 13:59:36', '2023-06-22 03:06:51', NULL),
(282, 85, 1, 'About', '2022-05-11 14:00:18', '2023-06-22 03:06:51', NULL),
(285, 86, 1, 'Privacy', '2022-05-11 14:01:17', '2023-06-22 03:06:51', NULL),
(288, 87, 1, 'Terms & Conditions', '2022-05-11 14:03:32', '2023-06-22 03:06:51', NULL),
(291, 88, 1, 'Faq', '2022-05-11 14:04:26', '2023-06-22 03:06:51', NULL),
(294, 89, 1, 'Page Setup', '2022-05-11 14:05:29', '2023-06-22 03:06:51', NULL),
(297, 90, 1, 'Add Question', '2022-05-11 14:06:52', '2023-06-22 03:06:51', NULL),
(300, 91, 1, 'Question List', '2022-05-11 14:07:29', '2023-06-22 03:06:51', NULL),
(303, 92, 1, 'Inquiry', '2022-05-11 14:10:17', '2023-06-22 03:06:51', NULL),
(306, 93, 1, 'Language', '2022-05-11 14:21:50', '2023-06-22 03:06:51', NULL),
(309, 94, 1, 'Add Language', '2022-05-11 14:23:19', '2023-06-22 03:06:51', NULL),
(312, 95, 1, 'Language List', '2022-05-11 14:25:02', '2023-06-22 03:06:51', NULL),
(315, 96, 1, 'Passenger', '2022-05-11 14:30:37', '2023-06-22 03:06:51', NULL),
(318, 97, 1, 'Add Passenger', '2022-05-11 14:38:17', '2023-06-22 03:06:51', NULL),
(321, 98, 1, 'Passenger List', '2022-05-11 14:39:08', '2023-06-22 03:06:51', NULL),
(324, 99, 1, 'Inquiry List', '2022-05-11 14:41:17', '2023-06-22 03:06:51', NULL),
(327, 100, 1, 'Payment Method', '2022-05-11 14:46:22', '2023-06-22 03:06:51', NULL),
(330, 101, 1, 'Add Payment Method', '2022-05-11 14:47:14', '2023-06-22 03:06:51', NULL),
(333, 102, 1, 'Payment Method List', '2022-05-11 14:48:01', '2023-06-22 03:06:51', NULL),
(336, 103, 1, 'Payment Gateway', '2022-05-11 14:50:55', '2023-06-22 03:06:51', NULL),
(339, 104, 1, 'Add Payment Gateway', '2022-05-11 14:51:48', '2023-06-22 03:06:51', NULL),
(342, 105, 1, 'Payment Gateway List', '2022-05-11 14:52:54', '2023-06-22 03:06:51', NULL),
(345, 106, 1, 'Rating', '2022-05-11 14:57:06', '2023-06-22 03:06:51', NULL),
(348, 107, 1, 'Rating List', '2022-05-11 14:57:56', '2023-06-22 03:06:51', NULL),
(351, 108, 1, 'Report', '2022-05-11 15:01:17', '2023-06-22 03:06:51', NULL),
(354, 109, 1, 'Ticket Sold', '2022-05-11 15:02:04', '2023-06-22 03:06:51', NULL),
(357, 110, 1, 'Agent Report', '2022-05-11 15:03:15', '2023-06-22 03:06:51', NULL),
(360, 111, 1, 'Role', '2022-05-11 15:04:57', '2023-06-22 03:06:51', NULL),
(363, 112, 1, 'Add Role', '2022-05-11 15:05:33', '2023-06-22 03:06:51', NULL),
(366, 113, 1, 'Role List ', '2022-05-11 15:06:26', '2023-06-22 03:06:51', NULL),
(369, 114, 1, 'add Menu', '2022-05-11 15:07:11', '2023-06-22 03:06:51', NULL),
(372, 115, 1, 'Menu List', '2022-05-11 15:08:15', '2023-06-22 03:06:51', NULL),
(375, 116, 1, 'Add Permission ', '2022-05-11 15:09:09', '2023-06-22 03:06:51', NULL),
(378, 117, 1, 'Permission List', '2022-05-11 15:09:22', '2023-06-22 03:06:51', NULL),
(381, 118, 1, 'Tax', '2022-05-11 15:12:30', '2023-06-22 03:06:51', NULL),
(384, 119, 1, 'Add Tax', '2022-05-11 15:13:01', '2023-06-22 03:06:51', NULL),
(387, 120, 1, 'Tax List', '2022-05-11 15:13:36', '2023-06-22 03:06:51', NULL),
(390, 121, 1, 'Facility', '2022-05-11 15:14:30', '2023-06-22 03:06:51', NULL),
(393, 122, 1, 'Add Facility', '2022-05-11 15:14:50', '2023-06-22 03:06:51', NULL),
(396, 123, 1, 'Facility List', '2022-05-11 15:15:01', '2023-06-22 03:06:51', NULL),
(399, 124, 1, 'Trip ', '2022-05-11 15:28:28', '2023-06-22 03:06:51', NULL),
(402, 125, 1, 'Add Trip ', '2022-05-11 15:28:35', '2023-06-22 03:06:51', NULL),
(405, 126, 1, 'Trip List', '2022-05-11 15:28:42', '2023-06-22 03:06:51', NULL),
(408, 127, 1, 'Website Setting', '2022-05-11 15:52:50', '2023-06-22 03:06:51', NULL),
(411, 128, 1, 'Webconfig', '2022-05-11 15:53:44', '2023-06-22 03:06:51', NULL),
(414, 129, 1, 'Db Backup', '2022-05-11 15:54:31', '2023-06-22 03:06:51', NULL),
(417, 130, 1, 'Edit', '2022-05-15 11:58:14', '2023-06-22 03:06:51', NULL),
(420, 131, 1, 'add', '2022-05-15 11:58:21', '2023-06-22 03:06:51', NULL),
(423, 132, 1, 'delete', '2022-05-15 11:58:33', '2023-06-22 03:06:51', NULL),
(426, 133, 1, 'update', '2022-05-15 11:58:43', '2023-06-22 03:06:51', NULL),
(429, 134, 1, 'show', '2022-05-15 15:54:49', '2023-06-22 03:06:51', NULL),
(432, 135, 1, 'Details', '2022-05-15 17:53:44', '2023-06-22 03:06:51', NULL),
(673, 135, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(674, 134, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(675, 133, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(676, 132, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(677, 131, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(678, 130, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(679, 129, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(680, 128, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(681, 127, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(682, 126, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(683, 125, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(684, 124, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(685, 123, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(686, 122, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(687, 121, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(688, 120, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(689, 119, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(690, 118, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(691, 117, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(692, 116, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(693, 115, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(694, 114, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(695, 113, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(696, 112, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(697, 111, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(698, 110, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(699, 109, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(700, 108, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(701, 107, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(702, 106, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(703, 105, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(704, 104, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(705, 103, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(706, 102, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(707, 101, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(708, 100, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(709, 99, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(710, 98, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(711, 97, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(712, 96, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(713, 95, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(714, 94, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(715, 93, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(716, 92, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(717, 91, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(718, 90, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(719, 89, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(720, 88, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(721, 87, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(722, 86, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(723, 85, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(724, 84, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(725, 83, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(726, 82, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(727, 81, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(728, 80, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(729, 79, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(730, 78, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(731, 77, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(732, 76, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(733, 75, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(734, 74, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(735, 73, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(736, 72, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(737, 71, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(738, 70, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(739, 69, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(740, 68, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(741, 67, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(742, 66, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(743, 65, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(744, 64, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(745, 63, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(746, 62, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(747, 61, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(748, 60, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(749, 59, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(750, 58, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(751, 57, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(752, 56, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(753, 55, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(754, 54, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(755, 53, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(756, 52, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(757, 51, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(758, 50, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(759, 49, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(760, 48, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(761, 47, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(762, 46, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(763, 45, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(764, 44, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(765, 43, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(766, 42, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(767, 41, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(768, 40, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(769, 39, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(770, 38, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(771, 37, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(772, 36, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(773, 35, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(774, 34, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(775, 33, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(776, 32, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(777, 31, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(778, 30, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(779, 29, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(780, 28, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(781, 27, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(782, 26, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(783, 25, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(784, 24, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(785, 23, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(786, 22, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(787, 21, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(788, 20, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(789, 19, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(790, 18, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(791, 17, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(792, 16, 6, NULL, '2022-05-16 13:36:29', '2023-06-22 03:06:51', NULL),
(793, 136, 6, NULL, '2022-05-16 14:21:36', '2023-06-22 03:06:51', NULL),
(794, 136, 1, 'Cookie', '2022-05-16 14:21:36', '2023-06-22 03:06:51', NULL),
(795, 137, 6, NULL, '2022-05-16 16:16:54', '2023-06-22 03:06:51', NULL),
(796, 137, 1, 'Add Language String', '2022-05-16 16:16:54', '2023-06-22 03:06:51', NULL),
(797, 138, 6, NULL, '2022-05-16 16:17:49', '2023-06-22 03:06:51', NULL),
(798, 138, 1, 'Language String List', '2022-05-16 16:17:49', '2023-06-22 03:06:51', NULL),
(799, 139, 6, NULL, '2022-05-17 10:08:04', '2023-06-22 03:06:51', NULL),
(800, 139, 1, 'Paypal', '2022-05-17 10:08:04', '2023-06-22 03:06:51', NULL),
(801, 140, 6, NULL, '2022-05-17 10:08:17', '2023-06-22 03:06:51', NULL),
(802, 140, 1, 'Paystack', '2022-05-17 10:08:17', '2023-06-22 03:06:51', NULL),
(803, 141, 6, '', '2022-05-17 10:08:25', '2023-06-22 03:06:51', NULL),
(804, 141, 1, 'Stripe', '2022-05-17 10:08:25', '2023-06-22 03:06:51', NULL),
(805, 142, 6, '', '2022-05-17 10:08:31', '2023-06-22 03:06:51', NULL),
(806, 142, 1, 'Razorpay', '2022-05-17 10:08:31', '2023-06-22 03:06:51', NULL),
(807, 143, 6, '', '2022-05-18 13:02:50', '2023-06-22 03:06:51', NULL),
(808, 143, 1, 'Software Settings', '2022-05-18 13:02:50', '2023-06-22 03:06:51', NULL),
(809, 144, 6, '', '2022-05-18 13:03:03', '2023-06-22 03:06:51', NULL),
(810, 144, 1, 'Web Settings', '2022-05-18 13:03:03', '2023-06-22 03:06:51', NULL),
(811, 145, 6, '', '2022-05-19 12:03:31', '2023-06-22 03:06:51', NULL),
(812, 145, 1, 'Email', '2022-05-19 12:03:31', '2023-06-22 03:06:51', NULL),
(813, 146, 6, '', '2022-05-22 11:05:57', '2023-06-22 03:06:51', NULL),
(814, 146, 1, 'Subscribe List', '2022-05-22 11:05:57', '2023-06-22 03:06:51', NULL),
(815, 147, 6, 'Prénom', '2022-05-24 14:16:20', '2023-06-22 03:06:51', NULL),
(816, 147, 1, 'First Name', '2022-05-24 14:16:20', '2023-06-22 03:06:51', NULL),
(817, 148, 6, '', '2022-05-24 14:16:53', '2023-06-22 03:06:51', NULL),
(818, 148, 1, 'Last Name', '2022-05-24 14:16:53', '2023-06-22 03:06:51', NULL),
(819, 149, 6, '', '2022-05-24 14:18:14', '2023-06-22 03:06:51', NULL),
(820, 149, 1, 'Mobile', '2022-05-24 14:18:14', '2023-06-22 03:06:51', NULL),
(821, 150, 6, '', '2022-05-24 14:20:27', '2023-06-22 03:06:51', NULL),
(822, 150, 1, 'BLood', '2022-05-24 14:20:27', '2023-06-22 03:06:51', NULL),
(823, 151, 6, NULL, '2022-05-24 14:20:46', '2023-06-22 03:06:51', NULL),
(824, 151, 1, 'Id Type', '2022-05-24 14:20:46', '2023-06-22 03:06:51', NULL),
(825, 152, 6, NULL, '2022-05-24 14:21:09', '2023-06-22 03:06:51', NULL),
(826, 152, 1, 'Nid/Passport Number', '2022-05-24 14:21:09', '2023-06-22 03:06:51', NULL),
(827, 153, 6, NULL, '2022-05-24 14:21:28', '2023-06-22 03:06:51', NULL),
(828, 153, 1, 'Commission', '2022-05-24 14:21:28', '2023-06-22 03:06:51', NULL),
(829, 154, 6, NULL, '2022-05-24 14:26:29', '2023-06-22 03:06:51', NULL),
(830, 154, 1, 'Country Name ', '2022-05-24 14:26:29', '2023-06-22 03:06:51', NULL),
(831, 155, 6, NULL, '2022-05-24 14:26:51', '2023-06-22 03:06:51', NULL),
(832, 155, 1, 'City Name', '2022-05-24 14:26:51', '2023-06-22 03:06:51', NULL),
(833, 156, 6, NULL, '2022-05-24 14:27:25', '2023-06-22 03:06:51', NULL),
(834, 156, 1, 'Zip Code', '2022-05-24 14:27:25', '2023-06-22 03:06:51', NULL),
(835, 157, 6, NULL, '2022-05-24 14:29:09', '2023-06-22 03:06:51', NULL),
(836, 157, 1, 'Address', '2022-05-24 14:29:09', '2023-06-22 03:06:51', NULL),
(837, 158, 6, NULL, '2022-05-24 14:29:23', '2023-06-22 03:06:51', NULL),
(838, 158, 1, 'Nid/Passport Image', '2022-05-24 14:29:23', '2023-06-22 03:06:51', NULL),
(839, 159, 6, NULL, '2022-05-24 14:30:49', '2023-06-22 03:06:51', NULL),
(840, 159, 1, 'Profile Image', '2022-05-24 14:30:49', '2023-06-22 03:06:51', NULL),
(841, 160, 6, NULL, '2022-05-24 14:31:14', '2023-06-22 03:06:51', NULL),
(842, 160, 1, 'Submit', '2022-05-24 14:31:14', '2023-06-22 03:06:51', NULL),
(843, 161, 6, NULL, '2022-05-24 15:19:54', '2023-06-22 03:06:51', NULL),
(844, 161, 1, 'Name', '2022-05-24 15:19:54', '2023-06-22 03:06:51', NULL),
(845, 162, 6, NULL, '2022-05-24 15:21:28', '2023-06-22 03:06:51', NULL),
(846, 162, 1, 'Action', '2022-05-24 15:21:28', '2023-06-22 03:06:51', NULL),
(847, 163, 6, NULL, '2022-05-24 15:51:38', '2023-06-22 03:06:51', NULL),
(848, 163, 1, 'To', '2022-05-24 15:51:38', '2023-06-22 03:06:51', NULL),
(849, 164, 6, NULL, '2022-05-24 15:52:02', '2023-06-22 03:06:51', NULL),
(850, 164, 1, 'From', '2022-05-24 15:52:02', '2023-06-22 03:06:51', NULL),
(851, 165, 6, NULL, '2022-05-24 16:22:03', '2023-06-22 03:06:51', NULL),
(852, 165, 1, 'Date', '2022-05-24 16:22:03', '2023-06-22 03:06:51', NULL),
(853, 166, 6, NULL, '2022-05-24 16:22:57', '2023-06-22 03:06:51', NULL),
(854, 166, 1, 'Booking', '2022-05-24 16:22:57', '2023-06-22 03:06:51', NULL),
(855, 167, 6, NULL, '2022-05-24 16:23:15', '2023-06-22 03:06:51', NULL),
(856, 167, 1, 'Id', '2022-05-24 16:23:15', '2023-06-22 03:06:51', NULL),
(857, 168, 6, NULL, '2022-05-24 16:23:35', '2023-06-22 03:06:51', NULL),
(858, 168, 1, 'Income', '2022-05-24 16:23:35', '2023-06-22 03:06:51', NULL),
(859, 169, 6, NULL, '2022-05-24 16:24:08', '2023-06-22 03:06:51', NULL),
(860, 169, 1, 'Expense', '2022-05-24 16:24:08', '2023-06-22 03:06:51', NULL),
(861, 170, 6, NULL, '2022-05-24 16:24:42', '2023-06-22 03:06:51', NULL),
(862, 170, 1, 'Total Balance', '2022-05-24 16:24:42', '2023-06-22 03:06:51', NULL),
(863, 171, 6, NULL, '2022-05-24 19:04:49', '2023-06-22 03:06:51', NULL),
(864, 171, 1, 'Transaction Type', '2022-05-24 19:04:49', '2023-06-22 03:06:51', NULL),
(865, 172, 6, NULL, '2022-05-24 19:05:11', '2023-06-22 03:06:51', NULL),
(866, 172, 1, 'Amount', '2022-05-24 19:05:11', '2023-06-22 03:06:51', NULL),
(867, 173, 6, NULL, '2022-05-24 19:05:42', '2023-06-22 03:06:51', NULL),
(868, 173, 1, 'Transaction', '2022-05-24 19:05:42', '2023-06-22 03:06:51', NULL),
(869, 174, 6, NULL, '2022-05-24 19:06:06', '2023-06-22 03:06:51', NULL),
(870, 174, 1, 'Create By', '2022-05-24 19:06:06', '2023-06-22 03:06:51', NULL),
(871, 175, 6, NULL, '2022-05-24 19:19:07', '2023-06-22 03:06:51', NULL),
(872, 175, 1, 'Type', '2022-05-24 19:19:07', '2023-06-22 03:06:51', NULL),
(873, 176, 6, NULL, '2022-05-24 19:29:39', '2023-06-22 03:06:51', NULL),
(874, 176, 1, 'Document', '2022-05-24 19:29:39', '2023-06-22 03:06:51', NULL),
(875, 177, 6, NULL, '2022-05-24 20:16:07', '2023-06-22 03:06:51', NULL),
(876, 177, 1, 'Subject', '2022-05-24 20:16:07', '2023-06-22 03:06:51', NULL),
(877, 178, 6, NULL, '2022-05-24 20:22:49', '2023-06-22 03:06:51', NULL),
(878, 178, 1, 'Message', '2022-05-24 20:22:49', '2023-06-22 03:06:51', NULL),
(879, 179, 6, NULL, '2022-05-24 20:54:52', '2023-06-22 03:06:51', NULL),
(880, 179, 1, 'Nid/Passport', '2022-05-24 20:54:52', '2023-06-22 03:06:51', NULL),
(881, 180, 6, NULL, '2022-05-25 17:40:39', '2023-06-22 03:06:51', NULL),
(882, 180, 1, 'Main', '2022-05-25 17:40:39', '2023-06-22 03:06:51', NULL),
(883, 181, 6, NULL, '2022-05-25 17:40:49', '2023-06-22 03:06:51', NULL),
(884, 181, 1, 'Sub', '2022-05-25 17:40:49', '2023-06-22 03:06:51', NULL),
(885, 182, 6, NULL, '2022-05-25 17:54:42', '2023-06-22 03:06:51', NULL),
(886, 182, 1, 'Ticket', '2022-05-25 17:54:42', '2023-06-22 03:06:51', NULL),
(887, 183, 6, NULL, '2022-05-25 17:55:31', '2023-06-22 03:06:51', NULL),
(888, 183, 1, 'Journey', '2022-05-25 17:55:31', '2023-06-22 03:06:51', NULL),
(889, 184, 6, NULL, '2022-05-25 17:55:56', '2023-06-22 03:06:51', NULL),
(890, 184, 1, 'Total', '2022-05-25 17:55:56', '2023-06-22 03:06:51', NULL),
(891, 185, 6, NULL, '2022-05-25 17:56:13', '2023-06-22 03:06:51', NULL),
(892, 185, 1, 'Seat', '2022-05-25 17:56:13', '2023-06-22 03:06:51', NULL),
(893, 186, 6, NULL, '2022-05-25 17:56:30', '2023-06-22 03:06:51', NULL),
(894, 186, 1, 'Number', '2022-05-25 17:56:30', '2023-06-22 03:06:51', NULL),
(895, 187, 6, NULL, '2022-05-25 17:56:49', '2023-06-22 03:06:51', NULL),
(896, 187, 1, 'Price', '2022-05-25 17:56:49', '2023-06-22 03:06:51', NULL),
(897, 188, 6, NULL, '2022-05-25 17:57:32', '2023-06-22 03:06:51', NULL),
(898, 188, 1, 'Discount', '2022-05-25 17:57:32', '2023-06-22 03:06:51', NULL),
(899, 189, 6, NULL, '2022-05-25 18:01:05', '2023-06-22 03:06:51', NULL),
(900, 189, 1, 'Cancel', '2022-05-25 18:01:05', '2023-06-22 03:06:51', NULL),
(901, 190, 6, NULL, '2022-05-25 18:01:17', '2023-06-22 03:06:51', NULL),
(902, 190, 1, 'Refund', '2022-05-25 18:01:17', '2023-06-22 03:06:51', NULL),
(903, 191, 6, NULL, '2022-05-25 18:01:25', '2023-06-22 03:06:51', NULL),
(904, 191, 1, 'Sold', '2022-05-25 18:01:25', '2023-06-22 03:06:51', NULL),
(905, 192, 6, NULL, '2022-05-26 11:04:15', '2023-06-22 03:06:51', NULL),
(906, 192, 1, 'Rate', '2022-05-26 11:04:15', '2023-06-22 03:06:51', NULL),
(907, 193, 6, NULL, '2022-05-26 11:35:17', '2023-06-22 03:06:51', NULL),
(908, 193, 1, 'Pick Up', '2022-05-26 11:35:17', '2023-06-22 03:06:51', NULL),
(909, 194, 6, NULL, '2022-05-26 11:35:23', '2023-06-22 03:06:51', NULL),
(910, 194, 1, 'Drop', '2022-05-26 11:35:23', '2023-06-22 03:06:51', NULL),
(911, 195, 6, NULL, '2022-05-26 12:02:39', '2023-06-22 03:06:51', NULL),
(912, 195, 1, 'Search', '2022-05-26 12:02:39', '2023-06-22 03:06:51', NULL),
(913, 196, 6, NULL, '2022-05-26 12:04:44', '2023-06-22 03:06:51', NULL),
(914, 196, 1, 'Book', '2022-05-26 12:04:44', '2023-06-22 03:06:51', NULL),
(915, 197, 6, NULL, '2022-05-26 12:12:30', '2023-06-22 03:06:51', NULL),
(916, 197, 1, 'Hr', '2022-05-26 12:12:30', '2023-06-22 03:06:51', NULL),
(917, 198, 6, NULL, '2022-05-26 12:12:35', '2023-06-22 03:06:51', NULL),
(918, 198, 1, 'Km', '2022-05-26 12:12:35', '2023-06-22 03:06:51', NULL),
(919, 199, 6, NULL, '2022-05-26 12:13:05', '2023-06-22 03:06:51', NULL),
(920, 199, 1, 'Fair', '2022-05-26 12:13:05', '2023-06-22 03:06:51', NULL),
(921, 200, 6, NULL, '2022-05-26 12:13:53', '2023-06-22 03:06:51', NULL),
(922, 200, 1, 'Process to Book', '2022-05-26 12:13:53', '2023-06-22 03:06:51', NULL),
(923, 201, 6, NULL, '2022-05-26 12:15:52', '2023-06-22 03:06:51', NULL),
(924, 201, 1, 'No Trip Found', '2022-05-26 12:15:52', '2023-06-22 03:06:51', NULL),
(925, 202, 6, NULL, '2022-05-26 13:36:37', '2023-06-22 03:06:51', NULL),
(926, 202, 1, 'Payment', '2022-05-26 13:36:37', '2023-06-22 03:06:51', NULL),
(927, 203, 6, NULL, '2022-05-26 13:36:48', '2023-06-22 03:06:51', NULL),
(928, 203, 1, 'Paid', '2022-05-26 13:36:48', '2023-06-22 03:06:51', NULL),
(929, 204, 6, NULL, '2022-05-26 13:37:43', '2023-06-22 03:06:51', NULL),
(930, 204, 1, 'Partial', '2022-05-26 13:37:43', '2023-06-22 03:06:51', NULL),
(931, 205, 6, NULL, '2022-05-26 13:37:52', '2023-06-22 03:06:51', NULL),
(932, 205, 1, 'Unpaid', '2022-05-26 13:37:52', '2023-06-22 03:06:51', NULL),
(933, 206, 6, NULL, '2022-05-26 13:38:37', '2023-06-22 03:06:51', NULL),
(934, 206, 1, 'Pay', '2022-05-26 13:38:37', '2023-06-22 03:06:51', NULL),
(935, 207, 6, NULL, '2022-05-26 13:38:49', '2023-06-22 03:06:51', NULL),
(936, 207, 1, 'Apply', '2022-05-26 13:38:49', '2023-06-22 03:06:51', NULL),
(937, 208, 6, NULL, '2022-05-26 13:45:27', '2023-06-22 03:06:51', NULL),
(938, 208, 1, 'Status', '2022-05-26 13:45:27', '2023-06-22 03:06:51', NULL),
(939, 209, 6, NULL, '2022-05-26 15:13:37', '2023-06-22 03:06:51', NULL),
(940, 209, 1, 'Stand', '2022-05-26 15:13:37', '2023-06-22 03:06:51', NULL),
(941, 210, 6, NULL, '2022-05-26 15:17:29', '2023-06-22 03:06:51', NULL),
(942, 210, 1, 'Make', '2022-05-26 15:17:29', '2023-06-22 03:06:51', NULL),
(943, 211, 6, NULL, '2022-05-26 15:17:40', '2023-06-22 03:06:51', NULL),
(944, 211, 1, 'Invoice', '2022-05-26 15:17:40', '2023-06-22 03:06:51', NULL),
(945, 212, 6, NULL, '2022-05-26 16:10:13', '2023-06-22 03:06:51', NULL),
(946, 212, 1, 'Fee', '2022-05-26 16:10:13', '2023-06-22 03:06:51', NULL),
(947, 213, 6, NULL, '2022-05-26 17:29:34', '2023-06-22 03:06:51', NULL),
(948, 213, 1, 'Minutes', '2022-05-26 17:29:34', '2023-06-22 03:06:51', NULL),
(949, 214, 6, NULL, '2022-05-26 17:35:44', '2023-06-22 03:06:51', NULL),
(950, 214, 1, 'Max time For Cancel Unpaid Ticket', '2022-05-26 17:35:44', '2023-06-22 03:06:51', NULL),
(951, 215, 6, NULL, '2022-05-26 18:18:09', '2023-06-22 03:06:51', NULL),
(952, 215, 1, 'Assistant', '2022-05-26 18:18:09', '2023-06-22 03:06:51', NULL),
(953, 216, 6, NULL, '2022-05-26 18:18:14', '2023-06-22 03:06:51', NULL),
(954, 216, 1, 'Driver', '2022-05-26 18:18:14', '2023-06-22 03:06:51', NULL),
(955, 217, 6, NULL, '2022-05-29 11:37:38', '2023-06-22 03:06:51', NULL),
(956, 217, 1, 'Pos', '2022-05-29 11:37:38', '2023-06-22 03:06:51', NULL),
(957, 218, 6, NULL, '2022-05-29 11:50:10', '2023-06-22 03:06:51', NULL),
(958, 218, 1, 'Due', '2022-05-29 11:50:10', '2023-06-22 03:06:51', NULL),
(959, 219, 6, NULL, '2022-05-29 11:52:39', '2023-06-22 03:06:51', NULL),
(960, 219, 1, 'Special', '2022-05-29 11:52:39', '2023-06-22 03:06:51', NULL),
(961, 220, 6, NULL, '2022-05-29 11:54:26', '2023-06-22 03:06:51', NULL),
(962, 220, 1, 'End', '2022-05-29 11:54:26', '2023-06-22 03:06:51', NULL),
(963, 221, 6, NULL, '2022-05-29 11:54:38', '2023-06-22 03:06:51', NULL),
(964, 221, 1, 'Start', '2022-05-29 11:54:38', '2023-06-22 03:06:51', NULL),
(965, 222, 6, NULL, '2022-05-29 12:05:01', '2023-06-22 03:06:51', NULL),
(966, 222, 1, 'Adult', '2022-05-29 12:05:01', '2023-06-22 03:06:51', NULL),
(967, 223, 6, NULL, '2022-05-29 12:06:18', '2023-06-22 03:06:51', NULL),
(968, 223, 1, 'Child', '2022-05-29 12:06:18', '2023-06-22 03:06:51', NULL),
(969, 224, 6, NULL, '2022-05-29 12:14:00', '2023-06-22 03:06:51', NULL),
(970, 224, 1, 'Grand', '2022-05-29 12:14:00', '2023-06-22 03:06:51', NULL),
(971, 225, 6, NULL, '2022-05-29 13:06:33', '2023-06-22 03:06:51', NULL),
(972, 225, 1, 'Time', '2022-05-29 13:06:33', '2023-06-22 03:06:51', NULL),
(973, 226, 6, NULL, '2022-05-29 14:50:08', '2023-06-22 03:06:51', NULL),
(974, 226, 1, 'Layout', '2022-05-29 14:50:08', '2023-06-22 03:06:51', NULL),
(975, 227, 6, NULL, '2022-05-29 14:50:41', '2023-06-22 03:06:51', NULL),
(976, 227, 1, 'Last Seat Check', '2022-05-29 14:50:41', '2023-06-22 03:06:51', NULL),
(977, 228, 6, NULL, '2022-05-29 14:51:25', '2023-06-22 03:06:51', NULL),
(978, 228, 1, 'Luggage', '2022-05-29 14:51:25', '2023-06-22 03:06:51', NULL),
(979, 229, 6, NULL, '2022-05-29 14:51:34', '2023-06-22 03:06:51', NULL),
(980, 229, 1, 'Service', '2022-05-29 14:51:34', '2023-06-22 03:06:51', NULL),
(981, 230, 6, NULL, '2022-05-29 14:51:43', '2023-06-22 03:06:51', NULL),
(982, 230, 1, 'Active', '2022-05-29 14:51:43', '2023-06-22 03:06:51', NULL),
(983, 231, 6, NULL, '2022-05-29 14:51:51', '2023-06-22 03:06:51', NULL),
(984, 231, 1, 'Disable', '2022-05-29 14:51:51', '2023-06-22 03:06:51', NULL),
(985, 232, 6, NULL, '2022-05-29 16:03:43', '2023-06-22 03:06:51', NULL),
(986, 232, 1, 'No', '2022-05-29 16:03:43', '2023-06-22 03:06:51', NULL),
(987, 233, 6, NULL, '2022-05-29 16:03:54', '2023-06-22 03:06:51', NULL),
(988, 233, 1, 'Reg', '2022-05-29 16:03:54', '2023-06-22 03:06:51', NULL),
(989, 234, 6, NULL, '2022-05-29 16:04:05', '2023-06-22 03:06:51', NULL),
(990, 234, 1, 'Eng', '2022-05-29 16:04:05', '2023-06-22 03:06:51', NULL),
(991, 235, 6, NULL, '2022-05-29 16:04:15', '2023-06-22 03:06:51', NULL),
(992, 235, 1, 'Model', '2022-05-29 16:04:15', '2023-06-22 03:06:51', NULL),
(993, 236, 6, NULL, '2022-05-29 16:04:44', '2023-06-22 03:06:51', NULL),
(994, 236, 1, 'Chassis', '2022-05-29 16:04:44', '2023-06-22 03:06:51', NULL),
(995, 237, 6, NULL, '2022-05-29 16:04:59', '2023-06-22 03:06:51', NULL),
(996, 237, 1, 'Owner', '2022-05-29 16:04:59', '2023-06-22 03:06:51', NULL),
(997, 238, 6, NULL, '2022-05-29 16:05:39', '2023-06-22 03:06:51', NULL),
(998, 238, 1, 'Company', '2022-05-29 16:05:39', '2023-06-22 03:06:51', NULL),
(999, 239, 6, NULL, '2022-05-29 16:10:43', '2023-06-22 03:06:51', NULL),
(1000, 239, 1, 'Bus', '2022-05-29 16:10:43', '2023-06-22 03:06:51', NULL),
(1001, 240, 6, NULL, '2022-05-29 16:10:55', '2023-06-22 03:06:51', NULL),
(1002, 240, 1, 'Image', '2022-05-29 16:10:55', '2023-06-22 03:06:51', NULL),
(1003, 241, 6, NULL, '2022-05-29 17:16:01', '2023-06-22 03:06:51', NULL),
(1004, 241, 1, 'Assign', '2022-05-29 17:16:01', '2023-06-22 03:06:51', NULL),
(1005, 242, 6, NULL, '2022-05-29 18:04:53', '2023-06-22 03:06:51', NULL),
(1006, 242, 1, 'Milage', '2022-05-29 18:04:53', '2023-06-22 03:06:51', NULL),
(1007, 243, 6, NULL, '2022-05-29 18:05:21', '2023-06-22 03:06:51', NULL),
(1008, 243, 1, 'Vehicle', '2022-05-29 18:05:21', '2023-06-22 03:06:51', NULL),
(1009, 244, 6, NULL, '2022-05-29 19:16:41', '2023-06-22 03:06:51', NULL),
(1010, 244, 1, 'Comment', '2022-05-29 19:16:41', '2023-06-22 03:06:51', NULL),
(1011, 245, 6, NULL, '2022-05-29 20:32:25', '2023-06-22 03:06:51', NULL),
(1012, 245, 1, 'Filter', '2022-05-29 20:32:25', '2023-06-22 03:06:51', NULL),
(1013, 246, 6, NULL, '2022-05-29 20:52:02', '2023-06-22 03:06:51', NULL),
(1014, 246, 1, 'Value', '2022-05-29 20:52:02', '2023-06-22 03:06:51', NULL),
(1015, 247, 6, NULL, '2022-05-29 21:15:11', '2023-06-22 03:06:51', NULL),
(1016, 247, 1, 'Condition', '2022-05-29 21:15:11', '2023-06-22 03:06:51', NULL),
(1017, 248, 6, NULL, '2022-05-29 21:18:27', '2023-06-22 03:06:51', NULL),
(1018, 248, 1, 'Code', '2022-05-29 21:18:27', '2023-06-22 03:06:51', NULL),
(1019, 249, 6, NULL, '2022-05-30 11:48:57', '2023-06-22 03:06:51', NULL),
(1020, 249, 1, 'Test', '2022-05-30 11:48:57', '2023-06-22 03:06:51', NULL),
(1021, 250, 6, NULL, '2022-05-30 11:49:06', '2023-06-22 03:06:51', NULL),
(1022, 250, 1, 'Live', '2022-05-30 11:49:06', '2023-06-22 03:06:51', NULL),
(1023, 251, 6, NULL, '2022-05-30 11:54:40', '2023-06-22 03:06:51', NULL),
(1024, 251, 1, 'Secret ', '2022-05-30 11:54:40', '2023-06-22 03:06:51', NULL),
(1025, 252, 6, NULL, '2022-05-30 11:58:38', '2023-06-22 03:06:51', NULL),
(1026, 252, 1, 'Client', '2022-05-30 11:58:38', '2023-06-22 03:06:51', NULL),
(1027, 253, 6, NULL, '2022-05-30 12:01:09', '2023-06-22 03:06:51', NULL),
(1028, 253, 1, 'Key', '2022-05-30 12:01:09', '2023-06-22 03:06:51', NULL),
(1029, 254, 6, NULL, '2022-05-30 12:05:42', '2023-06-22 03:06:51', NULL),
(1030, 254, 1, 'Merchant', '2022-05-30 12:05:42', '2023-06-22 03:06:51', NULL),
(1031, 255, 6, NULL, '2022-05-30 12:25:27', '2023-06-22 03:06:51', NULL),
(1032, 255, 1, 'Environment', '2022-05-30 12:25:27', '2023-06-22 03:06:51', NULL),
(1033, 256, 6, NULL, '2022-05-30 12:50:42', '2023-06-22 03:06:51', NULL),
(1034, 256, 1, 'Private ', '2022-05-30 12:50:42', '2023-06-22 03:06:51', NULL),
(1035, 257, 6, NULL, '2022-05-30 16:24:50', '2023-06-22 03:06:51', NULL),
(1036, 257, 1, 'Sroppage', '2022-05-30 16:24:50', '2023-06-22 03:06:51', NULL),
(1037, 258, 6, NULL, '2022-05-30 16:26:09', '2023-06-22 03:06:51', NULL),
(1038, 258, 1, 'Children', '2022-05-30 16:26:09', '2023-06-22 03:06:51', NULL),
(1039, 259, 6, NULL, '2022-05-30 16:26:31', '2023-06-22 03:06:51', NULL),
(1040, 259, 1, 'Distance', '2022-05-30 16:26:31', '2023-06-22 03:06:51', NULL),
(1041, 260, 6, NULL, '2022-05-30 16:28:13', '2023-06-22 03:06:51', NULL),
(1042, 260, 1, 'Approximate', '2022-05-30 16:28:13', '2023-06-22 03:06:51', NULL),
(1043, 261, 6, NULL, '2022-05-30 16:28:29', '2023-06-22 03:06:51', NULL),
(1044, 261, 1, 'Weekend', '2022-05-30 16:28:29', '2023-06-22 03:06:51', NULL),
(1045, 262, 6, NULL, '2022-05-30 16:31:39', '2023-06-22 03:06:51', NULL),
(1046, 262, 1, 'assistant', '2022-05-30 16:31:39', '2023-06-22 03:06:51', NULL),
(1047, 263, 6, NULL, '2022-05-30 17:14:09', '2023-06-22 03:06:51', NULL),
(1048, 263, 1, 'Section', '2022-05-30 17:14:09', '2023-06-22 03:06:51', NULL),
(1049, 264, 6, NULL, '2022-05-30 17:16:37', '2023-06-22 03:06:51', NULL),
(1050, 264, 1, 'Point', '2022-05-30 17:16:37', '2023-06-22 03:06:51', NULL),
(1051, 265, 6, NULL, '2022-05-30 17:18:16', '2023-06-22 03:06:51', NULL),
(1052, 265, 1, 'Boarding', '2022-05-30 17:18:16', '2023-06-22 03:06:51', NULL),
(1053, 266, 6, NULL, '2022-05-30 17:21:22', '2023-06-22 03:06:51', NULL),
(1054, 266, 1, 'Select', '2022-05-30 17:21:22', '2023-06-22 03:06:51', NULL),
(1055, 267, 6, NULL, '2022-05-30 17:23:52', '2023-06-22 03:06:51', NULL),
(1056, 267, 1, 'Dropping', '2022-05-30 17:23:52', '2023-06-22 03:06:51', NULL),
(1057, 268, 6, NULL, '2022-05-30 17:46:02', '2023-06-22 03:06:51', NULL),
(1058, 268, 1, 'List', '2022-05-30 17:46:02', '2023-06-22 03:06:51', NULL),
(1059, 269, 6, NULL, '2022-05-31 15:56:05', '2023-06-22 03:06:51', NULL),
(1060, 269, 1, 'Hour', '2022-05-31 15:56:05', '2023-06-22 03:06:51', NULL),
(1061, 270, 6, NULL, '2022-05-31 18:47:32', '2023-06-22 03:06:51', NULL),
(1062, 270, 1, 'Show In Home Page', '2022-05-31 18:47:32', '2023-06-22 03:06:51', NULL),
(1063, 271, 6, NULL, '2022-06-01 11:25:11', '2023-06-22 03:06:51', NULL),
(1064, 271, 1, 'Password', '2022-06-01 11:25:11', '2023-06-22 03:06:51', NULL),
(1065, 272, 6, NULL, '2022-06-01 11:54:47', '2023-06-22 03:06:51', NULL),
(1066, 272, 1, 'Re-Type Password', '2022-06-01 11:54:47', '2023-06-22 03:06:51', NULL),
(1067, 273, 6, NULL, '2022-06-01 11:54:54', '2023-06-22 03:06:51', NULL),
(1068, 273, 1, 'Old-Password', '2022-06-01 11:54:54', '2023-06-22 03:06:51', NULL),
(1069, 274, 6, NULL, '2022-06-01 11:56:12', '2023-06-22 03:06:51', NULL),
(1070, 274, 1, 'New-password', '2022-06-01 11:56:12', '2023-06-22 03:06:51', NULL),
(1071, 275, 6, NULL, '2022-06-01 14:28:06', '2023-06-22 03:06:51', NULL),
(1072, 275, 1, 'Profile', '2022-06-01 14:28:06', '2023-06-22 03:06:51', NULL),
(1073, 276, 6, NULL, '2022-06-01 14:28:18', '2023-06-22 03:06:51', NULL),
(1074, 276, 1, 'Settings', '2022-06-01 14:28:18', '2023-06-22 03:06:51', NULL),
(1075, 277, 6, NULL, '2022-06-01 16:56:40', '2023-06-22 03:06:51', NULL),
(1076, 277, 1, 'Menu', '2022-06-01 16:56:40', '2023-06-22 03:06:51', NULL),
(1077, 278, 6, NULL, '2022-06-01 16:56:57', '2023-06-22 03:06:51', NULL),
(1078, 278, 1, 'Url', '2022-06-01 16:56:57', '2023-06-22 03:06:51', NULL),
(1079, 279, 6, NULL, '2022-06-01 16:57:25', '2023-06-22 03:06:51', NULL),
(1080, 279, 1, 'Module', '2022-06-01 16:57:25', '2023-06-22 03:06:51', NULL),
(1081, 280, 6, NULL, '2022-06-01 16:59:26', '2023-06-22 03:06:51', NULL),
(1082, 280, 1, 'Title', '2022-06-01 16:59:26', '2023-06-22 03:06:51', NULL),
(1083, 281, 6, NULL, '2022-06-01 17:36:44', '2023-06-22 03:06:51', NULL),
(1084, 281, 1, 'Parent', '2022-06-01 17:36:44', '2023-06-22 03:06:51', NULL),
(1085, 282, 6, NULL, '2022-06-01 17:53:09', '2023-06-22 03:06:51', NULL),
(1086, 282, 1, 'Permission', '2022-06-01 17:53:09', '2023-06-22 03:06:51', NULL),
(1087, 283, 6, NULL, '2022-06-01 18:02:45', '2023-06-22 03:06:51', NULL),
(1088, 283, 1, 'Read', '2022-06-01 18:02:45', '2023-06-22 03:06:51', NULL),
(1089, 284, 6, NULL, '2022-06-01 18:02:58', '2023-06-22 03:06:51', NULL),
(1090, 284, 1, 'Create', '2022-06-01 18:02:58', '2023-06-22 03:06:51', NULL),
(1091, 285, 6, NULL, '2022-06-01 18:33:52', '2023-06-22 03:06:51', NULL),
(1092, 285, 1, 'Protocol', '2022-06-01 18:33:52', '2023-06-22 03:06:51', NULL),
(1093, 286, 6, NULL, '2022-06-01 18:34:14', '2023-06-22 03:06:51', NULL),
(1094, 286, 1, 'Host', '2022-06-01 18:34:14', '2023-06-22 03:06:51', NULL),
(1095, 287, 6, NULL, '2022-06-01 18:34:22', '2023-06-22 03:06:51', NULL),
(1096, 287, 1, 'Smtp', '2022-06-01 18:34:22', '2023-06-22 03:06:51', NULL),
(1097, 288, 6, NULL, '2022-06-01 18:34:37', '2023-06-22 03:06:51', NULL),
(1098, 288, 1, 'User', '2022-06-01 18:34:37', '2023-06-22 03:06:51', NULL),
(1099, 289, 6, NULL, '2022-06-01 18:34:52', '2023-06-22 03:06:51', NULL),
(1100, 289, 1, 'Port', '2022-06-01 18:34:52', '2023-06-22 03:06:51', NULL),
(1101, 290, 6, NULL, '2022-06-01 18:35:05', '2023-06-22 03:06:51', NULL),
(1102, 290, 1, 'Crypto', '2022-06-01 18:35:05', '2023-06-22 03:06:51', NULL),
(1103, 291, 6, NULL, '2022-06-01 18:51:07', '2023-06-22 03:06:51', NULL),
(1104, 291, 1, 'Link', '2022-06-01 18:51:07', '2023-06-22 03:06:51', NULL),
(1105, 292, 6, NULL, '2022-06-01 18:51:16', '2023-06-22 03:06:51', NULL),
(1106, 292, 1, 'Picture', '2022-06-01 18:51:16', '2023-06-22 03:06:51', NULL),
(1107, 293, 6, NULL, '2022-06-01 19:09:15', '2023-06-22 03:06:51', NULL),
(1108, 293, 1, 'Logo/Picture', '2022-06-01 19:09:15', '2023-06-22 03:06:51', NULL),
(1109, 294, 6, NULL, '2022-06-02 09:40:28', '2023-06-22 03:06:51', NULL),
(1110, 294, 1, 'Inclusive', '2022-06-02 09:40:28', '2023-06-22 03:06:51', NULL),
(1111, 295, 6, NULL, '2022-06-02 09:40:37', '2023-06-22 03:06:51', NULL),
(1112, 295, 1, 'Exclusive', '2022-06-02 09:40:37', '2023-06-22 03:06:51', NULL),
(1113, 296, 6, NULL, '2022-06-02 09:41:05', '2023-06-22 03:06:51', NULL),
(1114, 296, 1, 'Favicon', '2022-06-02 09:41:05', '2023-06-22 03:06:51', NULL),
(1115, 297, 6, NULL, '2022-06-02 09:43:09', '2023-06-22 03:06:51', NULL),
(1116, 297, 1, 'Header', '2022-06-02 09:43:09', '2023-06-22 03:06:51', NULL),
(1117, 298, 6, NULL, '2022-06-02 09:43:22', '2023-06-22 03:06:51', NULL),
(1118, 298, 1, 'Button', '2022-06-02 09:43:22', '2023-06-22 03:06:51', NULL),
(1119, 299, 6, NULL, '2022-06-02 09:43:31', '2023-06-22 03:06:51', NULL),
(1120, 299, 1, 'Text', '2022-06-02 09:43:31', '2023-06-22 03:06:51', NULL),
(1121, 300, 6, NULL, '2022-06-02 09:43:41', '2023-06-22 03:06:51', NULL),
(1122, 300, 1, 'Color', '2022-06-02 09:43:41', '2023-06-22 03:06:51', NULL),
(1123, 301, 6, NULL, '2022-06-02 09:43:52', '2023-06-22 03:06:51', NULL),
(1124, 301, 1, 'Hover', '2022-06-02 09:43:52', '2023-06-22 03:06:51', NULL),
(1125, 302, 6, NULL, '2022-06-02 09:44:01', '2023-06-22 03:06:51', NULL),
(1126, 302, 1, 'Background', '2022-06-02 09:44:01', '2023-06-22 03:06:51', NULL),
(1127, 303, 6, NULL, '2022-06-02 09:44:41', '2023-06-22 03:06:51', NULL),
(1128, 303, 1, 'Zone', '2022-06-02 09:44:41', '2023-06-22 03:06:51', NULL),
(1129, 304, 6, NULL, '2022-06-02 09:44:54', '2023-06-22 03:06:51', NULL),
(1130, 304, 1, 'Country', '2022-06-02 09:44:54', '2023-06-22 03:06:51', NULL),
(1131, 305, 6, NULL, '2022-06-02 09:45:05', '2023-06-22 03:06:51', NULL),
(1132, 305, 1, 'Font', '2022-06-02 09:45:05', '2023-06-22 03:06:51', NULL),
(1133, 306, 6, NULL, '2022-06-02 09:45:36', '2023-06-22 03:06:51', NULL),
(1134, 306, 1, 'Max Ticket For One Person', '2022-06-02 09:45:36', '2023-06-22 03:06:51', NULL),
(1135, 307, 6, NULL, '2022-06-02 09:45:51', '2023-06-22 03:06:51', NULL),
(1136, 307, 1, 'Copy Right Text', '2022-06-02 09:45:51', '2023-06-22 03:06:51', NULL),
(1137, 308, 6, NULL, '2022-06-02 09:46:06', '2023-06-22 03:06:51', NULL),
(1138, 308, 1, 'App', '2022-06-02 09:46:06', '2023-06-22 03:06:51', NULL),
(1139, 309, 6, NULL, '2022-06-02 09:46:30', '2023-06-22 03:06:51', NULL),
(1140, 309, 1, 'Logo', '2022-06-02 09:46:30', '2023-06-22 03:06:51', NULL),
(1141, 310, 6, NULL, '2022-06-02 09:52:59', '2023-06-22 03:06:51', NULL),
(1142, 310, 1, 'Family', '2022-06-02 09:52:59', '2023-06-22 03:06:51', NULL),
(1145, 312, 6, NULL, '2022-06-02 11:45:24', '2023-06-22 03:06:51', NULL),
(1146, 312, 1, 'check Out', '2022-06-02 11:45:24', '2023-06-22 03:06:51', NULL),
(1147, 313, 6, NULL, '2022-06-02 12:09:52', '2023-06-22 03:06:51', NULL),
(1148, 313, 1, 'String', '2022-06-02 12:09:52', '2023-06-22 03:06:51', NULL),
(1149, 314, 6, NULL, '2022-06-02 13:05:57', '2023-06-22 03:06:51', NULL),
(1150, 314, 1, 'Description', '2022-06-02 13:05:57', '2023-06-22 03:06:51', NULL),
(1151, 315, 6, NULL, '2022-06-02 13:10:46', '2023-06-22 03:06:51', NULL),
(1152, 315, 1, 'How It Works', '2022-06-02 13:10:46', '2023-06-22 03:06:51', NULL),
(1153, 316, 6, NULL, '2022-06-02 14:36:12', '2023-06-22 03:06:51', NULL),
(1154, 316, 1, 'Question', '2022-06-02 14:36:12', '2023-06-22 03:06:51', NULL),
(1155, 317, 6, NULL, '2022-06-02 14:36:37', '2023-06-22 03:06:51', NULL),
(1156, 317, 1, 'Answer', '2022-06-02 14:36:37', '2023-06-22 03:06:51', NULL),
(1157, 318, 6, NULL, '2022-06-02 14:53:35', '2023-06-22 03:06:51', NULL),
(1158, 318, 1, 'Upload', '2022-06-02 14:53:35', '2023-06-22 03:06:51', NULL),
(1159, 319, 6, '', '2022-06-02 14:53:46', '2023-06-22 03:06:51', NULL),
(1160, 319, 1, 'By', '2022-06-02 14:53:46', '2023-06-22 03:06:51', NULL),
(1161, 320, 6, '', '2022-06-02 14:54:01', '2023-06-22 03:06:51', NULL),
(1162, 320, 1, 'Serial', '2022-06-02 14:54:01', '2023-06-22 03:06:51', NULL),
(1163, 321, 6, '', '2022-06-02 17:34:39', '2023-06-22 03:06:51', NULL),
(1164, 321, 1, 'Designation', '2022-06-02 17:34:39', '2023-06-22 03:06:51', NULL),
(1165, 322, 6, '', '2022-06-05 09:26:16', '2023-06-22 03:06:51', NULL),
(1166, 322, 1, 'One', '2022-06-05 09:26:16', '2023-06-22 03:06:51', NULL),
(1167, 323, 6, '', '2022-06-05 09:26:30', '2023-06-22 03:06:51', NULL),
(1168, 323, 1, 'Two', '2022-06-05 09:26:30', '2023-06-22 03:06:51', NULL),
(1169, 324, 6, '', '2022-06-05 09:29:08', '2023-06-22 03:06:51', NULL),
(1170, 324, 1, 'Hide', '2022-06-05 09:29:08', '2023-06-22 03:06:51', NULL),
(1171, 325, 6, '', '2022-06-05 10:01:28', '2023-06-22 03:06:51', NULL),
(1172, 325, 1, 'Office Open TIme', '2022-06-05 10:01:28', '2023-06-22 03:06:51', NULL),
(1173, 326, 6, '', '2022-06-05 10:02:34', '2023-06-22 03:06:51', NULL),
(1174, 326, 1, 'Contact Number', '2022-06-05 10:02:34', '2023-06-22 03:06:51', NULL),
(1175, 327, 6, '', '2022-06-26 17:37:07', '2023-06-22 03:06:51', NULL),
(1176, 327, 1, 'Customer', '2022-06-26 17:37:07', '2023-06-22 03:06:51', NULL),
(1177, 328, 6, '', '2022-07-25 10:31:31', '2023-06-22 03:06:51', NULL),
(1178, 328, 1, 'Currency', '2022-07-25 10:31:31', '2023-06-22 03:06:51', NULL),
(1179, 329, 6, NULL, '2022-07-28 09:54:57', '2023-06-22 03:06:51', NULL),
(1180, 329, 1, 'Today', '2022-07-28 09:54:57', '2023-06-22 03:06:51', NULL),
(1181, 330, 6, NULL, '2022-07-28 09:56:42', '2023-06-22 03:06:51', NULL),
(1182, 330, 1, 'Income & Expense', '2022-07-28 09:56:42', '2023-06-22 03:06:51', NULL),
(1183, 331, 6, NULL, '2022-07-28 09:57:03', '2023-06-22 03:06:51', NULL),
(1184, 331, 1, 'Yearly', '2022-07-28 09:57:03', '2023-06-22 03:06:51', NULL),
(1185, 332, 6, NULL, '2022-07-28 09:57:19', '2023-06-22 03:06:51', NULL),
(1186, 332, 1, 'Weekly', '2022-07-28 09:57:19', '2023-06-22 03:06:51', NULL),
(1187, 333, 6, NULL, '2022-07-28 09:57:55', '2023-06-22 03:06:51', NULL),
(1188, 333, 1, 'Monthly', '2022-07-28 09:57:55', '2023-06-22 03:06:51', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `localizes`
--

CREATE TABLE `localizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `display_name` varchar(100) NOT NULL,
  `language_code` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `localizes`
--

INSERT INTO `localizes` (`id`, `name`, `display_name`, `language_code`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'en', 'English', 'en', '2022-03-13 16:30:39', '2023-06-22 03:06:52', NULL),
(6, 'fr', 'French', 'fr', '2022-05-16 13:36:29', '2023-06-22 03:06:52', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `locations`
--

CREATE TABLE `locations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `locations`
--

INSERT INTO `locations` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(24, 'DINAJPUR', '2022-06-27 14:03:42', '2023-06-26 18:39:28', '2023-06-26 18:39:28'),
(25, 'GAIBANDHA', '2022-06-27 14:04:23', '2023-06-26 18:39:25', '2023-06-26 18:39:25'),
(26, 'KURIGRAM', '2022-06-27 14:04:50', '2023-06-26 18:39:20', '2023-06-26 18:39:20'),
(27, 'LALMONIRHAT', '2022-06-27 14:05:32', '2023-06-26 18:39:16', '2023-06-26 18:39:16'),
(28, 'NILPHAMARI', '2022-06-27 14:05:58', '2023-06-26 18:39:13', '2023-06-26 18:39:13'),
(29, 'PANCHAGARH', '2022-06-27 14:06:26', '2023-06-26 18:39:06', '2023-06-26 18:39:06'),
(30, 'RANGPUR', '2022-06-27 14:07:05', '2023-06-26 18:39:03', '2023-06-26 18:39:03'),
(31, 'THAKURGAON', '2022-06-27 14:07:39', '2023-06-26 18:39:00', '2023-06-26 18:39:00'),
(32, 'DHAKA', '2022-06-27 14:11:08', '2023-06-26 18:38:57', '2023-06-26 18:38:57'),
(33, 'FARIDPUR', '2022-06-27 14:11:33', '2023-06-26 18:38:53', '2023-06-26 18:38:53'),
(34, 'GAZIPUR', '2022-06-27 14:12:05', '2023-06-26 18:38:49', '2023-06-26 18:38:49'),
(35, 'GOPALGANJ', '2022-06-27 14:12:39', '2023-06-26 18:39:32', '2023-06-26 18:39:32'),
(36, 'JAMALPUR', '2022-06-27 14:13:11', '2023-06-26 18:39:37', '2023-06-26 18:39:37'),
(37, 'KISHOREGANJ', '2022-06-27 14:13:32', '2023-06-26 18:39:40', '2023-06-26 18:39:40'),
(38, 'MADARIPUR', '2022-06-27 14:14:03', '2023-06-26 18:39:43', '2023-06-26 18:39:43'),
(39, 'MANIKGANJ', '2022-06-27 14:14:24', '2023-06-26 18:38:46', '2023-06-26 18:38:46'),
(40, 'DEPOK', '2022-06-27 14:14:59', '2023-06-26 18:38:40', NULL),
(41, 'CIBUBUR', '2022-06-27 14:16:41', '2023-06-26 18:38:31', NULL),
(42, 'BEKASI', '2022-06-27 14:18:10', '2023-06-26 18:38:20', NULL),
(43, 'JATIWARINGIN', '2022-06-27 14:18:27', '2023-06-26 18:38:09', NULL),
(44, 'CIHAMPELAS', '2022-06-27 14:19:11', '2023-06-26 18:37:54', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `maxtimes`
--

CREATE TABLE `maxtimes` (
  `id` int(10) UNSIGNED NOT NULL,
  `maxtime` tinytext NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `maxtimes`
--

INSERT INTO `maxtimes` (`id`, `maxtime`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '5', '2021-11-22 11:21:27', '2023-06-22 03:06:54', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_title` varchar(100) NOT NULL,
  `page_url` varchar(100) NOT NULL,
  `module_name` varchar(100) NOT NULL,
  `parent_menu_id` varchar(100) DEFAULT NULL,
  `have_chield` varchar(100) DEFAULT NULL,
  `created_by` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `menus`
--

INSERT INTO `menus` (`id`, `menu_title`, `page_url`, `module_name`, `parent_menu_id`, `have_chield`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ticket_booking', 'ticket/booking', 'Ticket', NULL, '1', '1', '2022-03-15 12:54:24', '2023-06-22 03:06:56', NULL),
(2, 'book_ticket', 'ticket/booking/bookticket', 'Ticket', '1', NULL, '1', '2022-03-15 13:00:11', '2023-06-22 03:06:56', NULL),
(3, 'ticket_list', 'ticket/booking/ticketlist', 'Ticket', '1', NULL, '1', '2022-03-15 14:26:23', '2023-06-22 03:06:56', NULL),
(4, 'journey_list', 'ticket/booking/journeylist', 'Ticket', '1', NULL, '1', '2022-03-15 14:28:34', '2023-06-22 03:06:56', NULL),
(5, 'refund_list', 'ticket/booking/refundlist', 'Ticket', '1', NULL, '1', '2022-03-15 14:30:32', '2023-06-22 03:06:56', NULL),
(6, 'cancel_list', 'ticket/booking/cancellist', 'Ticket', '1', NULL, '1', '2022-03-15 14:49:59', '2023-06-22 03:06:56', NULL),
(7, 'book_time', 'ticket/booking/booktime', 'Ticket', '1', '1', '1', '2022-03-15 14:53:50', '2023-06-22 03:06:56', NULL),
(8, 'add_booking_time', 'ticket/booking/booktime/addbooktime', 'Ticket', '7', NULL, '1', '2022-03-15 14:55:01', '2023-06-22 03:06:56', NULL),
(9, 'book_time_list', 'ticket/booking/booktime/booktimelist', 'Ticket', '7', NULL, '1', '2022-03-15 14:56:23', '2023-06-22 03:06:56', NULL),
(12, 'agent', 'agent/agent', 'Agent', NULL, '1', '1', '2022-03-15 17:24:46', '2023-06-22 03:06:56', NULL),
(13, 'add_agent', 'agent/agent/addagent', 'Agent', '12', NULL, '1', '2022-03-15 17:30:09', '2023-06-22 03:06:56', NULL),
(14, 'agent_list', 'agent/agent/agentlist', 'Agent', '12', NULL, '1', '2022-03-15 17:30:41', '2023-06-22 03:06:56', NULL),
(15, 'account', 'account/account', 'Account', NULL, '1', '1', '2022-03-15 17:41:50', '2023-06-22 03:06:56', NULL),
(17, 'add_transaction', 'account/account/transaction', 'Account', '15', NULL, '1', '2022-03-15 17:49:10', '2023-06-22 03:06:56', NULL),
(18, 'transaction_list', 'account/account/transactionlist', 'Account', '15', NULL, '1', '2022-03-15 17:51:32', '2023-06-22 03:06:56', NULL),
(19, 'location', 'location/location', 'Location', NULL, '1', '1', '2022-03-15 17:58:04', '2023-06-22 03:06:56', NULL),
(20, 'add_location', 'location/location/addlocation', 'Location', '19', NULL, '1', '2022-03-15 18:02:33', '2023-06-22 03:06:56', NULL),
(21, 'location_list', 'location/location/locationlist', 'Location', '19', NULL, '1', '2022-03-15 18:04:13', '2023-06-22 03:06:56', NULL),
(22, 'add_stand', 'location/location/addstand', 'Location', '19', NULL, '1', '2022-03-15 18:05:05', '2023-06-22 03:06:56', NULL),
(23, 'stand_list', 'location/location/standlist', 'Location', '19', NULL, '1', '2022-03-15 18:08:11', '2023-06-22 03:06:56', NULL),
(24, 'schedule', 'schedule/schedule', 'Schedule', NULL, '1', '1', '2022-03-15 18:59:01', '2023-06-22 03:06:56', NULL),
(25, 'add_schedule', 'schedule/schedule/addschedule', 'Schedule', '24', NULL, '1', '2022-03-15 19:00:22', '2023-06-22 03:06:56', NULL),
(26, 'schedule_list', 'schedule/schedule/schedulelist', 'Schedule', '24', NULL, '1', '2022-03-15 19:02:28', '2023-06-22 03:06:56', NULL),
(27, 'add_schedule_filter', 'schedule/schedule/addschedulefilter', 'Schedule', '24', NULL, '1', '2022-03-15 19:05:21', '2023-06-22 03:06:56', NULL),
(28, 'schedule_filter_list', 'schedule/schedule/schedulefilterlist', 'Schedule', '24', NULL, '1', '2022-03-15 19:06:03', '2023-06-22 03:06:56', NULL),
(29, 'advertisement', 'add/advertisement', 'Add', '', '1', '1', '2022-05-11 11:31:50', '2023-06-22 03:06:56', NULL),
(30, 'add_advertisement', 'add/advertisement/new', 'Add', '29', NULL, '1', '2022-05-11 11:33:48', '2023-06-22 03:06:56', NULL),
(31, 'advertisement_list', 'add/advertisement/list', 'Add', '29', NULL, '1', '2022-05-11 11:35:18', '2023-06-22 03:06:56', NULL),
(32, 'coupon', 'coupon/coupon', 'Coupon', '', '1', '1', '2022-05-11 11:46:00', '2023-06-22 03:06:56', NULL),
(33, 'add_coupon', 'coupon/coupon/add', 'Coupon', '32', NULL, '1', '2022-05-11 11:46:55', '2023-06-22 03:06:56', NULL),
(34, 'coupon_list', 'coupon/coupon/list', 'Coupon', '32', NULL, '1', '2022-05-11 11:48:23', '2023-06-22 03:06:56', NULL),
(36, 'employee', 'employee/employee', 'Employee', '', '1', '1', '2022-05-11 12:01:48', '2023-06-22 03:06:56', NULL),
(37, 'add_employee_type', 'employee/employee/add/type', 'Employee', '36', NULL, '1', '2022-05-11 12:02:15', '2023-06-22 03:06:56', NULL),
(38, 'employee_type_list', 'employee/employee/type/list', 'Employee', '36', NULL, '1', '2022-05-11 12:03:10', '2023-06-22 03:06:56', NULL),
(39, 'add_employee', 'employee/employee/add', 'Employee', '36', NULL, '1', '2022-05-11 12:05:24', '2023-06-22 03:06:56', NULL),
(40, 'employee_list', 'employee/employee/list', 'Employee', '36', NULL, '1', '2022-05-11 12:06:35', '2023-06-22 03:06:56', NULL),
(41, 'fitness', 'fitness/fitness', 'Fitness', '', '1', '1', '2022-05-11 12:20:46', '2023-06-22 03:06:56', NULL),
(42, 'add_fitness', 'fitness/fitness/add', 'Fitness', '41', NULL, '1', '2022-05-11 12:21:49', '2023-06-22 03:06:56', NULL),
(43, 'fitness_list', 'fitness/fitness/list', 'Fitness', '41', NULL, '1', '2022-05-11 12:22:27', '2023-06-22 03:06:56', NULL),
(44, 'fleet', 'fleet/fleet', 'Fleet', '', '1', '1', '2022-05-11 12:23:38', '2023-06-22 03:06:56', NULL),
(45, 'add_fleet', 'fleet/fleet/add', 'Fleet', '44', NULL, '1', '2022-05-11 12:24:26', '2023-06-22 03:06:56', NULL),
(46, 'fleet_list', 'fleet/fleet/list', 'Fleet', '44', NULL, '1', '2022-05-11 12:25:34', '2023-06-22 03:06:56', NULL),
(47, 'add_vehicle', 'fleet/fleet/vehicle/add', 'Fleet', '44', NULL, '1', '2022-05-11 12:26:43', '2023-06-22 03:06:56', NULL),
(48, 'vehicle_list', 'fleet/fleet/vehicle/list', 'Fleet', '44', NULL, '1', '2022-05-11 12:30:33', '2023-06-22 03:06:56', NULL),
(49, 'frontend', 'frontend/frontend', 'Frontend', '', '1', '1', '2022-05-11 12:32:10', '2023-06-22 03:06:56', NULL),
(50, 'sectionone', 'frontend/frontend/sectionone', 'Frontend', '49', NULL, '1', '2022-05-11 12:34:09', '2023-06-22 03:06:56', NULL),
(51, 'sectiontwo', 'frontend/frontend/sectiontwo', 'Frontend', '49', '1', '1', '2022-05-11 12:35:30', '2023-06-22 03:06:56', NULL),
(52, 'sectiontwo_two', 'frontend/frontend/sectiontwo/sectiontwo', 'Frontend', '51', NULL, '1', '2022-05-11 12:36:41', '2023-06-22 03:06:56', NULL),
(53, 'how_works_add', 'frontend/frontend/sectiontwo/sectiontwo/how/works/add', 'Frontend', '51', NULL, '1', '2022-05-11 12:40:59', '2023-06-22 03:06:56', NULL),
(54, 'how_works_list', 'frontend/frontend/sectiontwo/sectiontwo/how/works/list', 'Frontend', '51', NULL, '1', '2022-05-11 12:52:46', '2023-06-22 03:06:56', NULL),
(55, 'sectionthree', 'frontend/frontend/sectionthree/sectionthree', 'Frontend', '49', NULL, '1', '2022-05-11 12:54:21', '2023-06-22 03:06:56', NULL),
(56, 'sectionfour', 'frontend/frontend/sectionfour', 'Frontend', '49', '1', '1', '2022-05-11 12:58:16', '2023-06-22 03:06:56', NULL),
(57, 'sectionfour_four', 'frontend/frontend/sectionfour/sectionfour', 'Frontend', '56', NULL, '1', '2022-05-11 13:04:09', '2023-06-22 03:06:56', NULL),
(58, 'add_comment', 'frontend/frontend/sectionfour/sectionfour/comment/add', 'Frontend', '56', NULL, '1', '2022-05-11 13:05:09', '2023-06-22 03:06:56', NULL),
(59, 'comment_list', 'frontend/frontend/sectionfour/sectionfour/comment/list', 'Frontend', '56', NULL, '1', '2022-05-11 13:05:50', '2023-06-22 03:06:56', NULL),
(60, 'sectionfive', 'frontend/frontend/sectionfive', 'Frontend', '49', NULL, '1', '2022-05-11 13:11:08', '2023-06-22 03:06:56', NULL),
(61, 'sectionsix', 'frontend/frontend/sectionsix', 'Frontend', '49', NULL, '1', '2022-05-11 13:11:49', '2023-06-22 03:06:56', NULL),
(62, 'sectionseven', 'frontend/frontend/sectionseven', 'Frontend', '49', NULL, '1', '2022-05-11 13:40:19', '2023-06-22 03:06:56', NULL),
(63, 'footer', 'frontend/frontend/footer', 'Frontend', '49', NULL, '1', '2022-05-11 13:41:07', '2023-06-22 03:06:56', NULL),
(64, 'blog', 'blog/blog', 'Blog', '', '1', '1', '2022-05-11 13:45:52', '2023-06-22 03:06:56', NULL),
(65, 'add_blog', 'blog/blog/add', 'Blog', '64', NULL, '1', '2022-05-11 13:51:33', '2023-06-22 03:06:56', NULL),
(66, 'blog_list', 'blog/blog/list', 'Blog', '64', NULL, '1', '2022-05-11 13:52:14', '2023-06-22 03:06:56', NULL),
(70, 'page', 'page/page', 'Page', '', '1', '1', '2022-05-11 13:59:30', '2023-06-22 03:06:56', NULL),
(71, 'about', 'page/page/about', 'Page', '70', NULL, '1', '2022-05-11 14:00:09', '2023-06-22 03:06:56', NULL),
(72, 'privacy', 'page/page/privacy', 'Page', '70', NULL, '1', '2022-05-11 14:01:10', '2023-06-22 03:06:56', NULL),
(73, 'cookies', 'page/page/cookies', 'Page', '70', NULL, '1', '2022-05-11 14:01:48', '2023-06-22 03:06:56', NULL),
(74, 'terms_conditions', 'page/page/termsandconditions', 'Page', '70', NULL, '1', '2022-05-11 14:02:54', '2023-06-22 03:06:56', NULL),
(75, 'faq', 'page/page/faq', 'Page', '70', '1', '1', '2022-05-11 14:04:18', '2023-06-22 03:06:56', NULL),
(76, 'page_setup', 'page/page/faq/pagesetup', 'Page', '75', NULL, '1', '2022-05-11 14:05:22', '2023-06-22 03:06:56', NULL),
(77, 'add_question', 'page/page/faq/question/add', 'Page', '75', NULL, '1', '2022-05-11 14:06:42', '2023-06-22 03:06:56', NULL),
(78, 'question_list', 'page/page/faq/question/list', 'Page', '75', NULL, '1', '2022-05-11 14:07:23', '2023-06-22 03:06:56', NULL),
(80, 'language', 'language/language', 'Localize', '', '1', '1', '2022-05-11 14:21:36', '2023-06-22 03:06:56', NULL),
(81, 'language_add', 'language/language/add', 'Localize', '80', NULL, '1', '2022-05-11 14:22:56', '2023-06-22 03:06:56', NULL),
(82, 'language_list', 'language/language/list', 'Localize', '80', NULL, '1', '2022-05-11 14:24:51', '2023-06-22 03:06:56', NULL),
(84, 'passanger', 'passanger/passanger', 'Passanger', '', '1', '1', '2022-05-11 14:30:25', '2023-06-22 03:06:56', NULL),
(85, 'add_passanger', 'passanger/passanger/add', 'Passanger', '84', NULL, '1', '2022-05-11 14:38:08', '2023-06-22 03:06:56', NULL),
(86, 'passanger_list', 'passanger/passanger/list', 'Passanger', '84', NULL, '1', '2022-05-11 14:39:00', '2023-06-22 03:06:56', NULL),
(87, 'inquiry', 'inquiry/inquiry', 'Inquiry', '', '1', '1', '2022-05-11 14:40:40', '2023-06-22 03:06:56', NULL),
(88, 'inquiry_list', 'inquiry/inquiry/list', 'Inquiry', '87', NULL, '1', '2022-05-11 14:41:09', '2023-06-22 03:06:56', NULL),
(89, 'payment_method', 'paymentmethod/paymentmethod', 'Paymethod', '', '1', '1', '2022-05-11 14:46:12', '2023-06-22 03:06:56', NULL),
(90, 'add_payment_method', 'paymentmethod/paymentmethod/add', 'Paymethod', '89', NULL, '1', '2022-05-11 14:46:59', '2023-06-22 03:06:56', NULL),
(91, 'payment_method_list', 'paymentmethod/paymentmethod/list', 'Paymethod', '89', NULL, '1', '2022-05-11 14:47:55', '2023-06-22 03:06:56', NULL),
(93, 'add_payment_gateway', 'paymentgateway/paymentgateway/add', 'Paymethod', '89', NULL, '1', '2022-05-11 14:51:36', '2023-06-22 03:06:56', NULL),
(94, 'payment_gateway_list', 'paymentgateway/paymentgateway/list', 'Paymethod', '89', NULL, '1', '2022-05-11 14:52:44', '2023-06-22 03:06:56', NULL),
(95, 'rating', 'rating/rating', 'Rating', '', '1', '1', '2022-05-11 14:56:55', '2023-06-22 03:06:56', NULL),
(96, 'rating_list', 'rating/rating/list', 'Rating', '95', NULL, '1', '2022-05-11 14:57:43', '2023-06-22 03:06:56', NULL),
(97, 'report', 'report/report', 'Report', '', '1', '1', '2022-05-11 15:00:39', '2023-06-22 03:06:56', NULL),
(98, 'ticket_sold', 'report/report/ticket/sold', 'Report', '97', NULL, '1', '2022-05-11 15:01:54', '2023-06-22 03:06:56', NULL),
(99, 'agent_report', 'report/report/agent/report', 'Report', '97', NULL, '1', '2022-05-11 15:03:10', '2023-06-22 03:06:56', NULL),
(100, 'role', 'role/role', 'Role', '', '1', '1', '2022-05-11 15:04:51', '2023-06-22 03:06:56', NULL),
(101, 'add_role', 'role/role/add', 'Role', '100', NULL, '1', '2022-05-11 15:05:28', '2023-06-22 03:06:56', NULL),
(102, 'role_list', 'role/role/list', 'Role', '100', NULL, '1', '2022-05-11 15:06:22', '2023-06-22 03:06:56', NULL),
(103, 'add_menu', 'role/role/menu/add', 'Role', '100', NULL, '1', '2022-05-11 15:07:04', '2023-06-22 03:06:56', NULL),
(104, 'menu_list', 'role/role/menu/list', 'Role', '100', NULL, '1', '2022-05-11 15:08:08', '2023-06-22 03:06:56', NULL),
(105, 'add_permission', 'role/role/permission/add', 'Role', '100', NULL, '1', '2022-05-11 15:09:01', '2023-06-22 03:06:56', NULL),
(106, 'permission_list', 'role/role/permission/list', 'Role', '100', NULL, '1', '2022-05-11 15:10:09', '2023-06-22 03:06:56', NULL),
(107, 'tax', 'tax/tax', 'Tax', '', '1', '1', '2022-05-11 15:12:23', '2023-06-22 03:06:56', NULL),
(108, 'add_tax', 'tax/tax/add', 'Tax', '107', NULL, '1', '2022-05-11 15:12:57', '2023-06-22 03:06:56', NULL),
(109, 'tax_list', 'tax/tax/list', 'Tax', '107', NULL, '1', '2022-05-11 15:13:26', '2023-06-22 03:06:56', NULL),
(113, 'trip', 'trip/trip', 'Trip', '', '1', '1', '2022-05-11 15:29:10', '2023-06-22 03:06:56', NULL),
(114, 'add_trip', 'trip/trip/add', 'Trip', '113', NULL, '1', '2022-05-11 15:29:31', '2023-06-22 03:06:56', NULL),
(115, 'trip_list', 'trip/trip/list', 'Trip', '113', NULL, '1', '2022-05-11 15:30:06', '2023-06-22 03:06:56', NULL),
(116, 'add_facility', 'trip/trip/facility/add', 'Trip', '113', NULL, '1', '2022-05-11 15:37:22', '2023-06-22 03:06:56', NULL),
(117, 'facility_list', 'trip/trip/facility/list', 'Trip', '113', NULL, '1', '2022-05-11 15:37:59', '2023-06-22 03:06:56', NULL),
(118, 'website_setting', 'websitesetting/websitesetting', 'Website', '', '1', '1', '2022-05-11 15:52:32', '2023-06-22 03:06:56', NULL),
(119, 'webconfig', 'websitesetting/websitesetting/webconfig', 'Website', '118', NULL, '1', '2022-05-11 15:53:36', '2023-06-22 03:06:56', NULL),
(120, 'db_backup', 'websitesetting/websitesetting/db/backup', 'Website', '118', NULL, '1', '2022-05-11 15:54:24', '2023-06-22 03:06:56', NULL),
(121, 'add_social_media', 'websitesetting/websitesetting/social/media/add', 'Website', '118', NULL, '1', '2022-05-11 15:55:34', '2023-06-22 03:06:56', NULL),
(122, 'social_media_list', 'websitesetting/websitesetting/social/media/list', 'Website', '118', NULL, '1', '2022-05-11 15:56:02', '2023-06-22 03:06:56', NULL),
(123, 'email', 'websitesetting/websitesetting/email', 'Website', '118', NULL, '1', '2022-05-19 13:01:27', '2023-06-22 03:06:56', NULL),
(124, 'subscribe_list', 'websitesetting/websitesetting/subscribe', 'Website', '118', NULL, '1', '2022-05-22 11:08:10', '2023-06-22 03:06:56', NULL),
(125, 'add_language_string', 'language/language/string/add', 'Localize', '80', NULL, '1', '2022-06-13 17:35:26', '2023-06-22 03:06:56', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(172, '2022-03-23-071536', 'Modules\\Rating\\Database\\Migrations\\Rating', 'default', 'Modules\\Rating', 1648031033, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `partialpaids`
--

CREATE TABLE `partialpaids` (
  `id` int(10) UNSIGNED NOT NULL,
  `booking_id` varchar(100) NOT NULL,
  `trip_id` int(10) UNSIGNED NOT NULL,
  `subtrip_id` int(10) UNSIGNED NOT NULL,
  `passanger_id` int(10) UNSIGNED NOT NULL,
  `paidamount` tinytext NOT NULL,
  `pay_type_id` int(11) DEFAULT NULL,
  `pay_method_id` int(11) DEFAULT NULL,
  `payment_detail` tinytext DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `partialpaids`
--

INSERT INTO `partialpaids` (`id`, `booking_id`, `trip_id`, `subtrip_id`, `passanger_id`, `paidamount`, `pay_type_id`, `pay_method_id`, `payment_detail`, `created_at`, `updated_at`, `deleted_at`) VALUES
(151, 'TB8E4G57FO', 23, 38, 170, '983', 1, NULL, 'Lorme Ipsum Lorme', '2022-06-28 15:08:21', '2023-06-22 03:06:57', NULL),
(152, 'TBFKS8YEBW', 23, 38, 171, '500', 1, NULL, 'Lorme Ipsum Lorme', '2022-06-28 15:15:21', '2023-06-22 03:06:57', NULL),
(153, 'TBJ3D2RY0P', 24, 41, 170, '896', 1, NULL, 'Lorme Ipsum Lorme', '2022-06-28 15:16:50', '2023-06-22 03:06:57', NULL),
(154, 'TBNYFQET3S', 25, 43, 171, '600', 1, NULL, '', '2022-06-28 15:17:58', '2023-06-22 03:06:57', NULL),
(155, 'TB76DFM1CA', 24, 40, 171, '0', NULL, 999, 'This is pay details', '2022-06-28 15:19:21', '2023-06-22 03:06:57', NULL),
(156, 'TB76DFM1CA', 24, 40, 171, '500', 1, NULL, 'Lorme Ipsum Lorme', '2022-06-28 15:19:44', '2023-06-22 03:06:57', NULL),
(157, 'TBXT8KPHV2', 24, 41, 168, '896', 1, NULL, 'Lorme Ipsum Lorme', '2022-06-28 15:20:54', '2023-06-22 03:06:57', NULL),
(158, 'TBA9X180HU', 23, 38, 168, '1008', 1, NULL, 'Lorme Ipsum Lorme', '2022-06-28 15:22:26', '2023-06-22 03:06:57', NULL),
(159, 'TBX6NC73VK', 22, 36, 173, '1456', 1, NULL, '', '2023-06-26 19:48:41', '2023-06-26 19:48:41', NULL),
(160, 'TBNLAC74XK', 22, 36, 184, '1456', 1, NULL, '', '2023-06-26 20:50:06', '2023-06-26 20:50:06', NULL),
(161, 'TBD6OPY4TC', 22, 36, 181, '896', 1, NULL, '', '2023-06-26 20:51:26', '2023-06-26 20:51:26', NULL),
(162, 'TBTPU2Y8GR', 22, 36, 180, '0', 1, NULL, '', '2023-06-26 20:54:10', '2023-06-26 20:54:10', NULL),
(163, 'TB65E2BU7Y', 22, 37, 183, '560', 1, NULL, '', '2023-06-26 20:55:43', '2023-06-26 20:55:43', NULL),
(164, 'TBTPU2Y8GR', 22, 36, 180, '2352', 1, NULL, '', '2023-06-26 20:59:24', '2023-06-26 20:59:24', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paymentgateways`
--

CREATE TABLE `paymentgateways` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `paymentgateways`
--

INSERT INTO `paymentgateways` (`id`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'paypal', '1', '2022-01-25 14:17:07', '2023-06-22 03:06:58', NULL),
(2, 'paystack', '1', '2022-01-25 15:00:52', '2023-06-22 03:06:58', NULL),
(3, 'stripe', '1', '2022-01-25 15:21:40', '2023-06-22 03:06:58', NULL),
(4, 'razorpay', '1', '2022-01-25 15:23:00', '2023-06-22 03:06:58', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paymethods`
--

CREATE TABLE `paymethods` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `paymethods`
--

INSERT INTO `paymethods` (`id`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Cash', '1', '2022-02-01 16:19:52', '2023-06-22 03:06:58', NULL),
(2, 'Bank', '1', '2022-02-01 16:20:01', '2023-06-22 03:06:58', NULL),
(3, 'E-wallet', '1', '2022-02-01 16:20:11', '2023-06-26 18:08:40', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paymethodtotals`
--

CREATE TABLE `paymethodtotals` (
  `id` int(10) UNSIGNED NOT NULL,
  `booking_id` tinytext NOT NULL,
  `paymethod_id` int(10) UNSIGNED NOT NULL,
  `amount` text NOT NULL,
  `detail` text DEFAULT NULL,
  `trip_id` int(10) UNSIGNED NOT NULL,
  `subtrip_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `paymethodtotals`
--

INSERT INTO `paymethodtotals` (`id`, `booking_id`, `paymethod_id`, `amount`, `detail`, `trip_id`, `subtrip_id`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(88, 'TB8E4G57FO', 1, '983', 'Lorme Ipsum Lorme', 23, 38, 1, '2022-06-28 15:08:21', '2023-06-22 03:06:59', NULL),
(89, 'TBFKS8YEBW', 1, '500', 'Lorme Ipsum Lorme', 23, 38, 1, '2022-06-28 15:15:21', '2023-06-22 03:06:59', NULL),
(90, 'TBJ3D2RY0P', 1, '896', 'Lorme Ipsum Lorme', 24, 41, 1, '2022-06-28 15:16:50', '2023-06-22 03:06:59', NULL),
(91, 'TBNYFQET3S', 1, '600', '', 25, 43, 1, '2022-06-28 15:17:58', '2023-06-22 03:06:59', NULL),
(92, 'TB76DFM1CA', 1, '500', 'Lorme Ipsum Lorme', 24, 40, 1, '2022-06-28 15:19:44', '2023-06-22 03:06:59', NULL),
(93, 'TBXT8KPHV2', 1, '896', 'Lorme Ipsum Lorme', 24, 41, 1, '2022-06-28 15:20:54', '2023-06-22 03:06:59', NULL),
(94, 'TBA9X180HU', 1, '1008', 'Lorme Ipsum Lorme', 23, 38, 1, '2022-06-28 15:22:26', '2023-06-22 03:06:59', NULL),
(95, 'TBA9X180HU', 1, '100', 'Lorme Ipsum Lorme refund', 23, 38, 1, '2022-06-28 15:23:04', '2023-06-22 03:06:59', NULL),
(96, 'TBXT8KPHV2', 1, '50', 'Lorme Ipsum Lorme cancel', 24, 41, 1, '2022-06-28 15:23:32', '2023-06-22 03:06:59', NULL),
(97, 'TBX6NC73VK', 1, '1456', '', 22, 36, 1, '2023-06-26 19:48:41', '2023-06-26 19:48:41', NULL),
(98, 'TBNLAC74XK', 1, '1456', '', 22, 36, 1, '2023-06-26 20:50:06', '2023-06-26 20:50:06', NULL),
(99, 'TBD6OPY4TC', 1, '896', '', 22, 36, 1, '2023-06-26 20:51:26', '2023-06-26 20:51:26', NULL),
(100, 'TB65E2BU7Y', 1, '560', '', 22, 37, 1, '2023-06-26 20:55:43', '2023-06-26 20:55:43', NULL),
(101, 'TBTPU2Y8GR', 1, '2352', '', 22, 36, 1, '2023-06-26 20:59:24', '2023-06-26 20:59:24', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paypals`
--

CREATE TABLE `paypals` (
  `id` int(10) UNSIGNED NOT NULL,
  `test_c_kye` text NOT NULL,
  `test_s_kye` text NOT NULL,
  `live_c_kye` text NOT NULL,
  `live_s_kye` text NOT NULL,
  `environment` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `marchantid` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `paypals`
--

INSERT INTO `paypals` (`id`, `test_c_kye`, `test_s_kye`, `live_c_kye`, `live_s_kye`, `environment`, `email`, `marchantid`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'AXmEOzF1axI9l3VAyq-viSusE32eyUsnzwjiPpbQUHnpGNKN0EohDuLTPnSurb05itzji3h9Pr3Pkk4W', 'EHbAitoud-ZvwFb0Dk3Hu8p2p3VOpiL5sbZJNBbAYZHQkZy1BYO3tRhUsWtdWQs2dcN8KSItFDX0bjKE', 'AXmEOzF1axI9l3VAyq-viSusE32eyUsnzwjiPpbQUHnpGNKN0EohDuLTPnSurb05itzji3h9Pr3Pkk4W', 'EHbAitoud-ZvwFb0Dk3Hu8p2p3VOpiL5sbZJNBbAYZHQkZy1BYO3tRhUsWtdWQs2dcN8KSItFDX0bjKE', '0', 'm@m.com', 'MVJBF4BQAU6ZN', '2022-02-01 18:24:32', '2023-06-22 03:07:00', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paystacks`
--

CREATE TABLE `paystacks` (
  `id` int(10) UNSIGNED NOT NULL,
  `test_p_kye` text NOT NULL,
  `test_s_kye` text NOT NULL,
  `live_p_kye` text NOT NULL,
  `live_s_kye` text NOT NULL,
  `environment` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `paystacks`
--

INSERT INTO `paystacks` (`id`, `test_p_kye`, `test_s_kye`, `live_p_kye`, `live_s_kye`, `environment`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'pk_test_328da55755b88b1aaed96c5cda215b2fd887edb9', 'sk_test_71353c2613675acb967ea532f4c4c8105ea175b8', 'pk_test_328da55755b88b1aaed96c5cda215b2fd887edb9', 'sk_test_71353c2613675acb967ea532f4c4c8105ea175b8', '1', '2022-01-26 13:26:53', '2023-06-22 03:07:00', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `menu_title` tinytext DEFAULT NULL,
  `create` tinytext DEFAULT NULL,
  `read` tinytext DEFAULT NULL,
  `edit` tinytext DEFAULT NULL,
  `delete` tinytext DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `permissions`
--

INSERT INTO `permissions` (`id`, `role_id`, `user_id`, `menu_id`, `menu_title`, `create`, `read`, `edit`, `delete`, `created_at`, `updated_at`, `deleted_at`) VALUES
(773, 1, 1, 1, 'ticket_booking', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(774, 1, 1, 2, 'book_ticket', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(775, 1, 1, 3, 'ticket_list', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(776, 1, 1, 4, 'journey_list', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(777, 1, 1, 5, 'refund_list', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(778, 1, 1, 6, 'cancel_list', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(779, 1, 1, 7, 'book_time', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(780, 1, 1, 8, 'add_booking_time', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(781, 1, 1, 9, 'book_time_list', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(782, 1, 1, 12, 'agent', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(783, 1, 1, 13, 'add_agent', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(784, 1, 1, 14, 'agent_list', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(785, 1, 1, 15, 'account', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(786, 1, 1, 17, 'add_transaction', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(787, 1, 1, 18, 'transaction_list', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(788, 1, 1, 19, 'location', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(789, 1, 1, 20, 'add_location', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(790, 1, 1, 21, 'location_list', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(791, 1, 1, 22, 'add_stand', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(792, 1, 1, 23, 'stand_list', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(793, 1, 1, 24, 'schedule', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(794, 1, 1, 25, 'add_schedule', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(795, 1, 1, 26, 'schedule_list', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(796, 1, 1, 27, 'add_schedule_filter', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(797, 1, 1, 28, 'schedule_filter_list', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(798, 1, 1, 29, 'advertisement', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(799, 1, 1, 30, 'add_advertisement', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(800, 1, 1, 31, 'advertisement_list', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(801, 1, 1, 32, 'coupon', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(802, 1, 1, 33, 'add_coupon', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(803, 1, 1, 34, 'coupon_list', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(804, 1, 1, 36, 'employee', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(805, 1, 1, 37, 'add_employee_type', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(806, 1, 1, 38, 'employee_type_list', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(807, 1, 1, 39, 'add_employee', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(808, 1, 1, 40, 'employee_list', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(809, 1, 1, 41, 'fitness', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(810, 1, 1, 42, 'add_fitness', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(811, 1, 1, 43, 'fitness_list', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(812, 1, 1, 44, 'fleet', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(813, 1, 1, 45, 'add_fleet', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(814, 1, 1, 46, 'fleet_list', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(815, 1, 1, 47, 'add_vehicle', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(816, 1, 1, 48, 'vehicle_list', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(817, 1, 1, 49, 'frontend', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(818, 1, 1, 50, 'sectionone', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(819, 1, 1, 51, 'sectiontwo', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(820, 1, 1, 52, 'sectiontwo_two', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(821, 1, 1, 53, 'how_works_add', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(822, 1, 1, 54, 'how_works_list', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(823, 1, 1, 55, 'sectionthree', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(824, 1, 1, 56, 'sectionfour', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(825, 1, 1, 57, 'sectionfour_four', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(826, 1, 1, 58, 'add_comment', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(827, 1, 1, 59, 'comment_list', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(828, 1, 1, 60, 'sectionfive', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(829, 1, 1, 61, 'sectionsix', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(830, 1, 1, 62, 'sectionseven', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(831, 1, 1, 63, 'footer', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(832, 1, 1, 64, 'blog', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(833, 1, 1, 65, 'add_blog', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(834, 1, 1, 66, 'blog_list', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(835, 1, 1, 70, 'page', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(836, 1, 1, 71, 'about', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(837, 1, 1, 72, 'privacy', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(838, 1, 1, 73, 'cookies', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(839, 1, 1, 74, 'terms_conditions', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(840, 1, 1, 75, 'faq', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(841, 1, 1, 76, 'page_setup', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(842, 1, 1, 77, 'add_question', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(843, 1, 1, 78, 'question_list', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(844, 1, 1, 80, 'language', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(845, 1, 1, 81, 'language_add', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(846, 1, 1, 82, 'language_list', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(847, 1, 1, 84, 'passanger', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(848, 1, 1, 85, 'add_passanger', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(849, 1, 1, 86, 'passanger_list', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(850, 1, 1, 87, 'inquiry', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(851, 1, 1, 88, 'inquiry_list', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(852, 1, 1, 89, 'payment_method', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(853, 1, 1, 90, 'add_payment_method', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(854, 1, 1, 91, 'payment_method_list', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(855, 1, 1, 93, 'add_payment_gateway', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(856, 1, 1, 94, 'payment_gateway_list', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(857, 1, 1, 95, 'rating', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(858, 1, 1, 96, 'rating_list', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(859, 1, 1, 97, 'report', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(860, 1, 1, 98, 'ticket_sold', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(861, 1, 1, 99, 'agent_report', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(862, 1, 1, 100, 'role', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(863, 1, 1, 101, 'add_role', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(864, 1, 1, 102, 'role_list', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(865, 1, 1, 103, 'add_menu', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(866, 1, 1, 104, 'menu_list', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(867, 1, 1, 105, 'add_permission', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(868, 1, 1, 106, 'permission_list', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(869, 1, 1, 107, 'tax', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(870, 1, 1, 108, 'add_tax', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(871, 1, 1, 109, 'tax_list', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(872, 1, 1, 113, 'trip', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(873, 1, 1, 114, 'add_trip', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(874, 1, 1, 115, 'trip_list', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(875, 1, 1, 116, 'add_facility', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(876, 1, 1, 117, 'facility_list', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(877, 1, 1, 118, 'website_setting', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(878, 1, 1, 119, 'webconfig', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(879, 1, 1, 120, 'db_backup', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(880, 1, 1, 121, 'add_social_media', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(881, 1, 1, 122, 'social_media_list', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(882, 1, 1, 123, 'email', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(883, 1, 1, 124, 'subscribe_list', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(884, 1, 1, 125, 'add_language_string', '1', '1', '1', '1', '2022-06-13 17:48:10', '2023-06-22 03:07:00', NULL),
(1669, 2, 1, 1, 'ticket_booking', '1', '1', '1', '1', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1670, 2, 1, 2, 'book_ticket', '1', '1', '1', '1', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1671, 2, 1, 3, 'ticket_list', '1', '1', '1', '1', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1672, 2, 1, 4, 'journey_list', '1', '1', '1', '1', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1673, 2, 1, 5, 'refund_list', '1', '1', '1', '1', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1674, 2, 1, 6, 'cancel_list', '1', '1', '1', '1', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1675, 2, 1, 7, 'book_time', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1676, 2, 1, 8, 'add_booking_time', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1677, 2, 1, 9, 'book_time_list', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1678, 2, 1, 12, 'agent', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1679, 2, 1, 13, 'add_agent', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1680, 2, 1, 14, 'agent_list', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1681, 2, 1, 15, 'account', '1', '1', '1', '1', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1682, 2, 1, 17, 'add_transaction', '1', '1', '1', '1', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1683, 2, 1, 18, 'transaction_list', '1', '1', '1', '1', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1684, 2, 1, 19, 'location', '1', '1', '1', '1', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1685, 2, 1, 20, 'add_location', '1', '1', '1', '1', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1686, 2, 1, 21, 'location_list', '1', '1', '1', '1', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1687, 2, 1, 22, 'add_stand', '1', '1', '1', '1', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1688, 2, 1, 23, 'stand_list', '1', '1', '1', '1', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1689, 2, 1, 24, 'schedule', '1', '1', '1', '1', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1690, 2, 1, 25, 'add_schedule', '1', '1', '1', '1', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1691, 2, 1, 26, 'schedule_list', '1', '1', '1', '1', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1692, 2, 1, 27, 'add_schedule_filter', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1693, 2, 1, 28, 'schedule_filter_list', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1694, 2, 1, 29, 'advertisement', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1695, 2, 1, 30, 'add_advertisement', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1696, 2, 1, 31, 'advertisement_list', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1697, 2, 1, 32, 'coupon', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1698, 2, 1, 33, 'add_coupon', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1699, 2, 1, 34, 'coupon_list', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1700, 2, 1, 36, 'employee', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1701, 2, 1, 37, 'add_employee_type', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1702, 2, 1, 38, 'employee_type_list', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1703, 2, 1, 39, 'add_employee', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1704, 2, 1, 40, 'employee_list', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1705, 2, 1, 41, 'fitness', '1', '1', '1', '1', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1706, 2, 1, 42, 'add_fitness', '1', '1', '1', '1', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1707, 2, 1, 43, 'fitness_list', '1', '1', '1', '1', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1708, 2, 1, 44, 'fleet', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1709, 2, 1, 45, 'add_fleet', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1710, 2, 1, 46, 'fleet_list', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1711, 2, 1, 47, 'add_vehicle', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1712, 2, 1, 48, 'vehicle_list', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1713, 2, 1, 49, 'frontend', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1714, 2, 1, 50, 'sectionone', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1715, 2, 1, 51, 'sectiontwo', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1716, 2, 1, 52, 'sectiontwo_two', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1717, 2, 1, 53, 'how_works_add', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1718, 2, 1, 54, 'how_works_list', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1719, 2, 1, 55, 'sectionthree', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1720, 2, 1, 56, 'sectionfour', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1721, 2, 1, 57, 'sectionfour_four', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1722, 2, 1, 58, 'add_comment', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1723, 2, 1, 59, 'comment_list', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1724, 2, 1, 60, 'sectionfive', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1725, 2, 1, 61, 'sectionsix', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1726, 2, 1, 62, 'sectionseven', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1727, 2, 1, 63, 'footer', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1728, 2, 1, 64, 'blog', '1', '1', '1', '1', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1729, 2, 1, 65, 'add_blog', '1', '1', '1', '1', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1730, 2, 1, 66, 'blog_list', '1', '1', '1', '1', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1731, 2, 1, 70, 'page', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1732, 2, 1, 71, 'about', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1733, 2, 1, 72, 'privacy', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1734, 2, 1, 73, 'cookies', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1735, 2, 1, 74, 'terms_conditions', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1736, 2, 1, 75, 'faq', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1737, 2, 1, 76, 'page_setup', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1738, 2, 1, 77, 'add_question', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1739, 2, 1, 78, 'question_list', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1740, 2, 1, 80, 'language', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1741, 2, 1, 81, 'language_add', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1742, 2, 1, 82, 'language_list', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1743, 2, 1, 84, 'passanger', '1', '1', '1', '1', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1744, 2, 1, 85, 'add_passanger', '1', '1', '1', '1', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1745, 2, 1, 86, 'passanger_list', '1', '1', '1', '1', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1746, 2, 1, 87, 'inquiry', '1', '1', '1', '1', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1747, 2, 1, 88, 'inquiry_list', '1', '1', '1', '1', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1748, 2, 1, 89, 'payment_method', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1749, 2, 1, 90, 'add_payment_method', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1750, 2, 1, 91, 'payment_method_list', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1751, 2, 1, 93, 'add_payment_gateway', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1752, 2, 1, 94, 'payment_gateway_list', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1753, 2, 1, 95, 'rating', '1', '1', '1', '1', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1754, 2, 1, 96, 'rating_list', '1', '1', '1', '1', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1755, 2, 1, 97, 'report', '1', '1', '1', '1', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1756, 2, 1, 98, 'ticket_sold', '1', '1', '1', '1', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1757, 2, 1, 99, 'agent_report', '1', '1', '1', '1', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1758, 2, 1, 100, 'role', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1759, 2, 1, 101, 'add_role', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1760, 2, 1, 102, 'role_list', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1761, 2, 1, 103, 'add_menu', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1762, 2, 1, 104, 'menu_list', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1763, 2, 1, 105, 'add_permission', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1764, 2, 1, 106, 'permission_list', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1765, 2, 1, 107, 'tax', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1766, 2, 1, 108, 'add_tax', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1767, 2, 1, 109, 'tax_list', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1768, 2, 1, 113, 'trip', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1769, 2, 1, 114, 'add_trip', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1770, 2, 1, 115, 'trip_list', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1771, 2, 1, 116, 'add_facility', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1772, 2, 1, 117, 'facility_list', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1773, 2, 1, 118, 'website_setting', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1774, 2, 1, 119, 'webconfig', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1775, 2, 1, 120, 'db_backup', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1776, 2, 1, 121, 'add_social_media', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1777, 2, 1, 122, 'social_media_list', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1778, 2, 1, 123, 'email', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1779, 2, 1, 124, 'subscribe_list', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL),
(1780, 2, 1, 125, 'add_language_string', '0', '0', '0', '0', '2022-06-27 17:28:34', '2023-06-22 03:07:00', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pickdrops`
--

CREATE TABLE `pickdrops` (
  `id` int(10) UNSIGNED NOT NULL,
  `trip_id` int(10) UNSIGNED NOT NULL,
  `stand_id` int(10) UNSIGNED NOT NULL,
  `time` tinytext NOT NULL,
  `type` int(11) NOT NULL,
  `detail` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `pickdrops`
--

INSERT INTO `pickdrops` (`id`, `trip_id`, `stand_id`, `time`, `type`, `detail`, `created_at`, `updated_at`, `deleted_at`) VALUES
(103, 26, 26, '09:30AM', 1, 'lorem ipsum', '2022-06-27 18:16:38', '2023-06-22 03:07:01', NULL),
(104, 26, 16, '05:30PM', 0, 'lorem ipsum', '2022-06-27 18:16:38', '2023-06-22 03:07:01', NULL),
(117, 22, 25, '07:00AM', 1, 'lorem ipsum', '2023-06-26 19:51:03', '2023-06-26 19:51:03', NULL),
(118, 22, 23, '12:00PM', 0, 'lorem ipsum', '2023-06-26 19:51:03', '2023-06-26 19:51:03', NULL),
(119, 23, 25, '09:00AM', 1, 'lorem ipsum', '2023-06-26 19:51:16', '2023-06-26 19:51:16', NULL),
(120, 23, 24, '05:00PM', 0, 'lorem ipsum', '2023-06-26 19:51:16', '2023-06-26 19:51:16', NULL),
(121, 24, 25, '10:00PM', 1, 'lorem ipsum', '2023-06-26 19:51:30', '2023-06-26 19:51:30', NULL),
(122, 24, 18, '05:00AM', 0, 'lorem ipsum', '2023-06-26 19:51:30', '2023-06-26 19:51:30', NULL),
(123, 25, 25, '11:00PM', 1, 'lorem ipsum', '2023-06-26 19:51:37', '2023-06-26 19:51:37', NULL),
(124, 25, 20, '07:00PM', 0, 'lorem ipsum', '2023-06-26 19:51:37', '2023-06-26 19:51:37', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `privacies`
--

CREATE TABLE `privacies` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` tinytext NOT NULL,
  `sub_title` tinytext NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `privacies`
--

INSERT INTO `privacies` (`id`, `title`, `sub_title`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Privacy Page Title Lorem ipsum', 'Privacy Page sub-Title Lorem Ipsum', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '2021-12-19 13:37:38', '2023-06-22 03:07:02', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ratings`
--

CREATE TABLE `ratings` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `trip_id` int(10) UNSIGNED NOT NULL,
  `subtrip_id` int(10) UNSIGNED NOT NULL,
  `booking_id` varchar(100) NOT NULL,
  `comments` text DEFAULT NULL,
  `rating` double NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `razors`
--

CREATE TABLE `razors` (
  `id` int(10) UNSIGNED NOT NULL,
  `test_s_kye` text NOT NULL,
  `live_s_kye` text NOT NULL,
  `environment` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `razors`
--

INSERT INTO `razors` (`id`, `test_s_kye`, `live_s_kye`, `environment`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'rzp_test_nv8ESySdZ6Gaqq', 'rzp_test_nv8ESySdZ6Gaqq', '0', '2022-02-01 11:41:07', '2023-06-22 03:07:03', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `refunds`
--

CREATE TABLE `refunds` (
  `id` int(10) UNSIGNED NOT NULL,
  `booking_id` varchar(100) NOT NULL,
  `refund_fee` varchar(100) DEFAULT NULL,
  `pay_type_id` varchar(100) DEFAULT NULL,
  `track_table_id` varchar(100) DEFAULT NULL,
  `type` varchar(100) NOT NULL,
  `detail` tinytext DEFAULT NULL,
  `refund_by` int(10) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `refunds`
--

INSERT INTO `refunds` (`id`, `booking_id`, `refund_fee`, `pay_type_id`, `track_table_id`, `type`, `detail`, `refund_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 'TBTPU2Y8GR', '', '1', '131', 'ticket', '', 1, '2023-06-26 21:00:44', '2023-06-26 21:00:44', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Supper Admin', '1', '2021-11-11 04:25:19', '2023-06-22 03:07:03', NULL),
(2, 'Agent', '1', '2021-11-11 04:25:55', '2023-06-22 03:07:03', NULL),
(3, 'Passanger', '1', '2021-11-11 04:26:08', '2023-06-22 03:07:03', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `schedulefilters`
--

CREATE TABLE `schedulefilters` (
  `id` int(10) UNSIGNED NOT NULL,
  `start_time` tinytext NOT NULL,
  `end_time` tinytext NOT NULL,
  `type` int(11) NOT NULL,
  `detail` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `schedulefilters`
--

INSERT INTO `schedulefilters` (`id`, `start_time`, `end_time`, `type`, `detail`, `created_at`, `updated_at`, `deleted_at`) VALUES
(14, '06:00 AM', '09:30 AM', 1, '06:00 AM-09:30 AM', '2022-06-27 16:36:16', '2023-06-22 03:07:04', NULL),
(15, '09:00 AM', '11:00 AM', 1, '09:00 AM-11:00 AM', '2022-06-27 16:37:24', '2023-06-22 03:07:04', NULL),
(16, '01:00 PM', '03:00 PM', 0, '01:00 PM-03:00 PM', '2022-06-27 16:37:45', '2023-06-22 03:07:04', NULL),
(17, '03:00 PM', '06:00 PM', 0, '03:00 PM-06:00 PM', '2022-06-27 16:38:10', '2023-06-22 03:07:04', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `schedules`
--

CREATE TABLE `schedules` (
  `id` int(10) UNSIGNED NOT NULL,
  `start_time` tinytext NOT NULL,
  `end_time` tinytext NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `schedules`
--

INSERT INTO `schedules` (`id`, `start_time`, `end_time`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(8, '07:00 PM', '03:00 PM', '', '2022-06-27 14:33:16', '2023-06-22 03:07:05', NULL),
(9, '07:30 AM', '03:30 PM', '', '2022-06-27 14:34:02', '2023-06-22 03:07:05', NULL),
(10, '09:00 AM', '05:00 PM', '', '2022-06-27 14:34:45', '2023-06-22 03:07:05', NULL),
(11, '09:30 AM', '05:30 PM', '', '2022-06-27 14:35:26', '2023-06-22 03:07:05', NULL),
(12, '10:00 PM', '06:00 AM', '', '2022-06-27 14:36:21', '2023-06-22 03:07:05', NULL),
(13, '11:00 PM', '07:00 AM', '', '2022-06-27 14:37:00', '2023-06-22 03:07:05', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `section_five_app`
--

CREATE TABLE `section_five_app` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` text NOT NULL,
  `title` text NOT NULL,
  `sub_title` text NOT NULL,
  `button_one_status` int(11) NOT NULL,
  `button_one_link` text NOT NULL,
  `button_two_status` int(11) NOT NULL,
  `button_two_link` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `section_five_app`
--

INSERT INTO `section_five_app` (`id`, `image`, `title`, `sub_title`, `button_one_status`, `button_one_link`, `button_two_status`, `button_two_link`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'image/frontend/1656312221_813a7706eedaccfc5be7.png', 'Have you tried ourmobile app? ', 'World’s leading tour and travels Booking website,Over30,000 packages worldwide. Book travel packages andenjoy your holidays with distinctive experience', 1, 'https://www.apple.com/app-store/', 0, 'https://play.google.com/store?hl=en_US&gl=US', '2022-06-27 06:43:41', '2023-06-22 03:07:05', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `section_four_comment`
--

CREATE TABLE `section_four_comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `sub_title` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `section_four_comment`
--

INSERT INTO `section_four_comment` (`id`, `title`, `sub_title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Customer Testimonials rr', 'Read what our customers have to say about our fleet and services. ter', '2021-11-07 11:50:18', '2023-06-22 03:07:06', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `section_four_detail`
--

CREATE TABLE `section_four_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` text NOT NULL,
  `image` text DEFAULT NULL,
  `person_name` text NOT NULL,
  `person_detail` text NOT NULL,
  `serial` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `section_four_detail`
--

INSERT INTO `section_four_detail` (`id`, `description`, `image`, `person_name`, `person_detail`, `serial`, `created_at`, `updated_at`, `deleted_at`) VALUES
(11, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>\r\n', 'image/frontend/1656312470_507a31610b879a560a11.jpg', 'Carter', 'fugiat voluptas ducimus', 6, '2022-06-27 06:47:50', '2023-06-22 03:07:07', NULL),
(12, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>\r\n', 'image/frontend/1656312485_f85fdb956d920b2e9f73.jpg', 'Helen', 'ad aut molestiae', 5, '2022-06-27 06:48:05', '2023-06-22 03:07:07', NULL),
(13, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>\r\n', 'image/frontend/1656312498_d4f4fa227513a1c8be6c.jpg', 'Jordyn', 'ipsum qui distinctio', 7, '2022-06-27 06:48:18', '2023-06-22 03:07:07', NULL),
(14, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>\r\n', 'image/frontend/1656312511_3e377bc7406f338d6fd4.jpg', 'Jennie', 'temporibus ad earum', 6, '2022-06-27 06:48:31', '2023-06-22 03:07:07', NULL),
(15, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>\r\n', 'image/frontend/1656312526_ea1818ddab2aefe886ac.jpg', 'Martin', 'ipsa totam iure', 2, '2022-06-27 06:48:46', '2023-06-22 03:07:07', NULL),
(16, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>\r\n', 'image/frontend/1656312539_977d32df652c2a05538c.jpg', 'Oren', 'nulla molestias et', 5, '2022-06-27 06:48:59', '2023-06-22 03:07:07', NULL),
(17, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>\r\n', 'image/frontend/1656312552_563bd6745369b85caa4d.jpg', 'Dawson', 'ullam quo praesentium', 6, '2022-06-27 06:49:12', '2023-06-22 03:07:07', NULL),
(18, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>\r\n', 'image/frontend/1656312567_8ed935ef0b22e1827d49.jpg', 'Colton', 'error enim id', 5, '2022-06-27 06:49:27', '2023-06-22 03:07:07', NULL),
(19, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>\r\n', 'image/frontend/1656312580_29ad0457186cccd5c484.jpg', 'Leland', 'autem eum facilis', 3, '2022-06-27 06:49:40', '2023-06-22 03:07:07', NULL),
(21, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>\r\n', 'image/frontend/1656312593_b42da804665c1456a7fb.jpg', 'test', 'sdfafdf', 19, '2022-06-27 06:49:53', '2023-06-22 03:07:07', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `section_one_home`
--

CREATE TABLE `section_one_home` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `sub_title` varchar(100) NOT NULL,
  `button_text` text NOT NULL,
  `image` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `section_one_home`
--

INSERT INTO `section_one_home` (`id`, `title`, `sub_title`, `button_text`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'BOOK YOUR BUS TICKET ', 'Choose Your Destinations And Dates To Reserve A Ticket ', 'Book Now', 'image/frontend/1656311237_5a3bdfeb6b04219223de.jpg', '2022-06-27 06:27:17', '2023-06-22 03:07:09', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `section_seven_subscrib`
--

CREATE TABLE `section_seven_subscrib` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `sub_title` text NOT NULL,
  `image` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `section_seven_subscrib`
--

INSERT INTO `section_seven_subscrib` (`id`, `title`, `sub_title`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Never miss an offer', 'Subscribe and be the first to receive our exclusive offers', 'image/frontend/1656311736_484a848874ed9fd60f60.png', '2022-06-27 06:35:36', '2023-06-22 03:07:10', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `section_six_blog`
--

CREATE TABLE `section_six_blog` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `sub_title` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `section_six_blog`
--

INSERT INTO `section_six_blog` (`id`, `title`, `sub_title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Travel Blog', 'Book cheap Trio on your favourite Buses', '2021-11-07 13:06:43', '2023-06-22 03:07:11', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `section_three_heading`
--

CREATE TABLE `section_three_heading` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `sub_title` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `section_three_heading`
--

INSERT INTO `section_three_heading` (`id`, `title`, `sub_title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'this is sub trip ', 'this is test ', '2021-11-07 11:56:30', '2023-06-22 03:07:11', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `section_two_detail`
--

CREATE TABLE `section_two_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `button_text` text NOT NULL,
  `image` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `section_two_detail`
--

INSERT INTO `section_two_detail` (`id`, `title`, `description`, `button_text`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'Book Online', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>\r\n', 'Read More', 'image/frontend/1656312863_36111e139f2e271f49ae.png', '2022-06-27 06:55:00', '2023-06-22 03:07:12', NULL),
(5, 'Payment', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>\r\n', 'Read More', 'image/frontend/1656312982_4162a886de1c6071373d.png', '2022-06-27 06:56:22', '2023-06-22 03:07:12', NULL),
(6, 'Get Ticket', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>\r\n', 'Read More', 'image/frontend/1656313026_728637e0091e910fceab.png', '2022-06-27 06:57:06', '2023-06-22 03:07:12', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `section_two_work_flow`
--

CREATE TABLE `section_two_work_flow` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `sub_title` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `section_two_work_flow`
--

INSERT INTO `section_two_work_flow` (`id`, `title`, `sub_title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'How It Works ', 'Book Cheap Trip On Your Favourite Buses ', '2021-11-06 16:39:55', '2023-06-22 03:07:12', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `socialmedias`
--

CREATE TABLE `socialmedias` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_path` text NOT NULL,
  `link` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `socialmedias`
--

INSERT INTO `socialmedias` (`id`, `image_path`, `link`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'image/social/1656241155_83eb81e8472e4a40ce18.png', 'https://www.instagram.com/accounts/login/?hl=en', '2021-12-18 14:53:04', '2023-06-22 03:07:13', NULL),
(2, 'image/social/1656241168_0122bd4363ea397d30b7.png', 'https://twitter.com/?lang=en', '2021-12-18 14:53:54', '2023-06-22 03:07:13', NULL),
(3, 'image/social/1656241180_eeb2bca4ba4c1265dce9.png', 'https://www.facebook.com/', '2022-03-26 19:04:55', '2023-06-22 03:07:13', NULL),
(4, 'image/social/1656241188_343eccdd9d86058efa9f.png', 'https://www.youtube.com/', '2022-03-26 19:07:56', '2023-06-22 03:07:13', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `socialsignins`
--

CREATE TABLE `socialsignins` (
  `id` int(10) UNSIGNED NOT NULL,
  `appid` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `other` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stands`
--

CREATE TABLE `stands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `stands`
--

INSERT INTO `stands` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(15, 'UTTARA', '2022-06-27 14:21:08', '2023-06-26 18:43:44', '2023-06-26 18:43:44'),
(16, 'MOHAKHALI', '2022-06-27 14:24:10', '2023-06-26 18:43:40', '2023-06-26 18:43:40'),
(17, 'KALLYANPUR', '2022-06-27 14:24:58', '2023-06-26 18:43:53', '2023-06-26 18:43:53'),
(18, 'Jakarta-DPK(Jln Margonda Raya No. 330, Kemirimuka, Beji, Depok Jawa Barat)', '2022-06-27 14:25:37', '2023-06-26 18:47:21', NULL),
(19, 'TANGAIL BUS STAND', '2022-06-27 14:26:21', '2023-06-26 18:43:30', '2023-06-26 18:43:30'),
(20, 'Jakarta-CBB(Kawasan Niaga Citra Gran Cibubur Blok R6A No.2)', '2022-06-27 14:27:04', '2023-06-26 18:47:38', NULL),
(21, 'SOTIBARI ', '2022-06-27 14:28:15', '2023-06-26 18:43:21', '2023-06-26 18:43:21'),
(22, 'PIRGANJ', '2022-06-27 14:28:35', '2023-06-26 18:43:16', '2023-06-26 18:43:16'),
(23, 'Jakarta-BKS(Mega Bekasi Hypermall Lantai Dasar No 29a)', '2022-06-27 14:29:02', '2023-06-26 18:47:53', NULL),
(24, 'Jakarta-JTR(jl. Raya Jatiwaringin No 4 RT.011/RW.005 Cipinang Melayu, Makasar, Jakarta Timur)', '2022-06-27 14:30:03', '2023-06-26 18:48:03', NULL),
(25, 'Bandung-CHM(jl. Cihampelas No 42 RT/RW 001/017 Taman Sari, Bandung Wetan, Kota Bandung 40116)', '2022-06-27 14:31:33', '2023-06-26 18:48:16', NULL),
(26, 'BRTC BUS STAND', '2022-06-27 14:31:54', '2023-06-26 18:43:49', '2023-06-26 18:43:49'),
(27, 'PANCHAGARH BUS STAND', '2022-06-27 16:56:59', '2023-06-26 18:43:37', '2023-06-26 18:43:37'),
(28, 'NILPHAMARI BUS STAND', '2022-06-27 16:57:15', '2023-06-26 18:43:56', '2023-06-26 18:43:56'),
(29, 'LALMONIRHAT BUS STAND', '2022-06-27 16:57:30', '2023-06-26 18:43:27', '2023-06-26 18:43:27'),
(30, '	KURIGRAM BUS STAND', '2022-06-27 16:57:46', '2023-06-26 18:43:24', '2023-06-26 18:43:24'),
(31, 'GAIBANDHA BUS STAND', '2022-06-27 16:58:03', '2023-06-26 18:43:46', '2023-06-26 18:43:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stripes`
--

CREATE TABLE `stripes` (
  `id` int(10) UNSIGNED NOT NULL,
  `test_p_kye` text NOT NULL,
  `test_s_kye` text NOT NULL,
  `live_p_kye` text NOT NULL,
  `live_s_kye` text NOT NULL,
  `environment` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `stripes`
--

INSERT INTO `stripes` (`id`, `test_p_kye`, `test_s_kye`, `live_p_kye`, `live_s_kye`, `environment`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'pk_test_51KOFikFc0lmoA84nCaAiNKJ2bpbxLkirsH7mzjy4SxPPDAVDpz5kL4Vdu4UvXuEalx4UyhF0kx5Go4YSjHSaiBQK00UFpxKNWl', 'sk_test_51KOFikFc0lmoA84nRjf7U2V8RPgslalbjNQ8iFbV2kXDBhn5jlhAhQRlJMmPVxq4cDjVLl3L4Vlgd0dzG0Pw4bVp00pagMFqJh', 'pk_test_51KOFikFc0lmoA84nCaAiNKJ2bpbxLkirsH7mzjy4SxPPDAVDpz5kL4Vdu4UvXuEalx4UyhF0kx5Go4YSjHSaiBQK00UFpxKNWl', 'sk_test_51KOFikFc0lmoA84nRjf7U2V8RPgslalbjNQ8iFbV2kXDBhn5jlhAhQRlJMmPVxq4cDjVLl3L4Vlgd0dzG0Pw4bVp00pagMFqJh', '1', '2022-02-01 16:53:53', '2023-06-22 03:07:15', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `stuffassigns`
--

CREATE TABLE `stuffassigns` (
  `id` int(10) UNSIGNED NOT NULL,
  `trip_id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(10) UNSIGNED NOT NULL,
  `employee_type` tinytext NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `stuffassigns`
--

INSERT INTO `stuffassigns` (`id`, `trip_id`, `employee_id`, `employee_type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(120, 26, 11, '1', '2022-06-27 18:16:38', '2023-06-22 03:07:15', NULL),
(121, 26, 15, '2', '2022-06-27 18:16:38', '2023-06-22 03:07:15', NULL),
(134, 22, 10, '1', '2023-06-26 19:51:03', '2023-06-26 19:51:03', NULL),
(135, 22, 13, '2', '2023-06-26 19:51:03', '2023-06-26 19:51:03', NULL),
(136, 23, 11, '1', '2023-06-26 19:51:16', '2023-06-26 19:51:16', NULL),
(137, 23, 14, '2', '2023-06-26 19:51:16', '2023-06-26 19:51:16', NULL),
(138, 24, 10, '1', '2023-06-26 19:51:30', '2023-06-26 19:51:30', NULL),
(139, 24, 12, '1', '2023-06-26 19:51:30', '2023-06-26 19:51:30', NULL),
(140, 24, 13, '2', '2023-06-26 19:51:30', '2023-06-26 19:51:30', NULL),
(141, 24, 15, '2', '2023-06-26 19:51:30', '2023-06-26 19:51:30', NULL),
(142, 25, 10, '1', '2023-06-26 19:51:37', '2023-06-26 19:51:37', NULL),
(143, 25, 13, '2', '2023-06-26 19:51:37', '2023-06-26 19:51:37', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `subscribes`
--

CREATE TABLE `subscribes` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(13, 't1@t.com', '2022-06-27 17:22:10', '2023-06-22 03:07:17', NULL),
(14, 't2@t.com', '2022-06-27 17:22:19', '2023-06-22 03:07:17', NULL),
(15, 't3@t.com', '2022-06-27 17:22:28', '2023-06-22 03:07:17', NULL),
(16, 't4@t.com', '2022-06-27 17:22:35', '2023-06-22 03:07:17', NULL),
(17, 't5@t.com', '2022-06-27 17:22:43', '2023-06-22 03:07:17', NULL),
(18, 't6@t.com', '2022-06-27 17:22:52', '2023-06-22 03:07:17', NULL),
(19, 't7@t.com', '2022-06-27 17:23:01', '2023-06-22 03:07:17', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `subtrips`
--

CREATE TABLE `subtrips` (
  `id` int(10) UNSIGNED NOT NULL,
  `trip_id` int(10) UNSIGNED NOT NULL,
  `pick_location_id` int(10) UNSIGNED NOT NULL,
  `drop_location_id` int(10) UNSIGNED NOT NULL,
  `adult_fair` tinytext NOT NULL,
  `child_fair` tinytext DEFAULT NULL,
  `special_fair` tinytext DEFAULT NULL,
  `type` tinytext NOT NULL,
  `show` tinytext DEFAULT NULL,
  `imglocation` text DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `subtrips`
--

INSERT INTO `subtrips` (`id`, `trip_id`, `pick_location_id`, `drop_location_id`, `adult_fair`, `child_fair`, `special_fair`, `type`, `show`, `imglocation`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(36, 22, 44, 42, '800', '500', '600', 'main', NULL, NULL, '1', '2022-06-27 16:33:05', '2023-06-26 19:51:03', NULL),
(37, 22, 42, 44, '500', '300', '400', 'subtrip', '1', 'image/subtrip/1656326058_7d8355a3f22bdb1008d6.jpg', '1', '2022-06-27 16:34:18', '2023-06-26 19:55:41', NULL),
(38, 23, 44, 43, '900', '', '', 'main', NULL, NULL, '1', '2022-06-27 17:50:49', '2023-06-26 19:51:16', NULL),
(39, 23, 43, 44, '600', '', '', 'subtrip', '1', 'image/subtrip/1656330935_dac19776e9bb7986e3a5.jpg', '1', '2022-06-27 17:55:35', '2023-06-26 19:51:16', NULL),
(40, 24, 44, 40, '1000', '500', '600', 'main', NULL, NULL, '1', '2022-06-27 17:59:02', '2023-06-26 19:51:30', NULL),
(41, 24, 40, 44, '800', '300', '400', 'subtrip', '1', 'image/subtrip/1656331204_90f5f16830829d43252e.jpg', '1', '2022-06-27 18:00:04', '2023-06-26 19:51:30', NULL),
(42, 25, 44, 41, '1200', '600', '700', 'main', NULL, NULL, '1', '2022-06-27 18:04:23', '2023-06-26 19:51:37', NULL),
(43, 25, 41, 44, '900', '300', '350', 'subtrip', '1', 'image/subtrip/1656331509_29d6c75e7a96fb57ba35.jpg', '1', '2022-06-27 18:05:09', '2023-06-26 19:51:37', NULL),
(44, 22, 43, 31, '650', '', '', 'subtrip', '1', 'image/subtrip/1656331570_22bb4359d1e04d14b523.jpg', '1', '2022-06-27 18:06:10', '2023-06-26 19:51:03', '2023-06-26 19:43:10'),
(45, 26, 42, 32, '1200', '', '', 'main', NULL, NULL, '1', '2022-06-27 18:16:38', '2023-06-26 19:44:14', '2023-06-26 19:44:14'),
(46, 26, 42, 33, '680', '', '', 'subtrip', '1', 'image/subtrip/1656332228_0661a1d5728953e13e3f.jpg', '1', '2022-06-27 18:17:08', '2023-06-26 19:44:14', '2023-06-26 19:44:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `taxes`
--

CREATE TABLE `taxes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `tax_reg` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `taxes`
--

INSERT INTO `taxes` (`id`, `name`, `tax_reg`, `status`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'GST TAX', 'ABC123', '1', '5', '2022-06-27 14:40:14', '2023-06-22 03:07:19', NULL),
(7, 'CGT', '123ABC', '1', '7', '2022-06-27 14:40:53', '2023-06-22 03:07:19', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `terms`
--

CREATE TABLE `terms` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` tinytext NOT NULL,
  `sub_title` tinytext NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `terms`
--

INSERT INTO `terms` (`id`, `title`, `sub_title`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Terms And Conditions Page Title Lorem Ipsum', 'terms and conditions sub-title page lorem ipsum', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '2021-12-19 13:58:56', '2023-06-22 03:07:22', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tickets`
--

CREATE TABLE `tickets` (
  `id` int(10) UNSIGNED NOT NULL,
  `booking_id` varchar(100) NOT NULL,
  `trip_id` int(10) UNSIGNED NOT NULL,
  `subtrip_id` int(10) UNSIGNED NOT NULL,
  `passanger_id` int(10) UNSIGNED NOT NULL,
  `pick_location_id` int(10) UNSIGNED NOT NULL,
  `drop_location_id` int(10) UNSIGNED NOT NULL,
  `pick_stand_id` int(10) UNSIGNED NOT NULL,
  `drop_stand_id` int(10) UNSIGNED NOT NULL,
  `price` tinytext NOT NULL,
  `discount` tinytext DEFAULT NULL,
  `totaltax` tinytext DEFAULT NULL,
  `paidamount` tinytext NOT NULL,
  `offerer` tinytext DEFAULT NULL,
  `adult` tinytext DEFAULT NULL,
  `chield` tinytext DEFAULT NULL,
  `special` tinytext DEFAULT NULL,
  `seatnumber` tinytext NOT NULL,
  `totalseat` tinytext NOT NULL,
  `refund` tinytext DEFAULT NULL,
  `bookby_user_id` int(10) UNSIGNED NOT NULL,
  `bookby_user_type` tinytext DEFAULT NULL,
  `journeydata` datetime NOT NULL,
  `pay_type_id` int(11) DEFAULT NULL,
  `pay_method_id` int(11) DEFAULT NULL,
  `payment_status` tinytext NOT NULL,
  `vehicle_id` int(10) UNSIGNED NOT NULL,
  `payment_detail` tinytext DEFAULT NULL,
  `cancel_status` tinytext DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tickets`
--

INSERT INTO `tickets` (`id`, `booking_id`, `trip_id`, `subtrip_id`, `passanger_id`, `pick_location_id`, `drop_location_id`, `pick_stand_id`, `drop_stand_id`, `price`, `discount`, `totaltax`, `paidamount`, `offerer`, `adult`, `chield`, `special`, `seatnumber`, `totalseat`, `refund`, `bookby_user_id`, `bookby_user_type`, `journeydata`, `pay_type_id`, `pay_method_id`, `payment_status`, `vehicle_id`, `payment_detail`, `cancel_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(121, 'TB8E4G57FO', 23, 38, 170, 32, 30, 95, 96, '900', '25', '108', '983', 'BUS1656332357', '1', '0', '0', 'B1', '1', '0', 1, 'Supper Admin', '2022-06-28 00:00:00', 1, NULL, 'paid', 14, 'Lorme Ipsum Lorme', '1', '2022-06-28 15:08:21', '2023-06-26 19:50:00', NULL),
(122, 'TBFKS8YEBW', 23, 38, 171, 32, 30, 95, 96, '900', '10', '108', '998', '', '1', '0', '0', 'B3', '1', '0', 1, 'Supper Admin', '2022-06-28 00:00:00', 1, NULL, 'partial', 14, 'Lorme Ipsum Lorme', '1', '2022-06-28 15:15:21', '2023-06-26 19:49:49', NULL),
(123, 'TBJ3D2RY0P', 24, 41, 170, 25, 43, 97, 99, '800', '0', '96', '896', '', '1', '0', '0', 'A1', '1', '0', 1, 'Supper Admin', '2022-06-28 00:00:00', 1, NULL, 'paid', 15, 'Lorme Ipsum Lorme', '1', '2022-06-28 15:16:50', '2023-06-26 19:49:39', NULL),
(124, 'TBNYFQET3S', 25, 43, 171, 43, 33, 101, 102, '900', '0', '108', '1008', '', '1', '0', '0', 'G2', '1', '0', 1, 'Supper Admin', '2022-06-28 00:00:00', 1, NULL, 'partial', 12, '', '1', '2022-06-28 15:17:58', '2023-06-26 19:49:26', NULL),
(125, 'TB76DFM1CA', 24, 40, 171, 30, 32, 97, 100, '1000', '0', '120', '1120', '0', '1', '', '', 'E2', '1', '0', 171, 'passanger', '2022-06-28 00:00:00', NULL, 999, 'partial', 15, 'This is pay details', '1', '2022-06-28 15:19:21', '2023-06-26 19:49:13', NULL),
(126, 'TBXT8KPHV2', 24, 41, 168, 25, 43, 98, 99, '800', '0', '96', '896', '', '1', '0', '0', 'B3', '1', '0', 1, 'Supper Admin', '2022-06-28 00:00:00', 1, NULL, 'paid', 15, 'Lorme Ipsum Lorme', '1', '2022-06-28 15:20:54', '2023-06-22 03:07:23', NULL),
(127, 'TBA9X180HU', 23, 38, 168, 32, 30, 95, 96, '900', '0', '108', '1008', '', '1', '0', '0', 'F4', '1', '1', 1, 'Supper Admin', '2022-06-28 00:00:00', 1, NULL, 'paid', 14, 'Lorme Ipsum Lorme', '0', '2022-06-28 15:22:26', '2023-06-22 03:07:23', NULL),
(129, 'TBNLAC74XK', 22, 36, 184, 44, 42, 117, 118, '1300', '0', '156', '1456', '', '1', '1', '0', 'A1,A2', '2', '0', 1, 'Supper Admin', '2023-06-27 00:00:00', 1, NULL, 'paid', 11, '', '0', '2023-06-26 20:50:06', '2023-06-26 20:50:06', NULL),
(130, 'TBD6OPY4TC', 22, 36, 181, 44, 42, 117, 118, '800', '0', '96', '896', '', '1', '0', '0', 'D2', '1', '0', 1, 'Supper Admin', '2023-06-27 00:00:00', 1, NULL, 'partial', 11, '', '0', '2023-06-26 20:51:26', '2023-06-26 20:51:26', NULL),
(131, 'TBTPU2Y8GR', 22, 36, 180, 44, 42, 117, 118, '2100', '0', '252', '2352', '', '2', '1', '0', 'C1,C2,B2', '3', '1', 1, 'Supper Admin', '2023-06-27 00:00:00', 1, NULL, 'paid', 11, '', '0', '2023-06-26 20:54:10', '2023-06-26 21:00:44', NULL),
(132, 'TB65E2BU7Y', 22, 37, 183, 42, 44, 117, 118, '500', '0', '60', '560', '', '1', '0', '0', 'B1', '1', '0', 1, 'Supper Admin', '2023-06-26 00:00:00', 1, NULL, 'paid', 11, '', '1', '2023-06-26 20:55:43', '2023-06-26 20:57:38', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `timezone`
--

CREATE TABLE `timezone` (
  `id` int(11) NOT NULL,
  `country_code` char(3) NOT NULL,
  `timezone` varchar(125) NOT NULL DEFAULT '',
  `gmt_offset` float(10,2) DEFAULT NULL,
  `dst_offset` float(10,2) DEFAULT NULL,
  `raw_offset` float(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `timezone`
--

INSERT INTO `timezone` (`id`, `country_code`, `timezone`, `gmt_offset`, `dst_offset`, `raw_offset`) VALUES
(1, 'AD', 'Europe/Andorra', 1.00, 2.00, 1.00),
(2, 'AE', 'Asia/Dubai', 4.00, 4.00, 4.00),
(3, 'AF', 'Asia/Kabul', 4.50, 4.50, 4.50),
(4, 'AG', 'America/Antigua', -4.00, -4.00, -4.00),
(5, 'AI', 'America/Anguilla', -4.00, -4.00, -4.00),
(6, 'AL', 'Europe/Tirane', 1.00, 2.00, 1.00),
(7, 'AM', 'Asia/Yerevan', 4.00, 4.00, 4.00),
(8, 'AO', 'Africa/Luanda', 1.00, 1.00, 1.00),
(9, 'AQ', 'Antarctica/Casey', 8.00, 8.00, 8.00),
(10, 'AQ', 'Antarctica/Davis', 7.00, 7.00, 7.00),
(11, 'AQ', 'Antarctica/DumontDUrville', 10.00, 10.00, 10.00),
(12, 'AQ', 'Antarctica/Mawson', 5.00, 5.00, 5.00),
(13, 'AQ', 'Antarctica/McMurdo', 13.00, 12.00, 12.00),
(14, 'AQ', 'Antarctica/Palmer', -3.00, -4.00, -4.00),
(15, 'AQ', 'Antarctica/Rothera', -3.00, -3.00, -3.00),
(16, 'AQ', 'Antarctica/South_Pole', 13.00, 12.00, 12.00),
(17, 'AQ', 'Antarctica/Syowa', 3.00, 3.00, 3.00),
(18, 'AQ', 'Antarctica/Vostok', 6.00, 6.00, 6.00),
(19, 'AR', 'America/Argentina/Buenos_Aires', -3.00, -3.00, -3.00),
(20, 'AR', 'America/Argentina/Catamarca', -3.00, -3.00, -3.00),
(21, 'AR', 'America/Argentina/Cordoba', -3.00, -3.00, -3.00),
(22, 'AR', 'America/Argentina/Jujuy', -3.00, -3.00, -3.00),
(23, 'AR', 'America/Argentina/La_Rioja', -3.00, -3.00, -3.00),
(24, 'AR', 'America/Argentina/Mendoza', -3.00, -3.00, -3.00),
(25, 'AR', 'America/Argentina/Rio_Gallegos', -3.00, -3.00, -3.00),
(26, 'AR', 'America/Argentina/Salta', -3.00, -3.00, -3.00),
(27, 'AR', 'America/Argentina/San_Juan', -3.00, -3.00, -3.00),
(28, 'AR', 'America/Argentina/San_Luis', -3.00, -3.00, -3.00),
(29, 'AR', 'America/Argentina/Tucuman', -3.00, -3.00, -3.00),
(30, 'AR', 'America/Argentina/Ushuaia', -3.00, -3.00, -3.00),
(31, 'AS', 'Pacific/Pago_Pago', -11.00, -11.00, -11.00),
(32, 'AT', 'Europe/Vienna', 1.00, 2.00, 1.00),
(33, 'AU', 'Antarctica/Macquarie', 11.00, 11.00, 11.00),
(34, 'AU', 'Australia/Adelaide', 10.50, 9.50, 9.50),
(35, 'AU', 'Australia/Brisbane', 10.00, 10.00, 10.00),
(36, 'AU', 'Australia/Broken_Hill', 10.50, 9.50, 9.50),
(37, 'AU', 'Australia/Currie', 11.00, 10.00, 10.00),
(38, 'AU', 'Australia/Darwin', 9.50, 9.50, 9.50),
(39, 'AU', 'Australia/Eucla', 8.75, 8.75, 8.75),
(40, 'AU', 'Australia/Hobart', 11.00, 10.00, 10.00),
(41, 'AU', 'Australia/Lindeman', 10.00, 10.00, 10.00),
(42, 'AU', 'Australia/Lord_Howe', 11.00, 10.50, 10.50),
(43, 'AU', 'Australia/Melbourne', 11.00, 10.00, 10.00),
(44, 'AU', 'Australia/Perth', 8.00, 8.00, 8.00),
(45, 'AU', 'Australia/Sydney', 11.00, 10.00, 10.00),
(46, 'AW', 'America/Aruba', -4.00, -4.00, -4.00),
(47, 'AX', 'Europe/Mariehamn', 2.00, 3.00, 2.00),
(48, 'AZ', 'Asia/Baku', 4.00, 5.00, 4.00),
(49, 'BA', 'Europe/Sarajevo', 1.00, 2.00, 1.00),
(50, 'BB', 'America/Barbados', -4.00, -4.00, -4.00),
(51, 'BD', 'Asia/Dhaka', 6.00, 6.00, 6.00),
(52, 'BE', 'Europe/Brussels', 1.00, 2.00, 1.00),
(53, 'BF', 'Africa/Ouagadougou', 0.00, 0.00, 0.00),
(54, 'BG', 'Europe/Sofia', 2.00, 3.00, 2.00),
(55, 'BH', 'Asia/Bahrain', 3.00, 3.00, 3.00),
(56, 'BI', 'Africa/Bujumbura', 2.00, 2.00, 2.00),
(57, 'BJ', 'Africa/Porto-Novo', 1.00, 1.00, 1.00),
(58, 'BL', 'America/St_Barthelemy', -4.00, -4.00, -4.00),
(59, 'BM', 'Atlantic/Bermuda', -4.00, -3.00, -4.00),
(60, 'BN', 'Asia/Brunei', 8.00, 8.00, 8.00),
(61, 'BO', 'America/La_Paz', -4.00, -4.00, -4.00),
(62, 'BQ', 'America/Kralendijk', -4.00, -4.00, -4.00),
(63, 'BR', 'America/Araguaina', -3.00, -3.00, -3.00),
(64, 'BR', 'America/Bahia', -3.00, -3.00, -3.00),
(65, 'BR', 'America/Belem', -3.00, -3.00, -3.00),
(66, 'BR', 'America/Boa_Vista', -4.00, -4.00, -4.00),
(67, 'BR', 'America/Campo_Grande', -3.00, -4.00, -4.00),
(68, 'BR', 'America/Cuiaba', -3.00, -4.00, -4.00),
(69, 'BR', 'America/Eirunepe', -5.00, -5.00, -5.00),
(70, 'BR', 'America/Fortaleza', -3.00, -3.00, -3.00),
(71, 'BR', 'America/Maceio', -3.00, -3.00, -3.00),
(72, 'BR', 'America/Manaus', -4.00, -4.00, -4.00),
(73, 'BR', 'America/Noronha', -2.00, -2.00, -2.00),
(74, 'BR', 'America/Porto_Velho', -4.00, -4.00, -4.00),
(75, 'BR', 'America/Recife', -3.00, -3.00, -3.00),
(76, 'BR', 'America/Rio_Branco', -5.00, -5.00, -5.00),
(77, 'BR', 'America/Santarem', -3.00, -3.00, -3.00),
(78, 'BR', 'America/Sao_Paulo', -2.00, -3.00, -3.00),
(79, 'BS', 'America/Nassau', -5.00, -4.00, -5.00),
(80, 'BT', 'Asia/Thimphu', 6.00, 6.00, 6.00),
(81, 'BW', 'Africa/Gaborone', 2.00, 2.00, 2.00),
(82, 'BY', 'Europe/Minsk', 3.00, 3.00, 3.00),
(83, 'BZ', 'America/Belize', -6.00, -6.00, -6.00),
(84, 'CA', 'America/Atikokan', -5.00, -5.00, -5.00),
(85, 'CA', 'America/Blanc-Sablon', -4.00, -4.00, -4.00),
(86, 'CA', 'America/Cambridge_Bay', -7.00, -6.00, -7.00),
(87, 'CA', 'America/Creston', -7.00, -7.00, -7.00),
(88, 'CA', 'America/Dawson', -8.00, -7.00, -8.00),
(89, 'CA', 'America/Dawson_Creek', -7.00, -7.00, -7.00),
(90, 'CA', 'America/Edmonton', -7.00, -6.00, -7.00),
(91, 'CA', 'America/Glace_Bay', -4.00, -3.00, -4.00),
(92, 'CA', 'America/Goose_Bay', -4.00, -3.00, -4.00),
(93, 'CA', 'America/Halifax', -4.00, -3.00, -4.00),
(94, 'CA', 'America/Inuvik', -7.00, -6.00, -7.00),
(95, 'CA', 'America/Iqaluit', -5.00, -4.00, -5.00),
(96, 'CA', 'America/Moncton', -4.00, -3.00, -4.00),
(97, 'CA', 'America/Montreal', -5.00, -4.00, -5.00),
(98, 'CA', 'America/Nipigon', -5.00, -4.00, -5.00),
(99, 'CA', 'America/Pangnirtung', -5.00, -4.00, -5.00),
(100, 'CA', 'America/Rainy_River', -6.00, -5.00, -6.00),
(101, 'CA', 'America/Rankin_Inlet', -6.00, -5.00, -6.00),
(102, 'CA', 'America/Regina', -6.00, -6.00, -6.00),
(103, 'CA', 'America/Resolute', -6.00, -5.00, -6.00),
(104, 'CA', 'America/St_Johns', -3.50, -2.50, -3.50),
(105, 'CA', 'America/Swift_Current', -6.00, -6.00, -6.00),
(106, 'CA', 'America/Thunder_Bay', -5.00, -4.00, -5.00),
(107, 'CA', 'America/Toronto', -5.00, -4.00, -5.00),
(108, 'CA', 'America/Vancouver', -8.00, -7.00, -8.00),
(109, 'CA', 'America/Whitehorse', -8.00, -7.00, -8.00),
(110, 'CA', 'America/Winnipeg', -6.00, -5.00, -6.00),
(111, 'CA', 'America/Yellowknife', -7.00, -6.00, -7.00),
(112, 'CC', 'Indian/Cocos', 6.50, 6.50, 6.50),
(113, 'CD', 'Africa/Kinshasa', 1.00, 1.00, 1.00),
(114, 'CD', 'Africa/Lubumbashi', 2.00, 2.00, 2.00),
(115, 'CF', 'Africa/Bangui', 1.00, 1.00, 1.00),
(116, 'CG', 'Africa/Brazzaville', 1.00, 1.00, 1.00),
(117, 'CH', 'Europe/Zurich', 1.00, 2.00, 1.00),
(118, 'CI', 'Africa/Abidjan', 0.00, 0.00, 0.00),
(119, 'CK', 'Pacific/Rarotonga', -10.00, -10.00, -10.00),
(120, 'CL', 'America/Santiago', -3.00, -4.00, -4.00),
(121, 'CL', 'Pacific/Easter', -5.00, -6.00, -6.00),
(122, 'CM', 'Africa/Douala', 1.00, 1.00, 1.00),
(123, 'CN', 'Asia/Chongqing', 8.00, 8.00, 8.00),
(124, 'CN', 'Asia/Harbin', 8.00, 8.00, 8.00),
(125, 'CN', 'Asia/Kashgar', 8.00, 8.00, 8.00),
(126, 'CN', 'Asia/Shanghai', 8.00, 8.00, 8.00),
(127, 'CN', 'Asia/Urumqi', 8.00, 8.00, 8.00),
(128, 'CO', 'America/Bogota', -5.00, -5.00, -5.00),
(129, 'CR', 'America/Costa_Rica', -6.00, -6.00, -6.00),
(130, 'CU', 'America/Havana', -5.00, -4.00, -5.00),
(131, 'CV', 'Atlantic/Cape_Verde', -1.00, -1.00, -1.00),
(132, 'CW', 'America/Curacao', -4.00, -4.00, -4.00),
(133, 'CX', 'Indian/Christmas', 7.00, 7.00, 7.00),
(134, 'CY', 'Asia/Nicosia', 2.00, 3.00, 2.00),
(135, 'CZ', 'Europe/Prague', 1.00, 2.00, 1.00),
(136, 'DE', 'Europe/Berlin', 1.00, 2.00, 1.00),
(137, 'DE', 'Europe/Busingen', 1.00, 2.00, 1.00),
(138, 'DJ', 'Africa/Djibouti', 3.00, 3.00, 3.00),
(139, 'DK', 'Europe/Copenhagen', 1.00, 2.00, 1.00),
(140, 'DM', 'America/Dominica', -4.00, -4.00, -4.00),
(141, 'DO', 'America/Santo_Domingo', -4.00, -4.00, -4.00),
(142, 'DZ', 'Africa/Algiers', 1.00, 1.00, 1.00),
(143, 'EC', 'America/Guayaquil', -5.00, -5.00, -5.00),
(144, 'EC', 'Pacific/Galapagos', -6.00, -6.00, -6.00),
(145, 'EE', 'Europe/Tallinn', 2.00, 3.00, 2.00),
(146, 'EG', 'Africa/Cairo', 2.00, 2.00, 2.00),
(147, 'EH', 'Africa/El_Aaiun', 0.00, 0.00, 0.00),
(148, 'ER', 'Africa/Asmara', 3.00, 3.00, 3.00),
(149, 'ES', 'Africa/Ceuta', 1.00, 2.00, 1.00),
(150, 'ES', 'Atlantic/Canary', 0.00, 1.00, 0.00),
(151, 'ES', 'Europe/Madrid', 1.00, 2.00, 1.00),
(152, 'ET', 'Africa/Addis_Ababa', 3.00, 3.00, 3.00),
(153, 'FI', 'Europe/Helsinki', 2.00, 3.00, 2.00),
(154, 'FJ', 'Pacific/Fiji', 13.00, 12.00, 12.00),
(155, 'FK', 'Atlantic/Stanley', -3.00, -3.00, -3.00),
(156, 'FM', 'Pacific/Chuuk', 10.00, 10.00, 10.00),
(157, 'FM', 'Pacific/Kosrae', 11.00, 11.00, 11.00),
(158, 'FM', 'Pacific/Pohnpei', 11.00, 11.00, 11.00),
(159, 'FO', 'Atlantic/Faroe', 0.00, 1.00, 0.00),
(160, 'FR', 'Europe/Paris', 1.00, 2.00, 1.00),
(161, 'GA', 'Africa/Libreville', 1.00, 1.00, 1.00),
(162, 'GB', 'Europe/London', 0.00, 1.00, 0.00),
(163, 'GD', 'America/Grenada', -4.00, -4.00, -4.00),
(164, 'GE', 'Asia/Tbilisi', 4.00, 4.00, 4.00),
(165, 'GF', 'America/Cayenne', -3.00, -3.00, -3.00),
(166, 'GG', 'Europe/Guernsey', 0.00, 1.00, 0.00),
(167, 'GH', 'Africa/Accra', 0.00, 0.00, 0.00),
(168, 'GI', 'Europe/Gibraltar', 1.00, 2.00, 1.00),
(169, 'GL', 'America/Danmarkshavn', 0.00, 0.00, 0.00),
(170, 'GL', 'America/Godthab', -3.00, -2.00, -3.00),
(171, 'GL', 'America/Scoresbysund', -1.00, 0.00, -1.00),
(172, 'GL', 'America/Thule', -4.00, -3.00, -4.00),
(173, 'GM', 'Africa/Banjul', 0.00, 0.00, 0.00),
(174, 'GN', 'Africa/Conakry', 0.00, 0.00, 0.00),
(175, 'GP', 'America/Guadeloupe', -4.00, -4.00, -4.00),
(176, 'GQ', 'Africa/Malabo', 1.00, 1.00, 1.00),
(177, 'GR', 'Europe/Athens', 2.00, 3.00, 2.00),
(178, 'GS', 'Atlantic/South_Georgia', -2.00, -2.00, -2.00),
(179, 'GT', 'America/Guatemala', -6.00, -6.00, -6.00),
(180, 'GU', 'Pacific/Guam', 10.00, 10.00, 10.00),
(181, 'GW', 'Africa/Bissau', 0.00, 0.00, 0.00),
(182, 'GY', 'America/Guyana', -4.00, -4.00, -4.00),
(183, 'HK', 'Asia/Hong_Kong', 8.00, 8.00, 8.00),
(184, 'HN', 'America/Tegucigalpa', -6.00, -6.00, -6.00),
(185, 'HR', 'Europe/Zagreb', 1.00, 2.00, 1.00),
(186, 'HT', 'America/Port-au-Prince', -5.00, -4.00, -5.00),
(187, 'HU', 'Europe/Budapest', 1.00, 2.00, 1.00),
(188, 'ID', 'Asia/Jakarta', 7.00, 7.00, 7.00),
(189, 'ID', 'Asia/Jayapura', 9.00, 9.00, 9.00),
(190, 'ID', 'Asia/Makassar', 8.00, 8.00, 8.00),
(191, 'ID', 'Asia/Pontianak', 7.00, 7.00, 7.00),
(192, 'IE', 'Europe/Dublin', 0.00, 1.00, 0.00),
(193, 'IL', 'Asia/Jerusalem', 2.00, 3.00, 2.00),
(194, 'IM', 'Europe/Isle_of_Man', 0.00, 1.00, 0.00),
(195, 'IN', 'Asia/Kolkata', 5.50, 5.50, 5.50),
(196, 'IO', 'Indian/Chagos', 6.00, 6.00, 6.00),
(197, 'IQ', 'Asia/Baghdad', 3.00, 3.00, 3.00),
(198, 'IR', 'Asia/Tehran', 3.50, 4.50, 3.50),
(199, 'IS', 'Atlantic/Reykjavik', 0.00, 0.00, 0.00),
(200, 'IT', 'Europe/Rome', 1.00, 2.00, 1.00),
(201, 'JE', 'Europe/Jersey', 0.00, 1.00, 0.00),
(202, 'JM', 'America/Jamaica', -5.00, -5.00, -5.00),
(203, 'JO', 'Asia/Amman', 2.00, 3.00, 2.00),
(204, 'JP', 'Asia/Tokyo', 9.00, 9.00, 9.00),
(205, 'KE', 'Africa/Nairobi', 3.00, 3.00, 3.00),
(206, 'KG', 'Asia/Bishkek', 6.00, 6.00, 6.00),
(207, 'KH', 'Asia/Phnom_Penh', 7.00, 7.00, 7.00),
(208, 'KI', 'Pacific/Enderbury', 13.00, 13.00, 13.00),
(209, 'KI', 'Pacific/Kiritimati', 14.00, 14.00, 14.00),
(210, 'KI', 'Pacific/Tarawa', 12.00, 12.00, 12.00),
(211, 'KM', 'Indian/Comoro', 3.00, 3.00, 3.00),
(212, 'KN', 'America/St_Kitts', -4.00, -4.00, -4.00),
(213, 'KP', 'Asia/Pyongyang', 9.00, 9.00, 9.00),
(214, 'KR', 'Asia/Seoul', 9.00, 9.00, 9.00),
(215, 'KW', 'Asia/Kuwait', 3.00, 3.00, 3.00),
(216, 'KY', 'America/Cayman', -5.00, -5.00, -5.00),
(217, 'KZ', 'Asia/Almaty', 6.00, 6.00, 6.00),
(218, 'KZ', 'Asia/Aqtau', 5.00, 5.00, 5.00),
(219, 'KZ', 'Asia/Aqtobe', 5.00, 5.00, 5.00),
(220, 'KZ', 'Asia/Oral', 5.00, 5.00, 5.00),
(221, 'KZ', 'Asia/Qyzylorda', 6.00, 6.00, 6.00),
(222, 'LA', 'Asia/Vientiane', 7.00, 7.00, 7.00),
(223, 'LB', 'Asia/Beirut', 2.00, 3.00, 2.00),
(224, 'LC', 'America/St_Lucia', -4.00, -4.00, -4.00),
(225, 'LI', 'Europe/Vaduz', 1.00, 2.00, 1.00),
(226, 'LK', 'Asia/Colombo', 5.50, 5.50, 5.50),
(227, 'LR', 'Africa/Monrovia', 0.00, 0.00, 0.00),
(228, 'LS', 'Africa/Maseru', 2.00, 2.00, 2.00),
(229, 'LT', 'Europe/Vilnius', 2.00, 3.00, 2.00),
(230, 'LU', 'Europe/Luxembourg', 1.00, 2.00, 1.00),
(231, 'LV', 'Europe/Riga', 2.00, 3.00, 2.00),
(232, 'LY', 'Africa/Tripoli', 2.00, 2.00, 2.00),
(233, 'MA', 'Africa/Casablanca', 0.00, 0.00, 0.00),
(234, 'MC', 'Europe/Monaco', 1.00, 2.00, 1.00),
(235, 'MD', 'Europe/Chisinau', 2.00, 3.00, 2.00),
(236, 'ME', 'Europe/Podgorica', 1.00, 2.00, 1.00),
(237, 'MF', 'America/Marigot', -4.00, -4.00, -4.00),
(238, 'MG', 'Indian/Antananarivo', 3.00, 3.00, 3.00),
(239, 'MH', 'Pacific/Kwajalein', 12.00, 12.00, 12.00),
(240, 'MH', 'Pacific/Majuro', 12.00, 12.00, 12.00),
(241, 'MK', 'Europe/Skopje', 1.00, 2.00, 1.00),
(242, 'ML', 'Africa/Bamako', 0.00, 0.00, 0.00),
(243, 'MM', 'Asia/Rangoon', 6.50, 6.50, 6.50),
(244, 'MN', 'Asia/Choibalsan', 8.00, 8.00, 8.00),
(245, 'MN', 'Asia/Hovd', 7.00, 7.00, 7.00),
(246, 'MN', 'Asia/Ulaanbaatar', 8.00, 8.00, 8.00),
(247, 'MO', 'Asia/Macau', 8.00, 8.00, 8.00),
(248, 'MP', 'Pacific/Saipan', 10.00, 10.00, 10.00),
(249, 'MQ', 'America/Martinique', -4.00, -4.00, -4.00),
(250, 'MR', 'Africa/Nouakchott', 0.00, 0.00, 0.00),
(251, 'MS', 'America/Montserrat', -4.00, -4.00, -4.00),
(252, 'MT', 'Europe/Malta', 1.00, 2.00, 1.00),
(253, 'MU', 'Indian/Mauritius', 4.00, 4.00, 4.00),
(254, 'MV', 'Indian/Maldives', 5.00, 5.00, 5.00),
(255, 'MW', 'Africa/Blantyre', 2.00, 2.00, 2.00),
(256, 'MX', 'America/Bahia_Banderas', -6.00, -5.00, -6.00),
(257, 'MX', 'America/Cancun', -6.00, -5.00, -6.00),
(258, 'MX', 'America/Chihuahua', -7.00, -6.00, -7.00),
(259, 'MX', 'America/Hermosillo', -7.00, -7.00, -7.00),
(260, 'MX', 'America/Matamoros', -6.00, -5.00, -6.00),
(261, 'MX', 'America/Mazatlan', -7.00, -6.00, -7.00),
(262, 'MX', 'America/Merida', -6.00, -5.00, -6.00),
(263, 'MX', 'America/Mexico_City', -6.00, -5.00, -6.00),
(264, 'MX', 'America/Monterrey', -6.00, -5.00, -6.00),
(265, 'MX', 'America/Ojinaga', -7.00, -6.00, -7.00),
(266, 'MX', 'America/Santa_Isabel', -8.00, -7.00, -8.00),
(267, 'MX', 'America/Tijuana', -8.00, -7.00, -8.00),
(268, 'MY', 'Asia/Kuala_Lumpur', 8.00, 8.00, 8.00),
(269, 'MY', 'Asia/Kuching', 8.00, 8.00, 8.00),
(270, 'MZ', 'Africa/Maputo', 2.00, 2.00, 2.00),
(271, 'NA', 'Africa/Windhoek', 2.00, 1.00, 1.00),
(272, 'NC', 'Pacific/Noumea', 11.00, 11.00, 11.00),
(273, 'NE', 'Africa/Niamey', 1.00, 1.00, 1.00),
(274, 'NF', 'Pacific/Norfolk', 11.50, 11.50, 11.50),
(275, 'NG', 'Africa/Lagos', 1.00, 1.00, 1.00),
(276, 'NI', 'America/Managua', -6.00, -6.00, -6.00),
(277, 'NL', 'Europe/Amsterdam', 1.00, 2.00, 1.00),
(278, 'NO', 'Europe/Oslo', 1.00, 2.00, 1.00),
(279, 'NP', 'Asia/Kathmandu', 5.75, 5.75, 5.75),
(280, 'NR', 'Pacific/Nauru', 12.00, 12.00, 12.00),
(281, 'NU', 'Pacific/Niue', -11.00, -11.00, -11.00),
(282, 'NZ', 'Pacific/Auckland', 13.00, 12.00, 12.00),
(283, 'NZ', 'Pacific/Chatham', 13.75, 12.75, 12.75),
(284, 'OM', 'Asia/Muscat', 4.00, 4.00, 4.00),
(285, 'PA', 'America/Panama', -5.00, -5.00, -5.00),
(286, 'PE', 'America/Lima', -5.00, -5.00, -5.00),
(287, 'PF', 'Pacific/Gambier', -9.00, -9.00, -9.00),
(288, 'PF', 'Pacific/Marquesas', -9.50, -9.50, -9.50),
(289, 'PF', 'Pacific/Tahiti', -10.00, -10.00, -10.00),
(290, 'PG', 'Pacific/Port_Moresby', 10.00, 10.00, 10.00),
(291, 'PH', 'Asia/Manila', 8.00, 8.00, 8.00),
(292, 'PK', 'Asia/Karachi', 5.00, 5.00, 5.00),
(293, 'PL', 'Europe/Warsaw', 1.00, 2.00, 1.00),
(294, 'PM', 'America/Miquelon', -3.00, -2.00, -3.00),
(295, 'PN', 'Pacific/Pitcairn', -8.00, -8.00, -8.00),
(296, 'PR', 'America/Puerto_Rico', -4.00, -4.00, -4.00),
(297, 'PS', 'Asia/Gaza', 2.00, 3.00, 2.00),
(298, 'PS', 'Asia/Hebron', 2.00, 3.00, 2.00),
(299, 'PT', 'Atlantic/Azores', -1.00, 0.00, -1.00),
(300, 'PT', 'Atlantic/Madeira', 0.00, 1.00, 0.00),
(301, 'PT', 'Europe/Lisbon', 0.00, 1.00, 0.00),
(302, 'PW', 'Pacific/Palau', 9.00, 9.00, 9.00),
(303, 'PY', 'America/Asuncion', -3.00, -4.00, -4.00),
(304, 'QA', 'Asia/Qatar', 3.00, 3.00, 3.00),
(305, 'RE', 'Indian/Reunion', 4.00, 4.00, 4.00),
(306, 'RO', 'Europe/Bucharest', 2.00, 3.00, 2.00),
(307, 'RS', 'Europe/Belgrade', 1.00, 2.00, 1.00),
(308, 'RU', 'Asia/Anadyr', 12.00, 12.00, 12.00),
(309, 'RU', 'Asia/Irkutsk', 9.00, 9.00, 9.00),
(310, 'RU', 'Asia/Kamchatka', 12.00, 12.00, 12.00),
(311, 'RU', 'Asia/Khandyga', 10.00, 10.00, 10.00),
(312, 'RU', 'Asia/Krasnoyarsk', 8.00, 8.00, 8.00),
(313, 'RU', 'Asia/Magadan', 12.00, 12.00, 12.00),
(314, 'RU', 'Asia/Novokuznetsk', 7.00, 7.00, 7.00),
(315, 'RU', 'Asia/Novosibirsk', 7.00, 7.00, 7.00),
(316, 'RU', 'Asia/Omsk', 7.00, 7.00, 7.00),
(317, 'RU', 'Asia/Sakhalin', 11.00, 11.00, 11.00),
(318, 'RU', 'Asia/Ust-Nera', 11.00, 11.00, 11.00),
(319, 'RU', 'Asia/Vladivostok', 11.00, 11.00, 11.00),
(320, 'RU', 'Asia/Yakutsk', 10.00, 10.00, 10.00),
(321, 'RU', 'Asia/Yekaterinburg', 6.00, 6.00, 6.00),
(322, 'RU', 'Europe/Kaliningrad', 3.00, 3.00, 3.00),
(323, 'RU', 'Europe/Moscow', 4.00, 4.00, 4.00),
(324, 'RU', 'Europe/Samara', 4.00, 4.00, 4.00),
(325, 'RU', 'Europe/Volgograd', 4.00, 4.00, 4.00),
(326, 'RW', 'Africa/Kigali', 2.00, 2.00, 2.00),
(327, 'SA', 'Asia/Riyadh', 3.00, 3.00, 3.00),
(328, 'SB', 'Pacific/Guadalcanal', 11.00, 11.00, 11.00),
(329, 'SC', 'Indian/Mahe', 4.00, 4.00, 4.00),
(330, 'SD', 'Africa/Khartoum', 3.00, 3.00, 3.00),
(331, 'SE', 'Europe/Stockholm', 1.00, 2.00, 1.00),
(332, 'SG', 'Asia/Singapore', 8.00, 8.00, 8.00),
(333, 'SH', 'Atlantic/St_Helena', 0.00, 0.00, 0.00),
(334, 'SI', 'Europe/Ljubljana', 1.00, 2.00, 1.00),
(335, 'SJ', 'Arctic/Longyearbyen', 1.00, 2.00, 1.00),
(336, 'SK', 'Europe/Bratislava', 1.00, 2.00, 1.00),
(337, 'SL', 'Africa/Freetown', 0.00, 0.00, 0.00),
(338, 'SM', 'Europe/San_Marino', 1.00, 2.00, 1.00),
(339, 'SN', 'Africa/Dakar', 0.00, 0.00, 0.00),
(340, 'SO', 'Africa/Mogadishu', 3.00, 3.00, 3.00),
(341, 'SR', 'America/Paramaribo', -3.00, -3.00, -3.00),
(342, 'SS', 'Africa/Juba', 3.00, 3.00, 3.00),
(343, 'ST', 'Africa/Sao_Tome', 0.00, 0.00, 0.00),
(344, 'SV', 'America/El_Salvador', -6.00, -6.00, -6.00),
(345, 'SX', 'America/Lower_Princes', -4.00, -4.00, -4.00),
(346, 'SY', 'Asia/Damascus', 2.00, 3.00, 2.00),
(347, 'SZ', 'Africa/Mbabane', 2.00, 2.00, 2.00),
(348, 'TC', 'America/Grand_Turk', -5.00, -4.00, -5.00),
(349, 'TD', 'Africa/Ndjamena', 1.00, 1.00, 1.00),
(350, 'TF', 'Indian/Kerguelen', 5.00, 5.00, 5.00),
(351, 'TG', 'Africa/Lome', 0.00, 0.00, 0.00),
(352, 'TH', 'Asia/Bangkok', 7.00, 7.00, 7.00),
(353, 'TJ', 'Asia/Dushanbe', 5.00, 5.00, 5.00),
(354, 'TK', 'Pacific/Fakaofo', 13.00, 13.00, 13.00),
(355, 'TL', 'Asia/Dili', 9.00, 9.00, 9.00),
(356, 'TM', 'Asia/Ashgabat', 5.00, 5.00, 5.00),
(357, 'TN', 'Africa/Tunis', 1.00, 1.00, 1.00),
(358, 'TO', 'Pacific/Tongatapu', 13.00, 13.00, 13.00),
(359, 'TR', 'Europe/Istanbul', 2.00, 3.00, 2.00),
(360, 'TT', 'America/Port_of_Spain', -4.00, -4.00, -4.00),
(361, 'TV', 'Pacific/Funafuti', 12.00, 12.00, 12.00),
(362, 'TW', 'Asia/Taipei', 8.00, 8.00, 8.00),
(363, 'TZ', 'Africa/Dar_es_Salaam', 3.00, 3.00, 3.00),
(364, 'UA', 'Europe/Kiev', 2.00, 3.00, 2.00),
(365, 'UA', 'Europe/Simferopol', 2.00, 4.00, 4.00),
(366, 'UA', 'Europe/Uzhgorod', 2.00, 3.00, 2.00),
(367, 'UA', 'Europe/Zaporozhye', 2.00, 3.00, 2.00),
(368, 'UG', 'Africa/Kampala', 3.00, 3.00, 3.00),
(369, 'UM', 'Pacific/Johnston', -10.00, -10.00, -10.00),
(370, 'UM', 'Pacific/Midway', -11.00, -11.00, -11.00),
(371, 'UM', 'Pacific/Wake', 12.00, 12.00, 12.00),
(372, 'US', 'America/Adak', -10.00, -9.00, -10.00),
(373, 'US', 'America/Anchorage', -9.00, -8.00, -9.00),
(374, 'US', 'America/Boise', -7.00, -6.00, -7.00),
(375, 'US', 'America/Chicago', -6.00, -5.00, -6.00),
(376, 'US', 'America/Denver', -7.00, -6.00, -7.00),
(377, 'US', 'America/Detroit', -5.00, -4.00, -5.00),
(378, 'US', 'America/Indiana/Indianapolis', -5.00, -4.00, -5.00),
(379, 'US', 'America/Indiana/Knox', -6.00, -5.00, -6.00),
(380, 'US', 'America/Indiana/Marengo', -5.00, -4.00, -5.00),
(381, 'US', 'America/Indiana/Petersburg', -5.00, -4.00, -5.00),
(382, 'US', 'America/Indiana/Tell_City', -6.00, -5.00, -6.00),
(383, 'US', 'America/Indiana/Vevay', -5.00, -4.00, -5.00),
(384, 'US', 'America/Indiana/Vincennes', -5.00, -4.00, -5.00),
(385, 'US', 'America/Indiana/Winamac', -5.00, -4.00, -5.00),
(386, 'US', 'America/Juneau', -9.00, -8.00, -9.00),
(387, 'US', 'America/Kentucky/Louisville', -5.00, -4.00, -5.00),
(388, 'US', 'America/Kentucky/Monticello', -5.00, -4.00, -5.00),
(389, 'US', 'America/Los_Angeles', -8.00, -7.00, -8.00),
(390, 'US', 'America/Menominee', -6.00, -5.00, -6.00),
(391, 'US', 'America/Metlakatla', -8.00, -8.00, -8.00),
(392, 'US', 'America/New_York', -5.00, -4.00, -5.00),
(393, 'US', 'America/Nome', -9.00, -8.00, -9.00),
(394, 'US', 'America/North_Dakota/Beulah', -6.00, -5.00, -6.00),
(395, 'US', 'America/North_Dakota/Center', -6.00, -5.00, -6.00),
(396, 'US', 'America/North_Dakota/New_Salem', -6.00, -5.00, -6.00),
(397, 'US', 'America/Phoenix', -7.00, -7.00, -7.00),
(398, 'US', 'America/Shiprock', -7.00, -6.00, -7.00),
(399, 'US', 'America/Sitka', -9.00, -8.00, -9.00),
(400, 'US', 'America/Yakutat', -9.00, -8.00, -9.00),
(401, 'US', 'Pacific/Honolulu', -10.00, -10.00, -10.00),
(402, 'UY', 'America/Montevideo', -2.00, -3.00, -3.00),
(403, 'UZ', 'Asia/Samarkand', 5.00, 5.00, 5.00),
(404, 'UZ', 'Asia/Tashkent', 5.00, 5.00, 5.00),
(405, 'VA', 'Europe/Vatican', 1.00, 2.00, 1.00),
(406, 'VC', 'America/St_Vincent', -4.00, -4.00, -4.00),
(407, 'VE', 'America/Caracas', -4.50, -4.50, -4.50),
(408, 'VG', 'America/Tortola', -4.00, -4.00, -4.00),
(409, 'VI', 'America/St_Thomas', -4.00, -4.00, -4.00),
(410, 'VN', 'Asia/Ho_Chi_Minh', 7.00, 7.00, 7.00),
(411, 'VU', 'Pacific/Efate', 11.00, 11.00, 11.00),
(412, 'WF', 'Pacific/Wallis', 12.00, 12.00, 12.00),
(413, 'WS', 'Pacific/Apia', 14.00, 13.00, 13.00),
(414, 'YE', 'Asia/Aden', 3.00, 3.00, 3.00),
(415, 'YT', 'Indian/Mayotte', 3.00, 3.00, 3.00),
(416, 'ZA', 'Africa/Johannesburg', 2.00, 2.00, 2.00),
(417, 'ZM', 'Africa/Lusaka', 2.00, 2.00, 2.00),
(418, 'ZW', 'Africa/Harare', 2.00, 2.00, 2.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `trips`
--

CREATE TABLE `trips` (
  `id` int(10) UNSIGNED NOT NULL,
  `fleet_id` int(10) UNSIGNED NOT NULL,
  `schedule_id` int(10) UNSIGNED NOT NULL,
  `pick_location_id` int(10) UNSIGNED NOT NULL,
  `drop_location_id` int(10) UNSIGNED NOT NULL,
  `vehicle_id` int(10) UNSIGNED NOT NULL,
  `distance` tinytext DEFAULT NULL,
  `startdate` datetime NOT NULL,
  `journey_hour` tinytext DEFAULT NULL,
  `child_seat` tinytext DEFAULT NULL,
  `special_seat` tinytext NOT NULL,
  `adult_fair` tinytext NOT NULL,
  `child_fair` tinytext DEFAULT NULL,
  `special_fair` tinytext DEFAULT NULL,
  `weekend` tinytext DEFAULT NULL,
  `company_name` tinytext NOT NULL,
  `stoppage` text DEFAULT NULL,
  `facility` text DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `trips`
--

INSERT INTO `trips` (`id`, `fleet_id`, `schedule_id`, `pick_location_id`, `drop_location_id`, `vehicle_id`, `distance`, `startdate`, `journey_hour`, `child_seat`, `special_seat`, `adult_fair`, `child_fair`, `special_fair`, `weekend`, `company_name`, `stoppage`, `facility`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(22, 6, 8, 44, 42, 11, '300', '2023-06-26 00:00:00', '9', '5', '5', '800', '500', '600', '5', 'Go Shuttle', '42', '1,2,3,4,5,6', '1', '2022-06-27 16:33:05', '2023-06-26 19:51:03', NULL),
(23, 6, 10, 44, 43, 12, '800', '2023-06-26 00:00:00', '6', '', '', '900', '', '', '5', 'Go Shuttle', '44', '1,2,3,4,5,6', '1', '2022-06-27 17:50:49', '2023-06-26 19:51:16', NULL),
(24, 6, 12, 44, 40, 13, '800', '2023-06-26 00:00:00', '8', '4', '4', '1000', '500', '600', NULL, 'Go Shuttle', '40', '1,2,3,4,5,6', '1', '2022-06-27 17:59:02', '2023-06-26 19:51:30', NULL),
(25, 6, 13, 44, 41, 15, '900', '2023-06-26 00:00:00', '9', '6', '6', '1200', '600', '700', '5', 'Go Shuttle', '41', '1,2,3,4,5,6', '1', '2022-06-27 18:04:23', '2023-06-26 19:51:37', NULL),
(26, 8, 11, 42, 32, 13, '800', '2022-06-26 00:00:00', '8', '', '', '1200', '', '', NULL, 'SR', '', '2,3', '1', '2022-06-27 18:16:38', '2023-06-26 19:44:14', '2023-06-26 19:44:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `login_email` varchar(100) NOT NULL,
  `login_mobile` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `slug` varchar(100) NOT NULL,
  `recovery_code` varchar(100) DEFAULT NULL,
  `last_login` varchar(100) NOT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `role` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `login_email` varchar(100) NOT NULL,
  `login_mobile` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `slug` varchar(100) NOT NULL,
  `recovery_code` varchar(100) DEFAULT NULL,
  `last_login` varchar(100) DEFAULT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `login_email`, `login_mobile`, `password`, `slug`, `recovery_code`, `last_login`, `ip`, `role_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin@admin.com', '66666666666', '$2y$10$3g/ditjyBu8n5fZ.GnCTLurR5OzEcR94Rytozvicdh5veMghe4Gma', 'DDSFM400', NULL, '2021-09-02 08:09:nd', 'Mozilla/5.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.0)', 1, '1', '2021-09-02 19:40:05', '2023-06-22 03:07:28', NULL),
(168, 'p1@p.com', '77777777777', '$2y$10$tYv7yu1gIE6HLyR5mar6pOEwNkJiicseHPlaQgDqfiJjJXfYEMWFi', '139f358c34', NULL, NULL, NULL, 3, '1', '2022-06-27 17:13:17', '2023-06-26 19:57:56', '2023-06-26 19:57:56'),
(169, 'a1@a.com', '88888888888', '$2y$10$z6I1evuJXNCbr2C6qA.BKuwOWNRxW7MDUeMcMHa9psmYH4tdvIGEu', '884e705d40', NULL, NULL, NULL, 2, '1', '2022-06-27 17:15:40', '2023-06-22 03:07:28', NULL),
(170, 'c1@c.com', '711111111', '$2y$10$kshIfRDi4KlvLQDALq5oqeLwcL.nkuEArImHpdoCPJ6OIr0ySVsN6', '172c6333eb', NULL, NULL, NULL, 3, '1', '2022-06-28 15:08:21', '2023-06-26 19:57:59', '2023-06-26 19:57:59'),
(171, 'c2@c.com', '885555', '$2y$10$2PN.RL6.iWiQY88BRUxbSeW2Qz2XtCsJQT24LmQ.I80WMRcGeXFe6', '76c3f6e5d1', NULL, NULL, NULL, 3, '1', '2022-06-28 15:15:21', '2023-06-26 19:58:04', '2023-06-26 19:58:04'),
(175, 'a@gmail.com', '08123246712', '$2y$10$JK1bFECkzikFllrPZs3bbOWaoISoaH2InQv./6n3XjluTYBPjXKHe', 'f2db842cb1', NULL, NULL, NULL, 3, '1', '2023-06-26 20:27:36', '2023-06-26 20:32:09', '2023-06-26 20:32:09'),
(180, 'indri@gmail.com', '08158812195', '$2y$10$xlZcE7/5h3q4PeesMdcpjuG4giZpRlXzhWoTOzys.4SSpMdI8ZHOq', '2dac9f6c49', NULL, NULL, NULL, 3, '1', '2023-06-26 20:39:14', '2023-06-26 20:39:14', NULL),
(181, 'askar@gmail.com', '089694541355', '$2y$10$kcKNePbQC0HepKis4MSwwOWVut0asIe6sD7ZOWJJKcx3/4c/lySqC', '55fb2e472d', NULL, NULL, NULL, 3, '1', '2023-06-26 20:40:54', '2023-06-26 20:40:54', NULL),
(182, 'fathan@gmail.com', '08119890968', '$2y$10$NYYIdKxZJcknhah5gF5BVOToQNl3ThST4BtvLWchDPuT6E9.sNjPm', 'b3003dc87c', NULL, NULL, NULL, 3, '1', '2023-06-26 20:41:52', '2023-06-26 20:41:52', NULL),
(183, 'fauzan@gmail.com', '087819354469', '$2y$10$YavNCCOjmbyJpKX422kreuc82tQ8JNWDn4DpjFA2eH8NYN5BKGVSa', '4dcd0f2a6b', NULL, NULL, NULL, 3, '1', '2023-06-26 20:42:49', '2023-06-26 20:42:49', NULL),
(184, 'dwi@gmail.com', '087881667848', '$2y$10$eDPmfClI3RUWaWDNnRHSF.5vCALo8VZdMjsMUTqUBdcQahmmmkhy6', '85c723e6bb', NULL, NULL, NULL, 3, '1', '2023-06-26 20:43:40', '2023-06-26 20:43:40', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_details`
--

CREATE TABLE `user_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` text NOT NULL,
  `id_number` varchar(100) NOT NULL,
  `id_type` varchar(100) NOT NULL,
  `image` text DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `country_id` int(11) NOT NULL,
  `city` varchar(100) DEFAULT NULL,
  `zip_code` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `first_name`, `last_name`, `id_number`, `id_type`, `image`, `address`, `country_id`, `city`, `zip_code`, `created_at`, `updated_at`, `deleted_at`) VALUES
(14, 1, 'Tate', 'Sipes', 'QVDDH331', 'passport', 'image/agent/1656215283_322c3e23c37b9d76acb7.jpg', 'Suite 027', 201, 'Lake Kenyahaven', '4382', '2021-09-04 15:14:23', '2023-06-22 03:07:28', NULL),
(163, 168, 'LOREM', 'IPSUM', 'abc098', 'Passport', NULL, 'dhaka, bangladesh', 18, 'dhaka', '1200', '2022-06-27 17:13:18', '2023-06-22 03:07:28', NULL),
(164, 170, 'Customer', 'One', '666999', 'Passport', NULL, 'Lorme Ipsum Lorme Ipsum Lorme Ipsum Lorme Ipsum Lorme Ipsum Lorme Ipsum Lorme Ipsum Lorme Ipsum Lorm', 18, 'Dhaka', '5400', '2022-06-28 15:08:21', '2023-06-22 03:07:28', NULL),
(165, 171, 'Customer', 'Two', '98868', 'Nid', NULL, 'Lorme Ipsum Lorme Lorme Ipsum LormeLorme Ipsum LormeLorme Ipsum LormeLorme Ipsum LormeLorme Ipsum Lo', 18, 'Dhaka', '5400', '2022-06-28 15:15:21', '2023-06-22 03:07:28', NULL),
(166, 180, 'INDRI', 'WIDHYAMURTI', '3518009820987', 'Ktp', NULL, 'Cibadak, Bogor', 100, 'Bogor', '6754', '2023-06-26 20:39:14', '2023-06-26 20:39:14', NULL),
(167, 181, 'ASKAR', '.', '3519111000000', 'Ktp', NULL, 'Cengkareng, Jakarta Barat', 100, 'Jakarta', '7654', '2023-06-26 20:40:54', '2023-06-26 20:40:54', NULL),
(168, 182, 'M.', 'FATHAN', '3519111002999', 'Ktp', NULL, 'Taman Sari, Jakarta Barat', 100, 'Jakarta', '7654', '2023-06-26 20:41:52', '2023-06-26 20:41:52', NULL),
(169, 183, 'FAUZAN', '.', '3519111453000', 'Ktp', NULL, 'Cisarua, Bogor', 100, 'Bogor', '7886', '2023-06-26 20:42:49', '2023-06-26 20:42:49', NULL),
(170, 184, 'DWI', 'SULISTIORINI', '3518009820031', 'Ktp', NULL, 'Grogol, Jakarta Barat', 100, 'Jakarta', '4431', '2023-06-26 20:43:40', '2023-06-26 20:43:40', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `vehicalimages`
--

CREATE TABLE `vehicalimages` (
  `id` int(10) UNSIGNED NOT NULL,
  `vehicle_id` int(10) UNSIGNED NOT NULL,
  `img_path` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `vehicalimages`
--

INSERT INTO `vehicalimages` (`id`, `vehicle_id`, `img_path`, `created_at`, `updated_at`, `deleted_at`) VALUES
(33, 11, 'image/bus/1656321346_db2b1df23c707702e351.jpg', '2022-06-27 15:15:46', '2023-06-22 03:07:29', NULL),
(34, 11, 'image/bus/1656321346_91026eea6de744cf461a.jpg', '2022-06-27 15:15:46', '2023-06-22 03:07:29', NULL),
(35, 11, 'image/bus/1656321346_962b3736fc8f398b236a.jpg', '2022-06-27 15:15:46', '2023-06-22 03:07:29', NULL),
(36, 11, 'image/bus/1656321346_87dde64083152dc69cce.jpg', '2022-06-27 15:15:46', '2023-06-22 03:07:29', NULL),
(37, 12, 'image/bus/1656321868_424e379dd91ec7b774e1.jpg', '2022-06-27 15:24:28', '2023-06-22 03:07:29', NULL),
(38, 12, 'image/bus/1656321868_d902830c252d1f3a1f8b.jpg', '2022-06-27 15:24:28', '2023-06-22 03:07:29', NULL),
(39, 12, 'image/bus/1656321868_f854791a51f59210d988.jpg', '2022-06-27 15:24:28', '2023-06-22 03:07:29', NULL),
(40, 12, 'image/bus/1656321868_28d7d7ca03fb92b2b898.jpg', '2022-06-27 15:24:28', '2023-06-22 03:07:29', NULL),
(41, 13, 'image/bus/1656322018_98eb5c9f8d9262e60577.jpg', '2022-06-27 15:26:58', '2023-06-22 03:07:29', NULL),
(42, 13, 'image/bus/1656322018_945930f801424768192e.jpg', '2022-06-27 15:26:58', '2023-06-22 03:07:29', NULL),
(43, 13, 'image/bus/1656322018_c935c196284f0b54736a.jpg', '2022-06-27 15:26:58', '2023-06-22 03:07:29', NULL),
(44, 13, 'image/bus/1656322018_ba0d9b524d334fc974dc.jpg', '2022-06-27 15:26:58', '2023-06-22 03:07:29', NULL),
(45, 14, 'image/bus/1656322131_6350dce811c2350ef182.jpg', '2022-06-27 15:28:51', '2023-06-22 03:07:29', NULL),
(46, 14, 'image/bus/1656322131_716dfc57e01967a3977f.jpg', '2022-06-27 15:28:51', '2023-06-22 03:07:29', NULL),
(47, 14, 'image/bus/1656322131_ddee27579d07e6f4792a.jpg', '2022-06-27 15:28:51', '2023-06-22 03:07:29', NULL),
(48, 14, 'image/bus/1656322131_e6628fc7d4d7e7e54fb4.jpg', '2022-06-27 15:28:51', '2023-06-22 03:07:29', NULL),
(49, 15, 'image/bus/1656322252_1e2250e5f3d5f6327208.jpg', '2022-06-27 15:30:52', '2023-06-22 03:07:29', NULL),
(50, 15, 'image/bus/1656322252_42f282d07ca98dfcbdb7.jpg', '2022-06-27 15:30:52', '2023-06-22 03:07:29', NULL),
(51, 15, 'image/bus/1656322252_b5c17ac2a8eaaa34650e.jpg', '2022-06-27 15:30:52', '2023-06-22 03:07:29', NULL),
(52, 15, 'image/bus/1656322252_3a763ebd91ade65502dc.jpg', '2022-06-27 15:30:52', '2023-06-22 03:07:29', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(10) UNSIGNED NOT NULL,
  `reg_no` varchar(100) NOT NULL,
  `fleet_id` int(10) UNSIGNED NOT NULL,
  `engine_no` varchar(100) NOT NULL,
  `model_no` varchar(100) NOT NULL,
  `chasis_no` varchar(100) NOT NULL,
  `woner` varchar(100) NOT NULL,
  `woner_mobile` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `assign` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `vehicles`
--

INSERT INTO `vehicles` (`id`, `reg_no`, `fleet_id`, `engine_no`, `model_no`, `chasis_no`, `woner`, `woner_mobile`, `company`, `status`, `assign`, `created_at`, `updated_at`, `deleted_at`) VALUES
(11, 'GS-001', 6, 'B 7235 NAA', '-', '-', 'Go Shuttle', '12111111111', 'Go Shuttle', '1', '0', '2022-06-27 15:15:46', '2023-06-26 19:07:34', NULL),
(12, 'GS-002', 6, 'B 7798 KDA', '-', '-', 'Go Shuttle', '13111111111', 'Go Shuttle', '1', '0', '2022-06-27 15:24:28', '2023-06-26 19:09:36', NULL),
(13, 'GS-003', 6, 'B 7141 TDB', '-', '-', 'Go Shuttle', '14111111111', 'Go Shuttle', '1', '0', '2022-06-27 15:26:58', '2023-06-26 19:12:19', NULL),
(14, 'GS-004', 6, 'DK 7450 FA', '-', '-', 'Go Shuttle', '15111111111', 'Go Shuttle', '1', '0', '2022-06-27 15:28:51', '2023-06-26 19:13:13', NULL),
(15, 'GS-005', 6, 'N 7375 A', '-', '-', 'Go Shuttle', '16111111111', 'Go Shuttle', '1', '0', '2022-06-27 15:30:52', '2023-06-26 19:14:19', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `websettings`
--

CREATE TABLE `websettings` (
  `id` int(10) UNSIGNED NOT NULL,
  `localize_name` text NOT NULL,
  `headerlogo` text NOT NULL,
  `favicon` text NOT NULL,
  `footerlogo` text NOT NULL,
  `logotext` text NOT NULL,
  `apptitle` text NOT NULL,
  `copyright` text NOT NULL,
  `headercolor` text NOT NULL,
  `footercolor` text NOT NULL,
  `bottomfootercolor` text NOT NULL,
  `buttoncolor` text NOT NULL,
  `buttoncolorhover` text NOT NULL,
  `buttontextcolor` text NOT NULL,
  `fontfamely` text NOT NULL,
  `currency` int(11) NOT NULL,
  `tax_type` text NOT NULL,
  `country` int(11) DEFAULT NULL,
  `timezone` text DEFAULT NULL,
  `max_ticket` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `websettings`
--

INSERT INTO `websettings` (`id`, `localize_name`, `headerlogo`, `favicon`, `footerlogo`, `logotext`, `apptitle`, `copyright`, `headercolor`, `footercolor`, `bottomfootercolor`, `buttoncolor`, `buttoncolorhover`, `buttontextcolor`, `fontfamely`, `currency`, `tax_type`, `country`, `timezone`, `max_ticket`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'en', 'image/websetting/1655978324_10b0faacf09c0386ba34.png', 'image/websetting/1655899863_3aded0c9a7ae3ee9ae64.jpg', 'image/websetting/1656214119_01f101e686c05179a506.png', 'BUS365', 'BUS365', 'BUS365-All Rights Reserved', '#04aa6b', '#282a35', '#04aa6b', '#04aa6b', '#016f2f', '#ffffff', 'Varela', 18, 'exclusive', 18, 'Asia/Dhaka', 6, '2022-02-10 12:37:03', '2023-06-22 03:07:30', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `accouthead`
--
ALTER TABLE `accouthead`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `adds`
--
ALTER TABLE `adds`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `agentcommissions`
--
ALTER TABLE `agentcommissions`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `agentcommissions_agent_id_foreign` (`agent_id`) USING BTREE,
  ADD KEY `agentcommissions_subtrip_id_foreign` (`subtrip_id`) USING BTREE,
  ADD KEY `agentcommissions_user_id_foreign` (`user_id`) USING BTREE;

--
-- Indeks untuk tabel `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `agents_location_id_foreign` (`location_id`) USING BTREE,
  ADD KEY `agents_country_id_foreign` (`country_id`) USING BTREE,
  ADD KEY `agents_user_id_foreign` (`user_id`) USING BTREE;

--
-- Indeks untuk tabel `agenttotals`
--
ALTER TABLE `agenttotals`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `agenttotals_agent_id_foreign` (`agent_id`) USING BTREE;

--
-- Indeks untuk tabel `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `blog_user_id_foreign` (`user_id`) USING BTREE;

--
-- Indeks untuk tabel `cancels`
--
ALTER TABLE `cancels`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `cancels_cancel_by_foreign` (`cancel_by`) USING BTREE;

--
-- Indeks untuk tabel `cookes`
--
ALTER TABLE `cookes`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `coupondiscounts`
--
ALTER TABLE `coupondiscounts`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `coupondiscounts_coupon_id_foreign` (`coupon_id`) USING BTREE,
  ADD KEY `coupondiscounts_subtrip_id_foreign` (`subtrip_id`) USING BTREE;

--
-- Indeks untuk tabel `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `employees_employeetype_id_foreign` (`employeetype_id`) USING BTREE,
  ADD KEY `employees_country_id_foreign` (`country_id`) USING BTREE;

--
-- Indeks untuk tabel `employeetypes`
--
ALTER TABLE `employeetypes`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `facilitys`
--
ALTER TABLE `facilitys`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `faqquestions`
--
ALTER TABLE `faqquestions`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `fitnesses`
--
ALTER TABLE `fitnesses`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `fleets`
--
ALTER TABLE `fleets`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `fonts`
--
ALTER TABLE `fonts`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `gatewaytotals`
--
ALTER TABLE `gatewaytotals`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `gatewaytotals_gateway_id_foreign` (`gateway_id`) USING BTREE,
  ADD KEY `gatewaytotals_trip_id_foreign` (`trip_id`) USING BTREE,
  ADD KEY `gatewaytotals_subtrip_id_foreign` (`subtrip_id`) USING BTREE,
  ADD KEY `gatewaytotals_user_id_foreign` (`user_id`) USING BTREE;

--
-- Indeks untuk tabel `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `journeylists`
--
ALTER TABLE `journeylists`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `journeylists_trip_id_foreign` (`trip_id`) USING BTREE,
  ADD KEY `journeylists_subtrip_id_foreign` (`subtrip_id`) USING BTREE,
  ADD KEY `journeylists_pick_location_id_foreign` (`pick_location_id`) USING BTREE,
  ADD KEY `journeylists_drop_location_id_foreign` (`drop_location_id`) USING BTREE,
  ADD KEY `journeylists_pick_stand_id_foreign` (`pick_stand_id`) USING BTREE,
  ADD KEY `journeylists_drop_stand_id_foreign` (`drop_stand_id`) USING BTREE;

--
-- Indeks untuk tabel `langstrings`
--
ALTER TABLE `langstrings`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `name` (`name`) USING BTREE;

--
-- Indeks untuk tabel `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `lngstngvalues`
--
ALTER TABLE `lngstngvalues`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `lngstngvalues_string_id_foreign` (`string_id`) USING BTREE,
  ADD KEY `lngstngvalues_localize_id_foreign` (`localize_id`) USING BTREE;

--
-- Indeks untuk tabel `localizes`
--
ALTER TABLE `localizes`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `maxtimes`
--
ALTER TABLE `maxtimes`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `partialpaids`
--
ALTER TABLE `partialpaids`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `partialpaids_trip_id_foreign` (`trip_id`) USING BTREE,
  ADD KEY `partialpaids_subtrip_id_foreign` (`subtrip_id`) USING BTREE,
  ADD KEY `partialpaids_passanger_id_foreign` (`passanger_id`) USING BTREE;

--
-- Indeks untuk tabel `paymentgateways`
--
ALTER TABLE `paymentgateways`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `paymethods`
--
ALTER TABLE `paymethods`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `paymethodtotals`
--
ALTER TABLE `paymethodtotals`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `paymethodtotals_paymethod_id_foreign` (`paymethod_id`) USING BTREE,
  ADD KEY `paymethodtotals_trip_id_foreign` (`trip_id`) USING BTREE,
  ADD KEY `paymethodtotals_subtrip_id_foreign` (`subtrip_id`) USING BTREE,
  ADD KEY `paymethodtotals_user_id_foreign` (`user_id`) USING BTREE;

--
-- Indeks untuk tabel `paypals`
--
ALTER TABLE `paypals`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `paystacks`
--
ALTER TABLE `paystacks`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `permissions_role_id_foreign` (`role_id`) USING BTREE,
  ADD KEY `permissions_user_id_foreign` (`user_id`) USING BTREE,
  ADD KEY `permissions_menu_id_foreign` (`menu_id`) USING BTREE;

--
-- Indeks untuk tabel `pickdrops`
--
ALTER TABLE `pickdrops`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `pickdrops_trip_id_foreign` (`trip_id`) USING BTREE,
  ADD KEY `pickdrops_stand_id_foreign` (`stand_id`) USING BTREE;

--
-- Indeks untuk tabel `privacies`
--
ALTER TABLE `privacies`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `booking_id` (`booking_id`) USING BTREE,
  ADD KEY `ratings_trip_id_foreign` (`trip_id`) USING BTREE,
  ADD KEY `ratings_subtrip_id_foreign` (`subtrip_id`) USING BTREE,
  ADD KEY `ratings_user_id_foreign` (`user_id`) USING BTREE;

--
-- Indeks untuk tabel `razors`
--
ALTER TABLE `razors`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `refunds`
--
ALTER TABLE `refunds`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `refunds_refund_by_foreign` (`refund_by`) USING BTREE;

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `schedulefilters`
--
ALTER TABLE `schedulefilters`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `section_five_app`
--
ALTER TABLE `section_five_app`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `section_four_comment`
--
ALTER TABLE `section_four_comment`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `section_four_detail`
--
ALTER TABLE `section_four_detail`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `section_one_home`
--
ALTER TABLE `section_one_home`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `section_seven_subscrib`
--
ALTER TABLE `section_seven_subscrib`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `section_six_blog`
--
ALTER TABLE `section_six_blog`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `section_three_heading`
--
ALTER TABLE `section_three_heading`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `section_two_detail`
--
ALTER TABLE `section_two_detail`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `section_two_work_flow`
--
ALTER TABLE `section_two_work_flow`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `socialmedias`
--
ALTER TABLE `socialmedias`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `socialsignins`
--
ALTER TABLE `socialsignins`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `stands`
--
ALTER TABLE `stands`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `stripes`
--
ALTER TABLE `stripes`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `stuffassigns`
--
ALTER TABLE `stuffassigns`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `Stuffassigns_trip_id_foreign` (`trip_id`) USING BTREE,
  ADD KEY `Stuffassigns_employee_id_foreign` (`employee_id`) USING BTREE;

--
-- Indeks untuk tabel `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `subtrips`
--
ALTER TABLE `subtrips`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `subtrips_trip_id_foreign` (`trip_id`) USING BTREE;

--
-- Indeks untuk tabel `taxes`
--
ALTER TABLE `taxes`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`,`booking_id`) USING BTREE,
  ADD UNIQUE KEY `booking_id` (`booking_id`) USING BTREE,
  ADD KEY `tickets_trip_id_foreign` (`trip_id`) USING BTREE,
  ADD KEY `tickets_subtrip_id_foreign` (`subtrip_id`) USING BTREE,
  ADD KEY `tickets_passanger_id_foreign` (`passanger_id`) USING BTREE,
  ADD KEY `tickets_pick_location_id_foreign` (`pick_location_id`) USING BTREE,
  ADD KEY `tickets_drop_location_id_foreign` (`drop_location_id`) USING BTREE,
  ADD KEY `tickets_pick_stand_id_foreign` (`pick_stand_id`) USING BTREE,
  ADD KEY `tickets_drop_stand_id_foreign` (`drop_stand_id`) USING BTREE,
  ADD KEY `tickets_bookby_user_id_foreign` (`bookby_user_id`) USING BTREE,
  ADD KEY `tickets_vehicle_id_foreign` (`vehicle_id`) USING BTREE;

--
-- Indeks untuk tabel `timezone`
--
ALTER TABLE `timezone`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `trips_fleet_id_foreign` (`fleet_id`) USING BTREE,
  ADD KEY `trips_schedule_id_foreign` (`schedule_id`) USING BTREE,
  ADD KEY `trips_pick_location_id_foreign` (`pick_location_id`) USING BTREE,
  ADD KEY `trips_drop_location_id_foreign` (`drop_location_id`) USING BTREE,
  ADD KEY `trips_vehicle_id_foreign` (`vehicle_id`) USING BTREE;

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `login_email` (`login_email`) USING BTREE,
  ADD UNIQUE KEY `login_mobile` (`login_mobile`) USING BTREE,
  ADD UNIQUE KEY `slug` (`slug`) USING BTREE;

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `login_email` (`login_email`) USING BTREE,
  ADD UNIQUE KEY `login_mobile` (`login_mobile`) USING BTREE,
  ADD UNIQUE KEY `slug` (`slug`) USING BTREE;

--
-- Indeks untuk tabel `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `id_number` (`id_number`) USING BTREE,
  ADD KEY `user_detail_user_id_foreign` (`user_id`) USING BTREE;

--
-- Indeks untuk tabel `vehicalimages`
--
ALTER TABLE `vehicalimages`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `vehicalimages_vehicle_id_foreign` (`vehicle_id`) USING BTREE;

--
-- Indeks untuk tabel `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `reg_no` (`reg_no`) USING BTREE,
  ADD KEY `vehicles_fleet_id_foreign` (`fleet_id`) USING BTREE;

--
-- Indeks untuk tabel `websettings`
--
ALTER TABLE `websettings`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT untuk tabel `accouthead`
--
ALTER TABLE `accouthead`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `adds`
--
ALTER TABLE `adds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `agentcommissions`
--
ALTER TABLE `agentcommissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `agenttotals`
--
ALTER TABLE `agenttotals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `cancels`
--
ALTER TABLE `cancels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `cookes`
--
ALTER TABLE `cookes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `country`
--
ALTER TABLE `country`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT untuk tabel `coupondiscounts`
--
ALTER TABLE `coupondiscounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=267;

--
-- AUTO_INCREMENT untuk tabel `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `employeetypes`
--
ALTER TABLE `employeetypes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `facilitys`
--
ALTER TABLE `facilitys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `faqquestions`
--
ALTER TABLE `faqquestions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `fitnesses`
--
ALTER TABLE `fitnesses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `fleets`
--
ALTER TABLE `fleets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `fonts`
--
ALTER TABLE `fonts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1335;

--
-- AUTO_INCREMENT untuk tabel `footers`
--
ALTER TABLE `footers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `gatewaytotals`
--
ALTER TABLE `gatewaytotals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `journeylists`
--
ALTER TABLE `journeylists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=385;

--
-- AUTO_INCREMENT untuk tabel `langstrings`
--
ALTER TABLE `langstrings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=334;

--
-- AUTO_INCREMENT untuk tabel `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT untuk tabel `lngstngvalues`
--
ALTER TABLE `lngstngvalues`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1189;

--
-- AUTO_INCREMENT untuk tabel `localizes`
--
ALTER TABLE `localizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `maxtimes`
--
ALTER TABLE `maxtimes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT untuk tabel `partialpaids`
--
ALTER TABLE `partialpaids`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT untuk tabel `paymentgateways`
--
ALTER TABLE `paymentgateways`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `paymethods`
--
ALTER TABLE `paymethods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `paymethodtotals`
--
ALTER TABLE `paymethodtotals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT untuk tabel `paypals`
--
ALTER TABLE `paypals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `paystacks`
--
ALTER TABLE `paystacks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1781;

--
-- AUTO_INCREMENT untuk tabel `pickdrops`
--
ALTER TABLE `pickdrops`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT untuk tabel `privacies`
--
ALTER TABLE `privacies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `razors`
--
ALTER TABLE `razors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `refunds`
--
ALTER TABLE `refunds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `schedulefilters`
--
ALTER TABLE `schedulefilters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `section_five_app`
--
ALTER TABLE `section_five_app`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `section_four_comment`
--
ALTER TABLE `section_four_comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `section_four_detail`
--
ALTER TABLE `section_four_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `section_one_home`
--
ALTER TABLE `section_one_home`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `section_seven_subscrib`
--
ALTER TABLE `section_seven_subscrib`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `section_six_blog`
--
ALTER TABLE `section_six_blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `section_three_heading`
--
ALTER TABLE `section_three_heading`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `section_two_detail`
--
ALTER TABLE `section_two_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `section_two_work_flow`
--
ALTER TABLE `section_two_work_flow`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `socialmedias`
--
ALTER TABLE `socialmedias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `socialsignins`
--
ALTER TABLE `socialsignins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `stands`
--
ALTER TABLE `stands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `stripes`
--
ALTER TABLE `stripes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `stuffassigns`
--
ALTER TABLE `stuffassigns`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT untuk tabel `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `subtrips`
--
ALTER TABLE `subtrips`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `taxes`
--
ALTER TABLE `taxes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `terms`
--
ALTER TABLE `terms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT untuk tabel `timezone`
--
ALTER TABLE `timezone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=419;

--
-- AUTO_INCREMENT untuk tabel `trips`
--
ALTER TABLE `trips`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT untuk tabel `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT untuk tabel `vehicalimages`
--
ALTER TABLE `vehicalimages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `websettings`
--
ALTER TABLE `websettings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `agentcommissions`
--
ALTER TABLE `agentcommissions`
  ADD CONSTRAINT `agentcommissions_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`id`),
  ADD CONSTRAINT `agentcommissions_subtrip_id_foreign` FOREIGN KEY (`subtrip_id`) REFERENCES `subtrips` (`id`),
  ADD CONSTRAINT `agentcommissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `agents`
--
ALTER TABLE `agents`
  ADD CONSTRAINT `agents_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`),
  ADD CONSTRAINT `agents_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`),
  ADD CONSTRAINT `agents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `agenttotals`
--
ALTER TABLE `agenttotals`
  ADD CONSTRAINT `agenttotals_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`id`);

--
-- Ketidakleluasaan untuk tabel `cancels`
--
ALTER TABLE `cancels`
  ADD CONSTRAINT `cancels_cancel_by_foreign` FOREIGN KEY (`cancel_by`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `coupondiscounts`
--
ALTER TABLE `coupondiscounts`
  ADD CONSTRAINT `coupondiscounts_coupon_id_foreign` FOREIGN KEY (`coupon_id`) REFERENCES `coupons` (`id`),
  ADD CONSTRAINT `coupondiscounts_subtrip_id_foreign` FOREIGN KEY (`subtrip_id`) REFERENCES `subtrips` (`id`);

--
-- Ketidakleluasaan untuk tabel `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`),
  ADD CONSTRAINT `employees_employeetype_id_foreign` FOREIGN KEY (`employeetype_id`) REFERENCES `employeetypes` (`id`);

--
-- Ketidakleluasaan untuk tabel `gatewaytotals`
--
ALTER TABLE `gatewaytotals`
  ADD CONSTRAINT `gatewaytotals_gateway_id_foreign` FOREIGN KEY (`gateway_id`) REFERENCES `paymentgateways` (`id`),
  ADD CONSTRAINT `gatewaytotals_subtrip_id_foreign` FOREIGN KEY (`subtrip_id`) REFERENCES `subtrips` (`id`),
  ADD CONSTRAINT `gatewaytotals_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`),
  ADD CONSTRAINT `gatewaytotals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `lngstngvalues`
--
ALTER TABLE `lngstngvalues`
  ADD CONSTRAINT `lngstngvalues_localize_id_foreign` FOREIGN KEY (`localize_id`) REFERENCES `localizes` (`id`),
  ADD CONSTRAINT `lngstngvalues_string_id_foreign` FOREIGN KEY (`string_id`) REFERENCES `langstrings` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
