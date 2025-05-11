<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "student_db";

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from form
$name = $_POST['name'];
$roll_no = $_POST['roll_no'];
$address = $_POST['address'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$languages = isset($_POST['languages']) ? implode(",", $_POST['languages']) : "";
$division = $_POST['division'];

// Handle file upload
$marksheet_name = $_FILES['marksheet']['name'];
$marksheet_tmp = $_FILES['marksheet']['tmp_name'];
$upload_dir = "uploads/";

if (!is_dir($upload_dir)) {
    mkdir($upload_dir);
}
move_uploaded_file($marksheet_tmp, $upload_dir . $marksheet_name);

// Insert into database
$sql = "INSERT INTO students (name, roll_no, address, email, gender, languages, division, marksheet)
        VALUES ('$name', '$roll_no', '$address', '$email', '$gender', '$languages', '$division', '$marksheet_name')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
