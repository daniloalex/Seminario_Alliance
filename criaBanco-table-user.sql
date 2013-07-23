CREATE DATABASE curso;

CREATE TABLE `inscricoes` (
`id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
`nome` VARCHAR(50) NOT NULL,
`email` VARCHAR(100) NOT NULL,
`telefone` CHAR(10) NOT NULL,
`endereco` VARCHAR(100) NOT NULL,
`created` DATETIME,
`updated` DATETIME
);

CREATE TABLE `palestras` (
`id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
`nome` VARCHAR(50) NOT NULL,
`descricao` VARCHAR(500) NOT NULL,
`inicio` DATETIME DEFAULT NULL,
`fim` DATETIME DEFAULT NULL,
`created` DATETIME DEFAULT NULL,
`updated` DATETIME DEFAULT NULL,
`palestrante_id` INT UNSIGNED NOT NULL
);

CREATE TABLE `palestrantes` (
`id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
`nome` VARCHAR(50) NOT NULL,
`descricao` VARCHAR(500) NOT NULL,
`site` VARCHAR(50),
`created` TIME DEFAULT NULL,
`updated` TIME DEFAULT NULL,
`palestra_id` INT UNSIGNED NOT NULL
);

GRANT ALL PRIVILEGES 
       ON curso.*
       TO 'curso'@'localhost'
       IDENTIFIED BY '12345' 
       WITH GRANT OPTION;