CREATE DATABASE homework10; 
USE homework10; 

CREATE TABLE JozefsSodaStore (
	id INT AUTO_INCREMENT PRIMARY KEY, 
	name VARCHAR(25) NOT NULL, 
	flavor VARCHAR(25) NOT NULL, 
	price DECIMAL(10, 2) NOT NULL
); 

INSERT INTO JozefsSodaStore (name, flavor, price) VALUES
('Coca Cola', 'Cola', 1.50), 
('Pepsi', 'Cola', 1.50), 
('Sprite', 'Lemon-Lime', 2.00),
('Fanta', 'Orange', 2.00),
('Crush', 'Orange', 1.50),
('Mountain Dew', 'Lemon-Lime', 1.50); 