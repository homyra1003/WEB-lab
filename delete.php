<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'db';  

// Create connection
$con = new mysqli($hostname, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    echo $con->connect_error;
} else {
    echo "connected<br>";
}

$sql = "DELETE FROM student WHERE id=3"; 
if ($con->query($sql) === TRUE) { 
    echo "Data is deleted";
} else {
    echo $con->error;
}

// Close connection
$con->close();
?>
