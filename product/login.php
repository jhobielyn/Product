<?php

session_start();

    include("sec.php");
    include("first.php");

    if($_SERVER['REQUEST_METHOD'] =="POST")
    {
        
        $email=$_POST['email'];
        $password=$_POST['password'];

        if(!empty($email) &&!empty($password) &&!is_numeric($email))
        {

            
            $query="select * from registration where email = '$email' limit 1";
            $result=mysqli_query($connection, $query);

            if($result)
            {
                if($result&&mysqli_num_rows($result) >0)
                {

                    $user_data=mysqli_fetch_assoc($result);
                    
                    if($user_data['password'] ===$password)
                    {

                        $_SESSION['id'] =$user_data['id'];
                        header("Location: indexx.php");
                        die;
                    }
                }
            }
            
            echo"Wrong username or password!";
        }else
        {
            echo"Wrong username or password!";
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    
</head>
<body style="background-image: url('5.png');
            background-repeat:no-repeat;
            background-attachmenct: fixed;
            background-size:cover">

    <style type="text/css">
        * {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}


.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}


.text {
  color: #FFDA03;
  font-size: 15px;
  padding: 8px12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}


.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px12px;
  position: absolute;
  top: 0;
}


.dot {
  height: 15px;
  width: 15px;
  margin: 02px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6 sease;
}

.active {
  background-color: #717171;
}

.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframesfade {
  from {opacity: .4} 
  to {opacity: 1}
}

@mediaonlyscreenand (max-width: 300px) {
  .text {font-size: 11px}
}
    
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

        background-color: grey;
        margin: auto;
        width: 300px;
        padding: 20px;
    }
    .slider {
        width: 500px;
        height: 300px;
        background-color:  #80471C;
        margin-left: auto;
        margin-right: auto;
        margin-top: 0px;
        text-align: center;
        overflow: hidden;
      }
      .image-container {
        width: 1500px;
        background-color: pink;
        height: 300px;
        clear: both;
        position: relative;
        -webkit-transition: left2s;
        -moz-transition: left2s;
        -o-transition: left2s;
        transition: left2s;
      }
      
      .buttons {
        position: relative;
        top: -20px;
      }
      
    </style>

    <div id="box"style=" margin-top: 75px; 
                         margin: 200px auto; 
                         background-image: url('6.png');
                         background-repeat: no-repeat; b
                         ackground-attachmenct: fixed; 
                         background-size:cover">
        
        <form method="post">
            <div class="card mt-4" style=" font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif; m
                        argin: 10px; 
                        color: white; background-color: #80471C;">
                        <center><h4 >Please Log in here!!!</div>

            <input id="text"type="text"name="email"placeholder="Email"><br><br>
            <input id="text"type="password"name="password"placeholder="Password"><br><br>

            <input id="button"style=" font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif;"type="submit"value="Log in" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            
            <a href="reg.php"style="font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif;color: white; font-size:15px">Click to Register</a><br><br>

            
        </form>
    
    </div>
    

</body>
</html>
