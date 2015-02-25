create table students(

  id int not null,


)


create table events(
id int auto_increment,primary key,
state int,
common1 varchar(50),
common2 varchar(50),

)


create table eventoriginal1(
id int auto_increment,primary key,
eventid int,
originl1 varchar(50),

)


create table eventoriginal2(
id int auto_increment,primary key,
eventid int,
originl1 varchar(50),
originl2 varchar(50),

)