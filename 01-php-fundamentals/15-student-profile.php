<?php

$name = "Rahul";
$age = 21;
$course = "Computer Science";
$mark = 78;

$skills = ["PHP", "HTML", "CSS", "MySQL"];

function greet($name) {
    return "Welcome, $name!";
}

echo greet($name);
echo "<br>";
echo "Age: $age<br>";
echo "Course: $course<br>";
echo "Mark: $mark<br>";

if ($mark >= 50) {
    echo "Result: Passed<br>";
} else {
    echo "Result: Failed<br>";
}

echo "Skills:<br>";

foreach ($skills as $skill) {
    echo "- $skill<br>";
}

?>
