-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-09-2022 a las 07:44:46
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
-- Base de datos: `baul_crud`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_delete` (`rid` INT(5))   BEGIN
delete from tblusers where id=rid;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insert` (`fname` VARCHAR(120), `lname` VARCHAR(120), `emailid` VARCHAR(150), `cntnumber` BIGINT(12), `address` VARCHAR(255))   BEGIN
insert into tblusers(FirstName,LastName,EmailId,ContactNumber,Address) value(fname,lname,emailid,cntnumber,address);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_read` ()   BEGIN
select * from tblusers;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_readarow` (IN `rid` INT(5))   BEGIN
select * from tblusers where id=rid;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update` (`fname` VARCHAR(120), `lname` VARCHAR(120), `emailid` VARCHAR(150), `cntnumber` BIGINT(12), `address` VARCHAR(255), `rid` INT(5))   BEGIN
update tblusers set FirstName=fname,LastName=lname,EmailId=emailid,ContactNumber=cntnumber,Address=address where id=rid;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(150) NOT NULL,
  `LastName` varchar(150) NOT NULL,
  `EmailId` varchar(120) NOT NULL,
  `ContactNumber` char(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblusers`
--

INSERT INTO `tblusers` (`id`, `FirstName`, `LastName`, `EmailId`, `ContactNumber`, `Address`, `PostingDate`) VALUES
(132, 'Ana ', 'Carrasco', 'ana@gmail.com', '1111111111', 'Santiago', '2022-12-08 16:05:29'),
(135, 'Maria', 'Zulem', 'maria@gmail.com', '1234567890', 'Santiago, Chile', '2022-12-01 16:58:36'),
(136, 'Jorge', 'Bustos', 'jorge@gmail.com', '1236547890', 'Santiago, Chile', '2022-12-06 16:59:49'),
(137, 'Mario', 'Rubio', 'mario@gmail.com', '242425', 'Santiago, Chile', '2022-09-12 05:41:42');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
