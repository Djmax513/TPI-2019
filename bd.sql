create database cadastro1;
use cadastro1;

create table usuario(
id int primary key auto_increment,
nome varchar (100)not null,
email varchar(100)not null,
fone int(9) null,
sexo varchar (20)not null,
ocupacao varchar (20) not null);