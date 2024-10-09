-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2023 at 08:13 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oneplm_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_profiles`
--

CREATE TABLE `company_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_1` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_2` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slogan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `request_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `request_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `why_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wechat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_time` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `close_time` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_us` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `achievement` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_profiles`
--

INSERT INTO `company_profiles` (`id`, `company_name`, `phone_1`, `phone_2`, `email`, `logo`, `slogan`, `address`, `request_image`, `request_description`, `why_image`, `about_description`, `about_image`, `facebook`, `youtube`, `instagram`, `linkedin`, `twitter`, `whatsapp`, `wechat`, `fax`, `website`, `open_time`, `close_time`, `contact_us`, `achievement`, `tel`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Barrylabs', '+01884484884', '+01710303205', 'barrylabs@gmail.com', 'uploads/company/1024  B_63cf9ff91b997.png', NULL, '123 Street, New York, USA', 'uploads/company/contact_63cf9ff91bd2f.jpg', '<p>Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>', 'uploads/company/blog-1_63cf9ff91bc54.jpg', '<p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p><p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet&nbsp;</p><p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p><p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>', 'uploads/company/c_63cf9ff91bb6d.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-24 03:02:00', '2023-01-26 06:39:50');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Portia Sanders', 'qusy@mailinator.com', 'Adipisicing reprehen', 'Reiciendis molestiae', '2023-01-25 05:10:54', '2023-01-25 05:10:54'),
(3, 'Erica Palmer', 'bufy@mailinator.com', 'Aspernatur quas assu', 'Veritatis eos omnis', '2023-01-25 05:11:43', '2023-01-25 05:11:43'),
(4, 'Jelani Romero', 'pykis@mailinator.com', 'Qui molestias sequi', 'Occaecat nemo laboru', '2023-01-25 05:12:06', '2023-01-25 05:12:06'),
(5, 'Duncan Hernandez', 'tijisede@mailinator.com', 'Eum quo commodo temp', 'Quis reprehenderit n', '2023-01-25 05:34:57', '2023-01-25 05:34:57'),
(6, 'Lee Paul', 'jytoqara@mailinator.com', 'Et eligendi quis et', 'In aspernatur rerum', '2023-01-25 05:53:04', '2023-01-25 05:53:04');

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counters`
--

INSERT INTO `counters` (`id`, `title`, `count_number`, `created_at`, `updated_at`) VALUES
(1, 'Happy Clients', '60', '2023-01-24 03:05:06', '2023-01-24 03:05:06'),
(2, 'Projects Done', '100', '2023-01-24 03:05:18', '2023-01-24 03:05:18'),
(3, 'Win Awards', '20', '2023-01-24 03:05:30', '2023-01-24 03:05:30');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

CREATE TABLE `management` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `management`
--

INSERT INTO `management` (`id`, `name`, `designation`, `image`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'bangladesh bank', 'Veniam id error pla', 'uploads/management/33740.png', '1', '2023-01-25 00:55:17', '2023-01-25 00:55:10', '2023-01-25 00:55:17'),
(2, 'Gabriel Turner', 'Laborum Sit et con', 'uploads/management/47558.png', '1', '2023-01-25 00:57:41', '2023-01-25 00:57:38', '2023-01-25 00:57:41'),
(3, 'Irene Sheppard', 'Quia est molestias', 'uploads/management/70203.png', '1', '2023-01-25 03:43:53', '2023-01-25 01:03:13', '2023-01-25 03:43:53'),
(4, 'Sarah Caldwell', 'Voluptas amet labor', 'uploads/management/44117.png', '1', '2023-01-25 03:43:56', '2023-01-25 01:10:51', '2023-01-25 03:43:56'),
(5, 'Carter Marsh', 'Rerum nulla et place', 'uploads/management/4525.png', '1', '2023-01-25 01:18:29', '2023-01-25 01:18:25', '2023-01-25 01:18:29'),
(6, 'Name', 'Desingnation', 'uploads/management/8180.jpg', '1', NULL, '2023-01-25 03:44:19', '2023-01-25 03:44:19'),
(7, 'Name', 'Desingnation', 'uploads/management/75343.jpg', '1', NULL, '2023-01-25 03:44:47', '2023-01-25 03:44:47'),
(8, 'Name', 'Desingnation', 'uploads/management/33548.jpg', '1', NULL, '2023-01-25 03:45:12', '2023-01-25 03:45:12'),
(9, 'Name', 'Desingnation', 'uploads/management/58825.jpg', '1', NULL, '2023-01-25 03:45:30', '2023-01-25 03:45:30'),
(10, 'Name', 'Desingnation', 'uploads/management/89255.jpg', '1', NULL, '2023-01-25 03:45:48', '2023-01-25 04:41:37');

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
(16, '2014_10_12_000000_create_users_table', 1),
(17, '2014_10_12_100000_create_password_resets_table', 1),
(18, '2019_08_19_000000_create_failed_jobs_table', 1),
(19, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(20, '2021_10_02_042752_create_partners_table', 1),
(21, '2021_10_02_042941_create_projects_table', 1),
(22, '2021_10_02_043020_create_sliders_table', 1),
(23, '2021_10_02_045737_create_company_profiles_table', 1),
(24, '2021_10_02_082227_create_photo_gellaries_table', 1),
(25, '2021_10_07_045734_create_contact_us_table', 1),
(26, '2021_10_07_082935_create_slider_images_table', 1),
(27, '2021_10_12_044129_create_counters_table', 1),
(31, '2022_01_25_102347_create_services_table', 1),
(32, '2022_04_17_050630_create_management_table', 1),
(35, '2023_01_27_034646_create_why_chooses_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `partner_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photo_gellaries`
--

CREATE TABLE `photo_gellaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thum_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT 'A',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT 'A',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `slug`, `image`, `created_by`, `updated_by`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Our Client', 'our-client', 'uploads/project/vendor-1_63cfa0207aa48.jpg', NULL, NULL, 'A', NULL, '2023-01-24 03:08:48', '2023-01-24 03:08:48'),
(2, 'Our Client', 'our-client', 'uploads/project/vendor-2_63cfa02fc7abc.jpg', NULL, NULL, 'A', NULL, '2023-01-24 03:09:03', '2023-01-24 03:09:03'),
(3, 'Our Client', 'our-client', 'uploads/project/vendor-4_63cfa03b9f7f9.jpg', NULL, NULL, 'A', NULL, '2023-01-24 03:09:15', '2023-01-24 03:09:15'),
(4, 'Our Client', 'our-client', 'uploads/project/vendor-6_63cfa0483dd4c.jpg', NULL, NULL, 'A', NULL, '2023-01-24 03:09:28', '2023-01-24 03:09:28'),
(5, 'Our Client', 'our-client', 'uploads/project/vendor-8_63cfa054972b0.jpg', NULL, NULL, 'A', NULL, '2023-01-24 03:09:40', '2023-01-24 03:09:40');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `big_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `slug`, `image`, `big_image`, `description`, `created_at`, `updated_at`) VALUES
(31, 'Cyber Security', 'cyber-security-1674638127', 'uploads/service/cyber-security_63d0f32f08fe3.png', 'uploads/service/erp2_63d10ee55b580.jpg', 'Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed', '2023-01-25 03:15:27', '2023-01-26 06:28:41'),
(32, 'Web Development', 'data-analytics-1674638150', 'uploads/service/web-development_63d0f50df2d0b.png', 'uploads/service/erp_63d10ed6cfb30.jpg', 'Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed', '2023-01-25 03:15:50', '2023-01-26 06:28:20'),
(33, 'Data Analytics', 'data-analytics-1674638650', 'uploads/service/analysis_63d0f53a72b0f.png', 'uploads/service/erp2_63d10ecbee7e2.jpg', 'Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed', '2023-01-25 03:24:10', '2023-01-26 06:27:46'),
(34, 'Apps Development', 'apps-development-1674638684', 'uploads/service/app-development_63d0f55c85b4d.png', 'uploads/service/erp_63d10ebdc1f7b.jpg', 'Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed', '2023-01-25 03:24:44', '2023-01-26 06:27:07');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_title_one` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_title_two` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_title_one`, `slider_title_two`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'CREATIVE & INNOVATIVE', 'Creative & Innovative Digital Solution', 'uploads/slider/15799.jpg', 'A', '2023-01-24 03:03:53', '2023-01-24 03:03:53'),
(2, 'CREATIVE & INNOVATIVE', 'Creative & Innovative Digital Solution', 'uploads/slider/25425.jpg', 'A', '2023-01-24 03:04:03', '2023-01-24 03:04:03'),
(3, 'CREATIVE & INNOVATIVE', 'Creative & Innovative Digital Solution', 'uploads/slider/40367.jpg', 'A', '2023-01-24 03:04:18', '2023-01-24 03:04:18');

