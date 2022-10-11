-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-10-2022 a las 19:33:15
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tpespecial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brands`
--

CREATE TABLE `brands` (
  `brand_ID` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `country` varchar(45) NOT NULL,
  `foundation` int(11) NOT NULL,
  `website` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `brands`
--

INSERT INTO `brands` (`brand_ID`, `name`, `country`, `foundation`, `website`) VALUES
(1, 'ACF', 'Argentina', 2005, 'acfmascaras.com'),
(2, 'Bagovit', 'Argentina', 1934, 'bagovit.com.ar'),
(3, 'Bioderma', 'France', 1977, 'bioderma.com.ar'),
(4, 'Cerave', 'USA', 2005, 'cerave.com.ar'),
(5, 'Cetaphil', 'USA', 1947, 'cetaphil.com.ar'),
(6, 'Dermaglos', 'Spain', 1923, 'dermaglos.com.ar'),
(7, 'Eucerin', 'Germany ', 1902, 'eucerin.com.ar'),
(8, 'Garnier', 'France', 1904, 'garnier.com.ar'),
(9, 'Isdin', 'Spain', 1977, 'isdin.com.ar'),
(10, 'L\'orealParis', 'France', 1909, 'lorealparis.com.ar'),
(11, 'Maybelline', 'USA', 1914, 'maybelline.com.ar'),
(12, 'Neutrogena', 'USA', 1930, 'neutrogena.com.ar'),
(13, 'Nivea', 'Germany', 1911, 'nivea.com.ar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `product_ID` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `milliliters` int(11) NOT NULL,
  `price` double NOT NULL,
  `brand_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`product_ID`, `name`, `milliliters`, `price`, `brand_ID`) VALUES
(1, 'Crema hidratante Defensa', 50, 2.995, 1),
(2, 'Serum Revitalif', 30, 2.995, 10),
(3, 'Agua micelar', 400, 3.585, 8),
(4, 'Locion hidratante', 473, 2400, 4),
(5, 'Gel facial exfoliante', 30, 1540, 13),
(6, 'Crema Humectante', 250, 3899, 5),
(7, 'Agua micelar bifasica', 200, 2670, 12),
(8, 'Photoderm SPF 50+', 50, 5400, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_ID`),
  ADD KEY `company_ID` (`brand_ID`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_ID`),
  ADD KEY `company_ID` (`brand_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`brand_ID`) REFERENCES `brands` (`brand_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
