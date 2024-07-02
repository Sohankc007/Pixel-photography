<?php
$servername = 'localhost';
$username = 'root';
$password='p1234';
$dbname= 'pixel';
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
 
    die(mysqli_error($conn));
}

?>