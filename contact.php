<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="CSS/contact.css">

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

   <!--MAIN-->
   <div class="container">
    <form action="action_page.php">
      <!--Section heading-->
        <h2 class="h2">Contact us</h2>
        <!--Section description-->
        <p class="p1">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>
      <label for="fname">First Name</label>
      <input type="text" id="fname" name="firstname" placeholder="Your name..">
  
      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lastname" placeholder="Your last name..">
  
      <label for="country">Country</label>
      <select id="country" name="country">
        <option value="australia">Australia</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
        <option value="kosovo">Kosovo</option>
        <option value="albania">Albania</option>
        <option value="germany">Germany</option>
      </select>
  
      <label for="subject">Subject</label>
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
  
      <input type="submit" value="Submit" id="submit">
  
    </form>
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

</body>
</html>