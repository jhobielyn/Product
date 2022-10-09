<?php

$localhost="localhost";
$username="root";
$password="";
$database="info_man";

if(!$connection=mysqli_connect($localhost,$username,$password,$database))
{

    die("failed to connect!");
}
?>
