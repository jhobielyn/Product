<?php
$localhost="localhost";
$username="root";
$password="";
$database="group5";
$connection= mysqli_connect($localhost, $username, $password,$database) or die ("My SQL Error");

$query = "select * from bev";
$result = mysqli_query($connection, $query); ?>
<center><table border=1px >
<tr><td><p><a href = del.php style="color: yellow"> Delete Record </a></p></td>
<td><p><a href = ad.php style="color: yellow"> Add Record </a></p></td></tr>
</table></center>



<!DOCTYPE html>
<html>
<head>
    <title>BEVERAGES</title>
</head>
<body style="background-image: url('6.png');background-repeat:no-repeat; background-attachmenct: fixed; background-size:cover">
<form method="post">
<button type="button">Delete</button>
<input location="delete.php" id="button"type="submit"value="DELETE" Style = "border: black;
  color: yellow;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  background-color: #4CAF50;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</form>
  </body>
</html>

<?php
echo "<table border=1px align= center style=width:500px background-color:green>";
echo "<tr><td style=width:53px>";
echo "<center>Delete";
echo "</td>";

echo "<td  style=width:53px>";
echo "<center>ID:";
echo "</td>";

echo "<td  style=width:100px>";
echo "<center>Product Name:";
echo "</td>";

echo "<td  style=width:100px>";
echo "<center>Unit:";
echo "</td>";

echo "<td  style=width:53px>";
echo"<center>Price";
echo "</td></tr>";

while ($row= mysqli_fetch_array($result)){ 
  
    echo "<table border=1px align= center style=width:500px background-color:green>";

    echo "<tr><td style=width:53px>";
    echo "<center><input type=checkbox name= del[] id=del value = $row[id]>";
    echo "</td>";
    
    echo "<td  style=width:53px>";
    echo "<center>";
    echo $row ['id']; 
    echo "</td>";

    echo "<td  style=width:100px>";
    echo $row ['name']; 
    echo "</td>";

    echo "<td  style=width:100px>";
    echo $row ['unit'];
    echo "</td>";

    echo "<td  style=width:53px>";
    echo $row [ 'price']; 
    echo "</td></tr>";
    
    
}
    mysqli_close($connection);
    ?>
  