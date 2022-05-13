<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Book Your Ticket Let's Travel Website' </title>
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
            background: url("https://i.ytimg.com/vi/u_yH9URvfuw/maxresdefault.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 1100px;
        }

        body {
            display: grid;
            place-items: center;
            text-align: center;
            background-size: cover;
        }

        .content {
            width: 420px;
            height: 920px;
            border-radius: 40px;
            padding: 60px 50px;
            margin-top: 20px;
            box-shadow: -8px -7px 12px black, 3px 3px 7px whitesmoke;
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
            color: whitesmoke; /*#e0d2d2;*/
            border: 1px solid rgba(255, 255, 255, 0.438);
            border-radius: 8px;
            background: rgba(105, 105, 105, 0);
        }


            .field input::placeholder {
                color: white;
            }

            .radio
  position: relative
  cursor: pointer
  line-height: 20px
  font-size: 20px
  margin: 15px
  .label
    position: relative
    display: block
    float: left
    margin-right: 10px
    width: 20px
    height: 20px
    border: 4px  white
    border-radius: 100%
    -webkit-tap-highlight-color: transparent
    &:after
      content: ''
      position: absolute
      top 3px
      left 3px
      width 20px
      height 20px
      border-radius 100%
      background white
      transform scale(0)
      transition all .2s ease
      opacity .08
      pointer-events: none
  &:hover
    .label:after
      transform scale(3.6)
    
  
input[type="radio"]:checked + .label
  border-color $white 
  &:after
    transform scale(1)
    transition all .2s cubic-bezier(.35,.9,.4,.9)
    opacity 1

.cntr
  position absolute
  top calc(50% - 10px)
  left 0
  width 100%
  text-align center

.hidden
  display none
  
//dribbble 
.credit
  position: fixed
  right: 20px
  bottom: 20px
  transition: all .2s ease
  -webkit-user-select: none
  user-select: none
  opacity: .6
  img
    width: 72px
  &:hover
    transform: scale(.95)

        .field:nth-child(2) {
            margin-top: 20px;
        }

        .field span {
            position: absolute;
            width: 50px;
            line-height: 50px;
            color: transparent;
        }

        .field select {
            height: 100%;
            width: 100%;
            padding-left: 45px;
            font-size: 18px;
            outline: none;
            border: none;
            color: white;
            
            border: 1px solid rgba(255, 255, 255, 0.438);
            border-radius: 8px;
            background: transparent;
        }
        .field select option
        {
            color: black
        }

        .field textarea {
            height: 100%;
            width: 100%;
            padding-left: 45px;
            font-size: 18px;
            outline: none;
            border: none;
            color: white;
            
            border: 1px solid rgba(255, 255, 255, 0.438);
            border-radius: 8px;
            background: transparent;
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
                            color: aqua;
                        }

                    nav ul li a :hover {
                        color: aqua;
                    }

        a {
            text-decoration: none;
            color: black;
            font-size: 16px;
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
    </style>
</head>
<body>

    <div class=" full-page">

        <div class=" navbar">

            <h1>WELCOME</h1>
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
                        </script>       </li>
                </ul>
            </nav>

        </div>
    </div>
    <div class="content">
        <div class="text">Book Ticket </div>
        <form action="CustomerBooking.php"  method="post">
            
     <br>


            <div class="field">
                <span class="fa fa-user"></span>
                <input type="text" name="fullname" id="fullname" placeholder="Full Name" required>

            </div>

<br>
            <div class="field">
                <span class="fa fa-user"></span>
                <input type="email" name="emailid" id="emailid" placeholder="Email Id" required>
            </div>

            <br> <div class="field">
                <span class="fa "></span>
                <input type="text" name="add" id="add" placeholder="Address" required>

            </div></br>

            <div class="field">
                <span class="fa "></span>
                <input type="text" name="Contactno" id="Contactno" placeholder="contact no." required>

            </div> 
            <br> <div class="field">
              
            <input type="date" id="checkin" name="checkin" placeholder="Put a Date" required>
        </div>  <br>
        <div class="field">
                <span class="fa "></span>
                <input type="text" name="TxtFromLocation" id="TxtFromLocation" placeholder="Add From Location" required>
            </div> <br>
            <div class="field">
                <span class="fa "></span>
                <input type="text" name="TxtToLocation" id="TxtToLocation" placeholder="Add To Location" required>
            </div> <br>
            <div class="field">
                <span class="fa "></span>
                <input type="text" name="TxtService" id="TxtService" placeholder="Add Service" required>
            </div> 
            <br>
           
 <div class="field">
<span class="fa "></span>
 <?php   
            
            /*$result = $con->query("select `price` from `bus_details` where  $txtfrom_location = $_GET [`from_location`]  and  $txtto_location = $_GET [`to_location`] limit 1 ");*/
            $con = mysqli_connect('localhost', 'root', '','travel_db');
      
            $result = $con->query("select `price` from `bus_details` limit 1");
            if (mysqli_num_rows($result) >0)
             {
            $i=0;
            while ($row = mysqli_fetch_array($result)) 
           {
           /* echo $row['price'];*/
           
           echo "<textarea value= 'Choose from location' name='Price' id='busService'>";
        
           echo $row['price'];
           $i++;
        }
        echo "</textarea>";
    }
    else {
    echo "No result found";
    }
            ?>
</div><br>   
<!----<b> OR Want Add New Location </b>
       <p><a href="http://localhost/contact/AddNewLocation.php">Add New Location!</a></p>--->

       
       
<div class="cntr">
  
  <label for="opt1" class="radio">
    <input type="radio" name="rdo" id="opt1" class="hidden" value = "Credit/Debit Card"/>
    <span class="label"></span>Credit/Debit Card
  </label>
  
  <label for="opt2" class="radio">
    <input type="radio" name="rdo" id="opt2" class="hidden" value="UPI"/>
    <span class="label"></span>UPI
  </label>
  
  <label for="opt3" class="radio">
    <input type="radio" name="rdo" id="opt3" class="hidden" value="Gpay/ Phone pe"/>
    <span class="label"></span>Gpay/ Phone pe
  </label>
  
  <label for="opt4" class="radio">
    <input type="radio" name="rdo" id="opt4" class="hidden" value="Cash"/>
    <span class="label"></span>Cash
  </label>
  

</div>
   <button onclick=" btnClicked()" name = "bookticket" class="btn"> Book Ticket </button>
            <script>
            function btnClicked() {
                window.open("http://localhost/contact/BookingDone.php");
            }

            </script>
        </form>
    </div>

</body>
</html>