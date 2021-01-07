-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-01-2021 a las 18:55:55
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `club`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socios`
--

CREATE TABLE `socios` (
  `id_socio` int(3) NOT NULL,
  `apellido` varchar(20) CHARACTER SET latin1 NOT NULL,
  `nombre` varchar(50) CHARACTER SET latin1 NOT NULL,
  `dni` varchar(8) CHARACTER SET latin1 NOT NULL,
  `domicilio` varchar(100) CHARACTER SET latin1 NOT NULL,
  `telefono` varchar(15) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `fecha_alta` date NOT NULL,
  `fecha_baja` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `socios`
--

INSERT INTO `socios` (`id_socio`, `apellido`, `nombre`, `dni`, `domicilio`, `telefono`, `email`, `estado`, `fecha_alta`, `fecha_baja`) VALUES
(1, 'Mieres', 'Soledad', '30256897', 'Barrio 20 Viviendas Calle San MartÃ­n NÂº 25', '3751601503', 'soledadmierez@yahoo.com.ar', 0, '2021-01-05', '2021-01-05'),
(2, 'Gimenez', 'Claudia', '31876502', 'BÂº Irrazabal Calle San Juan NÂº 117', '3754413344', 'gimclau@hotmail.com', 1, '2021-01-05', NULL),
(3, 'Delpiano', 'Daniel Ernesto', '37118357', 'BÂº Centro Av, 25 de mayo', '3764183272', 'danieldelpiano04@gmail.com', 1, '2021-01-05', NULL),
(4, 'Bogado', 'Valeria Alba', '31457920', 'BÂº C.Resucitado calle Las Calandrias S/N', '3754528990', 'valeriabogado@yahoo.com.ar', 1, '2021-01-05', NULL),
(5, 'Miranda ', 'Cintia Florencia', '31060744', 'BÂº Las Rosas calle T. Del Fuego NÂº3', '3751520855', 'mirandaflorencia1961@gmail.com', 1, '2021-01-05', NULL),
(6, 'Vera', 'Brigida Elizabeth', '18438555', 'BÂº Las leÃ±as calle Tucuman NÂº 716', '3751668162', 'briyyi24@hotmail.com', 1, '2021-01-05', NULL),
(7, 'Pucciariello', 'Clelia', '31506601', 'Av. AntÃ¡rtida Argentina ', '3758456926', 'pucciariello_25@hotmail.com', 1, '2021-01-05', NULL),
(8, 'Mendez', 'Liliana', '24174681', 'Calle Entre Rios NÂº516', '3755233318', 'abrililiana0416@gmail.com', 1, '2021-01-05', NULL),
(9, 'Cano', 'Virginia', '29798402', 'Calle La Rioja NÂº875', '3751566140', 'virginiacano91@gmail.com', 1, '2021-01-05', NULL),
(10, 'Silva', 'Laura MÃ³nica Natalia', '28890450', 'Av. Grondona NÂº815', '3751595618', 's_loura@hotmail.com', 1, '2021-01-05', NULL),
(11, 'Romero', 'Roberto Orlando', '20518434', 'Calle Fray Mamerto EsquiÃº', '3751660145', 'roberto86romero@gmail.com', 1, '2021-01-05', NULL),
(12, 'Montenegro', 'Florencia', '38568646', 'Calle Almirante Brown', '3755663141', 'florenciamontenegro@gmail.com', 1, '2021-01-05', NULL),
(13, 'Caballero', 'Marcelo', '21639634', 'Calle La Pampa', '3751605475', 'asd@gmail.com', 1, '2021-01-05', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `socios`
--
ALTER TABLE `socios`
  ADD PRIMARY KEY (`id_socio`),
  ADD UNIQUE KEY `dni` (`dni`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `socios`
--
ALTER TABLE `socios`
  MODIFY `id_socio` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
