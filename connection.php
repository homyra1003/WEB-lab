<?php
$hostname='localhost';
$username='root';
$password='';

$con=new mysqli($hostname,$username,$password);
if($con->connect_error){
    echo $con->connect_error;
}
else
    {
    echo "connected";
}


$con->close();
?>