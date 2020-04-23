<?php
$driver_userid=filter_input(INPUT_POST,'driver_userid');
$driver_name=filter_input(INPUT_POST,'driver_name');
$license_number=filter_input(INPUT_POST,'license_number');
$driver_mobile_number=filter_input(INPUT_POST,'driver_mobile_number');
$driver_address=filter_input(INPUT_POST,'driver_address');
$password1=filter_input(INPUT_POST,'password1');

$dbname ="plaza";
$host="localhost";
$username="root";
$password="";
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sdd = "INSERT INTO driver (driver_userid,driver_name,license_number,driver_mobile_number,driver_address,password1)
VALUES ('$driver_userid','$driver_name','$license_number','$driver_mobile_number','$driver_address','$password1')";

if ($conn->query($sdd) === TRUE) {
    echo "DRIVER DATA ADDED";
} else {
    echo "Error: " . $sdd . "<br>" . $conn->error;
}
$conn->close();
header('location:validation.html')
?>