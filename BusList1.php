<?php

// database connection code
$con = mysqli_connect('localhost', 'root', '','travel_db');

// database insert SQL code
$sql = "SELECT * FROM `bus_details` ORDER BY busNo ASC";

// insert in database 
$rs = $con->query($sql);
if($rs)
{
	echo "Details Fetched Succesfully ...";
	//header("Location: http://localhost:60371/BusList.html");
	exit();
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>