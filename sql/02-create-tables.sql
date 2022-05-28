CREATE TABLE role(
  id TINYINT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(50) NOT NULL
);

CREATE TABLE branch(
  id TINYINT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(75) NOT NULL,
  address VARCHAR(200) NOT NULL,
  phone_number VARCHAR(20) NOT NULL,
  employees_number TINYINT NOT NULL,
  picture VARCHAR(150) NOT NULL
);

CREATE TABLE payment_method(
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL,
	data VARCHAR(50)
);

CREATE TABLE food(
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(75) NOT NULL,
	price DECIMAL(5, 2) NOT NULL,
	description TEXT,
	image VARCHAR(150) NOT NULL,
	weigh INT NOT NULL,
	slug VARCHAR(50) NOT NULL
);

CREATE TABLE customer(
	id INT PRIMARY KEY AUTO_INCREMENT,
	firstname VARCHAR(75) NOT NULL,
	lastname VARCHAR(75) NOT NULL,
	fullname VARCHAR(151) GENERATED ALWAYS AS (CONCAT(firstname, ' ', lastname)),
	email VARCHAR(100) NOT NULL,
	password VARCHAR(120) NOT NULL,
	address VARCHAR(200) NOT NULL,
	phone_number VARCHAR(20) NOT NULL,
	profile_picture VARCHAR(150),
	payment_method INT REFERENCES payment_method (id) ON DELETE SET NULL
);

CREATE TABLE employee(
	id INT PRIMARY KEY AUTO_INCREMENT,
	firstname VARCHAR(75) NOT NULL,
	lastname VARCHAR(75) NOT NULL,
	fullname VARCHAR(151) GENERATED ALWAYS AS (CONCAT(firstname, ' ', lastname)),
	email VARCHAR(100) NOT NULL,
	password VARCHAR(120) NOT NULL,
	phone_number VARCHAR(20) NOT NULL,
	profile_picture VARCHAR(450) NOT NULL,
	is_active BOOLEAN NOT NULL DEFAULT 1,
	role TINYINT DEFAULT 3 REFERENCES role (id) ON DELETE SET DEFAULT,
  branch TINYINT REFERENCES branch (id) ON DELETE SET NULL
);

CREATE TABLE order_item(
	id INT PRIMARY KEY AUTO_INCREMENT,
	food_id INT REFERENCES food ON DELETE SET NULL,
	quantity TINYINT NOT NULL,
	unit_price DECIMAL(5, 2) NOT NULL
);

CREATE TABLE order_resume(
	id INT PRIMARY KEY AUTO_INCREMENT,
	order_item INT REFERENCES order_item,
	order_date DATE,
	customer_id INT REFERENCES customer,
	price DECIMAL(5, 2),
	delivered_time TIMESTAMP,
	id_employee INT REFERENCES employee
);