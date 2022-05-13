<?php


$con = mysqli_connect('localhost', 'root', '','travel_db');

// database connection code
if(isset($_POST['bookticket']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
// get the post records
$fullname = $_POST['fullname'];
$emailid = $_POST['emailid'];
$add = $_POST['add'];
$Contactno = $_POST['Contactno'];
$checkin = $_POST['checkin'];
$TxtFromLocation = $_POST['TxtFromLocation'];
$TxtToLocation = $_POST['TxtToLocation'];
$TxtService = $_POST['TxtService'];
$Price = $_POST['Price'];
$rdo = $_POST['rdo'];

//$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO `customer_bookingdone` (`fullname`, `emailid`, `address`, `contact_no`, `DT`, `from_location`, `to_location`, `busservice`, `price`, `payment_method`)
VALUES ('$fullname',  '$emailid', '$add', '$Contactno', '$checkin','$TxtFromLocation',  '$TxtToLocation', '$TxtService', '$Price', '$rdo')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
     header("Location: http://localhost/contact/BookingDone.php");
	exit();
}
else
{
         echo "not inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>