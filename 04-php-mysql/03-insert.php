<?php

include "db.php";

$name = "Vivek";
$age = 21;
$course = "Computer Science";
$mark = 72;

$sql = "INSERT INTO students (name, age, course, mark)
        VALUES ('$name', $age, '$course', $mark)";

if ($conn->query($sql) === TRUE) {
    echo "Student inserted successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

?>
