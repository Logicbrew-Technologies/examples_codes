<!DOCTYPE html>
<html>
<head>
    <title>Form Processing</title>
</head>
<body>

    <h1>Student Form</h1>

    <form method="post">
        <input type="text" name="name" placeholder="Enter name">
        <br><br>

        <input type="number" name="mark" placeholder="Enter mark">
        <br><br>

        <button type="submit">Check Result</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = $_POST["name"];
        $mark = $_POST["mark"];

        echo "<h2>Hello, $name</h2>";

        if ($mark >= 50) {
            echo "Result: Passed";
        } else {
            echo "Result: Failed";
        }
    }

    ?>

</body>
</html>
