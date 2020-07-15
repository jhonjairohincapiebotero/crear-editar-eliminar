-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-07-2020 a las 10:36:36
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `micodigo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `contrasena`) VALUES
(1, 'Jhon', '$2y$10$2rGnQpsAZ9u0t5wS16FADOHZKLorhkxVmGVArtFJNZFtLhn3B3AjO'),
(2, '', '$2y$10$hFQ/P.SPwr4CkbuqQDkRiOG7coBW2bLuXxdZHpZNvjkgrHPyw2N16'),
(3, 'Jhon1', '$2y$10$EqAC.LTMW1yyyA53vJEwkeP2s5ThYfQ39jf2H2LtBmQEvUBoMc1xS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `yt_colores`
--

CREATE TABLE `yt_colores` (
  `id` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `yt_colores`
--

INSERT INTO `yt_colores` (`id`, `color`, `descripcion`) VALUES
(30, 'COLORES BOOTSTRAP', 'PRIMARY-DARK-DANGER-WARNING-SUCCESS-INFO-WHITE-SECONDARY'),
(32, 'dark', 'este es un color negro'),
(33, 'danger', 'Este es un color rojo'),
(35, 'warning', 'este es un color naranja'),
(36, 'success', 'este color es verde'),
(37, 'info', 'Este color es verde claro'),
(38, 'primary', 'Este color es blanco azul'),
(39, 'white', 'Este color es blanco'),
(42, 'secondary', 'Este color es?'),
(45, 'danger', 'Este es un color rojo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `yt_colores`
--
ALTER TABLE `yt_colores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `yt_colores`
--
ALTER TABLE `yt_colores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
