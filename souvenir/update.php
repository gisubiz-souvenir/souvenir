<?php
include('conn.php');
$tid=$_GET['tid'];
$select=mysqli_query($conn,"SELECT * FROM teacher WHERE tid='$tid'");
?>
<?php
include('conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <form action="" method="POST">
   tnames:<input type="text" name="tnames" value="<?php echo $row['tnames']?>"><br><br> 
   taddress:<input type="text" name="taddress" value="<?php echo $row['taddress']?>"><br><br>
   <button name="submit">submit</button> 
   </form>
</body>
</html>
<?php
include('conn.php');
if(isset($_POST['submit'])){
    $tnames=$_POST['tnames'];
    $taddress=$_POST['taddress'];
    $update=mysqli_query($conn,"UPDATE teacher SET names='$tnames',taddress='$taddress' WHERE tid='$tid'");
    if($update){
        header("location:select.php");
    }
    else{
        echo"update failed";
    }
}
?>