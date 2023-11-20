  -- phpMyAdmin SQL Dump
  -- version 5.2.1
  -- https://www.phpmyadmin.net/
  --
  -- Servidor: 127.0.0.1
  -- Tiempo de generación: 16-11-2023 a las 16:00:50
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
  (1, 'Europa', 'Espanya', 30, 'https://www.viajejet.com/wp-content/viajes/vista-nocturna-de-la-playa-de-la-barceloneta.jpg', '0000-00-00'),
  (2, 'Europa', 'Italia', 53, 'https://www.mycoyote.es/blog/wp-content/uploads/2018/05/viajar-italia.jpg', '0000-00-00'),
  (3, 'Europa', 'França', 45, 'https://th.bing.com/th/id/R.c6719763a32b368e0914e585e34a1ec6?rik=4KNFjqvcbMn7tw&riu=http%3a%2f%2fwww.viajaratope.com%2fimages%2fDestino-Francia.jpg&ehk=SI56%2bIbl0nprYFHEybWFBlL%2f0Zzci8LTtVl0t2wDI8Q%3d&risl=&pid=ImgRaw&r=0', '0000-00-00'),
  (4, 'Europa', 'Grècia', 74, 'https://static2-viaggi.corriereobjects.it/wp-content/uploads/2016/07/isole-greche-santorini-iStock-1139370277.jpg?v=429819', '0000-00-00'),
  (5, 'Europa', 'Alemanya', 64, 'https://www.guiadealemania.com/wp-content/uploads/2009/08/Frauenkirche_y_Nuevo_Ayuntamiento.jpg', '0000-00-00'),
  (6, 'Europa', 'Portugal', 55, 'https://www.wallpics.net/wp-content/uploads/2017/12/Lisbon-5-scaled.jpg', '0000-00-00'),
  (7, 'Asia', 'Japó', 146, 'https://www.state.gov/wp-content/uploads/2019/04/Japan-2107x1406.jpg', '0000-00-00'),
  (8, 'Asia', 'Xina', 110, 'https://www.viajejet.com/wp-content/viajes/la-gran-muralla-china.jpg', '0000-00-00'),
  (9, 'Asia', 'Corea del Sud', 120, 'https://blog.grandvoyage.com/wp-content/uploads/2023/08/viaje-a-corea-del-sur-Seu%CC%81l-10.jpg', '0000-00-00'),
  (10, 'Asia', 'Vietnam', 130, 'https://blog.chapkadirect.es/wp-content/uploads/2022/09/mejores-cosas-que-ver-vietnam-scaled.jpeg', '0000-00-00'),
  (11, 'Asia', 'Filipines', 140, 'https://www.viajejet.com/wp-content/viajes/estambul.jpg', '0000-00-00'),
  (12, 'Asia', 'Tailàndia', 150, 'https://pro-api.descapada.com/storage/escapades_imagenes/Ud3FavxYzvPsDleRzbQKSKhP06ouJyphA3zhBkgl.jpg', '0000-00-00'),
  (13, 'Amèrica', 'Estats Units', 200, 'https://a.storyblok.com/f/55469/1176x732/0e58ba731f/us_-_2022.jpg', '0000-00-00'),
  (14, 'Amèrica', 'Brasil', 210, 'https://www.expreso.info/files/2021-10/Rio_de_Janeiro.jpg', '0000-00-00'),
  (15, 'Amèrica', 'Canadà', 220, 'https://studentworld.au/wp-content/uploads/2022/07/country_image_Canada-1024x687.jpg', '0000-00-00'),
  (16, 'Amèrica', 'Mèxic', 210, 'https://www.kayak.es/news/wp-content/uploads/sites/2/2022/08/DEST_MEXICO_MEXICO-CITY_ZOCALO_GettyImages-638921947.jpg', '0000-00-00'),
  (17, 'Amèrica', 'Argentina', 200, 'https://digitalhub.fifa.com/transform/f65ed923-9b64-4ba2-af70-c44345c61b59/Obelisco-Buenos-Aires-Argentina-celebrations', '0000-00-00'),
  (18, 'Amèrica', 'Perú', 190, 'https://www.viajejet.com/wp-content/viajes/peru.jpg', '0000-00-00'),
  (19, 'Àfrica', 'Egipte', 180, 'https://viajes-anita.com/wp-content/uploads/2023/04/Egipto-1024x1024.png', '0000-00-00'),
  (20, 'Àfrica', 'Marroc', 170, 'https://blog.grandvoyage.com/wp-content/uploads/2023/01/viajes-marruecos-casablanca.jpeg', '0000-00-00'),
  (21, 'Àfrica', 'Tunísia', 160, 'https://турпоиск.kiev.ua/images/contr/tunis.jpg', '0000-00-00'),
  (22, 'Àfrica', 'Senegal', 150, 'https://media.istockphoto.com/id/499051816/es/foto/resumen-de-dakar-desde-la-terraza-con-mirador.jpg?s=612x612&w=0&k=20&c=kg0qcd8CZ-mocd5rgr4pHjokksoB1Q8qR_6Ib04H7RE=', '0000-00-00'),
  (23, 'Àfrica', 'Mali', 140, 'https://lirp.cdn-website.com/f67061b6/dms3rep/multi/opt/9292582bbe2befac17644320b0bcbf41-640w.jpg', '0000-00-00'),
  (24, 'Àfrica', 'Etiòpia', 130, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdnNhriRZ5caq538QMAZlaJQagd4tOBFNcGg&usqp=CAU', '0000-00-00'),
  (25, 'Oceania', 'Austràlia', 180, 'https://www.intermundial.es/blog/wp-content/uploads/2022/03/mejores-ciudades-de-australia.jpg', '0000-00-00'),
  (26, 'Oceania', 'Nova Zelanda', 170, 'https://cadenaser.com/resizer/V-yainfi6WrSpqf9K6_Vs5swd6s=/736x414/filters:format(jpg):quality(70)/cloudfront-eu-central-1.images.arcpublishing.com/prisaradio/4CH6HJSDMRJNLHRH4B6DTJP37U.jpg', '0000-00-00'),
  (27, 'Oceania', 'Micronèsia', 160, 'https://visaindex.s3-accelerate.amazonaws.com/wp-content/uploads/2023/05/08191803/Micronesia.webp', '0000-00-00'),
  (28, 'Oceania', 'Fiji', 150, 'https://digital.ihg.com/is/image/ihg/intercontinental-natadola-8801037826-2x1', '0000-00-00'),
  (29, 'Oceania', 'Samoa', 140, 'https://a.travel-assets.com/findyours-php/viewfinder/images/res70/61000/61991-Samoa.jpg', '0000-00-00'),
  (30, 'Oceania', 'Tonga', 130, 'https://depostal.travel/wp-content/uploads/2019/08/tonga-title.png', '0000-00-00');

  -- --------------------------------------------------------

  --
  -- Estructura de tabla para la tabla `reserves`
  --

  DROP TABLE IF EXISTS `reserves`;
  CREATE TABLE IF NOT EXISTS `reserves` (
    `id_reserves` int(11) NOT NULL AUTO_INCREMENT,
    `dadesUsuari` int(11) NOT NULL COMMENT 'Dades de la taula dadesUsuaris.',
    `dadesViatge` int(11) NOT NULL COMMENT 'Dades de la taula dadesViatges.',
    PRIMARY KEY (`id_reserves`)
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




  /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
  /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
  /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
