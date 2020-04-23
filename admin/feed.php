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
$sql = "SELECT * from feedback";    
$result = mysqli_query($conn,$sql);    
?>    
<html>
<head><link rel="stylesheet" type="text/css" href="hh.css"></head>    
    <body>    
        <h1>FEEDBACK INFORMATION</h1>
        <table >    
            <tr>    
                <td>NAME</td>    
                <td>MOBILE NUMBER</td>    
                <td>FEEDBACK</td>      
                  <td>RATINGS</td> 
                </tr>     
<?php       
while($row = mysqli_fetch_object($result)){    
?> 
    <tr>  
        <td>  
            <?php echo $row->name;?>  
        </td>  
        <td>  
            <?php echo $row->mobile;?>  
        </td>  
        <td>  
            <?php echo $row->feedback;?>  
        </td>  
         <td>  
            <?php echo $row->rating;?>  
        </td>  
     </tr>
 <?php 
} 
?>
</table>
</body>
</html>