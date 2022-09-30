/*
SQLyog Ultimate v12.3.2 (64 bit)
MySQL - 5.7.27-log : Database - db_usuarios
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_usuarios` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_usuarios`;

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `ci` int(10) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `direccion` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `usuario` */

insert  into `usuario`(`id`,`nombre`,`apellido`,`ci`,`telefono`,`direccion`) values 
(1,'Juan','Perez',123412,'202098','Asuncion zona centro'),
(2,'Maria','Caceres',3234542,'071203040','Plaza la amistad ciudad del este'),
(3,'Jose','Ramirez',4331589,'0984678900','Avenida los laureles, Asuncion'),
(4,'Martin','Perez',14521389,'09845781231','BARRIO LAS MERCEDES'),
(6,'Kiara','Baez',44213132,'071291023','CIUDAD DEL ESTE');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
