create database ejemplo;
use ejemplo;

create table datos(
	clave varchar(20) primary key,
	nombre varchar(50),
	sexo varchar(15),
	estudios varchar(50)
);

insert into datos(clave,nombre,sexo,cerveza) value ("abc123","Cliente01","Masculino","Universitarios");