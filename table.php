<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'db';

$con = new mysqli($hostname, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    echo $con->connect_error;
} else {
    echo "connected";
}

// Create table query
$sql = "CREATE TABLE hira (
id INT(20) AUTO_INCREMENT PRIMARY KEY,
fname VARCHAR(40),
lname VARCHAR(30),
email VARCHAR(20)
)";

// Execute query
if ($con->query($sql) === TRUE) {
    echo "table created";
} else {
    echo "Error: " . $con->error;
}

// Close connection
$con->close();
?>
