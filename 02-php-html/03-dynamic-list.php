<?php

$skills = ["PHP", "HTML", "CSS", "MySQL"];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Skills</title>
</head>
<body>

    <h1>My Skills</h1>

    <ul>
        <?php foreach ($skills as $skill) { ?>
            <li><?php echo $skill; ?></li>
        <?php } ?>
    </ul>

</body>
</html>
