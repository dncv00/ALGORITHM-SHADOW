-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2024 a las 16:58:17
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `comentario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` varchar(20) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `comentario` varchar(350) NOT NULL,
  `fecha` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `usuario`, `comentario`, `fecha`) VALUES
('01', '12323', 'hola, me gusta mucho el servicio y la atención incluso la calidad es muy buena', '2024-10-01 16:08:50.000000'),
('02', '123456', 'Me encanta la pagina, amo leer estos comentarios', '2024-10-15 16:08:50.000000'),
('3CVNUpgNVP2simn8QmwV', '12323', 'aña', '2024-10-01 23:27:19.000000'),
('cdOX7YpPF41xG5nVt590', '14323', 'Adoro vuestra pagina me encanta por favor traigan mas contenido', '2024-10-01 23:29:23.000000'),
('CObb52Hl47bAD8nO9Wpe', '14323', 'hola', '2024-10-01 23:36:10.000000'),
('G7enU44S5mryvT2rqv4H', '14323', 'hola', '2024-10-01 23:29:43.000000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `identificacion` varchar(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `contrasena` varchar(10) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`identificacion`, `nombre`, `apellido`, `contrasena`, `foto`) VALUES
('12323', 'Crema', 'Buitrago', '123', 'http://localhost/foro/img/3.jpg'),
('123456', 'Andrea', 'builes', '123', 'http://localhost/foro/img/2.jpg'),
('14323', 'PAULINA', 'Muñoz', '123', 'http://localhost/foro/img/1.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario` (`usuario`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`identificacion`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `persona` (`identificacion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
