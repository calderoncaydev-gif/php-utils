CREATE TABLE `imagenes` (
  `id` int(11) NOT NULL,
  `carpeta` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `src` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `f_creacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `carpeta`, `src`, `f_creacion`) VALUES
(19, 'uploads/', 'PHP-Email-Contact-Form.png', '2024-01-13 12:05:54'),
(21, 'uploads/', 'ff4bbcf6ca377b3413ba0308343c7ab0682df62b8dca60512c133acf374b9aba_KzkbgT.jpg', '2024-01-13 12:05:55'),
(22, 'uploads/', 'cakephp-dompdf.png', '2024-01-13 12:53:57');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

