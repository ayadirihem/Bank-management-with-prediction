-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3308
-- Généré le : dim. 25 déc. 2022 à 01:11
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bank_management`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `AccountType` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `AccountNumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `Name`, `Adresse`, `AccountType`, `AccountNumber`, `phone`, `Email`, `created_at`, `updated_at`) VALUES
(5, 'test', 'test', '123456', '123', '123', 'test@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_27_223027_create_client_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `code` varchar(30) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `access` varchar(20) NOT NULL,
  `manager_id` int(11) NOT NULL DEFAULT -1,
  `password` varchar(40) NOT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `longitude` text DEFAULT NULL,
  `latitude` text DEFAULT NULL,
  `register_id` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `outlet_id` int(11) DEFAULT -1,
  `tel` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `code`, `name`, `username`, `email`, `access`, `manager_id`, `password`, `pwd`, `active`, `longitude`, `latitude`, `register_id`, `photo`, `outlet_id`, `tel`, `created_at`, `updated_at`, `remember_token`) VALUES
(10, NULL, 'test', 'test', 'test', 'Admin', 1, 'test', 'test', 1, NULL, NULL, 'APA91bETA82MjtK41qdYIn7qoj5CklT0-YQY51QPdqQWk1KnHWNEX6r9Bh-37P7cj6QzfAFkCPJoBd11BVAgtsVQUksG_aPiyxNckDbCYcgg8qdtT7pH4FW59xzlBeM6h1mjg6m555Pj', NULL, -1, 0, NULL, NULL, NULL),
(36, NULL, 'Ghada ', 'Ghada ', 'ghada.k@gmail.com', 'Employer', 1, '966d606a5d4a931da9bc18055cedf3fc4ea19871', NULL, 1, NULL, NULL, NULL, 'cdb586c101b53272e2c14ca2958e7953.png', -1, 0, NULL, NULL, NULL),
(37, NULL, 'Manel', 'Manel', 'lansary.manel@gmail.com', 'Admin', 1, 'ec3869ff57d20bcc9872a69866a15c75ccb2c175', 'admin77', 1, NULL, NULL, NULL, 'maneeel.jpg', -1, 0, NULL, '2022-12-20 16:48:35', NULL),
(39, NULL, 'Amir ', 'Amir', 'amir@gmail.com', 'Employer', 1, 'a5f6684309aac0e065e78f559531c8c6bb62f605', 'amir1234', 1, NULL, NULL, NULL, NULL, -1, 0, '2018-08-12 06:40:36', '2018-08-14 13:25:46', 'CGW3HV8gCoWNisXbs8AZJPdcKMd6CoPlt22xK9uoROEJZKIMb9nWJhhVr3Wi'),
(40, NULL, 'Amine un', 'Amine', 'amine@gmail.com', 'Employer', 1, 'c5d87c8a275b5559c7c2ac1331d5da9f4f118e4c', 'amine1234', 1, NULL, NULL, NULL, NULL, -1, 0, '2018-08-13 06:47:14', '2018-08-14 13:22:50', 'iPEdjHbysTjpJMFQmReQebGRDVxYcY5LKSinHSTO5Aa12GLK9MghaEBpdgew'),
(42, NULL, 'Faouzi L', 'Faouzi', 'faouzi@gmail.com', 'Employer', 1, '89a746e98ecb769adb2ccc69316839d355a7ec3a', 'faouzi1234', 1, NULL, NULL, NULL, NULL, -1, 0, '2018-08-14 05:47:56', '2018-08-14 13:25:15', NULL),
(44, NULL, 'Malek ', 'Malek', 'malek@gmail.com', 'Employer', 1, '8ddd27133b047da1123b50afac6c4bbc226f7b42', 'malek1234', 1, NULL, NULL, NULL, NULL, -1, 0, '2018-08-14 05:50:44', '2018-08-14 13:24:25', 'DILstpdDxbJAbI0oEdqbzZNkqZfWO8IV4oVcBwEbUdNX4nPvold6i6lDSEhC'),
(45, NULL, 'Lotfi', 'Lotfi', 'lotfi@gmail.com', 'Employer', 1, '9609fbfc500dd6edf0ff7066b28f598262b66919', 'lotfi1234', 1, NULL, NULL, NULL, NULL, -1, 0, '2018-08-14 05:51:55', '2018-08-14 05:51:55', 'cYaaKg0eGZFfh5HeT0kN2lskJmjZl6wgUic6s1Y5AijRIt2Wy08rzPIueWAO'),
(46, NULL, 'Ridah ', 'Ridah', 'ridah@gmail.com', 'Employer', 1, '152f0dfe183c7dca423c9a87aade41b56ca04cb6', 'ridah1234', 1, NULL, NULL, NULL, NULL, -1, 0, '2018-08-14 05:52:42', '2018-08-14 13:23:57', 'gFpnKlMYtgNMRZ804NaoJyk48pqJBC3o32v0pXlCXdgtcANb13BujEC3UVfC'),
(47, NULL, 'Zied ', 'Zied', 'zied@gmail.com', 'Employer', 1, 'a25d487f1b062227dfaa338499f77e3cf481fb83', 'zied1234', 1, NULL, NULL, NULL, NULL, -1, 0, '2018-08-14 05:54:04', '2018-08-14 13:23:38', 'kkJqSw3XgUwpo3sHfLGqFsMYALLXKgL54OoySLn7TvtphmI5XbVlTiHnaZah'),
(49, NULL, 'Tarek', 'Tarek', 'tarek@gmail.com', 'Employer', 1, 'ff05600c32b51364a34faa509879f45d53fe0273', 'tarek1234', 1, NULL, NULL, NULL, NULL, -1, 0, '2018-08-14 05:55:36', '2018-08-14 05:55:36', 'MOzKARjxrBLjoqEmM1d2ctZMb4nAKxaK2GeCXtlyZDMX8qDBxo6sUt73bk4Z'),
(51, NULL, 'Dalig', 'Dalig', 'dali@gmail.com', 'Employer', 1, '630f9fb15f72b0cc5bd6b215253b5530e824ac76', 'dali1234', 1, NULL, NULL, NULL, NULL, -1, 0, '2018-08-14 05:57:54', '2018-08-14 05:57:54', 'WTk0Cje3EcOxzSoZNY5RVDIryzOTt37OMwPmGBV5KJuzK3VSMXHkxSlOiG0Q'),
(52, NULL, 'user user', 'usertestA', 'usertestA@user.com', 'Employer', 1, 'd7316a3074d562269cf4302e4eed46369b523687', 'user1234', 1, NULL, NULL, NULL, NULL, -1, 0, '2019-01-17 12:35:21', '2019-01-17 12:36:30', 'I2JhPUcqc3J3DcDkR7yWRQXE1Jh5zLOc9sW9UiNwftkJoRbHacbdC8jMbMoT'),
(73, 'marwamganem', 'marwa ', 'marwamganem', 'marwa.m@gmail.com', 'Employer', -1, 'f68b26ab6e4d758b94ebf5d0f0514e4e08849856', 'mganemmarwa', 1, '10.1131977', '36.8027059', NULL, NULL, 299, 0, '1999-12-31 22:00:00', '2018-10-30 22:00:00', 'R06JvspPwMKhPbUqPSxT0SdSroz1kRlbeTVxoLCFb0dW0WDVd27p2X3pdctX'),
(75, 'code amira', 'Amira ', 'Amira', 'amira@gmail.com', 'Employer', -1, 'bfb66bcd5928d97b9d66218c6e8c6085deccd0b8', 'amira@2018', 1, '10.1766759', '36.8903116', NULL, NULL, 282, 0, '1999-12-31 22:00:00', '2018-07-30 21:00:00', '745EsSfYXe6kK4sY8LrNePy2k4RfqxIdTs7JaMzdJ6E7y0clz6oEtbMkHSul'),
(82, '', 'Rim ', 'Rim', 'adem11adouma@gmail.com', 'Employer', -1, '43350c939c3ac7e28330455477a3367040760a87', 'benhamed321', 1, '10.183769', '36.8663397', NULL, NULL, 282, 0, '1999-12-31 22:00:00', '2018-07-30 21:00:00', 'iHo4UzUhcSDFsWdi6B9hF1n8rLoWirLQh0DZ2iizkrfblkns0WDR7nJWln2A'),
(85, '001', 'Najla ', 'najlas', 'Najla.s@gmail.com', 'Employer', -1, 'fdf896e486a37bad9f932169b3f201430a1b8080', 'sordi@200', 1, '10.2402139', '36.7680156', NULL, NULL, 848, 0, '1999-12-31 22:00:00', '2018-07-30 21:00:00', 'TeFOe2QcrcH5akQaGm9yjHHGt8Q8TzBF1repS4cbHxTHgRzV2Hl6XqQEclI1'),
(87, '', 'Marwa ', 'Marwa', 'marwa@gmail.com', 'Employer', -1, '254c5915f59b99068d00e91110636e411a7421a8', 'marwamarwa', 1, '10.1229777', '36.8047305', NULL, NULL, 122, 0, '1999-12-31 22:00:00', '2018-08-10 21:00:00', 'B4TcBvmCNMaYUh3UgP0YVRU550jGO5QVuNfcTIjVAqgC075tyVwes4xpMWsD'),
(99, 'rabebcap123', 'Rabeb B', 'rabeb', 'borabeb@gmail.com', 'Employer', -1, 'f697acbf29e7024a3dc8c7a2a97f0ad03a53adc6', 'rabeb123', 0, '', '', NULL, NULL, -1, 0, '1999-12-31 22:00:00', '2022-11-28 22:25:39', '4UcFIxXkqky7dOipr6LCkSY3zxyo68PE4Bf9M6X59SC0KXVzpaWJ1cqJPLNX'),
(111, NULL, 'RAFIKK', 'rfk', 'rafiiik.lansari.dev@gmail.com', 'Employer', -1, 'ec3869ff57d20bcc9872a69866a15c75ccb2c175', 'admin77', 0, NULL, NULL, NULL, 'har.jpg', -1, 0, '2022-12-19 23:45:59', '2022-12-24 20:57:27', NULL),
(112, NULL, 'rihem', 'ay', 'rihem@gmail.com', 'Employer', -1, '7c4a8d09ca3762af61e59520943dc26494f8941b', '123456', 1, NULL, NULL, NULL, 'bank.jpg', -1, 0, '2022-12-24 20:58:41', '2022-12-24 20:58:41', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
