<?php
include("../db/config.php");
$id=$_GET['id'];
$sql_delete="DELETE FROM std_info WHERE std_id= '$id'";
$result=mysqli_query($myconnect,$sql_delete);
if($result)
{
    header("location:../view/view.php");
}
else{
    echo "data not deleted ";
}

?>