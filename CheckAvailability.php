<?php

// database connection code
$con = mysqli_connect('localhost', 'root', '','travel_db');

// database insert SQL code
$sql = "SELECT * FROM bus_details ORDER BY busNo DESC";

// insert in database 
$rs = $con->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head> </head>
    <body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Bus Details | Let's Travel Website' </title>
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
                            color: black;
                        }

                    nav ul li a :hover {
                        color: black;
                    }

        table {
            margin-top: 110px;
            margin-left: 90px;
            font-size: large;
            border-color: aqua;
                        border-radius: 8px;
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
            color: white;
            background-color: grey;
            font-weight:;
            border: 1px aqua;
            padding: 10px;
            text-align: center;
        }

        td {
            font-weight: lighter;
        }
                  
        td : hover {
            color : yellow;

        }
    
    </style>


<div class=" full-page">

<div class=" navbar">

    <h1>WELCOME</h1>
    <nav>
        <ul id="MenuItems">
            <li>
                <button href="#"> Home </button>
            </li>
            <li><button href="#"> Contact/About US </button></li>
            <li>
                <button class=" loginbtn" onclick="document.getElementById(login - form).style.display='block'" style="width:auto">LogOut </button>
            </li>
        </ul>
    </nav>

</div>
</div>
    <section>
        <h1>Bus Details</h1>
        <!-- TABLE CONSTRUCTION-->
        <?php
            if (mysqli_num_rows($rs) > 0) {
        ?>
        <table>
            <tr>
                <th>Id</th>
                <th>Bus Name</th>
                <th>Bus No.</th>
                <th>From Location </th>
                <th>To Location </th>
                <th>Price </th>


            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php
            $i=0;
                while($rows=$rs->fetch_assoc())
                {
            ?>
            <tr>
                <!--FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['busName'];?></td>
                <td><?php echo $rows['busNo'];?></td>
                <td><?php echo $rows['from_location'];?></td>
                <td><?php echo $rows['to_location'];?></td>
                <td><?php echo $rows['busService'];?></td>
                <td><?php echo $rows['price'];?></td>

            </tr>
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