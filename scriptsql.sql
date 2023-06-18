create database gestionefp;

use gestionefp;

create table utilisateurs(
id int primary key auto_increment,
nom varchar(20) not null,
pass varchar(255) not null
);

insert into utilisateurs (nom,pass) values('admin','827ccb0eea8a706c4c34a16891f84e7b');
insert into utilisateurs (nom,pass) values('anas','1293bba56be7709a56e8393601c8eda2');
insert into utilisateurs (nom,pass) values('karim','2167a6ac80340b69f3b05b800417d6c7');

select * from utilisateurs;


create table employe(
id int primary key auto_increment,
nom varchar(20) not null,
prenom varchar(10) not null,
age int check ( age between 15 and 30)
);

