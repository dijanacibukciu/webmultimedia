<?php
$hide="";
session_start();
if(!isset($_SESSION['username'])){
  header("location:login.php");
}else{
 if($_SESSION['role'] == "admin"){
     $hide = "";
 }else{
    $hide = "hide";
 }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="CSS/style.css">

    <style>
        .hide{
            display:none;
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
            font-size: 20px;
            padding-top: 30px;
        }

        li a:hover {
            color: darkblue;
            font-size: 20px;
        }
        .logo{
            margin-left: 10px;
        }
        .footer{
            background-color: lightgrey;
            margin-top: 800px;
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
            <li><a href="index.php">
                <img src="Fotot/LOGO.png" alt="logo" style="width:100px; height: 40px" class="logo">
            </a></li>
            <li><a href="book.php">Book</a></li>
            <li><a href="photos.php">Photos</a></li>
            <li><a href="location.php">Location</a></li>
            <li><a href="activities.php">Activities</a></li>
            <li><a href="contact.php">More</a></li>
            <li><a href="login.php">Log in</a></li>
            <li><a href="logout.php">Log out</a></li>
            <li><a href="view/dashboard.php" class="<?php echo $hide ?>">Dashboard</a></li>
            <!-- <li><a href="view/register.php">Register</a></li> -->
        </ul>
    </div>

    <!-- Slideshow container -->
    <div class="controls">
        <h2>Maldives</h2>
        <button class="control-r">&gt;</button>
        <button class="control-l">&lt;</button>
    </div> 
    
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
    
   <script src="https://pixijs.download/v6.1.0-rc.4/pixi.min.js"> </script>
   <script src="https://cdn.jsdelivr.net/npm/pixi-filters@latest/dist/pixi-filters.js"></script>
   <script src="JS/function.js"> </script>
     
</body>
</html>

<?php 
}
?>