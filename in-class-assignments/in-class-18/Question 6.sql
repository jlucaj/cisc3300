--creating database		
CREATE DATABASE in_class_17; 

--users table
CREATE TABLE users (
	id int(11) NOT NULL AUTO_INCREMENT, 
	username varchar(100) NOT NULL,
	password varchar(100) NOT NULL, 
	email varchar(100) NOT NULL, 
	primary key (id) 
); 

--userComments table 
CREATE TABLE userComments (
	id int(11) NOT NULL, 
	comment text NOT NULL, 
	foreign key (id) references users(id) 
); 

--inserting values 
INSERT INTO users (username, password, email) VALUES 
	('user1', 'hahaha123', 'user@email.com'),
	('terrydavis', 'templeos', 'tdavis@os.com'),
	('chiefkeef', 'oblock!', 'chicago@gmail.com'), 
	('potus', 'Presidential321', 'potus@usa.gov'), 
	('nettspend', 'goatmusician03', 'rap@gmail.com'),
	('fordham', 'tuitionCrazy', 'fordham@fordham.edu'),
	('jozef', 'jozef123', 'jozef@fordham.edu'); 

INSERT INTO userComments (id, comment) VALUES
	(1, 'test'),
	(3, 'chicagoooooooooo'),
	(5, 'music'),
	(4, 'United States'),
	(4, 'USA'); 

-- returning all users w/ their comments if applicable 
SELECT users.id, users.username, users.email, userComments.comment 
FROM users 
LEFT JOIN userComments on users.id = userComments.id; 

-- returning only users w/ comments 
SELECT users.id, users.username, users.email, userComments.comment 
FROM users
INNER JOIN userComments on users.id = userComments.id; 