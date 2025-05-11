<?php

$mysqli = mysqli_connect("localhost", "root", "", "stud");


if (mysqli_connect_errno()) {
    printf("Connection failed: %s\n", mysqli_connect_error());
    exit();
}


$a = (int)$_POST['rno'];
$b = mysqli_real_escape_string($mysqli, $_POST['nm']); // Sanitize input


$sql = "INSERT INTO be (roll, name) VALUES ($a, '$b')";


$res = mysqli_query($mysqli, $sql);


if ($res === TRUE) {
    echo "Success";
} else {
    echo "Error: " . mysqli_error($mysqli);
}
?>