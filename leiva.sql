-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-10-2023 a las 19:22:31
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
-- Base de datos: `leiva`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `dni` int(11) NOT NULL,
  `telefono` int(15) NOT NULL,
  `gruposanguineo` text NOT NULL,
  `enfermedad` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`dni`, `telefono`, `gruposanguineo`, `enfermedad`) VALUES
(312312, 2147483647, 'sadas', 'adsada'),
(123123, 321312, '12312', '12312');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `register`
--

CREATE TABLE `register` (
  `id` int(3) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `telefono` int(15) NOT NULL,
  `correo` text NOT NULL,
  `usuario` text NOT NULL,
  `contraseña` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `register`
--

INSERT INTO `register` (`id`, `nombre`, `apellido`, `telefono`, `correo`, `usuario`, `contraseña`) VALUES
(0, 'Ivan', 'Falcon', 2147483647, 'ivaneichenberger@gmail.com', 'ivaneich', 'ivaneich'),
(0, 'asdas', 'asdas', 123123, 'ivaneichenberger@gmail.com', 'leiva', 'leiva'),
(0, 'asdas', 'asdas', 123123, 'ivaneichenberger@gmail.com', 'leiva', 'leiva'),
(0, 'Ivan', 'Falcon', 2147483647, 'ivaneichenberger@gmail.com', 'leiva', '1234'),
(0, 'Francisco', 'Escobar', 12312321, 'ivaneichenberger@gmail.com', 'francisco', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_eventos`
--

CREATE TABLE `registro_eventos` (
  `ID_Evento` int(11) NOT NULL,
  `Tipo_Evento` varchar(200) NOT NULL,
  `Fecha_Hora_Evento` date NOT NULL,
  `ID_Paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `registro_eventos`
--

INSERT INTO `registro_eventos` (`ID_Evento`, `Tipo_Evento`, `Fecha_Hora_Evento`, `ID_Paciente`) VALUES
(0, 'Codigo Azul', '2023-10-30', 21321),
(0, 'Codigo Azul', '2023-10-30', 12312),
(0, 'Codigo Azul', '2023-10-30', 21312),
(0, 'Codigo Azul', '2023-10-30', 21312),
(0, 'Codigo Azul', '2023-10-30', 32131),
(0, 'Codigo Azul', '2023-10-30', 213213),
(0, 'Codigo Azul', '2023-10-30', 2131231);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
