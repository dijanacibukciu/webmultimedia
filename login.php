<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="CSS/login.css">

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
    <!--NAVBAR-->
    <div class="navbar">
        <ul>
            <li><img src="Fotot/LOGO.png" alt="logo" style="width:100px; height: 40px" class="logo"></li>
            <li><a href="book.php">Book</a></li>
            <li><a href="photos.php">Photos</a></li>
            <li><a href="location.php">Location</a></li>
            <li><a href="activities.php">Activities</a></li>
            <li><a href="contact.php">More</a></li>
            <li><a href="login.php">Log in</a></li>
            <!-- <li><a href="view/register.php">Register</a></li> -->
        </ul>
    </div>

    <!--Main-->
    <form action="login.php" method="post">
        <div class="row">
            <div class="main">
                <h1 class="helloWorld">Hello world!</h1>
                <p class="paragrafi2">Make sure you login to see our incredible offers!</p>
                <p class="paragrafi3">Login with social media!</p>
                <a class="icons" href="https://www.facebook.com/"> 
                    <img alt="Qries" src="Fotot/facebook.jpeg"
                    width="50" height="50">
                </a>
                <a class="icons" href="https://www.instagram.com/"> 
                    <img alt="Qries" src="Fotot/instagram.png"
                    width="50" height="50">
                </a>
            </div>
            <div class="side">
                <!--https://www.codehim.com/demo/login-page-in-html-with-css-code/#-->
                <h1 class="login">Login</h1>
                <p class="paragrafi1">Don't have an account? <a href="view/register.php">Create your account.</a> <br>It takes less than a minute.</p>
                <label id="usernameMessage"></label> <br>
                <input type="text" id="username" name="username" placeholder="username"> <br>
                <label id="passwordMessage"></label> <br>
                <input type="password" id="password" name="password" placeholder="password"> <br>
                <input class="loginButton" name="loginBtn" id="register" type="submit" value="Log in">
            </div>
        </div>
    </form>
    <?php 
    require_once 'loginValidate.php';
    ?>

    <!--FOOTER-->
    <footer>
        <hr>
        <div class="footer">
             <div style="float: left">
                 <h6>Find us at:</h6>
                 <p class="paradise">paradisehotel@gmail.com</p> 
             </div>
     
         
             <div style="float: right">
                 <button id="btn1"><img src="Fotot/telephone.png" width="30px" height="30px"></button>
                 <p id="telephone"> + 01 234 567 89</p>
                 <br>
             </div>
         </div>
    </footer>
    
    <!-- <script src="JS/login.js"></script> -->
</body>
</html>
