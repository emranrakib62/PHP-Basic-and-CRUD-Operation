<?php
include ("../db/config.php");
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql_update=" UPDATE std_info SET std_name='$name', email='$email'
WHERE std_id='$id'
";

$result=mysqli_query($myconnect,$sql_update);
if($result)
{
    header("location:../view/view.php");
    
}
else{
    echo "data not updated ";
}



?>