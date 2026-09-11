<?php

$name = "Rahul";
$age = 21;
$course = "Computer Science";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Profile</title>
</head>
<body>

    <h1><?php echo $name; ?></h1>

    <p>Age: <?php echo $age; ?></p>
    <p>Course: <?php echo $course; ?></p>

    <?php if ($age >= 18) { ?>
        <p>You are an adult.</p>
    <?php } else { ?>
        <p>You are a minor.</p>
    <?php } ?>

</body>
</html>
