create database InkaSky;

use InkaSky;

create table usuario( 
	codigo int not null AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(50),
    apellido varchar(50),
    fecha varchar(50),
    direccion varchar(50),
    telefono int,
    email varchar(50));
    
create table venta(
	id int not null AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(50),
    apellido varchar(50),
	destino varchar(100),
    cantidad int,
    precio varchar(45));
    
select * from usuario;
select * from venta;
