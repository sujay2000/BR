<?php  

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "bike";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}
$brand = $_POST["brand"];
$bname = $_POST["bname"];
$model = $_POST["model"];
$amt = $_POST["amt"];
$type = $_POST["type"];
$img = $_POST["img"];


$sql = "INSERT INTO bike (brand,bname,model,amt,type,img) 
VALUES ('$brand', '$bname', '$model', '$amt', '$type', '$img')";

if($conn->query($sql) === TRUE){
	?>
	<script>
		if(window.confirm('Bike addition succsesfully'))
		{
			window.location.href='homepage-admin.php';
		};</script>
	<?php
}
else{
	?>
	<script>
		if(window.confirm('Oops!!!!!  addition   failed '))
		{
			window.location.href='homepage-admin.php';
		};</script>
	<?php
}


?>