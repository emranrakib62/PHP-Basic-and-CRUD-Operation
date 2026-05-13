<?php
$dbhost="localhost";
$dbname="batch60";
$dbuser="root";
$dbpassword="";
$myconnect=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
if($myconnect)
    {
        //echo " connection Successfull";
    }
    else {
        echo mysqli_connect_error();
    }
?>