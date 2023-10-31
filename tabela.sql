CREATE DATABASE login;
USE login;

CREATE TABLE `login`.`usuario` (
  `usuario_id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(200) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  `data_cadastro` DATETIME NOT NULL,
  PRIMARY KEY (`usuario_id`));