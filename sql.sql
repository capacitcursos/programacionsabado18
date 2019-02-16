-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.17-log - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para programacionsabado18
CREATE DATABASE IF NOT EXISTS `programacionsabado18` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `programacionsabado18`;

-- Volcando estructura para tabla programacionsabado18.cursos
CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `descripcion_corta` mediumtext NOT NULL,
  `descripcion_detallada` longtext,
  `imagen` varchar(255) NOT NULL,
  `precio` varchar(80) NOT NULL,
  `duracion` varchar(80) NOT NULL,
  `dias` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla programacionsabado18.cursos: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
REPLACE INTO `cursos` (`id`, `nombre`, `descripcion_corta`, `descripcion_detallada`, `imagen`, `precio`, `duracion`, `dias`) VALUES
	(1, ' gfgfgf', 'gfgfg', 'fgfgf', 'fgfgf', 'fgfg', 'fgfgf', 'fgfg');
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;

-- Volcando estructura para tabla programacionsabado18.mensajes
CREATE TABLE IF NOT EXISTS `mensajes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `asunto` varchar(80) NOT NULL,
  `telefono` varchar(80) NOT NULL,
  `mensaje` mediumtext NOT NULL,
  `fecha_add` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla programacionsabado18.mensajes: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `mensajes` DISABLE KEYS */;
REPLACE INTO `mensajes` (`id`, `nombre`, `email`, `asunto`, `telefono`, `mensaje`, `fecha_add`) VALUES
	(1, 'juan', 'jhjhkjhk', 'jhkjhkjh', 'hkjhkjhkj', 'jhkjh', '2019-02-02 08:20:18');
/*!40000 ALTER TABLE `mensajes` ENABLE KEYS */;

-- Volcando estructura para tabla programacionsabado18.parametros
CREATE TABLE IF NOT EXISTS `parametros` (
  `id` int(11) NOT NULL,
  `empresa` varchar(80) NOT NULL,
  `logo` varchar(80) NOT NULL,
  `favicon` varchar(80) NOT NULL,
  `telefono` varchar(80) NOT NULL,
  `whatapp` varchar(80) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `email` varchar(80) NOT NULL,
  `horario` varchar(80) NOT NULL,
  `facebook` varchar(80) NOT NULL,
  `instagram` varchar(80) NOT NULL,
  `twitter` varchar(80) NOT NULL,
  `youtube` varchar(80) NOT NULL,
  `google_maps` mediumtext NOT NULL,
  `descripcion` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla programacionsabado18.parametros: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `parametros` DISABLE KEYS */;
/*!40000 ALTER TABLE `parametros` ENABLE KEYS */;

-- Volcando estructura para tabla programacionsabado18.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(80) NOT NULL,
  `avatar` varchar(80) DEFAULT NULL,
  `activo` varchar(5) NOT NULL,
  `fecha_add` datetime NOT NULL,
  `fecha_update` datetime NOT NULL,
  `idcategoria` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla programacionsabado18.usuarios: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
REPLACE INTO `usuarios` (`id`, `nombre`, `email`, `password`, `avatar`, `activo`, `fecha_add`, `fecha_update`, `idcategoria`) VALUES
	(1, 'Juan', 'juan@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'avatar.jpg', 'S', '2019-01-26 08:09:21', '2019-01-26 00:00:00', 50),
	(2, 'Jose', 'jose@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'avatar.jpg', 'S', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
