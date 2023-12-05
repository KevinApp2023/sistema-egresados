-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2023 a las 05:46:08
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_egresados`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `identificacion` varchar(11) NOT NULL,
  `nombres` varchar(11) NOT NULL,
  `apellidos` varchar(11) NOT NULL,
  `programa` varchar(11) NOT NULL,
  `fecha_inicio` varchar(11) NOT NULL,
  `fecha_final` varchar(11) NOT NULL,
  `archivo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `identificacion`, `nombres`, `apellidos`, `programa`, `fecha_inicio`, `fecha_final`, `archivo`) VALUES
(31, ' 1043664903', 'KEVIN EDUAR', 'BORJA ROLON', 'ANALISIS Y ', '15/1/2019', '22/12/2021', 'archivo/'),
(32, ' 1043664903', 'KEVIN EDUAR', 'BORJA ROLON', 'ANALISIS Y ', '15/1/2019', '22/12/2021', 'archivo/'),
(33, ' aaaaaaa', 'aaaaaaaaa', 'aaaaaaa', 'qqqqqq', '15/1/2019', '22/12/2021', 'archivo/'),
(34, ' aaaaaaa', 'aaaaaaaaa', 'aaaaaaa', 'qqqqqq', '15/1/2019', '22/12/2021', 'archivo/'),
(35, ' aaaaaaa', 'aaaaaaaaa', 'BORJA ROLON', 'ANALISIS Y ', '15/1/2019', '22/12/2021', 'archivo/datos-documento_pdf (2).bin'),
(36, ' ', '', '', '', '', '', 'archivo/'),
(37, ' 1043664903', 'KEVIN EDUAR', 'BORJA ROLON', 'ANALISIS Y ', '15/1/2019', '22/12/2021', 'archivo/HOJA DE VIDA KEVIN_2022.pdf'),
(38, ' 1043664903', 'KEVIN EDUAR', 'BORJA ROLON', 'ANALISIS Y ', '15/1/2019', '22/12/2021', 'archivo/Contrato-de-compraventa-en-PDF.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `tipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `nombre`, `tipo_usuario`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrador', 1),
(2, 'usuario', 'e6c6f0bd956e9147cc453a9708f4926f8e60e477', 'Usuario Normal', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
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
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
