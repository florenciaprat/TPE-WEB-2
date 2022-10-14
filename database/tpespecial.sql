-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2022 a las 00:09:54
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
(2, 'Serum Revitalif', 30, 2995, 10),
(3, 'Agua micelar', 400, 3.585, 8),
(4, 'Loción hidratante', 573, 2400, 4),
(5, 'Gel facial exfoliante', 30, 1540, 13),
(6, 'Crema Humectante', 250, 3899, 5),
(7, 'Agua micelar bifasica', 200, 2670, 12),
(8, 'Photoderm SPF 50+', 50, 5400, 3),
(10, 'Ampollas de melatonina', 10, 2290, 1),
(11, 'Loción hidratante', 60, 4000, 1),
(12, 'Aceite limpiador', 413, 2990, 1),
(13, 'Crema Antiage Hidratante', 55, 2878, 2),
(14, 'Bagovit A', 200, 2149, 2),
(15, 'Crema contorno de ojos', 14, 2388, 4),
(16, 'Serum Iluminador Vit C', 30, 2198, 8),
(17, 'Gel Limpiador PureActive', 400, 1824, 8),
(18, 'Hydro Boost', 50, 2335, 12),
(19, 'Face Care Antiedad', 100, 885, 12),
(22, 'Crema Facial Glicoisdin', 50, 8127, 9),
(23, 'Fotoprotector compacto', 10, 5273, 9),
(24, 'Emulsion facial', 70, 2180, 6),
(25, 'Crema Protectora facial', 50, 2150, 6),
(26, 'Revitalift crema facial', 50, 2055, 10),
(27, 'Hidra-total 5', 50, 1409, 10),
(28, 'Tratamiento anti acne', 30, 6650, 3),
(29, 'Pro ac control hidratante', 118, 4561, 5),
(30, 'Fluido facial matificante', 60, 2933, 7),
(31, 'Serum triple efecto', 30, 7075, 7),
(32, 'Serum antimanchas', 30, 2735, 13),
(33, 'Rose Care crema hidratante', 50, 965, 13),
(35, 'Mist facial refrescante', 200, 896, 13),
(36, 'Crema facial spft', 100, 596, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'flor.prat.4@gmail.com', '$2a$12$oTLMADqRRSkDvYq1pu4X2.kaahsyrbCvuj4Hb5U766FgweS9gZEkK');

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
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
