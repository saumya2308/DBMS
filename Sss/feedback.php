<html>
<head>
<title>FEEDBACK FORM</title>
<link href="feedback.css"rel="stylesheet"type="text/css">
</head>
<body>

<div class="fii">
	<li><a href="vehi.html">LOGIN</a></li>
	<li><a href="feedback.html">FEEDBACK</a></li>
</div>


	<div class="sii">
		<div class="logo"><img src="images/logo1.png"></div>

	<div class="nav">
	<ul>
	<li ><a href="index.html"class="active">HOME</a></li>
		<li><a href="about.html">ABOUT US</a></li>
		<li><a href="plazas.html">TOLL PLAZAS</a></li>
		<li><a href="faqs.html">FAQS</a></li>
		<li><a href="gallery.html">GALLERY</a></li>
 </ul></div></div>



<div class="form">
<h1>FEEDBACK</h1>
<h2>GIVE YOUR VALUABLE FEEDBACK</h2>

<form method="POST" action="feedback.php">

<input type="text"class="form1"placeholder="Name" name="name" align="center"><br>

<input type="number"class="form1"placeholder="Mobile Number" name="mobile" maxlength="10"><br>

<input type="text"class="form1"placeholder="Feeback" name="feedback" maxlength="100"><br>

<select id="ratings"class="form1" name="rating">
<option value="VEHICLE">SELECT</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select><br>

<input type="submit"class="form-control submit"value="SUBMIT"></td></tr>
</form>

<h2>(You send your feedback.If you have any problem,we will try to resolve the problem as soon as possible.Thank You..... )</h2>
</div>

<footer>
	2019 TOLL INFORMATION SYSTEM. ALL RIGHTS RESERVED.
</footer>


</body>
</html>
<?php
$name=filter_input(INPUT_POST,'name');
$mobile=filter_input(INPUT_POST,'mobile');
$feedback=filter_input(INPUT_POST,'feedback');
$rating=filter_input(INPUT_POST,'rating');

$dbname ="plaza";
$host="localhost";
$username="root";
$password="";
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sdd = "INSERT INTO feedback (name,mobile,feedback,rating)
VALUES ('$name','$mobile','$feedback','$rating')";

if ($conn->query($sdd) === TRUE) {
    echo "<script>alert('WE HAVE GOT YOUR FEEDBACK. IF ANY PROBLEM THEN WE WILL SOLVE OR ELSE THANK YOU')</script>";
} else {
    echo "Error: " . $sdd . "<br>" . $conn->error;
}
$conn->close();
?>









