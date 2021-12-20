
<?php  

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "bike";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}
$userid = $_POST["userid"];
$password = $_POST["password"];
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$address = $_POST["address"];
$driving = $_POST["driving"];

$sql = "INSERT INTO customer (name,email,phone,driving,userid,password,address) 
VALUES ('$name', '$email', '$phone', '$driving', '$userid', '$password', '$address')";

if($conn->query($sql) === TRUE){
	?>
	<script>
		if(window.confirm('Registration succsesfully'))
		{
			window.location.href='index.html';
		};</script>
	<?php
}
else{
	?>
	<script>
		if(window.confirm('Oops!!!!!  Registration  failed '))
		{
			window.location.href='index.html';
		};</script>
	<?php
}


?>