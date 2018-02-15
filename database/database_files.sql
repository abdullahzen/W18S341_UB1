

create table Question
(
	question_ID int(10) not null
		primary key,
	question varchar(250) not null,
	answer_ID int(10) not null,
	answer varchar(250) not null,
	category varchar(45) not null,
	user_ID int(10) not null,
	constraint question_ID_UNIQUE
		unique (question_ID),
	constraint answer_ID_UNIQUE
		unique (answer_ID),
	constraint user_ID_UNIQUE
		unique (user_ID)
)
engine=InnoDB
;

create table User
(
	user_ID int(10) auto_increment
		primary key,
	username varchar(25) not null,
	email varchar(100) not null,
	password varchar(25) not null,
	create_time timestamp default CURRENT_TIMESTAMP not null,
	is_Solver tinyint(1) not null,
	constraint user_ID_UNIQUE
		unique (user_ID),
	constraint username_UNIQUE
		unique (username),
	constraint email_UNIQUE
		unique (email)
)
engine=InnoDB
;

alter table Question
	add constraint user_ID
		foreign key (user_ID) references User (user_ID)
;