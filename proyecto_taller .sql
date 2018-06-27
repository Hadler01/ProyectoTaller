-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2018 a las 06:22:49
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_taller`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(130) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `last_session` datetime DEFAULT NULL,
  `ruc` int(11) NOT NULL,
  `telefono` int(9) NOT NULL,
  `activacion` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `usuario`, `password`, `nombre`, `correo`, `last_session`, `ruc`, `telefono`, `activacion`, `id_tipo`) VALUES
(1, 'a', '$2y$10$hLkhql.H.xTrWHyXIp1TOeK2iDqirVFV5ltJ9NxesZs6PYUKfweU.', 'a', 'a@gmail.com', '2018-06-19 18:53:27', 2147483647, 863684365, 1, 1),
(2, 'm', '$2y$10$GQOg10o9yNrYzG29HTbJb.SXZeUTMWeQfRvWEw2RcTDmwIwnM7a3C', 'm', 'm@gmail.com', NULL, 2147483647, 43543546, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `imagen` text NOT NULL,
  `precio` int(11) NOT NULL,
  `Departamento` varchar(25) NOT NULL,
  `duracion` int(11) NOT NULL,
  `Descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `imagen`, `precio`, `Departamento`, `duracion`, `Descripcion`) VALUES
(1, 'Chan Chan', 'chanchan.jpg', 555, 'La Libertad', 5, 'Disfruta de 5 dias y 4 noches espectaculares, conoceras de la arquitectura de la ciudadela de Chan C'),
(2, 'Cataratas', 'cataratas.jpg', 250, 'Arequipa', 4, 'Conoce una de las 3 cataratas mas grandes de Sudamerica, por 4 dias y 3 noches, ven y disfruta con C'),
(3, 'Macchu Picchu', 'macchupicchu.jpg', 500, 'Cuzco', 4, 'Una maravilla del mundo '),
(4, 'Nazca', 'nazca.jpg', 344, 'Ica', 4, 'bbbbbbbbbbbbbbbbbbb'),
(5, 'hotel', 'fondo1.jpg', 444, 'Lima', 4, 'hsdfkhfksdhgkdsg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id` int(11) NOT NULL,
  `fecha de reserva` date NOT NULL,
  `fecha de inicio` date NOT NULL,
  `fecha determino` date NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `tipo`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turista`
--

CREATE TABLE `turista` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(130) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `dni` int(11) NOT NULL,
  `telefono` int(9) NOT NULL,
  `last_session` datetime DEFAULT NULL,
  `activacion` int(11) NOT NULL DEFAULT '0',
  `id_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `turista`
--

INSERT INTO `turista` (`id`, `usuario`, `password`, `nombre`, `correo`, `ruc`, `dni`, `telefono`, `last_session`, `activacion`, `id_tipo`) VALUES
(1, 'b', '$2y$10$Gf6cnygMRGueAi.5RcjrtuNwfZcSYwpiAdo5ehWU3Te7NgDYlsZZ6', 'b', 'b@gmail.com', 0, 2543534, 324235, '2018-06-19 11:16:00', 1, 2),
(2, 'm', '$2y$10$llvAOjC0YCY1.DFdNqzk5u/QoD/bIVqwXxaTc3WTQvmtpxkpjYY36', 'm', 'm@gmail.com', 0, 645767, 43534656, NULL, 1, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `turista`
--
ALTER TABLE `turista`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `turista`
--
ALTER TABLE `turista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
