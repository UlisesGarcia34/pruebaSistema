-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 17-06-2024 a las 22:41:16
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clinica_prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cirugias`
--

CREATE TABLE `cirugias` (
  `id` int NOT NULL,
  `hora` varchar(20) DEFAULT NULL,
  `paciente` varchar(50) DEFAULT NULL,
  `empresa` varchar(45) DEFAULT NULL,
  `quirofano1` varchar(45) DEFAULT NULL,
  `lio` varchar(20) DEFAULT NULL,
  `quirofano2` varchar(45) DEFAULT NULL,
  `cirujano` varchar(30) DEFAULT NULL,
  `ayudante` varchar(30) DEFAULT NULL,
  `anestesia` varchar(30) DEFAULT NULL,
  `anestesiologo` varchar(45) DEFAULT NULL,
  `telefono_paciente` varchar(20) DEFAULT NULL,
  `emailPaciente` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `cirugias`
--

INSERT INTO `cirugias` (`id`, `hora`, `paciente`, `empresa`, `quirofano1`, `lio`, `quirofano2`, `cirujano`, `ayudante`, `anestesia`, `anestesiologo`, `telefono_paciente`, `emailPaciente`) VALUES
(6, ' 21:46', 'fdf', 'dfdf', 'dfd', 'dfd', 'dfdff', 'ddd', 'fdf', 'dffd', 'dfdf', '5598986698', 'ffdf ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato`
--