-- --------------------------------------------------------

--
-- Table structure for table `slider_images`
--

CREATE TABLE `slider_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_id` bigint(20) UNSIGNED NOT NULL,
  `slider_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `image`, `password`, `status`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', NULL, 'uploads/user/testimonial-2_63cfa223e1559.jpg', '$2y$10$G/vcIipbRNPFEePBjdTwJOYw01rFkCbENvMlNvRL.k1kc3NArOEiq', '1', NULL, NULL, '2023-01-24 03:01:59', '2023-01-24 03:17:23'),
(2, 'demo', 'demo', 'demo@gmail.com', NULL, 'uploads/user/testimonial-3_63d27a0b3274a.jpg', '$2y$10$fNuPScS.raUzr.9fofv1m.xNQF.Oa2.o8NJ6xlY.gebBys7m9DOMa', '1', NULL, NULL, '2023-01-26 07:03:07', '2023-01-26 07:03:07');

-- --------------------------------------------------------

--
-- Table structure for table `why_chooses`
--

CREATE TABLE `why_chooses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_chooses`
--

INSERT INTO `why_chooses` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(15, 'Best In Industry', 'Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor', '2023-01-27 04:20:13', '2023-01-27 04:20:13'),
(16, 'Award Winning', 'Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor', '2023-01-27 05:42:53', '2023-01-27 05:42:53'),
(17, 'Professional Staff', 'Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor', '2023-01-27 05:43:07', '2023-01-27 05:43:07'),
(18, '24/7 Support', 'Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor', '2023-01-27 05:43:20', '2023-01-27 05:43:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_profiles`
--
ALTER TABLE `company_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `management`
--
ALTER TABLE `management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `photo_gellaries`
--
ALTER TABLE `photo_gellaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_images`
--
ALTER TABLE `slider_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slider_images_slider_id_foreign` (`slider_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indexes for table `why_chooses`
--
ALTER TABLE `why_chooses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_profiles`
--
ALTER TABLE `company_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `management`
--
ALTER TABLE `management`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photo_gellaries`
--
ALTER TABLE `photo_gellaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slider_images`
--
ALTER TABLE `slider_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `why_chooses`
--
ALTER TABLE `why_chooses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `slider_images`
--
ALTER TABLE `slider_images`
  ADD CONSTRAINT `slider_images_slider_id_foreign` FOREIGN KEY (`slider_id`) REFERENCES `sliders` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
