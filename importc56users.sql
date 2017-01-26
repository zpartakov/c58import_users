-- MySQL dump 10.13  Distrib 5.5.52, for debian-linux-gnu (x86_64)
--
-- Host: ddkg.myd.infomaniak.com    Database: ddkg_c58
-- ------------------------------------------------------
-- Server version	5.6.33-log

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
-- Table structure for table `importc56users`
--

DROP TABLE IF EXISTS `importc56users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `importc56users` (
  `Nom_d_utilisateur` varchar(255) NOT NULL,
  `Adresse_electronique` varchar(255) NOT NULL,
  `Enregistre` varchar(255) NOT NULL,
  `Nb_de_connexions` varchar(255) NOT NULL,
  `messages_prives` varchar(255) DEFAULT NULL,
  `notification` varchar(255) DEFAULT NULL,
  `Nom_prenom` varchar(255) DEFAULT NULL,
  `Nom` varchar(255) DEFAULT NULL,
  `Prenom` varchar(255) DEFAULT NULL,
  `Adresse` varchar(255) DEFAULT NULL,
  `Code_postal` varchar(255) DEFAULT NULL,
  `Ville_ou_commune` varchar(255) DEFAULT NULL,
  `Pays` varchar(255) DEFAULT NULL,
  `Code_porte_entree` varchar(255) DEFAULT NULL,
  `Telephone` varchar(255) DEFAULT NULL,
  `Natel` varchar(255) DEFAULT NULL,
  `Numero_du_point_de_distribution` varchar(255) DEFAULT NULL,
  `Responsable_PDD` varchar(255) DEFAULT NULL,
  `Taille_de_la_part` varchar(255) DEFAULT NULL,
  `Date_entree` varchar(255) DEFAULT NULL,
  `No_identifiant_dolibarr` varchar(255) DEFAULT NULL,
  `pwd` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1824 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `importc56users`
--

LOCK TABLES `importc56users` WRITE;
/*!40000 ALTER TABLE `importc56users` DISABLE KEYS */;
/*!40000 ALTER TABLE `importc56users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-26 13:44:53
