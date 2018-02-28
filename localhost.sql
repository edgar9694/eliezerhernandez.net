-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 08-04-2017 a las 15:23:23
-- Versión del servidor: 5.5.54-cll
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `eliezer1_eliezerweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `pwd` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `pasadmin` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `correo`, `pwd`, `pasadmin`) VALUES
(1, 'ADMIN', 'ADMIN@gmail.com', '$2y$10$iekAYoIamfzRbCUOvnz7KOocoTc.rqKyRRp80yze7gFM/ZIfgBdui', '$2y$14$9X.doapl71g8KNjGQu6JiOpfFBYoAzCsXxcuHkMJvZFAMJJhnr0B.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE IF NOT EXISTS `imagenes` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cover` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `categoria` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=165 ;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `imagen`, `cover`, `categoria`) VALUES
(40, 'imagenes/muestra/FOTOS/inicio/min-inicio_MG_0029 copia.jpg', '', 'inicio'),
(41, 'imagenes/muestra/FOTOS/inicio/min-inicio_MG_0883 copia.jpg', '', 'inicio'),
(42, 'imagenes/muestra/FOTOS/inicio/min-inicio_MG_1437.jpg', '', 'inicio'),
(43, 'imagenes/muestra/FOTOS/inicio/min-inicio_MG_7990.jpg', '', 'inicio'),
(44, 'imagenes/muestra/FOTOS/inicio/min-inicio_MG_8469.jpg', '', 'inicio'),
(45, 'imagenes/muestra/FOTOS/inicio/min-inicio_MG_8571.jpg', '', 'inicio'),
(46, 'imagenes/muestra/FOTOS/inicio/min-inicio_MG_9702.jpg', '', 'inicio'),
(47, 'imagenes/muestra/FOTOS/inicio/min-inicio_MGL1718.jpg', '', 'inicio'),
(48, 'imagenes/muestra/FOTOS/novias/min-novias_MG_2551.jpg', '', 'novias'),
(49, 'imagenes/muestra/FOTOS/novias/min-novias_MG_2532.jpg', '', 'novias'),
(50, 'imagenes/muestra/FOTOS/novias/min-novias_MG_3389.jpg', '', 'novias'),
(51, 'imagenes/muestra/FOTOS/novias/min-novias_MG_3403.jpg', '', 'novias'),
(52, 'imagenes/muestra/FOTOS/novias/min-novias_MG_3472.jpg', '', 'novias'),
(53, 'imagenes/muestra/FOTOS/novias/min-novias_MG_6427.jpg', '', 'novias'),
(54, 'imagenes/muestra/FOTOS/novias/min-novias_MG_7584.jpg', '', 'novias'),
(56, 'imagenes/muestra/FOTOS/novias/min-novias_MG_8107.jpg', '', 'novias'),
(57, 'imagenes/muestra/FOTOS/novios/min-novios_MG_0883.jpg', '', 'novios'),
(58, 'imagenes/muestra/FOTOS/novios/min-novios_MG_1437.jpg', '', 'novios'),
(59, 'imagenes/muestra/FOTOS/novios/min-novios_MG_2913.jpg', '', 'novios'),
(60, 'imagenes/muestra/FOTOS/novios/min-novios_MG_4072.jpg', '', 'novios'),
(61, 'imagenes/muestra/FOTOS/reportaje/min-reportaje_MG_3251.jpg', '', 'reportaje'),
(62, 'imagenes/muestra/FOTOS/reportaje/min-reportaje_MG_3357.jpg', '', 'reportaje'),
(63, 'imagenes/muestra/FOTOS/reportaje/min-reportaje_MG_3365.jpg', '', 'reportaje'),
(64, 'imagenes/muestra/FOTOS/reportaje/min-reportaje_MG_7918.jpg', '', 'reportaje'),
(65, 'imagenes/muestra/FOTOS/trash_the_dress/min-trash_the_dress_MG_8469.jpg', '', 'trash_the_dress'),
(66, 'imagenes/muestra/FOTOS/trash_the_dress/min-trash_the_dress_MG_8571.jpg', '', 'trash_the_dress'),
(67, 'imagenes/muestra/FOTOS/trash_the_dress/min-trash_the_dress_MG_9702.jpg', '', 'trash_the_dress'),
(68, 'imagenes/muestra/FOTOS/trash_the_dress/min-trash_the_dress_MGL3082.jpg', '', 'trash_the_dress'),
(69, 'imagenes/muestra/FOTOS/trash_the_dress/min-trash_the_dress_MG_8715.jpg', '', 'trash_the_dress'),
(70, 'imagenes/muestra/FOTOS/trash_the_dress/min-trash_the_dress_MG_9754.jpg', '', 'trash_the_dress'),
(72, 'imagenes/muestra/FOTOS/trash_the_dress/min-trash_the_dress_MGL1583.jpg', '', 'trash_the_dress'),
(73, 'imagenes/muestra/FOTOS/trash_the_dress/min-trash_the_dress_MGL7272.jpg', '', 'trash_the_dress'),
(74, 'imagenes/muestra/FOTOS/trash_the_dress/min-trash_the_dress_MGL7279.jpg', '', 'trash_the_dress'),
(75, 'imagenes/muestra/FOTOS/trash_the_dress/min-trash_the_dress_MGL7354.jpg', '', 'trash_the_dress'),
(76, 'imagenes/muestra/FOTOS/trash_the_dress/min-trash_the_dress_MGL7444.jpg', '', 'trash_the_dress'),
(77, 'imagenes/muestra/FOTOS/trash_the_dress/min-trash_the_dress_MGL7276.jpg', '', 'trash_the_dress'),
(78, 'imagenes/muestra/FOTOS/trash_the_dress/min-trash_the_dress_MGL7280.jpg', '', 'trash_the_dress'),
(79, 'imagenes/muestra/FOTOS/trash_the_dress/min-trash_the_dress_MGL7386.jpg', '', 'trash_the_dress'),
(80, 'imagenes/muestra/FOTOS/trash_the_dress/min-trash_the_dress_MGL7458.jpg', '', 'trash_the_dress'),
(81, 'imagenes/muestra/FOTOS/trash_the_dress/min-trash_the_dress_MGL7481.jpg', '', 'trash_the_dress'),
(82, 'imagenes/muestra/FOTOS/trash_the_dress/min-trash_the_dress_MGL7519.jpg', '', 'trash_the_dress'),
(83, 'imagenes/muestra/FOTOS/trash_the_dress/min-trash_the_dress_MGL7570.jpg', '', 'trash_the_dress'),
(84, 'imagenes/muestra/FOTOS/trash_the_dress/min-trash_the_dressIMG_3244.jpg', '', 'trash_the_dress'),
(85, 'imagenes/muestra/FOTOS/trash_the_dress/min-trash_the_dressIMG_3028.jpg', '', 'trash_the_dress'),
(86, 'imagenes/muestra/FOTOS/trash_the_dress/min-trash_the_dressIMG_3029.jpg', '', 'trash_the_dress'),
(87, 'imagenes/muestra/FOTOS/trash_the_dress/min-trash_the_dressIMG_3140.jpg', '', 'trash_the_dress'),
(88, 'imagenes/muestra/FOTOS/trash_the_dress/min-trash_the_dressIMG_3259.jpg', '', 'trash_the_dress'),
(89, 'imagenes/muestra/FOTOS/trash_the_dress/min-trash_the_dressIMG_3031.jpg', '', 'trash_the_dress'),
(90, 'imagenes/muestra/FOTOS/reportaje/min-reportaje_MG_1402.jpg', '', 'reportaje'),
(91, 'imagenes/muestra/FOTOS/reportaje/min-reportaje_MG_2429.jpg', '', 'reportaje'),
(92, 'imagenes/muestra/FOTOS/reportaje/min-reportaje_MG_2432.jpg', '', 'reportaje'),
(93, 'imagenes/muestra/FOTOS/reportaje/min-reportaje_MG_3562.jpg', '', 'reportaje'),
(94, 'imagenes/muestra/FOTOS/reportaje/min-reportaje_MG_2426.jpg', '', 'reportaje'),
(95, 'imagenes/muestra/FOTOS/reportaje/min-reportaje_MG_3284.jpg', '', 'reportaje'),
(96, 'imagenes/muestra/FOTOS/reportaje/min-reportaje_MG_3671.jpg', '', 'reportaje'),
(97, 'imagenes/muestra/FOTOS/reportaje/min-reportaje_MG_7291.jpg', '', 'reportaje'),
(98, 'imagenes/muestra/FOTOS/reportaje/min-reportaje_MG_4737.jpg', '', 'reportaje'),
(99, 'imagenes/muestra/FOTOS/reportaje/min-reportaje_MG_7990.jpg', '', 'reportaje'),
(100, 'imagenes/muestra/FOTOS/reportaje/min-reportaje_MGL2281.jpg', '', 'reportaje'),
(101, 'imagenes/muestra/FOTOS/reportaje/min-reportajeIMG_5530.jpg', '', 'reportaje'),
(102, 'imagenes/muestra/FOTOS/reportaje/min-reportajeIMG_5559.jpg', '', 'reportaje'),
(103, 'imagenes/muestra/FOTOS/reportaje/min-reportajeIMG_5643.jpg', '', 'reportaje'),
(104, 'imagenes/muestra/FOTOS/reportaje/min-reportajeIMG_5682.jpg', '', 'reportaje'),
(105, 'imagenes/muestra/FOTOS/reportaje/min-reportajeIMGL1311.jpg', '', 'reportaje'),
(106, 'imagenes/muestra/FOTOS/reportaje/min-reportaje_MG_8895.jpg', '', 'reportaje'),
(107, 'imagenes/muestra/FOTOS/reportaje/min-reportaje_MGL0409.jpg', '', 'reportaje'),
(108, 'imagenes/muestra/FOTOS/reportaje/min-reportaje_MGL0823.jpg', '', 'reportaje'),
(109, 'imagenes/muestra/FOTOS/reportaje/min-reportaje_MGL2284.jpg', '', 'reportaje'),
(110, 'imagenes/muestra/FOTOS/novios/min-novios_MG_1392.jpg', '', 'novios'),
(111, 'imagenes/muestra/FOTOS/novios/min-novios_MG_1802.jpg', '', 'novios'),
(112, 'imagenes/muestra/FOTOS/novios/min-novios_MG_2946.jpg', '', 'novios'),
(113, 'imagenes/muestra/FOTOS/novios/min-novios_MG_4055.jpg', '', 'novios'),
(114, 'imagenes/muestra/FOTOS/novios/min-novios_MG_7455.jpg', '', 'novios'),
(115, 'imagenes/muestra/FOTOS/novios/min-novios_MGL0511.jpg', '', 'novios'),
(116, 'imagenes/muestra/FOTOS/novios/min-novios_MGL0520.jpg', '', 'novios'),
(117, 'imagenes/muestra/FOTOS/novios/min-novios_MGL2366.jpg', '', 'novios'),
(118, 'imagenes/muestra/FOTOS/novios/min-novios_MG_4067.jpg', '', 'novios'),
(119, 'imagenes/muestra/FOTOS/novios/min-novios_MGL0739.jpg', '', 'novios'),
(120, 'imagenes/muestra/FOTOS/novios/min-novios_MGL1137.jpg', '', 'novios'),
(121, 'imagenes/muestra/FOTOS/novios/min-novios_MGL1145.jpg', '', 'novios'),
(122, 'imagenes/muestra/FOTOS/novios/min-novios_MGL1480.jpg', '', 'novios'),
(123, 'imagenes/muestra/FOTOS/novios/min-novios_MGL2554.jpg', '', 'novios'),
(124, 'imagenes/muestra/FOTOS/novios/min-novios_MGL3350.jpg', '', 'novios'),
(125, 'imagenes/muestra/FOTOS/novios/min-novios_MGL4704.jpg', '', 'novios'),
(126, 'imagenes/muestra/FOTOS/novios/min-novios_MGL3398.jpg', '', 'novios'),
(127, 'imagenes/muestra/FOTOS/novios/min-novios_MGL4751.jpg', '', 'novios'),
(128, 'imagenes/muestra/FOTOS/novios/min-novios_MGL6357.jpg', '', 'novios'),
(129, 'imagenes/muestra/FOTOS/novios/min-novios_MGL6760.jpg', '', 'novios'),
(130, 'imagenes/muestra/FOTOS/novios/min-novios_MGL3390.jpg', '', 'novios'),
(131, 'imagenes/muestra/FOTOS/novios/min-novios_MGL5347.jpg', '', 'novios'),
(132, 'imagenes/muestra/FOTOS/novios/min-novios_MGL6016.jpg', '', 'novios'),
(133, 'imagenes/muestra/FOTOS/novios/min-novios_MGL6752.jpg', '', 'novios'),
(134, 'imagenes/muestra/FOTOS/novios/min-novios_MGL9286.jpg', '', 'novios'),
(135, 'imagenes/muestra/FOTOS/novios/min-novios_MGL9458.jpg', '', 'novios'),
(136, 'imagenes/muestra/FOTOS/novios/min-novios_MGL9533.jpg', '', 'novios'),
(137, 'imagenes/muestra/FOTOS/novios/min-novios_MGL9672.jpg', '', 'novios'),
(138, 'imagenes/muestra/FOTOS/novios/min-novios_MGM2314.jpg', '', 'novios'),
(139, 'imagenes/muestra/FOTOS/novios/min-novios_MGM2351.jpg', '', 'novios'),
(140, 'imagenes/muestra/FOTOS/novios/min-novios_MGM2365.jpg', '', 'novios'),
(141, 'imagenes/muestra/FOTOS/novias/min-novias_MG_6603.jpg', '', 'novias'),
(142, 'imagenes/muestra/FOTOS/novias/min-novias_MG_8123.jpg', '', 'novias'),
(143, 'imagenes/muestra/FOTOS/novias/min-novias_MGL0119.jpg', '', 'novias'),
(144, 'imagenes/muestra/FOTOS/novias/min-novias_MGL1718.jpg', '', 'novias'),
(145, 'imagenes/muestra/FOTOS/novias/min-novias_MG_8114.jpg', '', 'novias'),
(146, 'imagenes/muestra/FOTOS/novias/min-novias_MG_9508.jpg', '', 'novias'),
(147, 'imagenes/muestra/FOTOS/novias/min-novias_MGL0101.jpg', '', 'novias'),
(148, 'imagenes/muestra/FOTOS/novias/min-novias_MGL0916.jpg', '', 'novias'),
(149, 'imagenes/muestra/FOTOS/novias/min-novias_MG_8124.jpg', '', 'novias'),
(150, 'imagenes/muestra/FOTOS/novias/min-novias_MGL0035.jpg', '', 'novias'),
(151, 'imagenes/muestra/FOTOS/novias/min-novias_MGL4136.jpg', '', 'novias'),
(152, 'imagenes/muestra/FOTOS/novias/min-novias_MGL4180.jpg', '', 'novias'),
(153, 'imagenes/muestra/FOTOS/novias/min-novias_MGL0127.jpg', '', 'novias'),
(154, 'imagenes/muestra/FOTOS/novias/min-novias_MGL1898.jpg', '', 'novias'),
(155, 'imagenes/muestra/FOTOS/novias/min-novias_MGL3267.jpg', '', 'novias'),
(156, 'imagenes/muestra/FOTOS/novias/min-novias_MGM0417.jpg', '', 'novias'),
(157, 'imagenes/muestra/FOTOS/novias/min-novias_MG_8138.jpg', '', 'novias'),
(158, 'imagenes/muestra/FOTOS/novias/min-noviasIMG_0879.jpg', '', 'novias'),
(159, 'imagenes/muestra/FOTOS/novias/min-noviasIMG_1648.jpg', '', 'novias'),
(160, 'imagenes/muestra/FOTOS/novias/min-noviasIMGL1009.jpg', '', 'novias'),
(161, 'imagenes/muestra/FOTOS/novias/min-novias_MGL4174.jpg', '', 'novias'),
(162, 'imagenes/muestra/FOTOS/novias/min-novias_MGL4236.jpg', '', 'novias'),
(164, 'imagenes/muestra/FOTOS/bio/min-bio0674.jpg', '', 'bio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_user`
--

CREATE TABLE IF NOT EXISTS `img_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cover` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `user` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `text_user`
--

CREATE TABLE IF NOT EXISTS `text_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vid_user`
--

CREATE TABLE IF NOT EXISTS `vid_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vid` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `user` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `video` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `url` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `categoria` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`id`, `video`, `url`, `categoria`) VALUES
(1, '', 'https://player.vimeo.com/video/171143969', 'vimeo'),
(3, '', 'https://player.vimeo.com/video/141271041 ', 'vimeo'),
(6, '', 'https://player.vimeo.com/video/161800825', 'vimeo'),
(7, '', 'https://player.vimeo.com/video/139618721', 'vimeo'),
(8, '', 'https://player.vimeo.com/video/182462023', 'vimeo'),
(9, '', 'https://player.vimeo.com/video/182624356', 'vimeo'),
(11, '', 'https://player.vimeo.com/video/183388144', 'vimeo'),
(12, '', 'https://player.vimeo.com/video/183534578', 'vimeo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zip_user`
--

CREATE TABLE IF NOT EXISTS `zip_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zip` varchar(250) NOT NULL,
  `user` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
