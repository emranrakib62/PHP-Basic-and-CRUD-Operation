<?php

include("../db/config.php");
$sql="SELECT * FROM std_info";
$result=mysqli_query($myconnect,$sql);
echo'<table border="2px" width="100%"> <tr> <th> Student id</th><th>Nme</th>
<th>email</th><th>Pssword</th><th colspan="2"> Action</th></tr>';
while($row=mysqli_fetch_array($result))
{
    $id=$row['std_id'];
    $name=$row['std_name'];
    $email=$row['email'];
    $pass=$row['password'];
    echo'<tr><td>'.$id.'</td><td>'.$name.'</td><td>'.$email.'</td><td>'.$pass.'</td>    
    <td><a href="edit.php ? id='.$id.'">Edit</a></td>
    <td><a href="../model/delete.php ? id='.$id.'"onclick="return window.confirm();">Delete</a></td>
    </tr>';
}

?>