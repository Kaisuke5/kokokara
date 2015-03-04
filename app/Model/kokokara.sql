# Student関係
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


#model

create table events(
id int not null primary key auto_increment,
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


#eventOriginal

create table intern(
  id int not null primary key auto_increment,
  state int,
  target VARCHAR (50),
  limit_num int,
  skill VARCHAR (50),
  payment int,
  conditions VARCHAR (255),
  treatment VARCHAR (255)
);

create table study_abroad(
  id int not null primary key auto_increment,
  skill VARCHAR (50),
  class VARCHAR (50),
  tuition int,
  stay_type VARCHAR (50),
  conditions VARCHAR (255),
  envirionment text,
  deadline datetime
);

create table camp(
  id int not null primary key auto_increment,
  from_where VARCHAR (50),
  limit_num int,
  food VARCHAR (255),
  with_mem VARCHAR (50),
  tuition int,
  stay_type VARCHAR (50),
  schedule text,
  cost int
);


create table lesson(
  id int not null primary key auto_increment,
  skill VARCHAR (50),
  cost int
);


create table funny_event(
  id int not null primary key auto_increment,
  limit_num int,
  limit_min int,
  deadline datetime,
  cost int,
  schedule text
);


create table student_group(
  id int not null primary key auto_increment,
  cost int,
  limit_num int
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

create table etags(
  id int not null primary key auto_increment,
  name VARCHAR (255),
  created datetime DEFAULT null,
	modified datetime DEFAULT null
);

create table stags(
  id int not null primary key auto_increment,
  name VARCHAR (255),
  created datetime DEFAULT null,
	modified datetime DEFAULT null
);

