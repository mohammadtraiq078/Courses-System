<?php

include("connect.php");

// ****************************************update strt********************************
if(isset($_POST["user_nm"])){

    $u1 = $_POST["user_nm"];
    $u2 = $_POST["user_emil"];
    $u3 = $_POST["user_pss"];
    $u4 = $_POST["user_id"];
    $update = "UPDATE users SET username = '$u1' , email = '$u2' , password = '$u3' WHERE id = '$u4'";

    $res03 = mysqli_query($connect , $update);

    if($res03){
        echo "updt_sucess";
    }
    else{
        echo "updt_fail";
    }
}
// ********************************************update end*******************************