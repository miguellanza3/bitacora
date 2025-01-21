-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-01-2025 a las 07:25:23
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
-- Base de datos: `bitacora_mantenimiento`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `tipo_incidencia_id` int(11) DEFAULT NULL,
  `descripcion` text NOT NULL,
  `fecha_actual` timestamp NOT NULL DEFAULT current_timestamp(),
  `departamento_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`id`, `usuario_id`, `tipo_incidencia_id`, `descripcion`, `fecha_actual`, `departamento_id`) VALUES
(1, 1, 1, 'La maquina de daniel coello no enciende', '2024-10-01 05:09:47', 10),
(18, 2, 2, 'El equipo no enciende', '2024-10-01 06:35:36', 1),
(21, 1, 2, 'Julio se llevo una nueva SD', '2024-10-01 07:02:23', 1),
(22, 1, 2, 'Julio se llevo una nueva SD', '2024-10-01 07:02:27', 1),
(23, 3, 3, 'Se quedo sin internet ethel', '2024-10-01 07:26:39', 5),
(24, 5, 2, 'Se fueron todas al desfile', '2024-10-01 07:34:59', 11),
(25, 5, 2, 'Ya regresaron todas las cámaras aproximadamente a las 7 de la noche', '2024-10-01 07:40:15', 11),
(26, 1, 1, 'Se arruino el adobe premiere de la maquina de edición de digital', '2024-10-08 07:08:46', 5),
(29, 1, 2, 'Se reparó una maquina a daniel coello, ya tiene sistema operativo, programas y activación, solo falta monitor, mouse, teclado', '2024-10-08 08:17:10', 10),
(30, 1, 1, 'Wordpress dejo de funcionar', '2025-01-07 02:03:12', 5),
(31, 1, 1, '10 01 2025', '2025-01-10 06:54:38', 2),
(32, 1, 1, '10 01 25', '2025-01-10 06:58:21', 1),
(33, 1, 1, '10', '2025-01-10 07:01:08', 1),
(34, 1, 1, '10', '2025-01-10 07:02:32', 3),
(35, 2, 1, '10', '2025-01-10 07:03:21', 4),
(36, 3, 4, 'no sirven las camaras ', '2025-01-10 07:08:55', 11),
(37, 5, 1, 'case malo', '2025-01-11 03:46:22', 6),
(38, 3, 1, 'no hay internet en sala de juntas', '2025-01-12 23:55:53', 3),
(39, 2, 2, 'Fuente de poder dejo de funcionar', '2025-01-12 23:59:19', 7),
(40, 4, 4, 'Se le presto una memoria a Adonay Portillo', '2025-01-12 23:59:50', 11),
(41, 1, 2, 'Se arruino la maquina de Ingesta del departamento de Edición', '2025-01-17 05:53:11', 7),
(42, 3, 4, 'No hay memorias disponibles', '2025-01-18 03:33:09', 11),
(43, 1, 1, 'Adobe premiere se quedo sin licencia', '2025-01-18 03:34:50', 7),
(44, 4, 3, 'Deprtamento de digital se quedo sin internet', '2025-01-18 03:37:07', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id` int(11) NOT NULL,
  `departamento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `departamento`) VALUES
(1, 'Sistemas'),
(2, 'RRHH Planificación'),
(3, 'RRHH Presidencial'),
(4, 'Prensa'),
(5, 'Digital'),
(6, 'Producción'),
(7, 'Edición'),
(8, 'Administración / servicios gen'),
(9, 'Lenguaje de Señas'),
(10, 'Deportes'),
(11, 'Dirección de Cámaras');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_incidencia`
--

CREATE TABLE `tipos_incidencia` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipos_incidencia`
--

INSERT INTO `tipos_incidencia` (`id`, `tipo`) VALUES
(1, 'Software'),
(2, 'Hardware'),
(3, 'LAN / WIFI'),
(4, 'Cámaras');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_usuario`) VALUES
(1, 'Miguel Lanza'),
(2, 'Randy Ortiz'),
(3, 'Fernando Andrade'),
(4, 'Adriel Manzano'),
(5, 'Juan Chévez');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `tipo_incidencia_id` (`tipo_incidencia_id`),
  ADD KEY `departamento_id` (`departamento_id`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipos_incidencia`
--
ALTER TABLE `tipos_incidencia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tipos_incidencia`
--
ALTER TABLE `tipos_incidencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD CONSTRAINT `bitacora_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `bitacora_ibfk_2` FOREIGN KEY (`tipo_incidencia_id`) REFERENCES `tipos_incidencia` (`id`),
  ADD CONSTRAINT `bitacora_ibfk_3` FOREIGN KEY (`departamento_id`) REFERENCES `departamentos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
