<?php

$con = mysqli_connect('localhost', 'root', '','travel_db');

// database insert SQL code
//$sql = "SELECT * FROM bus_details ORDER BY busNo DESC";

// insert in database 
//$rs = $con->query($sql);

if(count($_POST)>0) {
mysqli_query($con,"UPDATE `admin_login` set  `adminName` ='" . $_POST['name'] . "', `adminPassword` ='" . $_POST['password'] . "', `admin_confpass` ='" . $_POST['confirmpassword'] . "' WHERE `id` ='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
//$result = mysqli_query($con,"SELECT * FROM `bus_details` WHERE `busNo` ='" . $_GET['txtBusno'] . "'")\
$result = mysqli_query($con,"SELECT * FROM `admin_login`");
$rows= mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<style>
     * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        html {
            background: url("https://www.wallpapertip.com/wmimgs/83-838296_web-designer-professional-website-background-images.jpg");
            /*background: url("C:\Users\Lenovo\source\repos\LetsTravel\Img\bg1.jpg");*/
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 1000px;
        }

body {
    display: grid;
            place-items: center;
            text-align: center;
            background-size: cover;
}
h3{
    margin-top: 150px;
}
.form-container {
            
            width: 390px;
            height: 420px;
             position: absoulate;
             background-color: transparent;
             border-radius: 12px;

         }
 
             /* Full-width input fields */
             .form-container input[type=text], .form-container input[type=password] {
                 width: 300px;
                 padding: 25px;
                 margin-left: 25px;
                 border-radius: 9px;
                 background: skyblue;
             }
 
                 /* When the inputs get focus, do something */
                 .form-container input[type=text]:focus, .form-container input[type=password]:focus {
                     background-color: skyblue;
                     outline: none;
                 }
 
.form-popup {

    border: 1px solid rgba(255, 255, 255, 0.438);
            border-radius: 8px;
    margin-top: 120px;
            
    
            margin: center;
            display: block;
            position: center;
            width: 420px;            
            height : 450px;
            border: 3px solid #f1f1f1;
            
            box-shadow: -3px -3px 9px #aaa9a9a2, 3px 3px 7px rgba(147, 149, 151, 0.671);
        
        }

        .form-popup .field {
            height: 50px;
            width: 500px;
            display: contents;
            margin: center;
     
        }

        .field input {
            height: 20px;
            width: 80px;
            padding-left: 45px; 
            font-size: 18px;
            outline: none;
            border: transparent;
            color: black; /*#e0d2d2;*/
            border: 1px solid rgba(255, 255, 255, 0.438);
            border-radius: 8px;
            background: skyblue;
        }


           .field input::placeholder {
                color: grey;
            }

        /* Add styles to the form container */



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
            background-color: dimgray;
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

        
</style>
<body>


<div class="form-popup">
<br>
      <form class="form-container" action="ManageAccount.php" method="post">
      
    <h1>Manage Account</h1>
      <div class="field">
          
     <input type="hidden" name= "id" id="id"  placeholder=" Enter id.." value="<?php  echo $rows['id'];?>">
    <br>
</div> 
      <div class="field">
    <label for="fname">Name</label> <br>
   <br> <input type="text" name= "name" id="name"  placeholder="Your name.." value="<?php echo $rows['adminName'];?>">
    <br>
</div> 
<br>
<div class="field">
    <label for="lname">Password</label><br>
    <br><input type="Password" name= "password" id="password" placeholder="Your Password.. " value="<?php echo $rows['adminPassword'];?>">
</div>

<br>
<div class="field">
    <label for="ConfirmPAssword">Confirm Password</label><br>
    <br><input type="Password" name= "confirmpassword" id="confirmpassword" placeholder="Confirm Your password .." value="<?php echo $rows['admin_confpass'];?>">
</div>

<br>
<br>  <input type="submit" value="Update" class="btn" onclick="btnClicked()">
<script>
     function btnClicked() {
         window.open("http://localhost/contact/BusList2.php");
     }
     </script>
  </form>
</div>

</body>
</html>
