-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: retro
-- ------------------------------------------------------
-- Server version	8.0.36

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
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produtos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `descricao` varchar(90) NOT NULL,
  `imagem` varchar(80) NOT NULL,
  `preco` decimal(5,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (1,'Açaí','Açaí Copo 500ml','Iresistível copo de açaí + 3 complementos de sua escolha','acai-copo.jpg',25.00),(2,'Açaí','Açaí Copo 300ml','Iresistível copo de açaí + 3 complementos de sua escolha','acai-copo2.jpg',21.00),(3,'Açaí','Açaí Tigela 400ml','Deliciosa tigela de açaí + 3 complementos de sua escolha','tigela-acai.jpg',23.00),(4,'Açaí','Barca de Açaí 1,2L','Qual o tamanho da sua vontade? A barca de açaí com 8 ingredientes com certeza vai suprí-la','barca-acai.jpg',70.00),(5,'Sorvete','Casquinha','Clássica e irresistível casquinha com 3 opções de sabores','casquinha.jpg',4.00),(6,'Sorvete','Milshake Tadicional 500ml','Delicioso milkshake tradicional. São mais de 10 opções de sabores','milkshake2.jpg',15.00),(7,'Sorvete','Milshake Especial 500ml','Delicioso milkshake. São mais de 10 opções de sabores especiais','milkshake.jpg',17.00),(13,'Sorvete','Sundae','Maravilhoso sundae com cobertura, amendoim e wafer','sundae.jpg',10.00);
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'retro'
--

--
-- Dumping routines for database 'retro'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-02-11 20:56:58
