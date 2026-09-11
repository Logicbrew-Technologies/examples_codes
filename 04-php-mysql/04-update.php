<?php

include "db.php";

$id = 1;
$newMark = 85;

$sql = "UPDATE students
        SET mark = $newMark
        WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Student updated successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

?>
