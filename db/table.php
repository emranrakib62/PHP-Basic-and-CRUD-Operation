<?php
include ("config.php");
$tbl_sql_std_info="CREATE TABLE IF NOT EXISTS  std_info(
std_id INT (12) auto_increment NOT NULL,
PRIMARY KEY (std_id),
std_name VARCHAR (50) NOT NULL,
email VARCHAR (50) NOT NULL,
password VARCHAR (20) NOT NULL
)";
$create_std_info=mysqli_query($myconnect,$tbl_sql_std_info);
if($create_std_info)
    {
        echo " Student info table created successfull";
    }
    else{
        echo " Student info table not created successfull";
    }

    /// Subject
    $tbl_subl=" CREATE TABLE IF NOT EXISTS subj(
    subj_code VARCHAR (7) NOT NULL,
    PRIMARY KEY (subj_code),
    subj_tittle VARCHAR (50) NOT NULL
    )";

    $create_subj=mysqli_query($myconnect,$tbl_subl);
if($create_subj)
    {
        echo " StuSubject  info table created successfull";
    }
    else{
        echo " StuSubject info table not created successfull";
    }


    // Student Reault
    $tbl_result="CREATE TABLE IF NOT EXISTS result(
     std_id INT (12) NOT NULL,
    subj_code VARCHAR (7) NOT NULL,
    marks INT (3),
     FOREIGN KEY (std_id) REFERENCES std_info (std_id),
     FOREIGN KEY (subj_code) REFERENCES subj (subj_code)
       )";

       $create_result=mysqli_query($myconnect,$tbl_result);
if($create_result)
    {
        echo " Result   table created successfull";
    }
    else{
        echo " Result  table not created successfull";
    }
?>