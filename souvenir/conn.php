<?php
$conn=mysqli_connect("localhost","root","","souvenir");
if($conn){
    echo "db ok";
}
else {
    echo "db failed";
}
?>