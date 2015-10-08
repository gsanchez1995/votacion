-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-09-2015 a las 21:55:45
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sanchezguillermo`
--
CREATE DATABASE IF NOT EXISTS `sanchezguillermo` DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci;
USE `sanchezguillermo`;

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `BorrarVoto`(IN `paramId` INT)
    MODIFIES SQL DATA
DELETE FROM votaciones WHERE id=paramId$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarVoto`(IN `paramDni` INT, IN `paramProvincia` VARCHAR(50), IN `paramPresidente` VARCHAR(50), IN `paramSexo` VARCHAR(50))
INSERT INTO votaciones(dni, provincia, presidente, sexo) VALUES (paramDni, paramProvincia, paramPresidente, paramSexo)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ModificarVoto`(IN `paramProvincia` VARCHAR(50), IN `paramPresidente` VARCHAR(50), IN `paramSexo` VARCHAR(50), IN `paramId` INT)
    MODIFIES SQL DATA
UPDATE votaciones SET provincia=paramProvincia, presidente=paramPresidente, sexo=paramSexo WHERE id=paramId$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TraerTodosLosVotos`()
    READS SQL DATA
SELECT * FROM votaciones$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TraerVotoPorId`(IN `paramId` INT)
    READS SQL DATA
SELECT * FROM votaciones WHERE id=paramId$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votaciones`
--

CREATE TABLE IF NOT EXISTS `votaciones` (
  `id` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `provincia` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `presidente` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `sexo` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `votaciones`
--

INSERT INTO `votaciones` (`id`, `dni`, `provincia`, `presidente`, `sexo`) VALUES
(21, 55456565, 'persona1', 'macri', 'masculino'),
(22, 23232323, 'persona2', 'scioli', 'masculino');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `votaciones`
--
ALTER TABLE `votaciones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `votaciones`
--
ALTER TABLE `votaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
