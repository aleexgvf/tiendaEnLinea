-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-07-2017 a las 23:40:32
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `color` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `extract` varchar(300) NOT NULL,
  `price` decimal(12,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `visible` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `description`, `extract`, `price`, `image`, `visible`, `created_at`, `updated_at`) VALUES
(1, 1, 'One Piece Tomo 1', 'one-piece-1', 'One Piece (????? Wan P?su?) es un manga creado por Eiichiro Oda. Comenzó a publicarse en la revista japonesa Weekly Sh?nen Jump en julio de 1997; Shueisha publica los capítulos en volúmenes: el primero publicado el 24 de diciembre de 1997 y el tomo 85 publicado el 2 de mayo de 2017', 'One Piece (????? Wan P?su?) es un manga creado por Eiichiro Oda.', '79.00', 'http://4.bp.blogspot.com/-buptqfRsbX8/Ui3RkCCwAZI/AAAAAAAAA28/KJ5HCrfG8f8/s1600/onepiece1.jpg', 1, '2017-07-18 22:44:42', '0000-00-00 00:00:00'),
(2, 1, 'Naruto tomo 1', 'naruto-tomo-1', 'es un manga escrito e ilustrado por Masashi Kishimoto y su adaptación al anime es dirigida por Hayato Date. La obra narra la historia de un ninja adolescente hiperactivo, posteriormente adulto llamado Naruto Uzumaki, quien aspira a convertirse en Hokage, con el propósito de ser reconocido como alguien importante dentro de su aldea y entre sus amigos.º', 'es un manga escrito e ilustrado por Masashi Kishimoto y su adaptación al anime es dirigida por Hayato Date.', '79.00', 'http://4.bp.blogspot.com/_FZLK7mVWirM/THTasCg9nuI/AAAAAAAAACY/T39ALUwKpcU/s1600/naruto_cover_01.jpg', 1, '2017-07-18 22:47:55', '0000-00-00 00:00:00'),
(3, 1, 'Bleach tomo 1', 'bleach-tomo-1', 'es una serie de manga y anime escrita e ilustrada por Tite Kubo y cuya adaptación al anime fue dirigida por Noriyuki Abe. La obra está basada en un one-shot que Kubo había realizado para la revista Sh?nen Jump después de cancelar la publicación de su primer manga, Zombie Powder. El capítulo primero fue difundido en Akamaru Jump,2? y posteriormente en Sh?nen Jump.3? La serie narra las aventuras de Ichigo Kurosaki, un adolescente que accidentalmente absorbe los poderes de una shinigami —personificación japonesa del Dios de la muerte— llamada Rukia Kuchiki.4? Una vez que Ichigo obtiene estas habilidades es obligado a orientar a las almas buenas después de la muerte y defenderlas de los hollows, espíritus malignos que tratan de devorarlas.', 'es una serie de manga y anime escrita e ilustrada por Tite Kubo.', '68.00', 'https://vignette2.wikia.nocookie.net/bleach/images/3/3a/Tomo_1.jpg/revision/latest?cb=20110412222331&path-prefix=es', 1, '2017-07-19 03:30:34', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('user','admin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'JUAN JOSE', 'chael35@hotmail.com', 'jor1231.', 'user', NULL, NULL, NULL),
(2, 'juanes', 'juan01@gmail.com', '$2y$10$DlWMbcWa1w6IYJh6ccP5EOt68eluhYtyJWjhAXhQ/v3j1FPauW2ly', 'user', 'ElYOKTzf5KpKxqQvWdNFq9mP0OONYpseC4BuLvmpVWxFyvIqdajbaMkhR7zL', '2017-07-26 23:04:05', '2017-07-26 23:04:05'),
(3, 'michael lopez', 'chael35@hotmail.com', 'jor1231.', 'admin', NULL, NULL, NULL),
(4, 'michael', 'chael_35@hotmail.com', '$2y$10$IhE01t7tnaAM2Ef4GaxAMOvx8QN37mIRVGwoLtaRUdiPWEqsWoIMG', 'user', 'VlVzC3P9ry1j90MxkgDAEpiysUGi0nKl6F4XomwjehJyCcMxFGoImxvYTI7Z', '2017-07-26 23:28:28', '2017-07-26 23:28:28'),
(5, 'alejandro', 'alejandro@gmail.com', '$2y$10$FD.l1TWLl8lN.fpVW7zbuurdd1YpUGPe.ynnhFx2lUcSsSvkfVHDO', 'user', 'sN9Z2kKm5DVSt4O8V699PeuTK4ckWdz5GZYK1ftpGYkQhjEqK3D6TUbbSSUo', '2017-07-27 00:04:51', '2017-07-27 00:04:51');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
