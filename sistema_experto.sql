-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-02-2023 a las 04:59:43
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_experto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultados`
--

CREATE TABLE `resultados` (
  `idResultados` int(11) NOT NULL,
  `r1` varchar(10) NOT NULL,
  `r2` varchar(10) NOT NULL,
  `r3` varchar(10) NOT NULL,
  `r4` varchar(10) NOT NULL,
  `r5` varchar(10) NOT NULL,
  `r6` varchar(10) NOT NULL,
  `r7` varchar(10) NOT NULL,
  `r8` varchar(10) NOT NULL,
  `r9` varchar(10) NOT NULL,
  `r10` varchar(10) NOT NULL,
  `r11` varchar(10) NOT NULL,
  `r12` varchar(10) NOT NULL,
  `r13` varchar(10) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `resultados`
--

INSERT INTO `resultados` (`idResultados`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `r7`, `r8`, `r9`, `r10`, `r11`, `r12`, `r13`, `idUsuario`, `fecha`, `hora`) VALUES
(1, 'Negativo', 'Positivo', 'Negativo', 'Negativo', 'Positivo', 'Negativo', 'Negativo', 'Positivo', 'Negativo', 'Negativo', 'Positivo', 'Negativo', 'Negativo', 1, '2022-12-14', '13:35:29'),
(2, 'Negativo', 'Negativo', 'Negativo', 'Positivo', 'Negativo', 'Negativo', 'Negativo', 'Positivo', 'Negativo', 'Negativo', 'Negativo', 'Positivo', 'Positivo', 1, '2022-12-15', '13:30:51'),
(3, 'Negativo', 'Positivo', 'Negativo', 'Negativo', 'Negativo', 'Negativo', 'Negativo', 'Positivo', 'Positivo', 'Negativo', 'Negativo', 'Negativo', 'Positivo', 1, '2022-12-15', '13:35:42'),
(14, 'Negativo', 'Negativo', 'Positivo', 'Negativo', 'Negativo', 'Positivo', 'Negativo', 'Negativo', 'Positivo', 'Negativo', 'Positivo', 'Positivo', 'Negativo', 1, '2023-01-04', '11:33:10'),
(15, 'Negativo', 'Positivo', 'Positivo', 'Negativo', 'Positivo', 'Positivo', 'Negativo', 'Positivo', 'Negativo', 'Negativo', 'Negativo', 'Negativo', 'Positivo', 2, '2023-01-04', '11:41:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(40) NOT NULL,
  `password` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `password`, `idUsuario`) VALUES
('Keneth Lopez', 123456, 1),
('Papuico', 123456, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `resultados`
--
ALTER TABLE `resultados`
  ADD PRIMARY KEY (`idResultados`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `resultados`
--
ALTER TABLE `resultados`
  MODIFY `idResultados` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `resultados`
--
ALTER TABLE `resultados`
  ADD CONSTRAINT `idUsuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
