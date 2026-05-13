<?php
include ("../db/config.php");
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$encode=($password);

$sql_insert="INSERT INTO std_info(std_name,email,password)
          VALUES('$name','$email','$encode')";

          $result=mysqli_query($myconnect,$sql_insert);
          if($result)
          {
            header("location:../view/signup.php");
          }
          else
          {
            echo "new student information anot addeddd";
          }

?>