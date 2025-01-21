-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-01-2025 a las 07:24:02
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login_sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`) VALUES
(1, 'mlanza', '12345'),
(2, 'milei', '$2y$10$P3lNQBKZqpxH0l4Qkl3BPu1F4aCZgL9NTB8TX8ppk0Of7fmdXHJbW'),
(3, 'messi', '$2y$10$NO/VUUE6A56muqZSA4N6oe0A9HuF.VahuU61muuNHyH7a8QZqM0EG'),
(4, 'cr7', '$2y$10$1qZ2jnritrM0kHktyLkHZe1jfucpUlDggagydlPTdGL1f.25D6Nd2'),
(5, 'cr7', '$2y$10$cZ/3on3YWEf1feHHuONYpuk7RjZ4PHdeoHd0DxyBMzljhWtb65XWy'),
(6, 'jordi', '$2y$10$cAHEhtfcVj5KuDOIuW9QA.tlj.9sxUrobqhIbwxRxqnAtkYcgF6Vy'),
(7, 'noria', '$2y$10$5MfGYzoLLWzxHxh4USq32O/Qxoqpkg55IZLswZnnKyTzEdEI5pD2i'),
(8, 'gilmore', '$2y$10$xGi7ml6bQ5JMW0owmZssju9rlkInM6YSRj/BQjfENQ4vKyUCOzodS'),
(9, 'villaruel', '$2y$10$SeNddHyQRhsKg1jKDT5WIeHuHZ4/VQgxIvr79aUznPd9DS1TsJ5a.'),
(10, 'villaruel', '$2y$10$OxCtkfB.xBCiit9gY/TvL.fwJ0m31NWLx5ImmPnCaIq.t3sGyYyde'),
(11, 'cr7', '$2y$10$jquLAgDoqDyoqpOyDk3VnONsNEfd9GLGY7FNObEndri7VRWUNpZMi'),
(12, 'cr7', '$2y$10$3uvbnWWIu/akwxzHAY2D1uYCB.TmPMveC9ONuErNmZfEQpOnB6jm6'),
(13, 'cr7', '$2y$10$wV7WZ1EqfQEQVLol1vX5huAIlE/Gnob650nfgSCLR2UIT/mKb2kku'),
(14, 'nopler', '$2y$10$UoaykHIa5XhP6WScsz8Ah.4jbRsZYDIlonGY/6C1PqXWKS4DhzaG2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
