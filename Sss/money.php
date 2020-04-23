 <?php
$vehicle_id=filter_input(INPUT_POST,'vehicle_id');
$driver_userid=filter_input(INPUT_POST,'driver_userid');
$amount=filter_input(INPUT_POST,'amount');

$dbname ="plaza";
$host="localhost";
$username="root";
$password="";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$shh = "INSERT INTO moneys (vehicle_id,driver_userid,amount)
VALUES ('$vehicle_id','$driver_userid','$amount')";

if ($conn->query($shh) === TRUE)
{?>
<html>
<head><link rel="stylesheet" type="text/css" href="hh.css"></head>    
    <body>
    <h1>TOLL INFORMATION INFORMATION</h1>    
        <table>
        	<tr>
        		<td><h2>VEHICLE ID:</h2><?php echo $vehicle_id ?></td>
        	</tr>
        	<tr>
        		<td><h2>DRIVER USER ID: </h2> <?php echo $driver_userid ?></td>
        	</tr>
        	<tr>
        		<td><h2>AMOUNT: </h2><?php echo $amount ?></td>
        	</tr>

</table>
<h3>FILL THIS FORM AND SHOW TO PLAZA AGENT AND PAY THE AMOUNT. <BR> THANK YOU FOR VISITING<BR> HAPPY JOURNEY</h3>

</body>
</html>
<?php
 }
else {
	echo "ËRROR";
}

$conn->close();
?>