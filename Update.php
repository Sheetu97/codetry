<?php

// database connection code
if(isset($_POST['txtBusname']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','travel_db');

//$txtPassword = $_POST['txtPassword'];
//$txtConfirmPassword = $_POST['txtConfirmPassword'];

//$txtMessage = $_POST['txtMessage'];

// database insert SQL code

if(count($_POST)>0) {
    //$sql = "SELECT * FROM bus_details ORDER BY busNo DESC";
mysqli_query($con,"UPDATE `bus_details` set  `busName` ='" . $_POST['txtBusname'] . "', `from_location` ='" . $_POST['txtFromLocation'] . "', `to_location` ='" . $_POST['txtToLocation'] . "' , `busService` ='" . $_POST['txtService'] . "' , `price` ='" . $_POST['txtprice'] . "' WHERE `busNo` ='" . $_POST['txtBusno'] . "'");
$message = "Record Modified Successfully";
}
//$result = mysqli_query($con,"SELECT * FROM `bus_details` WHERE `busNo` ='" . $_GET['txtBusno'] . "'");
$result = mysqli_query($con,"SELECT * FROM `bus_details`");
$rows= mysqli_fetch_array($result);
$result = mysqli_query($con, $sql);
if($result)
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