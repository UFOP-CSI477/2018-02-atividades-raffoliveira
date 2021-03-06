-- MySQL Script generated by MySQL Workbench
-- Wed Jan  31 13:31:45 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema manutencao
-- -----------------------------------------------------
CREATE DATABASE IF NOT EXISTS `manutencao` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `manutencao`;

/* DROP USER `sistemaweb`@`localhost`; */
/* CREATE USER `sistemaweb`@`localhost` identified by "123456"; */
GRANT ALL PRIVILEGES ON manutencao.* TO `sistemaweb`@`localhost`;
FLUSH PRIVILEGES;

-- -----------------------------------------------------
-- Table `manutencao`.`equipamentos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `manutencao`.`equipamentos` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `manutencao`.`registros`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `manutencao`.`registros` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `equipamento_id` INT(10) UNSIGNED NOT NULL,
  `descricao` VARCHAR(191) NOT NULL,
  `datalimite` DATE NOT NULL,
  `tipo` INT(11) NOT NULL DEFAULT '0',
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `registros_equipamento_id_foreign` (`equipamento_id` ASC),
  CONSTRAINT `registros_equipamento_id_foreign`
    FOREIGN KEY (`equipamento_id`)
    REFERENCES `manutencao`.`equipamentos` (`id`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- DUMP Table `manutencao`.`equipamentos`
-- -----------------------------------------------------

INSERT INTO equipamentos (nome) VALUES ('Computador');
INSERT INTO equipamentos (nome) VALUES ('Laptop');
INSERT INTO equipamentos (nome) VALUES ('Tablet');
INSERT INTO equipamentos (nome) VALUES ('Impressora');
INSERT INTO equipamentos (nome) VALUES ('Data show');
INSERT INTO equipamentos (nome) VALUES ('Monitor');
INSERT INTO equipamentos (nome) VALUES ('Mouse');
INSERT INTO equipamentos (nome) VALUES ('Teclado');
INSERT INTO equipamentos (nome) VALUES ('Roteador');
INSERT INTO equipamentos (nome) VALUES ('Modem');

--
-- Dumping data for table `registros`
--

INSERT INTO `registros` (`equipamento_id`, `descricao`, `datalimite`, `tipo`, `created_at`, `updated_at`) VALUES (1, 'Troca HD', '2018-02-05', 1, NOW(), NOW());
INSERT INTO `registros` (`equipamento_id`, `descricao`, `datalimite`, `tipo`, `created_at`, `updated_at`) VALUES (9, 'DHCP', '2018-02-03', 2, NOW(), NOW());
INSERT INTO `registros` (`equipamento_id`, `descricao`, `datalimite`, `tipo`, `created_at`, `updated_at`) VALUES (4, 'Tonner', '2018-02-08', 1, NOW(), NOW());
INSERT INTO `registros` (`equipamento_id`, `descricao`, `datalimite`, `tipo`, `created_at`, `updated_at`) VALUES (2, 'Tela', '2018-02-07', 2, NOW(), NOW());
INSERT INTO `registros` (`equipamento_id`, `descricao`, `datalimite`, `tipo`, `created_at`, `updated_at`) VALUES (3, 'Atualizacao', '2018-02-05', 3, NOW(), NOW());
INSERT INTO `registros` (`equipamento_id`, `descricao`, `datalimite`, `tipo`, `created_at`, `updated_at`) VALUES (5, 'Lampada', '2018-02-02', 2, NOW(), NOW());
INSERT INTO `registros` (`equipamento_id`, `descricao`, `datalimite`, `tipo`, `created_at`, `updated_at`) VALUES (7, 'Troca', '2018-02-06', 3, NOW(), NOW());
INSERT INTO `registros` (`equipamento_id`, `descricao`, `datalimite`, `tipo`, `created_at`, `updated_at`) VALUES (6, 'Burn in', '2018-02-09', 2, NOW(), NOW());

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
