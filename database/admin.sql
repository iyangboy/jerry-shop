-- MariaDB dump 10.17  Distrib 10.4.6-MariaDB, for osx10.15 (x86_64)
--
-- Host: 127.0.0.1    Database: jerry-shop
-- ------------------------------------------------------
-- Server version	10.4.6-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `admin_menu`
--

LOCK TABLES `admin_menu` WRITE;
/*!40000 ALTER TABLE `admin_menu` DISABLE KEYS */;
INSERT INTO `admin_menu` VALUES (1,0,1,'首页','fa-bar-chart','/',NULL,NULL,'2019-11-12 04:18:53'),(2,0,9,'系统管理','fa-tasks',NULL,NULL,NULL,'2019-12-25 08:01:11'),(3,2,10,'管理员','fa-users','auth/users',NULL,NULL,'2019-12-25 08:01:11'),(4,2,11,'角色','fa-user','auth/roles',NULL,NULL,'2019-12-25 08:01:11'),(5,2,12,'权限','fa-ban','auth/permissions',NULL,NULL,'2019-12-25 08:01:11'),(6,2,13,'菜单','fa-bars','auth/menu',NULL,NULL,'2019-12-25 08:01:11'),(7,2,14,'操作日志','fa-history','auth/logs',NULL,NULL,'2019-12-25 08:01:11'),(8,0,2,'用户管理','fa-users','/',NULL,'2019-11-12 04:42:28','2019-11-12 04:43:23'),(9,8,3,'用户列表','fa-users','/users',NULL,'2019-11-12 04:43:14','2019-11-12 04:43:23'),(10,0,5,'商品管理','fa-cubes','/',NULL,'2019-11-12 09:05:20','2019-12-25 08:01:11'),(11,10,6,'商品列表','fa-cubes','/products',NULL,'2019-11-12 09:05:49','2019-12-25 08:01:11'),(12,0,7,'订单管理','fa-rmb','/orders',NULL,'2019-12-24 06:58:56','2019-12-25 08:01:11'),(13,0,8,'优惠券管理','fa-tags','/coupon_codes',NULL,'2019-12-24 10:20:49','2019-12-25 08:01:11'),(14,0,4,'商品分类管理','fa-bars','/categories',NULL,'2019-12-25 08:00:23','2019-12-25 08:01:11');
/*!40000 ALTER TABLE `admin_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_permissions`
--

LOCK TABLES `admin_permissions` WRITE;
/*!40000 ALTER TABLE `admin_permissions` DISABLE KEYS */;
INSERT INTO `admin_permissions` VALUES (1,'All permission','*','','*',NULL,NULL),(2,'Dashboard','dashboard','GET','/',NULL,NULL),(3,'Login','auth.login','','/auth/login\r\n/auth/logout',NULL,NULL),(4,'User setting','auth.setting','GET,PUT','/auth/setting',NULL,NULL),(5,'Auth management','auth.management','','/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs',NULL,NULL),(6,'用户管理','users','','/users*','2019-11-12 08:48:14','2019-11-12 08:48:14'),(7,'商品管理','products','','/products*','2019-12-25 03:52:48','2019-12-25 03:52:48'),(8,'优惠券管理','coupon_codes','','/coupon_codes*','2019-12-25 03:53:47','2019-12-25 03:53:47'),(9,'订单管理','orders','','/orders*','2019-12-25 03:54:13','2019-12-25 03:54:20');
/*!40000 ALTER TABLE `admin_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_role_menu`
--

LOCK TABLES `admin_role_menu` WRITE;
/*!40000 ALTER TABLE `admin_role_menu` DISABLE KEYS */;
INSERT INTO `admin_role_menu` VALUES (1,2,NULL,NULL);
/*!40000 ALTER TABLE `admin_role_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_role_permissions`
--

LOCK TABLES `admin_role_permissions` WRITE;
/*!40000 ALTER TABLE `admin_role_permissions` DISABLE KEYS */;
INSERT INTO `admin_role_permissions` VALUES (1,1,NULL,NULL),(2,2,NULL,NULL),(2,3,NULL,NULL),(2,4,NULL,NULL),(2,6,NULL,NULL),(3,2,NULL,NULL),(3,3,NULL,NULL),(3,4,NULL,NULL),(3,6,NULL,NULL),(3,7,NULL,NULL),(3,8,NULL,NULL),(3,9,NULL,NULL);
/*!40000 ALTER TABLE `admin_role_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_role_users`
--

LOCK TABLES `admin_role_users` WRITE;
/*!40000 ALTER TABLE `admin_role_users` DISABLE KEYS */;
INSERT INTO `admin_role_users` VALUES (1,1,NULL,NULL),(2,2,NULL,NULL),(3,3,NULL,NULL);
/*!40000 ALTER TABLE `admin_role_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_roles`
--

LOCK TABLES `admin_roles` WRITE;
/*!40000 ALTER TABLE `admin_roles` DISABLE KEYS */;
INSERT INTO `admin_roles` VALUES (1,'Administrator','administrator','2019-11-12 03:40:26','2019-11-12 03:40:26'),(2,'测试','test','2019-11-12 08:49:40','2019-11-12 08:49:40'),(3,'运营','operator','2019-12-25 03:57:33','2019-12-25 03:57:33');
/*!40000 ALTER TABLE `admin_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_user_permissions`
--

LOCK TABLES `admin_user_permissions` WRITE;
/*!40000 ALTER TABLE `admin_user_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_user_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_users`
--

LOCK TABLES `admin_users` WRITE;
/*!40000 ALTER TABLE `admin_users` DISABLE KEYS */;
INSERT INTO `admin_users` VALUES (1,'admin','$2y$10$rDmwmBxT/CO6bTAt/amfNuQwpOs.Yk7hiCvyQzJ19Y9izDzoSYmUK','Administrator',NULL,'fvT7Vpv6ji32lR4gyQZE72DNaBjcQZ2daRZnzGnLDdLn3vQPtCGhtTOrGPNu','2019-11-12 03:40:26','2019-11-12 03:40:26'),(2,'test','$2y$10$TLl4UfaW7l4hlBC.9TBrJ.CpvFmxRdl7xlEslXuoY.MdS6F4b//WW','测试',NULL,'F1p9JXRpWkXhpD2CN1LjLwTMZy5B4tHbno5tIGBNZlqHcL3J6S3bRN9maVRe','2019-11-12 08:50:47','2019-11-12 08:50:47'),(3,'operator','$2y$10$kLG4bxgmN2liyJi1xm7ghuo5JbH59IoQDz/g56qIZGf1cTgoGRPJG','运营',NULL,'gUOPGidDZlg0gEHZgjNFpqa1fKY06utVj68vGrxAenprRdva6mf1vrOi0FBy','2019-12-25 03:55:39','2019-12-25 03:55:39');
/*!40000 ALTER TABLE `admin_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-12-25 16:09:58
