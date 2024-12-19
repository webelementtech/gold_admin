<?php
// Database configuration
session_start();

// Replace with your database connection details
include 'admin/db_connection.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$exp = $_POST['exp'];
$city = $_POST['city'];
$utr = $_POST['utr_no'];
$course = $_POST['course'];


// Insert data into the database
$sql = "INSERT INTO user_enrollment (name, mail, mobile,trading_exp,city,utr_no,course_type) VALUES ('$name', '$email', '$mobile','$exp','$city','$utr','$course')";
if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();



?>