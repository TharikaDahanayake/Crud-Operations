<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `crud` where id=$id"; #delete query
    $result=mysqli_query($con,$sql); #to execute the query
    if($result){
        //echo "Deleted Successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}

?>