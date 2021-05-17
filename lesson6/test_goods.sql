-- MySQL dump 10.13  Distrib 8.0.18, for macos10.14 (x86_64)
--
-- Host: localhost    Database: test
-- ------------------------------------------------------
-- Server version	5.7.32

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
-- Table structure for table `goods`
--

DROP TABLE IF EXISTS `goods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `title` tinytext,
  `url` tinytext,
  `text` text,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goods`
--

LOCK TABLES `goods` WRITE;
/*!40000 ALTER TABLE `goods` DISABLE KEYS */;
INSERT INTO `goods` VALUES (1,'Диван-книжка','sofa_1.jpg','Диваны с наполнителем из пенополиуретана отличаются удобством и эстетичным внешним видом. ППУ – современный эластичный материал, способный сохранять форму, поэтому нагрузка от веса человека распределяется равномерно. Пенополиуретан практичен и способен прослужить в течение многих лет, кроме того, такой материал безопасен и экологичен. ППУ пропускает воздух, поэтому гигиеничен – его легко проветрить и просушить.',11000),(2,'Диван Фиджи','sofa_2.jpg','Каркас из деревянного массива обеспечивает конструкции устойчивость и долговечность. Поэтому использовать диван в качестве кровати можно ежедневно на протяжении многих лет. При изготовлении деревянных каркасов не используется пресскартон и прочие производные материалы. Такая мебель не боится температурных перепадов. К тому же каркасы из массива отличаются экологичностью.',13000),(3,'Диван Кармен','sofa_3.jpg','Искусственная кожа способна стать удачной альтернативой для обтяжки мебели, так как отличается доступной ценой и прекрасным внешним видом. Визуально такой материал часто нельзя отличить от натуральной кожи, а современные технологии позволяют придать ему любую фактуру и цвет. Искусственная кожа прочна, обладает эластичностью и хорошо сохраняет форму, а также неприхотлива в уходе.',17000);
/*!40000 ALTER TABLE `goods` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-17 11:42:08
