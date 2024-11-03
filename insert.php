<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'db';  // Add your database name here

// Create connection
$con = new mysqli($hostname, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    echo $con->connect_error;
} else {
    echo "connected";
}

// Insert query
$sql = "INSERT INTO student(fname, lname, email) 
        VALUES('Mst', 'lira', 'lira@gmail.com')";

if ($con->query($sql) === TRUE) {
    echo "data is inserted";
} else {
    echo "Error: " . $con->error;
}

// Close connection
$con->close();
?>
