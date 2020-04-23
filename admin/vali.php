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
?>

<?php        
$sql = "SELECT * from validation";    
$result = mysqli_query($conn,$sql);    
?>    
<html>
<head><link rel="stylesheet" type="text/css" href="hh.css"></head>    
    <body>  
     <h1>VALIDATION INFORMATION</h1>  
        <table >    
            <tr>    
                <td>VEHICLE ID</td>    
                <td>DRIVER USERID</td>    
                <td>EXPIRY DATE OF VEHICLE</td> 
                <td>EXPIRY DATE OF LICENSE</td>    
                </tr>     
<?php       
while($row = mysqli_fetch_object($result)){    
?> 
    <tr>  
        <td>  
            <?php echo $row->vehicle_id;?>  
        </td>  
        <td>  
            <?php echo $row->driver_userid;?>  
        </td>  
        <td>  
            <?php echo $row->expiry_of_vehicle;?>  
        </td>
          <td>  
            <?php echo $row->expiry_of_license;?>  
        </td>   
     </tr>
 <?php 
} 
?>
</table>
</body>
</html>