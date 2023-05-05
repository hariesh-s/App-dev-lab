CREATE DATABASE hospital;
USE hospital;

CREATE TABLE patient (
	Pid INT AUTO_INCREMENT PRIMARY KEY,
	Pname VARCHAR(50),
	DOB DATE,
	ContactNo VARCHAR(10),
	Department VARCHAR(50)
);

CREATE TABLE diagnosis (
	Did INT AUTO_INCREMENT PRIMARY KEY,
	Dname VARCHAR(50),
	Medication VARCHAR(50),
	Department VARCHAR(50)
);

CREATE TABLE treatment (
	Pid INT,
	Treatmenttype VARCHAR(50),
	Did INT,
	DoctorName VARCHAR(50)
);
