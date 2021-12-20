<?php
session_start();
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

$sql = mysqli_query($conn, "SELECT count(*) as total from customer WHERE userid = '".$userid."' and
	password = '".$password."'");

$row = mysqli_fetch_array($sql);

if($row["total"] > 0){
        $_SESSION['userid']= $userid;
	header('location:homepage-customer.php');
}
else{
	if($userid=="admin"&& $password=="admin")
	{
			header('location:homepage-admin.php');
	}
	else{
		
	?><script>
		if(window.confirm('Your id or password is error!!!! Try again'))
		{
			window.location.href='index.html';
		};</script>
	
	<?php
	}
}