CREATE DATABASE IF NOT EXISTS ticket_system CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE ticket_system;

CREATE TABLE admins (
 id INT AUTO_INCREMENT PRIMARY KEY,
 username VARCHAR(100) UNIQUE NOT NULL,
 password VARCHAR(255) NOT NULL,
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE tickets (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(120) NOT NULL,
 email VARCHAR(180) NOT NULL,
 subject VARCHAR(200) NOT NULL,
 description TEXT NOT NULL,
 status ENUM('Pending','In Progress','Resolved') DEFAULT 'Pending',
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO admins(username,password) VALUES
('admin','$2y$12$eQCx0ETzXsUmdOFxXH.FEOqJY/x3H.6nsO4ZW2zWdJKlrvIALSjsy');

INSERT INTO tickets(name,email,subject,description,status) VALUES
('John Doe','john@example.com','Cannot login','I am unable to login to my account.','Pending'),
('Jane Smith','jane@example.com','Website issue','The contact page is not loading correctly.','In Progress'),
('Alex Thomas','alex@example.com','Password reset','Please help me reset my password.','Resolved');
