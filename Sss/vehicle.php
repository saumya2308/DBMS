<?php
$vehicle_id=filter_input(INPUT_POST,'vehicle_id');
$vehicle_type=filter_input(INPUT_POST,'vehicle_type');
$dates=filter_input(INPUT_POST,'dates');
$vehicle_model=filter_input(INPUT_POST,'vehicle_model');
$vehicle_number=filter_input(INPUT_POST,'vehicle_number');

$dbname ="plaza";
$host="localhost";
$username="root";
$password="";
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sas = "INSERT INTO vehicle (vehicle_id,vehicle_type,dates,vehicle_model,vehicle_number)
VALUES ('$vehicle_id','$vehicle_type','$dates','$vehicle_model','$vehicle_number')";

if ($conn->query($sas) === TRUE) {
    echo "VEHICLE DATA ADDED";
} else {
    echo "Error: " . $sas . "<br>" . $conn->error;
}
$conn->close();
header('location:driver.html')
?>