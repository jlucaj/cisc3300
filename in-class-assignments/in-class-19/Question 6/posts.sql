CREATE DATABASE in_class_19; 
CREATE TABLE posts (
	id int(11) NOT NULL AUTO_INCREMENT, 
	title VARCHAR(100) NOT NULL,
	description VARCHAR(100) NOT NULL
	primary key (id) 
); 

INSERT INTO posts (title, content) VALUES
	('First', 'Recipe'),
	('Second', 'Blog post')
	('Third', 'Video link'),
	('Fourth', 'Location'); 
