<?php

// database connection code
$con = mysqli_connect('localhost', 'root', '','travel_db');

// database insert SQL code
$sql = "SELECT id, fullname, emailid, phoneno FROM `customer_detail`";

// insert in database 
$rs = $con->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head> </head>
    <body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Customer's LIST VIEW | Let's Travel Website' </title>
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

                    nav ul li a {
                        font-size: 25px;
                       color:black;
                        font-weight:bold;
                       
                        background: transparent;
                        cursor: pointer;
                        font-family: sans-serif;
                        border-radius: 5px;
                    }
                        nav ul li a:hover {
                        color: #babecc8c;
                        }

                    nav ul li button {
                        font-size: 20px;
                        color: black;
                        
                       
                        background: transparent;
                        cursor: pointer;
                        font-family: sans-serif;
                        border-radius: 6px;
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
            color: white;
          
            display: block:
            font-size: 18px;
            cursor: pointer;
            border : 2px;   
            border-radius: 25px;
        }
        a:hover
             {
                 color : black;
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
    #buslist{
                 color: black;

             }
             h1{
                   
            margin-top: 50px;
            margin-left: 10px;      
             }

        table {
            
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
    </style>


<div class=" full-page">

<div class=" navbar">

    <h1>WELCOME</h1>
    <nav>
        <ul id="MenuItems">
            <li>
                <a href="http://localhost/contact/Admin.html"> Home </a>
            </li>
            <li><a href="http://localhost/contact/BusList2.php"> Bus List </a></li>
            <li>
            <a href="#"> Adminastrator </a></li>
        </ul>
    </nav>

</div>
</div>
    <section id= "buslist">
        <h1>Customer List Details</h1>
        <!-- TABLE CONSTRUCTION-->
        <?php
            if (mysqli_num_rows($rs) > 0) {
        ?>
        <table>
            <tr>
                
            
                <th>Id.</th>
                <th>Full Name</th>
                <th>Email ID </th>
                <th>Phone No </th>
                


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
               
                <td><?php echo $rows['phoneno'];?></td>
                
               
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