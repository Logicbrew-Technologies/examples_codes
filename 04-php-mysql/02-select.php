<?php

include "db.php";

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "Name: " . $row["name"] . "<br>";
    echo "Course: " . $row["course"] . "<br>";
    echo "Mark: " . $row["mark"] . "<hr>";
}

$conn->close();

?>
