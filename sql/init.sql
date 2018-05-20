create database poll_php;

grant all on poll_php.* to dbuser@localhost identified by '########';

use poll_php

create table answers (
  id int not null auto_increment primary key,
  answers int not null,
  created datetime
);
