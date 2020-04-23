<?php 
$name=filter_input(INPUT_POST,'name');
$driver_userid=filter_input(INPUT_POST,'driver_userid');
$password1=filter_input(INPUT_POST,'password1');

$dbname ="plaza";
$host="localhost";
$username="root";
$password="";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sww = "INSERT INTO sign (name,driver_userid,password1)
VALUES ('$name','$driver_userid','$password1')";

if ($conn->query($sww) === TRUE)
 {echo "LOGIN";
  header('location:money.html');
 }
   else 
{
    echo "INCORRECT INFORMATION";
   }

$conn->close();



 ?>