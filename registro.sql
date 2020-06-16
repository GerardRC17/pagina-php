-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 29-05-2015 a las 03:36:34
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservaciones`
--

CREATE TABLE IF NOT EXISTS `reservaciones` (
  `Email` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `FechaN` varchar(50) NOT NULL,
  `Arrastrada` varchar(50) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reservaciones`
--

INSERT INTO `reservaciones` (`Email`, `Nombre`, `Apellido`, `FechaN`, `Arrastrada`) VALUES
('admin', '0', 'romero', '05011993', 'polanco'),
('ana14@gmail.com', 'Anai', 'Lopez', '2015-07-24', 'Arrastrada Polanco'),
('diana@yahoo.com', 'Diana', 'Romero', '2015-03-26', 'Arrastrada Los Cabos'),
('erick@gmail.com', 'Erick', 'Cigarroa ', '2015-03-26', 'Arrastrada Los Cabos'),
('fab@yahoo.com', 'Fabiola', 'Hernandez', '2015-06-19', 'Arrastrada Santa Fe'),
('javi@hotmail.com', 'Javier ', 'Montoya', '2015-03-25', 'Arrastrada Polanco'),
('karlita@hotmail.com', 'Karla', 'Hernandez', '2015-03-28', 'Arrastrada Polanco'),
('paco@yahoo.com', 'Paco', 'Cervantes', '2015-05-21', 'Arrastrada Condesa'),
('usuario@dominio.com', 'daniela', 'cervantes', '2015-03-26', 'Arrastrada Polanco');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
