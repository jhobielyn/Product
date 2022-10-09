<?php
$localhost="localhost";
$username="root";
$password="";
$database="info_man";
$connection= mysqli_connect($localhost, $username, $password,$database) or die ("My SQL Error");




$id = $_POST['bev'];
$count = count($id);

if ($_POST['justdel']){

    for($i=0; $i<$count; $i++){
        $query = "delete from stud_info where id=$id[$i]";
        $result = mysqli_query($connection, $query); 
    }
}

if($query){

    print "Succesfully deleted!!!";
}
?>
