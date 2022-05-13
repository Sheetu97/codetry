<?php

// database connection code
$con = mysqli_connect('localhost', 'root', '','travel_db');

//$sql= "SELECT `fullname`, `contact_no`, `DT, `from_location`, `to_location`,  `price`, `payment_method` FROM `customer_bookingdone`"; 
//$sql = "Select * from customer_bookingdone";

$sql = "SELECT * FROM customer_bookingdone limit 1";
$rs = $con->query($sql);
?>
    
 <?php   //$result = mysqli_query($con,"SELECT * FROM `bus_details` WHERE `busNo` ='" . $_GET['txtBusno'] . "'");
       //`busNo` ='" . $_POST['txtBusno'] . "', 
    // database insert SQL code
//$sql = "SELECT `fullname`, `contact_no`, `DT, `from_location`, `to_location`,  `price`, `payment_method` FROM customer_bookingdone  ";
//$result = mysqli_query($con,"SELECT `fullname`, `contact_no`, `DT, `from_location`, `to_location`,  `price`, `payment_method` FROM `customer_bookingdone`");
//$row    = mysqli_fetch_array($result);
//while ($row    = mysqli_fetch_array($result)
            //{

                //$fullname     = $row['fullname'];
                //$contact_no     = $row['contact_no'];
                //$DT     = $row['DT'];
                //$from_location     = $row['from_location'];
                //$to_location     = $row['to_location'];
                //$price     = $row['price'];
                //$payment_method = $row['payment_method'];
               
            //}
// insert in database 
?>



