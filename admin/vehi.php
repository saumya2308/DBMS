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
$sql = "SELECT * from vehicle";    
$result = mysqli_query($conn,$sql);    
?>    
<html>
<head><link rel="stylesheet" type="text/css" href="hh.css"></head>    
    <body>   
     <h1>VEHICLE INFORMATION</h1> 
        <table >    
            <tr>    
                <td>VEHICLE ID</td>    
                <td>VEHICLE TYPE</td>    
                <td>DATES</td>  
                <td>VEHICLE MODEL</td>    
                <td>VEHICLE NUMBER</td>      
                </tr>     
<?php       
while($row = mysqli_fetch_object($result)){    
?> 
    <tr>  
        <td>  
            <?php echo $row->vehicle_id;?>  
        </td>  
        <td>  
            <?php echo $row->vehicle_type;?>  
        </td>  
        <td>  
            <?php echo $row->dates;?>  
        </td>  
         <td>  
            <?php echo $row->vehicle_model;?>  
        </td>  
        <td>  
            <?php echo $row->vehicle_number;?>  
        </td>  
     </tr>
 <?php 
} 
?>
</table>
</body>
</html>