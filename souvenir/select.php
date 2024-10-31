<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="form.php">addnew</a>
   <table border="2">
    <tr>
        <th>TID</th>
        <th>TNAMES</th>
        <th>TADDRESS</th>
        <th colspan="2">OPERATION</th>
    </tr>
    <?php
    include('conn.php');
    $select=mysqli_query($conn,"SELECT * FROM teacher");
while($row=mysqli_fetch_assoc($select)){
    ?>
    <tr>
        <td><?php echo $row['tid']?></td>
        <td><?php echo $row['tnames']?></td>
        <td><?php echo $row['taddress']?></td>
        <td><a href="delete.php?tid=<?php echo $row['tid']?>">DELETE</a></td>
        <td><a href="update.php?tid=<?php echo $row['tid']?>">UPDATE</a></td>
    </tr>
    <?php
    }
    ?>
    
    

   </table> 
</body>
</html>