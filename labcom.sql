-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 25, 2025 at 03:59 PM
-- Server version: 10.11.4-MariaDB-1~deb12u1
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labcom`
--

-- --------------------------------------------------------

--
-- Table structure for table `articulo`
--

CREATE TABLE `articulo` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `id_tipoarticulo` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `modelo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articulo`
--

INSERT INTO `articulo` (`id`, `nombre`, `id_tipoarticulo`, `id_marca`, `modelo`) VALUES
(1, 'Prueba', 6, 2, 'prueba');

-- --------------------------------------------------------

--
-- Table structure for table `auditoria`
--

CREATE TABLE `auditoria` (
  `id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `id_tipogestion` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_repuesto` int(11) NOT NULL,
  `id_operador` int(11) NOT NULL,
  `id_orden` int(11) NOT NULL,
  `id_ingreso` int(11) NOT NULL,
  `id_salida` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `equipo`
--

CREATE TABLE `equipo` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `modelo` text NOT NULL,
  `id_marca` int(11) NOT NULL,
  `year` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `equipo`
--

INSERT INTO `equipo` (`id`, `nombre`, `modelo`, `id_marca`, `year`) VALUES
(1, 'iphone 13 pro max', 'iphone', 9, '2025'),
(2, 'xiomi', 'xiaomi', 18, '2025'),
(3, 'honor x7', 'Honor', 6, '2025'),
(4, 'tecno', 'techno', 16, '2025');

-- --------------------------------------------------------

--
-- Table structure for table `estatus`
--

CREATE TABLE `estatus` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `estatus`
--

INSERT INTO `estatus` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Pendiente', 'Solicititud de revision por parte del cliente'),
(2, 'En revision', 'El equipo esta siendo revisado por parte del tecnico operador'),
(3, 'Procesado', 'El equipo ya fue reparado por parte del tecnico operador, en espera de ser entregado al cliente'),
(4, 'Entregado', 'El equipo ha sido entregado al cliente');

-- --------------------------------------------------------

--
-- Table structure for table `ingreso`
--

CREATE TABLE `ingreso` (
  `id` int(11) NOT NULL,
  `fecha` int(11) NOT NULL,
  `id_articulo` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marca_equipo`
--

CREATE TABLE `marca_equipo` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marca_equipo`
--

INSERT INTO `marca_equipo` (`id`, `nombre`, `descripcion`) VALUES
(1, 'ACER', 'ACER'),
(2, 'ALCATEL', 'ALCATEL'),
(3, 'ASUS', 'ASUS'),
(4, 'BLACKBERRY', 'BLACKBERRY'),
(5, 'BLU', 'BLU'),
(6, 'HONOR', 'HONOR'),
(7, 'HUAWEI', 'HUAWEI'),
(8, 'INFINIX', 'INFINIX'),
(9, 'IPHONE', 'IPHONE'),
(10, 'LENOVO', 'LENOVO'),
(11, 'LG', 'LG'),
(12, 'MOTOROLA', 'MOTOROLA'),
(13, 'NOKIA', 'NOKIA'),
(14, 'SAMSUNG', 'SAMSUNG'),
(15, 'SONY', 'SONY'),
(16, 'TECNO', 'TECNO'),
(17, 'ULEFONE', 'ULEFONE'),
(18, 'XIAOMI', 'XIAOMI'),
(19, 'ZTE', 'ZTE');

-- --------------------------------------------------------

--
-- Table structure for table `orden_servicio`
--

CREATE TABLE `orden_servicio` (
  `id` int(11) NOT NULL,
  `numero_orden` text NOT NULL,
  `fecha` datetime NOT NULL,
  `id_estatus` int(11) NOT NULL,
  `id_solicitante` int(11) NOT NULL,
  `id_operador` int(11) DEFAULT NULL,
  `id_tecnico` int(11) DEFAULT NULL,
  `id_equipo` int(11) NOT NULL,
  `id_repuesto` int(11) DEFAULT NULL,
  `falla_reportada` text NOT NULL,
  `observaciones` text DEFAULT NULL,
  `accion_tomada` text DEFAULT NULL,
  `fecha_inicio` datetime DEFAULT NULL,
  `fecha_entrega` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salida`
--

