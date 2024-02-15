<?php
 # Database Connection 
 $db_conn = mysqli_connect("localhost", "root", "", "gbg_assessment");

 if(!$db_conn){
    die("connection error");
  }
?>
