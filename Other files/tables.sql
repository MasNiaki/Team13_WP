#create a database named team13
create database team13;

# create table game
create table Game (
uid int auto_increment primary key,
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
uid int,
user_id varchar(50),
game_id varchar(50),
FOREIGN KEY (uid) REFERENCES Game(uid)
);

describe Purchase;
select * from Purchase;
drop table Purchase;


# create table Comments
create table Comments (
uid int,
texts varchar(50),
user_uid varchar(50),
game_uid varchar(50),
creation_date timestamp,
FOREIGN KEY (uid) REFERENCES Game(uid)
);

describe Comments;
select * from Comments;
drop table Comments;


# create table Users
create table Users (
uid int,
username varchar(50),
email varchar(50),
passwords varchar(50),
FOREIGN KEY (uid) REFERENCES Game(uid)
);

describe Users;
select * from Users;
drop table Users;

