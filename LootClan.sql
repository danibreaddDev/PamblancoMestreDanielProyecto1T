-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2024 a las 19:18:40
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lootclan`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `idUnico` varchar(50) NOT NULL,
  `dniCliente` varchar(9) NOT NULL,
  `idProducto` int(6) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` int(6) NOT NULL,
  `cantidad` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `dniCliente` varchar(9) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `pwd` varchar(255) DEFAULT NULL,
  `dirEntrega` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`dniCliente`, `nombre`, `pwd`, `dirEntrega`) VALUES
('49351383F', 'Dani', '$2y$10$7rSgayUyBbvYboIxDuD4F.OoHhjfj.il8lhAq5bPvddq3WZi6/HYi', 'C/Acequia,72 46164 Pedralba, Valencia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineaspedidos`
--

CREATE TABLE `lineaspedidos` (
  `idPedido` int(4) NOT NULL,
  `nlinea` int(2) NOT NULL,
  `idProducto` int(6) DEFAULT NULL,
  `cantidad` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lineaspedidos`
--

INSERT INTO `lineaspedidos` (`idPedido`, `nlinea`, `idProducto`, `cantidad`) VALUES
(1, 1, 1, 1),
(1, 2, 2, 1),
(2, 1, 1, 1),
(2, 2, 3, 1),
(3, 1, 1, 2),
(4, 1, 1, 1),
(4, 2, 3, 1),
(5, 1, 1, 4),
(5, 2, 2, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `idPedido` int(4) NOT NULL,
  `fecha` date NOT NULL,
  `dirEntrega` varchar(50) DEFAULT NULL,
  `dniCliente` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`idPedido`, `fecha`, `dirEntrega`, `dniCliente`) VALUES
(1, '2024-11-15', 'C/Acequia,72 46164 Pedralba, Valencia', '49351383F'),
(2, '2024-11-15', 'C/Acequia,72 46164 Pedralba, Valencia', '49351383f'),
(3, '2024-11-15', 'C/Acequia,72 46164 Pedralba, Valencia', '49351383f'),
(4, '2024-11-15', 'C/Acequia,72 46164 Pedralba, Valencia', '49351383f'),
(5, '2024-11-17', 'C/Acequia,72 46164 Pedralba, Valencia', '49351383F');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(6) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `precio` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `nombre`, `foto`, `precio`) VALUES
(1, 'Caja de Cartas Pokémon - Espada y Escudo', 'https://i.pinimg.com/736x/e7/0d/c0/e70dc00adb9f365a7540e41d84225f32.jpg', 500),
(2, 'Figura de Pikachu Edición Especial', 'https://i.pinimg.com/736x/1b/76/4a/1b764a6265ad0cd2615499f51a1088ed.jpg', 300),
(3, 'Caja de Cartas Magic: The Gathering - Innistrad', 'https://i.pinimg.com/736x/95/36/7d/95367d55e65d9cbd879b4ccffa3e09d4.jpg', 700),
(4, 'Figura de Goku Super Saiyan', 'https://i.pinimg.com/736x/3c/40/3d/3c403d1316d9b7d8fabbf54c1351d783.jpg', 400),
(5, 'Pack de Sobres de Cartas Dragon Ball Super', 'https://i.pinimg.com/736x/ae/38/e3/ae38e39e8561cb909f6617f0353c92ed.jpg', 200),
(6, 'Caja de Coleccionista de Cartas Magic - Dominaria', 'https://i.pinimg.com/736x/40/75/9a/40759ae7bf3309e685caee2e50cc1a02.jpg', 850),
(7, 'Figura de Charizard Edición Limitada', 'https://i.pinimg.com/736x/c5/c7/b6/c5c7b6e2bf01a4ff2061325fefae9a9f.jpg', 1000),
(8, 'Caja de Cartas Pokémon - Evoluciones', 'https://i.pinimg.com/736x/f8/96/13/f89613c82bb629a6d87ad36976fb8106.jpg', 650);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`idUnico`,`idProducto`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`dniCliente`);

--
-- Indices de la tabla `lineaspedidos`
--
ALTER TABLE `lineaspedidos`
  ADD PRIMARY KEY (`idPedido`,`nlinea`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idPedido`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
