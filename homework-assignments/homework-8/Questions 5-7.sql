--creating database 
CREATE DATABASE `homework 8`;

--creating notes table
CREATE TABLE `notes`
(
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`title` varchar(80) NOT NULL,
	`description` text NOT NULL,
	primary key (`id`)
); 

--inserting data 
insert into notes (title, description)
values ('Title I', 'Description 1');

insert into notes (title, description)
values ('Title II', 'Description II');

insert into notes (title, description)
values ('test', 'test');

--updating data
update notes set description = 'Description I' where id = 1; 

--deleting data
delete from notes where id = 3; 

--selecting all notes, ordering by reverse alpha order
select * from notes order by title desc; 

--select second note, assuming I don't know ID of it 
select * from notes limit 1 offset 1; 

--select all notes that have descs which contain vowels 
select * from notes where description like '%a%' or description like '%A%'
					   or description like '%e%' or description like '%E%'
					   or description like '%i%' or description like '%I%'
					   or description like '%o%' or description like '%O%'
					   or description like '%u%' or description like '%U%'; 