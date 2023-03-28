create database proyecto_ambiente_web;
use proyecto_ambiente_web;

create table usuarios(
id int not null auto_increment,
nombre varchar(25) not null,
correo varchar(100) not null,
contraseña varchar(30) not null,
telefono varchar(50) not null,
direccion varchar(200) not null,
genero varchar (10) not null,
primary key(id));


create table articulos(
id int not null auto_increment,
nombre varchar(25) not null,
descripcion varchar(300) not null,
precio varchar(300) not null,
imagen varchar(500) not null,
primary key(id));