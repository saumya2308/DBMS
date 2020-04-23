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
$sql = "SELECT * from moneys";    
$result = mysqli_query($conn,$sql);    
?>    
<html>
<head><link rel="stylesheet" type="text/css" href="hh.css"></head>    
    <body>    
        <table >    
            <tr>    
                <td>VEHICLE ID</td>    
                <td>DRIVER USERID</td>    
                <td>AMOUNT</td>    
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
            <?php echo $row->amount;?>  
        </td>  
     </tr>
 <?php 
} 
?>
</table>
</body>
</html>