-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-03-2023 a las 01:11:39
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `paginacion_paises`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `id` int(11) NOT NULL,
  `iso` char(2) DEFAULT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`id`, `iso`, `nombre`, `fecha`) VALUES
(1, 'AF', 'Afganistán', '2023-03-25 03:01:50'),
(2, 'AX', 'Islas Gland', '2023-03-25 03:01:50'),
(3, 'AL', 'Albania', '2023-03-25 03:01:50'),
(4, 'DE', 'Alemania', '2023-03-25 03:01:50'),
(5, 'AD', 'Andorra', '2023-03-25 03:01:50'),
(6, 'AO', 'Angola', '2023-03-25 03:01:50'),
(7, 'AI', 'Anguilla', '2023-03-25 03:01:50'),
(8, 'AQ', 'Antártida', '2023-03-25 03:01:50'),
(9, 'AG', 'Antigua y Barbuda', '2023-03-25 03:01:50'),
(10, 'AN', 'Antillas Holandesas', '2023-03-25 03:01:50'),
(11, 'SA', 'Arabia Saudí', '2023-03-25 03:01:50'),
(12, 'DZ', 'Argelia', '2023-03-25 03:01:50'),
(13, 'AR', 'Argentina', '2023-03-25 03:01:50'),
(14, 'AM', 'Armenia', '2023-03-25 03:01:50'),
(15, 'AW', 'Aruba', '2023-03-25 03:01:50'),
(16, 'AU', 'Australia', '2023-03-25 03:01:50'),
(17, 'AT', 'Austria', '2023-03-25 03:01:50'),
(18, 'AZ', 'Azerbaiyán', '2023-03-25 03:01:50'),
(19, 'BS', 'Bahamas', '2023-03-25 03:01:50'),
(20, 'BH', 'Bahréin', '2023-03-25 03:01:50'),
(21, 'BD', 'Bangladesh', '2023-03-25 03:01:50'),
(22, 'BB', 'Barbados', '2023-03-25 03:01:50'),
(23, 'BY', 'Bielorrusia', '2023-03-25 03:01:50'),
(24, 'BE', 'Bélgica', '2023-03-25 03:01:50'),
(25, 'BZ', 'Belice', '2023-03-25 03:01:50'),
(26, 'BJ', 'Benin', '2023-03-25 03:01:50'),
(27, 'BM', 'Bermudas', '2023-03-25 03:01:50'),
(28, 'BT', 'Bhután', '2023-03-25 03:01:50'),
(29, 'BO', 'Bolivia', '2023-03-25 03:01:50'),
(30, 'BA', 'Bosnia y Herzegovina', '2023-03-25 03:01:50'),
(31, 'BW', 'Botsuana', '2023-03-25 03:01:50'),
(32, 'BV', 'Isla Bouvet', '2023-03-25 03:01:50'),
(33, 'BR', 'Brasil', '2023-03-25 03:01:50'),
(34, 'BN', 'Brunéi', '2023-03-25 03:01:50'),
(35, 'BG', 'Bulgaria', '2023-03-25 03:01:50'),
(36, 'BF', 'Burkina Faso', '2023-03-25 03:01:50'),
(37, 'BI', 'Burundi', '2023-03-25 03:01:50'),
(38, 'CV', 'Cabo Verde', '2023-03-25 03:01:50'),
(39, 'KY', 'Islas Caimán', '2023-03-25 03:01:50'),
(40, 'KH', 'Camboya', '2023-03-25 03:01:50'),
(41, 'CM', 'Camerún', '2023-03-25 03:01:50'),
(42, 'CA', 'Canadá', '2023-03-25 03:01:50'),
(43, 'CF', 'República Centroafricana', '2023-03-25 03:01:50'),
(44, 'TD', 'Chad', '2023-03-25 03:01:50'),
(45, 'CZ', 'República Checa', '2023-03-25 03:01:50'),
(46, 'CL', 'Chile', '2023-03-25 03:01:50'),
(47, 'CN', 'China', '2023-03-25 03:01:50'),
(48, 'CY', 'Chipre', '2023-03-25 03:01:50'),
(49, 'CX', 'Isla de Navidad', '2023-03-25 03:01:50'),
(50, 'VA', 'Ciudad del Vaticano', '2023-03-25 03:01:50'),
(51, 'CC', 'Islas Cocos', '2023-03-25 03:01:50'),
(52, 'CO', 'Colombia', '2023-03-25 03:01:50'),
(53, 'KM', 'Comoras', '2023-03-25 03:01:50'),
(54, 'CD', 'República Democrática del Congo', '2023-03-25 03:01:50'),
(55, 'CG', 'Congo', '2023-03-25 03:01:50'),
(56, 'CK', 'Islas Cook', '2023-03-25 03:01:50'),
(57, 'KP', 'Corea del Norte', '2023-03-25 03:01:50'),
(58, 'KR', 'Corea del Sur', '2023-03-25 03:01:50'),
(59, 'CI', 'Costa de Marfil', '2023-03-25 03:01:50'),
(60, 'CR', 'Costa Rica', '2023-03-25 03:01:50'),
(61, 'HR', 'Croacia', '2023-03-25 03:01:50'),
(62, 'CU', 'Cuba', '2023-03-25 03:01:50'),
(63, 'DK', 'Dinamarca', '2023-03-25 03:01:50'),
(64, 'DM', 'Dominica', '2023-03-25 03:01:50'),
(65, 'DO', 'República Dominicana', '2023-03-25 03:01:50'),
(66, 'EC', 'Ecuador', '2023-03-25 03:01:50'),
(67, 'EG', 'Egipto', '2023-03-25 03:01:50'),
(68, 'SV', 'El Salvador', '2023-03-25 03:01:50'),
(69, 'AE', 'Emiratos Árabes Unidos', '2023-03-25 03:01:50'),
(70, 'ER', 'Eritrea', '2023-03-25 03:01:50'),
(71, 'SK', 'Eslovaquia', '2023-03-25 03:01:50'),
(72, 'SI', 'Eslovenia', '2023-03-25 03:01:50'),
(73, 'ES', 'España', '2023-03-25 03:01:50'),
(74, 'UM', 'Islas ultramarinas de Estados Unidos', '2023-03-25 03:01:50'),
(75, 'US', 'Estados Unidos', '2023-03-25 03:01:50'),
(76, 'EE', 'Estonia', '2023-03-25 03:01:50'),
(77, 'ET', 'Etiopía', '2023-03-25 03:01:50'),
(78, 'FO', 'Islas Feroe', '2023-03-25 03:01:50'),
(79, 'PH', 'Filipinas', '2023-03-25 03:01:50'),
(80, 'FI', 'Finlandia', '2023-03-25 03:01:50'),
(81, 'FJ', 'Fiyi', '2023-03-25 03:01:50'),
(82, 'FR', 'Francia', '2023-03-25 03:01:50'),
(83, 'GA', 'Gabón', '2023-03-25 03:01:50'),
(84, 'GM', 'Gambia', '2023-03-25 03:01:50'),
(85, 'GE', 'Georgia', '2023-03-25 03:01:50'),
(86, 'GS', 'Islas Georgias del Sur y Sandwich del Sur', '2023-03-25 03:01:50'),
(87, 'GH', 'Ghana', '2023-03-25 03:01:50'),
(88, 'GI', 'Gibraltar', '2023-03-25 03:01:50'),
(89, 'GD', 'Granada', '2023-03-25 03:01:50'),
(90, 'GR', 'Grecia', '2023-03-25 03:01:50'),
(91, 'GL', 'Groenlandia', '2023-03-25 03:01:50'),
(92, 'GP', 'Guadalupe', '2023-03-25 03:01:50'),
(93, 'GU', 'Guam', '2023-03-25 03:01:50'),
(94, 'GT', 'Guatemala', '2023-03-25 03:01:50'),
(95, 'GF', 'Guayana Francesa', '2023-03-25 03:01:50'),
(96, 'GN', 'Guinea', '2023-03-25 03:01:50'),
(97, 'GQ', 'Guinea Ecuatorial', '2023-03-25 03:01:50'),
(98, 'GW', 'Guinea-Bissau', '2023-03-25 03:01:50'),
(99, 'GY', 'Guyana', '2023-03-25 03:01:50'),
(100, 'HT', 'Haití', '2023-03-25 03:01:50'),
(101, 'HM', 'Islas Heard y McDonald', '2023-03-25 03:01:50'),
(102, 'HN', 'Honduras', '2023-03-25 03:01:50'),
(103, 'HK', 'Hong Kong', '2023-03-25 03:01:50'),
(104, 'HU', 'Hungría', '2023-03-25 03:01:50'),
(105, 'IN', 'India', '2023-03-25 03:01:50'),
(106, 'ID', 'Indonesia', '2023-03-25 03:01:50'),
(107, 'IR', 'Irán', '2023-03-25 03:01:50'),
(108, 'IQ', 'Iraq', '2023-03-25 03:01:50'),
(109, 'IE', 'Irlanda', '2023-03-25 03:01:50'),
(110, 'IS', 'Islandia', '2023-03-25 03:01:50'),
(111, 'IL', 'Israel', '2023-03-25 03:01:50'),
(112, 'IT', 'Italia', '2023-03-25 03:01:50'),
(113, 'JM', 'Jamaica', '2023-03-25 03:01:50'),
(114, 'JP', 'Japón', '2023-03-25 03:01:50'),
(115, 'JO', 'Jordania', '2023-03-25 03:01:50'),
(116, 'KZ', 'Kazajstán', '2023-03-25 03:01:50'),
(117, 'KE', 'Kenia', '2023-03-25 03:01:50'),
(118, 'KG', 'Kirguistán', '2023-03-25 03:01:50'),
(119, 'KI', 'Kiribati', '2023-03-25 03:01:50'),
(120, 'KW', 'Kuwait', '2023-03-25 03:01:50'),
(121, 'LA', 'Laos', '2023-03-25 03:01:50'),
(122, 'LS', 'Lesotho', '2023-03-25 03:01:50'),
(123, 'LV', 'Letonia', '2023-03-25 03:01:50'),
(124, 'LB', 'Líbano', '2023-03-25 03:01:50'),
(125, 'LR', 'Liberia', '2023-03-25 03:01:50'),
(126, 'LY', 'Libia', '2023-03-25 03:01:50'),
(127, 'LI', 'Liechtenstein', '2023-03-25 03:01:50'),
(128, 'LT', 'Lituania', '2023-03-25 03:01:50'),
(129, 'LU', 'Luxemburgo', '2023-03-25 03:01:50'),
(130, 'MO', 'Macao', '2023-03-25 03:01:50'),
(131, 'MK', 'ARY Macedonia', '2023-03-25 03:01:50'),
(132, 'MG', 'Madagascar', '2023-03-25 03:01:50'),
(133, 'MY', 'Malasia', '2023-03-25 03:01:50'),
(134, 'MW', 'Malawi', '2023-03-25 03:01:50'),
(135, 'MV', 'Maldivas', '2023-03-25 03:01:50'),
(136, 'ML', 'Malí', '2023-03-25 03:01:50'),
(137, 'MT', 'Malta', '2023-03-25 03:01:50'),
(138, 'FK', 'Islas Malvinas', '2023-03-25 03:01:50'),
(139, 'MP', 'Islas Marianas del Norte', '2023-03-25 03:01:50'),
(140, 'MA', 'Marruecos', '2023-03-25 03:01:50'),
(141, 'MH', 'Islas Marshall', '2023-03-25 03:01:50'),
(142, 'MQ', 'Martinica', '2023-03-25 03:01:50'),
(143, 'MU', 'Mauricio', '2023-03-25 03:01:50'),
(144, 'MR', 'Mauritania', '2023-03-25 03:01:50'),
(145, 'YT', 'Mayotte', '2023-03-25 03:01:50'),
(146, 'MX', 'México', '2023-03-25 03:01:50'),
(147, 'FM', 'Micronesia', '2023-03-25 03:01:50'),
(148, 'MD', 'Moldavia', '2023-03-25 03:01:50'),
(149, 'MC', 'Mónaco', '2023-03-25 03:01:50'),
(150, 'MN', 'Mongolia', '2023-03-25 03:01:50'),
(151, 'MS', 'Montserrat', '2023-03-25 03:01:50'),
(152, 'MZ', 'Mozambique', '2023-03-25 03:01:50'),
(153, 'MM', 'Myanmar', '2023-03-25 03:01:50'),
(154, 'NA', 'Namibia', '2023-03-25 03:01:50'),
(155, 'NR', 'Nauru', '2023-03-25 03:01:50'),
(156, 'NP', 'Nepal', '2023-03-25 03:01:50'),
(157, 'NI', 'Nicaragua', '2023-03-25 03:01:50'),
(158, 'NE', 'Níger', '2023-03-25 03:01:50'),
(159, 'NG', 'Nigeria', '2023-03-25 03:01:50'),
(160, 'NU', 'Niue', '2023-03-25 03:01:50'),
(161, 'NF', 'Isla Norfolk', '2023-03-25 03:01:50'),
(162, 'NO', 'Noruega', '2023-03-25 03:01:50'),
(163, 'NC', 'Nueva Caledonia', '2023-03-25 03:01:50'),
(164, 'NZ', 'Nueva Zelanda', '2023-03-25 03:01:50'),
(165, 'OM', 'Omán', '2023-03-25 03:01:50'),
(166, 'NL', 'Países Bajos', '2023-03-25 03:01:50'),
(167, 'PK', 'Pakistán', '2023-03-25 03:01:50'),
(168, 'PW', 'Palau', '2023-03-25 03:01:50'),
(169, 'PS', 'Palestina', '2023-03-25 03:01:50'),
(170, 'PA', 'Panamá', '2023-03-25 03:01:50'),
(171, 'PG', 'Papúa Nueva Guinea', '2023-03-25 03:01:50'),
(172, 'PY', 'Paraguay', '2023-03-25 03:01:50'),
(173, 'PE', 'Perú', '2023-03-25 03:01:50'),
(174, 'PN', 'Islas Pitcairn', '2023-03-25 03:01:50'),
(175, 'PF', 'Polinesia Francesa', '2023-03-25 03:01:50'),
(176, 'PL', 'Polonia', '2023-03-25 03:01:50'),
(177, 'PT', 'Portugal', '2023-03-25 03:01:50'),
(178, 'PR', 'Puerto Rico', '2023-03-25 03:01:50'),
(179, 'QA', 'Qatar', '2023-03-25 03:01:50'),
(180, 'GB', 'Reino Unido', '2023-03-25 03:01:50'),
(181, 'RE', 'Reunión', '2023-03-25 03:01:50'),
(182, 'RW', 'Ruanda', '2023-03-25 03:01:50'),
(183, 'RO', 'Rumania', '2023-03-25 03:01:50'),
(184, 'RU', 'Rusia', '2023-03-25 03:01:50'),
(185, 'EH', 'Sahara Occidental', '2023-03-25 03:01:50'),
(186, 'SB', 'Islas Salomón', '2023-03-25 03:01:50'),
(187, 'WS', 'Samoa', '2023-03-25 03:01:50'),
(188, 'AS', 'Samoa Americana', '2023-03-25 03:01:50'),
(189, 'KN', 'San Cristóbal y Nevis', '2023-03-25 03:01:50'),
(190, 'SM', 'San Marino', '2023-03-25 03:01:50'),
(191, 'PM', 'San Pedro y Miquelón', '2023-03-25 03:01:50'),
(192, 'VC', 'San Vicente y las Granadinas', '2023-03-25 03:01:50'),
(193, 'SH', 'Santa Helena', '2023-03-25 03:01:50'),
(194, 'LC', 'Santa Lucía', '2023-03-25 03:01:50'),
(195, 'ST', 'Santo Tomé y Príncipe', '2023-03-25 03:01:50'),
(196, 'SN', 'Senegal', '2023-03-25 03:01:50'),
(197, 'CS', 'Serbia y Montenegro', '2023-03-25 03:01:50'),
(198, 'SC', 'Seychelles', '2023-03-25 03:01:50'),
(199, 'SL', 'Sierra Leona', '2023-03-25 03:01:50'),
(200, 'SG', 'Singapur', '2023-03-25 03:01:50'),
(201, 'SY', 'Siria', '2023-03-25 03:01:50'),
(202, 'SO', 'Somalia', '2023-03-25 03:01:50'),
(203, 'LK', 'Sri Lanka', '2023-03-25 03:01:50'),
(204, 'SZ', 'Suazilandia', '2023-03-25 03:01:50'),
(205, 'ZA', 'Sudáfrica', '2023-03-25 03:01:50'),
(206, 'SD', 'Sudán', '2023-03-25 03:01:50'),
(207, 'SE', 'Suecia', '2023-03-25 03:01:50'),
(208, 'CH', 'Suiza', '2023-03-25 03:01:50'),
(209, 'SR', 'Surinam', '2023-03-25 03:01:50'),
(210, 'SJ', 'Svalbard y Jan Mayen', '2023-03-25 03:01:50'),
(211, 'TH', 'Tailandia', '2023-03-25 03:01:50'),
(212, 'TW', 'Taiwán', '2023-03-25 03:01:50'),
(213, 'TZ', 'Tanzania', '2023-03-25 03:01:50'),
(214, 'TJ', 'Tayikistán', '2023-03-25 03:01:50'),
(215, 'IO', 'Territorio Británico del Océano Índico', '2023-03-25 03:01:50'),
(216, 'TF', 'Territorios Australes Franceses', '2023-03-25 03:01:50'),
(217, 'TL', 'Timor Oriental', '2023-03-25 03:01:50'),
(218, 'TG', 'Togo', '2023-03-25 03:01:50'),
(219, 'TK', 'Tokelau', '2023-03-25 03:01:50'),
(220, 'TO', 'Tonga', '2023-03-25 03:01:50'),
(221, 'TT', 'Trinidad y Tobago', '2023-03-25 03:01:50'),
(222, 'TN', 'Túnez', '2023-03-25 03:01:50'),
(223, 'TC', 'Islas Turcas y Caicos', '2023-03-25 03:01:50'),
(224, 'TM', 'Turkmenistán', '2023-03-25 03:01:50'),
(225, 'TR', 'Turquía', '2023-03-25 03:01:50'),
(226, 'TV', 'Tuvalu', '2023-03-25 03:01:50'),
(227, 'UA', 'Ucrania', '2023-03-25 03:01:50'),
(228, 'UG', 'Uganda', '2023-03-25 03:01:50'),
(229, 'UY', 'Uruguay', '2023-03-25 03:01:50'),
(230, 'UZ', 'Uzbekistán', '2023-03-25 03:01:50'),
(231, 'VU', 'Vanuatu', '2023-03-25 03:01:50'),
(232, 'VE', 'Venezuela', '2023-03-25 03:01:50'),
(233, 'VN', 'Vietnam', '2023-03-25 03:01:50'),
(234, 'VG', 'Islas Vírgenes Británicas', '2023-03-25 03:01:50'),
(235, 'VI', 'Islas Vírgenes de los Estados Unidos', '2023-03-25 03:01:50'),
(236, 'WF', 'Wallis y Futuna', '2023-03-25 03:01:50'),
(237, 'YE', 'Yemen', '2023-03-25 03:01:50'),
(238, 'DJ', 'Yibuti', '2023-03-25 03:01:50'),
(239, 'ZM', 'Zambia', '2023-03-25 03:01:50'),
(240, 'ZW', 'Zimbabue', '2023-03-25 03:01:50');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
