-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2019 a las 15:50:03
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventarioo`
--

CREATE TABLE `inventarioo` (
  `id` int(11) NOT NULL,
  `funcionario` text NOT NULL,
  `cargo` text NOT NULL,
  `cedula` int(8) NOT NULL,
  `telefono` varchar(17) NOT NULL,
  `piso` varchar(2) NOT NULL,
  `dependencia` text NOT NULL,
  `marca1` text NOT NULL,
  `serie1` varchar(20) NOT NULL,
  `mac` varchar(17) NOT NULL,
  `marca2` text NOT NULL,
  `serie2` varchar(20) NOT NULL,
  `marca3` text NOT NULL,
  `serie3` varchar(20) NOT NULL,
  `marca4` text NOT NULL,
  `serie4` varchar(20) NOT NULL,
  `cargador` varchar(20) NOT NULL,
  `usuario` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inventarioo`
--

INSERT INTO `inventarioo` (`id`, `funcionario`, `cargo`, `cedula`, `telefono`, `piso`, `dependencia`, `marca1`, `serie1`, `mac`, `marca2`, `serie2`, `marca3`, `serie3`, `marca4`, `serie4`, `cargador`, `usuario`) VALUES
(1, 'YULEIDY LIENDO', 'APOYO ADMINISTRATIVO 1', 20154811, '(0412)-3769866', 'PB', 'Oficina de TecnologÃ­as de la InformaciÃ³n y la ComunicaciÃ³n', 'VIT', 'A001278225', '00-EC-AB-40-07-A2', 'VIT', 'GKQJ5HA034660', 'VIT', 'KBHC15K16647A', 'VIT', 'MSJ421K10850A', 'AC0358011647A', 'YLIENDO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idrol` int(11) NOT NULL,
  `rol` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Analista'),
(3, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `correo`, `usuario`, `clave`, `rol`) VALUES
(1, 'Alexander', 'aularalexander55@gmail.com', 'admin', 'c9f699d50342c17bcc4488c06498d5fa', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inventarioo`
--
ALTER TABLE `inventarioo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario` (`usuario`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`),
  ADD KEY `idrol` (`idrol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `rol` (`rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inventarioo`
--
ALTER TABLE `inventarioo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`rol`) REFERENCES `rol` (`idrol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
