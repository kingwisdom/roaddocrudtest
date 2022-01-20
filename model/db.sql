CREATE DATABASE roaddo_employee;

CREATE TABLE employee(
    id  INT PRIMARY KEY AUTO_INCREMENT,
    fullName VARCHAR(120) NOT NULL,
    email VARCHAR(120) NOT NULL,
    position   VARCHAR(100)
);
