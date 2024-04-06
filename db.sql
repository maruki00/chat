create database chatroom;
create table message(msgid int primary key AUTO_INCREMENT,
					message varchar(255),
					dtsend TIMESTAMP DEFAULT NOW(),
					username varchar(25));