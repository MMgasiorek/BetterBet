-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 13 Mar 2023, 15:48
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `betterbet`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `bets`
--

CREATE TABLE `bets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ticket_id` bigint(20) UNSIGNED NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `bets`
--

INSERT INTO `bets` (`id`, `user_id`, `ticket_id`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 7, '100', 'accepted', NULL, NULL),
(2, 1, 8, '150', 'accepted', NULL, NULL),
(3, 1, 8, '40', 'waiting', NULL, NULL),
(6, 6, 6, '41', 'accepted', NULL, '2023-03-13 12:02:10'),
(7, 3, 33, '50', 'waiting', NULL, NULL),
(8, 6, 33, '70', 'waiting', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `failed_jobs`
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
-- Struktura tabeli dla tabeli `games`
--

CREATE TABLE `games` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `api_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` datetime NOT NULL,
  `name_home` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_away` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `league` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `over_price` double(8,2) NOT NULL,
  `over_point` double(8,2) NOT NULL,
  `under_price` double(8,2) NOT NULL,
  `under_point` double(8,2) NOT NULL,
  `score_home` int(11) DEFAULT NULL,
  `score_away` int(11) DEFAULT NULL,
  `current` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `games`
--

INSERT INTO `games` (`id`, `api_id`, `start_time`, `name_home`, `name_away`, `league`, `over_price`, `over_point`, `under_price`, `under_point`, `score_home`, `score_away`, `current`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ca811fe15b6f811e1aa7aa121455281ca8d', '2022-03-13 11:23:15', 'Team_1', 'Team_1', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 0, NULL, NULL, NULL),
(2, 'ca811fe25b6f812e1aa7aa122455281ca8d', '2022-03-13 11:23:15', 'Team_2', 'Team_2', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 0, NULL, NULL, NULL),
(3, 'ca811fe35b6f813e1aa7aa123455281ca8d', '2022-03-13 11:23:15', 'Team_3', 'Team_3', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 0, NULL, NULL, NULL),
(4, 'ca811fe45b6f814e1aa7aa124455281ca8d', '2022-03-13 11:23:15', 'Team_4', 'Team_4', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 0, NULL, NULL, NULL),
(5, 'ca811fe55b6f815e1aa7aa125455281ca8d', '2022-03-13 11:23:15', 'Team_5', 'Team_5', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 0, NULL, NULL, NULL),
(6, 'ca811fe65b6f816e1aa7aa126455281ca8d', '2022-03-13 11:23:16', 'Team_6', 'Team_6', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 0, NULL, NULL, NULL),
(7, 'ca811fe75b6f817e1aa7aa127455281ca8d', '2022-03-13 11:23:16', 'Team_7', 'Team_7', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 0, NULL, NULL, NULL),
(8, 'ca811fe85b6f818e1aa7aa128455281ca8d', '2022-03-13 11:23:16', 'Team_8', 'Team_8', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 0, NULL, NULL, NULL),
(9, 'ca811fe95b6f819e1aa7aa129455281ca8d', '2022-03-13 11:23:16', 'Team_9', 'Team_9', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 0, NULL, NULL, NULL),
(10, 'ca811fe105b6f8110e1aa7aa1210455281ca8d', '2022-03-13 11:23:16', 'Team_10', 'Team_10', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 0, NULL, NULL, NULL),
(11, 'ca811fe115b6f8111e1aa7aa1211455281ca8d', '2022-03-13 11:23:16', 'Team_11', 'Team_11', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 0, NULL, NULL, NULL),
(12, 'ca811fe125b6f8112e1aa7aa1212455281ca8d', '2022-03-13 11:23:16', 'Team_12', 'Team_12', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 0, NULL, NULL, NULL),
(13, 'ca811fe135b6f8113e1aa7aa1213455281ca8d', '2022-03-13 11:23:16', 'Team_13', 'Team_13', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 0, NULL, NULL, NULL),
(14, 'ca811fe145b6f8114e1aa7aa1214455281ca8d', '2022-03-13 11:23:16', 'Team_14', 'Team_14', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 0, NULL, NULL, NULL),
(15, 'ca811fe155b6f8115e1aa7aa1215455281ca8d', '2022-03-13 11:23:16', 'Team_15', 'Team_15', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 0, NULL, NULL, NULL),
(16, 'ca811fe165b6f8116e1aa7aa1216455281ca8d', '2022-03-13 11:23:16', 'Team_16', 'Team_16', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 0, NULL, NULL, NULL),
(17, 'ca811fe175b6f8117e1aa7aa1217455281ca8d', '2022-03-13 11:23:16', 'Team_17', 'Team_17', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 0, NULL, NULL, NULL),
(18, 'ca811fe185b6f8118e1aa7aa1218455281ca8d', '2022-03-13 11:23:17', 'Team_18', 'Team_18', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 0, NULL, NULL, NULL),
(19, 'ca811fe195b6f8119e1aa7aa1219455281ca8d', '2022-03-13 11:23:17', 'Team_19', 'Team_19', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 0, NULL, NULL, NULL),
(20, 'ca811fe205b6f8120e1aa7aa1220455281ca8d', '2022-03-13 11:23:17', 'Team_20', 'Team_20', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 0, NULL, NULL, NULL),
(21, 'ca811fe15b6f811e1aa7aa121455281ca8d', '2024-03-13 11:23:17', 'Team_1', 'Team_1', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 1, NULL, NULL, NULL),
(22, 'ca811fe25b6f812e1aa7aa122455281ca8d', '2024-03-13 11:23:17', 'Team_2', 'Team_2', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 1, NULL, NULL, NULL),
(23, 'ca811fe35b6f813e1aa7aa123455281ca8d', '2024-03-13 11:23:17', 'Team_3', 'Team_3', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 1, NULL, NULL, NULL),
(24, 'ca811fe45b6f814e1aa7aa124455281ca8d', '2024-03-13 11:23:17', 'Team_4', 'Team_4', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 1, NULL, NULL, NULL),
(25, 'ca811fe55b6f815e1aa7aa125455281ca8d', '2024-03-13 11:23:17', 'Team_5', 'Team_5', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 1, NULL, NULL, NULL),
(26, 'ca811fe65b6f816e1aa7aa126455281ca8d', '2024-03-13 11:23:17', 'Team_6', 'Team_6', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 1, NULL, NULL, NULL),
(27, 'ca811fe75b6f817e1aa7aa127455281ca8d', '2024-03-13 11:23:18', 'Team_7', 'Team_7', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 1, NULL, NULL, NULL),
(28, 'ca811fe85b6f818e1aa7aa128455281ca8d', '2024-03-13 11:23:18', 'Team_8', 'Team_8', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 1, NULL, NULL, NULL),
(29, 'ca811fe95b6f819e1aa7aa129455281ca8d', '2024-03-13 11:23:18', 'Team_9', 'Team_9', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 1, NULL, NULL, NULL),
(30, 'ca811fe105b6f8110e1aa7aa1210455281ca8d', '2024-03-13 11:23:18', 'Team_10', 'Team_10', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 1, NULL, NULL, NULL),
(31, 'ca811fe115b6f8111e1aa7aa1211455281ca8d', '2024-03-13 11:23:18', 'Team_11', 'Team_11', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 1, NULL, NULL, NULL),
(32, 'ca811fe125b6f8112e1aa7aa1212455281ca8d', '2024-03-13 11:23:18', 'Team_12', 'Team_12', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 1, NULL, NULL, NULL),
(33, 'ca811fe135b6f8113e1aa7aa1213455281ca8d', '2024-03-13 11:23:18', 'Team_13', 'Team_13', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 1, NULL, NULL, NULL),
(34, 'ca811fe145b6f8114e1aa7aa1214455281ca8d', '2024-03-13 11:23:18', 'Team_14', 'Team_14', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 1, NULL, NULL, NULL),
(35, 'ca811fe155b6f8115e1aa7aa1215455281ca8d', '2024-03-13 11:23:18', 'Team_15', 'Team_15', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 1, NULL, NULL, NULL),
(36, 'ca811fe165b6f8116e1aa7aa1216455281ca8d', '2024-03-13 11:23:18', 'Team_16', 'Team_16', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 1, NULL, NULL, NULL),
(37, 'ca811fe175b6f8117e1aa7aa1217455281ca8d', '2024-03-13 11:23:19', 'Team_17', 'Team_17', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 1, NULL, NULL, NULL),
(38, 'ca811fe185b6f8118e1aa7aa1218455281ca8d', '2024-03-13 11:23:19', 'Team_18', 'Team_18', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 1, NULL, NULL, NULL),
(39, 'ca811fe195b6f8119e1aa7aa1219455281ca8d', '2024-03-13 11:23:19', 'Team_19', 'Team_19', 'english', 1.50, 3.60, 2.50, 2.50, NULL, NULL, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `game_ticket`
--

CREATE TABLE `game_ticket` (
  `game_id` bigint(20) UNSIGNED NOT NULL,
  `ticket_id` bigint(20) UNSIGNED NOT NULL,
  `your_odd` double(8,2) NOT NULL,
  `your_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `game_ticket`
--

INSERT INTO `game_ticket` (`game_id`, `ticket_id`, `your_odd`, `your_type`) VALUES
(27, 5, 2.50, 1),
(30, 3, 1.50, 2),
(30, 5, 1.80, 3),
(30, 33, 1.80, 1),
(31, 6, 2.50, 1),
(32, 2, 1.70, 1),
(32, 3, 2.20, 2),
(32, 4, 1.70, 3),
(33, 6, 1.80, 2),
(33, 33, 1.50, 2),
(34, 4, 3.30, 1),
(34, 33, 1.20, 2),
(36, 1, 2.00, 1),
(37, 1, 2.40, 3),
(37, 2, 1.50, 1),
(37, 5, 2.00, 2),
(38, 1, 1.20, 2),
(38, 5, 1.40, 2),
(38, 6, 2.20, 2),
(39, 1, 1.30, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_27_091359_create_games_table', 1),
(6, '2023_02_27_091752_create_tickets_table', 1),
(7, '2023_03_06_133052_create_bets_table', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `confirm` int(11) NOT NULL,
  `bet_amount` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `tickets`
--

INSERT INTO `tickets` (`id`, `user_id`, `confirm`, `bet_amount`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 100.00, '2023-03-13 10:46:24', '2023-03-13 10:46:24'),
(2, 1, 0, 120.00, NULL, NULL),
(3, 1, 0, 200.00, NULL, NULL),
(4, 1, 0, 70.00, NULL, NULL),
(5, 1, 1, 1.00, '2023-03-13 10:53:38', '2023-03-13 10:53:54'),
(6, 1, 1, 1.00, '2023-03-13 10:53:43', '2023-03-13 10:54:02'),
(7, 2, 1, 120.00, NULL, NULL),
(8, 3, 1, 200.00, NULL, NULL),
(9, 4, 1, 121.00, NULL, NULL),
(10, 2, 0, 120.00, NULL, NULL),
(11, 2, 0, 200.00, NULL, NULL),
(12, 2, 1, 10.00, NULL, NULL),
(13, 2, 1, 23.00, NULL, NULL),
(14, 2, 1, 39.00, NULL, NULL),
(15, 2, 1, 70.00, NULL, NULL),
(16, 3, 0, 100.00, NULL, NULL),
(17, 3, 1, 130.00, NULL, NULL),
(18, 3, 1, 421.00, NULL, NULL),
(19, 3, 1, 10.00, NULL, NULL),
(20, 4, 0, 40.00, NULL, NULL),
(21, 4, 1, 41.00, NULL, NULL),
(22, 4, 1, 24.00, NULL, NULL),
(23, 5, 1, 500.00, NULL, NULL),
(24, 5, 1, 100.00, NULL, NULL),
(25, 5, 1, 75.00, NULL, NULL),
(26, 5, 1, 11.00, NULL, NULL),
(27, 6, 0, 41.00, NULL, NULL),
(28, 6, 1, 51.00, NULL, NULL),
(29, 6, 0, 55.00, NULL, NULL),
(30, 6, 1, 55.00, NULL, NULL),
(31, 6, 0, 75.00, NULL, NULL),
(32, 6, 1, 30.00, NULL, NULL),
(33, 1, 1, 500.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
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
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tom@Tompl', 'Tom@Tompl', NULL, '$2y$10$r1qHBs/3a/edML7ne8wakOwiGki8.4ttE8XVsAO/Z0V5fqhSyu0ba', NULL, NULL, NULL),
(2, 'Bill@Billpl', 'Bill@Billpl', NULL, '$2y$10$sZCYK3bTJiKyaPi6GxU/huaTxZbiiqScJso4VJ0Pk/l2athsHWzCi', NULL, NULL, NULL),
(3, 'Mandy@Mandypl', 'Mandy@Mandypl', NULL, '$2y$10$xjn3r8bLN2mcKADpoLppNOa6R5lq0am6Zo0Fl57WssXJieRaq.FES', NULL, NULL, NULL),
(4, 'Stacy@Stacypl', 'Stacy@Stacypl', NULL, '$2y$10$W5AHpQp4KUQu6lrseNecwOYKnYV2BN1DqRtzSk/K9bd6NRDYdx0GK', NULL, NULL, NULL),
(5, 'Greg@Gregpl', 'Greg@Gregpl', NULL, '$2y$10$tgAfspxBwbBvBvjvjGaUf.nMiKOPROf8gox.05JZSt/FYtrBG5wRW', NULL, NULL, NULL),
(6, 'Jim@Jimpl', 'Jim@Jimpl', NULL, '$2y$10$.fiDKng8XRRA3qMFypaFx.EaDlv310vkjjS8gwVG8oVXrf.rMdws.', NULL, NULL, NULL);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `bets`
--
ALTER TABLE `bets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bets_user_id_foreign` (`user_id`),
  ADD KEY `bets_ticket_id_foreign` (`ticket_id`);

--
-- Indeksy dla tabeli `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeksy dla tabeli `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `game_ticket`
--
ALTER TABLE `game_ticket`
  ADD PRIMARY KEY (`game_id`,`ticket_id`),
  ADD KEY `game_ticket_ticket_id_foreign` (`ticket_id`);

--
-- Indeksy dla tabeli `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeksy dla tabeli `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeksy dla tabeli `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tickets_user_id_foreign` (`user_id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `bets`
--
ALTER TABLE `bets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `games`
--
ALTER TABLE `games`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT dla tabeli `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `bets`
--
ALTER TABLE `bets`
  ADD CONSTRAINT `bets_ticket_id_foreign` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `game_ticket`
--
ALTER TABLE `game_ticket`
  ADD CONSTRAINT `game_ticket_game_id_foreign` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `game_ticket_ticket_id_foreign` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
