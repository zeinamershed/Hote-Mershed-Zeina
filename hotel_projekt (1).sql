-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 05. Feb 2024 um 23:30
-- Server-Version: 10.4.32-MariaDB
-- PHP-Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `hotel_projekt`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_25_110151_create_posts_table', 1),
(6, '2024_01_29_121247_user_id_in_posts_table', 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `photos`
--

INSERT INTO `photos` (`id`, `image_path`, `created_at`, `updated_at`) VALUES
(4, 'https://www.wyndhamhotels.com/content/dam/property-images/en-us/vi/de/others/berlin/57378/57378_lobby_view_2.jpg?crop=3000:2000;*,*&downsize=720:*', NULL, NULL),
(5, 'https://www.wyndhamhotels.com/content/dam/property-images/en-us/vi/de/others/berlin/57378/57378_guest_room_3.jpg?crop=3000:2000;*,*&downsize=720:*', NULL, NULL),
(6, 'https://www.wyndhamhotels.com/content/dam/property-images/en-us/vi/de/others/berlin/57378/57378_guest_room_11.jpg?crop=3000:2000;*,*&downsize=720:*', NULL, NULL),
(7, 'https://www.wyndhamhotels.com/content/dam/property-images/en-us/vi/de/others/berlin/57378/57378_bath_1.jpg?crop=3000:2000;*,*&downsize=720:*', NULL, NULL),
(8, 'https://www.wyndhamhotels.com/content/dam/property-images/en-us/vi/de/others/berlin/57378/57378_complimentary_breakfast_1.jpg?crop=3000:2000;*,*&downsize=720:*', NULL, NULL),
(9, 'https://www.wyndhamhotels.com/content/dam/property-images/en-us/vi/de/others/berlin/57378/57378_guest_room_13.jpg?crop=3000:2000;*,*&downsize=720:*', NULL, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `comment`, `created_at`, `updated_at`) VALUES
(46, 3, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, ', NULL, NULL),
(47, 4, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, ', NULL, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `info` text DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `photo`, `phone`, `info`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hans-Joachim Fricke B.Sc.', 'johannes.blum@example.net', '2024-02-01 07:32:05', '$2y$12$ywjpK.ch15Iak863zJ3i4e9J70p5LLvqdEGIzlFfqeV9XcgBBb.8G', NULL, NULL, 'Nachbar \"zwei\", \"drei\" der folgende, und so zählt ihr auch rings herum, jeder die Zahl, die an ihn und hören ihn nicht—das ist auch glücklich, weil er zu unterliegen fürchtet. Letzthin kam ich zum.', 'A0COLnbrcKfaElTsyqWtuCAylGOZACUnJSINBinKFZAz5mrbKQxHdodrZU1D', '2024-02-01 07:32:05', '2024-02-01 07:32:05'),
(2, 'Frau Prof. Dr. Elli Lenz B.Sc.', 'pauline14@example.net', '2024-02-01 07:32:05', '$2y$12$ywjpK.ch15Iak863zJ3i4e9J70p5LLvqdEGIzlFfqeV9XcgBBb.8G', NULL, NULL, 'Übermut dem armen Volke desto empfindlicher zu machen. Da mir sein Wesen gefiel, redete ich ihn lieben. Er will mir wohl, und ich bin erstaunt, wie ich in seiner Demut erkennt, wo das alles in mein.', 'DQjB2zaxCG', '2024-02-01 07:32:05', '2024-02-01 07:32:05'),
(3, 'Loni Adam B.A.', 'jolanta92@example.com', '2024-02-01 07:32:05', '$2y$12$ywjpK.ch15Iak863zJ3i4e9J70p5LLvqdEGIzlFfqeV9XcgBBb.8G', NULL, NULL, 'Gefühl immer herum. Wenn ich des Morgens beim Erwachen eine Aussicht auf den höchsten Grad gespannt, sie streckt endlich ihre Arme aus, all ihre Wünsche zu umfassen—und ihr Geliebter verläßt.', 'kZGNnyOD6e', '2024-02-01 07:32:05', '2024-02-01 07:32:05'),
(4, 'Eckard Schuler-Kessler', 'ehohmann@example.net', '2024-02-01 07:32:05', '$2y$12$ywjpK.ch15Iak863zJ3i4e9J70p5LLvqdEGIzlFfqeV9XcgBBb.8G', NULL, NULL, 'Wohlfahrt anschreiben.—Wohl dem, der zusehen und sagen könnte: \'die Törin! Hätte sie gewartet, hätte sie die Zeit über mit offenen Augen, als säßen sie nicht vielmehr ein innerer Unmut über unsere.', 'yQfTCFhe5v', '2024-02-01 07:32:05', '2024-02-01 07:32:05'),
(5, 'Gerold Steffen B.A.', 'awalther@example.net', '2024-02-01 07:32:05', '$2y$12$ywjpK.ch15Iak863zJ3i4e9J70p5LLvqdEGIzlFfqeV9XcgBBb.8G', NULL, NULL, 'Wie es gegen das Fenster, und hielt ein schwarzes Brot und schnitt ihren Kleinen rings herum jedem sein Stück nach Proportion ihres Alters und Appetits ab, gab\'s jedem mit solcher Wahrheit im.', '6NeSDnQLo2', '2024-02-01 07:32:05', '2024-02-01 07:32:05'),
(6, 'Hans-Heinrich Rupp', 'heiderose04@example.net', '2024-02-01 07:32:05', '$2y$12$ywjpK.ch15Iak863zJ3i4e9J70p5LLvqdEGIzlFfqeV9XcgBBb.8G', NULL, NULL, 'Hand zu küssen begehrten, das denn der junge Mensch wandte mir ein, wenn ich nicht mehr ganz jungen Gesichte merkwürdig gewesen war. Sie sieht Lotten lächelnd an, hebt einen drohenden Finger auf und.', 'vOCCsNpdpM', '2024-02-01 07:32:05', '2024-02-01 07:32:05'),
(7, 'Vincenzo Kiefer', 'evelin.wiesner@example.org', '2024-02-01 07:32:05', '$2y$12$ywjpK.ch15Iak863zJ3i4e9J70p5LLvqdEGIzlFfqeV9XcgBBb.8G', NULL, NULL, 'Ich sah manchen, der in Hoffnung auf ein saftiges Pfand sein Mäulchen spitzte und seine Ketten zerreißt? Ein Mensch, der sich nicht verlieben!\"—\"Wieso?\" sagte ich.—\"Sie ist schon.', 'eH55Jcp2go', '2024-02-01 07:32:05', '2024-02-01 07:32:05'),
(8, 'Simona Möller B.Eng.', 'uprobst@example.org', '2024-02-01 07:32:05', '$2y$12$ywjpK.ch15Iak863zJ3i4e9J70p5LLvqdEGIzlFfqeV9XcgBBb.8G', NULL, NULL, 'Sinn ihrer Rede ganz versunken, oft gar die Worte nicht hörte, mit denen ich mich jemals unterstehe, diesen Himmel, dieses Vertrauen—! Du verstehst mich. Nein, mein Herz oft drängt!—wenn ich bei ihr.', 'YBNEPMj5OF', '2024-02-01 07:32:05', '2024-02-01 07:32:05'),
(9, 'Bert Adam', 'reinhild.beyer@example.net', '2024-02-01 07:32:05', '$2y$12$ywjpK.ch15Iak863zJ3i4e9J70p5LLvqdEGIzlFfqeV9XcgBBb.8G', NULL, NULL, 'Feuer, und eine Stunde ist mir\'s so leicht vom Flecke gegangen. Ich war im Begriff zu antworten, als wir verlangten—kurz, ich mag jetzt nichts davon schreiben, sage meiner Mutter, es werde alles gut.', '2anu3Co32i', '2024-02-01 07:32:05', '2024-02-01 07:32:05'),
(11, 'Majd', 'majd@mail.com', NULL, '$2y$12$x7fPBzHwCkEz1kFkHHl5Du42X0GlLa01ChyOF0Y.CbKlMhQq5xUcO', NULL, NULL, NULL, NULL, '2024-02-04 13:25:30', '2024-02-04 13:25:30'),
(12, 'Trump', 'test@test.de', NULL, '$2y$12$6HsUu2fJjLpmaXR7KNj5s.XwrlpYNdyIcr.33FhQ/aaDsghKCn9ie', NULL, NULL, NULL, NULL, '2024-02-04 16:30:01', '2024-02-04 16:30:01'),
(13, 'maya', 'maya@mail.de', NULL, '$2y$12$MrnkkctjnmKmpqDJRusySOcQd3bHTFIu29zfGWdPstrVLhZnOk8/a', NULL, NULL, NULL, NULL, '2024-02-04 19:16:15', '2024-02-04 19:16:15'),
(14, 'shams', 'shams@mail.de', NULL, '$2y$12$i.0O4JUaUjJKR7b2Z6D3n.SL2wg0MnzO6ndnSm8dBoErn.YLvwJ7C', NULL, NULL, NULL, NULL, '2024-02-04 20:46:40', '2024-02-04 20:46:40'),
(15, 'Ansaf', 'ansaf@mail.de', NULL, '$2y$12$xYWcjwF8nrczkjxuNISD4eynAlN8vjzt9pDGl4qdAsGFgSII8LDBW', NULL, NULL, NULL, NULL, '2024-02-05 20:46:10', '2024-02-05 20:46:10'),
(16, 'Zeina', 'zeina@mail.de', NULL, '$2y$12$KxN4dx9pmdaP6ePxrpRWV.PuBbf3OHMPxCWX5RY18cVyBRbhxr/Mq', NULL, NULL, NULL, NULL, '2024-02-05 21:18:23', '2024-02-05 21:18:23'),
(17, 'alaa', 'alaa@mail.de', NULL, '$2y$12$eGbbglmHpLIjwn5i3OAGru/RKwZ6EnLz0BZutVPZOHBakAmZjNWQK', NULL, NULL, NULL, NULL, '2024-02-05 21:39:35', '2024-02-05 21:39:35');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indizes für die Tabelle `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indizes für die Tabelle `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indizes für die Tabelle `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT für Tabelle `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT für Tabelle `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
