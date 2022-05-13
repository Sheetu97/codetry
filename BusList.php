<?php

// database connection code
if(isset($_POST['txtBusname']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','travel_db');

// get the post records
$txtBusno = $_POST['txtBusno'];
$txtBusname = $_POST['txtBusname'];
$txtFromLocation = $_POST['txtFromLocation'];
//$txtAdd = $_POST['txtAdd'];
$txtToLocation = $_POST['txtToLocation'];
$txtService = $_POST['txtService'];
$txtprice = $_POST['txtprice'];
//$txtPassword = $_POST['txtPassword'];
//$txtConfirmPassword = $_POST['txtConfirmPassword'];

//$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO `bus_details` (`busNo`, `busName`, `from_location`, `to_location`, `busService`, `price`)
VALUES ('$txtBusno','$txtBusname',  '$txtFromLocation', '$txtToLocation', '$txtService', '$txtprice')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Sign Up Succesfully ...";
	header("Location: http://localhost/contact/BusList2.php");
	exit();
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>