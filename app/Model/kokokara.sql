create table students(
  id int not null primary key auto_increment,
  name VARCHAR (255),
  password VARCHAR (255),
  created datetime DEFAULT NULL ,
  modified datetime DEFAULT NULL
)

