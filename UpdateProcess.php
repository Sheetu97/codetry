<?php

$con = mysqli_connect('localhost', 'root', '','travel_db');

// database insert SQL code
//$sql = "SELECT * FROM bus_details ORDER BY busNo DESC";

// insert in database 
//$rs = $con->query($sql);

if(count($_POST)>0) {
mysqli_query($con,"UPDATE `bus_details` set `busNo` ='" . $_POST['txtBusno'] . "', `busName` ='" . $_POST['txtBusname'] . "', `from_location` ='" . $_POST['txtFromLocation'] . "', `to_location` ='" . $_POST['txtToLocation'] . "' , `busService` ='" . $_POST['txtService'] . "' , `price` ='" . $_POST['txtprice'] . "' WHERE `busNo` ='" . $_POST['txtBusno'] . "'");
$message = "Record Modified Successfully";
}
//$result = mysqli_query($con,"SELECT * FROM `bus_details` WHERE `busNo` ='" . $_GET['txtBusno'] . "'");
$result = mysqli_query($con,"SELECT * FROM `bus_details`");
//`busNo` ='" . $_POST['txtBusno'] . "', 
$rows= mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        html {
            background: url("https://media.istockphoto.com/photos/white-tourist-buses-in-a-row-picture-id945297486?k=20&m=945297486&s=612x612&w=0&h=rk3Y2tcASaQfFPnnJ5zPWG1gHsmthFqQHGWKZ_hspxM=");
            /*background: url("C:\Users\Lenovo\source\repos\LetsTravel\Img\bg1.jpg");*/
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 600px;
        }

        body {
            display: grid;
            place-items: center;
            text-align: center;
            background-size: cover;
        }

        
        .row {
            margin-left: -1px;
            margin-right: -3px;
            display: none;
            
        }

        .column {
            float: left;
            width: 50%;
            padding: 5px;
          
            
        }

        /* Clearfix (clear floats) */
        .row::after {
            content: "";
            clear: both;
            display: table;
           

        }

        .Addbutton 
        {
            margin-top: 80px;
            margin-left:600px;
            width:30%;
            border-radius:8px;
            font-size:20px;
            cursor:pointer;
            height:50px;

        }
            .Addbutton:hover {
                background-color: darkgrey;
                color: black;
            }
        .form-popup {
            margin-top: 60px;
            margin-left: 180px;
            
            position: center;
            width:300px;            
            height : 420px;
            border: 3px solid #f1f1f1;
            
        }

        .form-popup .field {
            height: 50px;
            width: 50px;
            display: contents;
            position: absolute;
        }

        .field input {
            height: 10px;
            width: 10px;
            padding-left: 45px;
            font-size: 18px;
            outline: none;
            border: none;
            color: black; /*#e0d2d2;*/
            border: 1px solid rgba(255, 255, 255, 0.438);
            border-radius: 8px;
            background: rgba(105, 105, 105, 0);
        }


           .field input::placeholder {
                color: black;
            }

        /* Add styles to the form container */
        .form-container {
            
           width: 400px;
            padding: 10px;
            background-color: white;
        }

            /* Full-width input fields */
            .form-container input[type=text], .form-container input[type=password] {
                width: 100%;
                padding: 15px;
                margin: 5px 0 22px 0;
                border: none;
                background: #f1f1f1;
            }

                /* When the inputs get focus, do something */
                .form-container input[type=text]:focus, .form-container input[type=password]:focus {
                    background-color: #ddd;
                    outline: none;
                }

            /* Set a style for the submit/login button */
            /*.form-container .btn {
                background-color: #04AA6D;
                color: white;
                padding: 16px 20px;
                border: none;
                cursor: pointer;
                width: 100%;
                margin-bottom: 10px;
                opacity: 0.8;
            }*/

            /* Add a red background color to the cancel button */
            .form-container .cancel {
                background-color: red;
            }

            /* Add some hover effects to buttons */
            .form-container .btn:hover, .open-button:hover {
                opacity: 1;
            }
        .btn {
            margin: 25px 0 0 0;
            width: 60%;
            height: 50px;
            color: black; /*rgb(238, 226, 226);*/
            font-size: 18px;
            font-weight: 600;
            border: 2px solid rgba(255, 255, 255, 0.438);
            border-radius: 8px;
            background: rgba(105, 105, 105, 0);
            margin-top: 10px;
            outline: none;
            cursor: pointer;
            border-radius: 8px;
            background-color:dimgray;
        }

        .button:hover {
            background-color: darkgrey;
            color: black;
        }

    
        .button {
            margin: 25px 0 0 0;
            width: 60%;
            height: 30px;
            color: black; /*rgb(238, 226, 226);*/
            font-size: 18px;
            font-weight: 600;
            border: 2px solid rgba(255, 255, 255, 0.438);
            border-radius: 8px;
            background: rgba(105, 105, 105, 0);
            margin-top: 10px;
            outline: none;
            cursor: pointer;
            border-radius: 8px;
        }

            .button:hover {
                background-color: darkgrey;
                color: black;
            }

        table {
            border-collapse: collapse;
            border-spacing: 1;
            width: 300%;
            border: thin black;
        }
            table.tblcenter {
                margin-top: 100px;
                margin-bottom:auto;
                margin-left: -60px;
                margin-right: 100px;
                display:table;
            }
        th, td {
            text-align: left;
            padding: 16px;
            background-color:bisque;

            border: ridge;
        }

        tr:nth-child(even) {
            background-color: burlywood;
        }
    </style>
</head>
<body>
    <div>
<div class="form-popup" id="myForm">
  <form class="form-container" method="post" action="UpdateProcess.php">
      
    <h1>Update Details</h1>

    <div class="field">
          <label for="bus no"><b>Bus No.</b></label>
          <input type="hidden" name="txtBusno"  id="txtBusno" value="<?php echo $rows['busNo'];?>">
    <input type="text" name="txtBusno" id="txtBusno" placeholder="Enter Bus No."  required>

      </div>
      <div class="field">
          <label for="bus name"><b>Bus Name.</b></label>
    <input type="text" name="txtBusname" id="txtBusname" placeholder="Enter Bus Name." value="<?php echo $rows['busName'];?>" required>

      </div>
    
  
      <div class="field"> 
               
               
          <label for="from location"><b>From Location.</b></label>
    <input type="text" name="txtFromLocation" id="txtFromLocation" placeholder="Enter from location." value="<?php echo $rows['from_location'];?>" required>

      </div>
      <div class="field">
          <label for="to location"><b>To Location.</b></label>
    <input type="text" name="txtToLocation" id="txtToLocation" placeholder="Enter to location." value="<?php echo $rows['to_location'];?>" required>

      </div>
      <div class="field">
        <label for="Service"><b>Service</b></label>
  <input type="text" name="txtService" id="txtService" placeholder="Enter service of bus" value="<?php echo $rows['busService'];?>" required>

    </div>
    <div class="field">
        <label for="price"><b>Price</b></label>
  <input type="text" name="txtprice" id="txtprice" placeholder="Enter pricebus" value="<?php echo $rows['price'];?>" required>

    </div>
   
       <button type="submit" name="addbusdetail" id="addbusdetail" class="btn" onclick="btnClicked()">Update Details</button>
       <script>
     function btnClicked() {
         window.open("http://localhost/contact/BusList2.php");
     }
     </script>
  </form>
</div>
    </div>
    
</body>
</html>
