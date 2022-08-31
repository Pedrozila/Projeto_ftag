create database FTAG;

use ftag;

create table user 
(
	user_id int not null auto_increment,
    nome varchar(50) not null,
    email varchar(50) not null,
    telefone varchar(20) not null,
    função varchar(30) not null,
    primary key (user_id)
);

alter table user add nick varchar(50);

insert into ftag.user values (1,'Pedro Bruno Neto', 'pedrobn97@outlook.com', '(12) 99662-1997', 'Médico', 'Hertz');
insert into ftag.user values (2, 'Marcos Bruno', 'marcos.cbruno@hotmail.com', '(12) 99666-8881', 'Sniper', 'Misty');
insert into ftag.user values (3, 'João Paulo Cordeiro', 'joaopaulo_cordeiro98@hotmail.com', '(35) 99112-5512', 'Fuzileiro', 'Smoke');

select * from ftag.user;

create table login 
(
	login_id int not null auto_increment,
    user_name varchar(200) not null,
    pass_word varchar(32) not null,
    primary key (login_id)
);

insert into ftag.login (user_name, pass_word) values ('pedro', md5(1234));

select * from ftag.login;