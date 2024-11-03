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
    echo "connected<br>";
}

$sql="SELECT * FROM student";
$result=$con->query($sql);

if($result->num_rows>0){
   while($row=$result->fetch_assoc()){
   echo $row['id'].' '.$row['fname'].' '.$row['lname']. ' '.$row['email'].'<br>';
}
}
else{
    echo $con->error;
}

// Close connection
$con->close();
?>
