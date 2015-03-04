# Model
/*2015/03/01 変更*/
create table students(
  id int not null primary key auto_increment,
  name VARCHAR (255),
  email VARCHAR (255),
  password VARCHAR (255),
  gender enum('male', 'female'),
  birthday date,
  email_accept int,
  created datetime DEFAULT NULL ,
  modified datetime DEFAULT NULL
);


# Test
INSERT INTO students(name, password, created, modified) VALUES ('user1', 'password1', now(), now());
INSERT INTO students(name, password, created, modified) VALUES ('user2', 'password2', now(), now());
INSERT INTO students(name, password, created, modified) VALUES ('user3', 'password3', now(), now());



#model

create table events(
id int auto_increment primary key,
state int,
title varchar(25),
company_info text,
body text,
detail text,
period VARCHAR (50),
thumbnail VARCHAR (255),
location VARCHAR (255),
date datetime,
created datetime DEFAULT null,
modified datetime DEFAULT null
);


create table intern(
  id int auto_increment primary key,
  state int,
  target VARCHAR (50),
  limit_num int,
  skill VARCHAR (50),
  payment int,
  conditions VARCHAR (255),
  treatment VARCHAR (255)


);

create table study_abroad(
  id int auto_increment primary key,
  skill VARCHAR (50),
  class VARCHAR (50),
  cost int,
  stay_type VARCHAR (50),
  conditions VARCHAR (255),
  envirionment text,
  deadline datetime


);

create table camp(
  id int auto_increment primary key,
  fromwhere VARCHAR (50),
  limit_num int,
  food VARCHAR (255),
  withmen VARCHAR (50),
  tuition int,
  stay_type VARCHAR (50),
  schedule text,
  cost int

);



create table lesson(
  id int auto_increment primary key,
  skill VARCHAR (50),
  cost int

);


create table funny_event(
  id int auto_increment primary key,
  limit_num int,
  limit_min int,
  deadline datetime,
  cost int,
  schedule text

);


create table student_group(
  id int auto_increment primary key,
  cost int,
  limit_num int
);
















#model

create table facebook_users(
  id int not null primary key auto_increment,
  student_id int not null,
  facebook_user_id int,
  birthday VARCHAR (255),
	email VARCHAR (255),
	first_name VARCHAR (255),
	gender VARCHAR (50),
	last_name VARCHAR (255),
	link VARCHAR (255),
	locale VARCHAR (50),
	name VARCHAR (255),
	timezone int,
	updated_time VARCHAR (255),
	verified VARCHAR (50),
	created datetime DEFAULT null,
	modified datetime DEFAULT null
);

#追加分

create table user_event_log(
  id int not null primary key auto_increment,
  counter int,
  event_id int not null,
  student_id int not null,
  created datetime
);


create table user_event_apply(
  id int not null primary key auto_increment,
  event_id int not null,
  student_id int not null,
  created datetime
);


#追加分byMarkTagTable


CREATE TABLE etags(
  id int not null primary key auto_increment,
  name VARCHAR (255),
  created datetime DEFAULT NULL ,
  modified datetime DEFAULT NULL
);

CREATE TABLE stags(
  id int not null primary key auto_increment,
  name VARCHAR (255),
  created datetime DEFAULT NULL ,
  modified datetime DEFAULT NULL
);





create table etags_events(
  id int not null primary key auto_increment,
  etag_id int,
  event_id int,
  created datetime DEFAULT null,
  modified datetime DEFAULT null


);


create table stags_students(
  id int not null primary key auto_increment,
  stag_id int,
  student_id int,
  created datetime DEFAULT null,
  modified datetime DEFAULT null

);


create table applies_events(
  id int not null primary key auto_increment,
  apply_id int,
  event_id int,
  created datetime DEFAULT null,
  modified datetime DEFAULT null

);


create table events_logs(
  id int not null primary key auto_increment,
  log_id int,
  event_id int,
  counter int,
  created datetime DEFAULT null,
  modified datetime DEFAULT null


);










