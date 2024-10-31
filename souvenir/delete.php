<?php
include('conn.php');
$tid=$_GET['tid'];
$delete=mysqli_query($conn,"DELETE FROM teacher WHERE tid='$tid'");
if($delete){
    header("location:select.php");
}
else{
    echo "failed";
}
?>