CREATE TABLE `salida` (
  `id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `id_articulo` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tipo_articulo`
--

CREATE TABLE `tipo_articulo` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tipo_articulo`
--

INSERT INTO `tipo_articulo` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Antena', 'Antena de telefono'),
(2, 'Altavoz', 'Altavoz'),
(3, 'Bateria', 'Bateria'),
(4, 'Camara', 'Camara'),
(5, 'Carcasa', 'Carcasa'),
(6, 'Conectores', 'Conectores'),
(7, 'Flex', 'Flex'),
(8, 'Funda', 'Funda'),
(9, 'Pantalla', 'Pantalla'),
(10, 'Placas', 'Placas'),
(11, 'Cargador', 'Cargador'),
(12, 'Cable USB', 'Cable'),
(13, 'Glass Protector', 'Glass');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_gestion`
--

CREATE TABLE `tipo_gestion` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tipo_gestion`
--

INSERT INTO `tipo_gestion` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Servicio', 'Gestion de ordenes de Servicio'),
(2, 'Ingreso', 'Ingreso de inventario'),
(3, 'Salida', 'Egreso de inventario');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Admin', 'Administradores acceso total'),
(2, 'Operador', 'Gestion de ordenes de servicio'),
(3, 'Cliente', 'Solicitante');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `clave` text NOT NULL,
  `email` text NOT NULL,
  `cedula` text NOT NULL,
  `direccion` text NOT NULL,
  `telefono` text NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `clave`, `email`, `cedula`, `direccion`, `telefono`, `id_tipo`, `fecha`) VALUES
(1, 'Admin', '34fd43c3a3a455c24de4dd8f01488a3db032b5a69d7193f6e45629ec64a1ccfe', 'robetorr311@gmail.com', '11988311', 'Esmeraldas Residencias Palo Negro', '584125066130', 1, '2025-08-17 10:59:40'),
(2, 'jesus trillo', '34fd43c3a3a455c24de4dd8f01488a3db032b5a69d7193f6e45629ec64a1ccfe', 'jtrillop2002@gmail.com', '232323222', 'Esmeraldas Palo Negro', '04243414997', 1, '2025-08-17 11:26:40'),
(3, 'jesus trillo', '34fd43c3a3a455c24de4dd8f01488a3db032b5a69d7193f6e45629ec64a1ccfe', 'jtrillop2002@gmail.com', '232323222', 'Esmeraldas Palo Negro', '04243414997', 2, '2025-08-17 11:27:31'),
(4, 'jesus trillo', '34fd43c3a3a455c24de4dd8f01488a3db032b5a69d7193f6e45629ec64a1ccfe', 'jtrillop2002@gmail.com', '232323222', 'Esmeraldas Palo Negro', '04243414997', 3, '2025-08-17 11:27:31'),
(5, 'Robert Torres', '34fd43c3a3a455c24de4dd8f01488a3db032b5a69d7193f6e45629ec64a1ccfe', 'robetorr311@gmail.com', '11988311', 'Esmeraldas Palo Negro', '584125066130', 2, '2025-08-17 11:29:00'),
(6, 'Robert Torres', '34fd43c3a3a455c24de4dd8f01488a3db032b5a69d7193f6e45629ec64a1ccfe', 'robetorr311@gmail.com', '11988311', 'Esmeraldas Palo Negro', '584125066130', 3, '2025-08-17 11:29:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auditoria`
--
ALTER TABLE `auditoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estatus`
--
ALTER TABLE `estatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ingreso`
--
ALTER TABLE `ingreso`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marca_equipo`
--
ALTER TABLE `marca_equipo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orden_servicio`
--
ALTER TABLE `orden_servicio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salida`
--
ALTER TABLE `salida`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_articulo`
--
ALTER TABLE `tipo_articulo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_gestion`
--
ALTER TABLE `tipo_gestion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `auditoria`
--
ALTER TABLE `auditoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `equipo`
--
ALTER TABLE `equipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `estatus`
--
ALTER TABLE `estatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ingreso`
--
ALTER TABLE `ingreso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marca_equipo`
--
ALTER TABLE `marca_equipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orden_servicio`
--
ALTER TABLE `orden_servicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salida`
--
ALTER TABLE `salida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipo_articulo`
--
ALTER TABLE `tipo_articulo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tipo_gestion`
--
ALTER TABLE `tipo_gestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
