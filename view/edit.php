<?php
$id=$_GET['id'];
include("../db/config.php");
$sql="SELECT * FROM std_info WHERE std_id= '$id'";
$result=mysqli_query($myconnect,$sql);

while($row=mysqli_fetch_array($result))
{
    $id=$row['std_id'];
    $name=$row['std_name'];
    $email=$row['email'];
    $pass=$row['password'];
}
echo '<form method="POST" action="../model/update.php"> 
Student Id: <input type="number" name="id" value='.$id.' readonly><br>
Name: <input type="text" name="name" value='.$name.' ><br>
Email: <input type="text" name="email"value='.$email.' ><br>
Password: <input type="text" name="password" value='.$pass.' ><br>
<input type="submit" value=" Update">


</form>';

?>