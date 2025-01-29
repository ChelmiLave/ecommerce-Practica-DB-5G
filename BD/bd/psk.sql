-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2022 a las 08:00:42
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `psk`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidos` varchar(55) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `telefono` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellidos`, `direccion`, `telefono`) VALUES
(1, 'Angel', 'Flores', 'Aramara La Cantera Tepic Nayarit', '1234567890'),
(2, 'Becker', 'Rubio', 'Aramara La Cantera Tepic Nayarit', '3117483647'),
(3, 'Omar', 'Godinez', 'Los Fresnos Tepic Nayarit', '3119991122'),
(4, 'Ronaldo', 'Ruiz', 'Villas Tepic Nayarit', '3110002211'),
(5, 'Octavio', 'Ramirez', 'Molinos del Rey Tepic Nayarit', '3112223311'),
(6, 'Luis', 'Sanchez', 'Rodeo Tepic Nayarit', '3113302342'),
(7, 'Gael', 'Cabrera', 'Linda Vista Tepic Nayarit', '3110002342'),
(8, 'Juan', 'Martinez', 'Rodeo Tepic Nayarit', '3110662342'),
(9, 'Mario', 'Aguilar', 'Vistas De La Cantera Tepic Nayarit', '3119991552'),
(10, 'Alberto', 'Torres', 'Culiacan Sinaloa', '3118997127'),
(11, 'Jose', 'Ramirez', 'Leon Guanajuato', '3115691220'),
(12, 'Fernanda', 'Rios', 'Cocula Jalisco', '3113491141'),
(13, 'Angela', 'Casas', 'Los Mochis Sinaloa', '3113991772'),
(14, 'Roberto', 'Ruiz', 'Ocotlan Jalisco', '3119983175'),
(15, 'Maria', 'Martinez', 'Irapuato Guanajuato', '3117577763'),
(16, 'Gerardo', 'Piña', 'Villa de Montalvo #33 Tepic Nayarit', '3117486647'),
(17, 'Roberto', 'Diaz', 'Bella Vista Tepic Nayarit', '3113459034');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