<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Your Ticket |Let's Travel Website' </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        html {
            background: url("data:image/jpeg;base64,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");
            /*https://c1.wallpaperflare.com/preview/592/961/272/bus-passengers-people-seats.jpg") 
            for bus list page = https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8K8ugUe5Vgke0C_fezHcmUn3ZZHkLzOFigA&usqp=CAU*/
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

        .content {
            width: 330px;
            border-radius: 10px;
            padding: 40px 30px;
            margin-top: 100px;
            box-shadow: -3px -3px 9px #aaa9a9a2, 3px 3px 7px rgba(147, 149, 151, 0.671);
        }


            .content .text {
                font-size: 25px;
                font-weight: 600;
                margin-bottom: 35px;
                color: black;
            }

            .content .field {
                height: 50px;
                width: 100%;
                display: flex;
                position: relative;
            }

        .field input {
            height: 100%;
            width: 100%;
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

        .field:nth-child(2) {
            margin-top: 20px;
        }

        .field span {
            position: absolute;
            width: 50px;
            line-height: 50px;
            color: #ffffff;
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
        .btn2 {
            margin-left: -1200px;
            width: 100px;
            height: 60px;
            color: black; /*rgb(238, 226, 226);*/
            font-size: 18px;
            font-weight: 600;
            border: 2px solid rgba(255, 255, 255, 0.438);
            border-radius: 8px;
            background: darkgrey;
            margin-top: 40px;
            outline: none;
            font-family: sansserif;
            cursor: pointer;
            border-radius: 8px;
}

/* Darker background on mouse-over */
.btn2:hover {
  background-color: grey;
}

        .content .or {
            color: rgba(255, 255, 255, 0.733);
            margin-top: 9px;
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
                        color: white;
                        font-family: sans-serif;
                    }

                    nav ul li button {
                        font-size: 20px;
                        color: white;
                        outline: none;
                        border: none;
                        background: transparent;
                        cursor: pointer;
                        font-family: sans-serif;
                    }

                        nav ul li button :hover {
                            color: rgb(189, 9, 9);
                            background-color: black;
                        }

                    nav ul li a :hover {
                        color: rgb(13, 14, 14);
                        background-color: black;
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
                color: rgba(16, 16, 17, 0.795);
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
                
                h2 {
            margin-top: 40px;
            margin: center;
          

            color: white;
            
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', ' Calibri', 'Trebuchet MS', 'sans-serif';
        }

    #buslist{
                 color: black;

             }
             h1{
                   
            margin-top: -80px;
            margin-left: 10px;      
             }

        table {
            margin-top: 50px;
            margin: center;
            font-size: large;
            border-color: aqua;
            border-collapse: collapse;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
                        
        }

        h1 {
            margin-top: 40px;
            margin-left: 10px;
            text-align: center;
            color: white;
            
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', ' Calibri', 'Trebuchet MS', 'sans-serif';
        }

        td {
            border-bottom: 1px solid #dddddd
            background-color: white;
            border: aqua;
            
        }
        td : hover {
            color : aqua;

        }

        th
        {
            
            color: white;
            background-color: black;
            font-weight: bold;
            border: 1px aqua;
            padding: 12px;
            text-align: center;
            
        }
        td {
            background-color: white;
            
            color: black;
            
            font-weight: black;
            border: 1px aqua;
            padding: 10px;
            text-align: center;
        }

        td {
            font-weight: lighter;
        }

    </style>
    <div class=" full-page">

        <div class=" navbar">

            <h1>WELCOME</h1>
            <h2>Your Ticket</h2>
            <nav>
                <ul id="MenuItems">
                    <li>
                        <button onclick=" btnHome()" > Home </button>
                           <script>
            function btnHome() {
                window.open("http://localhost/contact/Admin.html");

            }
                        </script>
                    </li>
                    <li><button onclick=" btnHome1()" > Contact/About US </button>
                    <script>
            function btnHome1() {
                window.open("http://localhost/contact/ContactUs.html");

            }
                        </script>
                </li>
                  
                    <li>
                        <button onclick=" btnHome2()" > Logout     </button></li>
                        <script>
            function btnHome2() {
                window.open("http://localhost/contact/CustomerLogin.html");

            }
                        </script>
                </ul>
            </nav>

        </div>
    </div>
    <section id= "buslist">
    
        <!-- TABLE CONSTRUCTION-->
        <?php
            if (mysqli_num_rows($rs) > 0) {
        ?>
        <table>
            <tr>
                <th> YOUR ID </th>
                <th>FullName </th>
                <th>Email ID </th>
                <th>Address </th>
                <th>Contact No. </th>
                <th> Booking Date </th>
                <th>From Location </th>
                <th>To Location </th>
                <th>Bus Service </th>
                 <th>Price </th>
                <th> Your  Selected Payement Method</th>


            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php
            $i=0;
                while($rows = mysqli_fetch_array($rs))
                {
            ?>
            <tr class="<?php if(isset($classname)) echo $classname;?>">
                <!--FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN-->
                    <td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['fullname'];?></td>                
                <td><?php echo $rows['emailid'];?></td>
                <td><?php echo $rows['address'];?></td>
                <td><?php echo $rows['contact_no'];?></td>
                <td><?php echo $rows['DT'];?></td>
                <td><?php echo $rows['from_location'];?></td>
                <td><?php echo $rows['to_location'];?></td>                
                <td><?php echo $rows['busservice'];?></td>
                <td><?php echo $rows['price'];?></td>
                <td><?php echo $rows['payment_method'];?></td>
            
                <!---<td><a style="border-radius:5px;" href="http://localhost/contact/UpdateProcess.php?id=<?php echo $rows["busNo"]; ?>">Update</a>
                &nbsp <a href="http://localhost/contact/Delete.php?id=<?php echo $rows["busNo"]; ?>">Delete</a></td>--->
     
            </tr>
            <!-----<td><button> Edit </button> <button>Delete</button> </td>--->
            
            <?php
            $i++;
                }
            ?>
        </table>
        <?php
}
else {
echo "No result found";
}
?>
    </section>

    <!-------<div class="content">
        <div class="text"> Your Booking Done Succesfully</div>
        <form method="GET" action="BookingDone.php">

               
        <span>Full name:</span> <?php echo $row1['fullname']; ?>
        <span>Contact No : </span> <?php echo $row1['contact_no']; ?>
        <span>Date:</span> <?php echo $row1['DT']; ?>
        <span>Arrival:</span> <?php echo $row1['from_location']; ?>
        <span>Departure:</span> <?php echo $row1['to_location']; ?>
        <span>Price:</span> <?php echo $row1['price']; ?>
        <span>You Selected payment method :</span> <?php echo $row1['payment_method']; ?>----->
      
           
           <!--<div class="field">
                     
                <label for="bus no"><b>Full name </b></label>
                <input type="text" name="fullname" id="fullname"  value ="<?php echo $row['fullname'];?>" required>

            </div>
            <div class="field">
          <label for="bus no"><b>Contact No :   </b></label>
          <input type="text" name="contact_no" id="contact_no"  value="<?php echo $row['contact_no'];?>" required>

            </div>

            <div class="field">
        
            <label for="bus no"><b> Date :   </b></label>
            <input type="text" name="DT" id="DT"  value="<?php echo $row['DT'];?>" required>

        </div>
     
                 <div class="field">
          <label for="bus no"><b> Arrival   :  </b></label>
          <input type="text" name="from_location" id="from_location"  value="<?php echo $row['from_location'];?>" required>

            </div>

            <div class="field">
                
              
          <label for="bus no"><b> Departure:    </b></label>
          <input type="text" name="to_location" id="to_location"  value="<?php echo $row['to_location'];?>" required>

            </div>

   <div class="field">
             
          <label for="bus no"><b> Price :   </b></label>
          <input type="text" name="price" id="price"  value="<?php echo $row['price'];?>" required>

            </div>
            <div class="field">
          <label for="bus no"><b> You Selected payment method :  </b></label>
          <input type="text" name="payment_method" id="payment_method"  value="<?php echo $row['payment_method'];?>" required>

        </div>--->
        <button class="btn2" ><i class="fa fa-download"></i> Download</button>
        </form>
    </div>
    

</body>
</html>