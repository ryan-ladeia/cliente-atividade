create database cliente;
use cliente;

create table cliente(
id int primary key auto_increment,
nome varchar (100),
nascimento date,
telefone int,
endereco varchar (100))
;

