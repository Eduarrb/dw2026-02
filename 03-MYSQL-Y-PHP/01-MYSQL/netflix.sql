CREATE DATABASE  IF NOT EXISTS `netflix` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `netflix`;
-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: localhost    Database: netflix
-- ------------------------------------------------------
-- Server version	8.0.38

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `actores`
--

DROP TABLE IF EXISTS `actores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `actores` (
  `act_id` int unsigned NOT NULL AUTO_INCREMENT,
  `act_nombres` varchar(50) NOT NULL,
  `act_apellidos` varchar(50) NOT NULL,
  PRIMARY KEY (`act_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actores`
--

LOCK TABLES `actores` WRITE;
/*!40000 ALTER TABLE `actores` DISABLE KEYS */;
INSERT INTO `actores` VALUES (1,'Al','Pacino'),(2,'Marlon','Brandon'),(3,'Leonardo','DiCaprio'),(4,'Kate','Winslet'),(5,'Chris','Evans'),(6,'Robert','Downey Jr.'),(7,'Christian','Bale'),(8,'Morgan','Freeman'),(9,'Carrie-Anne','Moss'),(10,'keanu','Reeves'),(11,'Tom','Hanks'),(12,'Emma','Watson'),(13,'Denzel','Washington'),(14,'Natalie','Portman'),(15,'Brad','Pitt'),(16,'Angelina','Jolie'),(17,'Johnny','Depp'),(18,'Scarlett','Johansson'),(19,'Will','Smith'),(20,'Charlize','Theron');
/*!40000 ALTER TABLE `actores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directores`
--

DROP TABLE IF EXISTS `directores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `directores` (
  `dire_id` int unsigned NOT NULL AUTO_INCREMENT,
  `dire_nombres` varchar(50) NOT NULL,
  `dire_apellidos` varchar(50) NOT NULL,
  PRIMARY KEY (`dire_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directores`
--

LOCK TABLES `directores` WRITE;
/*!40000 ALTER TABLE `directores` DISABLE KEYS */;
INSERT INTO `directores` VALUES (1,'Fransis','Ford Coppola'),(3,'Joe','Russo'),(4,'Christopher','Nolan'),(5,'Ridley','Scott');
/*!40000 ALTER TABLE `directores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `peliculas`
--

DROP TABLE IF EXISTS `peliculas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `peliculas` (
  `peli_id` int unsigned NOT NULL AUTO_INCREMENT,
  `peli_dire_id` int unsigned DEFAULT NULL,
  `peli_nombre` varchar(50) NOT NULL,
  `peli_genero` varchar(50) NOT NULL,
  `peli_estreno` date NOT NULL,
  `peli_restricciones` varchar(10) NOT NULL,
  PRIMARY KEY (`peli_id`),
  KEY `fk_direId` (`peli_dire_id`),
  CONSTRAINT `fk_direId` FOREIGN KEY (`peli_dire_id`) REFERENCES `directores` (`dire_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peliculas`
--

LOCK TABLES `peliculas` WRITE;
/*!40000 ALTER TABLE `peliculas` DISABLE KEYS */;
INSERT INTO `peliculas` VALUES (1,1,'El Padrino','Drama','1972-03-24','R'),(3,NULL,'Jurassic Park','Aventura','1993-06-11','PG-13'),(4,3,'Avengers: Endgame','Acción','2019-04-26','PG-13'),(5,4,'Inception','Ciencia Ficción','2010-07-16','PG-13'),(6,4,'The Dark Knight','Acción','2008-07-18','PG-13'),(7,NULL,'Forrest Gump','Drama','1994-07-06','PG-13'),(8,NULL,'The Matrix','Ciencia Ficción','1999-03-31','R'),(9,5,'Gladiator','Acción','2000-05-05','R'),(11,NULL,'The Lion King','Animación','1994-06-15','G');
/*!40000 ALTER TABLE `peliculas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personajes`
--

DROP TABLE IF EXISTS `personajes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personajes` (
  `per_peli_id` int unsigned NOT NULL,
  `per_act_id` int unsigned NOT NULL,
  `per_nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personajes`
--

LOCK TABLES `personajes` WRITE;
/*!40000 ALTER TABLE `personajes` DISABLE KEYS */;
INSERT INTO `personajes` VALUES (1,1,'Michael Corleone'),(1,2,'Vito Corleone'),(2,3,'Jack Dawson'),(2,4,'Rose DeWitt Bukater'),(4,5,'Steve Rogers / Captain America'),(4,6,'Tony Stark / Iron Man'),(6,7,'Bruce Wayne / Batman'),(6,8,'Lucius Fox'),(8,9,'Trinity'),(8,10,'Neo');
/*!40000 ALTER TABLE `personajes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-09-16 20:48:58
