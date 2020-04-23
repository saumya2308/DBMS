<?php  
       $dbname ="hostel";
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
$sql = "SELECT * from student";    
$result = mysqli_query($conn,$sql);    
?>    
<html>
<head><link rel="stylesheet" type="text/css" href="hh.css"></head>    
    <body>
    <h1>STUDENT INFORMATION</h1>    
        <table >    
            <tr>    
                <td>TIME</td>    
                <td>DATE</td>    
                <td>GENDER</td>  
                <td>ROOM TYPE</td>    
                <td>ROOM NUMBER</td>    
                <td>NAME</td>  
                <td>MOBILE NUMBER</td>    
                <td>ADDRESS</td>    
                </tr>     
<?php       
while($row = mysqli_fetch_object($result)){    
?> 
    <tr>  
        <td>  
            <?php echo $row->time;?>  
        </td>  
        <td>  
            <?php echo $row->dates;?>  
        </td>  
        <td>  
            <?php echo $row->gender;?>  
        </td> 
         <td>  
            <?php echo $row->room_type;?>  
        </td>  
        <td>  
            <?php echo $row->room_number;?>  
        </td>  
        <td>  
            <?php echo $row->name;?>  
        </td>  
          <td>  
            <?php echo $row->numbers;?>  
        </td>  
        <td>  
            <?php echo $row->address;?>  
        </td>  
     </tr>
 <?php 
} 
?>
</table>
</body>
</html>