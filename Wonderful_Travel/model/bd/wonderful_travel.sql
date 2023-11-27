-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2023 a las 16:54:14
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `wonderful_travel`
--
CREATE DATABASE IF NOT EXISTS `wonderful_travel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `wonderful_travel`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dadesusuaris`
--

DROP TABLE IF EXISTS `dadesusuaris`;
CREATE TABLE IF NOT EXISTS `dadesusuaris` (
  `id_usuari` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL COMMENT 'Nom de l''usuari.',
  `telefon` char(9) NOT NULL COMMENT 'Telefon de l''usuari.',
  `numPersones` tinyint(4) NOT NULL COMMENT 'Número de persones que hi aniran al viatge.',
  `descompte` tinyint(1) NOT NULL COMMENT 'L''usuari elegeix si vol descompte o no.',
  PRIMARY KEY (`id_usuari`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destiviatges`
--

DROP TABLE IF EXISTS `destiviatges`;
CREATE TABLE IF NOT EXISTS `destiviatges` (
  `id_viatge` int(11) NOT NULL,
  `destiContinent` varchar(20) NOT NULL COMMENT 'Continent on viatjarà l''usuari.',
  `destiPais` varchar(30) NOT NULL COMMENT 'País on viatjarà l''usuari.',
  `preu` float NOT NULL COMMENT 'Preu del viatge.',
  `imatge` text NOT NULL COMMENT 'Imatge que es mostrarà quan s''elegeixi destiContinent i destiPais.',
  `dataDisponible` date NOT NULL COMMENT 'Data que elegirà l''usuari per anar de viatge.',
  PRIMARY KEY (`id_viatge`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `destiviatges`
--

INSERT INTO `destiviatges` (`id_viatge`, `destiContinent`, `destiPais`, `preu`, `imatge`, `dataDisponible`) VALUES
(1, 'Europa', 'Espanya', 30, 'img/conWebp/españa.webp', '0000-00-00'),
(2, 'Europa', 'Italia', 60, 'img/conWebp/italia.webp', '0000-00-00'),
(3, 'Europa', 'França', 70, 'img/conWebp/francia.webp', '0000-00-00'),
(4, 'Europa', 'Grècia', 80, 'img/conWebp/grecia.webp', '0000-00-00'),
(5, 'Europa', 'Alemanya', 100, 'img/conWebp/Alemanya.webp', '0000-00-00'),
(6, 'Europa', 'Portugal', 80, 'img/conWebp/Portugal.webp', '0000-00-00'),
(7, 'Asia', 'Japó', 800, 'img/conWebp/Japo.webp\r\n', '0000-00-00'),
(8, 'Asia', 'Xina', 770, 'img/conWebp/Xina.webp', '0000-00-00'),
(9, 'Asia', 'Corea del Sud', 810, 'img/conWebp/Corea.webp', '0000-00-00'),
(10, 'Asia', 'Vietnam', 720, 'img/conWebp/Vietnam.webp', '0000-00-00'),
(11, 'Asia', 'Filipines', 730, 'img/conWebp/Filipines.webp', '0000-00-00'),
(12, 'Asia', 'Tailàndia', 690, 'img/conWebp/Tailandia.webp', '0000-00-00'),
(13, 'Amèrica', 'Estats Units', 380, 'img/conWebp/EEUU.webp', '0000-00-00'),
(14, 'Amèrica', 'Brasil', 480, 'img/conWebp/Brazil.webp', '0000-00-00'),
(15, 'Amèrica', 'Canadà', 380, 'img/conWebp/Canada.webp', '0000-00-00'),
(16, 'Amèrica', 'Mèxic', 450, 'img/conWebp/Mexico.webp', '0000-00-00'),
(17, 'Amèrica', 'Argentina', 500, 'img/conWebp/Argentina.webp', '0000-00-00'),
(18, 'Amèrica', 'Perú', 405, 'img/conWebp/peru.webp', '0000-00-00'),
(19, 'Àfrica', 'Egipte', 280, 'img/conWebp/Egipto.webp', '0000-00-00'),
(20, 'Àfrica', 'Marroc', 190, 'img/conWebp/marruecos.webp', '0000-00-00'),
(21, 'Àfrica', 'Tunísia', 200, 'img/conWebp/tunisia.webp', '0000-00-00'),
(22, 'Àfrica', 'Senegal', 304, 'img/conWebp/Senegal.webp', '0000-00-00'),
(23, 'Àfrica', 'Mali', 404, 'img/conWebp/mali.webp', '0000-00-00'),
(24, 'Àfrica', 'Etiòpia', 300, 'img/conWebp/Etiopia.webp', '0000-00-00'),
(25, 'Oceania', 'Austràlia', 890, 'img/conWebp/australia.webp', '0000-00-00'),
(26, 'Oceania', 'Nova Zelanda', 900, 'img/conWebp/zelanda.webp', '0000-00-00'),
(27, 'Oceania', 'Micronèsia', 870, 'img/conWebp/Micronesia.webp', '0000-00-00'),
(28, 'Oceania', 'Fiji', 900, 'img/conWebp/Fiji.webp', '0000-00-00'),
(29, 'Oceania', 'Samoa', 870, 'img/conWebp/Samoa.webp', '0000-00-00'),
(30, 'Oceania', 'Tonga', 845, 'img/conWebp/Tonga.webp', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserves`
--

DROP TABLE IF EXISTS `reserves`;
CREATE TABLE IF NOT EXISTS `reserves` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuari` varchar(120) NOT NULL,
  `dataReserva` date NOT NULL,
  `desti` varchar(50) NOT NULL,
  `preu` varchar(5) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `telf` varchar(9) NOT NULL,
  `numPersones` tinyint(4) NOT NULL,
  `img` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reserves`
--

INSERT INTO `reserves` (`id`, `usuari`, `dataReserva`, `desti`, `preu`, `nom`, `telf`, `numPersones`, `img`) VALUES
(42, 'elyass909@gmail.com', '2023-11-27', 'Estats Units', '400 €', 'Elias', '323232', 2, 'https://a.storyblok.com/f/55469/1176x732/0e58ba731f/us_-_2022.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuaris`
--

DROP TABLE IF EXISTS `usuaris`;
CREATE TABLE IF NOT EXISTS `usuaris` (
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL COMMENT 'email para registrarse',
  `password` varchar(150) NOT NULL COMMENT 'password encriptada',
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuaris`
--

INSERT INTO `usuaris` (`username`, `email`, `password`) VALUES
('e.jerari', 'elyass909@gmail.com', '$2y$10$LGsGjLNTns/aXaIcDLEeRuCzBxvlBCeioFaExNDSsFm3a6u2/AOHa'),
('e.jerariw', 'elyass909@gmail.comd', '$2y$10$RY32MtaQTUUE51DJUtMAH.cOcRUkM7zbtFy/om..tsu6Bino7JM6C');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
