CREATE DATABASE php_workshop;

USE php_workshop;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    age INT,
    course VARCHAR(100),
    mark INT
);

INSERT INTO students (name, age, course, mark)
VALUES
('Rahul', 21, 'Computer Science', 78),
('Anu', 20, 'Computer Science', 88),
('Arun', 22, 'Information Technology', 65);

SELECT * FROM students;

UPDATE students
SET mark = 80
WHERE id = 1;

DELETE FROM students
WHERE id = 3;

SELECT * FROM students;
