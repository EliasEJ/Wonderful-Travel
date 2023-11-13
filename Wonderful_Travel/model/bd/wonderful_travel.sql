-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2023 a las 16:10:57
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
DROP DATABASE IF EXISTS `wonderful_travel`;
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
  `id_viatge` int(11) NOT NULL AUTO_INCREMENT,
  `destiContinent` varchar(20) NOT NULL COMMENT 'Continent on viatjarà l''usuari.',
  `destiPais` varchar(30) NOT NULL COMMENT 'País on viatjarà l''usuari.',
  `preu` float NOT NULL COMMENT 'Preu del viatge.',
  `imatge` text NOT NULL COMMENT 'Imatge que es mostrarà quan s''elegeixi destiContinent i destiPais.',
  PRIMARY KEY (`id_viatge`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `destiviatges`
--

INSERT INTO `destiviatges` (`id_viatge`, `destiContinent`, `destiPais`, `preu`, `imatge`) VALUES
(1, 'Europa', 'Espanya', 96, 'https://www.viajejet.com/wp-content/viajes/vista-nocturna-de-la-playa-de-la-barceloneta.jpg'),
(2, 'Europa', 'Italia', 96, 'https://www.mycoyote.es/blog/wp-content/uploads/2018/05/viajar-italia.jpg'),
(3, 'Europa', 'França', 96, 'https://th.bing.com/th/id/R.c6719763a32b368e0914e585e34a1ec6?rik=4KNFjqvcbMn7tw&riu=http%3a%2f%2fwww.viajaratope.com%2fimages%2fDestino-Francia.jpg&ehk=SI56%2bIbl0nprYFHEybWFBlL%2f0Zzci8LTtVl0t2wDI8Q%3d&risl=&pid=ImgRaw&r=0'),
(4, 'Europa', 'Grècia', 96, 'https://static2-viaggi.corriereobjects.it/wp-content/uploads/2016/07/isole-greche-santorini-iStock-1139370277.jpg?v=429819'),
(5, 'Europa', 'Alemanya', 96, 'https://www.guiadealemania.com/wp-content/uploads/2009/08/Frauenkirche_y_Nuevo_Ayuntamiento.jpg'),
(6, 'Europa', 'Portugal', 96, 'https://www.wallpics.net/wp-content/uploads/2017/12/Lisbon-5-scaled.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserves`
--

DROP TABLE IF EXISTS `reserves`;
CREATE TABLE IF NOT EXISTS `reserves` (
  `id_reserves` int(11) NOT NULL AUTO_INCREMENT,
  `dadesUsuari` int(11) NOT NULL COMMENT 'Dades de la taula dadesUsuaris.',
  `dadesViatge` int(11) NOT NULL COMMENT 'Dades de la taula dadesViatges.',
  PRIMARY KEY (`id_reserves`),
  KEY `fk_id_usuari_destiUsuaris` (`dadesUsuari`),
  KEY `fk_id_viatge_destiViatges` (`dadesViatge`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuaris`
--

DROP TABLE IF EXISTS `usuaris`;
CREATE TABLE IF NOT EXISTS `usuaris` (
  `email` varchar(50) NOT NULL COMMENT 'email para registrarse',
  `password` varchar(20) NOT NULL COMMENT 'password encriptada',
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reserves`
--
ALTER TABLE `reserves`
  ADD CONSTRAINT `fk_id_usuari_destiUsuaris` FOREIGN KEY (`dadesUsuari`) REFERENCES `dadesusuaris` (`id_usuari`),
  ADD CONSTRAINT `fk_id_viatge_destiViatges` FOREIGN KEY (`dadesViatge`) REFERENCES `destiviatges` (`id_viatge`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
