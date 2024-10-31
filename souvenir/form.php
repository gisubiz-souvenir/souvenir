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
    <form action="insert.php" method="POST">
   tnames:<input type="text" name="tnames"><br><br> 
   taddress:<input type="text" name="taddress"><br><br>
   <button name="submit">submit</button> 
   </form>
</body>
</html>