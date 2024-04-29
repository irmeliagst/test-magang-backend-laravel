-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 10, 2024 at 04:29 AM
-- Server version: 5.7.24
-- PHP Version: 8.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_book_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukus`
--

CREATE TABLE `bukus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('publish','notpublish') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_upload` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bukus`
--

INSERT INTO `bukus` (`id`, `author`, `judul`, `deskripsi`, `cover`, `status`, `tanggal_upload`, `created_at`, `updated_at`) VALUES
(5, 'Amelia', 'Lala Pho', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Vivamus vel lorem elit. Fusce id dictum felis. Nam non massa ac tortor varius eleifend.', 'covers/ToJPYKiWnH3e3HoviPSYVD7cKJkKXYCKPSp9NQlo.jpg', 'notpublish', '2024-04-04 17:00:00', '2024-04-02 21:01:43', '2024-04-09 21:19:57'),
(6, 'Agasta', 'laskar Matahari', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Vivamus vel lorem elit. Fusce id dictum felis. Nam non massa ac tortor varius eleifend.', 'covers/TQbrHfFi5nB0e82Xlwfu4HRxNArasLpwHE0dT0CY.jpg', 'publish', '2024-04-02 17:00:00', '2024-04-02 21:13:59', '2024-04-09 20:59:53'),
(7, 'Arum', 'Lamunan', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Vivamus vel lorem elit. Fusce id dictum felis. Nam non massa ac tortor varius eleifend.', 'covers/8eS2GDjQu29UgBAehPdX8Jhqt4uwYThsuzaKDwuA.jpg', 'publish', '2024-04-02 17:00:00', '2024-04-02 21:14:20', '2024-04-09 21:00:37'),
(10, 'Alvina', 'Cita Citaku', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Vivamus vel lorem elit. Fusce id dictum felis. Nam non massa ac tortor varius eleifend.', 'covers/gtHxoYDwoCaNXIPUjcqe0kpOa80RwEyisL2jzS3G.jpg', 'publish', '2024-04-02 17:00:00', '2024-04-02 21:46:17', '2024-04-09 21:01:06'),
(11, 'Pingkan', 'Merpati Putih', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Vivamus vel lorem elit. Fusce id dictum felis. Nam non massa ac tortor varius eleifend.', 'covers/xoZMkQ8Ixihe7NQkbpsF3rxJT5yeAp6Me2SyZjh4.jpg', 'publish', '2024-04-02 17:00:00', '2024-04-03 00:59:34', '2024-04-09 21:01:45'),
(12, 'Adi', 'Anak Lanang', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Vivamus vel lorem elit. Fusce id dictum felis. Nam non massa ac tortor varius eleifend.', 'covers/whPWKcSrbxkSnljDABXcLFf4u9LarqYQQKjWj6df.jpg', 'publish', '2024-04-02 17:00:00', '2024-04-03 03:08:43', '2024-04-09 21:02:09'),
(13, 'Saputro', 'Pecinta Buaya', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Vivamus vel lorem elit. Fusce id dictum felis. Nam non massa ac tortor varius eleifend.', 'covers/vf3pMURutYZXeItD8s0nw513PoNWgFCikRD52w2x.jpg', 'publish', '2024-04-02 17:00:00', '2024-04-03 05:05:05', '2024-04-09 21:02:41'),
(14, 'Aulia', 'Anak Cantik', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Vivamus vel lorem elit. Fusce id dictum felis. Nam non massa ac tortor varius eleifend.', 'covers/b9ZPltQOzY0a0gpsu0Ge6ZH7aZ2ssYpeWj1mAKiO.jpg', 'publish', '2024-04-02 17:00:00', '2024-04-03 05:44:05', '2024-04-09 21:03:08'),
(15, 'Sekar', 'Gadis Desa', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Vivamus vel lorem elit. Fusce id dictum felis. Nam non massa ac tortor varius eleifend.', 'covers/uMArkhBwI3pM6jXMg0UrgHokJ1WATBia6RPF24Au.jpg', 'publish', '2024-04-02 17:00:00', '2024-04-03 05:44:24', '2024-04-09 21:03:37'),
(16, 'Ira Amelia', 'Ravispa', 'Di dunia yang dikuasai oleh sihir dan keajaiban, terdapat sebuah kota yang tersembunyi di balik kabut abadi.', 'covers/Pi3qjcVwmLWG0gAD93ijqf2i3gwMxMOsODh9C3la.jpg', 'publish', '2024-04-02 17:00:00', '2024-04-03 06:23:08', '2024-04-03 06:23:08'),
(17, 'Lala LILI', 'Mencari Lala', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae lorem nec mauris fermentum sollicitudin. Vestibulum auctor, ipsum sed finibus tincidunt, velit justo', 'covers/LwnlibW042J9J6p5Zwsj6LcGLbgjctLqG257YML6.jpg', 'publish', '2024-04-02 17:00:00', '2024-04-03 06:24:09', '2024-04-09 21:15:35'),
(18, 'ira amelia agasta', 'bismillah dosen', 'buku ini menceritakan tentang bagaimana kisah perjalanan mengejar cita cita seorang anak pedagang kaki lima. yang nekat berusaha meraih cita cita menjadi seorang dosen.', 'covers/T44bDXnwHooH5382kSSKUJOg6RzdIQROHt5VPeKk.jpg', 'publish', '2024-04-09 17:00:00', '2024-04-09 19:32:59', '2024-04-09 19:32:59'),
(19, 'Ira Amelia', 'Independen Woman', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Vivamus vel lorem elit. Fusce id dictum felis. Nam non massa ac tortor varius eleifend.', 'covers/7RV2p1CmK9JiIesSzTwfh0bHNPpLVpZSKfguPu6G.jpg', 'publish', '2024-04-09 17:00:00', '2024-04-09 21:06:41', '2024-04-09 21:13:40'),
(20, 'Ira Amelia Agasta', 'Anak Pertama', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Vivamus vel lorem elit. Fusce id dictum felis. Nam non massa ac tortor varius eleifend.', 'covers/XXmfbofZmeEPotvJMayry9SmjPYgOUkZfbMrdzwS.jpg', 'publish', '2024-04-09 17:00:00', '2024-04-09 21:08:25', '2024-04-09 21:08:25');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_04_02_234253_create_posts_table', 1),
(6, '2024_04_03_001921_create_bukus_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
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
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Indexes for table `bukus`
--
ALTER TABLE `bukus`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `bukus`
--
ALTER TABLE `bukus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
