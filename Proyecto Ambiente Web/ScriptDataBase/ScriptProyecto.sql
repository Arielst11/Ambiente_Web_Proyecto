create database proyecto_ambiente_web;
use proyecto_ambiente_web;

create table usuarios(
id int not null auto_increment,
nombreUsuario varchar(50) not null,
nombre varchar(25) not null,
correo varchar(100) not null,
contraseña varchar(30) not null,
telefono varchar(50) not null,
direccion varchar(200) not null,
genero varchar (10) not null,
tipo varchar (40) not null,
primary key(id));

insert into usuarios ( nombreUsuario, nombre , correo ,  contraseña , telefono, direccion, genero, tipo ) values
('Sommers','Ariel' , 'asancheztroz99@gmail.com' ,'x2xlastx2x?', '86299030', 'San José, Costa Rica' , 'Hombre' , 'administrador' );

create table articulos(
id int not null auto_increment,
nombre varchar(25) not null,
descripcion varchar(300) not null,
precio varchar(300) not null,
imagen varchar(500) not null,
primary key(id));

create table carrito(
id int not null auto_increment,
nombre varchar(25) not null,
descripcion varchar(300) not null,
precio varchar(300) not null,
imagen varchar(500) not null,
primary key(id));



insert into articulos ( nombre , descripcion ,  precio , imagen) values
('Monitor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt', '₡15000' , 'https://www.intelec.co.cr/image/cache/catalog/catalogo/Monitores/5RD66AA-800x800w.jpg.webp' );
insert into articulos ( nombre , descripcion ,  precio , imagen) values
('Teclado', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt', '₡10000' , 'https://www.intelec.co.cr/image/cache/catalog/catalogo/Teclado/31300725101-800x800w.jpg.webp' );
