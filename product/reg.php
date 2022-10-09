<?php
session_start();

    include("sec.php");
    include("first.php");

    if($_SERVER['REQUEST_METHOD'] =="POST")
    {
        
        $name=$_POST['name'];
        $user_name=$_POST['user_name'];
        $email=$_POST['email'];
        $password=$_POST['password'];

        if(!empty($email) &&!empty($password) &&!is_numeric($email))
        {

            
        
            $query="insert into registration(name,user_name,email,password) values ('$name','$user_name','$email','$password')";

            mysqli_query($connection, $query);

            header("Location: login.php");
            die;
        }else
        {
            echo"Please enter some valid information!";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
</head>
<body style="background-image: url('5.png');background-repeat:no-repeat; background-attachmenct: fixed; background-size:cover">

    <style type="text/css">
    
    #text{

        height: 25px;
        border-radius: 5px;
        padding: 4px;
        border: solidthin#aaa;
        width: 100%;
        color: blue;
    }

    #button{

        padding: 10px;
        width: 100px;
        color: white;
        background-color: #9A7B4F;
        border-radius: 50%;
        border: 2px solid #80471C;
    }

    #box{

        background-color: yellow;
        margin: auto;
        width: 300px;
        padding: 20px;
    }

    </style>

    <div id="box"style=" margin-top: 75px; 
                        margin: 100px auto; 
                        background-image: url('6.png');
                        background-repeat:no-repeat; 
                        background-attachmenct: fixed; 
                        background-size:cover">
        
        <form method="post">
            <div style="font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif; 
                        margin: 10px;
                        color: white; background-color: #80471C;">
                        <center>Please Register here!!!</div>

            <input id="text"type="text"name="name"placeholder="Your name"><br><br>
            <input  id="text"type="text"name="user_name"placeholder="Username"><br><br>
            <input id="text"type="text"name="email"placeholder="Email"><br><br>
            <input id="text"type="password"name="password"placeholder="Password"><br><br>

            <input id="button"type="submit" style=" font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif;" style = "yellow" value="Register" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="login.php"style="font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif;color: white">Click to Login</a><br><br>

            
        </form>
    </div>
</body>
</html>
