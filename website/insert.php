<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$course = $_POST['course'];

$sql = "INSERT INTO students (name, email, course)
        VALUES ('$name', '$email', '$course')";

if ($conn->query($sql) === TRUE) {
    echo "Inserted Successfully ✅";
} else {
    echo "Error: " . $conn->error;
}
?>