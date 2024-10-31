<?php
include('conn.php');
if(isset($_POST['submit'])){
    $tnames=$_POST['tnames'];
    $taddress=$_POST['taddress'];
    $insert=mysqli_query($conn,"INSERT INTO teacher VALUES('','$tnames','$taddress')");
    if($insert){
        header("location:select.php");
    }
    else{
        echo"db not inserted";
    }
}
?>