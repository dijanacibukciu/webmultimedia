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
    <link rel="stylesheet" href="CSS/index.css">

    <style>
        .hide{
            display:none;
        }
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
            <li><a href="logout.php">Log out</a></li>
            <li><a href="view/dashboard.php" class="<?php echo $hide ?>">Dashboard</a></li>
            <!-- <li><a href="view/register.php">Register</a></li> -->
        </ul>
    </div>

    <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="Fotot/foto1 (1).jpg" style="width:100%">
        <div class="text">Welcome to paradise!</div>
        </div>
    
        <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="Fotot/foto2.jpg" style="width:100%">
        <div class="text">Make unforgettable memories with us!</div>
        </div>
    
        <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="Fotot/foto3.png" style="width:100%">
        <div class="text">Thanks for visiting us!</div>
        </div>
    
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    
    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
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

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        }
    </script>
</body>
</html>

<?php 
}
?>