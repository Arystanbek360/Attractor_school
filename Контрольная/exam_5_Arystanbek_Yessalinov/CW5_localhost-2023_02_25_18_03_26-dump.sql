-- MySQL dump 10.13  Distrib 8.0.32, for macos13 (arm64)
--
-- Host: 127.0.0.1    Database: CW5
-- ------------------------------------------------------
-- Server version	8.0.32

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `actions`
--

DROP TABLE IF EXISTS `actions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `actions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `product_id` int NOT NULL,
  `partners_id` int DEFAULT NULL,
  `storage_id` int NOT NULL,
  `move_id` int NOT NULL,
  `qty` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `From_storage_id` (`storage_id`),
  KEY `move_id` (`move_id`),
  KEY `product_id` (`product_id`),
  KEY `partners_id` (`partners_id`),
  CONSTRAINT `From_storage_id` FOREIGN KEY (`storage_id`) REFERENCES `storages` (`id`),
  CONSTRAINT `move_id` FOREIGN KEY (`move_id`) REFERENCES `moves` (`id`),
  CONSTRAINT `partners_id` FOREIGN KEY (`partners_id`) REFERENCES `partners` (`id`),
  CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actions`
--

LOCK TABLES `actions` WRITE;
/*!40000 ALTER TABLE `actions` DISABLE KEYS */;
INSERT INTO `actions` VALUES (1,'2021-01-21 00:00:00',1,2,3,1,3),(2,'2021-07-21 00:00:00',1,2,3,1,45),(3,'2021-11-21 00:00:00',1,2,3,1,4),(4,'2023-11-21 00:00:00',1,2,6,1,5),(5,'2023-11-21 00:00:00',2,2,2,1,33),(6,'2022-02-19 00:00:00',2,2,2,1,68),(7,'2022-02-19 00:00:00',3,2,2,1,5),(8,'2022-02-19 00:00:00',5,2,2,1,55),(9,'2022-03-16 00:00:00',5,2,2,1,20),(10,'2022-07-16 00:00:00',12,2,5,1,42),(11,'2022-07-16 00:00:00',14,4,3,1,5),(12,'2022-07-16 00:00:00',18,4,1,1,55),(13,'2022-07-16 00:00:00',20,1,6,1,100),(14,'2022-07-16 00:00:00',40,3,2,1,5),(15,'2022-07-16 00:00:00',31,3,7,1,92),(16,'2022-09-02 00:00:00',30,2,7,1,4),(17,'2022-09-02 00:00:00',14,4,2,1,5),(18,'2022-09-02 00:00:00',28,4,4,1,30),(19,'2022-09-02 00:00:00',20,1,6,1,5),(20,'2022-09-02 00:00:00',40,3,6,1,21),(21,'2022-09-02 00:00:00',24,3,7,1,98),(22,'2023-11-05 00:00:00',30,2,7,2,1),(23,'2023-11-05 00:00:00',14,4,2,2,4),(24,'2023-11-05 00:00:00',28,4,4,2,8),(25,'2023-11-05 00:00:00',20,1,6,2,10),(26,'2023-11-05 00:00:00',40,3,6,2,3),(27,'2023-11-05 00:00:00',24,3,7,2,5),(52,'2021-11-05 00:00:00',24,NULL,4,3,44),(53,'2021-11-05 00:00:00',13,NULL,6,3,25),(54,'2021-11-05 00:00:00',44,NULL,2,3,39),(55,'2021-11-05 00:00:00',23,NULL,6,3,4),(56,'2021-11-05 00:00:00',11,NULL,5,3,9),(57,'2021-11-05 00:00:00',15,NULL,6,3,22),(58,'2021-11-05 00:00:00',24,NULL,7,4,22),(59,'2021-11-05 00:00:00',13,NULL,7,4,9),(60,'2021-11-05 00:00:00',44,NULL,7,4,4),(61,'2021-11-05 00:00:00',23,NULL,7,4,38),(62,'2021-11-05 00:00:00',11,NULL,7,4,25),(63,'2021-11-05 00:00:00',15,NULL,7,4,44),(64,'2023-02-25 14:48:46',45,3,3,1,90),(65,'2022-09-13 00:00:00',14,1,4,2,15),(66,'2022-10-13 00:00:00',14,3,4,2,15),(67,'2022-10-13 00:00:00',10,3,4,2,2),(68,'2022-10-13 00:00:00',1,3,2,2,10),(69,'2022-10-13 00:00:00',1,3,2,1,10),(70,'2022-10-13 00:00:00',3,3,2,1,30),(71,'2022-10-13 00:00:00',3,3,2,1,30),(72,'2022-10-13 00:00:00',1,3,2,1,30),(73,'2022-10-13 00:00:00',1,3,2,1,4),(74,'2022-10-13 00:00:00',1,4,2,1,4),(75,'2020-10-13 00:00:00',10,2,2,2,4),(76,'2020-10-13 00:00:00',12,2,2,2,4),(77,'2023-10-13 00:00:00',12,2,2,2,4);
/*!40000 ALTER TABLE `actions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `brands` (
  `id` int NOT NULL AUTO_INCREMENT,
  `brand` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` VALUES (1,'apple'),(2,'sony'),(3,'samsung'),(4,'vestel'),(5,'asus');
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'phone'),(2,'TV'),(3,'laptop'),(4,'fridge'),(5,'tablet');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `moves`
--

DROP TABLE IF EXISTS `moves`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `moves` (
  `id` int NOT NULL AUTO_INCREMENT,
  `action_type` varchar(45) NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `moves`
--

LOCK TABLES `moves` WRITE;
/*!40000 ALTER TABLE `moves` DISABLE KEYS */;
INSERT INTO `moves` VALUES (1,'coming','Приход от контрагентов'),(2,'leave','выдача контрагенту'),(3,'moving_from','перемещение со склада'),(4,'moving_to','перемещение на склад');
/*!40000 ALTER TABLE `moves` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partners`
--

DROP TABLE IF EXISTS `partners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `partners` (
  `id` int NOT NULL AUTO_INCREMENT,
  `counterparty` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partners`
--

LOCK TABLES `partners` WRITE;
/*!40000 ALTER TABLE `partners` DISABLE KEYS */;
INSERT INTO `partners` VALUES (1,'vasa_delivery'),(2,'petya_delivery'),(3,'IDTV'),(4,'DHL');
/*!40000 ALTER TABLE `partners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product` varchar(45) NOT NULL,
  `category_id` int NOT NULL,
  `brand_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `brand_id` (`brand_id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `brand_id` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  CONSTRAINT `category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'iphone 14 Max',1,1),(2,'iphone 13',1,1),(3,'iphone 14',1,1),(4,'iphone 12',1,1),(5,'iphone 11',1,1),(6,'iphone 10',1,1),(7,'f676fdtx',4,NULL),(8,'samsung galaxy s9',1,3),(9,'samsung galaxy s10',1,3),(10,'samsung galaxy s11',1,3),(11,'samsung galaxy s12',1,3),(12,'samsung galaxy s13',1,3),(13,'samsung galaxy s14',1,3),(14,'oppo phone',1,NULL),(15,'z421',1,NULL),(16,'phone god',1,NULL),(17,'Sony b21',2,2),(18,'Sony 4k',2,2),(19,'s88 ultra ',2,3),(20,'s88 ultra wide',2,3),(21,'s88 ultra wide 4k',2,3),(22,'big vision',2,4),(23,'4k TV',2,4),(24,'2k TV',2,4),(25,'macbook air 10',3,1),(26,'macbook air 12',3,1),(27,'macbook pro 13',3,1),(28,'macbook pro 14',3,1),(29,'macbook pro 16',3,1),(30,'sonybook 2',3,2),(31,'sonybook 5',3,2),(32,'ultra gaming',3,2),(33,'ultrabook',3,3),(34,'tuf gaming fx500',3,5),(35,'tuf gaming fx504',3,5),(36,'tuf gaming fx506',3,5),(37,'tuf gaming dt506',3,5),(38,'rog dt504',3,5),(39,'rog dt506',3,5),(40,'rog dt508',3,5),(41,'zen 8',3,5),(42,'winter 388',4,3),(43,'winter 322',4,3),(44,'fridge',4,3),(45,'h356sq',3,NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `storages`
--

DROP TABLE IF EXISTS `storages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `storages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `storage_name` varchar(45) NOT NULL,
  `partner_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `partner_id` (`partner_id`),
  CONSTRAINT `partner_id` FOREIGN KEY (`partner_id`) REFERENCES `partners` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `storages`
--

LOCK TABLES `storages` WRITE;
/*!40000 ALTER TABLE `storages` DISABLE KEYS */;
INSERT INTO `storages` VALUES (1,'first',1),(2,'second',1),(3,'third',1),(4,'fourth',2),(5,'fifth',3),(6,'sixth',4),(7,'seventh',4);
/*!40000 ALTER TABLE `storages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `task1`
--

DROP TABLE IF EXISTS `task1`;
/*!50001 DROP VIEW IF EXISTS `task1`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `task1` AS SELECT 
 1 AS `product`,
 1 AS `qty`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `task10`
--

DROP TABLE IF EXISTS `task10`;
/*!50001 DROP VIEW IF EXISTS `task10`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `task10` AS SELECT 
 1 AS `counterparty`,
 1 AS `qty`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `task11`
--

DROP TABLE IF EXISTS `task11`;
/*!50001 DROP VIEW IF EXISTS `task11`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `task11` AS SELECT 
 1 AS `product`,
 1 AS `qty`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `task12`
--

DROP TABLE IF EXISTS `task12`;
/*!50001 DROP VIEW IF EXISTS `task12`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `task12` AS SELECT 
 1 AS `product`,
 1 AS `qty`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `task2`
--

DROP TABLE IF EXISTS `task2`;
/*!50001 DROP VIEW IF EXISTS `task2`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `task2` AS SELECT 
 1 AS `product`,
 1 AS `qty`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `task3`
--

DROP TABLE IF EXISTS `task3`;
/*!50001 DROP VIEW IF EXISTS `task3`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `task3` AS SELECT 
 1 AS `category`,
 1 AS `qty`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `task4`
--

DROP TABLE IF EXISTS `task4`;
/*!50001 DROP VIEW IF EXISTS `task4`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `task4` AS SELECT 
 1 AS `brand`,
 1 AS `qty`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `task5`
--

DROP TABLE IF EXISTS `task5`;
/*!50001 DROP VIEW IF EXISTS `task5`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `task5` AS SELECT 
 1 AS `product`,
 1 AS `sum(qty)`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `task6`
--

DROP TABLE IF EXISTS `task6`;
/*!50001 DROP VIEW IF EXISTS `task6`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `task6` AS SELECT 
 1 AS `product`,
 1 AS `qty`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `task7`
--

DROP TABLE IF EXISTS `task7`;
/*!50001 DROP VIEW IF EXISTS `task7`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `task7` AS SELECT 
 1 AS `product`,
 1 AS `qty`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `task8`
--

DROP TABLE IF EXISTS `task8`;
/*!50001 DROP VIEW IF EXISTS `task8`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `task8` AS SELECT 
 1 AS `product`,
 1 AS `qty`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `task9`
--

DROP TABLE IF EXISTS `task9`;
/*!50001 DROP VIEW IF EXISTS `task9`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `task9` AS SELECT 
 1 AS `counterparty`,
 1 AS `qty`*/;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `task1`
--

/*!50001 DROP VIEW IF EXISTS `task1`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `task1` AS select `p`.`product` AS `product`,sum(`a`.`qty`) AS `qty` from ((`actions` `a` join `products` `p` on((`a`.`product_id` = `p`.`id`))) join `storages` `s` on((`a`.`storage_id` = `s`.`id`))) where ((`a`.`move_id` = 1) and (`s`.`storage_name` = 'seventh') and (year(`a`.`date`) between 2020 and 2025)) group by `p`.`product` order by `p`.`product` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `task10`
--

/*!50001 DROP VIEW IF EXISTS `task10`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `task10` AS select `p2`.`counterparty` AS `counterparty`,sum(`a`.`qty`) AS `qty` from ((`actions` `a` join `products` `p` on((`a`.`product_id` = `p`.`id`))) join `partners` `p2` on((`a`.`partners_id` = `p2`.`id`))) where ((`a`.`move_id` = 2) and (`p`.`product` = 'oppo phone') and (year(`a`.`date`) between 2020 and 2025)) group by `p2`.`counterparty` order by `p2`.`counterparty` desc */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `task11`
--

/*!50001 DROP VIEW IF EXISTS `task11`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `task11` AS select `p`.`product` AS `product`,sum(`a`.`qty`) AS `qty` from ((`actions` `a` join `products` `p` on((`a`.`product_id` = `p`.`id`))) join `storages` `s` on((`a`.`storage_id` = `s`.`id`))) where ((`a`.`move_id` = 4) and (`s`.`storage_name` = 'seventh') and (year(`a`.`date`) between 2020 and 2025)) group by `p`.`product` order by `p`.`product` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `task12`
--

/*!50001 DROP VIEW IF EXISTS `task12`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `task12` AS select `p`.`product` AS `product`,sum(`a`.`qty`) AS `qty` from ((`actions` `a` join `products` `p` on((`a`.`product_id` = `p`.`id`))) join `storages` `s` on((`a`.`storage_id` = `s`.`id`))) where ((`a`.`move_id` = 3) and (`s`.`storage_name` = 'sixth') and (year(`a`.`date`) between 2020 and 2025)) group by `p`.`product` order by `p`.`product` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `task2`
--

/*!50001 DROP VIEW IF EXISTS `task2`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `task2` AS select `p`.`product` AS `product`,sum(`a`.`qty`) AS `qty` from ((`actions` `a` join `products` `p` on((`a`.`product_id` = `p`.`id`))) join `storages` `s` on((`a`.`storage_id` = `s`.`id`))) where ((`a`.`move_id` = 2) and (`s`.`storage_name` = 'seventh') and (year(`a`.`date`) between 2020 and 2025)) group by `p`.`product` order by `p`.`product` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `task3`
--

/*!50001 DROP VIEW IF EXISTS `task3`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `task3` AS select `c`.`category` AS `category`,sum(`a`.`qty`) AS `qty` from ((`actions` `a` join `products` `p` on((`a`.`product_id` = `p`.`id`))) join `categories` `c` on((`p`.`category_id` = `c`.`id`))) where ((`a`.`move_id` = 1) and (`a`.`storage_id` = 3) and (year(`a`.`date`) between 2020 and 2025)) group by `c`.`category` order by `c`.`category` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `task4`
--

/*!50001 DROP VIEW IF EXISTS `task4`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `task4` AS select ifnull(`b`.`brand`,'Без бренда') AS `brand`,sum(`a`.`qty`) AS `qty` from ((`actions` `a` join `products` `p` on((`a`.`product_id` = `p`.`id`))) left join `brands` `b` on((`p`.`brand_id` = `b`.`id`))) where ((`a`.`move_id` = 1) and (`a`.`storage_id` = 3) and (year(`a`.`date`) between 2020 and 2025)) group by `b`.`brand` order by `b`.`brand` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `task5`
--

/*!50001 DROP VIEW IF EXISTS `task5`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `task5` AS select `p`.`product` AS `product`,sum(`a`.`qty`) AS `sum(qty)` from (`actions` `a` join `products` `p` on((`a`.`product_id` = `p`.`id`))) where ((`a`.`move_id` = 1) or ((0 <> 4) and (`a`.`storage_id` = 3) and (cast(`a`.`date` as date) < '2023-09-20'))) group by `p`.`product` order by `p`.`product` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `task6`
--

/*!50001 DROP VIEW IF EXISTS `task6`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `task6` AS select `p`.`product` AS `product`,sum(`a`.`qty`) AS `qty` from (`actions` `a` join `products` `p` on((`a`.`product_id` = `p`.`id`))) where ((`a`.`move_id` = 1) and (`a`.`partners_id` = 2) and (year(`a`.`date`) between 2020 and 2025)) group by `p`.`product` order by `p`.`product` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `task7`
--

/*!50001 DROP VIEW IF EXISTS `task7`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `task7` AS select `p`.`product` AS `product`,sum(`a`.`qty`) AS `qty` from (`actions` `a` join `products` `p` on((`a`.`product_id` = `p`.`id`))) where ((`a`.`move_id` = 1) and (`a`.`storage_id` = 2) and (`a`.`partners_id` = 2) and (year(`a`.`date`) between 2020 and 2025)) group by `p`.`product` order by `p`.`product` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `task8`
--

/*!50001 DROP VIEW IF EXISTS `task8`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `task8` AS select `p`.`product` AS `product`,sum(`a`.`qty`) AS `qty` from (`actions` `a` join `products` `p` on((`a`.`product_id` = `p`.`id`))) where ((`a`.`move_id` = 2) and (`a`.`partners_id` = 2) and (year(`a`.`date`) between 2020 and 2025)) group by `p`.`product` order by `p`.`product` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `task9`
--

/*!50001 DROP VIEW IF EXISTS `task9`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `task9` AS select `p2`.`counterparty` AS `counterparty`,sum(`a`.`qty`) AS `qty` from ((`actions` `a` join `products` `p` on((`a`.`product_id` = `p`.`id`))) join `partners` `p2` on((`a`.`partners_id` = `p2`.`id`))) where ((`a`.`move_id` = 1) and (`p`.`product` = 'iphone 14 Max') and (year(`a`.`date`) between 2020 and 2025)) group by `p2`.`counterparty` order by `p2`.`counterparty` desc */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-02-25 18:03:26
