<?php
$hostname='localhost';
$username='root';
$password='';
$dbname='db';

$con=new mysqli($hostname,$username,$password,$dbname);
if($con->connect_error){
    echo $con->connect_error;
}
else
    {
    echo "connected<br>";
}

$sql="UPDATE student SET fname='mst', lname='mira', email='mira@gmail.com' WHERE id=2 ";
if($con->query($sql)==TRUE){
    echo "value is updated";
}
else{
    echo $con->error;
}

$con->close();
?>