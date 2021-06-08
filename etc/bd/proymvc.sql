CREATE DATABASE  IF NOT EXISTS `proymvc` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `proymvc`;
-- MariaDB dump 10.17  Distrib 10.4.14-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: proymvc
-- ------------------------------------------------------
-- Server version	10.4.14-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `contents`
--

DROP TABLE IF EXISTS `contents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contents` (
  `idcontents` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` longtext CHARACTER SET utf8 DEFAULT NULL,
  `modify_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modify_date` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idcontents`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `games`
--

DROP TABLE IF EXISTS `games`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `games` (
  `idgame` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cover` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` decimal(4,2) DEFAULT NULL,
  `valoration` decimal(3,2) DEFAULT NULL,
  `company` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idgame`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


LOCK TABLES `contents` WRITE;
/*!40000 ALTER TABLE `contents` DISABLE KEYS */;
INSERT INTO `contents` VALUES (1,'introduction','<div id=\"bienvenida\" class=\"img-fluid\" alt=\"Responsive image\"><div class=\"row\"><div class=\"offset-md-3 col-md-6\"><img src=\"./public/assets/img/tienda.jpg\" class=\"rounded mx-auto d-block\" style=\"width: 600px; height: 450px\" alt=\"imagen de la tienda\"/><p class=\"lead\">Aquí podrás consultar todos los juegos de diferentes consolas y generaciones disponibles. Podrás ver sus detalles y elegir el que más te guste.</p></div></div></div>','admin','admin');
/*!40000 ALTER TABLE `contents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `games`
--

LOCK TABLES `games` WRITE;
/*!40000 ALTER TABLE `games` DISABLE KEYS */;
INSERT INTO `games` VALUES (1,'Fifa 21','Un juego que saca lo peor de la gente','https://los40es00.epimg.net/los40/imagenes/2020/07/23/videojuegos/1595516362_784660_1595516856_noticia_normal.jpg',40.00,7.30,'EA Sports'),(3,'Far Cry 4','Un juego de tiros','https://i.blogs.es/4f8b0f/230614-far-cry-4-tlqns/450_1000.jpg',45.95,8.70,'Ubisoft'),(4,'Red Dead Redemption 2','Un juego western de vaqueros','https://media.vandal.net/m/42942/red-dead-redemption-2-20185218474_1.jpg',69.95,9.60,'Rockstar'),(5,'GTA 5','Un juego de mundo abierto en el que se puede hacer de todo','https://media.vandal.net/i/1200x630/15192/grand-theft-auto-v-201342141558_1.jpg',19.95,9.30,'Rockstar'),(8,'Far Cry 5','Intercambio de tiros entre una secta y tu','https://s2.gaming-cdn.com/images/products/2680/orig/far-cry-5-gold-edition-cover.jpg',30.00,7.90,'Ubisoft');
/*!40000 ALTER TABLE `games` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'patxi@gmail.com','patxi@gmail.com'),(3,'javi@gmail.com','javi@gmail.com'),(4,'carla@gmail.com','carla@gmail.com'),(5,'ander@gmail.com','ander@gmail.com');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-08 19:26:12
