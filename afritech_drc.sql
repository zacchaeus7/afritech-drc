-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 20 juin 2022 à 22:27
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `afritech_drc`
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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
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
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `cover`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Fuel purification', 'Africtech provides purification solutions that help maintain the quality of petroleum products. We \nare committed to supplementing your maintenance strategy with a continuous improvement of our \ntechnology, which is an integral part of the total quality management policy for your customers.\nThe Purifilt Clean tank device is indicated for cleaning fuel in biodiesel tanks, it purifies fuel with \nPURIFILT purifier technology in the required quality standards, referring to PURITIOUS diesel, \nwith separation up to 99, 9% of solids contamination down to 1 micron thanks to the exclusive and \npatented process of electrostatic recirculation purifier PURIFILT.\nAdvantages and Benefits: High solids retention capacity, down to 1 micron; High efficiency in \nthe separation of contaminating water in diesel, Protection against adulterated or poor quality fuel; \nSupport for the control of diesel contamination; Up to 50% reduction in vehicle maintenance costs \nUp to 83% reduction in solid pollutant emissions from vehicles Provides customers with significant \nfuel savings; User loyalty and satisfaction; Fuel compliant with standards: Petrobrás, ISO 4406, \nEURO V etc ..', '1.jpg', 0, '2022-03-22 07:44:42', NULL),
(2, 'Supply and repair of pumps', 'We supply and repair all types of industrial pumps, including:\n• Electric and solar submersible pumps\n• Industrial surface pumps\n• 150SV-SP and 250TV-SP vertical slurry pump, gravel pump, \ndredge pump and spare parts\n• Pumps for the petroleum industry and their accessories.\n• Submersible pumps of any size\n• Industrial valve', '2.jpg', 0, '2022-03-22 07:46:23', NULL),
(3, 'Calibration of Meters And Tanks of service', 'A correct tank volume graph is a key point for oil inventory analysis, which is \nvery important in the management of the oil industry.\nThe volume measuring instrument (high flow distributor) will measure the \nvolume of petroleum product discharged from / or into the tank. The probe will \nindicate the level of product in the tank. Each product level corresponds to a \ncertain volume. Product volume and level data is collected by computer in real \ntime, with an intelligent data processing model; automatically creating a tank \nvolume graph', '3.jpg', 0, '2022-03-22 07:46:59', NULL),
(4, 'Crimping Machine Services', 'Using a crimper to join two pieces of metal fitting \nwith rigid and flexible sections of pipe and tubing \nby deforming one or both to hold and BOND', '4.jpg', 0, '2022-03-22 07:48:00', '2022-03-22 23:37:15'),
(7, 'Mining Work', ' Evacuation of underground water from mines by pumping \nor bypass (dewatering work)\n• Supplier of industrial pumps and technical support\n• Mechanics and piping\n• Electricity & instrumentation\n• Factories & warehouses\n', '7.jpg', 0, '2022-03-22 07:46:59', NULL),
(8, 'Industrial And Domestic drilling', 'ATPC helps public companies, mining companies \nand private utility companies, through \nengineering, project management and \nconsultancy services, to ensure the management, \noperation, performance and effective integrity of \nwater supply and distribution systems. Our \nservices help these entities to provide consumers, \ncommunities and industrial sectors with potable \nand non-potable water', '8.jpg', 0, '2022-03-22 07:48:00', '2022-03-22 23:37:15'),
(9, 'Repair and maintenance of service', 'ATPC and its range of services have always been associated with quality service. The company offers a \nrange of repair and maintenance services in the industry. Our range of services includes repair of \nmultistage pumps, repair of basket strainers, repair of diesel engines, repair of valves, repair of vibration \ndampers, etc. Our repair and metallization services are offered with the level of customer satisfaction in \nmind. Our team of technicians have a good understanding of all kinds of pumps, motors and their \naccessories so that they are capable enough to identify and rectify their fault', '9.jpg', 0, '2022-03-22 07:46:59', NULL),
(10, 'Management Of Industrial And Domestic Waste', 'We help our customers to manage their industrial waste (used oil, scrap metal,\nelectronic waste, batteries and cables, etc.) and domestic waste on site by reduction, recycling and elimination.\nWe comply with all legislation and documentary requirements requested by\nVarious governments and make sure our customers receive certificates\nWaste disposal ensuring that we comply with environmental policies\nFrom our customers and the ministries concerned.\n', '10.jpg', 0, '2022-03-22 07:48:00', '2022-03-22 23:37:15'),
(11, 'Civil Engeneers and Construction Work', 'If you want to carry out your construction project, we support you throughout the \nprocess. We can take care of design and planning, regulatory approvals, risk \nassessment and mitigation, procurement and budget control, construction and \nrefurbishment.\nWe leverage our core competencies and expertise to carry out civil engineering, \ninfrastructure and construction projects in the Democratic Republic of Congo.\nOur construction services include:\n• Infrastructure development\n• Road construction\n• Pipeline construction\n• Mining rehabilitation\n• Construction of bridges\n• Concrete work\n• complete installation of service stations\n• The construction of buildings (forecourt building, concrete, asphalt or \ncobblestones; station office, store and other types of buildings) and housing\n• Construction and modernization of fuel storage depots\n• Steel fabrication and installation of forecourt awnings and unloading gantries\n', '11.jpg', 0, '2022-03-22 07:48:00', '2022-03-22 23:37:15'),
(12, 'Sale And Installation Of Solar Equipment', '• Autonomous solar kit\n• Solar regulator\n•Solar panel\n• solar battery\n• voltage converte', '12.jpg', 0, '2022-03-22 07:48:00', '2022-03-22 23:37:15');

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
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sub_service`
--

INSERT INTO `sub_service` (`id`, `title`, `description`, `cover`, `service_id`, `created_at`, `updated_at`, `is_deleted`) VALUES
(1, 'pumpes submersibles electrique et solaire', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1648203541.jpg', 4, '2022-03-25 08:19:01', '2022-03-25 06:00:28', 0),
(2, 'Pompe de surface industrielle', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1648217524.jpg', 4, '2022-03-25 00:12:04', NULL, 0),
(3, 'Dab', 'lorem', '1652121683.png', 1, '2022-05-09 04:41:23', NULL, 0),
(4, 'Elephant', 'lorem', '1652121721.png', 1, '2022-05-09 04:42:01', NULL, 0),
(5, 'Exoil', 'lorem', '1652121742.png', 4, '2022-05-09 04:42:22', NULL, 0),
(6, 'Flygt', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1652121778.png', 1, '2022-05-09 04:42:58', NULL, 0),
(7, 'Franklin Electric', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1652121833.png', 1, '2022-05-09 04:43:53', NULL, 0),
(8, 'Godwin', 'lorem', '1652121861.png', 1, '2022-05-09 04:44:21', NULL, 0),
(9, 'Met Tool', 'lorem', '1652121900.png', 1, '2022-05-09 04:45:00', NULL, 0),
(10, 'Metso', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1652121939.png', 1, '2022-05-09 04:45:39', NULL, 0),
(11, 'Selwood', 'lorem', '1652121971.png', 1, '2022-05-09 04:46:11', NULL, 0),
(12, 'exoil', 'lorem', '1652123210.png', 1, '2022-05-09 05:06:50', NULL, 0);

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
-- Index pour la table `partners`
--
ALTER TABLE `partners`
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
-- Index pour la table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_service_id_foreign` (`service_id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sub_service`
--
ALTER TABLE `sub_service`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_service_service_id_foreign` (`service_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `sub_service`
--
ALTER TABLE `sub_service`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `sub_service`
--
ALTER TABLE `sub_service`
  ADD CONSTRAINT `sub_service_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
