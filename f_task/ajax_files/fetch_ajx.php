<?php 
 include("connect.php");

 $select = "SELECT * FROM users WHERE user_type = 0";
 $result = mysqli_query($connect , $select);
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
    <div id="table_div">
        <table class="table">
            <tr>
                <td>ID</td>
                <td>UserName</td>
                <td>Delete</td>
                <td>Update</td>
            </tr>
            <?php if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){?>
            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['username']?></td>
                <td><input type="button" value="Delete" class="btn btn-primary" id="<?php echo $row['id']?>"></td>
                <td><input type="button" value="Update" class="btn btn-primary" id="<?php echo $row['id']?>" data-bs-toggle="modal" data-bs-target="#updt-modal"></td>
               
            </tr>
            <?php }}
            else{?>
            <tr>
                <td colspan="4"><center>no users found</center></td>
            </tr>
            <?php }?>
        </table>
    </div>
</body>
</html>