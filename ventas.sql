-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-10-2024 a las 02:13:15
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_productos`
--

CREATE TABLE `t_productos` (
  `id_producto` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precio` varchar(255) NOT NULL,
  `imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `t_productos`
--

INSERT INTO `t_productos` (`id_producto`, `descripcion`, `precio`, `imagen`) VALUES
(1, 'Casco Bicicleta Bell', '250000', 'https://imgs.search.brave.com/ziZgzZuu3sMUd4m1UffkM5VEm0t_U0D7IorOKfnwMgI/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/NzFjMmsyYWY0ckwu/anBn'),
(2, 'Bicicleta Trek Marlin 5', '2000000', 'https://www.fabreguesbicicletas.com/1637696-large_default/bicicleta-trek-marlin-5-gen-3-29-2024.jpg'),
(3, 'Zapatillas MTB', '350000', 'https://imgs.search.brave.com/hWSJy2aAFPIA7FBLeLeYfzIXxvNSal6bfCifiTgcUGE/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9iaWtl/aG91c2UuY28vY2Ru/L3Nob3AvcHJvZHVj/dHMvNzYxODQ3MjMx/NjA1WkFQQVRPQ0xJ/RkZNVEJFTElURElB/TDIuME5FRy1HUklT/NDRoZXJvLmpwZz92/PTE2NjcyMzM4OTQ'),
(4, 'Jersey', '150000', 'https://imgs.search.brave.com/VrRvR0G3Kho36QYs3_0UOD9WN_P9br5ITJKYhmwC_sM/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9jb250/ZW50cy5tZWRpYWRl/Y2F0aGxvbi5jb20v/cDI0NjQ4MDAvayQ0/MzU3MDFhY2U2YTBk/OTUwNGNiZGQ0Nzcx/OGU2NWM2Yy9qZXJz/ZXktY2ljbGlzbW8t/Y2FycmV0ZXJhLW1h/bmdhLWxhcmdhLXZl/cmFuby1hbnRpLXV2/LWhvbWJyZS1yYzEw/MC1yb2pvLmpwZz9m/b3JtYXQ9YXV0byZx/dWFsaXR5PTQwJmY9/NTIweDUyMA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_usuarios`
--

CREATE TABLE `t_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `clave_usuario` text NOT NULL,
  `token` varchar(100) NOT NULL,
  `fecha_hora_creacion` datetime NOT NULL,
  `fecha_hora_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `t_usuarios`
--

INSERT INTO `t_usuarios` (`id_usuario`, `nombres`, `email`, `clave_usuario`, `token`, `fecha_hora_creacion`, `fecha_hora_actualizacion`) VALUES
(1, 'Byron Esteban Cuastumal Perez', 'est384n@gmail.com', '123456789', '', '2024-07-18 02:43:43', '2024-07-18 02:43:43'),
(2, 'Jennifer Andrea Portilla Ruano', 'jennifer@gmail.com', '987654321', '', '2024-07-25 00:26:48', '2024-07-25 00:26:48'),
(3, 'Peter Parker', 'peterparker@gmail.com', '1122334455', '', '2024-07-25 00:29:45', '2024-07-25 00:29:45'),
(4, 'Frodo', 'frodo@gmail.com', '12345', '', '2024-09-11 19:12:00', '0000-00-00 00:00:00'),
(5, 'Sam', 'sam@gmail.com', '12345', '', '2024-09-30 19:06:31', '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_productos`
--
ALTER TABLE `t_productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
