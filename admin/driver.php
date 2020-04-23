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
$sql = "SELECT * from driver";    
$result = mysqli_query($conn,$sql);    
?>    
<html>
<head><link rel="stylesheet" type="text/css" href="hh.css"></head>    
    <body>
    <h1>DRIVER INFORMATION</h1>    
        <table >    
            <tr>    
                <td>DRIVER USERID</td>    
                <td>DRIVER NAME</td>    
                <td>LICENSE NUMBER</td>  
                <td>DRIVER MOBILE NUMBER</td>    
                <td>DRIVER ADDRESS</td>    
                <td>PASSWORD</td>    
                </tr>     
<?php       
while($row = mysqli_fetch_object($result)){    
?> 
    <tr>  
        <td>  
            <?php echo $row->driver_userid;?>  
        </td>  
        <td>  
            <?php echo $row->driver_name;?>  
        </td>  
        <td>  
            <?php echo $row->license_number;?>  
        </td> 
         <td>  
            <?php echo $row->driver_mobile_number;?>  
        </td>  
        <td>  
            <?php echo $row->driver_address;?>  
        </td>  
        <td>  
            <?php echo $row->password1;?>  
        </td>  
     </tr>
 <?php 
} 
?>
</table>
</body>
</html>