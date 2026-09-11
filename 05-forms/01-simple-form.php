<!DOCTYPE html>
<html>
<head>
    <title>Simple Form</title>
</head>
<body>

    <h1>Student Form</h1>

    <form method="post">
        <label>Name:</label>
        <input type="text" name="name">
        <br><br>

        <label>Age:</label>
        <input type="number" name="age">
        <br><br>

        <button type="submit">Submit</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $age = $_POST["age"];

        echo "<h2>Submitted Data</h2>";
        echo "Name: $name<br>";
        echo "Age: $age";
    }

    ?>

</body>
</html>
