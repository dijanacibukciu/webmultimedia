<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photos</title>
    <link rel="stylesheet" href="CSS/photos.css">

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
        body{
            background-color: #eee;
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

   <!--MAIN-->
    <div class="container">
        <h1>
            All that our hotel involves:
        </h1>
        <div class="row1">
            <div class="main">
                <!--Carousel-->
                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="Fotot/room.jpg" style="width: 700px">
                    <div class="text">Room by day!</div>
                </div>
                
                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="Fotot/room1.jpg" style="width: 700px">
                    <div class="text">Room by night!</div>
                </div>
                
                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="Fotot/room2.jpg" style="width: 700px">
                    <div class="text">Underwater room!</div>
                </div>
                
                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <div class="side">
                <!--The restaurant-->
                <img src="Fotot/4.jpg" alt="restaurant" style="width: 100%; height: 70%;">
                <h4 style="text-align: center;">The restaurant!</h4> <br>
                <p4 class="rText"> Our hotel involves breakfast, lunch and dinner. With all types of food you can enjoy every moment you spend here with us. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat lorem. </p4>
            </div>
        </div>
        <div class="row3">
            <div class="breakfast">
                <img src="Fotot/Breakfast.jpg" alt="" style="width: 500px; height: 500px;">
                <p class="p">Breakfast</p>
            </div>
            <div class="lunch">
                <img src="Fotot/Lunch.jpg" alt="" style="width: 500px; height: 500px;">
                <p class="p">Lunch</p>
            </div>
            <div class="dinner">
                <img src="Fotot/Dinner.jpg" alt="" style="width: 500px; height: 500px;">
                <p class="p">Dinner</p>
            </div>
        </div>
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