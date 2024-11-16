<?php

include("connect.php");
session_start();

$sel1 = "SELECT * FROM asigned_courses where user_id = '".$_SESSION["user_id"]."'";
$res1 = mysqli_query($connect , $sel1);

// $rwo1 = mysqli_fetch_assoc($res1);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  

<div >
    <table id="usr_crs" border="1" class="table" style="width: 400px;">
            <tr>
                
                <th>course name</th>
                <th>mark</th>
            </tr>
            <?php
            while($row2 = mysqli_fetch_assoc($res1)){
                 $sel2 = "SELECT * FROM courses WHERE id = '".$row2['course_id']."'";
                 $res2 = mysqli_query($connect , $sel2);
                 while($row3 = mysqli_fetch_assoc($res2)){
            ?>
            <tr>
                <td><?php echo $row3["course_name"];?></td>
                <?php if($row2['mark'] == -1){?>
                <td>---</td>
                <?php } else{?>
                
                <td><?php echo $row2["mark"];?></td>
                <?php }?>
            </tr>
            <?php }}?>
    </table>
</div>
</body>
</html>

<!--  -->