CREATE TABLE `contrato` (
  `id` int NOT NULL,
  `contrato_no` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `enFecha` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pdf` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `nombreSol` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `domicilioSol` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `telefonoSol` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nombrePac` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `domicilioPac` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `telefonoPac` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contrato`
--

INSERT INTO `contrato` (`id`, `contrato_no`, `enFecha`, `pdf`, `nombreSol`, `domicilioSol`, `telefonoSol`, `nombrePac`, `domicilioPac`, `telefonoPac`) VALUES
(8, ' 002', 'Domingo 16 de junio del 2024', 'pdf/002/002.pdf', 'Alexis Torres', 'Av de las lomas ', '5598989563', 'Carlos Teran', 'Av adolfo lopez mateos #34', '5511436989 '),
(9, ' 003', 'Domingo 16 de junio del 2024', 'pdf/003/003.pdf', 'Carlos Teran|', 'Av de las lomas ', '551332969', 'Carloa', 'dfdf', '5511436989 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gabinete`
--

CREATE TABLE `gabinete` (
  `id` int NOT NULL,
  `nombre_paciente` varchar(45) DEFAULT NULL,
  `fecha_nacimiento` varchar(100) DEFAULT NULL,
  `edad` varchar(50) DEFAULT NULL,
  `estudios` varchar(45) DEFAULT NULL,
  `medico` varchar(45) DEFAULT NULL,
  `telefono_paciente` varchar(20) DEFAULT NULL,
  `hora` varchar(100) NOT NULL,
  `fecha_estudios` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `gabinete`
--

INSERT INTO `gabinete` (`id`, `nombre_paciente`, `fecha_nacimiento`, `edad`, `estudios`, `medico`, `telefono_paciente`, `hora`, `fecha_estudios`) VALUES
(7, ' Silvano Cantu', '2022-01-10', '2 años', 'pentacam', 'Dr. Celis Suazo Benito', '676767 ', '1', NULL),
(8, ' Silvano Cantu', '2021-02-10', '3 años', 'pentacam', 'Dra. Betech Hannoo Miriam', '678 ', '2', NULL),
(9, ' Ulises', '2021-07-10', '2 años', 'pentacam', 'Dr. Celis Suazo Benito', '57645656456 ', '', NULL),
(10, ' Silvano', '2012-02-10', '12 años', 'octMac', 'Dr. Celis Suazo Benito', '3121286800 ', '', NULL),
(11, ' dddfd', '1910-03-13', '114 años', 'pentacam', 'Dra. Dominguez Dueñas Francisca', '6019521325', '22:28 ', NULL),
(12, ' ujkjhkhj', '2018-02-10', '6 años', 'microscopia', 'Dr. Arroyo Muñoz Laura Leticia', '3121286800', '22:39 ', NULL),
(13, ' Juan Ramon', '1995-12-13', '28 años', 'octMac', 'lozanoAlcazar', '55212548', '13:30 ', NULL),
(14, ' Rodrigo Gomez', '1945-12-13', '78 años', 'octMac', 'Dra. Betech Hannoo Miriam', '5512458745', '13:00 ', NULL),
(15, ' Chabela Chavez ', '1985-12-13', '38 años', 'clioAo', 'lozanoAlcazar', '551254858', '1', '14/06/2024'),
(16, ' Humberto Gutierrez', '1984-06-05', '40 años', 'octMac', 'lozanoAlcazar', '5524512569', '2', '14/06/2024'),
(17, ' Rosendo Cantu ', '1965-10-29', '58 años', 'microscopia', 'Dr. Celis Suazo Benito', '5545632148', '3', '14/06/2024'),
(18, ' Monica Robles', '1974-07-07', '49 años', 'octMac', 'Dra. Galicia Castillo Blanca Adriana', '5512569852', '4', '14/06/2024'),
(19, ' Rodolfo Estrada', '1978-04-25', '46 años', 'pentacam', 'Dra. Betech Hannoo Miriam', '5512547896', '10:30', '2024-06-14 '),
(20, ' Cecilia Robles ', '1945-11-05', '78 años', 'clioAo', 'lozanoAlcazar', '5541236589', '15:00', '2024-06-14 '),
(21, ' Elena Farías ', '1977-10-25', '46 años', 'pentacam', 'Dr. Celis Suazo Benito', '5542125897', '05:30', '2024-06-14 '),
(22, ' Moises Garza', '1978-09-25', '45 años', 'octNo', 'Dr. Arroyo Muñoz Laura Leticia', '5512545852', '15:30', '2024-06-14 '),
(23, ' Elena Robles', '1985-02-16', '39 años', 'pentacam', 'Dr. Celis Suazo Benito', '5512458589', '11:00', '2024-06-15 '),
(24, ' Fernanda Garcia', '1988-07-05', '35 años', 'octMac', 'lozanoAlcazar', '5541256985', '16:00', '2024-06-15 '),
(25, ' Fabian Rodriguez', '1955-04-25', '69 años', 'octMac', 'lozanoAlcazar', '5541258521', '14:00', '2024-06-15 '),
(26, ' pruebas', '1988-12-13', '35 años', 'octMac', 'lozanoAlcazar', '5521458745', '15:00', '2024-06-15 '),
(27, ' Carlos Rodriguez', '2001-07-25', '22 años', 'octMac', 'lozanoAlcazar', '55254125252', '15:30', '2024-06-15 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id` int NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id`, `hora`) VALUES
(1, '09:00:00'),
(2, '09:30:00'),
(3, '10:00:00'),
(4, '10:30:00'),
(5, '11:00:00'),
(6, '11:30:00'),
(7, '12:00:00'),
(8, '12:30:00'),
(9, '13:00:00'),
(10, '13:30:00'),
(11, '14:00:00'),
(12, '14:30:00'),
(13, '15:00:00'),
(14, '15:30:00'),
(15, '16:00:00'),
(16, '16:30:00'),
(17, '17:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `apellido` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `password`) VALUES
(1, 'Ulises', 'Garcia', 'prueba@prueba.com', '$2y$10$1yndWBcUCJmjMfD.W0zaIObCb5TYzhBNSOrYoLxtOr.7J2AT/oMgC');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cirugias`
--
ALTER TABLE `cirugias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gabinete`
--
ALTER TABLE `gabinete`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cirugias`
--
ALTER TABLE `cirugias`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `contrato`
--
ALTER TABLE `contrato`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `gabinete`
--
ALTER TABLE `gabinete`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
