<?php
$hostname = 'localhost';
$username = 'root';
$password = '';

// Create connection
$con = new mysqli($hostname, $username, $password);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} else {
    echo "Connected successfully<br>";
}


$sql = "CREATE DATABASE db"; 
if ($con->query($sql) == TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $con->error;
}

// Close connection
$con->close();
?>
