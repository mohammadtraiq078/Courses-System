<?php

include("connect.php");

// *******************************delete strt*****************************************
if(isset($_POST["userid"])){
    $delete = "DELETE FROM users WHERE id = '".$_POST['userid']."' ";
    $res = mysqli_query($connect , $delete);

    if($res){
        echo "delet_success";
    }
    else{
        echo "delete_fail";
    }
}
// ***********************************delete end****************************************



// ****************************************activate strt**********************************
if(isset($_POST["u_id"])){
    $acti = "UPDATE users SET activated = 1 WHERE id = '".$_POST['u_id']."'";
    $res2 = mysqli_query($connect , $acti);

    if($res2){
        echo "activate_success";
    }
    else{
        echo "activate_fail";
    }
}
// **************************************activate end********************************