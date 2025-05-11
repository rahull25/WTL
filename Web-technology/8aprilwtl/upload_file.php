<!DOCTYPE html>
<html>
<body>

<?php
$target = "uploads/"; 

if (isset($_FILES['myfile']) && $_FILES['myfile']['error'] == 0) {
    $destination = $target . basename($_FILES['myfile']['name']);
    if (move_uploaded_file($_FILES['myfile']['tmp_name'], $destination)) {
        echo "File uploaded successfully!";
    } else {
        echo "Sorry, file not uploaded. Please try again!";
    }
} else {
    echo "No file uploaded or there was an error!";
}
?>

</body>
</html>
