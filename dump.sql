CREATE DATABASE login;
USE login;

CREATE TABLE `login`.`usuario` (
  `usuario_id` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(200) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`usuario_id`));

INSERT INTO usuario (usuario,senha) VALUES ('Wescley',md5('Senha#12'));
INSERT INTO usuario (usuario,senha) VALUES ('Maercio',md5('Administrador'));