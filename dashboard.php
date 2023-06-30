<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-image: url('background.jpg');
        background-size: cover;
	    background-position: center;
        height: 723px;
    }
    h1{
        text-align: center;
        padding-top: 10px;
        padding-bottom: 10px;
        color: white;
    }
    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 80%;
        margin-left: 10%; 
    }

    #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #customers tr:nth-child(even){background-color: #f2f2f2;}

    #customers tr:hover {background-color: #ddd;}

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: lightgrey;
        color: white;
    }
    .icon{
        height: 30px;
        border-radius: 10px;
    }
</style>
<body>
    
    <h1>DASHBOARD</h1>

    <table border="1" id="customers">
             <tr>
                 <th>ID</th>
                 <th>NAME</th>
                 <th>SURNAME</th>
                 <th>EMAIL</th>
                 <th>USERNAME</th>
                 <th>PASSWORD</th>
                 <th>Edit</th>
                 <th>Delete</th>
                 
             </tr>

             <?php 
             include_once '../repository/userRepository.php';

             $userRepository = new UserRepository();

             $users = $userRepository->getAllUsers();

             foreach($users as $user){
                echo 
                "
                <tr>
                     <td>$user[Id]</td>
                     <td>$user[Name]</td>
                     <td>$user[Surname] </td>
                     <td>$user[Email] </td>
                     <td>$user[Username] </td>
                     <td>$user[Password] </td>
                     <td><a href='edit.php?id=$user[Id]'>Edit</a> </td>
                     <td><a href='delete.php?id=$user[Id]'>Delete</a></td>
                     
                </tr>
                ";
             }


             
             ?>
             <a class="icons" href="../login.php"> 
                    <input class="icon" type="submit" value="Return back!" >
             </a>
             
    </table>
</body>
</html>