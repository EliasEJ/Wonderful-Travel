-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-10-2023 a las 15:45:33
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
CREATE TABLE `dadesusuaris` (
  `id_usuari` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL COMMENT 'Nom de l''usuari.',
  `telefon` char(9) NOT NULL COMMENT 'Telefon de l''usuari.',
  `numPersones` tinyint(4) NOT NULL COMMENT 'Número de persones que hi aniran al viatge.',
  `descompte` tinyint(1) NOT NULL COMMENT 'L''usuari elegeix si vol descompte o no.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destiviatges`
--

DROP TABLE IF EXISTS `destiviatges`;
CREATE TABLE `destiviatges` (
  `id_viatge` int(11) NOT NULL,
  `destiContinent` varchar(20) NOT NULL COMMENT 'Continent on viatjarà l''usuari.',
  `destiPais` varchar(30) NOT NULL COMMENT 'País on viatjarà l''usuari.',
  `preu` float NOT NULL COMMENT 'Preu del viatge.',
  `imatge` text NOT NULL COMMENT 'Imatge que es mostrarà quan s''elegeixi destiContinent i destiPais.',
  `dataDisponible` date NOT NULL COMMENT 'Data que elegirà l''usuari per anar de viatge.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserves`
--

DROP TABLE IF EXISTS `reserves`;
CREATE TABLE `reserves` (
  `id_reserves` int(11) NOT NULL,
  `dadesUsuari` int(11) NOT NULL COMMENT 'Dades de la taula dadesUsuaris.',
  `dadesViatge` int(11) NOT NULL COMMENT 'Dades de la taula dadesViatges.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuaris`
--

DROP TABLE IF EXISTS `usuaris`;
CREATE TABLE `usuaris` (
  `email` varchar(50) NOT NULL COMMENT 'email para registrarse',
  `password` varchar(20) NOT NULL COMMENT 'password encriptada'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dadesusuaris`
--
ALTER TABLE `dadesusuaris`
  ADD PRIMARY KEY (`id_usuari`);

--
-- Indices de la tabla `destiviatges`
--
ALTER TABLE `destiviatges`
  ADD PRIMARY KEY (`id_viatge`);

--
-- Indices de la tabla `reserves`
--
ALTER TABLE `reserves`
  ADD PRIMARY KEY (`id_reserves`),
  ADD KEY `fk_id_usuari_destiUsuaris` (`dadesUsuari`),
  ADD KEY `fk_id_viatge_destiViatges` (`dadesViatge`);

--
-- Indices de la tabla `usuaris`
--
ALTER TABLE `usuaris`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dadesusuaris`
--
ALTER TABLE `dadesusuaris`
  MODIFY `id_usuari` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reserves`
--
ALTER TABLE `reserves`
  MODIFY `id_reserves` int(11) NOT NULL AUTO_INCREMENT;

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
