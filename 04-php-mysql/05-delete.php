<?php

include "db.php";

$id = 3;

$sql = "DELETE FROM students WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Student deleted successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

?>
