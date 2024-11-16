
<?php 
 include("connect.php");



 $sel2 = "SELECT * FROM users WHERE activated = 1 AND user_type = 0";
 $res2 = mysqli_query($connect , $sel2);
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
    

                <div id="usrs-sel2">

                <label for="">select user</label><br>
                    <?php if(mysqli_num_rows($res2) > 0){?>
                        <select name="Category" id="sel02">

                        <?php foreach($res2 as $row2){?>
                                <option  value="<?php echo $row2["id"];?>">
                                    
                                
                                    <?php echo $row2["username"]; ?>
                                </option>
                                <?php }}?>

                        </select>
                </div>
            <br>
            
        <br>
        
    </div>

    
        
</body>
</html>

