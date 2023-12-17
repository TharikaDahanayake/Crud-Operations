<?php


    $sname = "localhost";
    $uname = "root";
    $password= "";
    $dbname = "crudoperation";

    $con = new mysqli('localhost','root','','crudoperation');

    if(!$con){
        die(mysqli_error($con));
        //echo "Connection Successfull";
    }
    
?>
