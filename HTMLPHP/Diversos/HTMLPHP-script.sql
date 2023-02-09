create database HTMLPHP;
use HTMLPHP;

create table Pessoa(
codigo INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
nome VARCHAR(150) NOT NULL,
telefone BIGINT(11) NOT NULL
)ENGINE = InnoDB;

select * from Pessoa;