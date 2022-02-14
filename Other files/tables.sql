#create a database named team13
create database team13;

# create table game
create table Game (
id int auto_increment primary key,
title varchar(50),
genre varchar(50),
short_description varchar(50),
long_description varchar(50),
title_image varchar(50),
release_date date
);

describe Game;
select * from Game;
drop table Game;


# create table Purchase
create table Purchase (
id int,
user_id varchar(50),
game_id varchar(50),
FOREIGN KEY (id) REFERENCES Game(id)
);

describe Purchase;
select * from Purchase;
drop table Purchase;


# create table Comments
create table Comments (
id int,
texts varchar(50),
user_uid varchar(50),
game_uid varchar(50),
creation_date timestamp,
FOREIGN KEY (id) REFERENCES Game(id)
);

describe Comments;
select * from Comments;
drop table Comments;


# create table Users
create table Users (
id int,
username varchar(50),
email varchar(50),
passwords varchar(50),
FOREIGN KEY (id) REFERENCES Game(id)
);

describe Users;
select * from Users;
drop table Users;

