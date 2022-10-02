create or replace table file_extensions (
ID int auto_increment primary key,
extension varchar(10)
);

create table files (
ID int auto_increment primary key,
name varchar(1000) not null,
extension int,
constraint ´fk_file_extension´ foreign key(extension) references file_extensions(id)
on delete cascade
on update cascade
);

create table states(
state varchar(3) primary key,
description varchar(200) not null
);

alter table states  add user_add VARCHAR(100);

create table daily_log (
ID int  auto_increment primary key,
file int not null,
registration_date datetime,
details varchar(1000),
state varchar(3),
constraint ´fk_file_log´ foreign key(file) references files(ID)
on delete cascade
on update cascade,
constraint ´fk_file_state´ foreign key(state) references states(state)
on delete cascade
on update cascade
);

create table users (
	username varchar(20),
	password varchar(70),
	first_name varchar(20),
	second_name varchar(20),
	last_name varchar(20),
	family_name varchar(20),
	creation_date datetime,
	last_pass_up datetime,
	
);