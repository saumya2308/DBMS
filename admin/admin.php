<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
</head>
<body>


</body>
</html>
<?php
$dbname ="plaza";
$host="localhost";
$username="root";
$password="";
// Create connection
$conn = new mysqli($host, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
  $sql = "SELECT * FROM moneys";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0)
    {
        echo "<table>";
            echo "<tr>";
                echo "<th>vehicle_id</th>";
                echo "<th>driver_userid</th>";
                echo "<th>amount</th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['vehicle_id'] . "</td>";
                echo "<td>" . $row['driver_userid'] . "</td>";
                echo "<td>" . $row['amount'] . "</td>";
                 
            echo "</tr>";
        }
         echo "</table>";
        // Free result set
        mysqli_free_result($result);        
          }
           else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

$conn->close();
?>