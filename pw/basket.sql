drop database if exists basket;
create database if not exists basket;
use basket;

drop table if exists BasketTable;
create table if not exists BasketTable(
email varchar(100) not null,
products int(200) not null,
primary key (`email`)
);