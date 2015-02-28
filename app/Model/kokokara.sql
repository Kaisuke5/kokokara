# Model
create table students(
  id int not null primary key auto_increment,
  name VARCHAR (255),
  email VARCHAR (255),
  password VARCHAR (255),
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
common1 varchar(50),
common2 varchar(50)

);



#test

insert into events (state,title,common1,common2) values(1,"イベント１","私たちが運営しているアオイゼミは、インターネットを利用したライブ授業を無料で配信し、中高生の受験勉強をサポートしています。 
パソコンはもちろん、スマートフォンでも気軽に閲覧することができ、コメント機能を通じて講師に対してリアルタイムに質問できるため、リアルな学習塾以上に講師と生徒、そして生徒同士の交流も盛んです。 ","しかし、まだ小さい会社ですので、週１で全体ミーティングを行い、全員が「誰が、何をやっているのか？」を理解し、全員からフィードバックをし合います。 
教材開発のスタッフが、エンジニアの技術的な話に触れて、仕様について意見したりもします。") ;


insert into events (state,title,common1,common2) values(2,"[インド×教育ベンチャー]海外キャリアを歩みたい方へ","Misaoはインドの首都デリー近郊にあるインド初の日本人経営語学学校を運営する留学支援会社です。単に語学学校を運営するのだけではなく、WEBを用いたマーケティング戦略にも力を入れており、WEB×教育事業をインドで立ち上げております。その為、テレビ朝日やTechinAsiaへの掲載実績も持っており、既に100名以上の卒業生を輩出し、新興国人材の育成に力を注いでいます。","我々は語学学校の運営だけではなく、広告PR、インド体験、キャリア支援等、様々なものに着手しております。会社のメンバーは日本人、インド人を初めとした国際色豊かな面々が揃っています。 
特に留学エージェントを用いずに自社集客に力を入れることにより、高利益率なビジネスモデルを確立しております。これからは更に多様な観点からインドを日本にPRしていき、インドと日本の架け橋となるべく、邁進していきます。") ;





#model
create table eventoriginal1(

id int auto_increment primary key,
eventid int,
origin1 varchar(50)

);

#test

insert into eventoriginal1(eventid,origin1) values(1,"これはstate1のオリジナル内容です");

  id int auto_increment primary key,
  eventid int,
  originl1 varchar(50)

);


#model

create table eventoriginal2(

id int auto_increment primary key,
eventid int,
origin1 varchar(50),
origin2 varchar(50)

);


#test

insert into eventoriginal2(eventid,origin1,origin2) values(2,"これはstate2のオリジナル内容aです","これはstate2のオリジナル内容bです");



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
