-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-09-2021 a las 17:01:48
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `beacon_listener`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `calle_numero` varchar(255) NOT NULL,
  `colonia_estado` varchar(255) NOT NULL,
  `codigo_postal` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `address`
--

INSERT INTO `address` (`id`, `user_id`, `calle_numero`, `colonia_estado`, `codigo_postal`, `created_at`) VALUES
(1, 1, 'Arandano 554', 'La Calma Guadalajara, Jalisco', '45677', '2021-08-26 20:31:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beacon_ticket`
--

CREATE TABLE `beacon_ticket` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ticket` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `uuid` varchar(255) NOT NULL DEFAULT 'Sin Asignar',
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `beacon_ticket`
--

INSERT INTO `beacon_ticket` (`id`, `user_id`, `ticket`, `status`, `uuid`, `timestamp`) VALUES
(1, 1, 's3534f55gfc778', 0, 'fda50693-a4e2-4fb1-afcf-c6eb07647826', '2021-08-23 21:27:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas_disponibles`
--

CREATE TABLE `citas_disponibles` (
  `id` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `hora` varchar(255) NOT NULL,
  `fecha_cita` date NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `citas_disponibles`
--

INSERT INTO `citas_disponibles` (`id`, `id_empresa`, `hora`, `fecha_cita`, `status`, `user_id`, `created_at`) VALUES
(1, 1, '9:00AM', '2021-08-31', 0, 1, '2021-08-27 17:53:21'),
(2, 1, '10:00AM', '2021-08-27', 3, 1, '2021-08-27 17:53:48'),
(3, 1, '11:00AM', '2021-08-27', 1, 1, '2021-08-27 17:54:58'),
(4, 1, '12:00PM', '2021-08-27', 0, 1, '2021-08-27 17:54:58'),
(5, 1, '13:00PM', '2021-08-31', 1, 0, '2021-08-27 17:56:26'),
(6, 1, '14:00PM', '2021-08-27', 1, 1, '2021-08-27 17:56:26'),
(7, 1, '12:00PM', '2021-08-17', 0, 1, '2021-08-30 13:34:16'),
(8, 1, '12:00PM', '2021-08-31', 3, 1, '2021-08-31 15:05:23'),
(9, 1, '15:00PM', '2021-08-31', 0, 1, '2021-08-31 15:05:23'),
(10, 1, '20:00PM', '2021-09-30', 1, 0, '2021-08-31 15:38:57'),
(11, 1, '18:00PM', '2021-09-21', 1, 0, '2021-08-31 15:38:57'),
(12, 2, '15:30PM', '2021-10-19', 1, 0, '2021-09-01 16:50:45'),
(13, 2, '18:00PM', '2021-10-26', 1, 0, '2021-09-01 16:50:45'),
(14, 1, '10:30AM', '2021-09-16', 1, 1, '2021-09-01 20:50:27'),
(15, 1, '2:30PM', '2021-09-01', 1, 1, '2021-09-01 20:50:27'),
(16, 1, '2:00AM', '2021-09-23', 1, 0, '2021-09-01 20:51:21'),
(17, 1, '13:00PM', '2021-09-25', 1, 0, '2021-09-01 20:51:21'),
(18, 1, '14:30', '2021-09-30', 1, 0, '2021-09-02 14:21:13'),
(19, 1, '16:00', '2021-09-16', 1, 1, '2021-09-02 15:52:37'),
(20, 1, '20:30', '2021-09-16', 1, 1, '2021-09-02 16:05:12'),
(21, 3, '15:30', '2021-09-15', 0, 1, '2021-09-02 17:10:54'),
(22, 3, '14:00', '2021-09-15', 1, 1, '2021-09-02 17:12:38'),
(23, 3, '18:00', '2021-09-18', 1, 0, '2021-09-02 17:12:53'),
(24, 3, '14:50', '2021-09-28', 3, 1, '2021-09-02 17:13:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `nombre`, `categoria`, `created_at`) VALUES
(1, 'Cuantic Tattoo', 'Arte', '2021-08-31 17:12:00'),
(2, 'Bella Vista S.A de C.V.', 'Estetica', '2021-08-31 17:12:00'),
(3, 'Carmelita Masajes', 'Arte', '2021-09-02 17:03:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
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
-- Estructura de tabla para la tabla `users`
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
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Christian Tester Padilla', 'tester_padilla@gmail.com', NULL, '$2y$10$kq1bKHi.jMAScjJIHtYjP.Cm2uM4YYhG6.QTQsOtdeeUfLnNTOqXe', NULL, '2021-08-27 23:09:06', '2021-08-27 23:09:06'),
(2, 'Tester02 Master Tester', 'tester02@cds.com', NULL, '$2y$10$0KJZTeLv.4WoR6MdiWDVYebS5QKVLuaMLtnw9595W05tAdkb9vflG', NULL, '2021-09-02 22:01:50', '2021-09-02 22:01:50'),
(3, 'Tester03 Master Tester', 'tester03@cds.com', NULL, '$2y$10$7jb1CjpT0aRIVUFvUhWM1.rwGaVATmCpXXzUJ.gg3tDVgvaYQorPu', NULL, '2021-09-02 22:03:23', '2021-09-02 22:03:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_api`
--

CREATE TABLE `users_api` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `numero_movil` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users_api`
--

INSERT INTO `users_api` (`id`, `nombre`, `mail`, `password`, `numero_movil`, `created_at`) VALUES
(1, 'tester android tester01', 'tester01@cds.com', '123456789abc', '3316987799', '2021-08-25 14:52:21'),
(2, 'Testing Android Register', 'testingregister@cds.com', '123456789abc', '3317524488', '2021-09-02 20:32:34'),
(3, 'test cds prueba', 'prueba@cds.com', '123456789abc', '3366998877', '2021-09-02 20:39:53');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `beacon_ticket`
--
ALTER TABLE `beacon_ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `citas_disponibles`
--
ALTER TABLE `citas_disponibles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `users_api`
--
ALTER TABLE `users_api`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `beacon_ticket`
--
ALTER TABLE `beacon_ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `citas_disponibles`
--
ALTER TABLE `citas_disponibles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users_api`
--
ALTER TABLE `users_api`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
