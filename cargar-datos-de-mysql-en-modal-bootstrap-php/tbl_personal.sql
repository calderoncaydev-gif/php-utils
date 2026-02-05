
CREATE TABLE `tbl_personal` (
  `id` int(11) NOT NULL,
  `per_nombre` varchar(100) NOT NULL,
  `salario` varchar(50) NOT NULL,
  `genero` varchar(10) NOT NULL,
  `ciudad` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_personal`
--

INSERT INTO `tbl_personal` (`id`, `per_nombre`, `salario`, `genero`, `ciudad`, `email`, `fecha_creacion`) VALUES
(1, 'Juan Soto', '30000', 'masculino', 'Santiago', 'juan@web.com', '2024-01-29 20:55:02'),
(2, 'Pedro Flores', '28000', 'masculino', 'Quito', 'pedro@web.com', '2024-01-29 20:55:07'),
(3, 'Vicente Lee', '35000', 'masculino', 'Rio', 'vicente@web.com', '2024-01-29 20:55:13'),
(4, 'Lucia Carrisalles', '25000', 'femenino', 'Bogota', 'Lucia@web.com', '2024-01-29 20:55:18'),
(5, 'Danika Fijan', '50000', 'femenino', 'Lima', 'danika@web.com', '2024-01-29 20:55:25'),
(6, 'Baihon Jav', '48000', 'masculino', 'La Paz', 'baihon@web.com', '2024-01-29 20:55:32'),
(7, 'Maria Dann', '36000', 'femenino', 'Asuncion', 'maria@web.com', '2024-01-29 20:55:37'),
(13, 'Miluska Caki', '43000', 'femenino', 'Montevideo', 'miluska@web.com', '2024-01-29 20:55:43');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_personal`
--
ALTER TABLE `tbl_personal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_personal`
--
ALTER TABLE `tbl_personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
