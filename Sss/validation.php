<?php
$vehicle_id=filter_input(INPUT_POST,'vehicle_id');
$driver_userid=filter_input(INPUT_POST,'driver_userid');
$expiry_of_vehicle=filter_input(INPUT_POST,'expiry_of_vehicle');
$expiry_of_license=filter_input(INPUT_POST,'expiry_of_license');

$dbname ="plaza";
$host="localhost";
$username="root";
$password="";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO validation (vehicle_id,driver_userid,expiry_of_vehicle,expiry_of_license)
VALUES ('$vehicle_id','$driver_userid','$expiry_of_vehicle','$expiry_of_license')";

if ($conn->query($sql) === TRUE) {
    echo "DRIVER DATA ADDED";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('location:money.html')
?>
