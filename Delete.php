<?php
$con = mysqli_connect('localhost', 'root', '','travel_db');
$sql = "DELETE FROM `bus_details` WHERE `busNo` ='" . $_GET['busNo'] . "'";

if (mysqli_query($con, $sql)) {
    echo " deleted";
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
?>