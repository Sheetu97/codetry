<?php

// database connection code
$con = mysqli_connect('localhost', 'root', '','travel_db');

// database insert SQL code
$sql = "SELECT * FROM bus_details";

// insert in database 
$rs = $con->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head> </head>
    <body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>BUS LIST VIEW | Let's Travel Website' </title>
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
            padding-left: 800px;
            padding-right: -10px;
            padding-top: 30px;
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
                            display: block;
                            background: transparent;
                            cursor: pointer;
                            font-family: sans-serif;
                            border-radius: 9px;
                            position: absolute;
                        }
                            nav ul li ul.dropdown li button :hover {
                                border-bottom: 3px solid black;
                            }
                            nav ul li ul.dropdown li button.logoutbtn
                            {
                                
                                
                            }

                a {
                    text-decoration: none;
                    color: black;
                    font-size: 18px;
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
    
    #buslist{
                 color: black;

             }
             h1{
                   
            margin-top: 50px;
            margin-left: 10px;      
             }

        table {
            margin-top: 100px;
            margin: center;
            font-size: large;
            border-color: aqua;
                        
        }

        h1 {
            margin-top: 80px;
            margin-left: 10px;
            text-align: center;
            color: white;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', ' Calibri', 'Trebuchet MS', 'sans-serif';
        }

        td {
            background-color: black;
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
            color: black;
            background-color: white;
            font-weight:;
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
    <nav>

    <ul id="MenuItems">
                    <li>

                        <button onclick=" btnHome()" > Customer Details </button>
                        <script>
            function btnHome() {
                window.open("http://localhost/contact/CustomerList.php");

            }
                        </script>

                    </li>
                    <li><button href="#"> Bus List </button>
               
            <li><button href="#">Adminstrator <i class="fa fa-caret-down"></i></button>
               
            
            <ul class="dropdown">
                <li><button onclick="btnHome2()">Manage Accounts</button>
                <script>
            function btnHome2() {
                window.open("http://localhost/contact/ManageAccount.php");

            }
                        </script>

            </li>

                <li><button onclick="btnHome1()" class="logoutbtn">Logout</button>
                <script>
            function btnHome1() {
                window.open("http://localhost/contact/AdminLogin.html");

            }
                        </script>

            </li>
                 </ul></li>
        
                    
                </ul>
            </nav>

        </div>
        
</div>
    <section id= "buslist">
        <h1>Bus List Details</h1>
        <!-- TABLE CONSTRUCTION-->
        <?php
            if (mysqli_num_rows($rs) > 0) {
        ?>
        <table>
            <tr>
                
            
                <th>Bus No.</th>
                <th>Bus Name</th>
                <th>From Location </th>
                <th>To Location </th>
                <th>Services</th>
                <th>Price </th>
                <th> Action</th>


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
                <td><?php echo $rows['busNo'];?></td>
                <td><?php echo $rows['busName'];?></td>
                <td><?php echo $rows['from_location'];?></td>
                <td><?php echo $rows['to_location'];?></td>
                <td><?php echo $rows['busService'];?></td>
                <td><?php echo $rows['price'];?></td>
                <td><a style="border-radius:5px;" href="http://localhost/contact/UpdateProcess.php?id=<?php echo $rows["busNo"]; ?>">Update</a>
                &nbsp <a href="http://localhost/contact/Delete.php?id=<?php echo $rows["busNo"]; ?>">Delete</a></td>
     
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
</body>

</html>