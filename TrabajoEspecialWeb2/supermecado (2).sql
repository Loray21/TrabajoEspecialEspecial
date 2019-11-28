-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2019 a las 22:41:35
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `supermecado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`, `descripcion`, `imagen`) VALUES
(67, 'lpmmmm', 'q', ''),
(68, 'engieg', '', ''),
(69, 'verduras', 'difnienfie', 'images/yoguth.jpg'),
(70, 'Tomas', 'eknfiengt3i', ''),
(71, 'jamon', 'iwnfrwinf', ''),
(72, 'lactdm', '', ''),
(73, 'anduvo o q', '', ''),
(74, 'Tomas', 'domgrmhkrmn', ''),
(75, 'ya anduvo', 'engengkkengk', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `usuario` varchar(200) NOT NULL,
  `comentario` text NOT NULL,
  `id_comentario` int(11) NOT NULL,
  `id_producto` int(120) NOT NULL,
  `puntaje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`usuario`, `comentario`, `id_comentario`, `id_producto`, `puntaje`) VALUES
('249381', 'jw fjw nfjwf n', 46, 175, 3),
('249381', 'sisi', 49, 172, 1),
('249381', 'sisi', 50, 172, 1),
('249381', 'muy bueno', 51, 172, 1),
('249381', 'ekngkengkengkengknegkengkegnke', 52, 172, 1),
('249381', 'ekngkengkengkengknegkengkegnke', 53, 172, 1),
('249381', 'ekngkengkengkengknegkengkegnke', 54, 172, 1),
('249381', 'muy bueno', 67, 172, 1),
('249381', 'muy bueno', 68, 172, 1),
('249381', 'muy bueno', 71, 172, 1),
('atr', 'muy bueno', 72, 172, 1),
('40942223', 'asie es', 73, 172, 1),
('2525', 'knfknwkfkwfwnf', 74, 172, 1),
('2525', 'knfknwkfkwfwnf', 75, 172, 1),
('zarpado', 'jfejgegnnge', 76, 174, 1),
('249381', 'muy bueno', 77, 172, 1),
('lpm', '', 78, 172, 1),
('249381', 'jnjnj', 79, 172, 1),
('kmkhmkth', '', 80, 172, 1),
('si', 'jenfn4ingin', 81, 172, 1),
('muy bueno', 'jsnfnkfsnkn', 82, 179, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `imagen_url` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `id_categoria`, `nombre`, `precio`, `descripcion`, `imagen`) VALUES
(172, 67, 'tomas', 5900, 'q onda', 'img/5dd3f42e090df.png'),
(174, 69, 'lacteos', 2500, 'sisi', 'img/5dddbdda3bd6c.'),
(175, 71, 'wos', 3000, 'estamos', 'img/5dddbdee3c527.'),
(177, 69, 'bananaa', 5900, 'jqnjdnqjndjqdn', 'img/5ddab3a64d00f.png'),
(178, 72, 'salchi', 2400, 'eejejeeje', 'img/5ddabc4c8545a.jpg'),
(179, 67, '', 5900, 'enenjgnejngenkggn', 'img/5dddbc5fb8584.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`, `admin`) VALUES
(8, 'loray98@gmail.com', '$2y$10$SQT7YH500nqCkc1xrMmcoekvB3T7JpjzQHFMaviyDd97BLX2i4/m.', 1),
(9, 'walterivorra@hotmail.com', '$2y$10$Vk4hpD3WktePM5yy.ZCGT.C8z1fVYBttFxsXsLcpkINTNgtgJ0Cea', 0),
(11, 'gaby_mendy@gmail.com', '$2y$10$Oz9Tp6TAJutVN8B0c81COuA9aweJmWH7Y4nnI67K6QkAUR1sHliHq', 0),
(12, 'loro@hotma', '$2y$10$U/Wc/9Cov3iXy7ne3AX6OOSlQIJIudMM.YaqZC04Ecfe7gksypoou', 0),
(13, 'pirulo@gmail.com', '$2y$10$lKjNA5ZC9nnBzi9Gf4D1vuwWVkAgVYFSU.myncbpyi8B8m4iyoKB2', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `fkcategoria` (`id_categoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fkcategoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
