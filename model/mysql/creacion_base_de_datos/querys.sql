

create database Tienda;

use Tienda;

# tabla asignada a guardar datos de los usuarios

create table usuarios(
  id int(10) not null primary key auto_increment,
  nombres varchar(100) not null,
  apellidos varchar(100) not null,
  correo varchar(150) not null,
  direccion varchar (150),
  ciudad varchar(200) not null,
  barrio varchar(120),
  Contraseña varchar(100) not null,
  Telefono bigint(13) not null,
  cedula int(50) not null,
  foto varchar(300)
);
