-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'L''identifiant de la catégorie',
  `name` varchar(64) NOT NULL COMMENT 'Le nom de la catégorie',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp() COMMENT 'La date de création de la catégorie',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'La date de la dernière mise à jour de la catégorie',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


SET NAMES utf8mb4;

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'L''identifiant de notre tâche',
  `title` varchar(64) NOT NULL COMMENT 'Le titre de la tâche',
  `category_id` int(11) NOT NULL COMMENT 'La catégorie (autre entité) de la tâche',
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 = en cours, 1 = terminer',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp() COMMENT 'La date de création de la tâche',
  `updated_at` timestamp NULL DEFAULT NULL COMMENT 'La date de la dernière mise à jour de la tâche',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- 2021-06-18 16:30:27
