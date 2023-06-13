<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <style>
         *{
            margin: 0px;
            padding: 0px;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: grey;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: darkgrey;
        }
        .logo{
            margin-left: 10px;
        }
        .footer{
            background-color: lightgrey;
        }
        h6{
            margin-left: 15px;
            margin-top: 20px;
            font-size: 15px;
        }
        .paradise{
            margin-left: 15px;
            margin-top: 8px;
        }
         body{
             background-color: rgb(209, 244, 245); 
            background-image: url('../Fotot/foto9.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        .row{
            box-shadow: 5px 10px 40px rgb(49, 204, 178);
            width: 500px;
            height: 600px;
            background-color: white;
            margin-top: 70px;
            margin-left: 500px;
        } 

        h1{
            background-color: rgb(49, 204, 178);
            color: white;
            width: 500px;
            height: 10px;
            text-align: center;
            padding-top: 15px;
            padding-bottom: 55px;
        }
        #btn1{
            margin-top: 20px;
        }
        #telephone{
            margin-top: 8px;
            margin-right: 15px;
        }
    </style>
</head>
<body>
    <!-- NAVBAR -->
    <div class="navbar">
        <ul>
            <li><img src="LOGO.png" alt="logo" style="width:100px; height: 40px" class="logo"></li>
            <li><a href="book.php">Book</a></li>
            <li><a href="photos.php">Photos</a></li>
            <li><a href="location.php">Location</a></li>
            <li><a href="activities.php">Activities</a></li>
            <li><a href="contact.php">More</a></li>
            <li><a href="login.php">Log in</a></li>
            <!-- <li><a href="view/register.php">Register</a></li> -->
        </ul>
    </div>

    <!--Main Form-->
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="row">
            <h1>Register form</h1>
            <input type="text" name="name" class = "name" placeholder="name..."> <br><br>
            <input type="text" name="surname" class = "surname" placeholder="surname..."> <br><br>
            <input type="text" name="email" class = "email" placeholder="email..."> <br><br>
            <input type="text" name="username" class = "username" placeholder="username..."><br><br>
            <input type="text" name="password" class ="password" placeholder="password..."><br><br>
            <input type="submit" name="registerBtn" class="submit" value="register"><br><br>
        </div>
    </form>

   <?php include_once '../controller/registerController.php'; ?>


<!-- FOOTER -->
<footer>
            <hr>
            <div class="footer">
                 <div style="float: left">
                     <h6>Find us at:</h6>
                     <p class="paradise">paradisehotel@gmail.com</p> 
                 </div>
         
             
                 <div style="float: right">
                     <button id="btn1"><img src="telephone.png" width="30px" height="30px"></button>
                     <p id="telephone"> + 01 234 567 89</p>
                     <br>
                 </div>
             </div>
        </footer>
        <!-- <script src="JS/register.js"></script> -->
</body>
</html> 