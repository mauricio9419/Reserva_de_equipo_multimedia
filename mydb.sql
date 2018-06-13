-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2017 a las 05:29:39
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mydb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(10) UNSIGNED ZEROFILL NOT NULL,
  `Nombre` varchar(35) COLLATE latin1_spanish_ci NOT NULL,
  `nick` varchar(35) COLLATE latin1_spanish_ci NOT NULL,
  `contrasenia` varchar(10) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`idadmin`, `Nombre`, `nick`, `contrasenia`) VALUES
(0000000001, 'ernesto vladimir Hernandez', 'ernesto', '1994');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disponibles`
--

CREATE TABLE `disponibles` (
  `id_disponible` int(11) NOT NULL,
  `estado` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_equipo1` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `disponibles`
--

INSERT INTO `disponibles` (`id_disponible`, `estado`, `id_equipo1`) VALUES
(1, 'Disponible', 1),
(2, 'Reservado', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id_equipo` int(11) NOT NULL,
  `nombre` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `marca` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `modelo` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `serie` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado_equipo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id_equipo`, `nombre`, `marca`, `modelo`, `serie`, `estado_equipo`) VALUES
(1, 'Mini Laptop', 'Dell', 'Inspiron mini', '123456', 'Disponible'),
(2, 'Proyector ', 'Epson', 'Light', '53258324', 'No disponible'),
(3, 'Laptop', 'Sony', 'VPC', '879328479283', 'Disponible'),
(4, 'Proyector', 'Epson', 'LDFG', '123234324', 'Disponible'),
(5, 'Laptop', 'Sony', 'Vaio', '834623', 'Reservado'),
(7, 'Impresora', 'Canon', 'IP 2700', '67236436', 'Disponible'),
(8, 'computadora', 'sony', 'fv', '02554l', 'Disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id_genero` int(11) NOT NULL,
  `genero` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id_genero`, `genero`) VALUES
(1, 'femenino'),
(2, 'masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `id_horario` int(11) NOT NULL,
  `horario` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`id_horario`, `horario`) VALUES
(1, 'Matutino'),
(2, 'Vespertino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id_reserva` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `id_horario` int(11) DEFAULT NULL,
  `id_equipo` int(11) DEFAULT NULL,
  `comentario` text COLLATE utf8_spanish_ci,
  `extension` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `regleta` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `carnet1` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`id_reserva`, `fecha`, `id_horario`, `id_equipo`, `comentario`, `extension`, `regleta`, `carnet1`) VALUES
(6, '2017-05-02', 0, 0, 'Escribe aquÃ­ tus comentarios', '', '', 'ar01132938'),
(7, '2017-05-04', 0, 0, 'Escribe aquÃ­ tus comentarios', 'si', 'si', 'ar01132938'),
(8, '2017-05-10', 0, 0, 'Escribe aquÃ­ tus comentarios', 'si', 'si', 'rh01132875'),
(9, '2017-05-20', 0, 0, 'Escribe aquÃ­ tus comentarios', '', '', 'ar01132938');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `carnet` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `id_genero` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`carnet`, `nombre`, `apellido`, `email`, `telefono`, `id_genero`) VALUES
('rh01132875', 'Vladimir', 'Ramirez', 'vladimirramirez135@gmail.com', 72211456, 0),
('ar01132938', 'Mauricio', 'Alfaro', 'mauricio@mail.com', 786543212, 2),
('ar01132937', 'mario', 'lopez', 'mariolopez@hotmail.com', 23005375, 0),
('ar01122', 'mauricio', 'ramirez', 'mauricio@live.com', 21556987, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indices de la tabla `disponibles`
--
ALTER TABLE `disponibles`
  ADD PRIMARY KEY (`id_disponible`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id_horario`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id_reserva`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`carnet`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `disponibles`
--
ALTER TABLE `disponibles`
  MODIFY `id_disponible` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id_equipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `id_horario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
