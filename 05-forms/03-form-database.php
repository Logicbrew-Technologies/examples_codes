<?php

include "../04-php-mysql/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $age = $_POST["age"];
    $course = $_POST["course"];
    $mark = $_POST["mark"];

    $sql = "INSERT INTO students (name, age, course, mark)
            VALUES ('$name', $age, '$course', $mark)";

    if ($conn->query($sql) === TRUE) {
        echo "Student added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>

    <h1>Add Student</h1>

    <form method="post">

        <label>Name:</label>
        <input type="text" name="name" required>
        <br><br>

        <label>Age:</label>
        <input type="number" name="age" required>
        <br><br>

        <label>Course:</label>
        <input type="text" name="course" required>
        <br><br>

        <label>Mark:</label>
        <input type="number" name="mark" required>
        <br><br>

        <button type="submit">Save Student</button>

    </form>

</body>
</html>
