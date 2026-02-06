-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2023 a las 01:55:12
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
-- Base de datos: `select5`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sql_paises`
--

CREATE TABLE `sql_paises` (
  `id` int(11) NOT NULL,
  `pais_codigo` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `pais_nombre` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sql_paises`
--

INSERT INTO `sql_paises` (`id`, `pais_codigo`, `pais_nombre`, `fecha_creacion`) VALUES
(1, 'AF', 'Afghanistan', '2023-09-28 23:50:46'),
(2, 'AL', 'Albania', '2023-09-28 23:50:46'),
(3, 'DZ', 'Algeria', '2023-09-28 23:50:46'),
(4, 'DS', 'American Samoa', '2023-09-28 23:50:46'),
(5, 'AD', 'Andorra', '2023-09-28 23:50:46'),
(6, 'AO', 'Angola', '2023-09-28 23:50:46'),
(7, 'AI', 'Anguilla', '2023-09-28 23:50:46'),
(8, 'AQ', 'Antarctica', '2023-09-28 23:50:46'),
(9, 'AG', 'Antigua and Barbuda', '2023-09-28 23:50:46'),
(10, 'AR', 'Argentina', '2023-09-28 23:50:46'),
(11, 'AM', 'Armenia', '2023-09-28 23:50:46'),
(12, 'AW', 'Aruba', '2023-09-28 23:50:46'),
(13, 'AU', 'Australia', '2023-09-28 23:50:46'),
(14, 'AT', 'Austria', '2023-09-28 23:50:46'),
(15, 'AZ', 'Azerbaijan', '2023-09-28 23:50:46'),
(16, 'BS', 'Bahamas', '2023-09-28 23:50:46'),
(17, 'BH', 'Bahrain', '2023-09-28 23:50:46'),
(18, 'BD', 'Bangladesh', '2023-09-28 23:50:46'),
(19, 'BB', 'Barbados', '2023-09-28 23:50:46'),
(20, 'BY', 'Belarus', '2023-09-28 23:50:46'),
(21, 'BE', 'Belgium', '2023-09-28 23:50:46'),
(22, 'BZ', 'Belize', '2023-09-28 23:50:46'),
(23, 'BJ', 'Benin', '2023-09-28 23:50:46'),
(24, 'BM', 'Bermuda', '2023-09-28 23:50:46'),
(25, 'BT', 'Bhutan', '2023-09-28 23:50:46'),
(26, 'BO', 'Bolivia', '2023-09-28 23:50:46'),
(27, 'BA', 'Bosnia and Herzegovina', '2023-09-28 23:50:46'),
(28, 'BW', 'Botswana', '2023-09-28 23:50:46'),
(29, 'BV', 'Bouvet Island', '2023-09-28 23:50:46'),
(30, 'BR', 'Brazil', '2023-09-28 23:50:46'),
(31, 'IO', 'British Indian Ocean Territory', '2023-09-28 23:50:46'),
(32, 'BN', 'Brunei Darussalam', '2023-09-28 23:50:46'),
(33, 'BG', 'Bulgaria', '2023-09-28 23:50:46'),
(34, 'BF', 'Burkina Faso', '2023-09-28 23:50:46'),
(35, 'BI', 'Burundi', '2023-09-28 23:50:46'),
(36, 'KH', 'Cambodia', '2023-09-28 23:50:46'),
(37, 'CM', 'Cameroon', '2023-09-28 23:50:46'),
(38, 'CA', 'Canada', '2023-09-28 23:50:46'),
(39, 'CV', 'Cape Verde', '2023-09-28 23:50:46'),
(40, 'KY', 'Cayman Islands', '2023-09-28 23:50:46'),
(41, 'CF', 'Central African Republic', '2023-09-28 23:50:46'),
(42, 'TD', 'Chad', '2023-09-28 23:50:46'),
(43, 'CL', 'Chile', '2023-09-28 23:50:46'),
(44, 'CN', 'China', '2023-09-28 23:50:46'),
(45, 'CX', 'Christmas Island', '2023-09-28 23:50:46'),
(46, 'CC', 'Cocos (Keeling) Islands', '2023-09-28 23:50:46'),
(47, 'CO', 'Colombia', '2023-09-28 23:50:46'),
(48, 'KM', 'Comoros', '2023-09-28 23:50:46'),
(49, 'CG', 'Congo', '2023-09-28 23:50:46'),
(50, 'CK', 'Cook Islands', '2023-09-28 23:50:46'),
(51, 'CR', 'Costa Rica', '2023-09-28 23:50:46'),
(52, 'HR', 'Croatia (Hrvatska)', '2023-09-28 23:50:46'),
(53, 'CU', 'Cuba', '2023-09-28 23:50:46'),
(54, 'CY', 'Cyprus', '2023-09-28 23:50:46'),
(55, 'CZ', 'Czech Republic', '2023-09-28 23:50:46'),
(56, 'DK', 'Denmark', '2023-09-28 23:50:46'),
(57, 'DJ', 'Djibouti', '2023-09-28 23:50:46'),
(58, 'DM', 'Dominica', '2023-09-28 23:50:46'),
(59, 'DO', 'Dominican Republic', '2023-09-28 23:50:46'),
(60, 'TP', 'East Timor', '2023-09-28 23:50:46'),
(61, 'EC', 'Ecuador', '2023-09-28 23:50:46'),
(62, 'EG', 'Egypt', '2023-09-28 23:50:46'),
(63, 'SV', 'El Salvador', '2023-09-28 23:50:46'),
(64, 'GQ', 'Equatorial Guinea', '2023-09-28 23:50:46'),
(65, 'ER', 'Eritrea', '2023-09-28 23:50:46'),
(66, 'EE', 'Estonia', '2023-09-28 23:50:46'),
(67, 'ET', 'Ethiopia', '2023-09-28 23:50:46'),
(68, 'FK', 'Falkland Islands (Malvinas)', '2023-09-28 23:50:46'),
(69, 'FO', 'Faroe Islands', '2023-09-28 23:50:46'),
(70, 'FJ', 'Fiji', '2023-09-28 23:50:46'),
(71, 'FI', 'Finland', '2023-09-28 23:50:46'),
(72, 'FR', 'France', '2023-09-28 23:50:46'),
(73, 'FX', 'France, Metropolitan', '2023-09-28 23:50:46'),
(74, 'GF', 'French Guiana', '2023-09-28 23:50:46'),
(75, 'PF', 'French Polynesia', '2023-09-28 23:50:46'),
(76, 'TF', 'French Southern Territories', '2023-09-28 23:50:46'),
(77, 'GA', 'Gabon', '2023-09-28 23:50:46'),
(78, 'GM', 'Gambia', '2023-09-28 23:50:46'),
(79, 'GE', 'Georgia', '2023-09-28 23:50:46'),
(80, 'DE', 'Germany', '2023-09-28 23:50:46'),
(81, 'GH', 'Ghana', '2023-09-28 23:50:46'),
(82, 'GI', 'Gibraltar', '2023-09-28 23:50:46'),
(83, 'GK', 'Guernsey', '2023-09-28 23:50:46'),
(84, 'GR', 'Greece', '2023-09-28 23:50:46'),
(85, 'GL', 'Greenland', '2023-09-28 23:50:46'),
(86, 'GD', 'Grenada', '2023-09-28 23:50:46'),
(87, 'GP', 'Guadeloupe', '2023-09-28 23:50:46'),
(88, 'GU', 'Guam', '2023-09-28 23:50:46'),
(89, 'GT', 'Guatemala', '2023-09-28 23:50:46'),
(90, 'GN', 'Guinea', '2023-09-28 23:50:46'),
(91, 'GW', 'Guinea-Bissau', '2023-09-28 23:50:46'),
(92, 'GY', 'Guyana', '2023-09-28 23:50:46'),
(93, 'HT', 'Haiti', '2023-09-28 23:50:46'),
(94, 'HM', 'Heard and Mc Donald Islands', '2023-09-28 23:50:46'),
(95, 'HN', 'Honduras', '2023-09-28 23:50:46'),
(96, 'HK', 'Hong Kong', '2023-09-28 23:50:46'),
(97, 'HU', 'Hungary', '2023-09-28 23:50:46'),
(98, 'IS', 'Iceland', '2023-09-28 23:50:46'),
(99, 'IN', 'India', '2023-09-28 23:50:46'),
(100, 'IM', 'Isle of Man', '2023-09-28 23:50:46'),
(101, 'ID', 'Indonesia', '2023-09-28 23:50:46'),
(102, 'IR', 'Iran (Islamic Republic of)', '2023-09-28 23:50:46'),
(103, 'IQ', 'Iraq', '2023-09-28 23:50:46'),
(104, 'IE', 'Ireland', '2023-09-28 23:50:46'),
(105, 'IL', 'Israel', '2023-09-28 23:50:46'),
(106, 'IT', 'Italy', '2023-09-28 23:50:46'),
(107, 'CI', 'Ivory Coast', '2023-09-28 23:50:46'),
(108, 'JE', 'Jersey', '2023-09-28 23:50:46'),
(109, 'JM', 'Jamaica', '2023-09-28 23:50:46'),
(110, 'JP', 'Japan', '2023-09-28 23:50:46'),
(111, 'JO', 'Jordan', '2023-09-28 23:50:46'),
(112, 'KZ', 'Kazakhstan', '2023-09-28 23:50:46'),
(113, 'KE', 'Kenya', '2023-09-28 23:50:46'),
(114, 'KI', 'Kiribati', '2023-09-28 23:50:46'),
(115, 'KP', 'Korea, Democratic People\'s Republic of', '2023-09-28 23:50:46'),
(116, 'KR', 'Korea, Republic of', '2023-09-28 23:50:46'),
(117, 'XK', 'Kosovo', '2023-09-28 23:50:46'),
(118, 'KW', 'Kuwait', '2023-09-28 23:50:46'),
(119, 'KG', 'Kyrgyzstan', '2023-09-28 23:50:46'),
(120, 'LA', 'Lao People\'s Democratic Republic', '2023-09-28 23:50:46'),
(121, 'LV', 'Latvia', '2023-09-28 23:50:46'),
(122, 'LB', 'Lebanon', '2023-09-28 23:50:46'),
(123, 'LS', 'Lesotho', '2023-09-28 23:50:46'),
(124, 'LR', 'Liberia', '2023-09-28 23:50:46'),
(125, 'LY', 'Libyan Arab Jamahiriya', '2023-09-28 23:50:46'),
(126, 'LI', 'Liechtenstein', '2023-09-28 23:50:46'),
(127, 'LT', 'Lithuania', '2023-09-28 23:50:46'),
(128, 'LU', 'Luxembourg', '2023-09-28 23:50:46'),
(129, 'MO', 'Macau', '2023-09-28 23:50:46'),
(130, 'MK', 'Macedonia', '2023-09-28 23:50:46'),
(131, 'MG', 'Madagascar', '2023-09-28 23:50:46'),
(132, 'MW', 'Malawi', '2023-09-28 23:50:46'),
(133, 'MY', 'Malaysia', '2023-09-28 23:50:46'),
(134, 'MV', 'Maldives', '2023-09-28 23:50:46'),
(135, 'ML', 'Mali', '2023-09-28 23:50:46'),
(136, 'MT', 'Malta', '2023-09-28 23:50:46'),
(137, 'MH', 'Marshall Islands', '2023-09-28 23:50:46'),
(138, 'MQ', 'Martinique', '2023-09-28 23:50:46'),
(139, 'MR', 'Mauritania', '2023-09-28 23:50:46'),
(140, 'MU', 'Mauritius', '2023-09-28 23:50:46'),
(141, 'TY', 'Mayotte', '2023-09-28 23:50:46'),
(142, 'MX', 'Mexico', '2023-09-28 23:50:46'),
(143, 'FM', 'Micronesia, Federated States of', '2023-09-28 23:50:46'),
(144, 'MD', 'Moldova, Republic of', '2023-09-28 23:50:46'),
(145, 'MC', 'Monaco', '2023-09-28 23:50:46'),
(146, 'MN', 'Mongolia', '2023-09-28 23:50:46'),
(147, 'ME', 'Montenegro', '2023-09-28 23:50:46'),
(148, 'MS', 'Montserrat', '2023-09-28 23:50:46'),
(149, 'MA', 'Morocco', '2023-09-28 23:50:46'),
(150, 'MZ', 'Mozambique', '2023-09-28 23:50:46'),
(151, 'MM', 'Myanmar', '2023-09-28 23:50:46'),
(152, 'NA', 'Namibia', '2023-09-28 23:50:46'),
(153, 'NR', 'Nauru', '2023-09-28 23:50:46'),
(154, 'NP', 'Nepal', '2023-09-28 23:50:46'),
(155, 'NL', 'Netherlands', '2023-09-28 23:50:46'),
(156, 'AN', 'Netherlands Antilles', '2023-09-28 23:50:46'),
(157, 'NC', 'New Caledonia', '2023-09-28 23:50:46'),
(158, 'NZ', 'New Zealand', '2023-09-28 23:50:46'),
(159, 'NI', 'Nicaragua', '2023-09-28 23:50:46'),
(160, 'NE', 'Niger', '2023-09-28 23:50:46'),
(161, 'NG', 'Nigeria', '2023-09-28 23:50:46'),
(162, 'NU', 'Niue', '2023-09-28 23:50:46'),
(163, 'NF', 'Norfolk Island', '2023-09-28 23:50:46'),
(164, 'MP', 'Northern Mariana Islands', '2023-09-28 23:50:46'),
(165, 'NO', 'Norway', '2023-09-28 23:50:46'),
(166, 'OM', 'Oman', '2023-09-28 23:50:46'),
(167, 'PK', 'Pakistan', '2023-09-28 23:50:46'),
(168, 'PW', 'Palau', '2023-09-28 23:50:46'),
(169, 'PS', 'Palestine', '2023-09-28 23:50:46'),
(170, 'PA', 'Panama', '2023-09-28 23:50:46'),
(171, 'PG', 'Papua New Guinea', '2023-09-28 23:50:46'),
(172, 'PY', 'Paraguay', '2023-09-28 23:50:46'),
(173, 'PE', 'Peru', '2023-09-28 23:50:46'),
(174, 'PH', 'Philippines', '2023-09-28 23:50:46'),
(175, 'PN', 'Pitcairn', '2023-09-28 23:50:46'),
(176, 'PL', 'Poland', '2023-09-28 23:50:46'),
(177, 'PT', 'Portugal', '2023-09-28 23:50:46'),
(178, 'PR', 'Puerto Rico', '2023-09-28 23:50:46'),
(179, 'QA', 'Qatar', '2023-09-28 23:50:46'),
(180, 'RE', 'Reunion', '2023-09-28 23:50:46'),
(181, 'RO', 'Romania', '2023-09-28 23:50:46'),
(182, 'RU', 'Russian Federation', '2023-09-28 23:50:46'),
(183, 'RW', 'Rwanda', '2023-09-28 23:50:46'),
(184, 'KN', 'Saint Kitts and Nevis', '2023-09-28 23:50:46'),
(185, 'LC', 'Saint Lucia', '2023-09-28 23:50:46'),
(186, 'VC', 'Saint Vincent and the Grenadines', '2023-09-28 23:50:46'),
(187, 'WS', 'Samoa', '2023-09-28 23:50:46'),
(188, 'SM', 'San Marino', '2023-09-28 23:50:46'),
(189, 'ST', 'Sao Tome and Principe', '2023-09-28 23:50:46'),
(190, 'SA', 'Saudi Arabia', '2023-09-28 23:50:46'),
(191, 'SN', 'Senegal', '2023-09-28 23:50:46'),
(192, 'RS', 'Serbia', '2023-09-28 23:50:46'),
(193, 'SC', 'Seychelles', '2023-09-28 23:50:46'),
(194, 'SL', 'Sierra Leone', '2023-09-28 23:50:46'),
(195, 'SG', 'Singapore', '2023-09-28 23:50:46'),
(196, 'SK', 'Slovakia', '2023-09-28 23:50:46'),
(197, 'SI', 'Slovenia', '2023-09-28 23:50:46'),
(198, 'SB', 'Solomon Islands', '2023-09-28 23:50:46'),
(199, 'SO', 'Somalia', '2023-09-28 23:50:46'),
(200, 'ZA', 'South Africa', '2023-09-28 23:50:46'),
(201, 'GS', 'South Georgia South Sandwich Islands', '2023-09-28 23:50:46'),
(202, 'ES', 'Spain', '2023-09-28 23:50:46'),
(203, 'LK', 'Sri Lanka', '2023-09-28 23:50:46'),
(204, 'SH', 'St. Helena', '2023-09-28 23:50:46'),
(205, 'PM', 'St. Pierre and Miquelon', '2023-09-28 23:50:46'),
(206, 'SD', 'Sudan', '2023-09-28 23:50:46'),
(207, 'SR', 'Suriname', '2023-09-28 23:50:46'),
(208, 'SJ', 'Svalbard and Jan Mayen Islands', '2023-09-28 23:50:46'),
(209, 'SZ', 'Swaziland', '2023-09-28 23:50:46'),
(210, 'SE', 'Sweden', '2023-09-28 23:50:46'),
(211, 'CH', 'Switzerland', '2023-09-28 23:50:46'),
(212, 'SY', 'Syrian Arab Republic', '2023-09-28 23:50:46'),
(213, 'TW', 'Taiwan', '2023-09-28 23:50:46'),
(214, 'TJ', 'Tajikistan', '2023-09-28 23:50:46'),
(215, 'TZ', 'Tanzania, United Republic of', '2023-09-28 23:50:46'),
(216, 'TH', 'Thailand', '2023-09-28 23:50:46'),
(217, 'TG', 'Togo', '2023-09-28 23:50:46'),
(218, 'TK', 'Tokelau', '2023-09-28 23:50:46'),
(219, 'TO', 'Tonga', '2023-09-28 23:50:46'),
(220, 'TT', 'Trinidad and Tobago', '2023-09-28 23:50:46'),
(221, 'TN', 'Tunisia', '2023-09-28 23:50:46'),
(222, 'TR', 'Turkey', '2023-09-28 23:50:46'),
(223, 'TM', 'Turkmenistan', '2023-09-28 23:50:46'),
(224, 'TC', 'Turks and Caicos Islands', '2023-09-28 23:50:46'),
(225, 'TV', 'Tuvalu', '2023-09-28 23:50:46'),
(226, 'UG', 'Uganda', '2023-09-28 23:50:46'),
(227, 'UA', 'Ukraine', '2023-09-28 23:50:46'),
(228, 'AE', 'United Arab Emirates', '2023-09-28 23:50:46'),
(229, 'GB', 'United Kingdom', '2023-09-28 23:50:46'),
(230, 'US', 'United States', '2023-09-28 23:50:46'),
(231, 'UM', 'United States minor outlying islands', '2023-09-28 23:50:46'),
(232, 'UY', 'Uruguay', '2023-09-28 23:50:46'),
(233, 'UZ', 'Uzbekistan', '2023-09-28 23:50:46'),
(234, 'VU', 'Vanuatu', '2023-09-28 23:50:46'),
(235, 'VA', 'Vatican City State', '2023-09-28 23:50:46'),
(236, 'VE', 'Venezuela', '2023-09-28 23:50:46'),
(237, 'VN', 'Vietnam', '2023-09-28 23:50:46'),
(238, 'VG', 'Virgin Islands (British)', '2023-09-28 23:50:46'),
(239, 'VI', 'Virgin Islands (U.S.)', '2023-09-28 23:50:46'),
(240, 'WF', 'Wallis and Futuna Islands', '2023-09-28 23:50:46'),
(241, 'EH', 'Western Sahara', '2023-09-28 23:50:46'),
(242, 'YE', 'Yemen', '2023-09-28 23:50:46'),
(243, 'ZR', 'Zaire', '2023-09-28 23:50:46'),
(244, 'ZM', 'Zambia', '2023-09-28 23:50:46'),
(245, 'ZW', 'Zimbabwe', '2023-09-28 23:50:46');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `sql_paises`
--
ALTER TABLE `sql_paises`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `sql_paises`
--
ALTER TABLE `sql_paises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
