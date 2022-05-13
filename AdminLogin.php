<?php
// database connection code
if(isset($_POST['txtEmail']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','travel_db');

// get the post records

//$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPassword = $_POST['txtPassword'];
//$txtMessage = $_POST['txtMessage'];

// database insert SQL code
//$sql = "INSERT INTO `tbl_contact` (`id`,`fldEmail`, `fldPassword`) VALUES ('0',  '$txtName', '$txtPassword')";
$sql_query = "SELECT adminName FROM admin_login WHERE `adminName` LIKE '$txtEmail'  AND `adminPassword` LIKE '$txtPassword';";

 $result = mysqli_query($con,$sql_query);
 if(mysqli_num_rows($result) > 0 )
 {
 $row = mysqli_fetch_assoc($result);
 $txtEmail = $row["adminName"];
 header("Location: http://localhost/contact/BusList.html");
	exit();
 }
 else
 {
 echo "Login Failed...Incorrect Email or Password...!";
 }
}
else
{
	echo "Are you a genuine visitor?";
	
}
// insert in database 
/***$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}***/
//$con.close
?>