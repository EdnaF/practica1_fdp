-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-02-2023 a las 19:13:02
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `encuesta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hipertension`
--

CREATE TABLE `hipertension` (
  `hipertension` varchar(3) NOT NULL,
  `sal` varchar(3) NOT NULL,
  `dolor` varchar(3) NOT NULL,
  `insomnio` varchar(3) NOT NULL,
  `cansancio` varchar(3) NOT NULL,
  `hemorragia` varchar(3) NOT NULL,
  `mareos` varchar(3) NOT NULL,
  `medicacion` varchar(3) NOT NULL,
  `presion` varchar(3) NOT NULL,
  `palpitaciones` varchar(3) NOT NULL,
  `aparato` varchar(3) NOT NULL,
  `diagnostico` varchar(3) NOT NULL,
  `actividad` varchar(3) NOT NULL,
  `enlatados` varchar(3) NOT NULL,
  `embutidos` varchar(3) NOT NULL,
  `carnes` varchar(3) NOT NULL,
  `mantequillas` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
