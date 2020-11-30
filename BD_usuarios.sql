Create database BDEditWeb;
use BDEditWeb;

create table usuarios(
	iddepartamento int not null primary key auto_increment,
	usuario varchar(70) not null,
	clave VARCHAR(100) NOT NULL
);


insert into usuarios(usuario,clave) values('arely','12345');
insert into usuarios(usuario,clave) values('dayanna','abcde');

select * from usuarios; 