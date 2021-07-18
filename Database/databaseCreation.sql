--DROP DATABASE IF EXISTS bloodbank;
--CREATE DATABASE bloodbank;

--drop table
DROP TABLE IF EXISTS receiversRequest;
DROP TABLE IF EXISTS availableBloodSamples;
DROP TABLE IF EXISTS receiver;
DROP TABLE IF EXISTS hospital;
DROP TABLE IF EXISTS forgotPassword;

--table creation

--forgotPassword
CREATE TABLE forgotPassword(qno int, question text, primary key(qno));

--hospital hospitalName is used as username
CREATE TABLE hospital(username varchar(50),hospitalName varchar(50), password varchar(20) not null, forgotPassQno int references forgotPassword(qno) on update set null on delete cascade, answer text not null, primary key(username));

--receiver
CREATE TABLE receiver(username varchar(50) not null, FullName varchar(100) not null, gender varchar(2) not null, DOB date not null, bloodType varchar(4) not null, email varchar(30) not null, mobileNo varchar(10) not null, password varchar(20) not null, forgotPassQno int references forgotPassword(qno) on update set null on delete cascade, answer text not null, primary key(username));

--availableBloodSamples
CREATE TABLE availableBloodSamples(Sno int not null, hospitalName varchar(50) references hospital(hospitalName) on update set null on delete cascade, address text not null, bloodType varchar(4) not null, quantity int, primary key(Sno));

--receiversRequest
CREATE TABLE receiversRequest(receiverUsername varchar(50) references receiver(username) on update set null on delete cascade, hospitalName varchar(50) references hospital(hospitalName) on update set null on delete cascade, requiredByDate date not null);

--insertion in forgotPassword table
delete from forgotPassword;

INSERT INTO forgotPassword VALUES(1,'What was your childhood nickname?');
INSERT INTO forgotPassword VALUES(2,'What is your favorite game?');
INSERT INTO forgotPassword VALUES(3,'Who is your childhood sports hero?');