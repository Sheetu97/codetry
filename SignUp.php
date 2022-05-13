<?php

// database connection code
if(isset($_POST['txtfullName']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','travel_db');

// get the post records

$txtfullName = $_POST['txtfullName'];
$txtEmail = $_POST['txtEmail'];
$txtConfirmemail = $_POST['txtConfirmemail'];
//$txtAdd = $_POST['txtAdd'];
$txtContact = $_POST['txtContact'];
$txtPassword = $_POST['txtPassword'];
$txtConfirmPassword = $_POST['txtConfirmPassword'];

if ($_POST["txtPassword"] === $_POST["txtConfirmPassword"])
{
 echo "success!";
} else 
{ 
	echo "failed";
}


//$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO `customer_detail` (`id`,`fullname`, `emailid`, `confirmemailid`, `phoneno`, `password`, `confirmpassword`)
VALUES ('0',  '$txtfullName', '$txtEmail', '$txtConfirmemail', '$txtContact', '$txtPassword', '$txtConfirmPassword')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo '<script> alert ("Sign Up Succesfully ...")</script>';
	header("Location: http://localhost/contact/CustomerBookingPage.php");
	exit();
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>