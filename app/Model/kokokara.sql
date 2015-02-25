# Model
create table students(
  id int not null primary key auto_increment,
  name VARCHAR (255),
  password VARCHAR (255),
  created datetime DEFAULT NULL ,
  modified datetime DEFAULT NULL
);

# Test
INSERT INTO students(name, password, created, modified) VALUES ('user1', 'password1', now(), now());
INSERT INTO students(name, password, created, modified) VALUES ('user2', 'password2', now(), now());
INSERT INTO students(name, password, created, modified) VALUES ('user3', 'password3', now(), now());


create table events(
  id int auto_increment,primary key,
  state int,
  common1 varchar(50),
  common2 varchar(50)

);


create table eventoriginal1(
  id int auto_increment,primary key,
  eventid int,
  originl1 varchar(50)

);


create table eventoriginal2(
  id int auto_increment,primary key,
  eventid int,
  originl1 varchar(50),
  originl2 varchar(50)

);

