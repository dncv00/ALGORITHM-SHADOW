-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS Algo_Shad;
USE Algo_Shad;

-- --------------------------------------------------------
-- Estructura de tabla para la tabla `usuarios`
-- --------------------------------------------------------

CREATE TABLE `usuarios` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `perfil` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcado de datos para la tabla `usuarios`
INSERT INTO `usuarios` (`id`, `usuario`, `correo`, `contrasena`, `perfil`) VALUES
(1, 'Juan1', 'juan123@gmail.com', '1234', 1),
(4, 'Juan123', 'juanju@gmial.com', '1234', 1),
(6, 'marcofidel', 'marco@gmail.com', '2345', 2);

-- --------------------------------------------------------
-- Estructura de tabla para la tabla `comentarios`
-- --------------------------------------------------------

CREATE TABLE `comentarios` (
  `id` varchar(20) NOT NULL,
  `usuario_id` int(1) NOT NULL,
  `comentario` varchar(350) NOT NULL,
  `fecha` datetime(6) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcado de datos para la tabla `comentarios`
-- Puedes insertar datos de ejemplo aquí si es necesario.
