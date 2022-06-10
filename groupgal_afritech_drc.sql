-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 10 juin 2022 à 07:17
-- Version du serveur :  5.6.41-84.1
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `groupgal_afritech_drc`
--

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
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
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(8, '2022_03_21_140316_create_services_table', 2),
(9, '2022_03_21_211911_create_partners_table', 2),
(10, '2022_03_21_212018_create_projects_table', 2),
(11, '2022_03_24_141903_create_sub_service_table', 3);

-- --------------------------------------------------------

--
-- Structure de la table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `partners`
--

INSERT INTO `partners` (`id`, `title`, `cover`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'art', '1648045656.jpg', 0, '2022-03-23 00:27:36', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `cover`, `service_id`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Projet numero un', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1648019890.png', 3, 0, '2022-03-23 05:18:10', NULL),
(2, 'Projet numero deux', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1648114591.jpg', 2, 0, '2022-03-24 07:36:31', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `cover`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Supply and repair of pumps', 'ATPC and its range of services have always been associated with quality service. The company offers a range of repair and maintenance services in the industry. Our range of services includes repair of multistage pumps, repair of basket strainers, repair of diesel engines, repair of valves, repair of vibration dampers, etc. Our repair and metallization services are offered with the level of customer satisfaction in mind. Our team of technicians have a good understanding of all kinds of pumps, motors and their accessories so that they are capable enough to identify and rectify their fault', '1648460289.jpg', 0, '2022-03-22 07:44:42', '2022-03-28 14:38:09'),
(2, 'Industrial And Domestic drilling', 'ATPC helps public companies, mining companies and private utility companies, through engineering, project management and consultancy services, to ensure the management, operation, performance and effective integrity of water supply and distribution systems. Our services help these entities to provide consumers, communities and industrial sectors with potable and non-potable water', '1648460729.jpg', 0, '2022-03-22 07:46:23', '2022-03-28 14:45:29'),
(3, 'Repair and maintenance of service', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1648460411.jpg', 0, '2022-03-22 07:46:59', '2022-03-28 14:40:11'),
(4, 'Civil Engeneers and Construction Work', 'If you want to carry out your construction project, we support you throughout the process. We can take care of design and planning, regulatory approvals, risk assessment and mitigation, procurement and budget control, construction and refurbishment. We leverage our core competencies and expertise to carry out civil engineering, infrastructure and construction projects in the Democratic Republic of Congo.', '1648460435.jpg', 0, '2022-03-22 07:48:00', '2022-03-28 14:40:35'),
(5, 'Mining Work', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1648461768.jpg', 0, '2022-03-28 15:02:48', NULL),
(6, 'Calibration of Meters And Tanks', 'A correct tank volume graph is a key point for oil inventory analysis, which is very important in the management of the oil industry. The volume measuring instrument (high flow distributor) will measure the volume of petroleum product discharged from / or into the tank. The probe will indicate the level of product in the tank. Each product level corresponds to a certain volume. Product volume and level data is collected by computer in real time, with an intelligent data processing model; automatically creating a tank volume graph.', '1648461949.jpg', 0, '2022-03-28 15:05:49', NULL),
(8, 'Fuel Purification', 'Africtech provides purification solutions that help maintain the quality of petroleum products. We are committed to supplementing your maintenance strategy with a continuous improvement of our technology, which is an integral part of the total quality management policy for your customers. The Purifilt Clean tank device is indicated for cleaning fuel in biodiesel tanks, it purifies fuel with PURIFILT purifier technology in the required quality standards, referring to PURITIOUS diesel, with separation up to 99, 9% of solids contamination down to 1 micron thanks to the exclusive and patented process of electrostatic recirculation purifier PURIFILT. Advantages and Benefits: High solids retention capacity, down to 1 micron; High efficiency in the separation of contaminating water in diesel, Protection against adulterated or poor quality fuel; Support for the control of diesel contamination; Up to 50% reduction in vehicle maintenance costs Up to 83% reduction in solid pollutant emissions from vehicles Provides customers with significant fuel savings; User loyalty and satisfaction; Fuel compliant with standards: Petrobrás, ISO 4406, EURO V etc ...', '1648462143.jpg', 0, '2022-03-28 15:09:03', NULL),
(9, 'Sale And Installation Of Solar Equipment', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1648462197.jpg', 0, '2022-03-28 15:09:57', NULL),
(10, 'Crimping Machine Services', 'Using a crimper to join two pieces of metal fitting with rigid and flexible sections of pipe and tubing by deforming one or both to hold and BOND.', '1648462252.jpg', 0, '2022-03-28 15:10:52', NULL),
(11, 'Management Of Industrial And Domestic Waste', 'We help our customers to manage their industrial waste (used oil, scrap metal, electronic waste, batteries and cables, etc.) and domestic waste on site by reduction, recycling and elimination. We comply with all legislation and documentary requirements requested by Various governments and make sure our customers receive certificates Waste disposal ensuring that we comply with environmental policies From our customers and the ministries concerned.', '1648626429.jpg', 0, '2022-03-28 15:11:48', '2022-03-30 12:47:09');

-- --------------------------------------------------------

--
-- Structure de la table `sub_service`
--

CREATE TABLE `sub_service` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sub_service`
--

INSERT INTO `sub_service` (`id`, `title`, `description`, `cover`, `service_id`, `created_at`, `updated_at`, `is_deleted`) VALUES
(1, 'pumpes submersibles electrique et solaire', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1648203541.jpg', 4, '2022-03-25 08:19:01', '2022-03-25 06:00:28', 1),
(2, 'Pompe de surface industrielle', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1648217524.jpg', 4, '2022-03-25 00:12:04', NULL, 1),
(3, 'Dab', 'type de pompe', '1652341853.png', 1, '2022-05-12 12:50:53', NULL, 0),
(4, 'Elephant', 'type de pompe', '1652341888.png', 1, '2022-05-12 12:51:28', NULL, 0),
(5, 'Flyth', 'type de pompe', '1652341993.png', 1, '2022-05-12 12:53:13', NULL, 0),
(6, 'Franklin Electric', 'type de pompe', '1652342024.png', 1, '2022-05-12 12:53:44', NULL, 0),
(7, 'Godwin', 'type de pompe', '1652342042.png', 1, '2022-05-12 12:54:02', NULL, 0),
(8, 'Selwood', 'type de pompe', '1652342226.png', 1, '2022-05-12 12:57:06', NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
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
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'zacchaeus', 'zackabemba4@gmail.com', NULL, '$2y$10$ZYgmMSBsld/r83DlaWhQMuYRXiRHfFYqpo/ZCNeGsl8fDtVrjQBoe', NULL, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sub_service`
--
ALTER TABLE `sub_service`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `sub_service`
--
ALTER TABLE `sub_service`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
