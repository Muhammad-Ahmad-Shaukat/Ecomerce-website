<?php
// Database credentials
$servername = "localhost";
$username = "root";  // Default XAMPP MySQL username
$password = "";      // Default XAMPP MySQL password is empty
$dbname = "php_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error );
}
echo "<script>console.log('Debug information: " . "connection successful" . "');</script>";
//file end
?>