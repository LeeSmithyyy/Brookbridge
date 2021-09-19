create database brookbridge;

use brookbridge;

create table products
(
    productid int unsigned not null auto_increment primary key,
    name char(60) not null,
    description char(100) not null,
    price float(4,2) not null,
    qty tinyint unsigned not null,
    veg bool not null
);

create table customers
(
  customerid int unsigned not null auto_increment primary key,
  username varchar(30) not null,
  password varchar(30) not null,
  name char(60) not null,
  address char(80) not null,
  city char(30) not null,
  state char(20),
  zip char(10)
);


create table admin
(
  username char(16) not null primary key,
  password char(40) not null
);

grant select, insert, update, delete
on brookbridge.*
to admin_user@localhost identified by 'myadmin1';

