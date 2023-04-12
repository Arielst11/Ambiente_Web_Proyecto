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
precio double not null,
imagen varchar(500) not null,
primary key(id));

insert into articulos ( nombre , descripcion ,  precio , imagen) values
('Monitor', 'Este monitor contiene una pantalla sin parpadeos con ComfortView, una característica de software que reduce las nocivas emisiones de luz azul', 110000 , 'https://firebasestorage.googleapis.com/v0/b/proyecto-progra-web-c9327.appspot.com/o/Imagenes%2FMonitor.JPG?alt=media&token=17cf43d9-33ce-49ca-aa32-3b09f43fa393' );
insert into articulos ( nombre , descripcion ,  precio , imagen) values
('Radio', 'Se conecta a Alexa a través de la aplicación Alexa en tu teléfono y reproduce a través de los parlantes de tu auto por medio de una entrada auxiliar o de la conexión Bluetooth', 25000 , 'https://firebasestorage.googleapis.com/v0/b/proyecto-progra-web-c9327.appspot.com/o/Imagenes%2FRadio.jpg?alt=media&token=78d6ba8f-dc13-47e7-9cb6-d5eb7c1d48c0' );
insert into articulos ( nombre , descripcion ,  precio , imagen) values
('Teclado', 'Conéctelo con tres dispositivos diferentes a la vez. Disfrute de una amplia compatibilidad y un emparejamiento fácil, ya que un clic es todo lo que necesita', 11000 , 'https://firebasestorage.googleapis.com/v0/b/proyecto-progra-web-c9327.appspot.com/o/Imagenes%2FTeclado.JPG?alt=media&token=871506bb-91ca-42b9-9921-4d285294162f' );
insert into articulos ( nombre , descripcion ,  precio , imagen) values
('Mouse', 'Armado con un sensor Pixart especial para gamers, el dispositivo ofrece una sensibilidad excepcional que va desde apuntar con una precisión extrema de píxel', 25000 , 'https://firebasestorage.googleapis.com/v0/b/proyecto-progra-web-c9327.appspot.com/o/Imagenes%2Fimage_2023-04-11_180239389.png?alt=media&token=04953684-89a1-4c98-bbda-afb7a6831be6' );
insert into articulos ( nombre , descripcion ,  precio , imagen) values
('Escritorio', 'Perfecto para usarlo en el hogar, la oficina, la sala de estudio; ideal para ubicarlo en una esquina o donde el espacio sea reducido', 65000 , 'https://firebasestorage.googleapis.com/v0/b/proyecto-progra-web-c9327.appspot.com/o/Imagenes%2Fimage_2023-04-11_180346386.png?alt=media&token=2640f6fb-6d9c-444d-81ef-ea9eb664153b' );
insert into articulos ( nombre , descripcion ,  precio , imagen) values
('Router', 'proporciona unas velocidades inalámbricas, una potencia, un alcance y una seguridad superiores para tus crecientes necesidades de redes.', 25000 , 'https://firebasestorage.googleapis.com/v0/b/proyecto-progra-web-c9327.appspot.com/o/Imagenes%2Fimage_2023-04-11_180410953.png?alt=media&token=79785a68-1af5-4341-b5e1-5d969400592c' );
insert into articulos ( nombre , descripcion ,  precio , imagen) values
('Silla', 'La comodidad que necesitas para disfrutar plenamente de largas sesiones. Totalmente ajustable y fabricada con materiales de primera calidad', 110000 , 'https://firebasestorage.googleapis.com/v0/b/proyecto-progra-web-c9327.appspot.com/o/Imagenes%2Fimage_2023-04-11_180453874.png?alt=media&token=4bb01651-057c-4d88-86c9-837f74e4dd51' );
insert into articulos ( nombre , descripcion ,  precio , imagen) values
('Tablet', 'La tablet más delgada, grande y resistente hasta el momento, y combina una durabilidad impresionante con un diseño superligero y delgado.', 150000 , 'https://firebasestorage.googleapis.com/v0/b/proyecto-progra-web-c9327.appspot.com/o/Imagenes%2Fimage_2023-04-11_180540336.png?alt=media&token=3af63b40-38fd-48a4-bed0-ec2f65bb7613' );



create table carrito(
id int not null auto_increment,
nombre varchar(25) not null,
descripcion varchar(300) not null,
precio double not null,
imagen varchar(500) not null,
primary key(id));
