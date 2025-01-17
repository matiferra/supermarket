-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-04-2021 a las 21:57:39
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `api_supermercado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio` double UNSIGNED NOT NULL,
  `id_marca` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `nombre`, `descripcion`, `precio`, `id_marca`, `created_at`, `updated_at`) VALUES
(1, 'Arroz Cormillot Integral 1 Kg.', NULL, 89.99, 1, '2021-04-09 20:59:05', '2021-04-09 20:59:05'),
(3, 'Arroz Largo Fino 1 Kg', NULL, 143.99, 2, '2021-04-09 21:02:17', '2021-04-09 21:02:17'),
(4, 'Aceite de Girasol 900 Ml.', NULL, 117.99, 4, '2021-04-09 21:04:37', '2021-04-09 21:04:37'),
(5, 'Aceite de Oliva 500 Ml.', NULL, 315, 3, '2021-04-09 21:05:47', '2021-04-09 21:09:02'),
(6, 'Fideos Mostachol 500 Gr.', NULL, 54.3, 5, '2021-04-09 21:06:53', '2021-04-09 21:06:53'),
(7, 'Fideos al Huevo Tallarín 500 Gr.', NULL, 125, 6, '2021-04-09 21:07:46', '2021-04-09 21:07:46'),
(8, 'Harina Leudante 1 Kg.', NULL, 69.99, 8, '2021-04-09 21:08:36', '2021-04-09 21:08:36'),
(9, 'Harina 0000 1 Kg.', NULL, 72.99, 7, '2021-04-09 21:09:52', '2021-04-09 21:09:52'),
(10, 'Agua de Mesa Sin Gas 2,25 Lts', NULL, 39, 9, '2021-04-09 21:16:19', '2021-04-09 21:16:19'),
(11, 'Gaseosa Sabor Original 2 Lts.', NULL, 110.19, 10, '2021-04-09 21:18:12', '2021-04-09 21:18:12'),
(12, 'Vino Malbec 750 M', NULL, 350, 11, '2021-04-09 21:19:21', '2021-04-09 21:19:21'),
(13, 'Cerveza Cristal Retornables 340 ml.', NULL, 40, 12, '2021-04-09 21:20:59', '2021-04-09 21:20:59'),
(14, 'Cerveza Lata 473 ml.', NULL, 84.99, 13, '2021-04-09 21:22:11', '2021-04-09 21:22:11'),
(15, 'Yogur Entero con Cereales 165 Gr.', NULL, 45, 14, '2021-04-09 21:24:02', '2021-04-09 21:24:02'),
(16, 'Yogur Entero con Frutos del Bosque 150 Gr.', NULL, 42.36, 15, '2021-04-09 21:24:53', '2021-04-09 21:24:53'),
(17, 'Leche Entera Clasica Sachet 1 Lt.', NULL, 74.49, 16, '2021-04-09 21:26:01', '2021-04-09 21:26:01'),
(18, 'Flan Casero Vainilla 240 Gr.', NULL, 88.5, 17, '2021-04-09 21:26:39', '2021-04-09 21:26:39'),
(19, 'Postre Dulce de Leche 95 Gr.', NULL, 58.5, 18, '2021-04-09 21:27:15', '2021-04-09 21:27:15'),
(20, 'Manteca Vit E 200 GR', NULL, 127, 19, '2021-04-09 21:27:53', '2021-04-09 21:28:22'),
(21, 'Manteca 100 Gr.', NULL, 78.75, 16, '2021-04-09 21:28:57', '2021-04-09 21:28:57'),
(22, 'Cepillo Dental Doctor Medi 2x1 Ud.', NULL, 97, 20, '2021-04-09 21:29:42', '2021-04-09 21:29:42'),
(23, 'Shampoo Regeneración Extrema 750 Ml.', NULL, 359, 21, '2021-04-09 21:30:34', '2021-04-09 21:30:34'),
(24, 'Shampoo Pro-V Restauración 400 Ml.', NULL, 285.88, 22, '2021-04-09 21:31:26', '2021-04-09 21:31:26'),
(25, 'Maquina de Afeitar 2 Filos Descartable 10 Ud.', NULL, 141.99, 23, '2021-04-09 21:32:40', '2021-04-09 21:32:40'),
(26, 'Desodorante Apollo 150 Ml.', NULL, 149, 24, '2021-04-09 21:33:16', '2021-04-09 21:33:16'),
(27, 'Jabón de Tocador Multipack 3x90 Gr.', NULL, 164, 21, '2021-04-09 21:34:00', '2021-04-09 21:34:00'),
(28, 'Lavandina Común 1 Lt.', NULL, 68.3, 25, '2021-04-09 21:34:31', '2021-04-09 21:34:31'),
(29, 'Lavandina Antisplash 1 Lt.', NULL, 65, 26, '2021-04-09 21:35:14', '2021-04-09 21:35:14'),
(30, 'Detergente Lavavajilla Ultra Desengrase Limón 500 Ml.', NULL, 99, 27, '2021-04-09 21:36:03', '2021-04-09 21:36:03'),
(31, 'Papel Higiénico Soft 4 rollos 60 Mts.', NULL, 179, 28, '2021-04-09 21:36:44', '2021-04-09 21:36:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'ALMACEN', '2021-04-09 20:17:07', '2021-04-09 20:17:07'),
(2, 'BEBIDAS', '2021-04-09 20:18:02', '2021-04-09 20:18:02'),
(3, 'FRESCOS', '2021-04-09 20:18:10', '2021-04-09 20:18:10'),
(4, 'PERFUMERIA', '2021-04-09 20:18:18', '2021-04-09 20:18:18'),
(5, 'LIMPIEZA', '2021-04-09 20:18:24', '2021-04-09 20:18:24');

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
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_categoria` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `nombre`, `id_categoria`, `created_at`, `updated_at`) VALUES
(1, 'Molinos Ala', 1, '2021-04-09 20:29:17', '2021-04-09 20:29:17'),
(2, 'Gallo', 1, '2021-04-09 20:29:25', '2021-04-09 20:29:25'),
(3, 'Cocinero', 1, '2021-04-09 20:29:33', '2021-04-09 20:29:33'),
(4, 'Cañuelas', 1, '2021-04-09 20:29:47', '2021-04-09 20:30:21'),
(5, 'Lucchetti', 1, '2021-04-09 20:30:05', '2021-04-09 20:30:05'),
(6, 'Don Vicente', 1, '2021-04-09 20:30:14', '2021-04-09 20:30:28'),
(7, 'Blanca Flor', 1, '2021-04-09 20:30:39', '2021-04-09 20:30:39'),
(8, 'Pureza', 1, '2021-04-09 20:30:48', '2021-04-09 20:30:48'),
(9, 'KIN', 2, '2021-04-09 20:30:59', '2021-04-09 20:30:59'),
(10, 'Coca-Cola', 2, '2021-04-09 20:31:13', '2021-04-09 21:23:09'),
(11, 'Latitud 33', 2, '2021-04-09 20:31:26', '2021-04-09 20:31:26'),
(12, 'Quilmes', 2, '2021-04-09 20:31:33', '2021-04-15 20:09:42'),
(13, 'Brahma', 2, '2021-04-09 20:31:42', '2021-04-09 21:22:47'),
(14, 'Ilolay', 3, '2021-04-09 20:41:43', '2021-04-09 20:41:43'),
(15, 'Manfrey', 3, '2021-04-09 20:42:00', '2021-04-09 20:42:13'),
(16, 'La Serenisima', 3, '2021-04-09 20:42:27', '2021-04-09 20:42:27'),
(17, 'Sancor', 3, '2021-04-09 20:42:36', '2021-04-09 20:42:36'),
(18, 'Danette', 3, '2021-04-09 20:42:51', '2021-04-09 20:42:51'),
(19, 'Tonadita', 3, '2021-04-09 20:43:02', '2021-04-09 20:43:02'),
(20, 'Kolynos', 4, '2021-04-09 20:43:26', '2021-04-09 20:43:26'),
(21, 'Dove', 4, '2021-04-09 20:43:36', '2021-04-09 20:43:36'),
(22, 'Pantene', 4, '2021-04-09 20:43:50', '2021-04-09 20:43:50'),
(23, 'Bonte', 4, '2021-04-09 20:44:11', '2021-04-09 20:44:11'),
(24, 'Axe', 4, '2021-04-09 20:44:26', '2021-04-09 20:44:26'),
(25, 'Odex', 5, '2021-04-09 20:45:01', '2021-04-09 20:45:01'),
(26, 'Ayudin', 5, '2021-04-09 20:45:15', '2021-04-09 20:45:15'),
(27, 'Ala', 5, '2021-04-09 20:45:22', '2021-04-09 20:45:22'),
(28, 'Campanita', 5, '2021-04-09 20:45:31', '2021-04-09 20:45:31');

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
(4, '2021_03_24_111311_create_categorias_table', 1),
(5, '2021_03_24_111358_create_marcas_table', 1),
(6, '2021_03_24_111412_create_articulos_table', 1);

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
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articulos_id_marca_foreign` (`id_marca`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `marcas_id_categoria_foreign` (`id_categoria`);

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
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD CONSTRAINT `articulos_id_marca_foreign` FOREIGN KEY (`id_marca`) REFERENCES `marcas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD CONSTRAINT `marcas_id_categoria_foreign` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
