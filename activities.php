<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities</title>
    <link rel="stylesheet" href="CSS/activities.css">

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
        .accordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            text-align: left;
            border: none;
            outline: none;
            transition: 0.4s;
            padding-left: 23px;
            font-size: 30px;
        }
        .panel{
            padding-left: 23px;
            background-color: #eee;
        }
        .active, .accordion:hover {
            background-color: lightgrey;
        }   

        .act{
            padding-top: 20px;
            padding-bottom: 15px;
            background-color: #eee;
            font-size: 40px;
            text-align: center;
        }
        p{
            padding-bottom: 10px;
            font-size: 20px;
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
        <div class="main">
            <h1 class="act">Hotel Activities</h1>
            <button class="accordion">Scuba diving</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <img style="width: 490px; height: 300px;" src="Fotot/scubadiving1.jpg">
                <img style="width: 490px; height: 300px;" src="Fotot/scubadiving.jpg">
                <img style="width: 490px; height: 300px;" src="Fotot/scubadiving3.jpg">
            </div>

            <button class="accordion">Kayaking</button>
            <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <img style="width: 490px; height: 300px;" src="Fotot/kayaking.jpg">
                        <img style="width: 490px; height: 300px;" src="Fotot/kayaking2.jpg">
                        <img style="width: 490px; height: 300px;" src="Fotot/kayaking1.jpg">
            </div>

            <button class="accordion">Surfing</button>
            <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <img style="width: 490px; height: 300px;" src="Fotot/surfing.jpg">
                        <img style="width: 490px; height: 300px;" src="Fotot/surfing1.jpg">
                        <img style="width: 490px; height: 300px;" src="Fotot/surfing2.jpg">
            </div>
            <button class="accordion">Jet skiing</button>
            <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <img style="width: 490px; height: 300px;" src="Fotot/jetskiing.jpg">
                        <img style="width: 490px; height: 300px;" src="Fotot/jetskiing2.jpg">
                        <img style="width: 490px; height: 300px;" src="Fotot/jetskiing1.jpg">
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


   <!--Script-->
   <script>
       var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            /* Toggle between adding and removing the "active" class,
            to highlight the button that controls the panel */
            this.classList.toggle("active");

            /* Toggle between hiding and showing the active panel */
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
            panel.style.display = "none";
            } else {
            panel.style.display = "block";
            }
        });
        }
   </script>
</body>
</html>