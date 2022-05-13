<?php

// database connection code
if(isset($_POST['txtFromLocation']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','travel_db');

$txtFromLocation = $_POST['txtFromLocation'];
$txtToLocation = $_POST['txtToLocation'];
//$txtPassword = $_POST['txtPassword'];
//$txtConfirmPassword = $_POST['txtConfirmPassword'];

//$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO `bus_details` (`from_location`, `to_location`) values ('$txtFromLocation', '$txtToLocation')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Sign Up Succesfully ...";
	

}

else
{
	echo "Are you a genuine visitor?";
	

}}
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
            height: 1000px;
        }

        body {
            display: grid;
            place-items: center;
            text-align: center;
            background-size: cover;
        }
        button {
            margin: 25px 0 0 0;
            width: 100%;
            height: 50px;
            color: black; /*rgb(238, 226, 226);*/
            font-size: 18px;
            font-weight: 600;
            border: 2px solid rgba(255, 255, 255, 0.438);
            border-radius: 8px;
            background: rgba(105, 105, 105, 0);
            margin-top: 40px;
            outline: none;
            cursor: pointer;
            border-radius: 8px;
        }

            button:hover {
                color: azure;
            }
        
        .full-page {
            height: 100%;
            width: 80%;
            background-image: linear-gradient(rgba(0,0,0,0,4),rgba(0,0,0,0,4)),url(img/bg1.jpg);
            background-position: center;
            background-size: cover;
            position: initial;
        }

        .navbar {
            display: flex;
            align-items: baseline;
            padding: 15px;
            padding-left: 30px;
            padding-right: -10px;
            padding-top: 10px;
        }

        nav {
            flex: 1;
            text-align: right;
        }

            nav ul {
                display: inline-block;
                list-style: none;
                font-size: 20px;
                font-family: sans-serif;
            }

                nav ul li {
                    display: inline-block;
                    margin-right: 20px;
                }

                    nav ul li a {
                        text-decoration: none;
                        font-size: 20px;
                        color: black;
                        font-family: sans-serif;
                    }

                    nav ul li button {
                        font-size: 20px;
                        color: black;
                        outline: none;
                        border: none;
                        background: transparent;
                        cursor: pointer;
                        font-family: sans-serif;

                    }

                        nav ul li button :hover {
                            border-bottom: 3px solid black;
                        }
                       


       nav  ul li ul.dropdown {
            width: 40px; /* Set width of the dropdown */
           height: 50px; 
            background-color: transparent;
            display: none;
              position:fixed;
            
            right: 210px;
            border-radius: 10px;
           
        }

        nav ul li:hover ul.dropdown {
           
            display: block; /* Display the dropdown */
        }

                    nav ul li ul.dropdown li {
                        display: block;
                        height:40px;
                    }
                        nav ul li ul.dropdown li button {
                            font-size:  15px;
                            color: white;
                            outline: hidden;
                            
                            background: transparent;
                            cursor: pointer;
                            font-family: sans-serif;
                            border-radius: 9px;
                        }
                            nav ul li ul.dropdown li button :hover {
                                border-bottom: 3px solid black;
                            }

                a {
                    text-decoration: none;
                    color: palevioletred;
                    font-size: 28px;
                }


        .icon-button {
            margin-top: 15px;
        }

            .icon-button span {
                padding-left: 17px;
                padding-right: 17px;
                padding-top: 6px;
                padding-bottom: 6px;
                color: rgba(244, 247, 250, 0.795);
                border-radius: 5px;
                line-height: 30px;
                background: rgba(255, 255, 255, 0.164);
                backdrop-filter: blur(10px);
            }

                .icon-button span.facebook {
                    margin-right: 17px;
                }

                button:hover,
                .icon-button span:hover {
                    background-color: #babecc8c;
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
            margin-left:550px;
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
            display: none;
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
<body><div class=" full-page">

    <div class=" navbar">
    
        <h1>WELCOME</h1>
        <nav>
    
        <ul id="MenuItems">
                        <li>
    
                            <button onclick=" btnHome()"> Home </button>
                            <script>
                function btnHome() {
                    window.open("http://localhost/contact/Admin.html");
    
                }
                            </script>
    
                        </li>
                        <li><button href="#"> Contact/About US </button>
                   
                <li><button href="http://localhost/contact/CustomerLogin.html">Log Out </button>
                   
                      </li>     
                        
                    </ul>
                </nav>
    
            </div>
            
    </div>

    <div>
                <span class="fa fa-add icon"></span>
        <input type="button" value="Add New"  class="Addbutton" onclick="openForm()">
        
<div class="form-popup" id="myForm">
  <form class="form-container" action="AddNewLocation.php" method="post">
    <h1>Add New Location</h1>
  
      <div class="field">
          <label for="from location"><b>From Location.</b></label>
    <input type="text" name="txtFromLocation" id="txtFromLocation" placeholder="Enter from location." value="" required>

      </div>
      <div class="field">
          <label for="to location"><b>To Location.</b></label>
    <input type="text" name="txtToLocation" id="txtToLocation" placeholder="Enter to location." value="" required>

      </div>
       <button type="submit" name="addbusdetail" id="addbusdetail" class="btn" onclick="btnClicked()">Add New Location</button>
       <script>
     function btnClicked() {
         window.open("http://localhost/contact/CustomerBookingPage.php");
     }
     </script>
  </form>
</div>

<script>
    
    /*function opentable() {
        document.getElementById("myTable").style.display = "table";
    }*/
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

</script>
    </div>
    
</body>
</html>
