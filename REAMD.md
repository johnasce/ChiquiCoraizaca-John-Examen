# Examen
examen
### CARRERA: Computacion
### ASIGNATURA : Programación Hipermedial
### TÍTULO PRÁCTICA : Creación de un Registro de Tickets usando HTML5, Javascript, CSS, PHP
### ESTUDIANTE: JOHN HENRY CHIQUI C. ASCE
### Objetivo Alcanzado:
* Entender el Uso de Javascript para ofrecer funcionalidad a paagina.html
#### ACTIVIDADES DESAROLLADAS

**URL DEL GIFHUB DEL REPOSITORIO**
https://github.com/johnasce/ChiquiCoraizaca-John-Examen.git
johasce

**1.Estructura de la base de Datos**

**2. HTML Y CSS**
·Desarrollar una aplicación Web basada en PHP como BackEnd y HTML + CSS como FrontEnd.

![html](https://user-images.githubusercontent.com/51840139/83659926-c99f8a00-a589-11ea-8f6d-84924775a1c5.png)

![css](https://user-images.githubusercontent.com/51840139/83660048-f2c01a80-a589-11ea-8ae8-f03365d07f42.png)

**3. AJAX DEL BOTON CLIENTE CUANDO **
la pagina ajax que llama a un controlador

![ajax](https://user-images.githubusercontent.com/51840139/83661100-4a12ba80-a58b-11ea-9346-4eb91c6afc75.png)


**4. Desarrollo de página PHP para ingresar Ticket**
la pagina se llama crear_ticke.php

![crearticke_php](https://user-images.githubusercontent.com/51840139/83661130-53038c00-a58b-11ea-9721-2b042dc49f9a.png)

**5. Diseño de base de datos**
Diagrama de entidad relacion (E-R)

![relaciondb](https://user-images.githubusercontent.com/51840139/83661741-3156d480-a58c-11ea-8b1b-d6e12837330b.png)

**6. SQL**

![sql](https://user-images.githubusercontent.com/51840139/83662665-72031d80-a58d-11ea-97a0-c11fa3040a5e.png)


![name](https://user-images.githubusercontent.com/51840139/83663882-e25e6e80-a58e-11ea-8727-3c6cda4666dd.png)



-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2020 a las 17:54:22
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `usu_codigo` int(11) NOT NULL,
  `usu_cedula` varchar(10) NOT NULL,
  `usu_nombres` varchar(70) NOT NULL,
  `usu_telefono` varchar(10) NOT NULL,
  `usu_direccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`usu_codigo`, `usu_cedula`, `usu_nombres`, `usu_telefono`, `usu_direccion`) VALUES
(1, '0104964801', 'John Henry Chiqui', '0123456789', 'Paseo de los cañaris'),
(2, '0104964802', 'John Henry Chiqui 2', '9876543210', 'Pachacamac');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cli_tic_veh`
--

CREATE TABLE `cli_tic_veh` (
  `cl_ti_ve_codigo` int(11) NOT NULL,
  `usu_codigo` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `v_codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticket`
--

CREATE TABLE `ticket` (
  `numero` int(11) NOT NULL,
  `fecha_ingreso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_salida` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ticket`
--

INSERT INTO `ticket` (`numero`, `fecha_ingreso`, `fecha_salida`) VALUES
(1, '0000-00-00 00:00:00', NULL),
(2, '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `v_codigo` int(11) NOT NULL,
  `v_placa` varchar(10) NOT NULL,
  `v_marca` varchar(30) NOT NULL,
  `v_modelo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`v_codigo`, `v_placa`, `v_marca`, `v_modelo`) VALUES
(1, '', '', ''),
(2, '', '', ''),
(3, '', '', ''),
(4, '', '', ''),
(5, '', '', ''),
(6, '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`usu_codigo`);

--
-- Indices de la tabla `cli_tic_veh`
--
ALTER TABLE `cli_tic_veh`
  ADD PRIMARY KEY (`cl_ti_ve_codigo`),
  ADD KEY `fk_usu_odigo` (`usu_codigo`),
  ADD KEY `fk_numero` (`numero`),
  ADD KEY `fk_v_codigo` (`v_codigo`);

--
-- Indices de la tabla `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`numero`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`v_codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `usu_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `cli_tic_veh`
--
ALTER TABLE `cli_tic_veh`
  MODIFY `cl_ti_ve_codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ticket`
--
ALTER TABLE `ticket`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `v_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;







