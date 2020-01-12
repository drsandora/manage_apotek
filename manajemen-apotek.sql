-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jan 2020 pada 14.25
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manajemen-apotek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `apotek`
--

CREATE TABLE `apotek` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(255) NOT NULL,
  `nama_apotek` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_apotek` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude_apotek` mediumtext COLLATE utf8mb4_unicode_ci,
  `longitude_apotek` double(8,2) NOT NULL,
  `link_apotek` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `apotek`
--

INSERT INTO `apotek` (`id`, `user_id`, `nama_apotek`, `alamat_apotek`, `latitude_apotek`, `longitude_apotek`, `link_apotek`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 0, 'apotek k24', 'asdasdas', '0.00', 0.00, 'asda', NULL, NULL, NULL),
(3, 0, '111', '1', '12.00', 107.63, '1', 'apotek_k24.png', '2020-01-05 12:20:09', '2020-01-09 00:46:41'),
(5, 0, '2', '3', '-6.91', 107.63, '31231', NULL, '2020-01-05 12:43:34', '2020-01-05 12:45:07'),
(8, 11, 'Apotek K-24 Ruko Antapani Tengah', 'asdas', '-6.9145231', -6.91, 'https://goo.gl/maps/stRKFmAiBj1DWaup9', NULL, '2020-01-11 11:10:12', '2020-01-11 11:10:12'),
(9, 12, 'asdsa', 'cvva', '-6.9145231', 107.63, 'https://goo.gl/maps/7a4hQnJxDK5iA3hUA', NULL, '2020-01-11 11:13:42', '2020-01-11 11:13:42'),
(10, 13, 'apotek ABC', 'asdas', '-6.9145231', 107.60, 'asdasds', NULL, '2020-01-11 11:14:13', '2020-01-11 11:14:13'),
(11, 14, 'apotek gaaa', 'asdas', '-6.9145231', -6.91, 'https://goo.gl/maps/7a4hQnJxDK5iA3hUA', NULL, '2020-01-11 13:10:23', '2020-01-11 13:10:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dabat`
--

CREATE TABLE `dabat` (
  `id` int(11) NOT NULL,
  `kode` varchar(191) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `satuan` varchar(191) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dabat`
--

INSERT INTO `dabat` (`id`, `kode`, `nama`, `satuan`, `jumlah`, `harga`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'a22', 'laptop', 'strip', 20, 5500, 13, '2020-01-11 20:29:12', '0000-00-00 00:00:00'),
(2, 'a11', 'amoxcilin', 'strip', 50, 3000, 13, '2020-01-11 13:33:33', '2020-01-11 20:33:33'),
(3, 'b22', 'paracetamol', 'strip', 40, 1500, 14, '2020-01-11 13:35:26', '2020-01-11 20:35:26'),
(4, 'rt2', 'antimo', 'kemasan', 13, 1000, 13, '2020-01-11 14:24:32', '2020-01-11 21:24:32'),
(5, 'aaa', 'ambeven', 'botol', 10, 20000, 14, '2020-01-11 17:17:17', '2020-01-12 00:17:17'),
(6, 'abc', 'diapet', 'strip', 50, 3000, 14, '2020-01-11 17:18:50', '2020-01-12 00:18:50'),
(7, 'aaa', 'ambeven', 'botol', 10, 20000, 14, '2020-01-11 17:18:50', '2020-01-12 00:18:50'),
(8, 'abc', 'diapet', 'strip', 50, 3000, 14, '2020-01-11 17:20:11', '2020-01-12 00:20:11'),
(9, 'aaa', 'ambeven', 'botol', 10, 20000, 14, '2020-01-11 17:20:11', '2020-01-12 00:20:11'),
(10, 'abc', 'diapet', 'strip', -30, 37000, 14, '2020-01-11 17:20:11', '2020-01-12 00:20:11'),
(11, 'aaa', 'ambeven', 'botol', -70, 54000, 14, '2020-01-11 17:20:11', '2020-01-12 00:20:11'),
(12, 'abc', 'diapet', 'strip', 50, 3000, 14, '2020-01-11 17:21:20', '2020-01-12 00:21:20'),
(13, 'aaa', 'ambeven', 'botol', 10, 20000, 14, '2020-01-11 17:21:20', '2020-01-12 00:21:20'),
(14, 'abc', 'diapet', 'strip', -30, 37000, 14, '2020-01-11 17:21:20', '2020-01-12 00:21:20'),
(15, 'aaa', 'ambeven', 'botol', -70, 54000, 14, '2020-01-11 17:21:20', '2020-01-12 00:21:20'),
(16, 'abc', 'diapet', 'strip', 50, 3000, 13, '2020-01-11 17:21:54', '2020-01-12 00:21:54'),
(17, 'aaa', 'ambeven', 'botol', 10, 20000, 13, '2020-01-11 17:21:55', '2020-01-12 00:21:55'),
(18, 'abc', 'diapet', 'strip', -30, 37000, 13, '2020-01-11 17:21:55', '2020-01-12 00:21:55'),
(19, 'aaa', 'ambeven', 'botol', -70, 54000, 13, '2020-01-11 17:21:55', '2020-01-12 00:21:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_01_05_165434_create_apotek_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'ilhamsyah', 'ilhamsyah@gmail.com', NULL, '$2y$10$JUGR.TsH2nsGOwk.Fn74LeVmFK0nuoLFWX8Nbt4YHWK16a02QhH62', 'eeyDpOlGKdFigpPAjJoDq4DEgAxY88MzXzeEkPLyZalQrcqQrvbIGkJe3A3F', '2020-01-09 01:15:08', '2020-01-09 01:15:08'),
(9, 'apotek', 'Apotek K-24 Ruko Antapani Tengah', 'admin@divusi.com', NULL, '$2y$10$d57Ogyp0mK91a7fHVr68LOxURZY8kWhdQkd0G5aaFLNbcf6WI8tkK', 'j4KeUDSiFccg8VT6d12fTzRoH0E2LQtQ8utZHrf32BHbkseiIYeKDKnPzQ2Q', '2020-01-11 11:01:37', '2020-01-11 11:01:37'),
(11, 'apotek', 'Apotek K-24 Ruko Antapani Tengah', 'aku@cinta.fake', NULL, '$2y$10$gfm2kyxIJrIb7YPN8vKYgOM7DZ2ByGAUYu0IQVN6a8APKkYMUY4I6', 'eBQcYvVgxqK7RALzjInkG5z7xNCEFwlS249TpmgNSaUCxEoDy9CSApazYi7R', '2020-01-11 11:10:12', '2020-01-11 11:10:12'),
(12, 'apotek', 'asdsa', 'admin@gmail.com', NULL, '$2y$10$VfP0SAt0Ze0sZutMXr9Ri./wRD5zmjpO.29k/v.zWPq.yMUd60W4i', 'gN9q6s2jBkifCSSUbN7CE9FDLkLKo30j7T2WSYMo8LaO9Btbs6pwLqN3VHv8', '2020-01-11 11:13:41', '2020-01-11 11:13:41'),
(13, 'apotek', 'apotek ABC', 'kaku@gmail.com', NULL, '$2y$10$eJEGFDDEWLon/qDOXUv9ZeSGveB4DY1WuFVxJ4MW3MonE0wALKgKu', 'b8LLwabDa99NYBmrMiecwNnjcqu8k136JI4eog0b9uCVy7XAQGJMQOtNLro9', '2020-01-11 11:14:13', '2020-01-11 11:14:13'),
(14, 'apotek', 'apotek gaaa', 'ga@gmail.com', NULL, '$2y$10$Ng29iXRqqZ3mELd1eiLw6ejp86VY9d/vWbJPSfRoHjREmugWLMCTG', 'QS5opxnMMMvh2oT7HRlXXoxdxiMFep8S9kaM3eYKJbY8Jt1r1DjKHaG4NXkL', '2020-01-11 13:10:23', '2020-01-11 13:10:23');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `apotek`
--
ALTER TABLE `apotek`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dabat`
--
ALTER TABLE `dabat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `apotek`
--
ALTER TABLE `apotek`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `dabat`
--
ALTER TABLE `dabat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
