<?php
// servername
$servername = "localhost";
//username
$username = "root";
//password
$password = "";
//database
$dbname = "emp";
//columns
$teble = "cc1";
//connection

    $con = mysqli_connect("$servername","$username","","$dbname") ;

    
    if (!$con) {
      
        die("Connection failed: " . mysqli_connect_error());
      
      }
   
        
?>